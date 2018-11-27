<?php

namespace helper;

class session {

	public function __construct(){
		if(session_id()=="")
			session_start();
	}


	public function set($key,$val){
		return $_SESSION[$key] = $val;
	}


	public function unsert($key){
		return unset($_SESSION[$key]);
	}


	public function destroy(){
		return session_destroy();
	}

}