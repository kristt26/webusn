<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VideoModel;

class Video extends BaseController
{
    protected $video;

    public function __construct()
    {
        $this->video = new VideoModel();
    }
    public function index()
    {
        $item['title'] = "Video";
        return view('admin/video', $item);
    }

    public function read() 
    {
        $data = $this->video->findAll();
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
            'link'=>$param->link,
            'tampil'=>false,
        ];
        $this->video->insert($item);
        $item['id'] = $this->video->getInsertID();
        return $this->respondCreated($item);
    }

    public function put() 
    {
        $param = $this->request->getJSON();
        $item = [
            'id'=>$param->id,
            'judul'=>$param->judul,
            'link'=>$param->link,
            'tampil'=>$param->tampil,
        ];
        $this->video->update($param->id, $item);
        return $this->respondUpdated($item);
    }

    public function delete($id) 
    {
        $this->video->delete($id);
        return $this->respondDeleted(true);
    }
}
