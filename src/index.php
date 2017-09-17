<?php
namespace App;
use User\V2\User;

class Index
{
	public function index()
	{
		echo '121221=====';
		(new User())->user();
	}   
}

?>