<?php
    if(isset($_POST["btncalcular"])){
        sleep(2);

        
        require_once 'logica/Taller1.php';
        require_once 'logica/Taller2.php';
        require_once 'logica/Cuestionario1.php';
        require_once 'logica/Cuestionario2.php';
        require_once 'logica/ProyectoFinal.php';
        require_once 'logica/Promedio.php';

        
        $taller1 = $_POST["txttaller1"];
        $taller2 = $_POST["txttaller2"];
        $cuestionario1 = $_POST["txtcuestionario1"];
        $cuestionario2 = $_POST["txtcuestionario2"];
        $proyectoFinal = $_POST["txtproyectofinal"];

        
        $objTaller1 = new Taller1($taller1,$taller2,$cuestionario2,$cuestionario1,$proyectoFinal);
        $objTaller2 = new Taller2($taller1,$taller2,$cuestionario2,$cuestionario1,$proyectoFinal);
        $objCuestionario1 = new Cuestionario1($taller1,$taller2,$cuestionario2,$cuestionario1,$proyectoFinal);
        $objCuestionario2 = new Cuestionario2($taller1,$taller2,$cuestionario2,$cuestionario1,$proyectoFinal);
        $objProyectoFinal = new ProyectoFinal($taller1,$taller2,$cuestionario2,$cuestionario1,$proyectoFinal);
        $objPromedio = new Promedio($taller1, $taller2, $cuestionario1, $cuestionario2, $proyectoFinal);
        
        $pago=500000;
         
        print "<b> La nota definitiva es: </b>" . $objPromedio->calcularPromedio() . "<br>";
        

        
        if($objPromedio->calcularPromedio() > 0 && $objPromedio->calcularPromedio() <= 0.99){
            print "Super deficiente, materia perdida y debe pagarla nuevamente. <br>";
            print "el valor a pagar es: " . $pago . "<br>" ;
        }else if($objPromedio->calcularPromedio() < 1.99){
            print"Deficiente, materia perdida y debe pagar el 50% <br>";
            print "el valor a pagar es: " . ($pago*0.5) . "<br>";
        }else if($objPromedio->calcularPromedio() < 2.99){
            print"Insuficiente, materia perdida y debe pagar el 10% <br>";
            print "el valor a pagar es: " . ($pago*0.10) . "<br>" ;
        }else if($objPromedio->calcularPromedio() < 3.99){
            print "Aceptable, materia aprovada <br>";

        }else if($objPromedio->calcularPromedio() < 4.99){
            print "Sobresaliente <br> ";

        }else if($objPromedio->calcularPromedio() == 5){
            
            print"Excelente y gana beca educativa <br>";
        }else{
            print "Error <br>";
        }
        "<br>";  
        date_default_timezone_set('America/Bogota');
        "<br>";
        print "la fecha de realizado el calculo fue:  " . date("d") . " del " . date("m") . " de " . date("Y");
        print " a las: " . date("H") . ":" . date("i");
        "<br>";
       
        
    }
?>