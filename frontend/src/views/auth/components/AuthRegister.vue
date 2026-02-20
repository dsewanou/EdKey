<script setup lang="ts">
import { ref, computed } from 'vue'
import { useRoute } from 'vue-router'
import config from '../data/formConfig.json'

// Imports des étapes
import StepIdentity from '../steps/StepIdentity.vue'
import StepAcademic from '../steps/StepAcademic.vue'
import StepContact from '../steps/StepContact.vue'
import StepFinal from '../steps/StepFinal.vue'
import StepSuccess from '../steps/StepSuccess.vue' // Import de l'étape succès

const route = useRoute()

const role = computed(() => (route.query.role as 'parent' | 'student') || 'student')
const roleConfig = computed(() => config.roles[role.value])

const currentStep = ref(1)
const totalSteps = 4
const isFinished = ref(false) // Flag pour basculer sur l'écran de succès

const formData = ref({
  role: role.value,
  nom: '',
  prenoms: '',
  niveauEtude: '',
  etablissementProvenance: '',
  classeSouhaitee: '',
  serieFiliere: '',
  dernierDiplome: '',
  email: '',
  contact: '',
  adresse: '',
  donneesMedicales: '',
  parentNom: '',
  parentContact: '',
  urgenceNom: '',
  urgenceContact: '',
  files: {
    birthCertificate: null,
    photo: null
  }
})

const nextStep = () => currentStep.value++
const prevStep = () => currentStep.value--

const onSubmit = () => {
  console.log("Envoi du formulaire...", formData.value)
  // Ici tu appelles ton API. Si succès :
  isFinished.value = true
}
</script>

<template>
  <div class="w-full max-w-2xl mx-auto py-8">
    
    <template v-if="!isFinished">
      <div class="mb-10 text-center lg:text-left animate-in fade-in duration-500">
        <h1 class="text-3xl font-bold text-[#011c61]">{{ roleConfig.title }}</h1>
        <p class="text-gray-500">{{ roleConfig.description }}</p>
      </div>

      <div class="flex items-center justify-between mb-12 px-4">
        <div v-for="s in totalSteps" :key="s" class="flex items-center">
          <div :class="[
            'w-10 h-10 rounded-full flex items-center justify-center border-2 transition-all duration-500',
            currentStep >= s ? 'border-[#011c61] bg-[#011c61] text-white' : 'border-gray-200 text-gray-400'
          ]">
            {{ s }}
          </div>
          <div v-if="s < totalSteps" 
            class="h-0.5 w-12 sm:w-20 mx-2 transition-all duration-500" 
            :class="currentStep > s ? 'bg-[#011c61]' : 'bg-gray-100'">
          </div>
        </div>
      </div>

      <div class="bg-white p-2">
        <StepIdentity 
          v-if="currentStep === 1" 
          :formData="formData" 
          :role="role" 
          @next="nextStep" 
        />
        
        <StepAcademic 
          v-if="currentStep === 2" 
          :formData="formData" 
          :role="role" 
          @next="nextStep" 
          @prev="prevStep" 
        />

        <StepContact 
          v-if="currentStep === 3" 
          :formData="formData" 
          :role="role" 
          @next="nextStep" 
          @prev="prevStep" 
        />

        <StepFinal 
          v-if="currentStep === 4" 
          :formData="formData" 
          :role="role" 
          @prev="prevStep" 
          @submit="onSubmit" 
        />
      </div>
    </template>

    <StepSuccess 
      v-else 
      :formData="formData" 
      :role="role" 
    />

  </div>
</template>