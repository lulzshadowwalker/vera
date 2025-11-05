import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import franken from "franken-ui/plugin-vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
        franken({
            customPalette: {
                ".uk-theme-slateblue": {
                    "--background": "210 20% 98%",
                    "--foreground": "220 25% 10%",
                    "--card": "0 0% 100%",
                    "--card-foreground": "220 25% 10%",
                    "--popover": "0 0% 100%",
                    "--popover-foreground": "220 25% 10%",
                    "--primary": "220 60% 40%",
                    "--primary-foreground": "0 0% 100%",
                    "--secondary": "220 14% 96%",
                    "--secondary-foreground": "220 25% 10%",
                    "--muted": "220 14% 96%",
                    "--muted-foreground": "220 8% 40%",
                    "--accent": "200 60% 94%",
                    "--accent-foreground": "220 25% 15%",
                    "--destructive": "0 70% 50%",
                    "--destructive-foreground": "0 0% 100%",
                    "--border": "220 15% 90%",
                    "--input": "220 15% 90%",
                    "--ring": "220 60% 45%",
                },
                ".dark.uk-theme-slateblue": {
                    "--background": "220 25% 8%",
                    "--foreground": "0 0% 98%",
                    "--card": "220 25% 12%",
                    "--card-foreground": "0 0% 98%",
                    "--popover": "220 25% 10%",
                    "--popover-foreground": "0 0% 98%",
                    "--primary": "220 65% 60%",
                    "--primary-foreground": "100 100% 100%",
                    "--secondary": "220 25% 15%",
                    "--secondary-foreground": "0 0% 98%",
                    "--muted": "220 15% 15%",
                    "--muted-foreground": "220 10% 70%",
                    "--accent": "220 25% 20%",
                    "--accent-foreground": "0 0% 98%",
                    "--destructive": "0 70% 50%",
                    "--destructive-foreground": "0 0% 100%",
                    "--border": "220 25% 25%",
                    "--input": "220 25% 25%",
                    "--ring": "220 60% 60%",
                },
            },
            preflight: false,
            layer: true,
            layerExceptions: ["chart"],
        }),
    ],
});
