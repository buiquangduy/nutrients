import Vue from 'vue'
import browserLocale from 'browser-locale'
import VueI18n from 'vue-i18n'

Vue.use(VueI18n);

const messages = {
    en: require('./languages/en.js'),
    ja: require('./languages/ja.js'),
};

// detect locale
let locale = localStorage.getItem('locale');
if (!locale) {
    if (browserLocale() === 'ja-JP' || !browserLocale()) {
        locale = 'ja';
    } else {
        locale = 'en';
    }
}

// Create VueI18n instance with options
const i18n = new VueI18n({
    locale,
    fallbackLocale: 'ja',
    messages, // set locale messages
});

export default i18n