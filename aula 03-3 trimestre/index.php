<html>
    <head>
        <title> Aula 03-php </title>
    </head>
    <body>
        <?php
             $nome1= "Isabela";
             $nome2= "Ana julia";

             $n1=10;
             $n2=2;

             $soma=$n1+$n2;


             echo "Meu nome é  " .$nome1 . "  e  minha dupla  é  " .$nome2 ; 
             echo "<br> Meu nome é $nome1 e minha dupla é $nome2.";

             echo "<br><br> A soma de $n1 com $n2 é igual a $soma. ";
             echo "<br><br> A subtração dos números $n1 e $n2 é igual a:  " . ($n1-$n2). ".";
             echo "<br><br> A multiplicação dos números $n1 e $n2 é igual a: " . ($n1*$n2). ".";
             echo "<br><br> A divisão dos números $n1 e $n2 é igual a: " . ($n1/$n2). ".";
            echo "<br><br> A operação de módulo dos numeros $n1 e $n2 é igual a: " . ($n1%$n2). "."
        ?>
   </body>
</html>
