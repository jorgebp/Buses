<?php 
    class bus_models
    {
        //Atributos de la clase Bus.
        public $id;
        public $nombreempresa;
        public $maximoasiento;
        public $largo;
        public $ancho;
        public $patente;
        public $origen;
        public $destino;
        public $estaengarage;
        public $revisiontecnica;
        public $comentario;

        //Constructor de la clase.
        function __construct($id, $nombreempresa, $maximoasiento, $largo, $ancho,
                             $patente, $origen, $destino, $estaengarage, $revisiontecnica,
                             $comentario)
        {
            $this->id=$id;
            $this->nombre=$nombreempresa;
            $this->asiento=$maximoasiento;
            $this->largo=$largo;
            $this->ancho=$ancho;
            $this->patente=$patente;
            $this->origen=$origen;
            $this->destino=$destino;
            $this->garage=$estaengarage;
            $this->revision=$revisiontecnica;
            $this->comentario=$comentario;
        }
        
        //Función para obtener todos los buses.
        public static function all()
        {
            $listaBuses = [];
            $db=Db::getConnect();
            $sql=$db->query('SELECT * FROM BUSES');

            //Cargar en la $listaBuses cada registro desde la base de datos
            foreach($sql->fetchAll() as $buses)
            {
                $listaBuses[]= new Buses($buses['id'],$buses['nombreempresa'],$buses['maximoasiento'],$buses['largo'],
                                         $buses['ancho'],$buses['patente'],$buses['origen'],$buses['destino'],
                                         $buses['estaengarage'],$buses['revisiontecnica'],$buses['comentario']);
            }
            return $listaBuses;
        }

        //Función para registrar buses.
        public static function save($buses)
        {
            $db=Db::getConnect();
            $insert=$db-prepare('INSERT INTO BUSES VALUES(:id,:nombreempresa,:maximoasiento,:largo,
                                                          :ancho,:patente,:origen,:destino,
                                                          :estaengarage,:revisiontecnica,:comentario)');
            $insert->bindValue('id',$buses->$id);
            $insert->bindValue('nombre',$buses->$nombreempresa);
            $insert->bindValue('asiento',$buses->$maximoasiento);
            $insert->bindValue('largo',$buses->$largo);
            $insert->bindValue('ancho',$buses->$ancho);
            $insert->bindValue('patente',$buses->$patente);
            $insert->bindValue('origen',$buses->$origen);
            $insert->bindValue('destino',$buses->$destino);
            $insert->bindValue('garage',$buses->$estaengarage);
            $insert->bindValue('revision',$buses->$revisiontecnica);
            $insert->bindValue('comentario',$buses->$comentario);
            $insert->execute();
        }

        //Función para actualizar buses.
        public static function update($buses)
        {
            $db=Db::getConnect();
            $update=$db->prepare('UPDATE BUSES SET nombre=:nombreempresa, asiento=:maximoasiento, largo=:largo, 
                                                   ancho=:ancho, patente=:patente, origen=:origen, destino=:destino, 
                                                   garage=:estaengarage, revision=:revisiontecnica, comentario=:comentario WHERE id=:id');
            $update->bindValue('id',$buses->$id);
            $update->bindValue('nombre',$buses->$nombreempresa);
            $update->bindValue('asiento',$buses->$maximoasiento);
            $update->bindValue('largo',$buses->$largo);
            $update->bindValue('ancho',$buses->$ancho);
            $update->bindValue('patente',$buses->$patente);
            $update->bindValue('origen',$buses->$origen);
            $update->bindValue('destino',$buses->$destino);
            $update->bindValue('garage',$buses->$estaengarage);
            $update->bindValue('revision',$buses->$revisiontecnica);
            $update->bindValue('comentario',$buses->$comentario);
            $update->execute();
        }

        //Función para eliminar buses por el id.
        public static function delete($id)
        {
            $db=Db::getConnect();
            $delete=$db->prepare('DELETE FROM BUSES WHERE id=:id');
            $delete->bindValue('id',$id);
            $delete->execute();
        }

        //Funcion para dar de baja un bus por id.
        public static function give_up()
        {

        }
    }
?>