<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>ChrisNolandsSpace</title>
    <? foreach($featured as $r){
        $fp = $r->fp;
    };?>
    <style type="text/css">
        #Featured {background-image:url('<? echo base_url();echo $fp?>') }
    </style>
    <link href="<? echo base_url() ?>/css/bootstrap.css" rel="stylesheet" type="text/css"></script>
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