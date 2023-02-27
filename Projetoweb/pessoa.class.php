<?php

//Classe
public class Pessoa (){
    //Atributos
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Método GET
    public function getNome (){
      return $this->nome;
    }
    
    //Metodo SET
    public function setNome ($nome) {
        $this -> nome = $nome;
    }

    //Método GET
    public function getEndereco (){
        return $this->endereco;
    }
    
    //Metodo SET
    public function setEndereco ($endereco) {
        $this -> endereco = $endereco;
    }

     //Método GET
     public function getBairro (){
        return $this->bairro;
    }
    
    //Metodo SET
    public function setBairro ($bairro) {
        $this -> bairro = $bairro;
    }

     //Método GET
     public function getCep (){
        return $this->cep;
    }
    
    //Metodo SET
    public function setCep ($cep) {
        $this -> getCep = $cep;
    }

     //Método GET
     public function getCidade (){
        return $this->cidade;
    }
    
    //Metodo SET
    public function setCidade ($cidade) {
        $this -> cidade = $cidade;
    }

     //Método GET
     public function getEstado (){
        return $this->estado;
    }
    
    //Metodo SET
    public function setEstado ($estado) {
        $this -> estado = $estado;
    }




    /*
    .
    .
    .
    Deve-se colocar todos os métodos GET e SET correspondente a classe Pessoa ()
    */
}

?>