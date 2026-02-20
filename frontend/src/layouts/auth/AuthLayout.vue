<template>
  <div class="flex h-screen w-full bg-white overflow-hidden">
    <div class="hidden lg:block lg:w-1/2 h-full">
      <AuthSlider />
    </div>
<div class="w-full lg:w-1/2 h-full flex flex-col justify-center items-center px-8 md:px-16 xl:px-24 py-12">
  
  <div class="w-full max-w-[450px] flex flex-col">
    
    <header class="text-center lg:text-left"> 
      <h1 class="text-3xl xl:text-4xl font-extrabold text-[#011c61] tracking-tight">
        {{ title }}
      </h1>
      <p class="mt-4 text-gray-500 text-lg leading-relaxed mx-auto lg:mx-0">
        {{ subtitle }}
      </p>
    </header>

    <main class="py-10">
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