@extends('layout')

@section('title', 'Home')

@section('content')

<section class="cid-r7yDfcMf3R mbr-fullscreen mbr-parallax-background" id="header2-k">
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    KonsOL</h1>
          
                <p class="mbr-text pb-3 mbr-fonts-style display-5"></p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-primary-outline display-4" href="{{ url('kontext') }}">KonText</a>
                    <a class="btn btn-md btn-primary-outline display-4" href="{{ url('konface') }}">KonFace</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features12 cid-r7yFqcZCSn" id="features12-l">
    <div class="container">
        <h2 class="mbr-section-title pb-2 mbr-fonts-style display-2">
            What is KonsOL ?</h2>
        <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">KonsOL is a web consulting application that provides online consultation on </h3>
        <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">education, finance, and health</h3>

        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                             <span class="mbri-upload mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Accessibility                     
                            </h4>
                        </div>
                    </div>                

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Access application whenever and wherever you are, making it easy to do the consultation.
                        </p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbri-drag-n-drop2 mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Flexibility
                            </h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Comfortable while using application and managing consultation schedule
                        </p>
                    </div>
                </div>
            </div>

            <div class="mbr-figure" style="width: 45%; margin-top: 7%">
                <img src="assets/images/Logo.png" alt="KonsOL">
            </div>

            <div class="block-content align-left  ">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                             <span class="mbri-features mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Quality
                            </h4>
                        </div>
                    </div>                

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            We give the best consultant resource which expert in each consulting category
                        </p>
                    </div>
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbri-sites mbr-iconfont"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                                Stability
                            </h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            Well-maintained application and excellent performance making it more easy to consult  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials2 cid-r7yFH2PX9z" id="testimonials2-m">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 100%;">
              <img src="assets/images/default-pp.jpg">
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                       "Using KonsOL makes me easy to learn new things and catching up other developed technology.
                       You can ask every questions or problems you have in KonsOL, it gives me more knowledge to grow."
                    </p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                       Users.
                    </p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                       Programmer
                    </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials3 cid-r7yFHmiqAi" id="testimonials3-n">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="media-content px-3 align-self-center mbr-white py-2">
                <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                   "These days many fake news about health that makes me worry. But since I've used KonsOL, I am not worry anymore because I get a lot of accurate tips, helps, and suggestions for my healthcare. KonsOL is a good and perfect app for consulting, and I got my healthiness improved."
                </p>
                <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                   Users.
                </p>
                <p class="mbr-author-desc mbr-fonts-style display-7">
                   Student
                </p>
            </div>

            <div class="mbr-figure pl-lg-5" style="width: 100%;">
              <img src="assets/images/default-pp.jpg">
            </div>
        </div>
    </div>
</section>

<section class="testimonials4 cid-r7yGt4klyQ mbr-parallax-background" id="testimonials4-p">

  

  
  <div class="container">
    <h2 class="pb-3 mbr-fonts-style mbr-white align-center display-2">Consultants</h2>
    <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style mbr-white align-center display-5"></h3>
    <div class="col-md-10 testimonials-container"> 
      

      
    <div class="testimonials-item">
        <div class="user row">
          <div class="col-lg-3 col-md-4">
            <div class="user_image">
              <img src="assets/images/default-pp.jpg">
            </div>
          </div>
          <div class="testimonials-caption col-lg-9 col-md-8">
            <div class="user_text ">
              <p class="mbr-fonts-style  display-7">
                 <em>"KonsOL helps user to know and informed about everything related to the chosen field. 
                 It's a nice app and easy to use."</em>
              </p>
            </div>
            <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">Users</div>
            <div class="user_desk mbr-light mbr-fonts-style align-left pt-2 display-7">
                 CTO of Pash.com</div>
          </div>
        </div>
      </div><div class="testimonials-item">
        <div class="user row">
          <div class="col-lg-3 col-md-4">
            <div class="user_image">
              <img src="assets/images/default-pp.jpg">
            </div>
          </div>
          <div class="testimonials-caption col-lg-9 col-md-8">
            <div class="user_text">
              <p class="mbr-fonts-style  display-7">
                 <em>"Health is a serious issues and it should get the best and accurate information. Patients now can use KonsOL
                 to consult with the doctor and get the right information about it. They can easily communicate each other by remote"</em>
              </p>
            </div>
            <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
                 Users</div>
            <div class="user_desk mbr-light mbr-fonts-style align-left pt-2 display-7">
                 Medical Nerve Specialist</div>
          </div>
        </div>
      </div><div class="testimonials-item">
        <div class="user row">
          <div class="col-lg-3 col-md-4">
            <div class="user_image">
              <img src="assets/images/default-pp.jpg">
            </div>
          </div>
          <div class="testimonials-caption col-lg-9 col-md-8">
            <div class="user_text">
              <p class="mbr-fonts-style  display-7">
                 <em>"Many people stil don't know how to manage their finance. Lack of management skill can cause a lot of loss and it is a serious problem. You can ask all about finance, management, and investment problems in KonsOL. It is important to know about financial issues so that you can manage your finance better"</em>
              </p>
            </div>
            <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
                 Users</div>
            <div class="user_desk mbr-light mbr-fonts-style align-left pt-2 display-7">
                 International Finance Banker</div>
          </div>
        </div>
      </div></div>
  </div>
</section>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
@endsection
