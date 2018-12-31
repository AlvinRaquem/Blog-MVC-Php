<?php

include "config.php";
include "autoload.php";
include "routes.php";

$request = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] : '';
$userlevel = isset($_SESSION['USER_LEVEL']) ? $_SESSION['USER_LEVEL'] : 'GUEST';







// use controller\blogcontroller;
// use controller\usercontroller;
// use base\view;

// switch ($userlevel) {
// 	case 'GUEST':

// 		if(fnmatch(ROOT_PATH."/notexist", $request)){
// 			view::make("notexist");
// 			break;
// 		}
		
// 		if(fnmatch("", $request)){
// 			$blog = new blogcontroller;
// 			$blog->index();
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/test", $request)){
// 			$blog = new blogcontroller;
// 			$blog->test();
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/add", $request)){
// 			$blog = new blogcontroller;
// 			$blog->add();
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/addblog", $request)){
// 			$blog = new blogcontroller;
// 			$blog->save();
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/about", $request)){
// 			view::make("about");
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/login", $request)){
// 			view::make("login");
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/viewblog", $request)){
// 			$blog = new blogcontroller;
// 			$blog->view();
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/remove", $request)){
// 			$blog = new blogcontroller;
// 			$blog->remove($_GET['idno']);
// 			break;
// 		}

// 		if(fnmatch(ROOT_PATH."/checklogin", $request)){
// 			$user = new usercontroller;
// 			$user->checkuser();
// 			break;
// 		}


	
// 	default:
// 		break;
// }






