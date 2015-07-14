<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Bæta við skrám',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Bættu skrám við upphalsbiðröðina og smelltu á hefja upphal hnappinn.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s er nú þegar í biðröðinni.',
	'PLUPLOAD_CLOSE'			=> 'Loka',
	'PLUPLOAD_DRAG'				=> 'Dragðu skrár hingað.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Villa vegna tvötekningar skráa.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Þú getur einnig bætt við skrám með því að draga þær yfir texta boxið hér fyrir ofan!',
	'PLUPLOAD_ERR_INPUT'		=> 'Ekki tókst að opna inntaksstrauminn.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Ekki tókst að færa upphalsskrána.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Ekki tókst að opna úttaksstrauminn.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Skrá of stór:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Villa við að telja skrár.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Ógild skráarending:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Vinnsluminni kláraðist á keyrslutíma.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Upphals URL gæti verið rangt eða ekki til.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Villa vegna skráarendingu.',
	'PLUPLOAD_FILE'				=> 'Skrá: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Skrá: %s, stærð: %d, hámarks skráarstærð: %d',
	'PLUPLOAD_FILENAME'			=> 'Skráarnafn',
	'PLUPLOAD_FILES_QUEUED'		=> '%d skrár í biðröð',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Almenn villa.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP villa.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Skáargerð myndar röng eða ekki í boði.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init villa.',
	'PLUPLOAD_IO_ERROR'			=> 'IO villa.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Öryggisvilla.',
	'PLUPLOAD_SELECT_FILES'		=> 'Veldu skrár',
	'PLUPLOAD_SIZE'				=> 'Stærð',
	'PLUPLOAD_SIZE_ERROR'		=> 'Villa vegna skráarstærðar.',
	'PLUPLOAD_STATUS'			=> 'Staða',
	'PLUPLOAD_START_UPLOAD'		=> 'Hefja upphal',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Byrja upphalsbiðröðStart uploading queue',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Stöðva upphal',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stöðva núverandi upphal',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Hlóð upp %d/%d skrám',
));
