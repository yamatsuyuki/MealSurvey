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
<div class="completemsg">
  <h4>ご登録完了しました。<br></h4>
  <a href="{{route('registers')}}"> 登録/編集ページ</a>
</div>
<footer>
@include('adminfooter')
</footer>
