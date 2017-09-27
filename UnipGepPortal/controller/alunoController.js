app.controller("AlunoController", ["$scope","$http", function($scope,$http){

    /**
     * Collection aluno
     * @type {Array}
     */
    $scope.collectionAluno = [];
    $scope.alunoDescricao = "";


    /**
     * $viewContentLoaded
     * Acionado quando o conteúdo é carregado
     */
    $scope.$watch('$viewContentLoaded', function(){
        $scope.findAluno();
    });

    /**
     * Find Aluno
     */
    $scope.findAluno = function(){

        var url = "";
        if ($scope.alunoDescricao != "")
            url = API_URL + "api/aluno?descricao=" + $scope.alunoDescricao;
        else
            url = API_URL + "api/aluno";

        $http({
            method: 'GET',
            url: url
        }).then(function successCallback(response) {

            var data = response.data;
            $scope.collectionAluno = data;

        }, function errorCallback(response) {
            alert("Ocorreu um erro");
        });

    };


    /**
     * Abrir Modal
     */
    $scope.openWindow = function(aluno){
        $('#modalAluno').modal()
    };

    $scope.incluir = function(){
        $('#modalAluno').modal()
    };

}]);