<?php

class AffiliateController extends \BaseController {

	protected $layout = 'layouts.admin';
    public function __construct(Account $account, Media $media) {
        parent::__construct();
        $this->account = $account;
        $this->media = $media;
    }

    public function index() {
        $input = array_map('trim', Input::all());
        if (isset($input['ref']) && !empty($input['ref'])) {
            setcookie('ref', $input['ref'], time()+60*20);
        }
        $specialNews = News::whereRaw('is_deleted = ? and status = ? and type = ?', array(0, 1, 1))->orderBy('updated_at', 'desc')->skip(0)->take(4)->get();
        $hotNews = News::whereRaw('is_deleted = ? and status = ? and type = ?', array(0, 1, 2))->orderBy('updated_at', 'desc')->skip(0)->take(1)->get()->toArray();
        $latestNews = News::whereRaw('is_deleted = ? and status = ? and type = ? and new_id != ?', array(0, 1, 2,$hotNews[0]['new_id']))->orderBy('updated_at', 'desc')->skip(0)->take(4)->get();
        
        Session::put('title', 'Grand Theft Auto Vietnamese Community');
        Session::put('description', 'Cộng đồng Grand Theft Auto - San Andreas tại Việt Nam. Máy chủ chính thức với IP: GVC.WTF:7777. Bạn sẽ được trải nghiệm qua tất cả nhân vật trong cuộc sống thực tế để có thể phô diễn khả năng của chúng ta cho mọi người xem. Tất cả mọi thứ đã có trong GvC , bạn hãy vào để giao lưu , làm quen với mọi người nào !');
        Session::put('image', Asset('assets/images/banner-bg-1.png'));
        Session::put('url', URL::to('/'));
        
        $this->layout = View::make('layouts.layout_home_v3');
        $view = View::make('home.index')->with(array(
            'specialNews' => $specialNews,
            'latestNews' => $latestNews,
            'hotNews' => $hotNews[0],
        ));
        $this->layout->content = $view;
    }

}