<?php

/**
 * $Id: search.inc.php,v 1.9 2005/08/16 15:39:46 fx2024 Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

function smartfaq_search($queryarray, $andor, $limit, $offset, $userid)
{
    require_once XOOPS_ROOT_PATH . '/modules/smartfaq/include/functions.php';

    $ret = [];

    $faqHandler = sf_gethandler('faq');

    $faqsObj = &$faqHandler->getFaqsFromSearch($queryarray, $andor, $limit, $offset, $userid);

    for ($i = 0, $iMax = count($faqsObj); $i < $iMax; $i++) {
        $ret[$i]['image'] = 'images/smartfaq.gif';

        $ret[$i]['link'] = 'faq.php?faqid=' . $faqsObj[$i]->faqid();

        $ret[$i]['title'] = $faqsObj[$i]->question(50);

        $ret[$i]['time'] = $faqsObj[$i]->getVar('datesub');

        $ret[$i]['uid'] = $faqsObj[$i]->uid();
    }

    return $ret;
}
