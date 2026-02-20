<script setup lang="ts">
import { ref, computed } from 'vue';
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table";
import { Icon } from '@iconify/vue';
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';

interface Registration {
  id: string;
  ref: string;
  studentName: string;
  parentName: string;
  type: string;
  grade: string;
  date: string;
  status: 'Confirmé' | 'En attente' | 'Incomplet' | 'Refusé';
  amount: string;
}

const searchQuery = ref('');
const statusFilter = ref('all');

const registrations = ref<Registration[]>([
  { id: '1', ref: 'INS-2026-001', studentName: 'Moussa Diop', parentName: 'Abdou Diop', type: 'Universitaire', grade: 'Licence 1', date: '20-02-2026', status: 'Confirmé', amount: '150.000 FCFA' },
  { id: '2', ref: 'INS-2026-002', studentName: 'Aminata Touré', parentName: 'Ousmane Touré', type: 'Primaire', grade: 'CM2', date: '19-02-2026', status: 'En attente', amount: '45.000 FCFA' },
  { id: '3', ref: 'INS-2026-003', studentName: 'Jean Koffi', parentName: 'Koffi Kouakou', type: 'Secondaire', grade: '3ème', date: '18-02-2026', status: 'Incomplet', amount: '75.000 FCFA' },
  { id: '4', ref: 'INS-2026-004', studentName: 'Fatou Sow', parentName: 'Amadou Sow', type: 'Universitaire', grade: 'Licence 3', date: '18-02-2026', status: 'Refusé', amount: '150.000 FCFA' },
  { id: '5', ref: 'INS-2026-005', studentName: 'Koffi Paul', parentName: 'Koffi Yao', type: 'Primaire', grade: 'CP', date: '17-02-2026', status: 'Confirmé', amount: '45.000 FCFA' },
]);

const filteredRegistrations = computed(() => {
  return registrations.value.filter(reg => {
    const matchesSearch = reg.studentName.toLowerCase().includes(searchQuery.value.toLowerCase()) || 
                         reg.ref.toLowerCase().includes(searchQuery.value.toLowerCase());
    const matchesStatus = statusFilter.value === 'all' || reg.status === statusFilter.value;
    return matchesSearch && matchesStatus;
  });
});

function getStatusClass(status: string) {
  switch (status) {
    case 'Confirmé': return 'bg-success/5 text-green-700 dark:text-green-400 border-green-600/30';
    case 'En attente': return 'bg-warning/5 text-amber-700 dark:text-amber-400 border-amber-600/30';
    case 'Incomplet': return 'bg-orange-500/5 text-orange-700 dark:text-orange-400 border-orange-600/30';
    case 'Refusé': return 'bg-error/5 text-red-700 dark:text-red-400 border-red-600/30';
    default: return 'bg-gray-100 text-gray-700';
  }
}
</script>

