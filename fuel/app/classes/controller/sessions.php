<?php

class Controller_Sessions extends Controller_Template
{

	public function action_new()
	{
		$data["subnav"] = array('new'=> 'active' );
		$this->template->title = 'Sessions &raquo; New';
		$this->template->content = View::forge('sessions/new', $data);
	}

	public function action_create()
	{
		// already logged in?
		if (\Auth::check())
		{
			// yes, so go back to the page the user came from, or the
			// application dashboard if no previous page can be detected
			\Response::redirect_back('welcome');
		}

		// was the login form posted?
		if (\Input::method() == 'POST')
		{
			// check the credentials.
			if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
			{
				// did the user want to be remembered?
				if (\Input::param('remember', false))
				{
					// create the remember-me cookie
					\Auth::remember_me();
				}
				else
				{
					// delete the remember-me cookie if present
					\Auth::dont_remember_me();
				}

				// logged in, go back to the page the user came from, or the
				// application dashboard if no previous page can be detected
				\Response::redirect_back('welcome');
			}
			else
			{
				// login failed, show an error message
				Session::set_flash('error', 'Login failed');
				$data["subnav"] = array('create'=> 'active' );
				$this->template->title = 'Sessions &raquo; Create';
				$this->template->content = View::forge('sessions/new', $data);
			}
		}
	}

	public function action_destroy()
	{
		$data["subnav"] = array('destroy'=> 'active' );
		$this->template->title = 'Sessions &raquo; Destroy';
		$this->template->content = View::forge('sessions/destroy', $data);
	}

}
