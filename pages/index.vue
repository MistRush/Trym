<template>
  <div id="trym-app">
    <NavBar />
    <HeroSection />
    <StatsSection />
    <AboutSection />
    <ServicesSection />
    <GallerySection />
    <ClientsSection />
    <ContactSection />
    <FooterSection />
  </div>
</template>

<script setup>
// SEO meta for this page
useSeoMeta({
  title: 'TRYM | Aviation Engineering Experts',
  ogTitle: 'TRYM | Aviation Engineering Experts',
  description: 'Aviation experts providing specialized advice on aircraft maintenance, compliance, and asset management for airlines and lessors.',
  ogDescription: 'Specialized aircraft maintenance, compliance, and asset management for airlines.',
  ogImage: '/images/logo.png',
})
</script>

<style scoped lang="scss">
#trym-app {
  min-height: 100vh;
}
</style>
