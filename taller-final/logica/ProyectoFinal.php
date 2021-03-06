<?php
    require_once 'Notas.php';

    class ProyectoFinal extends Notas{
        public function __construct(){
            $parametros = func_get_args();
            $numero_parametros = func_num_args();

            $funcion_constructor = '__construct' . $numero_parametros;
                if(method_exists($this, $funcion_constructor)){
                   call_user_func_array(array($this, $funcion_constructor), $parametros ); 
                }
        }

        public function __construct2($t1, $t2, $c1, $c2, $pf){
            parent::__construct2($t1, $t2, $c1, $c2, $pf);
        }


        public function calcularProyectoFinal($porcentaje){
            return($this->getProyectoFinal() * $porcentaje);
        }
    }
?>