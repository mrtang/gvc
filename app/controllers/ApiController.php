<?php

class ApiController extends \BaseController {

	public function __construct(News $news) {
        parent::__construct();
        $this->news = $news;
    }

    //get News
    public function getNews(){
    	$input = array_map('trim', Input::all());
    	var_dump($input);die;
    }

}