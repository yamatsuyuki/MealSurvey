<!doctype html>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')  }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/meal.css')  }}">
<body>
  <div class="adminfooter">
      <div class="footerlog">
          <a href="{{ route('admintop') }}">Meal Survey</a>
      </div>

      <ul class="sitefooter">
          <a href="{{ route('admintop') }}">TOP</a>
          <a href="{{ route('pastmeal') }}">過去献立</a>
          <a href="{{ route('registers') }}">登録/編集</a>
      </ul>
  </div>
</body>
