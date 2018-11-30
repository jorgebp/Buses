<?php 

class empresa_models
{
    //atributos
    public $idempresa;
    public $nombreempresa;
    public $rutempresa;

    //Constructor de la clase
    function __construct($idempresa, $nombreempresa, $rutempresa)
    {
        $this->idempresa=$idempresa;
        $this->nombreempresa=$nombreempresa;
        $this->rutempresa=$rutempresa;
    }

    //Función para obtener todas las empresas.
    public static function all()
    {
        $listaempresa=[];
        $db=Db::getConnect();
        $sql=$db->query('SELECT * FROM empresa');

        //Cargar en la $listaempresa cada registro desde la base de datos
        foreach ($sql->fetchAll() as $empresa)
        {
            $listaempresa[]= new Empresa($empresa['idempresa'],$empresa['nombreempresa'],$empresa['rutempresa'])
        }
        return $listaempresa;
    }

    // Función para registrar una empresa.
    public static function save($empresa)
    {
        $db=Db::getConnect();
        $insert=$db->prepare('INSERT INTO EMPRESA VALUES(:idempresa,:nomempresa,:rutempresa)');
        $insert->bindValue('',$empresa->idempresa);
        $insert->bindValue('',$empresa->nombreempresa);
        $insert->bindValue('',$empresa->rutempresa);
        $insert->execute();
    }
}

?>