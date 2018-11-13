<template>
    <div class="banner-common container-fluid">
        <div class="row content">
            <div class="col-12 box-left">
                <div class="box-content-left">
                    <!--<div class="silver-member">{{ $t("label_home.silver_member") }}</div>--> <!-- don't use -->
                    <p>
                        {{ user.getFullNameKatakana() }}
                        {{ user.getFullNameKanji() }}様
                    </p>
                    <p>（{{ user.name }}：<span>{{ user.email }}</span>）</p>
                </div>
            </div>
            <div class="box-right" v-show="isOnHomepage()">
                <a href="" class="btn btn-default btn-survey-mode">{{ type }}</a>
            </div>
        </div>
    </div>
</template>

<script>
    import router from '@/router'
    import User from 'models/user'
    import { EventBus } from 'models/event-bus'

    export default {
        name: 'main-banner',
        props: ['type'],
        data() {
            return {
                user: new User(window.user)
            }
        },
        methods: {
            isOnHomepage() {
                return !(this.$route.name == "home")
            }
        },
        mounted() {
            EventBus.$on('language-changed', changeLanguage => {
                if (changeLanguage) {
                    this.$forceUpdate();
                }
            });
        }
    }
</script>
