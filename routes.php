<?php

use base\Route;
use base\view;
use controller\blogcontroller;
use controller\usercontroller;


Route::make('index.php',function(){
	$blog = new blogcontroller;
	$blog->index();
	exit;
});

Route::make('viewblog',function(){
	$blog = new blogcontroller;
	$blog->view();
	exit;
});

Route::make('add',function(){
	$blog = new blogcontroller;
 	$blog->add();
 	exit;
});

Route::make('login',function(){
	view::make("login");
	exit;
});

Route::make('checklogin',function(){
	$user = new usercontroller;
 	$user->checkuser();
 	exit;
});

Route::make('remove',function(){
	$blog = new blogcontroller;
 	$blog->remove($_GET['idno']);
 	exit;
});

Route::make('addblog',function(){
	$blog = new blogcontroller;
	$blog->save();
	exit;
});

Route::make('about',function(){
	view::make("about");
	exit;
});

// if url is not in list, it will display this view
view::make('notexist');

