<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 * Polish translation by MakaryGo (https://github.com/MakaryGo)	
 * 
 * @copyright (c) 2017 - 2020, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACL_M_MANAGE_FLAIR'	=> 'Może zarządzać odznakami.<br /><em>To uprawnienie przyznaje się dla całej witryny; jest niezależne od forów i kategorii.</em>',
	'ACL_U_FLAIR'			=> 'Może zarządzać swoimi odznakami i dodawać do ulubionych.',
));
