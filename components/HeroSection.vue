<template>
  <section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    
    <div class="container hero-content">
      <div class="hero-text animate-fadeInUp">
        <h1>Your Trusted Partner in <span class="gradient-text">Aircraft Management</span></h1>
        <p class="hero-description">
          We are aviation experts who provide specialized advice on aircraft maintenance, 
          compliance, and asset management for airlines and lessors.
        </p>
        <div class="hero-cta">
          <a href="#services" class="btn btn-primary">
            Our services
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
              <line x1="5" y1="12" x2="19" y2="12"/>
              <polyline points="12 5 19 12 12 19"/>
            </svg>
          </a>
          <a href="#contact" class="btn btn-outline">
            Contact us
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
              <line x1="5" y1="12" x2="19" y2="12"/>
              <polyline points="12 5 19 12 12 19"/>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Specialist Cards -->
      <div class="hero-specialist-cards">
        <div class="specialist-card">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
          </svg>
          <span>Boeing 737 & Airbus 320 Specialists</span>
        </div>
        <div class="specialist-card">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 2L3 6v6c0 5 4 9 9 10 5-1 9-5 9-10V6l-9-4z"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
          <span>EASA/Eurocontrol Certified</span>
        </div>
      </div>
      
      <!-- Certification Logos -->
      <div class="hero-certifications">
        <div class="certification-logo">
          <img src="/images/logo-iso.png" alt="ISO Certified" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 40%22><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2212%22 fill=%22%23888%22>ISO</text></svg>'" />
        </div>
        <div class="certification-logo">
          <img src="/images/logo-easa.png" alt="EASA" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 40%22><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2212%22 fill=%22%23888%22>EASA</text></svg>'" />
        </div>
        <div class="certification-logo">
          <img src="/images/logo-eurocontrol.png" alt="Eurocontrol" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 40%22><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2210%22 fill=%22%23888%22>EUROCONTROL</text></svg>'" />
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

.hero-cta .btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
}

.hero-cta .btn svg {
  transition: transform var(--transition-fast);
}

.hero-cta .btn:hover svg {
  transform: translateX(4px);
}

/* Specialist Cards */
.hero-specialist-cards {
  display: flex;
  gap: var(--spacing-md);
  margin-top: var(--spacing-lg);
  flex-wrap: wrap;
}

.specialist-card {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  padding: 0.75rem 1.25rem;
  background: rgba(13, 13, 26, 0.8);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-lg);
  transition: all var(--transition-normal);
}

.specialist-card:hover {
  border-color: rgba(225, 18, 18, 0.3);
  background: rgba(13, 13, 26, 0.95);
}

.specialist-card svg {
  width: 24px;
  height: 24px;
  color: var(--color-accent);
}

.specialist-card span {
  font-size: var(--text-sm);
  color: var(--color-text-light);
  font-weight: 500;
}

/* Certification Logos */
.hero-certifications {
  display: flex;
  gap: var(--spacing-lg);
  margin-top: var(--spacing-xl);
  padding-top: var(--spacing-lg);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  flex-wrap: wrap;
  align-items: center;
}

.certification-logo {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0.5rem 1rem;
  background: rgba(255, 255, 255, 0.05);
  border-radius: var(--radius-md);
  transition: all var(--transition-normal);
}

.certification-logo:hover {
  background: rgba(255, 255, 255, 0.1);
}

.certification-logo img {
  height: 40px;
  width: auto;
  max-width: 120px;
  object-fit: contain;
  filter: grayscale(100%) brightness(0.8);
  opacity: 0.7;
  transition: all var(--transition-normal);
}

.certification-logo:hover img {
  filter: grayscale(0%) brightness(1);
  opacity: 1;
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
