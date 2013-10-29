<?php
    #Abrimos el fichero en modo de escritura 
    $DescriptorFichero = fopen("fichero_prueba.txt","w"); 

    #Escribimos la primera línea dentro de él 
    $string1 = "Paco, Este es mi primer comentario"; 
    fputs($DescriptorFichero,$string1); 

    #Escribimos la segunda línea de texto 
    $string2 = "Poli, Probando twithor"; 
    fputs($DescriptorFichero,$string2); 

    #Cerramos el fichero 
    fclose($DescriptorFichero); 
?>