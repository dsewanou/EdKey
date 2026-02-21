<script setup lang="ts">
import { ref } from 'vue'
import { Card, CardContent } from '@/components/ui/card'
import { Button } from '@/components/ui/button'
import { User, GraduationCap, ChevronRight } from 'lucide-vue-next'
import { useRouter } from 'vue-router'

const router = useRouter()

// Liste fictive de tes enfants
const students = ref([
  { id: 1, nom: 'Houessou', prenoms: 'Marc', classe: '3ème', status: 'Inscrit' },
  { id: 2, nom: 'Houessou', prenoms: 'Lucie', classe: 'CM2', status: 'En attente' }
])

const editStudent = (id: number) => {
  router.push(`/profile/student/${id}`)
}
</script>

<template>
  <div class="max-w-4xl mx-auto py-8 px-4">
    <h1 class="text-2xl font-bold text-[#011c61] mb-6">Mes Apprenants</h1>
    
    <div class="grid gap-4">
      <Card v-for="student in students" :key="student.id" class="hover:shadow-md transition-shadow">
        <CardContent class="p-4 flex items-center justify-between">
          <div class="flex items-center gap-4">
            <div class="h-12 w-12 bg-blue-50 rounded-full flex items-center justify-center text-[#011c61]">
              <User class="h-6 w-6" />
            </div>
            <div>
              <h3 class="font-bold text-gray-900">{{ student.prenoms }} {{ student.nom }}</h3>
              <div class="flex items-center gap-2 text-sm text-gray-500">
                <GraduationCap class="h-4 w-4" /> {{ student.classe }}
              </div>
            </div>
          </div>
          <Button @click="editStudent(student.id)" variant="outline" class="gap-2">
            Modifier le dossier <ChevronRight class="h-4 w-4" />
          </Button>
        </CardContent>
      </Card>
    </div>
  </div>
</template>