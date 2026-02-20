<script setup lang="ts">
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'
import { Textarea } from '@/components/ui/textarea'
import { ArrowRight, ArrowLeft, Phone, Mail, MapPin, HeartPulse } from 'lucide-vue-next'

const props = defineProps<{
  formData: any
  role: 'parent' | 'student'
}>()

const emit = defineEmits(['next', 'prev'])
</script>

<template>
  <div class="space-y-6 animate-in fade-in slide-in-from-right-4 duration-500">
    
    <div class="flex items-center gap-3 mb-6">
      <div class="p-2 bg-red-50 text-red-600 rounded-lg">
        <HeartPulse class="w-6 h-6" />
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#011c61]">Contact & Santé</h2>
        <p class="text-sm text-gray-500">Comment vous joindre en cas de besoin ?</p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="space-y-2">
        <Label class="text-[#011c61] font-semibold">Email de contact</Label>
        <div class="relative">
          <Mail class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
          <Input 
            type="email"
            v-model="formData.email" 
            placeholder="exemple@email.com" 
            class="pl-10 h-11 focus:border-[#011c61]"
          />
        </div>
      </div>

      <div class="space-y-2">
        <Label class="text-[#011c61] font-semibold">Numéro de téléphone</Label>
        <div class="relative">
          <Phone class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400" />
          <Input 
            v-model="formData.contact" 
            placeholder="+229 -- -- -- --" 
            class="pl-10 h-11 focus:border-[#011c61]"
          />
        </div>
      </div>
    </div>

    <div class="space-y-2">
      <Label class="text-[#011c61] font-semibold">Adresse de résidence</Label>
      <div class="relative">
        <MapPin class="absolute left-3 top-3 h-4 w-4 text-gray-400" />
        <Input 
          v-model="formData.adresse" 
          placeholder="Ville, Quartier, Lot..." 
          class="pl-10 h-11 focus:border-[#011c61]"
        />
      </div>
    </div>

    <div class="mt-8 p-4 rounded-xl bg-red-50/50 border border-red-100 space-y-3">
      <div class="flex items-center gap-2 text-red-700">
        <HeartPulse class="w-4 h-4" />
        <span class="text-sm font-bold uppercase tracking-wider">Informations Médicales</span>
      </div>
      <p class="text-xs text-red-600/80 leading-tight">
        Veuillez préciser toute allergie, maladie chronique ou groupe sanguin pour une meilleure prise en charge.
      </p>
      <Textarea 
        v-model="formData.donneesMedicales" 
        placeholder="Ex: Allergie à la pénicilline, Asthme, Groupe O+..." 
        class="bg-white border-red-100 focus:border-red-400 focus:ring-red-400 min-h-[100px]"
      />
    </div>

    <div class="flex justify-between mt-8 pt-4 border-t border-gray-50">
      <button 
        type="button"
        @click="emit('prev')"
        class="flex items-center text-sm font-bold text-gray-400 hover:text-[#011c61] transition-colors"
      >
        <ArrowLeft class="mr-2 w-4 h-4" />
        RETOUR
      </button>

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