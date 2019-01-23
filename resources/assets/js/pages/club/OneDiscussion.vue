<template>
    <div>
        <div class="sticky-header">
            <p>One Discussion: {{ $route.params.discuss_id}}</p>
        </div>
        <div class="discussion-timeline">
            <div class="discussion-container">
                <div class="discussion-wrapper">
                    <div class="discussion">
                        <div class="discussion-top-part">
                            <div class="contributor-image">
                                <figure class="image">
                                    <progressive-img
                                        src="http://placehold.jp/48x48.png"
                                        placeholder="http://placehold.jp/48x48.png"
                                        :blur="30"
                                    />
                                </figure>
                            </div>
                            <div class="contributor-name">
                                黒澤信五
                            </div>
                        </div>
                        <div class="discussion-right-part">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-options">
                <div class="comment-options-wrapper">
                    <div class="start-discussion">
                        <i class="fas fa-comment"></i>
                        ディスカッションを開始する
                    </div>
                </div>
            </div>
            <div class="discussion-spaces">
                <div class="discussion-spaces-wrapper">
                    <div class="one-discussion">
                        <div class="one-discussion-wrapper">
                            <div class="one-discussion-left-part">
                                <div class="contributor-image contributor-image__commenter">
                                    <figure class="image">
                                        <progressive-img
                                            src="http://placehold.jp/48x48.png"
                                            placeholder="http://placehold.jp/48x48.png"
                                            :blur="30"
                                        />
                                    </figure>
                                </div>
                            </div>
                            <div class="one-discussion-right-part">
                                <div class="contributor-name contributor-name__commenter">
                                    黒澤信五
                                </div>
                                <div class="post-contents">
                                    adjoaijdoiajoadjoaijdoiajoadjoaijdoiajoadjoaijdoiajoadjoaijdoiajoadjoaijdoiajoadjoaijdoiajo
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-discussion">
                        <div class="one-discussion-wrapper">
                            <div class="one-discussion-left-part">
                                <div class="contributor-image contributor-image__commenter">
                                    <figure class="image">
                                        <progressive-img
                                            src="http://placehold.jp/48x48.png"
                                            placeholder="http://placehold.jp/48x48.png"
                                            :blur="30"
                                        />
                                    </figure>
                                </div>
                            </div>
                            <div class="one-discussion-right-part">
                                <div class="contributor-name contributor-name__commenter">
                                    上のゆゆま
                                </div>
                                <div class="post-contents">
                                    ギャルだーいすき
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <sticky-footer></sticky-footer>
    </div>
</template>

<script>
import StickyFooter from '../../components/club/StickyFooter';

export default {
    name: 'OneDiscussion',
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
.discussion-timeline {
    margin: 48px 8px;
}
.discussion-container {
    padding: 8px;
    width: 100%;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.discussion-wrapper {
    padding: 8px;
    height: 100%;
    width: 100%;
}
.discussion {
    width: 100%;
    margin-top: 16px;
}
.discussion-top-part {
    display: flex;
    margin-right: 8px;
    margin-bottom: 4px;
}
    
.contributor-image {
    width: 48px;
    height: 48px;
    margin-right: 16px;
    z-index: -2;
}
.contributor-name {
    width: 100%;
}
.discussion-right-part {
    width: 100%;
    height: 100%;
}
.discussion-right-part .post-contents {
    overflow-wrap: break-word;
    margin-bottom: 8px;
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
.comment-options {
    padding: 8px;
    width: 100%;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.start-discussion {
    padding: 8px;
    height: 100%;
    width: 100%;
}
.discussion-spaces {
    padding: 8px;
    width: 100%;
}
.discussion-spaces-wrapper {
    padding: 8px;
    height: 100%;
    width: 100%;
}
.one-discussion {
    
}
.one-discussion-wrapper {
    display: flex;
    width: 100%;
    margin-top: 16px;
}

.one-discussion-left-part {
}
.one-discussion-right-part {
    width: 75%;
    height: 100%;
}
.one-discussion-right-part .contributor-name {
    width: 100%;
    height: 25px;
    margin-bottom: 4px;
}
.one-discussion-right-part .post-contents {
    overflow-wrap: break-word;
    margin-bottom: 8px;
}






@media screen and (max-width: 767px) {
    .sticky-header {
        height: 50px;
        line-height: 10px;
    }
}
</style>