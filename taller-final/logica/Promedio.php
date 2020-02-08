<?php
    require_once 'Notas.php';

    class Promedio extends Notas{
        public function __construct(){
            $parametros = func_get_args();
            $numero_parametros = func_num_args();

            $funcion_constructor = '__construct' . $numero_parametros;
                if(method_exists($this, $funcion_constructor)){
                   call_user_func_array(array($this, $funcion_constructor), $parametros ); 
                }
        }

        public function __construct5($t1, $t2, $c1, $c2, $pf){
            parent::__construct5($t1, $t2, $c1, $c2, $pf);
        }


        public function calcularPromedio(){
            return($this->getTaller1()*0.20 + $this->getTaller2()*0.15 + $this->getCuestionario1()*0.22 + $this->getCuestionario2()*0.10 + $this->getProyectoFinal()*0.33 );
        }
    }
?>