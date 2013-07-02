<?php

class View_Main extends ViewModel{

    public function view(){
        $this->content=View::forge('main');
    }
}