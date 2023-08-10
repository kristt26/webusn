<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Decode;
use App\Models\DosenModel;

class Pengajar extends BaseController
{
    protected $code;
    protected $pengajar;

    public function __construct()
    {
        $this->code = new Decode();
        $this->pengajar = new DosenModel();
    }
    public function index()
    {
        $item['title'] = "Pengajar";
        return view('admin/pengajar', $item);
    }

    public function read() 
    {
        $data = $this->pengajar->select('dosen.*, prodi.prodi')->join('prodi', 'prodi.id=dosen.prodi_id', 'LEFT')->findAll();
        foreach ($data as $key => $value) {
            $value->tampil = $value->tampil == '1' ? true : false; 
        }
        return $this->respond($data);
    }

    public function post() 
    {
        $param = $this->request->getJSON();
        $item = [
            'nama'=>$param->nama,
            'nidn'=>$param->nidn,
            'prodi_id'=>$param->prodi_id,
            'gambar'=>$this->code->decodebase64($param->berkas->base64,'pengajar'),
            'tampil'=>false,
        ];
        $this->pengajar->insert($item);
        $item['id'] = $this->pengajar->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'nama'=>$param->nama,
            'nidn'=>$param->nidn,
            'prodi_id'=>$param->prodi_id,
            'tampil'=>$param->tampil,
        ];
        if(isset($param->berkas)){
            unlink('assets/berkas/pengajar/'.$param->gambar);
            $item['gambar'] = $this->code->decodebase64($param->berkas->base64,'pengajar');
        }
        $this->pengajar->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $item = $this->pengajar->where('id', $id)->first();
        $this->pengajar->delete($id);
        unlink('assets/berkas/pengajar/'.$item->gambar);
        return $this->respondDeleted(true);
    }
}
