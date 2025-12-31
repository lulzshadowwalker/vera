import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from '@tailwindcss/vite'
import franken from 'franken-ui/plugin-vite'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    tailwindcss(),
    franken({
      customPalette: {
        '.uk-theme-slateblue': {
          '--background': '210 20% 98%',
          '--foreground': '220 25% 10%',
          '--card': '0 0% 100%',
          '--card-foreground': '220 25% 10%',
          '--popover': '0 0% 100%',
          '--popover-foreground': '220 25% 10%',
          '--primary': '35 25% 55%',
          '--primary-foreground': '0 0% 100%',
          '--secondary': '220 14% 96%',
          '--secondary-foreground': '220 25% 10%',
          '--muted': '220 14% 96%',
          '--muted-foreground': '220 8% 40%',
          '--accent': '200 60% 94%',
          '--accent-foreground': '220 25% 15%',
          '--destructive': '0 70% 50%',
          '--destructive-foreground': '0 0% 100%',
          '--border': '220 15% 90%',
          '--input': '220 15% 90%',
          '--ring': '35 25% 60%',
        },
        '.dark.uk-theme-slateblue': {
          '--background': '0 0% 11%',
          '--foreground': '0 0% 98%',
          '--card': '0 0% 15%',
          '--card-foreground': '0 0% 98%',
          '--popover': '0 0% 13%',
          '--popover-foreground': '0 0% 98%',
          '--primary': '35 25% 65%',
          '--primary-foreground': '100 100% 100%',
          '--secondary': '0 0% 18%',
          '--secondary-foreground': '0 0% 98%',
          '--muted': '0 0% 18%',
          '--muted-foreground': '0 0% 70%',
          '--accent': '220 25% 20%',
          '--accent-foreground': '0 0% 98%',
          '--destructive': '0 70% 50%',
          '--destructive-foreground': '0 0% 100%',
          '--border': '220 15% 90%',
          '--input': '0 0% 20%',
          '--ring': '35 25% 70%',
        },
      },
      preflight: false,
      layer: true,
      layerExceptions: ['chart'],
    }),
  ],
})
