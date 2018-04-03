# Laravel 5.2 and Dropzone.js auto image uploads with removal links

This project is related to tutorial from [Codingo Tuts].

What is covered in this project:

    - Auto image upload
    - Remove images directly from Dropzone preview with AJAX request
    - Image counter for uploaded images
    - Saving images as full size and icon size versions
    - Using Image Intervention package for resizing and image encoding
    - Saving image data to database
    - Unique file names for images on server side
    - Displaying already uploaded images in Dropzone

## Installation

When you clone this project cd into directory and then:

 - Copy .env.example to .env
 - `composer install`
 - `chmod -R 777 storage/ bootstrap/`
 - `php artisan key:generate`
 - Fill .env file with database credentials and upload paths.
 - `php artisan migrate`
   
Now you are set.

[Codingo Tuts]:https://tuts.codingo.me/laravel-5-1-and-dropzone-js-auto-image-uploads-with-removal-links/