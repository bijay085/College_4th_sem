<!DOCTYPE html>
<!-- we use JQUERY AJAX to get another website/webpage data in own page without reloading -->
<!-- we can make it index.php then we can write data.php we need to open xamp but if we do idex.html we dont need to open xampp -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script src="jquery-3.7.1.min.js" type="text/javascript"></script>
</head>

<body>
    <h1>AJAX</h1>
    <p>AJAX stands for "Asynchronous Java script and XML"</p>

    <div id="root"> </div>
    <a href="#" title="Load More" id="js-load-more">Load more</a>
    <?php  
    // changing data from array to string 
    $array = ["yes", "no"];  //array
    $arr_res = implode(", ", $array); //change to string 
    //we can use explode() to change data from string to array 
    ?>

    <script type="text/javascript">

        /**
         * jQuery AJAX
         * 
         * starting:jQuery or $
         * jQuery always use CSS selectors to get DOM element
         */

        let root = jQuery("#root"),
            jsLoadMore = jQuery("#js-load-more");

        //we want to show jquery but after clicking on load more
        jsLoadMore.on("click", function (e) {
            e.preventDefault(); //prevent page reloading after clicking and load more 


            // $.ajax({}); //starting point or we can do this like ,
            jQuery.ajax({
                url: 'data.php',  //if we want to give full path we need to give path from localhost browser. http://localhost/ajax/data.php
                method: 'GET', //if there will be post it will be different way
                type: 'JSON',
                data: {'tbl_user_test':['user023','user123']}
                success: function (response) {
                    console.log(response);
                    root.append(response);

                }
            });
        });

        /**
         * if there is "POST" instead of "GET"
         * -Method:POST
         * -data: {...} //data attributes will be there to pass data on mentioned url/path
         */

    </script>
</body>

</html>