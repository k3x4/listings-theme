export default {
    init() {
      // JavaScript to be fired on the home page
    },
    finalize() {

        var $thumbGalleryDetail1 = $('#thumbGalleryDetail'),
            $thumbGalleryThumbs1 = $('#thumbGalleryThumbs'),
            flag = false,
            duration = 300;
    
        $thumbGalleryDetail1
            .owlCarousel({
                items: 1,
                margin: 10,
                nav: true,
                dots: false,
                loop: false,
                navText: [],
                autoHeight: true,
                rtl: ( $('html').attr('dir') == 'rtl' ) ? true : false,
            })
            .on('changed.owl.carousel', function(e) {
                if (!flag) {
                    flag = true;
                    $thumbGalleryThumbs1.trigger('to.owl.carousel', [e.item.index-1, duration, true]);
                    flag = false;
                }
            });
    
        $thumbGalleryThumbs1
            .owlCarousel({
                margin: 10,
                items: 8,
                nav: false,
                center: false,
                dots: false,
                rtl: ( $('html').attr('dir') == 'rtl' ) ? true : false,
            })
            .on('click', '.owl-item', function() {
                $thumbGalleryDetail1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
            })
            .on('changed.owl.carousel', function(e) {
                if (!flag) {
                    flag = true;
                    $thumbGalleryDetail1.trigger('to.owl.carousel', [e.item.index, duration, true]);
                    flag = false;
                }
            });

    },
  };
  