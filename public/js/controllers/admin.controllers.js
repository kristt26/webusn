angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('sliderController', sliderController)
    // .controller('juriController', juriController)
    // .controller('kriteriaController', kriteriaController)
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

    $scope.show = (param)=>{
        console.log(param);
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        $scope.model.mulai = new Date($scope.model.mulai);
        $scope.model.selesai = new Date($scope.model.selesai);
        document.getElementById("periode").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            slideServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }

    $scope.subKlasifikasi = (param) => {
        document.location.href = helperServices.url + "admin/sub_klasifikasi/data/" + param.id;
    }
}

// function juriController($scope, juriServices, pesan, helperServices) {
//     $scope.setTitle = "Juri";
//     $scope.$emit("SendUp", $scope.setTitle);
//     $scope.datas = {};
//     $scope.model = {};
//     juriServices.get().then((res) => {
//         $scope.datas = res;
//     })
//     $scope.save = () => {
//         var data = angular.copy($scope.model);
//         pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
//             if ($scope.model.id) {
//                 juriServices.put(data).then(res => {
//                     $scope.model = {};
//                     pesan.Success("Berhasil mengubah data");
//                 })
//             } else {
//                 juriServices.post(data).then(res => {
//                     $scope.model = {};
//                     pesan.Success("Berhasil menambah data");
//                 })
//             }
//         })
//     }

//     $scope.edit = (item) => {
//         $scope.model = angular.copy(item);
//         $scope.model.mulai = new Date($scope.model.mulai);
//         $scope.model.selesai = new Date($scope.model.selesai);
//         document.getElementById("juri").focus();
//     }

//     $scope.delete = (param) => {
//         pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
//             juriServices.deleted(param).then(res => {
//                 pesan.Success("Berhasil menghapus data");
//             })
//         });
//     }

//     $scope.subKlasifikasi = (param) => {
//         document.location.href = helperServices.url + "admin/sub_klasifikasi/data/" + param.id;
//     }
// }

// function kriteriaController($scope, kriteriaServices, pesan, helperServices, subServices) {
//     $scope.setTitle = "Kriteria";
//     $scope.$emit("SendUp", $scope.setTitle);
//     $scope.datas = {};
//     $scope.model = {};
//     kriteriaServices.get().then((res) => {
//         $scope.datas = res;
//     })
//     $scope.save = () => {
//         pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
//             if ($scope.model.id) {
//                 kriteriaServices.put($scope.model).then(res => {
//                     $scope.model = {};
//                     pesan.Success("Berhasil mengubah data");
//                 })
//             } else {
//                 kriteriaServices.post($scope.model).then(res => {
//                     $scope.model = {};
//                     pesan.Success("Berhasil menambah data");
//                 })
//             }
//         })
//     }

//     $scope.edit = (item) => {
//         item.bobot = parseInt(item.bobot);
//         item.profileKriteria = parseInt(item.profileKriteria);
//         $scope.model = angular.copy(item);
//         document.getElementById("kriteria").focus();
//     }

//     $scope.showSub = (param) => {
//         $.LoadingOverlay("show");
//         setTimeout(() => {
//             $.LoadingOverlay("hide");
//             $scope.$applyAsync(x => {
//                 $scope.kriteria = param;
//                 $scope.setTitle = "Sub";
//             })
//         }, 200);
//     }

//     $scope.saveSub = () => {
//         pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
//             $scope.model.kriteria_id = $scope.kriteria.id;
//             if ($scope.model.id) {
//                 subServices.put($scope.model).then(res => {
//                     $scope.model = {};
//                     pesan.Success("Berhasil mengubah data");
//                 })
//             } else {
//                 subServices.post($scope.model).then(res => {
//                     $scope.model.id = res;
//                     if(!$scope.kriteria.sub) $scope.kriteria.sub = [];
//                     $scope.kriteria.sub.push($scope.model);
//                     $scope.model = {};
//                     $scope.model.kriteria_id = $scope.kriteria.id;
//                     pesan.Success("Berhasil menambah data");
//                 })
//             }
//         })
//     }

//     $scope.delete = (param) => {
//         pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
//             kriteriaServices.deleted(param).then(res => {
//                 pesan.Success("Berhasil menghapus data");
//             })
//         });
//     }
//     $scope.deleteSub = (param) => {
//         pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
//             subServices.deleted(param).then(res => {
//                 var index = $scope.kriteria.range.indexOf(param);
//                 $scope.kriteria.range.splice(index, 1);
//                 pesan.Success("Berhasil menghapus data");
//             })
//         });
//     }
//     $scope.back = () => {
//         $.LoadingOverlay("show");
//         setTimeout(() => {
//             $.LoadingOverlay("hide");
//             $scope.$applyAsync(x => {
//                 $scope.kriteria = {};
//                 $scope.setTitle = "Kriteria";
//             })
//         }, 200);
//     }
// }

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
