var mApp=angular.module("mApp",["ngRoute"])
    .config(function($routeProvider){
        $routeProvider
        .when("/siswa",{
            templateUrl: "template/datasiswa.html",
            controller: "cSiswa"
        })
        .when("/guru",{
            templateUrl: "template/dataguru.html",
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

mApp.controller("cSiswa",function($scope,$http){
    $scope.pesan = "Ini aplikasi siswa";
    $scope.datasiswa  = [];

    $scope.lihatdatasiswa=function(){
        $http({
            method: 'GET',
            url: 'php/datasiswa.php'
        }).then(function success(response){
            $scope.datasiswa=response.data;
        },function error(response){
            console.log(response);
        });
    }

    $scope.lihatdatasiswa();
});

mApp.controller("cGuru",function($scope,$http){
    $scope.pesan = "Ini aplikasi guru";
    $scope.dataguru  = [];

    $scope.lihatdataguru=function(){
        $http({
            method: 'GET',
            url: 'php/dataguru.php'
        }).then(function success(response){
            $scope.dataguru=response.data;
        },function error(response){
            console.log(response);
        });
    }

    $scope.lihatdataguru();
});