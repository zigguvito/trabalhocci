<?php
		require_once("business/PublicacaoBusiness.php");
	
		/**
		 * @author Robson
		 *
		 */
		class PublicacaoService
		{
		
				var $publicacaoBusiness;
				public function PublicacaoService()
				{
				   $this->publicacaoBusiness = new publicacaoBusiness();
				}
				
				/**
				 * Pesquisa todos os Alunos
				 * @return string
				 */
				public function findAll()
				{
					$publicacaoBusiness = new publicacaoBusiness();
					$collection = $publicacaoBusiness->findAll();
					return json_encode($collection);
				}	

		}

?>