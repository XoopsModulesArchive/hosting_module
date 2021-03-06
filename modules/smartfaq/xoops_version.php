<?php

/**
 * $Id: xoops_version.php,v 1.52 2006/09/29 18:49:10 malanciault Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

$modversion['name'] = _MI_SF_MD_NAME;
$modversion['version'] = 1.08;
$modversion['description'] = _MI_SF_MD_DESC;
$modversion['author'] = 'The SmartFactory [www.smartfactory.ca]';
$modversion['credits'] = 'w4z004, hsalazar, Carnuke, Mariuss, Mithrandir, phppp, Predator, GIJOE, outch, rowdie, Xvitry, Xavier & Catzwolf';
$modversion['help'] = '';
$modversion['license'] = 'GNU General Public License (GPL)';
$modversion['official'] = 0;
$modversion['image'] = 'images/module_logo.gif';
$modversion['dirname'] = 'smartfaq';

// Added by marcan for the About page in admin section
$modversion['developer_lead'] = 'marcan [Marc-André Lanciault]';
$modversion['developer_contributor'] = 'w4z004, hsalazar, Carnuke, Mariuss, Mithrandir, phppp, Predator, GIJOE, outch, rowdie, Xvitry, Xavier & Catzwolf';
$modversion['developer_website_url'] = 'http://www.smartfactory.ca';
$modversion['developer_website_name'] = 'SmartFactory.ca';
$modversion['developer_email'] = 'marcan@smartfactory';
$modversion['status_version'] = 'Final';
$modversion['status'] = 'Final';
$modversion['date'] = '2007-01-19';

$modversion['warning'] = _MI_SF_WARNING_FINAL;

$modversion['demo_site_url'] = 'http://demo.smartfactory.ca';
$modversion['demo_site_name'] = _MI_SF_DEMO_SITE;
$modversion['support_site_url'] = 'http://www.smartfactory.ca';
$modversion['support_site_name'] = 'SmartFactory.ca';
$modversion['submit_bug'] = 'http://dev.xoops.org/modules/xfmod/tracker/?func=add&group_id=1026&atid=205';
$modversion['submit_feature'] = 'http://dev.xoops.org/modules/xfmod/tracker/?func=add&group_id=1026&atid=208';

$modversion['author_word'] = "
<B>SmartFAQ</B> is the result of multiple ideas from multiple people and a work of outstanding
collaboration. It all began with Herko talking to me about a 'contextual help system' for XOOPS,
inspired by the one on the Developers Forge. I found that idea more than brilliant, so I decided
to start coding the thing !
<BR><BR>As I was new in the developers world, I had to look for quality ideas that had already been
established and represented the best in Xoops programming. I chose the Soapbox module by hsalazar
(Horacio Salazar) which I had found absolutely amazing ! So, many thanks to Horacio, as his work offered
considerable inspiration. I would also like to thank him for helping me establish the workflow of
the SmartFAQ module, as well as for helping me in all the development process.
<BR><BR>When about half the coding was done, I met a special Xoopser who would become an important
player in this project : w4z004 (Sergio Kohl). Many thanks to you w4z004, as you multiplied many
times the possibilities and potential of this module. By testing it over and over again, by
submitting the code to be checked by security experts and other advanced developers, by suggesting
more features, by encouraging me when things were not going the way I wanted and by doing a thousand
other things for this project. Thank you, thank you, thank you !
<BR><BR>Special thanks also to Mithrandir (Jan Pedersen) for all the 'little' answers to my 'little'
questions (lol). You made my life so much easier by helping me see things more clearly !
<BR><BR>I would also like to thank Mariuss (Marius Scurtescu) for adapting <B>FAQ for New Xoopsers
</B> for SmartFAQ, for developing the import scripts, for teaching me the CVS (lol) as well as for
suggesting a lot of interesting improvements along the way.
<BR><BR>Another special thank-you to Carnuke (Richard Strauss) for writing such impressive
documentation for this module. You have now set up a new quality standard for XOOPS module
documentation. I'm confident that all the Xoopsers of the world are gratefull for this :-) !
<BR><BR>Finally, thanks to all the people who made this module possible : Herko, phppp, Solo71,
Yoyo2021, Christian, Hervé and so many others ! Also, a final thank to Zabou who has been
really understanding during all the hours I spent behind my laptop developing SmartFAQ.
<BR><BR>So I guess this is it, I could thank the Academy, my Mother and Father but that would be
pushing it I think ! (lol)
<BR><BR>Enjoy <b>SmartFAQ</b> !
";

$modversion['version_history'] = "<br>
=> Version 1.04 Final (Release Date : 2005-01-12)<br>
================================================<br>
<br>
- 1.04 RC 2 was considered stable<br>
<br>
=> Version 1.04 RC 2 (Release Date : 2005-01-11)<br>
================================================<br>
<br>
- A fatal error was found in xoops_version that prevented a fresh install of the module. Thanks to Xavier !<br>
- Enable HTML tags - not working #bug 1645 was fixed, thanks to Marius<br>
- When an admin submit a Q&A from the user side, it is now automatically published<br>
<br>
=> Version 1.04 RC 1 (Release Date : 2005-01-10)<br>
================================================<br>
<br>
- A preview function has been added when Submitting a Q&A from the user side<br>
- In the FAQ template, the question has a link to the same page. This has been fixed<br>
- When no Opened Questions exists or the user don't have access to any Open Questions, he does not see the Open Question link anymore<br>
- A new config option has been added to allow or not the submission of new answer for already published FAQ<br>
- The 'New answer' icon at the bottom of an FAQ is not displayed anymore when the user does not have the right to submit new answer<br>
- A bug was fixed regarding the get_class function used in the SmartFAQ's classes (thanks to BigDDave)<br>
- When Anonymous was requesting a question it was still displayed 'Requested by Admin'. This has been fixed<br>
- HTML entities not escaped were fixed (bug #1646) thanks to Marius<br>
- Setting a block to display question from a specific category was not working. It has been fixed<br>
<br>
=> Version 1.04 Beta 1 (Release Date : 2004-12-30)<br>
==================================================<br>
<br>
- Layout and efficiency improvments in the template<br>
- Add a config option to display or not the last Q&As in the index page<br>
- Add a config option to display or not the top categories description<br>
- Add a config option to display or not the sub-categories in the index page<br>
- Add a block for Most Viewed Q&As<br>
- All form now uses templates<br>
<br>
=> Version 1.03 Final (Release Date : 2004-12-17)<br>
==================================================<br>
<br>
- 1.03 Beta 2 was considered stable<br>
<br>
=> Version 1.03 Beta 2 (Release Date : 2004-12-13)<br>
==================================================<br>
<br>
- Error fixed when admin answers an Asked question<br>
- Characters problem fix when merging answers<br>
<br>
=> Version 1.03 Beta 1 (Release Date : 2004-12-12)<br>
==================================================<br>
<br>
- When a user Requests a Q&A, the moderator can now answer this question and publish it aftwerwards. The question does not transit by the Open Question section.<br>
- When a new answer is submited for a Published Q&A, the moderator can now edit the answer before approving it, as well as merge the new answer with the original one and then edit this new answer.<br>
- The form to submit a new answer now displays the original answer of the Q&A.<br>
- When merging a new answer, the name of the poster is now inlcuded in the text as : 'Contribution by...'<br>
- When moderating questions or Q&A's, the name of the poster was changed for the name of the moderator. This has been fixed.<br>
<br>
=> Version 1.02 Final (Release Date : 2004-11-20)<br>
=================================================<br>
<br>
- A lot of tiny bugs have been corrected.<br>
- When editing a category, the list of Q&A's within that category is displayed after the form.<br>
<br>
=> Version 1.02 RC 1 (Release Date : 2004-10-12)<br>
================================================<br>
<br>
- Addition of a config option to display or not the 'Hits' column in Summary display type<br>
- Addition of a config option to display or not the 'Published on' column in Summary display type<br>
- Addition of a config option to configure the size of the question as a title in the Q&A page<br>
<br>
=> Version 1.02 Beta 1 (Release Date : 2004-10-10)<br>
==================================================<br>
<br>
- Addition of a config option to let the admin display or not the last Q&A for each categories<br>
- Addition of a config option to set the size of the last Q&A for each category<br>
- Addition of a config option to let the admin display or not the sub-categories description<br>
- Correction of some undefined offset on index, request and category page<br>
- Fix of the french translation<br>
<br>
=> Version 1.01 Beta 2 (Release Date : 2004-10-08)<br>
==================================================<br>
<br>
- Rewrite of a great part of the code to dramatically reduce the queries count (Thank you so much Mithrandir !!!!)<br>
- Addition of the Version History in the About page
";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';
// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// Tables created by sql file (without prefix!)
$modversion['tables'][0] = 'smartfaq_categories';
$modversion['tables'][1] = 'smartfaq_faq';
$modversion['tables'][2] = 'smartfaq_answers';
//$modversion['tables'][3] = "smartfaq_moderators";
// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'smartfaq_search';
// Menu
$modversion['hasMain'] = 1;

$modversion['onInstall'] = 'include/onupdate.inc.php';
$modversion['onUpdate'] = 'include/onupdate.inc.php';

global $xoopsModule;

if (isset($xoopsModule) && is_object($xoopsModule) && $xoopsModule->getVar('dirname') == $modversion['dirname']) {
    global $xoopsModuleConfig, $xoopsUser;

    $isAdmin = false;

    if (!empty($xoopsUser) && is_object($xoopsModule)) {
        $isAdmin = ($xoopsUser->isAdmin($xoopsModule->getVar('mid')));
    }

    if ($smartModule = &$xoopsModule) {
        $smartConfig = $xoopsModuleConfig;

        // Add the Submit new faq button

        if ($isAdmin || (isset($smartConfig['allowsubmit']) && 1 == $smartConfig['allowsubmit'] && (is_object($xoopsUser) || (isset($smartConfig['anonpost']) && 1 == $smartConfig['anonpost'])))) {
            $modversion['sub'][1]['name'] = _MI_SF_SUB_SMNAME1;

            $modversion['sub'][1]['url'] = 'submit.php?op=add';
        }

        // Add the Request new faq

        if ($isAdmin || (isset($smartConfig['allowrequest']) && 1 == $smartConfig['allowrequest'] && (is_object($xoopsUser) || (isset($smartConfig['anonpost']) && 1 == $smartConfig['anonpost'])))) {
            $modversion['sub'][2]['name'] = _MI_SF_SUB_SMNAME2;

            $modversion['sub'][2]['url'] = 'request.php?op=add';
        }

        require_once XOOPS_ROOT_PATH . '/modules/smartfaq/include/functions.php';

        // Creating the FAQ handler object

        $faqHandler = sf_gethandler('faq');

        if ($faqHandler->getFaqsCount(-1, _SF_STATUS_OPENED) > 0) {
            $modversion['sub'][3]['name'] = _MI_SF_SUB_SMNAME3;

            $modversion['sub'][3]['url'] = 'open_index.php';
        }
    }
}

$modversion['blocks'][1]['file'] = 'faqs_new.php';
$modversion['blocks'][1]['name'] = _MI_SF_ARTSNEW;
$modversion['blocks'][1]['description'] = 'Shows new faqs';
$modversion['blocks'][1]['show_func'] = 'b_faqs_new_show';
$modversion['blocks'][1]['edit_func'] = 'b_faqs_new_edit';
$modversion['blocks'][1]['options'] = '0|datesub|5|65|1';
$modversion['blocks'][1]['template'] = 'faqs_new.html';

$modversion['blocks'][2]['file'] = 'faqs_recent.php';
$modversion['blocks'][2]['name'] = _MI_SF_RECENTFAQS;
$modversion['blocks'][2]['description'] = 'Shows recent faqs';
$modversion['blocks'][2]['show_func'] = 'b_faqs_recent_show';
$modversion['blocks'][2]['edit_func'] = 'b_faqs_recent_edit';
$modversion['blocks'][2]['options'] = '0|datesub|5|65';
$modversion['blocks'][2]['template'] = 'faqs_recent.html';

$modversion['blocks'][3]['file'] = 'faqs_context.php';
$modversion['blocks'][3]['name'] = _MI_SF_ARTSCONTEXT;
$modversion['blocks'][3]['description'] = 'Shows contextual faqs';
$modversion['blocks'][3]['show_func'] = 'b_faqs_context_show';
$modversion['blocks'][3]['edit_func'] = 'b_faqs_context_edit';
$modversion['blocks'][3]['options'] = '5';
$modversion['blocks'][3]['template'] = 'faqs_context.html';

$modversion['blocks'][4]['file'] = 'faqs_random_how.php';
$modversion['blocks'][4]['name'] = _MI_SF_ARTSRANDOM_HOW;
$modversion['blocks'][4]['description'] = "Shows a random 'How do I' faq";
$modversion['blocks'][4]['show_func'] = 'b_faqs_random_how_show';
$modversion['blocks'][4]['template'] = 'faqs_random_how.html';

$modversion['blocks'][5]['file'] = 'faqs_random_diduno.php';
$modversion['blocks'][5]['name'] = _MI_SF_ARTSRANDOM_DIDUNO;
$modversion['blocks'][5]['description'] = "Shows a random 'Did You Know' faq";
$modversion['blocks'][5]['show_func'] = 'b_faqs_random_diduno_show';
$modversion['blocks'][5]['template'] = 'faqs_random_diduno.html';

$modversion['blocks'][6]['file'] = 'faqs_random_faq.php';
$modversion['blocks'][6]['name'] = _MI_SF_ARTSRANDOM_FAQ;
$modversion['blocks'][6]['description'] = "Shows a random 'faq' faq";
$modversion['blocks'][6]['show_func'] = 'b_faqs_random_faq_show';
$modversion['blocks'][6]['template'] = 'faqs_random_faq.html';

$modversion['blocks'][7]['file'] = 'faqs_recent_questions.php';
$modversion['blocks'][7]['name'] = _MI_SF_RECENT_QUESTIONS;
$modversion['blocks'][7]['description'] = 'Shows recent questions';
$modversion['blocks'][7]['show_func'] = 'b_faqs_recent_questions_show';
$modversion['blocks'][7]['edit_func'] = 'b_faqs_recent_questions_edit';
$modversion['blocks'][7]['options'] = '0|datesub|5|65|1';
$modversion['blocks'][7]['template'] = 'faqs_recent_questions.html';

$modversion['blocks'][8]['file'] = 'faqs_most_viewed.php';
$modversion['blocks'][8]['name'] = _MI_SF_MOST_VIEWED;
$modversion['blocks'][8]['description'] = 'Shows most viewed Q&A';
$modversion['blocks'][8]['show_func'] = 'b_faqs_most_viewed_show';
$modversion['blocks'][8]['edit_func'] = 'b_faqs_most_viewed_edit';
$modversion['blocks'][8]['options'] = '0|5|65';
$modversion['blocks'][8]['template'] = 'faqs_most_viewed.html';

// Templates
$modversion['templates'][1]['file'] = 'smartfaq_singlefaq.html';
$modversion['templates'][1]['description'] = 'Display a single FAQ';

$modversion['templates'][2]['file'] = 'smartfaq_lastfaqs.html';
$modversion['templates'][2]['description'] = 'Display the last faqs';

$modversion['templates'][3]['file'] = 'smartfaq_category.html';
$modversion['templates'][3]['description'] = 'Display a category';

$modversion['templates'][4]['file'] = 'smartfaq_index.html';
$modversion['templates'][4]['description'] = 'Display index';

$modversion['templates'][5]['file'] = 'smartfaq_faq.html';
$modversion['templates'][5]['description'] = 'Display faq';

$modversion['templates'][6]['file'] = 'smartfaq_submit.html';
$modversion['templates'][6]['description'] = 'Form to submit request or answer a question';

// Config Settings (only for modules that need config settings generated automatically)
$modversion['config'][1]['name'] = 'allowsubmit';
$modversion['config'][1]['title'] = '_MI_SF_ALLOWSUBMIT';
$modversion['config'][1]['description'] = '_MI_SF_ALLOWSUBMITDSC';
$modversion['config'][1]['formtype'] = 'yesno';
$modversion['config'][1]['valuetype'] = 'int';
$modversion['config'][1]['default'] = 1;

$modversion['config'][2]['name'] = 'allowrequest';
$modversion['config'][2]['title'] = '_MI_SF_ALLOWREQUEST';
$modversion['config'][2]['description'] = '_MI_SF_ALLOWREQUESTDSC';
$modversion['config'][2]['formtype'] = 'yesno';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = 1;

$modversion['config'][3]['name'] = 'allownewanswer';
$modversion['config'][3]['title'] = '_MI_SF_NEWANSWER';
$modversion['config'][3]['description'] = '_MI_SF_NEWANSWERDSC';
$modversion['config'][3]['formtype'] = 'yesno';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 1;

$modversion['config'][4]['name'] = 'anonpost';
$modversion['config'][4]['title'] = '_MI_SF_ANONPOST';
$modversion['config'][4]['description'] = '_MI_SF_ANONPOSTDSC';
$modversion['config'][4]['formtype'] = 'yesno';
$modversion['config'][4]['valuetype'] = 'int';
$modversion['config'][4]['default'] = 0;

$memberHandler = xoops_getHandler('member');
$groups = $memberHandler->getGroupList();

$modversion['config'][5]['name'] = 'dateformat';
$modversion['config'][5]['title'] = '_MI_SF_DATEFORMAT';
$modversion['config'][5]['description'] = '_MI_SF_DATEFORMATDSC';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = 'd-M-Y H:i';

$modversion['config'][6]['name'] = 'displaycollaps';
$modversion['config'][6]['title'] = '_MI_SF_DISPLAY_COLLAPS';
$modversion['config'][6]['description'] = '_MI_SF_DISPLAY_COLLAPSDSC';
$modversion['config'][6]['formtype'] = 'yesno';
$modversion['config'][6]['valuetype'] = 'int';
$modversion['config'][6]['default'] = 1;

$modversion['config'][7]['name'] = 'displaylastfaqs';
$modversion['config'][7]['title'] = '_MI_SF_DISPLAY_LAST_FAQS';
$modversion['config'][7]['description'] = '_MI_SF_DISPLAY_LAST_FAQSDSC';
$modversion['config'][7]['formtype'] = 'yesno';
$modversion['config'][7]['valuetype'] = 'int';
$modversion['config'][7]['default'] = 1;

$modversion['config'][8]['name'] = 'displaytype';
$modversion['config'][8]['title'] = '_MI_SF_DISPLAYTYPE';
$modversion['config'][8]['description'] = '_MI_SF_DISPLAYTYPEDSC';
$modversion['config'][8]['formtype'] = 'select';
$modversion['config'][8]['valuetype'] = 'text';
$modversion['config'][8]['options'] = [_MI_SF_DISPLAYTYPE_SUMMARY => 'summary', _MI_SF_DISPLAYTYPE_FULL => 'full'];
$modversion['config'][8]['default'] = 'full';

$modversion['config'][9]['name'] = 'displaylastfaq';
$modversion['config'][9]['title'] = '_MI_SF_DISPLAY_LAST_FAQ';
$modversion['config'][9]['description'] = '_MI_SF_DISPLAY_LAST_FAQDSC';
$modversion['config'][9]['formtype'] = 'yesno';
$modversion['config'][9]['valuetype'] = 'int';
$modversion['config'][9]['default'] = 1;

$modversion['config'][10]['name'] = 'lastfaqsize';
$modversion['config'][10]['title'] = '_MI_SF_LAST_FAQ_SIZE';
$modversion['config'][10]['description'] = '_MI_SF_LAST_FAQ_SIZEDSC';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'text';
$modversion['config'][10]['default'] = '50';

$modversion['config'][11]['name'] = 'questionsize';
$modversion['config'][11]['title'] = '_MI_SF_QUESTION_SIZE';
$modversion['config'][11]['description'] = '_MI_SF_QUESTION_SIZEDSC';
$modversion['config'][11]['formtype'] = 'textbox';
$modversion['config'][11]['valuetype'] = 'text';
$modversion['config'][11]['default'] = '60';

$modversion['config'][12]['name'] = 'displaytopcatdsc';
$modversion['config'][12]['title'] = '_MI_SF_DISPLAY_TOPCAT_DSC';
$modversion['config'][12]['description'] = '_MI_SF_DISPLAY_TOPCAT_DSCDSC';
$modversion['config'][12]['formtype'] = 'yesno';
$modversion['config'][12]['valuetype'] = 'int';
$modversion['config'][12]['default'] = 1;

$modversion['config'][13]['name'] = 'displaysubcatonindex';
$modversion['config'][13]['title'] = '_MI_SF_DISPLAY_SUBCAT_INDEX';
$modversion['config'][13]['description'] = '_MI_SF_DISPLAY_SUBCAT_INDEXDSC';
$modversion['config'][13]['formtype'] = 'yesno';
$modversion['config'][13]['valuetype'] = 'int';
$modversion['config'][13]['default'] = 1;

$modversion['config'][14]['name'] = 'displaysubcatdsc';
$modversion['config'][14]['title'] = '_MI_SF_DISPLAY_SBCAT_DSC';
$modversion['config'][14]['description'] = '_MI_SF_DISPLAY_SBCAT_DSCDSC';
$modversion['config'][14]['formtype'] = 'yesno';
$modversion['config'][14]['valuetype'] = 'int';
$modversion['config'][14]['default'] = 1;

$modversion['config'][15]['name'] = 'orderbydate';
$modversion['config'][15]['title'] = '_MI_SF_ORDERBYDATE';
$modversion['config'][15]['description'] = '_MI_SF_ORDERBYDATEDSC';
$modversion['config'][15]['formtype'] = 'yesno';
$modversion['config'][15]['valuetype'] = 'int';
$modversion['config'][15]['default'] = 0;

$modversion['config'][16]['name'] = 'display_date_col';
$modversion['config'][16]['title'] = '_MI_SF_DISPLAY_DATE_COL';
$modversion['config'][16]['description'] = '_MI_SF_DISPLAY_DATE_COLDSC';
$modversion['config'][16]['formtype'] = 'yesno';
$modversion['config'][16]['valuetype'] = 'int';
$modversion['config'][16]['default'] = 1;

$modversion['config'][17]['name'] = 'display_hits_col';
$modversion['config'][17]['title'] = '_MI_SF_DISPLAY_HITS_COL';
$modversion['config'][17]['description'] = '_MI_SF_DISPLAY_HITS_COLDSC';
$modversion['config'][17]['formtype'] = 'yesno';
$modversion['config'][17]['valuetype'] = 'int';
$modversion['config'][17]['default'] = 1;

$modversion['config'][18]['name'] = 'useimagenavpage';
$modversion['config'][18]['title'] = '_MI_SF_USEIMAGENAVPAGE';
$modversion['config'][18]['description'] = '_MI_SF_USEIMAGENAVPAGEDSC';
$modversion['config'][18]['formtype'] = 'yesno';
$modversion['config'][18]['valuetype'] = 'int';
$modversion['config'][18]['default'] = 0;

$modversion['config'][19]['name'] = 'globaldisplaycomments';
$modversion['config'][19]['title'] = '_MI_SF_ALLOWCOMMENTS';
$modversion['config'][19]['description'] = '_MI_SF_ALLOWCOMMENTSDSC';
$modversion['config'][19]['formtype'] = 'yesno';
$modversion['config'][19]['valuetype'] = 'int';
$modversion['config'][19]['default'] = 1;

$modversion['config'][20]['name'] = 'adminhits';
$modversion['config'][20]['title'] = '_MI_SF_ALLOWADMINHITS';
$modversion['config'][20]['description'] = '_MI_SF_ALLOWADMINHITSDSC';
$modversion['config'][20]['formtype'] = 'yesno';
$modversion['config'][20]['valuetype'] = 'int';
$modversion['config'][20]['default'] = 0;

$modversion['config'][21]['name'] = 'autoapprove_submitted_faq';
$modversion['config'][21]['title'] = '_MI_SF_AUTOAPPROVE_SUB_FAQ';
$modversion['config'][21]['description'] = '_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC';
$modversion['config'][21]['formtype'] = 'yesno';
$modversion['config'][21]['valuetype'] = 'int';
$modversion['config'][21]['default'] = 0;

$modversion['config'][22]['name'] = 'autoapprove_request';
$modversion['config'][22]['title'] = '_MI_SF_AUTOAPPROVE_REQUEST';
$modversion['config'][22]['description'] = '_MI_SF_AUTOAPPROVE_REQUEST_DSC';
$modversion['config'][22]['formtype'] = 'yesno';
$modversion['config'][22]['valuetype'] = 'int';
$modversion['config'][22]['default'] = 0;

$modversion['config'][23]['name'] = 'autoapprove_answer';
$modversion['config'][23]['title'] = '_MI_SF_AUTOAPPROVE_ANS';
$modversion['config'][23]['description'] = '_MI_SF_AUTOAPPROVE_ANS_DSC';
$modversion['config'][23]['formtype'] = 'yesno';
$modversion['config'][23]['valuetype'] = 'int';
$modversion['config'][23]['default'] = 0;

$modversion['config'][24]['name'] = 'autoapprove_answer_new';
$modversion['config'][24]['title'] = '_MI_SF_AUTOAPPROVE_ANS_NEW';
$modversion['config'][24]['description'] = '_MI_SF_AUTOAPPROVE_ANS_NEW_DSC';
$modversion['config'][24]['formtype'] = 'yesno';
$modversion['config'][24]['valuetype'] = 'int';
$modversion['config'][24]['default'] = 0;

$modversion['config'][25]['name'] = 'catperpage';
$modversion['config'][25]['title'] = '_MI_SF_CATPERPAGE';
$modversion['config'][25]['description'] = '_MI_SF_CATPERPAGEDSC';
$modversion['config'][25]['formtype'] = 'select';
$modversion['config'][25]['valuetype'] = 'int';
$modversion['config'][25]['default'] = 5;
$modversion['config'][25]['options'] = ['5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50];

$modversion['config'][26]['name'] = 'perpage';
$modversion['config'][26]['title'] = '_MI_SF_PERPAGE';
$modversion['config'][26]['description'] = '_MI_SF_PERPAGEDSC';
$modversion['config'][26]['formtype'] = 'select';
$modversion['config'][26]['valuetype'] = 'int';
$modversion['config'][26]['default'] = 5;
$modversion['config'][26]['options'] = ['5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50];

$modversion['config'][27]['name'] = 'indexperpage';
$modversion['config'][27]['title'] = '_MI_SF_PERPAGEINDEX';
$modversion['config'][27]['description'] = '_MI_SF_PERPAGEINDEXDSC';
$modversion['config'][27]['formtype'] = 'select';
$modversion['config'][27]['valuetype'] = 'int';
$modversion['config'][27]['default'] = 5;
$modversion['config'][27]['options'] = ['5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50];

$modversion['config'][28]['name'] = 'indexwelcomemsg';
$modversion['config'][28]['title'] = '_MI_SF_INDEXWELCOMEMSG';
$modversion['config'][28]['description'] = '_MI_SF_INDEXWELCOMEMSGDSC';
$modversion['config'][28]['formtype'] = 'textarea';
$modversion['config'][28]['valuetype'] = 'text';
$modversion['config'][28]['default'] = _MI_SF_INDEXWELCOMEMSGDEF;

$modversion['config'][29]['name'] = 'requestintromsg';
$modversion['config'][29]['title'] = '_MI_SF_REQUESTINTROMSG';
$modversion['config'][29]['description'] = '_MI_SF_REQUESTINTROMSGDSC';
$modversion['config'][29]['formtype'] = 'textarea';
$modversion['config'][29]['valuetype'] = 'text';
$modversion['config'][29]['default'] = _MI_SF_REQUESTINTROMSGDEF;

$modversion['config'][30]['name'] = 'openquestionintromsg';
$modversion['config'][30]['title'] = '_MI_SF_OPENINTROMSG';
$modversion['config'][30]['description'] = '_MI_SF_OPENINTROMSGDSC';
$modversion['config'][30]['formtype'] = 'textarea';
$modversion['config'][30]['valuetype'] = 'text';
$modversion['config'][30]['default'] = _MI_SF_OPENINTROMSGDEF;

$modversion['config'][31]['name'] = 'userealname';
$modversion['config'][31]['title'] = '_MI_SF_USEREALNAME';
$modversion['config'][31]['description'] = '_MI_SF_USEREALNAMEDSC';
$modversion['config'][31]['formtype'] = 'yesno';
$modversion['config'][31]['valuetype'] = 'int';
$modversion['config'][31]['default'] = 0;

/*$modversion['config'][19]['name'] = 'moderatorsedit';
$modversion['config'][19]['title'] = '_MI_SF_MODERATORSEDIT';
$modversion['config'][19]['description'] = '_MI_SF_MODERATORSEDITDSC';
$modversion['config'][19]['formtype'] = 'yesno';
$modversion['config'][19]['valuetype'] = 'int';
$modversion['config'][19]['default'] = 0;*/

