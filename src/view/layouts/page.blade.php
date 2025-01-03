<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css" />
    <link rel="stylesheet" type="text/css" href="/vendors/styles/additinal.css" />
    
    <link rel="stylesheet" href="/assets/css/output.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>

    @yield('head')
</head>

<body class='@yield('bodyClass')'>


    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here">
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <!-- <span class="badge notification-active"></span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                            <div id="mCSB_1" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside"
                                style="max-height: 0px;" tabindex="0">
                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                    style="position:relative; top:0; left:0;" dir="ltr">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/img.jpg" alt=""
                                                    class="mCS_img_loaded">
                                                <h3>John Doe</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo1.jpg" alt=""
                                                    class="mCS_img_loaded">
                                                <h3>Lea R. Frith</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo2.jpg" alt=""
                                                    class="mCS_img_loaded">
                                                <h3>Erik L. Richards</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo3.jpg" alt=""
                                                    class="mCS_img_loaded">
                                                <h3>John Doe</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/photo4.jpg" alt=""
                                                    class="mCS_img_loaded">
                                                <h3>Renee I. Hansen</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="/vendors/images/img.jpg" alt=""
                                                    class="mCS_img_loaded">
                                                <h3>Vicki M. Coleman</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="mCSB_1_scrollbar_vertical"
                                    class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand"
                                    style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                            style="position: absolute; min-height: 30px; top: 0px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="/vendors/images/photo1.jpg" alt="">
                        </span>
                        <span class="user-name">{{ Auth('admin')->user()->name ??''}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="{{route('reset.pas.config')}}"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right-sidebar ">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll mCustomScrollbar _mCS_2">
            <div id="mCSB_2" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" tabindex="0"
                style="max-height: none;">
                <div id="mCSB_2_container" class="mCSB_container" style="position:relative; top:0; left:0;"
                    dir="ltr">
                    <div class="right-sidebar-body-content">
                        <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a href="javascript:void(0);"
                                class="btn btn-outline-primary header-white active">White</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                        <div class="sidebar-btn-group pb-30 mb-10">
                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                        <div class="sidebar-radio-group pb-10 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon"
                                    class="custom-control-input" value="icon-style-1" checked="">
                                <label class="custom-control-label" for="sidebaricon-1"><i
                                        class="fa fa-angle-down"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon"
                                    class="custom-control-input" value="icon-style-2">
                                <label class="custom-control-label" for="sidebaricon-2"><i
                                        class="ion-plus-round"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon"
                                    class="custom-control-input" value="icon-style-3">
                                <label class="custom-control-label" for="sidebaricon-3"><i
                                        class="fa fa-angle-double-right"></i></label>
                            </div>
                        </div>

                        <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                        <div class="sidebar-radio-group pb-30 mb-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                                    class="custom-control-input" value="icon-list-style-1" checked="">
                                <label class="custom-control-label" for="sidebariconlist-1"><i
                                        class="ion-minus-round"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                                    class="custom-control-input" value="icon-list-style-2">
                                <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                        aria-hidden="true"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                                    class="custom-control-input" value="icon-list-style-3">
                                <label class="custom-control-label" for="sidebariconlist-3"><i
                                        class="dw dw-check"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                                    class="custom-control-input" value="icon-list-style-4" checked="">
                                <label class="custom-control-label" for="sidebariconlist-4"><i
                                        class="icon-copy dw dw-next-2"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                                    class="custom-control-input" value="icon-list-style-5">
                                <label class="custom-control-label" for="sidebariconlist-5"><i
                                        class="dw dw-fast-forward-1"></i></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                                    class="custom-control-input" value="icon-list-style-6">
                                <label class="custom-control-label" for="sidebariconlist-6"><i
                                        class="dw dw-next"></i></label>
                            </div>
                        </div>

                        <div class="reset-options pt-30 text-center">
                            <button class="btn btn-danger" id="reset-settings">
                                Reset Settings
                            </button>
                        </div>
                    </div>
                </div>
                <div id="mCSB_2_scrollbar_vertical"
                    class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand"
                    style="display: block;">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                            style="position: absolute; min-height: 30px; display: block; height: 45px; max-height: 157px; top: 0px;">
                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="vendors/images/logo.png" alt="">
                <!-- صفحه ی نخست -->
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll mCustomScrollbar _mCS_3">
            <div id="mCSB_3" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" tabindex="0"
                style="max-height: none;">
                <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;"
                    dir="ltr">
                    <div class="sidebar-menu icon-style-1 icon-list-style-1">
                        <ul id="accordion-menu">
                            <li class="dropdown ">
                                <a href="javascript:;" class="dropdown-toggle" data-option="on">
                                    <span class="micon bi bi-house"></span><span class="mtext">بازگشت به سایت</span>
                                </a>
                                <ul class="submenu" style="display: none;">
                                    <li><a href="/">صفحه نخست</a></li>
                                    <li><a href="/shop">فروشگاه</a></li>
                                    <li><a href="/blog">وبلاگ</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;"  class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-textarea-resize"></span><span
                                        class="mtext">محصولات</span>
                                </a>
                                <ul class="submenu" id='product'>
                                    <li><a href="{{ route('productaddshowform') }}">افزودن محصول جدید</a></li>
                                    <li><a href="{{ route('fast.shop.edit') }}">ادیت از روی فروشگاه</a></li>
                                    <li><a href="{{ route('show.shop.product') }}">محصولات سایت</a></li>
                                    <li><a href="{{ route('show.deactive.product') }}">محصولات غیر فعال</a></li>
                                    <li><a href="{{ route('show.telegram.view') }}"> ارسال پست تلگرام </a></li>
                                    <li><a href="{{ route('sell.report') }}">آمار فروش</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-table"></span><span class="mtext">وبلاگ</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{route('addNewPost')}}">افزودن مقاله</a></li>
                                    <li><a href="{{route('activePost')}}">مقالات فعال</a></li>
                                    <li><a href="{{route('not.published')}}">مقالات منتشر نشده</a></li>
                                    <li><a href="{{route('post.category.show.form')}}">  دسته بندی ها</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">فاکتور</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="ui-buttons.html">صدور فاکتور</a></li>
                                    <li><a href="ui-cards.html">مشاهده فاکتور ها</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-chat-right-dots"></span><span class="mtext">تیکت و سفارشات</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{route('show.orders')}}">ثبت سفارش در سایت </a></li>
                                    <li><a href="{{route('show.orders.pay')}}">پرداختی ها</a></li>
                                    <li><a href="#">سوال دارم</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-pie-chart"></span><span class="mtext">گزارشات</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="#">بازدید سود</a></li>
                                    <li><a href="#">ترافیک سایت</a></li>
                                    <li><a href="#"> پرفروش ترین محصولات</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-file-earmark-text"></span><span class="mtext"> پیکربندی
                                        سایت</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="video-player.html">برند</a></li>
                                    <li><a href="{{route('show.add.color')}}">افزودن رنگ</a></li>
                                    <li><a href="{{route('show.add.size')}}">افزودن سایز</a></li>
                                    <li><a href="{{route('telegram.config')}}">تنظیم تلگرام </a></li>
                                    <li><a href="{{route('index.config')}}"> صفحه ی نخست </a></li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-bug"></span><span class="mtext">گزارش ارور ها </span>
                                </a>
                                <ul class="submenu">

                                    <li><a href="#">ثبت ارور</a></li>
                                    <li><a href="#">400</a></li>
                                    <li><a href="#">403</a></li>
                                    <li><a href="#">404</a></li>
                                    <li><a href="#">500</a></li>
                                    <li><a href="#">503</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="sitemap.html" class="dropdown-toggle no-arrow">
                                    <span class="micon bi bi-diagram-3"></span><span class="mtext">Sitemap</span>
                                </a>
                            </li>

                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <div class="sidebar-small-cap">موارد بیشتر</div>
                            </li>
                            <li>
                                <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                    <span class="micon bi bi-file-pdf"></span><span class="mtext">راهنما</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="#">مقدمه</a></li>
                                    <li><a href="getting-started.html">فاکتور</a></li>
                                    <li><a href="color-settings.html">فروشگاه</a></li>
                                    <li><a href="third-party-plugins.html">وبلاگ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="mCSB_3_scrollbar_vertical"
                    class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand"
                    style="display: block;">
                    <div class="mCSB_draggerContainer">
                        <div id="mCSB_3_dragger_vertical" class="mCSB_dragger"
                            style="position: absolute; min-height: 30px; display: block; height: 71px; max-height: 275px; top: 0px;">
                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="main-container" dir='rtl'>
        <div class="pd-ltr-20 xs-pd-20-10">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class='alert alert-success'> {!! session('success') !!}</div>
            @endif
            @if (session('warning'))
                <div class='bg-red-200 text-red-600 mx-20 my-3 py-5 text-center'> {{ session('warning') }}</div>
            @endif
            @yield('body')

        </div>
    </div>

    <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>

    <script src="/vendors/scripts/core.js"></script>
    <script src="/vendors/scripts/script.min.js"></script>
    <script src="/vendors/scripts/process.js"></script>
    <script src="/vendors/scripts/layout-settings.js"></script>
    <script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="/vendors/scripts/dashboard3.js"></script>
        <script>
       
        var a, i;

        function search_c(id, resultclass) {
            var per = document.querySelectorAll(`.${resultclass} div`);
            a = document.getElementById(id).value;
            ic = per.length;
            for (t = 0; t < ic; t++) {
                if (per[t].innerHTML.indexOf(a) > -1) {
                    per[t].style.display = "block";
                } else {
                    per[t].style.display = "none";
                }
            }
        }


    </script>
    <!-- Google Tag Manager (noscript) -->
</body>
@yield('scripts')

</html>
