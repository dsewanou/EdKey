<script setup lang="ts">
import { RouterLink } from 'vue-router';
// import DarkLogo from '../../../assets/images/logos/dark-logo.svg';
import PrimaryLogo from '../../../assets/images/logos/logo_1.png';
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