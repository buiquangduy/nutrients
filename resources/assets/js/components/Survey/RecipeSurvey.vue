<template>
    <div v-if="question">
        <div class="container-fluid survey" v-if="question">
            <survey-item
                    v-if="step === 1"
                    :key="1"
                    :item="question.recipe"
                    :question="question.questions.taste"
                    :step="step"
                    type="range"
                    survey="recipe"
                    :check-reset.sync="checkReset"
                    @finish="finishStep"
                    @reset="reset"
            >
            </survey-item>

            <survey-item v-if="step === 2"
                    :key="2"
                    :item="question.recipe"
                    :question="question.questions.weight"
                    :step="step"
                    type="range"
                    survey="recipe"
                    @finish="finishStep"
                    @skip="skipStep"
            >
            </survey-item>

            <survey-item v-if="step === 3"
                    :key="3"
                    :item="question.recipe"
                    :question="question.questions.expression"
                    :step="step"
                    type="boolean"
                    survey="recipe"
                    @finish="finishStep"
                    @skip="skipStep"
            >
            </survey-item>

            <color-survey-item v-if="step === 4"
                    :key="4"
                    :step="step"
                    :item="question.recipe"
                    :question="question.questions.color"
                    type="color"
                    survey="recipe"
                    @finish="finishStep"
                    @skip="skipStep"
            >
            </color-survey-item>

            <survey-item v-if="step === 5"
                     :key="5"
                     :item="question.recipe"
                     :question="question.questions.category"
                     :step="step"
                     type="boolean-category"
                     survey="recipe"
                     @finish="finishStep"
                     @skip="skipStep"
            >
            </survey-item>

            <survey-item v-if="step === 6"
                    :key="6"
                    :item="question.recipe"
                    :question="question.questions.method"
                    :step="step"
                    type="method"
                    survey="recipe"
                    :check-reset.sync="checkReset"
                    @reset="reset"
                    @finish="finishStep"
                    @skip="skipStep"
            >
            </survey-item>

            <survey-item v-if="step === 7"
                    :key="7"
                    :item="question.recipe"
                    :question="question.questions.country"
                    :step="step"
                    type="country"
                    survey="recipe"
                    :check-reset.sync="checkReset"
                    @end="endStep"
                    @reset="reset"
                    @skip="skipStep"
                    @finish="finishStep"
            >
            </survey-item>
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
</template>

<script>
    import http from 'infrastructures/http'
    import { EventBus } from 'models/event-bus'

    export default {
        name: 'recipe-survey',
        data() {
            return {
                question: null,
                checkReset: false,
                errors: {},
                show: false,
                step: 1,
                dataSurvey: {},
                dataExpression: [],
                alphaColor: 0,
            }
        },
        created(){
            this.getAlphaColorSetting();
            this.getRecipeQuestions();
        },
        methods: {
            /**
             * Reload component
             */
            reset() {
                this.checkReset = true;
                this.getRecipeQuestions();
            },
            skipStep() {
                if (this.step === 7) {
                    this.finishStep();
                }

                this.step += 1;
            },
            finishStep(val) {
                switch(this.step) {
                    case 1:
                        this.dataSurvey['tastes'] = JSON.stringify(val);
                        break;
                    case 2:
                        this.dataSurvey['weight'] = val[1];
                        break;
                    case 3:
                        this.dataSurvey['expressions'] = JSON.stringify(val);
                        this.dataExpression = val;
                        break;
                    case 4:
                        let colorList = val.map(item => item.hexString);
                        colorList.unshift('(alpha: ' + this.alphaColor + ')');
                        this.dataSurvey['colors'] = JSON.stringify(colorList);
                        break;
                    case 5:
                        this.dataSurvey['categories'] = JSON.stringify(val);
                        break;
                    case 6:
                        this.dataSurvey['methods'] = JSON.stringify(val);
                        break;
                    case 7:
                        this.dataSurvey['countries'] = JSON.stringify(val);
                        break;
                }

                if (this.step === 7) {
                    http.post('/api/recipe-surveys', this.dataSurvey).then((response) => {
                    }).catch((response) => {
                        this.errors = response.errors;
                    });

                    if (this.dataExpression.length !== 0) {
                        http.post('/api/expression-recipe', this.dataExpression).then((response) => {
                        }).catch((response) => {
                            this.errors = response.errors;
                        });
                    }

                    location.reload();
                }

                this.step += 1;
            },

            endStep() {
                window.location.href = '/';
            },

            getRecipeQuestions() {
                http.get('/api/recipe-surveys').then((response) => {
                    this.question = response.data;
                    this.question.questions.weight.options = [
                        {id: 1, name: this.$t('label_home.atmosphere')},
                    ];

                    this.dataSurvey['recipe_id'] = this.question.recipe.id;
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
                    http.get('/api/recipe-surveys-session').then((response) => {
                        this.question = response.data;
                    this.question.questions.weight.options = [
                        {id: 1, name: this.$t('label_home.atmosphere')},
                    ];

                    this.dataSurvey['recipe_id'] = this.question.recipe.id;
                    }).catch((response) => {
                        if (response) {
                            this.errors = response.errors;
                            this.show = true;
                        }
                    });
                }
            });
        }
    }
</script>