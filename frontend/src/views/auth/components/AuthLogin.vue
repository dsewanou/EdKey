<script setup lang="ts">
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth' // Import de ton store
import { Button } from '@/components/ui/button'
import { Label } from '@/components/ui/label'
import { Input } from '@/components/ui/input'
import { Loader2, Mail, Lock } from 'lucide-vue-next'

const router = useRouter()
const authStore = useAuthStore()

const email = ref('')
const password = ref('')
const isLoading = ref(false)

async function onSubmit(event: Event) {
  event.preventDefault()
  isLoading.value = true

  try {
    await new Promise((resolve) => setTimeout(resolve, 1500))

    // Simulation de données avec un rôle (normalement envoyé par Laravel)
    // Ici, on fait un test : si l'email contient "admin", on met le rôle admin
    let assignedRole: 'admin' | 'parent' | 'student' = 'student'
    
    if (email.value.includes('admin')) assignedRole = 'admin'
    else if (email.value.includes('parent')) assignedRole = 'parent'

    const mockUser = { id: 1, name: "Jean Houessou", email: email.value }
    const mockToken = "12345|fake-jwt-token"

    // On enregistre tout dans le store
    authStore.setAuth(mockUser, mockToken, assignedRole)

    // REDIRECTION BASÉE SUR LE RÔLE
    switch (assignedRole) {
      case 'admin':
        router.push('/admin/dashboard')
        break
      case 'parent':
        router.push('/parent/dashboard')
        break
      case 'student':
        router.push('/dashboards/student')
        break
      default:
        router.push('/')
    }

  } catch (error) {
    console.error('Erreur:', error)
  } finally {
    isLoading.value = false
  }
}
</script>

<template>
  <form @submit="onSubmit" class="mt-6 space-y-5">
    <div class="space-y-2">
      <Label for="email" class="text-sm font-bold text-[#011c61]">E-mail</Label>
      <div class="relative group">
        <Mail class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400 group-focus-within:text-[#011c61] transition-colors" />
        <Input 
          id="email" 
          v-model="email" 
          type="email" 
          placeholder="votre@email.com"
          class="pl-10 h-11 border-gray-200 focus:border-[#011c61] transition-all" 
          required 
        />
      </div>
    </div>

    <div class="space-y-2">
      <div class="flex items-center justify-between">
        <Label for="userpwd" class="text-sm font-bold text-[#011c61]">Mot de passe</Label>
        <RouterLink to="#" class="text-xs font-semibold text-red-600 hover:underline">
          Mot de passe oublié ?
        </RouterLink>
      </div>
      <div class="relative group">
        <Lock class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-gray-400 group-focus-within:text-[#011c61] transition-colors" />
        <Input 
          id="userpwd" 
          v-model="password" 
          type="password" 
          placeholder="••••••••"
          class="pl-10 h-11 border-gray-200 focus:border-[#011c61] transition-all" 
          required 
        />
      </div>
    </div>

    <Button 
      type="submit" 
      :disabled="isLoading"
      class="w-full h-12 bg-[#011c61] hover:bg-[#011c61]/95 text-white font-bold text-base transition-all shadow-[0_10px_20px_rgba(1,28,97,0.2)] active:scale-[0.98]"
    >
      <template v-if="isLoading">
        <Loader2 class="mr-2 h-5 w-5 animate-spin" />
        Vérification...
      </template>
      <span v-else>Se connecter</span>
    </Button>
  </form>
</template>