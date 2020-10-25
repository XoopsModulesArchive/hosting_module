<?php

/**
 * $Id: modinfo.php,v 1.3 2005/01/29 22:38:01 malanciault Exp $
 * Module: SmartFAQ
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */

// Module Info
// The name of this module
global $xoopsModule;
define('_MI_SF_MD_NAME', 'SmartFAQ');

// A brief description of this module
define('_MI_SF_MD_DESC', 'Erweitertes Frage- und Antwortmodul f&uuml;r Ihre XOOPS-Site');

// Sub menus in main menu block
define('_MI_SF_SUB_SMNAME1', 'FAQ einschicken');
define('_MI_SF_SUB_SMNAME2', 'FAQ nachfragen');
define('_MI_SF_SUB_SMNAME3', 'Offene Fragen');
define('_MI_SF_SUB_SMNAME4', 'FAQs moderieren');

// Config options
define('_MI_SF_ALLOWSUBMIT', 'Benutzereinsendungen:');
define('_MI_SF_ALLOWSUBMITDSC', 'Benutzern erlauben, FAQs einzuschicken?');

define('_MI_SF_ALLOWREQUEST', 'Benutzeranfragen:');
define('_MI_SF_ALLOWREQUESTDSC', 'Benutzern erlauben, FAQs zu anzufragen?');

define('_MI_SF_NEWANSWER', 'Einsenden von neuen Antworten erlauben:');
define('_MI_SF_NEWANSWERDSC', "Falls 'Ja' ausgew&auml;hlt wird d&uuml;rfen die User Antworten auf bereits ver&ouml;ffentliche FAQ einsenden.");

define('_MI_SF_ANONPOST', 'Gastbeitr&auml;ge zulassen');
define('_MI_SF_ANONPOSTDSC', 'G&auml;sten erlauben, FAQs zu anzufragen.');

define('_MI_SF_DATEFORMAT', 'Datumsformat:');
define('_MI_SF_DATEFORMATDSC', 'Benutzen Sie den letzten Teil der Datei language/german/global.php um das Datumsformat einzustellen. Beispiel: "d.m.Y H:i" wird &uuml;bersetzt in "30.3.2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', 'Balken zum Zusammenklappen anzeigen');
define('_MI_SF_DISPLAY_COLLAPSDSC', "'Ja' ausw&auml;hlen um die Balken zum Zusammenklappen im Index und der Kategorieseite anzuzeigen.");

