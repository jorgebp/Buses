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
                             $patente, $origen, $destino, $estaengarage, $reviciontecnica,
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
                $listaBuses[]= new Buses($bues['id'],$bues['nombre'],$bues['asiente'],$bues['largo'],
                                         $bues['ancho'],$bues['patente'],$bues['origen'],$bues['destino'],
                                         $bues['garege'],$bues['revision'],$bues['comentario']);
            }
            return $listaBuses;
        }
    }
?>