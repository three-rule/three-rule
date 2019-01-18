<template>
    <footer class="footer">
        <ul>
            <li>
                <router-link to="/about">ABOUT</router-link>
            </li>
            <li>
                <router-link to="/news">NEWS</router-link>
            </li>
            <li>
                <router-link to="/service">SERVICE</router-link>
            </li>
            <li>
                <router-link to="/recruit">RECRUIT</router-link>
            </li>
            <li>
                <router-link to="/contact">CONTACT</router-link>
            </li>
        </ul>
        <p class="copyright">© 2019 3rules, Inc. Made with dream.</p>
    </footer>
</template>

<script></script>

<style scoped>
.footer {
    display: flex;
    font-weight: bold;
}
.footer > ul {
    display: flex;
    flex-wrap: wrap;
}
.footer ul li {
    margin: 0;
    padding: 0;
    list-style-type: none;
    margin-right: 16px;
}
a {
    color: #4A4A4A;
}

@media screen and (max-width: 768px) {
    .footer {
        display: block;
    }
    .copyright {
        margin: 8px auto;
    }
}

@media screen and (min-width: 1024px) {
    a::after {
      content: '';
      display: block;
      width: 0;
      margin: 8px auto 0;
      border-bottom: 1px solid black;
      transition: width 0.2s ease-in-out;
    }
    a:hover::after {
      width: 100%;
    }
}
</style>