define('_MI_SF_DISPLAYTYPE', 'FAQs Anzeigetyp:');
define('_MI_SF_DISPLAYTYPEDSC', "Wenn 'Zusammenfassung' ausgew&auml;hlt ist, werden nur die Frage, Datum und Hits der einzelnen FAQs in der gew&auml;hlten Kategorie angezeigt. Wenn 'Vollst&auml;ndige Anzeige' ausgew&auml;hlt ist, wird die FAQ in der Kategorie vollst&auml;ndig angezeigt.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', 'Zusammenfassung');
define('_MI_SF_DISPLAYTYPE_FULL', 'Vollst&auml;ndige Anzeige');

define('_MI_SF_DISPLAY_LAST_FAQ', "'Letzte FAQ'-Spalte anzeigen ?");
define('_MI_SF_DISPLAY_LAST_FAQDSC', "'Ja' ausw&auml;hlen, um die letzte FAQ jeder Kategorie im Index und der Kategorieseite anzuzeigen.");

define('_MI_SF_DISPLAY_LAST_FAQS', 'Liste der letzten FAQs anzeigen?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "'Ja' ausw&auml;hlen um eine Liste der letzten FAQs auf der Indexseite anzuzeigen.");

define('_MI_SF_LAST_FAQ_SIZE', 'Letzte FAQ Gr&ouml;&szlig;e:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "Maximale Gr&ouml;&szlig;e der Frage in der 'letzte FAQ-Spalte' angeben.");

define('_MI_SF_QUESTION_SIZE', 'Gr&ouml;&szlig;e der Frage:');
define('_MI_SF_QUESTION_SIZEDSC', "Maximale Gr&ouml;&szlig;e der Frage im Titel in der 'Einzelnen FAQ-Anzeigen' Seite.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', 'Unterkategorien auf Indexseite anzeigen?');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "'Ja' ausw&auml;hlen um Unterkategorien auf der Indexseite anzuzeigen.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', 'Beschreibung der Hauptkategorien anzeigen?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "'Ja' ausw&auml;hlen um eine Beschreibung der Hauptkategorien auf der Index- und Kategorieseite anzuzeigen.");

define('_MI_SF_DISPLAY_SBCAT_DSC', 'Beschreibung der Unterkategorien anzeigen?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "'Ja' ausw&auml;hlen um eine Beschreibung der Unterkategorien auf der Index- und Kategorieseite anzuzeigen.");

define('_MI_SF_ORDERBYDATE', 'FAQs nach Datum sortieren:');
define('_MI_SF_ORDERBYDATEDSC', 'Wenn diese Option auf "Ja" eingestellt wird, werden die FAQs innerhalb einer Kategorie nach Datum sortiert, sonst nach ihrer Position.');

define('_MI_SF_DISPLAY_DATE_COL', "'Ver&ouml;ffentlicht am' Spalte anzeigen?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "Wenn der Anzeigetyp 'Zusammenfassung' ausgew&auml;hlt wurde, wird hier mit 'Ja' das 'Ver&ouml;ffentlicht am' Datum in der FAQ-Tabelle Kategorie im Index und der Kategorieseite angezeigt.");

define('_MI_SF_DISPLAY_HITS_COL', "'Hits'-Spalte anzeigen?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "Wenn der Anzeigetyp 'Zusammenfassung' ausgew&auml;hlt wurde, werden hier mit 'Ja' die 'Hits' in der FAQ-Tabelle Kategorie im Index und der Kategorieseite angezeigt.");

define('_MI_SF_USEIMAGENAVPAGE', 'Bilder für die Seitennavigation verwenden:');
define('_MI_SF_USEIMAGENAVPAGEDSC', '"Ja" auswählen um die Seitennavigation in Bildern darzustellen, sonst wird die originale Seitennavigation von XOOPS verwendet.');

define('_MI_SF_ALLOWCOMMENTS', 'Kommentare auf Ebene eines einzelnen FAQs steuern:');
define('_MI_SF_ALLOWCOMMENTSDSC', '"Ja" ausw&auml;hlen um Kommentare nur in den FAQs zuzulassen, die in den Einstellungen die Kommentar-Checkbox aktiviert haben. <br><br>"Nein" ausw&auml;hlen, um die Kommentarsteuerung global durchzuf&uuml;hren (siehe unten bei "Kommentarrichtlinien".');

define('_MI_SF_ALLOWADMINHITS', 'Admin "gelesen" z&auml;hlen:');
define('_MI_SF_ALLOWADMINHITSDSC', 'Sollen Admin-Klicks den "gelesen"-Counter erh&ouml;hen?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Eingereichte FAQs automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', 'Gibt eingereichte FAQs automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Nachgefragte FAQs automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', 'Gibt nachgefragte FAQs automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_AUTOAPPROVE_ANS', 'Antworten automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', 'Gibt eingereichte Antworten automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Neue Antworten automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', 'Gibt neu eingereichte Antworten automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_LASTFAQSPERCAT', 'Max. Anzahl letzte FAQs pro Kategorie:');
define('_MI_SF_LASTFAQSPERCATDSC', 'Gibt die maximale Anzahl FAQs an, die in der Info-Spalte pro Kategorie angezeigt werden sollen.');

define('_MI_SF_CATPERPAGE', 'Maximale Anzahl Kategorien (User-Seite):');
define('_MI_SF_CATPERPAGEDSC', 'Maximum Anzahl Kategorien die auf einmal für den User angezeigt werden sollen.');

define('_MI_SF_PERPAGE', 'Maximale Anzahl FAQs (Admin-Seite):');
define('_MI_SF_PERPAGEDSC', 'Maximum Anzahl FAQs die auf einmal für den Admin angezeigt werden sollen.');

define('_MI_SF_PERPAGEINDEX', 'Maximale Anzahl FAQs (User-Seite):');
define('_MI_SF_PERPAGEINDEXDSC', 'Maximum Anzahl FAQs die auf einmal für den User angezeigt werden sollen.');

define('_MI_SF_INDEXWELCOMEMSG', 'Index Willkommens-Nachricht:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Willkommens Nachricht, die auf der Indexseite des Moduls angezeigt werden soll.');
define('_MI_SF_INDEXWELCOMEMSGDEF', 'In diesem Bereich der Seite, finden Sie Antworten auf h&auml;ufig gestellte Fragen sowie Antworten auf Fragen wie <b>Wie kann ich</b> oder <b>Wussten Sie schon...</b>. Diese Antworten d&uuml;rfen gerne kommentiert werden.');

define('_MI_SF_REQUESTINTROMSG', 'Anfrage Einf&uuml;hrungsnachricht:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Einf&uuml;hrende Nachricht, die im Bereich der Nachfrage von Antworten angezeigt wird.');
define('_MI_SF_REQUESTINTROMSGDEF', "Sie haben die gesuchte Antwort auf Ihre Frage nicht gefunden? Kein Problem! F&uuml;llen Sie das folgende Formular zur Beantragung einer Antwort aus. Die Administratoren werden die Frage pr&uuml;fen und eine neue 'Offene Frage' ver&ouml;ffentlichen!");

define('_MI_SF_OPENINTROMSG', 'Offene Fragen Einf&uuml;hrungsnachricht:');
define('_MI_SF_OPENINTROMSGDSC', "Einf&uuml;hrende Nachricht, die im Bereich der 'Offenen Fragen' angezeigt wird.");
define('_MI_SF_OPENINTROMSGDEF', 'Hier ist eine Liste der popul&auml;rsten Kategorien und ihrer Unterkategorien. W&auml;hlen Sie eine Kategorie aus, um die darin enthaltenen FAQs zu sehen.');

define('_MI_SF_USEREALNAME', 'Echten Namen anzeigen');
define('_MI_SF_USEREALNAMEDSC', 'Ersetzt den Usernamen durch den Namen, der im Profil angegeben ist.');

define('_MI_SF_HELP_PATH_SELECT', 'Pfad der SmartFAQ-Hilfedateien');
define('_MI_SF_HELP_PATH_SELECT_DSC', "W&auml;hlen Sie aus, von wo aus du auf die SmartFAQ-Hilfedateien zugegriffen werden sollen. Wenn Sie das 'SmartFAQ'-Help Package' heruntergeladen und in den Ordner 'modules/smartfaq/doc/' hochgeladen haben, k&ouml;nnen Sie 'Innerhalb des Moduls' ausw&auml;hlen. Alternativ, k&ouml;nnen Sie auf diese Dateien direkt von docs.xoops.org zugreifen, in dem Sie dies in der Combobox ausw&auml;hlen. Sie k&ouml;nnen auch 'Eigener Pfad' angeben und den Pfad selber im Bereich 'Eigener Pfad der SmartFAQ-Hilfedateien' angeben.");

define('_MI_SF_HELP_PATH_CUSTOM', 'Eigener Pfad der SmartFAQ-Hilfedateien');
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Wenn Sie 'Eigener Pfad' in der vorherigen Option 'Pfad der SmartFAQ-Hilfedateien' ausgew&auml;hlt haben, geben Sie bitte hier den Pfad der SmartFAQ-Hilfedateien, im format 'http://www.ihresite.com/doc' an.");

define('_MI_SF_HELP_INSIDE', 'Innerhalb des Moduls');
define('_MI_SF_HELP_CUSTOM', 'Eigener Pfad');

//define('_MI_SF_MODERATORSEDIT', 'Allow moderators to edit (Enhanced moderators)');
//define('_MI_SF_MODERATORSEDITDSC', 'This option will allow moderators to edit questions and Q&A within categories for which they are moderators. Otherwise, moderators can only approve or reject questions and Q&A.');

// Names of admin menu items
define('_MI_SF_ADMENU1', 'Index');
define('_MI_SF_ADMENU2', 'Kategorien');
define('_MI_SF_ADMENU3', 'FAQ');
define('_MI_SF_ADMENU4', 'Fragen');
define('_MI_SF_ADMENU5', 'Berechtigungen');
define('_MI_SF_ADMENU6', 'Bl&ouml;cke und Gruppen');
define('_MI_SF_ADMENU7', 'Gehe zum Modul');

//Names of Blocks and Block information
define('_MI_SF_ARTSNEW', 'Liste der aktuellen FAQs');
define('_MI_SF_ARTSRANDOM_DIDUNO', 'Wusstesn Sie schon?');
define('_MI_SF_ARTSRANDOM_FAQ', 'Zuf&auml;llige Frage!');
define('_MI_SF_ARTSRANDOM_HOW', 'Wie kann ich...');
define('_MI_SF_ARTSCONTEXT', 'Kontextbezogene FAQ');
define('_MI_SF_RECENTFAQS', 'Aktuelle FAQ (Details)');
define('_MI_SF_RECENT_QUESTIONS', 'Aktuelle Offene Fragen');
define('_MI_SF_MOST_VIEWED', 'Meistgelesene FAQs');

// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Allgemein FAQ');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Allgemeine FAQ-Benachrichtigungsoptionen.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'Kategorie FAQ');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle Kategorie betreffen.');

define('_MI_SF_FAQ_NOTIFY', 'FAQ');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle FAQ betreffen.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Allgemein Offene Fragen');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Allgemeine Benachrichtigungsoptionen die offenen Fragen betreffen.');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'Kategorie FAQ');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle Kategorie betreffen.');

define('_MI_SF_QUESTION_NOTIFY', 'Offene Fragen');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle offene Frage betreffen.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Neue Kategorie');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Kategorie angelegt worden ist.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Benachrichtigung wenn eine neue Kategorie angelegt worden ist.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Kategorie');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'FAQ eingeschickt');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ angefragt worden ist.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ angefragt worden ist.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ eingeschickt');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Neue FAQ ver&ouml;ffentlicht');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ ver&ouml;ffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ ver&ouml;ffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ ver&ouml;ffentlicht');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Neue Antwort vorgeschlagen');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage vorgeschlagen worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage vorgeschlagen worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Neue Antwort ver&ouml;ffentlicht');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage ver&ouml;ffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage ver&ouml;ffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort ver&ouml;ffentlicht');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'FAQ eingeschickt');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie eingeschickt worden ist.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie eingeschickt worden ist.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ in Kategorie eingeschickt');

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Neue FAQ ver&ouml;ffentlicht');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie ver&ouml;ffentlicht worden ist.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie ver&ouml;ffentlicht worden ist.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ in Kategorie ver&ouml;ffentlicht');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Neue Antwort vorgeschlagen');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie vorgeschlagen worden ist.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie vorgeschlagen worden ist.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Neue Antwort ver&ouml;ffentlicht');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie ver&ouml;ffentlicht worden ist.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie ver&ouml;ffentlicht worden ist.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort in Kategorie ver&ouml;ffentlicht');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'FAQ abgelehnt');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ abgelehnt wurde.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ abgelehnt wurde.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: FAQ abgelehnt');

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'FAQ freigegeben');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ freigegeben wurde.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ freigegeben wurde.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: FAQ freigegeben');

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Antwort freigegeben');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort freigegeben wurde.');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort freigegeben wurde.');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort freigegeben');

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Antwort abgelehnt');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort abgelehnt wurde.');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort abgelehnt wurde.');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort abgelehnt');

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Frage eingeschickt');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage eingeschickt wurde.');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage eingeschickt wurde.');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage eingeschickt');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Frage ver&ouml;ffentlicht');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage ver&ouml;ffentlicht wurde.');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage ver&ouml;ffentlicht wurde.');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage ver&ouml;ffentlicht');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Antwort vorgeschlagen');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort vorgeschlagen wurde.');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort vorgeschlagen wurde.');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Frage eingeschickt');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage in dieser Kategorie eingeschickt wurde.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage in dieser Kategorie eingeschickt wurde.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage in Kategorie ingeschickt');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Frage ver&ouml;ffentlicht');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage in dieser Kategorie ver&ouml;ffentlicht wurde.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage in dieser Kategorie ver&ouml;ffentlicht wurde.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage in Kategorie ver&ouml;ffentlicht');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Antwort vorgeschlagen');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort in dieser Kategorie vorgeschlagen wurde.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort in dieser Kategorie vorgeschlagen wurde.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Frage abgelehnt');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage abgelehnt wurde.');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage abgelehnt wurde.');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Frage abgelehnt');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Frage freigegeben');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage freigegeben wurde.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage freigegeben wurde.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Frage freigegeben');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Antwort freigegeben');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn diese Antwort freigegeben wurde.');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn diese Antwort freigegeben wurde.');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort freiegegeben');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Antwort abgelehnt');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn diese Antwort abgelehnt wurde.');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn diese Antwort abgelehnt wurde.');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort abgelehnt');

