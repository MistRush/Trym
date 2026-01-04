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
import NavBar from './components/NavBar.vue'
import HeroSection from './components/HeroSection.vue'
import StatsSection from './components/StatsSection.vue'
import AboutSection from './components/AboutSection.vue'
import ServicesSection from './components/ServicesSection.vue'
import GallerySection from './components/GallerySection.vue'
import ClientsSection from './components/ClientsSection.vue'
import ContactSection from './components/ContactSection.vue'
import FooterSection from './components/FooterSection.vue'
</script>

<style scoped>
#trym-app {
  min-height: 100vh;
}
</style>
