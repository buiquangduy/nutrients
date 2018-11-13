<template>
    <div class="wrapper-picker">
        <div id="color-picker">
            <span class="position-selected"
                  v-if="positionSelectedList.length > 0"
                  v-for="(coordinates, position) in positionSelectedList"
                  :style="coordinates">
                {{ position+1 }}
            </span>
        </div>
    </div>
</template>

<script>
    import iro from "@jaames/iro"
    let colorPicker;

    export default {
        name: "wheel-color-picker",
        props: ['config', 'positionSelectedList'],
        mounted(){
            this.createWheelColorPicker()
        },
        methods: {
            /**
             * Create wheel color picker and emit color to parent
             */
            createWheelColorPicker(){
                colorPicker = new iro.ColorPicker("#color-picker", this.config);
                colorPicker.ui.splice(1, 1);
                colorPicker.on("input:end", (color) => {
                    this.$emit('clickWheel', color);
                });
            },
        },
    }
</script>
