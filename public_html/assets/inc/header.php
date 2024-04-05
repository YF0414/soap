<?php
$path = $_SERVER['SCRIPT_NAME'];
if (preg_match('|index.php|', $path)): ?>
<header class="header">
  <div class="user-info">
    <div class="user-details">
      <h3 class="user-name">
        <a href="/">
          <img src="<?=$com_href?>/img/soap_header.jpg" alt="">
        </a>
      </h3>
    </div>
  </div>
</header>
<?php else: ?>
<header class="header">
  <div class="user-info">
    <div class="user-avatar">
      <input class="menunavi-btn" id="menunavi-btn" type="checkbox">
      <label class="menunavi-icon" for="menunavi-btn">
        <span class="navicon"></span>
      </label>
      <div class="menunavi">
      <div class="header_menu">

        <?php include $inc_path .'/inc/area_menu.php';?>

        <ul class="menu_side">
          <li>
            <a href="">
              <span>リンクについて</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>お問い合わせ</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>掲載のお申し込み</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>利用規約</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>プライバシーポリシー</span>
            </a>
          </li>
          <li>
            <a href="" target="_blank">
              <span>ソープランドコラム</span>
            </a>
          </li>
        </ul>
        <div class="sns-buttons">
          <a href="" class="sns-button x-button" target="_blank">
            <i class="fa-brands fa-x-twitter"></i>
          </a>
          <a href="" class="sns-button insta-button" target="_blank">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="" class="sns-button tik-button" target="_blank">
            <i class="fa-brands fa-tiktok"></i>
          </a>
        </div>
      </div>
    </div>
    </div>
    <div class="user-details">
      <h3 class="user-name">
        <a href="/">
          <img src="<?=$com_href?>/img/soap_header.jpg" alt="">
        </a>
      </h3>
    </div>
  </div>
</header>
<?php endif; ?>
