<template>
    <div class="navigation-bar grid grid-cols-3 gap-4 items-center p-4 bg-blue-400">
        <div class="text-white logo">
            Logo
        </div>

        <ul class="text-white navigation-list flex gap-4">
            <li v-for="(page, index) in pages" :key="index">{{ page }}</li>
        </ul>

        <div class="text-white icons flex justify-end gap-4">
            <i class="fas fa-search  w-5 h-5 cursor-pointer text-white" @click="handleSearch"></i>

            <i class="fas fa-user  w-5 h-5 cursor-pointer text-white" @click="handleProfile"></i>

            <i class="fas fa-shopping-basket  w-5 h-5 cursor-pointer text-white" @click="handleBasket"></i>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            pages: ["Home", "Menu", "Shop", "About","Contact"],
        };
    },
    methods: {
       // The methods which power the navigation
    },
};
</script>

<style scoped>

.icon {
    font-size: 16px;
}
/* Add your styling for the navigation bar here */
/* .navigation-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #f0f0f0;
}

.logo img {
    max-height: 50px;
}

.navigation-list {
    list-style: none;
    display: flex;
    gap: 20px;
}

.icons i {
    margin-left: 10px;
    cursor: pointer;
} */
</style>
