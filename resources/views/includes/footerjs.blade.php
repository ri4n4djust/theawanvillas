<!-- Include JavaScript resources -->
<script src="{{asset('assets/js/jquery.1.8.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.zoomslider.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/featherlight.min.js')}}"></script>
<script src="{{asset('assets/js/featherlight.gallery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.enllax.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!-- <script src="js/jquery.stickyNavbar.min.js"></script> -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/images-loaded.min.js')}}"></script>
<!-- <script src="js/lightbox.min.js"></script> -->
<script src="{{asset('assets/js/site.js')}}"></script>
<script>
    const popupContainer = document.getElementById('popupContainer');
    const popupContent =
        document.getElementById('popupContent');
        popupContainer.addEventListener
            ('mouseover', function () {
                popupContent.style.display = 'block';
            });
        popupContainer.addEventListener
            ('mouseout', function () {
                popupContent.style.display = 'none';
        });
</script>
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
<script>
  document.getElementById('submitBtn').addEventListener('click', function(e) {
    e.preventDefault();
      grecaptcha.ready(function() {
          grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'submit'}).then(function(token) {
              // Create hidden input with token
              var form = document.querySelector('form');
              var input = document.createElement('input');
              input.type = 'hidden';
              input.name = 'recaptcha_token';
              input.value = token;
              form.appendChild(input);
              form.submit();
          });
      });
  });
  // Initialize Flatpickr for check-in and check-out
  const checkin = flatpickr("#checkin", {
    minDate: "today",
    dateFormat: "Y-m-d",
    onChange: function(selectedDates, dateStr, instance) {
      // set checkout minDate to the day after checkin
      checkout.set("minDate", dateStr);
    }
  });

  const checkout = flatpickr("#checkout", {
    minDate: new Date().fp_incr(1), // tomorrow
    dateFormat: "Y-m-d"
  });

  const modal = document.getElementById("myModal");
  const openBtn = document.getElementById("openBtn");
  const closeBtn = document.querySelector(".close-btn");

  // Open modal
  openBtn.onclick = () => {
  modal.style.display = "block";
  }

  // Close modal via button
  closeBtn.onclick = () => {
  modal.style.display = "none";
  }

  // Close modal by clicking outside the box
  window.onclick = (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }

</script>
<style>
    .booking-form {
      background: #fff;
      padding: 5px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      width: 100%;
    }
    .booking-form h2 {
      margin-bottom: 5px;
      text-align: center;
    }
    .booking-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .booking-form input, 
    .booking-form textarea,
    .booking-form button {
      width: 100%;
      padding: 10px;
      margin-bottom: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }
    .booking-form textarea {
      resize: vertical;
      min-height: 80px;
    }
    .booking-form button {
    }
    .booking-form button:hover {
      background: #005fa3;
    }

    /* Responsive tweaks */
    @media (max-width: 600px) {
      .booking-form {
        padding: 5px;
      }
      .booking-form h2 {
        font-size: 1.2rem;
      }
      .booking-form input, 
      .booking-form textarea,
      .booking-form button {
        font-size: 0.9rem;
        padding: 5px;
      }
      .modal-content {
        background-color: white;
        margin: 15% auto; 
        padding: 20px;
        width: 90%;
        border-radius: 8px;
        }
    }

    /* The background overlay */
    .modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    background-color: rgba(0,0,0,0.5); /* Black with opacity */
    }

    /* Modal content box */
    .modal-content {
    background-color: white;
    margin: 15% auto; 
    padding: 20px;
    width: 60%;
    border-radius: 8px;
    }

    /* Close button */
    .close-btn {
    float: right;
    font-size: 24px;
    cursor: pointer;
    }

</style>