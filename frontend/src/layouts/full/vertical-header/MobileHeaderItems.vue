<template>
  <div class="bg-white dark:bg-dark flex justify-center items-center px-6 py-4 xl:hidden w-full">
    <!-- Theme Toggle -->
    <ThemeToggler />

    <!-- Pricing Trigger -->
    <button 
      @click="$emit('open-pricing')"
      class="p-2.5 rounded-full bg-primary/10 text-primary hover:bg-primary hover:text-white transition-all duration-300 relative shadow-sm"
      title="Tarifs"
    >
      <IconifyIcon icon="solar:tag-price-bold-duotone" class="!h-5 !w-5" />
      <span class="absolute -top-1 -right-1 flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
        <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
      </span>
    </button>

    <!-- Messages Dropdown -->
    <NotificationDD />

    <!-- Profile Dropdown -->
    <ProfileDD />
  </div>
</template>

<script setup>
import { inject } from 'vue'
import { Icon as IconifyIcon } from '@iconify/vue'
import ThemeToggler from './ThemeToggler.vue'
import NotificationDD from './NotificationDD.vue';
import ProfileDD from './ProfileDD.vue';

defineEmits(['open-pricing']);
</script>
