<template>
    <div class="mode container-fluid">
        <div class="row">
            <p class="text-mode text-center col-12">{{ $t("label_home.material_mode") }}</p>
            <div class="col-11 text-center img-mode">
                <router-link :to="{ name: 'material-survey'}">
                    <img src="/images/material.jpg" alt="recipe" class="img-fluid"/>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'mode-material-button',
    }
</script>
