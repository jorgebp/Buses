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
    }
?>