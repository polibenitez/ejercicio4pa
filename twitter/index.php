<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./estilo.css">
    <title>twithor</title>
    <? 
    function leer(){
    #Abrimos el fichero en modo lectura 
        $DescriptorFichero = fopen("fichero_prueba.txt","r"); 

    #Hasta que no lleguemos al final del fichero 
        while(!feof($DescriptorFichero)){ 
            $buffer = fgets($DescriptorFichero,4096); 
            $Usuario="";
            $Comentario="";
            $longitud=strlen($buffer);
            $i=0;
            $encontrado=0;
            while ($i<$longitud && !$encontrado) {
                if (strcmp($buffer[$i], ",")!=0) {
                   $Usuario=$Usuario.$buffer[$i];   
               }else{
                 $Comentario=substr($buffer,$i+1,$longitud);
                 $encontrado=1;
             }
             $i++;
         }
         if(isset($Usuario)){
            echo "<tr>";
            echo "<td>".$Usuario."</td>";
            echo "<td>".$Comentario."</td>";
            echo "</tr>";
        }else{
            echo "<h3>";
            echo "No existen tweets quieres ser el primero?";
            echo "</h3>";
        }
     } 
 }
 ?>
</head>
<body>
    <div>
        <div class="cabecera">
            <h1>Twithor</h1>
        </div>
        <div class="contenido">
            <table border="true">
                <tr>
                    <td>Usuario</td>
                    <td class="coment">Comentario</td>
                </tr>
                <?php
                    leer();
                ?>
            </table>
        </div>
        <div class="lateral">
            <h2>Publicar</h2>
            <form action="mensaje.php" method="post">
                Usuario: <input name="user" type="text"/> <br />
                Contraseña: <input name="pass" type="password"/> <br />
                Comentario: <textarea name="problema" rows="10" cols="10"> Escriba aqu&iacute;...</textarea><br/>
                <input type="submit" name="envio" value="Enviar" />
                <input type="reset" name="rest" value="Restaurar" />
            </form>
        </div>
        <div class="pie">
            creado por MAMISHO
        </div>
    </div>
</body>
</html>
