<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> about the Php </title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
    <h1>Lets lean about php</h1>
    this is container
    <?php
    $a=2;
    if ($a>10){
        echo " its grater than 10 ";

    }
    else {
        echo " This is not greater than ";
    }

    // arry
    echo "<br>";
    $arr=array("'gaurav'", "'kumar'","'mishra'");
    echo $arr[1];

    for ($i=0; $i <3 ; $i++) { 
        echo $arr[$i];
    }

    foreach ($arr as $varl){
        echo "<br> this arry value is  : ";
        echo $varl;
    }
    $a=0;
    while ($a<=10){
        echo "<br> value is : ";
        echo $a;
        $a++;
    }
    echo "<br>";
    $b=0;
    do {
        echo "<br>the value is : ";
        echo $b;
        $b+=1;
    } while ($b <= 10);
    echo "<br>";
    function fun1(){
        echo "Gaurav Kumar Mishra ";
    }
    fun1()
    ?>

    </div>
</body>
</html>