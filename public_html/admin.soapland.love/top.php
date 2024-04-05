<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>管理画面トップ</title>
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
          <h1>◯◯様（店舗名） 管理ページ</h1>
          <ul class="info_news">
            <li>
              <h3>（AM7:00-AM6:59）</h3>
              <p>ニュース投稿可能数：
                <span class="nokori">件</span>/ 登録済み：
                <span class="owatta">件</span>/ 残り：件　在籍女性：人　本日出勤：名
              </p>
            </li>
          </ul>
          <h1>本日の出勤女性</h1>
          <p style="text-align:center; background:#ee5961; padding:10px; color:#fff; font-size:14px; margin:30px 0;">予約完売チェックをいれると、出勤時間の時系列順を無視して、出勤一覧の下部に移動される（完売マーク付き）※表ページ</p>
          <button type="submit" class="push-button">更新</button>
          <div class="container_photo">
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp01.jpg">
              <div class="prof_info">
                <h2>名前 / 21歳 </h2>
                <p class="body_table">T156</p>
                <p class="time_table">11:00-18:00</p>
                <label>
                  <input type="checkbox" name="" value="true"/>
                  <span class="small__txt">予約完売</span>
                </label>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp02.jpg">
              <div class="prof_info">
                <h2>名前 / 21歳 </h2>
                <p class="body_table">T162</p>
                <p class="time_table">12:00-19:00</p>
                <label>
                  <input type="checkbox" name="" value="true"/>
                  <span class="small__txt">予約完売</span>
                </label>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp03.jpg">
              <div class="prof_info">
                <h2>名前 / 21歳 </h2>
                <p class="body_table">T153</p>
                <p class="time_table">12:00-20:00</p>
                <label>
                  <input type="checkbox" name="" value="true"/>
                  <span class="small__txt">予約完売</span>
                </label>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp01.jpg">
              <div class="prof_info">
                <h2>名前 / 21歳 </h2>
                <p class="body_table">T151</p>
                <p class="time_table">13:00-21:00</p>
                <label>
                  <input type="checkbox" name="" value="true"/>
                  <span class="small__txt">予約完売</span>
                </label>
              </div>
            </div>
            <div class="grid-item_photo">
              <img src="<?=$com_href?>/img/samp02.jpg">
              <div class="prof_info">
                <h2>名前 / 21歳 </h2>
                <p class="body_table">T164</p>
                <p class="time_table">14:00-20:00</p>
                <label>
                  <input type="checkbox" name="" value="true"/>
                  <span class="small__txt">予約完売</span>
                </label>
              </div>
            </div>
          </div>
          <button type="submit" class="push-button">更新</button>
        </div>
        <!-- main_col -->
      </div>
    </div>
  </body>
</html>
