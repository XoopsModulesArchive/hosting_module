<?php

/**
 * $Id: faqs_recent.php,v 1.12 2005/08/16 15:39:45 fx2024 Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

function b_faqs_recent_show($options)
{
    require_once XOOPS_ROOT_PATH . '/modules/smartfaq/include/functions.php';

    $myts = MyTextSanitizer::getInstance();

    $smartModule = &sf_getModuleInfo();

    $smartModuleConfig = &sf_getModuleConfig();

    $block = [];

    if (0 == $options[0]) {
        $categoryid = -1;
    } else {
        $categoryid = $options[0];
    }

    $sort = $options[1];

    $limit = $options[2];

    $maxQuestionLength = $options[3];

    // Creating the faq handler object

    $faqHandler = sf_gethandler('faq');

    // Creating the category handler object

    $categoryHandler = sf_gethandler('category');

    // Creating the last FAQs

    $faqsObj = $faqHandler->getAllPublished($limit, 0, $categoryid, $sort);

    $allcategories = $categoryHandler->getObjects(null, true);

    if ($faqsObj) {
        $userids = [];

        foreach ($faqsObj as $key => $thisfaq) {
            $faqids[] = $thisfaq->getVar('faqid');

            $userids[$thisfaq->uid()] = 1;
        }

        $answerHandler = sf_gethandler('answer');

        $allanswers = $answerHandler->getLastPublishedByFaq($faqids);

        foreach ($allanswers as $key => $thisanswer) {
            $userids[$thisanswer->uid()] = 1;
        }

        $memberHandler = xoops_getHandler('member');

        $users = $memberHandler->getUsers(new Criteria('uid', '(' . implode(',', array_keys($userids)) . ')', 'IN'), true);

        for ($i = 0, $iMax = count($faqsObj); $i < $iMax; $i++) {
            $faqs['categoryid'] = $faqsObj[$i]->categoryid();

            $faqs['question'] = $faqsObj[$i]->question($maxQuestionLength);

            $faqs['faqid'] = $faqsObj[$i]->faqid();

            $faqs['categoryname'] = $allcategories[$faqsObj[$i]->categoryid()]->getVar('name');

            // Creating the answer object

            $answerObj = &$allanswers[$faqsObj[$i]->faqid()];

            $faqs['date'] = $faqsObj[$i]->datesub();

            $faqs['poster'] = sf_getLinkedUnameFromId($answerObj->uid(), $smartModuleConfig['userealname'], $users);

            $block['faqs'][] = $faqs;
        }

        $block['lang_question'] = _MB_SF_FAQS;

        $block['lang_category'] = _MB_SF_CATEGORY;

        $block['lang_poster'] = _MB_SF_ANSWEREDBY;

        $block['lang_date'] = _MB_SF_DATE;

        $modulename = htmlspecialchars($smartModule->getVar('name'), ENT_QUOTES | ENT_HTML5);

        $block['lang_visitfaq'] = _MB_SF_VISITFAQ . ' ' . $modulename;
    }

    return $block;
}

function b_faqs_recent_edit($options)
{
    require_once XOOPS_ROOT_PATH . '/modules/smartfaq/include/functions.php';

    $form = sf_createCategorySelect($options[0]);

    $form .= '&nbsp;<br>' . _MB_SF_ORDER . "&nbsp;<select name='options[]'>";

    $form .= "<option value='datesub'";

    if ('datesub' == $options[1]) {
        $form .= " selected='selected'";
    }

    $form .= '>' . _MB_SF_DATE . "</option>\n";

    $form .= "<option value='counter'";

    if ('counter' == $options[1]) {
        $form .= " selected='selected'";
    }

    $form .= '>' . _MB_SF_HITS . "</option>\n";

    $form .= "<option value='weight'";

    if ('weight' == $options[1]) {
        $form .= " selected='selected'";
    }

    $form .= '>' . _MB_SF_WEIGHT . "</option>\n";

    $form .= "</select>\n";

    $form .= '&nbsp;' . _MB_SF_DISP . "&nbsp;<input type='text' name='options[]' value='" . $options[2] . "'>&nbsp;" . _MB_SF_FAQS . '';

    $form .= '&nbsp;<br>' . _MB_SF_CHARS . "&nbsp;<input type='text' name='options[]' value='" . $options[3] . "'>&nbsp;" . _MB_SF_LENGTH . '';

    return $form;
}
