<template>
  <section class="gallery-section section" id="gallery">
    <div class="container">
      <div class="section-title">
        <h2>Our Work</h2>
        <p>A glimpse into our aviation engineering projects</p>
      </div>
      
      <div class="gallery-grid">
        <div 
          v-for="(image, index) in gallery" 
          :key="index" 
          class="gallery-item"
          :class="image.size"
          @click="openLightbox(index)"
        >
          <img :src="image.src" :alt="image.alt" />
          <div class="gallery-overlay">
            <span class="gallery-icon">+</span>
            <span class="gallery-title">{{ image.alt }}</span>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Lightbox -->
    <div class="lightbox" v-if="lightboxOpen" @click="closeLightbox">
      <button class="lightbox-close" @click="closeLightbox">&times;</button>
      <button class="lightbox-nav prev" @click.stop="prevImage">‹</button>
      <div class="lightbox-content" @click.stop>
        <img :src="gallery[currentImage].src" :alt="gallery[currentImage].alt" />
        <p class="lightbox-caption">{{ gallery[currentImage].alt }}</p>
      </div>
      <button class="lightbox-nav next" @click.stop="nextImage">›</button>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const gallery = ref([
  { src: 'https://loremflickr.com/800/600/aircraft,technician?random=1', alt: 'Aircraft Inspection', size: 'large' },
  { src: 'https://loremflickr.com/800/600/jet,engine,mechanic?random=2', alt: 'Technical Audit', size: 'small' },
  { src: 'https://loremflickr.com/800/600/aviation,maintenance?random=3', alt: 'Maintenance Check', size: 'small' },
  { src: 'https://loremflickr.com/800/600/aviation,office?random=4', alt: 'Records Review', size: 'medium' },
  { src: 'https://loremflickr.com/800/600/aerospace,engineering?random=5', alt: 'Engineering Support', size: 'medium' }
])

const lightboxOpen = ref(false)
const currentImage = ref(0)

const openLightbox = (index) => {
  currentImage.value = index
  lightboxOpen.value = true
  document.body.style.overflow = 'hidden'
}

const closeLightbox = () => {
  lightboxOpen.value = false
  document.body.style.overflow = ''
}

const prevImage = () => {
  currentImage.value = (currentImage.value - 1 + gallery.value.length) % gallery.value.length
}

const nextImage = () => {
  currentImage.value = (currentImage.value + 1) % gallery.value.length
}
</script>

<style scoped>
.gallery-section {
  background: var(--color-bg-dark);
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(2, 250px);
  gap: var(--spacing-sm);
}

.gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: var(--radius-md);
  cursor: pointer;
}

.gallery-item.large {
  grid-column: span 2;
  grid-row: span 2;
}

.gallery-item.medium {
  grid-column: span 2;
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}

.gallery-item:hover img {
  transform: scale(1.1);
}

.gallery-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(14, 27, 54, 0.85);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity var(--transition-normal);
}

.gallery-item:hover .gallery-overlay {
  opacity: 1;
}

.gallery-icon {
  font-size: 3rem;
  color: var(--color-accent);
  margin-bottom: var(--spacing-xs);
}

.gallery-title {
  font-size: var(--text-sm);
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

/* Lightbox */
.lightbox {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.95);
  z-index: 2000;
  display: flex;
  align-items: center;
  justify-content: center;
  animation: fadeIn 0.3s ease;
}

.lightbox-close {
  position: absolute;
  top: 2rem;
  right: 2rem;
  background: none;
  border: none;
  color: var(--color-text-light);
  font-size: 3rem;
  cursor: pointer;
  transition: color var(--transition-fast);
}

.lightbox-close:hover {
  color: var(--color-accent);
}

.lightbox-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.1);
  border: none;
  color: var(--color-text-light);
  font-size: 3rem;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  cursor: pointer;
  transition: all var(--transition-fast);
}

.lightbox-nav:hover {
  background: var(--color-accent);
}

.lightbox-nav.prev {
  left: 2rem;
}

.lightbox-nav.next {
  right: 2rem;
}

.lightbox-content {
  max-width: 90vw;
  max-height: 80vh;
  text-align: center;
}

.lightbox-content img {
  max-width: 100%;
  max-height: 70vh;
  object-fit: contain;
  border-radius: var(--radius-md);
}

.lightbox-caption {
  margin-top: var(--spacing-md);
  font-size: var(--text-lg);
  color: var(--color-text-muted);
}

@media (max-width: 968px) {
  .gallery-grid {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: auto;
  }
  
  .gallery-item {
    aspect-ratio: 4/3;
  }
  
  .gallery-item.large,
  .gallery-item.medium {
    grid-column: span 1;
    grid-row: span 1;
  }
}

@media (max-width: 480px) {
  .gallery-grid {
    grid-template-columns: 1fr;
  }
  
  .lightbox-nav {
    width: 40px;
    height: 40px;
    font-size: 2rem;
  }
}
</style>
