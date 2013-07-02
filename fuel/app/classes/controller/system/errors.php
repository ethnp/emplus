<?php

class Controller_System_Errors extends Controller_Template
{

	public function action_404(){
		$this->template->content = View::forge('system/errors/404');
	}

	public function action_500(){
		$this->template->content = View::forge('system/errors/500');
	}

}
