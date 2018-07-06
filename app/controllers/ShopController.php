<?php

class ShopController extends \BaseController {
    protected $layout = 'layouts.admin';
    
    public function __construct(News $news) {
        parent::__construct();
        $this->news = $news;
    }

    public function index() {
        $this->layout = View::make('layouts.layout_home_v3');
        $view = View::make('shop.list')->with(array(
            
        ));
        $this->layout->content = $view;
    }
}