<?php if(isset($_GET['car'])) : ?>
    <?php

        $stock_car = ['2007infinityg35', '2010hondaodessey', '2012hondacrv', '2013mercedesbenz', '2014fordescape', '2015fordf150', '2015fordfusion', '2015landroverrangeroverautobiography', '2015lincolnmkz', '2017infinityqx30'];
        $car = isset($_GET['car']) ? stripslashes(htmlspecialchars($_GET['car'])) : '';

        if(!in_array($car, $stock_car)) {
            echo "This car is not available";
            die();
        }else {

            switch ($car) {
                case '2007infinityg35':
                    $name = 'Infinity G35'; 
                    $price = 'Call';
                    $body = 'Coupe';
                    $year = '2007'; 
                    $mileage = '...';
                    $engine = '6-cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Gasoline';
                    $colors = 'Black / Neige';
                    $drive_train = 'Rear wheel Drive';
                    $stock = '01';
                    $overview = '';
                    $specifications = '';
                    $technical_detail = '';
                    break;
                case '2010hondaodessey':
                    $name = 'Honda Odyssey'; 
                    $price = 'Call';
                    $body = 'Minivan / Van';
                    $year = '2010'; 
                    $mileage = '... ';
                    $engine = '6-cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Gasoline';
                    $colors = 'Gray';
                    $drive_train = 'Front Wheel Drive';
                    $stock = '01';
                    $overview = '• 3.5L • V6 • Auto • Front Wheel Drive • 7 Passenger • A/C • Power Sliding Doors • Cloth Interior • 3-Zone Climate Control • DVD Entertainment System • Power Options • Keyless Entry • Alloy Wheels • Roof Rack';
                    $specifications = '• 3.5L • V6 • Auto • Front Wheel Drive • 7 Passenger • A/C • Power Sliding Doors • Cloth Interior • 3-Zone Climate Control • DVD Entertainment System • Power Options • Keyless Entry • Alloy Wheels • Roof Rack';
                    $technical_detail = '• 3.5L • V6 • Auto • Front Wheel Drive • 7 Passenger • A/C • Power Sliding Doors • Cloth Interior • 3-Zone Climate Control • DVD Entertainment System • Power Options • Keyless Entry • Alloy Wheels • Roof Rack';
                    break;
                case '2012hondacrv':
                    $name = 'Honda CR-V'; 
                    $price = '6,500 <small style="font-size : .5em !important">+ taxes & licensing</small>';
                    $body = 'SUV / Crossover';
                    $year = '2012'; 
                    $mileage = '... ';
                    $engine = '4-cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Gasoline';
                    $colors = 'Black / Gray';
                    $drive_train = 'All Wheel Drive';
                    $stock = '01';
                    $overview = '209,600KM Used Excellent Condition';
                    $specifications = 'AWD,AUTO,NO ACCIDENT.SAFETY+3years warranty included';
                    $technical_detail = '';
                    break;
                case '2013mercedesbenz':
                    $name = 'Mercedes-Benz ML 350'; 
                    $price = '22,500 <small style="font-size : .5em !important">+ taxes & licensing</small>';
                    $body = 'SUV / Crossover';
                    $year = '2013'; 
                    $mileage = '... ';
                    $engine = '6-Cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Diesel';
                    $colors = 'Black / Gray';
                    $drive_train = 'All Wheel Drive';
                    $stock = '01';
                    $overview = '2013 Mercedes-Benz ML 350 BLUETECH, DIESEL.115KM, NO ACCIDENT, SAFETY+3Y WARANT';
                    $specifications = 'Certified This vehicle is Safety Certified.';
                    $technical_detail = '';
                    break;
                case '2014fordescape':
                    $name = 'Ford Escape'; 
                    $price = '11,498 <small style="font-size : .5em !important">+ taxes & licensing</small>';
                    $body = 'SUV / Crossover';
                    $year = '2014'; 
                    $mileage = '... ';
                    $engine = '6-Cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Gasoline';
                    $colors = 'Black / Red';
                    $drive_train = '4-Wheel Drive';
                    $stock = '01';
                    $overview = '10KM used';
                    $specifications = '';
                    $technical_detail = '';
                    break;
                case '2015fordf150':
                    $name = 'Ford F-150'; 
                    $price = '25,000';
                    $body = 'Pickup Truck';
                    $year = '2015';
                    $mileage = '... ';
                    $engine = '8-Cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Gasoline';
                    $colors = 'Black';
                    $drive_train = '4-Wheel Drive';
                    $stock = '01';
                    $overview = '';
                    $specifications = '';
                    $technical_detail = '';
                    break;
                case '2015fordfusion':
                    $name = 'Ford Fusion'; 
                    $body = 'Sedan';
                    $price = '10,999 <small style="font-size : .5em !important">+ taxes & licensing</small>';
                    $year = '2015'; 
                    $mileage = '... ';
                    $engine = '4-Cylinder';
                    $transmission = 'Variable / CVT';
                    $fuel = 'Gasoline';
                    $colors = 'White / Black';
                    $drive_train = 'Front Wheel Drive';
                    $stock = '01';
                    $overview = '';
                    $specifications = '';
                    $technical_detail = '';
                    break;
                case '2015landroverrangeroverautobiography':
                    $name = 'Land Rover Range Rover'; 
                    $price = '69,980 <small style="font-size : .5em !important">+ taxes & licensing</small>';
                    $body = 'SUV / Crossover';
                    $year = '2015'; 
                    $mileage = '... ';
                    $engine = '6-Cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Gasoline';
                    $colors = 'White / Red';
                    $drive_train = '4-Wheel Drive';
                    $stock = '01';
                    $overview = '';
                    $specifications = 'A local Land Rover Range Rover Autobiography 4WD. Well equipped with Heated and ventilated 16-way power leather front memory seats, Massage front seats, Heated and ventilated power leather rear seats, Four zone climate control, Panoramic moonroof, Navigation, Rear seat entertainment system with dual 10.2" screens, Meridian premium audio system, Satellite radio, CD Changer, Aux input, Usb input, Ipod input, Bluetooth, Bluetooth audio, Steering wheel controls, Heated steering wheel, Power tilt / telescopic steering wheel, Paddle shifters, Power windows, Power door locks, Power folding mirrors, Blind spot monitoring, Lane departure warning, Adaptive cruise control, Keyless touch entry and locking, Keyless push button ignition, Height adjustable air suspension, Terrain response off road driving programs, Grand black lacquer wood trim, Center console cooler box, Leather headliner, Illuminated scuff plates, Soft close doors, Cargo mat, Cargo cover, Power tailgate, Trailer hitch, Surround camera system with 5 cameras, Front and rear parking sensors, Park assist system, Bi-xenon headlamps, LED fog lights, LED running lights, Headlamp washing system, 22" Split 7 spoke diamond turned alloy wheels. 5.0L Supercharged V8 mated to a 8 speed shiftable automatic transmission producing 510hp / 461lb-ft. Balance of full factory warranty. Well maintained and just serviced. Leasing and financing available. All trades accepted.';
                    $technical_detail = 'A local Land Rover Range Rover Autobiography 4WD. Well equipped with Heated and ventilated 16-way power leather front memory seats, Massage front seats, Heated and ventilated power leather rear seats, Four zone climate control, Panoramic moonroof, Navigation, Rear seat entertainment system with dual 10.2" screens, Meridian premium audio system, Satellite radio, CD Changer, Aux input, Usb input, Ipod input, Bluetooth, Bluetooth audio, Steering wheel controls, Heated steering wheel, Power tilt / telescopic steering wheel, Paddle shifters, Power windows, Power door locks, Power folding mirrors, Blind spot monitoring, Lane departure warning, Adaptive cruise control, Keyless touch entry and locking, Keyless push button ignition, Height adjustable air suspension, Terrain response off road driving programs, Grand black lacquer wood trim, Center console cooler box, Leather headliner, Illuminated scuff plates, Soft close doors, Cargo mat, Cargo cover, Power tailgate, Trailer hitch, Surround camera system with 5 cameras, Front and rear parking sensors, Park assist system, Bi-xenon headlamps, LED fog lights, LED running lights, Headlamp washing system, 22" Split 7 spoke diamond turned alloy wheels. 5.0L Supercharged V8 mated to a 8 speed shiftable automatic transmission producing 510hp / 461lb-ft. Balance of full factory warranty. Well maintained and just serviced. Leasing and financing available. All trades accepted.';
                    break;
                case '2015lincolnmkz':
                    $name = 'Lincoln MKZ';
                    $price = '17,920 <small style="font-size : .5em !important">+ taxes & licensing</small>';
                    $body = '17,920';
                    $year = '2015';
                    $mileage = '... ';
                    $engine = '4-Cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Hybrid';
                    $colors = 'Black';
                    $drive_train = '';
                    $stock = '01';
                    $overview = 'HYBRID - NAVI - PANO ROOF - SELF PARKING';
                    $specifications = 'HYBRID - NAVI - PANO ROOF - SELF PARKING';
                    $technical_detail = 'HYBRID - NAVI - PANO ROOF - SELF PARKING';
                    break;
                case '2017infinityqx30':
                    $name = 'Infinity QX-30'; 
                    $price = '20,800 <small style="font-size : .5em !important">+ taxes & licensing</small>';
                    $body = 'Wagon';
                    $year = '2017'; 
                    $mileage = '... ';
                    $engine = '6-Cylinder';
                    $transmission = 'Automatic';
                    $fuel = 'Gasoline';
                    $colors = 'Gray / Graphite';
                    $drive_train = '';
                    $stock = '01';
                    $overview = '154,135KM Used';
                    $specifications = '154,135KM Used';
                    $technical_detail = '154,135KM Used';
                    break;
                
                default:
                    die('Yes papi !!!');
                    break;
            }
        }
    ?>
    <div class="section-title-page area-bg area-bg_dark area-bg_op_70">
        <div class="area-bg__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="b-title-page bg-primary_a">cars details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .b-title-page-->
    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="icon fa fa-home"></i></a>
                        </li>
                        <li><a href="#">Vehicle Inventry</a>
                        </li>
                        <li class="active">Car Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb-->
    <main class="l-main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section class="b-car-details">
                        <div class="b-car-details__header">
                            <h2 class="b-car-details__title"><?= $name; ?></h2>
                            <div class="b-car-details__subtitle"><?= $transmission; ?> <?= $name; ?> <?= $body; ?></div>
                            <div class="b-car-details__address"><i class="icon fa fa-map-marker text-primary"></i> 1800 NW 24th Ave Miami, 33125 Florida USA</div>
                        </div>
                        <div class="slider-car-details slider-pro" id="slider-car-details">
                            <div class="sp-slides">
                                <div class="sp-slide"><img class="sp-image" src="Data/components/b-cars/<?= $car; ?>/1.jpg" alt="img" /></div>
                                <div class="sp-slide"><img class="sp-image" src="Data/components/b-cars/<?= $car; ?>/2.jpg" alt="img" /></div>
                                <div class="sp-slide"><img class="sp-image" src="Data/components/b-cars/<?= $car; ?>/3.jpg" alt="img" /></div>
                                <div class="sp-slide"><!-- <iframe class="sp-video" src="https://www.youtube.com/embed/AAfLTYZKFTc" allowfullscreen="allowfullscreen"></iframe> --><img class="sp-image" src="Data/components/b-cars/<?= $car; ?>/4.jpg" alt="img" /></div>
                                <div class="sp-slide"><img class="sp-image" src="Data/components/b-cars/<?= $car; ?>/5.jpg" alt="img" /></div>
                                <div class="sp-slide"><img class="sp-image" src="Data/components/b-cars/<?= $car; ?>/6.jpg" alt="img" /></div>
                                <div class="sp-slide"><img class="sp-image" src="Data/components/b-cars/<?= $car; ?>/7.jpg" alt="img" /></div>
                            </div>
                            <div class="sp-thumbnails">
                                <div class="sp-thumbnail"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/1.jpg" alt="img" /></div>
                                <div class="sp-thumbnail"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/2.jpg" alt="img" /></div>
                                <div class="sp-thumbnail"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/3.jpg" alt="img" /></div>
                                <div class="sp-thumbnail"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/4.jpg" alt="img" /></div>
                                <!-- <div class="sp-thumbnail sp-thumbnail_video"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/1.jpg" alt="img" /></div> -->
                                <div class="sp-thumbnail"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/5.jpg" alt="img" /></div>
                                <div class="sp-thumbnail"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/6.jpg" alt="img" /></div>
                                <div class="sp-thumbnail"><img class="img-responsive" src="Data/components/b-cars/<?= $car; ?>/7.jpg" alt="img" /></div>
                            </div>
                        </div>
                        <!-- end .b-thumb-slider-->
                        <div class="b-car-details__section">
                            <h3 class="b-car-details__section-title ui-title-inner">Car Overview</h3>
                            <div class="b-car-details__section-subtitle">Eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam.</div>
                            <p><?= $overview; ?></p>
                        </div>
                        <ul class="b-car-details__nav nav nav-tabs bg-primary">
                            <li class="active"><a href="#specifications" data-toggle="tab">specifications</a></li>
                            <li><a href="#details" data-toggle="tab">technical details</a></li>
                            <li><a href="#contact" data-toggle="tab">contact</a></li>
                        </ul>
                        <div class="b-car-details__tabs tab-content">
                            <div class="tab-pane active fade in" id="specifications">
                                <p><?= $specifications; ?></p>
                            </div>
                            <div class="tab-pane fade" id="details">
                                <p><?= $technical_detail; ?></p>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
                                <p>This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy confidence knowing Jeep Dodge Ram Surprise has been exceeding customer expectations for many years and always provide
                                    customers with a great value!</p>
                                <p>Sit amet consectetura dipisicing elit dui sed eiusmod tempor incididunt ut labore uset dolore magna aliqua minim veniam quis nostrud exercitation. Slamco em laborisa aliquip ex ea comdo consequat uis auted irure
                                    rehenderit voluptate velit esse cillum dolore eu fugiat nulla sed pariatura ipsum dolor ame consecteu adipis elit sed do eiusmod tempora incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                                    do eius tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <aside class="l-sidebar-2">
                        <div class="b-car-info">
                            <div class="b-car-info__price">$<?= $price ?></div>
                            <dl class="b-car-info__desc dl-horizontal bg-grey">
                                <dt class="b-car-info__desc-dt">body</dt>
                                <dd class="b-car-info__desc-dd"><?= $body ?></dd>
                                <dt class="b-car-info__desc-dt">year</dt>
                                <dd class="b-car-info__desc-dd"><?= $year ?></dd>
                                <dt class="b-car-info__desc-dt">MILEAGe</dt>
                                <dd class="b-car-info__desc-dd"><?= $mileage ?>mi</dd>
                                <dt class="b-car-info__desc-dt">ENGINE</dt>
                                <dd class="b-car-info__desc-dd"><?= $engine ?></dd>
                                <dt class="b-car-info__desc-dt">TRANSMISSION</dt>
                                <dd class="b-car-info__desc-dd"><?= $transmission ?></dd>
                                <dt class="b-car-info__desc-dt">FUEL</dt>
                                <dd class="b-car-info__desc-dd"><?= $fuel ?></dd>
                                <dt class="b-car-info__desc-dt">colors</dt>
                                <dd class="b-car-info__desc-dd"><?= $colors ?></dd>
                                <dt class="b-car-info__desc-dt">DRIVE TRAIN</dt>
                                <dd class="b-car-info__desc-dd"><?= $drive_train ?></dd>
                                <dt class="b-car-info__desc-dt">STOCK #</dt>
                                <dd class="b-car-info__desc-dd"><?= $stock ?></dd>
                            </dl>
                            <div class="b-car-info__item"><span class="b-car-info__item-name"><i class="icon flaticon-fuel"></i> Economy</span>
                                <div class="b-car-info__item-inner"><span class="b-car-info__item-info"><span class="b-car-info__item-info_lg">16</span><span class="b-car-info__item-info_sm"> CITY</span></span><span class="b-car-info__item-info"><span class="b-car-info__item-info_lg">24</span>
                                    <span
                                    class="b-car-info__item-info_sm">HWY</span>
                                        </span>
                                </div>
                            </div>
                            <div class="b-car-info__item"><span class="b-car-info__item-name"><i class="icon flaticon-car"></i> Vehicle Demand</span>
                                <div class="b-car-info__item-inner"><span class="b-car-info__item-info">HIGH</span>
                                </div>
                            </div>
                            <div class="b-bnr-2">
                                <div class="b-bnr-2__icon flaticon-smartphone"></div>
                                <div class="b-bnr-2__inner">
                                    <div class="b-bnr-2__title">Call Dealer</div>
                                    <div class="b-bnr-2__info">+1 (786) 480-3563</div>
                                </div>
                            </div>
                            <!-- end .b-banner-->
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- end .b-car-details-->
        <section class="section-default_top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block">Related Cars</h2>
                        <div class="ui-decor"></div>
                        <div class="related-carousel owl-carousel owl-theme owl-theme_w-btn enable-owl-carousel" data-min768="2" data-min992="3" data-min1200="3" data-margin="30" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true">
                            <div class="b-goods-feat">
                                <div class="b-goods-feat__img">
                                    <img class="img-responsive" src="Data/components/b-cars/2007infinityg35/1.jpg" alt="foto" /><span class="b-goods-feat__label">Infiniti G35<span class="b-goods-feat__label_msrp">Model 2007</span></span>
                                </div>
                                <ul class="b-goods-feat__desc list-unstyled">
                                    <li class="b-goods-feat__desc-item">Auto</li>
                                    <li class="b-goods-feat__desc-item">Model: 2007</li>
                                    <li class="b-goods-feat__desc-item">2-doors</li>
                                    <li class="b-goods-feat__desc-item">6-cylinder</li>
                                </ul>
                                <h3 class="b-goods-feat__name"><a href="index.php?p=car-shop&amp;car=2007infinityg35">Infiniti G35</a></h3>
                                <div class="b-goods-feat__info">Duis aute irure reprehender voluptate velit ese acium fugiat nulla pariatur excepteur ipsum.</div>
                            </div>
                            <div class="b-goods-feat">
                                <div class="b-goods-feat__img">
                                    <img class="img-responsive" src="Data/components/b-cars/2010hondaodessey/1.jpg" alt="foto" /><span class="b-goods-feat__label">Honda Odyssey<span class="b-goods-feat__label_msrp">Model 2010</span></span>
                                </div>
                                <ul class="b-goods-feat__desc list-unstyled">
                                    <li class="b-goods-feat__desc-item">Auto</li>
                                    <li class="b-goods-feat__desc-item">Model: 2010</li>
                                    <li class="b-goods-feat__desc-item">4-doors</li>
                                    <li class="b-goods-feat__desc-item">6-cylinder</li>
                                </ul>
                                <h3 class="b-goods-feat__name"><a href="index.php?p=car-shop&amp;car=2010hondaodessey">Honda Odyssey</a></h3>
                                <div class="b-goods-feat__info">Duis aute irure reprehender voluptate velit ese acium fugiat nulla pariatur excepteur ipsum.</div>
                            </div>
                            <div class="b-goods-feat">
                                <div class="b-goods-feat__img">
                                    <img class="img-responsive" src="Data/components/b-cars/2012hondacrv/1.jpg" alt="foto" /><span class="b-goods-feat__label">Honda CR-V<span class="b-goods-feat__label_msrp">Model 2012</span></span>
                                </div>
                                <ul class="b-goods-feat__desc list-unstyled">
                                    <li class="b-goods-feat__desc-item">Auto</li>
                                    <li class="b-goods-feat__desc-item">Model: 2012</li>
                                    <li class="b-goods-feat__desc-item">4-doors</li>
                                    <li class="b-goods-feat__desc-item">4-cylinder</li>
                                </ul>
                                <h3 class="b-goods-feat__name"><a href="index.php?p=car-shop&amp;car=2012hondacrv">Honda CR-V</a></h3>
                                <div class="b-goods-feat__info">Duis aute irure reprehender voluptate velit ese acium fugiat nulla pariatur excepteur ipsum.</div>
                            </div>
                            <div class="b-goods-feat">
                                <div class="b-goods-feat__img">
                                    <img class="img-responsive" src="Data/components/b-cars/2013mercedesbenz/1.jpg" alt="foto" /><span class="b-goods-feat__label">Mercedes-Benz<span class="b-goods-feat__label_msrp"> ML 350</span></span>
                                </div>
                                <ul class="b-goods-feat__desc list-unstyled">
                                    <li class="b-goods-feat__desc-item">Auto</li>
                                    <li class="b-goods-feat__desc-item">Model: 2013</li>
                                    <li class="b-goods-feat__desc-item">4-doors</li>
                                    <li class="b-goods-feat__desc-item">6-cylinder</li>
                                </ul>
                                <h3 class="b-goods-feat__name"><a href="index.php?p=car-shop&amp;car=2013mercedesbenz">Mercedes-Benz ML 350</a></h3>
                                <div class="b-goods-feat__info">Duis aute irure reprehender voluptate velit ese acium fugiat nulla pariatur excepteur ipsum.</div>
                            </div>
                            <div class="b-goods-feat">
                                <div class="b-goods-feat__img">
                                    <img class="img-responsive" src="Data/components/b-cars/2014fordescape/3.jpg" alt="foto" /><span class="b-goods-feat__label">Ford Escape<span class="b-goods-feat__label_msrp">Model 2014</span></span>
                                </div>
                                <ul class="b-goods-feat__desc list-unstyled">
                                    <li class="b-goods-feat__desc-item">Auto</li>
                                    <li class="b-goods-feat__desc-item">Model: 2014</li>
                                    <li class="b-goods-feat__desc-item">4-doors</li>
                                    <li class="b-goods-feat__desc-item">4-cylinder</li>
                                </ul>
                                <h3 class="b-goods-feat__name"><a href="index.php?p=car-shop&amp;car=2014fordescape">Ford Escape</a></h3>
                                <div class="b-goods-feat__info">Duis aute irure reprehender voluptate velit ese acium fugiat nulla pariatur excepteur ipsum.</div>
                            </div>
                            <div class="b-goods-feat">
                                <div class="b-goods-feat__img">
                                    <img class="img-responsive" src="Data/components/b-cars/2017infinityqx30/1.jpg" alt="foto" /><span class="b-goods-feat__label">Infinity Qx 30<span class="b-goods-feat__label_msrp">Model 2017</span></span>
                                </div>
                                <ul class="b-goods-feat__desc list-unstyled">
                                    <li class="b-goods-feat__desc-item">Auto</li>
                                    <li class="b-goods-feat__desc-item">Model: 2017</li>
                                    <li class="b-goods-feat__desc-item">4-doors</li>
                                    <li class="b-goods-feat__desc-item">6-cylinder</li>
                                </ul>
                                <h3 class="b-goods-feat__name"><a href="index.php?p=car-shop&amp;car=">Infinity Qx 30</a></h3>
                                <div /liclass="b-goods-feat__info">Duis aute irure reprehender voluptate velit ese acium fugiat nulla pariatur excepteur ipsum.</div>
                            </div>
                            <div class="b-goods-feat">
                                <div class="b-goods-feat__img">
                                    <img class="img-responsive" src="Data/components/b-cars/2015fordfusion/1.jpg" alt="foto" /><span class="b-goods-feat__label">Ford Fusion<span class="b-goods-feat__label_msrp">Model 2015</span></span>
                                </div>
                                <ul class="b-goods-feat__desc list-unstyled">
                                    <li class="b-goods-feat__desc-item">Auto</li>
                                    <li class="b-goods-feat__desc-item">Model: 2015</li>
                                    <li class="b-goods-feat__desc-item">4-doors</li>
                                    <li class="b-goods-feat__desc-item">4-cylinder</li>
                                </ul>
                                <h3 class="b-goods-feat__name"><a href="index.php?p=car-shop&amp;car=">Ford Fusion</a></h3>
                                <div class=/li"b-goods-feat__info">Duis aute irure reprehender voluptate velit ese acium fugiat nulla pariatur excepteur ipsum.</div>
                            </div>
                            <!-- end .b-goods-featured-->
                        </div>
                        <!-- end .related-carousel-->
                    </div>
                </div>
            </div>
        </section>
        <!-- end .section-default_top-->
    </main>
    <!-- end .l-main-content-->
