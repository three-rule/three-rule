<template>
    <div>
        <div class="sticky-header">
            <p>ディスカッション</p>
        </div>
        <div class="discussion-timeline">
            <div class="discussion-container">
                <div v-for="item in fetchIndividualClubData.discussion" :key="item.id" class="discussion-wrapper">
                    <div>
                        <router-link :to="{ name: 'OneDiscussion', params: { discuss_id: item.id, club_id: item.club_id } }" class="discussion">
                            <div class="discussion-left-part">
                                <div class="contributor-image">
                                    <figure class="image">
                                        <progressive-img
                                            src="http://placehold.jp/48x48.png"
                                            placeholder="http://placehold.jp/48x48.png"
                                            :blur="30"
                                        />
                                    </figure>
                                </div>
                            </div>
                            <div class="discussion-right-part">
                                <div class="contributor-name">
                                    {{ item.user_id }}
                                </div>
                                <div class="post-contents">
                                    <p class="content">
                                        {{ item.body }}
                                    </p>
                                </div>
                                <div class="post-image">
                                    <figure class="image">
                                        <progressive-img
                                            :src="'../images/' + item.image"
                                            placeholder="http://placehold.jp/250x150.png"
                                        />
                                    </figure>
                                </div>
                                <div class="discussion-btn">
                                    <div class="discussion-btn-part">
                                        <i class="fas fa-heart has-text-danger" @click.prevent="handleGood(item.id)" v-if="item.discussion_counts.find(like => like.user_id == 1)"></i>
                                        <i class="far fa-heart has-text-black" @click.prevent="handleGood(item.id)" v-else></i>
                                        <span class="discussion-count">{{ item.discussion_counts.length }}</span>
                                    </div>
                                    <div class="discussion-btn-part comment-count-part">
                                        <i class="far fa-comment has-text-black"></i>
                                        <span class="discussion-count">{{ item.discussion_comments.length }}</span>
                                    </div>
                                </div>
                                <div class="comment-contributor">
                                    <div class="comment-contributor-image">
                                        <figure class="image">
                                            <progressive-img
                                                src="http://placehold.jp/24x24.png"
                                                placeholder="http://placehold.jp/24x24.png"
                                                :blur="30"
                                            />
                                        </figure>
                                    </div>
                                    <div class="comment-count">
                                        <span>1</span>
                                        <span>件の返信</span>
                                    </div>
                                </div>
                            </div>
                        </router-link>
                    </div>
                    <!--<div class="discussion-btn">-->
                    <!--    <div class="discussion-btn-part">-->
                    <!--        <i class="fas fa-heart has-text-danger"-->
                    <!--        @click="handleGood(item.id)"-->
                    <!--        v-if="item.discussion_counts.find(like => like.user_id == 1)">-->
                    <!--        </i>-->
                    <!--        <i class="far fa-heart has-text-black" @click="handleGood(item.id)" v-else></i>-->
                    <!--        <span class="discussion-count">{{ item.discussion_counts.length }}</span>-->
                    <!--    </div>-->
                    <!--    <div class="discussion-btn-part comment-count-part">-->
                    <!--        <i class="far fa-comment has-text-black"></i>-->
                    <!--        <span class="discussion-count">0</span>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <sticky-discussion-footer
        :createDiscussionModalToggle='createDiscussionModalToggle'>
        </sticky-discussion-footer>
        
        <div>
            <create-discussion-modal
            v-if="createDiscussionModalShow"
            @close="createDiscussionModalToggle">
            </create-discussion-modal>
        </div>
    </div>
</template>

<script>
import StickyDiscussionFooter from '../../components/club/StickyDiscussionFooter';
import CreateDiscussionModal from '../../components/discussion/CreateDiscussionModal';
import { mapActions, mapGetters } from 'vuex'
export default {
    components: {
        StickyDiscussionFooter,
        CreateDiscussionModal
    },
    data () {
        return {
            createDiscussionModalShow: false
        }
    },
    created() {
        this.getClub()
    },
    computed: {
        ...mapGetters({
            clubData: 'club/clubData',
            fetchIndividualClubData: 'club/fetchIndividualClubData',
        })
    },
    methods: {
        ...mapActions({
            getClub: 'club/getClub',
            addDiscussionLike: 'club/addDiscussionLike',
            getUsers: 'user/getUsers'
        }),
        createDiscussionModalToggle() {
            this.createDiscussionModalShow = !this.createDiscussionModalShow
        },
        handleGood(discussion_id) {
            this.addDiscussionLike({ discussion_id: discussion_id, user_id: 1 })
        }
    }
};
</script>

<style scoped>
.discussion-timeline {
    margin: 64px 8px;
}
.discussion-container {
    padding: 8px;
    width: 100%;
}
.discussion-wrapper {
    padding: 8px;
    height: 100%;
    width: 100%;
    z-index: -2;
}
.discussion {
    display: flex;
    width: 100%;
    margin-top: 16px;
    color: #4a4a4a;
}
.discussion-left-part {
    margin-right: 16px;
}
    
.discussion-left-part .contributor-image {
    width: 48px;
    height: 48px;
}
.discussion-right-part {
    width: 75%;
    height: 100%;
}
.discussion-right-part .contributor-name {
    width: 100%;
    height: 25px;
    margin-bottom: 8px;
}
.discussion-right-part .post-contents {
    overflow-wrap: break-word;
    margin-bottom: 8px;
}
.discussion-right-part .comment-contributor-image {
    width: 24px;
    height: 24px;
    margin-right: 8px;
}
.comment-contributor {
    display: flex;
}
.comment-count {
    color: #08B6FF;
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
.discussion-btn {
    display: flex;
    align-items: center;
    margin: 8px 0;
    z-index: 2;
}

.discussion-count {
    margin-left: 4px;
}

.discussion-btn-part {
    display: flex;
    align-items: center;
}

.comment-count-part {
    margin-left: 8px;
}
</style>