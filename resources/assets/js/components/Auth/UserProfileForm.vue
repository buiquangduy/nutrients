<template>
    <div class="register-form">
        <form method="post">
            <div class="mb-sm-3">
                <div class="span-blue-darker mb-md-2 mb-sm-2 mb-2">
                    <span>- {{ $t('label_register.basic_info') }} -</span>
                </div>
                <div class="form-group mb-0">
                    <label for="basic-info">{{ $t('label_register.name') }}</label>
                    <div class="form-row">
                        <div :class="`form-group col-md-6 col-sm-6 col-6 ${errors.lastname_kanji ? 'has-error' : ''}`" v-if="showInputKanji">
                            <input type="text" v-model="lastNameKanji" class="form-control" id="basic-info" :placeholder="$t('label_register.lastname_kanji')" @focus="removeError(['lastname_kanji'])">
                            <span class="text-danger" v-if="errors.lastname_kanji" v-html="errors.lastname_kanji[0]"></span>
                        </div>
                        <div :class="`form-group col-md-6 col-sm-6 col-6 ${errors.firstname_kanji ? 'has-error' : ''}`" v-if="showInputKanji">
                            <input type="text" name="firstname_kanji" v-model="firstNameKanji" class="form-control" :placeholder="$t('label_register.firstname_kanji')" @focus="removeError(['firstname_kanji'])">
                            <span class="text-danger" v-if="errors.firstname_kanji" v-html="errors.firstname_kanji[0]"></span>
                        </div>
                        <div :class="`form-group col-md-6 col-sm-6 col-6 ${errors.lastname_katakana ? 'has-error' : ''}`">
                            <input type="text" name="lastname_katakana" v-model="lastNameKatakana" class="form-control" :placeholder="$t('label_register.lastname_katakana')" @focus="removeError(['lastname_katakana'])">
                            <span class="text-danger" v-if="errors.lastname_katakana" v-html="errors.lastname_katakana[0]"></span>
                        </div>
                        <div :class="`form-group col-md-6 col-sm-6 col-6 ${errors.firstname_katakana ? 'has-error' : ''}`">
                            <input type="text" name="firstname_katakana" v-model="firstNameKatakana" class="form-control" :placeholder="$t('label_register.firstname_katakana')" @focus="removeError(['firstname_katakana'])">
                            <span class="text-danger" v-if="errors.firstname_katakana" v-html="errors.firstname_katakana[0]"></span>
                        </div>
                    </div>
                </div>
                <div :class="`form-group ${errors.email ? 'has-error' : ''}`">
                    <label for="email">{{ $t('label_register.email') }}</label>
                    <input type="text" name="email"
                           class="form-control"
                           id="email"
                           placeholder="test@tavenal.com"
                           v-model="email"
                           @focusout="isEmailValid()"
                           @focus="removeError(['email', 'invalidEmailMessage'])">
                    <span class="text-danger" v-if="errors.email">
                        {{ errors.email[0] }}
                    </span>
                    <span class="text-danger" v-if="visibilityErrorEmailInvalid && errors.invalidEmailMessage">
                        {{ errors.invalidEmailMessage }}
                    </span>
                </div>
                <div :class="`form-group ${errors.retypeEmail ? 'has-error' : ''}`">
                    <label for="retype_email">{{ $t('label_register.retype_email') }}</label>
                    <input type="text"
                           name="retype_email"
                           class="form-control"
                           id="retype_email"
                           placeholder="test@tavenal.com"
                           v-model="retypeEmail"
                           @focusout="isMatchedEmail()"
                           @focus="removeError(['retypeEmail', 'retypeEmailMessage'])">
                    <span class="text-danger" v-if="errors.retypeEmail">
                        {{ errors.retypeEmail[0] }}
                    </span>
                    <span class="text-danger" v-if="visibilityErrorEmailRetype && errors.retypeEmailMessage">
                        {{ errors.retypeEmailMessage }}
                    </span>
                </div>
                <div class="form-group mb-0">
                    <label for="dob">{{ $t('label_register.dob') }}</label>
                    <div class="form-row">
                        <div :class="`form-group col-md-4 col-sm-4 col-4 ${errors.yearSelected ? 'has-error' : ''}`">
                            <select name="year" ref="selectOptionYear" id="dob" class="form-control" v-model="yearSelected" @change="getDateInMonth(true)">
                                <option value="" class="default-selected">{{ $t('label_register.year') }}</option>
                                <option v-for="year in years" :value="year">{{ year }}</option>
                            </select>
                            <span class="text-danger" v-if="errors.yearSelected">
                                {{ errors.yearSelected[0] }}
                            </span>
                        </div>
                        <div :class="`form-group col-md-4 col-sm-4 col-4 ${errors.monthSelected ? 'has-error' : ''}`">
                            <select name="month" ref="selectOptionMonth" class="form-control" v-model="monthSelected" @change="getDateInMonth(false)" @focus="removeError(['monthSelected'])">
                                <option value="" class="default-selected">{{ $t('label_register.month') }}</option>
                                <option v-for="month in 12" :value="month">{{ month }}</option>
                            </select>
                            <span class="text-danger" v-if="errors.monthSelected">
                                {{ errors.monthSelected[0] }}
                            </span>
                        </div>
                        <div :class="`form-group col-md-4 col-sm-4 col-4 ${errors.daySelected ? 'has-error' : ''}`">
                            <select name="day" ref="selectOptionDay" class="form-control" v-model="daySelected" @focus="removeError(['daySelected'])">
                                <option value="" class="default-selected">{{ $t('label_register.day') }}</option>
                                <option v-for="day in days" :value="day">{{ day }}</option>
                            </select>
                            <span class="text-danger" v-if="errors.daySelected">
                                {{ errors.daySelected[0] }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div :class="`form-group col-md-12 col-sm-12 col-12 ${errors.sex ? 'has-error' : ''}`">
                        <div>
                            <label for="radio-sex">{{ $t('label_register.sex') }}</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="custom-checkbox-radio">
                                <span class="radio-sex">{{ $t('label_register.male') }}</span>
                                <input type="radio" class="sex" name="sex" id="radio-sex" v-model="sex" value="1" @change="removeError(['sex'])">
                                <span class="radio-checkmark sex"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="custom-checkbox-radio">
                                <span class="radio-sex">{{ $t('label_register.female') }}</span>
                                <input type="radio" class="sex" name="sex" v-model="sex" value="0" @focus="removeError(['sex'])">
                                <span class="radio-checkmark sex"></span>
                            </label>
                        </div>
                        <p class="text-danger" v-if="errors.sex" >
                            {{ errors.sex[0] }}
                        </p>
                    </div>
                </div>
                <div class="form-row">
                    <div :class="`form-group col-md-12 col-sm-12 col-12 ${errors.country_id ? 'has-error' : ''}`">
                        <label for="nationality">{{ $t('label_register.country') }}</label>
                        <select name="nationality"
                                ref="selectOptionCountry"
                                id="nationality"
                                class="form-control"
                                v-model="countrySelected"
                                @change="getProvinces()"
                                @focus="removeError(['country_id'])">
                            <option value="0" class="default-selected">{{ $t('label_register.default_selected') }}</option>
                            <option v-for="country in countries" :value="country.id">
                                {{ country.name }}
                            </option>
                        </select>
                        <span class="text-danger" v-if="errors.country_id">
                            {{ errors.country_id[0] }}
                        </span>
                    </div>
                </div>
                <div class="form-row">
                    <div :class="`form-group col-md-12 col-sm-12 col-12 ${errors.province_id ? 'has-error' : ''}`">
                        <label for="province">{{ $t('label_register.province') }}</label>
                        <select name="province" ref="selectOptionProvince" id="province" class="form-control" v-model="provinceSelected" @focus="removeError(['province_id'])">
                            <option value="0" class="default-selected">{{ $t('label_register.default_selected') }}</option>
                            <option v-for="province in provinces" :value="province.id">
                                {{ province.name }}
                            </option>
                        </select>
                        <span class="text-danger" v-if="errors.province_id">
                            {{ errors.province_id[0] }}
                        </span>
                    </div>
                </div>
            </div>
            <!-- Login information -->
            <div class="login-info" v-if="!isUpdateProfile">
                <div class="span-blue-darker mb-md-2 mb-sm-2 mb-2">
                    <span>- {{ $t('label_register.login_info') }} -</span>
                </div>
                <div :class="`form-group ${errors.name ? 'has-error' : ''}`">
                    <label for="id">{{ $t('label_register.username') }}</label>
                    <input type="text" name="id" v-model="loginId" class="form-control" @focus="removeError(['name'])" id="id" placeholder="tavenal-aivick">
                    <span class="text-danger" v-if="errors.name" v-html="errors.name[0]">
                    </span>
                </div>
                <div :class="`form-group ${errors.password ? 'has-error' : ''}`">
                    <label for="password">{{ $t('label_register.password') }}</label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           id="password"
                           placeholder="∗∗∗∗∗∗∗∗∗∗∗∗∗"
                           v-model="password"
                           autocomplete="off"
                           @focusout="isPasswordValid()" @focus="removeError(['invalidPasswordMessage', 'password'])">
                    <span class="text-danger" v-if="visibilityErrorPasswordInvalid && errors.invalidPasswordMessage">
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
                           autocomplete="off"
                           @focusout="isMatchedPassword()" @focus="removeError(['retypePasswordMessage', 'retypePassword'])">
                    <span class="text-danger" v-if="visibilityErrorPasswordRetype && errors.retypePasswordMessage">
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
                    <div :class="`form-center mb-md-1 mb-sm-1 mb-1 ${ !agree ? 'has-error' : ''}`" v-if="!isUpdateProfile">
                        <label class="custom-checkbox-radio" @change="checkAgree">
                            <span>
                                <a href="https://tavenal.com/nutrient/tos.html" target="_blank">{{ $t('label_register.term') }}</a>{{ $t('label_register.agree_register') }}
                            </span>
                            <input type="checkbox" name="agree" v-model="agree">
                            <span class="checkmark"></span>
                        </label>
                        <p class="text-danger agreeError" v-if="!agree && submitStatus">
                            {{ agreeError }}
                        </p>
                    </div>
                    <div class="col-xl-12 form-center">
                        <button type="submit"
                                class="btn btn-default btn-login-register"
                                @click.prevent="submit">
                            {{ $t('label_register.submit') }}
                        </button>
                    </div>
                    <div class="form-center" v-if="!isUpdateProfile">
                        <p class="back-home">
                            <router-link :to="{ name: 'login'}">
                                <span><<</span>{{ $t('label_register.back') }}
                            </router-link>
                        </p>
                    </div>
                </div>
            </div>
            <!--LoginProfileForm-->
            <div class="login-profile-form" v-if="isUpdateProfile">
                <LoginProfileForm
                    :userLoginId="loginId"
                    @passwordFocusOut="pushDataLoginForm"
                    :childPassword="password"
                    :childRetypePassword="retypePassword"
                    :visibilityErrorPasswordInvalid="visibilityErrorPasswordInvalid"
                    :visibilityErrorPasswordRetype="visibilityErrorPasswordRetype"
                    :loginInformationErrors="errors">
                </LoginProfileForm>
            </div>
            <!-- Update profile success-->
            <div class="modalSuccess">
                <b-modal
                        v-model="showUpdateSuccessModal"
                        centered
                        body-text-variant="center"
                        ok-only
                        hide-header
                        footer-class="successModalFooter">
                    <p class="messageSuccess" v-html="$t('label_register.message_success')"></p>
                </b-modal>
            </div>

            <!-- Register success-->
            <div class="modalSuccess">
                <b-modal
                        v-model="showVerifyMessageModal"
                        centered
                        body-text-variant="center"
                        ok-only
                        hide-header
                        footer-class="successModalFooter">
                    <p class="messageSuccess" v-html="$t('label_register.message_verify_empty')" v-if="verify_failed === 0"></p>
                    <p class="messageSuccess" v-html="$t('label_register.message_verify_failed')" v-if="verify_failed === 1"></p>
                </b-modal>
            </div>
        </form>
    </div>
</template>

<script>
    import http from 'infrastructures/http'
    import randomstring from 'randomstring'
    import router from '@/router'
    import LoginProfileForm from './LoginProfileForm'
    import { EventBus } from 'models/event-bus'

    export default {
        data() {
            return {
                email: '',
                retypeEmail: '',
                password: '',
                retypePassword: '',
                visibilityErrorEmailInvalid: false,
                visibilityErrorPasswordInvalid: false,
                visibilityErrorEmailRetype: false,
                visibilityErrorPasswordRetype: false,
                firstNameKanji: '',
                lastNameKanji: '',
                firstNameKatakana: '',
                lastNameKatakana: '',
                sex: 1,
                loginId: '',
                countries: {},
                provinces: {},
                countrySelected: 0,
                provinceSelected: 0,
                days: 0,
                yearSelected: 1990,
                monthSelected: '',
                daySelected: '',
                agree: false,
                submitStatus: false,
                errors: {},
                showUpdateSuccessModal: false,
                showVerifyMessageModal: false,
                showInputKanji: true,
                verify_failed: null,
                locale: null,
            }
        },
        components: {
            LoginProfileForm,
        },
        created() {
            this.locale = this.$i18n.locale;
            this.getCountries();
            if (this.isUpdateProfile) {
                this.getUserInformation();
            }
        },
        mounted() {
            if (window.verify_failed === 0 || window.verify_failed === 1) {
                this.verify_failed = window.verify_failed;
                this.showVerifyMessageModal = true;
                delete window.verify_failed;
            }
            this.showInputKanji = this.isJapan();

            EventBus.$on('profile-language-changed', localeSelected => {
                this.errors = {};
                if (localeSelected) {
                    this.locale = localeSelected;
                    this.getCountries();
                    this.getProvinces(false);
                }
            });
        },
        updated() {
            this.changeDefaultSelectedColor();
            this.showInputKanji = this.isJapan();
        },
        computed: {
            /**
             * Fill data for year: form 1990 to current year
             *
             * @return {array}
             */
            years() {
                let currentYear = (new Date()).getFullYear();

                return _.range(currentYear, 1899, -1);
            },

            /**
             * Message error when agree box not checked
             *
             * @return {string}
             */
            agreeError() {
                if (!this.agree && this.submitStatus) {
                    return this.$t('label_register.agree_error_message');
                }
            },

            /**
             * Show login information form for register page or profile page
             */
            isUpdateProfile() {
                return router.currentRoute.name === 'profile';
            }
        },
        methods: {
            /**
             * Check agree not checked to show message
             */
            checkAgree() {
                this.submitStatus = true;
            },

            /**
             * Get all country
             */
            getCountries() {
                http.get('/countries/' + this.locale).then((response) => {
                    this.countries = response;
                    if (!this.isUpdateProfile) {
                        this.setDefaultCountrySelected(response);
                    }
                }).catch((response) => {
                    this.errors = response.errors;
                })
            },

            /**
             * Default country selected
             */
            setDefaultCountrySelected(countries) {
                countries.forEach((country) => {
                    if (country.shortname.toLowerCase() === 'jp') {
                        this.countrySelected = country.id;
                        this.getProvinces();
                    }
                });
            },

            /**
             * Get list province by country_id
             *
             * @returns {Array|Object}
             */
            getProvinces(resetProvinceSelected = true) {
                http.get('/provinces/' + this.countrySelected + '/' + this.locale).then((response) => {
                    if (!this.isUpdateProfile || resetProvinceSelected) {
                        this.provinceSelected = 0;
                    }
                    this.provinces = response;
                }).catch((response) => {
                    this.errors = response.errors
                })
            },

            /**
             * Is current email input valid or not?
             *
             * @returns {void}
             */
            isEmailValid() {
                let pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;

                if (pattern.test(this.email)) {
                    this.visibilityErrorEmailInvalid = false;
                } else {
                    this.errors.invalidEmailMessage = this.$t('label_register.invalid_email_message');
                    this.visibilityErrorEmailInvalid = true;
                }
            },

            /**
             * Is matched email retype ?
             *
             * @returns {Boolean}
             */
            isMatchedEmail() {
                if (this.email !== this.retypeEmail) {
                    this.errors.retypeEmailMessage = this.$t('label_register.retype_email_message');
                    this.visibilityErrorEmailRetype = true;
                } else {
                    this.visibilityErrorEmailRetype = false;
                }
            },

            /**
             * Is current password input valid or not?
             *
             * @returns {Boolean}
             */
            isPasswordValid() {
                if (this.password.length < 6) {
                    this.errors.invalidPasswordMessage = this.$t('label_register.invalid_password_message');
                    this.visibilityErrorPasswordInvalid = true;
                } else {
                    this.visibilityErrorPasswordInvalid = false;
                }
            },

            /**
             * Is matched password retype ?
             *
             * @returns {Boolean}
             */
            isMatchedPassword() {
                if (this.password !== this.retypePassword) {
                    this.errors.retypePasswordMessage = this.$t('label_register.retype_password_message');
                    this.visibilityErrorPasswordRetype = true;
                } else {
                    this.visibilityErrorPasswordRetype = false;
                }
            },

            /**
             * Get number of day in the month
             *
             * @param {boolean} resetMonth
             * @param {string|int} selected
             * @returns {int}
             */
            getDateInMonth(resetMonth, selected = '') {
                this.daySelected = selected;
                if (resetMonth) {
                    this.monthSelected = '';
                }
                this.days = this.daysInMonth(this.monthSelected, this.yearSelected);
            },

            /**
             * Return number of day in the month
             *
             * @param {int|string} month
             * @param {int|string} year
             * @returns {int}
             */
            daysInMonth(month, year) {
                return new Date(year, month, 0).getDate();
            },

            /**
             * Check locale is Japan
             */
            isJapan() {
                return this.$i18n.locale === 'ja'
            },

            /**
             * Get user information
             */
            getUserInformation() {
                http.get('/user-information').then((response) => {
                    this.setUserInformation(response);
                }).catch((response) => {
                    this.errors = response.errors
                })
            },

            /**
             * Set user information to form data
             */
            setUserInformation(userInformation) {
                this.firstNameKanji = userInformation.firstname_kanji;
                this.lastNameKanji = userInformation.lastname_kanji;
                this.firstNameKatakana = userInformation.firstname_katakana;
                this.lastNameKatakana = userInformation.lastname_katakana;
                this.email = userInformation.email;
                this.retypeEmail = userInformation.email;
                this.sex = userInformation.sex;
                this.countrySelected = userInformation.country_id;
                this.getProvinces(false);
                this.provinceSelected = userInformation.province_id;
                this.loginId = userInformation.name;
                let userDob = new Date(userInformation.dob);
                this.yearSelected = userDob.getFullYear();
                this.monthSelected = userDob.getMonth() + 1;
                this.getDateInMonth(false, userDob.getDate());
            },

            /**
             * Passing password and retype password to loginProfileForm
             *
             * @param {string} password
             * @param {string} retypePassword
             * @param {bool} retypePasswordFocus
             */
            pushDataLoginForm(password, retypePassword, retypePasswordFocus) {
                this.password = password;
                this.isPasswordValid();
                if (retypePasswordFocus) {
                    this.retypePassword = retypePassword;
                    this.isMatchedPassword();
                }
            },

            /**
             * Update user profile
             */
            updateProfile(data) {
                data.id = user.id;
                http.post('/user-information', data).then(() => {
                    this.showUpdateSuccessModal = true;
                    this.errors = {};
                }).catch((response) => {
                    this.errors = response.errors ? response.errors : {};
                })
            },

            /**
             * User register
             */
            createUser(data) {
                data.url = window.location.origin + '/active-account/' + data.verify_code;
                http.post('/register', data).then(() => {
                    this.clearData();
                    sessionStorage.setItem('register_success', 'show');
                    window.location.href = '/login';
                }).catch((response) => {
                    this.errors = response.errors ? response.errors : {};
                })
            },

            /**
             * Empty form
             */
            clearData() {
                this.email = '';
                this.password = '';
                this.retypeEmail = '';
                this.retypePassword = '';
                this.firstNameKanji = '';
                this.lastNameKanji = '';
                this.firstNameKatakana = '';
                this.lastNameKatakana = '';
                this.sex = 1;
                this.loginId = '';
                this.yearSelected = 1990;
                this.monthSelected = '';
                this.daySelected = '';
                this.getCountries();
                this.agree = false;
                this.submitStatus = false;
            },

            /**
             * Change color for option default (non value)
             */
            changeDefaultSelectedColor() {
                Object.entries(this.$refs).forEach(([key, value]) => {
                    if(value) {
                        if (this.$refs[key].selectedIndex === 0) {
                            this.$refs[key].classList.add('default-selected');
                        }
                        if (this.$refs[key].selectedIndex !== 0) {
                            this.$refs[key].classList.remove('default-selected');
                        }
                    }
                });
            },

            /**
             * Submit register form.
             */
            submit() {
                if (!this.agree && !this.isUpdateProfile) {
                    this.submitStatus = true;

                    return;
                }

                const data = {
                    email: this.email,
                    password: this.password,
                    retypeEmail: this.retypeEmail,
                    retypePassword: this.retypePassword,
                    firstname_kanji: this.isJapan() ? this.firstNameKanji : '姓',
                    lastname_kanji: this.isJapan() ? this.lastNameKanji : '名',
                    firstname_katakana: this.firstNameKatakana,
                    lastname_katakana: this.lastNameKatakana,
                    sex: this.sex,
                    name: this.loginId,
                    country_id: this.countrySelected != "0" ? this.countrySelected : '',
                    province_id: this.provinceSelected != "0" ? this.provinceSelected : '',
                    yearSelected: this.yearSelected,
                    monthSelected: this.monthSelected,
                    daySelected: this.daySelected,
                    dob: this.yearSelected + '-' + this.monthSelected + '-' + this.daySelected,
                    verify_code: randomstring.generate(20),
                    active: 0,
                    locale: this.$i18n.locale,
                };

                if (this.isUpdateProfile) {
                    this.updateProfile(data);
                    window.user = data;
                }
                if (!this.isUpdateProfile) {
                    this.createUser(data);
                }
            },

            /**
             * Remove error after focus input
             *
             * @param elm
             */
            removeError(elm) {
                elm.map((item) => {
                    delete this.errors[item];
                });
                this.$forceUpdate();
            }
        }
    }
</script>