$modversion['config'][32]['name'] = 'helppath_select';
$modversion['config'][32]['title'] = '_MI_SF_HELP_PATH_SELECT';
$modversion['config'][32]['description'] = '_MI_SF_HELP_PATH_SELECT_DSC';
$modversion['config'][32]['formtype'] = 'select';
$modversion['config'][32]['valuetype'] = 'text';
$modversion['config'][32]['options'] = ['docs.xoops.org' => 'docs.xoops.org', _MI_SF_HELP_INSIDE => 'inside', _MI_SF_HELP_CUSTOM => 'custom'];
$modversion['config'][32]['default'] = 'docs.xoops.org';

$modversion['config'][33]['name'] = 'helppath_custom';
$modversion['config'][33]['title'] = '_MI_SF_HELP_PATH_CUSTOM';
$modversion['config'][33]['description'] = '_MI_SF_HELP_PATH_CUSTOM_DSC';
$modversion['config'][33]['formtype'] = 'textbox';
$modversion['config'][33]['valuetype'] = 'text';
$modversion['config'][33]['default'] = '';

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'faqid';
$modversion['comments']['pageName'] = 'faq.php';
// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'smartfaq_com_approve';
$modversion['comments']['callback']['update'] = 'smartfaq_com_update';
// Notification
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'smartfaq_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'global_faq';
$modversion['notification']['category'][1]['title'] = _MI_SF_GLOBAL_FAQ_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_SF_GLOBAL_FAQ_NOTIFY_DSC;
$modversion['notification']['category'][1]['subscribe_from'] = ['index.php', 'category.php', 'faq.php'];

