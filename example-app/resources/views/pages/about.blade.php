@extends('layouts.master')

@section('title')
about us   
@endsection

@section('content')

<div class="about">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="aboutimg">
              <br><br><br><br><br><br><br><br><br><br><br>
            <h3>About us</h3>
            <p>Choclate vactory collection of sweeties for all sleek lines, delecious taste, exciting shades, and everything else to turn your billy into a space you adore. With everything we sell as the art jello-imagined to mid-century modern-derived .we focus on simple taste rather than the heavy ornamentation typically found in traditional or contemporary desserts.
                Choclate vactory collection of sweeties for all sleek lines, delecious taste, exciting shades, and everything else to turn your billy into a space you adore. With everything we sell as the art jello-imagined to mid-century modern-derived .we focus on simple taste rather than the heavy ornamentation typically found in traditional or contemporary desserts
            </p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="aboutimg">
            <figure><img width="750" height="750" src="https://th.bing.com/th/id/R.bf40bf1736144363f1998d5e8d4bf2fe?rik=B3XlIELv77NOBA&riu=http%3a%2f%2f3.bp.blogspot.com%2f-E3eGAcXSjHI%2fVRRf_jVSzcI%2fAAAAAAAAP70%2fW5gyR-hVZNU%2fs1600%2fPrize-Winning-Chocolate-Cake-6inch_2.jpg&ehk=UUxzuIahwP%2bBk7ubrJVylqijCBWqtLYdKeV4vfMXBHk%3d&risl=&pid=ImgRaw&r=0" /></figure>
          </div>
        </div>
      </div>
      <div class="text-success">
        <hr>
      </div>
      <div class="container aboutimg">
          <div class="offset-3">
        <h3>Our Team</h3></div>
      </div>
      <div class="row" style="justify-content: space-evenly;">
        <!-- //////////////////////////////// -->
        <!-- second one -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
          <div class="card aboutheight" style="width: 18rem;">
            <img class="card-img-top" src="https://th.bing.com/th/id/R.3c7d47d12e7f5032b98b2cbde8a65c98?rik=7XmMk1faKEWq3A&pid=ImgRaw&r=0" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">{{$one}}</h3>
              <p class="card-text">Full Stack Web Developer</p>
              <a href="https://www.linkedin.com/in/du-a-alsafasfeh-70a9a7147/" target="_blank" class="card-link"><i class="fa fa-linkedin fa-lg"></i></a>
              <a href="https://github.com/Dua-Alsafasfeh" target="_blank" class="card-link"><i class="fa-brands fa-github fa-lg" ></i></a>
            </div>
          </div>
        </div>
        <!-- third one -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
          <div class="card aboutheight" style="width: 18rem;">
            <img class="card-img-top" src="https://th.bing.com/th/id/R.3c7d47d12e7f5032b98b2cbde8a65c98?rik=7XmMk1faKEWq3A&pid=ImgRaw&r=0" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">{{$two}}</h3>
              <p class="card-text">Full Stack Web Developer</p>
              <a href="https://www.linkedin.com/in/dyar-hunaity-90a540236/" target="_blank" class="card-link"><i class="fa fa-linkedin fa-lg"></i></a>
              <a href="https://github.com/Dyarhunaity/projectphp5" target="_blank" class="card-link"><i class="fa-brands fa-github fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-success">
        <br>
      </div>
      <div class="row" style="justify-content: space-evenly;">
        <!-- fourth one -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
          <div class="card aboutheight" style="width: 18rem;">
            <img class="card-img-top" src="https://th.bing.com/th/id/R.3c7d47d12e7f5032b98b2cbde8a65c98?rik=7XmMk1faKEWq3A&pid=ImgRaw&r=0" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title">{{$three}}</h3>
              <p class="card-text">Full Stack Web Developer</p>
              <a href="https://www.linkedin.com/in/marwa-nseerat-971057227/" target="_blank" class="card-link"><i class="fa fa-linkedin fa-lg"></i></a>
              <a href="https://github.com/marwanseerat" target="_blank" class="card-link"><i class="fa-brands fa-github fa-lg"></i></a>
            </div>
          </div>
        </div>
        <!-- </div> -->
        <!--first one -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="card aboutheight" style="width: 18rem;">
              <img class="card-img-top" src="https://th.bing.com/th/id/R.0be6834f8f3924a5adfc2fcb3ba376dd?rik=KQzuOX%2fnzSmKbw&pid=ImgRaw&r=0" alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">{{$four}}</h3>
                <p class="card-text">Full Stack Web Developer</p>
                <a href="https://www.linkedin.com/in/anas-al-lawafeh-b05954232/" target="_blank" class="card-link"><i class="fa fa-linkedin fa-lg"></i></a>
                <a href="https://github.com/10-anasAllawafeh" target="_blank" class="card-link"><i class="fa-brands fa-github fa-lg"></i></a>
              </div>
            </div>
          </div>
          <!-- </div> -->
        <!-- //////////////////////////////////// -->
      </div>
    </div>
  </div>

@endsection