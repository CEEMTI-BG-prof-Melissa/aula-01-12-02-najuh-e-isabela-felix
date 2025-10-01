<html>
    <head>
        <title> Aula 06 -php </title>
    </head>
    <body>
        <h3> Operadores de atributos </h3>
        <br>

          <?php
           $a=2;
           $b=$a+5;
           echo"A é igual a $a e B é igual a $b. ";
           echo "<br><br>";
           $a=$b+3;
           echo "agora A é igual a $a.";
           echo "<br><br>";
           $b+=8;
           echo"Agora B é  igual a $a.";
           echo "<br><br>";
           $b-=5;
           echo "Agora B é igual a $b.";  
           echo "<br><br>";
           $b*=2;
           echo "Multiplicando o valor de B por 2 fica igual $b.";
           $b/=10;
           echo "dividindo o valor de B por 10 fica igual a $b.";
           echo "<br><br>";
           $b%=3;
           echo "o resto do divisao do valor de B dividido por 3 é igual a $b. ";
           echo "<br><br>";
           $b.=10;
           echo "concatenando o valor de B com 10 fica igual a $b. ";
           echo "<br><br>";



    ?>

   </body>
</html>
