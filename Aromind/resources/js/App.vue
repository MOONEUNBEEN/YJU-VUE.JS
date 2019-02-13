<template>
<div>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="opacity: 0.9;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="#">
                        <!-- <img src="/img/logo.png" width="100" height="30" class="d-inline-block align-top" alt=""> -->
                        <img src="/img/logo1-7.png" width="150" class="d-inline-block align-top" alt="">
                    </a>
                </li>
                <li class="nav-item active">
                    <router-link tag="a" class="nav-link" :to="{ name: 'home' }">Home</router-link>
                </li>
                <li class="nav-item active">
                    <router-link tag="a" class="nav-link" :to="{ name: 'about' }">About</router-link>
                </li>
                <li class="nav-item active">
                    <router-link tag="a" class="nav-link" :to="{ name: 'community' }">Community</router-link>
                </li>
                <li v-if="!$auth.check()" class="nav-item active">
                    <router-link tag="a" class="nav-link" :to="{ name: 'login' }">Login</router-link>
                </li>
                <li v-if="!$auth.check()" class="nav-item active">
                    <router-link tag="a" class="nav-link" :to="{ name: 'register' }">Register</router-link>
                </li>
                <li v-if="$auth.check()" class="nav-item active">
                    <a href="#" class="nav-link" @click.prevent="$auth.logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="panel-body">
        <router-view></router-view>
    </div>
    <div id="footBack" style="padding: 3%; margin-top:3%;">
        <div>
            <div class="container text-center">
                <img src="/img/logo1-8.png" width="150" class="d-inline-block align-top" alt="">
            </div>
            <div class="container text-center" style="padding-top: 0.5%;">
                Developed Team Diffuser
            </div>
            <div class="container text-center" style="padding-top: 0.5%;">
                Developers 서보민 금상원 신현빈 문은빈 임수빈
            </div>
        </div>
        <!-- <div>
            <div class="text-right">
                <h4>Developers</h4>
                <hr style="width: 10%;">
                <h5>서보민</h5>
                <h5>금상원</h5>
                <h5>신현빈</h5>
                <h5>문은빈</h5>
                <h5>임수빈</h5>
            </div>
        </div> -->
    </div>
</div>
</template>

<style>
 #footBack {
    background: rgb(237,153,117);
    background: linear-gradient(145deg, rgba(237,153,117,1) 0%, rgba(234,119,142,1) 74%, rgba(234,119,142,1) 83%, rgba(213,119,147,1) 100%);
    color: white;
 }
</style>
