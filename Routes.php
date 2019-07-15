<?php
    Route::set('about-us', function(){
        AboutUs::createView();
    });

    Route::set('contact-us', function(){
        ContactUs::createView();
    });
?>