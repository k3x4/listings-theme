<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    public function gallery(){
        global $post;
        $galleryImages = get_post_meta($post->ID, 'listing-gallery-images', true);

        if($galleryImages){
            $gallery = [];
            $gallery['thumbs'] = $galleryImages;
            $galleryImages = array_map(function($image){
                return preg_replace('#-\d+[Xx]\d+\.#', '.', $image);
            }, $galleryImages);
            $gallery['images'] = $galleryImages;
            return $gallery;
        }

        return null;
    }
}
