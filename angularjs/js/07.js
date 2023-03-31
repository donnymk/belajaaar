var mApp=angular.module("mApp",[]);

mApp.controller("cAjax",function($scope,$http){
    //$scope.datasiswa=[];

    $scope.siswabaru={
        nosiswa: '',
        nama: '',
        alamat: '',
        thnmasuk: 2000
    }

    $scope.lihatdatasiswa=function(){
        $scope.datasiswa=[];
        $http({
            method: 'GET',
            url: 'php/datasiswa.php'
        }).then(function success(response){
            $scope.datasiswa=response.data;
        },function error(response){
            console.log(response);
        });
    }

    $scope.inputsiswa=function(){
        var str="nosiswa="+$scope.siswabaru.nosiswa+"&nama="+$scope.siswabaru.nama+"&alamat="+$scope.siswabaru.alamat+"&thnmasuk="+$scope.siswabaru.thnmasuk;
        $http({
            method: 'POST',
            url: 'php/inputdatasiswa.php?'+str
        });

        $scope.lihatdatasiswa();
    }

    $scope.lihatdatasiswa();
});