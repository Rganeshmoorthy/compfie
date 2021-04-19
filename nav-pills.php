<html>

<head>
    <link rel="stylesheet" href="css/nav-pill.css">
    <script>
        jQuery(document).ready(function() {
        jQuery('.scrollbarnew').scrollbar();
    });   
       $(function() {
       var print = function(msg) {
         alert(msg);
       };

       var setInvisible = function(elem) {
         elem.css('visibility', 'hidden');
       };
       var setVisible = function(elem) {
         elem.css('visibility', 'visible');
       };

       var elem = $("#elem");
       var items = elem.children();

       // Inserting Buttons
       elem.prepend('<div id="right-button" style="visibility: hidden;"><a href="#"><</a></div>');
       elem.append('  <div id="left-button"><a href="#">></a></div>');

       // Inserting Inner
       items.wrapAll('<div id="inner" />');

       // Inserting Outer
       debugger;
       elem.find('#inner').wrap('<div id="outer"/>');

       var outer = $('#outer');

       var updateUI = function() {
         var maxWidth = outer.outerWidth(true);
         var actualWidth = 0;
         $.each($('#inner >'), function(i, item) {
           actualWidth += $(item).outerWidth(true);
         });

         if (actualWidth <= maxWidth) {
           setVisible($('#left-button'));
         }
       };
       updateUI();



       $('#right-button').click(function() {
         var leftPos = outer.scrollLeft();
         outer.animate({
           scrollLeft: leftPos - 200
         }, 800, function() {
           debugger;
           if ($('#outer').scrollLeft() <= 0) {
             setInvisible($('#right-button'));
           }
         });
       });

       $('#left-button').click(function() {
         setVisible($('#right-button'));
         var leftPos = outer.scrollLeft();
         outer.animate({
           scrollLeft: leftPos + 200
         }, 800);
       });

       $(window).resize(function() {
         updateUI();
       });
     });

    </script>

</head>

<body>
    <div class="container-fluid nav_pill p-0" >
        <ul id="myTabs" class="nav nav-pills nav-justified nav_ul owl-carousel owl-theme image_slide">
            <li class="px-2 px-sm-0 px-md-1 px-xl-5  ml-0 ml-md-5  nav-li"><a href="domain-page.php"
                    class="px-3">Labour,Employment &
                    Industrial</a>
            </li>
            <li class="px-2 px-sm-0 px-md-1 px-xl-5 nav-li"><a href="domain-page1.php" class="px-3">Environmental,Health
                    & Safety</a>
            </li>
            <li class="px-2 px-sm-0 px-md-1 px-xl-5 nav-li"><a href="domain-page2.php" class="px-3">Fiscal,Corporate &
                    Commercial</a>
            </li>       
        </ul>   
    </div>
    <!-- <div id="elem" class="container-fluid nav_pill w-100">
  <label>
    <input type="radio" />View</label>
  <label>
    <input type="radio" />All</label>
  <label>
    <input type="radio" />New</label>
  <label>
    <input type="radio" />Unread</label>
  <label>
    <input type="radio" />Favorites</label>
  <label>
    <input type="radio" />Bulk Print</label>
  <label>
    <input type="radio" />Bulk Save</label>
  <label>
    <input type="radio" />Save Library</label>
</div> -->


</body>

</html>