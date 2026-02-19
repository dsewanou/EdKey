<template>
  <div class="flex h-screen w-full bg-white overflow-hidden">
    <div class="hidden lg:block lg:w-3/5 h-full">
      <AuthSlider />
    </div>

    <div class="w-full lg:w-2/5 h-full flex flex-col px-8 md:px-16 xl:px-24 py-12">
      
      <header class="mb-auto"> <h1 class="text-3xl xl:text-4xl font-extrabold text-[#011c61] tracking-tight">
          {{ title }}
        </h1>
        <p class="mt-4 text-gray-500 text-lg leading-relaxed max-w-md">
          {{ subtitle }}
        </p>
      </header>

      <main class="flex-grow flex flex-col justify-center py-10">
        <div class="w-full max-w-[450px] mx-auto lg:mx-0">
          <slot />
        </div>
      </main>

      <!-- <footer class="mt-auto pt-6 border-t border-gray-100">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-500">
          <p>
            Besoin d'aide pour accéder à votre espace ? 
            <a href="#" class="font-semibold text-red-600 hover:text-red-700 transition-colors">
              Contactez le support
            </a>
          </p>
          <span class="hidden sm:block text-gray-300">|</span>
          <p class="text-xs text-gray-400">EdKey v1.0</p>
        </div>
      </footer> -->
      
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