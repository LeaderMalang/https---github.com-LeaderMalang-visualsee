@extends('PublicPanel.layout.master')
@section('content')
<div class="container-fluid">
    <!-- Our Studio -->
    <div class=" container bg">
        <img src="PublicAssets/images/bg-studio.jpg" width="1105" class="img-fluid" alt="Responsive image">
    </div>

    <div class="container  Welcome-studio">
        <div class="row">
            <div class="col">
                <h2>Welcome to our studio!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Located in the heart of Dubai's creative zone, Alserkal Avenue is home to our <br> 2000 sq/ft,
                    fully-equipped, in-house studio.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6>STUDIO AMENITIES</h6>
                <ul>
                    <li>Private Dressing Room & Shower</li>
                    <li>Extensive Lighting Equipment</li>
                    <li>2 Toilets</li>
                    <li>Pantry</li>
                    <li>Lounge Areas</li>
                    <li>WiFi</li>
                    <li>Nearby Paid Parking</li>
                    <li>Ping Pong Table</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container Location">
        <div class="row">
            <div class="col">
                <h2>Location</h2>
                <p>
                    We are in warehouse 34 in <a href="#">Alserkal Avenue.</a> There is paid parking around the avenue
                    as well as food, art & culture nearby.
                </p>
            </div>
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.8095167216034!2d55.223624914086045!3d25.14212998392178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b130067cafb%3A0x817313632c3a8ee!2sSeeing%20Things%20Photography%20%26%20Film%20Productions!5e0!3m2!1sen!2s!4v1677811463440!5m2!1sen!2s" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container take-tour">
        <div class="row">
            <div class="col">
                <h2>Take a tour!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3">
                <center>
                    <iframe width="853" height="480" src="https://my.matterport.com/show/?m=Y54ZRXhjrDn" frameborder="0" allowfullscreen="" allow="xr-spatial-tracking"></iframe>
                </center>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <img src="PublicAssets/images/studio1.jpg" alt="" width="514px" height="343px">
            </div>
            <div class="col">
                <img src="PublicAssets/images/studio2.jpg" alt="" width="514px" height="343px">
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col">
                <img src="PublicAssets/images/studio3.jpg" alt="" width="331px" height="278px">
            </div>
            <div class="col">
                <img src="PublicAssets/images/studio4.jpg" alt="" width="331px" height="278px">
            </div>
            <div class="col">
                <img src="PublicAssets/images/studio5.jpg" alt="" width="331px" height="278px">
            </div>
        </div>
    </div>
</div>
@endsection