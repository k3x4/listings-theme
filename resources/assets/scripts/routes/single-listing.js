export default {
    init() {
      // JavaScript to be fired on the home page
    },
    finalize() {
        $('.owl-carousel').owlCarousel({
            items: 4,
            pagination: false,
            navigation: true,
            scrollPerPage: true
        });
    },
  };
  