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
        $data = $this->slider->findAll();
        foreach ($data as $key => $value) {
            $value->tampil = $value->tampil == '1' ? true : false; 
        }
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'judul'=>$param->judul,
            'gambar'=>$this->code->decodebase64($param->berkas->base64,'slider'),
            'tampil'=>false,
        ];
        $this->slider->insert($item);
        $item['id'] = $this->slider->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'judul'=>$param->judul,
            'gambar'=>$param->gambar,
            'tampil'=>$param->tampil,
        ];
        if(isset($param->berkas)){
            unlink('assets/berkas/slider/'.$param->gambar);
            $item['gambar'] = $this->code->decodebase64($param->berkas->base64,'slider');
        }
        $this->slider->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $item = $this->slider->where('id', $id)->first();
        $this->slider->delete($id);
        unlink('assets/berkas/slider/'.$item->gambar);
        return $this->respondDeleted(true);
    }
}
