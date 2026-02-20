<script setup lang="ts">
import { ref, computed } from 'vue'
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'
import { 
  User, BookOpen, FileText, Heart, ArrowRight, ArrowLeft, Check 
} from 'lucide-vue-next'

// Types pour le niveau d'étude
type EducationLevel = 'maternelle' | 'primaire' | 'secondaire' | 'superieur'

const currentStep = ref(1)
const totalSteps = 4

// État réactif du formulaire complet
const form = ref({
  // Étape 1 : Niveau & Identité de base
  niveauEtude: '' as EducationLevel | '',
  nom: '',
  prenoms: '',
  sexe: '',
  dateNaissance: '',
  
  // Étape 2 : Cursus & Provenance
  etablissementProvenance: '',
  dernierDiplome: '',
  classeSouhaitee: '',
  serieFiliere: '', // Pour secondaire/supérieur
  
  // Étape 3 : Contacts & Santé
  email: '',
  contact: '',
  adresse: '',
  donneesMedicales: '',
  
  // Étape 4 : Responsables (Conditionnel)
  parentNom: '',
  parentContact: '',
  urgenceNom: '',
  urgenceContact: '',
  
  // Documents
  files: {
    birthCertificate: null,
    photo: null,
    idCard: null
  }
})

// Logique pour passer d'une étape à l'autre
const nextStep = () => { if (currentStep.value < totalSteps) currentStep.value++ }
const prevStep = () => { if (currentStep.value > 1) currentStep.value-- }

const onSubmit = (e: Event) => {
  e.preventDefault()
  console.log('Final Data:', form.value)
  // Appel API ici
}
</script>

<template>
  <div class="w-full max-w-2xl mx-auto">
    <div class="flex items-center justify-between mb-12">
      <div v-for="s in totalSteps" :key="s" class="flex items-center relative">
        <div 
          :class="[
            'w-10 h-10 rounded-full flex items-center justify-center border-2 transition-all duration-300',
            currentStep >= s ? 'border-[#011c61] bg-[#011c61] text-white' : 'border-gray-200 text-gray-400'
          ]"
        >
          <component :is="s === 1 ? User : s === 2 ? BookOpen : s === 3 ? Heart : FileText" class="w-5 h-5" />
        </div>
        <div v-if="s < totalSteps" 
          :class="['h-0.5 w-12 mx-2', currentStep > s ? 'bg-[#011c61]' : 'bg-gray-100']"
        ></div>
      </div>
    </div>

    <form @submit.prevent="onSubmit" class="space-y-6">
      
      <div v-if="currentStep === 1" class="space-y-4 animate-in fade-in slide-in-from-right-4">
        <h2 class="text-xl font-bold text-[#011c61] mb-4">Profil de l'apprenant</h2>
        
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-2">
            <Label>Nom</Label>
            <Input v-model="form.nom" placeholder="Ex: DOE" required />
          </div>
          <div class="space-y-2">
            <Label>Prénoms</Label>
            <Input v-model="form.prenoms" placeholder="Ex: John" required />
          </div>
        </div>

        <div class="space-y-2">
          <Label>Niveau d'étude</Label>
          <select v-model="form.niveauEtude" class="w-full flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus:ring-[#011c61]">
            <option value="maternelle">Maternelle</option>
            <option value="primaire">Primaire</option>
            <option value="secondaire">Secondaire</option>
            <option value="superieur">Supérieur</option>
          </select>
        </div>
      </div>

      <div v-if="currentStep === 2" class="space-y-4">
        <h2 class="text-xl font-bold text-[#011c61] mb-4">Parcours Scolaire</h2>
        
        <div class="space-y-2">
          <Label>Établissement de provenance</Label>
          <Input v-model="form.etablissementProvenance" />
        </div>

        <div v-if="form.niveauEtude === 'secondaire' || form.niveauEtude === 'superieur'" class="space-y-2">
          <Label>{{ form.niveauEtude === 'superieur' ? 'Filière / Programme' : 'Série' }}</Label>
          <Input v-model="form.serieFiliere" placeholder="Ex: Terminale C ou Informatique" />
        </div>

        <div class="space-y-2">
          <Label>Classe demandée</Label>
          <Input v-model="form.classeSouhaitee" placeholder="Ex: CE2, 3ème, Licence 1" />
        </div>
      </div>

      <div v-if="currentStep === 3" class="space-y-4">
        <h2 class="text-xl font-bold text-[#011c61] mb-4">Informations de contact & Santé</h2>
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-2">
            <Label>Email</Label>
            <Input type="email" v-model="form.email" />
          </div>
          <div class="space-y-2">
            <Label>Téléphone</Label>
            <Input v-model="form.contact" />
          </div>
        </div>
        <div class="space-y-2">
          <Label>Données médicales (Allergies, Groupe Sanguin...)</Label>
          <textarea v-model="form.donneesMedicales" class="w-full min-h-[100px] rounded-md border border-input px-3 py-2 text-sm focus:ring-[#011c61]"></textarea>
        </div>
      </div>

      <div v-if="currentStep === 4" class="space-y-4">
        <h2 class="text-xl font-bold text-[#011c61] mb-4">Responsables & Pièces</h2>
        
        <div v-if="form.niveauEtude === 'primaire' || form.niveauEtude === 'maternelle'" class="bg-blue-50 p-4 rounded-lg space-y-3">
          <h3 class="font-semibold text-[#011c61] text-sm uppercase">Informations des Parents</h3>
          <Input v-model="form.parentNom" placeholder="Nom complet du parent" />
          <Input v-model="form.parentContact" placeholder="Téléphone du parent" />
        </div>

        <div v-else class="bg-red-50 p-4 rounded-lg space-y-3">
          <h3 class="font-semibold text-red-600 text-sm uppercase">Personne à contacter en cas d'urgence</h3>
          <Input v-model="form.urgenceNom" placeholder="Nom du contact d'urgence" />
          <Input v-model="form.urgenceContact" placeholder="Téléphone d'urgence" />
        </div>

        <div class="space-y-2">
          <Label>Acte de naissance (PDF/JPG)</Label>
          <Input type="file" @change="(e : any) => form.files.birthCertificate = e.target.files[0]" />
        </div>
      </div>

      <div class="flex justify-between pt-6 border-t border-gray-100">
        <Button 
          type="button" 
          variant="outline" 
          @click="prevStep" 
          :disabled="currentStep === 1"
          class="flex items-center gap-2"
        >
          <ArrowLeft class="w-4 h-4" /> Précédent
        </Button>

        <Button 
          v-if="currentStep < totalSteps" 
          type="button" 
          @click="nextStep"
          class="bg-[#011c61] hover:bg-[#011c61]/90 flex items-center gap-2"
        >
          Continuer <ArrowRight class="w-4 h-4" />
        </Button>

        <Button 
          v-else 
          type="submit" 
          class="bg-red-600 hover:bg-red-700 flex items-center gap-2"
        >
          Valider l'inscription <Check class="w-4 h-4" />
        </Button>
      </div>
    </form>
  </div>
</template>