<script setup lang="ts">
import { ref, computed } from 'vue'
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@/components/ui/tabs'
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card'
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Textarea } from '@/components/ui/textarea'
import config from '../auth/data/formConfig.json'

const studentData = ref({
  nom: 'Houessou',
  prenoms: 'Marc',
  niveauEtude: 'secondaire',
  classeSouhaitee: '3ème',
  donneesMedicales: 'Aucune'
})

const availableClasses = computed(() => {
  const level = studentData.value.niveauEtude as keyof typeof config.classes
  return config.classes[level] || []
})
</script>

<template>
  <div class="max-w-4xl mx-auto py-8 px-4">
    <div class="mb-6 flex items-center gap-4">
       <button @click="$router.back()" class="text-sm text-gray-500 hover:text-[#011c61]">← Retour</button>
       <h1 class="text-2xl font-bold text-[#011c61]">Dossier de {{ studentData.prenoms }}</h1>
    </div>

    <Tabs default-value="academic">
      <TabsList class="mb-6">
        <TabsTrigger value="academic">Scolarité</TabsTrigger>
        <TabsTrigger value="health">Santé & Urgence</TabsTrigger>
      </TabsList>

      <TabsContent value="academic">
        <Card>
          <CardHeader><CardTitle>Informations Académiques</CardTitle></CardHeader>
          <CardContent class="space-y-4">
            <div class="grid md:grid-cols-2 gap-4">
              <div class="space-y-1">
                <Label>Niveau d'étude</Label>
                <select v-model="studentData.niveauEtude" class="w-full h-10 border rounded-md px-3 text-sm">
                  <option v-for="l in config.levels" :key="l.value" :value="l.value">{{ l.label }}</option>
                </select>
              </div>
              <div class="space-y-1">
                <Label>Classe</Label>
                <select v-model="studentData.classeSouhaitee" class="w-full h-10 border rounded-md px-3 text-sm">
                  <option v-for="c in availableClasses" :key="c" :value="c">{{ c }}</option>
                </select>
              </div>
            </div>
          </CardContent>
        </Card>
      </TabsContent>

      <TabsContent value="health">
        <Card>
          <CardHeader><CardTitle>Informations Médicales</CardTitle></CardHeader>
          <CardContent>
            <Label>Allergies ou contre-indications</Label>
            <Textarea v-model="studentData.donneesMedicales" class="mt-2" />
          </CardContent>
        </Card>
      </TabsContent>
    </Tabs>
  </div>
</template>