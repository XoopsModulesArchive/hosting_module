<?php

/**
 * $Id: header.php,v 1.6 2004/11/20 16:52:32 malanciault Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
require_once '../../mainfile.php';

require_once XOOPS_ROOT_PATH . '/modules/smartfaq/include/functions.php';
require_once XOOPS_ROOT_PATH . '/modules/smartfaq/class/category.php';
require_once XOOPS_ROOT_PATH . '/modules/smartfaq/class/faq.php';
require_once XOOPS_ROOT_PATH . '/modules/smartfaq/class/answer.php';

$myts = MyTextSanitizer::getInstance();
