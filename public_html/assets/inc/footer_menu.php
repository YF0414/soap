<?php
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
?>

<a href="https://soapland.love<?php echo $_SERVER["REQUEST_URI"]; ?>">
  <div class="post-btn">
    <i class="fa-solid fa-rotate-right"></i>
  </div>
</a>

<div class="sns-buttons">
  <a href="" target="_blank" class="sns-button x-button">
    <i class="fa-brands fa-x-twitter"></i>
  </a>
  <a href="" target="_blank" class="sns-button insta-button">
    <i class="fa-brands fa-instagram"></i>
  </a>
  <a href="" target="_blank" class="sns-button tik-button">
    <i class="fa-brands fa-tiktok"></i>
  </a>
</div>
<div class="copylight2_wrap">
  <div class="copylight2">
    <span>Copyright © 2024
      <a href="https://soapland.love/">ソープランドを探すならソープランドマフィア</a>All Rights Reserved.
    </span>
  </div>
</div>
<?php } else { ?>
<div class="sns-buttons">
  <a href="" target="_blank" class="sns-button x-button">
    <i class="fa-brands fa-x-twitter"></i>
  </a>
  <a href=https://www.instagram.com/oil_mafia_ target="_blank" class="sns-button insta-button">
    <i class="fa-brands fa-instagram"></i>
  </a>
  <a href="" target="_blank" class="sns-button tik-button">
    <i class="fa-brands fa-tiktok"></i>
  </a>
</div>
<div class="footnav">
  <div class="inner">
    <ul class="upper">
      <li>
      <a href="https://soap.serapigram.com/area.php">吉原ソープランド</a>
      </li>
      <li>
      <a href="https://soap.serapigram.com/area.php">中洲ソープランド</a>
    </li>
    </ul>
    <ul class=upper>
      <li>
      <a href="" target="_blank">ソープランドコラム</a>
      </li>
      <li>
      <a href="">利用規約</a>
      </li>
      <li>
      <a href="">プライバシーポリシー</a>
      </li>
      <li>
      <a href="">リンクについて</a>
      </li>
      <li>
      <a href="">掲載のお申し込み</a>
      </li>
      <li>
      <a href="">お問い合わせ</a>
      </li>
    </ul>
  </div>
</div>
<div class="copylight2_wrap">
  <div class="copylight2">
    <span>Copyright © 2024
      <a href="https://serapigram.com/">ソープランドを探すならソープランドマフィア</a>All Rights Reserved.
    </span>
  </div>
</div>
<?php } ?>
