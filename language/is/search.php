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
	'ALL_AVAILABLE'			=> 'Alla mögulegu',
	'ALL_RESULTS'			=> 'Allar niðurstöður',

	'DISPLAY_RESULTS'		=> 'Sýna niðurstöður sem',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Leit skilaði %d niðurstöðu',
		2	=> 'Leit skilaði %d niðurstöðum',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Leit skilað fleiri en %d niðurstöðu',
		2	=> 'Leit skilaði fleiri en %d niðurstöðum',
	),

	'GLOBAL'				=> 'Almenn tilkynning',

	'IGNORED_TERMS'			=> 'hunsað',
	'IGNORED_TERMS_EXPLAIN'	=> 'Eftirfarandi orð í leitarstreng þínum voru hunsuð þar sem þau eru of algeng: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Stökkva á innlegg',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Þú verður að vera innskráður til þess að skoða eigin innlegg.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Þú verður að vera innskráður til þess að skoða ólesin innlegg.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Þú verður að vera innskráður til þess að skoða innlegg sem hafa bæst við eftir síðust heimsókn.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Þú ritaðir of mörg orð. Vinsamlega ritaðu aðeins %1$d orð.',
		2	=> 'Þú ritaðir of mörg orð. Vinsamlega ritaðu aðeins %1$d orð.',
	),

	'NO_KEYWORDS'			=> 'Þú verður að rita að minnsta kosti eitt leitarorð. Hvert ort skal innihalda að minnsta kosti %s og ekki fleiri en %s.',
	'NO_RECENT_SEARCHES'	=> 'Engar leitir hafa verið framkvæmdar nýlega.',
	'NO_SEARCH'				=> 'Því miður hefur þú ekki réttindi til að nota leitarkerfið.',
	'NO_SEARCH_RESULTS'		=> 'Leitin skilaði engum niðurstöðum.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Því miður getur þú ekki notað leitina sem stendur. Vinsamlega reyndu eftir %d sekúndur.',
		2	=> 'Því miður getur þú ekki notað leitina sem stendur. Vinsamlega reyndu eftir %d sekúndur.',
	),
	'NO_SEARCH_UNREADS'		=> 'Því miður er lokað fyrir leit að ólesnum innleggjum á spjallborðinu.',
	'WORD_IN_NO_POST'		=> 'Engin innlegg fundust því að orðið <strong>%s</strong> er ekki til staðar í neinu innleggi.',
	'WORDS_IN_NO_POST'		=> 'Engin innlegg fundust því að orðin <strong>%s</strong> eru ekki til staðar í neinu innleggi.',

	'POST_CHARACTERS'		=> 'stafi innleggs',
	'PHRASE_SEARCH_DISABLED'	=> 'Nákvæm orðaleit er ekki studd á þessu spjallborði.',

	'RECENT_SEARCHES'		=> 'Nýleg leitarorð',
	'RESULT_DAYS'			=> 'Takmarka leit við þessar niðurstöður',
	'RESULT_SORT'			=> 'Raða niðurstöðum eftir',
	'RETURN_FIRST'			=> 'Sýna fyrstu',
	'GO_TO_SEARCH_ADV'	=> 'Opna nákvæma leit',

	'SEARCHED_FOR'				=> 'Leitarorð',
	'SEARCHED_TOPIC'			=> 'Leitað eftir titli',
	'SEARCHED_QUERY'			=> 'Leitarskipun',
	'SEARCH_ALL_TERMS'			=> 'Leita að öllum leitarorðum eða streng eins og hann er ritaður',
	'SEARCH_ANY_TERMS'			=> 'Leita að hverju sem er af rituðum leitarorðum',
	'SEARCH_AUTHOR'				=> 'Leita að höfundi',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Nota * sem algildi þegar leitað er að hluta úr orði.',
	'SEARCH_FIRST_POST'			=> 'Fyrsta innleggi þráðar',
	'SEARCH_FORUMS'				=> 'Leita í spjallsvæðum',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Veldu spjallsvæðið eða spjallsvæðin sem þú vilt leita í. Sjálfkrafa er leitað í undirsvæðum nema þú breyttir þeirri stillingu hér að neðan.',
	'SEARCH_IN_RESULTS'			=> 'Leita í niðurstöðum',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.',
	'SEARCH_MSG_ONLY'			=> 'Eingöngu aðaltexta inngleggja',
	'SEARCH_OPTIONS'			=> 'Valmöguleikar leitar',
	'SEARCH_QUERY'				=> 'Leitarskipun',
	'SEARCH_SUBFORUMS'			=> 'Leita í undirsvæðum',
	'SEARCH_TITLE_MSG'			=> 'Titils og aðaltexta innleggja',
	'SEARCH_TITLE_ONLY'			=> 'Eingöngu titils',
	'SEARCH_WITHIN'				=> 'Leita meðal',
	'SORT_ASCENDING'			=> 'Hækkandi',
	'SORT_AUTHOR'				=> 'Höfundur',
	'SORT_DESCENDING'			=> 'Lækkandi',
	'SORT_FORUM'				=> 'Spjallsvæði',
	'SORT_POST_SUBJECT'			=> 'Titill innleggs',
	'SORT_TIME'					=> 'Tími innleggs',
	'SPHINX_SEARCH_FAILED'		=> 'Search failed: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, search could not be performed. More information about this failure has been logged in the error log.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'You must specify at least %d character of the authors name.',
		2	=> 'You must specify at least %d characters of the authors name.',
	),
));
