@extends('layouts.app')
@section('slider')
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="https://images7.alphacoders.com/411/thumb-1920-411820.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://www.planwallpaper.com/static/images/kartandtinki1_photo-wallpapers_02_uTiXRtA.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="https://www.planwallpaper.com/static/images/wallpaper-2594020_1wgPZqQ_ADLlXQn.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
@endsection

 @section('content')

    <div class="home-message">
      <div class="-content container text-center">
        <h4>{{$data['description']['title']}}</h4>
        <p>{{$data['description']['text']}}</p>
      </div>
      <hr>
    </div>

  <div class="container">    
    <div class="row paddtb-32">
      @if(count($data) > 0)
     
        @foreach($data['profiles'] as $profile)
          <div class="col-sm-3 pocetna_studenti">
            <center>
              <div class="cont">
                <a href="/profile/{{$profile->id}}">
                  <div class="profile-container">
                    <img src="images/{{$profile->slika}}" alt="{{$profile->ime}} {{$profile->prezime}}" class="locked profile-image">
                  </div>
                </a>
              </div>
              <a href="/profile/{{$profile->id}}">
                <h4 class="ime" id="velicina">{{$profile->ime}} 
                @if(strlen($profile->ime . $profile->prezime) > 17)
                  {{ substr($profile->prezime,0,1) }}.
                @else
                  {{$profile->prezime}}
                @endif
                </h4>
              </a>
              <hr style="border-color: #131a21;">
              <h5>{{$profile->smer}}</h5>
            </center>
          </div>
        @endforeach
      @endif
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="fluid-container statistics-container">
    <div class="container">
      <div class="row">

<style>
  .statistics-container .-icon{
    color: #fff;
    border: 4px solid #fff;
    width: 68px;
    height: 68px;
    border-radius: 50px;
    padding: 12px;
    margin-bottom: 15px;
  }
  .statistics-container{
    color: #fff;
  }
</style>

        <div class="col-sm-3 text-center">
          <i class="-icon fas fa-users"></i>
          <h2 class="statistic-count">{{$data['statistics']['all']}}</h2>
          <p>Prijahljenih studenata</p>
        </div>
        <div class="col-sm-3 text-center">
          <i class="-icon fas fa-user"></i>
          <h2 class="statistic-count">{{$data['statistics']['bsc']}}</h2>
          <p>Diplomiranih inženjera</p>
        </div>
        <div class="col-sm-3 text-center">
          <i class="-icon fas fa-graduation-cap"></i>
          <h2 class="statistic-count">{{$data['statistics']['msc']}}</h2>
          <p>Master inženjera</p>
        </div>
        <div class="col-sm-3 text-center">
          <i class="-icon fas fa-trophy"></i>
          <h2 class="statistic-count">{{$data['statistics']['dr']}}</h2>
          <p>Doktora nauke</p>
        </div>

      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <ol>
      @foreach($data['messages'] as $message)
        <li><a href="/profile/{{$message->id}}"> {{ $message->ime }} {{ $message->prezime }}</a> - {{$message->poruka}}</li>
      @endforeach
    <ol>
   </div>

@endsection