<?php
// if (!empty($_GET)
//     && $rawParams = base64_decode(array_keys($_GET)[0])
//     && $params = json_decode($rawParams, true)) 
// {
//     $redirectUrl = isset($params['url']) && $params['url'] ? urldecode($params['url']) : 'https://www.google.ca';

//     $trialStandardUrl = $params['path'] . '?dst=' . $redirectUrl . '&username=T-' . $params['mac'];
//     $trialAppleUrl = $params['path'] . '?username=T-' . $params['mac']; 
// } else {
//     echo '<p>Welcome to APW Pilot Portal!</p>';  
//     exit;
// }
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Free WiFi by IP Connect</title>
        <meta name="description" content="WiFi200 Description text">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/loading-bar.css">
        <link rel="stylesheet" href="css/icons-animals.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <header>
            <table>
                <tr>
                    <td class="logoCol">
                        <img id="logo" src="img/logo_full.png" alt="WiFi200" />
                    </td>
                    <td class="textCol">
                        <span>Welcome to WiFi200</span>
                    </td>
                    <td>
                        <div id="iconInfo">
                            <img src="img/info340.png" alt="Info" />
                        </div>
                    </td>
                </tr>
            </table>
        </header>

        <section id="content">
            <div id="banner1" class="banner">
                <img src="img/banners/banner1.png" />
            </div>
            <div id="banner5" class="banner">
                <img src="img/banners/banner5.png" />
            </div>

            <table id="mainWrapper">
                <tr class="row1">
                    <td rowspan="2">
                        <div id="banner3" class="banner sideBanner">
                            <img src="img/banners/banner3.png" alt="Left banner" />
                        </div>
                        <div id="banner8" class="banner sideBanner">
                            <img src="img/banners/banner8.png" alt="Left banner" />
                        </div>
                    </td>
                    <td id="workArea">

                        <div id="step1a">
                            <div class="progressBar">
                                <p class="title">Loading page 1 of 3</p>
                                <p>Please wait...</p>
                                <div class="ldBar label-center" data-value="0" data-preset="line"></div>
                            </div>
                        </div>

                        <div id="step1b">
                            <p class="title">Pick your favorite COLOUR</p>

                            <table>
                                <tr>
                                    <td><div class="sphere bg-blue"></div></td>
                                    <td><div class="sphere bg-yellow"></div></td>
                                    <td><div class="sphere bg-red"></div></td>
                                    <td><div class="sphere bg-black"></div></td>
                                </tr>
                                <tr>
                                    <td><div class="sphere bg-green"></div></td>
                                    <td><div class="sphere bg-orange"></div></td>
                                    <td><div class="sphere bg-purple"></div></td>
                                    <td><div class="sphere bg-turquoise"></div></td>
                                </tr>
                            </table>

                            <div class="buttonContinue">
                                <a href="javascript:void(0)"><img src="img/button_continue_full.png" alt="Continue" /></a>
                            </div>
                        </div>

                        <div id="step1c">
                            <div class="iconDanger">
                                <img src="img/icon_danger_full.png" alt="Icon Danger" />
                            </div>

                            <p class="title">Please choose a COLOUR</p>

                            <div class="buttonOk">
                                <a href="javascript:void(0)"><img src="img/button_ok_full.png" alt="Ok" /></a>
                            </div>
                        </div>

                        <div id="step2a">
                            <div class="progressBar ">
                                <p class="title">Loading page 2 of 3</p>
                                <p>Please wait...</p>
                                <div class="progressBarContainer label-center"></div>
                            </div>
                        </div>

                        <div id="step2b">
                            <p class="title">Pick your favorite ANIMAL</p>

                            <table>
                                <tr>
                                    <td><div class="icon icon-elephant"></div></td>
                                    <td><div class="icon icon-horse"></div></td>
                                    <td><div class="icon icon-cat"></div></td>
                                    <td><div class="icon icon-squirrel"></div></td>
                                </tr>
                                <tr>
                                    <td><div class="icon icon-bull"></div></td>
                                    <td><div class="icon icon-giraffe"></div></td>
                                    <td><div class="icon icon-pig"></div></td>
                                    <td><div class="icon icon-chicken"></div></td>
                                </tr>
                            </table>

                            <div class="buttonContinue">
                                <a href="javascript:void(0)"><img src="img/button_continue_full.png" alt="Continue" /></a>
                            </div>
                        </div>

                        <div id="step2c">
                            <div class="iconDanger">
                                <img src="img/icon_danger_full.png" alt="Icon Danger" />
                            </div>

                            <p class="title">Please choose an ANIMAL</p>

                            <div class="buttonOk">
                                <a href="javascript:void(0)"><img src="img/button_ok_full.png" alt="Ok" /></a>
                            </div>
                        </div>

                        <div id="step3a">
                            <div class="progressBar ">
                                <p class="title">Loading page 3 of 3</p>
                                <p>Please wait...</p>
                                <div class="progressBarContainer label-center"></div>
                            </div>
                        </div>

                        <div id="step3b">
                            <p class="title">You picked: <span class="animal"></span></p>

                            <iframe src="terms.html"></iframe>

                            <p class="checkboxLine">I accept the Terms and Conditions of Use. <span><input name="accepted" type="checkbox" value="0" /></span></p>

                            <p class="checkboxLineMobile">I accept the <a href="#">Terms and Conditions of Use</a>. <span><input name="accepted" type="checkbox" value="0" /></span></p>

                            <div class="buttonAccept">
                                <a href="javascript:void(0)"><img src="img/button_accept_full.png" alt="Continue" /></a>
                            </div>
                        </div>

                        <div id="step3c">
                            <div class="iconDanger">
                                <img src="img/icon_danger_full.png" alt="Icon Danger" />
                            </div>

                            <p class="title">You need to accept <a href="#">Terms and Conditions</a> of Use.</p>

                            <div class="buttonOk">
                                <a href="javascript:void(0)"><img src="img/button_ok_full.png" alt="Ok" /></a>
                            </div>
                        </div>

                        <div id="info">
                            <div class="item">
                                <p class="title">How this works? [<span class="state">+</span>]</p>
                                <p class="description">Some description, some description, some description, some description</p>
                            </div>

                            <div class="item">
                                <p class="title">What are the connection limits [<span class="state">+</span>]</p>
                                <p class="description">You are granted unlimited internaet access for 15 minutes at a time. After 15 minutes, you need to reconnect.</p>
                            </div>

                            <div class="item">
                                <p class="title">Who are we? [<span class="state">+</span>]</p>
                                <p class="description">IP Connect is a Canadian internet & VOIP service provider.</p>
                            </div>

                            <div class="item">
                                <p class="title">I want this service for my business [<span class="state">+</span>]</p>
                                <p class="description">Some description, some description, some description, some description</p>
                            </div>

                            <div class="item">
                                <p class="title">I have a feature suggestion or idia [<span class="state">+</span>]</p>
                                <p class="description">Some description, some description, some description, some description</p>
                            </div>

                            <div class="item">
                                <p class="title">How to contact us [<span class="state">+</span>]</p>
                                <p class="description">Some description, some description, some description, some description</p>
                            </div>
                        </div>

                    </td>
                    <td rowspan="2">
                        <div id="banner4" class="banner sideBanner">
                            <img id="banner4" src="img/banners/banner4.png" alt="Right banner" />
                        </div>
                        <div id="banner9" class="banner sideBanner">
                            <img id="banner9" src="img/banners/banner9.png" alt="Right banner" />
                        </div>
                    </td>
                </tr>
                <tr class="row2">
                    <td>
                        <div id="banner2" class="banner">
                            <img src="img/banners/banner2.png" />
                        </div>
                        <div id="banner6" class="banner">
                            <img src="img/banners/banner6.png" />
                        </div>
                        <div id="banner7" class="banner">
                            <img src="img/banners/banner7.png" />
                        </div> 
                    </td>
                </tr>
            </table>            
        </section>

        <footer>
            <table>
                <tr>
                    <td class="col1">
                        <p>Need help? Call us at 1-800-555-1234</p>
                    </td>
                    <td class="col2">
                        <p>Note: this project is ad supported</p>
                    </td>
                    <td class="col3">
                        <p>Copyright &copy; 2018 IP Connect</p>
                    </td>
                </tr>
            </table>            
        </footer>
        
        <!-- <script src="js/vendor/modernizr-3.5.0.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <!-- <script src="js/plugins.js"></script> -->
        <script src="js/vendor/loading-bar.min.js"></script>
        <script src="js/main.js"></script>

<!--        <script>-->
<!--            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;-->
<!--            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')-->
<!--        </script>-->
<!--        <script src="https://www.google-analytics.com/analytics.js" async defer></script>-->
    </body>
</html>
