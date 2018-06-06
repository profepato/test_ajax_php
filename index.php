<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Ajax</title>
        <script src="js/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        
        <script>
        var i = 0;
        function buscar(){
            var txtRut = document.getElementById("txtRut").value;
            
            $.ajax({
                type: 'POST',
                url: 'http://localhost/test_ajax_php/buscar.php',
                data: {
                    rut: txtRut
                }
            }).done(function (res) {
                $("#res").html(res);
            });
        }
        </script>
        
        <h1>Buscar por rut AJAX</h1>
        <input type="text" id="txtRut" onkeyup="buscar()" placeholder="Rut:"/>
        
        <div id="res"></div>
    </body>
</html>
