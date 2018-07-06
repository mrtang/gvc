<?php

class LibraryController extends \BaseController {
    protected $layout = 'layouts.admin';
    
    public function __construct(News $news) {
        parent::__construct();
        $this->news = $news;
    }

    public function index() {
        $input = array_map('trim', Input::all());

        $news = $this->news->searchNew($input);
        $totalRecords = $this->news->getTotalRecords($input);
        $hotNews = News::whereRaw('is_deleted = ? and status = ? and type = ?', array(0, 1, 2))->orderBy('updated_at', 'desc')->first();
        $hotNotice = News::whereRaw('is_deleted = ? and status = ? and type = ?', array(0, 1, 1))->orderBy('updated_at', 'desc')->first();

        $this->layout = View::make('layouts.layout_home_v3');
        $view = View::make('library.list')->with(array(
            'news' => $news,
            'totalRecords' => $totalRecords,
            'input' => $input,
            'hotNews' => $hotNews,
            'hotNotice' => $hotNotice
        ));
        $this->layout->content = $view;
    }
    
    public function detail($id) {
        $new = News::find($id);
        if (empty($new)) {
            return Redirect::action('HomeController@index');
        }
        
        $latestNews = News::whereRaw('is_deleted = ? and status = ?', array(0, 1))->orderBy('updated_at', 'desc')->skip(0)->take(5)->get();
        $imageUrl = Media::find($new->media_id);
        
        Session::put('title', $new->title);
        Session::put('description', BaseController::convertStringContent(strip_tags($new->content)));
        Session::put('image', $imageUrl->path.$imageUrl->medium);
        Session::put('url', URL::to('/tin-tuc/'.$new->new_id.'/'.$new->slug.'.html'));
        
        $this->layout = View::make('layouts.layout_sidebar_right_v3');
        $view = View::make('library.detail')->with(array(
            'new' => $new,
            'latestNews' => $latestNews
        ));
        $this->layout->content = $view;
    }
}