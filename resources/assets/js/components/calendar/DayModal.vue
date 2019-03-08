<template>
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper" @click.self="$emit('close')">
        <div class="modal-container">

          <!--<div class="modal-header">-->
          <!--  <slot name="header">-->
          <!--    day-->
          <!--  </slot>-->
          <!--</div>-->

          <div class="modal-body">
            <slot name="body">
              {{ day }}
            </slot>
            <div>
              <input type="text" style="border: 1px solid #e0e0e0;" placeholder="練習名を入力してください" v-model="title">
              
              <!--<input type="text" style="border: 1px solid #e0e0e0;" placeholder="#タグ名" v-model="tag"/>-->
              <select v-model="tag">
                <option disabled value="">タグを選択</option>
                <option value="1">1:{{ clubData[0].tag_one }}</option>
                <option value="2">2:{{ clubData[0].tag_two }}</option>
                <option value="3">3:{{ clubData[0].tag_three }}</option>
                <option value="4">4:{{ clubData[0].tag_four }}</option>
                <option value="5">5:{{ clubData[0].tag_five }}</option>
                <!--<option value="1">1:</option>-->
                <!--<option value="2">2:</option>-->
                <!--<option value="3">3:</option>-->
                <!--<option value="4">4:</option>-->
                <!--<option value="5">5:</option>-->
              </select>
              
              <select v-model="schedule">
                <option disabled value="">スケジュールを選択</option>
                <option>練習</option>
                <option>休み</option>
                <option>試合</option>
                <option>未定</option>
              </select>
              
              <div>
                開始時間:
                <input type="time" style="border: 1px solid #e0e0e0;" list="data1" v-model="start_time">
              </div>  
              <div>
                終了時間:
                <input type="time" style="border: 1px solid #e0e0e0;" list="data1" v-model="end_time">
              </div>
                <datalist id="data1">
                  <!--<option value="0:00"></option><option value="0:30"></option>-->
                  <!--<option value="01:00"></option><option value="01:30"></option><option value="02:00"></option><option value="02:30"></option>-->
                  <!--<option value="03:00"></option><option value="03:30"></option><option value="04:00"></option><option value="04:30"></option>-->
                  <!--<option value="05:00"></option><option value="05:30"></option><option value="06:00"></option><option value="06:30"></option>-->
                  <!--<option value="07:00"></option><option value="07:30"></option><option value="08:00"></option><option value="08:30"></option>-->
                  <option value="09:00"></option><option value="09:30"></option><option value="10:00"></option><option value="10:30"></option>
                  <option value="11:00"></option><option value="11:30"></option><option value="12:00"></option><option value="12:30"></option>
                  <option value="13:00"></option><option value="13:30"></option><option value="14:00"></option><option value="14:30"></option>
                  <option value="15:00"></option><option value="15:30"></option><option value="16:00"></option><option value="16:30"></option>
                  <option value="17:00"></option><option value="17:30"></option><option value="18:00"></option><option value="18:30"></option><option value="19:00"></option>
                  <!--<option value="19:30"></option><option value="20:00"></option><option value="20:30"></option><option value="21:00"></option><option value="21:30"></option>-->
                  <!--<option value="22:00"></option><option value="22:30"></option><option value="23:00"></option><option value="23:30"></option><option value="24:00"></option>-->
                </datalist>
              <div>
                <input type="text" style="border: 1px solid #e0e0e0;" placeholder="参考URLを貼付" v-model="url">
              </div>
              <div>
                <textarea type="text" style="border: 1px solid #e0e0e0;" placeholder="説明" v-model="description"></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <slot name="footer">
              <button class="modal-default-button" @click.prevent="submit(title, schedule, tag, start_time, end_time, url, description)">
                保存
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>  
</template>


<script>
import { mapGetters } from 'vuex';

export default {
  name: 'day-modal',
  data() {
    return {
      title: '',
      schedule: '',
      tag: '',
      start_time: '',
      end_time : '',
      url: '',
      description: ''
    }
  },
  computed: {
    ...mapGetters({
      clubData: 'club/clubData'
    })
  },
  props: {
    day: String,
    submit: {
      type: Function,
      default: () => (["title", "schedule", "tag", "start_time", "end_time", "url", "description"])
    }
  }
}
</script>

<style scoped>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>