<?php
namespace app;
use app\V1\User;

class Index
{
	public function index()
	{
		echo '¹þ¹þ¹þ';
		(new User())->user();
	}   
}

?>