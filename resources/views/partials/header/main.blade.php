<div class="header-main">
    <div class="container-fluid">
        <div class="row">
            <div class="header-left col-lg-3 pt-4 pb-4">
                <div class="logo">
                    <a href="https://localhost/wordpress/" title="{{ get_bloginfo('name', 'display') }}" rel="home">
                        <img class="img-responsive standard-logo" width="100" height="32" src="{{ App\asset_path('images/aggelies-logo-100.png') }}">
                        <img class="img-responsive retina-logo" width="100" height="32" src="{{ App\asset_path('images/aggelies-logo-200.png') }}" style="max-height:32px;">
                    </a>
                </div>
            </div>
            <div class="header-right col-lg-9 pt-4 pb-4">
                <nav class="nav-primary float-right">
                    @if (has_nav_menu('primary_navigation'))
                        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
                    @endif
                </nav>
            </div>
        </div>
    </div>
    @include('partials.menu.mobile')
</div>