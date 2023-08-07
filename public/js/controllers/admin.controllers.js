angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('sliderController', sliderController)
    .controller('galeriController', galeriController)
    .controller('beritaController', beritaController)
    .controller('kerjasamaController', kerjasamaController)
    // .controller('laporanController', laporanController)
    ;

function dashboardController($scope, dashboardServices) {
    $scope.setTitle = "Dashboard";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.paragraph = "Sistem penjurusan menggunakan metode Moora pada SMA .....";
    // dashboardServices.get().then(res=>{
    //     $scope.datas = res;
    // })
}

function sliderController($scope, slideServices, pesan, helperServices) {
    $scope.setTitle = "Slider";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    slideServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                slideServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                slideServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param)=>{
        slideServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param)=>{
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            slideServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }

    $scope.subKlasifikasi = (param) => {
        document.location.href = helperServices.url + "admin/sub_klasifikasi/data/" + param.id;
    }
}

function galeriController($scope, galeriServices, pesan, helperServices) {
    $scope.setTitle = "Galery";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    galeriServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                galeriServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                galeriServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param)=>{
        galeriServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param)=>{
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            galeriServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function beritaController($scope, beritaServices, pesan, helperServices) {
    $scope.setTitle = "Berita";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.tinymceOptions = {
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight alignleft aligncenter alignright | numlist bullist indent outdent | emoticons charmap | removeformat | code'
      };
    beritaServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                beritaServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                beritaServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param)=>{
        beritaServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param)=>{
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $("#modelId").modal('show');
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            beritaServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}

function kerjasamaController($scope, kerjasamaServices, pesan, helperServices) {
    $scope.setTitle = "Kerjasama";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    kerjasamaServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            $.LoadingOverlay("show");
            if ($scope.model.id) {
                kerjasamaServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $.LoadingOverlay("hide");
                })
            } else {
                kerjasamaServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $.LoadingOverlay("hide");
                })
            }
        })
    }

    $scope.ubah = (param)=>{
        kerjasamaServices.put(param).then(res => {
            $scope.model = {};
            pesan.Success("Berhasil mengubah data");
        })
    }

    $scope.show = (param)=>{
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("judul").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin ingin menghapus?', 'Ya', 'Tidak').then(res => {
            kerjasamaServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
}
// function laporanController($scope, lombaServices, pesan, helperServices, laporanServices) {
//     $scope.setTitle = "Laporan";
//     $scope.$emit("SendUp", $scope.setTitle);
//     $scope.datas = {};
//     $scope.periodes = {};
//     $scope.model = {};
//     lombaServices.get().then((res) => {
//         $scope.periodes = res;
//     })
//     $scope.hitung = (param) => {
//         laporanServices.hitung(param).then(res=>{
//             $scope.datas = res;
//             console.log(res);
//         });
//     }
// }
