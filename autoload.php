<?php


spl_autoload_register(function($class){
	require APP_PATH.$class .".php";
});