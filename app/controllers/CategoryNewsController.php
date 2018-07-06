<?php

class CategoryNewsController extends \BaseController {
    protected $layout = 'layouts.admin';
    
    public function __construct(CategoryNews $cNews) {
        parent::__construct();
        $this->news = $cNews;
    }

    public function index() {
        $input = array_map('trim', Input::all());
        
        $news = $this->news->searchNew($input);
        $totalRecords = $this->news->getTotalRecords($input);
        
        $view = View::make('cateNews.index')->with(array(
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
                Session::flash('f_notice', 'Tạo mới thành công');            
                return Response::json(array(
                    'status' => 1,
                    'redirect' => route('admin.catenews'),
                    'message' => 'Tạo mới thành công'
                ));
                
            }else{
                return Response::json(array(
                    'status' => 0, 
                    'code' => 'invalid_data', 
                    'messages' =>  CommonHelper::replaceErrorMessage($validator->messages()->getMessages())));
            }       
        } else {
            $view = View::make('cateNews.create');
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
        $new = CategoryNews::find($id);
        if (empty($new)) Redirect::to('/admin/catenews');
        
        $input = array_map('trim', Input::all());
        if (!empty($input)) {
            $validator = $this->news->validate($input);
            if($validator->passes()){
                $this->news->updateNew($input, $id);
                Session::flash('f_notice', 'Cập nhật thành công');            
                return Response::json(array(
                    'status' => 1,
                    'redirect' => route('admin.catenews'),
                    'message' => 'Cập nhật thành công'
                ));
                
            }else{
                return Response::json(array(
                    'status' => 0, 
                    'code' => 'invalid_data', 
                    'messages' =>  CommonHelper::replaceErrorMessage($validator->messages()->getMessages())));
            }       
        } else {
            $view = View::make('cateNews.edit')->with(array(
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
        if (empty($new)) Redirect::to('/admin/catenews');
   
        Library::destroy($id);
        Session::flash('f_notice', 'Danh mục đã được xóa thành công');
        return Response::json(array(
            'status' => 1,
            'href' => URL::to('/admin/catenews'),
        ));
    }
}