<?php else : ?>
    <div class="section-title-page area-bg area-bg_dark area-bg_op_70">
        <div class="area-bg__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="b-title-page bg-primary_a">cars Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .b-title-page-->
    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="icon fa fa-home"></i></a>
                        </li>
                        <li class="active">Vehicle Inventry</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb-->
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-1">
                <main class="l-main-content">
                    <div class="filter-goods">
                        <!-- <div class="filter-goods__info">Showing results from<strong> 1 - 10</strong> of total<strong> 35</strong></div> -->
                        <div class="filter-goods__select">
                            <!-- <span class="hidden-xs">Sort</span> -->
                            <!-- <select class="selectpicker" data-width="172">
                                <option>Most Revelant</option>
                                <option>A-Z</option>
                                <option>Z-A</option>
                            </select> -->
                            <div class="btns-switch">
                                <i class="btns-switch__item js-view-th icon fa fa-th-large"></i>
                                <i class="btns-switch__item js-view-list active icon fa fa-th-list"></i>
                            </div>
                        </div>
                    </div>
                    <!-- end .filter-goods-->
                    <div class="goods-group-2 list-goods">
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_4.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_4.jpg" alt="image" />
                                    </a>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2007infinityg35">INFINITI G35</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">
                                        Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor incididunt
                                        <span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">6-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2007</li>
                                                <li class="b-goods-1__desc-item">Auto</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Passengers:</span> 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Beige</li>
                                                <li class="b-goods-1__list-item">Fuel Type : Gasoline</li>
                                                <li class="b-goods-1__list-item">Drive Type : Rear Wheel Drive</li>
                                                <li class="b-goods-1__list-item">Transmission : Automatic</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_7.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_7.jpg" alt="image" />
                                    </a>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2010hondaodessey">HONDA ODESSEY</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">6-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2010</li>
                                                <li class="b-goods-1__desc-item">Auto</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Passengers:</span> 7</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : Gray</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Gray</li>
                                                <li class="b-goods-1__list-item">Fuel Type : Gasoline</li>
                                                <li class="b-goods-1__list-item">Drive Type : Front Wheel Drive</li>
                                                <li class="b-goods-1__list-item">Transmission : Automatic</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_8.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_8.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$6,500<span class="b-goods-1__price-msrp">+ Taxes & licensing</span></span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2012hondacrv">HONDA CR-V</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">4-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2012</li>
                                                <li class="b-goods-1__desc-item">Auto</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Passengers:</span> 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : Gray</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Fuel Type : Gasoline</li>
                                                <li class="b-goods-1__list-item">Drive Type : All Wheel Drive</li>
                                                <li class="b-goods-1__list-item">Transmission : Automatic</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_3.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_3.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$11,498<span class="b-goods-1__price-msrp">+ Taxes & licensing</span></span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2014fordescape">FORD ESCAPE</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">4-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2014</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">10Km Used</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : Red</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Body Style : SUV / Crossover</li>
                                                <li class="b-goods-1__list-item">Drive Type : 4-Wheel Drive</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_10.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_10.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$25,000</span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2015fordf150">FORD F150</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">8-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Gasoline</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Automatic</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : BLack</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Body Style : Pickup Truck</li>
                                                <li class="b-goods-1__list-item">Drive Type : 4-Wheel Drive</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_5.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_5.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$22,500<span class="b-goods-1__price-msrp">+ Taxes & licensing</span></span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2013mercedesbenz">MERCEDES BENZ ML 350</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">6-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2013</li>
                                                <li class="b-goods-1__desc-item">Auto</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Passengers:</span> 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : Gray</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Body Style : SUV / crossover</li>
                                                <li class="b-goods-1__list-item">Fuel Type : Diesel</li>
                                                <li class="b-goods-1__list-item">Drive Type : All Wheel Drive</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_2.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_2.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$69,980<span class="b-goods-1__price-msrp">+ Taxes & licensing</span></span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2015landroverrangeroverautobiography">LAND ROVER RANGE ROVER</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">A local Land Rover Range Rover Autobiography 4WD. Well equipped with Heated and ventilated 16-way power leather front memory seats, Massage front seats, Heated and ventilated power leather rear seats, Four zone climate control, Panoramic moonroof, Navigation, Rear seat entertainment system with dual 10.2" screens, Meridian premium audio system, Satellite radio, CD Changer, Aux input, Usb input, Ipod input, Bluetooth, Bluetooth audio, Steering wheel controls, Heated steering wheel, Power tilt / telescopic steering wheel, Paddle shifters, Power windows, Power door locks, Power folding mirrors, Blind spot monitoring, Lane departure warning, Adaptive cruise control, Keyless touch entry and locking, Keyless push button ignition, Height adjustable air suspension, Terrain response off road driving programs, Grand black lacquer wood trim, Center console cooler box, Leather headliner, Illuminated scuff plates, Soft close doors, Cargo mat, Cargo cover, Power tailgate, Trailer hitch, Surround camera system with 5 cameras, Front and rear parking sensors, Park assist system, Bi-xenon headlamps, LED fog lights, LED running lights, Headlamp washing system, 22" Split 7 spoke diamond turned alloy wheels. 5.0L Supercharged V8 mated to a 8 speed shiftable automatic transmission producing 510hp / 461lb-ft. Balance of full factory warranty. Well maintained and just serviced. Leasing and financing available. All trades accepted.
                                        <span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">4-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2015</li>
                                                <li class="b-goods-1__desc-item">65,100 Km Used</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : white</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Red</li>
                                                <li class="b-goods-1__list-item">Body Style : SUV / Crossover</li>
                                                <li class="b-goods-1__list-item">Fuel Type : Gasoline</li>
                                                <li class="b-goods-1__list-item">Drive Type : 4-Wheel Drive</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_1.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_1.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$10,999<span class="b-goods-1__price-msrp">+ Taxes & licensing</span></span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2015fordfusion">FORD FUSION HYBRID</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">4-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2015</li>
                                                <li class="b-goods-1__desc-item">Auto</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Transmission:</span> Variable / CVT</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : white</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Body Style : Sedan</li>
                                                <li class="b-goods-1__list-item">Fuel Type : Hybrid</li>
                                                <li class="b-goods-1__list-item">Drive Type : Front Wheel Drive</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_12.jpg">
                                        <img class="img-responsive" src="Data/components/b-goods/263x210_12.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$17,920<span class="b-goods-1__price-msrp">+ Taxes & licensing</span></span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2015lincolnmkz">LINCOLN MKZ</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">4-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2015</li>
                                                <li class="b-goods-1__desc-item">Auto</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Passengers:</span> 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Black</li>
                                                <li class="b-goods-1__list-item">Body Style : Sedan</li>
                                                <li class="b-goods-1__list-item">Fuel Type : Hybrid</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="b-goods-1 b-goods-1_mod-a">
                            <div class="row">
                                <div class="b-goods-1__img">
                                    <a class="js-zoom-images" href="Data/components/b-goods/263x210_12.jpg">
                                        <img class="img-responsive" src="Data/components/b-cars/2017infinityqx30/1.jpg" alt="image" />
                                    </a>
                                    <span class="b-goods-1__price hidden-th">$20,800<span class="b-goods-1__price-msrp">+ Taxes & licensing</span></span>
                                </div>
                                <div class="b-goods-1__inner">
                                    <div class="b-goods-1__header"><a class="b-goods-1__choose hidden-th" href=""><i class="icon fa fa-heart-o"></i></a>
                                        <h2 class="b-goods-1__name"><a href="index.php?p=car-shop&amp;car=2017infinityqx30">INFINITY QX-30</a></h2>
                                    </div>
                                    <div class="b-goods-1__info">Duis aute irure reprehender voluptate velit esacium fugiat nula pariatur excepteurd magna aliqua ut enim ad minim veniam quis nostrud Lorem ipsum dolor sit amet con sectetur adipisicing elit sed do eiusmod tempor
                                        incididunt<span class="b-goods-1__info-more collapse" id="info-1"> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit aut rerum numquam hic eum, aperiam fuga, pariatur repellendus. Incidunt corporis iusto illo nesciunt soluta optio eius aliquam. Similique, laborum dicta!</span>
                                        <span
                                        class="b-goods-1__info-link" data-toggle="collapse" data-target="#info-1"></span>
                                    </div>
                                    </span>
                                    <div class="b-goods-1__section">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#desc-1">Highlights</h3>
                                        <div class="collapse in" id="desc-1">
                                            <ul class="b-goods-1__desc list-unstyled">
                                                <li class="b-goods-1__desc-item">6-Cylinder</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Model:</span> 2017</li>
                                                <li class="b-goods-1__desc-item">Auto</li>
                                                <li class="b-goods-1__desc-item"><span class="hidden-th">Used:</span> 154,135KM</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="b-goods-1__section hidden-th">
                                        <h3 class="b-goods-1__title" data-toggle="collapse" data-target="#list-1">specifications</h3>
                                        <div class="collapse in" id="list-1">
                                            <ul class="b-goods-1__list list list-mark-5">
                                                <li class="b-goods-1__list-item">Exterior Colour : Grey</li>
                                                <li class="b-goods-1__list-item">Interior Colour : Graphite</li>
                                                <li class="b-goods-1__list-item">Body Style : wagon</li>
                                                <li class="b-goods-1__list-item">Drive Type : All wheel Drive</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- end .goods-group-2-->
                    <!-- <ul class="pagination text-center">
                        <li><a href="#"><i class="icon fa fa-angle-double-left"></i></a>
                        </li>
                        <li><a href="#">1</a>
                        </li>
                        <li class="active"><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#"><i class="icon fa fa-angle-double-right"></i></a>
                        </li>
                    </ul> -->
                </main>
                <!-- end .l-main-content-->
            </div>
        </div>
    </div>
<?php endif; ?>