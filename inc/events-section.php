 <section class="events-section padding-top padding-bottom" id="events" style="padding-top: 80px; padding-bottom: 80px;">
  <div class="container">
    <div class="section-heading mb-5" style="margin-bottom: 60px;">
      <span class="pre-title wow fadeInUp" data-wow-delay=".2s">Activities</span>
      <h2 class="section-title wow fadeInUp" data-wow-delay=".4s" style="font-weight: 700;">Events</h2>
      <p class="section-text wow fadeInUp" data-wow-delay=".4s">Discover the events and activities that showcase Z-Connect's commitment to industry excellence and community engagement.</p>
    </div>
    
    <div class="events-slider position-relative">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="event-card text-center wow fadeInUp" data-wow-delay="0.2s" data-bs-toggle="modal" data-bs-target="#eventModal" data-modal-img="assets/events/Canon 600D (1087).JPG" data-modal-title="Z-Connect Industry Summit" style="cursor: pointer;">
              <div class="event-image position-relative overflow-hidden border-radius-8" style="height: 300px; border-radius: 8px;">
                <img class="img-fluid event-img" src="assets/events/Canon 600D (1087).JPG" alt="Event 1" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="overlay-hover-icon">
                  <i class="fas fa-search-plus"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="event-card text-center wow fadeInUp" data-wow-delay="0.3s" data-bs-toggle="modal" data-bs-target="#eventModal" data-modal-img="assets/events/DSC01535.JPG" data-modal-title="Networking Night" style="cursor: pointer;">
              <div class="event-image position-relative overflow-hidden border-radius-8" style="height: 300px; border-radius: 8px;">
                <img class="img-fluid event-img" src="assets/events/DSC01535.JPG" alt="Event 2" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="overlay-hover-icon">
                  <i class="fas fa-search-plus"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="event-card text-center wow fadeInUp" data-wow-delay="0.4s" data-bs-toggle="modal" data-bs-target="#eventModal" data-modal-img="assets/events/DSC02573.JPG" data-modal-title="Tech Workshop" style="cursor: pointer;">
              <div class="event-image position-relative overflow-hidden border-radius-8" style="height: 300px; border-radius: 8px;">
                <img class="img-fluid event-img" src="assets/events/DSC02573.JPG" alt="Event 3" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="overlay-hover-icon">
                  <i class="fas fa-search-plus"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Navigation Buttons -->
        <div class="events-swiper-nav-container" style="display: flex; justify-content: center; gap: 15px; margin-top: 30px;">
          <div class="events-swiper-prev" style="width: 45px; height: 45px; background: white; border: 1px solid #e0e0e0; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #0b5ed7; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: all 0.3s ease;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
          </div>
          <div class="events-swiper-next" style="width: 45px; height: 45px; background: white; border: 1px solid #e0e0e0; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #0b5ed7; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: all 0.3s ease;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: fit-content;">
    <div class="modal-content" style="background: transparent; border: none; box-shadow: none;">
      <div class="modal-body p-0 position-relative">
        
        <button type="button" class="btn-close custom-close-x" data-bs-dismiss="modal" aria-label="Close"></button>
        
        <div class="modal-img-container">
          <img id="modalImage" src="" alt="Popup" class="img-fluid" style="max-height: 80vh; display: block;">
          <div class="modal-caption-bar">
            <p id="modalTitle" class="mb-0 text-white fw-bold"></p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<style>
  /* Add hover effects and disabled state for events buttons */
  .events-swiper-prev:hover, .events-swiper-next:hover {
    background: #f8f9fa !important;
    border-color: #0b5ed7 !important;
  }
  .events-swiper-prev.swiper-button-disabled, .events-swiper-next.swiper-button-disabled {
    opacity: 0.5;
    cursor: not-allowed !important;
    color: #aaa !important;
    border-color: #e0e0e0 !important;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const eventModal = document.getElementById('eventModal');
    eventModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      const imgSrc = button.getAttribute('data-modal-img');
      const imgTitle = button.getAttribute('data-modal-title');
      
      const modalImg = eventModal.querySelector('#modalImage');
      const modalTitle = eventModal.querySelector('#modalTitle');
      
      modalImg.src = imgSrc;
      modalTitle.textContent = imgTitle;
    });
  });
</script>