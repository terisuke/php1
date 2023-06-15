<?php
$random_number = rand(1,5);

if($random_number === 1){
    $result = "最高";
}else if($random_number === 2){
    $result = "いんじゃね？";
}else if($random_number === 3){
    $result = "普通";
}else if($random_number === 4){
    $result = "やべぇ";
}else if($random_number === 5){
    $result = "今日が命日";
} 
///echo $result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>今日の運勢は<br><?=$result?><br>です！</h1>
</body>
</html>