<?php

/**
 * $Id: faqs_context.php,v 1.8 2005/08/16 15:39:45 fx2024 Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

function b_faqs_context_show($options)
{
    require_once XOOPS_ROOT_PATH . '/modules/smartfaq/include/functions.php';

    $block = [];

    if (0 == $options[0]) {
        $categoryid = -1;
    } else {
        $categoryid = $options[0];
    }

    $limit = $options[0];

    // Creating the faq handler object

    $faqHandler = sf_gethandler('faq');

    // creating the FAQ objects that belong to the selected category

    $faqsObj = $faqHandler->getContextualFaqs($limit);

    $totalfaqs = count($faqsObj);

    if ($faqsObj) {
        for ($i = 0; $i < $totalfaqs; $i++) {
            $faq = [];

            $faq['id'] = $faqsObj[$i]->faqid();

            $faq['question'] = $faqsObj[$i]->question();

            $block['faqs'][] = $faq;
        }
    }

    return $block;
}
function b_faqs_context_edit($options)
{
    $form = '' . _MB_SF_DISP . '&nbsp;';

    $form .= "<input type='text' name='options[]' value='" . $options[0] . "'>&nbsp;" . _MB_SF_FAQS . '';

    return $form;
}
