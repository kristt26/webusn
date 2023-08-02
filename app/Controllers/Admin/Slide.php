<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\SlideModel;

class Slide extends BaseController
{
    protected $code;
    protected $slider;

    public function __construct()
    {
        $this->code = new Decode();
        $this->slider = new SlideModel();
    }
    public function index()
    {
        $item['title'] = "Slider";
        return view('admin/slide', $item);
    }

    public function read() 
    {
        return $this->respond($this->slider->findAll());
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $param->gambar = $this->code->decodebase64($param->berkas->base64,'slider');
        $this->slider->insert($param);
        $param->id = $this->slider->getInsertID();
        return $this->respondCreated($param);
    }

    public function put() 
    {
        
    }

    public function delete() 
    {
        
    }
   
}
