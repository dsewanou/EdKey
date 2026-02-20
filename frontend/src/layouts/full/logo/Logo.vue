<script setup lang="ts">
import { onMounted, ref } from 'vue';
import LogoLight from './LogoLight.vue';
import LogoDark from './LogoDark.vue';

// On définit la prop mode pour qu'elle soit consommée ici
defineProps<{
  mode?: string
}>();

const isMounted = ref(false);
onMounted(() => {
  isMounted.value = true;
});
</script>

<template>
  <LogoLight v-if="isMounted && mode === 'light'" class="w-50" v-bind="$attrs" />
  <LogoDark v-else class="w-50" v-bind="$attrs" />
</template>