<template>
  <section class="stats-section" id="stats">
    <div class="container">
      <div class="stats-header">
        <h2>Why Choose <span class="gradient-text">TRYM?</span></h2>
        <p>Proven expertise backed by numbers</p>
      </div>
      
      <div class="stats-showcase">
        <div class="airplane-container">
          <img src="/images/airplane-front.png" alt="Aircraft Front View" class="airplane-image" />
          
          <!-- Floating Stats Cards -->
          <div class="floating-stat stat-projects">
            <span class="stat-number">25+</span>
            <span class="stat-label">Successfully Completed Projects</span>
          </div>
          
          <div class="floating-stat stat-experience">
            <span class="stat-number">15+</span>
            <span class="stat-label">Years of Experience</span>
          </div>
          
          <div class="floating-stat stat-countries">
            <span class="stat-number">15+</span>
            <span class="stat-label">Countries Worldwide</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
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

.stats-showcase {
  position: relative;
  min-height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.airplane-container {
  position: relative;
  width: 100%;
  max-width: 800px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.airplane-image {
  width: 100%;
  max-width: 600px;
  height: auto;
  filter: drop-shadow(0 20px 60px rgba(0, 0, 0, 0.5));
}

.floating-stat {
  position: absolute;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-lg);
  padding: var(--spacing-md) var(--spacing-lg);
  text-align: center;
  animation: float 3s ease-in-out infinite;
  transition: all var(--transition-normal);
}

.floating-stat:hover {
  border-color: rgba(225, 18, 18, 0.3);
  box-shadow: var(--shadow-glow);
  transform: scale(1.05);
}

.stat-number {
  display: block;
  font-size: var(--text-4xl);
  font-weight: 700;
  background: var(--gradient-brand);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--spacing-xs);
}

.stat-label {
  display: block;
  font-size: var(--text-sm);
  color: var(--color-text-muted);
  max-width: 150px;
}

/* Position floating cards */
.stat-projects {
  top: 10%;
  left: 5%;
  animation-delay: 0s;
}

.stat-experience {
  top: 10%;
  right: 5%;
  animation-delay: 0.5s;
}

.stat-countries {
  bottom: 10%;
  left: 50%;
  transform: translateX(-50%);
  animation-delay: 1s;
}

@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

.stat-countries {
  animation: floatCenter 3s ease-in-out infinite;
  animation-delay: 1s;
}

@keyframes floatCenter {
  0%, 100% {
    transform: translateX(-50%) translateY(0);
  }
  50% {
    transform: translateX(-50%) translateY(-10px);
  }
}

@media (max-width: 768px) {
  .stats-showcase {
    min-height: auto;
    flex-direction: column;
  }
  
  .airplane-container {
    position: static;
  }
  
  .airplane-image {
    max-width: 300px;
    margin-bottom: var(--spacing-lg);
  }
  
  .floating-stat {
    position: static;
    margin: var(--spacing-sm) 0;
    transform: none !important;
  }
  
  .stat-countries {
    transform: none;
  }
}
</style>
