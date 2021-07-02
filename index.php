<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Beyond Sushi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./src/styles/css/uikit.min.css" />
    <link rel="stylesheet" href="./src/styles/css/app.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <script src="./src/scripts/js/uikit.min.js"></script>
    <script src="./src/data/carousel-data.js"></script>
</head>
<body id="always">

    <!-- BEGIN NAVBAR -->
    <nav class="uk-navbar-container" uk-sticky>
        <div class="uk-container">
            <div class="uk-navbar" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="#home">Beyond Sushi</a>
                    <ul class="uk-navbar-nav">
                        <li><a href="#home">Home</a></li>
                        <li>
                            <a href="#sushi">Menu</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#sushi">Sushi</a></li>
                                    <li><a href="#wrapsandsoup">Wraps en soep</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- BEGIN HOME CONTENT -->
    <div class="uk-container" id="home">
        <!-- BEGIN CAROUSEL -->
        <div class="card carousel">
            <div class="card-header uk-text-center">Specialiteiten deze week</div>
            <div class="card-body">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow-parallax="x: 100,0,0; opacity: 1,1,0" uk-slideshow="animation: push; autoplay: true; pause-on-hover: true; max-height: 240;">
                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="./src/images/home/carousel/zero.png" alt="" uk-cover>
                            <div class="uk-overlay uk-position-center uk-text-center text-carousel slide-1">
                                <h3 class="uk-margin-remove">Nieuwe smaken</h3>
                                <p class="uk-margin-remove">deze week</p>
                            </div>
                        </li>
                        <li>
                            <img src="./src/images/home/carousel/slide3.jpg" alt="La Fiesta sushi roll" uk-cover>
                            <div class="uk-overlay uk-position-center uk-text-center text-carousel">
                                <h3 class="uk-margin-remove">La Fiesta sushi roll</h3>
                                <p class="uk-margin-remove">Zwarte rijst, Avocado en jalapeno met bovenop<br/> zwarte bonen puree en kefir limoen chips.</p>
                            </div>
                        </li>
                        <li>
                            <img src="./src/images/home/carousel/slide2.jpg" alt="Sunny Side sushi roll" uk-cover>
                            <div class="uk-overlay uk-position-center uk-text-center text-carousel">
                                <h3 class="uk-margin-remove">Sunny Side sushi roll</h3>
                                <p class="uk-margin-remove">Zwarte rijst, gesmoorde venkel, zongedroogde<br/> tomaat, bovenop flespompoen en amandel pesto</p>
                            </div>
                        </li>
                        <li>
                            <img src="./src/images/home/carousel/slide1.jpg" alt="Chic Pea sushi roll" uk-cover>
                            <div class="uk-overlay uk-position-center uk-text-center text-carousel">
                                <h3 class="uk-margin-remove">Chic Pea sushi roll</h3>
                                <p class="uk-margin-remove">Zwarte rijst, geroosterde aubergine, artisjok,<br/> bovenop saffraan kikkererwtpuree.</p>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
            </div>
        </div>
        <!-- END CAROUSEL -->

        <div class="uk-child-width-1-3 uk-text-center" uk-grid>
            <div>
                <div class="card">
                    <div class="card-header">Sushi</div>
                    <div class="card-body"><img src="./src/images/home/green-machine.png" alt="Sushi"></div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">Wraps</div>
                    <div class="card-body"><img src="./src/images/home/curry_flower.png" alt="Wraps"></div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">Soepen</div>
                    <div class="card-body"><img src="./src/images/home/chili_mushroom_noodle_soup.png" alt="Soepen"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HOME CONTENT -->

    <!-- BEGIN SUSHI CONTENT -->
    <div class="uk-container" id="sushi">
        <div class="uk-child-width-1-3 uk-text-center" uk-grid>
            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/sushi_rolls/sushi/pickle-me.png" alt="Pickle me"></div>
                    <div class="card-footer">Pickle me</div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/sushi_rolls/sushi/sushi.png" alt="Sushi"></div>
                    <div class="card-footer">Sushi</div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/sushi_rolls/sushi/sweet-tree.png" alt="Sweet tree"></div>
                    <div class="card-footer">Sweet tree</div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/sushi_rolls/sushi/mighty-mushroom.png" alt="Mighty Mushroom"></div>
                    <div class="card-footer">Mighty Mushroom</div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/sushi_rolls/sushi/green-machine.png" alt="Green machine"></div>
                    <div class="card-footer">Green machine</div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/sushi_rolls/sushi/chic_pea.png" alt="Chic pea"></div>
                    <div class="card-footer">Chic pea</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SUSHI CONTENT -->

    <!-- BEGIN WRAPS AND SOUP CONTENT -->
    <div class="uk-container" id="wrapsandsoup">
        <div class="uk-child-width-1-3 uk-text-center" uk-grid>
            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/rice_paper_wraps/wraps/nutty_buddy.png" alt="Nutty buddy"></div>
                    <div class="card-footer">Nutty buddy</div>
                </div>
            </div>

            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/rice_paper_wraps/wraps/spicy_shroom_wrap.png" alt="Spicy shroom wrap"></div>
                    <div class="card-footer">Spicy shroom wrap</div>
                </div>
            </div>

            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/rice_paper_wraps/wraps/sweet-bean.png" alt="Sweet bean"></div>
                    <div class="card-footer">Sweat bean</div>
                </div>
            </div>

            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/soups/soep/coconut_curry_starter_soup.png" alt="Coconut curry starter soup"></div>
                    <div class="card-footer">Coconut curry starter soup</div>
                </div>
            </div>

            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/soups/soep/dumpling_soup.png" alt="Dumpling soup"></div>
                    <div class="card-footer">Dumpling soup</div>
                </div>
            </div>

            <div>
                <div class="card">
                    <div class="card-body"><img src="./src/images/soups/soep/red_miso_noodle_soup.png" alt="Red miso noodle soup"></div>
                    <div class="card-footer">Red miso noodle soup</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPS AND SOUP CONTENT -->

    <!-- BEGIN CONTACT CONTENT -->
    <div class="uk-container" id="contact">
        <div class="contact_head uk-text-center">
            Contact
        </div>

        <div class="uk-child-width-1-2 uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="contact_card uk-text-center">
                    <img src="./src/images/contact/reglandingpage.png">
                </div>
            </div>

            <div class="uk-width-1-3">
                <div class="contact_card uk-overflow-auto">
                    <table class="uk-table uk-table-divider">
                        <thead>
                            <tr>
                                <th>Dag</th>
                                <th>Openingstijden</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Maandag</td>
                                <td>09:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Dinsdag</td>
                                <td>08:30 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Woensdag</td>
                                <td>08:30 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Donderdag</td>
                                <td>08:30 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Vrijdag</td>
                                <td>08:30 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Zaterdag</td>
                                <td>08:00 - 22:00 *</td>
                            </tr>
                            <tr>
                                <td>Zondag</td>
                                <td>12:00 - 22:00 *</td>
                            </tr>
                        </tbody>

                    </table>
                    <div class="other-time">* Castricum geopend tot 23:00</div>
                </div>
            </div>
        </div>

        <div class="uk-child-width-1-2 uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-child-width-1-2 uk-grid-match" uk-grid>
                    <div>
                        <div class="contact_card uk-overflow-auto">
                            <p>
                                Burgemeester Mooijstraat 17<br/>
                                1901 EP, Castricum<br/>
                                T 0251 - 652 386<br/>
                                info@beyondsushi.stateu.org
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="contact_card uk-overflow-auto">
                            <p>
                                Geesterduinweg 39<br/>
                                1902 EJ, Castricum<br/>
                                T 0251 - 654683<br/>
                                info@beyondsushi.stateu.org
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-1-3">
                <div class="contact_card uk-overflow-auto">
                    <p>
                        Middenwaard 44<br/>
                        1703 SH, Heerhugowaard<br/>
                        T 072 - 7370105<br/>
                        info@beyondsushi.stateu.org
                    </p>
                </div>
            </div>
        </div><br/><br/><br/>
    </div>
    <!-- END CONTACT CONTENT -->

    <!-- BEGIN FOOTER -->
    <footer id="footer">
        <div class="uk-container uk-text-center">
            <strong>Beyond Sushi &mdash; Pure and Simple</strong>
        </div>
    </footer>
    <!-- END FOOTER -->

</body>
</html>