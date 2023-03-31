var mApp=angular.module("mApp",[]);

mApp.controller("cAjax",function($scope,$http){
    $scope.datasiswa=[];

    $http({
        method: 'GET',
        url: 'php/datasiswa.php'
    }).then(function success(response){
        $scope.datasiswa=response.data;
    },function error(response){
        console.log(response);
    });
});