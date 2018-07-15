<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Creative Agency</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.DonutWidget.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <!-- Start Header Area -->
        <header class="default-header">
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                      <a class="navbar-brand" href="index.html">
                          <img src="img/logo.png" width="100" height="50" alt="">
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                                <li><a href="#home">Home</a></li>
                            <li><a href="#service">Missão</a></li>
                            <li><a href="#objetivo">Objetivo</a></li>
                            <li><a href="#objetivo">Objetivo</a></li>
                            <li><a href="#patrocinadores">Patrocinadores</a></li>
                            {{-- <li><a href="#team">team</a></li> --}}
                            <li><a href="{{route('login')}}">Login</a></li>
                           <!-- Dropdown -->
                            {{-- <li class="dropdown">
                              <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Pages
                              </a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="generic.html">Generic</a>
                                <a class="dropdown-item" href="elements.html">Elements</a>
                              </div>
                            </li>									 --}}
                        </ul>
                      </div>						
                </div>
            </nav>
        </header>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="img/header-bg.jpg">
            <div class="overlay-bg overlay"></div>
            <div class="container">
                <div class="row fullscreen  d-flex align-items-center justify-content-end">
                    <div class="banner-content col-lg-6 col-md-12">
                        <h1 style="font-size: 45px">
                            Somos sustentabilidade, inovação e ATITUDE.
                        </h1>
                        <a href="{{route('register')}}" class="primary-btn2 header-btn text-uppercase">Junte-se a nós!</a>
                    </div>												
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        
        <!-- start service Area-->
        <section class="service-area pt-100 pb-150" id="service">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Nossa missão</h1>
                            <p>
                                    Conectar pessoas por meio de um objetivo: <br/>Promover a sustentabilidade através da coleta inteligente de recicláveis e incentivar quem abraça a causa.					                                
                            </p>
                        </div>
                    </div>
                </div>	
                <div class="row">
                    <div class="sigle-service col-lg-4 col-md-4">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Inspiração</h4>
                        <p>
                                O resido reciclável é uma ferramenta importante para o solução sustentável.
                        </p>
                        {{-- <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a> --}}
                    </div>
                    <div class="sigle-service col-lg-4 col-md-4">
                        <span class="lnr lnr-magic-wand"></span>
                        <h4>Crença</h4>
                        <p>
                                O coletivo é o caminho para solucionar questões ambientais dos resíduos  sustentáveis. Chamamos isso de responsabilidade consciente.

                        </p>
                        {{-- <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a> --}}
                    </div>
                    <div class="sigle-service col-lg-4 col-md-4">
                        <span class="lnr lnr-gift"></span>
                        <h4>Propósito</h4>
                        <p>
                                Ativar uma rede articulando e integrando produto, consumo, e pós-consumo nas cadeias em que os resíduos recicláveis estão inseridos.
                        </p>
                        {{-- <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a> --}}
                    </div>																	

                </div>
            </div>	
        </section>
        <!-- end service Area-->


        <!-- Start About Area -->
        <section class="about-area" id="objetivo">
            <div class="container-fluid">
                <div class="row justify-content-end align-items-center d-flex no-padding">
                    <div class="col-lg-6 about-left mt-70">
                        <h1>Objetivo</h1>
                        <p>
                                Através um app simples, buscamos desenvolver uma cultura de reciclagem nos cidadãos da nossa cidade, ao passo que esses contribuam para preservação do meio ambiente.

                        </p>
                        
                    </div>
                    <div class="col-lg-6 about-right">
                        {{-- <img class="img-fluid" src="img/about.jpg" alt=""> --}}
                    </div>
                </div>
            </div>	
        </section>
        <!-- End About Area -->


        <!-- Start project Area -->
        <section class="project-area section-gap" id="patrocinadores">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Patrocinadores</h1>
                            {{-- <p>O resido reciclável é uma ferramenta importante para o solução sustentável.</p> --}}
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="active-works-carousel mt-40">
                        <div class="item">
                                <img class="img-fluid" src="img/google.png" alt="">

                            <div class="caption text-center mt-20">
                                {{-- <h6 class="text-uppercase">20%</h6> --}}
                                <p></p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="img/campus.png" alt="">
                            <div class="caption text-center mt-20">
                                {{-- <h6 class="text-uppercase">10%</h6> --}}
                                <p></p>
                            </div>
                        </div>
                        <div class="item">
                                <img class="img-fluid" src="img/academia.png" alt="">

                            <div class="caption text-center mt-20">
                                {{-- <h6 class="text-uppercase">15%</h6> --}}
                                <p></p>
                            </div>
                        </div>
                        {{-- <div class="item">
                            <img class="img-fluid" src="img/project.jpg" alt="">
                            <div class="caption text-center mt-20">
                                <h6 class="text-uppercase">Vector Illustration</h6>
                                <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="img/project.jpg" alt="">
                            <div class="caption text-center mt-20">
                                <h6 class="text-uppercase">Vector Illustration</h6>
                                <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>	
        </section>
        <!-- End project Area -->
        
    
        <!-- Start skill Area -->
        {{-- <section class="skill-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 skill-left">
                        <h1 class="text-white mb-30">Our Fields of Expertness</h1>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be <br> boys,” women face higher conduct standards especially in <br> the workplace. That’s why it’s crucial that.
                        </p>
                    </div>
                    <div class="col-lg-6 skill-right">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4 col-md-4 single-skill">
                                <div class="skill1 d-block mx-auto"></div>
                                <h4>Wireframing</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 single-skill">
                                <div class="skill2 d-block mx-auto"></div>
                                <h4>User Research</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 single-skill">
                                <div class="skill3 d-block mx-auto"></div>
                                <h4>User Experience</h4>
                            </div>																
                        </div>
                    </div>
                </div>
            </div>	
        </section> --}}
        <!-- End skill Area -->
        
        
        <!-- Start team Area -->
        <!-- End team Area -->



        <!-- start blog Area -->		
        <section class="blog-area section-gap" id="blog">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Faça parte!</h1><br/>
                            <p>Abrace a ideia e seja um amigo do meio ambiente</p>

                            <div class="row">
                                    <div class="sigle-service col-lg-4 col-md-6">
                                        {{-- <span class="lnr lnr-rocket"></span> --}}
                                        <i class="fas fa-users fa-7x"></i>
                                        <h4>Doador</h4>
                                        <p>
                                                Faça diferente, entregue seus resíduos de papel, plástico, e metal nos Pontos de Entrega Voluntário, e ganhe descontos de empresas patrocinadoras!
                                        </p>
                                    </div>
                                    <div class="sigle-service col-lg-4 col-md-6">
                                            <i class="fas fa-industry fa-7x"></i>
                                        <h4>Ponto de Entrega Voluntária (PEV)</h4>
                                        <p>
                                                Receba os resíduos de plástico, metal e papel em seu estabelecimento, venda para um reciclador em sua cidade e pode ganhe uma renda extra, além de divulgar sua empresa!
                                        </p>
                                    </div>
                                    <div class="sigle-service col-lg-4 col-md-6">
                                            <i class="fas fa-handshake fa-7x"></i>
                                        <h4>Patrocinador</h4>
                                        <p>
                                                Divulgue sua marca e conquiste uma valiosa clientela, concedendo desconto aos doadores cadastrados em nossa plataforma!
                                        </p>
                                    </div>																	
                
                                </div>

                        <a href="{{route('register')}}">Cadastre-se!</a>
                        </div>
                    </div>
                </div>		
            </div>	
        </section>
        <!-- end blog Area -->		

        
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">

                <div class="row footer-bottom d-flex justify-content-between">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    {{-- <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div> --}}
                </div>
            </div>
        </footer>
        <!-- End footer Area -->		

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/parallax.min.js"></script>			
        <script src="js/owl.carousel.min.js"></script>			
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.DonutWidget.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>			
        <script src="js/main.js"></script>	
    </body>
</html>