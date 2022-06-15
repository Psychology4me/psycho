@component('en.layout.main')
@slot('meta')
<title>Psychology4.me: Online Counselling</title>
<meta name="description" content="Welcome to my online counselling practice! I offer psychological counselling via video, phone and email, and my work is based on cognitive-behavioural therapy methods." />
<meta property="og:title" content="Psychology4.me: Online Counselling" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me: Online Counselling" />
<meta property="og:description" content="Welcome to my online counselling practice! I offer psychological counselling via video, phone and email, and my work is based on cognitive-behavioural therapy methods." />
<meta name="twitter:title" content="Psychology4.me: Online Counselling" />
<meta name="twitter:description" content="Welcome to my online counselling practice! I offer psychological counselling via video, phone and email, and my work is based on cognitive-behavioural therapy methods." />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Online Counselling</h1>
                    <div class="ph-caption-title-ghost ph-appear">Counselling</div>
                  </div>
                  <div class="ph-caption-subtitle ph-appear">Welcome to my online counselling practice! I offer psychological counselling via video, phone and email, and my work is based on cognitive-behavioural therapy methods. I am here to help you work through your challenges, while offering a confidential, safe and non-judgemental space for you to explore whatever is on your mind. Please contact me to schedule a consultation. I look forward to working with you.</div>
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
                  <div class="tt-section padding-bottom-150">
      							<div class="tt-section-inner">
      								<div class="portfolio-list pli-info-lg pl-alter pli-cropped pli-hover">

      									<div class="portfolio-list-item">
      										<div class="pli-inner">

      											<div class="pli-image-col">
      													<div class="pli-image-holder">
       														<figure class="pli-image">
      															<img class="anim-image-parallax tt-lazy" src="{{ asset('media/website/landing/comofort-min.jpg') }}" data-src="{{ asset('media/website/landing/comfort.jpg') }}" alt="image of online counselling at the comfort of your home">
      														</figure>
      													</div>

      													<div class="pli-info-col pli-info-inner">
      														<div class="pli-info">
                                    <div class="pli-categories-wrap">
                                      <div class="pli-category">Online Counselling</div>
                                    </div>
      															<h2 class="pli-title">From the comfort of <br class="hide-from-sm">your home.</h2>
      														</div>
      													</div>
      											</div>

      											<div class="pli-info-col pli-info-outer">
      												<div class="pli-info">
                                <div class="pli-categories-wrap">
      														<div class="pli-category">Online Counselling</div>
      													</div>
      													<h2 class="pli-title">From the comfort of <br class="hide-from-sm">your home.</h2>

      												</div>
      											</div>

      										</div>
      									</div>

      									<!--
      									<div class="portfolio-list-item">
      										<div class="pli-inner">

      											<div class="pli-image-col">
      												<a href="single-project-3.html" class="pli-image-link" data-cursor="View<br>Project">
      													<div class="pli-image-holder">
       														<div class="pli-image">

       															<figure class="pli-video-wrap anim-image-parallax">
      																<video class="pli-video" loop muted preload="metadata" poster="assets/vids/fashion-week.jpg">
      																	<source src="assets/vids/fashion-week.mp4" type="video/mp4">
      																	<source src="assets/vids/fashion-week.webm" type="video/webm">
      																</video>
      															</figure>

      														</div>
      													</div>

      													<div class="pli-info-col pli-info-inner">
      														<div class="pli-info">
      															<h2 class="pli-title">Fashion<br class="hide-from-sm"> Week</h2>
      															<div class="pli-categories-wrap">
      																<div class="pli-category">People</div>
      															</div>
      														</div>
      													</div>

      												</a>
      											</div>

      											<div class="pli-info-col pli-info-outer">
      												<div class="pli-info">
      													<div class="pli-counter"></div>
      													<h2 class="pli-title"><a href="single-project-3.html">Fashion<br class="hide-from-sm"> Week</a></h2>
      													<div class="pli-categories-wrap">
      														<div class="pli-category">People</div>
      														 <div class="pli-category">Varia</div>
      													</div>
      												</div>
      											</div>

      										</div>
      									</div>
                        -->
      								</div>
      							</div>
      						</div>
                    <div class="tt-section padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p">
                        <div class="tt-section-inner tt-wrap max-width-1100">
                            <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-15-p anim-fadeinup">
                                <h3 class="tt-heading-subtitle text-gray">Online Counselling</h3>
                                <h2 class="tt-heading-title">Advantages</h2>
                                <div class="ph-caption-subtitle tt-col-12">If you're considering online counselling, you may be wondering what the benefits are. Here are a few key advantages:</div>

                            </div>
                            <div class="tt-accordion tt-ac-xlg tt-ac-borders">
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">Flexibility.</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-accordion-content max-width-800">
                                        <p>You can get counselling from the comfort of your own home, schedule appointments around your busy schedule at work and you can receive online counselling from anywhere in the world. Even when you are on vocation.</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="{{ route('en_contact')}}" data-hover="Click now!">Make an appointment</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">Confidential & Secure.</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-accordion-content max-width-800">
                                        <p>You can get confidential counselling without anyone else knowing. Besides, I have a legal obligation to secrecy.</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="{{ route('en_contact')}}" data-hover="Click now!">Make an appointment</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">No Judgement.</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-accordion-content max-width-800">
                                        <p>You can get counselling without having to face judgement from others.</p>

                                        <div class="tt-btn tt-btn-link">
                                            <a href="{{ route('en_contact')}}" data-hover="Click now!">Make an appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tt-section">
                      <div class="tt-section-inner tt-wrap">

                        <div class="tt-row">
                          <div class="tt-col-lg-4 padding-right-lg-5-p">
                            <div class="tt-heading tt-heading-sm margin-bottom-60 anim-fadeinup">
                              <h2 class="tt-heading-title text-white">Is online conselling <br class="hide-from-md">for you or not?</h2>
                            </div>
                          </div>
                          <div class="tt-col-lg-8">
                            <div class="text-xxlg font-alter">
                              <p class="anim-fadeinup">My clients are people like you and me. Ups and Downs are a normal part of life, but, sometimes we find ourselves struggle with issues that we can’t seem to solve alone.
                              Most of my clients are challenged with:
                              <ul class="anim-fadeinup">
                                <li>Relationship & family conflicts</li>
                                <li>Lack of self-esteem</li>
                                <li>Stress & burnout</li>
                                <li>Lack of sense in life</li>
                                <li>Divorce and separation</li>
                                <li>“Should I stay or should I go”</li>
                              </ul>
                            </p>
                              <p class="anim-fadeinup">So, your topics are somewhat concerning relationship problems, conflicts at work, or a life crisis, <u>then I am the right fit for you.</u> I can provide you with problem analysis, work with you on strategies to overcome your conflicts, give you proper exercises to strengthen your mental health, and most importantly listen to your concern with an open ear.</p>
                              <p class="anim-fadeinup">In case you are suffering from a clinically significant disorder, are in an acute crisis or emergency situation, then online counseling is not for you. <u>Legally speaking:</u> I am not allowed to prepare a diagnosis with subsequent therapy. Online counseling can be understood as a complementary solution to classical therapy (like CBT) provided by a professional therapist.</p>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="tt-section no-padding-bottom">
                        <div class="tt-section-inner">
                            <div class="tt-heading tt-row max-width-1200 tt-heading-lg tt-heading-center anim-fadeinup">
                                <h3 class="tt-heading-subtitle text-gray tt-col-12">About Me</h3>
                                <h2 class="tt-heading-title tt-col-12">What to expect from me in an online setting?</h2>
                                <div class="ph-caption-subtitle tt-col-12">In the online session, I will first analyse with you which behaviour and thought patterns are influencing your current situation. Then, I will on creative and new solutions tailored to your situation and needs. Some solutions that you migh encounter are:</div>
                                <div class="tt-btn tt-btn-link margin-top-20 tt-col-12">
                                    <a href="{{ route('en_about_me')}}" data-hover="Click now!">More About Me</a>
                                </div>
                            </div>
                            <div class="tt-heading tt-row max-width-900 text-center tt-heading-lg tt-heading-center margin-bottom-10-p  hide-from-xs">
                              <div class="tt-col-2">
                              </div>
                              <div class="tt-col-3 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-primary tt-btn-round tt-btn-round">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">PMR</a>
                								</div>
                              </div>
                              <div class="tt-col-2 anim-fadeinup">
                                <div class="tt-btn tt-btn-dark tt-btn-round tt-btn-round3">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">Cognitive Restructuring</a>
                								</div>
                              </div>
                              <div class="tt-col-5 anim-fadeinup">
                                <div class="tt-btn tt-btn-light tt-btn-round2">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">Free Association</a>
                								</div>
                              </div>
                              <div class="tt-col-3 anim-fadeinup">
                                <div class="tt-btn tt-btn-light tt-btn-round">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">Reframing</a>
                								</div>
                              </div>
                              <div class="tt-col-3 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-dark tt-btn-round2">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">Guided Discovery</a>
                								</div>
                              </div>
                              <div class="tt-col-2 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-light tt-btn-round3">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">Behavior Activation</a>
                								</div>
                              </div>
                              <div class="tt-col-3 anim-fadeinup text-left">
                                <div class="tt-btn tt-btn-dark tt-btn-round3 margin-top-60">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">Role Playing</a>
                								</div>
                              </div>
                              <div class="tt-col-1">
                              </div>
                              <div class="tt-col-5 anim-fadeinup" style="opacity: 0.9">
                                <a href="{{ route('en_contact')}}">
                									<img src="{{ asset('media/website/landing/author2.png') }}" width="400px" height="400px" class="magnetic-item" alt="Image of the author">
                								</a>
                              </div>
                              <div class="tt-col-3 anim-fadeinup">
                                <div class="tt-btn tt-btn-primary tt-btn-round2">
                									<a href="{{ route('en_contact')}}" data-hover="Let's start">Behavioral Experiments</a>
                								</div>
                              </div>
                            </div>
                            <div class="tt-heading tt-row max-width-900 text-center tt-heading-lg tt-heading-center margin-bottom-10-p hide-to-xs">
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-dark tt-btn-round2">
                                  <a href="{{ route('en_contact')}}" data-hover="Let's start">Behavioral Experiments</a>
                                </div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light tt-btn-round3">
                                  <a href="{{ route('en_contact')}}" data-hover="Let's start">Behavior Activation</a>
                                </div>
                              </div>
                              <div class="tt-col-8 anim-fadeinup" style="opacity: 0.9">
                                <a href="{{ route('en_contact')}}">
                                  <img src="{{ asset('media/website/landing/author2.png') }}" width="400px" height="400px" class="magnetic-item" alt="Image of the author">
                                </a>
                              </div>
                              <div class="tt-col-4 anim-fadeinup">
                                <div class="tt-btn tt-btn-primary tt-btn-round">
                                  <a href="{{ route('en_contact')}}" data-hover="Let's start">Role Playing</a>
                                </div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light tt-btn-round2">
                                  <a href="{{ route('en_contact')}}" data-hover="Let's start">Cognitive Restructuring</a>
                                </div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-light tt-btn-round2" style="margin-top: -50%">
                                  <a href="{{ route('en_contact')}}" data-hover="Let's start">Free Association</a>
                                </div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-primary tt-btn-round" style="margin: -40% 20% 0 0">
                                  <a href="{{ route('en_contact')}}" data-hover="Let's start">PMR</a>
                                </div>
                              </div>
                              <div class="tt-col-6 anim-fadeinup">
                                <div class="tt-btn tt-btn-dark tt-btn-round3" style="margin: -40% 40% 0 0">
                                  <a href="{{ route('en_contact')}}" data-hover="Let's start">Guided Discovery</a>
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
