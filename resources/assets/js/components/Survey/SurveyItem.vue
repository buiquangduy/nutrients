<template>
    <div>
        <ol class="breadcrumb breadcrumb-survey">
            <li class="breadcrumb-item"><a href="/">{{ $t("label_home.home") }}</a>＞</li>
            <li class="breadcrumb-item">
                <a href="#" v-if="survey === 'material'">{{ $t("label_home.raw_material") }}</a>
                <a href="#" v-if="survey === 'recipe'">{{ $t("label_home.raw_recipe") }}</a>
                ＞
            </li>
            <li class="breadcrumb-item"><a href="#" class="item-last">{{ $t("label_home.raw_answer") }}({{ step }}/{{ stepTotal }})</a></li>
            <button v-if="question.general.is_required" class="btn btn-reset text-right" @click="reset"><img src="/images/rolling.png">{{ $t("label_home.reset") }}</button>
            <button v-if="!question.general.is_required" class="btn btn-reset text-right" @click="skip">{{ $t("label_home.skip") }}</button>
        </ol>

        <div class="row">
            <div class="survey-description">
                <p v-if="survey === 'material'">{{ $t("label_home.material_name") }}：{{ item.name }}</p>
                <p v-if="survey === 'recipe'">{{ $t("label_home.recipe_name") }}：{{ item.name }}</p>
                <p>{{ question.general.question_1 }}</p>
                <p>{{ question.general.question_2 }}</p>
            </div>
        </div>

        <div v-if="type === 'range'" class="row material-survey text-center" v-for="(option, index) in question.options" :class="`${ index + 1 == question.options.length ? 'material-last-survey' : ''}`">
            <div class="col-xs-12 item-survey">
                <div class="title">{{ option.name }}</div>
                <label v-for="level in levels" class="container-radio">
                    <input type="radio" :value="level" v-model="answers[option.id]" @change="isEligibleNextPage">
                    <span class="checkmark">{{ level }}</span>
                    <span class="text-top-left" v-if="level === question.general.lowest_level">{{ question.general.lowest_level_label }}</span>
                    <span class="text-top-right" v-if="level === question.general.highest_level">{{ question.general.highest_level_label }}</span>
                </label>
                <span class="circle"><img src="/images/check.png" v-if="answers[option.id] !== null"></span>
            </div>
        </div>

        <div v-if="type === 'boolean'" class="row material-survey expression text-center" v-for="(option, index) in question.options" :class="`${ index + 1 == question.options.length ? 'material-last-survey' : ''}`">
            <div class="title-expression col-12">{{ option.name }}</div>
            <div class="col-12 item-expression-survey">
                <label v-for="level in levels" class="container-radio radio-expression">
                    <input type="radio" :value="level" v-model="answers[option.id]" @change="isEligibleNextPage">
                    <span class="checkmark-expression" v-if="level === question.general.lowest_level">{{ question.general.lowest_level_label }}</span>
                    <span class="checkmark-expression" v-if="level === question.general.highest_level">{{ question.general.highest_level_label }}</span>
                </label>
                <span class="circle"><img src="/images/check.png" v-if="answers[option.id] !== null"></span>
            </div>
        </div>

        <div v-if="type === 'boolean-category'" class="row material-survey expression text-center" v-for="(option, index) in question.options">
            <div class="col-12 item-category-survey material-survey" :class="`${ index + 1 == question.options.length ? 'material-last-survey' : ''}`">
                <div class="title">{{ option.name }}</div>
                <label v-for="level in levels" class="container-radio radio-category">
                    <input type="radio" :value="level" v-model="answers[option.id]" @change="isEligibleNextPage">
                    <span class="checkmark-category" v-if="level === question.general.lowest_level">{{ question.general.lowest_level_label }}</span>
                    <span class="checkmark-category" v-if="level === question.general.highest_level">{{ question.general.highest_level_label }}</span>
                </label>
                <span class="circle"><img src="/images/check.png" v-if="answers[option.id] !== null"></span>
            </div>
        </div>

        <div v-if="type === 'method'" class="row material-survey recipe-method text-center">
            <div class="item-category-survey col-6" :class="`${ index % 2 == 0 ? 'item-method-left' : 'item-method-right'}`" v-for="(option, index) in question.options">
                <label class="container-radio">
                    <input type="radio" v-model="!answers[option.id]" @click="isAnswer(option.id)">
                    <span class="checkmark-category" :id="`answer_${option.id}`">{{ option.name }}</span>
                </label>
            </div>
            <div class="col-6">
            </div>
            <div class="col-12 text-center">
                <label class="container-no-answer">
                    <input type="radio" value="0" @click="resetWhenNotApplicable" ref="not_applicable">
                    <span class="checkmark-category no-answer">{{ $t("label_recipe.not_applicable") }}</span>
                </label>
            </div>
            <div class="col-12 text-center">
                <button :disabled="disabled" class="btn btn-default btn-next" @click="finish">{{ $t("label_recipe.next_button") }}</button>
            </div>
        </div>

        <div v-if="type === 'country'" class="row material-survey recipe-method text-center">
            <div class="item-category-survey col-6" :class="`${ index % 2 == 0 ? 'item-method-left' : 'item-method-right'}`" v-for="(option, index) in question.options">
                <label class="container-radio">
                    <input type="radio" v-model="!answers[option.id]" @click="isAnswer(option.id)">
                    <span class="checkmark-category" :id="`answer_${option.id}`">{{ option.name }}</span>
                </label>
            </div>
            <div class="col-6">
            </div>
            <div class="col-12 text-center">
                <label class="container-no-answer">
                    <input type="radio" value="0" @click="resetWhenNotApplicable" ref="not_applicable">
                    <span class="checkmark-category no-answer">{{ $t("label_recipe.not_applicable") }}</span>
                </label>
            </div>
            <div class="col-12 text-center">
                <button :disabled="disabled" class="btn btn-default btn-next" @click="continueOtherRecipe">{{ $t("label_recipe.continuation_button") }}</button>
            </div>
            <div class="col-12 text-center">
                <button :disabled="disabled" class="btn btn-default btn-next" @click="end">{{ $t("label_recipe.end_button") }}</button>
            </div>
        </div>

        <div class="row" v-if="!(survey === 'recipe' && (step === 6 || step === 7))">
            <div class="pagination">
                <p v-if="!question.general.is_required">{{ $t("label_home.required_num") }}: &nbsp;</p>
                <p v-else>{{ $t("label_home.number_answer") }}: &nbsp;</p>
                <span class="answered-count">{{ answeredCount }}</span>/<span>{{ question.options.length }}</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'survey-item',
        props: [
            'item',
            'question',
            'checkReset',
            'type',
            'step',
            'survey'
        ],
        data() {
            let answers = {};
            let levels = [];

            this.question.options.forEach((option) => {
                answers[option.id] = (this.type == 'method' || this.type == 'country') ? false : null;
            });

            for (let i = this.question.general.lowest_level; i <= this.question.general.highest_level; i++) {
                levels.push(i);
            }

            return {
                disabled: true,
                levels,
                answers,
            }
        },
        computed: {
            answeredCount() {
                return Object.keys(this.answers).filter(key => this.answers[key] !== null).length;
            },
            stepTotal() {
                return (this.survey === 'recipe') ? 7 : 8;
            }
        },
        watch: {
            checkReset: function (newValue, oldValue) {
                if (newValue) {
                    this.question.options.forEach((option) => {
                        this.answers[option.id] = null;
                    });

                    this.$emit('update:checkReset', oldValue);
                }
            }
        },
        methods: {
            isEligibleNextPage() {
                if (this.answeredCount == this.question.options.length) {
                    this.$emit('finish', this.answers);
                }
            },
            reset() {
                this.disabled = false;
                this.$emit('reset');
            },
            resetWhenNotApplicable() {
                this.disabled = false;
                Object.entries(this.answers).forEach(([key, value]) => {
                    if(value) {
                        this.answers[key] = false;
                        document.getElementById("answer_" + key).style.backgroundColor = "";
                    }
                });
                this.$forceUpdate();
            },
            skip() {
                this.$emit('skip');
            },
            finish() {
                this.$emit('finish', this.answers);
            },
            end() {
                this.$emit('finish', this.answers);
                this.$emit('end');
            },
            continueOtherRecipe() {
                this.$emit('finish', this.answers);
            },
            isAnswer(elm) {
                this.answers[elm] = !this.answers[elm];
                if (this.answers[elm]) {
                    document.getElementById("answer_" + elm).style.backgroundColor = "#00b2eb";
                } else {
                    document.getElementById("answer_" + elm).style.backgroundColor = "";
                }

                let answer = Object.entries(this.answers);
                let options = [];
                answer.forEach((item) => {
                    options.push(item[1]);
                });

                this.showNotApplicable();

                if (options.indexOf(true) === -1) {
                    this.disabled = true;
                }

                this.$forceUpdate();
            },
            showNotApplicable() {
                this.disabled = false;
                this.$refs.not_applicable.checked = false;
            }
        }
    }
</script>