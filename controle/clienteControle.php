<?php
require_once("conexao.php");
require_once("../modelo/clienteModelo.php");
class ClienteControle{
	function login($cliente){
		try{
			$conexao = new Conexao();
			$cmd = $conexao-> getConexao()->prepare("SELECT (email,senha) FROM cliente WHERE email = :e AND senha = :s;");
			$cmd-> bindParam("e", $cliente->getEmail());
			$cmd-> bindParam("s", $cliente->getSenha());
			$cmd->execute();
			$resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "Cliente");
			return $resultado;

		}catch(PDOExeption $e){
			echo "Erro no Banco: {$e-> getMessage()}";
		}catch(Exception $e){
			echo "Erro Geral: {$e-> getMessage()}";
		}
	}
	function inserir($cliente){
		try{
			$conexao = new Conexao(); 
			$nome = $cliente-> getNome();
			$email = $cliente-> getEmail();
			$senha = $cliente-> getSenha();
			$cmd = $conexao-> getConexao()->prepare("INSERT INTO cliente (nome,email,senha) VALUES (:n,:e,:s);");
			$cmd->bindParam("n", $nome);
			$cmd->bindParam("e", $email);
			$cmd->bindParam("s", $senha);
			if($cmd->execute()){
				$conexao->fecharConexao();
				return true;
			}else{
				$conexao->fecharConexao();
				return false;
			}

		}catch(PDOException $e){
			echo "Erro no Banco: {$e->getMessage()}";
		}catch(Exception $e){
			echo "Erro geral: {$e->getMessage()}";
		}
	}
}
?>
