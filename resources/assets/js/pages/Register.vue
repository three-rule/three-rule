<template>
    <section class="section">
        <div class="form-container">
            
            <router-link to="/login" class="button btn-expand btn-login">
                <strong>ログインPageへ</strong>
              </router-link>
            
            <form>
                <p class="register-title">新規登録</p>
                <div class="field">
                    <label class="label">名前</label>
                    <input class="input" type="text" placeholder="フルネーム" v-model="user.name" required autofocus>
                </div>
                <div class="field">
                    <label class="label">属性</label>
                    <select v-model="user.type">
                      <option disabled value="">Please select one</option>
                      <option>選手</option>
                      <option>コーチ</option>
                      <option>トレーナー</option>
                      <option>栄養士</option>
                      <option>支援者</option>
                    </select>
                </div>
                <div class="field">
                    <label class="label">メールアドレス</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="半角英数" v-model="user.email" required autofocus>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">パスワード</label>
                    <div class="control has-icons-left">
                        <input class="input" type="password" placeholder="6~16文字 半角英数" v-model="user.password" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="btn-container">
                    <button class="button is-block is-fullwidth" @click.prevent="handleRegister">
                        登録する
                    </button>
                </div>
            </form>
        </div>        
    </section>
</template>

<script>
import { mapActions } from 'vuex'
export default {
    data() {
        return {
            user: {
                name: '',
                type: '',
                email: '',
                password: ''
            }
        }
    },
    methods: {
        ...mapActions({
            register: 'user/register',
            login: 'user/login'
        }),
        async handleLogin() {
            await this.login({ email: this.user.email, password: this.user.password })
            this.$router.push('/selectclub/3')
            
            // console.log('loginnnn')
            // const params = {
            //     email:     this.user.email,
            //     password:  this.user.password
            // };
            // axios.post('/login', params)
            //     .then(response => {
            //         swal("Success!", "Your product has been opsated!", "success")
            //         this.$router.push('/selectclub/3')
            //     })
        },
        async handleRegister() {
            console.log('btn on')
            const params = {
                name:      this.user.name,
                user_type: this.user.type,
                email:     this.user.email,
                password:  this.user.password
            };
            axios.post('/register', params)
                .then(response => {
                   this.handleLogin() 
                })
        },
        // async handleRegister() {
        //     const params = {
        //         name:      this.user.name,
        //         user_type: this.user.type,
        //         email:     this.user.email,
        //         password:  this.user.password
        //     };
        //     console.log('btn on')
        //     await this.register({ params })
        //     this.handleLogin()
        // }
    }
}
</script>

<style type="scss" scoped>
.btn-line {
  background-color: #00c300;
  border: 1px solid #00c300;
  color: white;
}
.register-title {
  padding-top: 10px;
  padding-bottom: 15px;
  font-weight: bold;
  font-size: 18px;
}
.label {
    font-size: 12px;
    font-weight: normal;
}
.btn-container {
    margin-top: 24px;
}
.btn-container .button {
    background-color:  #42ED5A;
    border: 1px solid  #42ED5A;
    color: white;
}
.reset-password {
    margin-top: 15px;
    text-align: center;
}


@media screen and (min-width: 1024px) {
    .form-container {
        padding: 0 400px;
    }
}
</style>