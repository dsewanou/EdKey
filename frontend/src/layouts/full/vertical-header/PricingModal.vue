<script setup lang="ts">
import {
  Dialog,
  DialogContent,
  DialogHeader,
  DialogTitle,
  DialogDescription,
} from "@/components/ui/dialog";
import { Check, X } from "lucide-vue-next";

interface PricingPlan {
  name: string;
  price: string;
  per: string;
  icon: string;
  featured: boolean;
  features: string[];
}

const pricingPlans: PricingPlan[] = [
  {
    name: "Basique",
    price: "0",
    per: "par mois",
    icon: "bi bi-star",
    featured: false,
    features: [
      "Jusqu'à 50 utilisateurs",
      "Stockage : 5 Go",
      "Inscriptions scolaires",
      "Portails apprenants & enseignants",
      "Administration de base",
    ],
  },
  {
    name: "Standard",
    price: "25.000",
    per: "par mois",
    icon: "bi bi-shield-shaded",
    featured: false,
    features: [
      "Jusqu'à 500 utilisateurs",
      "Stockage : 50 Go",
      "Emplois du temps & Ressources",
      "Vie Scolaire & Universitaire",
      "Évaluations & Compétences",
      "Délivrance d'actes scolaires",
    ],
  },
  {
    name: "Premium",
    price: "75.000",
    per: "par mois",
    icon: "bi bi-gem",
    featured: true,
    features: [
      "Jusqu'à 2000 utilisateurs",
      "Stockage : 200 Go",
      "eLearning / eClassroom",
      "Comptabilité & Inventaire",
      "Gestion documentaire (GED)",
      "Statistiques de performance",
    ],
  },
  {
    name: "Élite",
    price: "150.000",
    per: "par mois",
    icon: "bi bi-trophy-fill",
    featured: false,
    features: [
      "Utilisateurs illimités",
      "Stockage : 1 To",
      "Intégration de l'IA",
      "Connectivité API & Tiers",
      "Sécurité & Audit avancés",
      "Support VIP 24/7",
    ],
  },
];

defineProps<{ open: boolean }>();
defineEmits<{ (e: 'update:open', value: boolean): void }>();

</script>

<template>
  <Dialog :open="open" @update:open="$emit('update:open', $event)">
    <DialogContent class="!max-w-[95vw] w-full overflow-y-auto max-h-[95vh] p-0 border-none bg-transparent shadow-none focus:outline-none">
      <div class="relative bg-white/90 dark:bg-[#0f1117]/95 backdrop-blur-2xl border border-white/20 dark:border-white/10 rounded-[3rem] p-10 shadow-2xl">
        
        <!-- Close Button -->
        <button 
          @click="$emit('update:open', false)"
          class="absolute top-8 right-8 w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-white/5 text-gray-500 hover:text-primary hover:bg-primary/10 transition-all duration-300 z-50"
        >
          <X class="w-5 h-5" />
        </button>

        <DialogHeader class="mb-10 text-center">
          <div class="inline-flex items-center gap-2 bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mx-auto mb-4">
            <i class="bi bi-tags-fill"></i>
            Nos Tarifications
          </div>
          <DialogTitle class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white">
            Des solutions <span class="text-primary italic">adaptées</span> à vos besoins
          </DialogTitle>
          <DialogDescription class="text-gray-500 dark:text-gray-400 mt-2 text-base max-w-2xl mx-auto">
            Choisissez la formule qui correspond le mieux à la taille et aux objectifs de votre établissement.
          </DialogDescription>
        </DialogHeader>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 xl:gap-10">
          <div
            v-for="plan in pricingPlans"
            :key="plan.name"
            :class="[
              'relative group flex flex-col p-6 rounded-3xl transition-all duration-500 border-2',
              plan.featured
                ? 'bg-primary text-white border-primary shadow-xl shadow-primary/30 scale-105 z-10'
                : 'bg-white/50 dark:bg-white/5 border-gray-100 dark:border-white/5 hover:border-primary/50 text-gray-900 dark:text-white'
            ]"
          >
            <!-- Featured Badge -->
            <div v-if="plan.featured" class="absolute -top-3 left-1/2 -translate-x-1/2 bg-white text-primary text-[10px] font-black uppercase py-1 px-3 rounded-full shadow-lg">
              Recommandé
            </div>

            <!-- Icon -->
            <div 
              :class="[
                'w-12 h-12 rounded-2xl flex items-center justify-center text-2xl mb-5 transition-transform group-hover:scale-110 duration-300',
                plan.featured ? 'bg-white/20' : 'bg-primary/10 text-primary'
              ]"
            >
              <i :class="plan.icon"></i>
            </div>

            <!-- Title & Price -->
            <div class="mb-6">
              <h4 :class="['text-xl font-bold mb-2', plan.featured ? 'text-white' : 'text-gray-900 dark:text-white']">
                {{ plan.name }}
              </h4>
              <div class="flex flex-wrap items-baseline gap-1">
                <span class="text-3xl font-black">{{ plan.price }}</span>
                <div :class="['flex flex-col -mb-1', plan.featured ? 'text-white/80' : 'text-gray-500 dark:text-gray-400']">
                  <span class="text-[10px] font-bold leading-none">FCFA</span>
                  <span class="text-[10px] font-medium leading-tight">{{ plan.per }}</span>
                </div>
              </div>
            </div>

            <!-- Features -->
            <ul class="flex-1 space-y-3 mb-8">
              <li 
                v-for="feat in plan.features" 
                :key="feat"
                class="flex items-start gap-2.5 text-xs leading-tight"
              >
                <Check :class="['w-4 h-4 shrink-0', plan.featured ? 'text-white' : 'text-primary']" />
                <span :class="plan.featured ? 'text-white/90' : 'text-gray-600 dark:text-gray-300'">
                  {{ feat }}
                </span>
              </li>
            </ul>

            <!-- CTA -->
            <button
              :class="[
                'w-full py-3 rounded-2xl font-bold text-xs transition-all duration-300',
                plan.featured
                  ? 'bg-white text-primary hover:bg-white/90'
                  : 'bg-primary text-white hover:bg-primary-emphasis'
              ]"
            >
              Choisir cette formule
            </button>
          </div>
        </div>

        <div class="mt-10 text-center">
          <p class="text-xs text-gray-500 dark:text-gray-400">
            Besoin d'un devis sur mesure ? 
            <a href="#" class="text-primary font-bold hover:underline">Contactez notre équipe commerciale</a>
          </p>
        </div>
      </div>
    </DialogContent>
  </Dialog>
</template>

<style scoped>
.backdrop-blur-xl {
  backdrop-filter: blur(24px);
}
</style>
