<template>
  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <img src="/images/logo.png" alt="TRYM Logo" class="footer-logo" />
            <p class="footer-tagline">
              Aviation experts providing specialized advice on aircraft maintenance, 
              compliance, and asset management.
            </p>
            <div class="footer-social">
              <a href="#" class="social-link" aria-label="LinkedIn">
                <span>in</span>
              </a>
            </div>
          </div>
          
          <div class="footer-nav">
            <h4>Navigation</h4>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#services">Our Services</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
          
          <div class="footer-services">
            <h4>Services</h4>
            <ul>
              <li>Technical Audits</li>
              <li>Aircraft Inspections</li>
              <li>Engineering Support</li>
              <li>Asset Management</li>
              <li>Compliance Consulting</li>
            </ul>
          </div>
          
          <div class="footer-contact">
            <h4>Contact</h4>
            <ul>
              <li>
                <span class="icon">📍</span>
                Kozlovice, Czech Republic
              </li>
              <li>
                <span class="icon">✉️</span>
                <a href="mailto:info@trym.cz">info@trym.cz</a>
              </li>
              <li>
                <span class="icon">🏢</span>
                IČO: 22270019
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-content">
          <p class="copyright">
            &copy; {{ currentYear }} TRYMyengineering s.r.o. All rights reserved.
          </p>
          <div class="footer-badges">
            <span class="badge">EASA Certified</span>
            <span class="badge">Eurocontrol</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue'

const currentYear = computed(() => new Date().getFullYear())
</script>

<style scoped>
.footer {
  background: var(--color-bg-darker);
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.footer-top {
  padding: var(--spacing-xl) 0 var(--spacing-lg);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.5fr;
  gap: var(--spacing-lg);
}

.footer-logo {
  height: 50px;
  margin-bottom: var(--spacing-sm);
}

.footer-tagline {
  font-size: var(--text-sm);
  line-height: 1.7;
  margin-bottom: var(--spacing-md);
  max-width: 300px;
}

.footer-social {
  display: flex;
  gap: var(--spacing-xs);
}

.social-link {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  font-weight: 700;
  transition: all var(--transition-fast);
}

.social-link:hover {
  background: var(--gradient-brand);
  border-color: transparent;
  color: var(--color-bg-dark);
}

.footer-nav h4,
.footer-services h4,
.footer-contact h4 {
  font-size: var(--text-base);
  font-family: 'Inter', sans-serif;
  font-weight: 600;
  margin-bottom: var(--spacing-md);
  color: var(--color-gold);
}

.footer-nav ul,
.footer-services ul,
.footer-contact ul {
  list-style: none;
}

.footer-nav li,
.footer-services li,
.footer-contact li {
  margin-bottom: var(--spacing-xs);
  font-size: var(--text-sm);
  color: var(--color-text-muted);
}

.footer-nav a,
.footer-contact a {
  color: var(--color-text-muted);
  transition: color var(--transition-fast);
}

.footer-nav a:hover,
.footer-contact a:hover {
  color: var(--color-pink);
}

.footer-contact li {
  display: flex;
  align-items: center;
  gap: var(--spacing-xs);
}

.footer-contact .icon {
  font-size: 1rem;
}

.footer-bottom {
  padding: var(--spacing-md) 0;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.footer-bottom-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.copyright {
  font-size: var(--text-sm);
  color: var(--color-text-muted);
}

.footer-badges {
  display: flex;
  gap: var(--spacing-xs);
}

.footer-badges .badge {
  padding: 0.25rem 0.75rem;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-full);
  font-size: var(--text-xs);
  color: var(--color-text-muted);
}

@media (max-width: 968px) {
  .footer-grid {
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-md);
  }
  
  .footer-brand {
    grid-column: span 2;
  }
}

@media (max-width: 640px) {
  .footer-grid {
    grid-template-columns: 1fr;
  }
  
  .footer-brand {
    grid-column: span 1;
    text-align: center;
  }
  
  .footer-tagline {
    max-width: none;
  }
  
  .footer-social {
    justify-content: center;
  }
  
  .footer-bottom-content {
    flex-direction: column;
    gap: var(--spacing-sm);
    text-align: center;
  }
}
</style>
