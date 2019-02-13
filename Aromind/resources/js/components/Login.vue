<template>
    <div class="container" style="margin-top: 5%; margin-bottom: 3%;">
        <div class="alert alert-danger" v-if="error">
            <p>There was an error, unable to sign in with those credentials.</p>
        </div>
        <form autocomplete="off" @submit.prevent="login" method="post">
          <h3>Login</h3>
          <br>
          <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" v-model="password" required>
          </div>
          <button type="submit" class="btn btn-primary1 btn-lg btn-block">Sign in</button>
        </form>
    </div>
</template>

<script>
  export default {
    data(){
      return {
        email: null,
        password: null,
        error: false
      }
    },
    methods: {
      login(){
        var app = this
        this.$auth.login({
            params: {
              email: app.email,
              password: app.password
            }, 
            success: function () {},
            error: function () {},
            rememberMe: true,
            redirect: '/',
            fetchUser: true,
        });       
      },
    }
  } 
</script>

<style>
    .btn-primary1 {
        background: rgb(234,119,142);
        /* background: linear-gradient(10deg, rgba(237,153,117,1) 0%, rgba(234,119,142,1) 33%, rgba(234,119,142,1) 83%, rgba(213,119,147,1) 100%); */
        color: white;
    }
</style>