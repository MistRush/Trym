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
              <div class="team-social">
                <a href="#" class="social-link">in</a>
              </div>
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

<style scoped>
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
  color: var(--color-gold);
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
  border-color: rgba(212, 100, 124, 0.3);
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
  background: linear-gradient(transparent, rgba(74, 25, 66, 0.9));
  opacity: 0;
  transition: opacity var(--transition-normal);
  display: flex;
  justify-content: center;
}

.team-card:hover .team-overlay {
  opacity: 1;
}

.social-link {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--gradient-brand);
  border-radius: 50%;
  color: var(--color-bg-dark);
  font-weight: 700;
  font-size: var(--text-lg);
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
  font-size: var(--text-xl);
  margin-bottom: 0.25rem;
  font-family: 'Inter', sans-serif;
}

.team-role {
  display: block;
  font-size: var(--text-sm);
  color: var(--color-pink);
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
