<!DOCTYPE HTML>
<html lang="ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>店舗様管理画面</title>
  <meta name="description" content="">
  <meta name="robots" content="max-image-preview:large">
  <link rel="canonical" href="">
  <!-- OGP  -->
  <?php
  $loc_href = '.';
  $inc_path = $_SERVER["DOCUMENT_ROOT"].'';
  $com_href = '';

  include $inc_path .'/inc/head.php';
?>
  <body>
    <div id="container">
      <div class="form_cont">
        <h1>sampleポータル</h1>
        <img src="<?=$com_href?>/img/8993466.jpg" alt="">
        <form class="login-form" action="" method="post">
          <input type="text" name="email" placeholder="メールアドレス" />
          <input type="password" name="password" placeholder="パスワード" />
          <button type="submit">ログイン</button>
        </form>
      </div>
    </div>
  </body>
</html>
