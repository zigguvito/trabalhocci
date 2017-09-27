app.controller("CursoController", ["$scope","$http", function($scope,$http){

    /**
     * Collection Curso
     * @type {Array}
     */
    $scope.collectionCurso = [];
    $scope.CursoDescricao = "";


    /**
     * $viewContentLoaded
     * Acionado quando o conteúdo é carregado
     */
    $scope.$watch('$viewContentLoaded', function(){
        $scope.findCurso();
    });

    /**
     * Find Curso
     */
    $scope.findCurso = function(){

        if ($scope.cursoDescricao != "")
            url = API_URL + "api/curso?descricao=" + $scope.cursoDescricao;
        else
            url = API_URL + "api/curso";

        $http({
            method: 'GET',
            url: url
        }).then(function successCallback(response) {

            var data = response.data;
            $scope.collectionCurso = data;

        }, function errorCallback(response) {
            alert("Ocorreu um erro");
        });

    };


    /**
     * Abrir Modal
     */
    $scope.openWindow = function(Curso){
        $('#modalCurso').modal()
    };

    $scope.incluir = function(){
        $('#modalCurso').modal()
    };

}]);