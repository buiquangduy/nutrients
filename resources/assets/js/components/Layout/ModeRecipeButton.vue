<template>
    <div class="mode container-fluid">
        <div class="row">
            <p class="text-mode text-center col-12">{{ $t("label_home.recipe_mode") }}</p>
            <div class="col-11 text-center img-mode img-recipe">
                <router-link :to="{ name: 'recipe-survey'}">
                    <img src="/images/recipe.jpg" alt="recipe" class="img-fluid"/>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'mode-recipe-button',
    }
</script>
