<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/domain-page8.css">
<link rel="stylesheet" href="css/domain-page4.css">
<script>
</script>

<body>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 main-content2">
            <div class="col-12 heading text-center">
                Air (Prevention and Control of Pollution) Act, 1981
            </div>
            <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div>
                        <button type="button" class="btn btn-sm text-white button-head mx-2">View Full Act</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm text-white button-head mx-2">Related Central
                            Rules</button>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2">
                <div class="d-flex">
                    <div>
                        <div class="px-0 px-md-3">
                            <select class="acts" onfocus='this.size=5;' onblur='this.size=1;'
                                onchange='this.size=1; this.blur();'>
                                <option selected>Central Acts</option>
                                <option>Act1</option>
                                <option>Act2</option>
                                <option>Act3</option>
                                <option>Act4</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="px-0 px-md-3">
                            <select class="acts" onfocus='this.size=5;' onblur='this.size=1;'
                                onchange='this.size=1; this.blur();'>
                                <option selected>Central Rules</option>
                                <option>Act1</option>
                                <option>Act2</option>
                                <option>Act3</option>
                                <option>Act4</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="px-0 px-md-3">
                            <select class="acts" onfocus='this.size=5;' onblur='this.size=1;'
                                onchange='this.size=1; this.blur();'>
                                <option selected>State Acts</option>
                                <option>Act1</option>
                                <option>Act2</option>
                                <option>Act3</option>
                                <option>Act4</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="px-0 px-md-3">
                            <select class="acts" onfocus='this.size=5;' onblur='this.size=1;'
                                onchange='this.size=1; this.blur();'>
                                <option selected>State Rules</option>
                                <option>Act1</option>
                                <option>Act2</option>
                                <option>Act3</option>
                                <option>Act4</option>
                            </select>
                        </div>
                    </div>

                    <div class="px-0 px-md-3">
                        <div class="search-act col-12 md-col-6">
                            <input type="text" placeholder="search Acts" class="border-0 w-100 pr-4 search-input">
                            <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- center content ends -->
        <?php  include "footer.php"?>
    </div>
</body>

</html>