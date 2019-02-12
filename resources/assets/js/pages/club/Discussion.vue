<template>
    <div>
        <div class="sticky-header">
            <p>ディスカッション</p>
        </div>
        <div class="discussion-timeline">
            <div class="discussion-container">
                <div class="discussion-wrapper">
                    <router-link :to="{ name: 'OneDiscussion', params: { discuss_id: 1 } }" class="discussion">
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
                                黒澤信五
                            </div>
                            <div class="post-contents">
                                <p class="content">
                                    おれは黒澤信五だ。みんな、あいしてるぜ
                                </p>
                            </div>
                            <div class="post-image">
                                <figure class="image">
                                    <progressive-img
                                        src="http://placehold.jp/250x150.png"
                                        placeholder="http://placehold.jp/250x150.png"
                                        :blur="30"
                                    />
                                </figure>
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
                <div class="discussion-wrapper">
                    <router-link :to="{ name: 'OneDiscussion', params: { discuss_id: 2 } }" class="discussion">
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
                                上のゆゆま
                            </div>
                            <div class="post-contents">
                                <p class="content">
                                    おれは上のゆゆま。
                                </p>
                            </div>
                            <div class="post-image">
                                <figure class="image">
                                    <progressive-img
                                        src="http://placehold.jp/250x150.png"
                                        placeholder="http://placehold.jp/250x150.png"
                                        :blur="30"
                                    />
                                </figure>
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
            </div>
        </div>
        <sticky-discussion-footer></sticky-discussion-footer>
    </div>
</template>

<script>
import StickyDiscussionFooter from '../../components/club/StickyDiscussionFooter';

export default {
    components: {
        StickyDiscussionFooter
    },
    data () {
        return {
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
</style>