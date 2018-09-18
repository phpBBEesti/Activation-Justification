<?php
/**
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
	'ACTIVATION_JUSTIFICATION'	=> '<strong>Activation Justification</strong>',
	'JUSTIFICATION_EXPLAIN'		=> 'Your activation is contingent upon your reason for wanting to join.',
	'JUSTIFICATION'				=> 'Justification',
	'NO_JUSTIFICATION'			=> '<em>None</em>',
	'TOO_SHORT_JUSTIFICATION'	=> 'The justification reason you entered is too short.',
	'JUSTIFY_YOU_HAVE'			=> 'You have',
	'JUSTIFY_CHARS_REMAINING'	=> 'characters remaining.',
	'SURE_ACTIVATE'				=> 'Are you sure you want to activate the user <strong>%s</strong>?', // %s will be a username.
	'ACTIVATED_SUCCESS'			=> '<strong>User is activated</strong>',
));
