<?php

class ApiController extends \BaseController {

	public function __construct(News $news) {
        parent::__construct();
        $this->news = $news;
    }

    //get News
    public function getNews(){
    	$input = array_map('trim', Input::all());
    	if(!empty($input)){
    		if(isset($input['cat']) && isset($input['limit'])){
    			echo 2;
    		}else{
    			return Response::json(array('Code' => 0,'Msg' => 'Not data!!'));
    		}
    	}else{
    		return Response::json(array('Code' => 0,'Msg' => 'Not data!'));
    	}
    }

    //authorize

}