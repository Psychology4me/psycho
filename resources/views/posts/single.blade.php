@component('en.layout.main')
@slot('meta')
<title>{{ $post->title }}</title>
<meta name="description" content="{{ $post->excerpt }}" />
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:image" content="{{ asset('media/blog/' . $post->post_id . '/og.jpg') }}" />
<meta property="og:site_name" content="Psychology4.me" />
<meta property="og:description" content="{{ $post->excerpt }}" />
<meta name="twitter:title" content="{{ $post->title }}" />
<meta name="twitter:description" content="{{ $post->excerpt }}" />
<meta name="twitter:image" content="{{ asset('media/blog/' . $post->post_id . '/twitter.jpg') }}" />
@endslot
@slot('content')
@component('en.layout.topnav')
@endcomponent

<div id="content-wrap">

  <div id="page-header" class="ph-full ph-cap-sm ph-center ph-bg-image ph-image-shadow ph-image-cover-6 ph-content-parallax">
    <div class="page-header-inner tt-wrap max-width-1400">
      <div class="ph-image">
        <div class="ph-image-inner">
          <img src="{{ asset('media/blog/' . $post->post_id . '/featured.jpg') }}" alt="{{ $post->title }}">
        </div>
      </div>
      <div class="ph-caption">
          <div class="ph-categories ph-appear hide-from-xs">
            <a href="{{ route('en_home')}}" class="ph-category">Psychology4.me presents:</a>
          </div>
          <div class="ph-categories ph-appear hide-to-xs">
            <p class="ph-category hide-to-xs">{{ Str::readDuration($post->body). ' min read'; }}</p>
          </div>
        <h2 class="ph-caption-title ph-appear">{{ $post->title }}</h2>
        <div class="project-info-list anim-fadeinup margin-top-60">
          <ul>
            <li class="hide-from-xs">
              <div class="pi-list-heading">Category</div>
              <div class="pi-list-cont">{{ $post->category }}</div>
            </li>
            <li>
              <div class="pi-list-heading">Published</div>
              <div class="pi-list-cont">{{ date('F j, Y', strtotime($post->publish_date)) }}</div>
            </li>
            <li class="hide-from-xs">
              <div class="pi-list-heading">Read Time</div>
              <div class="pi-list-cont">{{ Str::readDuration($post->body). ' min read'; }}</div>
            </li>
            <li>
              <div class="pi-list-heading">Author</div>
              <div class="pi-list-cont"><a href="{{ route('en_about_me')}}" target="_blank" rel="noopener">Patric Pförtner<span class="pi-list-icon"><i class="fas fa-arrow-right"></i></span></a></div>
            </li>
          </ul>
        </div>
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
    <div class="ph-share">
      <div class="ph-share-trigger ph-appear">
        <div class="ph-share-text">Share</div>
        <div class="ph-share-icon magnetic-item"><i class="fas fa-share-alt"></i></div>
      </div>

      <div class="ph-share-content">
        <div class="ph-share-close cursor-close"></div>
        <div class="ph-share-inner">
          <h1 class="ph-share-title ph-share-appear">Spread the Word!</h1>
          <div class="ph-share-subtitle ph-share-appear">Share this article with your friends</div>

          <div class="social-buttons ph-share-appear">
            <ul>
              <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" class="magnetic-item" rel="noopener" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/share?url={{ Request::url() }}&text={{ $post->title }}via=<USERNAME>" class="magnetic-item" rel="noopener" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
              <li><a href="http://pinterest.com/pin/create/button/?url={{ Request::url() }}&media={{ asset('media/blog/' . $post->post_id . '/og.jpg') }}&description={{ $post->excerpt }}" class="magnetic-item" rel="noopener" title="Share on Pinterst"><i class="fab fa-pinterest"></i></a></li>
              <li><a href="https://reddit.com/submit?url={{ Request::url() }}&title={{ $post->title }}" class="magnetic-item" rel="noopener" title="Share on Reddit"><i class="fab fa-reddit"></i></a></li>
              <li><a href="https://www.linkedin.com/shareArticle?url={{ Request::url() }}&title={{ $post->title }}&summary={{ $post->excerpt }}&source={{ Request::url() }}" class="magnetic-item" rel="noopener" title="Share on Linkedin"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="mailto:?subject={{ $post->title }}&body={{ Request::url() }}" class="magnetic-item" rel="noopener" title="Share with mail">Mail</a></li>
            </ul>
          </div>

        </div>

        <div class="ph-share-ghost ph-share-appear">Share</div>
      </div>
    </div>

  </div>

  <div id="page-content">


    <div class="tt-section">
      <div class="tt-section-inner tt-wrap max-width-900">
        <article class="tt-blog-post lightgallery">
          <div class="tt-blog-post-content">
            {!! $post->body !!}
          </div>
          <div class="tt-blog-post-tags">
            <ul>
              <li><div class="tt-bps-text" style="margin-left:-2px">Category:</div></li>
              @if($post->category == "Self-Improvement")
              <li><a href="{{ route('en_self_improvement') }}">#{{ $post->category }}</a></li>
              @endif
              @if($post->category == "Psychology")
              <li><a href="{{ route('en_psychology') }}">#{{ $post->category }}</a></li>
              @endif
              @if($post->category == "Mental Health A-Z")
              <li><a href="{{ route('en_mental_health') }}">#{{ $post->category }}</a></li>
              @endif
            </ul>
          </div>
          <div class="tt-blog-post-share">
            <div class="tt-bps-text">Share:</div>
            <div class="social-buttons">
              <ul>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" class="magnetic-item" rel="noopener" title="Share on Facebook"><i class="fab fa-lg fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/share?url={{ Request::url() }}&text={{ $post->title }}via=<USERNAME>" class="magnetic-item" rel="noopener" title="Share on Twitter"><i class="fab fa-lg fa-twitter"></i></a></li>
                <li><a href="http://pinterest.com/pin/create/button/?url={{ Request::url() }}&media={{ asset('media/blog/' . $post->post_id . '/og.jpg') }}&description={{ $post->excerpt }}" class="magnetic-item" rel="noopener" title="Share on Pinterst"><i class="fab fa-lg fa-pinterest"></i></a></li>
                <li><a href="https://reddit.com/submit?url={{ Request::url() }}&title={{ $post->title }}" class="magnetic-item" rel="noopener" title="Share on Reddit"><i class="fab fa-lg fa-reddit"></i></a></li>
                <li><a href="https://www.linkedin.com/shareArticle?url={{ Request::url() }}&title={{ $post->title }}&summary={{ $post->excerpt }}&source={{ Request::url() }}" class="magnetic-item" rel="noopener" title="Share on Linkedin"><i class="fab fa-lg fa-linkedin"></i></a></li>
                <li><a href="mailto:?subject={{ $post->title }}&body={{ Request::url() }}" class="magnetic-item" rel="noopener" title="Share with mail">Mail</a></li>
              </ul>
            </div>
          </div>
        </article>
        <div class="tt-blog-post-nav">
          <div class="tt-bp-nav-col tt-bp-nav-left">
            <div class="tt-bp-nav-text"><span><i class="fas fa-angle-left"></i></span>Previous Post</div>
            <h4 class="tt-bp-nav-title"><a href="{{ $previous_s }}">{{ $previous_t }}</a></h4>
          </div>
          <div class="tt-bp-nav-col tt-bp-nav-right">
            <div class="tt-bp-nav-text">Next Post<span><i class="fas fa-angle-right"></i></span></div>
            <h4 class="tt-bp-nav-title"><a href="{{ $next_s }}">{{ $next_t }}</a></h4>
          </div>
        </div>

        <div class="tt-sliding-sidebar-wrap">
          <div class="tt-sliding-sidebar">
            <div class="tt-sliding-sidebar-inner">

              <div class="sidebar-widget sidebar-search">
                <h3 class="sidebar-heading">Search</h3>
                <form action="{{ route('search') }}" method="GET">
                  <div class="tt-form-btn-inside tt-form-minimal">
                    <input class="tt-form-control" type="text" id="search" name="search" placeholder="Type something & hit enter" required>
                    <button type="submit"><i class="fas fa-search"></i></button>
                  </div>
                </form>

              </div>
              <div class="sidebar-widget sidebar-categories">
                <h3 class="sidebar-heading">Categories</h3>
                <ul class="list-unstyled">
                  <li><a href="{{ route('en_magazine')}}">Trending <span title="Entries in this category">10</span></a></li>
                  <li><a href="{{ route('en_psychology')}}">Psychology <span title="Entries in this category">{{ $cout_psych }}</span></a></li>
                  <li><a href="{{ route('en_self_improvement')}}">Self-Improvement <span title="Entries in this category">{{ $cout_self }}</span></a></li>
                  <li><a href="{{ route('en_mental_health')}}">Mental Health A-Z <span title="Entries in this category">{{ $cout_mental }}</span></a></li>
                </ul>
              </div>
              <div class="sidebar-widget sidebar-post-list">
                <h3 class="sidebar-heading">Trending Posts</h3>
                <ul class="list-unstyled">
                  @foreach ($popular as $p)
                  <li>
                    <div class="sidebar-post-data">
                      <h5 class="sidebar-post-title"><a href="{{ $p->slug }}">{{ $p->title }}</a></h5>
                      <span class="sidebar-post-date">{{ date('F j, Y', strtotime($p->publish_date)) }}</span>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>

            </div>
          </div>

          <div class="tt-sliding-sidebar-trigger hide-cursor">
            <span class="tt-ss-icon"><i class="fas fa-align-justify"></i></span>
            <span class="tt-ss-icon-close"><i class="fas fa-times"></i></span>
          </div>
          <div class="tt-sliding-sidebar-close cursor-close"></div>

        </div>
      </div>
    </div>


  </div>

@component('en.layout.footer')
@endcomponent
@endslot
@endcomponent
