<template>
  <nav class="navbar" :class="{ 'scrolled': isScrolled }">
    <div class="container navbar-content">
      <a href="#" class="logo" @click.prevent="scrollToTop">
        <img src="/images/logo.png" alt="TRYM Logo" />
      </a>
      
      <button class="mobile-toggle" @click="toggleMenu" :class="{ 'active': isMenuOpen }">
        <span></span>
        <span></span>
        <span></span>
      </button>
      
      <ul class="nav-links" :class="{ 'active': isMenuOpen }">
        <li><a href="#about" @click="closeMenu">About Us</a></li>
        <li><a href="#services" @click="closeMenu">Services</a></li>
        <li><a href="#gallery" @click="closeMenu">Gallery</a></li>
        <li><a href="#clients" @click="closeMenu">Clients</a></li>
        <li><a href="#contact" @click="closeMenu">Contact</a></li>
        <li>
          <a href="#contact" class="btn btn-primary nav-cta" @click="closeMenu">Get in Touch</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const isScrolled = ref(false)
const isMenuOpen = ref(false)

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50
}

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

const closeMenu = () => {
  isMenuOpen.value = false
}

const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' })
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style scoped>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  padding: 1.5rem 0;
  transition: all var(--transition-normal);
}

.navbar.scrolled {
  background: rgba(74, 25, 66, 0.95);
  backdrop-filter: blur(20px);
  padding: 1rem 0;
  box-shadow: var(--shadow-lg);
}

.navbar-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo img {
  height: 50px;
  transition: height var(--transition-normal);
}

.navbar.scrolled .logo img {
  height: 40px;
}

.nav-links {
  display: flex;
  align-items: center;
  gap: 2rem;
  list-style: none;
}

.nav-links a {
  font-weight: 500;
  font-size: var(--text-sm);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  position: relative;
  padding: 0.5rem 0;
}

.nav-links a:not(.nav-cta)::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--gradient-brand);
  transition: width var(--transition-normal);
}

.nav-links a:not(.nav-cta):hover::after {
  width: 100%;
}

.nav-cta {
  padding: 0.75rem 1.5rem !important;
  font-size: var(--text-xs) !important;
}

.mobile-toggle {
  display: none;
  flex-direction: column;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 0.5rem;
  z-index: 1001;
}

.mobile-toggle span {
  width: 25px;
  height: 2px;
  background: var(--color-text-light);
  transition: all var(--transition-normal);
}

.mobile-toggle.active span:nth-child(1) {
  transform: rotate(45deg) translate(5px, 5px);
}

.mobile-toggle.active span:nth-child(2) {
  opacity: 0;
}

.mobile-toggle.active span:nth-child(3) {
  transform: rotate(-45deg) translate(5px, -5px);
}

@media (max-width: 968px) {
  .mobile-toggle {
    display: flex;
  }
  
  .nav-links {
    position: fixed;
    top: 0;
    right: -100%;
    width: 80%;
    max-width: 400px;
    height: 100vh;
    background: var(--color-bg-darker);
    flex-direction: column;
    justify-content: center;
    gap: 2rem;
    transition: right var(--transition-normal);
    padding: 2rem;
  }
  
  .nav-links.active {
    right: 0;
  }
  
  .nav-links a {
    font-size: var(--text-lg);
  }
}
</style>
