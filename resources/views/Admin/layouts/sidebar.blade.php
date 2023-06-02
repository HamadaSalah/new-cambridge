        <div class="sidebar" data-image="{{asset('Dashboard/assets/img/sidebar-5.jpg')}}">
            <div class="sidebar-wrapper">
                <div class="logo" style="font-weight: bold">
                    <a href="#" class="simple-text">
                        <img src="{{asset('img/images/icon_01.png')}}" alt="" width="100px"><br/> <span style="display:block;margin-top: 5px"> CONTRL PANEL</span>
                    </a>
                </div>
                <ul class="nav">
                    <li class="{{ Request::segment(2) == 'slider' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.slider.index')}}">
                            <i class="nc-icon nc-button-play"></i>
                            <p>Slider</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'events' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.events.index')}}">
                            <i class="nc-icon nc-notification-70"></i>
                            <p>Events</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'eventgallery' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.eventgallery.index')}}">
                            <i class="nc-icon nc-notification-70"></i>
                            <p>Events Images</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'calender' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.calender.index')}}">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <p>Calender</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'videos' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.videos.index')}}">
                            <i class="nc-icon nc-camera-20"></i>
                            <p>Videos</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'gallery' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.gallery.index')}}">
                            <i class="nc-icon nc-album-2"></i>
                            <p>Gallery</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'facil' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.facil.index')}}">
                            <i class="nc-icon nc-album-2"></i>
                            <p>Facilities</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'welcome' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.welcome.index')}}">
                            <i class="nc-icon nc-align-center"></i>
                            <p>Welcome Page</p>
                        </a>
                    </li>
 
                    <li class="{{ Request::segment(2) == 'reachus' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.reachus.index')}}">
                            <i class="nc-icon nc-badge"></i>
                            <p>Reach Us Page</p>
                        </a>
                    </li>
 
                    <li class="{{ Request::segment(2) == 'class' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.class.index')}}">
                            <i class="nc-icon nc-bus-front-12"></i>
                            <p>Classess</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'police' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.police.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>school agreements</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'kg' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.kg.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>KG Page</p>
                        </a>
                    </li>
 
                    <li class="{{ Request::segment(2) == 'primary' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.primary.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>PRIMARY Page</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'myp' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.myp.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>MYP Page</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'ibdp' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.ibdp.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>IBDP Page</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'cas' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.cas.index')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>CAS Page</p>
                        </a>
                    </li>
                    
                    
                    {{-- <li class="{{ Request::segment(2) == 'News' ? 'active' : null }} dropparent">
                        <a class="nav-link" >
                            <i class="nc-icon nc-globe-2"></i>
                            <p>News</p>
                        </a>
                        <ul class="mydropdown"
                        style="{{ Request::segment(2) == 'news' ? 'display: block' : null }}{{ Request::segment(2) == 'newscategory' ? 'display: block' : null }}">
                            <li style="{{ Request::segment(2) == 'news' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.news.index')}}">All News</a> </li>
                            <li style="{{ Request::segment(2) == 'newscategory' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.newscategory.index')}}">News Category</a> </li>
                        </ul>
                    </li>
                    <li class="{{-- Request::segment(2) == 'News' ? 'active' : null -  dropparent">
                        <a class="nav-link" >
                            <i class="nc-icon nc-globe-2"></i>
                            <p>Opportunites</p>
                        </a>
                        <ul class="mydropdown"                        
                        style="{{Request::segment(2) == 'oppocats' ? 'display: block' : null }}{{ Request::segment(2) == 'opportunities' ? 'display: block' : null }}">
                            <li style="{{ Request::segment(2) == 'opportunities' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.opportunities.index')}}">All Opportunities</a> </li>
                            <li style="{{ Request::segment(2) == 'oppocats' ? 'background: rgb(127 94 200);' : null }}"><a href="{{route('admin.oppocats.index')}}">Opportunities Category</a> </li>
                        </ul>
                    </li>
 --}}



























                    {{-- <li class="{{ Request::segment(2) == 'about' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('admin.about.index')}}"  >
                            <i class="nc-icon nc-globe-2"></i>
                            <p>About</p>
                        </a>
                    </li>















                    <li class="{{ Request::segment(2) == 'roles' ? 'active' : null }}">
                        <a class="nav-link " href="{{Route('admin.roles.index')}}">
                            <i class="nc-icon nc-key-25"></i>
                            <p>Role & Permission</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'admins' ? 'active' : null }}">
                        <a class="nav-link " href="{{Route('admin.admins.index')}}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Dash Admin</p>
                        </a>
                    </li> --}}

                    {{-- <li class="{{ Request::segment(2) == 'about' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('about.index')}}">
                            <i class="nc-icon nc-badge"></i>
                            <p>About</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'slider' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('slider.index')}}">
                            <i class="nc-icon nc-album-2"></i>
                            <p>Slider</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'category' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('category.index')}}">
                            <i class="nc-icon nc-align-center"></i>
                            <p>Category</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'product' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('product.index')}}">
                            <i class="nc-icon nc-layers-3"></i>
                            <p>Product</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'messages' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('messages')}}">
                            <i class="nc-icon nc-chat-round"></i>
                            <p>Messages</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'order' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('order')}}">
                            <i class="nc-icon nc-cart-simple"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'testmonials' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('testmonials.index')}}">
                            <i class="nc-icon nc-notification-70"></i>
                            <p>Testmonials</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'news' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('news.index')}}">
                            <i class="nc-icon nc-tv-2"></i>
                            <p>News</p>
                        </a>
                    </li>
                    <li class="{{ Request::segment(2) == 'settings' ? 'active' : null }}">
                        <a class="nav-link" href="{{route('settings')}}">
                            <i class="nc-icon nc-settings-gear-64"></i>
                            <p>Settings</p>
                        </a>
                    </li>
 --}}
                </ul>
              
            </div>
        </div>
