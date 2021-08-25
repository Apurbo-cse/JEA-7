@extends('master')
@section('content')
<title>JEA - | Developer |</title>
<br><br><br><br><br>
    <div class = "aboutme-wrapper">
    @foreach($developers as $developer)
      <div class = "aboutme-left">
        <div class = "aboutme-left-content">
          <div>
            <div class = "shadow" style="margin-bottom:30px;">
              <div class = "aboutme-img">
                <img src = "{{asset($developer->image)}}" alt = "aboutme image">
              </div>
            </div>
            <p style="color:white;font-size:18px;font-weight:600px;padding-bottom:20px;">{{$developer->name}}</p>
            <p style="color:#00FEE5 ;font-size:11px;">{{$developer->digination}}</p>
            <small style="font-size:10px;color:#FEDF00;">{{$developer->location}}</small>
            
            <li>
              <i class="icofont-rounded-right"> 
                <b style="color:#174044;font-size:13px;">{{$developer->degree}}
                  <small style="font-size:7px;color:#0CBC38 ;">{{$developer->complete}}</small>
                </b>
            </li>

          </div>
          
          <ul class="social-nav model-3d-0  w3_agile_social">
            <li style="padding:8px;">
              <a target="_blank" href="{{$developer->facebook}}" class="facebook">
                  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
              </a>
            </li>
            <li style="padding:8px;">
              <a target="_blank" href="{{$developer->twitter}}" class="twitter">
                  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
              </a>
            </li>
            <li style="padding:8px;">
              <a target="_blank" href="{{$developer->linkedin}}" class="linkedin">
                  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
              </a>
            </li>
            <li style="padding:8px;">
              <a target="_blank" href="mailto:{{$developer->email}}" class="email">
                  <div class="front"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              </a>
            </li>
            <li style="padding:8px;">
              <a target="_blank" href="tell:+88{{$developer->phone}}" class="cell">
                  <div class="front"><i class="fa fa-phone" aria-hidden="true"></i></div>
                  <div class="back"><i class="fa fa-phone" aria-hidden="true"></i></div>
              </a>
            </li>
          </ul>

        </div>
      </div>

      <div class = "aboutme-right">
        <h1>hi<span>!</span></h1>
        <h2>Here's who I am & what I do</h2>
        <div class = "aboutme-btns">
          <button type = "button" class = "btn btn-pink">resume</button>
          <button type = "button" class = "btn btn-white">projects</button>
        </div>

        <div class = "aboutme-para">
          <p>{{$developer->description}}</p>
        </div>
      </div>
    @endforeach 
    </div>
@endsection