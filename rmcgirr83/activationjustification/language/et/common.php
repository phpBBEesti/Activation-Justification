<?php
/**
* Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
*
* @package - Activation Justification language
* @copyright (c) 2015 RMcGirr83
* @author RMcGirr83 (Rich McGirr)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACTIVATION_JUSTIFICATION'	=> '<strong>Aktiveerimise põhjendus</strong>',
	'JUSTIFICATION_EXPLAIN'		=> 'Teie aktiveerimine sõltub teie liitumise põhjendusest.',
	'JUSTIFICATION'				=> 'Selgitus',
	'NO_JUSTIFICATION'			=> '<em>Puudub</em>',
	'TOO_SHORT_JUSTIFICATION'	=> 'Teie sisestatud selgitus/põhjus on liiga lühike.',
	'JUSTIFY_YOU_HAVE'			=> 'Sul on',
	'JUSTIFY_CHARS_REMAINING'	=> 'jäänud tähed.',
	'SURE_ACTIVATE'				=> 'Kas olete kindel, et soovite aktiveerida kasutajat <strong>%s</strong>?', // %s will be a username.
	'ACTIVATED_SUCCESS'			=> '<strong>Kasutaja on aktiveeritud</strong>',
));
