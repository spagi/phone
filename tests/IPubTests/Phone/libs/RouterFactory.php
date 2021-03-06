<?php
/**
 * Test: IPub\Phone\Libraries
 * @testCase
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:Phone!
 * @subpackage     Tests
 * @since          1.1.5
 *
 * @date           26.01.17
 */

declare(strict_types = 1);

namespace IPubTests\Phone\Libs;

use Nette;
use Nette\Application;
use Nette\Application\Routers;

/**
 * Simple routes factory
 *
 * @package        iPublikuj:Phone!
 * @subpackage     Tests
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
class RouterFactory
{
	/**
	 * @return Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new Routers\RouteList();
		$router[] = new Routers\Route('<presenter>/<action>[/<id>]', 'Test:default');

		return $router;
	}
}
