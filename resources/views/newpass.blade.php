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
  <img src ="img\10966000158.jpg">
  <div class="box">
    <div class="textbox">
      <form class="text-center card" method="POST" action="{{route('usertop')}}">
        @csrf
            <div class="container">
              <h4>パスワード忘れた方</h4>
              @error('login')
              <div class="alert alert-danger">
                  &#x26A0; {{ $message }}
              </div>
              @enderror
                @csrf
                <label class="mt-1">ユーザーID</label>
                  <input type="text" name="userid" class="form-control" id=userid>
                <label class="mt-1">新しいパスワード</label>
                  <input type="password" name="password" class="form-control" id=password>
                <button class="btn btn-primary mt-3" type="submit">パスワード変更</button>
                <p class="card-text"><a href="/">ログイン画面へ</a></p>
          </form>
          </div>
        </div>
    </div>
  <div class="emptybox">
    <h1>Meal<br>Survey</h1>
  </div>
</body>
</html>
