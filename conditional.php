<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional</title>
</head>
<body>
    <?php
    echo "Examples for For loop:<br><br>";
    $first_num=4;
    $second_num=9;
    $third_num=8;
    if($first_num >$second_num && $first_num > $third_num){
        echo"$first_num is gretest among three numbers";
    }
    elseif($second_num  > $third_num){
        echo"$second_num is gretest among three numbers";
    }
    else{
        echo"$third_num is gretest among three numbers";
    }

    echo"<br> <br>Examples for Switch case<br><br>";



    $choice = "python";
    switch ($choice) {
    case "Java":
    echo "You can use Java";
    break;
    case "C++":
    echo "You can use C++";
    break;
    case "C#":
    echo "You can use C#";
    break;
    case "python":
    echo "You can use python";
    break;
    default:
    echo "Your can use php";
}
    ?>
    
</body>
</html>