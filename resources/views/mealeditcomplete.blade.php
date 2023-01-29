<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>編集完了ページ</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<div class="completemsg">
  <h4>編集完了しました<br></h4>
  <a href="{{ route('mealedit') }}"> 献立の一覧</a>
</div>
<footer>
@include('adminfooter')
</footer>
