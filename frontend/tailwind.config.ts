// tailwind.config.ts
import type { Config } from 'tailwindcss'

export const colors = {
  app_primary: '#1E40AF',
  secondary: '#F97316',
  'primary-light': '#60A5FA',
} as const

const config: Config = {
  content: [
    './index.html',
    './src/**/*.{vue,ts,js,jsx,tsx}',
  ],
  theme: {
    extend: {
      colors, // réutilise l’objet ci-dessus
      // ou directement :
      // colors: {
      //   primary: '#1E40AF',
      //   secondary: '#F97316',
      //   'primary-light': '#60A5FA',
      // },
    },
  },
  plugins: [],
}

export default config
