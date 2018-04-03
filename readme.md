# Multiple Images upload with laravel 5.2 and dropzone Js

What is covered in this project:

    - Preview Images before upload
    - Delete images from preview and view images in popup
    - Image counter, Total size of images for uploaded images
    - Saving images as full size and icon size versions
    - Use of Image Intervention package for resizing images
    - Saving images location in database
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