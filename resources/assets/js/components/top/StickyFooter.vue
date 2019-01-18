<template>
<div class="sticky-footer">
    <div class="container sticky-footer-container">
        <ul class="sticky-footer-wrapper">
            <li class="heading">
                <router-link to="/about">ABOUT</router-link>
            </li>
            <li class="heading">
                <router-link to="/news">NEWS</router-link>
            </li>
            <li class="heading">
                <router-link to="/service">SERVICE</router-link>
            </li>
            <li class="heading">
                <router-link to="/recruit">RECRUIT</router-link>
            </li>
            <li class="heading">
                <router-link to="/contact">CONTACT</router-link>
            </li>
        </ul>
    </div>
</div>
</template>

<script>
export default {
    data () {
        return {
        }
    }
};
</script>

<style scoped>
.heading
{
  position: relative;
  display: inline-block;
  margin: 30px auto 45px;
  padding-bottom: 15px;
  letter-spacing: 2px;
  font-size: 36px;
  font-weight: bold;
}
.heading a {
  color: black;
  display: inline-block;
}
.sticky-footer {
    width: 100%;
    height: 100px;
    line-height: 16px;
    position: fixed;
    bottom: 0;
    box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.05);
    background-color: white;
}
.sticky-footer-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    padding-bottom: 10px;
}

@media screen and (max-width: 767px) {
    .heading {
      padding: 0px 16px;
      margin: 8px auto 8px;
      font-size: 16px;
    }
    .sticky-footer {
        height: 80px;
        line-height: 10px;
    }
    .sticky-footer-wrapper {
        padding-top: 12px;
        flex-direction: row;
        flex-wrap: wrap;
    }
    
}

@media screen and (min-width: 1024px) {
    .heading a::after {
      content: '';
      display: block;
      width: 0;
      margin: 20px auto 0;
      border-bottom: 2px solid black;
      transition: width 0.2s ease-in-out;
    }
    .heading a:hover::after {
      width: 100%;
    }
}
</style>