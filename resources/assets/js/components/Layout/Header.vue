<template>
    <b-navbar toggleable="md">
        <b-navbar-brand>
            <router-link :to="{ name: 'home' }">
                <img src="/images/logo.png" alt="" class="head-logo">
            </router-link>
        </b-navbar-brand>

        <language-selector :class="languageSelectorClasses" v-if="!user">

        </language-selector>

        <div class="float-right box-head-right" v-if="user">
            <div class="point">
                <p>{{ $t("label_home.answer") }}：{{ $t("label_home.times", {times: recordedCount}) }}</p>
                <!--<p>{{ $t("label_home.point") }}：<span>230</span>P</p>--> <!-- don't use -->
            </div>
            <b-navbar-toggle target="nav_collapse">
                <span class="navbar-toggler-icon"></span>
                <p class="text-menu">{{ $t("label_home.menu") }}</p>
            </b-navbar-toggle>
        </div>

        <b-collapse is-nav id="nav_collapse" v-if="user">
            <b-navbar-nav>
                <b-nav-item>
                    <router-link :to="{ name: 'profile' }">{{ $t("label_home.profile") }}</router-link>
                </b-nav-item>
                <b-nav-item href="javascript:;" @click="logout()">{{ $t("label_home.logout") }}</b-nav-item>
            </b-navbar-nav>

            <language-selector></language-selector>
        </b-collapse>
    </b-navbar>
</template>

<script>
    import http from 'infrastructures/http'

    export default {
        name: 'layout-header',
        data() {
            let languageSelectorClasses = "";
            if (!window.user) {
                languageSelectorClasses = "float-right logo-language";
            }

            return {
                // todo: write a plugin to handle authenticated user
                user: window.user,
                space: '',
                recordedCount: window.user ? window.user.recorded_count : null,
                languageSelectorClasses
            }
        },
        methods: {
            logout() {
                http.post('/logout').then(() => {
                    window.location.href = '/'
                })
            }
        }
    }
</script>
