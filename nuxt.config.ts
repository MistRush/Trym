// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    compatibilityDate: '2024-11-01',
    devtools: { enabled: true },

    // Enable SSG (Static Site Generation)
    ssr: true,

    // CSS
    css: ['~/assets/scss/main.scss'],

    // Vite configuration for SCSS
    vite: {
        css: {
            preprocessorOptions: {
                scss: {
                    additionalData: '@use "~/assets/scss/variables" as *;'
                }
            }
        }
    },

    // App configuration
    app: {
        head: {
            htmlAttrs: {
                lang: 'en'
            },
            title: 'TRYM | Aviation Engineering Experts - Aircraft Maintenance & Compliance',
            meta: [
                { charset: 'utf-8' },
                { name: 'viewport', content: 'width=device-width, initial-scale=1' },
                {
                    name: 'description',
                    content: 'TRYM - Aviation experts providing specialized advice on aircraft maintenance, compliance, and asset management for airlines and lessors. 15+ years of experience with Boeing 737 and Airbus 320.'
                },
                {
                    name: 'keywords',
                    content: 'aviation engineering, aircraft maintenance, EASA compliance, aircraft inspection, Boeing 737, Airbus 320, lease events, technical audits'
                },
                { name: 'author', content: 'TRYMyengineering s.r.o.' },
                // Open Graph
                { property: 'og:title', content: 'TRYM | Aviation Engineering Experts' },
                { property: 'og:description', content: 'Specialized aircraft maintenance, compliance, and asset management for airlines.' },
                { property: 'og:image', content: '/images/logo.png' },
                { property: 'og:type', content: 'website' },
                { property: 'og:url', content: 'https://trym.cz' },
                // Twitter Card
                { name: 'twitter:card', content: 'summary_large_image' },
                { name: 'twitter:title', content: 'TRYM | Aviation Engineering Experts' },
                { name: 'twitter:description', content: 'Specialized aircraft maintenance, compliance, and asset management for airlines.' }
            ],
            link: [
                { rel: 'icon', type: 'image/png', href: '/images/logo.png' },
                { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
                { rel: 'preconnect', href: 'https://fonts.gstatic.com', crossorigin: '' },
                {
                    rel: 'stylesheet',
                    href: 'https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Onest:wght@300;400;500;600;700&display=swap'
                }
            ]
        }
    },

    // Nitro configuration for static generation
    nitro: {
        prerender: {
            crawlLinks: true,
            routes: ['/']
        }
    }
})
