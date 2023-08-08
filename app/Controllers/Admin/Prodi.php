<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\ProdiModel;

class Prodi extends BaseController
{
    protected $code;
    protected $prodi;

    public function __construct()
    {
        $this->code = new Decode();
        $this->prodi = new ProdiModel();
    }
    public function index()
    {
        $item['title'] = "Program Studi";
        return view('admin/prodi', $item);
    }

    public function read() 
    {
        $data = $this->prodi->findAll();
        foreach ($data as $key => $value) {
            $value->tampil = $value->tampil == '1' ? true : false; 
        }
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'prodi'=>$param->prodi,
            'link'=>isset($param->link) ? $param->link : null,
            'desc'=>isset($param->desc) ? $param->desc : null,
            'tampil'=>false,
        ];
        $this->prodi->insert($item);
        $item['id'] = $this->prodi->getInsertID();
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
            unlink('assets/berkas/prodi/'.$param->gambar);
            $item['gambar'] = $this->code->decodebase64($param->berkas->base64,'prodi');
        }
        $this->prodi->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $item = $this->prodi->where('id', $id)->first();
        $this->prodi->delete($id);
        unlink('assets/berkas/prodi/'.$item->gambar);
        return $this->respondDeleted(true);
    }
}
