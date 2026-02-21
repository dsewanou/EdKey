import { defineStore } from 'pinia'

interface User {
  id: number
  name: string
  email: string
}

interface AuthState {
  user: User | null
  token: string | null
  role: string | null
}

export const useAuthStore = defineStore('auth', {
  state: (): AuthState => ({
    user: null,
    token: localStorage.getItem('token'),
    role: null as 'admin' | 'parent' | 'student' | null, // Stockage du rôle
  }),

  getters: {
    isAuthenticated: (state) => !!state.token
  },

  actions: {
    setAuth(user: User, token: string, role: any) {
      this.user = user
      this.token = token
      this.role = role
      localStorage.setItem('token', token)
      localStorage.setItem('user_role', role)
    },

    logout() {
      this.user = null
      this.token = null
      localStorage.clear()
    }
  }
})
