@component('en.layout.main')
@slot('meta')
<title>Psychology4.me: How do you feel today?</title>
<meta name="description" content="Having access to your own emotional world is the first step to better understand your psyche. Today, I am happy because you have tracked me down. My name is Patric Pförtner. I am a German psychologist based in the beautiful Bulgaria, ready to take a video call from all over the world." />
<meta property="og:title" content="Psychology4.me: How do you feel today?" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me: How do you feel today?" />
<meta property="og:description" content="Having access to your own emotional world is the first step to better understand your psyche. Today, I am happy because you have tracked me down. My name is Patric Pförtner. I am a German psychologist based in the beautiful Bulgaria, ready to take a video call from all over the world." />
<meta name="twitter:title" content="Psychology4.me: How do you feel today?" />
<meta name="twitter:description" content="Having access to your own emotional world is the first step to better understand your psyche. Today, I am happy because you have tracked me down. My name is Patric Pförtner. I am a German psychologist based in the beautiful Bulgaria, ready to take a video call from all over the world." />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">How do you feel today?</h1>
                    <div class="ph-caption-title-ghost ph-appear">How do you feel?</div>
                  </div>
                  <div class="ph-caption-subtitle ph-appear">Hopefully, you can answer this question with something more specific than good or bad. Having access to your own emotional world is the first step to better understand your psyche. Today, I am happy because you have tracked me down. My name is Patric Pförtner. I am a German psychologist ready to take a video call from all over the world. I am looking forward to meeting you.</div>
                  <br>
                  <div class="tt-btn tt-btn-light-outline ph-appear">
                    <a href="{{ route('en_contact')}}" data-hover="Click now!">Make an appointment</a>
                  </div>
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
                    <div class="tt-section no-padding-bottom">
                        <div class="tt-section-inner">
                            <div class="tt-heading tt-row max-width-1200 tt-heading-lg tt-heading-center anim-fadeinup">
                                <h3 class="tt-heading-subtitle text-gray tt-col-12">Common Topics</h3>
                                <h2 class="tt-heading-title tt-col-12">What are the most common topics in online counselling?</h2>
                                <div class="ph-caption-subtitle tt-col-12">Find out how online counselling with me may help you with your topic.</div>
                                <div class="tt-btn tt-btn-link margin-top-20 tt-col-12">
                                    <a href="{{ route('en_online_counselling')}}" data-hover="Click now!">Learn More</a>
                                </div>
                            </div>
                            <div class="tt-heading tt-row max-width-900 text-center tt-heading-lg tt-heading-center margin-bottom-10-p  hide-from-xs">
                              <div class="tt-col-2">
                              </div>
                              <div class="tt-col-3 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round3">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Relationship</a>
                								</div>
                              </div>
                              <div class="tt-col-2 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Stress</a>
                								</div>
                              </div>
                              <div class="tt-col-5 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round2">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Self-esteem</a>
                								</div>
                              </div>
                              <div class="tt-col-3 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Family</a>
                								</div>
                              </div>
                              <div class="tt-col-3 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round2">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Happiness</a>
                								</div>
                              </div>
                              <div class="tt-col-2 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Anxiety</a>
                								</div>
                              </div>
                              <div class="tt-col-3 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round3 margin-top-60">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Depression</a>
                								</div>
                              </div>
                              <div class="tt-col-1">
                              </div>
                              <div class="tt-col-5 anim-fadeinup" style="opacity: 0.9">
                                <a href="{{ route('en_online_counselling')}}">
                									<img src="{{ asset('media/website/landing/author2.png') }}" width="400px" height="400px" class="magnetic-item" alt="Logo">
                								</a>
                              </div>
                              <div class="tt-col-3 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round2">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Performances</a>
                								</div>
                              </div>
                            </div>
                            <div class="tt-heading tt-row max-width-900 text-center tt-heading-lg tt-heading-center margin-bottom-10-p hide-to-xs">
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round2">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Relationship</a>
                								</div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round3">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Self-esteem</a>
                								</div>
                              </div>
                              <div class="tt-col-8 anim-fadeinup" style="opacity: 0.9">
                                <a href="{{ route('en_online_counselling')}}">
                									<img src="{{ asset('media/website/landing/author2.png') }}" width="400px" height="400px" class="magnetic-item" alt="Logo">
                								</a>
                              </div>
                              <div class="tt-col-4 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Family</a>
                								</div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Anxiety</a>
                								</div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round2" style="margin-top: -50%">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Happiness</a>
                								</div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round" style="margin: -40% 20% 0 0">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Depression</a>
                								</div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light-outline tt-btn-round" style="margin: -40% 40% 0 0">
                									<a href="{{ route('en_online_counselling')}}" data-hover="Learn More">Stress</a>
                								</div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-section padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p">
                        <div class="tt-section-inner tt-wrap max-width-1100">
                            <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-15-p anim-fadeinup">
                                <h3 class="tt-heading-subtitle text-gray">What do I offer</h3>
                                <h2 class="tt-heading-title">Consultation</h2>
                            </div>
                            <div class="tt-accordion tt-ac-xlg tt-ac-borders">
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">PSYCHOLOGICAL CONSULTING</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div> <!-- /.tt-accordion-heading -->
                                    <div class="tt-accordion-content max-width-800">
                                        <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="dummy-page.html" data-hover="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">ADICE REGARDING CHILD DEVELOPMENT</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div> <!-- /.tt-accordion-heading -->
                                    <div class="tt-accordion-content max-width-800">...</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="dummy-page.html" data-hover="Read More">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">MARRIAGE COUNSELING & COUPLE THERAPY</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div> <!-- /.tt-accordion-heading -->
                                    <div class="tt-accordion-content max-width-800">...</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="dummy-page.html" data-hover="Read More">Read More</a>
                                        </div>
                                    </div> <!-- /.tt-accordion-content -->
                                </div> <!-- /.tt-accordion-item -->

                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">RELAXATION COACHING</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div> <!-- /.tt-accordion-heading -->
                                    <div class="tt-accordion-content max-width-800">...</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="dummy-page.html" data-hover="Read More">Read More</a>
                                        </div>
                                    </div> <!-- /.tt-accordion-content -->
                                </div> <!-- /.tt-accordion-item -->

                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">LIFE CONSULTATION</h3>
                                        <div class="tt-accordion-subtext">Learn More</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div> <!-- /.tt-accordion-heading -->
                                    <div class="tt-accordion-content max-width-800">...</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="dummy-page.html" data-hover="Read More">Read More</a>
                                        </div>
                                    </div> <!-- /.tt-accordion-content -->
                                </div> <!-- /.tt-accordion-item -->

                            </div>
                            <!-- End accordion -->

                        </div> <!-- /.tt-section-inner -->
                    </div>





                </div>

            @component('en.layout.footer')
            @endcomponent
@endslot
@endcomponent
