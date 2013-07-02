<?php

class Controller_Main extends Controller_System_Base{
    public $current_user;
	public function before(){
		parent::before();
        $this->current_user=Model_User::find('9966529095034de43cf5713066477353 ');
	}

    public function action_index(){
        $this->template->title='Emplus';
        $this->template->content=ViewModel::forge('main');
        $this->template->content->user_info=$this->current_user;
    }
	public function render(){

	}

	public function getUserViews(){

	}

	public function getUserMenu(){

	}

    public function after($response){
        $response = parent::after($response);
        return $response;
    }

}
