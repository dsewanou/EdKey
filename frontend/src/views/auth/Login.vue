<script setup lang="ts">
import { RouterLink } from 'vue-router'
import AuthLogin from '@/views/auth/components/AuthLogin.vue' 
import Card from '@/components/ui/card/Card.vue'
import AuthLayout from "@/layouts/auth/AuthLayout.vue"

// Icons simples (optionnel, mais recommandé pour l'UX)
import { UserIcon, GraduationCapIcon } from 'lucide-vue-next'
</script>

<template>
  <AuthLayout 
    title="Bon retour parmi nous" 
    subtitle="Accédez à votre tableau de bord EdKey pour gérer vos établissements et vos formations."
  >
    <Card class="border-none shadow-none bg-transparent p-0">
      <AuthLogin />
      
      <div class="mt-8 flex flex-col gap-4">
        <div class="relative">
          <div class="absolute inset-0 flex items-center">
            <span class="w-full border-t border-gray-200"></span>
          </div>
          <div class="relative flex justify-center text-xs uppercase">
            <span class="bg-white px-4 text-gray-400 font-medium">Nouveau sur EdKey ?</span>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-5">
          <!-- <RouterLink :to="{ name: 'register', query: { role: 'parent' } }"
            class="flex w-full items-center justify-center gap-2 rounded-lg border border-[#011c61] bg-white px-4 py-2.5 text-sm font-semibold text-[#011c61] shadow-sm hover:bg-blue-50 transition-all"
        > -->
        <RouterLink :to="{ name: 'register', query: { role: 'parent' } }"
            class="flex w-full items-center justify-center gap-2 rounded-lg border border-[#011c61] bg-white px-4 py-2.5 text-sm font-semibold text-[#011c61] shadow-sm hover:bg-blue-50 transition-all"
          >
            <UserIcon class="w-4 h-4 text-gray-400 group-hover:text-[#011c61]" />
            Espace Parent
          </RouterLink>

          <RouterLink :to="{ name: 'register', query: { role: 'student' } }"
            class="flex w-full items-center justify-center gap-2 rounded-lg border border-[#011c61] bg-white px-4 py-2.5 text-sm font-semibold text-[#011c61] shadow-sm hover:bg-blue-50 transition-all"
        >
            <GraduationCapIcon class="w-4 h-4 text-gray-400 group-hover:text-[#011c61]" />
            Espace Élève
          </RouterLink>
        </div>

        <!-- <p class="text-center text-xs text-gray-500 mt-2">
          Vous êtes un établissement ? 
          <RouterLink to="/register/school" class="text-red-600 font-bold hover:underline">
            Créez votre espace ici
          </RouterLink>
        </p> -->
      </div>
    </Card>
  </AuthLayout>
</template>