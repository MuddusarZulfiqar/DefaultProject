<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="src/js/bootstrap-select.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha512-Fppbdpv9QhevzDE+UHmdxL4HoW8HantO+rC8oQB2hCofV+dWV2hePnP5SgiWR1Y1vbJeYONZfzQc5iII6sID2Q==" crossorigin="anonymous" />
    <script src="src/js/slick.js"></script>
    <script src="src/js/jquery.mCustomScrollbar.js"></script>
    <script src="src/js/jquery.mousewheel.min.js"></script>
    <script src="src/js/jquery.lazyloadxt.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="src/js/custom.js"></script> 


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="src/css/slick.css" rel="stylesheet">
    <link href="src/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="src/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="src/css/main.css" rel="stylesheet"></link>

    <title>Aqarat</title>
</head>
<body <?php if(isset($ishome)){ echo "class='front-page'";}?> >
    <div class="modal custom-modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <span class="popup-cross-icon" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-times"></i>
                </span>
                <div class="modal-body">
                    Modal contents
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper mp-pusher">
        <header class="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-4">
                        <div class="logo">
                            <a href="#"><img src="src/images/logo.svg" alt=""></a>
                            <div class="logo-title">
                                <p class="arabic">شــركــة دعـــايــتي  <span>للــدعــــايـة والإعـــلان</span></p>
                                <p class="eng">Da3aity <span>Advertising</span></p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-7 col-md-8 header-misc">
                        <div class="header-contact-info">
                            <ul>
                                <li >
                                    <a href="mailto:info@da3aity.com">
                                        <svg class="mail" xmlns="http://www.w3.org/2000/svg" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="21px">
                                            <path fill-rule="evenodd"  fill="rgb(137, 32, 26)" d="M27.363,-0.000 L2.637,-0.000 C1.180,-0.000 -0.000,1.208 -0.000,2.699 L-0.000,18.300 C-0.000,19.791 1.180,21.000 2.637,21.000 L27.363,21.000 C28.819,21.000 30.000,19.791 30.000,18.300 L30.000,2.699 C30.000,1.208 28.819,-0.000 27.363,-0.000 ZM25.253,15.443 C24.884,15.765 24.329,15.719 24.014,15.340 L18.942,9.233 L15.435,11.281 C15.166,11.439 14.834,11.439 14.564,11.281 L11.058,9.233 L5.985,15.340 C5.671,15.719 5.116,15.765 4.746,15.443 C4.377,15.121 4.332,14.553 4.646,14.174 L9.505,8.325 L5.189,5.804 C4.768,5.558 4.621,5.008 4.861,4.577 C5.102,4.145 5.639,3.995 6.060,4.241 C6.418,4.450 14.597,9.228 15.000,9.463 C15.403,9.228 23.581,4.450 23.939,4.241 C24.361,3.994 24.898,4.145 25.138,4.577 C25.379,5.008 25.232,5.558 24.810,5.804 L20.495,8.325 L25.353,14.174 C25.668,14.553 25.623,15.121 25.253,15.443 Z"/>
                                        </svg>
                                        info@da3aity.com
                                    </a>
                                </li>
                                <li >
                                    <a href="tel:+965-1841111">
                                        <svg class="tel" fil="currentColor" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="90.3365mm" height="90.3263mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 5731.44 5730.79" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                            <g>
                                                <metadata id="CorelCorpID_0Corel-Layer"/>
                                                <g >
                                                    <path class="fil0" d="M1282.05 25.87c-141.22,38.94 -893.99,408.84 -1079.24,499.37 -227.62,111.26 -233.8,113.9 -162.81,533.88 202.68,1199.12 764.78,2041.91 1456.79,2843.5 616.21,713.8 1705.38,1405.03 2649.18,1670.63 204.76,57.63 423.14,106.67 645.64,139.19 353.47,51.65 327.4,3.93 462.67,-268.58 84.33,-169.88 172.71,-363.13 249.86,-533.87 300.96,-666.01 434.23,-492.54 -730.61,-1218.35 -472.01,-294.11 -304.71,-262.89 -891.61,289.67 -251.73,236.99 -917.28,-156.42 -1121.66,-290.64 -84.05,-55.19 -133.97,-99.86 -215.11,-165.26 -357.35,-288 -659.82,-714.66 -803.61,-1165.47 -103.37,-324.1 -113.66,-382.4 79.48,-573.65 511.31,-506.32 509.49,-385.75 152.81,-935.43 -108.08,-166.57 -197.49,-308.54 -308.23,-474.5 -83.42,-125 -187.74,-404.48 -383.53,-350.48z"/>
                                                    <path class="fil0" d="M2801.66 25.35c-204.62,84.24 -186.74,361.32 105.1,377.05 454.68,24.5 812.51,112.64 1196.8,333.62 136.76,78.65 375.1,251.76 449.43,334.06 169.56,187.75 174.37,160.34 348.93,411.96 488.11,703.57 401.6,1335.41 445.88,1457.43 92.39,254.6 682.5,243.95 189.33,-1085.25 -198.63,-535.33 -565.95,-997.56 -1001.11,-1304.49 -146.51,-103.34 -297.8,-195.81 -482.39,-279.41 -221.61,-100.36 -996.51,-350.14 -1251.97,-244.98z"/>
                                                    <path class="fil0" d="M2817.47 1006.12c-137.32,41.15 -204.92,192.91 -103.96,313.42 142.74,170.39 505.12,-74.1 1127.06,440.08 294.5,243.48 474.34,623.48 501.56,1045.97 10.16,157.73 63.8,300.46 252.36,253.74 358.14,-88.73 59.14,-1435.85 -930.23,-1883.66 -171.08,-77.43 -638.31,-232.03 -846.79,-169.56z"/>
                                                </g>
                                            </g>
                                        </svg>
                                        +965-1841111
                                    </a>
                                </li>
                                <li class="lang-selector">
                                    <a href="#">العربية</a>
                                </li>
                                <!-- show on mobile -->

                                <!-- Note: If user is not logged in remove class "dropdown" on li -->
                                
                                <li class="login d-none show-on-md dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#89201a" width="21" height="21" viewBox="0 0 21 21">
                                          <path id="Forma_1" data-name="Forma 1" class="cls-1" d="M1291.39,132.359h-2.9a0.854,0.854,0,0,1-.66-0.312,0.878,0.878,0,0,1-.17-0.718,9.058,9.058,0,0,1,8.63-7.177c0.07,0,.14,0,0.21,0s0.14,0,.21,0a8.917,8.917,0,0,1,2.96.57,0.821,0.821,0,1,0,.58-1.536c-0.14-.051-0.27-0.1-0.41-0.144a5.578,5.578,0,1,0-6.68,0,10.7,10.7,0,0,0-7.11,7.949,2.5,2.5,0,0,0,2.44,3.006h2.9A0.821,0.821,0,0,0,1291.39,132.359Zm1.17-13.781a3.94,3.94,0,1,1,4.13,3.932h-0.38A3.947,3.947,0,0,1,1292.56,118.578Zm13.81,8.556a2.207,2.207,0,0,0-2.02-1.3h-2.56a2.167,2.167,0,0,0-2.05,1.386c-0.04.113-.1,0.254-0.15,0.418h-5.37a0.82,0.82,0,0,0-.59.249l-1.41,1.452a0.822,0.822,0,0,0,0,1.146l1.44,1.461a0.8,0.8,0,0,0,.58.245h2.67a0.821,0.821,0,0,0,0-1.641h-2.32l-0.63-.644,0.6-.627h5.64a0.823,0.823,0,0,0,.8-0.626,7.572,7.572,0,0,1,.27-0.844,0.538,0.538,0,0,1,.52-0.335h2.56a0.561,0.561,0,0,1,.52.325,5.266,5.266,0,0,1,.49,2.091,5.5,5.5,0,0,1-.48,2.129,0.563,0.563,0,0,1-.52.336h-2.59a0.594,0.594,0,0,1-.53-0.363,5.588,5.588,0,0,1-.25-0.812,0.822,0.822,0,0,0-1.6.382,7.448,7.448,0,0,0,.34,1.055,2.2,2.2,0,0,0,2.04,1.379h2.59a2.2,2.2,0,0,0,2.02-1.321,7.033,7.033,0,0,0,.62-2.788A6.814,6.814,0,0,0,1306.37,127.134Zm-2.69,1.944a0.82,0.82,0,1,1-.82.82A0.822,0.822,0,0,1,1303.68,129.078Z" transform="translate(-1286 -113)"/>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu animate slideIn">
                                        <ul>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- show on mobile -->
                                <li class="d-none show-on-md">
                                    <div class="menu-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <nav class="navbar">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li class="d-none"><a href="#">Signup As Vendor</a></li>
                                <!-- hide on mobile -->
                                <li class="d-none hide-on-md"><a href="#" class="btn btn-primary">Login</a></li>
                                <!-- if user login -->
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                                    <div class="dropdown-menu animate slideIn">
                                        <ul>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- if user login -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            
        </header>
    

    <!-- cd-cart -->
