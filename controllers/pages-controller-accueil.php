<div class="container-fluid m-0">
    <div class="row">
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                    </div>
                    <?= cards_generator_3(simplexml_load_file($rssArray['smartphones']), 12) ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                    </div>
                    <?= cards_generator_3(simplexml_load_file($rssArray['laptop']), 12) ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                    </div>
                    <?= cards_generator_3(simplexml_load_file($rssArray['audio']), 12) ?? '' ?>
                </div>
            </div>
        </div>
    </div>