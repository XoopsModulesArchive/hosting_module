<?php

/**
 * $Id: answer.php,v 1.16 2006/09/29 18:49:10 malanciault Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

// Answers status
define('_SF_AN_STATUS_NOTSET', -1);
define('_SF_AN_STATUS_PROPOSED', 0);
define('_SF_AN_STATUS_APPROVED', 1);
define('_SF_AN_STATUS_REJECTED', 2);

// Notification Events
define('_SF_NOT_ANSWER_APPROVED', 3);
define('_SF_NOT_ANSWER_REJECTED', 4);

class sfAnswer extends XoopsObject
{
    /**
     * constructor
     * @param null|mixed $id
     */
    public function __construct($id = null)
    {
        $this->db = XoopsDatabaseFactory::getDatabaseConnection();

        $this->initVar('answerid', XOBJ_DTYPE_INT, null, false);

        $this->initVar('status', XOBJ_DTYPE_INT, -1, false);

        $this->initVar('faqid', XOBJ_DTYPE_INT, null, false);

        $this->initVar('answer', XOBJ_DTYPE_TXTAREA, null, true);

        $this->initVar('uid', XOBJ_DTYPE_INT, 0, false);

        $this->initVar('datesub', XOBJ_DTYPE_INT, null, false);

        $this->initVar('notifypub', XOBJ_DTYPE_INT, 0, false);

        $this->initVar('dohtml', XOBJ_DTYPE_INT, 1, false);

        $this->initVar('doxcode', XOBJ_DTYPE_INT, 1, false);

        $this->initVar('dosmiley', XOBJ_DTYPE_INT, 1, false);

        $this->initVar('doimage', XOBJ_DTYPE_INT, 0, false);

        $this->initVar('dobr', XOBJ_DTYPE_INT, 1, false);

        // for backward compatibility

        if (isset($id)) {
            if (is_array($id)) {
                $this->assignVars($id);
            } else {
                $answerHandler = new sfAnswerHandler($this->db);

                $answer = $answerHandler->get($id);

                foreach ($answer->vars as $k => $v) {
                    $this->assignVar($k, $v['value']);
                }
            }
        }
    }

    public function store($force = true)
    {
        $answerHandler = new sfAnswerHandler($this->db);

        if (_SF_AN_STATUS_APPROVED == $this->status()) {
            $criteria = new CriteriaCompo(new criteria('faqid', $this->faqid()));

            $answerHandler->updateAll('status', _SF_AN_STATUS_REJECTED, $criteria);
        }

        return $answerHandler->insert($this, $force);
    }

    public function answerid()
    {
        return $this->getVar('answerid');
    }

    public function faqid()
    {
        return $this->getVar('faqid');
    }

    public function answer($format = 'S')
    {
        return $this->getVar('answer', $format);
    }

    public function uid()
    {
        return $this->getVar('uid');
    }

    public function datesub($dateFormat = 'none', $format = 'S')
    {
        if ('none' == $dateFormat) {
            $smartModuleConfig = &sf_getModuleConfig();

            $dateFormat = $smartModuleConfig['dateformat'];
        }

        return formatTimestamp($this->getVar('datesub', $format), $dateFormat);
    }

    public function status()
    {
        return $this->getVar('status');
    }

    public function notLoaded()
    {
        return (-1 == $this->getVar('answerid'));
    }

    public function sendNotifications($notifications = [])
    {
        $smartModule = &sf_getModuleInfo();

        $myts = MyTextSanitizer::getInstance();

        $notificationHandler = xoops_getHandler('notification');

        $faqObj = new sfFaq($this->faqid());

        $tags = [];

        $tags['MODULE_NAME'] = $myts->displayTarea($smartModule->getVar('name'));

        $tags['FAQ_NAME'] = $faqObj->question();

        $tags['FAQ_URL'] = XOOPS_URL . '/modules/' . $smartModule->getVar('dirname') . '/faq.php?faqid=' . $faqObj->faqid();

        $tags['CATEGORY_NAME'] = $faqObj->getCategoryName();

        $tags['CATEGORY_URL'] = XOOPS_URL . '/modules/' . $smartModule->getVar('dirname') . '/category.php?categoryid=' . $faqObj->categoryid();

        $tags['FAQ_QUESTION'] = $faqObj->question();

        // TODO : Not sure about the 'formpreview' ...

        $tags['FAQ_ANSWER'] = $this->answer('formpreview');

        $tags['DATESUB'] = $this->datesub();

        foreach ($notifications as $notification) {
            switch ($notification) {
                case _SF_NOT_ANSWER_APPROVED:
                // This notification is not working for PM, but is for email... and I don't understand why???
                $notificationHandler->triggerEvent('faq', $this->answerid(), 'answer_approved', $tags);

                break;
                case -1:
                default:
                break;
            }
        }
    }
}

/**
 * Answers handler class.
 * This class is responsible for providing data access mechanisms to the data source
 * of Answer class objects.
 *
 * @author marcan <marcan@smartfactory.ca>
 */
