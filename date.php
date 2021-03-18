<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "Calender.php";
    $calender = new Calender();
    $month = $_POST["month"];
    $day = $_POST["day"];
    $date = $calender->Showdate($month,$day);
    echo "วันที่"." ".$day." "."เดือน"." ".$month;
    ?>
    <h1 id='result'>วัน : <?php echo $date; ?> </h1>
</body>

</html>