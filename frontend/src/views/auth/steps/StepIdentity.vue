<script setup lang="ts">
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'
import { ArrowRight, ArrowLeft, User } from 'lucide-vue-next' // Ajout de ArrowLeft
import { useRouter } from 'vue-router' // Pour la navigation
import config from '../data/formConfig.json'

// Props pour recevoir les données et le rôle
const props = defineProps<{
  formData: any
  role: 'parent' | 'student'
}>()
const router = useRouter()

const goToLogin = () => {
  router.push('/login') // Ajuste le chemin selon ta route de connexion
}

// Émissions pour la navigation
const emit = defineEmits(['next'])

const handleNext = () => {
  // On pourrait ajouter une validation ici
  emit('next')
}
</script>



<template>
  <div class="space-y-6 animate-in fade-in slide-in-from-right-4 duration-500">
    <div class="flex items-center gap-3 mb-6">
      <div class="p-2 bg-blue-50 text-[#011c61] rounded-lg">
        <User class="w-6 h-6" />
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#011c61]">
          {{ role === 'parent' ? "Identité de l'enfant" : "Ton Identité" }}
        </h2>
        <p class="text-sm text-gray-500">Informations de base pour l'inscription.</p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="space-y-2">
        <Label class="text-[#011c61] font-semibold">Nom</Label>
        <Input 
          v-model="formData.nom" 
          :placeholder="role === 'parent' ? 'Nom de l\'enfant' : 'Ton nom'" 
          class="h-11 focus:border-[#011c61]"
        />
      </div>
      <div class="space-y-2">
        <Label class="text-[#011c61] font-semibold">Prénoms</Label>
        <Input 
          v-model="formData.prenoms" 
          :placeholder="role === 'parent' ? 'Prénoms de l\'enfant' : 'Tes prénoms'" 
          class="h-11 focus:border-[#011c61]"
        />
      </div>
    </div>

    <div class="space-y-2">
      <Label class="text-[#011c61] font-semibold">Niveau d'étude visé</Label>
      <select 
        v-model="formData.niveauEtude" 
        class="w-full flex h-11 rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-[#011c61] focus:outline-none transition-all"
      >
        <option value="" disabled>Sélectionner un niveau</option>
        <option v-for="level in config.levels" :key="level.value" :value="level.value">
          {{ level.label }}
        </option>
      </select>
    </div>

    <div class="space-y-2">
      <Label class="text-[#011c61] font-semibold">Date de naissance</Label>
      <Input 
        type="date" 
        v-model="formData.dateNaissance" 
        class="h-11 focus:border-[#011c61]"
      />
    </div>
<div class="flex items-center justify-between mt-6">
      <button 
        type="button"
        @click="goToLogin"
        class="flex items-center gap-2 text-xs font-medium rounded-lg border border-[#011c61]
         text-gray-400 hover:text-[#011c61] transition-colors justify-center hover:bg-blue-50 
         transition-all px-4 py-2.5 shadow-sm bg-white  text-sm font-semibold  " 
        >
        <ArrowLeft class="w-3.5 h-3.5" />
        Retour à la connexion
      </button>
      <Button 
        @click="handleNext"
        class="bg-[#011c61] hover:bg-[#011c61]/90 px-8 h-11 text-white font-bold transition-all shadow-lg shadow-blue-900/10"
      >
        Continuer
        <ArrowRight class="ml-2 w-4 h-4" />
      </Button>
    </div>
  </div>
</template>


<!-- <template>
  <div class="space-y-4 animate-in fade-in slide-in-from-right-4 duration-500">
    
    <div class="flex items-center gap-3 mb-2">
      <div class="p-1.5 bg-blue-50 text-[#011c61] rounded-lg">
        <User class="w-5 h-5" />
      </div>
      <div>
        <h2 class="text-lg font-bold text-[#011c61] leading-none">
          {{ role === 'parent' ? "Identité de l'enfant" : "Ton Identité" }}
        </h2>
        <p class="text-xs text-gray-500 mt-1">Informations de base pour l'inscription.</p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
      <div class="space-y-1">
        <Label class="text-[#011c61] font-semibold text-xs">Nom</Label>
        <Input 
          v-model="formData.nom" 
          class="h-9 focus:border-[#011c61]"
        />
      </div>
      <div class="space-y-1">
        <Label class="text-[#011c61] font-semibold text-xs">Prénoms</Label>
        <Input 
          v-model="formData.prenoms" 
          class="h-9 focus:border-[#011c61]"
        />
      </div>
    </div>

    <div class="space-y-1">
      <Label class="text-[#011c61] font-semibold text-xs">Niveau d'étude visé</Label>
      <select 
        v-model="formData.niveauEtude" 
        class="w-full flex h-9 rounded-md border border-input bg-background px-3 py-1 text-sm focus:ring-1 focus:ring-[#011c61] focus:outline-none transition-all"
      >
        <option value="" disabled>Sélectionner un niveau</option>
        <option v-for="level in config.levels" :key="level.value" :value="level.value">
          {{ level.label }}
        </option>
      </select>
    </div>

    <div class="space-y-1">
      <Label class="text-[#011c61] font-semibold text-xs">Date de naissance</Label>
      <Input type="date" v-model="formData.dateNaissance" class="h-9" />
    </div>

    <div class="flex items-center justify-between mt-6">
      <button 
        type="button"
        @click="goToLogin"
        class="flex items-center gap-2 text-xs font-medium rounded-lg border border-[#011c61]
         text-gray-400 hover:text-[#011c61] transition-colors justify-center hover:bg-blue-50 
         transition-all px-4 py-2.5 shadow-sm bg-white  text-sm font-semibold  " 
        >
        <ArrowLeft class="w-3.5 h-3.5" />
        Retour à la connexion
      </button>

      <Button 
        @click="handleNext"
        class="bg-[#011c61] hover:bg-[#011c61]/90 px-6 h-9 text-xs text-white font-bold transition-all"
      >
        Continuer
        <ArrowRight class="ml-2 w-4 h-4" />
      </Button>
    </div>

  </div>
</template> -->