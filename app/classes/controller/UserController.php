<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.08.17
 * Time: 11:12
 */

namespace app\classes\controller;

use app\classes\model\User;

class UserController
{

	public function __construct()
	{
		echo "<p>UserController:".__LINE__."</p> UserController wurde instanziiert.<br />";
	}


	public function run()
	{
		echo "<p>UserController:".__LINE__."</p> run methode wurde aufgerufen <br />";

		if(isset($_GET['action'])){
			switch ($_GET['action']){

				case 'create':
					echo "<p>UserController:".__LINE__."</p> Create-Aktion wurde initialisiert <br />";
					$this->validate();
					$user = new User();
					$user->create();
					break;
			}
		}
	}

	public function validate()
	{
		echo "<p>UserController:".__LINE__."</p> Formulareingaben wurden validiert <br />";
	}
}