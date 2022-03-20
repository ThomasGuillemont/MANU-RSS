<?php 
    $articlesAmount = [
    '6','9','12'
    ];

    $errors = [] ;

    define('REGEXP', '^[a-zA-ZÀ-ÿ\. \-\']*$');

    $selectorsRef = [
        'smartphones' => 'Smartphones',
        'tablet' => 'Tablette',
        'laptop' => 'PC Portable',
        'connectedObjects' => 'Objets connectés',
        'audio' => 'Audio'
    ];

    define('SELECTORS', $selectorsRef);


    // array for navbar links
    $url = array(
        'http://myrssfeed.localhost/smartphone?radioname=6&selector%5B%5D=smartphones',
        'http://myrssfeed.localhost/tablette?radioname=6&selector%5B%5D=tablet',
        'http://myrssfeed.localhost/ordinateur?radioname=6&selector%5B%5D=laptop',
        'http://myrssfeed.localhost/objet?radioname=6&selector%5B%5D=connectedObjects',
        'http://myrssfeed.localhost/audio?radioname=6&selector%5B%5D=audio',
    );
    define('URL', $url);