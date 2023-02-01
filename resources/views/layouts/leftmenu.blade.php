<div id="menu" role="navigation">
    <ul class="navigation list-unstyled" id="demo">
        <li><span class="close-icon d-xl-none d-lg-block"><img src="{{asset('img/images/input-disabled.png')}}"
                    alt="image missing"></span></li>

        <a href="{{ URL::to('index') }}" class="logo navbar-brand mr-0">
            <h1 class="text-center"> Sepz2248.odns </h1>
        </a>
        <li {!! (Request::is('') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('') }}">
                <span class="mm-text ">Dashboard</span>
                <span class="menu-icon"><i class="im im-icon-Home"></i></span>
            </a>
        </li>

        <!-- <li {!! (Request::is('account') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('builder') }}">
                <span class="mm-text ">Crud Builder</span>
                <span class="menu-icon"><i class="im im-icon-Gift-Box"></i></span>
            </a>
        </li> -->

        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('typography') }}">
                <span class="mm-text ">Credit Mangement</span>
                <span class="menu-icon"><i class="im im-icon-Italic-Text"></i></span>
            </a>
        </li>

        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('typography') }}">
                <span class="mm-text ">My Inbox</span>
                <span class="menu-icon"><i class="im im-icon-Italic-Text"></i></span>
            </a>
        </li>

        <li {!! (Request::is('typography') ? 'class="active"' : '' ) !!}>
            <a href="{{ URL::to('typography') }}">
                <span class="mm-text ">Puchase</span>
                <span class="menu-icon"><i class="im im-icon-Italic-Text"></i></span>
            </a>
        </li>

        <li {!! (Request::is('buttons') || Request::is('alerts') || Request::is('dropdown') || Request::is('cards') ||
            Request::is('forms') || Request::is('form_layout')|| Request::is('form_examples') ||
            Request::is('accordion') || Request::is('progress_bar') || Request::is('pagination') || Request::is('icons')
            || Request::is('tabs') || Request::is('modals') ? 'class="menu-dropdown active"' : "class='menu-dropdown'" )
            !!}>
            <a href="#">
                <span class="mm-text ">My Projects</span>
                <span class="menu-icon "> <i class="im im-icon-Pen-4"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('alerts') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('alerts') }}">
                        Project 1
                    </a>
                </li>
                <li {!! (Request::is('buttons') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('buttons') }}">
                        Project 2
                    </a>
                </li>
                <li {!! (Request::is('cards') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('cards') }}">
                        <span class="mm-text ">Project 3</span>
                    </a>
                </li>
            </ul>
        </li>
<!-- 
        <li {!! (Request::is('advanced_select') || Request::is('toastr') ? 'class="menu-dropdown active"'
            : "class='menu-dropdown'" ) !!}>
            <a href="#">
                <span class="mm-text ">Pages</span>
                <span class="menu-icon "> <i class="im im-icon-Books"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('advanced_select') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('advanced_select') }}">
                        Advanced Form Elements
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('toastr') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('toastr') }}">
                        Toastr Notification
                    </a>
                </li>
            </ul>
            <ul class="sub-menu list-unstyled">
                <li {!! (Request::is('sweetalert') ? 'class="active"' : '' ) !!}>
                    <a href="{{ URL::to('sweetalert') }}">
                        Advanced Alerts
                    </a>
                </li>
            </ul>
        </li> -->







        @include("layouts/menu")
    </ul>
    <!-- / .navigation -->
</div>
