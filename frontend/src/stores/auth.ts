import { defineStore } from 'pinia'

interface User {
  id: number
  name: string
  email: string
}

interface AuthState {
  user: User | null
  token: string | null
}

export const useAuthStore = defineStore('auth', {
  state: (): AuthState => ({
    user: null,
    token: localStorage.getItem('token')
  }),

  getters: {
    isAuthenticated: (state) => !!state.token
  },

  actions: {
    setAuth(user: User, token: string) {
      this.user = user
      this.token = token
      localStorage.setItem('token', token)
    },

    logout() {
      this.user = null
      this.token = null
      localStorage.removeItem('token')
    }
  }
})