$modversion['notification']['category'][2]['name'] = 'category_faq';
$modversion['notification']['category'][2]['title'] = _MI_SF_CATEGORY_FAQ_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_SF_CATEGORY_FAQ_NOTIFY_DSC;
$modversion['notification']['category'][2]['subscribe_from'] = ['index.php', 'category.php', 'faq.php'];
$modversion['notification']['category'][2]['item_name'] = 'categoryid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'faq';
$modversion['notification']['category'][3]['title'] = _MI_SF_FAQ_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_SF_FAQ_NOTIFY_DSC;
$modversion['notification']['category'][3]['subscribe_from'] = ['faq.php'];
$modversion['notification']['category'][3]['item_name'] = 'faqid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['category'][4]['name'] = 'global_question';
$modversion['notification']['category'][4]['title'] = _MI_SF_GLOBAL_QUESTION_NOTIFY;
$modversion['notification']['category'][4]['description'] = _MI_SF_GLOBAL_QUESTION_NOTIFY_DSC;
$modversion['notification']['category'][4]['subscribe_from'] = ['open_index.php'];

$modversion['notification']['category'][5]['name'] = 'category_question';
$modversion['notification']['category'][5]['title'] = _MI_SF_CATEGORY_QUESTION_NOTIFY;
$modversion['notification']['category'][5]['description'] = _MI_SF_CATEGORY_QUESTION_NOTIFY_DSC;
$modversion['notification']['category'][5]['subscribe_from'] = ['open_index.php, open_category.php'];

