<html>
<head>
    <!--Include CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('third-party/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('third-party/flag-icon/css/flag-icon.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('third-party/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('css/style.css');?>">
    
    <!--Include Javascript-->
    <script type="text/javascript" src="<?=base_url('third-party/jquery/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('third-party/bootstrap/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('js/main.js');?>"></script>
</head>

    <header>
        <div id="top-header-right-menu" class="row">
            <div class="container text-right">
                <ul>
                    <li><a href="#">Your account</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="flag-icon flag-icon-no"></i> Norwegian</a></li>
                            <li><a href="#"><i class="flag-icon flag-icon-gb"></i> English</a></li>
                            <li><a href="#"><i class="flag-icon flag-icon-im"></i> Hva faen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="header" class="row">
            <div class="container">
                <div id="logo" class="col-sm-2 text-center">
                    <a href="<?=base_url();?>"><img src="<?=base_url('img/page/logo.png');?>"></a>
                </div>
                <div class="col-sm-10">
                    <div class="row">
                        <div id="search-bar" class="form-group">
                            <input type="text" class="form-control" placeholder="Search here">
                            <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div id="nav-menu" class="row">
                        <div class="col-sm-10">
                            <ul>
                                <li><a id="activate-hidden" href="">Shop by category <span class="caret"></span></a></li>
                                <li><a <?=menu_active('');?> href="<?=base_url();?>">Today`s deals</a></li>
                                <li><a <?=menu_active('support');?>href="<?=base_url('/support');?>">Support</a></li>
                                <li><a href="">Dafuq</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                             <!--Shopping cart goes here, as for now only with an ancher-->
                            <a id="shoping-cart" href="">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <span id="cart-num" class="label label-default">122</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<body>
    <div class="row">
        <div class="container">
            <div id="hidden-menu" class="col-sm-10 col-sm-offset-2">
               <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-sm-4">
                            <ul>
                                <li class="li-header">Women</li>
                                <li><a href="">Dresses</a></li>
                                <li><a href="">Tops</a></li>
                                <li><a href="">Pants</a></li>
                                <li><a href="">Underwear</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                             <ul>
                                <li class="li-header">Men</li>
                                <li><a href="">Suits</a></li>
                                <li><a href="">Hoods</a></li>
                                <li><a href="">Pants</a></li>
                                <li><a href="">Underwear</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                             <ul>
                                <li class="li-header">Children</li>
                                <li><a href="">Dresses</a></li>
                                <li><a href="">Tops</a></li>
                                <li><a href="">Pants</a></li>
                                <li><a href="">Underwear</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>