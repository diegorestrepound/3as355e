<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset-utf-8"/> 
    <script>
        function proceso( txttaller1, txttaller2,txtcuestionario1, txtcuestionario2, txtproyectofinal, boton){
            switch(boton){
                case "Calcular":
                    var parametros= {
                        
                        "txttaller1" : txttaller1,
                        "txttaller2" : txttaller2,
                        "txtcuestionario1" : txtcuestionario1,
                        "txtcuestionario2" : txtcuestionario2,
                        "txtproyectofinal" : txtproyectofinal,
                        "btncalcular" : boton
                    }
                break;
            }
            $.ajax({
                data : parametros,
                url : 'calcular.php',
                type : 'post',
                beforeSend : 
                        function(){
                            $('#resultado').html('Cargando...');
                        },
                success :
                        function(response){
                            $('#resultado').html(response);
                        }
            });
        }
    </script>
</head>
<body>
    <H1>Ingrese las notas: </H1> 
        <form name="form1">
            <p>- Taller 1:   
                <input type ="text" name="txttaller1" id="txttaller1" placeholder="Escribe una nota*" required>
            </p>
            <p>- Taller 2:    
                <input type ="text" name="txttaller2" id="txttaller2" placeholder="Escribe una nota*" required>
            </p>
            <p>- Cuestionario 1:
                <input type ="text" name="txtcuestionario1" id="txtcuestionario1" placeholder="Escribe una nota*" required>
            </p>
            <p>- Cuestionario 2:
                <input type ="text" name="txtcuestionario2" id="txtcuestionario2" placeholder="Escribe una nota*" required>
            </p>
            <p>- Proyecto final: 
                <input type ="text" name="txtproyectofinal" id="txtproyectofinal" placeholder="Escribe una nota*" required>
            </p>
            <br>
            <p>
                <input type="button" name="btncalcular" id="btncalcular" value="Calcular"
                onclick="proceso($('#txttaller1').val(), 
                $('#txttaller2').val(), 
                $('#txtcuestionario1').val(), 
                $('#txtcuestionario2').val(), 
                $('#txtproyectofinal').val(), 
                $('#btncalcular').val() );">
            </p>
            <br>
        </form>
        <br>
        <span id="resultado"></span>
        <script src="js/jquery-3.4.1.js"></script>
</body>
</html>