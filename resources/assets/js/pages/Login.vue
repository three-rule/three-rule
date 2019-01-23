<template>
    <div>
        <div class="sticky-header">
            <p>ログイン</p>
        </div>
        <div class="form-container">
            <div class="btn-groups">
                <div class="btn-instgram">
                    <a class="btn-color">
                        <i class="fab fa-instagram"></i>
                        <span>Instgram</span>
                    </a>
                </div>
                <div class="btn-twitter">
                    <a class="btn-color">
                        <i class="fab fa-twitter"></i>
                        <span>Twitter</span>
                    </a>
                </div>
                <div class="btn-facebook">
                    <a class="btn-color">
                        <i class="fab fa-facebook"></i>
                        <span>Facebook</span>
                    </a>
                </div>
                <div class="btn-line">
                    <a class="btn-color">
                        <i class="fab fa-line"></i>
                        <span>LINE</span>
                    </a>
                </div>
            </div>
            <form>
                <div class="field">
                    <label class="label">メールアドレス</label>
                    <div class="control has-icons-left has-icons-right">
                        <input
                            class="input"
                            type="email"
                            placeholder="半角英数"
                            v-model="email"
                            required
                            autofocus>
                      
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">パスワード</label>
                    <div class="control has-icons-left">
                        <input
                            class="input"
                            type="password"
                            placeholder="6~16文字 半角英数"
                            v-model="password"
                            required>
    
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="btn-container">
                    <button class="button is-block is-fullwidth">
                        ログインする
                    </button>
                </div>

                <div class="reset-password">
                    <a>パスワードを忘れた方</a>    
                </div>
            </form>
        </div>        
    </div>
</template>

<script>

export default {
  data() {
    return {
      email: '',
      password: '',
    }
  }
}
</script>

<style type="scss" scoped>
.form-container {
    margin: 64px 16px;
}
.btn-groups {
    display: flex;
    flex-wrap: wrap;
}
.btn-color {
     color: white;
}
.btn-twitter {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 8px 4px 4px;
    background-color: #00aced;
    width: 45%;
    height: 36px;
    border-radius: 4px;
}
.btn-line {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 8px 4px 4px;
    background-color: #00c300;
    width: 45%;
    height: 36px;
    border-radius: 4px;
}
.btn-facebook {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 8px 4px 4px;
    background-color: #3B5998;
    width: 45%;
    height: 36px;
    border-radius: 4px;
}
.btn-instgram {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 8px 4px 4px;
    background-color: #c6529a;
    width: 45%;
    height: 36px;
    border-radius: 4px;
}
.login-title {
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
    background-color: #5BCDFF;
    border: 1px solid #5BCDFF;
    color: white;
}
.reset-password {
    margin-top: 15px;
    text-align: center;
}

.sticky-header {
    width: 100%;
    height: 50px;
    line-height: 16px;
    position: fixed;
    top: 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    background-color: #FCFCFC;
    z-index: 999;
}
.sticky-header p {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    font-weight: bold;
    font-size: 16px;
}


@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}

@media screen and (min-width: 1024px) {
    .form-container {
        padding: 0 400px;
    }
}
</style>