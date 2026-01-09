<template>
  <section class="about-section section" id="about">
    <div class="container">
      <div class="section-title">
        <h2>About Us</h2>
        <p>Meet the experts behind TRYM's success in aviation engineering</p>
      </div>
      
      <div class="about-intro">
        <div class="about-text">
          <h3>Who We Are</h3>
          <p>
            We are aviation experts who provide specialized advice on aircraft maintenance, 
            compliance, and asset management for airlines and lessors.
          </p>
          <p>
            We have proven many years of experience with Boeing 737 and Airbus 320 maintenance, 
            airworthiness review and operation within EASA/Eurocontrol environment on management positions.
          </p>
        </div>
      </div>
      
      <div class="team-grid">
        <div 
          v-for="(member, index) in team" 
          :key="index" 
          class="team-card"
          :style="{ animationDelay: `${index * 0.15}s` }"
        >
          <div class="team-image">
            <img :src="member.photo" :alt="member.name" />
            <div class="team-overlay">
              <a href="#" class="social-link" aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="team-info">
            <h4>{{ member.name }}</h4>
            <span class="team-role">{{ member.role }}</span>
            <p class="team-bio">{{ member.bio }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const team = ref([
  {
    name: 'Martin Novák',
    role: 'CEO & Lead Engineer',
    photo: '/images/team1.png',
    bio: 'Over 15 years of experience in aviation engineering and management. Expert in EASA compliance and aircraft maintenance oversight.'
  },
  {
    name: 'Jan Svoboda',
    role: 'Technical Director',
    photo: '/images/team2.png',
    bio: 'Specialist in Boeing 737 and Airbus 320 maintenance with extensive experience in lease transitions and technical audits.'
  },
  {
    name: 'Eva Králová',
    role: 'Compliance Manager',
    photo: '/images/team3.png',
    bio: 'Expert in regulatory compliance and airworthiness management. Certified EASA Part-M professional with global experience.'
  }
])
</script>

<style scoped lang="scss">
.about-section {
  background: var(--color-bg-dark);
}

.about-intro {
  max-width: 800px;
  margin: 0 auto var(--spacing-xl);
  text-align: center;
}

.about-text h3 {
  font-size: var(--text-2xl);
  margin-bottom: var(--spacing-md);
  color: var(--color-accent);
}

.about-text p {
  font-size: var(--text-lg);
  line-height: 1.8;
  margin-bottom: var(--spacing-sm);
}

.team-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--spacing-md);
}

.team-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  overflow: hidden;
  transition: all var(--transition-normal);
  animation: fadeInUp 0.8s ease forwards;
  opacity: 0;
}

.team-card:hover {
  transform: translateY(-10px);
  border-color: rgba(225, 18, 18, 0.3);
  box-shadow: var(--shadow-glow);
}

.team-image {
  position: relative;
  aspect-ratio: 1;
  overflow: hidden;
}

.team-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}

.team-card:hover .team-image img {
  transform: scale(1.1);
}

.team-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: var(--spacing-sm);
  background: linear-gradient(transparent, rgba(14, 27, 54, 0.9));
  opacity: 0;
  transition: opacity var(--transition-normal);
  display: flex;
  justify-content: center;
}

.team-card:hover .team-overlay {
  opacity: 1;
}

.social-link {
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--gradient-brand);
  border-radius: 50%;
  color: var(--color-text-light);
  transition: transform var(--transition-fast);
}

.social-link:hover {
  transform: scale(1.1);
}

.team-info {
  padding: var(--spacing-md);
  text-align: center;
}

.team-info h4 {
  font-size: var(--text-lg);
  margin-bottom: 0.25rem;
  font-family: 'Onest', sans-serif;
  font-weight: 600;
}

.team-role {
  display: block;
  font-size: var(--text-sm);
  color: var(--color-accent);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: var(--spacing-sm);
}

.team-bio {
  font-size: var(--text-sm);
  line-height: 1.6;
}

@media (max-width: 968px) {
  .team-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 640px) {
  .team-grid {
    grid-template-columns: 1fr;
    max-width: 400px;
    margin: 0 auto;
  }
}
</style>
