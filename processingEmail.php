<?php

    include_once("vendor\autoload.php");

    use Entities\Mensagem;
    use Services\MensagemRepository;
    try{
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["descricao"])){
                echo "E-mail Enviado com sucesso";
                $objetoMensagem = new Mensagem($_POST['name'],$_POST['email'],$_POST['descricao']);
                $objetoRepository = new MensagemRepository();
                
                if($objetoRepository -> enviarMensagem($objetoMensagem)){
                    http_response_code(202);
                }else{
                    http_response_code(500);
                }
            }else{
                echo "E-mail falho";
                http_response_code(500);
            }
        }else{
            echo "Not found";
            http_response_code(404);
        }
    
    
           
    }catch(Exception $e){
        http_response_code(400);
        echo "Deu erro: " . $e->getMessage();
    }
?>