<template>
  <section class="contact-section section" id="contact">
    <div class="container">
      <div class="section-title">
        <h2>Contact Us</h2>
        <p>Get in touch with our aviation experts</p>
      </div>
      
      <div class="contact-grid">
        <div class="contact-info">
          <div class="company-card">
            <h3>TRYMyengineering s.r.o.</h3>
            
            <div class="contact-items">
              <div class="contact-item">
                <span class="contact-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                  </svg>
                </span>
                <div class="contact-details">
                  <span class="contact-label">Address</span>
                  <span class="contact-value">Kozlovice, Czech Republic</span>
                </div>
              </div>
              
              <div class="contact-item">
                <span class="contact-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                  </svg>
                </span>
                <div class="contact-details">
                  <span class="contact-label">Company ID (IČO)</span>
                  <span class="contact-value">22270019</span>
                </div>
              </div>
              
              <div class="contact-item">
                <span class="contact-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                  </svg>
                </span>
                <div class="contact-details">
                  <span class="contact-label">Email</span>
                  <a href="mailto:info@trym.cz" class="contact-value contact-link">info@trym.cz</a>
                </div>
              </div>
              
              <div class="contact-item">
                <span class="contact-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="2" y1="12" x2="22" y2="12"/>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                  </svg>
                </span>
                <div class="contact-details">
                  <span class="contact-label">Website</span>
                  <a href="https://trym.cz" class="contact-value contact-link">www.trym.cz</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="qr-section">
            <h4>Scan to Visit Our Website</h4>
            <div class="qr-code">
              <img :src="qrCodeUrl" alt="QR Code for trym.cz" />
            </div>
            <p class="qr-hint">Point your camera at the QR code</p>
          </div>
        </div>
        
        <div class="contact-form-wrapper">
          <h3>Write to Us</h3>
          <p class="form-subtitle">Have a question or need our expertise? Send us a message.</p>
          
          <form @submit.prevent="submitForm" class="contact-form">
            <div class="form-row">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input 
                  type="text" 
                  id="name" 
                  v-model="form.name" 
                  placeholder="John Doe"
                  required 
                />
              </div>
              
              <div class="form-group">
                <label for="company">Company</label>
                <input 
                  type="text" 
                  id="company" 
                  v-model="form.company" 
                  placeholder="Airline or Aviation Company"
                />
              </div>
            </div>
            
            <div class="form-group">
              <label for="email">Email Address</label>
              <input 
                type="email" 
                id="email" 
                v-model="form.email" 
                placeholder="john@company.com"
                required 
              />
            </div>
            
            <div class="form-group">
              <label for="subject">Subject</label>
              <select id="subject" v-model="form.subject" required>
                <option value="">Select a topic...</option>
                <option value="technical-audit">Technical Audit Request</option>
                <option value="engineering">Engineering Support</option>
                <option value="asset-management">Asset Management</option>
                <option value="consultation">General Consultation</option>
                <option value="other">Other</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="message">Message</label>
              <textarea 
                id="message" 
                v-model="form.message" 
                rows="5"
                placeholder="Tell us about your project or inquiry..."
                required
              ></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-submit" :disabled="isSubmitting">
              <span v-if="!isSubmitting">Send Message</span>
              <span v-else>Sending...</span>
            </button>
            
            <p v-if="submitStatus === 'success'" class="form-status success">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
              </svg>
              Thank you! We'll get back to you soon.
            </p>
            <p v-if="submitStatus === 'error'" class="form-status error">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                <circle cx="12" cy="12" r="10"/>
                <line x1="15" y1="9" x2="9" y2="15"/>
                <line x1="9" y1="9" x2="15" y2="15"/>
              </svg>
              Something went wrong. Please try again or email us directly.
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, computed } from 'vue'

const form = ref({
  name: '',
  company: '',
  email: '',
  subject: '',
  message: ''
})

const isSubmitting = ref(false)
const submitStatus = ref('')

// QR Code URL using QR Server API - updated colors
const qrCodeUrl = computed(() => {
  return `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://trym.cz&bgcolor=0E1B36&color=FF4B91`
})

