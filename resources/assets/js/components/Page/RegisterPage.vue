<template>
    <div class="container">
        <div class="col-12">
            <div class="screen-title">
                <p class="mb-0 mb-sm-0 mb-md-0" v-if="!isUpdateProfile">{{ $t('label_register.register_screen_title') }}</p>
                <p class="mb-0 mb-sm-0 mb-md-0" v-if="isUpdateProfile">{{ $t('label_register.profile_screen_title') }}</p>
            </div>
            <div class="form-login">
                <div class="row text-center">
                    <div class="col-sm-5 form-logo">
                        <img src="/images/logo.png" class="img-fluid">
                    </div>
                    <div class="col-sm-7 text-description text-left">
                        <p>{{ $t("label_login.text_description_1") }} <br> {{ $t("label_login.text_description_2") }}</p>
                    </div>
                </div>
            </div>

            <user-profile-form></user-profile-form>
        </div>
    </div>
</template>

<script>
    import router from '@/router'

    export default {
        name: 'register-page',
        computed: {
            /**
             * Show screen title for register page or profile page
             */
            isUpdateProfile() {
                return router.currentRoute.name === 'profile';
            }
        }
    }
</script>
