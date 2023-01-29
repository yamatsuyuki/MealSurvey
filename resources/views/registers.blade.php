<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ログイン</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<div class="registers">
    <div class="mealregister">
        <a href="/mealregister">献立登録</a>
    </div>
    <div class="mealedit">
        <a href="/mealedit">献立編集</a>
    </div>
    <div class="newsregister">
        <a href="/newsregister">ニュース登録</a>
    </div>
    <div class="newsedit">
        <a href="/newsedit">ニュース編集</a>
    </div>
    <div class="useredit">
        <a href="/useredit">ユーザー編集</a>
    </div>


</div>

<footer>
@include('adminfooter')
</footer>

</body>
