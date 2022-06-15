@component('en.layout.main')
@slot('meta')
<title>Psychology4.me: Sitemap</title>
<meta name="description" content="A list of all the pages that you can find on psychology4.me." />
<meta property="og:title" content="Psychology4.me: Sitemap" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me: Sitemap" />
<meta property="og:description" content="A list of all the pages that you can find on psychology4.me." />
<meta name="twitter:title" content="Psychology4.me: Sitemap" />
<meta name="twitter:description" content="A list of all the pages that you can find on psychology4.me." />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Sitemap</h1>
                    <div class="ph-caption-title-ghost ph-appear">Sitemap</div>
                  </div>
                  <div class="ph-caption-subtitle ph-appear">A list of all the pages that you can find on psychology4.me.</div>
                </div>
                <a href="#page-content" class="scroll-down-circle" data-offset="30">
                  <div class="sdc-inner ph-appear">
                    <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                    <svg viewBox="0 0 500 500">
                      <defs>
                        <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
                      </defs>
                      <text dy="30">
                        <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                      </text>
                    </svg>
                  </div>
                </a>
                <div class="made-with-love ph-appear">
                  <div class="mwl-inner">
                    <div class="mwl-text">Made with</div>
                    <div class="mwl-icon"><i class="far fa-heart"></i></div>
                  </div>
                </div>
              </div>
                <div id="page-content">
                    <div class="tt-section">
                      <div class="tt-section-inner tt-wrap">

                        <div class="tt-row">
                          <div class="tt-col-lg-4 padding-right-lg-5-p">
                            <div class="tt-heading tt-heading-sm margin-bottom-60 anim-fadeinup">
                              <h2 class="tt-heading-title text-white">Main Pages</h2>
                            </div>
                          </div>
                          <div class="tt-col-lg-8">
                            <div class="text-xxlg font-alter">
                                <a href="{{ route('en_home')}}" class="anim-fadeinup">Home</a> <br>
                                <a href="{{ route('en_about_me')}}" class="anim-fadeinup">About</a> <br>
                                <a href="{{ route('en_online_counselling')}}" class="anim-fadeinup">Counselling</a> <br>
                                <a href="{{ route('en_magazine')}}" class="anim-fadeinup">Magazine</a> <br>
                                <a href="{{ route('en_psychology')}}">Psychology</a><br>
                                <a href="{{ route('en_self_improvement')}}">Self-Improvement</a><br>
                                <a href="{{ route('en_mental_health')}}">Mental Health A-Z</a><br>
                                <a href="{{ route('en_contact')}}" class="anim-fadeinup">Contact</a> <br>
                                <a href="{{ route('en_disclaimer')}}" class="anim-fadeinup">Disclaimer</a> <br>
                                <a href="{{ route('en_policy')}}" class="anim-fadeinup">Privacy Policy</a> <br>
                                <a href="{{ route('en_additional_info')}}" class="anim-fadeinup">Additional Information</a> <br>
                             </div>
                          </div>
                        </div>

                        <div class="tt-row" style="margin-top:40px">
                        <div class="tt-col-lg-4 padding-right-lg-5-p">
                          <div class="tt-heading tt-heading-sm margin-bottom-60 anim-fadeinup">
                            <h2 class="tt-heading-title text-white">Blog Pages</h2>
                          </div>
                        </div>
                        <div class="tt-col-lg-8">
                          <div class="text-xxlg font-alter">
                              @foreach ($posts as $post)
                              <a href="{{ $post->slug }}" class="anim-fadeinup">{{ $post->title }}</a> <br>
                              @endforeach
                           </div>
                        </div>
                      </div>

                    </div>
                    </div>
                </div>

            @component('en.layout.footer')
            @endcomponent
@endslot
@endcomponent
