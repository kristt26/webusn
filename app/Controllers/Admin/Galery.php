<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\GaleriModel;

class Galery extends BaseController
{
    protected $code;
    protected $galeri;

    public function __construct()
    {
        $this->code = new Decode();
        $this->galeri = new GaleriModel();
    }
    public function index()
    {
        $item['title'] = "Galery";
        return view('admin/galeri', $item);
    }

    public function read() 
    {
        $data = $this->galeri->findAll();
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
            'gambar'=>$this->code->decodebase64($param->berkas->base64,'galeri'),
            'tampil'=>false,
        ];
        $this->galeri->insert($item);
        $item['id'] = $this->galeri->getInsertID();
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
            unlink('assets/berkas/galeri/'.$param->gambar);
            $item['gambar'] = $this->code->decodebase64($param->berkas->base64,'galeri');
        }
        $this->galeri->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $item = $this->galeri->where('id', $id)->first();
        $this->galeri->delete($id);
        unlink('assets/berkas/galeri/'.$item->gambar);
        return $this->respondDeleted(true);
    }
}
