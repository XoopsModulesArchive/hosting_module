<?php

/**
 * $Id: faqs_random_faq.php,v 1.8 2005/08/16 15:39:45 fx2024 Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

function b_faqs_random_faq_show()
{
    require_once XOOPS_ROOT_PATH . '/modules/smartfaq/include/functions.php';

    $block = [];

    // Creating the faq handler object

    $faqHandler = sf_gethandler('faq');

    // creating the FAQ object

    $faqsObj = $faqHandler->getRandomFaq('question', [_SF_STATUS_PUBLISHED, _SF_STATUS_NEW_ANSWER]);

    if ($faqsObj) {
        $block['content'] = $faqsObj->question();

        $block['id'] = $faqsObj->faqid();

        $block['lang_answer'] = _MB_SF_ANSWERHERE;
    }

    return $block;
}
