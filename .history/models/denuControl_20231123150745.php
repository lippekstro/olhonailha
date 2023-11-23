<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/olhonailha/db/conexao.php";


class denuncia
{
    public $id_denuncia;
    public $titulo;
    public $descricao;
    public $foto_denuncia;
    public $local_denuncia;
    public $id_usuario;
    public $id_tipo;
    public $situacao;


    public function __construct($id_denuncia = false)
    {
        if ($id_denuncia) {
            $this->id_denuncia = $id_denuncia;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $querry = "SELECT*FROM denuncias WHERE id_denuncia = :id";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt -> bindValue(':id', $this->id_denuncia);
        $stmt->execute();
        $denuncia = $stmt->fetch();
        $this->titulo = $denuncia['titulo'];
        $this->descricao = $denuncia['descricao'];
        $this->foto_denuncia = $denuncia['foto_denuncia'];
        $this->local_denuncia = $denuncia['local_denuncia'];
        $this->id_usuario = $denuncia['id_usuario'];
        $this->id_tipo = $denuncia['id_tipo'];
        $this->situacao = $denuncia['situacao'];
    }

    public function criar()
    {

        $querry = "INSERT INTO denuncias (titulo,descricao,foto_denuncia,local_denuncia)VALUES(:titulo,:descri,:foto,:loc)";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt -> bindValue(":titulo", $this->titulo);
        $stmt -> bindValue(":descri", $this->descricao);
        $stmt -> bindValue(":foto", $this->foto_denuncia);
        $stmt -> bindValue(":loc", $this->local_denuncia);
        $stmt -> execute();
        $this->id_denuncia = $conexao->lastInsertId();
        return $this->id_denuncia;
    }

    public static function listar(){
        $querry = "SELECT * FROM denuncias ORDER";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt -> execute();
        $lista = $stmt->fetchAll();
        return $lista ;}
        public static function listaruser($id_usuario)
    {
        $querry = "SELECT * FROM denuncias where id_usuario= :idu";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":idu", $id_usuario);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public static function listarsitu($situacao)
    {
        $querry = "SELECT * FROM denuncias where situacao= :situ";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(":situ", $situacao);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public  function editar()
    {
        $querry = "UPDATE denuncias SET titulo = :titulo, descricao = :descr, foto_denuncia = :fotos, local_denuncia = :local_denuncia, id_tipo = :id_tipo, situacao = :situ WHERE id_denuncia = :id ";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':fotos', $this->foto_denuncia);
        $stmt->bindValue(':local_denuncia', $this->local_denuncia);
        $stmt->bindValue(':id_tipo', $this->id_tipo);
        $stmt->bindValue(':descr', $this->descricao);
        $stmt->bindValue(":id", $this->id_denuncia);
        $stmt->bindValue(":situ", $this->situacao);
        $stmt->execute();
    }

    public function deletar()
    {
        $querry = "DELETE FROM denuncias WHERE id_denuncia = :id";
        $conexao = conexao::conectar();
        $stmt = $conexao->prepare($querry);
        $stmt-> bindValue("id", $this->id_denuncia);
        $stmt-> execute();
    }
}
