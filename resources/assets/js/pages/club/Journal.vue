<template>
    <div>
        <div class="sticky-header">
            <p>みんなの日誌</p>
        </div>
        <div class="journal-container">
            <div class="heading">
                2019.01.20
            </div>
            <div class="journals">
                <router-link :to="{ name: 'OneJournal', params: { id: 1 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 2 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 3 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 4 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 5 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 6 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 7 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 8 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 9 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
                <router-link :to="{ name: 'OneJournal', params: { id: 10 } }" class="journal">
                    <p>
                        <span>name</span><br />
                        <span>title</span>
                    </p>
                </router-link>
            </div>
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
        }
    }
};
</script>

<style scoped>
.heading
{
    text-align: center;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 16px;
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

.journal-container {
    width: 100%;
    margin:  64px 0px;
}
.journals {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
}
.journal {
    position: relative;
    width: 30%;
    height: 100px;
    padding: 8px;
    text-align: center;
    font-size: 12px;
    border: 2px solid #08B6FF;
    border-radius: 4px;
    margin: 8px 0;
}
.journal p {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    color: #08B6FF;
}


@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}
</style>