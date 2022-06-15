@component('en.layout.main')
@slot('meta')
<title>Mental Health A-Z - Trustworthy Information | Psychology4.me</title>
<meta name="description" content="Get clear and trustworthy information on symptoms, diagnosis, treatment, and other topics so you can feel more prepared to manage your mental health. " />
<meta property="og:title" content="Mental Health A-Z - Trustworthy Information | Psychology4.me" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Mental Health A-Z - Trustworthy Information | Psychology4.me" />
<meta property="og:description" content="Get clear and trustworthy information on symptoms, diagnosis, treatment, and other topics so you can feel more prepared to manage your mental health. " />
<meta name="twitter:title" content="Mental Health A-Z - Trustworthy Information | Psychology4.me" />
<meta name="twitter:description" content="Get clear and trustworthy information on symptoms, diagnosis, treatment, and other topics so you can feel more prepared to manage your mental health. " />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-image">
    								<div class="ph-image-inner">
    									<img src="{{ asset('media/blog/trending/ph-4.jpg') }}" alt="Magazine Psychology4.me">
    								</div>
    							</div>
    							<div class="ph-caption">
    								<h1 class="ph-caption-title ph-appear">Mental Health A-Z</h1>
    								<div class="ph-caption-title-ghost ph-appear">Mental Health</div>
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

                <div class="tt-section no-padding-bottom no-margin-bottom">
                  <div class="tt-section-inner tt-wrap no-padding-bottom no-margin-bottom">

                    <div class="tt-row no-padding-bottom no-margin-bottom">
                      <div class="tt-col-lg-12">
    										<div class="tt-heading tt-heading-xlg">
    											<p class="text-xxlg">
                            Get clear and trustworthy information on symptoms, diagnosis, treatment, and other topics so you can feel more prepared to manage your mental health.
                          </p>
    										</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="sdc-target" class="tt-section padding-bottom-150">
                  <div class="tt-section-inner">
                    <div class="portfolio-list pli-cropped pl-compact pli-hover">

                      @foreach ($posts as $post)
                      <div class="portfolio-list-item">
                        <div class="pli-inner">

                          <div class="pli-image-col">
                            <a href="{{ $post->slug }}" class="pli-image-link" data-cursor="Read<br>More">
                              <div class="pli-image-holder">
                                 <figure class="pli-image">
                                  <img class="anim-image-parallax" src="{{ asset('media/blog/'. $post->post_id .'/ph-1.jpg') }}" alt="{{ $post->title }}">
                                </figure>
                              </div>

                              <div class="pli-info-col pli-info-inner">
                                <div class="pli-info">
                                  <h2 class="pli-title">{{ $post->title }}</h2>
                                  <div class="pli-categories-wrap">
                                    <div class="pli-category">Patric Pförtner · {{ date('F j, Y', strtotime($post->publish_date)) }} · {{ $post->category }}</div>

                                  </div>
                                </div>
                              </div>

                            </a>
                          </div>

                          <div class="pli-info-col pli-info-outer">
                            <div class="pli-info">
                              <div class="pli-counter"></div>
                              <h2 class="pli-title"><a href="{{ $post->slug }}">{{ $post->title }}</a></h2>
                              <div class="pli-categories-wrap">
                                <div class="pli-category">Patric Pförtner · {{ date('F j, Y', strtotime($post->publish_date)) }} · {{ $post->category }}</div>

                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      @endforeach

                  </div>

                </div>
    					</div>
              <!--
              <div class="tt-pagination tt-pagin-center anim-fadeinup">
                <div class="tt-pagin-prev">
                  <a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
                </div>
                <div class="tt-pagin-numbers">
                  <a href="#0" class="tt-pagin-item magnetic-item active">1</a>
                  <a href="" class="tt-pagin-item magnetic-item">2</a>
                  <a href="" class="tt-pagin-item magnetic-item">3</a>
                  <a href="" class="tt-pagin-item magnetic-item">4</a>
                </div>
                <div class="tt-pagin-next">
                  <a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
              -->
              <div class="tt-section padding-top-xlg-150 no-padding-bottom no-margin-bottom">
                <div class="tt-section-inner tt-wrap no-padding-bottom no-margin-bottom">

                  <div class="tt-row no-padding-bottom no-margin-bottom">
                    <div class="tt-col-lg-12">
  										<div class="tt-heading tt-heading-xlg">
  											<h2 class="tt-heading-title text-center">Categories</h2>
  										</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tt-section no-padding-top no-margin-top">
                <div class="tt-section-inner">
                  <div id="portfolio-grid" class="pgi-cap-inside pgi-cap-hover">
                    <div class="tt-grid ttgr-layout-3 ttgr-gap-2">
                      <div class="tt-grid-items-wrap isotope-items-wrap">
                        <div class="tt-grid-item isotope-item">
                          <div class="ttgr-item-inner">

                            <div class="portfolio-grid-item">
                              <a href="{{ route('en_psychology') }}" class="pgi-image-wrap" data-cursor="Learn<br>More">
                                 <div class="pgi-image-holder cover-opacity-2">
                                  <div class="pgi-image-inner anim-zoomin">
                                    <figure class="pgi-image ttgr-height">
                                      <img src="{{ asset('media/blog/categories/psychology-ph-1.jpg') }}" alt="Psychology Category">
                                    </figure>
                                  </div>
                                </div>
                              </a>

                              <div class="pgi-caption">
                                <div class="pgi-caption-inner">
                                  <h2 class="pgi-title">Psychology</h2>
                                  <div class="pgi-categories-wrap">
                                    <div class="pgi-category">Learn More</div>

                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>


                        <div class="tt-grid-item isotope-item">
                          <div class="ttgr-item-inner">
                            <div class="portfolio-grid-item">
                              <a href="{{ route('en_self_improvement') }}" class="pgi-image-wrap" data-cursor="Learn<br>More">
                                 <div class="pgi-image-holder cover-opacity-2">
                                  <div class="pgi-image-inner anim-zoomin">
                                    <figure class="pgi-image ttgr-height">
                                      <img src="{{ asset('media/blog/categories/self-improvement-ph-1.jpg') }}" alt="Self-Improvement Category">
                                    </figure>
                                  </div>
                                </div>
                              </a>

                              <div class="pgi-caption">
                                <div class="pgi-caption-inner">
                                  <h2 class="pgi-title">Self-Improvement</h2>
                                  <div class="pgi-categories-wrap">
                                    <div class="pgi-category">Learn More</div>

                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>



                        <div class="tt-grid-item isotope-item creative">
                          <div class="ttgr-item-inner">
                            <div class="portfolio-grid-item">
                              <a href="{{ route('en_mental_health') }}" class="pgi-image-wrap" data-cursor="Learn<br>More">
                                 <div class="pgi-image-holder cover-opacity-2">
                                  <div class="pgi-image-inner anim-zoomin">
                                    <figure class="pgi-image ttgr-height">
                                      <img src="{{ asset('media/blog/categories/mental-health-ph-1.jpg') }}" alt="Mental Health A-Z Category">
                                    </figure>
                                  </div>
                                </div>
                              </a>

                              <div class="pgi-caption">
                                <div class="pgi-caption-inner">
                                  <h2 class="pgi-title">Mental Health A-Z</h2>
                                  <div class="pgi-categories-wrap">
                                    <div class="pgi-category">Learn More</div>

                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        </div>


                      </div>
                      <!-- End tt-Grid items wrap  -->

                    </div>
                    <!-- End tt-Grid -->

                  </div>

                </div>
              </div>
            @component('en.layout.footer')
            @endcomponent
@endslot
@endcomponent
