<?php
require_once("Conexao.php");
require_once("../modelo/agendaModelo.php");
/*
require_once("C:/xampp/htdocs/Bootstrap/mvc/modelo/Usuario.php");
require_once("C:/xampp/htdocs/Bootstrap/mvc/modelo/Cliente.php");
require_once("C:/xampp/htdocs/Bootstrap/mvc/modelo/Servico.php");
*/

    class AgendaControle{

        /*function listar(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT agenda.idAgenda as id,agenda.data as data,agenda.hora as hora,usuario.usuario as u,cliente.nome as no,servico.nome as ser FROM agenda LEFT JOIN usuario ON agenda.idUser = usuario.idUser LEFT JOIN cliente ON agenda.idCliente = cliente.idCliente LEFT JOIN servico ON agenda.idServico = servico.idServico;");
                  $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "Usuario");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }    
        }
        

         function remover($idAgenda){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM agenda WHERE idAgenda=:idAgenda");
                $cmd->bindParam("idAgenda", $idAgenda);
                if($cmd->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro de PDO: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        */
        function selecionarTodos(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM servicos;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "agendaModelo");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

        
        function inserir($agenda,$usua,$client,$servic){
            try{
                $conexao = new Conexao();
                $data = $agenda->getData();
                $hora = $agenda->getHora();
                $usuario = $usua->getUsuario();
                $nome = $client->getNome();
                $serv = $servic->getNome();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO agenda(data,hora,idNome,idEmail,idServico) VALUES (:d,:h,(SELECT idNome FROM usuario WHERE usuario = :u),(SELECT idCliente FROM cliente WHERE nome = :s),(SELECT idServico FROM servico WHERE nome = :n))");
                $cmd->bindParam("d", $data);
                $cmd->bindParam("h", $hora);
                $cmd->bindParam("u", $usuario);
                $cmd->bindParam("s", $nome);
                $cmd->bindParam("n", $serv);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        /*
         function atualizar($agenda,$usua,$client,$servic){
            try{
                $conexao = new Conexao();
                $data = $agenda->getData();
                $hora = $agenda->getHora();
                $usuario = $usua->getUsuario();
                $nome = $client->getNome();
                $serv = $servic->getNome();
                $cmd = $conexao->getConexao()->prepare("UPDATE agenda SET data = :d,hora = :h ,idUser = (SELECT idUser FROM usuario WHERE usuario = :u) ,idCliente = (SELECT idCliente FROM cliente WHERE nome = :s), idServico = (SELECT  idServico FROM servico WHERE nome = :n)");
                $cmd->bindParam("d", $data);
                $cmd->bindParam("h", $hora);
                $cmd->bindParam("u", $usuario);
                $cmd->bindParam("s", $nome);
                $cmd->bindParam("n", $serv);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        */
    }
?>