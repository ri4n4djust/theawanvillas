@extends('layouts.default')

@section('meta')
    <title>The Awan Villa - One Bed Room</title>
    <meta content="best villa in bali" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection

@section('content')

<!-- Modal -->
<div class="modal fade" id="trModal-login" tabindex="-1000" aria-labelledby="trModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="trModalLabel">book now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form cautocomplete="off">
          <div class="row">
              <div class="col-xl-6 form-group">
              <input type="email" name="email-login" class="form-control" id="email-login" placeholder="Email" required>
              </div>
                  <div class="col-xl-6 form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
              </div>
          </div>
          <!-- <div class="form-group">
              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile" required>
          </div> -->
          <a id="button-start-demo" onclick="login()" class="btn-book-a-table">
              Log In
</a>
      </form>

        
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!--Villa-->
<section id="villas" class="scrollto clearfix">
  <div class="row clearfix">

  <!-- Trigger Button -->




        <div class="col-1">

            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 style="font-family:'MAIAN';">One Bedroom Villas with Private Pool</h2>
                <button id="openBtn" class="button">Book Now</button>
                <p class="section-subtitle" >Experience the ultimate in luxury and relaxation in our stunning One Bedroom Villas with Private Pool.</p>
               

                <div class="col-3">
                    <img src="/assets/images/icon/pool.png" alt="Pool"/><br>
                    <span>Private Pool Size: 7m x 3m x 1,5m</span>
                </div>
                <div class="col-3">
                <img src="/assets/images/icon/wifi.png" alt="wifi"/><br>
                    <span>High Spped Wifi</span>
                </div>
                <div class="col-3">
                <img src="/assets/images/icon/villa.png" alt="Villa"/><br>
                    <span>Villa Size 180 sqm</span>
                </div>
                <div class="col-3">
                <img src="/assets/images/icon/plug.png" alt="Plug"/><br>
                    <span>Electrical Voltase 220V</span>
                </div>
                <div class="col-3">
                <img src="/assets/images/icon/bed.png" alt="Bed"/><br>
                    <span>Bedroom 5m x 5m</span>
                </div>
                <div class="col-3">
                <img src="/assets/images/icon/door.png" alt="Door"/><br>
                    <span>Living Room 3,2m x 7,30m</span>
                </div>
            </div>
            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 >Our luxurious villas boast:</h2>
                    <p style="line-height: 15px;">- Private Swimming Pool: Unwind in your own private oasis, surrounded by lush tropical gardens.</p>
                    <p style="line-height: 15px;">- Sundeck: Soak up the sun and take in the stunning surroundings.</p>
                    <p style="line-height: 15px;">- Shower garden which is surrounded by tropical gardens with the villa’s size 300sm2.</p>
            </div>
            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 >Villa Amenities</h2>
                <h3 >Each villa is equipped with:</h3>
                    <p style="line-height: 15px;">- Full-Size Refrigerators: Stock up on your favorite snacks and drinks.</p>
                    <p style="line-height: 15px;">- Flat Screen Televisions (TV Cables): Stay entertained, with a range of channels to choose from.</p>
                    <p style="line-height: 15px;">- Electric Kettle<br>
                    <p style="line-height: 15px;">- Kitchenette: Prepare snacks and light meals with ease.</p>
            </div>
            <div class="box-villas wow fadeInUp" data-wow-delay="0.1s">
                <h2 >Guest Rooms</h2>
                <h3 >Our luxurious guest rooms feature:</h3>
                    <p style="line-height: 15px;">- King Size Bed and Twin Beds: Enjoy a restful night's sleep in our comfortable beds.</p>
                    <p style="line-height: 15px;">- Mosquito Net: Sleep peacefully, protected from mosquitoes.</p>
                    <p style="line-height: 15px;">- Air-Conditioned: Stay cool and comfortable, with air conditioning throughout the villa.</p>
                    <p style="line-height: 15px;">- Wardrobes: Ample storage space for your belongings.</p>
                    <p style="line-height: 15px;">- Flat Screen Televisions (TV Cables): Stay entertained, with a range of channels to choose from.</p>
                    <p style="line-height: 15px;">- IDD Telephones: Stay connected, with international direct dialing.</p>
                    <p style="line-height: 15px;">- Internet Access (WiFi): Stay online, with fast and reliable internet access.</p>
                    <p style="line-height: 15px;">- Safety Deposit Boxes: Secure storage for your valuables.</p>
            <div>
            
        </div>
        <div id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery data-featherlight-filter="a">
            <h2 >Foto Gallery</h2>
            @foreach($galeries as $item)
            <a href="{{ asset('storage/images/' . $item->nama_foto) }}" data-featherlight="image" class="col-4 wow fadeIn"
                data-wow-delay="0.2s">
                <img src="{{ asset('storage/images/' . $item->nama_foto) }}" alt="{{ $item->nama_foto }}"/>
            </a>
            @endforeach
        </div>


  </div>
</section>
<!--End of Villa-->

<!-- The Modal -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg">
        <h2 class="text-xl font-bold mb-4">Book Your Hotel</h2>

        <form  class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text" wire:model="name" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" wire:model="email" class="w-full border rounded px-3 py-2">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Check-in</label>
                    <input type="date" wire:model="check_in" class="w-full border rounded px-3 py-2">
                </div>
                <div>
                    <label class="block text-sm font-medium">Check-out</label>
                    <input type="date" wire:model="check_out" class="w-full border rounded px-3 py-2">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium">Guests</label>
                <input type="number" wire:model="guests" min="1" class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex justify-end space-x-2">
                <button type="button" @click="open = false"
                        class="px-4 py-2 bg-gray-300 rounded">Cancel</button>
                <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded">Confirm Booking</button>
            </div>
        </form>
    </div>


  </div>
</div>
<script>
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
  width: 80%;
  border-radius: 8px;
}

/* Close button */
.close-btn {
  float: right;
  font-size: 24px;
  cursor: pointer;
}

</style>

<!--Content Section-->
<div id="services" class="scrollto clearfix">

<div class="row no-padding-bottom clearfix">

    <div class="tengah">
        <div class="section-heading">
            <h2 style="font-family:'MAIAN';font-weight: bold;"></h2>
        </div>

    </div>


</div>


</div>
<!--End of Content Section-->




<!--maps-->
<section id="maps" class="scrollto clearfix">
  <div class="row-maps clearfix">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1950637291725!2d115.15047537590551!3d-8.672991588291344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2476d6fd93ac5%3A0x336afb89db0054f2!2sThe%20Awan%20Villas!5e0!3m2!1sid!2sid!4v1737874401447!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
</section>
<!--End of maps-->
   

@stop