$modversion['notification']['category'][6]['name'] = 'question';
$modversion['notification']['category'][6]['title'] = _MI_SF_QUESTION_NOTIFY;
$modversion['notification']['category'][6]['description'] = _MI_SF_QUESTION_NOTIFY_DSC;
$modversion['notification']['category'][6]['subscribe_from'] = ['open_index.php'];

$modversion['notification']['event'][1]['name'] = 'category_created';
$modversion['notification']['event'][1]['category'] = 'global_faq';
$modversion['notification']['event'][1]['title'] = _MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP;
$modversion['notification']['event'][1]['description'] = _MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_faq_category_created';
$modversion['notification']['event'][1]['mail_subject'] = _MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ;

$modversion['notification']['event'][2]['name'] = 'submitted';
$modversion['notification']['event'][2]['category'] = 'global_faq';
$modversion['notification']['event'][2]['admin_only'] = 1;
$modversion['notification']['event'][2]['title'] = _MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP;
$modversion['notification']['event'][2]['description'] = _MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_faq_submitted';
$modversion['notification']['event'][2]['mail_subject'] = _MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ;

$modversion['notification']['event'][3]['name'] = 'published';
$modversion['notification']['event'][3]['category'] = 'global_faq';
$modversion['notification']['event'][3]['title'] = _MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][3]['description'] = _MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_faq_published';
$modversion['notification']['event'][3]['mail_subject'] = _MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][4]['name'] = 'answer_proposed';
$modversion['notification']['event'][4]['category'] = 'global_faq';
$modversion['notification']['event'][4]['admin_only'] = 1;
$modversion['notification']['event'][4]['title'] = _MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP;
$modversion['notification']['event'][4]['description'] = _MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_faq_answer_proposed';
$modversion['notification']['event'][4]['mail_subject'] = _MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ;

