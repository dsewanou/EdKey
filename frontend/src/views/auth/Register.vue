<script setup lang="tsx">

import { RouterLink } from 'vue-router'
import FullLogo from '@/layouts/full/logo/Logo.vue'
import AuthRegister from '@/views/auth/components/AuthRegister.vue' 
import Card from '@/components/ui/card/Card.vue'
import AuthLayout from "@/layouts/auth/AuthLayout.vue"

</script>


<template>
  <AuthLayout 
    title="Rejoignez EdKey" 
    subtitle="Créez votre compte en quelques instants et commencez à digitaliser votre expérience éducative."
  >
    <Card class="border-none shadow-none bg-transparent p-0">
      <AuthRegister />
      
      <div class="mt-8 flex flex-col gap-4 ">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <span class="w-full border-t border-gray-200"></span>
          </div>
          <div class="relative flex justify-center text-xs uppercase">
            <span class="bg-white px-2 text-gray-400">Déjà inscrit ?</span>
          </div>
        </div>

        <RouterLink 
          to="/login" 
          class="mt-5 flex w-full items-center justify-center gap-2 rounded-lg border border-[#011c61] bg-white px-4 py-2.5 text-sm font-semibold text-[#011c61] shadow-sm hover:bg-blue-50 transition-all"
        >
          Se connecter à mon espace
        </RouterLink>
      </div>
    </Card>
  </AuthLayout>
</template>