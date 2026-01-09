<template>
  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <img src="/images/logo.png" alt="TRYM Logo" class="footer-logo" />
            <p class="footer-brand-subtitle">TRY MY ENGINEERING</p>
            <p class="footer-tagline">
              Aviation experts providing specialized advice on aircraft maintenance, 
              compliance, and asset management.
            </p>
            <div class="footer-social">
              <a href="#" class="social-link" aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
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
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="16" height="16">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                  </svg>
                </span>
                Kozlovice, Czech Republic
              </li>
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="16" height="16">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                  </svg>
                </span>
                <a href="mailto:info@trym.cz">info@trym.cz</a>
              </li>
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="16" height="16">
                    <rect x="3" y="3" width="18" height="18" rx="2"/>
                    <path d="M3 9h18"/>
                  </svg>
                </span>
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
            © {{ currentYear }} TRYMyengineering s.r.o., všechna práva vyhrazena.
          </p>
          <div class="footer-badges">
            <span class="badge">EASA Certified</span>
            <span class="badge">Eurocontrol</span>
          </div>
          <div class="footer-credit">
            <span>Powered by</span>
            <a href="https://evidsoft.cz" target="_blank" rel="noopener">evidsoft</a>
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

<style scoped lang="scss">
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
  margin-bottom: var(--spacing-xs);
}

.footer-brand-subtitle {
  font-size: var(--text-xs);
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: var(--color-accent);
  margin-bottom: var(--spacing-sm);
  font-weight: 500;
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
  color: var(--color-text-light);
  transition: all var(--transition-fast);
}

.social-link:hover {
  background: var(--gradient-brand);
  border-color: transparent;
}

.footer-nav h4,
.footer-services h4,
.footer-contact h4 {
  font-size: var(--text-base);
  font-family: 'Onest', sans-serif;
  font-weight: 600;
  margin-bottom: var(--spacing-md);
  color: var(--color-accent);
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
  color: var(--color-accent);
}

.footer-contact li {
  display: flex;
  align-items: center;
  gap: var(--spacing-xs);
}

.footer-contact .icon {
  color: var(--color-accent);
  display: flex;
  align-items: center;
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

.footer-credit {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-size: var(--text-xs);
  color: var(--color-text-muted);
}

.footer-credit a {
  color: var(--color-accent);
  font-weight: 500;
  transition: opacity var(--transition-fast);
}

.footer-credit a:hover {
  opacity: 0.8;
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
