<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 * Polish translation by MakaryGo (https://github.com/MakaryGo)
 * 
 * @copyright (c) 2018 - 2020, Steve Guidetti, https://github.com/stevotvr
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
	'UCP_FLAIR'			=> 'Zarządzaj odznakami w profilu',
	'UCP_FLAIR_EXPLAIN'	=> 'Here you can manage your profile flair.<ul><li>Click the <i class="fa fa-star"></i>/<i class="fa fa-star-o"></i> button to favorite/unfavorite an item. Favorites are shown first on your profile.</li><li>Click the <b>&times;</b> button to remove an item. This option may not be available for all items.</li><li>The <b>Available Flair</b> panel lists items that you can add to your own profile.</li></ul>',

	'UCP_USER_FLAIR'			=> 'Twoja odznaka',
	'UCP_FLAIR_AVAILABLE'		=> 'Dostępne odznaki',
	'UCP_FLAIR_NO_FLAIR'		=> 'Nie masz żadnych odznak',
	'UCP_FLAIR_NO_AVAILABLE'	=> 'Żadna odznaka nie jest dostępna',
	'UCP_FLAIR_ADD'				=> 'Dodaj “%s”',
	'UCP_FLAIR_REMOVE'			=> 'Odbierz “%s”',
	'UCP_FLAIR_FAV'				=> 'Dodaj “%s” do ulubionych',
	'UCP_FLAIR_UNFAV'			=> 'Usuń “%s” z ulubionych',
	'UCP_FLAIR_REMOVE_CONFIRM'	=> 'Czy na pewno usunąć?',

	'UCP_FLAIR_ADD_BUTTON'	=> 'Dodaj do profilu',
));
