<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
<?php
echo "foreach";
echo "<br>";
$name= "saranya";
$age=22;
$place="kottayam";
$employee_Id="CTPL0500";
$emp_details=array("Name"=>$name,"Age"=>$age,"Place"=>$place,"employee_Id"=>$employee_Id);
foreach($emp_details as $i=> $val){
    echo $i."\t&nbsp\t&nbsp\t";
}
echo "<br>";
foreach($emp_details as $i => $val){
    echo $val."\t&nbsp\t";
}
echo "<br><br>";
echo"for loop";
echo "<br>";
for($i=0;$i<10;$i++){
    echo $i."<br>";
}
?>
<table>
    <th>
        
    </th>
</table>
</body>
</html>


