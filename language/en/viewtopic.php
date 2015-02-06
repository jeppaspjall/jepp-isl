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
	'FULL_EDITOR'			=> 'Fullbúinn ritill &amp; Forskoða',

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
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'				=> 'Move topic',

	'NO_ATTACHMENT_SELECTED'=> 'You haven't selected an attachment to download or view.',
	'NO_NEWER_TOPICS'		=> 'There are no newer topics in this forum.',
	'NO_OLDER_TOPICS'		=> 'There are no older topics in this forum.',
	'NO_UNREAD_POSTS'		=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'		=> 'You must specify an option when voting.',
	'NO_VOTES'				=> 'No votes',

	'POLL_ENDED_AT'			=> 'Poll ended at %s',
	'POLL_RUN_TILL'			=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'		=> 'You voted for this option',
	'POST_DELETED_RESTORE'	=> 'This post has been deleted. It can be restored.',
	'PRINT_TOPIC'			=> 'Print view',

	'QUICK_MOD'				=> 'Quick-mod tools',
	'QUICKREPLY'			=> 'Quick Reply',
	'QUOTE'					=> 'Quote',

	'REPLY_TO_TOPIC'		=> 'Reply to topic',
	'RESTORE'				=> 'Restore',
	'RESTORE_TOPIC'			=> 'Restore topic',
	'RETURN_POST'			=> '%sReturn to the post%s',

	'SUBMIT_VOTE'			=> 'Submit vote',

	'TOPIC_TOOLS'			=> 'Topic tools',
	'TOTAL_VOTES'			=> 'Total votes',

	'UNLOCK_TOPIC'			=> 'Unlock topic',

	'VIEW_INFO'				=> 'Post details',
	'VIEW_NEXT_TOPIC'		=> 'Next topic',
	'VIEW_PREVIOUS_TOPIC'	=> 'Previous topic',
	'VIEW_RESULTS'			=> 'View results',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d post',
		2	=> '%d posts',
	),
	'VIEW_UNREAD_POST'		=> 'First unread post',
	'VOTE_SUBMITTED'		=> 'Your vote has been cast.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));
