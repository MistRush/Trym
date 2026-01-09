<template>
  <section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    
    <div class="container hero-content">
      <div class="hero-text animate-fadeInUp">
        <p class="hero-subtitle">Aviation Engineering Excellence</p>
        <h1>Your Trusted Partner in <span class="gradient-text">Aircraft Management</span></h1>
        <p class="hero-description">
          We are aviation experts who provide specialized advice on aircraft maintenance, 
          compliance, and asset management for airlines and lessors.
        </p>
        <div class="hero-cta">
          <a href="#services" class="btn btn-primary">Our Services</a>
          <a href="#contact" class="btn btn-outline">Contact Us</a>
        </div>
      </div>
      
      <div class="hero-certifications">
        <div class="certification-badge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
          <span>EASA Certified</span>
        </div>
        <div class="certification-badge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
            <path d="M2 12h20"/>
          </svg>
          <span>Eurocontrol</span>
        </div>
        <div class="certification-badge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
            <polyline points="22 4 12 14.01 9 11.01"/>
          </svg>
          <span>ISO Certified</span>
        </div>
        <div class="certification-badge">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
          </svg>
          <span>Boeing 737 & Airbus 320</span>
        </div>
      </div>
    </div>
    
    <div class="scroll-indicator">
      <span>Scroll Down</span>
      <div class="scroll-arrow"></div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped lang="scss">
.hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.hero-bg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: 
    radial-gradient(ellipse at 20% 80%, rgba(225, 18, 18, 0.1) 0%, transparent 50%),
    radial-gradient(ellipse at 80% 20%, rgba(255, 75, 145, 0.1) 0%, transparent 50%),
    linear-gradient(180deg, var(--color-bg-darker) 0%, var(--color-bg-dark) 100%);
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('/images/gallery1.png') center/cover no-repeat;
  opacity: 0.08;
}

.hero-content {
  position: relative;
  z-index: 1;
  padding-top: 120px;
}

.hero-text {
  max-width: 800px;
}

.hero-subtitle {
  font-size: var(--text-sm);
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: var(--color-accent);
  margin-bottom: var(--spacing-sm);
  font-weight: 500;
}

.hero h1 {
  font-size: var(--text-6xl);
  margin-bottom: var(--spacing-md);
  line-height: 1.1;
}

.hero-description {
  font-size: var(--text-lg);
  max-width: 600px;
  margin-bottom: var(--spacing-lg);
  line-height: 1.7;
}

.hero-cta {
  display: flex;
  gap: var(--spacing-sm);
  flex-wrap: wrap;
}

.hero-certifications {
  display: flex;
  gap: var(--spacing-md);
  margin-top: var(--spacing-xl);
  padding-top: var(--spacing-lg);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  flex-wrap: wrap;
}

.certification-badge {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 1rem;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-full);
  transition: all var(--transition-normal);
}

.certification-badge:hover {
  border-color: rgba(225, 18, 18, 0.3);
  background: rgba(255, 255, 255, 0.08);
}

.certification-badge svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
}

.certification-badge span {
  font-size: var(--text-xs);
  color: var(--color-text-muted);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.scroll-indicator {
  position: absolute;
  bottom: 2rem;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  animation: float 2s ease-in-out infinite;
}

.scroll-indicator span {
  font-size: var(--text-xs);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: var(--color-text-muted);
}

.scroll-arrow {
  width: 24px;
  height: 40px;
  border: 2px solid var(--color-accent);
  border-radius: 12px;
  position: relative;
}

.scroll-arrow::before {
  content: '';
  position: absolute;
  top: 8px;
  left: 50%;
  transform: translateX(-50%);
  width: 4px;
  height: 8px;
  background: var(--gradient-brand);
  border-radius: 2px;
  animation: scrollDown 1.5s ease-in-out infinite;
}

@keyframes scrollDown {
  0%, 100% { transform: translateX(-50%) translateY(0); opacity: 1; }
  50% { transform: translateX(-50%) translateY(10px); opacity: 0.3; }
}

@media (max-width: 768px) {
  .hero-content {
    text-align: center;
    padding-top: 100px;
  }
  
  .hero-text {
    margin: 0 auto;
  }
  
  .hero-description {
    margin-left: auto;
    margin-right: auto;
  }
  
  .hero-cta {
    justify-content: center;
  }
  
  .hero-certifications {
    justify-content: center;
    gap: var(--spacing-sm);
  }
  
  .certification-badge {
    padding: 0.375rem 0.75rem;
  }
}
</style>
