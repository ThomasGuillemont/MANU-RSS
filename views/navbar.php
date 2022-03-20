<div class="container-fluid main">
    <div class="row">
        <div class="d-none d-md-flex col-3 col-lg-2 navbarLaptop laptopNav align-items-start flex-column ">
            <div class="imgLogo">
                <img src="../public/assets/img/MELT.png" alt="logo Melt" class="logoLaptop" id="logoLaptop">
            </div>
            <div class="bottomContentNav">
                <div class="itemsSelector ">
                    <div>
                        <h2 class="titleSelector">Nombre d'articles à afficher</h2>
                    </div>
                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formularDiv"
                        name="selectorFormular" method="get">
                        <div class="selectorDiv d-flex justify-content-center">
                            <label class="labl" id="leftSelector">
                                <input type="radio" name="radioname" value="6"
                                    <?php echo ($radioValue == '6') ?  'checked' : '' ?> />
                                <div>6</div>
                            </label>
                            <label class="labl" id="centerSelector">
                                <input type="radio" name="radioname" value="9"
                                    <?php echo ($radioValue == '9') ?  'checked' : '' ?> />
                                <div>9</div>
                            </label>
                            <label class="labl" id="rightSelector">
                                <input type="radio" name="radioname" value="12"
                                    <?php echo ($radioValue == '12') ?  'checked' : '' ?> />
                                <div>12</div>
                            </label>
                        </div>
                </div>
                <div class="selectors d-flex flex-column align-items-center">
                    <div class="selectorForm">
                        <?php
                            $count = 0;
                            foreach(SELECTORS as $key => $value){
                                if(in_array($key, $selectorsArray)){
                                    $checked = 'checked';
                                } else {
                                    $checked = '';
                                }
                                echo
                                    '<div>
                                        <a href="'.URL[$count].'" class="links">'.$value.'</a>
                                        <label class="switchSelector">
                                            <input type="checkbox" id="'.$key.'" class="selectorLimit" name="selector[]" value="'.$key.'"'.$checked.' >
                                            <span class="sliderSelector roundSelector"></span>
                                        </label>
                                    </div>';
                                $count ++;
                            }
                        ?>
                        <div id="displaySelectors">
                            <input type="submit" class="submit" value="Afficher">
                        </div>
                    </div>
                    </form>
                </div>
                <div class="darkMode d-flex justify-content-evenly">
                    <div class="light"><img src="/public/assets/img/light.svg" alt="sun" class="luminosity"></div>
                    <div class="toggleDarkMode">
                        <label class="switch">
                            <input type="checkbox" id="darkMode">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="dark"><img src="/public/assets/img/dark.svg" alt="moon" class="luminosity"></div>
                </div>
            </div>
        </div>
        <div class="d-md-none col-12 mobileNav">
            <nav class="navbar navbar-expand-md navbar-light navbarMobile ">
                <div class="container-fluid dropdownNav ">
                    <img src="../public/assets/img/Mobile.png" alt="logo Melt" class="logoMobile">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li>
                                <div class="itemsSelector ">
                                    <div>
                                        <h2 class="titleSelector">Nombre d'articles à afficher</h2>
                                    </div>
                                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="formularDiv"
                                        method="get">
                                        <div class="selectorDiv d-flex justify-content-center">
                                            <label class="labl" id="leftSelector">
                                                <input type="radio" name="radioname" value="6"
                                                    <?php echo ($radioValue == '6') ?  'checked' : '' ?> />
                                                <div>6</div>
                                            </label>
                                            <label class="labl" id="centerSelector">
                                                <input type="radio" name="radioname" value="9"
                                                    <?php echo ($radioValue == '9') ?  'checked' : '' ?> />
                                                <div>9</div>
                                            </label>
                                            <label class="labl" id="rightSelector">
                                                <input type="radio" name="radioname" value="12"
                                                    <?php echo ($radioValue == '12') ?  'checked' : '' ?> />
                                                <div>12</div>
                                            </label>
                                        </div>
                                </div>
                            </li>
                            <li>
                                <div class="selectors d-flex flex-column align-items-center">
                                    <div class="selectorForm">
                                        <?php
                                            $count = 0;
                                            foreach(SELECTORS as $key => $value){
                                                if(in_array($key, $selectorsArray)){
                                                    $checked = 'checked';
                                                } else {
                                                    $checked = '';
                                                }
                                                echo
                                                    '<div>
                                                        <a href="'.URL[$count].'" class="links">'.$value.'</a>
                                                        <label class="switchSelector">
                                                            <input type="checkbox" id="'.$key.'" class="selectorLimit" name="selector[]" value="'.$key.'"'.$checked.' >
                                                            <span class="sliderSelector roundSelector"></span>
                                                        </label>
                                                    </div>';
                                                $count++;
                                            }
                                        ?>
                                        <div id="displaySelectors">
                                            <input type="submit" class="submit" value="Afficher">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="darkMode d-flex justify-content-evenly">
                                    <div class="light"><img src="/public/assets/img/light.svg" alt="sun"
                                            class="luminosity"></div>
                                    <div class="toggleDarkMode">
                                        <label class="switch">
                                            <input type="checkbox" id="darkModeMobile">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="dark"><img src="/public/assets/img/dark.svg" alt="moon"
                                            class="luminosity"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- The Modal -->
        </div>
    </div>
</div>