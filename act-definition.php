<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>
<link rel="stylesheet" href="css/index.css">
<script>
$('#cmd').click(function() {
    console.log('fhskdjhsjkhk')
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});

</script>

<body>
    <div class="main-content">
        <!-- center content starts -->

        <div class="row px-4 px-md-5 py-5 main-content2" id="content">
            <!-- <a href="redirect-page.php"><button type="button" class="bg-bt text-white pr-2"><i class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Back </button></a>                 -->
            <div class="heading col-12 pb-4 d-flex justify-content-center">
                SELECTED ACT AND SELECTED YEAR (2007)
            </div>
            <div id="editor"></div>
            <button class="btn download mx-3 my-2 ml-auto" id="cmd"><i class="fa fa-download"></i> Download</button>
            <div class="col-12">
                <div class="border title">
                    <div class="border py-2 px-2">
                        Section Number: 1
                    </div>
                    <div class="border py-2 px-2">
                        Section Title: SHORT TITLE EXTEND AND COMMENCEMENT
                    </div>
                    <div class="border py-2 px-2">
                        Section Discription:
                        <li>(1) This Act may be called the Integrated Goods and Services Tax Act, 2017.

                        <li>(2) It shall extend to the whole of India except the State of Jammu and Kashmir.

                        <li>(3) It shall come into force on such date as the Central Government may, by notification in
                            the
                            Official Gazette, appoint:

                            Provided that different dates may be appointed for different provisions of this Act and any
                            reference in any such provision to the commencement of this Act shall be construed as a
                            reference to the coming into force of that provision.
                    </div>
                </div>

            </div>
        </div>
        <!-- center content ends -->
        <?php  include "footer.php"?>
    </div>
</body>

</html>