<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>女性一覧</title>
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
          <h1>女性一覧</h1>
          <button class="push-button" onclick="location.href='profile.php'">新規登録</button>
          <p style="text-align:center; background:#ee5961; padding:10px; color:#fff; font-size:14px; margin:30px 0;">ドラッグ&ドロップで並び替え</p>
          <div class="container_photo">
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp01.jpg">
              <div class="prof_info">
                <p class="time_table">名前 / 21歳 </p>
                <div class="post-buttons2">
                  <button class="del-button_girl" type="button">削除</button>
                  <button class="adit-button_girl">編集</button>
                </div>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp02.jpg">
              <div class="prof_info">
                <p class="time_table">名前 / 21歳 </p>
                <div class="post-buttons2">
                  <button class="del-button_girl" type="button">削除</button>
                  <button class="adit-button_girl">編集</button>
                </div>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp03.jpg">
              <div class="prof_info">
                <p class="time_table">名前 / 21歳 </p>
                <div class="post-buttons2">
                  <button class="del-button_girl" type="button">削除</button>
                  <button class="adit-button_girl">編集</button>
                </div>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp01.jpg">
              <div class="prof_info">
                <p class="time_table">名前 / 21歳 </p>
                <div class="post-buttons2">
                  <button class="del-button_girl" type="button">削除</button>
                  <button class="adit-button_girl">編集</button>
                </div>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp02.jpg">
              <div class="prof_info">
                <p class="time_table">名前 / 21歳 </p>
                <div class="post-buttons2">
                  <button class="del-button_girl" type="button">削除</button>
                  <button class="adit-button_girl">編集</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main_col -->
      </div>
    </div>
  </body>
</html>
