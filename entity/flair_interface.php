<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace stevotvr\flair\entity;

/**
 * Profile Flair flair entity interface.
 */
interface flair_interface extends entity_interface
{
	/**
	 * @return int The database ID of the category, if any
	 */
	public function get_cat_id();

	/**
	 * @param int $cat_id The database ID of the category
	 */
	public function set_cat_id($cat_id);

	/**
	 * @return string The name of this flair item
	 */
	public function get_name();

	/**
	 * @param string $name The name of this flair item
	 *
	 * @throws \stevotvr\flair\exception\unexpected_value
	 */
	public function set_name($name);

	/**
	 * @return string The description of this flair item
	 */
	public function get_desc();

	/**
	 * @param string $desc The description of this flair item
	 *
	 * @throws \stevotvr\flair\exception\unexpected_value
	 */
	public function set_desc($desc);

	/**
	 * @return int The order of this flair item
	 */
	public function get_order();

	/**
	 * @param int $order The order of this flair item
	 *
	 * @throws \stevotvr\flair\exception\out_of_bounds
	 */
	public function set_order($order);

	/**
	 * @return string The hex color string for this flair item
	 */
	public function get_color();

	/**
	 * @param string $color The hex color string for this flair item
	 *
	 * @throws \stevotvr\flair\exception\out_of_bounds
	 */
	public function set_color($color);

	/**
	 * @return string The path to the icon file for this flair item
	 */
	public function get_icon_file();

	/**
	 * @return int The width of the icon
	 */
	public function get_icon_width();

	/**
	 * @return int The height of the icon
	 */
	public function get_icon_height();

	/**
	 * Set the icon for this flair item.
	 *
	 * @param string	$file	The path to the icon file
	 * @param int		$width	The width of the icon
	 * @param int		$height	The height of the icon
	 *
	 * @throws \stevotvr\flair\exception\out_of_bounds
	 * @throws \stevotvr\flair\exception\unexpected_value
	 */
	public function set_icon($file, $width = 0, $height = 0);
}
