<template>
    <div class="color-list-component">
        <div class="color-list" v-for="(color, position) in colorList">
            <div class="position">
                <span>{{ position+1 }}</span>
            </div>
            <div class="color-bar" :style="{background: color.gradientColor}"></div>
            <div class="btn-delete-circle" @click="deleteColor(position)">
                <span>&#10006;</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "color-selected-list",
        props: ['colorList'],
        methods: {
            /**
             * Delete color when user click delete button
             *
             * @param {int} position
             */
            deleteColor(position) {
                this.$emit('delete', position);
            },
        }
    }
</script>
