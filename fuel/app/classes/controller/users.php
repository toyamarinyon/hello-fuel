<?php

class Controller_Users extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Users &raquo; Index';
		$this->template->content = View::forge('users/index', $data);
	}

	public function action_create()
	{
		$data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Users &raquo; Create';
		$this->template->content = View::forge('users/create', $data);
	}

}
