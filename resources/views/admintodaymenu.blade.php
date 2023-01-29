<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>献立詳細</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<img src ="\img\10966000158.jpg">
<body class="home page page-id-8">
@include('adminheader')
<div class="menuwrap">
  <div class="contact-box">
        <div class="mealdetail">
            <div class="userdate">
              {{$meal->date}}
            </div>

            <div class="usertimezone">
              <label>{{$meal->timezone}}</label>
            </div>

          <div class="admenuwraper">
            <div class="admenuimage">
              <img src="{{'/storage/'.$meal['image']}}">
            </div>

            <div class="adusermenu">
              {{$meal->menu}}
            </div>
          </div>
      </div>

      <div class="useropinion">
        <input type='button' onclick='history.back()' value='戻る' class="formbtn">
        <a href=""><button type="button" class="formbtn">食事の感想ページへ</button></a>
      </div>
</div>
</div>
@include('adminfooter')
