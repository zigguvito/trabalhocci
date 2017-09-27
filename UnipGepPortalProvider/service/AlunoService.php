<?php
		require_once("business/AlunoBusiness.php");
	
		/**
		 * @author Robson
		 *
		 */
		class AlunoService
		{
		
				var $alunoBusiness;
				public function AlunoService()
				{
				   $this->alunoBusiness = new alunoBusiness();
				}
				
				/**
				 * Pesquisa todos os Alunos
				 * @return string
				 */
				public function findAll()
				{
					$alunoBusiness = new AlunoBusiness();
					$collection = $alunoBusiness->findAll();
					return json_encode($collection);
				}	

		}

?>