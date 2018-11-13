<template>
    <div v-if="questions">
        <div v-for="(question, index) in questions" v-if="indexQuestion === index">
            <div class="container-fluid survey">
                <survey-item
                        v-if="step === 1 || step === 5"
                        :key="`${index}1`"
                        :item="question.material"
                        :question="question.questions.taste"
                        :step="step"
                        type="range"
                        survey="material"
                        :check-reset.sync="checkReset"
                        @finish="finishStep"
                        @reset="reset"
                >
                </survey-item>

                <survey-item v-if="step === 2 || step === 6"
                        :key="`${index}2`"
                        :item="question.material"
                        :question="question.questions.weight"
                        :step="step"
                        type="range"
                        survey="material"
                        @finish="finishStep"
                        @skip="skipStep"
                >
                </survey-item>

                <survey-item v-if="step === 3 || step === 7"
                        :key="`${index}3`"
                        :item="question.material"
                        :question="question.questions.expression"
                        :step="step"
                        type="boolean"
                        survey="material"
                        @finish="finishStep"
                        @skip="skipStep"
                >
                </survey-item>

                <color-survey-item v-if="step === 4 || step === 8"
                         :key="`${index}4`"
                         :step="step"
                         :item="question.material"
                         :question="question.questions.color"
                         type="color"
                         survey="material"
                         @finish="finishStep"
                         @skip="skipStep"
                         @end="endStep"
                >
                </color-survey-item>
            </div>
            <div>
                <b-modal v-model="show"
                         title="エラーメッセージ">
                    <b-container fluid>
                        <h1>APIを取得できません</h1>
                    </b-container>
                    <div slot="modal-footer" class="w-100">
                        <b-btn size="sm" class="float-right" variant="primary" @click="show=false">
                            Close
                        </b-btn>
                    </div>
                </b-modal>
            </div>
        </div>
    </div>
</template>

<script>
    import http from 'infrastructures/http'
    import { EventBus } from 'models/event-bus'

    export default {
        name: 'material-survey',
        data() {
            return {
                questions: null,
                checkReset: false,
                errors: {},
                show: false,
                step: 1,
                indexQuestion: 0,
                data: [{}, {}],
                dataSurvey: {},
                dataExpression: {},
                alphaColor: 0,
            }
        },
        created(){
            this.getAlphaColorSetting();
            this.getMaterialQuestions();
        },
        methods: {
            /**
             * Reload component
             */
            reset() {
                this.checkReset = true;
                this.getMaterialQuestions();
            },

            skipStep() {
                this.step += 1;
                if (this.step === 5) {
                    this.indexQuestion = 1;
                }

                if (this.step === 8) {
                    this.finishStep();
                }
            },

            endStep() {
                window.location.href = '/';
            },

            finishStep(val) {
                switch(this.step) {
                    case 1:
                    case 5:
                        this.data[this.indexQuestion]['tastes'] = val;
                        break;
                    case 4:
                    case 8:
                        this.data[this.indexQuestion]['colors'] = val.map(item => item.hexString);
                        if (this.data[this.indexQuestion]['colors'].length > 0) {
                            this.data[this.indexQuestion]['colors'].unshift('(alpha: ' + this.alphaColor + ')');
                        }
                        break;
                    case 2:
                    case 6:
                        this.data[this.indexQuestion]['weight'] = val[1];
                        break;
                    case 3:
                    case 7:
                        this.data[this.indexQuestion]['expressions'] = val;
                        break;
                }

                this.dataSurvey['sets'] = this.data;
                this.dataExpression = this.data.map(item => item['expressions'] ? item['expressions'] : null);

                if (this.step === 8) {
                    http.post('/api/material-surveys', this.dataSurvey).then((response) => {
                    }).catch((response) => {
                        this.errors = response.errors;
                    });

                    http.post('/api/expression', this.dataExpression).then((response) => {
                    }).catch((response) => {
                        this.errors = response.errors;
                    });

                    location.reload();
                }

                this.step += 1;
                if (this.step === 5) {
                    this.indexQuestion = 1;
                }
            },

            getMaterialQuestions() {
                http.get('/api/material-surveys').then((response) => {
                    this.questions = response.data;
                    this.questions.forEach((item, index) => {
                        this.questions[index].questions.weight.options = [
                            {id: 1, name: this.$t('label_home.atmosphere')},
                        ];

                        this.data[index]['material_id'] = item.material.id;
                    })
                }).catch((response) => {
                    if (response) {
                        this.errors = response.errors;
                        this.show = true;
                    }
                })
            },

            /**
             * Get alpha value setting for color gradient
             */
            getAlphaColorSetting() {
                http.get('/get-alpha-color-setting').then((response) => {
                    this.alphaColor = response;
                    if (response < 0) {
                        this.alphaColor = 0;
                    }
                    if (response > 100) {
                        this.alphaColor = 100;
                    }
                }).catch((response) => {
                    this.errors = response;
                })
            },
        },
        mounted() {
            EventBus.$on('language-changed', changeLanguage => {
                if (changeLanguage) {
                    http.get('/api/material-surveys-session').then((response) => {
                        this.questions = response.data;
                        this.questions.forEach((item, index) => {
                            this.questions[index].questions.weight.options = [
                                {id: 1, name: this.$t('label_home.atmosphere')},
                            ];

                            this.data[index]['material_id'] = item.material.id;
                        })
                    }).catch((response) => {
                        if (response) {
                            this.errors = response.errors;
                            this.show = true;
                        }
                    })
                }
            });
        }
    }
</script>