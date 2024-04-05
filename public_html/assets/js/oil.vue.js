const { createApp, ref, computed, watch } = Vue;
createApp({
  setup() {
    const now = new Date();
    now.setHours(now.getHours() - 7);
    const formattedDates = [];
    const scheduleDates = [];
    for (let i = 0; i < 7; i++) {
      const date = new Date(now);
      date.setDate(now.getDate() + i);
      // 日付を YYYYMMDD 形式の整数に変換
      const year = date.getFullYear();
      const month = (date.getMonth() + 1).toString().padStart(2, '0');
      const day = date.getDate().toString().padStart(2, '0');
      const formattedDate = parseInt(`${year}${month}${day}`);
      formattedDates.push(formattedDate);

      // 曜日を取得
      const weekdayNames = ['<span class="sanday">（日）</span>', '（月）', '（火）', '（水）', '（木）', '（金）', '<span class="satday">（土）</span>'];
      const scheduleDate = parseInt(month).toString() + '月'+ parseInt(day).toString() + '日' + weekdayNames[date.getDay()];
      scheduleDates.push(scheduleDate);
    }
    const selectArea = ref(['ALL']);
    const areas = ref(<?php echo json_encode($areas); ?>);
    const schedules = ref(<?php echo json_encode($schedules); ?>);
    const selectTime = ref(['ALL']);
    const tabItem = ref('attends');
    const attendTimes = {
      's9e18': ['9:00', '9:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00'],
      's18e24': ['18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30', '22:00', '22:30', '23:00', '23:30', '24:00'],
      's24e29': ['24:00', '24:30', '25:00', '25:30', '26:00', '26:30', '27:00', '27:30', '28:00', '28:30', '29:00', '29:30'],
    }
    const shops = ref(<?php echo json_encode($shops); ?>);
    const posts = ref(<?php echo json_encode($posts); ?>);
    const modals = ref({
      'name': '',
      'age': '',
      'height': '',
      'bust': '',
      'cup': '',
      'waist': '',
      'hip': '',
      'area_name': '',
      'shop_name': '',
      'operating_hours': '',
      'charge_info': '',
      'introduction': '',
      'x_id': '',
      'icon': '',
      'images_one': '',
      'images_two': '',
      'images_three': '',
      'schedules': [],
    });
    const modalOpen = ref(false);
    watch(modalOpen, (newVal) => {
      if (newVal) {
        document.body.style.overflow = 'hidden';
        document.getElementById('remodal_prof_modal').setAttribute('aria-hidden', 'true');
      } else {
        document.body.style.overflow = '';
        document.getElementById('remodal_prof_modal').setAttribute('aria-hidden', 'false');
      }
    });

    function redirectTo(url) {
      window.location.href = url;
    }

    function changeArea(id) {
      // 'ALL'を配列から削除する
      const allIndex = selectArea.value.indexOf('ALL');
      if (allIndex !== -1) {
        selectArea.value.splice(allIndex, 1);
      }

      // 新しい要素を配列に追加する
      if (selectArea.value.includes(id)) {
        // id が配列に含まれている場合、その位置を見つける
        const index = selectArea.value.indexOf(id);

        // id を配列から削除する
        if (index !== -1) {
          selectArea.value.splice(index, 1);
        }
      } else {
        // id が配列に含まれていない場合、配列に追加する
        selectArea.value = [id];
      }

      if (selectArea.value.length < 1) {
        selectArea.value = ['ALL'];
      }
    }

    function changeAreaToAll() {
      selectArea.value = ['ALL'];
    }

    function changeTime(key) {
      // 'ALL'を配列から削除する
      const allIndex = selectTime.value.indexOf('ALL');
      if (allIndex !== -1) {
        selectTime.value.splice(allIndex, 1);
      }

      // 新しい要素を配列に追加する
      if (selectTime.value.includes(key)) {
        // keyが配列に含まれる場合、その位置を見つける
        const index = selectTime.value.indexOf(key);

        // keyを配列から削除する
        if (index !== -1) {
          selectTime.value.splice(index, 1);
        }
      } else {
        selectTime.value =[key];
      }

      if (selectTime.value.length < 1) {
        selectTime.value = ['ALL'];
      }
    }

    function changeTimeToAll() {
      selectTime.value = ['ALL'];
    }

    const filteredSchedules = computed(() => {

      if (selectTime.value.includes('ALL')) {
        if (selectArea.value.includes('ALL')) {
          result = schedules.value;
        } else {
          result = schedules.value.filter(schedule =>
            selectArea.value.includes(schedule.schedule.area_id)
          );
        }
      } else {
        filterTimes = [];
        timeKeys = ['s9e18', 's18e24', 's24e29'];

        for (const st of selectTime.value) {
          filterTimes = filterTimes.concat(attendTimes[st]);
          const index = timeKeys.indexOf(st);
          if (index > -1) {
            timeKeys.splice(index, 1);
          }
        }

        filterTimesBefore = [];
        filterTimesAfter = [];
        if (timeKeys.includes('s18e24')) {
          for (const st of timeKeys) {
            filterTimesBefore = filterTimesBefore.concat(attendTimes[st]);
          }
        } else {
          if (timeKeys.includes('s9e18')) {
            filterTimesBefore = attendTimes['s9e18'];
          }
          if (timeKeys.includes('s24e29')) {
            filterTimesAfter = attendTimes['s24e29'];
          }
        }

        if (selectArea.value.includes('ALL')) {
          result = schedules.value.filter(schedule =>
            (filterTimes.includes(schedule.schedule.start) || filterTimes.includes(schedule.schedule.end)) ||
            (filterTimesBefore.includes(schedule.schedule.start)) && filterTimesAfter.includes(schedule.schedule.end)
          );
        } else {
          result = schedules.value.filter(schedule =>
            ((filterTimes.includes(schedule.schedule.start) || filterTimes.includes(schedule.schedule.end)) && selectArea.value.includes(schedule.schedule.area_id)) ||
            ((filterTimesBefore.includes(schedule.schedule.start) && filterTimesAfter.includes(schedule.schedule.end)) && selectArea.value.includes(schedule.schedule.area_id))
          );
        }
      }
      return result;
    });

    const filteredShops = computed(() => {
      if (!selectArea.value.includes('ALL')) {
        result = shops.value.filter(shop =>
          selectArea.value.includes(shop.area_id)
        );
      } else {
        result = shops.value;
      }
      return result;
    });

    const filteredPosts = computed(() => {
      if (selectArea.value.includes('ALL')) {
        return posts.value;
      } else {
        return posts.value.filter(post => {
          const shop = shops.value.find(s => s.id === post.shop_id);
          return shop && shop.area_id ? selectArea.value.includes(shop.area_id) : false;
        });
      }
    });


    function areaIdToAreaName (area_id) {
      index = this.areas.findIndex(area => area.id === area_id);
      return this.areas[index].data.name;
    }

    function shopIdToShopName(shop_id) {
      // shops.valueを使用して、反応性のある変数から値を取得します。
      const index = shops.value.findIndex(shop => shop.id === shop_id);
      if (index !== -1) {
        return shops.value[index].name;
      } else {
        return ''; // ショップが見つからなかった場合は空文字を返します。
      }
    }

    function shopIdToOperatingHours(shop_id) {
      // shops.valueを使用して、反応性のある変数から値を取得します。
      const index = shops.value.findIndex(shop => shop.id === shop_id);
      if (index !== -1) {
        return shops.value[index].operating_hours;
      } else {
        return ''; // ショップが見つからなかった場合は空文字を返します。
      }
    }

    function shopIdToChargeInfo(shop_id) {
      // shops.valueを使用して、反応性のある変数から値を取得します。
      const index = shops.value.findIndex(shop => shop.id === shop_id);
      if (index !== -1) {
        return shops.value[index].charge_info;
      } else {
        return ''; // ショップが見つからなかった場合は空文字を返します。
      }
    }

    function shopIdToTel(shop_id) {
      // shops.valueを使用して、反応性のある変数から値を取得します。
      const index = shops.value.findIndex(shop => shop.id === shop_id);
      if (index !== -1) {
        return shops.value[index].tel;
      } else {
        return ''; // ショップが見つからなかった場合は空文字を返します。
      }
    }


    function shopIdToShopImage (shop_id) {
      index = this.shops.findIndex(shop => shop.id === shop_id);
      return this.shops[index].shopicon_image;
    }

    function shopIdToAreaName(shop_id) {
      const shopIndex = shops.value.findIndex(shop => shop.id === shop_id);
      if (shopIndex !== -1) {
        const areaId = shops.value[shopIndex].area_id;
        const areaIndex = areas.value.findIndex(area => area.id === areaId);
        if (areaIndex !== -1) {
          return areas.value[areaIndex].data.name;
        }
      }
      return ''; // エリアが見つからなかった場合は空文字を返す
    }


    function formatDate(isoString) {
      const date = new Date(isoString);
      const year = date.getFullYear();
      const month = date.getMonth() + 1; // getMonth() は 0 から始まるので、1 を加える
      const day = date.getDate();
      const hours = date.getHours(); // 時間を取得
      const minutes = date.getMinutes(); // 分を取得

      // 時間と分が一桁の場合は先頭に0を追加して二桁にする
      const formattedHours = hours.toString();
      const formattedMinutes = minutes.toString().padStart(2, '0');

      // 日付と時刻を組み合わせて返す
      return `最終更新日${year}年${month}月${day}日 ${formattedHours}:${formattedMinutes}`;
    }

    function formattedDateToTime (YYYYMMDD) {
      // Check if schedules is an array and has elements
      if (Array.isArray(modals.value.schedules) && modals.value.schedules.length > 0) {
        const index = modals.value.schedules.findIndex(schedule => schedule.open_date === YYYYMMDD);
        if (index !== -1) {
          const schedule = modals.value.schedules[index];
          if (schedule.start !== null && schedule.end !== null) {
            return schedule.start + '-' + schedule.end;
          } else {
            return '-';
          }
        } else {
          return '-';
        }
      } else {
        // Handle case where schedules is not an array or is empty
        return '-';
      }
    }


    function showModal(profile_id) {
      modalOpen.value = true;
      // const index = schedules.value.findIndex(schedule => schedule.profile_id === profile_id);
      const index = schedules.value.findIndex(item => item.schedule.profile_id === profile_id);
      if (index !== -1) {
        const profile = schedules.value[index].profile;
        const profile_schedules = schedules.value[index].schedules;
        modals.value = {
          'name': profile.name,
          'age': profile.age,
          'height': profile.height,
          'bust': profile.bust,
          'cup': profile.cup,
          'waist': profile.waist,
          'hip': profile.hip,
          'area_name': shopIdToAreaName(profile.shop_id),
          'shop_name': shopIdToShopName(profile.shop_id),
          'operating_hours': shopIdToOperatingHours(profile.shop_id),
          'charge_info': shopIdToChargeInfo(profile.shop_id),
          'introduction': profile.introduction,
          'x_id': profile.x_id,
          'icon': profile.icon,
          'images_one': profile.images_one,
          'images_two': profile.images_two,
          'images_three': profile.images_three,
          'schedules': profile_schedules,
          'shop_id': profile.shop_id,
          'tel': shopIdToTel(profile.shop_id),
        }
      }
    }

    const limitedShops = computed(() => {
      return shops.value.length > 10 ? shops.value.slice(0, 10) : shops.value;
    });

    return {
      modalOpen,
      formattedDates,
      scheduleDates,
      selectArea,
      areas,
      schedules,
      shops,
      posts,
      modals,
      selectTime,
      redirectTo,
      changeArea,
      changeAreaToAll,
      changeTime,
      changeTimeToAll,
      filteredSchedules,
      filteredShops,
      filteredPosts,
      tabItem,
      areaIdToAreaName,
      shopIdToShopName,
      shopIdToShopImage,
      shopIdToAreaName,
      formatDate,
      formattedDateToTime,
      showModal,
      limitedShops,
    }
  }
}).mount('#vue-app');
