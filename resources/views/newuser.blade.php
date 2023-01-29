<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>新規登録</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/meal.css">
</head>
<body>
  <img src ="img\10966000158.jpg">
  <div class="box">
    <div class="textbox">
      <form class="text-center card" action="{{route('newusercomplete')}}">
        @csrf
          <div class="card-body">
            <h1 class="card-title">新規登録</h1>
              <p class="card-text"><input class="form-control" type="text" placeholder="ユーザーID" name="userid" required></p>
              @if ($errors->has('userid'))
              <p>{{$errors->first('userid')}}</p>
              @endif
              <p class="card-text"><input class="form-control" type="name" placeholder="名前" name="name" required></p>
              @if ($errors->has('name'))
              <p>{{$errors->first('name')}}</p>
              @endif
              <p class="card-text"><input class="form-control" type="password" placeholder="パスワード" name="password" required></p>
              @if ($errors->has('password'))
              <p>{{$errors->first('password')}}</p>
              @endif
            <div class="logbtn">
              <p class="card-text"><button class="btn btn-primary" type="submit">新規登録</button></p>
              <p class="card-text"><button class="btn btn-primary" onClick="history.back()">戻る</button></p>
            </div>

          </div>
      </form>
    </div>
  </div>
  <div class="emptybox">
    <h1>Meal<br>Survey</h1>
  </div>
</body>
</html>
