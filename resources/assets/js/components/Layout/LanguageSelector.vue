<template>
    <b-navbar-nav>
        <b-nav-item-dropdown right class="language-selector">
            <template slot="button-content">
                <span v-if="isLocale('en')"><img src="/images/flags/en.png"></span>
                <span v-if="isLocale('ja')"><img src="/images/flags/ja.png"></span>
            </template>
            <b-dropdown-item v-if="!isLocale('en')" @click="changeLocale('en')"><img src="/images/flags/en.png"> English</b-dropdown-item>
            <b-dropdown-item v-if="!isLocale('ja')" @click="changeLocale('ja')"><img src="/images/flags/ja.png"> Japanese</b-dropdown-item>
        </b-nav-item-dropdown>
    </b-navbar-nav>
</template>

<script>
    import { EventBus } from 'models/event-bus'

    export default {
        name: 'language-selector',
        methods: {
            isLocale(locale) {
                return this.$i18n.locale === locale;
            },
            changeLocale(locale) {
                this.$i18n.locale = locale;
                EventBus.$emit('language-changed', true);
                EventBus.$emit('profile-language-changed', this.$i18n.locale);
                localStorage.setItem('locale', locale);
            }
        }
    }
</script>
