<template>
    <div id="navigation">
        <Navigation />
    </div>
    <div>
        This is the App Layout
    </div>
</template>

<script>
import Navigation from '../components/Navigation.vue';

    export default {
        name: 'AppLayout',
        components: {
            Navigation,
        }, 
    }
</script>

<style scoped>

</style>