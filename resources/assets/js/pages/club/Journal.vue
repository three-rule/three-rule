<template>
    <div>
        <div class="sticky-header">
            <p>みんなの日誌</p>
        </div>
    
        <div class="journal-container">
            <router-link :to="{ name: 'JournalCreate', params: { id: $route.params.id } }">
                日誌を書く
            </router-link>
            
        
            <div class="heading">
                {{ date | moment }}
            </div>
            
            
            <div class="journals">
                
                <router-link 
                  :to="{ name: 'OneJournal', params: { id: journal.id } }" 
                  v-for="journal in ClubJournalData.journal" :key="journal.id"
                  v-if=" journal.activity_date == '2019-02-01'"
                  class="journal">
                    <p>
                        <!--{{ journal.activity_date }}-->
                        <span>{{ journal.user_id }}</span><br />
                        <span>{{ journal.title }}</span>
                    </p>
                </router-link>
                
                <!--<router-link :to="{ name: 'OneJournal', params: { id: 1 } }" class="journal">-->
                <!--    <p>-->
                <!--        <span>name</span><br />-->
                <!--        <span>title</span>-->
                <!--    </p>-->
                <!--</router-link>-->
                <!--<router-link :to="{ name: 'OneJournal', params: { id: 2 } }" class="journal">-->
                <!--    <p>-->
                <!--        <span>name</span><br />-->
                <!--        <span>title</span>-->
                <!--    </p>-->
                <!--</router-link>-->
                <!--<router-link :to="{ name: 'OneJournal', params: { id: 3 } }" class="journal">-->
                <!--    <p>-->
                <!--        <span>name</span><br />-->
                <!--        <span>title</span>-->
                <!--    </p>-->
                <!--</router-link>-->
            </div>
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';
import moment from 'moment';
import { mapGetters } from 'vuex';
// const today = moment();

export default {
    components: {
        StickyFooter
    },
    data () {
        return {
        }
    },
    filters: {
        moment: function (date) {
            moment.locale('ja', { weekdays: ["日","月","火","水","木","金","土"] });
            // return moment(date).format('YYYY.MM.DD (dddd)');
            return moment(date).format('YYYY-MM-DD');
        },
    },
    computed: {
        ...mapGetters({
            ClubJournalData: 'club/fetchIndividualClubData',
        }),
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