// About.php constants
define('_MI_SF_AUTHOR_INFO', 'Entwickler');
define('_MI_SF_DEVELOPER_LEAD', 'Leitende(r) Entwickle(r)');
define('_MI_SF_DEVELOPER_CONTRIBUTOR', 'Mitarbeiter');
define('_MI_SF_DEVELOPER_WEBSITE', 'Webseite');
define('_MI_SF_DEVELOPER_EMAIL', 'E-Mail');
define('_MI_SF_DEVELOPER_CREDITS', 'Credits');
define('_MI_SF_DEMO_SITE', 'SmartFactory-Demosite');
define('_MI_SF_MODULE_INFO', 'Modulentwicklungs-Informationen');
define('_MI_SF_MODULE_STATUS', 'Status');
define('_MI_SF_MODULE_RELEASE_DATE', 'Ver&ouml;ffentlichungsdatum');
define('_MI_SF_MODULE_DEMO', 'Demosite');
define('_MI_SF_MODULE_SUPPORT', 'Offizielle Supportsite');
define('_MI_SF_MODULE_BUG', 'Einen Bug f&uuml;r dieses Modul berichten');
define('_MI_SF_MODULE_FEATURE', 'Einen Verbesserungsvorschlag f&uuml;r dieses Modul machen');
define('_MI_SF_MODULE_DISCLAIMER', 'Disclaimer');
define('_MI_SF_AUTHOR_WORD', 'Bemerkung des Autors');
define('_MI_SF_VERSION_HISTORY', 'Versions-History');

// Star: Diese Hinweise bleiben im Englischen Original.
// Beta
define('_MI_SF_WARNING_BETA', 'This module comes as is, without any guarantees whatsoever. 
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live 
website or in a production environment.');

// RC
define('_MI_SF_WARNING_RC', 'This module comes as is, without any guarantees whatsoever. This module 
is a Release Candidate and should not be used on a production web site. The module is still under 
active development and its use is under your own responsibility, which means the author is not responsible.');

// Final
define('_MI_SF_WARNING_FINAL', 'This module comes as is, without any guarantees whatsoever. Although this 
module is not beta, it is still under active development. This release can be used in a live website 
or a production environment, but its use is under your own responsibility, which means the author 
is not responsible.');
