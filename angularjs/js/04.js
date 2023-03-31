var mApp=angular.module("mApp",[]);

mApp.controller("cPerhitungan",function($scope){
    $scope.bilA=0;
    $scope.bilB=0;
    $scope.hasil=0;

    $scope.prosesJumlah=function(){
        $scope.hasil = parseInt($scope.bilA) + parseInt($scope.bilB);
    }
});