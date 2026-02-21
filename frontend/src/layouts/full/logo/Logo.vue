<script setup lang="ts">
import { onMounted, ref, computed } from 'vue';
import { useColorMode } from '@vueuse/core';
import LogoLight from './LogoLight.vue';
import LogoDark from './LogoDark.vue';

// On peut toujours passer le mode en prop si besoin de forcer
const props = defineProps<{
  mode?: string
}>();

const colorMode = useColorMode();
const isMounted = ref(false);

onMounted(() => {
  isMounted.value = true;
});

// Déterminer le mode à afficher : 
// Soit via la prop, soit via le colorMode global
const displayMode = computed(() => {
  return props.mode || colorMode.value;
});
</script>

<template>
  <!-- En mode sombre (dark), on affiche LogoLight (le logo blanc) -->
  <LogoLight v-if="isMounted && displayMode === 'dark'" v-bind="$attrs" />
  <!-- Par défaut ou en mode clair (light), on affiche LogoDark (le logo standard) -->
  <LogoDark v-else v-bind="$attrs" />
</template>