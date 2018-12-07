<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Test2</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="{{URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="{{URL::asset('js/app.js') }}"></script>


</head>
<body>
<div class="wrapper">
    <header >
        <div  class="container top-header">
            <div class="row d-flex flex-wrap flex-lg-nowrap justify-content-center justify-content-lg-between">
                <div class="col-lg-6 box-info d-flex flex-row flex-nowrap">
                    {{--<div class="box-info">--}}
                        <div class=" company-info1">
                            <div class=" logo">
                                <img src="img\logo-test.png" class="logo-img" alt="" />
                            </div>
                        </div>
                        <div class="company-info2">
                            <div id="company-name">Название компании</div>
                            <div id="description">cамая клевая компания</div>
                        </div>
                    {{--</div>--}}
                </div>

                <div class="col-lg-6 box-connection d-flex flex-column flex-wrap ">
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

        {{--<div  class="container-nav">--}}
            <nav class="navbar navbar-expand-sm ">
                <ul class="navbar-nav container d-flex flex-wrap flex-row justify-content-center justify-content-lg-between">
                    <li class="nav-item border-item ">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item border-item">
                        <a class="nav-link" href="#">Каталог</a>
                    </li>
                    <li class="nav-item border-item">
                        <a class="nav-link" href="#">Доставка и оплата</a>
                    </li>
                    <li class="nav-item border-item">
                        <a class="nav-link" href="#">Прайс-лист</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>
            </nav>
        {{--</div>--}}
    </header>

    <div id="demo" class="carousel slide flex-conteiner" data-ride="carousel">

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img\next5.jpg" alt="Los Angeles"  >
            </div>
            <div class="carousel-item">
                <img src="img\next1.jpg" alt="Chicago"  >
            </div>
            <div class="carousel-item">
                <img src="img\next2.jpg" alt="Chicago" >
            </div>
            <div class="carousel-item">
                <img src="img\next3.jpeg" alt="Chicago"  >
            </div>
            <div class="carousel-item">
                <img src="img\next4.jpeg" alt="Chicago" >
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

    <div  class="content">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Каталог</a></li>
            <li class="breadcrumb-item active">Бытовая техника</li>
        </ul>
        <div class="catalog row d-flex flex-wrap justify-content-lg-between justify-content-center  ">
            <div class=" leftblock col-lg-3 col-md-4 col-sm-6 col-12 ">
                {{--d-flex flex-column flex-nowrap justify-content-center justify-content-lg-start--}}
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
            <div class="centerblock col-lg-9 col-md-8  col-sm-6 col-12">
                <div class="goods-conteiner d-flex flex-wrap align-items-stretch">
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
                <div class="pagination-box">
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
                </div>
                <div class="about-catalog d-flex flex-nowrap flex-row justify-content-center">
                    <div class="about-left">
                        <p class="about-text">Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы.
                            Компания «Пиксель Плюс» существует более 6 лет, за это время мы</p>
                    </div>
                    <div class="about-right">
                        <p class="about-text">Одним из основных направлений работ нашей компании является
                            Одним из основных направлений работ нашей компании является
                            Одним из основных направлений работ нашей компании является
                            Одним из основных направлений работ нашей компании является
                            Одним из основных направлений работ нашей компании является </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
