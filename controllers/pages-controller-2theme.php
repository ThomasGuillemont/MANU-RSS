<div class="container-fluid m-0">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="container-fluid" id="theme">
                <div class="row">
                    <div class="col-12 text-center fixedDiv sticky-top">
                        <h2 class="themeTitle">
                        <?=SELECTORS[$values[0]];?>
                        </h2>
                    </div>
                    <?= cards_generator_2($rss_load[0], $numberCards) ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="container-fluid" id="theme">
                <div class="row">
                    <div class="col-12 text-center fixedDiv sticky-top">
                        <h2 class="themeTitle"><?=SELECTORS[$values[1]];?></h2>
                    </div>
                    <?= cards_generator_2($rss_load[1], $numberCards) ?? '' ?>
                </div>
            </div>
        </div>
    </div>
</div>

