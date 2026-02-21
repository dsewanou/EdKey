<script setup lang="ts">
import { ref, computed } from 'vue'
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'
import { Textarea } from '@/components/ui/textarea'
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'
import { 
  User, BookOpen, Phone, ShieldCheck, 
  Save, Camera, Loader2, CheckCircle2 
} from 'lucide-vue-next'
import config from '../auth/data/formConfig.json'

// Simuler les données actuelles de l'utilisateur (à récupérer via ton store ou API)
const userProfile = ref({
  role: 'parent', // ou 'student'
  nom: 'Houessou',
  prenoms: 'Jean-Pierre',
  email: 'jean.houessou@email.com',
  contact: '+229 90 00 00 00',
  niveauEtude: 'secondaire',
  classeSouhaitee: '3ème',
  serieFiliere: 'Série G2',
  adresse: 'Cotonou, Fidjrossè',
  donneesMedicales: 'Allergie au pollen',
  parentNom: 'M. Houessou Senior',
  parentContact: '+229 97 00 00 00',
  urgenceNom: 'Mme. Houessou',
  urgenceContact: '+229 95 00 00 00',
  photoUrl: 'https://api.dicebear.com/7.x/avataaars/svg?seed=Jean'
})

const isUpdating = ref(false)
const showSuccess = ref(false)

// Calcul des classes dynamiques comme dans StepIdentity
const availableClasses = computed(() => {
  const level = userProfile.value.niveauEtude as keyof typeof config.classes
  return config.classes[level] || []
})

const handleUpdate = async () => {
  isUpdating.value = true
  // Simuler appel API
  await new Promise(resolve => setTimeout(resolve, 1500))
  isUpdating.value = false
  showSuccess.value = true
  setTimeout(() => showSuccess.value = false, 3000)
}
</script>

<template>
  <div class="max-w-4xl mx-auto py-10 px-4">
    
    <div class="flex flex-col md:flex-row items-center gap-6 mb-8 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
      <div class="relative group">
        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-blue-50">
          <img :src="userProfile.photoUrl" alt="Avatar" class="w-full h-full object-cover" />
        </div>
        <button class="absolute bottom-0 right-0 p-2 bg-[#011c61] text-white rounded-full shadow-lg hover:scale-110 transition-transform">
          <Camera class="w-4 h-4" />
        </button>
      </div>
      
      <div class="text-center md:text-left flex-1">
        <h1 class="text-2xl font-black text-[#011c61]">{{ userProfile.prenoms }} {{ userProfile.nom }}</h1>
        <p class="text-gray-500 font-medium capitalize">{{ userProfile.role }} • ID #EDK-2026</p>
      </div>

      <Button @click="handleUpdate" :disabled="isUpdating" class="bg-[#011c61] gap-2">
        <Loader2 v-if="isUpdating" class="w-4 h-4 animate-spin" />
        <Save v-else class="w-4 h-4" />
        {{ isUpdating ? 'Enregistrement...' : 'Enregistrer les modifs' }}
      </Button>
    </div>

    <div v-if="showSuccess" class="mb-6 animate-in slide-in-from-top-4 duration-300">
      <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl flex items-center gap-3">
        <CheckCircle2 class="w-5 h-5" />
        <span class="font-bold text-sm">Profil mis à jour avec succès !</span>
      </div>
    </div>

    <Tabs default-value="personal" class="w-full">
      <TabsList class="grid w-full grid-cols-3 mb-8 h-12 bg-gray-100/50 p-1">
        <TabsTrigger value="personal" class="gap-2"> <User class="w-4 h-4" /> Personnel </TabsTrigger>
        <TabsTrigger value="academic" class="gap-2"> <BookOpen class="w-4 h-4" /> Scolarité </TabsTrigger>
        <TabsTrigger value="contact" class="gap-2"> <Phone class="w-4 h-4" /> Sécurité </TabsTrigger>
      </TabsList>

      <TabsContent value="personal">
        <Card>
          <CardHeader>
            <CardTitle class="text-[#011c61]">Informations Personnelles</CardTitle>
            <CardDescription>Mettez à jour vos informations de base.</CardDescription>
          </CardHeader>
          <CardContent class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-2">
              <Label>Nom</Label>
              <Input v-model="userProfile.nom" />
            </div>
            <div class="space-y-2">
              <Label>Prénoms</Label>
              <Input v-model="userProfile.prenoms" />
            </div>
            <div class="space-y-2">
              <Label>Email</Label>
              <Input v-model="userProfile.email" type="email" />
            </div>
            <div class="space-y-2">
              <Label>Téléphone</Label>
              <Input v-model="userProfile.contact" />
            </div>
          </CardContent>
        </Card>
      </TabsContent>

      <TabsContent value="academic">
        <Card>
          <CardHeader>
            <CardTitle class="text-[#011c61]">Parcours Scolaire</CardTitle>
          </CardHeader>
          <CardContent class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="space-y-2">
                <Label>Niveau d'étude</Label>
                <select v-model="userProfile.niveauEtude" class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm">
                  <option v-for="level in config.levels" :key="level.value" :value="level.value">{{ level.label }}</option>
                </select>
              </div>
              <div class="space-y-2">
                <Label>Classe</Label>
                <select v-model="userProfile.classeSouhaitee" class="w-full h-10 rounded-md border border-input bg-background px-3 py-2 text-sm">
                  <option v-for="c in availableClasses" :key="c" :value="c">{{ c }}</option>
                </select>
              </div>
            </div>
            <div class="space-y-2">
              <Label>Informations Médicales</Label>
              <Textarea v-model="userProfile.donneesMedicales" class="min-h-[100px]" />
            </div>
          </CardContent>
        </Card>
      </TabsContent>

      <TabsContent value="contact">
        <Card>
          <CardHeader>
            <CardTitle class="text-[#011c61]">
              {{ userProfile.role === 'parent' ? 'Informations Responsable' : 'Contacts d\'Urgence' }}
            </CardTitle>
          </CardHeader>
          <CardContent class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <template v-if="userProfile.role === 'parent'">
              <div class="space-y-2">
                <Label>Nom complet du Parent</Label>
                <Input v-model="userProfile.parentNom" />
              </div>
              <div class="space-y-2">
                <Label>Contact du Parent</Label>
                <Input v-model="userProfile.parentContact" />
              </div>
            </template>
            <template v-else>
              <div class="space-y-2">
                <Label>Personne à contacter en urgence</Label>
                <Input v-model="userProfile.urgenceNom" />
              </div>
              <div class="space-y-2">
                <Label>Téléphone d'urgence</Label>
                <Input v-model="userProfile.urgenceContact" />
              </div>
            </template>
            <div class="md:col-span-2 space-y-2">
              <Label>Adresse de résidence</Label>
              <Input v-model="userProfile.adresse" />
            </div>
          </CardContent>
        </Card>
      </TabsContent>
    </Tabs>
  </div>
</template>