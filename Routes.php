<?php
    Route::set('index.php', function(){
        Index::createView("Index");
    });

    Route::set('products', function(){
        Products::createView('Products');
        Products::showProducts();
    });

    Route::set('contact-us', function(){
        ContactUs::createView("ContactUs");
    });
?>