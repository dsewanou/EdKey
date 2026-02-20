import { createRouter, createWebHistory } from "vue-router";
import { useAuthStore } from '@/stores/auth';
import MainRoutes from "./MainRoutes";
export const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [

    {
      path: "/auth",
      component: () => import("@/views/auth/Login.vue"),
      meta: { requiresAuth: false },
    },

    {
      path: "/register",
      name: 'register',
      component: () => import("@/views/auth/Register.vue"),
      meta: { requiresAuth: false },
    },

    {
      path: "/",
      component: () => import("@/views/modules/index.vue"),
      meta: { requiresAuth: false },
    },

    {
      path: "/auth/register2",
      component: () => import("@/views/authentication/auth2/Register.vue"),
      meta: { requiresAuth: false },
    },

    ...MainRoutes,

  ],
});


router.beforeEach((to, from, next) => {
  const auth = useAuthStore()

  const publicPages = ['/auth', '/register']
  const authRequired = !publicPages.includes(to.path)

  if (authRequired && !auth.isAuthenticated) {
    return next('/auth')
  }
  if (to.path === '/auth' && auth.isAuthenticated) {
    return next('/')
  }

  next()
})
