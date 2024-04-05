<div id="remodal_prof_modal" class="modal micromodal-slide" aria-hidden="true">
  <div class="overlay" tabindex="-1" data-micromodal-close>
    <div class="modal-container_prof" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
      <div class="close_prof">
        <button class="modal-close" aria-label="Close modal" data-micromodal-close></button>
      </div>
      <div class="modal__content_prof menu_cont">

        <div class="container_prof">
          <div class="profile-container">
            <div class="profile-header_story">
              <img :src="modals.icon" alt="プロフィール画像">
              <div class="profile-info">
                <h2>
                  <i class="fa-solid fa-shield-heart">
                  </i>りりか
                </h2>
                <span>21歳 / T155 B88(D) W59 H88</span>
              </div>
            </div>
            <h3 class="shop_modal"><span class="stat-count2"><i class="fa-solid fa-shop"></i></span><span class="shop_modaltxt">吉原</span><a :href="'shop.php?id=' + modals.shop_id">BUNNYS CLUB</a></h3>
            <ul class="profile-stats">
              <li>
                <span class="stat-count">
                  <i class="fa-solid fa-timer">
                  </i>
                </span>
                <span class="stat-label">12:00-24:00</span>
              </li>
              <li>
                <span class="stat-count">
                  <i class="fa-solid fa-sack-dollar">
                  </i>
                </span>
                <span class="stat-label">60分25,000円〜</span>
              </li>
            </ul>
            <div class="profile-description">
              <p>プロフィールが入るプロフィールが入るプロフィールが入るプロフィールが入るプロフィールが入るプロフィールが入る</p>
            </div>
            <div class="grid-prof_b">
              <button class="follow-button" @click="redirectTo('shop.php?id=' + modals.shop_id)">在籍店舗</button>
              <button class="messa-button" @click="redirectTo('https://twitter.com/' + modals.x_id)">
                <i class="fa-brands fa-x-twitter">
                </i>エックス
              </button>
            </div>
            <button class="fan-button_fan" @click="redirectTo('tel:' + modals.tel)">電話で問い合わせる</button>
            <div class="girl_box">
              <ul>
                <li v-if="modals.images_one">
                  <img src="<?=$com_href?>/img/soap_01.jpg" loading="lazy">
                </li>
                <li v-if="modals.images_two">
                  <img src="<?=$com_href?>/img/soap_02.jpg" loading="lazy">
                </li>
                <li v-if="modals.images_three">
                  <img src="<?=$com_href?>/img/soap_03.jpg" loading="lazy">
                </li>
              </ul>
            </div>
            <div class="week-container">
              <div class="week-table week-table-date" v-html="scheduleDates[0]"></div>
              <div class="week-table"></div>
              <div class="week-table week-table-date" v-html="scheduleDates[1]"></div>
              <div class="week-table"></div>
              <div class="week-table week-table-date" v-html="scheduleDates[2]"></div>
              <div class="week-table"></div>
              <div class="week-table week-table-date" v-html="scheduleDates[3]"></div>
              <div class="week-table"></div>
              <div class="week-table week-table-date" v-html="scheduleDates[4]"></div>
              <div class="week-table"></div>
              <div class="week-table week-table-date" v-html="scheduleDates[5]"></div>
              <div class="week-table"></div>
              <div class="week-table week-table-date" v-html="scheduleDates[6]"></div>
              <div class="week-table"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
