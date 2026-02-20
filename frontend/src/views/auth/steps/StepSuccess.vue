<script setup lang="ts">
import { ref } from 'vue'
import { Button } from '@/components/ui/button'
import { useAuthStore } from '@/stores/auth' // Import de ton store
import { useRouter } from 'vue-router'
import { 
  CheckCircle2, 
  Download, 
  ArrowRight, 
  Share2, 
  FileCheck,
  Calendar
} from 'lucide-vue-next'

const props = defineProps<{
  formData: any
  role: 'parent' | 'student'
}>()

const router = useRouter()
const authStore = useAuthStore()

const isLoading = ref(false)

// Fonction pour simuler le téléchargement du récapitulatif
const downloadRecap = () => {
  console.log("Génération du PDF pour:", props.formData.nom)
  alert("Téléchargement du récapitulatif PDF lancé !")
}


async function goToDashboard() {
  
  isLoading.value = true

  try {
    // 1. Simulation de l'appel API (Laravel ou autre)
    // Dans un vrai projet, tu ferais : const response = await api.post('/login', { ... })
    await new Promise((resolve) => setTimeout(resolve, 1500))

    // 2. Données fictives reçues de l'API
    const mockUser = {
      id: 1,
      name: "Utilisateur EdKey",
      email: "monemail@mondomain.com"
    }
    const mockToken = "12345|fake-jwt-token-edkey"

    // 3. Appel de l'action Pinia pour sauvegarder l'état
    authStore.setAuth(mockUser, mockToken)

    // 4. Redirection (Le middleware fera le reste)
    console.log('Login réussi ! Redirection...')
    router.push('/') 
    
  } catch (error) {
    console.error('Erreur de connexion:', error)
  } finally {
    isLoading.value = false
  }
}
</script>

<template>
  <div class="text-center py-6 animate-in fade-in zoom-in duration-700">
    
    <div class="flex justify-center mb-8">
      <div class="relative">
        <div class="absolute inset-0 animate-ping rounded-full bg-emerald-100 opacity-25"></div>
        <div class="relative bg-emerald-50 p-6 rounded-full border-2 border-emerald-100">
          <CheckCircle2 class="w-16 h-16 text-emerald-600" />
        </div>
      </div>
    </div>

    <h2 class="text-3xl font-black text-[#011c61] mb-3">Dossier Transmis !</h2>
    <p class="text-gray-500 max-w-sm mx-auto mb-10 text-lg">
      L'inscription de <strong>{{ formData.prenoms }} {{ formData.nom }}</strong> a été enregistrée avec succès.
    </p>

    <div class="relative overflow-hidden bg-white border border-gray-100 rounded-3xl shadow-2xl shadow-blue-900/5 max-w-md mx-auto mb-10">
      <div class="h-2 bg-[#011c61] w-full"></div>
      
      <div class="p-8 space-y-6 text-left">
        <div class="flex justify-between items-start">
          <div>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Numéro de dossier</p>
            <h4 class="text-lg font-mono font-bold text-[#011c61]">#EDK-2026-{{ Math.floor(Math.random() * 9000) + 1000 }}</h4>
          </div>
          <div class="bg-emerald-100 text-emerald-700 text-[10px] font-bold px-2 py-1 rounded-md">
            STATUT : REÇU
          </div>
        </div>

        <div class="space-y-3 pt-4 border-t border-dashed border-gray-100">
          <div class="flex items-center gap-3 text-sm">
            <Calendar class="w-4 h-4 text-gray-400" />
            <span class="text-gray-600">Session : 2026 - 2027</span>
          </div>
          <div class="flex items-center gap-3 text-sm">
            <FileCheck class="w-4 h-4 text-gray-400" />
            <span class="text-gray-600">Niveau : {{ formData.niveauEtude }}</span>
          </div>
        </div>

        <button 
          @click="downloadRecap"
          class="w-full group flex items-center justify-between p-4 rounded-xl bg-gray-50 hover:bg-[#011c61] hover:text-white transition-all duration-300"
        >
          <div class="flex items-center gap-3">
            <Download class="w-5 h-5 text-[#011c61] group-hover:text-white" />
            <span class="text-sm font-bold">Télécharger le reçu</span>
          </div>
          <ArrowRight class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-opacity" />
        </button>
      </div>
    </div>

    <div class="flex justify-center mt-6">
    <!-- <RouterLink to="/dashboard" class="w-full sm:w-auto">
      <Button 
        class="w-full sm:w-auto bg-[#011c61] hover:bg-[#011c61]/90 gap-3 px-10 h-12 text-white font-bold text-base shadow-xl shadow-blue-900/20 transition-all hover:scale-105 active:scale-95"
      >
        Accéder à mon espace
        <ArrowRight class="w-5 h-5" />
      </Button>
    </RouterLink> -->
    
    <Button 
        @click="goToDashboard"
      :disabled="isLoading"
      class="w-full sm:w-auto bg-[#011c61] hover:bg-[#011c61]/90 gap-3 px-10 h-12 text-white font-bold text-base shadow-xl shadow-blue-900/20 transition-all hover:scale-105 active:scale-95"
      >
      <template v-if="isLoading">
        <Loader2 class="mr-2 h-5 w-5 animate-spin" />
        Vérification...
      </template>
      <span v-else>
        Accéder à mon espace</span>
    </Button>
  </div>

  </div>
</template>