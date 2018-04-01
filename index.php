<?php 
session_start();
$_SESSION['username'] = 'Anonymous';

?>


<!DOCTYPE html>

<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>AJ's Sports Club SPINNING&reg;</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
        <meta content="FairTech" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link rel="icon" href="img/icon.ico">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="favicon.ico"/>

        <style>
        .vis {
        text-shadow: 0px 0px 10px rgba(0, 40, 0, 1);
      }
        </style>
    </head>


    <body id="body" data-spy="scroll" data-target=".header">

          <header class="header navbar-fixed-top">
              <nav class="navbar" role="navigation">
                <div class="container">
                      <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                          <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="FlameOnePage Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="FlameOnePage Dark Logo">
                            </a>
                          </div>
                      </div>

                    <div class="collapse navbar-collapse nav-collapse">

    					<div class="language-switcher">
    					  <ul class="nav-lang">
                  			<li><a class="active" href="#">CZ</a></li>
    					    <li><a href="#">EN</a></li>
    						<li><a href="#">DE</a></li>
    					  </ul>
    					</div> 

                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#body">DomÅ¯</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#about">O nÃ¡s</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#news">Novinky</a></li>
								                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#reservation">Rezervace</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#gallery">Fotogalerie</a></li>
								                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#rules">ProvoznÃ­ Å™Ã¡d</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#pricing">CenÃ­k</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover vis" href="#contact">Kontakty</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
			</header>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div> -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title vis">AJ's Sports Club SPINNING<sup>&reg;</sup></h1>
                                  <div class="accordion">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                      <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingOne">
                                              <h4 class="panel-title">
                                                  <a href="templates/loginRegistration/index.php" class="panel-title-child" role="button"  aria-expanded="true" aria-controls="collapseOne">
                                                    Přihlásit se
                                                  </a>
                                              </h4>
                                          </div>


                                      </div>
                                    </div>
                                  </div><!-- <p class="color-white vis">VÃ­tejte na strÃ¡nkÃ¡ch naÅ¡eho sportovnÃ­ho klubu.<br/> PevnÄ› vÄ›Å™Ã­me, Å¾e zde naleznete veÅ¡kerÃ© nezbytnÃ© informace.</p> -->
                            </div>
                            <!-- <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Details</a> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title vis">ProstÅ™edÃ­</h2>
                                <p class="color-white vis">Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                            </div>
                            <a href="about" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">PÅ™ejÃ­t</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="content-lg container">
              <div class="row margin-b-40">
                  <div class="col-sm-12">
                        <div class="col-md-5 col-sm-5 md-margin-b-40">
                            <div class="margin-t-50 margin-b-30">
                                <h2>ProÄ� prÃ¡vÄ› k nÃ¡m?</h2>
                                <p>AJâ€™s sports club je oficiÃ¡lnÃ­ provozovatel SPINNING&reg;.</p>
                                <p>Klub nabÃ­zÃ­ profesionÃ¡lnÄ› vedenÃ© hodiny SPINNING&reg;, pÅ™Ã¡telskou atmosfÃ©ru a pÅ™Ã­jemnÃ© â€žkomornÃ­â€œ prostÅ™edÃ­.</p>
                                <p>Je to klub, kterÃ½ poskytuje vÅ¡e potÅ™ebnÃ© k tomu, aby VÃ¡s SPINNING&reg; bavil a tÄ›Å¡il!</p>
                            </div>
                            <!-- <a href="#" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">More...</a> -->
                        </div>
                        <div class="col-md-5 col-sm-7 col-md-offset-2">
                            <!-- Accordion -->
                            <div class="accordion">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Expert Research
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Hi-Tech Engineering
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Outstanding Results
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accodrion -->
                        </div>
                      </div>
                  </div>
                  <!--// end row -->

              <h2>Poznejte nÃ¡s</h2>
              <p>Jsme tÃ½m pohodovÃ½ch profesionÃ¡lÅ¯.</p>
              <!-- Masonry Grid -->
              <h3>InstruktoÅ™i:</h3>
              <div class="masonry-grid row">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                  <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-2 md-margin-b-30">
                      <!-- Work -->
                      <div class="work work-popup-trigger">
                          <div class="work-overlay thumbnail">
                              <img class="img-responsive" src="img/instr/andy.jpg" alt="Andy">
                              <div class="caption">
                                <p class="text-center"><strong>Andy</strong></p>
                              </div>
                          </div>
                          <div class="work-popup-overlay">
                              <div class="work-popup-content">
                                  <a href="javascript:void(0);" class="work-popup-close">SkrÃ½t</a>
                                  <div class="margin-b-30">
                                      <h3 class="margin-b-5">Andy</h3>
                                      <!-- <span>Clean &amp; Minimalistic Design</span> -->
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                          <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Styl: </strong>smÄ›s vÅ¡ech technik, trochu ze vÅ¡eho (ale Å¾Ã¡dnÃ© sprinty), aby to bylo pestrÃ©</p>
                                            <p class="margin-b-5"><strong>Hudba: </strong>pop, taneÄ�nÃ­, rock... cokoli, co mÃ¡ poÅ™Ã¡dnÃ½ rytmus na Å¡lapÃ¡nÃ­ a co se dÃ¡ poslouchat</p>
                                            <p class="margin-b-5"><strong>ProÄ� SPINNING&reg;?</strong> <blockquote class="blockquote-reverse">BavÃ­ mÄ› kontakt s lidmi, bavÃ­ mÄ› hudba, bavÃ­ mÄ› ten pohyb. Pro mÄ› to mÃ¡ samÃ© klady a Å¾Ã¡dnÃ© zÃ¡pory.</blockquote>
                                            </p>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="margin-t-10 sm-margin-t-0">
                                              <img class="img-responsive" src="img/instr/andy.jpg" alt="Andy">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Work -->
                  </div>
                  <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-2 md-margin-b-30">
                      <!-- Work -->
                      <div class="work work-popup-trigger">
                          <div class="work-overlay thumbnail">
                              <img class="img-responsive" src="img/instr/jaja.jpg" alt="JÃ¡ja">
                              <div class="caption">
                                <p class="text-center"><strong>JÃ¡ja</strong></p>
                              </div>
                          </div>
                          <div class="work-popup-overlay">
                              <div class="work-popup-content">
                                  <a href="javascript:void(0);" class="work-popup-close">SkrÃ½t</a>
                                  <div class="margin-b-30">
                                      <h3 class="margin-b-5">JÃ¡ja</h3>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                          <p class="margin-b-5"><strong>Styl: </strong>kopce, skoky v rovince i v kopci, running</p>
                                          <p class="margin-b-5"><strong>Hudba: </strong>to, co mÃ¡ rytmus - a co potÄ›Å¡Ã­ ostatnÃ­... dÃ¡ se Å™Ã­ct, Å¾e vÅ¡echno</p>
                                          <p class="margin-b-5"><strong>ProÄ� SPINNING&reg;?</strong> <blockquote class="blockquote-reverse">OdÅ™Ã­kanÃ©ho chleba nejvÄ›tÅ¡Ã­ krajÃ­c - takÅ¾e kdo si myslÃ­, Å¾e po operaci meniskÅ¯ je vÅ¡e ztraceno - tak opak je pravdou - jsem zÃ¡Å™nÃ½m pÅ™Ã­kladem - a moc mÄ› bavÃ­ jezdit na hudbu a jeÅ¡tÄ› se seznÃ¡mit s novÃ½mi lidmi!</blockquote>
                                          </p>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="margin-t-10 sm-margin-t-0">
                                              <img class="img-responsive" src="img/instr/jaja.jpg" alt="JÃ¡ja">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Work -->
                  </div>
                  <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-2 md-margin-b-30">
                      <!-- Work -->
                      <div class="work work-popup-trigger">
                          <div class="work-overlay thumbnail">
                              <img class="img-responsive" src="img/instr/hengis.jpg" alt="Hengis">
                              <div class="caption">
                                <p class="text-center"><strong>Hengis</strong></p>
                              </div>
                          </div>
                          <div class="work-popup-overlay">
                              <div class="work-popup-content">
                                  <a href="javascript:void(0);" class="work-popup-close">SkrÃ½t</a>
                                  <div class="margin-b-30">
                                      <h3 class="margin-b-5">Hengis</h3>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                          <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Styl: </strong>stÅ™Ã­dÃ¡nÃ­ intervalovÃ© a vytrvalostnÃ­ hodiny, obÄ�as hodina vyloÅ¾enÄ› silovÃ¡</p>
                                            <p class="margin-b-5"><strong>Hudba: </strong>vÅ¡echno, jak Ä�eskÃ¡, tak svÄ›tovÃ¡</p>
                                            <p class="margin-b-5"><strong>ProÄ� SPINNING&reg;?</strong> <blockquote class="blockquote-reverse">Miluji jÃ­zdu na horskÃ©m kole a jako zimnÃ­ pÅ™Ã­prava je spinning to nejlepÅ¡Ã­.</blockquote>
                                            </p>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="margin-t-10 sm-margin-t-0">
                                              <img class="img-responsive" src="img/instr/hengis.jpg" alt="Hengis">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Work -->
                  </div>
                  <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-2 md-margin-b-30">
                      <!-- Work -->
                      <div class="work work-popup-trigger">
                          <div class="work-overlay thumbnail">
                              <img class="img-responsive" src="img/instr/misa.jpg" alt="MÃ­Å¡a">
                              <div class="caption">
                                <p class="text-center"><strong>MÃ­Å¡a</strong></p>
                              </div>
                          </div>
                          <div class="work-popup-overlay">
                              <div class="work-popup-content">
                                  <a href="javascript:void(0);" class="work-popup-close">SkrÃ½t</a>
                                  <div class="margin-b-30">
                                      <h3 class="margin-b-5">MÃ­Å¡a</h3>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                          <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Styl: </strong>MÃ½m nejoblÃ­benÄ›jÅ¡Ã­m prvkem ve spinning lekcÃ­ch je running a skoky v rovince. PÅ™estoÅ¾e tyto styly mÃ¡m nejradÄ›ji, do svÃ½ch hodin se snaÅ¾Ã­m zahrnout vÅ¡e, co jde, aby tÄ›ch Å¡edesÃ¡t minut nikoho nenudilo a vÅ¡ichni si vyzkouÅ¡eli, zaÄ� je toho v tomto sportu loket.</p>
                                            <p class="margin-b-5"><strong>Hudba: </strong>SnaÅ¾Ã­m se jezdit na vÅ¡echno moÅ¾nÃ©, od Heleny VondrÃ¡Ä�kovÃ©, pÅ™es irskou klasickou hudbu aÅ¾ po Rolling Stones nebo HorkÃ½Å¾e SlÃ­Å¾e.</p>
                                            <p class="margin-b-5"><strong>ProÄ� SPINNING&reg;?</strong> <blockquote class="blockquote-reverse">Je to jedinÃ½ sport, kterÃ½ mi v tak krÃ¡tkÃ© Ä�asovÃ© dobÄ› dÃ¡ tolik do tÄ›la. A protoÅ¾e z Jablonce je to na kole vÅ¡ude do kopce.</blockquote>
                                            </p>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="margin-t-10 sm-margin-t-0">
                                              <img class="img-responsive" src="img/instr/misa.jpg" alt="MÃ­Å¡a">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Work -->
                  </div>
                  <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-2 md-margin-b-30">
                      <!-- Work -->
                      <div class="work work-popup-trigger">
                          <div class="work-overlay thumbnail">
                              <img class="img-responsive" src="img/instr/martin.jpg" alt="Martin">
                              <div class="caption">
                                <p class="text-center"><strong>Martin</strong></p>
                              </div>
                          </div>
                          <div class="work-popup-overlay">
                              <div class="work-popup-content">
                                  <a href="javascript:void(0);" class="work-popup-close">SkrÃ½t</a>
                                  <div class="margin-b-30">
                                      <h3 class="margin-b-5">Martin</h3>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                          <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Styl: </strong>vesmÄ›s silovÃ© hodiny, running, jak Ä�as bÄ›Å¾Ã­, pÅ™ijdou skoky...</p>
                                            <p class="margin-b-5"><strong>Hudba: </strong>HodnÄ› Ä�eskÃ© i slovenskÃ© muziky, obÄ�as hodnÄ› "od podlahy", je-li to jen trochu moÅ¾nÃ©, splnÃ­m jakÃ©koli hudebnÃ­ pÅ™Ã¡nÃ­. S vyloÅ¾enÄ› trampskou muzikou a dechovkou naklÃ¡dejte, prosÃ­m, opatrnÄ›.</p>
                                            <p class="margin-b-5"><strong>ProÄ� SPINNING&reg;?</strong> <blockquote class="blockquote-reverse">PÅ™ed 15ti lety jsem na svÃ© prvnÃ­ hodinÄ› mÃ¡lem umÅ™el. A najednou. ÃšplnÄ› nejvÃ­c nejvÃ­c mne bavÃ­, kdyÅ¾ se ostatnÃ­ dobÅ™e bavÃ­. SPINNING&reg; pro mne pÅ™edstavuje skvÄ›lou prÅ¯pravu pro Å™adu dalÅ¡Ã­ch sportÅ¯. Mohu VÃ¡m slÃ­bit, Å¾e nic neoÅ¡idÃ­m, kdo bude po lekci zpocenÃ½ jeÅ¡tÄ› vÃ­c neÅ¾ jÃ¡, dostane tatranku!</blockquote>
                                            </p>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="margin-t-10 sm-margin-t-0">
                                              <img class="img-responsive" src="img/instr/martin.jpg" alt="Martin">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End Work -->
                  </div>
              </div>
              <!-- End Masonry Grid -->
            </div>
        <!-- End About -->

        <!-- Pricing -->
        <div id="pricing">
            <div class="bg-color-sky-light">
                <div class="content-lg container">
                  <div class="row margin-b-20">
                      <div class="col-sm-12">
                          <h2>CenÃ­k naÅ¡ich sluÅ¾eb</h2>
                      </div>
                  </div>
                    <div class="row row-space-1">
                        <div class="col-sm-4 sm-margin-b-2">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <h3>1. hodina SPINNING&reg; ZDARMA<sup>*</sup></h3>
                                    <p>ZjistÃ­te, zda-li SPINNING<sup>&reg;</sup> je prÃ¡vÄ› pro VÃ¡s.</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">VedenÃ­ zkuÅ¡enÃ½m instruktorem</li>
                                    <li class="pricing-list-item">SkvÄ›lÃ© pro zaÄ�Ã¡teÄ�nÃ­ky</li>
                                    <li class="pricing-list-item">NauÄ�enÃ­ zÃ¡kladnÃ­ch znalostÃ­</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">ZaÄ�Ã­t nynÃ­</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-2">
                            <!-- Pricing -->
                            <div class="pricing pricing-active">
                                <div class="margin-b-30">
                                    <h3>BÄ›Å¾nÃ¡ hodina SPINNING&reg;<span>za</span> 80 <span>,- KÄ� </span></h3>
                                    <p>BÄ›Å¾nÃ© kondiÄ�nÃ­ hodiny.</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">IdeÃ¡lnÃ­ pro bÄ›Å¾nÃ© cviÄ�enÃ­</li>
                                    <!-- <li class="pricing-list-item">Full Options</li>
                                    <li class="pricing-list-item">Bi-anual Report</li> -->
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Koupit nynÃ­</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                        <div class="col-sm-4">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
                                    <h3>90-minutovka SPINNING &reg;<span>za</span> 100 <span>,- KÄ� </span></h3>
                                    <p>Tato nabÃ­dka je zejmÃ©na pro opravdovÃ© nadÅ¡ence  SPINNING<sup>&reg;</sup>.</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">ZvÃ½hodnÄ›nÃ¡ cena</li>
                                    <li class="pricing-list-item">CviÄ�enÃ­ pro zkuÅ¡enÃ©</li>
                                </ul>
                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Koupit nynÃ­</a>
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <p>*Chcete-li jet prvnÃ­ hodinu zdarma a jeÅ¡tÄ› nemÃ¡te penÃ­ze vloÅ¾enÃ© v elektronickÃ© penÄ›Å¾ence, kontaktujte nÃ¡s a rÃ¡di VÃ¡m kolo rezervujeme.</p>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Pricing -->

        <!-- Rules -->
        <div id="rules">
          <div class="section-seperator">
            <div class="content-lg container">
              <div class="row">
                <h1>ProvoznÃ­ Å™Ã¡d <span><a class="icon-doc" href="provozni_rad.pdf"></a></span></h1>
                  <ol>
                    <li>VÅ¡ichni klienti jezdÃ­ hodiny SPINNING&reg; na vlastnÃ­ nebezpeÄ�Ã­.</li>
                    <li>Provozovatel si vyhrazuje prÃ¡vo na zmÄ›ny v rezervaÄ�nÃ­m systÃ©mu / zmÄ›na instruktora z technickÃ½ch dÅ¯vodÅ¯ - napÅ™. nemoc stÃ¡vajÃ­cÃ­ho instruktora. Provozovatel bude vÅ¾dy pÅ™ihlÃ¡Å¡enÃ© klienty informovat o zmÄ›nÄ› co nejdÅ™Ã­ve. V pÅ™Ã­padÄ›, Å¾e se dojde k zmÄ›nÄ› 12 hodin pÅ™ed startem hodiny, nemÃ¡ klient nÃ¡rok na zruÅ¡enÃ­ rezervace ani na vrÃ¡cenÃ­ vstupnÃ©ho.</li>
                    <li>Provozovatel se zavazuje vÅ¾dy zajistit okamÅ¾itou nÃ¡hradu instruktora.</li>                      <li>VÅ¡echny lekce SPINNING&reg; programu jsou vedeny Å™Ã¡dnÄ› vyÅ¡kolenÃ½mi instruktory. Klient je povinen se Å™Ã­dit instrukcemi lektora. V pÅ™Ã­padÄ›, Å¾e klient opakovanÄ› nebude respektovat naÅ™Ã­zenÃ­ instruktora, mÅ¯Å¾e bÃ½t z lekce vykÃ¡zÃ¡n, bez nÃ¡roku na vrÃ¡cenÃ­ vstupnÃ©ho.</li>
                    <li>Pokud mÃ¡ klient jakÃ©koliv zdravotnÃ­ omezenÃ­, kterÃ© mu nedovoluje v plnÃ© mÃ­Å™e absolvovat lekci v rÃ¡mci SPINNING&reg; programu, je povinen toto omezenÃ­ instruktorovi oznÃ¡mit pÅ™ed kaÅ¾dou lekcÃ­.</li>
                    <li>Pokud mÃ¡ klient svÅ¯j trÃ©ninkovÃ½ plÃ¡n (napÅ™. individuÃ¡lnÃ­ jÃ­zda dle mÄ›Å™iÄ�e tepovÃ© frekvence) a ten nenÃ­ v rozporu se zÃ¡sadami SPINNING&reg; programu, je povinen tuto skuteÄ�nost pÅ™ed kaÅ¾dou lekcÃ­ oznÃ¡mit instruktorovi. Instruktor je povinen respektovat poÅ¾adavek klienta na tento individuÃ¡lnÃ­ program.</li>
                    <li>NezletilÃ½m osobÃ¡m mladÅ¡Ã­m 15-ti let je povolen vstup jen v doprovodu dospÄ›lÃ© osoby. PÅ™Ã­tomnost takovÃ© osoby je nutno pÅ™edem nahlÃ¡sit instruktorovi.</li>
                    <li>Klienti jsou povinni udrÅ¾ovat poÅ™Ã¡dek a Ä�istotu. Po kaÅ¾dÃ© lekci musÃ­ oÄ�istit svÃ© kolo za pouÅ¾itÃ­ hygienickÃ½ch prostÅ™edkÅ¯, kterÃ© jsou v tÄ›locviÄ�nÄ› k tomuto ÃºÄ�elu volnÄ› dostupnÃ©.</li>
                    <li>Klient nesmÃ­, vyjma zÃ¡kladnÃ­ho nastavenÃ­, manipulovat s kolem. KaÅ¾dou zÃ¡vadu Ä�i nedostatek na kole nahlÃ¡sÃ­ instruktorovi a ten sjednÃ¡ nÃ¡pravu.</li>
                    <li>Vstup do tÄ›locviÄ�ny je povolen jen ve cviÄ�ebnÃ­m Ãºboru a Ä�istÃ© sportovnÃ­ obuvi. V pÅ™Ã­padÄ› Å¡pinavÃ© obuvi mÅ¯Å¾ete bÃ½t vykÃ¡zÃ¡ni z lekce bez nÃ¡roku na vrÃ¡cenÃ­ vstupnÃ©ho. KaÅ¾dÃ½ klient by mÄ›l mÃ­t s sebou Ä�istÃ½ ruÄ�nÃ­k a dostateÄ�nou zÃ¡sobu tekutin.</li>
                    <li>PÅ™ed zaÄ�Ã¡tkem hodiny je klient povinen nahlÃ¡sit instruktorovi Ä�i obsluze recepce. V pÅ™Ã­padÄ›, Å¾e nenÃ­ pÅ™edem nahlÃ¡Å¡en na hodinÄ› pÅ™es svoji permanentku (resp. pÅ™es rezervaÄ�nÃ­ systÃ©m), uhradÃ­ vstupnÃ© dle aktuÃ¡lnÃ­ho cenÃ­ku instruktorovi Ä�i obsluze recepce. Pokud vlastnÃ­ permanentku, vyÅ™Ã­dÃ­ veÅ¡kerÃ© nutnÃ© formality s tÃ­m spojenÃ© pÅ™ed kaÅ¾dou lekcÃ­ s instruktorem Ä�i s obsluhou recepce.</li>
                    <li>KaÅ¾dou plÃ¡novanou lekci je nutnÃ© si pÅ™edem rezervovat. Rezervaci mÃ­sta na lekci je moÅ¾no provÃ©st nejdÅ™Ã­ve dva tÃ½dny pÅ™ed konÃ¡nÃ­m lekce. Klient provede rezervaci on-line pÅ™es rezervaÄ�nÃ­ systÃ©m na adrese www.ajsports.cz.</li>
                    <li>Pokud tak neuÄ�inÃ­, mÅ¯Å¾e se stÃ¡t, Å¾e lekce bude jiÅ¾ plnÄ› obsazenÃ¡. Rezervaci je moÅ¾nÃ© zruÅ¡it nejdÃ©le do 12 hodin pÅ™ed danou lekcÃ­.</li>
                    <li>Oznamte instruktorovi, Å¾e jste novÃ¡Ä�ky v tomto sportu a on se VÃ¡m bude nÃ¡leÅ¾itÄ› vÄ›novat. Nebojte se na cokoliv zeptat, VÃ¡Å¡ instruktor je tu pro VÃ¡s. PrvnÃ­ lekci zamÄ›Å™te pÅ™edevÅ¡Ã­m na osvojenÃ­ techniky a nesnaÅ¾te se lÃ¡mat sportovnÃ­ rekordy.</li>
                    <li>V Å¡atnÃ¡ch se odklÃ¡dÃ¡ pouze obleÄ�enÃ­ a boty. VeÅ¡kerÃ© cennosti si mÅ¯Å¾ete uschovat u instruktora, u obsluhy recepce, nebo si je vzÃ­t s sebou do tÄ›locviÄ�ny.</li>
                    <li>Klub si vyhrazuje prÃ¡vo na pozdÄ›jÅ¡Ã­ zmÄ›nu vÃ½Å¡e uvedenÃ½ch pravidel pro poskytovÃ¡nÃ­ rezervace na lekce SPINNING&reg;.</li>
                  </ol>
                  <p>DÄ›kujeme VÃ¡m, Å¾e akceptujete naÅ¡e poÅ¾adavky, kterÃ© jsou bez vÃ½jimky platnÃ© pro vÅ¡echny nÃ¡vÅ¡tÄ›vnÃ­ky a vÅ¡echny klubu, a jsou tu pro VaÅ¡e bezpeÄ�Ã­ a pohodlÃ­.</p>
                </div>
              </div>
            </div>
          </div>
