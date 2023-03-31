var mApp=angular.module("mApp",[]);

mApp.controller("cView",function($scope){
    $scope.peserta=[
        {nama:"Tuti",jk:"Wanita"},
        {nama:"Iwan",jk:"Pria"},
        {nama:"Johny",jk:"Pria"},
        {nama:"Wati",jk:"Wanita"}
    ]
});