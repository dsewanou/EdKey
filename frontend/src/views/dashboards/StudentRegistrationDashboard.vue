<script setup lang="ts">
import { ref } from 'vue';
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from '@/components/ui/card';
import { Icon } from '@iconify/vue';
import VueApexCharts from "vue3-apexcharts";

// Données spécifiques à l'étudiant connecté
const studentInfo = ref({
  name: 'Moussa Diop',
  grade: '3ème',
  matricule: 'EDK-2026-045',
  status: 'Confirmé', // Confirmé, En attente, Incomplet
  nextEvent: 'Rentrée Solennelle',
  eventDate: '15 Sept 2026'
});

const myStats = [
  { title: 'Moyenne Générale', value: '14.5', icon: 'solar:ranking-broken', color: 'bg-primary/10 text-primary', trend: 'Rang: 4ème' },
  { title: 'Absences', value: '02', icon: 'solar:calendar-minus-broken', color: 'bg-error/10 text-error', trend: 'Justifiées' },
  { title: 'Cours suivis', value: '85%', icon: 'solar:play-circle-broken', color: 'bg-success/10 text-success', trend: 'Excellent' },
  { title: 'Documents', value: '04', icon: 'solar:folder-with-files-broken', color: 'bg-warning/10 text-warning', trend: 'À télécharger' },
];

const gradeSeries = [{
  name: 'Mes Notes',
  data: [12, 15, 14, 18, 13, 16]
}];

const gradeOptions = {
  chart: { type: 'radar', toolbar: { show: false } },
  xaxis: { categories: ['Maths', 'Français', 'Anglais', 'Physique', 'SVT', 'Sport'] },
  colors: ['#5d87ff'],
  fill: { opacity: 0.4 },
  markers: { size: 4 }
};

const timeline = [
  { title: 'Inscription validée', date: '20 Fév 2026', desc: 'Votre dossier est désormais complet.', icon: 'solar:check-circle-bold', color: 'text-success' },
  { title: 'Paiement reçu', date: '18 Fév 2026', desc: 'Tranche 1: 150.000 FCFA confirmée.', icon: 'solar:wad-of-money-bold', color: 'text-primary' },
  { title: 'Dossier soumis', date: '15 Fév 2026', desc: 'En attente de vérification par l\'administration.', icon: 'solar:document-bold', color: 'text-warning' },
];
</script>

<template>
  <div class="p-6 lg:p-10 space-y-8 bg-gray-50/50 min-h-screen animate-in fade-in duration-700">
    

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
      <div class="flex items-center gap-5">
        <div class="relative group">
          <div class="absolute inset-0 bg-primary/20 blur-xl rounded-full group-hover:bg-primary/30 transition-all"></div>
          <div class="w-20 h-20 rounded-[2rem] bg-linear-to-br from-primary to-blue-600 flex items-center justify-center text-white text-3xl font-black relative z-10 shadow-xl">
            {{ studentInfo.name.charAt(0) }}
          </div>
        </div>
        <div>
          <h1 class="text-3xl font-black text-gray-900 tracking-tight">Bonjour, {{ studentInfo.name }} ! 👋</h1>
          <div class="flex items-center gap-3 mt-1">
            <Badge variant="secondary" class="bg-primary/10 text-primary border-none">{{ studentInfo.matricule }}</Badge>
            <span class="text-gray-500 text-sm font-medium">• {{ studentInfo.grade }}</span>
          </div>
        </div>
      </div>
      <div class="flex flex-col items-end">
        <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
          <div class="text-right">
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Prochain événement</p>
            <p class="font-bold text-[#011c61]">{{ studentInfo.nextEvent }}</p>
          </div>
          <div class="bg-blue-50 text-blue-600 p-2 rounded-xl">
            <Icon icon="solar:calendar-mark-bold-duotone" class="text-2xl" />
          </div>
        </div>
      </div>
    </div>



      <div class="col-span-12 bg-[#011c61] rounded-[2.5rem] p-8 text-white relative overflow-hidden shadow-2xl">
        <div class="relative z-10">
          <h2 class="text-2xl font-black mb-8 text-white ">Suivi de mon dossier</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <div class="hidden md:block absolute top-6 left-0 w-full h-0.5 bg-white/10"></div>
            
            <div v-for="step in timeline" :key="step.title" class="relative">
              <div :class="['w-12 h-12 rounded-full bg-white flex items-center justify-center mb-4 relative z-10 shadow-lg', step.color]">
                <Icon :icon="step.icon" class="text-2xl" />
              </div>
              <p class="font-black text-lg">{{ step.title }}</p>
              <p class="text-white/60 text-sm mb-1">{{ step.date }}</p>
              <p class="text-white/40 text-xs">{{ step.desc }}</p>
            </div>
          </div>
        </div>
        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>
      </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <Card v-for="stat in myStats" :key="stat.title" class="rounded-[2rem] border-none shadow-sm hover:shadow-md transition-all">
        <CardContent class="p-6">
          <div class="flex justify-between items-start mb-4">
            <div :class="['w-12 h-12 rounded-2xl flex items-center justify-center text-2xl', stat.color]">
              <Icon :icon="stat.icon" />
            </div>
            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ stat.trend }}</span>
          </div>
          <p class="text-gray-500 text-xs font-bold uppercase tracking-wider">{{ stat.title }}</p>
          <p class="text-3xl font-black text-gray-900 mt-1">{{ stat.value }}</p>
        </CardContent>
      </Card>
    </div>

    <div class="grid grid-cols-12 gap-8">
      <div class="col-span-12 lg:col-span-5 bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100">
        <h2 class="text-xl font-bold text-gray-900 mb-2">Analyse des Compétences</h2>
        <p class="text-sm text-gray-500 mb-6">Visualisez vos points forts par matière.</p>
        <VueApexCharts type="radar" height="300" :options="gradeOptions" :series="gradeSeries" />
      </div>

      <div class="col-span-12 lg:col-span-7 bg-white rounded-[2.5rem] p-8 shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-6">
          <h2 class="text-xl font-bold text-gray-900">Mes Documents</h2>
          <Button variant="ghost" class="text-primary font-bold">Voir tout</Button>
        </div>
        <div class="space-y-4">
          <div v-for="doc in ['Certificat de Scolarité', 'Reçu Tranche 1', 'Emploi du temps', 'Règlement Intérieur']" :key="doc" class="group flex items-center justify-between p-4 rounded-2xl hover:bg-gray-50 transition-all border border-transparent hover:border-gray-100">
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-xl bg-gray-100 flex items-center justify-center text-gray-500 group-hover:bg-primary/10 group-hover:text-primary transition-colors">
                <Icon icon="solar:file-download-bold-duotone" class="text-xl" />
              </div>
              <span class="font-bold text-gray-700">{{ doc }}</span>
            </div>
            <Button size="sm" variant="outline" class="rounded-xl border-gray-200">Télécharger</Button>
          </div>
        </div>
      </div>

    </div>
  </div>
</template>