<template>
    <div>
        <main-banner :type="$t('label_home.material_mode')"></main-banner>
        <material-survey></material-survey>
    </div>
</template>

<script>
    export default {
        name: 'material-survey-page',
    }
</script>