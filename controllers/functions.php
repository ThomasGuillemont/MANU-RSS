<?php
    // index for functions
    $i = 3;

    // RSS array
    $rssArray = array(
        "smartphones" => "https://www.01net.com/rss/smartphones/",
        "tablet" => "https://www.01net.com/rss/tablettes/",
        "laptop" => "https://www.01net.com/rss/pc-portables/",
        "connectedObjects" => "https://www.01net.com/rss/objets-connectes/",
        "audio" => "https://www.01net.com/rss/audio/"
    );

    // RSS load
    $rss_load = array();

    for ($index=0; $index <  $countSelector ; $index++) { 
        $rss_load[$index] = simplexml_load_file($rssArray[$selectorValues[$index]]);
    }

    // Function for title
    function get_title($rss, $index){
        return substr($rss->channel->item->$index->title, 0, 40).'...';
    }

    // Function for pubDate
    function get_pubDate($rss, $index){
        $englishDate = $rss->channel->item->$index->pubDate;
        setlocale(LC_TIME, 'fr_FR.UTF-8','fra.UTF-8', 'french.UTF-8', 'fr.UTF-8');
        date_default_timezone_set('Europe/Paris');
        return strftime("%A %d %B %Y", strtotime($englishDate));
    }

    // Function for link
    function get_link($rss, $index){
        return $rss->channel->item->$index->link;
    }

    // Function for description
    function get_description($rss, $index){
        return substr(strip_tags($rss->channel->item->$index->description), 0, 70).'...';
    }

    // Function for image
    function get_image($rss, $index){
        return $rss->channel->item->$index->enclosure['url'];
    }

    // Function for cards 1 theme
    function cards_generator_1($rss, $numberCards){
        for ($i=0; $i<$numberCards; $i++) {
            echo '
                <div class="col-12 col-sm-6 col-lg-4 p-3">
                    <div class="card h-100 background-card">
                        <img src="'.get_image($rss, $i).'" class="card-img-top cards-img-border" alt="'.get_description($rss, $i).'">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">'.get_title($rss, $i).'</h5>
                            <p class="fst-italic fw-light">'.get_pubDate($rss, $i).'</p>
                            <p class="card-text">'.get_description($rss, $i).'</p>
                            <a href="/article.php?article='.$rss.'&number=1" class="btn background-button-card">Lire la suite</a>
                        </div>
                    </div>
                </div>
            ';
        }
    }
    // Function for cards 2 theme
    function cards_generator_2($rss, $numberCards){
        for ($i=0; $i<$numberCards; $i++) {
            echo '
                <div class="col-12 col-xl-6 p-3">
                    <div class="card h-100 background-card">
                        <img src="'.get_image($rss, $i).'" class="card-img-top cards-img-border" alt="'.get_description($rss, $i).'">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">'.get_title($rss, $i).'</h5>
                            <p class="fst-italic fw-light">'.get_pubDate($rss, $i).'</p>
                            <p class="card-text">'.get_description($rss, $i).'</p>
                            <a href="#" class="btn background-button-card">Lire la suite</a>
                        </div>
                    </div>
                </div>
            ';
        }
    }
    // Function for cards 3 theme
    function cards_generator_3($rss, $numberCards){
        for ($i=0; $i<$numberCards; $i++) {
            echo '
                <div class="col-12 p-3">
                    <div class="card h-100 background-card">
                        <img src="'.get_image($rss, $i).'" class="card-img-top cards-img-border" alt="'.get_description($rss, $i).'">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">'.get_title($rss, $i).'</h5>
                            <p class="fst-italic fw-light">'.get_pubDate($rss, $i).'</p>
                            <p class="card-text">'.get_description($rss, $i).'</p>
                            <a href="#" class="btn background-button-card">Lire la suite</a>
                        </div>
                    </div>
                </div>
            ';
        }
    }