@component('en.layout.main')
@slot('meta')
<title>404 | Psychology4.me</title>
<meta name="description" content="Oops! We couldn't find that page." />
<meta property="og:title" content="404 | Psychology4.me" />
<meta property="og:image" content="{{ asset('media/website/landing/social.jpg') }}" />
<meta property="og:site_name" content="404 | Psychology4.me" />
<meta property="og:description" content="Oops! We couldn't find that page." />
<meta name="twitter:title" content="404 | Psychology4.me" />
<meta name="twitter:description" content="Oops! We couldn't find that page." />
<meta name="twitter:image" content="{{ asset('media/website/landing/social.jpg') }}" />
@endslot
@slot('content')
            @component('en.layout.topnav')
            @endcomponent
            <div id="content-wrap">
              <div id="page-header" class="ph-full ph-cap-xlg ph-center ph-image-cropped ph-image-cover-4 ph-content-parallax">
                <div class="page-header-inner tt-wrap">
                  <div class="ph-caption">
    								<h1 class="ph-caption-title ph-appear">404</h1>
    								<div class="ph-caption-title-ghost ph-appear">404</div>
    								<div class="ph-caption-subtitle ph-appear">Oops! We couldn't find that page.</div><br>
                    <div class="tt-btn tt-btn-light-outline ph-appear">
                      <a href="{{ route('en_home')}}" data-hover="Bring me back home">Bring me back home</a>
                    </div>
    							</div>
                </div>
              </div>

            @component('en.layout.footer')
            @endcomponent
@endslot
@endcomponent
