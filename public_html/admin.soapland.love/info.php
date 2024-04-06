<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ニュース新規登録</title>
  <meta name="description" content="">
  <meta name="robots" content="max-image-preview:large">
  <link rel="canonical" href="">
  <?php
    $loc_href = '.';
    $inc_path = $_SERVER["DOCUMENT_ROOT"].'';
    $com_href = '';

    include $inc_path .'/inc/head.php';
  ?>
  <body>
    <div id="container">
      <?php
            include $inc_path . '/inc/sidebar.php';
            ?>
      <div id="content">
        <?php
        include $inc_path . '/inc/header.php';
        ?>
        <div class="main_col">
          <h1>お知らせ</h1>
          <div class="profile-form">
            <h2 class="section-title">ニュース登録</h2>
            <form class="form" action="info_post.php" method="post" enctype="multipart/form-data">
              <div class="radio-group">
                <input type="radio" id="radio1" name="view" class="radio-input" checked value="true">
                <label for="radio1" class="radio-label">表示</label>
                <input type="radio" id="radio2" name="view" class="radio-input" value="false">
                <label for="radio2" class="radio-label">非表示</label>
              </div>
              <!--<div class="form-group">
              <h3 class="label">◯タイトル:</h3>
              <input type="text" id="name" name="name" class="input" required value="">
            </div>-->
              <div class="form-group">
                <h3 class="label">◯本文:
                  <span>250文字まで</span>
                </h3>
                <textarea id="post" name="post" class="textarea" rows="10" required></textarea>
              </div>
              <h2 class="section-title marsbottom">画像登録</h2>
              <p class="red_tee">（推奨サイズ3対4 例：幅600px高さ800px、画像サイズは1MB以内である必要があります。）</p>
              <div class="form-group">
                <input type="file" id="header-image" name="header_image" class="file-input">
                <button class="del-button2">削除</button>
                <p class="img_wid">
                  <img src="<?=$com_href?>/img/gqUWouLpvvZCTRTaDeYx1707195153.jpg">
                </p>
              </div>

              <button type="submit" class="push-button">登録</button>
            </form>
          </div>
        </div>
        <!-- main_col -->
      </div>
    </div>
  </body>
</html>
