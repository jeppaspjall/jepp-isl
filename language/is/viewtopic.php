<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'APPROVE'								=> 'Samþykkja',
	'ATTACHMENT'						=> 'Viðhengi',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Eiginleikar viðhengis hafa verið gerðir óvirkir.',

	'BOOKMARK_ADDED'		=> 'Bókamerking tókst.',
	'BOOKMARK_ERR'			=> 'Bókamerking mistókst. Vinsamlega reynið aftur.',
	'BOOKMARK_REMOVED'		=> 'Bókamerki fjarlægt.',
	'BOOKMARK_TOPIC'		=> 'Bókamerkja umræðu',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Fjarlægja bókamerki',
	'BUMPED_BY'				=> 'Síðast fært upp af %1$s þann %2$s.',
	'BUMP_TOPIC'			=> 'Færa upp',

	'CODE'					=> 'Code',

	'DELETE_TOPIC'			=> 'Eyða umræðu',
	'DELETED_INFORMATION'	=> 'Eytt af %1$s þann %2$s',
	'DISAPPROVE'					=> 'Hafna',
	'DOWNLOAD_NOTICE'		=> 'Þú hefur ekki tilskilin réttindi tip að skoða viðhengi þessa innleggs.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Síðast breytt af %2$s þann %3$s, breytt %1$d sinni samtals.',
		2	=> 'Síðast breytt af %2$s þann %3$s, breytt %1$d sinnum samtals.',
	),
	'EMAIL_TOPIC'			=> 'Email topic',
	'ERROR_NO_ATTACHMENT'	=> 'Valið viðhengi er ekki lengur til staðar.',

	'FILE_NOT_FOUND_404'	=> 'Skráin <strong>%s</strong> er ekki til.',
	'FORK_TOPIC'			=> 'Afrita umræðu',
	'FULL_EDITOR'			=> 'Fullbúinn ritill &amp; forskoða',

	'LINKAGE_FORBIDDEN'		=> 'Þú hefur ekki tilskilin réttindi til að skoða, niðurhala eða hlekkja frá/til þessarar síðu.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Þér hefur borist tilkynning um þessa umræðu, vinsamlega skráðu þig inn til að skoða hana.',
	'LOGIN_VIEWTOPIC'		=> 'Þú þarft að vera innskráður til að skoða þessa umræðu.',

	'MAKE_ANNOUNCE'				=> 'Change to “Announcement”',
	'MAKE_GLOBAL'				=> 'Change to “Global”',
	'MAKE_NORMAL'				=> 'Change to “Standard Topic”',
	'MAKE_STICKY'				=> 'Change to “Sticky”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'You may select <strong>%d</strong> option',
		2	=> 'You may select up to <strong>%d</strong> options',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Viðhengið <strong>%s</strong> er ekki lengur til staðar',
	'MOVE_TOPIC'				=> 'Færa umræðu',

	'NO_ATTACHMENT_SELECTED'=> 'Þú hefur ekki valið viðhengi til að skoða eða niðurhala.',
	'NO_NEWER_TOPICS'		=> 'Það eru engar nýrri umræður á þessu spjallsvæði.',
	'NO_OLDER_TOPICS'		=> 'Það eru engar eldri umræður á þessu spjallsvæði.',
	'NO_UNREAD_POSTS'		=> 'Það eru engin ólesin innlegg í þessari umræðu.',
	'NO_VOTE_OPTION'		=> 'Þú verður að velja einhvern valmöguleika til að kjósa.',
	'NO_VOTES'				=> 'Engin atkvæði',

	'POLL_ENDED_AT'			=> 'Kosningu lauk %s',
	'POLL_RUN_TILL'			=> 'Kosningu lýkur %s',
	'POLL_VOTED_OPTION'		=> 'Þú kaust þennan valmöguleika',
	'POST_DELETED_RESTORE'	=> 'Þessu innleggi hefur verið eytt. Hægt er að endurvekja það.',
	'PRINT_TOPIC'			=> 'Prenthæft útlit',

	'QUICK_MOD'				=> 'Quick-mod tools',
	'QUICKREPLY'			=> 'Flýtisvar',
	'QUOTE'					=> 'Tilvitnun',

	'REPLY_TO_TOPIC'		=> 'Svara umræðu',
	'RESTORE'				=> 'Endurvekja',
	'RESTORE_TOPIC'			=> 'Endurvekja umræðu',
	'RETURN_POST'			=> '%sSvara innleggi%s',

	'SUBMIT_VOTE'			=> 'Greiða atkvæði',

	'TOPIC_TOOLS'			=> 'Umræðutól',
	'TOTAL_VOTES'			=> 'Fjöldi atkvæða',

	'UNLOCK_TOPIC'			=> 'Aflæsa umræðu',

	'VIEW_INFO'				=> 'Upplýsingar um umræðu',
	'VIEW_NEXT_TOPIC'		=> 'Næsta umræða',
	'VIEW_PREVIOUS_TOPIC'	=> 'Fyrri umræða',
	'VIEW_RESULTS'			=> 'Skoða niðurstöður',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d innlegg',
		2	=> '%d innlegg',
	),
	'VIEW_UNREAD_POST'		=> 'Fyrsti ólesni póstur',
	'VOTE_SUBMITTED'		=> 'Þú hefur greitt atkvæði.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));
