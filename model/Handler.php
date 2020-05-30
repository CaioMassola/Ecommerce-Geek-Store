<?php 

class Handler
{
    public static function arrayHandler()
    {

        $a = [];
        $a['nome'] = $_POST['nome'];
        $a['sobrenome'] = $_POST['sobrenome'];
        $a['status'] = $_POST['status'];
        $a['nasc'] = $_POST['nasc'];
        $a['sexo'] = $_POST['sexo'];
        $a['tel'] = $_POST['tel'];
        $a['cel'] = $_POST['cel'];
        $a['email'] = $_POST['email'];
        $a['senha'] = $_POST['senha'];
        $a['senha2'] = $_POST['senha2'];

        return $a;
    }

    public static function arrayProd()
    {
        $p = [];
        $p['nomeProduto'] = $_POST['nomeProduto'];   
        $p['nomeProduto2'] = $_POST['nomeProduto2'];  
        $p['nomeProduto3'] = $_POST['nomeProduto3'];  
        $p['nomeProduto4'] = $_POST['nomeProduto4'];  
        $p['nomeProduto5'] = $_POST['nomeProduto5'];  
    
        return $p;
       
    }
     
    public static function arrayExcluir()
    {
    
    //Valida em Excluir.php   
    }

    public static function arrayListar()
    {
        $p = [];  
        $p['nomeProdutoExtra'] = $_POST['nomeProdutoExtra'];
        
        return $p;
 
    }
}
?>