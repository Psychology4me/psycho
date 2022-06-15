@component('en.layout.main')
@slot('meta')
<title>Psychology4.me: About</title>
<meta name="description" content="Hello stranger! My name is Patric Pfoertner and I am German psychologist (M. Sc.) with a specialisation in Cognitive Psychology. As a research author I already have a publication in the CBB Journal. On this page you can get an idea of who I am." />
<meta property="og:title" content="Psychology4.me: About" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me: About" />
<meta property="og:description" content="Hello stranger! My name is Patric Pfoertner and I am German psychologist (M. Sc.) with a specialisation in Cognitive Psychology. As a research author I already have a publication in the CBB Journal. On this page you can get an idea of who I am." />
<meta name="twitter:title" content="Psychology4.me: About" />
<meta name="twitter:description" content="Hello stranger! My name is Patric Pfoertner and I am German psychologist (M. Sc.) with a specialisation in Cognitive Psychology. As a research author I already have a publication in the CBB Journal. On this page you can get an idea of who I am." />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">Patric Pförtner</h1>
                    <div class="ph-caption-title-ghost ph-appear">About</div>
                  </div>
                  <div class="ph-caption-subtitle ph-appear">Hello stranger! My name is Patric Pfoertner and I am German psychologist (M. Sc.) with a specialisation in Cognitive Psychology. As a research author I already have a publication in the CBB Journal. On this page you can get an idea of who I am. I help people like you and me to work through their challenges, while offering a confidential, safe and non-judgemental space for them.</div>
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
                          <div class="tt-heading tt-row max-width-900 text-center tt-heading-lg tt-heading-center hide-from-xs">
                            <div class="tt-col-2">
                            </div>
                            <div class="tt-col-3 anim-fadeinup text-left">
                              <div class="tt-btn tt-btn-dark tt-btn-round tt-btn-round">
                                Author
                              </div>
                            </div>
                            <div class="tt-col-2 anim-fadeinup">
                              <div class="tt-btn tt-btn-light tt-btn-round tt-btn-round3" style="color:#394F49">
                                Dogs & Cats friend
                              </div>
                            </div>
                            <div class="tt-col-5 anim-fadeinup">
                              <div class="tt-btn tt-btn-light tt-btn-round2" style="color:#394F49">
                                Loves Cheese
                              </div>
                            </div>
                            <div class="tt-col-3 anim-fadeinup">
                              <div class="tt-btn tt-btn-primary tt-btn-round">
                                11.10.1995
                              </div>
                            </div>
                            <div class="tt-col-3 anim-fadeinup text-left">
                              <div class="tt-btn tt-btn-light tt-btn-round2" style="color:#394F49">
                                Speaks <br>3 languages
                              </div>
                            </div>
                            <div class="tt-col-2 anim-fadeinup text-left">
                              <div class="tt-btn tt-btn-primary tt-btn-round">
                                Male
                              </div>
                            </div>
                            <div class="tt-col-3 anim-fadeinup text-left">
                              <div class="tt-btn tt-btn-dark tt-btn-round3 margin-top-60">
                                Psychologist
                              </div>
                            </div>
                            <div class="tt-col-1">
                            </div>
                            <div class="tt-col-5 anim-fadeinup" style="opacity: 0.9">
                                <img src="{{ asset('media/website/landing/author2.png') }}" class="magnetic-item" alt="Author Patric Pförtner">
                            </div>
                            <div class="tt-col-3 anim-fadeinup">
                              <div class="tt-btn tt-btn-primary tt-btn-round2">
                                Married
                              </div>
                            </div>
                          </div>
                          <div class="tt-heading tt-row max-width-900 text-center tt-heading-lg tt-heading-center hide-to-xs">
                            <div class="tt-col-6 anim-fadeinup">
                              <div class="tt-btn tt-btn-dark tt-btn-round2">
                                Speaks 3 languages
                              </div>
                            </div>
                            <div class="tt-col-6 anim-fadeinup">
                              <div class="tt-btn tt-btn-light tt-btn-round3" style="color:#394F49">
                                Loves Cheese
                              </div>
                            </div>
                            <div class="tt-col-8 anim-fadeinup" style="opacity: 0.9">
                                <img src="{{ asset('media/website/landing/author2.png') }}" class="magnetic-item" alt="Author Patric Pförtner">
                            </div>
                            <div class="tt-col-4 anim-fadeinup">
                              <div class="tt-btn tt-btn-primary tt-btn-round">
                                Male
                              </div>
                            </div>
                            <div class="tt-col-6 anim-fadeinup">
                              <div class="tt-btn tt-btn-light tt-btn-round2" style="color:#394F49">
                                Psychologist
                              </div>
                            </div>
                            <div class="tt-col-6 anim-fadeinup">
                              <div class="tt-btn tt-btn-light tt-btn-round2" style="margin-top: -50%; color:#394F49">
                                Married
                              </div>
                            </div>
                            <div class="tt-col-6 anim-fadeinup">
                              <div class="tt-btn tt-btn-primary tt-btn-round" style="margin: -40% 20% 0 0">
                                Author
                              </div>
                            </div>
                            <div class="tt-col-6 anim-fadeinup">
                              <div class="tt-btn tt-btn-dark tt-btn-round3" style="margin: -40% 40% 0 0">
                                11.10.1995
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                    <div class="tt-section padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p">
                        <div class="tt-section-inner tt-wrap max-width-1100">
                            <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-15-p anim-fadeinup">
                                <h2 class="tt-heading-title">Curriculum Vitae</h2>
                                <div class="ph-caption-subtitle tt-col-12">Attached you can find the sections of my CV. Feel free to explore them.</div>

                            </div>
                            <div class="tt-accordion tt-ac-xlg tt-ac-borders">
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">My Interests.</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-accordion-content max-width-800">
                                        <p> Various things caught my attention over the years. For instance, I was fascinated by playing the piano. Years later I decided to give the church organ a shot. Feel free to call me a fan-boy, when it comes to the music of Bach, Vivaldi, or Mozart.
                                          Some of my favorite peaces on the piano: Ballade pour Adeline, Four Seasons (Spring & Winter), Moonlight Sonata.
                                          Enough about me hammering the white and black keys of an instrument. These days I am particularly interested in researching mental health topics from the ground up. Psychologists seem to call this 'psychoeducation'. However, I call it a free time activity.
                                          On this website, you can find me write about topics like Alzheimer's, depression, family and relationships as well as personality disorders. And from time to time, I publish YouTube videos, too.
                                        </p>
                                    </div>
                                </div>
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">Work Experience.</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-accordion-content max-width-800">
                                      <table style="width:100%" class="tt-table">
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">Consultant for hire</strong><br>
                                            <em style="color:#fafafa;">Private Psychologist, since Mai 2022</em><br>
                                            <ul style="margin:0">
                                              <li>
                                                  <div class="tt-btn tt-btn-link">
                                                      <a href="{{route('en_online_counselling')}}" data-hover="Click now!">Learn More</a>
                                                  </div>
                                                </li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">Caritas Heilbronn-Hohenlohe</strong><br>
                                            <em style="color:#fafafa;">Psychologist, since August 2021</em><br>
                                            <ul style="margin:0">
                                              <li>Life and parenting advice for adults</li>
                                              <li>School Psychologist: working with children</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">Dipl. Psychologist, coach and psychotherapist König</strong><br>
                                            <em style="color:#fafafa;">Intern, Mai 2020 - Mai 2021</em><br>
                                            <ul style="margin:0">
                                              <li>Being part of psychotherapy sessions (private clients and prisoners)</li>
                                              <li>Implementing MPU preparatory courses</li>
                                              <li><a href="https://www.gunter-koenig.de/" class="link" rel="nofollow">Website of Gunter König</a></li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">Psychology4.me Website (previously psychology-to-go.com)</strong><br>
                                            <em style="color:#fafafa;">Running the website, since September 2019</em><br>
                                            <ul style="margin:0">
                                             <li>Writing mental health articles for education purposes</li>
                                             <li>Such topics include: "Alzheimer's, Depression, Personality Disorder, etc."</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">‘Vasil Levski’ High school</strong><br>
                                            <em style="color:#fafafa;">Internship, School year 2019</em><br>
                                            <ul style="margin:0">
                                              <li>First professional experience as an intern of the school psychologist</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">INVESTBULGARIA AGENCY</strong><br>
                                            <em style="color:#fafafa;">Internship, 01. August 2016 - 27. February 2017</em><br>
                                            <ul style="margin:0">
                                              <li>Working in the “Marketing and investment services department”</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">CEO E-Commerce business</strong><br>
                                            <em style="color:#fafafa;">Entrepreneurship, 2014 - 2017</em><br>
                                            <ul style="margin:0">
                                              <li>Import and sale of Powerbanks and other mobile phone equipment</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr style="border-bottom: 0px">
                                          <td style="border-bottom: 0px">
                                            <strong style="color: #EEF4D4">JUNIOR-Company</strong><br>
                                            <em style="color:#fafafa;">Project manager, school year 2011 - 2012</em><br>
                                            <ul style="margin:0">
                                             <li>Individual design of mobile phone cases and leather bracelets</li>
                                             <li>Donation of the proceeds for two cleft lip operations (Help! - Wir helfen! e.v.)</li>
                                            </ul>
                                          </td>
                                        </tr>
                                      </table>
                                    </div>
                                </div>
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">Education.</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-accordion-content max-width-800">
                                      <table style="width:100%" class="tt-table">
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">SRH Hochschule für Gesundheit, Gera</strong><br>
                                            <em style="color:#fafafa;">M. Sc., 2020-2022</em><br>
                                            <ul style="margin:0">
                                              <li>Four semesters of mental health and psychotherapy</li>
                                              <li>Master Thesis: "Conducting and Evaluating a Children’s Divorce Group"</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">New Bulgarian University, Sofia</strong><br>
                                            <em style="color:#fafafa;">B. Sc, 2017 - 2020</em><br>
                                            <ul style="margin:0">
                                              <li>8 Semester Psychology (in English)</li>
                                              <li>Bachelor Thesis: "Thematic bootstrapping: Performance differences between expert chess players and novices"</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">College Heilbronn, Campus Schwäbisch Hall</strong><br>
                                            <em style="color:#fafafa;">MUR B. Sc, 2014 - 2017</em><br>
                                            <ul style="margin:0">
                                             <li>5 Semester Management und Unternehmensrechnung (MUR)</li>
                                             <li>"5 semesters of management and corporate accounting (MUR)"</li>
                                            </ul>
                                          </td>
                                        </tr>
                                        <tr style="border-bottom: 0px">
                                          <td style="border-bottom: 0px">
                                            <strong style="color: #EEF4D4">Hariolf-Grammar school, Ellwangen</strong><br>
                                            <em style="color:#fafafa;">2006 - 2014</em><br>
                                            <ul style="margin:0">
                                             <li>General University Entrance Qualification</li>
                                            </ul>
                                          </td>
                                        </tr>
                                      </table>
                                    </div>
                                </div>
                                <div class="tt-accordion-item anim-fadeinup">
                                    <div class="tt-accordion-heading">
                                        <h3 class="tt-ac-head-title">Publications & Recognitions.</h3>
                                        <div class="tt-accordion-subtext">Learn more</div>
                                        <div class="tt-accordion-caret-wrap">
                                            <div class="tt-accordion-caret magnetic-item"></div>
                                        </div>
                                    </div>
                                    <div class="tt-accordion-content max-width-800">
                                      <table style="width:100%" class="tt-table">
                                        <tr>
                                          <td>
                                            <strong style="color: #EEF4D4">Publication in the Journal: "Cognition, Brain, Behavior"</strong><br>
                                            Patric Pförtner, Penka Hristova*. Thematic bootstrapping: Performance differences between expert chess players and novices, Cognition, Brain, Behavior, Volume XXV, No.1 (March), 55-68, ISSN: Print 2247-9228. DOI: 10.24193/cbb.2021.25.04
                                            <a class="link" rel="noreferrer"href="https://www.researchgate.net/publication/350417388_Thematic_bootstrapping_Performance_differences_between_expert_chess_players_and_novices">Publication Link</a>
                                          </td>
                                        </tr>
                                        <tr style="border-bottom: 0px">
                                          <td style="border-bottom: 0px">
                                            <strong style="color: #EEF4D4">Presenter / Panelist</strong><br>
                                            <em style="color:#fafafa;">New Bulgarian University, February 2021</em><br>
                                            <ul style="margin:0">
                                             <li>Annual conference of the Department of Cognitive Science</li>
                                            </ul>
                                          </td>
                                        </tr>
                                      </table>
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
