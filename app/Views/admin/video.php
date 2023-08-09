<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="videoController">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Video" ng-model="model.judul">
                    </div>
                    <div class="form-group">
                        <label>Link Embed</label>
                        <textarea class="form-control form-control-sm" ng-model="model.link" rows="4"></textarea>
                        <!-- <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Gambar" ng-model="model.judul"> -->
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
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th width="5%">Tampil</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.judul}}</td>
                                <td>
                                    <a href="<?= base_url() ?>/assets/berkas/galeri/{{item.gambar}}" data-lightbox="photos">{{item.gambar}}</a>
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