<script setup lang="ts">
import { ref, computed } from 'vue';
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table";
import { Icon } from '@iconify/vue';
import VueApexCharts from "vue3-apexcharts";

interface Registration {
  id: string;
  studentName: string;
  type: 'Primaire' | 'Secondaire' | 'Universitaire';
  date: string;
  status: 'Confirmé' | 'En attente' | 'Incomplet';
  amount: string;
}

const registrations = ref<Registration[]>([
  { id: '1', studentName: 'Moussa Diop', type: 'Universitaire', date: '20-02-2026', status: 'Confirmé', amount: '150.000 FCFA' },
  { id: '2', studentName: 'Aminata Touré', type: 'Primaire', date: '19-02-2026', status: 'En attente', amount: '45.000 FCFA' },
  { id: '3', studentName: 'Jean Koffi', type: 'Secondaire', date: '18-02-2026', status: 'Incomplet', amount: '75.000 FCFA' },
  { id: '4', studentName: 'Fatou Sow', type: 'Universitaire', date: '18-02-2026', status: 'Confirmé', amount: '150.000 FCFA' },
  { id: '5', studentName: 'Koffi Paul', type: 'Primaire', date: '17-02-2026', status: 'Confirmé', amount: '45.000 FCFA' },
]);

const stats = [
  { title: 'Total Inscriptions', value: '1,284', icon: 'solar:user-broken', color: 'bg-primary/10 text-primary', trend: '+12.5%' },
  { title: 'Nouveaux ce mois', value: '145', icon: 'solar:user-plus-broken', color: 'bg-secondary/10 text-secondary', trend: '+5.2%' },
  { title: 'Revenue Total', value: '4.2M', icon: 'solar:wallet-broken', color: 'bg-success/10 text-success', trend: '+18.7%' },
  { title: 'En Attente', value: '23', icon: 'solar:clock-circle-broken', color: 'bg-warning/10 text-warning', trend: '-2.4%' },
];

const chartOptions = {
  chart: {
    height: 350,
    type: 'area',
    toolbar: { show: false },
    fontFamily: 'Inter, sans-serif',
  },
  dataLabels: { enabled: false },
  stroke: { curve: 'smooth', width: 3 },
  colors: ['#5d87ff'],
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.45,
      opacityTo: 0.05,
      stops: [20, 100, 100, 100]
    }
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    axisBorder: { show: false },
    axisTicks: { show: false },
  },
  yaxis: { show: false },
  grid: { borderColor: 'rgba(0,0,0,0.05)' },
  tooltip: { theme: 'dark' },
};

const series = [{
  name: 'Inscriptions',
  data: [30, 40, 35, 50, 49, 60, 70, 91, 125, 95, 110, 145]
}];

function getStatusBadgeClass(status: string) {
  switch (status) {
    case 'Confirmé': return 'bg-success/10 text-success border-success/20';
    case 'En attente': return 'bg-warning/10 text-warning border-warning/20';
    case 'Incomplet': return 'bg-error/10 text-error border-error/20';
    default: return 'bg-gray-100 text-gray-600';
  }
}
</script>

