<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Image;
use Input;
use App\Services\Gallery;

class GalleryController extends Controller
{    
	/**
	 * Automatically pulls folders from the images/photography, displays
	 */
        public function makePhotographyGallery(){

                        /**
                         * TRYING TO USE A SERVICE CLASS: App\Services\Gallery; 
                         * --- not currently working.
                         */
                        // function parameter was GalleryService $photographyArray
                        //  $photographyGallery = new GalleryService();
                        // $photographyArray = $photographyGallery->getPhotography();
        
        $imagePath = 'images/photography';
        $imageFiles = File::allFiles($imagePath); 
        return view('pages/photography')->with(compact('imagePath', 'imageFiles'));
    }

        /**
         * Automatically pulls folders from the images/photoshop directory, displays
         */
        public function makePhotoshopGallery(){
            $imagePath = 'images/photoshop';
            $imageFiles = File::allFiles($imagePath);
            return view('pages/photoshop')->with(compact('imagePath', 'imageFiles'));
        }
}
