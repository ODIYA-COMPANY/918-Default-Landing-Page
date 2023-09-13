<?php
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
    setcookie("fpx", $_GET['fpx'], time() + $period_cookie);
    setcookie("gtm", $_GET['gtm'], time() + $period_cookie);
}

$fpx = isset($_GET['fpx']) ? $_GET['fpx'] : $_COOKIE['fpx'];
$gtm = isset($_GET['gtm']) ? $_GET['gtm'] : $_COOKIE['gtm'];

?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <title>Костюм </title>

    <meta name="description" content="" />
    <link rel="shortcut icon" href="index.php" />
    <link rel="icon" href="files/favicon.png">

    <link rel="stylesheet" href="files/reset4a3c6.css" type="text/css">

    <link rel="stylesheet" href="files/styles8ca58.css" type="text/css">
    <script>
        function sclClickPixelFn() {
            const url = new URL(document.location.href).searchParams;
            const a = url.get('a'); // Your ID. Example: const a = "XX";
            if (a) {
                const availableParams = ['aff_click_id', 'sub_id1', 'sub_id2', 'sub_id3', 'sub_id4', 'sub_id5', 'aff_param1', 'aff_param2', 'aff_param3', 'aff_param4', 'aff_param5', 'idfa', 'gaid'];
                const t = new URL('https://odiya.scaletrk.com/click');
                const r = t.searchParams;
                r.append('a', a);
                r.append('o', '15');
                r.append('return', 'click_id');
                if (availableParams?.length > 0) {
                    availableParams.forEach((key) => {
                        const value = url.get(key);
                        if (value) {
                            r.append(key, value);
                        }
                    });
                }
                fetch(t.href).then((e) => e.json()).then((e) => {
                    const c = e.click_id;
                    if (c) {
                        const expiration = 864e5 * 365;
                        const o = new Date(Date.now() + expiration);
                        document.cookie = 'click_id=' + c + ';expires=' + o;
                        document.cookie = 'aff_id=' + a + ';expires=' + o;
                    }
                });
            }
        }
        sclClickPixelFn();
    </script>
    <?php if ($fpx) { ?>
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', "<?= $fpx ?>");
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $fpx ?>&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    <?php
    };
    ?>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', "<?= $gtm ?>");
        </script>
        <!-- End Google Tag Manager -->
    <?php
    };
    ?>
</head>

