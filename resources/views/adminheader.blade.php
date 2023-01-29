<!doctype html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
<body>
<div class="headers">
  <div class="headerr">
  @include('layouts.app')
  </div>
  <div class="header">
      <a href="{{ route('admintop') }}">TOP</a>
      <a href="{{ route('pastmeal') }}">過去献立</a>
      <a href="{{ route('registers') }}">登録/編集</a>
  </div>
</div>
</body>
