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
        <!-- Pagination -->
        <div class="swiper-pagination" style="position: relative; margin-top: 30px;"></div>
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