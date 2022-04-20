<?php namespace App\Controllers;
use App\Models\CatogeriesModel;

class Categories extends BaseController
{
    
    public function index(){
        $data = [
            'meta_title' => 'Categories',
            'title' => 'Choose category',
        ];
        if($this->request->getMethod() == 'post'){ 
            $model = new CatogeriesModel();
            $model->save($_POST);
        }
        return view('categories', $data);
    }
    
} 