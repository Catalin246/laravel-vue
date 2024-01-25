<template>
    <div class="bg-blue-500 p-4">
        <router-link class="p-2" to="/">Home</router-link>
        <router-link class="p-2" to="/about">About</router-link>
    </div>

    <router-view></router-view>
</template>

<script>

export default {
    name: 'App',
    components: {
    }
}
</script>
