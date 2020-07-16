<?php
    session_start();

    include_once('includes/database.php');
    include_once('includes/functions.php');

    head('STORE');
    include_once('nav.php');
?>
<style>
    #app{
        padding:3rem;
        margin-top:3rem;
    }
</style>
<div id="app">
    <template>
        <div class="produsts">
            <div class="product" v-for="product in produsts" :key="product.id">
                {{product.title}}
            </div>
        </div>
    </template>
</div>

<?php
    foot();
?>