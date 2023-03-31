var mApp=angular.module("mApp",["ngRoute"])
    .config(function($routeProvider){
        $routeProvider
        .when("/siswa",{
            templateUrl: "template/siswa.html",
            controller: "cSiswa"
        })
        .when("/guru",{
            templateUrl: "template/guru.html",
            controller: "cGuru"
        })
        .when("/",{
            templateUrl: "template/siswa.html",
            controller: "cSiswa"
        })
        .otherwise({
            redirectTo: "/siswa"
        })
    });

mApp.controller("cSiswa",function($scope){
    $scope.pesan="Ini aplikasi siswa";
})
mApp.controller("cGuru",function($scope){
    $scope.pesan="Ini aplikasi guru";
})