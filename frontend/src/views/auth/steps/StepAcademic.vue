<script setup lang="ts">
import { computed } from 'vue'
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'
import { ArrowRight, ArrowLeft, BookOpen, School } from 'lucide-vue-next'
import config from '../data/formConfig.json' // Import du JSON

const props = defineProps<{
  formData: any
  role: 'parent' | 'student'
}>()

const emit = defineEmits(['next', 'prev'])

const availableClasses = computed(() => {
  const level = props.formData.niveauEtude as keyof typeof config.classes
  return config.classes[level] || []
})

// Logique conditionnelle : on affiche la filière/série seulement pour les grands
const isAdvancedLevel = computed(() => {
  return ['secondaire', 'superieur'].includes(props.formData.niveauEtude)
})

// Adaptateur de label pour la filière
const careerLabel = computed(() => {
  return props.formData.niveauEtude === 'superieur' ? 'Filière / Spécialité' : 'Série'
})  
 
</script>

<template>
  <div class="space-y-6 animate-in fade-in slide-in-from-right-4 duration-500">
    
    <div class="flex items-center gap-3 mb-6">
      <div class="p-2 bg-emerald-50 text-emerald-600 rounded-lg">
        <BookOpen class="w-6 h-6" />
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#011c61]">Parcours Scolaire</h2>
        <p class="text-sm text-gray-500">D'où vient {{ role === 'parent' ? "l'enfant" : "l'apprenant" }} ?</p>
      </div>
    </div>

    <div class="space-y-2">
      <Label class="text-[#011c61] font-semibold">Dernier établissement fréquenté</Label>
      <div class="relative">
        <School class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
        <Input 
          v-model="formData.etablissementProvenance" 
          placeholder="Ex: Lycée technique de Cotonou" 
          class="pl-10 h-11 focus:border-[#011c61]"
        />
      </div>
    </div>

    <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <div v-if="isAdvancedLevel" class="space-y-2 animate-in zoom-in-95 duration-300">
        <Label class="text-[#011c61] font-semibold">{{ careerLabel }}</Label>
        <Input 
          v-model="formData.serieFiliere" 
          :placeholder="formData.niveauEtude === 'superieur' ? 'Ex: Informatique' : 'Ex: Série G2'" 
          class="h-11 border-emerald-200 focus:border-emerald-500"
        />
      </div>
    </div> -->


      <div class="space-y-2">
        <Label class="text-[#011c61] font-semibold">Classe souhaitée</Label>
        <select 
          v-model="formData.classeSouhaitee" 
          class="w-full flex h-11 rounded-md border border-input bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-[#011c61] focus:outline-none transition-all"
        >
          <option value="" disabled>Choisir la classe</option>
          <option v-for="classe in availableClasses" :key="classe" :value="classe">
            {{ classe }}
          </option>
        </select>
        <p v-if="availableClasses.length === 0" class="text-[10px] text-red-500 italic">
          Veuillez revenir à l'étape 1 pour choisir un niveau d'étude.
        </p>
      </div>

      <div v-if="isAdvancedLevel" class="space-y-2 animate-in zoom-in-95 duration-300">
        <Label class="text-[#011c61] font-semibold">{{ careerLabel }}</Label>
        <input 
          v-model="formData.serieFiliere" 
          :placeholder="formData.niveauEtude === 'superieur' ? 'Ex: Informatique' : 'Ex: Série G2'" 
          class="flex h-11 w-full rounded-md border border-emerald-200 bg-background px-3 py-2 text-sm focus:ring-2 focus:ring-emerald-500 focus:outline-none transition-all"
        />
      </div>


    <div class="space-y-2">
      <Label class="text-[#011c61] font-semibold">Dernier diplôme ou certificat obtenu</Label>
      <Input 
        v-model="formData.dernierDiplome" 
        placeholder="Ex: CEP, BEPC, BAC..." 
        class="h-11 focus:border-[#011c61]"
      />
    </div>

    <div class="flex justify-between mt-8 pt-4 border-t border-gray-50">
      <Button 
        type="button"
        variant="ghost"
        @click="emit('prev')"
        class="text-gray-500 hover:text-[#011c61]"
      >
        <ArrowLeft class="mr-2 w-4 h-4" />
        Retour
      </Button>

      <Button 
        @click="emit('next')"
        class="bg-[#011c61] hover:bg-[#011c61]/90 px-8 h-11 text-white font-bold transition-all shadow-lg"
      >
        Continuer
        <ArrowRight class="ml-2 w-4 h-4" />
      </Button>
    </div>
  </div>
</template>