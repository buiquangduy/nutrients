<template>
    <div>
        <main-banner></main-banner>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ $t("label_home.home") }}</a></li>
        </ol>

        <!--<news></news>--> <!-- don't use -->
        <div class="container-fluid data-registration">
            <p>{{ $t("label_home.data_regist") }}</p>
        </div>

        <mode-material-button></mode-material-button>
        <mode-recipe-button></mode-recipe-button>
    </div>
</template>

<script>
    export default {
        name: 'home-page',
    }
</script>
