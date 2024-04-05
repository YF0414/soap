<?php
include 'define.php';

?>
<!DOCTYPE HTML>
<html lang="ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=0">
  <title>店舗設定</title>
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
          <h1>店舗設定</h1>
          <div class="profile-form">
            <h2 class="section-title">基本情報</h2>
            <p style="text-align:center; background:#ee5961; padding:10px; color:#fff; font-size:14px; margin-top:30px;">管理者側が入力する項目（親管理画面）</p>
            <form class="form" action="shop.php" method="post" enctype="multipart/form-data">
              <h3 class="label">エリア：吉原
                <span>（親管理画面から複数選択可能（複数エリア掲載可能な仕様））</span>
              </h3>
              <h3 class="label">店舗名：ソープ○○</h3>
              <h3 class="label">電話番号：00-0000-0000</h3>
              <h3 class="label">営業時間：12:00-24:00</h3>
              <h3 class="label">お店HP：https://</h3>
              <p style="text-align:center; background:#ee5961; padding:10px; color:#fff; font-size:14px; margin-top:30px;">ここから下は顧客店舗様が入力</p>
              <h2 class="section-title">コース設定
                <span>（おすすめや人気の任意のコース）</span>
              </h2>
              <div class="form-group form-group-3col">
                <div class="form-item">
                  <h3 class="label">◯コース時間:</h3>
                  <input type="text" id="field1" name="course" class="input-field" required value="">分
                </div>
                <div class="form-item">
                  <h3 class="label">◯料金:</h3>
                  <input type="text" id="field2" name="payment" class="input-field" required value="">円
                </div>
              </div>
              <div class="form-group">
                <h3 class="label">店舗紹介文:
                  <span>200文字まで</span>
                </h3>
                <textarea id="post" name="shop_introduction" class="textarea" rows="10" required></textarea>
              </div>
              <h2 class="section-title">画像登録</h2>
              <div class="form-group">
                <h3 class="label">◯アイコン画像:500×500以内</h3>
                <input type="file" id="shopicon-image" name="shopicon_image" class="file-input">
                <button id="delete-image" class="del-button2" type="button">削除</button>
                <p class="img_wid">
                  <img src="<?=$com_href?>/img/cullinan.png">
                </p>
              </div>
              <div class="upup">
                <button type="submit" class="push-button">登録</button>
              </div>
            </form>
          </div>
        </div>
        <!-- main_col -->
      </div>
    </div>
  </body>
</html>
