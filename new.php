<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規作成</title>
</head>
<body>
  <form action="store.php" method="POST">
    <input type="hidden" name="token" value="">
    <input type="text" name="todo">
    <input type="submit" value="作成">
  </form>
  <a href="index.php">一覧にもどる</a>
</body>
</html>