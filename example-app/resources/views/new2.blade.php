<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
        {{-- bootstrap --}}
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="container-fluid navbar navbar-light bg-danger ml-2 mr-2">
            <a class="navbar-brand pl-2" href="#">
                <img src="https://th.bing.com/th/id/OIP.DbrIkFFvRigvdtdT6vBUYAHaH6?pid=ImgDet&rs=1" width="150" height="150" alt="logo">
            </a>
            <ul class="nav justify-content-center">
            <li class="nav-item">
                <button class="btn btn-outline-warning " type="submit"><a href="register.php">log in</a></button>
                <button class="btn btn-outline-warning " type="submit"><a href="register.php">sign up</a></button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </li>
            </ul>     
            </div>
        </nav>
<br><br>

<div class="hr-theme-slash-2">
    <div class="hr-line"></div>
    <div class="hr-icon"><i class="fa-solid fa-couch"></i></div>
    <div class="hr-line"></div>
  </div>
  <div class="contactus">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="title">

            {{-- <h2 class="contact">About</h2> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
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
              <h3 class="card-title">Du'a Alsafasfeh</h3>
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
              <h3 class="card-title">Taebah Shlouh</h3>
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
              <h3 class="card-title">Marwa Nseerat</h3>
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
                <h3 class="card-title">Anas Allawafeh</h3>
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

<br><br>
<footer class="bd-footer py-4 py-md-5 mt-5 bg-danger">
    <div class="container py-4 py-md-5 px-4 px-md-3">
      <div class="row">
        <div class="col-lg-3 mb-3">
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
          <img src="https://th.bing.com/th/id/OIP.DbrIkFFvRigvdtdT6vBUYAHaH6?pid=ImgDet&rs=1" width="250" height="250" alt="logo">
          </a>
        </div>
        <div class="col-6 col-lg-2 offset-lg-3 mb-3">
          <h5>useful links</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/docs/5.2/getting-started/">Getting started</a></li>
            <li class="mb-2"><a href="/docs/5.2/examples/starter-template/">childs products</a></li>
            <li class="mb-2"><a href="/docs/5.2/getting-started/webpack/">adults products</a></li>
            <li class="mb-2"><a href="/docs/5.2/getting-started/parcel/">diverse products</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Contact Information</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="https://github.com/twbs/bootstrap">sneakers company</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Twix company</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/icons">Bounty company</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/rfs">Jelly company</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Community</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">choclate lovers</a></li>
            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">vanilla lovers</a></li>
            <li class="mb-2"><a href="https://github.com/sponsors/twbs">Jelly beans lovers</a></li>
            <li class="mb-2"><a href="https://opencollective.com/bootstrap">Open Collective</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>