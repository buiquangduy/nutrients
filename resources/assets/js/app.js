import Vue from 'vue'
import VueRouter from 'vue-router'
import router from './router'
import BootstrapVue from 'bootstrap-vue'
import { loadProgressBar } from 'axios-progress-bar'
import i18n from './i18n'
import './bootstrap'

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

Vue.use(VueRouter);
Vue.use(BootstrapVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('layout-header', require('./components/Layout/Header.vue'));
Vue.component('main-banner', require('./components/Layout/MainBanner.vue'));
Vue.component('login-form', require('./components/Auth/LoginForm.vue'));
Vue.component('user-profile-form', require('./components/Auth/UserProfileForm.vue'));
Vue.component('news', require('./components/Layout/News.vue'));
Vue.component('mode-material-button', require('./components/Layout/ModeMaterialButton.vue'));
Vue.component('mode-recipe-button', require('./components/Layout/ModeRecipeButton.vue'));
Vue.component('survey-item', require('./components/Survey/SurveyItem.vue'));
Vue.component('material-survey', require('./components/Survey/MaterialSurvey.vue'));
Vue.component('recipe-survey', require('./components/Survey/RecipeSurvey.vue'));
Vue.component('language-selector', require('./components/Layout/LanguageSelector.vue'));
Vue.component('color-survey-item', require('./components/Survey/ColorSurveyItem.vue'));
Vue.component('email-form', require('./components/Auth/EmailForm.vue'));

loadProgressBar({ showSpinner: false, speed: 500 })

const app = new Vue({
    el: '#app',
    i18n,
    router,
});
