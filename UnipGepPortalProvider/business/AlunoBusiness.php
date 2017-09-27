<?php

		require_once("util/Factory.php");
	
		/**
		 * @author Robson
		 *
		 */
		class AlunoBusiness
		{
			
				public $con;
				public function AlunoBusiness()
				{
				   $this->con = new Factory();
				}
				
				/**
				 * Pesquisa todas as Alunos
				 * @return string
				 */
				public function findAll()
				{
					$query = "select a.idAluno, o.nome as nomeOrientador, i.sigla as siglaInstituicao, a.matricula,
					a.nome as nomeAluno, a.sexo, a.dataNascimento, a.cpf, a.ativo
					from Aluno a
					join Instituicao i on i.idInstituicao = a.idInstituicao 
					join Orientador o on o.idOrientador = a.idOrientador";
					$rs = $this->con->getConnection()->query($query);

					$collection = $rs->fetchAll( PDO::FETCH_OBJ );
					return $collection;
				}	

				#public function findNome()
				#{
				#	$query = "select a.idAluno, o.nome as nomeOrientador, i.sigla as siglaInstituicao, a.matricula,
				#	a.nome, a.sexo, a.dataNascimento, a.cpf, a.ativo
				#	from Aluno a
				#	join Instituicao i on i.idInstituicao = a.idInstituicao 
				#	join Orientador o on o.idOrientador = a.idOrientador
				#	where a.nome like "%"+ +"%"";
				#	$rs = $this->con->getConnection()->query($query);
#
				#	$collection = $rs->fetchAll( PDO::FETCH_OBJ );
				#	return $collection;
				#}	

		}

?>