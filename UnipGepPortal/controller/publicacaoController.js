app.controller("PublicacaoController", ["$scope","$http", function($scope,$http){

    /**
     * Collection publicacao
     * @type {Array}
     */
    $scope.collectionPublicacao = [];
    $scope.publicacaoDescricao = "";


    /**
     * $viewContentLoaded
     * Acionado quando o conteúdo é carregado
     */
    $scope.$watch('$viewContentLoaded', function(){
        $scope.findPublicacao();
    });

    /**
     * Find Publicacao
     */
    $scope.findPublicacao = function(){

        var url = "";
        if ($scope.publicacaoDescricao != "")
            url = API_URL + "api/publicacao?descricao=" + $scope.publicacaoDescricao;
        else
            url = API_URL + "api/publicacao";

        $http({
            method: 'GET',
            url: url
        }).then(function successCallback(response) {

            var data = response.data;
            $scope.collectionPublicacao = data;

        }, function errorCallback(response) {
            alert("Ocorreu um erro");
        });

    };


    /**
     * Abrir Modal
     */
    $scope.openWindow = function(Publicacao){
        $('#modalPublicacao').modal()
    };

    $scope.incluir = function(){
        $('#modalPublicacao').modal()
    };

}]);