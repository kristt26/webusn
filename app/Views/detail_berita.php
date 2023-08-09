<?= $this->extend('layout/home') ?>
<?= $this->section('content') ?>
<img src="<?= base_url('assets/berkas/berita/') . $data->gambar ?>" class="img-fluid" alt="" width="40%">
<?= $data->isi ?>
<?= $this->endSection() ?>