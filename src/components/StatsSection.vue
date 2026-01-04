<template>
  <section class="stats-section">
    <div class="container">
      <div class="stats-header">
        <h2 class="gradient-text">Why Choose TRYM?</h2>
        <p>Proven expertise backed by numbers</p>
      </div>
      
      <div class="stats-grid">
        <div 
          v-for="(stat, index) in stats" 
          :key="index" 
          class="stat-card"
          :style="{ animationDelay: `${index * 0.2}s` }"
        >
          <div class="stat-icon" v-html="stat.icon"></div>
          <div class="stat-number">
            <span class="number">{{ stat.value }}</span>
            <span class="suffix">{{ stat.suffix }}</span>
          </div>
          <p class="stat-label">{{ stat.label }}</p>
        </div>
      </div>
    </div>
    
    <div class="stats-bg-element"></div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const stats = ref([
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="url(#gradient1)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <defs><linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#D4647C"/><stop offset="100%" stop-color="#F5C542"/></linearGradient></defs>
      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
      <line x1="16" y1="2" x2="16" y2="6"/>
      <line x1="8" y1="2" x2="8" y2="6"/>
      <line x1="3" y1="10" x2="21" y2="10"/>
      <path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01"/>
    </svg>`,
    value: 15,
    suffix: '+',
    label: 'Years of Experience'
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="url(#gradient2)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <defs><linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#D4647C"/><stop offset="100%" stop-color="#F5C542"/></linearGradient></defs>
      <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
      <polyline points="22 4 12 14.01 9 11.01"/>
    </svg>`,
    value: 25,
    suffix: '+',
    label: 'Successfully Completed Projects'
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="url(#gradient3)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <defs><linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#D4647C"/><stop offset="100%" stop-color="#F5C542"/></linearGradient></defs>
      <circle cx="12" cy="12" r="10"/>
      <line x1="2" y1="12" x2="22" y2="12"/>
      <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
    </svg>`,
    value: 15,
    suffix: '+',
    label: 'Countries Worldwide'
  }
])
</script>

<style scoped>
.stats-section {
  position: relative;
  padding: var(--spacing-xl) 0;
  background: var(--color-bg-darker);
  overflow: hidden;
}

.stats-header {
  text-align: center;
  margin-bottom: var(--spacing-lg);
}

.stats-header h2 {
  font-size: var(--text-4xl);
  margin-bottom: var(--spacing-xs);
}

.stats-header p {
  font-size: var(--text-lg);
  color: var(--color-text-muted);
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--spacing-md);
  position: relative;
  z-index: 1;
}

.stat-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--spacing-lg);
  text-align: center;
  transition: all var(--transition-normal);
  animation: fadeInUp 0.8s ease forwards;
  opacity: 0;
}

.stat-card:hover {
  background: rgba(255, 255, 255, 0.06);
  border-color: rgba(212, 100, 124, 0.3);
  transform: translateY(-10px);
  box-shadow: var(--shadow-glow);
}

.stat-icon {
  width: 64px;
  height: 64px;
  margin: 0 auto var(--spacing-md);
}

.stat-icon :deep(svg) {
  width: 100%;
  height: 100%;
}

.stat-number {
  display: flex;
  align-items: baseline;
  justify-content: center;
  gap: 0.25rem;
  margin-bottom: var(--spacing-xs);
}

.number {
  font-family: 'Playfair Display', serif;
  font-size: var(--text-5xl);
  font-weight: 700;
  background: var(--gradient-brand);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.suffix {
  font-size: var(--text-3xl);
  color: var(--color-gold);
  font-weight: 600;
}

.stat-label {
  font-size: var(--text-base);
  color: var(--color-text-muted);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.stats-bg-element {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(212, 100, 124, 0.1) 0%, transparent 70%);
  pointer-events: none;
}

@media (max-width: 768px) {
  .stats-grid {
    grid-template-columns: 1fr;
    gap: var(--spacing-sm);
  }
  
  .stat-card {
    padding: var(--spacing-md);
  }
  
  .stat-icon {
    width: 48px;
    height: 48px;
  }
}
</style>
