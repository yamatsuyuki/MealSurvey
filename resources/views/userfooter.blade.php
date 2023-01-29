<!doctype html>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')  }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/meal.css')  }}">
<body>
  <div class="adminfooter">
      <div class="footerlog">
          <a href="">Meal Survey</a>
      </div>

      <ul class="sitefooter">
          <a href="{{ route('userto') }}">TOP</a>
          <a href="{{ route('weekmenu') }}">直近献立</a>
          <a href="{{ route('usernews') }}">ニュース</a>
      </ul>
  </div>
</body>
