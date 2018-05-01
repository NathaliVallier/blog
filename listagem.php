<?php

	$sql="SELECT * FROM posts";
					// executa sql
	$result = pg_query($conexao, $sql);

	if($result != false){
						// conta numero de linhas retornadas
		if(pg_num_rows($result) > 0){
							// organiza arrays com os dados da consulta

			$result = pg_fetch_all($result);

		}
	}