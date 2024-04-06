<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>女性登録</title>
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
          <!-- コンテンツのコンテンツ -->
          <h1>プロフィール登録</h1>
          <div class="profile-form">
            <h2 class="section-title">基本情報</h2>
            <form class="form" action="" method="post" enctype="multipart/form-data">
              <h3 class="label">◯表示 / 非表示:</h3>
              <div class="radio-group">
                <input type="radio" id="radio1" name="view" class="radio-input" value="true" checked>
                <label for="radio1" class="radio-label">表示</label>
                <input type="radio" id="radio2" name="view" class="radio-input" value="false">
                <label for="radio2" class="radio-label">非表示</label>
              </div>
              <div class="form-group">
                <h3 class="label">◯源氏名</h3>
                <input type="text" id="username" name="name" class="input" value="" required>
              </div>
              <div class="form-group">
                <h3 class="label">◯年齢:</h3>
                <div class="prof-select">
                  <select class="prof-style" name="age">
                    <option value="">---</option>
                    <option value="18">18歳</option>
                    <option value="19">19歳</option>
                    <option value="20">20歳</option>
                    <option value="21">21歳</option>
                    <option value="22">22歳</option>
                    <option value="23">23歳</option>
                    <option value="24">24歳</option>
                    <option value="25">25歳</option>
                    <option value="26">26歳</option>
                    <option value="27">27歳</option>
                    <option value="28">28歳</option>
                    <option value="29">29歳</option>
                    <option value="30">30歳</option>
                    <option value="31">31歳</option>
                    <option value="32">32歳</option>
                    <option value="33">33歳</option>
                    <option value="34">34歳</option>
                    <option value="35">35歳</option>
                    <option value="36">36歳</option>
                    <option value="37">37歳</option>
                    <option value="38">38歳</option>
                    <option value="39">39歳</option>
                    <option value="40">40歳</option>
                    <option value="41">41歳</option>
                    <option value="42">42歳</option>
                    <option value="43">43歳</option>
                    <option value="44">44歳</option>
                    <option value="45">45歳</option>
                    <option value="46">46歳</option>
                    <option value="47">47歳</option>
                    <option value="48">48歳</option>
                    <option value="49">49歳</option>
                    <option value="50">50歳</option>
                    <option value="51">51歳</option>
                    <option value="52">52歳</option>
                    <option value="53">53歳</option>
                    <option value="54">54歳</option>
                    <option value="55">55歳</option>
                    <option value="56">56歳</option>
                    <option value="57">57歳</option>
                    <option value="58">58歳</option>
                    <option value="59">59歳</option>
                    <option value="60">60歳</option>
                  </select>
                </div>
              </div>
              <div class="form-group form-group-3col">
                <div class="form-item">
                  <h3 class="label">◯身長:</h3>
                  <input type="text" id="field1" name="height" class="input-field" value="" required>
                </div>
                <div class="form-item">
                <h3 class="label">◯バスト:</h3>
                <input type="text" id="field2" name="bust" class="input-field" value="">
              </div>
              <div class="form-item">
                <h3 class="label">◯カップ:</h3>
                <div class="prof-select">
                  <select class="size-style" name="cup">
                    <option value="">---</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>
                  </select>
                </div>
              </div>
              <div class="form-item">
                <h3 class="label">◯ウェスト:</h3>
                <input type="text" id="field4" name="waist" class="input-field" value="">
              </div>
              <div class="form-item">
                <h3 class="label">◯ヒップ:</h3>
                <input type="text" id="field5" name="hip" class="input-field" value="">
              </div>
              </div>
              <div class="form-group">
                <h3 class="label">◯X id（@以降）</h3>
                <input type="text" id="xname" name="x_id" class="input" value="">
              </div>
              <div class="form-group">
                <h3 class="label">◯自己紹介:
                  <span>200文字まで</span>
                </h3>
                <textarea id="bio" name="introduction" class="textarea" rows="4"></textarea>
              </div>
              <h2 class="section-title">画像登録</h2>
              <div class="form-group">
                <h3 class="label">◯アイコン画像:</h3>
                <input type="file" id="" name="icon" class="file-input">
                <button class="del-button2">削除</button>
                <p class="img_wid">
                  <img src="<?=$com_href?>/img/gqUWouLpvvZCTRTaDeYx1707195153.jpg" alt="アイコン画像">
                </p>
              </div>
              <h3 class="label">◯女性画像3枚まで:
                <br>
                <span>（推奨サイズ幅600px高さ800px、画像サイズは1MB以内である必要があります。）</span>
              </h3>
              <div class="form-group-3col">
                <div class="form-group">
                  <input type="file" id="" name="gravure" class="file-input">
                  <button class="del-button2">削除</button>
                  <p class="img_wid">
                    <img src="<?=$com_href?>/img/gqUWouLpvvZCTRTaDeYx1707195153.jpg">
                  </p>
                </div>
                <div class="form-group">
                  <input type="file" id="" name="gravure" class="file-input">
                  <button class="del-button2">削除</button>
                  <p class="img_wid">
                    <img src="<?=$com_href?>/img/gqUWouLpvvZCTRTaDeYx1707195153.jpg">
                  </p>
                </div>
                <div class="form-group">
                  <input type="file" id="" name="gravure" class="file-input">
                  <button class="del-button2">削除</button>
                  <p class="img_wid">
                    <img src="<?=$com_href?>/img/gqUWouLpvvZCTRTaDeYx1707195153.jpg">
                  </p>
                </div>
              </div>
              <button type="submit" class="push-button">登録</button>
            </form>
          </div>
        </div>
        <!-- コンテンツのコンテンツ -->
      </div>
    </div>
  </body>
</html>
