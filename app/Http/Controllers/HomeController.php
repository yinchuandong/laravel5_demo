<?php namespace App\Http\Controllers;

use App\Models\Page;
use Request;

class HomeController extends Controller {

	public function index()
	{
		return view('home')->withPages(Page::all());
	}


    public function register(){
        return view('register');
    }

    public function upload(){
        if(Request::hasFile('photo')){
            $file = Request::file('photo');
            var_dump($file);
            if($file->isValid()){
                //app_path() --> /app
                var_dump($file->getClientOriginalName());
                var_dump($file->getRealPath());
                var_dump($file->getExtension());
                var_dump($file->getClientOriginalExtension());
                var_dump($file->getMimeType());

                $path = storage_path().'/uploads';
                $clientName = $file->getClientOriginalName();
                
                $extension = $file->getClientOriginalExtension();
                $newName = date('YmdHis').'_'.md5($clientName).".".$extension;
                var_dump($newName);

                $file->move($path, $newName);

            }
        }
    }

    public function ueditor()
    {
        return view('vendor.UEditor.test');
    }

}
