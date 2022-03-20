
<div class="container-fluid m-0">
    <div class="row">
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="container-fluid" id="theme">
                <div class="row">
                    <div class="col-12 text-center fixedDiv sticky-top">
                        <h2 class="themeTitle"><?=SELECTORS[$values[0]] ?? ''?></h2>
                    </div>
                    <?= cards_generator_3($rss_load[0], $numberCards) ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="container-fluid" id="theme">
                <div class="row">
                    <div class="col-12 text-center fixedDiv sticky-top">
                        <h2 class="themeTitle"><?=SELECTORS[$values[1]]?? ''?></h2>
                    </div>
                    <?= cards_generator_3($rss_load[1], $numberCards) ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="container-fluid" id="theme">
                <div class="row">
                    <div class="col-12 text-center fixedDiv sticky-top">
                        <h2 class="themeTitle"><?=SELECTORS[$values[2]]?? ''?></h2>
                    </div>
                    <?= cards_generator_3($rss_load[2], $numberCards) ?? '' ?>
                </div>
            </div>
        </div>
    </div>
</div>