class sfAnswerHandler extends XoopsObjectHandler
{
    /**
     * create a new answer
     *
     * @param bool $isNew flag the new objects as "new"?
     * @return object sfAnswer
     */
    public function &create($isNew = true)
    {
        $answer = new sfAnswer();

        if ($isNew) {
            $answer->setNew();
        }

        return $answer;
    }

    /**
     * retrieve an answer
     *
     * @param int $id answerid of the answer
     * @return mixed reference to the {@link sfAnswer} object, FALSE if failed
     */
    public function get($id)
    {
        if ((int)$id > 0) {
            $sql = 'SELECT * FROM ' . $this->db->prefix('smartfaq_answers') . ' WHERE answerid=' . $id;

            if (!$result = $this->db->query($sql)) {
                return false;
            }

            $numrows = $this->db->getRowsNum($result);

            if (1 == $numrows) {
                $answer = new sfAnswer();

                $answer->assignVars($this->db->fetchArray($result));

                return $answer;
            }
        }

        return false;
    }

    /**
     * insert a new answer in the database
     *
     * @param \XoopsObject $answerObj
     * @param bool         $force
     * @return bool FALSE if failed, TRUE if already present and unchanged or successful
     */
    public function insert(XoopsObject $answerObj, $force = false)
    {
        if ('sfanswer' != mb_strtolower(get_class($answerObj))) {
            return false;
        }

        if (!$answerObj->isDirty()) {
            return true;
        }

        if (!$answerObj->cleanVars()) {
            return false;
        }

        foreach ($answerObj->cleanVars as $k => $v) {
            ${$k} = $v;
        }

        if ($answerObj->isNew()) {
            $sql = sprintf('INSERT INTO %s (answerid, `status`, faqid, answer, uid, datesub, notifypub) VALUES (NULL, %u, %u, %s, %u, %u, %u)', $this->db->prefix('smartfaq_answers'), $status, $faqid, $this->db->quoteString($answer), $uid, time(), $notifypub);
        } else {
            $sql = sprintf('UPDATE %s SET status = %u, faqid = %s, answer = %s, uid = %u, datesub = %u, notifypub = %u WHERE answerid = %u', $this->db->prefix('smartfaq_answers'), $status, $faqid, $this->db->quoteString($answer), $uid, $datesub, $notifypub, $answerid);
        }

        if (false !== $force) {
            $result = $this->db->queryF($sql);
        } else {
            $result = $this->db->query($sql);
        }

        if (!$result) {
            return false;
        }

        if ($answerObj->isNew()) {
            $answerObj->assignVar('answerid', $this->db->getInsertId());
        } else {
            $answerObj->assignVar('answerid', $answerid);
        }

        return true;
    }

    /**
     * delete an answer from the database
     *
     * @param \XoopsObject $answer reference to the answer to delete
     * @param bool         $force
     * @return bool FALSE if failed.
     */
    public function delete(XoopsObject $answer, $force = false)
    {
        if ('sfanswer' != mb_strtolower(get_class($answer))) {
            return false;
        }

        $sql = sprintf('DELETE FROM %s WHERE answerid = %u', $this->db->prefix('smartfaq_answers'), $answer->getVar('answerid'));

        //echo "<br>" . $sql . "<br>";

        if (false !== $force) {
            $result = $this->db->queryF($sql);
        } else {
            $result = $this->db->query($sql);
        }

        if (!$result) {
            return false;
        }

        return true;
    }

    /**
     * delete an answer from the database
     *
     * @param mixed $faqObj
     * @return bool FALSE if failed.
     */
    public function deleteFaqAnswers($faqObj)
    {
        if ('sffaq' != mb_strtolower(get_class($faqObj))) {
            return false;
        }

        $answers = &$this->getAllAnswers($faqObj->faqid());

        $result = true;

        foreach ($answers as $answer) {
            if (!$this->delete($answer)) {
                $result = false;
            }
        }

        return $result;
    }

    /**
     * retrieve answers from the database
     *
     * @param null $criteria  {@link CriteriaElement} conditions to be met
     * @param bool $id_as_key use the answerid as key for the array?
     * @return array array of {@link sfAnswer} objects
     */
    public function &getObjects($criteria = null, $id_as_key = false)
    {
        $ret = [];

        $limit = $start = 0;

        $sql = 'SELECT * FROM ' . $this->db->prefix('smartfaq_answers');

        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();

            if ('' != $criteria->getSort()) {
                $sql .= ' ORDER BY ' . $criteria->getSort() . ' ' . $criteria->getOrder();
            }

            $limit = $criteria->getLimit();

            $start = $criteria->getStart();
        }

        //echo "<br>" . $sql . "<br>";

        $result = $this->db->query($sql, $limit, $start);

        if (!$result) {
            return $ret;
        }

