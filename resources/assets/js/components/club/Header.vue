<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <router-link to="/" role="button" aria-label="menu" aria-expanded="false" class="navbar-item brand">
          <p class="title is-4">3 rule</p>
        </router-link>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
    
      <div class="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <router-link to="/register" class="button btn-expand btn-register">
                <strong class="has-text-white">登録する</strong>
              </router-link>
              <router-link to="/login" class="button btn-expand btn-login">
                <strong class="has-text-white">ログイン</strong>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </nav>
</template>

<script>

export default {
}
</script>

<style scoped>
.brand {
    display: flex;
    font-size: 18px;
    font-weight: bold;
    padding-right: 8px;
}
.button.btn-register {
  background-color: #42ED5A;
}
.button.btn-login {
  background-color: #5BCDFF;
}
.button.btn-logout {
  background-color: #ef767a;
}
.btn-expand {
  border: none;
}
.btn-dropdown {
  border: none;
}
</style>