<!doctype html>
<html {{ get_language_attributes() }}>
@include('partials.head')

<body @php body_class() @endphp>
    @php do_action('get_header') @endphp @include('partials.header')
    <div class="wrap container-fluid" role="document">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 order-lg-2 order-md-1">
                    <main class="main">
                        @yield('content')
                    </main>
                </div>
                <div class="col-lg-2 order-lg-1 order-md-2">
                    <aside class="sidebar">
                        @include('partials.sidebar.left')
                    </aside>
                </div>
                <div class="col-lg-3 order-3">
                    <aside class="sidebar">
                        @include('partials.sidebar.right')
                    </aside>
                </div>
            </div>
        </div>
    </div>
    @php do_action('get_footer') @endphp @include('partials.footer') @php wp_footer() @endphp
</body>

</html>