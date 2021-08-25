@extends('master')
@section('title', 'JEA :: Contact')

@section('content')
<br><br>
<title>JEA - | Contact Us |</title>
@foreach($contacts as $contact)

<section class="contactu-section">
    <div class="contactu-bg">
        <h3>Get in Touch with Us</h3>
        <h2>contact us</h2>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iste facilis quos impedit
            fuga nobis modi debitis laboriosam velit reiciendis quisquam alias corporis, maxime enim, optio ab dolorum
            sequi qui.</p>
    </div>


    <div class="contactu-body">
        <div class="contactu-info">
            <div>
                <span><i class="fas fa-mobile-alt"></i></span>
                <span>Phone No.</span>
                <span class="text">{{$contact->phone}}</span>
            </div>
            <div>
                <span><i class="fas fa-envelope-open"></i></span>
                <span>E-mail</span>
                <span class="text">{{$contact->email}}</span>
            </div>
            <div>
                <span><i class="fas fa-map-marker-alt"></i></span>
                <span>Address</span>
                <span class="text">{{$contact->location}}</span>
            </div>
            <div>
                <span><i class="fas fa-clock"></i></span>
                <span>Opening Hours</span>
                <span class="text">{{$contact->time}}</span>
            </div>
        </div>

        <div class="contactu-form">
            <form>
                <div>
                    <input type="text" class="form-control" placeholder="First Name">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div>
                    <input type="email" class="form-control" placeholder="E-mail">
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
                <textarea rows="5" placeholder="Message" class="form-control"></textarea>
                <input type="submit" class="send-btn" value="send message">
            </form>

            <div>
                <img src="{{asset('frontend/contact/image/contact-png.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7225.948658611351!2d89.0255224!3d25.102730299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc921ad2fc9c6d%3A0xd1bf3623ef947620!2sAnanda%20Market%2C%20Joypurhat!5e0!3m2!1sen!2sbd!4v1627130379461!5m2!1sen!2sbd"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</section>

<style>
    .contactu-bg {
        height: 40vh;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)),
        url('{{asset($contact->image)}}');
        background-position: 50% 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        text-align: center;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
@endforeach

@endsection