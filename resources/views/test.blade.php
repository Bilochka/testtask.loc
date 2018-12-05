<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Test</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="{{URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="{{URL::asset('js/app.js') }}"></script>


</head>
<body>
<div class="wraper">
    <header >
        <div  class="mycontainer  header-box">
            <div class="row-header">
                <div class="item-head-left flex-conteiner">
                    <div class="box-info">
                        <div class="company-info">
                            <img src="img\logo-test.png" class="logo" alt="" />
                        </div>
                        <div class="company-info">
                            <div id="company-name">Название компании</div>
                            <div id="description">Самая клевая компания</div>
                        </div>
                    </div>
                </div>
                <div class="item-head-right flex-conteiner">
                    <div class="connection">+7(499) 777 77 77
                    </div>
                    <div class="connection">+7(499) 777 77 77
                    </div>
                    <div class="feedback">
                        <a href="#">Обратная связь</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav flex-conteiner mr-auto">
                    <li class="nav-item border-my ">
                        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item border-my">
                        <a class="nav-link" href="#">Каталог</a>
                    </li>
                    <li class="nav-item border-my">
                        <a class="nav-link" href="#">Доставка и оплата</a>
                    </li>
                    <li class="nav-item border-my">
                        <a class="nav-link" href="#">Прайс-лист</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="demo" class="carousel slide flex-conteiner" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img\Slider.png" alt="Los Angeles" width="100%" height="500">
            </div>
            <div class="carousel-item">
                <img src="img\Slider2.png" alt="Chicago" width="100%" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev " id="pointer-prev" href="#demo" data-slide="prev">
            <img src="img\left-pointer.png" class="slider-img" alt="" />
        </a>
        <a class="carousel-control-next " id="pointer-next" href="#demo" data-slide="next">
            <img src="img\right-pointer.png" class="slider-img" alt="" />
        </a>
    </div>
    <div  class="mycontainer  content">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Каталог</a></li>
            <li class="breadcrumb-item active">Бытовая техника</li>
        </ul>
        <div class="catalog">
            <div class=" leftblock">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Автомобили</a>
                            </div>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Бытовая техника</a>
                            </div>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="list-catalog">
                                    <li class="item-catalog">
                                        <a class="a-item" href="#">Микроволновки</a>
                                    </li>
                                    <li class="item-catalog">
                                        <a class="a-item" href="#">Холодильники</a>
                                    </li>
                                    <li class="item-catalog">
                                        <a class="a-item" href="#">Посудомоечные машины</a>
                                    </li>
                                    <li class="item-catalog">
                                        <a class="a-item" href="#">Чайники</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Мобильная техника</a>
                            </div>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Компьютеры</a>
                            </div>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Одежда</a>
                            </div>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Недвижимость</a>
                            </div>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                </div>
                <div class="excel-foto">
                    <img src="img\MS-EXCEL.png" class="excel" alt="" />
                    <div class="price-list">Прайс-лист</div>
                </div>
            </div>
            <div class="centerblock">
                <div class="goods-conteiner">
                    <div class="tint">
                        <div class="goods_inside">
                            <img src="img\nophoto.png" class="goods-img" alt="" />
                            <div class="disc-goods">Самый 1 клевый чайник, который надо купить! который надо купить! который надо купить! который надо купить! который надо купить! который надо купить! который надо купить!</div>
                            <div class="purchase">
                                <div class="price">1 900 р.</div>
                                <img src="img\addtobasket_mini.png" class="addtobasket_mini" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="tint">
                        <div class="goods_inside">
                            <img src="img\nophoto.png" class="goods-img" alt="" />
                            <div class="disc-goods">Самый 2 клевый чайник, который надо купить!</div>
                            <div class="purchase">
                                <div class="price">1 900 р.</div>
                                <img src="img\addtobasket_mini.png" class="addtobasket_mini" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="tint">
                        <div class="goods_inside">
                            <img src="img\nophoto.png" class="goods-img" alt="" />
                            <div class="disc-goods">Самый 3 клевый чайник, который надо купить!</div>
                            <div class="purchase">
                                <div class="price">1 900 р.</div>
                                <img src="img\addtobasket_mini.png" class="addtobasket_mini" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="tint">
                        <div class="goods_inside">
                            <img src="img\nophoto.png" class="goods-img" alt="" />
                            <div class="disc-goods">Самый 4 клевый чайник!</div>
                            <div class="purchase">
                                <div class="price">1 900 р.</div>
                                <img src="img\addtobasket_mini.png" class="addtobasket_mini" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="tint">
                        <div class="goods_inside">
                            <img src="img\nophoto.png" class="goods-img" alt="" />
                            <div class="disc-goods">Самый 5 клевый чайник</div>
                            <div class="purchase">
                                <div class="price">1 900 р.</div>
                                <img src="img\addtobasket_mini.png" class="addtobasket_mini" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                    </ul>
                </nav>
                <div class="catalog about-catalog">
                    <div class="about-left">
                        <p class="about-text">Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы</p>
                    </div>
                    <div class="about-right">
                        <p class="about-text">Одним из основных направлений работ нашей компании является пои
                            Одним из основных направлений работ нашей компании является пои
                            Одним из основных направлений работ нашей компании является пои
                            Одним из основных направлений работ нашей компании является пои
                            Одним из основных направлений работ нашей компании является пои</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-secondary">
        <div  class="mycontainer catalog">
            <div  class="left-footer">
                <p> © 2012–2013 ЗАО «Компания» </p>
                <p>info@name.ru</p>
            </div>
            <div  class="center-footer">
                <ul class="list-footer">
                    <li class="li-footer">
                        <a class="footer-link" href="#">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="li-footer">
                        <a class="footer-link" href="#">Каталог</a>
                    </li>
                    <li class="li-footer">
                        <a class="footer-link" href="#">Доставка и оплата</a>
                    </li>
                    <li class="li-footer">
                        <a class="footer-link" href="#">Прайс-лист</a>
                    </li>
                    <li class="li-footer">
                        <a class="footer-link" href="#">Контакты</a>
                    </li>
                </ul>
            </div>
            <div  class="right-footer catalog">
                <img src="img\dev-logo.png" class="dev-logo" alt="" />
                <div class="dev-comp">
                    <p> Разработка сайта — </p>
                    <p>компания «Пиксель Плюс»</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