<!-- End Rules -->


        <!-- Contact -->
        <div id="contact">
            <!-- Contact List -->
            <div class="section-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <!-- Contact List -->
                        <div class="col-sm-12 sm-margin-b-50">
                            <h1>Kontakty<span class="text-uppercase margin-l-20">AJ's Sports Club SPINNING&reg;</span></h1>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> 720 400 495</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> jhengalova@gmail.com</li>
                                <li><i class="margin-r-10 color-base icon-map"></i> BÅ™ezovÃ¡ 31a, Å umava, Jablonec nad Nisou (vedle Benziny)</li>
                            </ul>
                        </div>
                        <!-- End Contact List -->

                        <!-- Contact List -->
                        <!-- <div class="col-sm-4 sm-margin-b-50">
                            <h3><a href="http://ft-seo.ch/">Malta</a> <span class="text-uppercase margin-l-20">Development</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> +356 7965 1257</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> developmemt@flameonepage.com</li>
                            </ul>
                        </div> -->
                        <!-- End Contact List -->

                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Contact List -->

            <!-- Google Map -->
            <div class="map height-300">
        			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2525.322021800934!2d15.183091!3d50.732516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470ecb27a45d90f7%3A0xf270e4f90f497b23!2sB%C5%99ezov%C3%A1+2980%2F31%2C+466+02+Jablonec+nad+Nisou%2C+%C4%8Cesko!5e0!3m2!1scs!2sus!4v1500729830326" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        		</div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#body">DomÅ¯</a></li>
                                <li class="footer-list-item"><a href="#about">O nÃ¡s</a></li>
                                <li class="footer-list-item"><a href="#rules">ProvoznÃ­ Å™Ã¡d</a></li>
                                <li class="footer-list-item"><a href="#contact">Kontakt</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Twitter</a></li>
                                <li class="footer-list-item"><a href="#">Facebook</a></li>
                                <li class="footer-list-item"><a href="#">Instagram</a></li>
                                <li class="footer-list-item"><a href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">OdbÄ›r novinek</a></li>
                                <li class="footer-list-item"><a href="#">ZÃ¡sady ochrany osobnÃ­ch ÃºdajÅ¯</a></li>
                                <li class="footer-list-item"><a href="#">ObchodnÃ­ pravidla</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo-orig.png" alt="flameonepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="#">FlameOnePage</a> Theme Powered by: <a class="fweight-700" href="http://ft-seo.ch/">FairTech Studio</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
