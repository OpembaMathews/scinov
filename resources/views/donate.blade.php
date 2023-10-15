@extends('layouts.master')
@section('title', 'Science Innovation Africa')

@section('content')
<section>
  <br><br>
  <div class="section-title">
    <h2> Make a Donation </h2>
</div>
</section>

    <!-- Donation Section -->
    <section class="scrolling-background text-white py-3" style=" height:auto;">
      <div class="container" style="background-color: rgba(2, 2, 80, 0.796); height:auto;">
          <br>
          <div class="row">
              <div class="col-md-6 offset-md-3">
                  
                  <p class="text-center">Your contribution makes a difference.</p>

                  <!-- Donation Form -->
                  <form>
                      <div class="form-group">
                          <label for="amount">Donation Amount:</label>
                          <input type="text" class="form-control" id="amount" placeholder="Enter amount">
                      </div>
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Your name">
                      </div>
                      <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Your email">
                      </div>
                      <button type="submit" class="btn btn-light btn-block">Donate Now</button>
                  </form>
              </div>
          </div>
          <br>
          <br>
      </div>
  </section>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery Countdown Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script>
        // Initialize the countdown timer
        $('#countdown').countdown('2023/12/31', function(event) {
            $(this).html(event.strftime('%D days %H:%M:%S'));
        });
    </script>
</body>
</html>

  </section>
  
  
@endsection