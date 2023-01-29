<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>献立詳細</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">

</head>
<body class="home page page-id-8">
  <span><img src ="\img\10966000158.jpg"></span>
@include('userheader')
<div class="menuwrap">
  <div class="contact-box">
        <div class="mealdetail">
            <div class="dateuser">
              <div class="button003"><a href="{{route('userto')}}">戻る</a></div>
              <span>{{$meal->date}}</span>
            </div>

            <div class="usertimezone">
              <label>{{$meal->timezone}}</label>
            </div>

          <div class="menuwraper">
            <div class="menuimage">
              <img src="{{'/storage/'.$meal['image']}}">
            </div>

            <div class="usermenu">
              {!!nl2br($meal->menu)!!}
            </div>
          </div>
      </div>
</div>
</div>


@include('userfooter')
