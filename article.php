<div class="container">
    <div class="row flex-column ">
        <div class="col-12 mx-auto text-center" id="articlePicture">
            <!-- image de l'article -->
            <img src="<?=get_image($rss, $index)?>" class="img-fluid"
                alt="la photo de l'article">
        </div>
        <div class="col-12 text-center">
            <!-- contenu de l'article -->
            <h1><?=get_title($rss, $index) ?></h1>
            <p class="content"><?=get_description($rss, $index) ?></p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Voir l'article</button>
            </div>
        </div>
    </div>
</div>