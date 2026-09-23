<!DOCTYPE html>
<html lang="en-PH">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Z-Connect - Application Form">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images-zconnect/logo/z-connect-circle-logo.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="css/vendors/animate.css">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="css/vendors/flaticon/flaticon.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="css/vendors/all.min.css">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
        <link rel="stylesheet" href="css/main-LTR.css?v=10">
        <title>Application - Z-Connect</title>
  </head>
  <body>
  
    <!--Start Page Header-->
    <?php include('inc/header-section.php');?>
    <!--End Page Header-->

    <!-- Start inner Page hero-->
    <section class="page-hero inner-page-hero" id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Application</h1>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php"><i class="bi bi-house icon "></i>home</a></li>
              <li class="breadcrumb-item active">application</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    
    <!-- Start Application Section -->
    <section class="page-application" style="padding: 85px 0 80px 0;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="application-form-wrapper">
              <h1 class="section-title text-center mb-5">Join Our Team</h1>
              
              <form id="applicationForm" action="php/submit-application.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="form-group mb-3">
                      <label for="fullName" class="form-label">Full Name <span style="color: red;">*</span></label>
                      <input type="text" class="form-control" id="fullName" name="fullName" required>
                      <small class="text-danger d-none" id="fullNameError">Please enter a valid full name</small>
                    </div>
                  </div>

                  <div class="col-12 col-lg-6">
                    <div class="form-group mb-3">
                      <label for="email" class="form-label">Email Address <span style="color: red;">*</span></label>
                      <input type="email" class="form-control" id="email" name="email" required>
                      <small class="text-danger d-none" id="emailError">Please enter a valid email address</small>
                    </div>
                  </div>

                  <div class="col-12 col-lg-6">
                    <div class="form-group mb-3">
                      <label for="phone" class="form-label">Phone Number <span style="color: red;">*</span></label>
                      <input type="tel" class="form-control" id="phone" name="phone" required>
                      <small class="text-danger d-none" id="phoneError">Please enter a valid phone number</small>
                    </div>
                  </div>

                  <div class="col-12 col-lg-6">
                    <div class="form-group mb-3">
                      <label for="position" class="form-label">Position Applying For <span style="color: red;">*</span></label>
                      <select class="form-control" id="position" name="position" required>
                        <option value="">Select a position</option>
                        <optgroup label="Sales Department">
                          <option value="Sr. Account Manager">Sr. Account Manager</option>
                          <option value="Account Manager">Account Manager</option>
                          <option value="Sales Consultant">Sales Consultant</option>
                        </optgroup>
                        <optgroup label="HR Department">
                          <option value="HR Manager">HR Manager</option>
                          <option value="HRIS Manager">HRIS Manager</option>
                          <option value="Benefits Officer/Resource Manager">Benefits Officer/Resource Manager</option>
                          <option value="Recruitment Officer">Recruitment Officer</option>
                          <option value="HR Associate">HR Associate</option>
                        </optgroup>
                        <optgroup label="Technical Department">
                          <option value="Project Manager">Project Manager</option>
                        </optgroup>
                        <optgroup label="Network Department">
                          <option value="Network Engineer">Network Engineer</option>
                        </optgroup>
                        <optgroup label="Admin Department">
                          <option value="Admin/Finance Manager">Admin/Finance Manager</option>
                          <option value="Liaison Officer/Accounting Staff">Liaison Officer/Accounting Staff</option>
                          <option value="Accounting Staff">Accounting Staff</option>
                          <option value="Field Collection Officer">Field Collection Officer</option>
                          <option value="Purchasing Officer">Purchasing Officer</option>
                          <option value="Purchasing/Logistics">Purchasing/Logistics</option>
                        </optgroup>
                        <optgroup label="Documentation Department">
                          <option value="Technical Drafter">Technical Drafter</option>
                          <option value="Warehouse Personnel">Warehouse Personnel</option>
                          <option value="Driver">Driver</option>
                          <option value="Utility">Utility</option>
                        </optgroup>
                      </select>
                      <small class="text-danger d-none" id="positionError">Please select a position</small>
                    </div>
                  </div>

                  <div class="col-12 col-lg-6">
                    <div class="form-group mb-3">
                      <label for="experience" class="form-label">Years of Experience <span style="color: red;">*</span></label>
                      <input type="number" class="form-control" id="experience" name="experience" min="0" required>
                      <small class="text-danger d-none" id="experienceError">Please enter a valid number</small>
                    </div>
                  </div>

                  <div class="col-12 col-lg-6">
                    <div class="form-group mb-3">
                      <label for="resume" class="form-label">Upload Resume (PDF) <span style="color: red;">*</span></label>
                      <input type="file" class="form-control" id="resume" name="resume" accept=".pdf" required>
                      <small class="text-danger d-none" id="resumeError">Please upload a PDF file</small>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group mb-3">
                      <label for="message" class="form-label">Additional Information</label>
                      <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group mb-4">
                      <div class="form-check terms-check">
                        <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms">
                          I have read and agree to the
                          <button type="button" class="terms-link" id="openTerms">Terms and Conditions</button>
                          <span style="color: red;">*</span>
                        </label>
                      </div>
                      <small class="text-danger d-none" id="termsError">Please read and agree to the Terms and Conditions</small>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-solid cta-link-primary" style="padding: 0.75rem 1.5rem; width: fit-content;">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Application Section -->

    <!-- Start Footer-->
    <?php include('inc/footer-section.php');?>
    <!-- End Footer-->
    
    <!-- jquery -->
    <script src="js/vendors/jquery-3.6.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/vendors/bootstrap.bundle.min.js"></script>

    <!-- Application Form Validation and Submission -->
    <style>
      /* ============================================================
         Terms & Conditions
         ============================================================ */
      .terms-check {
        display: flex;
        align-items: flex-start;
        gap: 8px;
      }

      .terms-check .form-check-input {
        margin-top: 0.3rem;
        flex-shrink: 0;
        cursor: pointer;
      }

      .terms-check .form-check-label {
        line-height: 1.6;
      }

      .terms-link {
        border: 0;
        padding: 0;
        background: none;
        color: #1073ac;
        font: inherit;
        font-weight: 600;
        text-decoration: underline;
        cursor: pointer;
      }

      .terms-link:hover {
        color: #1050ac;
      }

      .terms-modal-backdrop {
        display: none;
        position: fixed;
        inset: 0;
        padding: 20px;
        background: rgba(0, 0, 0, 0.65);
        z-index: 1060;
        align-items: center;
        justify-content: center;
      }

      .terms-modal-backdrop.show {
        display: flex;
      }

      body.terms-modal-open {
        overflow: hidden;
      }

      .terms-modal {
        width: min(760px, 100%);
        max-height: 90vh;
        display: flex;
        flex-direction: column;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
        overflow: hidden;
        text-align: left;
        animation: termsModalIn 0.2s ease-out;
      }

      @keyframes termsModalIn {
        from {
          opacity: 0;
          transform: translateY(10px) scale(0.98);
        }
        to {
          opacity: 1;
          transform: translateY(0) scale(1);
        }
      }

      .terms-modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 20px 25px;
        border-bottom: 1px solid #e9ecef;
      }

      .terms-modal-header h2 {
        margin: 0;
        color: #1073ac;
        font-size: 24px;
        font-weight: 700;
      }

      .terms-modal-close {
        width: 36px;
        height: 36px;
        padding: 0;
        border: 0;
        border-radius: 50%;
        background: #f1f3f5;
        color: #555;
        font-size: 26px;
        line-height: 1;
        cursor: pointer;
        transition: 0.2s ease;
      }

      .terms-modal-close:hover {
        background: #e2e6ea;
        color: #111;
      }

      .terms-modal-body {
        padding: 25px;
        overflow-y: auto;
        color: #333;
        font-size: 15px;
        line-height: 1.7;
      }

      .terms-modal-body > p:first-child {
        margin-top: 0;
        margin-bottom: 22px;
      }

      .terms-modal-body h3 {
        margin: 20px 0 6px;
        color: #1073ac;
        font-size: 17px;
        font-weight: 700;
      }

      .terms-modal-body p {
        margin: 0 0 10px;
      }

      .terms-confirmation {
        margin-top: 24px;
        padding: 16px 18px;
        border-left: 4px solid #1073ac;
        background: #f5f9fc;
        border-radius: 0 6px 6px 0;
      }

      .terms-confirmation strong {
        display: block;
        margin-bottom: 4px;
        color: #1073ac;
      }

      .terms-confirmation p {
        margin-bottom: 0;
      }

      .terms-modal-footer {
        display: flex;
        justify-content: flex-end;
        padding: 15px 25px;
        border-top: 1px solid #e9ecef;
      }

      /* ============================================================
         Application Submission Success Modal
         ============================================================ */
      .modal-backdrop {
        display: none;
        position: fixed;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1040;
      }

      .modal-backdrop.show {
        display: block;
      }

      .modal-content-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.3);
        z-index: 1050;
        max-width: 500px;
        width: 90%;
        text-align: center;
      }

      .modal-content-popup.show {
        display: block;
      }

      .modal-content-popup h2 {
        color: #1073ac;
        font-size: 24px;
        margin-bottom: 15px;
        margin-top: 0;
      }

      .modal-content-popup p {
        color: #333;
        font-size: 16px;
        margin-bottom: 20px;
        line-height: 1.5;
      }

      .modal-close-btn {
        background-color: #1073ac;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .modal-close-btn:hover {
        background-color: #1050ac;
      }
    </style>
    
    <script>
      const form = document.getElementById('applicationForm');

      // Auto-select position from URL query parameter
      try {
        const urlParams = new URLSearchParams(window.location.search);
        const posParam = urlParams.get('position');
        if (posParam) {
          const selectElem = document.getElementById('position');
          if (selectElem) {
            for (let i = 0; i < selectElem.options.length; i++) {
              const optVal = selectElem.options[i].value.toLowerCase();
              const targetVal = posParam.toLowerCase();
              if (optVal && (optVal.includes(targetVal) || targetVal.includes(optVal))) {
                selectElem.selectedIndex = i;
                break;
              }
            }
          }
        }
      } catch (e) {
        console.warn('Could not auto-select position:', e);
      }
      
      // ============================================================
      // Terms & Conditions Modal
      // ============================================================
      const termsModalBackdrop = document.createElement('div');
      termsModalBackdrop.className = 'terms-modal-backdrop';
      termsModalBackdrop.innerHTML = `
        <div class="terms-modal" role="dialog" aria-modal="true" aria-labelledby="termsModalTitle">
          <div class="terms-modal-header">
            <h2 id="termsModalTitle">Terms and Conditions</h2>
            <button type="button" class="terms-modal-close" id="closeTerms" aria-label="Close Terms and Conditions">
              &times;
            </button>
          </div>

          <div class="terms-modal-body">
            <p>By submitting an application through the Z-Connect website, I acknowledge and agree to the following:</p>

            <h3>1. Accuracy of Information</h3>
            <p>I confirm that the information and documents I provide are true, complete, and accurate to the best of my knowledge.</p>

            <h3>2. Application Review</h3>
            <p>I understand that submitting an application does not guarantee employment. Z-Connect Inc. reserves the right to review applications and select candidates based on the requirements and qualifications of each position.</p>

            <h3>3. Use of Applicant Information</h3>
            <p>I authorize Z-Connect Inc. to collect, use, and process the information I provide for recruitment, evaluation, communication, and other legitimate employment-related purposes.</p>

            <h3>4. Confidentiality</h3>
            <p>I understand that any information submitted during the application process may be accessed by authorized personnel involved in recruitment and hiring.</p>

            <h3>5. Communication</h3>
            <p>I agree that Z-Connect Inc. may contact me regarding my application, interview schedules, employment opportunities, or other recruitment-related matters using the contact information I provide.</p>

            <h3>6. False or Misleading Information</h3>
            <p>I understand that providing false, misleading, or fraudulent information may result in the rejection of my application or withdrawal of an employment offer.</p>

            <div class="terms-confirmation">
              <strong>Agreement</strong>
              <p>By checking the box below, I confirm that I have read, understood, and agreed to these Terms and Conditions.</p>
            </div>
          </div>

          <div class="terms-modal-footer">
            <button type="button" class="modal-close-btn" id="agreeAndCloseTerms">Close</button>
          </div>
        </div>
      `;
      document.body.appendChild(termsModalBackdrop);

      const openTerms = document.getElementById('openTerms');
      const closeTerms = document.getElementById('closeTerms');
      const agreeAndCloseTerms = document.getElementById('agreeAndCloseTerms');

      function openTermsModal() {
        termsModalBackdrop.classList.add('show');
        document.body.classList.add('terms-modal-open');
      }

      function closeTermsModal() {
        termsModalBackdrop.classList.remove('show');
        document.body.classList.remove('terms-modal-open');
      }

      openTerms.addEventListener('click', openTermsModal);
      closeTerms.addEventListener('click', closeTermsModal);
      agreeAndCloseTerms.addEventListener('click', closeTermsModal);

      termsModalBackdrop.addEventListener('click', function(e) {
        if (e.target === termsModalBackdrop) {
          closeTermsModal();
        }
      });

      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && termsModalBackdrop.classList.contains('show')) {
          closeTermsModal();
        }
      });

      // ============================================================
      // Application Submission Success Modal
      // ============================================================
      // Modal elements
      const modal = document.createElement('div');
      modal.className = 'modal-backdrop';
      document.body.appendChild(modal);
      
      const modalContent = document.createElement('div');
      modalContent.className = 'modal-content-popup';
      modalContent.innerHTML = `
        <h2>Application Submitted!</h2>
        <p>Thank you for your interest in joining our team!<br><br>A confirmation email has been sent to your email address. Please check your Gmail inbox for further details.</p>
        <button class="modal-close-btn" onclick="location.reload()">Close</button>
      `;
      document.body.appendChild(modalContent);
      
      function showModal() {
        modal.classList.add('show');
        modalContent.classList.add('show');
      }
      
      function hideModal() {
        modal.classList.remove('show');
        modalContent.classList.remove('show');
      }
      
      function validateForm() {
        // Reset all error messages
        document.getElementById('fullNameError').classList.add('d-none');
        document.getElementById('emailError').classList.add('d-none');
        document.getElementById('phoneError').classList.add('d-none');
        document.getElementById('positionError').classList.add('d-none');
        document.getElementById('experienceError').classList.add('d-none');
        document.getElementById('resumeError').classList.add('d-none');
        document.getElementById('termsError').classList.add('d-none');

        let isValid = true;

        // Validate Full Name
        const fullName = document.getElementById('fullName').value.trim();
        if (fullName.length < 3) {
          document.getElementById('fullNameError').classList.remove('d-none');
          isValid = false;
        }

        // Validate Email
        const email = document.getElementById('email').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          document.getElementById('emailError').classList.remove('d-none');
          isValid = false;
        }

        // Validate Phone
        const phone = document.getElementById('phone').value.trim();
        const phoneRegex = /^[0-9\-\+\(\)\s]+$/;
        if (phone.length < 7 || !phoneRegex.test(phone)) {
          document.getElementById('phoneError').classList.remove('d-none');
          isValid = false;
        }

        // Validate Position
        const position = document.getElementById('position').value;
        if (position === '') {
          document.getElementById('positionError').classList.remove('d-none');
          isValid = false;
        }

        // Validate Experience
        const experience = document.getElementById('experience').value;
        if (experience === '' || experience < 0) {
          document.getElementById('experienceError').classList.remove('d-none');
          isValid = false;
        }

        // Validate Resume
        const resume = document.getElementById('resume').files;
        if (resume.length === 0) {
          document.getElementById('resumeError').classList.remove('d-none');
          isValid = false;
        } else {
          const resumeFile = resume[0];
          if (resumeFile.type !== 'application/pdf') {
            document.getElementById('resumeError').classList.remove('d-none');
            isValid = false;
          }
          // Check file size (max 5MB)
          if (resumeFile.size > 5 * 1024 * 1024) {
            document.getElementById('resumeError').textContent = 'Resume file must be less than 5MB';
            document.getElementById('resumeError').classList.remove('d-none');
            isValid = false;
          }
        }

        // Validate Terms
        const agreeTerms = document.getElementById('agreeTerms').checked;
        if (!agreeTerms) {
          document.getElementById('termsError').classList.remove('d-none');
          isValid = false;
        }

        return isValid;
      }

      // Handle form submission
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (!validateForm()) {
          return false;
        }

        // Show loading state
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting...';

        // Create FormData for file upload
        const formData = new FormData(form);

        // Submit via AJAX
        fetch(form.getAttribute('action'), {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          // Reset button state
          submitBtn.disabled = false;
          submitBtn.textContent = originalText;

          if (data.success) {
            // Show success modal
            showModal();
            
            // Reset form
            form.reset();
          } else {
            // Show error message
            let messageDiv = document.getElementById('formMessage');
            if (!messageDiv) {
              messageDiv = document.createElement('div');
              messageDiv.id = 'formMessage';
              messageDiv.style.marginTop = '20px';
              messageDiv.style.padding = '15px';
              messageDiv.style.borderRadius = '5px';
              messageDiv.style.fontWeight = 'bold';
              form.parentNode.insertBefore(messageDiv, form);
            }
            messageDiv.style.backgroundColor = '#f8d7da';
            messageDiv.style.color = '#721c24';
            messageDiv.style.border = '1px solid #f5c6cb';
            messageDiv.textContent = '✗ ' + data.message;
          }
        })
        .catch(error => {
          // Reset button state
          submitBtn.disabled = false;
          submitBtn.textContent = originalText;

          // Show error message
          let messageDiv = document.getElementById('formMessage');
          if (!messageDiv) {
            messageDiv = document.createElement('div');
            messageDiv.id = 'formMessage';
            messageDiv.style.marginTop = '20px';
            messageDiv.style.padding = '15px';
            messageDiv.style.borderRadius = '5px';
            messageDiv.style.fontWeight = 'bold';
            form.parentNode.insertBefore(messageDiv, form);
          }

          messageDiv.style.backgroundColor = '#f8d7da';
          messageDiv.style.color = '#721c24';
          messageDiv.style.border = '1px solid #f5c6cb';
          messageDiv.textContent = '✗ Error submitting form. Please try again later.';
          
          console.error('Form submission error:', error);
        });

        return false;
      });
    </script>

  </body>
</html>
