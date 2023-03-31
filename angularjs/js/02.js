var App=angular.module("mApp",[]);

App.controller("cData",function($scope){
    $scope.bahasa="Angular JS";
    $scope.tingkat="Pemula";

    $scope.pelajar=[{nama:"Tuti",umur:18},{nama:"Iwan",umur:19},{nama:"Jimmy",umur:18}];
});