<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<meta name="description" content="店舗紹介文" >
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">

<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="店舗紹介文">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="">
<meta name="twitter:description" content="店舗紹介文">
<meta name="twitter:image" content="" />
<script src="https://unpkg.com/vue@3"></script>
<?php
$loc_href = '.';
$inc_path = $_SERVER["DOCUMENT_ROOT"].'/assets';
$com_href = '/assets';

include $inc_path .'/inc/head.php';
?>
<body>
<div class="container" id="vue-app">
  <?php include $inc_path .'/inc/side_left.php';?>
  <div class="content">
    <?php include $inc_path .'/inc/header2.php';?>
    <div class="container_prof height_area">
      <div class="profile-container">
        <div class="profile-header_story">
          <img src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy">
          <div class="profile-info">
            <h2>
              <i class="fa-solid fa-shield-heart"></i>BUNNYS CLUB
            </h2>
            <p>吉原</p>
          </div>
        </div>
        <ul class="profile-stats">
          <li>
            <span class="stat-count">
              <i class="fa-solid fa-timer"></i>
            </span>
            <span class="stat-label">12:00-24:00</span>
          </li>
          <li>
            <span class="stat-count">
              <i class="fa-solid fa-sack-dollar"></i>
            </span>
            <span class="stat-label">60分25,000円〜</span>
          </li>
          <!--<li v-if="shop.shop_type==='room'">
            <span class="stat-count">
              <i class="fa-light fa-house-building"></i>
            </span>
            <span class="stat-label">ROOM型</span>
          </li>
          <li v-if="shop.shop_type==='deli'">
            <span class="stat-count">
              <i class="fa-regular fa-hotel"></i>
            </span>
            <span class="stat-label">HOTEL型</span>
          </li>-->
        </ul>
        <div class="profile-description">
          <p>店舗紹介が入る店舗紹介が入る店舗紹介が入る店舗紹介が入る店舗紹介が入る店舗紹介が入る店舗紹介が入る</p>
        </div>
        <p class="prof_link">
          <i class="fa-regular fa-paperclip"></i>
          <a href="<?=$data['shop']['url']?>" target="_blank">https://</a>
        </p>
        <button class="fan-button_live" onclick="redirectTo('tel:00-0000-0000')">00-0000-0000</button>
      </div>
    </div>
    <div class="tabs height_area2">
      <input id="all" type="radio" name="tab_item" checked>
      <label class="tab_item" for="all">本日出勤</label>
      <input id="programming" type="radio" name="tab_item">
      <label class="tab_item" for="programming">在籍一覧</label>
      <input id="design" type="radio" name="tab_item">
      <label class="tab_item" for="design">リアル速報</label>
      <div class="tab_content" id="all_content">
        <div class="box-004 box-004_down">
        <p>出勤はAM7:00に切り替わります</p>
        </div>
        <div class="container_photo">
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_01.jpg" loading="lazy">
            </a>
            <p>11:00-18:00<br>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_02.jpg" oading="lazy">
            </a>
            <p>11:00-18:00<br>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_03.jpg" loading="lazy">
            </a>
            <p>11:00-18:00<br>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_04.jpg" loading="lazy">
            </a>
            <p>11:00-18:00<br>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_05.jpg" loading="lazy">
            </a>
            <p>11:00-18:00<br>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_01.jpg" loading="lazy">
            </a>
            <p>11:00-18:00<br>名前 / 年齢</p>
          </div>
        </div>
      </div>
      <!-- tab -->

      <div class="tab_content" id="programming_content">
        <div class="container_photo">
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_01.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_02.jpg" oading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_03.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_04.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_05.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_01.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_02.jpg" oading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_03.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_04.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
          <div class="grid-item_photo">
            <a data-micromodal-trigger="remodal_prof_modal">
              <img src="<?=$com_href?>/img/soap_05.jpg" loading="lazy">
            </a>
            <p>名前 / 年齢</p>
          </div>
        </div>
        </div>
        <!-- tab -->

      <div class="tab_content" id="design_content">
        <div class="timeline">
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_01.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_02.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_03.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_04.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_05.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_01.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_02.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_03.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_04.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_05.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/exe_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_01.jpg">
              </a>
            </div>
          </div>
          <div class="tweet">
            <div class="profile-card_mp">
              <div class="avatar-container_mp_story">
                <a href="shop.php">
                  <img class="avatar-icon_mp" src="<?=$com_href?>/img/bunny_soap.jpg" loading="lazy" alt="Avatar Icon">
                </a>
              </div>
              <div class="content_mp">
                <h2 class="user-name_mp">
                  <a href="shop.php">粋美</a>
                </h2>
                <p class="user-bio_mp">吉原
                <span class="time_txt">1月25日 21:51</span>
                </p>
              </div>
            </div>
            <div class="body_txt">
              <a href="shop.php">
                <p>最近opでCalvin Kleinが人気です💗🥹💗
                  <br>身体のバランスが最高って言って貰えて自分磨きのモチベになりました🔥
                  <br>寝不足だったけど今日も可愛い綺麗どっちも言われて嬉しかったです🤭✨
                  <br>今日は紳士的な方ばかりだったので珍しくお出かけしてました(* ॑꒳ ॑* )/笑 明日23日🉑13:00~です💋✨
                </p>
                <img src="<?=$com_href?>/img/soap_02.jpg" loading="lazy">
              </a>
            </div>
          </div>
        </div>
        <!-- timeline -->
      </div>
      <!-- tab -->
    </div>
    <!-- tabs -->
    <?php include $inc_path .'/inc/footer_menu.php';?>
  </div>
  <!-- content -->
  <?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