$modversion['notification']['event'][5]['name'] = 'answer_published';
$modversion['notification']['event'][5]['category'] = 'global_faq';
$modversion['notification']['event'][5]['title'] = _MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][5]['description'] = _MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][5]['mail_template'] = 'global_faq_answer_published';
$modversion['notification']['event'][5]['mail_subject'] = _MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][6]['name'] = 'submitted';
$modversion['notification']['event'][6]['category'] = 'category_faq';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP;
$modversion['notification']['event'][6]['description'] = _MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC;
$modversion['notification']['event'][6]['mail_template'] = 'category_faq_submitted';
$modversion['notification']['event'][6]['mail_subject'] = _MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ;

$modversion['notification']['event'][7]['name'] = 'published';
$modversion['notification']['event'][7]['category'] = 'category_faq';
$modversion['notification']['event'][7]['title'] = _MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][7]['description'] = _MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][7]['mail_template'] = 'category_faq_published';
$modversion['notification']['event'][7]['mail_subject'] = _MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][8]['name'] = 'answer_proposed';
$modversion['notification']['event'][8]['category'] = 'category_faq';
$modversion['notification']['event'][8]['admin_only'] = 1;
$modversion['notification']['event'][8]['title'] = _MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP;
$modversion['notification']['event'][8]['description'] = _MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC;
$modversion['notification']['event'][8]['mail_template'] = 'category_faq_answer_proposed';
$modversion['notification']['event'][8]['mail_subject'] = _MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ;

