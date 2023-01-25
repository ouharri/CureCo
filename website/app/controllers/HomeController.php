<?php
class HomeController{
    /**
     * @throws Exception
     */
    public function index(){
        View::load('users/Home' );
    }
}
