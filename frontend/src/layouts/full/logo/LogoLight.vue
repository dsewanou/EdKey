<script setup lang="ts">
import { RouterLink } from 'vue-router';
// import LightLogo from '../../../assets/images/logos/light-logo.svg';
import PrimaryLogo from '../../../assets/images/logos/logo-light_1.png';

</script>

<template>
  <div class="logo lh-normal">
    <RouterLink to="/">
      <img 
        :src="PrimaryLogo" 
        alt="EdKey Logo" 
        v-bind="$attrs"
      />
    </RouterLink>
  </div>
</template>