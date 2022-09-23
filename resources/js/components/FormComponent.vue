<template>
    <section id="form">
        <div id="toggle-forms">
            <button class="waves-effect waves-light active" id="login">Login</button>
            <button class="waves-effect waves-light" id="register">Register</button>
        </div>
        <form class="col s12" id="form-login">
            <div class="row center-align">
                <h4 class="white-text">login</h4>
            </div>
            <div class="row">
                <div class="input-field">
                    <input type="email" class="validate input-value" v-model="dataLogin.email" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input type="password" class="validate input-value" v-model="dataLogin.password" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row center-align">
                <button class="btn waves-effect waves-light" @click="login()">
                    Login
                </button>
            </div>
									<p class="forgot">Forgot Password?</p>
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>
        <form class="col s12" @submit.prevent="register()">
            <div class="row center-align">
                <h4 class="white-text">register</h4>
            </div>
            <div class="row">
                <div class="input-field">
                    <input name="name" id="name" type="name" class="validate input-value" v-model="dataRegister.name" required>
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input name="email" id="email" type="email" class="validate input-value" v-model="dataRegister.email" required>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <input name="password" id="password" type="password" class="validate input-value" v-model="dataRegister.password" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row center-align">
                <button type="submit" class="btn waves-effect waves-light">
                    Register
                </button>
            </div>
            <ul class="animate">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </form>
    </section>
</template>

<script>
    export default {
        name: "form-component",
        data() {
            return {
                dataLogin: {
                    email: null,
                    password: null
                },
                dataRegister: {
                    email: null,
                    password: null,
                    name: null
                }
            }
        },
        methods: {
            login(){
                this.$store.dispatch('login',this.dataLogin)
            },
            register(){
                this.$store.dispatch('register',this.dataRegister)
            }
        },
    }
</script>
