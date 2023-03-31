var App=angular.module("mApp",[]);

App.controller("cAturData",function($scope){
    $scope.peserta=[
        {nama:"Tuti",semester:3,biayasks:3000000},
        {nama:"Iwan",semester:3,biayasks:3500000},
        {nama:"Budi",semester:5,biayasks:2700000},
        {nama:"Edi",semester:5,biayasks:2500000}
    ];

});