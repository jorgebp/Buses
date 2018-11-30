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
            $listaempresa[]= new Empresa($empresa['idempresa'],$empresa['nombreempresa'],$empresa['rutempresa']);
        }
        return $listaempresa;
    }

    // Función para registrar una empresa.
    public static function save($empresa)
    {
        $db=Db::getConnect();
        $insert=$db->prepare('INSERT INTO EMPRESA VALUES(:idempresa,:nomempresa,:rutempresa)');
        $insert->bindValue('idempresa',$empresa->idempresa);
        $insert->bindValue('nombreempresa',$empresa->nombreempresa);
        $insert->bindValue('rutempresa',$empresa->rutempresa);
        $insert->execute();
    }

    //Función para actualizar.
    public static function uptdate($empresa)
    {
        $db=Db::getConnect();
        $update=$db->prepare('UPDATE empresa SET nomempresa=:nombreempresa, rutempresa=:rutempresa WHERE idempresa=:idempresa');
        $update->bindValue('idempresa',$empresa->idempresa);
        $update->bindValue('nombreempresa',$empresa->nombreempresa);
        $update->bindValue('rutempresa',$empresa->rutempresa);
        $update->execute();
    }

    //Función para eliminar por el id.
    public static function delete($idempresa)
    {
        $db=Db::getConnect();
        $delete=$db->prepare('DELETE FROM empresa WHERE idempresa=:idempresa');
        $delete->bindValue('idempresa',$empresa->idempresa);
        $delete->execute();
    }
}

?>