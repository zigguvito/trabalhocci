<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('X-Requested-With: *');
    
require 'vendor/autoload.php';
require_once 'service/InstituicaoService.php';
require_once 'service/AlunoService.php';
require_once 'service/OrientadorService.php';
require_once 'service/PublicacaoService.php';
require_once 'service/CursoService.php';

//instancie o objeto
$app = new \Slim\Slim();

//defina a rota instituicao
$app->get('/api/instituicao', function () { 
  $instituicaoService = new InstituicaoService();
  echo $instituicaoService->findAll();
}); 

//defina a rota aluno
$app->get('/api/aluno', function () { 
  $alunoService = new AlunoService();
  echo $alunoService->findAll();
}); 

//defina a rota orientador
$app->get('/api/orientador', function () { 
  $orientadorService = new OrientadorService();
  echo $orientadorService->findAll();
}); 

//defina a rota publicacao
$app->get('/api/publicacao', function () { 
  $publicacaoService = new PublicacaoService();
  echo $publicacaoService->findAll();
}); 

//defina a rota curso
$app->get('/api/curso', function () { 
  $cursoService = new CursoService();
  echo $cursoService->findAll();
}); 

//rode a aplicação Slim 
$app->run();

?>