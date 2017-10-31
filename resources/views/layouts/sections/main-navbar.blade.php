<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            @include('layouts.sections.sub-section.collapsed-namburger')

            <!-- Branding Image -->
            @include('layouts.sections.sub-section.branding-image')

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @include('layouts.sections.sub-section.left-navbar')&nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                @include('layouts.sections.sub-section.right-navbar')
                @include('layouts.sections.sub-section.lang-switcher')
            </ul>
        </div>
    </div>
</nav>