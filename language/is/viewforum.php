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
	'ACTIVE_TOPICS'			=> 'Virkar umræður',
	'ANNOUNCEMENTS'			=> 'Tilkynningar',

	'FORUM_PERMISSIONS'		=> 'Réttindi svæðis',

	'ICON_ANNOUNCEMENT'		=> 'Tilkynning',
	'ICON_STICKY'			=> 'Límdur umræða',

	'LOGIN_NOTIFY_FORUM'	=> 'Þér hefur borist tilkynning um þetta spjallsvæði, vinsamlega skráðu þig inn til að skoða hana.',

	'MARK_TOPICS_READ'		=> 'Merkja umræður sem lesnar',

	'NEW_POSTS_HOT'			=> 'New posts [ Popular ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'New posts [ Locked ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'No new posts [ Popular ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'No new posts [ Locked ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Þú hefur ekki tilskilin leyfi til að skoða umræður á þessu spjallsvæði.',
	'NO_UNREAD_POSTS_HOT'		=> 'Engin ólesin innlegg [ Vinsæl ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Engin ólesin innlegg [ Læst ]',

	'POST_FORUM_LOCKED'		=> 'Spjallsvæði er læst',

	'TOPICS_MARKED'			=> 'Umræður á þessu spjallsvæði hafa verið merktar sem lesnar.',

	'UNREAD_POSTS_HOT'		=> 'Ólesin innlegg [ Vinsæl ]',
	'UNREAD_POSTS_LOCKED'	=> 'Ólesin innlegg [ Læst ]',

	'VIEW_FORUM'			=> 'Skoða spjallsvæði',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d umræða',
		2	=> '%d umræður',
	),
));
