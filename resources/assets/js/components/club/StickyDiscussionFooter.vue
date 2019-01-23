<template>
    <div class="sticky-footer">
        <router-link to="/club" class="left-item">
            <div>
                <i class="fas fa-home"></i>
            </div>
        </router-link>
        <div class="post-discussion">
            <div class="btn-post">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <router-link to="/mypage" class="right-item">
            <div>
                <i class="fas fa-user"></i>
            </div>
        </router-link>
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
.sticky-footer {
    display: flex;
    width: 100%;
    height: 50px;
    line-height: 16px;
    position: fixed;
    bottom: 0;
    box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.05);
    background-color: white;
    z-index: 999;
}
.post-discussion {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 50%;
}
.left-item {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 50%;
}
.left-item, .right-item div {
    font-weight: bold;
    font-size: 20px;
    color: black;
}
.right-item {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    width: 50%;
}
.btn-post {
    color: #08B6FF;
    padding: 8px;
    border: 1px solid #08B6FF;
    border-radius: 8px;
}

@media screen and (max-width: 767px) {
    .sticky-footer {
        height: 50px;
        line-height: 10px;
    }
}
</style>