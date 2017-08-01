<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.08.17
 * Time: 11:03
 */

namespace app;

use app\classes\controller\UserController;

class App
{

	public function __construct()
	{
		echo "<p>App:".__LINE__."</p> App instanziiert... <br />";
	}

	public function boot()
	{
		echo "<p>App:".__LINE__."</p> Boot Method aufgerufen... <br />";
		$this->validatePage();


		switch ($_GET['p'] ?? ''){
			case 'users':
				echo "<p>App:".__LINE__."</p> Users page ist aktiv <br />";
				$user = new UserController();
				$user->run();
				break;


			default:
				echo "<p>App:".__LINE__."</p> Home page ist aktiv";
				break;
		}

	}

	public function validatePage()
	{
		// Example but not complete
		if(!isset($_GET['p'])){
			$_GET['p'] = '';
		}

		echo "<p>App:".__LINE__."</p> Page Parameter wurde validiert <br />";
	}
}