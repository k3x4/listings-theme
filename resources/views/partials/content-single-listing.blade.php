<article @php post_class() @endphp>
    <header>
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        @include('partials/entry-meta')
    </header>
    <div class="entry-content">
        @if ($gallery)
            <div class="thumb-gallery">
                <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
                    @foreach ($gallery['images'] as $image)
                        <div>
                            <span class="img-thumbnail d-block">
                                <span class="v-helper"></span><img src="{{ $image }}" class="img-fluid">
                            </span>
                        </div>
                    @endforeach
                </div>
                <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
                    @foreach ($gallery['thumbs'] as $image)
                        <div>
                            <span class="img-thumbnail d-block cur-pointer">
                                <img src="{{ $image }}" class="img-fluid">
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @php the_content() @endphp
    </div>
    <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>'
                . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php comments_template('/partials/comments.blade.php') @endphp
</article>
