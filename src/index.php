<?php
namespace app;
use app\V1\User;

class Index
{
	public function index()
	{
		echo '������';
		(new User())->user();
	}   
}

?>