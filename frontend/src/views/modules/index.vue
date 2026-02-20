<script setup lang="ts">
import { SidebarProvider } from "@/components/ui/sidebar";
import LayoutVerticalHeader from "@/layouts/full/vertical-header/VerticalHeader.vue";
import { useRouter } from "vue-router";
import { computed } from "vue";

const router = useRouter();

interface Module {
  icon: string;
  title: string;
  description: string;
  route?: string;
  active: boolean;
}

const modules: Module[] = [
  {
    icon: "bi bi-person-check",
    title: "Inscriptions scolaires et universitaires",
    description: "Digitalisation complète des formalités d'inscription et de réinscription.",
    route: "/authentication/register",
    active: true,
  },
  {
    icon: "bi bi-graph-up-arrow",
    title: "Performance de gestion des établissements",
    description: "Outils de pilotage avancés pour optimiser la performance opérationnelle et stratégique.",
    active: false,
  },
  {
    icon: "bi bi-calendar3",
    title: "Emplois du temps et ressources",
    description: "Gestion intelligente des plannings, des salles et des ressources matérielles.",
    active: false,
  },
  {
    icon: "bi bi-map",
    title: "Administration de la carte scolaire & universitaire",
    description: "Gestion géographique optimisée pour tous les ordres d'enseignement.",
    active: false,
  },
  {
    icon: "bi bi-bell",
    title: "Correspondances & Notifications",
    description: "Communication instantanée avec les parents et étudiants via alertes et messages.",
    active: false,
  },
  {
    icon: "bi bi-person-plus",
    title: "Gestion des admissions universitaires",
    description: "Processus numérique de sélection et d'admission des nouveaux étudiants.",
    active: false,
  },
  {
    icon: "bi bi-laptop",
    title: "eLearning / eClassroom",
    description: "Enseignement à distance et classes virtuelles pour une éducation moderne.",
    active: false,
  },
  {
    icon: "bi bi-pie-chart",
    title: "Élaboration de Statistiques",
    description: "Analyse détaillée des flux et des performances pour une gestion éclairée.",
    active: false,
  },
  {
    icon: "bi bi-box-seam",
    title: "Comptabilité matérielle",
    description: "Inventaire et suivi rigoureux du patrimoine mobilier et immobilier.",
    active: false,
  },
  {
    icon: "bi bi-clipboard-check",
    title: "Acquisition des compétences et évaluations",
    description: "Suivi précis des acquis pour tous les niveaux, du primaire au supérieur.",
    active: false,
  },
  {
    icon: "bi bi-people",
    title: "Gestion de la vie Scolaire & Universitaire",
    description: "Suivi de l'assiduité, de la discipline et de l'ambiance au sein des campus.",
    active: false,
  },
  {
    icon: "bi bi-house-door",
    title: "Gestion des Établissements Privés",
    description: "Suivi et régulation des Établissements Privés d'Enseignement Supérieur.",
    active: false,
  },
  {
    icon: "bi bi-person-workspace",
    title: "Portail des enseignants",
    description: "Espace collaboratif pour la saisie des notes et le suivi pédagogique.",
    active: false,
  },
  {
    icon: "bi bi-mortarboard",
    title: "Portail des apprenants",
    description: "Accès centralisé aux cours, résultats et ressources pour tous les élèves et étudiants.",
    active: false,
  },
  {
    icon: "bi bi-card-heading",
    title: "Carte Universitaire",
    description: "Émission et gestion des cartes d'étudiants et d'enseignants multi-services.",
    active: false,
  },
  {
    icon: "bi bi-building",
    title: "Résidences Universitaires",
    description: "Attribution et gestion optimisée de l'hébergement en résidences universitaires.",
    active: false,
  },
  {
    icon: "bi bi-journal-bookmark",
    title: "Gestion des Curricula",
    description: "Planification et structuration complète des programmes d'enseignement.",
    active: false,
  },
  {
    icon: "bi bi-journal-check",
    title: "Délivrance des actes scolaires",
    description: "Automatisation de l'édition et de la délivrance des bulletins et diplômes scolaires.",
    active: false,
  },
  {
    icon: "bi bi-file-earmark-check",
    title: "Actes Universitaires",
    description: "Délivrance, équivalence et authentification sécurisée des actes académiques.",
    active: false,
  },
  {
    icon: "bi bi-robot",
    title: "Intégration de l'IA",
    description: "Automatisation intelligente et analyses prédictives pour assister la prise de décision.",
    active: false,
  },
  {
    icon: "bi bi-hdd-network",
    title: "Intégration aux systèmes",
    description: "Connectivité fluide avec des outils tiers et APIs externes pour un écosystème unifié.",
    active: false,
  },
  {
    icon: "bi bi-shield-lock",
    title: "Gestion de la Sécurité et de l'Audit",
    description: "Couches de sécurité robustes et traçabilité complète des activités.",
    active: false,
  },
  {
    icon: "bi bi-paperclip",
    title: "Gestion des documents & pièces jointes",
    description: "Système de gestion documentaire avancé pour le stockage et le partage sécurisé.",
    active: false,
  },
  {
    icon: "bi bi-cpu",
    title: "Administration de la plateforme",
    description: "Pilotage centralisé et configuration avancée pour une gestion totale de l'écosystème.",
    active: false,
  },
];