$modversion['notification']['event'][9]['name'] = 'answer_published';
$modversion['notification']['event'][9]['category'] = 'category_faq';
$modversion['notification']['event'][9]['title'] = _MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY;
$modversion['notification']['event'][9]['caption'] = _MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][9]['description'] = _MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][9]['mail_template'] = 'category_faq_answer_published';
$modversion['notification']['event'][9]['mail_subject'] = _MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][10]['name'] = 'rejected';
$modversion['notification']['event'][10]['category'] = 'faq';
$modversion['notification']['event'][10]['invisible'] = 1;
$modversion['notification']['event'][10]['title'] = _MI_SF_FAQ_REJECTED_NOTIFY;
$modversion['notification']['event'][10]['caption'] = _MI_SF_FAQ_REJECTED_NOTIFY_CAP;
$modversion['notification']['event'][10]['description'] = _MI_SF_FAQ_REJECTED_NOTIFY_DSC;
$modversion['notification']['event'][10]['mail_template'] = 'faq_rejected';
$modversion['notification']['event'][10]['mail_subject'] = _MI_SF_FAQ_REJECTED_NOTIFY_SBJ;

$modversion['notification']['event'][11]['name'] = 'approved';
$modversion['notification']['event'][11]['category'] = 'faq';
$modversion['notification']['event'][11]['invisible'] = 1;
$modversion['notification']['event'][11]['title'] = _MI_SF_FAQ_APPROVED_NOTIFY;
$modversion['notification']['event'][11]['caption'] = _MI_SF_FAQ_APPROVED_NOTIFY_CAP;
$modversion['notification']['event'][11]['description'] = _MI_SF_FAQ_APPROVED_NOTIFY_DSC;
$modversion['notification']['event'][11]['mail_template'] = 'faq_approved';
$modversion['notification']['event'][11]['mail_subject'] = _MI_SF_FAQ_APPROVED_NOTIFY_SBJ;