<template>
  <div class="p-6 lg:p-10 space-y-8 bg-gray-50/50 dark:bg-transparent min-h-screen animate-in fade-in duration-700">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
      <div class="animate-in slide-in-from-left duration-700">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white flex items-center gap-3">
          <div class="relative">
            <div class="absolute inset-0 bg-primary/30 blur-xl rounded-full"></div>
            <Icon icon="solar:user-speak-bold-duotone" class="text-primary text-4xl relative z-10" />
          </div>
          Gestion des Inscriptions
        </h1>
        <p class="text-gray-500 dark:text-gray-300 mt-1">
          Suivez et gérez les inscriptions scolaires de votre établissement en temps réel.
        </p>
      </div>
      <div class="flex items-center gap-3 animate-in slide-in-from-right duration-700">
        <Button variant="outline" class="hidden sm:flex gap-2 border-gray-200 dark:border-white/10 hover:bg-gray-100 dark:hover:bg-white/5 transition-all">
          <Icon icon="solar:printer-broken" /> Exporter
        </Button>
        <Button class="gap-2 shadow-lg shadow-primary/25 bg-linear-to-r from-primary to-blue-600 hover:scale-105 transition-transform">
          <Icon icon="solar:user-plus-bold" /> Nouvelle Inscription
        </Button>
      </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div 
        v-for="(stat, idx) in stats" 
        :key="stat.title"
        class="group relative bg-white/70 dark:bg-[#1a1f35]/70 backdrop-blur-xl p-6 rounded-[2rem] shadow-sm border border-white/40 dark:border-white/5 transition-all hover:shadow-xl hover:-translate-y-1 animate-in zoom-in-95 duration-500"
        :style="{ animationDelay: `${idx * 100}ms` }"
      >
        <div class="flex items-center justify-between mb-4">
          <div class="relative">
            <div :class="['absolute inset-0 blur-lg rounded-full opacity-40 group-hover:opacity-100 transition-opacity', stat.color.replace('bg-', 'bg-').split(' ')[0]]"></div>
            <div :class="['w-12 h-12 rounded-2xl flex items-center justify-center text-2xl relative z-10', stat.color]">
              <Icon :icon="stat.icon" />
            </div>
          </div>
          <span :class="['text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider', stat.trend.startsWith('+') ? 'bg-success/10 text-success' : 'bg-error/10 text-error']">
            {{ stat.trend }}
          </span>
        </div>
        <h3 class="text-gray-500 dark:text-gray-300 text-[11px] font-bold uppercase tracking-widest">{{ stat.title }}</h3>
        <p class="text-3xl font-extrabold text-gray-900 dark:text-white mt-1 tabular-nums">{{ stat.value }}</p>
      </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-12 gap-8">
      
      <!-- Chart Card -->
      <div class="col-span-12 lg:col-span-8 bg-white/70 dark:bg-[#1a1f35]/70 backdrop-blur-xl rounded-[2.5rem] p-8 shadow-sm border border-white/40 dark:border-white/5 overflow-hidden animate-in slide-in-from-bottom-8 duration-700 delay-300">
        <div class="flex items-center justify-between mb-8">
          <div>
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">Évolution des Inscriptions</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Statistiques mensuelles pour l'année en cours</p>
          </div>
          <select class="bg-gray-100/50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-xl text-xs font-bold px-4 py-2 outline-none cursor-pointer hover:border-primary transition-colors">
            <option>Année 2025-2026</option>
            <option>Année 2024-2025</option>
          </select>
        </div>
        <div id="chart" class="-ml-4 h-[350px]">
          <VueApexCharts
            type="area"
            height="350"
            :options="chartOptions"
            :series="series"
          />
        </div>
      </div>

      <!-- Quick Actions / Tasks -->
      <div class="col-span-12 lg:col-span-4 space-y-6 flex flex-col justify-between">
        <div class="bg-linear-to-br from-[#4158D0] via-[#C850C0] to-[#FFCC70] rounded-[2.5rem] p-8 text-white shadow-2xl shadow-purple-500/20 relative overflow-hidden group animate-in slide-in-from-right-8 duration-700 delay-400">
          <div class="relative z-10">
            <h2 class="text-2xl font-extrabold mb-2">Actions Rapides</h2>
            <p class="text-white/80 text-sm mb-6">Optimisez votre gestion quotidienne.</p>
            <div class="grid grid-cols-2 gap-4">
              <button 
                v-for="btn in [{i:'solar:document-text-broken', t:'Formulaires'}, {i:'solar:folder-2-broken', t:'Dossiers'}, {i:'solar:settings-bold-duotone', t:'Paramètres'}, {i:'solar:chat-round-dots-broken', t:'Support'}]" 
                :key="btn.t"
                class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 rounded-2xl p-5 flex flex-col items-center gap-3 transition-all hover:scale-105 active:scale-95 group/btn"
              >
                <Icon :icon="btn.i" class="text-3xl group-hover/btn:rotate-12 transition-transform" />
                <span class="text-[10px] font-bold uppercase tracking-widest">{{ btn.t }}</span>
              </button>
            </div>
          </div>
          <!-- Animated Background Elements -->
          <div class="absolute -top-10 -right-10 w-48 h-48 bg-white/20 rounded-full blur-3xl animate-pulse"></div>
          <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-purple-500/30 rounded-full blur-2xl"></div>
        </div>

        <div class="bg-white/70 dark:bg-[#1a1f35]/70 backdrop-blur-xl rounded-[2.5rem] p-8 shadow-sm border border-white/40 dark:border-white/5 animate-in slide-in-from-right-8 duration-700 delay-500">
          <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-primary shadow-[0_0_10px_rgba(var(--primary-rgb),0.5)]"></div>
            Distribution par Grade
          </h2>
          <div class="space-y-6">
            <div v-for="(val, grade) in {'Primaire': 45, 'Secondaire': 35, 'Universitaire': 20}" :key="grade" class="space-y-2">
              <div class="flex justify-between text-[11px] font-bold uppercase tracking-wider">
                <span class="text-gray-500 dark:text-gray-300">{{ grade }}</span>
                <span class="text-gray-900 dark:text-white">{{ val }}%</span>
              </div>
              <div class="h-2 w-full bg-gray-100 dark:bg-white/5 rounded-full overflow-hidden p-[2px]">
                <div 
                  class="h-full bg-linear-to-r from-primary to-blue-400 rounded-full transition-all duration-1000 ease-out shadow-[0_0_8px_rgba(var(--primary-rgb),0.3)]"
                  :style="{ width: val + '%' }"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Registrations Table -->
      <div class="col-span-12 bg-white/70 dark:bg-[#1a1f35]/70 backdrop-blur-xl rounded-[2.5rem] overflow-hidden shadow-sm border border-white/40 dark:border-white/5 animate-in slide-in-from-bottom-8 duration-700 delay-600">
        <div class="p-8 pb-4 flex items-center justify-between">
          <div>
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">Inscriptions Récentes</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Liste des dernières demandes traitées</p>
          </div>
          <Button variant="ghost" size="sm" class="text-primary font-bold hover:bg-primary/10">
            Explorer tout <Icon icon="solar:arrow-right-broken" class="ml-2" />
          </Button>
        </div>
        <div class="overflow-x-auto">
          <Table>
            <TableHeader class="bg-gray-100/50 dark:bg-white/3">
              <TableRow class="border-none">
                <TableHead class="pl-8 py-5 text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Étudiant</TableHead>
                <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Type</TableHead>
                <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Date</TableHead>
                <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Montant</TableHead>
                <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Statut</TableHead>
                <TableHead class="pr-8 text-right text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Actions</TableHead>
              </TableRow>
            </TableHeader>
            <TableBody>
              <TableRow v-for="reg in registrations" :key="reg.id" class="border-gray-100 dark:border-white/5 hover:bg-gray-50/50 dark:hover:bg-white/3 transition-all group/row">
                <TableCell class="pl-8 py-5">
                  <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-linear-to-br from-primary/20 to-primary/5 text-primary flex items-center justify-center font-black text-sm border border-primary/10 group-hover/row:scale-110 transition-transform">
                      {{ reg.studentName.charAt(0) }}
                    </div>
                    <span class="font-bold text-gray-900 dark:text-white text-sm tracking-tight">{{ reg.studentName }}</span>
                  </div>
                </TableCell>
                <TableCell>
                  <span class="text-xs font-semibold px-2.5 py-1 rounded-lg bg-gray-100 dark:bg-white/5 text-gray-600 dark:text-gray-400">{{ reg.type }}</span>
                </TableCell>
                <TableCell class="text-xs font-medium text-gray-500 tabular-nums">{{ reg.date }}</TableCell>
                <TableCell class="text-sm font-black text-gray-900 dark:text-white tabular-nums">{{ reg.amount }}</TableCell>
                <TableCell>
                  <Badge 
                    variant="outline" 
                    :class="['px-3 py-1 rounded-full text-[9px] font-black uppercase tracking-wider border-2', getStatusBadgeClass(reg.status)]"
                  >
                    {{ reg.status }}
                  </Badge>
                </TableCell>
                <TableCell class="pr-8 text-right">
                  <button class="w-8 h-8 rounded-full flex items-center justify-center text-gray-400 hover:bg-primary/10 hover:text-primary transition-all">
                    <Icon icon="solar:menu-dots-bold" class="text-lg" />
                  </button>
                </TableCell>
              </TableRow>
            </TableBody>
          </Table>
        </div>
      </div>

    </div>
  </div>
</template>

<style scoped>
/* Focus focus on typography and subtle effects */
:deep(.apexcharts-canvas) {
  filter: drop-shadow(0 0 10px rgba(93, 135, 255, 0.1));
}

:deep(.apexcharts-tooltip) {
  border-radius: 1rem !important;
  border: none !important;
  box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}
</style>
