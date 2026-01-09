<template>
  <section class="clients-section section" id="clients">
    <div class="container">
      <div class="section-title">
        <h2>They Trust Us</h2>
        <p>Leading aviation operators choose TRYM for their engineering needs</p>
      </div>
      
      <div class="clients-showcase">
        <div class="featured-client">
          <div class="client-logo-wrapper">
            <img src="https://www.wizzair.com/static/images/wizzair-logo.png" alt="Wizz Air" class="client-logo-main" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 200 60%22><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2224%22 fill=%22%23E8006F%22 font-weight=%22bold%22>WIZZ AIR</text></svg>'" />
          </div>
          <div class="client-info">
            <h3>Wizz Air</h3>
            <p class="client-description">
              Our primary partner and largest client. We provide comprehensive aircraft 
              maintenance oversight, technical audits, and engineering support for their 
              growing fleet of Airbus A320 family aircraft.
            </p>
            <div class="client-stats">
              <div class="client-stat">
                <span class="stat-value">A320</span>
                <span class="stat-label">Fleet Type</span>
              </div>
              <div class="client-stat">
                <span class="stat-value">EU</span>
                <span class="stat-label">Operations</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="trust-badges">
        <div class="badge-item">
          <div class="badge-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              <path d="M9 12l2 2 4-4"/>
            </svg>
          </div>
          <span>EASA Certified</span>
        </div>
        <div class="badge-item">
          <div class="badge-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
              <path d="M2 12h20"/>
            </svg>
          </div>
          <span>Eurocontrol Compliant</span>
        </div>
        <div class="badge-item">
          <div class="badge-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>
          <span>ISO Standards</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.clients-section {
  background: var(--color-bg-darker);
}

.clients-showcase {
  margin-bottom: var(--spacing-xl);
}

.featured-client {
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: var(--spacing-lg);
  align-items: center;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--spacing-lg);
  transition: all var(--transition-normal);
}

.featured-client:hover {
  border-color: rgba(225, 18, 18, 0.3);
  box-shadow: var(--shadow-glow);
}

.client-logo-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: var(--spacing-md);
  background: white;
  border-radius: var(--radius-md);
}

.client-logo-main {
  max-width: 200px;
  max-height: 80px;
  object-fit: contain;
}

.client-info h3 {
  font-size: var(--text-2xl);
  margin-bottom: var(--spacing-sm);
  color: var(--color-accent);
}

.client-description {
  font-size: var(--text-base);
  line-height: 1.8;
  margin-bottom: var(--spacing-md);
}

.client-stats {
  display: flex;
  gap: var(--spacing-lg);
}

.client-stat {
  display: flex;
  flex-direction: column;
}

.client-stat .stat-value {
  font-size: var(--text-xl);
  font-weight: 700;
  background: var(--gradient-brand);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.client-stat .stat-label {
  font-size: var(--text-xs);
  color: var(--color-text-muted);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.trust-badges {
  display: flex;
  justify-content: center;
  gap: var(--spacing-lg);
  flex-wrap: wrap;
}

.badge-item {
  display: flex;
  align-items: center;
  gap: var(--spacing-sm);
  padding: var(--spacing-sm) var(--spacing-md);
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-full);
  transition: all var(--transition-normal);
}

.badge-item:hover {
  border-color: rgba(225, 18, 18, 0.3);
  background: rgba(255, 255, 255, 0.06);
}

.badge-icon {
  width: 28px;
  height: 28px;
  color: var(--color-accent);
}

.badge-icon svg {
  width: 100%;
  height: 100%;
}

.badge-item span {
  font-size: var(--text-sm);
  font-weight: 500;
}

@media (max-width: 768px) {
  .featured-client {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .client-stats {
    justify-content: center;
  }
  
  .trust-badges {
    gap: var(--spacing-sm);
  }
  
  .badge-item {
    flex-direction: column;
    padding: var(--spacing-sm);
    text-align: center;
  }
}
</style>
