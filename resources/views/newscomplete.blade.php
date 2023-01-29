<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ログイン</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<img src ="\img\10966000158.jpg">
<body>
@include('adminheader')
<div class="completemsg">
  <h4>ご登録完了です。<br></h4>
  <a href="{{route('registers')}}">登録完了しました。登録画面へ</a>
</div>
<footer>
@include('adminfooter')
</footer>
