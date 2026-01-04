<template>
  <section class="services-section section" id="services">
    <div class="container">
      <div class="section-title">
        <h2>Our Services</h2>
        <p>Comprehensive aviation engineering solutions tailored to your needs</p>
      </div>
      
      <div class="services-grid">
        <div 
          v-for="(service, index) in services" 
          :key="index" 
          class="service-card"
          :style="{ animationDelay: `${index * 0.15}s` }"
        >
          <div class="service-icon" v-html="service.icon"></div>
          <h3>{{ service.title }}</h3>
          <ul class="service-features">
            <li v-for="(feature, fIndex) in service.features" :key="fIndex">
              <span class="check-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="20 6 9 17 4 12"/>
                </svg>
              </span>
              {{ feature }}
            </li>
          </ul>
        </div>
      </div>
      
      <div class="aircraft-types">
        <h3>Aircraft Types We Support</h3>
        <div class="aircraft-badges">
          <div class="badge">
            <svg class="badge-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
            </svg>
            <span class="badge-text">Boeing 737</span>
          </div>
          <div class="badge">
            <svg class="badge-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
            </svg>
            <span class="badge-text">Airbus 320</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const services = ref([
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="url(#service1)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <defs><linearGradient id="service1" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#D4647C"/><stop offset="100%" stop-color="#F5C542"/></linearGradient></defs>
      <circle cx="11" cy="11" r="8"/>
      <line x1="21" y1="21" x2="16.65" y2="16.65"/>
      <path d="M11 8v6M8 11h6"/>
    </svg>`,
    title: 'Technical Audits & Inspections',
    features: [
      'Physical aircraft checks',
      'Records review',
      'Reporting and handling open queries for lease events'
    ]
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="url(#service2)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <defs><linearGradient id="service2" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#D4647C"/><stop offset="100%" stop-color="#F5C542"/></linearGradient></defs>
      <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
    </svg>`,
    title: 'Engineering',
    features: [
      'Support for aircraft repairs',
      'Digital engineering',
      'Dent & buckle charts updating',
      'Structure projects technical representation'
    ]
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <defs><linearGradient id="service3" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#D4647C"/><stop offset="100%" stop-color="#F5C542"/></linearGradient></defs>
      <rect x="3" y="3" width="18" height="18" rx="2" stroke="url(#service3)"/>
      <path d="M3 9h18" stroke="url(#service3)"/>
      <path d="M9 21V9" stroke="url(#service3)"/>
      <path d="M13 13h4" stroke="url(#service3)"/>
      <path d="M13 17h4" stroke="url(#service3)"/>
    </svg>`,
    title: 'Asset Management',
    features: [
      'Ensuring aircraft value preservation',
      'Technical compliance monitoring',
      'Regulatory compliance (EASA/Eurocontrol)'
    ]
  }
])
</script>

<style scoped>
.services-section {
  background: var(--color-bg-darker);
  position: relative;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--spacing-md);
  margin-bottom: var(--spacing-xl);
}

.service-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--spacing-lg);
  transition: all var(--transition-normal);
  animation: fadeInUp 0.8s ease forwards;
  opacity: 0;
  position: relative;
  overflow: hidden;
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: var(--gradient-brand);
  transform: scaleX(0);
  transition: transform var(--transition-normal);
}

.service-card:hover::before {
  transform: scaleX(1);
}

.service-card:hover {
  transform: translateY(-10px);
  border-color: rgba(212, 100, 124, 0.3);
  box-shadow: var(--shadow-glow);
}

.service-icon {
  width: 56px;
  height: 56px;
  margin-bottom: var(--spacing-md);
}

.service-icon :deep(svg) {
  width: 100%;
  height: 100%;
}

.service-card h3 {
  font-size: var(--text-xl);
  margin-bottom: var(--spacing-md);
  font-family: 'Inter', sans-serif;
  font-weight: 600;
}

.service-features {
  list-style: none;
}

.service-features li {
  display: flex;
  align-items: flex-start;
  gap: var(--spacing-sm);
  margin-bottom: var(--spacing-xs);
  font-size: var(--text-sm);
  color: var(--color-text-muted);
  line-height: 1.6;
}

.check-icon {
  width: 18px;
  height: 18px;
  flex-shrink: 0;
  color: var(--color-gold);
  margin-top: 2px;
}

.check-icon svg {
  width: 100%;
  height: 100%;
}

.aircraft-types {
  text-align: center;
  padding: var(--spacing-lg);
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
}

.aircraft-types h3 {
  font-size: var(--text-xl);
  margin-bottom: var(--spacing-md);
  color: var(--color-text-light);
}

.aircraft-badges {
  display: flex;
  justify-content: center;
  gap: var(--spacing-md);
  flex-wrap: wrap;
}

.badge {
  display: flex;
  align-items: center;
  gap: var(--spacing-sm);
  padding: var(--spacing-sm) var(--spacing-md);
  background: var(--gradient-brand);
  border-radius: var(--radius-full);
  color: var(--color-bg-dark);
  font-weight: 600;
}

.badge-icon {
  width: 24px;
  height: 24px;
}

.badge-text {
  font-size: var(--text-base);
}

@media (max-width: 968px) {
  .services-grid {
    grid-template-columns: 1fr;
  }
}
</style>
