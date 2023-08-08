<?= $this->extend('layout/home') ?>
<?= $this->section('content') ?>
<img src="<?= base_url('assets/berkas/berita/').$berita->gambar ?>" class="img-fluid" alt="" width="50%">
<?= $berita->isi?>
<?= $this->endSection() ?>