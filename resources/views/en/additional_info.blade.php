@component('en.layout.main')
@slot('meta')
<title>Psychology4.me: Additional Information</title>
<meta name="description" content="Psychology4.me does not offer personal mental health or any sort of medical advice. If you are facing a medical emergency, immediatly call your local emergency services or visit the nearest emergency room" />
<meta property="og:title" content="Psychology4.me: Additional Information" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me: Additional Information" />
<meta property="og:description" content="Psychology4.me does not offer personal mental health or any sort of medical advice. If you are facing a medical emergency, immediatly call your local emergency services or visit the nearest emergency room" />
<meta name="twitter:title" content="Psychology4.me: Additional Information" />
<meta name="twitter:description" content="Psychology4.me does not offer personal mental health or any sort of medical advice. If you are facing a medical emergency, immediatly call your local emergency services or visit the nearest emergency room" />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Additional Information</h1>
                    <div class="ph-caption-title-ghost ph-appear">Information</div>
                  </div>
                  <div class="ph-caption-subtitle ph-appear">Psychology4.me does not offer personal mental health or any sort of medical advice. If you are facing a medical emergency, immediatly call your local emergency services or visit the nearest emergency room. You should consult your healthcare provider before starting any exercise or training program....</div>
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
                              <h2 class="tt-heading-title text-white">... Continuation</h2>
                            </div>
                          </div>
                          <div class="tt-col-lg-8">
                            <div class="text-xxlg font-alter">
                              <p class="anim-fadeinup">The content, developed through collaboration with licensed medical professionals like psychologists or psychiatrists and external contributors, including text, graphics, and other material contained on the website, web apps, newsletter, and products and services ("Content"), is general and for informational purposes only. It does not constitute any sort of professional or medical advice.</p>
                              <p class="anim-fadeinup">All of our produced Content is not intended to be a replacement or substitute for professional medical advice, diagnosis, therapy, or treatment.</p>
                              <p class="anim-fadeinup">Always consult with your psychologist, psychiatrist, doctor or other qualified healthcare providers with any questions you may have regarding any medical or mental condition, procedure, therapy or treatment.</p>
                              <p class="anim-fadeinup">Psychology4.me makes no guarantees about the efficacy or safety of services, products, therapies or treatments described on Psychology4.me's Content. Therapies and treatments are subject to constant change and are not intended to cover all possible mental health conditions.</p>
                              <p class="anim-fadeinup">Psychology4.me does not recommend or endorse in any way a specific therapy, treatment, clinician, tests, product, procedure, opinion, service, or other information that may be mentioned in Psychology4.me's website, web apps and Content.</p>
                              <p class="anim-fadeinup">The disclaimers herein are provided on this page for ease of reference. These disclaimers supplement and are a part of our <a href="{{ route('en_home')}}" class="link">Terms of Use</a>.</p>
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
