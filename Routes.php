<?php
    Route::set('index.php', function(){
        Index::createView("Index");
    });

    Route::set('about-us', function(){
        AboutUs::createView("AboutUs");
    });

    Route::set('contact-us', function(){
        ContactUs::createView("ContactUs");
    });
?>