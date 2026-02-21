<script setup lang="ts">
import { ref } from 'vue'
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Button } from '@/components/ui/button'
import { Card, CardContent, CardHeader, CardTitle, CardDescription } from '@/components/ui/card'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'
import { User, ShieldCheck, Save, Loader2, KeyRound } from 'lucide-vue-next'

const isUpdating = ref(false)
const parentData = ref({
  nom: 'Houessou',
  prenoms: 'Jean-Pierre',
  email: 'jean.houessou@email.com',
  contact: '+229 90 00 00 00',
  profession: 'Ingénieur',
  adresse: 'Fidjrossè, Cotonou'
})

// Données pour le changement de mot de passe
const securityData = ref({
  currentPassword: '',
  newPassword: '',
  confirmPassword: ''
})

const handleSave = async () => {
  isUpdating.value = true
  await new Promise(r => setTimeout(r, 1000))
  isUpdating.value = false
  // Logique pour notifier l'utilisateur (toast, etc.)
}
</script>

<template>
  <div class="max-w-4xl mx-auto py-8 px-4">
    <div class="flex justify-between items-center mb-8">
      <div>
        <h1 class="text-2xl font-bold text-[#011c61]">Mon Profil Parent</h1>
        <p class="text-sm text-gray-500">Gérez vos informations personnelles et votre sécurité.</p>
      </div>
      <Button @click="handleSave" class="bg-[#011c61] hover:bg-[#011c61]/90">
        <Loader2 v-if="isUpdating" class="mr-2 h-4 w-4 animate-spin" />
        <Save v-else class="mr-2 h-4 w-4" /> Enregistrer
      </Button>
    </div>

    <Tabs default-value="general" class="space-y-6">
      <TabsList class="bg-gray-100/50">
        <TabsTrigger value="general" class="gap-2">
          <User class="w-4 h-4" /> Coordonnées
        </TabsTrigger>
        <TabsTrigger value="security" class="gap-2">
          <ShieldCheck class="w-4 h-4" /> Sécurité
        </TabsTrigger>
      </TabsList>

      <TabsContent value="general" class="animate-in fade-in duration-300">
        <Card shadow="sm">
          <CardHeader>
            <CardTitle class="text-lg">Informations Personnelles</CardTitle>
          </CardHeader>
          <CardContent class="grid md:grid-cols-2 gap-4">
            <div class="space-y-1"><Label>Nom</Label><Input v-model="parentData.nom" /></div>
            <div class="space-y-1"><Label>Prénoms</Label><Input v-model="parentData.prenoms" /></div>
            <div class="space-y-1"><Label>Email</Label><Input v-model="parentData.email" type="email" /></div>
            <div class="space-y-1"><Label>Téléphone</Label><Input v-model="parentData.contact" /></div>
            <div class="md:col-span-2 space-y-1"><Label>Adresse de résidence</Label><Input v-model="parentData.adresse" /></div>
          </CardContent>
        </Card>
      </TabsContent>

      <TabsContent value="security" class="animate-in fade-in duration-300">
        <Card shadow="sm">
          <CardHeader>
            <div class="flex items-center gap-2 text-[#011c61] mb-1">
              <KeyRound class="w-5 h-5" />
              <CardTitle class="text-lg">Mot de passe</CardTitle>
            </div>
            <CardDescription>
              Modifiez votre mot de passe pour sécuriser votre accès au portail parent.
            </CardDescription>
          </CardHeader>
          <CardContent class="space-y-4 max-w-md">
            <div class="space-y-1">
              <Label>Mot de passe actuel</Label>
              <Input v-model="securityData.currentPassword" type="password" placeholder="••••••••" />
            </div>
            <hr class="my-4 border-gray-100" />
            <div class="space-y-1">
              <Label>Nouveau mot de passe</Label>
              <Input v-model="securityData.newPassword" type="password" placeholder="••••••••" />
            </div>
            <div class="space-y-1">
              <Label>Confirmer le nouveau mot de passe</Label>
              <Input v-model="securityData.confirmPassword" type="password" placeholder="••••••••" />
            </div>
            
            <div class="pt-2">
              <Button variant="outline" class="text-blue-700 border-blue-200 hover:bg-blue-50">
                Mettre à jour le mot de passe
              </Button>
            </div>
          </CardContent>
        </Card>
      </TabsContent>
    </Tabs>
  </div>
</template>