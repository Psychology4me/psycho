@component('en.layout.main')
@slot('meta')
<title>Psychology4.me: Disclaimer</title>
<meta name="description" content="Responsible (Information according to German § 5 TMG). Patric Pförtner (M.Sc. Psychologist)" />
<meta property="og:title" content="Psychology4.me: Disclaimer" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me: Disclaimer" />
<meta property="og:description" content="Responsible (Information according to German § 5 TMG). Patric Pförtner (M.Sc. Psychologist)" />
<meta name="twitter:title" content="Psychology4.me: Disclaimer" />
<meta name="twitter:description" content="Responsible (Information according to German § 5 TMG). Patric Pförtner (M.Sc. Psychologist)" />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
              <div class="page-header-inner tt-wrap">
                <div class="ph-caption">
                  <h1 class="ph-caption-title ph-appear">Disclaimer</h1>
                  <div class="ph-caption-title-ghost ph-appear">Disclaimer</div>
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
                    <div class="tt-section">
                      <div class="tt-section-inner tt-wrap fadeinup">
                        <h2>Responsible (Information according to German § 5 TMG)</h2>
                        <p>Patric Pförtner (M.Sc. Psychologist), Ivan Pamukchiev 7A, 5600 Troyan, Bulgaria</p>
                        <ul class="list-inline text-left">
                          <li>Contact:</li>
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
                        <p>Tax number: 57549/70270</p>
                      <h2>EU Dispute Resolution</h2>
                      <p>The European Commission provides an Online Dispute Resolution (OS) platform: <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr</a>.<br> You will find our e-mail address at the top of the imprint.</p>

                      <h2>Consumer dispute resolution/Universal Arbitration Body</h2>
                      <p>We are not prepared or obliged to participate in dispute resolution proceedings before a consumer arbitration board.</p>
                      <h3>Liability for contents</h3>
                      <p>As a service provider, we are responsible for our own content on these pages according to § 7 para.1 TMG (German Telemedia Act) and general laws. According to §§ 8 to 10 TMG we are not obliged to monitor transmitted or stored information from third parties or to investigate circumstances that indicate illegal activity.</p>
                      <p>Obligations to remove or block the use of information according to general laws remain unaffected by this. However, liability in this respect is only possible from the time of knowledge of a concrete infringement. If we become aware of any such legal infringements, we will remove the content in question immediately.</p>
                      <h3>Liability for Links</h3>
                      <p>Our offer contains links to external websites of third parties, on whose contents we have no influence. Therefore we cannot assume any liability for these external contents. The respective provider or operator of the sites is always responsible for the contents of the linked sites. The linked pages were checked for possible legal violations at the time of linking. Illegal contents were not identified at the time of linking.</p>
                      <p>However, a permanent control of the contents of the linked pages is not reasonable without concrete evidence of a violation of the law. If we become aware of any infringements, we will remove such links immediately.</p>
                      <h3>Copyright</h3>
                      <p>The contents and works on these pages created by the site operators are subject to German copyright law. The reproduction, editing, distribution and any kind of use outside the limits of copyright law require the written consent of the respective author or creator. Downloads and copies of these pages are only permitted for private, non-commercial use.</p>
                      <p>Insofar as the content on this site was not created by the operator, the copyrights of third parties are observed. In particular, third-party content is identified as such. Should you nevertheless become aware of a copyright infringement, please inform us accordingly. If we become aware of any infringements, we will remove such contents immediately.</p></div>

                    </div>
                </div>

            @component('en.layout.footer')
            @endcomponent
@endslot
@endcomponent