$modversion['notification']['event'][12]['name'] = 'answer_approved';
$modversion['notification']['event'][12]['category'] = 'faq';
$modversion['notification']['event'][12]['invisible'] = 1;
$modversion['notification']['event'][12]['title'] = _MI_SF_FAQ_ANSWER_APPROVED_NOTIFY;
$modversion['notification']['event'][12]['caption'] = _MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP;
$modversion['notification']['event'][12]['description'] = _MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC;
$modversion['notification']['event'][12]['mail_template'] = 'faq_answer_approved';
$modversion['notification']['event'][12]['mail_subject'] = _MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ;

$modversion['notification']['event'][13]['name'] = 'answer_rejected';
$modversion['notification']['event'][13]['category'] = 'faq';
$modversion['notification']['event'][13]['invisible'] = 1;
$modversion['notification']['event'][13]['title'] = _MI_SF_FAQ_ANSWER_REJECTED_NOTIFY;
$modversion['notification']['event'][13]['caption'] = _MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP;
$modversion['notification']['event'][13]['description'] = _MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC;
$modversion['notification']['event'][13]['mail_template'] = 'faq_answer_rejected';
$modversion['notification']['event'][13]['mail_subject'] = _MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ;

$modversion['notification']['event'][14]['name'] = 'submitted';
$modversion['notification']['event'][14]['category'] = 'global_question';
$modversion['notification']['event'][14]['admin_only'] = 1;
$modversion['notification']['event'][14]['title'] = _MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY;
$modversion['notification']['event'][14]['caption'] = _MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP;
$modversion['notification']['event'][14]['description'] = _MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC;
$modversion['notification']['event'][14]['mail_template'] = 'global_question_submitted';
$modversion['notification']['event'][14]['mail_subject'] = _MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ;

