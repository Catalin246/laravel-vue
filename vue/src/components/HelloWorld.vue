<template>
  <div class="hello">
    <h1 class="text-white">{{ msg }}</h1>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
  data() {
    return {
      items: {},
    };
  },
  methods: {
    async getItems() {
      const { data } = await axios.get("http://localhost:8000/api/items");
      this.items = data;
      console.log(this.items);
    },
  },
  beforeMount() {
    this.getItems();
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
