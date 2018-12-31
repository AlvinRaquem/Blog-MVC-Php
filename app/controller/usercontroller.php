<?php


namespace controller;
use base\controller;
use model\user;
use helper\input;
use helper\session;

class usercontroller extends controller {

		public function __construct(){
			parent::__construct(new user);
		}


		public function checkuser(){
			$username = input::post("username");
			$pass = input::post("password");
			$data = [$username,$pass];
			$user = $this->model->checkuser($data);
			echo count($user);	
		}

		public function __destruct(){

		}

}