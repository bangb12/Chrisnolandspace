<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>ChrisNolandsSpace</title>
    <!--Uses data from controller/model to set background image of the featured project area-->
    <? foreach($featured as $r){
        $fp = $r->fp;
    };?>
    <style type="text/css">
        #Featured {background-image:url('<? echo base_url();echo $fp?>') }
    </style>
    <link href="<? echo base_url() ?>/css/bootstrap.css" rel="stylesheet" type="text/css"></script>
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                
        ga('create', 'UA-XXXX-Y');
        ga('send', 'pageview');
    </script>
<!-- End Google Analytics -->
</head>
<body>
    <div class="container-fluid">
        <header>
            <h1>Chris Noland's Space</h1>
            <ul>
                <li><h3><a href="<? echo base_url() ?>?action=home">Home</a></h3></li>
                <li><h3><a href="http://localhost:8888/Chrisnolandspace/index.php/pages/portfolio/">Portfolio</a></h3></li>
                <li><h3><a href="http://localhost:8888/Chrisnolandspace/index.php/pages/about_me">About</a></h3></li>
            </ul>
        </header>
        <section>
            <div id="Featured">
                <div id="flist">
                    <ul>
                        <!---Uses data from controller/model to echo out correct featured project text--->
                        <?  foreach($featured as $r){
                                echo '<h1>';
                                echo $r->pname;
                                echo '</h1>';
                                echo '<p>';
                                echo $r->description;
                                echo '</p>';
                            };
                        ?>
                        <p><a href="http://localhost:8888/Chrisnolandspace/index.php/pages/portfolio/">More Projects</a></p>
                    </ul>
                </div>
            </div>
        </section>