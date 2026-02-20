<template>
  <div class="bg-white dark:bg-dark flex justify-center items-center px-6 py-4 xl:hidden w-full">
    <!-- Theme Toggle -->
    <ThemeToggler />

    <!-- Pricing Trigger -->
    <button 
      @click="$emit('open-pricing')"
      class="p-2 rounded-full hover:text-primary dark:hover:text-primary relative hover:bg-lightprimary"
      title="Tarifs"
    >
      <IconifyIcon icon="solar:tag-price-bold-duotone" class="!h-5 !w-5" />
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