        while (false !== ($myrow = $this->db->fetchArray($result))) {
            $answer = new sfAnswer();

            $answer->assignVars($myrow);

            if (!$id_as_key) {
                $ret[] = &$answer;
            } else {
                $ret[$myrow['answerid']] = &$answer;
            }

            unset($answer);
        }

        return $ret;
    }

    /**
     * retrieve 1 official answer (for now SmartFAQ only allow 1 official answer...)
     *
     * @param int $faqid
     * @return mixed reference to the {@link sfAnswer} object, FALSE if failed
     */
    public function getOfficialAnswer($faqid = 0)
    {
        $theaAnswers = &$this->getAllAnswers($faqid, _SF_AN_STATUS_APPROVED, 1, 0);

        if (1 == count($theaAnswers)) {
            return $theaAnswers[0];
        }

        return false;
    }

    /**
     * retrieve all answers
     *
     * @param int $faqid
     * @param mixed $status
     * @param mixed $limit
     * @param mixed $start
     * @param mixed $sort
     * @param mixed $order
     * @return array array of {@link sfAnswer} objects
     */
    public function &getAllAnswers($faqid = 0, $status = -1, $limit = 0, $start = 0, $sort = 'datesub', $order = 'DESC')
    {
        $hasStatusCriteria = false;

        $criteriaStatus = new CriteriaCompo();

        if (is_array($status)) {
            $hasStatusCriteria = true;

            foreach ($status as $v) {
                $criteriaStatus->add(new Criteria('status', $v), 'OR');
            }
        } elseif (-1 != $status) {
            $hasStatusCriteria = true;

            $criteriaStatus->add(new Criteria('status', $status), 'OR');
        }

        $criteriaFaqid = new Criteria('faqid', $faqid);

        $criteria = new CriteriaCompo();

        $criteria->add($criteriaFaqid);

        if ($hasStatusCriteria) {
            $criteria->add($criteriaStatus);
        }

        $criteria->setSort($sort);

        $criteria->setOrder($order);

        $criteria->setLimit($limit);

        $criteria->setStart($start);

        $ret = $this->getObjects($criteria);

        return $ret;
    }

    /**
     * count answers matching a condition
     *
     * @param null $criteria {@link CriteriaElement} to match
     * @return int count of answers
     */
    public function getCount($criteria = null)
    {
        $sql = 'SELECT COUNT(*) FROM ' . $this->db->prefix('smartfaq_answers');

        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
        }

        $result = $this->db->query($sql);

        if (!$result) {
            return 0;
        }

        [$count] = $this->db->fetchRow($result);

        return $count;
    }

    /**
     * count answers matching a condition and group by faq ID
     *
     * @param null $criteria {@link CriteriaElement} to match
     * @return array
     */
    public function getCountByFAQ($criteria = null)
    {
        $sql = 'SELECT faqid, COUNT(*) FROM ' . $this->db->prefix('smartfaq_answers');

        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();

            $sql .= ' ' . $criteria->getGroupby();
        }

        //echo "<br>$sql<br>";

        $result = $this->db->query($sql);

        if (!$result) {
            return [];
        }

        $ret = [];

        while (list($id, $count) = $this->db->fetchRow($result)) {
            $ret[$id] = $count;
        }

        return $ret;
    }

    /**
     * delete answers matching a set of conditions
     *
     * @param null $criteria {@link CriteriaElement}
     * @return bool FALSE if deletion failed
     */
    public function deleteAll($criteria = null)
    {
        $sql = 'DELETE FROM ' . $this->db->prefix('smartfaq_answers');

        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
        }

        if (!$this->db->query($sql)) {
            return false;
        }

        return true;
    }

    /**
     * Change a value for answers with a certain criteria
     *
     * @param string $fieldname  Name of the field
     * @param string $fieldvalue Value to write
     * @param null   $criteria   {@link CriteriaElement}
     *
     * @return  bool
     */
    public function updateAll($fieldname, $fieldvalue, $criteria = null)
    {
        $set_clause = is_numeric($fieldvalue) ? $fieldname . ' = ' . $fieldvalue : $fieldname . ' = ' . $this->db->quoteString($fieldvalue);

        $sql = 'UPDATE ' . $this->db->prefix('smartfaq_answers') . ' SET ' . $set_clause;

        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
        }

        //echo "<br>" . $sql . "<br>";

        if (!$this->db->queryF($sql)) {
            return false;
        }

        return true;
    }

    public function getLastPublishedByFaq($faqids)
    {
        $ret = [];

        $sql = 'SELECT faqid, answer, uid, datesub FROM ' . $this->db->prefix('smartfaq_answers') . '
	           WHERE faqid IN (' . implode(',', $faqids) . ') AND status = ' . _SF_AN_STATUS_APPROVED . ' GROUP BY faqid';

        $result = $this->db->query($sql);

        if (!$result) {
            return $ret;
        }

        while (false !== ($row = $this->db->fetchArray($result))) {
            $answer = new sfAnswer();

            $answer->assignVars($row);

            $ret[$row['faqid']] = &$answer;

            unset($answer);
        }

        return $ret;
    }
}
