<template>
    <div class="register-login-container">
        <div class="register-login">
            <p class="register-login-text">まずは無料登録！</p>
            <div class="register-login-banner">
                <div class="register">
                    <router-link to="/register" class="button btn-register">新規登録</router-link>
                </div>
                <div class="login">
                    <router-link to="/login" class="button btn-login">ログイン</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

<style scoped>
.register-login-container {
    position: relative;
}
.register-login {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
}
.register-login-text {
    text-align: center;
    margin-bottom: 8px;
}
.register-login-banner {
    display: flex;
    width: 350px;
}
.register,
.login
{
    width: 100%;
    margin: 0px 4px;
    text-align: center;
}
.btn-register {
    color: white;
    background-color: #42ED5A;
    border: none;
    width: 100%;
}
.btn-login {
    color: white;
    background-color: #5BCDFF;
    border: none;
    width: 100%;
}
</style>