<template>
  <div class="p-6 lg:p-10 space-y-8 min-h-screen animate-in fade-in duration-700">
    
    <!-- Header Page -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
      <div>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white flex items-center gap-3">
          Liste des Inscriptions
        </h1>
        <p class="text-gray-500 dark:text-gray-3100 mt-1">
          Gérez l'ensemble des dossiers d'inscription et suivez leur progression.
        </p>
      </div>
      <div class="flex items-center gap-3">
        <Button variant="outline" class="gap-2 border-gray-200 dark:border-white/10">
          <Icon icon="solar:printer-broken" /> Imprimer
        </Button>
        <Button class="gap-2 bg-primary hover:bg-primary/90">
          <Icon icon="solar:user-plus-bold" /> Nouveau Dossier
        </Button>
      </div>
    </div>

    <!-- Filters & Search -->
    <div class="bg-white/70 dark:bg-[#1a1f35]/70 backdrop-blur-xl p-4 rounded-2xl border border-white/40 dark:border-white/5 flex flex-wrap items-center gap-4 shadow-sm">
      <div class="relative flex-1 min-w-[240px]">
        <Icon icon="solar:magnifer-linear" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" />
        <Input 
          v-model="searchQuery"
          placeholder="Rechercher un étudiant ou une référence..." 
          class="pl-10 h-11 bg-transparent border-gray-200 dark:border-white/10 rounded-xl"
        />
      </div>
      
      <div class="flex items-center gap-2">
        <span class="text-sm font-bold text-gray-500 dark:text-gray-400 whitespace-nowrap">Statut :</span>
        <select 
          v-model="statusFilter"
          class="h-11 bg-gray-50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-xl px-4 text-sm font-bold outline-none cursor-pointer focus:border-primary transition-colors"
        >
          <option value="all">Tous les statuts</option>
          <option value="Confirmé">Confirmé</option>
          <option value="En attente">En attente</option>
          <option value="Incomplet">Incomplet</option>
          <option value="Refusé">Refusé</option>
        </select>
      </div>

      <Button variant="ghost" class="h-11 w-11 p-0 rounded-xl border border-gray-200 dark:border-white/10">
        <Icon icon="solar:filter-linear" class="text-xl" />
      </Button>
    </div>

    <!-- Table Container -->
    <div class="bg-white/70 dark:bg-[#1a1f35]/70 backdrop-blur-xl rounded-[2.5rem] overflow-hidden shadow-sm border border-white/40 dark:border-white/5">
      <div class="overflow-x-auto">
        <Table>
          <TableHeader class="bg-gray-100/50 dark:bg-white/3">
            <TableRow class="border-none">
              <TableHead class="pl-8 py-5 text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Réf & Étudiant</TableHead>
              <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Parent / Tuteur</TableHead>
              <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Formation/Grade</TableHead>
              <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Montant</TableHead>
              <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Date</TableHead>
              <TableHead class="text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Statut</TableHead>
              <TableHead class="pr-8 text-right text-[10px] font-extrabold uppercase tracking-[0.2em] text-gray-400 dark:text-gray-300">Actions</TableHead>
            </TableRow>
          </TableHeader>
          <TableBody>
            <TableRow v-for="reg in filteredRegistrations" :key="reg.id" class="border-gray-100 dark:border-white/5 hover:bg-gray-50/50 dark:hover:bg-white/3 transition-all group/row">
              <TableCell class="pl-8 py-5">
                <div class="flex flex-col">
                  <span class="text-[10px] font-black text-primary uppercase tracking-tighter">{{ reg.ref }}</span>
                  <span class="font-bold text-gray-900 dark:text-white text-sm tracking-tight">{{ reg.studentName }}</span>
                </div>
              </TableCell>
              <TableCell class="text-sm font-medium text-gray-600 dark:text-gray-400">{{ reg.parentName }}</TableCell>
              <TableCell>
                <div class="flex flex-col">
                  <span class="text-xs font-bold text-gray-900 dark:text-white">{{ reg.type }}</span>
                  <span class="text-[10px] font-medium text-gray-500">{{ reg.grade }}</span>
                </div>
              </TableCell>
              <TableCell class="text-sm font-black text-gray-900 dark:text-white tabular-nums">{{ reg.amount }}</TableCell>
              <TableCell class="text-xs font-medium text-gray-500 tabular-nums">{{ reg.date }}</TableCell>
              <TableCell>
                <Badge 
                  variant="outline" 
                  :class="['px-3 py-1.5 rounded-full text-[10px] font-black uppercase tracking-wider border-2 flex items-center gap-2 w-fit shadow-md', getStatusClass(reg.status)]"
                >
                  <Icon v-if="reg.status === 'Confirmé'" icon="solar:check-circle-bold" class="text-xs" />
                  <Icon v-else-if="reg.status === 'En attente'" icon="solar:clock-circle-bold" class="text-xs" />
                  <Icon v-else-if="reg.status === 'Incomplet'" icon="solar:info-circle-bold" class="text-xs" />
                  <Icon v-else-if="reg.status === 'Refusé'" icon="solar:close-circle-bold" class="text-xs" />
                  {{ reg.status }}
                </Badge>
              </TableCell>
              <TableCell class="pr-8 text-right">
                <div class="flex items-center justify-end gap-2 text-white">
                  <!-- Actions rapides -->
                  <Button variant="ghost" size="icon" class="h-10 w-10 text-green-700 dark:text-green-400 hover:bg-green-700 hover:text-white border border-green-600/30 bg-green-500/5 transition-all shadow-sm" title="Valider">
                    <Icon icon="solar:check-circle-bold" class="text-xl" />
                  </Button>
                  <Button variant="ghost" size="icon" class="h-10 w-10 text-red-700 dark:text-red-400 hover:bg-red-700 hover:text-white border border-red-600/30 bg-red-500/5 transition-all shadow-sm" title="Refuser">
                    <Icon icon="solar:close-circle-bold" class="text-xl" />
                  </Button>
                  
                  <DropdownMenu>
                    <DropdownMenuTrigger as-child>
                      <Button variant="ghost" size="icon" class="h-8 w-8 text-gray-400">
                        <Icon icon="solar:menu-dots-bold" class="text-lg" />
                      </Button>
                    </DropdownMenuTrigger>
                    <DropdownMenuContent align="end" class="w-48 p-2 rounded-xl">
                      <DropdownMenuLabel class="text-[10px] font-black uppercase text-gray-400 tracking-widest">Options</DropdownMenuLabel>
                      <DropdownMenuItem class="gap-3 rounded-lg py-2.5">
                        <Icon icon="solar:eye-linear" class="text-lg" /> Détails
                      </DropdownMenuItem>
                      <DropdownMenuItem class="gap-3 rounded-lg py-2.5">
                        <Icon icon="solar:pen-linear" class="text-lg" /> Modifier
                      </DropdownMenuItem>
                      <DropdownMenuSeparator />
                      <DropdownMenuItem class="gap-3 rounded-lg py-2.5 text-error focus:text-error">
                        <Icon icon="solar:trash-bin-trash-linear" class="text-lg" /> Supprimer
                      </DropdownMenuItem>
                    </DropdownMenuContent>
                  </DropdownMenu>
                </div>
              </TableCell>
            </TableRow>
            <TableRow v-if="filteredRegistrations.length === 0">
              <TableCell colspan="7" class="py-20 text-center">
                <div class="flex flex-col items-center gap-3">
                  <Icon icon="solar:document-medicine-linear" class="text-5xl text-gray-300" />
                  <p class="text-gray-500 font-bold">Aucun dossier trouvé</p>
                </div>
              </TableCell>
            </TableRow>
          </TableBody>
        </Table>
      </div>
      
      <!-- Pagination Placeholder -->
      <div class="p-6 border-t border-gray-100 dark:border-white/5 flex items-center justify-between">
        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Affichage de 5 sur 1,284 dossiers</p>
        <div class="flex gap-2">
          <Button variant="outline" size="sm" class="h-8 shadow-xs disabled:opacity-30" disabled>Précédent</Button>
          <Button variant="outline" size="sm" class="h-8 shadow-xs border-primary text-primary font-bold">1</Button>
          <Button variant="outline" size="sm" class="h-8 shadow-xs">2</Button>
          <Button variant="outline" size="sm" class="h-8 shadow-xs">Suivant</Button>
        </div>
      </div>
    </div>

  </div>
</template>
