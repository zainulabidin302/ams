<template>
  <div>
    <div v-if="user">
    <h1>USER RECORD</h1>

    <div class="div">Name: {{user.name}}</div>
    <div class="div">Email: {{user.email}}</div>



    <form @submit.prevent="create">
      <input type="text" name="name" placeholder="name" v-model="user.name" />
      <input type="text" name="email" placeholder="email" v-model="user.email" />
      <input type="text" name="password" placeholder="password" v-model="user.password" />
      <button>create</button>
    </form>
    </div>
    <!-- <div class="div">Name: {{name}}</div>
    <div class="div">Name: {{name}}</div> -->
  </div>
</template>
<script>
import axios from 'axios';

export default {

  created() {
    
    axios(this.domain + '/api/users').then(data => {
      this.user = data.data[0]
    }).catch(error => {
      console.log(error)
    })
  },
  data() {
    return {
      domain: 'http://8410b3c3.ngrok.io',
      user: null,
    }
  },
  methods: {
    create() {
      axios.post(this.domain + "/api/users", jsonToQueryString(this.user), {
        headers: {
          "Content-type": "application/x-www-form-urlencoded"
        // "content-type": "application/json"
        }
      }).then(data => {
        console.log(data)
      }).catch(error => {
        console.log(error)
      })
    }
  }
}
</script>

