<?php

class ApiController extends \BaseController {

	public function __construct(News $news, Account $account) {
        parent::__construct();
        $this->news = $news;
        $this->account = $account;
    }

    //get News
    public function getNews(){
    	$input = array_map('trim', Input::all());
    	$dataResponse = array();
    	if(!empty($input)){
    		if(isset($input['cat']) && isset($input['limit'])){
    			$listNews = $this->news->where('cate_id',$input['cat'])->take($input['limit'])->orderBy('created_at','DESC')->get()->toArray();
    			if(!empty($listNews)){
    				foreach($listNews AS $value){
    					$imageUrl = Media::find($value['media_id']);
    					$value['img_url'] = 'https://gta-online.vn'.$imageUrl->path.$imageUrl->medium;
    					$value['url_news'] = URL::to('/tin-tuc/'.$value['new_id'].'/'.$value['slug'].'.html');
    					unset($value['content']);
    					$dataResponse[] = $value;
    				}
    				return Response::json(array('Code' => 1,'Msg' => 'Success!!','Data' => $dataResponse));
    			}else{
    				return Response::json(array('Code' => 1,'Msg' => 'Success!!','Data' => $listNews));
    			}
    		}else{
    			return Response::json(array('Code' => 0,'Msg' => 'Not data!'));
    		}
    	}else{
    		$listNews = $this->news->take(5)->orderBy('created_at','DESC')->get()->toArray();
    		if(!empty($listNews)){
				foreach($listNews AS $value){
					$imageUrl = Media::find($value['media_id']);
					$value['img_url'] = 'https://gta-online.vn'.$imageUrl->path.$imageUrl->medium;
					$value['url_news'] = URL::to('/tin-tuc/'.$value['new_id'].'/'.$value['slug'].'.html');
					unset($value['content']);
					$dataResponse[] = $value;
				}
				return Response::json(array('Code' => 1,'Msg' => 'Success!!','Data' => $dataResponse));
			}else{
				return Response::json(array('Code' => 1,'Msg' => 'Success!!','Data' => $listNews));
			}
    	}
    }

    //authorize
    public function authorization(){
    	$input = Input::all();
    	$cipher = new Crypt_TripleDES(CRYPT_DES_MODE_ECB);
		$cipher->setKey('eb4b57225211fceb2a875e2f40cb3b57');
		//dd(urlencode(base64_encode($cipher->encrypt('abcxyz:123456'))));
		//$cipher->setIV('anh');
		if(!empty($input)){
			if(isset($input['encrypt'])){
				$plaintext = $input['encrypt'];
				//var_dump($plaintext);die;
				//$a = base64_decode($plaintext);var_dump($a);die;
				$author = $cipher->decrypt(base64_decode($plaintext));
				$arrAuthor = explode(':', $author);
				$account = $this->account->checkLoginApp($arrAuthor[0], $arrAuthor[1]);
				if ($account instanceof Account) {
                    if (isset($input['remember']) && $input['remember'] == 1) {
                        setcookie('username', $input['username'], time()+3600*24*30);
                        setcookie('password', $input['password'], time()+3600*24*30);
                    }
                    Session::put('auth', $account->ID);
                    return Response::json(array('Code' => 1, 'Msg' => 'Success'));
                } else {
                    return Response::json(array('Code' => 0, 'Msg' => 'Tài khoản hoặc mật khẩu không đúng'));
                }
			}else{
				return Response::json(array('Code' => 0,'Msg' => 'Input data authorization fail!'));
			}
		}else{
			return Response::json(array('Code' => 0,'Msg' => 'Not data authorization!'));
		}
    }

}