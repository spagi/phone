<?php
/**
 * TPhone.php
 *
 * @copyright	More in license.md
 * @license		http://www.ipublikuj.eu
 * @author		Adam Kadlec http://www.ipublikuj.eu
 * @package		iPublikuj:Phone!
 * @subpackage	common
 * @since		5.0
 *
 * @date		12.12.15
 */

namespace IPub\Phone;

use Nette;

trait TPhone
{
	/**
	 * @var Phone
	 */
	protected $phone;

	/**
	 * @param Phone $phone
	 */
	public function injectPhone(Phone $phone)
	{
		$this->phone = $phone;
	}
}