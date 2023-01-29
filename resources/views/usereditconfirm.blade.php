<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ユーザー編集</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<form action="/usereditcomplete" method="POST" class="usereditcomp">
  @csrf
<h4>ユーザー編集</h4>
    <div class="edituser">
        <div class="nameuser">
          <p>ユーザー名</p>
          <input name="name" value="{{ $data->name }}" placeholder="名前" type="text"></input>
        </div>

        <div class="userbirth">
          <p>生年月日</p>
          <input name="date" value="{{ $data->userid }}" placeholder="生年月日" type="text"></input>
        </div>

        <div class="userpass">
          <p>パスワード</p>
          <input name="date" value="{{ $data->password }}" placeholder="パスワード" type="text"></input>
        </div>

    </div>
    <input type='button' onclick='history.back()' value='戻る' class="formbtn">
    <button type="submit" class="formbtn">編集する</button>
</form>



<footer>
@include('adminfooter')
</footer>
