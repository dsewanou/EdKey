<script setup lang="ts">
import { RouterLink } from 'vue-router';
// import LightLogo from '../../../assets/images/logos/light-logo.svg';
import PrimaryLogo from '../../../assets/images/logos/logo-light_1.png';

</script>

<template>
  <div class="logo lh-normal px-6">
    <RouterLink to="/" class="flex items-center">
      <img 
        :src="PrimaryLogo" 
        alt="EdKey Logo" 
        class="max-h-12 w-auto object-contain"
        v-bind="$attrs"
      />
    </RouterLink>
  </div>
</template>