<template>
  <div>
    This is my app page
    <header>
      <router-link to="/app/user">User</router-link> |
    </header>

    <router-view></router-view>
  </div>
</template>
<script>
export default {
  data() {
    return {
      message: "Hello world!"
    }
  }
}
</script>

