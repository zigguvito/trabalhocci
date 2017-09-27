<?php
		require_once("business/CursoBusiness.php");
	
		/**
		 * @author Robson
		 *
		 */
		class CursoService
		{
		
				var $cursoBusiness;
				public function CursoService()
				{
				   $this->cursoBusiness = new cursoBusiness();
				}
				
				/**
				 * Pesquisa todos os Alunos
				 * @return string
				 */
				public function findAll()
				{
					$cursoBusiness = new cursoBusiness();
					$collection = $cursoBusiness->findAll();
					return json_encode($collection);
				}	

		}

?>