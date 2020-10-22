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
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>本のタイトル：<input type="text" name="title"></label><br>
     <label>url：<input type="text" name="url"></label><br>
     <label>感想：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" id="button" value="送信">
    </fieldset>
  </div>
  <div id="return"></div>
  <a href="select.php">ブックリスト確認</a>
</form>


</body>
</html>