<?php

class AcademyController extends \BaseController {
    protected $layout = 'layouts.admin';
    
    public function __construct(Academy $academy) {
        parent::__construct();
        $this->news = $academy;
    }

    public function index() {
        $input = array_map('trim', Input::all());
        
        $news = $this->news->searchNew($input);
        $totalRecords = $this->news->getTotalRecords($input);
        
        $view = View::make('academy.index')->with(array(
            'news' => $news,
            'totalRecords' => $totalRecords,
            'input' => $input
        ));
        $this->layout->content = $view;
    }
    
    /**
     * View layout create new and promotion
     * @author Thuan Truong
     * @param
     * @return view
     */
    public function create() {
        $input = array_map('trim', Input::all());
        if (!empty($input)) {
            $validator = $this->news->validate($input);
            if($validator->passes()){
                $this->news->createNew($input);
                Session::flash('f_notice', 'Tạo mới tin tức thành công');            
                return Response::json(array(
                    'status' => 1,
                    'redirect' => route('admin.academy'),
                    'message' => 'Tạo mới tin tức thành công'
                ));
                
            }else{
                return Response::json(array(
                    'status' => 0, 
                    'code' => 'invalid_data', 
                    'messages' =>  CommonHelper::replaceErrorMessage($validator->messages()->getMessages())));
            }       
        } else {
            $view = View::make('academy.create');
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
        Log::info($id);
        $new = Academy::find($id);
        if (empty($new)) Redirect::to('/admin/academy');
        
        $input = array_map('trim', Input::all());
        if (!empty($input)) {
            $validator = $this->news->validate($input);
            if($validator->passes()){
                $this->news->updateNew($input, $id);
                Session::flash('f_notice', 'Sửa tin tức thành công');            
                return Response::json(array(
                    'status' => 1,
                    'redirect' => route('admin.academy'),
                    'message' => 'Sửa tin tức thành công'
                ));
                
            }else{
                return Response::json(array(
                    'status' => 0, 
                    'code' => 'invalid_data', 
                    'messages' =>  CommonHelper::replaceErrorMessage($validator->messages()->getMessages())));
            }       
        } else {
            $view = View::make('academy.edit')->with(array(
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
        $new = Academy::find($id);
        if (empty($new)) Redirect::to('/admin/academy');
   
        Academy::destroy($id);
        Session::flash('f_notice', 'Tin tức đã được xóa thành công');
        return Response::json(array(
            'status' => 1,
            'href' => URL::to('/admin/academy'),
        ));
    }

    
    /**
     * Update Status new: Publish or unpublish
     * @param integr $id: ID of survey
     * @param integer $status: 0 is unpublish, 1 is publish
     * @return json response
     */
    public function updateStatus($id) {
        $new = Academy::find($id);
        if ($new) {
            $status = Input::get('status', 0);
            $status = (int) $status;
            $new->status = $status;
            $new->update();          
            
            Session::flash('f_notice', $status ? Lang::get('new.action.public.done') : Lang::get('new.action.unpublic.done'));
            if (Request::wantsJson()) {
                return Response::json(array(
                    'status' => 1,
                    'href' => URL::to('/admin/academy/list')
                ));
                
            } else {
                return Redirect::action('AcademyController@index')->with('f_notice', Lang::get('new.action.public.done'));
            }
        }
    }

    public function category($id) {
        $infoCate = CategoryAcademy::find($id);
        $cateAca = CategoryAcademy::orderBy('created_at', 'asc')->take(3)->get();
        $hotNews = News::whereRaw('is_deleted = ? and status = ? and cate_id = ?', array(0, 1, (int)$id))->orderBy('updated_at', 'desc')->first();
        $news = $this->news->getNewsCategory((int)$id,$hotNews->new_id);
        $this->layout = View::make('layouts.layout_home_v3');
        $view = View::make('academy.category')->with(array(
            'news' => $news,
            'hotNews' => $hotNews,
            'listCate' => $cateAca,
            'info' => $infoCate
        ));
        $this->layout->content = $view;
    }

    public function listnew() {
        $input = array_map('trim', Input::all());

        $news = $this->news->searchNew($input);
        $totalRecords = $this->news->getTotalRecords($input);
        $hotNews = Academy::whereRaw('is_deleted = ? and status = ? and type = ?', array(0, 1, 2))->orderBy('updated_at', 'desc')->first();
        $cateAca = CategoryAcademy::orderBy('created_at', 'asc')->take(3)->get();

        $this->layout = View::make('layouts.layout_home_v3');
        $view = View::make('academy.list')->with(array(
            'news' => $news,
            'totalRecords' => $totalRecords,
            'input' => $input,
            'hotNews' => $hotNews,
            'listCate' => $cateAca
        ));
        $this->layout->content = $view;
    }

    public function detail($id) {
        $new = Academy::find($id);
        if (empty($new)) {
            return Redirect::action('HomeController@index');
        }
        $imageUrl = Media::find($new->media_id);        
        Session::put('title', $new->title);
        Session::put('description', BaseController::convertStringContent(strip_tags($new->content)));
        Session::put('image', $imageUrl->path.$imageUrl->medium);
        Session::put('url', URL::to('/tin-tuc/'.$new->new_id.'/'.$new->slug.'.html'));
        
        $this->layout = View::make('layouts.layout_sidebar_right_v3');
        $view = View::make('academy.detail')->with(array(
            'new' => $new,
        ));
        $this->layout->content = $view;
    }
}