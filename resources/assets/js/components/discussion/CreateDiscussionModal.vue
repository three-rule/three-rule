<template>
    <div>
        <transition name="modal">
            <div class="modal-mask">
                <div class="modal-wrapper" @click.self="$emit('close')">
                    <div class="modal-container">
                    
                        <div class="modal-header">
                            <slot name="header">
                            </slot>
                        </div>
                    
                        <div class="modal-body">
                            <slot name="body">
                                <img :src="image">
                                <input type="file" name="" @change="onFileChange">
                                <textarea row=5 class="" v-model="body"></textarea>
                            </slot>
                        </div>
                    
                        <div class="modal-footer">
                            <slot name="footer">
                                <button class="modal-default-button" @click.prevent="submit">
                                    投稿
                                </button>
                            </slot>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
import { mapActions } from 'vuex'
export default {
    data() {
        return {
            image: '',
            body: ''
        }
    },
    props: {
        
    },
    methods: {
        ...mapActions({
            addDiscussion: 'club/addDiscussion'
        }),
        onFileChange(e) {
            if (e.target.files.length === 0) {
              this.reset()
              return false
            }
            if (! event.target.files[0].type.match('image.*')) {
              this.reset()
              return false
            }
            let files = e.target.files || e.dataTransfer.files
            this.createImg(files[0])
        },
        createImg(item) {
            let reader = new FileReader()
            reader.onload = (e) => {
                console.log(e.target.result)
                this.image = e.target.result
            }
            reader.readAsDataURL(item);
        },
        
        reset () {
            this.image = ''
            this.$el.querySelector('input[type="file"]').value = null
        },
        submit() {
            this.addDiscussion({ image: this.image, body: this.body, user_id: 1, club_id: 1 })
            this.$emit('close')
        }
    }
}
</script>

<style>
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
  text-align: center;
}

.modal-default-button {
  float: right;
  background-color: #f8f8f8;
  
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

textarea {
    border: 1px solid #aaa;
    padding: 8px;
}
</style>