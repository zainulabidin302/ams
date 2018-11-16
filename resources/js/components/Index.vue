<template>
  <h2>Hello Vue.js</h2>
  <button @click="counter">Hit me </button>
  You hit me 5 times {{times}}
</template>

<script>
export default {
  data() {
    return { times: 0}
  },
  methods: {
    counter() {
      this.times++
    }
  }
}
</script>

