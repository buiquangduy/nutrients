<template>
    <form>
        <div class="text-error" v-if="errors.error_general">{{ errors.error_general[0] }}</div>
        <div :class="`form-group ${errors.email ? 'has-error' : ''}`">
            <label for="email" class="control-label label-login">{{ $t("label_login.login_id") }}</label>
            <div class="box-input">
                <input id="email" type="text" class="form-control input-login" name="login_id" v-model="email" placeholder="test@tavenal.com" autofocus>
                <i v-if="isEmailValid()" class="fa fa-check icon-check-success" aria-hidden="true"></i>
                <span class="text-danger" v-if="errors.login_id">
                    <div class="text-error">{{ errors.login_id[0] }}</div>
                </span>
            </div>
        </div>

        <div :class="`form-group ${errors.password ? 'has-error' : ''}`">
            <label for="password" class="control-label label-login">{{ $t("label_login.password") }}</label>
            <div class="box-input">
                <input id="password" type="password" class="form-control input-login" name="password" v-model="password">
                <i v-if="isPasswordValid()" class="fa fa-check icon-check-success" aria-hidden="true"></i>
                <span class="text-danger">
                    <div class="text-error" v-if="errors.password">{{ errors.password[0] }}</div>
                </span>
            </div>
        </div>
        <div class="col-xl-12 text-center mt-3">
            <button type="submit"
                    class="btn btn-default btn-login-register"
                    @click.prevent="submit">
                {{ $t("label_login.login") }}
            </button>
        </div>

        <!-- Register success-->
        <div class="modalSuccess">
            <b-modal
                    v-model="showRegisterMessage"
                    centered
                    body-text-variant="center"
                    ok-only
                    hide-header
                    footer-class="successModalFooter">
                <p class="messageSuccess" v-html="$t('label_register.message_register_success')"></p>
            </b-modal>
        </div>

    </form>
</template>

<script>
    import http from 'infrastructures/http'
    import router from '@/router'

    export default {
        data() {
            return {
                email: this.email,
                password: '',
                errors: {},
                showRegisterMessage: false,
            }
        },
        created() {
            if (sessionStorage.register_success) {
                this.showRegisterMessage = sessionStorage.register_success === 'show';
                sessionStorage.clear();
            }
        },
        methods: {
            /**
             * Is current email input valid or not?
             *
             * @returns {Boolean}
             */
            isEmailValid() {
                let pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;

                return pattern.test(this.email);
            },

            /**
             * Is current password input valid or not?
             *
             * @returns {Boolean}
             */
            isPasswordValid() {
                return this.password.length < 6 ? false : true;
            },

            /**
             * Submit login form.
             */
            submit() {
                const data = {
                    login_id: this.email,
                    password: this.password,
                }

                http.post('/login', data).then((user) => {
                    // todo: write a plugin to handle authenticated user
                    window.user = user
                    window.location.href = '/'
                }).catch((response) => {
                    this.errors = response.errors
                })
            },
        }
    }
</script>
