<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\GaleriModel;
use App\Models\KerjasamaModel;
use App\Models\PengumumanModel;
use App\Models\ProdiModel;
use App\Models\SlideModel;
use App\Models\VideoModel;
use stdClass;

class Home extends BaseController
{
    protected $slide;
    protected $galeri;
    protected $berita;
    protected $kerjasama;
    protected $prodi;
    protected $pengumuman;
    protected $video;

    public function __construct() {
        $this->slide= new SlideModel();
        $this->galeri= new GaleriModel();
        $this->berita= new BeritaModel();
        $this->kerjasama= new KerjasamaModel();
        $this->prodi= new ProdiModel();
        $this->pengumuman= new PengumumanModel();
        $this->video= new VideoModel();
    }
    public function index(): string
    {
        $data['slide'] = $this->slide->where('tampil', '1')->first();
        $data['galeri'] = $this->galeri->where('tampil', '1')->findAll(6);
        $data['berita'] = $this->berita->where('publish', '1')->orderBy('tanggal', 'desc')->findAll(3);
        $data['kerjasama'] = $this->kerjasama->where('tampil', '1')->findAll();
        $data['prodi'] = $this->prodi->where('tampil', '1')->findAll();
        $data['pengumuman'] = $this->pengumuman->where('tampil', '1')->orderBy('tanggal', 'desc')->findAll(3);
        $data['video'] = $this->video->where('tampil', '1')->findAll(3);
        return view('home', $data);
    }
    public function page(): string
    {
        return view('home1');
    }

    public function detail_berita($id): string
    {
        $item['prodi'] = $this->prodi->where('tampil', '1')->findAll();
        $item['data'] = $this->berita->where('id', $id)->first();
        $item['title'] = "Berita";
        return view('detail_berita', $item);
    }

    public function detail_pengumuman($id): string
    {
        $item['prodi'] = $this->prodi->where('tampil', '1')->findAll();
        $item['data'] = $this->pengumuman->where('id', $id)->first();
        $item['title'] = "Pengumuman";
        return view('detail_pengumuman', $item);
    }

    public function contact(): string
    {
        $item['prodi'] = $this->prodi->where('tampil', '1')->findAll();
        $set = new stdClass();
        $set->judul = "CONTACT US";
        $item['data'] = $set;
        $item['title'] = "Contact Us";
        return view('contact', $item);
    }
}
