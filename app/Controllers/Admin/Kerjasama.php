<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\KerjasamaModel;

class Kerjasama extends BaseController
{
    protected $code;
    protected $kerjasama;

    public function __construct()
    {
        $this->code = new Decode();
        $this->kerjasama = new KerjasamaModel();
    }
    public function index()
    {
        $item['title'] = "Kerjasama";
        return view('admin/kerjasama', $item);
    }

    public function read() 
    {
        $data = $this->kerjasama->findAll();
        foreach ($data as $key => $value) {
            $value->tampil = $value->tampil == '1' ? true : false; 
        }
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'instansi'=>$param->instansi,
            'gambar'=>$this->code->decodebase64($param->berkas->base64,'kerjasama'),
            'tampil'=>false,
        ];
        $this->kerjasama->insert($item);
        $item['id'] = $this->kerjasama->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'instansi'=>$param->instansi,
            'gambar'=>$param->gambar,
            'tampil'=>$param->tampil,
        ];
        if(isset($param->berkas)){
            unlink('assets/berkas/kerjasama/'.$param->gambar);
            $item['gambar'] = $this->code->decodebase64($param->berkas->base64,'kerjasama');
        }
        $this->kerjasama->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $item = $this->kerjasama->where('id', $id)->first();
        $this->kerjasama->delete($id);
        unlink('assets/berkas/kerjasama/'.$item->gambar);
        return $this->respondDeleted(true);
    }
}
