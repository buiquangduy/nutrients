<template>
    <div>
        <main-banner :type="$t('label_home.recipe_mode')"></main-banner>
        <recipe-survey></recipe-survey>
    </div>
</template>

<script>
    export default {
        name: 'recipe-survey-page',
    }
</script>