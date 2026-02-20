<script setup lang="ts">
import { ref } from 'vue'
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'
import { 
  ArrowLeft, Check, FileText, UploadCloud, 
  ShieldCheck, Loader2, AlertCircle 
} from 'lucide-vue-next'

const props = defineProps<{
  formData: any
  role: 'parent' | 'student'
}>()

const emit = defineEmits(['prev', 'submit'])
const isLoading = ref(false)

const handleFileUpload = (e: Event, key: string) => {
  const target = e.target as HTMLInputElement
  if (target.files && target.files[0]) {
    props.formData.files[key] = target.files[0]
  }
}

const triggerSubmit = async () => {
  isLoading.value = true
  // On émet l'événement vers le parent pour le traitement final
  emit('submit')
  // Le chargement sera stoppé par la redirection ou le parent
}
</script>

<template>
  <div class="space-y-6 animate-in fade-in slide-in-from-right-4 duration-500">
    
    <div class="flex items-center gap-3 mb-6">
      <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
        <ShieldCheck class="w-6 h-6" />
      </div>
      <div>
        <h2 class="text-xl font-bold text-[#011c61]">Responsable & Documents</h2>
        <p class="text-sm text-gray-500">Dernière étape pour finaliser le dossier.</p>
      </div>
    </div>

    <div v-if="role === 'parent'" class="p-5 rounded-xl bg-blue-50 border border-blue-100 space-y-4">
      <div class="flex items-center gap-2 text-blue-700">
        <AlertCircle class="w-4 h-4" />
        <span class="text-xs font-bold uppercase tracking-widest">Informations du Parent</span>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="space-y-2">
          <Label class="text-blue-900 font-semibold">Nom complet du Parent/Tuteur</Label>
          <Input v-model="formData.parentNom" placeholder="Ex: M. DOE John" class="bg-white" />
        </div>
        <div class="space-y-2">
          <Label class="text-blue-900 font-semibold">Téléphone du Tuteur</Label>
          <Input v-model="formData.parentContact" placeholder="Numéro joignable" class="bg-white" />
        </div>
      </div>
    </div>

    <div v-else class="p-5 rounded-xl bg-slate-50 border border-slate-200 space-y-4">
      <div class="flex items-center gap-2 text-slate-600">
        <AlertCircle class="w-4 h-4" />
        <span class="text-xs font-bold uppercase tracking-widest">Contact d'Urgence</span>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="space-y-2">
          <Label class="text-slate-900 font-semibold">Nom de la personne à prévenir</Label>
          <Input v-model="formData.urgenceNom" placeholder="Nom du contact" class="bg-white" />
        </div>
        <div class="space-y-2">
          <Label class="text-slate-900 font-semibold">Téléphone d'urgence</Label>
          <Input v-model="formData.urgenceContact" placeholder="Numéro joignable" class="bg-white" />
        </div>
      </div>
    </div>

    <div class="space-y-4 pt-4">
      <h3 class="text-sm font-bold text-[#011c61] uppercase tracking-wider">Pièces Justificatives</h3>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="relative group">
          <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-200 rounded-xl cursor-pointer bg-gray-50 hover:bg-white hover:border-[#011c61] transition-all">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <UploadCloud class="w-8 h-8 text-gray-400 group-hover:text-[#011c61] mb-2" />
              <p class="text-xs font-medium text-gray-500">Acte de Naissance (PDF/JPG)</p>
              <p class="text-[10px] text-gray-400 mt-1">{{ formData.files.birthCertificate ? formData.files.birthCertificate.name : 'Max 2Mo' }}</p>
            </div>
            <input type="file" class="hidden" @change="handleFileUpload($event, 'birthCertificate')" accept=".pdf,.jpg,.jpeg" />
          </label>
        </div>

        <div class="relative group">
          <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-200 rounded-xl cursor-pointer bg-gray-50 hover:bg-white hover:border-[#011c61] transition-all">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <UploadCloud class="w-8 h-8 text-gray-400 group-hover:text-[#011c61] mb-2" />
              <p class="text-xs font-medium text-gray-500">Photo d'Identité (PNG/JPG)</p>
              <p class="text-[10px] text-gray-400 mt-1">{{ formData.files.photo ? formData.files.photo.name : 'Format carré recommandé' }}</p>
            </div>
            <input type="file" class="hidden" @change="handleFileUpload($event, 'photo')" accept="image/*" />
          </label>
        </div>
      </div>
    </div>

    <div class="flex justify-between mt-10 pt-6 border-t border-gray-100">
      <button 
        type="button"
        @click="emit('prev')"
        class="flex items-center text-sm font-bold text-gray-400 hover:text-[#011c61] transition-colors"
      >
        <ArrowLeft class="mr-2 w-4 h-4" />
        RETOUR
      </button>

      <Button 
        @click="triggerSubmit"
        :disabled="isLoading"
        class="bg-red-600 hover:bg-red-700 px-10 h-12 text-white font-black text-lg transition-all shadow-xl shadow-red-200 active:scale-95"
      >
        <template v-if="isLoading">
          <Loader2 class="mr-2 h-5 w-5 animate-spin" />
          ENVOI...
        </template>
        <template v-else>
          TERMINER <Check class="ml-2 w-5 h-5" />
        </template>
      </Button>
    </div>
  </div>
</template>