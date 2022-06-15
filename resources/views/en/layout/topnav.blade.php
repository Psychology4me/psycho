
                <header id="tt-header" class="tt-header-fixed">
                    <div class="tt-header-inner">

                        <div class="tt-header-col">
                          <div class="tt-logo">
            								<a href="{{ route('en_home')}}">
            									<img src="{{ asset('assets/img/logo-min.png') }}" class="magnetic-item" alt="Logo" width="70px" height="70px">
            								</a>
            							</div>
                        </div>
                                 <div class="tt-header-tools-item tt-search-trigger-wrap" style="padding:3px 12px 0 0">
                                        <div class="tt-search-trigger">
                                            <div class="tt-hti-btn tt-search-trigger-icon magnetic-item" title="Search">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                        <div class="tt-search">
                                            <div class="tt-search-close cursor-close">
                                            </div>
                                            <div class="tt-search-inner">
                                                <h1 class="tt-search-title tt-search-appear">Search</h1>
                                                <form class="tt-search-form tt-search-appear tt-form-minimal tt-form-lg" action="{{ route('search') }}" method="GET">
                                                    <div class="tt-form-btn-inside">
                                                        <input class="tt-form-control" type="text" id="search" name="search" placeholder="Type your keywords..." required>
                                                        <button type="submit"><i class="fas fa-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tt-search-ghost tt-search-appear">Search</div>
                                            <div class="tt-search-close-btn hide-cursor" title="Close"><i class="fas fa-times"></i></div>
                                        </div>
                                    </div>
                        <div class="tt-header-col">

                            <div id="tt-ol-menu-toggle-btn-wrap">
                                <div class="tt-ol-menu-toggle-btn-text">
                                    <span class="text-menu" data-hover="Open">Menu</span>
                                    <span class="text-close">Close</span>
                                </div>
                                <div class="tt-ol-menu-toggle-btn-holder">
                                    <a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
                                </div>
                            </div>
                            <nav class="tt-overlay-menu tt-ol-menu-center">
                                <div class="tt-ol-menu-holder">
                                    <div class="tt-ol-menu-inner tt-wrap">
                                        <div class="tt-ol-menu-content">
                                            <ul class="tt-ol-menu-list">
                                            <li><a href="{{ route('en_home')}}">Home</a></li>
                                            <li><a href="{{ route('en_online_counselling')}}">Counselling</a></li>
                                            <li class="tt-ol-submenu-wrap">
                    													<div class="tt-ol-submenu-trigger">
                    														<a href="#">Magazine</a>
                    														<div class="tt-ol-submenu-caret-wrap">
                    															<div class="tt-ol-submenu-caret magnetic-item"></div>
                    														</div>
                    													</div>
                    													<div class="tt-ol-submenu">
                    														<ul class="tt-ol-submenu-list">
                                                  <li><a href="{{ route('en_magazine')}}">Trending</a></li>
                    															<li><a href="{{ route('en_psychology')}}">Psychology</a></li>
                    															<li><a href="{{ route('en_self_improvement')}}">Self-Improvement</a></li>
	                                                <li><a href="{{ route('en_mental_health')}}">Mental Health A-Z</a></li>
                    														</ul>
                    													</div>
                    												</li>
                                            <li><a href="{{ route('en_contact')}}">Contact</a></li>

                                            <li><a href="{{ route('en_about_me')}}">About</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </nav>

                        </div>
                    </div>
             </header>
