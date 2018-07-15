<?php
    
    $nome = "form-ex4.txt";//nome do arquivo


    function validaEmail(){
        global $nome;
        //valida se email já existe
        $conteudo_arq = file_get_contents($nome);
        if(strpos($conteudo_arq,$_POST['email']) === false)//nao encontrado
        {
            return true;//é valido pois ainda não existe esse email cadastrado
        }else{
            echo "email já foi cadastrado.";
            return false;//não é valido
        }
    }
    
    function encryptaPassword(){
        $_POST['password'] = md5($_POST['password']);//encrypta o password
    }

    function escreveArquivo(){
        global $nome;
        //arquivo
        if(validaEmail()){
            $text =  print_r($_POST, true);//texto que sera escrito
            $file = fopen($nome,'a');//abre arquivo
            fwrite($file,$text);//escreve no arquivo
            fclose($file);//fecha o arquivo
        }
    }

    if(isset($_POST)){
        escreveArquivo();
    }
?>



<form method="POST" action="/ex4.php">
    <input type="text" placeholder="nome" id="nome" name="nome" /><br/>
    <input type="text" placeholder="sobrenome" id="sobrenome" name="sobrenome" /><br/>
    <input type="email" placeholder="email" id="email" name="email" /><br/>
    <input pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"  type="tel" placeholder="tel" id="tel" name="tel" />formato: (19) 99999-9999<br/>
    <input type="text" placeholder="login" id="login" name="login" /><br/>
    <input type="password" placeholder="senha" id="senha" name="senha" /><br/>
    <button type="submit">Enviar</button>
</form>