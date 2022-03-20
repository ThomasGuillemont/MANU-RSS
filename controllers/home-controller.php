<?php 

require_once(dirname(__FILE__) . '/../config/control.php');



$radioValue = $_GET['radioname'] ?? 6;
$numberCards = $radioValue ;
$selectorsArray = [];


if(!empty($_GET['selector'])){
    $selectorValues = $_GET['selector'];

    foreach($selectorValues as $key => $value){
        array_push($selectorsArray,$value);
    }
}
$countSelector = isset($selectorValues) ? count($selectorValues) : 0 ;



// //COOKIES

// $cookieDisplay = setcookie('affichage', $radioValue, time()+3600);
// setcookie('selecteurs', json_encode($selectorsArray), time()+3600);
// if(isset($_COOKIE['selecteurs'])){
//     $decodedSelectors = json_decode($_COOKIE['selecteurs']);
// }



require_once( dirname(__FILE__).'/functions.php' );



// Préparation des titres via le tableau values
$values = [];
foreach(SELECTORS as $key => $value){
    foreach($selectorsArray as $key2 => $value2){
        if($key == $value2){
            array_push($values, $key) ;
        }
    }
}

// nombre d'article
$article = filter_input(INPUT_GET, 'radioname', FILTER_SANITIZE_NUMBER_INT);
if(empty($article)){
    $errors['articles'] = 'Veuillez rentrez un nombre d\'article viable';
} else {
    if(!in_array($article,$articlesAmount)){
        $errors['articles'] = 'Veuillez rentrez un nombre d\'article viable';
    }
}


// articles à afficher

$selectors = filter_input(INPUT_GET, 'selector', FILTER_SANITIZE_SPECIAL_CHARS);
if(empty($article)){
    $errors['selector'] = 'Veuillez sélectionnez des catégories';
} else {
    $checkedSelectors = filter_var(
        $selectors,
        FILTER_VALIDATE_REGEXP,
        array("options" => array("regexp" => '/' . REGEXP . '/')));
}

    
    
include(dirname(__FILE__) .'/../views/templates/header.php');


switch($countSelector){
    case 1 :
        include(dirname(__FILE__) .'/pages-controller-1theme.php');
        break;
    case 2 : 
        include(dirname(__FILE__) .'/pages-controller-2theme.php');
        break;
    case 3 : 
        include(dirname(__FILE__) .'/pages-controller-3theme.php');
        break;
    default : 
        include(dirname(__FILE__) .'/pages-controller-accueil.php');
}

include(dirname(__FILE__) .'/../views/templates/footer.php');