const activeCount = computed(() => modules.filter((m) => m.active).length);
const totalCount = computed(() => modules.length);

function handleModuleClick(mod: Module) {
  if (mod.active && mod.route) {
    router.push(mod.route);
  }
}
</script>

<template>
  <SidebarProvider>
    <div class="flex w-full min-h-screen flex-col">
      <div class="w-full flex flex-col min-h-screen bg-gray-50 dark:bg-[#0f1117]">

        <LayoutVerticalHeader />

        <main class="flex-1">

          <!-- Hero Banner -->
          <div class="relative overflow-hidden" style="background: linear-gradient(135deg, #1565C0 0%, #1976D2 30%, #42A5F5 70%, #1E88E5 100%);">
            <!-- Decorative blobs -->
            <div class="absolute -top-16 -right-16 w-72 h-72 rounded-full bg-white/5 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-80 h-80 rounded-full bg-white/5 blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-white/3 blur-3xl"></div>

            <div class="relative container mx-auto px-6 py-12">
              <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                <!-- Title area -->
                <div>
                  <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 text-white/90 text-xs font-semibold uppercase tracking-widest px-3 py-1.5 rounded-full mb-4">
                    <i class="bi bi-grid-3x3-gap"></i>
                    Tableau de bord des modules
                  </div>
                  <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight">
                    Modules <span class="text-white/70">EdKey</span>
                  </h1>
                  <p class="text-white/70 mt-2 text-base max-w-lg">
                    Votre écosystème éducatif numérique complet. Accédez aux modules disponibles et découvrez ceux à venir.
                  </p>
                </div>

                <!-- Stats cards -->
                <div class="flex gap-4 shrink-0">
                  <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-5 py-4 text-center min-w-[110px]">
                    <div class="text-3xl font-bold text-white">{{ activeCount }}</div>
                    <div class="text-white/70 text-xs mt-1 font-medium">Disponible<span v-if="activeCount > 1">s</span></div>
                  </div>
                  <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl px-5 py-4 text-center min-w-[110px]">
                    <div class="text-3xl font-bold text-white">{{ totalCount }}</div>
                    <div class="text-white/70 text-xs mt-1 font-medium">Total modules</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content area -->
          <div class="container mx-auto px-6 py-8">

            <!-- Legend -->
            <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mb-7">
              <div class="flex items-center gap-2">
                <span class="inline-flex items-center justify-center w-5 h-5 rounded-full" style="background-color: #1976D2/15; background: rgba(25, 118, 210, 0.15);">
                  <span class="w-2 h-2 rounded-full" style="background-color: #1976D2;"></span>
                </span>
                <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Module actif</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-gray-200 dark:bg-gray-700">
                  <span class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-500"></span>
                </span>
                <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Module à venir</span>
              </div>
            </div>

            <!-- Modules Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
              <div
                v-for="(mod, index) in modules"
                :key="index"
                :class="[
                  'group relative rounded-2xl border-2 flex flex-col gap-4 p-5 transition-all duration-300',
                  mod.active
                    ? 'bg-white dark:bg-[#1a1f35] shadow-lg cursor-pointer hover:shadow-xl hover:-translate-y-1'
                    : 'bg-white dark:bg-[#151820] border-gray-200 dark:border-gray-700 cursor-default'
                ]"
                @click="handleModuleClick(mod)"
              >
                <!-- Top row: icon + badge -->
                <div class="flex items-start justify-between">
                  <!-- Icon -->
                  <div
                    :class="[
                      'w-12 h-12 rounded-xl flex items-center justify-center text-xl transition-all duration-300',
                      mod.active
                        ? 'group-hover:scale-110'
                        : 'bg-gradient-to-br from-gray-100 to-gray-50 dark:from-gray-800 dark:to-gray-800/50 text-gray-400 dark:text-gray-500'
                    ]"
                    :style="mod.active ? 'background: rgba(25, 118, 210, 0.15); color: #1976D2;' : ''"
                  >
                    <i :class="mod.icon"></i>
                  </div>

                  <!-- Badge -->
                  <span
                    v-if="mod.active"
                    class="inline-flex items-center gap-1 text-[10px] font-bold uppercase tracking-wider bg-primary/10 dark:bg-primary/20 text-primary border border-primary/30 dark:border-primary/40 px-2.5 py-1 rounded-full"
                  >
                    <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                    Disponible
                  </span>
                </div>

                <!-- Content -->
                <div class="flex-1">
                  <h3
                    :class="[
                      'text-sm font-semibold leading-snug mb-1.5',
                      mod.active
                        ? 'text-gray-900 dark:text-white'
                        : 'text-gray-700 dark:text-gray-300'
                    ]"
                  >
                    {{ mod.title }}
                  </h3>
                  <p
                    :class="[
                      'text-xs leading-relaxed',
                      mod.active
                        ? 'text-gray-500 dark:text-gray-400'
                        : 'text-gray-500 dark:text-gray-400'
                    ]"
                  >
                    {{ mod.description }}
                  </p>
                </div>

                <!-- CTA for active modules -->
                <div
                  v-if="mod.active"
                  class="flex items-center justify-between pt-3 border-t border-primary/10"
                >
                  <span class="text-xs text-gray-400 dark:text-gray-500">Cliquer pour accéder</span>
                  <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-primary group-hover:translate-x-1 transition-transform duration-200">
                    Accéder <i class="bi bi-arrow-right-short text-base leading-none"></i>
                  </span>
                </div>

                <!-- Glow ring -->
                <div
                  :class="[
                    'absolute inset-0 rounded-2xl ring-1 ring-inset transition-all duration-300 pointer-events-none',
                    mod.active
                      ? 'ring-primary/20 group-hover:ring-primary/50'
                      : 'ring-gray-100 dark:ring-gray-700/50'
                  ]"
                ></div>
              </div>
            </div>

          </div>
        </main>

        <!-- Footer -->
        <footer class="mt-auto bg-white dark:bg-[#0f1117] border-t border-gray-200 dark:border-gray-800">
          <div class="container mx-auto px-6 py-7">
            <div class="flex flex-col md:flex-row items-center justify-between gap-5">

              <!-- Brand -->
              <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-primary to-blue-600 flex items-center justify-center shadow-lg shadow-primary/30">
                  <i class="bi bi-mortarboard-fill text-white text-base"></i>
                </div>
                <div>
                  <span class="font-bold text-gray-900 dark:text-white text-base tracking-tight">EdKey</span>
                  <p class="text-[11px] text-gray-400 dark:text-gray-500 -mt-0.5">Plateforme éducative · Akasi Group</p>
                </div>
              </div>

              <!-- Copyright -->
              <p class="text-xs text-gray-400 dark:text-gray-500 text-center">
                © {{ new Date().getFullYear() }} EdKey — Tous droits réservés. Développé par
                <a href="https://akasigroup.com" target="_blank" class="text-primary hover:underline font-medium">Akasi Group</a>.
              </p>

              <!-- Links -->
              <div class="flex items-center gap-1">
                <a
                  href="http://localhost:8000/mentions-legales"
                  target="_blank"
                  class="px-3 py-1.5 text-xs text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary rounded-lg hover:bg-primary/5 transition-all"
                >
                  Mentions légales
                </a>
                <span class="text-gray-200 dark:text-gray-700">|</span>
                <a
                  href="http://localhost:8000/politique-de-confidentialite"
                  target="_blank"
                  class="px-3 py-1.5 text-xs text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary rounded-lg hover:bg-primary/5 transition-all"
                >
                  Confidentialité
                </a>
                <span class="text-gray-200 dark:text-gray-700">|</span>
                <a
                  href="http://localhost:8000/contact-us"
                  target="_blank"
                  class="px-3 py-1.5 text-xs text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-primary rounded-lg hover:bg-primary/5 transition-all"
                >
                  Contact
                </a>
              </div>

            </div>
          </div>
        </footer>

      </div>
    </div>
  </SidebarProvider>
</template>
