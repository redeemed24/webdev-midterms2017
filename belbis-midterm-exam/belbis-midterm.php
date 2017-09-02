<html>
<head>
<title>Hello</title>
</head>
<body>
<?php
    $months=array("January","February","March","April","May","June","July","August","September","October","November","December");
    $i = 0;
    do{

        echo $months[$i];
        $i++;
    }while($i < 12); 
?>
</body>
</html>