<div class="cd-cart cd-cart--empty js-cd-cart">
    <a href="#0" class="cd-cart__trigger text-replace">
        <svg fill="#ffffff" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 83.82 75.93"><title>cart-screen</title><g class="cls-2"><path d="M36.41,27.22,31.24,15.35l-.24.11,5.12,11.76ZM53.24,15.46,53,15.35,47.83,27.22h.29ZM68.79,27.22,63.62,15.35l-.24.11L68.5,27.22ZM79.67,3.53H61.21V4.8A1.51,1.51,0,0,1,59.7,6.3V1.39a1.39,1.39,0,0,0-2.78,0V3.53H28.83V4.8a1.5,1.5,0,0,1-1.5,1.5V1.39a1.39,1.39,0,0,0-2.78,0V3.53H4.15A4.14,4.14,0,0,0,0,7.68V57.91a4.15,4.15,0,0,0,4.15,4.15H32.42V75.93h19V63.56H45a1.51,1.51,0,0,1-1.51-1.5H79.67a4.16,4.16,0,0,0,4.15-4.15V7.68a4.15,4.15,0,0,0-4.15-4.15m0,54.38H4.15V7.68h20.4V9h-2l-1.17,1.44A1.77,1.77,0,0,0,21,11.88l.41,2.17a.52.52,0,0,0,.51.43H30a.52.52,0,0,0,.51-.43l.41-2.17a1.77,1.77,0,0,0-.36-1.42L29.37,9h-2V7.68H56.92V9h-2l-1.16,1.44a1.7,1.7,0,0,0-.36,1.42l.4,2.17a.53.53,0,0,0,.52.43h8.06a.53.53,0,0,0,.52-.43l.4-2.17a1.73,1.73,0,0,0-.35-1.42L61.74,9h-2V7.68h20Zm-59-42.56L15.46,27.22h.29l5.12-11.76Z" transform="translate(0 0)"/></g></svg>
        <ul class="cd-cart__count"> <!-- cart items count -->
            <li>0</li>
            <li>0</li>
        </ul> <!-- .cd-cart__count -->
    </a>

    <div class="cd-cart__content">
        <div class="cd-cart__layout">
            <header class="cd-cart__header">
                <h4>Cart</h4>
                <span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
            </header>
            
            <div class="cd-cart__body">
                <ul>
                    <!-- products added to the cart will be inserted here using JavaScript -->
                </ul>
            </div>

            <footer class="cd-cart__footer">
                <a href="#0" class="cd-cart__checkout">
                <em>Checkout<span></span>
                    
                </em>
        </a>
            </footer>
        </div>
    </div> <!-- .cd-cart__content -->
</div> 
<!-- cd-cart -->