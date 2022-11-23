
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>hello gaurav mishra</h1>
           
        <?php
        echo "<h1>Hello gaurav </h1>";

        $v1=10;
        $v2=20;
        
        echo "Sum of this value is : " , $v1/$v2;
        echo "<br>";
        echo var_dump(1==4); 
        echo "<br>";
        echo var_dump(1!=4);
        echo "<br>";
        echo var_dump(1>=4);
        echo "<br>";
        echo var_dump(1<=4);
        echo "<br>";
        /*
        echo $v1++;
        echo "<br>";
        echo $v1--;
        echo "<br>";
        echo ++$v1;
        echo "<br>";
        echo --$v1;
        */

        // logical opreture
        echo "<br>";
        $myvar = (True) or (False);
        echo var_dump($myvar);

        // data types
        echo "<br>";
        $var="i am gaurav";
        
        echo ($var);
        echo "<br>";
        echo var_dump($var);
        echo "<br>";
        
        // constant is that we can change the value of constant
        define("pi",3.14);

        echo pi;

        // condition 

        $a=20;
        if ($a>10){
            echo " its grater than 10 ";

        }
           
        


        ?>
    </div>
</body>
</html>