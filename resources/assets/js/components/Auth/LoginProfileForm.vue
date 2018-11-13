<template>
    <div>
        <form method="post">
            <!-- Login information -->
            <div class="login-info">
                <div class="span-blue-darker mb-md-2 mb-sm-2 mb-2">
                    <span>- {{ $t('label_register.login_info') }} -</span>
                </div>
                <div :class="`form-group ${errors.password ? 'has-error' : ''}`">
                    <label for="password">{{ $t('label_register.password') }}</label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           id="password"
                           placeholder="∗∗∗∗∗∗∗∗∗∗∗∗∗"
                           v-model="password"
                           @focusout="isPasswordValid(false)"
                           @focus="removeError(['password'])">
                    <span class="text-danger" v-if="visibilityErrorPasswordInvalid">
                        {{ errors.invalidPasswordMessage }}
                    </span>
                    <span class="text-danger" v-if="errors.password">
                        {{ errors.password[0] }}
                    </span>
                </div>
                <div :class="`form-group ${errors.retypePassword ? 'has-error' : ''}`">
                    <label for="retype-password">{{ $t('label_register.retype_password') }}</label>
                    <input type="password"
                           name="retype_password"
                           class="form-control"
                           id="retype-password"
                           placeholder="∗∗∗∗∗∗∗∗∗∗∗∗∗"
                           v-model="retypePassword"
                           @focusout="isPasswordValid(true)"
                           @focus="removeError(['retypePassword'])">
                    <span class="text-danger" v-if="visibilityErrorPasswordRetype">
                        {{ errors.retypePasswordMessage }}
                    </span>
                    <span class="text-danger" v-if="errors.retypePassword">
                        {{ errors.retypePassword[0] }}
                    </span>
                </div>
            </div>
            <!-- Regist footer -->
            <div class="mt-md-4 mt-sm-4 mt-4">
                <div class="form-row">
                    <div class="col-xl-12 form-center">
                        <button type="submit"
                                class="btn btn-default btn-login-register"
                                @click.prevent="submit">
                            {{ $t('label_register.submit') }}
                        </button>
                    </div>
                    <div class="form-center">
                        <p class="">
                            <router-link :to="{ name: 'home'}">
                                <span><<</span>{{ $t('label_register.back') }}
                            </router-link>
                        </p>
                    </div>
                </div>
            </div>
        </form>

        <div class="modalSuccess">
            <b-modal
                    v-model="showSuccessModal"
                    centered
                    body-text-variant="center"
                    ok-only
                    hide-header
                    footer-class="successModalFooter">
                <p class="messageSuccess">{{ $t('label_register.message_success') }}</p>
            </b-modal>
        </div>
    </div>
</template>

<script>
    import http from 'infrastructures/http'

    export default {
        name: 'login-profile-form',
        props: ['visibilityErrorPasswordInvalid', 'visibilityErrorPasswordRetype', 'loginInformationErrors'],
        data() {
            return{
                password: '',
                retypePassword:'',
                errors: this.loginInformationErrors,
                showSuccessModal: false,
            }
        },
        methods: {
            /**
             * Check password valid
             *
             * @param {Boolean} retypePasswordFocus
             */
            isPasswordValid(retypePasswordFocus) {
                this.$emit('passwordFocusOut', this.password, this.retypePassword, retypePasswordFocus);
            },

            /**
             * Change login information
             */
            submit() {
                const data = {
                    id: user.id,
                    password: this.password,
                    retypePassword: this.retypePassword
                };

                http.post('/change-password', data).then(() => {
                    this.errors = {};
                    this.password = this.retypePassword = '';
                    this.showSuccessModal = true;
                }).catch((response) => {
                    this.errors = response.errors ? response.errors : {};
                })
            },

            /**
             * Remove errors when focus
             *
             * @param {array} elm
             */
            removeError(elm) {
                elm.map((item) => {
                    delete this.errors[item];
                });
                this.$forceUpdate();
            }
        },
    }
</script>
