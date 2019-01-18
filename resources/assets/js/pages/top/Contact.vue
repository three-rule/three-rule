<template>
<main>
    <three-rule-brand></three-rule-brand>
    <section class="top">
        <h1 class="heading">CONTACT</h1>
        <div class="contact-container">
            <div class="form-container">
                <form>
                    <div class="field contact-wrapper">
                        <label class="label form-text-label">COMPANY</label>
                        <div class="control">
                            <input class="form-text-input" type="text" placeholder="会社名を入力">
                        </div>
                    </div>
                    <div class="field contact-wrapper">
                        <label class="label form-text-label">NAME</label>
                        <div class="control">
                            <input class="form-text-input" type="text" placeholder="お名前を入力">
                        </div>
                    </div>
                    <div class="field contact-wrapper">
                        <label class="label form-text-label">EMAIL</label>
                        <div class="control">
                            <input class="form-text-input" type="email" placeholder="メールアドレスを入力">
                        </div>
                    </div>
                    <div class="field contact-wrapper">
                        <label class="label form-text-label">TELL</label>
                        <div class="control">
                            <input class="form-text-input" type="tel" placeholder="電話番号を入力">
                        </div>
                    </div>
                    <!--<div class="field contact-wrapper">-->
                    <!--    <label class="label form-text-label">SELECT</label>-->
                    <!--    <div class="control">-->
                    <!--        <div class="select form-select">-->
                    <!--            <select>-->
                    <!--                <option>お問い合わせ項目を選択してください</option>-->
                    <!--                <option>3ruleについて</option>-->
                    <!--            </select>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="field contact-wrapper">-->
                    <!--    <label class="label form-text-label">DESCRIPTION</label>-->
                    <!--    <div class="control">-->
                    <!--        <textarea cols="30" rows="10" class="form-text-textarea" type="textarea" placeholder="お問い合わせ内容を入力"></textarea>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="contact-form-btn">
                        <a>送信</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <sticky-footer></sticky-footer>
</main>
</template>


<script>
import ThreeRuleBrand from '../../components/top/ThreeRuleBrand';
import StickyFooter from '../../components/top/StickyFooter';
export default {
    components: {
        ThreeRuleBrand,
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
  position: relative;
  display: inline-block;
  margin: 30px auto 30px;
  padding-bottom: 15px;
  letter-spacing: 2px;
  font-size: 48px;
  font-weight: bold;
  color: black;
}
.heading::after {
  content: '';
  display: block;
  height: 4px;
  width: 120%;
  border-bottom: 2px solid black;
}
.contact-wrapper {
    display: flex;
    width: 100%;
    height: 50px;
    background-color: #f2f2f2;
    margin-bottom: 10px;
    font-size: 0;
}
.form-text-input {
    display: inline-block;
    vertical-align: middle;
    width: 580px;
    height: 50px;
    line-height: 1.6;
    letter-spacing: 0.03em;
    font-size: 15px;
}
.form-text-label {
    display: inline-block;
    vertical-align: top;
    width: 180px;
    padding-left: 20px;
    font-size: 12px;
    font-weight: bold;
    line-height: 50px;
    letter-spacing: 0.2em;
    margin-bottom: 0px;
}
input, button, textarea, select {
    margin: 0;
    padding: 0;
    background: none;
    border: none;
    border-radius: 0;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.form-select {
    position: absolute;
    top: 0;
    left: 200px;
    z-index: 20;
    width: 580px;
    height: 50px;
    line-height: 1.6;
    letter-spacing: 0.03em;
    font-size: 15px;
    cursor: pointer;
}
.form_text_textarea {
    box-sizing: border-box;
    display: inline-block;
    vertical-align: middle;
    width: 580px;
    height: 200px;
    padding: 13px 0;
    line-height: 1.6;
    letter-spacing: 0.08em;
    font-size: 15px;
    resize: none;
}
.contact-form-btn a {
    display: inline-block;
    padding: 5px 15px;
    background-color: black;
    font-size: 16px;
    line-height: 1.7;
    letter-spacing: 0.05em;
    margin-bottom: 8px;
    border-radius: 2px;
    color: white;
}

@media screen and (max-width: 767px) {
    .top {
        margin: 80px 15px 140px 15px;
    }
    .heading {
        font-size: 30px;
    }
    .about-text {
        margin-bottom: 30px;
        font-size: 16px;
        font-weight: bold;
    }
    .about-list {
        font-size: 14px;
        line-height: 1.5;   
    }
    .form-text-label {
        width: 26%;
        padding-left: 3%;
        letter-spacing: 0.05em;
    }
    .form-text-input {
        width: 65%;
    }
}

@media screen and (min-width: 1024px) {
    .top {
        width: 800px;
        margin: 48px auto 180px auto;
    }
}
</style>