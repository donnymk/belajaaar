var mApp=angular.module("mApp",["ngRoute"])
    .config(function($routeProvider){
        $routeProvider
        .when("/siswa",{
            templateUrl: "template/datasiswa.html",
            controller: "cSiswa"
        })
        .when("/siswa/:siswaid",{
            templateUrl: "template/detailsiswa.html",
            controller: "cDetailSiswa"
        })

        .when("/guru",{
            templateUrl:  "template/dataguru.html",
            controller: "cGuru"
        })
        .when("/",{
            templateUrl: "template/datasiswa.html",
            controller: "cSiswa"
        })
        .otherwise({
            redirectTo: "/siswa"
        })
    });

mApp.service("srvDataSiswa",function($http){
    this.ambilDataSiswa = function(){
        return $http.get("php/datasiswa.php");
    }
});

mApp.service("srvDataGuru",function($http){
    this.ambilDataGuru = function(){
        return $http.get("php/dataguru.php");
    }
});

mApp.controller("cSiswa",function($scope,srvDataSiswa){
    $scope.pesan = "Ini aplikasi siswa";
    $scope.datasiswa  = [];

    $scope.lihatdatasiswa = function(){
        srvDataSiswa.ambilDataSiswa().then(function(response){
            $scope.datasiswa = response.data;
        });
    }
    $scope.lihatdatasiswa();
});

mApp.controller("cDetailSiswa",function($scope,$http,$routeParams){
    $scope.detaildatasiswa  = [];

    $scope.lihatdetaildatasiswa = function(){
        $http({
            method: 'GET',
            url: 'php/datasiswadetail.php',
            params: {siswaid: $routeParams.siswaid}
        }).then(function success(response){
            $scope.detaildatasiswa = response.data;
        },function error(response){
            console.log(response);
        });
    }
    $scope.lihatdetaildatasiswa();
});

mApp.controller("cGuru",function($scope,srvDataGuru){
    $scope.pesan = "Ini aplikasi guru";
    $scope.dataguru  = [];

    $scope.lihatdataguru = function(){
        srvDataGuru.ambilDataGuru().then(function(response){
            $scope.dataguru = response.data;
        });
    }
    $scope.lihatdataguru();
});