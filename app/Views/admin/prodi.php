<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="row" ng-controller="prodiController">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <form ng-submit="save()">
                    <div class="form-group">
                        <label>Program Studi</label>
                        <input type="text" class="form-control" id="prodi" aria-describedby="emailHelp" placeholder="Nama Program Studi" ng-model="model.prodi" required>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" class="form-control" id="link" aria-describedby="emailHelp" placeholder="Link Website" ng-model="model.link">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control form-control-sm" ui-tinymce="tinymceOptions" ng-model="model.desc" rows="4"></textarea>
                        <!-- <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul Gambar" ng-model="model.judul"> -->
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h5>Daftar Program Studi</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table datatable="ng" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Program Studi</th>
                                <th>Link</th>
                                <th width="5%">Tampil</th>
                                <th width="20%"><i class="fa fa-cogs" aria-hidden="true"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="item in datas">
                                <td>{{item.prodi}}</td>
                                <td>{{item.link}}</td>
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