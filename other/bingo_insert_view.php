<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bingo_select1.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bingo_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>登録</legend>
     <label>データ名：<input type="text" name="name"></label><br>
     <label>数値１：<input type="number" name="first"></label><br>
     <label>数値２：<input type="number" name="second"></label><br>
     <label>数値３：<input type="number" name="third"></label><br>
     <label>数値４：<input type="number" name="fourth"></label><br>
     <label>数値５：<input type="number" name="fifth"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