const submitForm = async () => {
  isSubmitting.value = true
  submitStatus.value = ''
  
  const encode = (data) => {
    return Object.keys(data)
      .map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key]))
      .join('&')
  }

  try {
    const response = await fetch('/', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: encode({
        'form-name': 'contact',
        ...form.value
      })
    })
    
    if (response.ok) {
      submitStatus.value = 'success'
      form.value = { name: '', company: '', email: '', subject: '', message: '' }
    } else {
      throw new Error('Failed to send')
    }
  } catch (error) {
    console.error('Form submission error:', error)
    submitStatus.value = 'error'
  } finally {
    isSubmitting.value = false
  }
}
</script>

<style scoped lang="scss">
.contact-section {
  background: var(--color-bg-dark);
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: var(--spacing-lg);
  align-items: start;
}

.contact-info {
  display: flex;
  flex-direction: column;
  gap: var(--spacing-md);
}

.company-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--spacing-lg);
}

.company-card h3 {
  font-size: var(--text-lg);
  margin-bottom: var(--spacing-md);
  color: var(--color-accent);
  font-family: 'Onest', sans-serif;
}

.contact-items {
  display: flex;
  flex-direction: column;
  gap: var(--spacing-md);
}

.contact-item {
  display: flex;
  align-items: flex-start;
  gap: var(--spacing-sm);
}

.contact-icon {
  width: 24px;
  height: 24px;
  flex-shrink: 0;
  color: var(--color-accent);
  margin-top: 2px;
}

.contact-icon svg {
  width: 100%;
  height: 100%;
}

.contact-details {
  display: flex;
  flex-direction: column;
}

.contact-label {
  font-size: var(--text-xs);
  color: var(--color-text-muted);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.contact-value {
  font-size: var(--text-base);
  color: var(--color-text-light);
}

.contact-link {
  transition: color var(--transition-fast);
}

.contact-link:hover {
  color: var(--color-accent);
}

.qr-section {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--spacing-lg);
  text-align: center;
}

.qr-section h4 {
  font-size: var(--text-base);
  margin-bottom: var(--spacing-sm);
  color: var(--color-text-light);
  font-family: 'Onest', sans-serif;
}

.qr-code {
  display: inline-block;
  padding: var(--spacing-sm);
  background: white;
  border-radius: var(--radius-md);
  margin-bottom: var(--spacing-xs);
}

.qr-code img {
  width: 150px;
  height: 150px;
  display: block;
}

.qr-hint {
  font-size: var(--text-xs);
  color: var(--color-text-muted);
}

.contact-form-wrapper {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: var(--spacing-lg);
}

.contact-form-wrapper h3 {
  font-size: var(--text-2xl);
  margin-bottom: var(--spacing-xs);
  color: var(--color-text-light);
}

.form-subtitle {
  margin-bottom: var(--spacing-md);
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--spacing-sm);
}

.form-group {
  margin-bottom: var(--spacing-sm);
}

.form-group label {
  display: block;
  font-size: var(--text-sm);
  margin-bottom: 0.5rem;
  color: var(--color-text-light);
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 0.875rem 1rem;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--radius-md);
  color: var(--color-text-light);
  font-size: var(--text-base);
  font-family: inherit;
  transition: all var(--transition-fast);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
  color: var(--color-text-muted);
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: var(--color-accent);
  background: rgba(255, 255, 255, 0.08);
}

.form-group select {
  cursor: pointer;
}

.form-group select option {
  background: var(--color-bg-dark);
  color: var(--color-text-light);
}

.form-group textarea {
  resize: vertical;
  min-height: 120px;
}

.btn-submit {
  width: 100%;
  margin-top: var(--spacing-sm);
}

.btn-submit:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}

.form-status {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  text-align: center;
  margin-top: var(--spacing-sm);
  padding: var(--spacing-sm);
  border-radius: var(--radius-md);
}

.form-status.success {
  background: rgba(50, 199, 70, 0.1);
  color: var(--color-success);
}

.form-status.error {
  background: rgba(225, 18, 18, 0.1);
  color: var(--color-primary);
}

@media (max-width: 968px) {
  .contact-grid {
    grid-template-columns: 1fr;
  }
  
  .form-row {
    grid-template-columns: 1fr;
  }
}
</style>
