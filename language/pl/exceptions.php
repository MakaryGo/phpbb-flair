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
	'EXCEPTION_OUT_OF_BOUNDS'		=> 'Pole `%s` received a value out of its range.',
	'EXCEPTION_INVALID_COLOR'		=> 'Podano nieobsługiwany format w polu `%s`. Przyjmowane są tylko kolory w zapisie szesnastkowym (sześć znaków 0-9, A-F) .',
	'EXCEPTION_TOO_LONG'			=> 'Wartość z pola`%s` jest za długa.',
	'EXCEPTION_NAME_REQUIRED'		=> 'Musisz podać nazwę odznaki.',
	'EXCEPTION_CAT_NAME_REQUIRED'	=> 'Musisz podać nazwę kategorii.',
	'EXCEPTION_IMG_CONFLICT'		=> 'Grafika o takiej nazwie już istnieje.',
	'EXCEPTION_IMG_PROCESSING'		=> 'Wystąpił błąd podczas przetwarzania grafiki.',

	'EXCEPTION_FIELD_FLAIR_COLOR'		=> 'Kolor odznaki',
	'EXCEPTION_FIELD_FLAIR_ICON_COLOR'	=> 'Kolor ikony dla odznaki',
	'EXCEPTION_FIELD_FLAIR_FONT_COLOR'	=> 'Kolor tekstu dla odznaki',
));