<body>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php
    };
    ?>
    <div class="egesxdluwyjxkx">

        <!-- header 3 -->
        <header class="idczvrudcgykq iwhffjgzrudkwx">

            <h1 class="sdduzfpqklx">НОВИНКА 2023 РОКУ</h1>


            <div class="spolfwqujqxxxau">
                <p class="izasifcdkod">ТЕПЛИЙ СТИЛЬНИЙ КОСТЮМ</p>
                <div class="jdwxtiwtyakezj"><b>40% знижка</b></div>



                <img src="files/offer1.jpg" alt="">
            </div>

            <div class="kzflgprwvxuqvl">
                <div class="dkczuzzvzwtflgo cjstjtvtxj">
                    <div class="text">Звичайна ціна:</div>
                    <div class="fscartacdutzjdg">2165грн</div>
                </div>
                <div class="dkczuzzvzwtflgo ouwrdahjedfctz">
                    <div class="text">Ціна зі знижкою:</div>
                    <div class="fscartacdutzjdg">1299грн</div>
                </div>
            </div>

            <div class="ardfsczivqxoz pjapicqhpowl">

                <div class="vwtdyjquxiksspz">

                    <img src="files/benefit1.jpg" alt="">
                    <p>МОДНИЙ ДИЗАЙН</p>
                </div>

                <div class="vwtdyjquxiksspz">
                    <img src="files/benefit2.jpg" alt="">
                    <p>ВИСОКА ЯКІСТЬ</p>
                </div>
                <div class="vwtdyjquxiksspz">

                    <img src="files/benefit3.jpg" alt="">

                    <p>ПРЕМІУМ ТКАНИНА</p>
                </div>
            </div>

            <a href="#visadftkiukojav" class="vgdfudcveezala">Замовити костюм</a>

        </header>
        <br>
        <div class="cuzpsoehlofoxr">
            <h2 class="avwktsjpdkg"><span>ЯК КОСТЮМ</span>
                ВИГЛЯДАЄ НАЖИВО!</h2>
        </div>
        <section>
            <ul class="qqopqocpveiqls">
                <video controls="true" width="100%" height="600" autoplay loop muted="">
                    <source src="files/918.mp4">
                </video>
            </ul>
        </section>
        <br>

        <section class="rktsokxoqayer">
            <h2 class="avwktsjpdkg"><span>Опис</span> костюму</h2>


            <ul class="wfsdfvsdwrkvz">
                <li><b>Тканина:</b> турецька тринитка з начісом </li>
                <li><b>Зріст моделі:</b> 171см</li>
                <li><b>Країна виробник:</b> Україна</li>
                <li><b>Принти:</b> графіт, квіти, джинс</li>
                <li><b>Розміри:</b> від 54 до 64</li>
                <li><b>Додаткові характеристики:</b> Стильний та теплий прогулянковий костюм з високоякісної турецької тринитки з начісом (середня розтяжність). Не кашлатиться. Кофта з подвійним капюшоном, в куліску якого протягнуто шнурок з основного матеріалу. Застібається на блискавку. Рукав на манжеті. Штани з високою посадкою, зручний шов. Кішені з обох сторін. Штани знизу на резинці </li>

                <li>Виміри згідно готового виробу</li>
                <li>
                    <table class="size" width="100%">
                        <tbody>


                            <tr align="center" height="35">
                                <td>Кофтинка</td>
                                <td>54-56</td>
                                <td>58-60</td>
                                <td>62-64</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват грудей</td>
                                <td>125</td>
                                <td>134</td>
                                <td>142</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват талії</td>
                                <td>123</td>
                                <td>130</td>
                                <td>137</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Довжина </td>
                                <td>77</td>
                                <td>78</td>
                                <td>79</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Рукав</td>
                                <td>61</td>
                                <td>61</td>
                                <td>61</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват рукава</td>
                                <td>44</td>
                                <td>46</td>
                                <td>48</td>
                            </tr>


                        </tbody>
                    </table>
                </li>
                <li>
                    <table class="size" width="100%">
                        <tbody>


                            <tr align="center" height="35">
                                <td>Штани</td>
                                <td>54-56</td>
                                <td>58-60</td>
                                <td>62-64</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват талії</td>
                                <td>90-122</td>
                                <td>95-130</td>
                                <td>100-138</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Обхват стегон</td>
                                <td>122</td>
                                <td>130</td>
                                <td>138</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Довжина по зовн. шву</td>
                                <td>101</td>
                                <td>102</td>
                                <td>103</td>
                            </tr>
                            <tr align="center" height="35">
                                <td>Довжина по внутр. шву</td>
                                <td>71</td>
                                <td>72</td>
                                <td>73</td>
                            </tr>




                        </tbody>
                    </table>
                </li>

                <br>
                <center>*залиште заявку і ми надамо вам пораду за розміром!</center>

            </ul>

        </section><br>
        <section class="cat" id="visadftkiukojav">
            <div class="cuzpsoehlofoxr">
                <h2 class="avwktsjpdkg"><span>Оберіть свій колір</span> костюму</h2>
            </div>
            <center>Костюм в різних ракурсах, гортайте </center>

            <br>
            <section class="cat" id="visadftkiukojav">
                <ul class="qqopqocpveiqls">
                    <li>
                        <div><img src="files/g1.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/g2.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/g3.jpg" alt=""></div>
                    </li>



                </ul>
            </section>
            <br>
            <div class="cuzpsoehlofoxr">
                <div class="pjapicqhpowl">
                    <h3>Принт графіт</h3>
                    <div class="vieccgigfty pjapicqhpowl">
                        <div class="usgvprjellzshyx"><span>-40%</span>
                            <p>2165грн</p>
                        </div>
                        <div class="xcajqodyfxa"><span>Ціна зі знижкою:</span>
                            <p>1299грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="vgdfudcveezala zortpvjkdxp">Оформити замовлення</a>
            </div>

            <br>
            <section class="cat" id="visadftkiukojav">
                <ul class="qqopqocpveiqls">
                    <li>
                        <div><img src="files/k1.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/k2.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/k3.jpg" alt=""></div>
                    </li>



                </ul>
            </section>
            <br>
            <div class="cuzpsoehlofoxr">
                <div class="pjapicqhpowl">
                    <h3>Принт квіти</h3>
                    <div class="vieccgigfty pjapicqhpowl">
                        <div class="usgvprjellzshyx"><span>-40%</span>
                            <p>2165грн</p>
                        </div>
                        <div class="xcajqodyfxa"><span>Ціна зі знижкою:</span>
                            <p>1299грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="vgdfudcveezala zortpvjkdxp">Оформити замовлення</a>
            </div>

            <br>

            <br>
            <section class="cat" id="visadftkiukojav">
                <ul class="qqopqocpveiqls">
                    <li>
                        <div><img src="files/d1.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/d2.jpg" alt=""></div>
                    </li>
                    <li>
                        <div><img src="files/d3.jpg" alt=""></div>
                    </li>



                </ul>
            </section>
            <br>
            <div class="cuzpsoehlofoxr">
                <div class="pjapicqhpowl">
                    <h3>Колір джинс</h3>
                    <div class="vieccgigfty pjapicqhpowl">
                        <div class="usgvprjellzshyx"><span>-40%</span>
                            <p>2165грн</p>
                        </div>
                        <div class="xcajqodyfxa"><span>Ціна зі знижкою:</span>
                            <p>1299грн</p>
                        </div>
                    </div>
                </div>

                <a href="#order_form" rel='2' class="vgdfudcveezala zortpvjkdxp">Оформити замовлення</a>
            </div>

            <br>
            <br>


            <section class="qdderssglovdgjg">
                <h2 class="avwktsjpdkg"><span>Відгуки</span> покупців</h2>
                <div class="pkvilkgkivpggw">
                    <div class="kvevcrkkygjt">
                        <div class="ukirrsycptru pjapicqhpowl">
                            <img src="files/ava1.jpg" alt="">
                            <div class="dasjiijldvhrw">
                                <div class="name">Тамара</div>
                                <div class="text">47 років</div>
                            </div>
                            <div class="info">
                                <div class="cekseeuovapdt"></div>
                                <div class="date">10.07.2023</div>
                            </div>
                        </div>
                        <p> Красивий і якісний костюм, саме те що я так довго шукала, дякую вам!)) </p>
                    </div>

                    <div class="kvevcrkkygjt">
                        <div class="ukirrsycptru pjapicqhpowl"><img src="files/ava2.jpg" alt="">
                            <div class="dasjiijldvhrw">
                                <div class="name">Валентина</div>
                                <div class="text">45 років</div>
                            </div>
                            <div class="info">
                                <div class="cekseeuovapdt"></div>
                                <div class="date">10.07.2023</div>
                            </div>
                        </div>
                        <p> Покупкою задоволена максимально, до осені підготовлена завдяки вам. Бажаю успішної торгівлі!) </p>
                    </div>

                    <div class="kvevcrkkygjt">
                        <div class="ukirrsycptru pjapicqhpowl"><img src="files/ava3.jpg" alt="">
                            <div class="dasjiijldvhrw">
                                <div class="name">Світлана</div>
                                <div class="text">54 роки</div>
                            </div>
                            <div class="info">
                                <div class="cekseeuovapdt"></div>
                                <div class="date">09.07.2023</div>
                            </div>
                        </div>
                        <p> Сидить по фігурі чудово, при цьому не сковує рухи. Зручний для тривалого носіння, раджу всім! </p>
                    </div>
                </div>
            </section>

            <!-- /reviews 3 -->
            <!-- scsefwhcvusdxtl steps 1 -->
            <div class="tlt">

                <h2 class="avwktsjpdkg"><span>Як зробити</span><br> замовлення?</h2>
            </div>
            <div class="jlpgsstccpv">
                <div class="afhrghiels">
                    <div class="cqeuccfkyrvp"><img src="files/order_steps__step1_icon15b1b.png" alt="">

                        <h4>Замовлення</h4>
                        <p>Залиште замовлення внизу сторінки</p>
                    </div>
                </div>
                <div class="afhrghiels">
                    <div class="cqeuccfkyrvp">
                        <img src="files/order_steps__step2_icon95bea.png" alt="">

                        <h4>Дзвінок</h4>
                        <p>Наш менеджер уточнить деталі замовлення</p>
                    </div>
                </div>
                <div class="afhrghiels">
                    <div class="cqeuccfkyrvp">
                        <img src="files/order_steps__step3_icon9469b.png" alt="">

                        <h4>Відправлення</h4>
                        <p>Доставимо ваше замовлення Новою Поштою</p>
                    </div>
                </div>
                <div class="afhrghiels">
                    <div class="cqeuccfkyrvp">
                        <img src="files/order_steps__step4_icone6b9d.png" alt="">

                        <h4>Отримання</h4>
                        <p>Сплачуйте при отриманні на відділенні</p>
                    </div>
                </div>
            </div>

            <!-- Доставка/оплата-v3 -->
            <div class="tlt">
                <section class="xjjsspiriwx">
                    <ul class="lyoliyyqvofep">
                        <li>
                            <h3>Доставка</h3>
                            <p>Доставляємо Новою Поштою по всій Україні. Вартість за тарифами Нової Пошти</p>
                        </li>
                        <li>
                            <h3>Безпечна оплата</h3>
                            <p>Ви оплачуєте замовлення за фактом отримання виробу на руки з комісією або без комісії переказом на банківську картку</p>
                        </li>
                        <li>
                            <h3>Обмін, повернення та гарантії</h3>
                            <p>Ми завжди перевіряємо товар перед відправкою і гарантуємо 100% якість.</p>
                            <p>Обмін і повернення протягом 14 днів!</p>
                        </li>

                    </ul>
                </section>
            </div>

            <!-- scsefwhcvusdxtl 3 -->
            <section class="idczvrudcgykq iwhffjgzrudkwx scsefwhcvusdxtl">
                <h1 class="sdduzfpqklx">НОВИНКА 2023 РОКУ</h1>
                <div class="spolfwqujqxxxau">
                    <p class="izasifcdkod">ТЕПЛИЙ СТИЛЬНИЙ КОСТЮМ</p>
                    <div class="jdwxtiwtyakezj"><b>40% знижка</b></div>


                    <img src="files/offer1.jpg" alt="">
                </div>

                <div class="kzflgprwvxuqvl">
                    <div class="dkczuzzvzwtflgo cjstjtvtxj">
                        <div class="text">Звичайна ціна:</div>
                        <div class="fscartacdutzjdg">2165грн</div>
                    </div>
                    <div class="dkczuzzvzwtflgo ouwrdahjedfctz">
                        <div class="text">Ціна зі знижкою:</div>
                        <div class="fscartacdutzjdg">1299грн</div>
                    </div>
                </div>

                <div class="ardfsczivqxoz pjapicqhpowl">

                    <div class="vwtdyjquxiksspz">

                        <img src="files/benefit1.jpg" alt="">
                        <p>МОДНИЙ ДИЗАЙН</p>
                    </div>

                    <div class="vwtdyjquxiksspz">
                        <img src="files/benefit2.jpg" alt="">
                        <p>ВИСОКА ЯКІСТЬ</p>
                    </div>
                    <div class="vwtdyjquxiksspz">

                        <img src="files/benefit3.jpg" alt="">

                        <p>ПРЕМІУМ ТКАНИНА</p>
                    </div>
                </div>

                <p align="center">Для замовлення та консультації заповніть форму:</p>
                <br>
                <form id="order_form" class="pzgghtazppvd" action="form_handler.php" method="post">

                    <input class="uwvqpvolzaqfvfu" type="text" name="name" placeholder="Введіть ваше ім'я" required>
                    <input class="uwvqpvolzaqfvfu" type="tel" name="phone" placeholder="Введіть Ваш телефон" required>
                    <div style="margin: 0 auto 25px;font-size: 15px; text-align: center; color: #000;" bis_skin_checked="1">
                        <input id="data1" type="checkbox" checked required style="appearance: auto;">
                        <label for="data1">Я погоджуюся з політикою конфіденційності</label>
                    </div>
                    <button class="vgdfudcveezala" id="submit_btn">Оформити замовлення</button>
                </form>

            </section>
            <!-- /order 3 -->
            <!-- footer -->
            <footer class="fjhcajagrijo">
                <p>Виробництво в Україні
                    <br>
                    пгт. Авангард, вул. Базова, 20
                    <br>
                    <a href="politics.html" target="_blank">Політика конфіденційності</a>
                    <br>
                    <a href="refund.html" target="_blank">Гарантії та повернення</a> <br>
                    <a href="ugoda.html" target="_blank">Угода Користувача</a>
            </footer><!-- /footer -->
            <div class="popap-wrap">
                <div class="popap">
                    <div class="popap__title">
                        Оформлення замовлення
                    </div>
                    <div class="loader">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>

            <style>
                .popap-wrap {
                    display: none;
                    width: 100%;
                    height: 100%;
                    background: rgba(0, 0, 0, 0.329);
                    position: fixed;
                    top: 0;
                    left: 0;
                    z-index: 100;
                    align-items: center;
                }

                .popap {
                    display: flex;
                    background: rgb(255, 255, 255);
                    border-radius: 20px;
                    border: 1px solid rgb(150, 150, 150);
                    margin: 0 auto;
                    width: 90%;
                    max-width: 480px;
                    padding: 60px 15px;
                    justify-content: center;
                    flex-direction: column;
                }

                .popap__title {
                    text-align: center;
                    font-weight: 600;
                    font-size: 1.2rem;
                    text-align: center;

                }

                .loader {
                    margin: 40px auto 0;
                    display: flex;
                    justify-content: space-between;
                    width: 100px;
                }

                .circle {
                    width: 15px;
                    height: 15px;
                    border-radius: 50%;
                    background-color: #FED121;
                    animation: scaleUp 1.2s ease-in-out infinite;
                }

                .circle:nth-child(2) {
                    animation-delay: 0.2s;
                }

                .circle:nth-child(3) {
                    animation-delay: 0.4s;
                }

                .circle:nth-child(4) {
                    animation-delay: 0.6s;
                }


                @keyframes scaleUp {

                    0%,
                    100% {
                        transform: scale(1);
                    }

                    50% {
                        transform: scale(1.3);
                    }
                }
            </style>
    </div>
    <!-- scripts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=cyrillic" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="bxslider/jquery.qqopqocpveiqls.js">
    </script>
    <link href="bxslider/jquery.qqopqocpveiqls.css" rel="stylesheet">

    <script>
        $(document).ready(function() {

            $('.qqopqocpveiqls').bxSlider();

        });
    </script>
    <script>
        $(function() {

            $('.zortpvjkdxp').click(function() {

                ind = $(this).attr('rel');

                $('#select option').removeAttr('selected');

                $('#select').children('option').eq(ind).attr("selected", "selected");

            });


        });
    </script>
    <script src="files/scripts6085f.js">
    </script>
    <script>
        function identifyDate(e) {
            var t = new Date;
            t.setTime(t.getTime() + 864e5 * e);
            var a = t.getDate(),
                n = t.getMonth() + 1,
                r = t.getFullYear();
            return (a > 9 ? a : "0" + a) + "." + (n > 9 ? n : "0" + n) + "." + r
        }

        function printCommentsDate(m) {
            for (var t = $(m).length, e = 0; e <= t; e++) $(m + ":eq(" + (t - e) + ")").html(identifyDate(-e))
        }
        printCommentsDate('.date');
    </script>

    <script>
        const form = document.getElementById("order_form")
        const button = document.getElementById("submit_btn");

        // Додаємо обробник події на кнопку
        button.addEventListener("click", function() {
            const requiredFields = form.querySelectorAll("[required]");

            // Перевіряємо, чи всі обов'язкові поля заповнені
            let allFieldsFilled = true;
            requiredFields.forEach(field => {
                if (!field.value) {
                    allFieldsFilled = false;
                }
            });

            // Виводимо повідомлення з результатом перевірки
            if (allFieldsFilled) {
                button.disabled = true;
                button.style.opacity = ".5"
                const popapWrap = document.querySelector(".popap-wrap");
                popapWrap.style.display = "flex";
                form.submit();
            } else {
                return;
            }
        });
    </script>
</body>

</html>