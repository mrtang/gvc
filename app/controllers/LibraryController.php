<?php

class LibraryController extends \BaseController {
    protected $layout = 'layouts.admin';
    
    public function __construct(Library $news) {
        parent::__construct();
        $this->news = $news;
    }

    public function index() {
        $input = array_map('trim', Input::all());
        
        $news = $this->news->searchNewAdmin($input);
        $totalRecords = $this->news->getTotalRecords($input);
        
        $view = View::make('library.index')->with(array(
            'news' => $news,
            'totalRecords' => $totalRecords,
            'input' => $input
        ));
        $this->layout->content = $view;
    }
    
    public function create() {
        $input = array_map('trim', Input::all());
        if (!empty($input)) {
            $validator = $this->news->validate($input);
            if($validator->passes()){
                $this->news->createNew($input);
                Session::flash('f_notice', 'Tạo mới tin tức thành công');            
                return Response::json(array(
                    'status' => 1,
                    'redirect' => route('admin.library'),
                    'message' => 'Tạo mới tin tức thành công'
                ));
                
            }else{
                return Response::json(array(
                    'status' => 0, 
                    'code' => 'invalid_data', 
                    'messages' =>  CommonHelper::replaceErrorMessage($validator->messages()->getMessages())));
            }       
        } else {
            $view = View::make('library.create');
            $this->layout->content = $view;
        }
    }
    
    
    /**
     * Show the form for editing new.
     * @author Thuan Truong
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $new = Library::find($id);
        if (empty($new)) Redirect::to('/admin/library');
        
        $input = array_map('trim', Input::all());
        if (!empty($input)) {
            $validator = $this->news->validate($input);
            if($validator->passes()){
                $this->news->updateNew($input, $id);
                Session::flash('f_notice', 'Sửa tin tức thành công');            
                return Response::json(array(
                    'status' => 1,
                    'redirect' => route('admin.library'),
                    'message' => 'Sửa tin tức thành công'
                ));
                
            }else{
                return Response::json(array(
                    'status' => 0, 
                    'code' => 'invalid_data', 
                    'messages' =>  CommonHelper::replaceErrorMessage($validator->messages()->getMessages())));
            }       
        } else {
            $view = View::make('library.edit')->with(array(
                'new' => $new,
            ));
            $this->layout->content = $view;
        }
    }


    /**
     * Delete new 
     * @author Thuan Truong
     * @param id
     * @return response
     */
    public function delete($id) {
        $new = Library::find($id);
        if (empty($new)) Redirect::to('/admin/library');
   
        Library::destroy($id);
        Session::flash('f_notice', 'Tin tức đã được xóa thành công');
        return Response::json(array(
            'status' => 1,
            'href' => URL::to('/admin/library'),
        ));
    }

    public function listnew() {
        $input = array_map('trim', Input::all());

        $hot = Library::whereRaw('is_deleted = ? and status = ?', array(0, 1))->orderBy('updated_at', 'desc')->first();
        $news = $this->news->searchNew($input,$hot);
        $totalRecords = $this->news->getTotalRecords($input);

        $this->layout = View::make('layouts.layout_home_v3');
        $view = View::make('library.list')->with(array(
            'news' => $news,
            'totalRecords' => $totalRecords,
            'input' => $input,
            'hotNews' => $hot,
        ));
        $this->layout->content = $view;
    }
    
    public function detail($id) {
        $new = Library::find($id);
        if (empty($new)) {
            return Redirect::action('HomeController@index');
        }
        
        $latestNews = Library::whereRaw('is_deleted = ? and status = ?', array(0, 1))->orderBy('updated_at', 'desc')->skip(0)->take(5)->get();
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