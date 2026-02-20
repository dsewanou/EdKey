<template>
  <div class="flex h-screen w-full bg-white overflow-hidden">
    <div class="hidden lg:block lg:w-1/2 h-full">
      <AuthSlider />
    </div>

    <div class="w-full lg:w-1/2 h-full flex flex-col items-center px-6 md:px-16 xl:px-20 py-6 overflow-y-auto">
      
      <div class="w-full max-w-[500px] flex flex-col my-auto">
        
        <header class="text-center lg:text-left"> 
          <h1 class="text-2xl xl:text-3xl font-extrabold text-[#011c61] tracking-tight">
            {{ title }}
          </h1>
          <p class="mt-2 text-gray-500 text-base leading-snug mx-auto lg:mx-0">
            {{ subtitle }}
          </p>
        </header>

        <main class="py-6">
          <div class="w-full">
            <slot />
          </div>
        </main>

      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import AuthSlider from './AuthSlider.vue'; // Assurez-vous que le chemin est correct

interface Props {
  title: string;
  subtitle: string;
}

defineProps<Props>();
</script>