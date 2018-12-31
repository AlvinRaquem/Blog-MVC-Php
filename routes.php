<?php

use base\Route;
use base\view;
use controller\blogcontroller;
use controller\usercontroller;


Route::make('index.php',function(){
	$blog = new blogcontroller;
	$blog->index();
});

Route::make('viewblog',function(){
	$blog = new blogcontroller;
	$blog->view();
});

Route::make('add',function(){
	$blog = new blogcontroller;
 	$blog->add();
});

Route::make('login',function(){
	view::make("login");
});

Route::make('checklogin',function(){
	$user = new usercontroller;
 	$user->checkuser();
});

Route::make('remove',function(){
	$blog = new blogcontroller;
 	$blog->remove($_GET['idno']);
});

Route::make('addblog',function(){
	$blog = new blogcontroller;
	$blog->save();
});

Route::make('about',function(){
	view::make("about");
});

