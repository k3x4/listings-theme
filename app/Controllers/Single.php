<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    public function images(){
        global $post;
        return get_post_meta($post->ID, 'listing-gallery-images', true);
    }
}
