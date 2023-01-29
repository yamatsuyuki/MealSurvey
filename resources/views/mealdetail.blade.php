<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>献立詳細</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body class="home page page-id-1">
  <span><img src ="\img\10966000158.jpg"></span>
@include('userheader')
<div class="menuwrap">
  <div class="contact-box">
        <div class="mealdetail">
            <div class="userdate">
              {{$meal->date}}
            </div>

            <div class="usertimezone">
              <label>{{$meal->timezone}}</label>
            </div>

          <div class="menuwraper">
            <div class="menuimage">
              <img src="{{ '/storage/' . $meal['image']}}"
            </div>

            <div class="usermenu">
              {{$meal->menu }}
            </div>
          </div>
      </div>

    <label>ご意見・ご要望</label>
    <form method="POST" action="{{ route('mealcomplete') }}">
      <div class="useropinion">
          <textarea name="opinion" value="{{ old('opinion') }}" placeholder="ご意見・ご要望" type="text"></textarea>
          @if ($errors->has('opinion'))
          <p>{{$errors->first('opinion')}}</p>
          @endif
      </div>
          @csrf
        <input type='button' onclick='history.back()' value='戻る' class="formbtn">
        <button type="submit" class="formbtn">送信する</button>
    </form>
</div>
</div>


@include('userfooter')
