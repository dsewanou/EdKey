<template>
  <div class="relative h-full w-full overflow-hidden bg-slate-950">
    <transition-group name="ken-burns">
      <div 
        v-for="(img, index) in slides" 
        :key="img.id"
        v-show="currentSlide === index"
        class="absolute inset-0 z-0"
      >
        <div 
          class="absolute inset-0 bg-cover bg-center transition-all duration-[2000ms]"
          :style="{ backgroundImage: `url(${img.url})` }"
        />
        <div class="absolute inset-0 bg-gradient-to-tr from-[#011c61] via-[#011c61]/80 to-transparent opacity-90" />
      </div>
    </transition-group>

    <div class="relative z-10 flex h-full flex-col justify-between p-16 text-white">
      
      <div class="flex items-center gap-3 animate-fade-in">
        <div class="h-12 w-12 bg-white rounded-2xl flex items-center justify-center shadow-2xl shadow-white/20 rotate-3 transition-transform hover:rotate-0 duration-500">
             <span class="text-[#011c61] font-black text-2xl">EK</span>
        </div>
        <div>
          <span class="text-3xl font-black tracking-tighter uppercase text-white">EdKey</span>
          <div class="h-1 w-8 bg-red-600 rounded-full"></div>
        </div>
      </div>

      <div class="max-w-3xl">
        <transition name="slide-up" mode="out-in">
          <div :key="currentSlide">
            <h2 class="mb-6 text-6xl xl:text-7xl font-black leading-[1.1] tracking-tight drop-shadow-2xl text-white">
              {{ slides[currentSlide].title.split(' ').slice(0, -1).join(' ') }}
              <span class="text-red-500">{{ slides[currentSlide].title.split(' ').pop() }}</span>
            </h2>
            
            <p class="text-xl xl:text-2xl text-white/90 leading-relaxed font-light max-w-xl">
              {{ slides[currentSlide].description }}
            </p>
          </div>
        </transition>
        
        <div class="mt-12 flex gap-3">
          <div 
            v-for="(_, i) in slides" :key="i"
            @click="currentSlide = i"
            class="group cursor-pointer relative h-1.5 w-20 overflow-hidden rounded-full bg-white/20 transition-all"
          >
            <div 
              v-if="currentSlide === i"
              class="absolute inset-0 bg-red-600 animate-progress"
            />
            <div 
              v-else-if="i < currentSlide"
              class="absolute inset-0 bg-red-600/40" 
            />
          </div>
        </div>
      </div>

      <div class="flex items-center justify-between text-white/50">
        <div class="text-sm font-bold tracking-[0.2em] uppercase">
          Digitalizing Education
        </div>
        <div class="flex items-center gap-4">
          <div class="h-[1px] w-12 bg-white/20"></div>
          <span class="text-xs font-mono">v1.0.4</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue';

const currentSlide = ref(0);
const slides = [
  {
    id: 1,
    title: "Gérez votre établissement en toute simplicité.",
    description: "Une interface intuitive pour les administrateurs, enseignants et parents.",
    url: "https://images.unsplash.com/photo-1523050853061-80e8a4ff12ae?auto=format&fit=crop&q=80"
  },
  {
    id: 2,
    title: "Suivez la progression de vos apprenants.",
    description: "Accédez aux notes, présences et documents en temps réel.",
    url: "https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&q=80"
  },
  {
    id: 3,
    title: "Une gestion 360° de votre école.",
    description: "Inscriptions, notes, absences et paiements centralisés sur une plateforme sécurisée.",
    url: "https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80"
  },
  {
    id: 4,
    title: "Connectez Parents, Élèves et Profs.",
    description: "Améliorez la communication et le suivi pédagogique grâce à nos outils collaboratifs.",
    url: "https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80"
  }
];

let timer: ReturnType<typeof setInterval>;
const startTimer = () => {
  timer = setInterval(() => {
    currentSlide.value = (currentSlide.value + 1) % slides.length;
  }, 5000);
};

onMounted(() => startTimer());
onUnmounted(() => clearInterval(timer));
</script>

<style scoped>
/* Animation de la barre de progression (5s pour correspondre au timer) */
.animate-progress {
  animation: progress linear 5s forwards;
}

@keyframes progress {
  from { width: 0%; }
  to { width: 100%; }
}

/* Ken Burns : Effet de zoom élégant */
.ken-burns-enter-active {
  animation: kenburns 2s ease-out forwards;
}
.ken-burns-leave-active {
  transition: opacity 1.5s ease-in;
}
.ken-burns-leave-to {
  opacity: 0;
}

@keyframes kenburns {
  0% { transform: scale(1.15); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}

/* Slide Up du texte */
.slide-up-enter-active, .slide-up-leave-active {
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.slide-up-enter-from {
  opacity: 0;
  transform: translateY(40px);
}
.slide-up-leave-to {
  opacity: 0;
  transform: translateY(-40px);
}

.animate-fade-in {
  animation: fadeIn 1s ease-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-10px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>