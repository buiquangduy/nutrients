<template>
    <div>
        <div class="banner-login text-center">
            <img src="/images/banner.jpg" class="img-fluid d-md-none">
            <img src="/images/banner_pc.jpg" class="img-fluid d-none d-lg-block d-md-block">
        </div>

        <div class="container form-login">
            <div class="row text-center">
                <div class="col-sm-5 col-md-6 form-logo">
                    <img src="/images/logo.png" class="img-fluid">
                </div>
                <div class="col-sm-7 col-md-6 text-description text-left">
                    <p>{{ $t("label_login.text_description_1") }} <br> {{ $t("label_login.text_description_2") }}</p>
                </div>
            </div>

            <div class="row">
                <div class="form-main">
                    <login-form></login-form>

                    <div class="col-xl-12 text-center mt-3">
                        <router-link :to="{ name: 'password-request' }" class="forget-password-button">{{ $t("label_login.forgot_pass") }}</router-link>
                    </div>
                    <div class="col-xl-12 text-center mt-3">
                        <router-link :to="{ name: 'register' }" class="btn btn-login-register">{{ $t("label_login.register") }}</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'login-page',
    }
</script>
