<?php
    class Notas{
        
        private $taller1;
        private $taller2;
        private $cuestionario1;
        private $cuestionario2;
        private $proyectoFinal;
        private $total;

        public function __construct(){
            $parametros = func_get_args();
            $numero_parametros = func_num_args();

            $funcion_constructor = '__construct' . $numero_parametros;
                if(method_exists($this, $funcion_constructor)){
                   call_user_func_array(array($this, $funcion_constructor), $parametros ); 
            }
        }

        public function __construct0(){
            $this->taller1 = 0; 
            $this->taller2 = 0;
            $this->cuestionario1 = 0;
            $this->cuestionario2 = 0;
            $this->proyectoFinal = 0;
        }

        public function __construct5($t1, $t2, $c1, $c2, $pf){
            $this->taller1 = $t1; 
            $this->taller2 = $t2;
            $this->cuestionario1 = $c1;
            $this->cuestionario2 = $c2;
            $this->proyectoFinal = $pf;
        }

        public function setTaller1($valor){
            $this->taller1 = $valor;
        }
        protected function getTaller1(){
            return $this->taller1;
        }

        public function setTaller2($valor){
            $this->taller2 = $valor;
        }
        protected function getTaller2(){
            return $this->taller2;
        }

        public function setCuestionario1($valor){
            $this->cuestionario1 = $valor;
        }
        protected function getCuestionario1(){
            return $this->cuestionario1;
        }

        public function setCuestionario2($valor){
            $this->cuestionario2 = $valor;
        }
        protected function getCuestionario2(){
            return $this->cuestionario2;
        }

        public function setProyectoFinal($valor){
            $this->proyectoFinal = $valor;
        }
        protected function getProyectoFinal(){
            return $this->proyectoFinal;
        }

        public function setTotal($valor){
            $this->total=$valor;
        }
        protected function getTotal(){
            return $this->total;
        }
    }
?>