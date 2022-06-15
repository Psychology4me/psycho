@component('en.layout.main')
@slot('meta')
<title>Psychology4.me: Contact</title>
<meta name="description" content="Interested in my online counselling sessions or have any further questions? Then contact me! Send me an email or fill out the contact form below. I am looking forward to hearing from you!" />
<meta property="og:title" content="Psychology4.me: Contact" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me: Contact" />
<meta property="og:description" content="Interested in my online counselling sessions or have any further questions? Then contact me! Send me an email or fill out the contact form below. I am looking forward to hearing from you!" />
<meta name="twitter:title" content="Psychology4.me: Contact" />
<meta name="twitter:description" content="Interested in my online counselling sessions or have any further questions? Then contact me! Send me an email or fill out the contact form below. I am looking forward to hearing from you!" />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Contact</h1>
                    <div class="ph-caption-title-ghost ph-appear">Contact</div>
                  </div>
                  <div class="ph-caption-subtitle ph-appear">Interested in my online counselling sessions or have any further questions? Then contact me! Send me an email or fill out the contact form below. I am looking forward to hearing from you!</div>
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
                              <h2 class="tt-heading-title text-white">Patric Pförtner (M.Sc. Psychologist)</h2>
                            </div>
                          </div>
                          <div class="tt-col-lg-8">
                            <div class="text-xxlg font-alter">
                              <p class="anim-fadeinup">
                              <strong>Germany:</strong> Bachäcker 20/1, 74597 Stimpfach</p>
                              <p class="anim-fadeinup">
                              <strong>Bulgaria:</strong> Ivan Pamukchiev 7A, 5600 Troyan</p>
                              <ul class="list-inline text-left anim-fadeinup">
      													<li>
                                 <div class="tt-btn tt-btn-dark" style="color: #EEF4D4; max-width: 200px; width: 200px;">
                                     <a href="mailto:info@psychology4.me" data-hover="Write an Email">info@psychology4.me</a>
                                 </div>
                                </li>
      													<li>
                                 <div class="tt-btn tt-btn-dark" style="color: #EEF4D4 ; max-width: 200px; width: 200px;">
                                    <a href="tel:+491757045486" data-hover="Call Now">+49 175 7045486</a>
                                 </div>
                                </li>
      												</ul>
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
