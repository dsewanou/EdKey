<script setup lang="ts">
import { RouterLink } from 'vue-router';
// import LightLogo from '../../../assets/images/logos/light-logo.svg';
import PrimaryLogo from '../../../assets/images/logos/logo-light_1.png';

</script>
<template>
    <div class="logo lh-normal">
        <RouterLink to="/">
            <!-- <img :src="LightLogo" alt="home" /> -->
            <img :src="PrimaryLogo" alt="home" />
        </RouterLink>
    </div>
</template>