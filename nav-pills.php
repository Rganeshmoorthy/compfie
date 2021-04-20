<html>

<head>
    <link rel="stylesheet" href="css/nav-pill.css">
    <script>
        jQuery(document).ready(function() {
        jQuery('.scrollbarnew').scrollbar();
            
  $('#slide').hover(function() {
    console.log('gakbjdl')
    var container = document.getElementById('container');
    sideScroll(container,'right',25,900,10);
});

$('#slideBack').hover(function() {
    var container = document.getElementById('container');
    sideScroll(container,'left',25,900,10);
});

function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
}
}); 

    </script>

</head>

<body>
    <div class="container-fluid nav_pill p-0 new-nav scrollbarnew" id="container">      
        <ul id="myTabs" class="d-flex nav-pills nav-justified nav_ul pills-ul">
            <li class="px-2 px-sm-0 px-md-2  ml-0 ml-md-5  nav-li"><a href="domain-page.php"
                    class="px-3">Labour,Employment &
                    Industrial</a>
            </li>
            <li class="px-2 px-sm-0 px-md-1 nav-li"><a href="domain-page1.php" class="px-3">Environmental,Health
                    & Safety</a>
            </li>
            <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="domain-page2.php" class="px-3">Fiscal,Corporate &
                    Commercial</a>
            </li>      
              <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="domain-page3.php" class="px-3">Labour,Employment &
                    Industrial</a>
            </li> 
              <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="domain-page4.php" class="px-3">Environmental,Health
                    & Safety</a>
            </li> 
              <li class="px-2 px-sm-0 px-md-2 nav-li"><a href="domain-page5.php" class="px-3">Fiscal,Corporate &
                    Commercial</a>
            </li>                  
    </ul>           
    </div>   
    <button id="slideBack" type="button"><i class="fa fa-arrow-left color" aria-hidden="true"></i></button>
    <button id="slide" type="button"><i class="fa fa-arrow-right color" aria-hidden="true"></i></button> 

</body>

</html>