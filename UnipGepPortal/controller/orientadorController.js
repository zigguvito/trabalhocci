app.controller("OrientadorController", ["$scope","$http", function($scope,$http){

    /**
     * Collection orientador
     * @type {Array}
     */
    $scope.collectionOrientador = [];
    $scope.orientadorDescricao = "";


    /**
     * $viewContentLoaded
     * Acionado quando o conteúdo é carregado
     */
    $scope.$watch('$viewContentLoaded', function(){
        $scope.findOrientador();
    });

    /**
     * Find Orientador
     */
    $scope.findOrientador = function(){

        var url = "";
        if ($scope.orientadorDescricao != "")
            url = API_URL + "api/orientador?descricao=" + $scope.orientadorDescricao;
        else
            url = API_URL + "api/orientador";

        $http({
            method: 'GET',
            url: url
        }).then(function successCallback(response) {

            var data = response.data;
            $scope.collectionOrientador = data;

        }, function errorCallback(response) {
            alert("Ocorreu um erro");
        });

    };


    /**
     * Abrir Modal
     */
    $scope.openWindow = function(Orientador){
        $('#modalOrientador').modal()
    };

    $scope.incluir = function(){
        $('#modalOrientador').modal()
    };

}]);