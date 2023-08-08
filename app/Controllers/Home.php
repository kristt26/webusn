<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\GaleriModel;
use App\Models\KerjasamaModel;
use App\Models\ProdiModel;
use App\Models\SlideModel;

class Home extends BaseController
{
    protected $slide;
    protected $galeri;
    protected $berita;
    protected $kerjasama;
    protected $prodi;

    public function __construct() {
        $this->slide= new SlideModel();
        $this->galeri= new GaleriModel();
        $this->berita= new BeritaModel();
        $this->kerjasama= new KerjasamaModel();
        $this->prodi= new ProdiModel();
    }
    public function index(): string
    {
        $data['slide'] = $this->slide->where('tampil', '1')->first();
        $data['galeri'] = $this->galeri->where('tampil', '1')->findAll();
        $data['berita'] = $this->berita->where('publish', '1')->orderBy('tanggal', 'desc')->findAll(3);
        $data['kerjasama'] = $this->kerjasama->where('tampil', '1')->findAll();
        $data['prodi'] = $this->prodi->where('tampil', '1')->findAll();
        return view('home', $data);
    }
    public function page(): string
    {
        return view('home1');
    }

    public function detail_berita($id): string
    {
        $item['berita'] = $this->berita->where('id', $id)->first();
        return view('detail_berita', $item);
    }
}
