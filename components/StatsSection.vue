<template>
  <section class="stats-section">
    <div class="container">
      <div class="stats-header">
        <h2 class="gradient-text">Why Choose TRYM?</h2>
        <p>Proven expertise backed by our commitment to excellence</p>
      </div>
      
      <div class="stats-grid">
        <div 
          v-for="(stat, index) in stats" 
          :key="index" 
          class="stat-card"
          :style="{ animationDelay: `${index * 0.15}s` }"
        >
          <div class="stat-icon" v-html="stat.icon"></div>
          <h3>{{ stat.title }}</h3>
          <p class="stat-description">{{ stat.description }}</p>
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
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
      <line x1="16" y1="2" x2="16" y2="6"/>
      <line x1="8" y1="2" x2="8" y2="6"/>
      <line x1="3" y1="10" x2="21" y2="10"/>
    </svg>`,
    title: '15+ Years Experience',
    description: 'Over a decade of proven expertise in aviation engineering and maintenance management.'
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
      <polyline points="22 4 12 14.01 9 11.01"/>
    </svg>`,
    title: 'Certified Professionals',
    description: 'EASA and Eurocontrol certified team with comprehensive regulatory expertise.'
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="12" r="10"/>
      <line x1="2" y1="12" x2="22" y2="12"/>
      <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
    </svg>`,
    title: 'Global Operations',
    description: 'Supporting clients across 15+ countries with worldwide technical coverage.'
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
    </svg>`,
    title: 'Fleet Specialists',
    description: 'Deep expertise in Boeing 737 and Airbus 320 family aircraft maintenance.'
  }
])
</script>

<style scoped lang="scss">
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
  font-size: var(--text-3xl);
  margin-bottom: var(--spacing-xs);
}

.stats-header p {
  font-size: var(--text-lg);
  color: var(--color-text-muted);
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
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
  border-color: rgba(225, 18, 18, 0.3);
  transform: translateY(-10px);
  box-shadow: var(--shadow-glow);
}

.stat-icon {
  width: 56px;
  height: 56px;
  margin: 0 auto var(--spacing-md);
  color: var(--color-accent);
}

.stat-icon :deep(svg) {
  width: 100%;
  height: 100%;
}

.stat-card h3 {
  font-size: var(--text-lg);
  margin-bottom: var(--spacing-sm);
  color: var(--color-text-light);
}

.stat-description {
  font-size: var(--text-sm);
  line-height: 1.6;
  color: var(--color-text-muted);
}

.stats-bg-element {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(225, 18, 18, 0.08) 0%, transparent 70%);
  pointer-events: none;
}

@media (max-width: 1024px) {
  .stats-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 640px) {
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
