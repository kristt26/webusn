<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="pengajarController">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nama Pengajar" ng-model="model.nama">
                    </div>
                    <div class="form-group">
                        <label>NIDN</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nomor Induk Dosen Nasional" ng-model="model.nidn">
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <select class="form-control" ng-options="item as item.prodi for item in prodi" ng-model="jurusan" ng-change="model.prodi_id = jurusan.id; model.prodi = jurusan.prodi"></select>
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" accept="image/*" ng-model="model.berkas" base-sixty-four-input>
                            <label class="custom-file-label" for="customFile">{{model.berkas ? model.berkas.filename : model.gambar ? model.gambar :  'Pilih Gambar'}}</label>
                        </div>
                        <img ng-show="model.id && !model.berkas" class="img-fluid" style="border: 5px solid #555" ng-src="<?= base_url() ?>/assets/berkas/pengajar/{{model.gambar}}" width="30%">
                        <img ng-show="model.berkas" class="img-fluid" style="border: 5px solid #555" data-ng-src="data:{{model.berkas.filetype}};base64,{{model.berkas.base64}}" width="30%">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5>Daftar Slide</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table datatable="ng" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Dosen</th>
                                <th>NIDN</th>
                                <th>Prodi</th>
                                <th>Photo</th>
                                <th width="5%">Tampil</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.nama}}</td>
                                <td>{{item.nidn}}</td>
                                <td>{{item.prodi}}</td>
                                <td>
                                    <a href="<?= base_url() ?>/assets/berkas/pengajar/{{item.gambar}}" data-lightbox="photos">{{item.gambar}}</a>
                                </td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch{{$index+1}}" ng-model="item.tampil" ng-change="ubah(item)">
                                        <label class="custom-control-label" for="customSwitch{{$index+1}}"></label>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" ng-click="edit(item)"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" ng-click="delete(item)"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>