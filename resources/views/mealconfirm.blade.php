<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>献立登録確認</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="\img\10966000158.jpg">
@include('adminheader')
<div class="contact-menuwrap">
  <div class="contact-box">
    <form method='POST' action="/mealcomplete">
    <form method='POST' action="/mealcomplete" enctype="multipart/form-data">
        @csrf
      <div class="menucofi">
        <div class="dateconfi">
        <dt class="date">献立日時</dt>
          <dd>
            {!! htmlspecialchars($date) !!}</div>
            <input name="date" value="{{$date}}" type="hidden">
          </dd>
          <br>
        <div class="timezoneconfi">
        <dt class="timezone">時間帯</dt>
          <dd>
            {!! htmlspecialchars($timezone) !!}</div>
            <input name="timezone" value="{{$timezone}}" type="hidden">
          </dd>
          <br>
      </div>

        <dt class="user">登録者</dt>
          <dd>
            <div class="">{!! htmlspecialchars($user) !!}</div>
            <input name="user" value="{{$user}}" type="hidden">
          </dd>
          <br>

    <div class="menuimg">
        <div class="menutext">
          <dt class="menuconfirm">献立内容</dt>
            <dd>  {!! (nl2br(e($menu))) !!}</div>
              <input name="menu" value="{{$menu}}" type="hidden">
            </dd>
            <br>

        <div class="menuimag">
          <dt class="image">写真</dt>
              {!!($image) !!}
        </div>
              <input name="image" value="{{$image}}" type="hidden">
              <br>
    </div>

        <input type='button' onclick='history.back()' value='戻る' class="formbtn">
        <button type="submit" class="formbtn">登録</button>

    </form>
  </div>
</div>



@include('adminfooter')
