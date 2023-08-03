angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('sliderController', sliderController)
    .controller('galeriController', galeriController)
    .controller('beritaController', beritaController)
    // .controller('alternatifController', alternatifController)
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

// function alternatifController($scope, alternatifServices, kriteriaServices, pesan, helperServices) {
//     $scope.setTitle = "Alternatif";
//     $scope.$emit("SendUp", $scope.setTitle);
//     $scope.datas = {};
//     $scope.model = {};
//     $scope.setShow = 'select';
//     $scope.dataExcel = [];

//     kriteriaServices.get().then((res) => {
//         $scope.kriterias = res;
//     })
//     $scope.getData = (param) => {
//         $.LoadingOverlay("show");
//         alternatifServices.setData(param).then(res => {
//             res.forEach(element => {
//                 element.nilai.forEach(nilai => {
//                     var itemKriteria = $scope.kriterias.find(x => x.kode == nilai.kode);
//                     nilai.kriteria_id = itemKriteria.id;
//                     if (itemKriteria) {
//                         if(nilai.value >= 51){
//                             itemKriteria.range.forEach(range => {
//                                 var bobot = range.range.split("-");
//                                 bobot[0] = parseInt(bobot[0]);
//                                 bobot[1] = parseInt(bobot[1]);
//                                 if (nilai.value >= bobot[0] && nilai.value <= bobot[1]) nilai.bobot = range.bobot;
    
//                                 // console.log(bobot);
//                             });
//                         }else nilai.bobot = 0;
//                     }
//                 });
//             });

//             $scope.dataExcel = res;
//             console.log(res);
//             $.LoadingOverlay("hide");
//         })
//     }
//     $scope.next = () => {
//         $scope.setShow = 'data';
//     }

//     $scope.back = () => {
//         $scope.setShow = 'select';
//     }
//     $scope.save = () => {
//         pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
//             $.LoadingOverlay("show");
//             alternatifServices.post($scope.dataExcel).then(res => {
//                 $.LoadingOverlay("hide");
//                 pesan.Success("Berhasil menambah data");
//             })
//         })
//     }

//     $scope.edit = (item) => {
//         $scope.model = angular.copy(item);
//         document.getElementById("periode").focus();
//     }

//     $scope.delete = (param) => {
//         pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
//             klasifikasiServices.deleted(param).then(res => {
//                 pesan.Success("Berhasil menghapus data");
//             })
//         });
//     }

//     $scope.subKlasifikasi = (param) => {
//         document.location.href = helperServices.url + "admin/sub_klasifikasi/data/" + param.id;
//     }
// }

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
