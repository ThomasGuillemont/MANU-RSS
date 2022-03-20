<div class="col">
    <div class="container-fluid m-0" id="theme">
        <div class="row">
            <div class="col-12 text-center fixedDiv sticky-top">
                <h2 class="themeTitle"><?=SELECTORS[$values[0]];?></h2>
            </div>
            <?= cards_generator_1($rss_load[0], $numberCards) ?? '' ?>
        </div>
    </div>
</div>