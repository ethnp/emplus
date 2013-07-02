<?php

class Controller_System_Base extends Controller_Template{

    public $user;

	public function before(){
		parent::before();
	}

	public function auth(){

	}

	public function after($response){
		$response = parent::after($response);
        return $response;
	}

}
