<template>
    <div class="container mx-auto">
      <div class="navigation-bar grid grid-cols-3 gap-4 items-center py-10 bg-black">
        <div class="text-white logo px-5">
          <img src="../assets/logo.png" alt="Logo">
        </div>

        <div class="flex justify-center">
           <ul class="text-white navigation-list flex gap-4">
            <li v-for="(page, index) in pages" :key="index" class="text-base cursor-pointer">{{ page }}</li>
          </ul>
        </div>

        <div class="text-white icons flex justify-end gap-4 px-4">
          <i class="icon text-lg fas fa-search cursor-pointer text-white" @click="handleSearch"></i>

          <i class="icon text-lg fas fa-user cursor-pointer text-white" @click="handleProfile"></i>

          <i class="icon text-lg fas fa-shopping-basket cursor-pointer text-white" @click="handleBasket"></i>
        </div>
      </div>
    </div>

</template>

<script>
import '@fortawesome/fontawesome-free/css/all.css';

export default {
    data() {
        return {
            pages: ["Home", "Menu", "Shop", "About", "Contact"],
        };
    },
    methods: {
       // The methods which power the navigation
    },
};
</script>

<style scoped>
.icon:hover {
    color: #FF9F0D;
}

ul li:hover {
    color: #FF9F0D;
}
</style>
