<html>

<head>
    <link rel="stylesheet" href="css/nav-pill.css">
    <script>
    jQuery(document).ready(function() {
        jQuery('.scrollbarnew').scrollbar();
        /*try using another horizontal scroll*/
        (function($) {
            $(".new-nav").on('scroll', function() {
                $val = $(this).scrollLeft();

                if ($(this).scrollLeft() + $(this).innerWidth() >= $(this)[0].scrollWidth) {
                    $(".nav-next").show();
                }

                if ($val == 0) {
                    $(".nav-prev").show();
                }
            });
            console.log('init-scroll: ' + $(".nav-next").scrollLeft());
             $('.nav-next').hover(function(){
                $(".new-nav").animate({
                    scrollLeft: '+=610'
                }, 500);

            });
            $(".nav-prev").hover(function() {
                $(".new-nav").animate({
                    scrollLeft: '-=610'
                }, 500);                
            });
        })(jQuery);

    });
    </script>

</head>

<body>
    <div class="position-relative main-div">
        <div class="container-fluid nav_pill p-0 new-nav scrollbarnew" id="container">
            <ul id="myTabs" class="d-flex nav-pills nav-justified nav_ul pills-ul">
                <li class="px-2 px-sm-0 px-md-1 nav-li"><a href="domain-page.php" class="px-3">Labour,Employment &
                        Industrial</a>
                </li>
                <li class="px-2 px-sm-0 px-md-1 nav-li"><a href="domain-page1.php" class="px-3">Environmental,Health
                        & Safety</a>
                </li>
                <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="domain-page2.php" class="px-3">Fiscal,Corporate &
                        Commercial</a>
                </li>
                <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="#" class="px-3">Labour,Employment &
                        Industrial</a>
                </li>
                <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="#" class="px-3">Environmental,Health
                        & Safety</a>
                </li>
                <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="#" class="px-3">Fiscal,Corporate &
                        Commercial</a>
                </li>
            </ul>
        </div>
        <button id="slideBack" type="button"><i class="fa fa-arrow-left color nav-prev" aria-hidden="true"></i></button>        
        <button id="slide" type="button"><i class="fa fa-arrow-right color nav-next" aria-hidden="true"></i></button>
    </div>
</body>

</html>