<?php

namespace controller;

use base\controller;
use model\blog;
use helper\input;

Class blogcontroller extends controller {

	public function __construct(){
		parent::__construct(new blog);
	}

	public function index(){
		$sql = "SELECT * FROM blog";
		$blogs = $this->model->getAll($sql);
		return $this->view->make("index",compact('blogs',$blogs));
	}

	public function add(){
		return $this->view->make("add");
	}

	public function view(){
		$idno = input::get('idno');
		$blog = $this->model->getBlog($idno);
		return $this->view->make("view",compact("blog",$blog));
	}

	public function remove($id){
		$this->model->remove($id);
		$this->view->redirect("");
	}

	public function save(){
		$title = input::post("title");
		$body = input::post("body");
		$data = array($title,$body,date("Y-m-d",time()));
		$this->model->save($data);
		$this->view->redirect("");
	}
}