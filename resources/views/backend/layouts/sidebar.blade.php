@php
$prefix = Request::route()->getPrefix();

$route = Route::current()->getName();
@endphp
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{ route ('profiles.view') }}" class="d-block">{{Auth::user()->name}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage User
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('users.view') }}" class="nav-link {{($route=='users.view')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View user</p>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Profile
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('profiles.view') }}" class="nav-link {{($route=='profiles.view')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View user</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route ('profiles.passwordView') }}" class="nav-link {{($route=='profiles.passwordView')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Change password</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy "></i>
                    <p>
                        Manage Logo
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('logos.view') }}" class="nav-link {{($route=='logos.view')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View logo</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/sliders')?'menu-open':''}}">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Slider
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('sliders.view') }}" class="nav-link {{($route=='sliders.view')?'active':''}} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Slider</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item has-treeview {{($prefix=='/missons')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Misson
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('missons.view') }}" class="nav-link {{($route=='missons.view')?'active':''}} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Misson</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/vissons')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Visson
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('vissons.view') }}" class="nav-link {{($route=='vissons.view')?'active':''}} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Visson</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item has-treeview {{($prefix=='/news_events')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage News_event
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('news_events.view') }}" class="nav-link {{($route=='news_events.view')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View News_event</p>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item has-treeview {{($prefix=='/services')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Services
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('services.view') }}" class="nav-link {{($route=='services.view')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Services</p>
                        </a>
                    </li>

                </ul>
            </li>




            <li class="nav-item has-treeview {{($prefix=='/contracts')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Contract
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('contracts.view') }}" class="nav-link {{($route=='contracts.view')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Contract</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route ('contracts.communicate') }}" class="nav-link {{($route=='contracts.communicate')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Communicate</p>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item has-treeview {{($prefix=='/abouts')?'menu-open':''}}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Abouts
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route ('abouts.view') }}" class="nav-link {{($route=='abouts.view')?'active':''}} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Abouts</p>
                        </a>
                    </li>

                </ul>
            </li>


        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>