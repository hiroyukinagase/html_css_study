<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTのサンプル</title>
</head>
<body>

<?php
    //commentがPOSTされているなら
if(isset($_POST["comment"])){
    //エスケープしてから表示
    $comment = htmlspecialchars($_POST["comment"]);
    print("あなたのコメントは「 {$comment} 」です。");
}   else {
    ?><p>コメントしてください。</p>
        <form method="POST" action="GET_POST.php">
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>

<?php
    }
?>
$PostData
aaa
</body>
</html>