<template>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ $t("label_home.home") }}</a>＞</li>
            <li class="breadcrumb-item">
                <a href="#" v-if="survey === 'material'">{{ $t("label_home.raw_material") }}</a>
                <a href="#" v-if="survey === 'recipe'">{{ $t("label_home.raw_recipe") }}</a>
                ＞
            </li>
            <li class="breadcrumb-item"><a href="#" class="item-last">{{ $t("label_home.raw_answer") }}({{step}}/8)</a></li>
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

        <div class="color-page">
            <wheel-color-picker :positionSelectedList="positionSelectedList"
                @clickWheel="addItemToColorList"
                :config="iroConfig"
                :colorCount="colorCount">
            </wheel-color-picker>

            <color-selected-list :colorList="colorList" @delete="deleteColor"></color-selected-list>

            <!-- Step 4 -->
            <div class="color-list" v-if="step === 4">
                <div class="position clear"></div>
                <button type="submit"
                        class="btn btn-default color-bar btn-next"
                        @click="finish">
                    {{ $t('label_recipe.next_button') }}
                </button>
                <div class="btn-delete-circle clear"></div>
            </div>

            <!-- Step 8 -->
            <div class="color-list" v-if="step === 8">
                <div class="position clear"></div>
                <button type="submit"
                        class="btn btn-default color-bar btn-next"
                        @click="finish">
                    {{ $t('label_recipe.continuation_button') }}
                </button>
                <div class="btn-delete-circle clear"></div>
            </div>
            <div class="color-list" v-if="step === 8">
                <div class="position clear"></div>
                <button type="submit"
                        class="btn btn-default color-bar btn-next"
                        @click="endStep">
                    {{ $t('label_recipe.end_button') }}
                </button>
                <div class="btn-delete-circle clear"></div>
            </div>
        </div>
    </div>
</template>

<script>
    import iro from "@jaames/iro"
    import http from 'infrastructures/http'
    import WheelColorPicker from "./WheelColorPicker"
    import ColorSelectedList from "./ColorSelectedList"
    import TinyColor from 'tinycolor2'

    export default {
        name: 'color-page',
        props: ['item', 'question', 'survey', 'step'],
        data() {
            return {
                colorList: [],
                positionSelectedList: [],
                alpha: 0,
                iroConfig: {
                    width: 0,
                    height: 0,
                    color: '#ffffff',
                    anticlockwise: true,
                    wheelLightness: false,
                },

            }
        },
        components: {
            'wheel-color-picker': WheelColorPicker,
            'color-selected-list': ColorSelectedList,
        },
        computed: {
            colorCount() {
                return this.colorList.length;
            }
        },
        created() {
            this.getAlphaColorSetting();
            let size = this.setScreenSize();
            this.iroConfig.width = size.width;
            this.iroConfig.height = size.height;
        },
        methods: {
            /**
             * Add color to color list
             *
             * @param {object} color
             */
            addItemToColorList(color) {
                if (this.colorCount < 10) {
                    let g = document.getElementsByClassName('iro__marker');
                    this.colorList.push({'hexString': color.hexString, 'gradientColor': this.setGradientColor(color.hexString)});

                    let coordinates = {};
                    if (typeof g[0].getTransformToElement === 'undefined') {
                        coordinates = g[0].transform.animVal[0].matrix;
                    } else {
                        coordinates = g[0].getTransformToElement();
                    }
                    this.createPositionPicker(this.colorCount, coordinates);
                }
            },

            /**
             * Get alpha value setting for color gradient
             */
            getAlphaColorSetting() {
                http.get('/get-alpha-color-setting').then((response) => {
                    this.alpha = response;
                    if (response < 0) {
                        this.alpha = 0;
                    }
                    if (response > 100) {
                        this.alpha = 100;
                    }
                }).catch((response) => {
                    this.errors = response;
                })
            },

            /**
             * Make style linear-gradient from hex color
             *
             * @param {string} colorHex
             */
            setGradientColor(colorHex) {
                let lighten = TinyColor(colorHex).lighten(this.alpha).toString();
                let darken = TinyColor(colorHex).darken(this.alpha).toString();

                return 'linear-gradient(to right, ' + darken + ', ' + colorHex + ', ' + lighten+')';
            },

            /**
             * Show position selected on wheel color
             *
             * @param {int} positionPicker
             * @param {object} coordinates
             */
            createPositionPicker(positionPicker, coordinates) {
                this.positionSelectedList.push({'top': coordinates.f + 'px', 'left': coordinates.e + 'px'});
            },

            /**
             * Set screen size with window innerWidth
             *
             * @return {object}
             */
            setScreenSize() {
                let width = 0;
                let height = 0;
                let currentWidth =  window.innerWidth;

                if (currentWidth <= 480) {
                    width = height = currentWidth*75/100;
                }

                if (currentWidth > 480 && currentWidth <= 640) {
                    width = height = currentWidth*70/100;
                }

                if (currentWidth > 640 && currentWidth <= 768) {
                    width = height = currentWidth*65/100;
                }

                if (currentWidth > 768 && currentWidth <= 960) {
                    width = height = currentWidth * 55/100;
                }

                if (currentWidth > 960 && currentWidth <= 1280) {
                    width = height = currentWidth * 45/100;
                }

                if (currentWidth > 1280) {
                    width = height = currentWidth * 30/100;
                }

                return {width, height};
            },

            /**
             * Delete color and reset number of color when click button
             *
             * @param {int} position
             */
            deleteColor(position) {
                this.colorList.splice(position, 1);
                this.positionSelectedList.splice(position, 1);
            },

            /**
             * Check for allow next step
             */
            isEligibleNextPage() {
                if (this.question.colorList.length > 0) {
                    this.$emit('finish');
                }
            },

            /**
             * Reset all selected results
             */
            reset() {
                this.$emit('reset');
            },

            /**
             * Skip selected results
             */
            skip() {
                if (this.step == 8) {
                    this.$emit('finish', this.colorList);
                    this.$emit('end');
                }
                this.$emit('skip');
            },

            /**
             * Finished a survey and next step
             */
            finish() {
                if (this.colorList.length > 0) {
                    this.$emit('finish', this.colorList);
                }
            },

            /**
             * End all step and save to database
             */
            endStep() {
                if (this.colorList.length > 0) {
                    this.$emit('finish', this.colorList);
                    this.$emit('end');
                }
            }
        }
    }
</script>
