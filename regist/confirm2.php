<!DOCTYPE html>
<?php 
    
    $regist = $_POST;
    
    var_dump($regist);
    
    $json = Array(
        "name"=>$regist["token"],
        "mail"=>$regist["mail"],
        "pass"=>$regist["pass"]
    );
    // $json = json_encode($array);
    // echo $json;
    // var_dump($json);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>確認場面</h1>
    <p>この内容で登録してもよろしいですか?</p>
    <form action="https://script.google.com/macros/s/AKfycbyCWGlOLTILXtOtR-mnn0_szLznpsRt5Ffl1mkPRSz6FqBnwZT_nSEpwSuortk08w10/exec" method="post">
        <div>
            <label for="">氏名</label>
            <?php $name; ?>
        </div>
        <div>
            <label for="">Email</label>
            <?php $mail; ?>
        </div>
        <div>
            <label for="">パスワード</label>
            <?php $_POST['pass']; ?>
        </div>
        
        <input type="text" name="data" value=<?php $json?>>
        <?php $_POST; ?>
        <button>確認</button>
    </form>

</body>
</html>