$modversion['notification']['event'][15]['name'] = 'published';
$modversion['notification']['event'][15]['category'] = 'global_question';
$modversion['notification']['event'][15]['title'] = _MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY;
$modversion['notification']['event'][15]['caption'] = _MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][15]['description'] = _MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][15]['mail_template'] = 'global_question_published';
$modversion['notification']['event'][15]['mail_subject'] = _MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][16]['name'] = 'answer_proposed';
$modversion['notification']['event'][16]['category'] = 'global_question';
$modversion['notification']['event'][16]['admin_only'] = 1;
$modversion['notification']['event'][16]['title'] = _MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY;
$modversion['notification']['event'][16]['caption'] = _MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP;
$modversion['notification']['event'][16]['description'] = _MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC;
$modversion['notification']['event'][16]['mail_template'] = 'global_question_answer_proposed';
$modversion['notification']['event'][16]['mail_subject'] = _MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ;

$modversion['notification']['event'][17]['name'] = 'submitted';
$modversion['notification']['event'][17]['category'] = 'category_question';
$modversion['notification']['event'][17]['admin_only'] = 1;
$modversion['notification']['event'][17]['title'] = _MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY;
$modversion['notification']['event'][17]['caption'] = _MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP;
$modversion['notification']['event'][17]['description'] = _MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC;
$modversion['notification']['event'][17]['mail_template'] = 'category_question_submitted';
$modversion['notification']['event'][17]['mail_subject'] = _MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ;

$modversion['notification']['event'][18]['name'] = 'published';
$modversion['notification']['event'][18]['category'] = 'category_question';
$modversion['notification']['event'][18]['title'] = _MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY;
$modversion['notification']['event'][18]['caption'] = _MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][18]['description'] = _MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][18]['mail_template'] = 'category_question_published';
$modversion['notification']['event'][18]['mail_subject'] = _MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][19]['name'] = 'answer_proposed';
$modversion['notification']['event'][19]['category'] = 'category_question';
$modversion['notification']['event'][19]['title'] = _MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY;
$modversion['notification']['event'][19]['caption'] = _MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP;
$modversion['notification']['event'][19]['description'] = _MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC;
$modversion['notification']['event'][19]['mail_template'] = 'category_question_answer_proposed';
$modversion['notification']['event'][19]['mail_subject'] = _MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ;

$modversion['notification']['event'][20]['name'] = 'rejected';
$modversion['notification']['event'][20]['category'] = 'question';
$modversion['notification']['event'][20]['invisible'] = 1;
$modversion['notification']['event'][20]['title'] = _MI_SF_QUESTION_REJECTED_NOTIFY;
$modversion['notification']['event'][20]['caption'] = _MI_SF_QUESTION_REJECTED_NOTIFY_CAP;
$modversion['notification']['event'][20]['description'] = _MI_SF_QUESTION_REJECTED_NOTIFY_DSC;
$modversion['notification']['event'][20]['mail_template'] = 'question_rejected';
$modversion['notification']['event'][20]['mail_subject'] = _MI_SF_QUESTION_REJECTED_NOTIFY_SBJ;

$modversion['notification']['event'][21]['name'] = 'approved';
$modversion['notification']['event'][21]['category'] = 'question';
$modversion['notification']['event'][21]['invisible'] = 1;
$modversion['notification']['event'][21]['title'] = _MI_SF_QUESTION_APPROVED_NOTIFY;
$modversion['notification']['event'][21]['caption'] = _MI_SF_QUESTION_APPROVED_NOTIFY_CAP;
$modversion['notification']['event'][21]['description'] = _MI_SF_QUESTION_APPROVED_NOTIFY_DSC;
$modversion['notification']['event'][21]['mail_template'] = 'question_approved';
$modversion['notification']['event'][21]['mail_subject'] = _MI_SF_QUESTION_APPROVED_NOTIFY_SBJ;

$modversion['notification']['event'][22]['name'] = 'answer_approved';
$modversion['notification']['event'][22]['category'] = 'question';
$modversion['notification']['event'][22]['invisible'] = 1;
$modversion['notification']['event'][22]['title'] = _MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY;
$modversion['notification']['event'][22]['caption'] = _MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP;
$modversion['notification']['event'][22]['description'] = _MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC;
$modversion['notification']['event'][22]['mail_template'] = 'question_answer_approved';
$modversion['notification']['event'][22]['mail_subject'] = _MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ;

$modversion['notification']['event'][23]['name'] = 'answer_rejected';
$modversion['notification']['event'][23]['category'] = 'question';
$modversion['notification']['event'][23]['invisible'] = 1;
$modversion['notification']['event'][23]['title'] = _MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY;
$modversion['notification']['event'][23]['caption'] = _MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP;
$modversion['notification']['event'][23]['description'] = _MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC;
$modversion['notification']['event'][23]['mail_template'] = 'question_answer_rejected';
$modversion['notification']['event'][23]['mail_subject'] = _MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ;
