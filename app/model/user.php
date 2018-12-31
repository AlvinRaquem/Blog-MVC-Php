<?php

namespace model;
use base\model;

class user extends model {

	public function checkuser($data){
		$sql = "SELECT * FROM user WHERE username = ? AND pass_word = ?";
		return $this->ExecuteQuery($sql,$data);
	}
}