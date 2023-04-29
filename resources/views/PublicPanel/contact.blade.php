@extends('PublicPanel.layout.master')
@section('content')
<div class="container-fluid">
    <div class="container mt-5 px-5 mx-5 ">
        <div class="row">
            <div class="col">
                <h1>Get in touch!</h1>
            </div>
        </div>
        <div class="row mt-2  pt-2">
            <div class="col">
                <p>
                    Let us know what kind of creative project you are interested in and we'll be happy to help. The more info you give us, the better - how many images, leadtimes, references and so on. </p>
                <br>
                <p>Call us on <b>+92 333 5919307</b> or email us a <b>info@gmail.com</b></p>
            </div>
            <div class="col">
                <form action="" class="form">
                    <fieldset>
                        <input type="name" name="" id="name" placeholder="name">
                    </fieldset>
                    <fieldset>
                        <input type="email" name="" id="email" placeholder="email" class=" border-bottom-0 border-top-0 border border-secondary ">
                    </fieldset>
                    <fieldset>
                        <textarea name="Message" id="Message" cols="30" rows="10" placeholder="message"></textarea>
                    </fieldset>
                </form>
                <button class="btn border border-dark">Send Message</button>
            </div>
        </div>
    </div>
</div>
@endsection