<?php

namespace base;

use base\view;
use base\model;

Class controller {

	protected $view;
	protected $model;

	public function __construct(model $model = NULL){
		$this->view = new view;
		if($model != NULL){
			$this->model = $model;
		}
	}

}