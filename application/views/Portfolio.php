<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Projects - ChrisNoland'sSpace</title>
    <link href="../../../css/bootstrap.css" rel="stylesheet"></script>
</head>
<body>
    <div class="container-fluid">
        <?
            $this->load->view('header');
        ?>
        <section>
            <div class="ProjectContainer">
                <!------  This will be created through php coding once the admin panel is implemented   ----->
                <img src="../../../img/portfolio/p1s.jpg" alt="" />
                <h2>Project 1</h2>
                <p><i>A small game created to show my skills in Adobe Flash. All assets were shaded and all code was done by me</i></p>
                <p><a>More Details....</a></p>
            </div>
            <div class="ProjectContainer">
                <img src="../../../img/portfolio/p2s.jpg" alt="" />
                <h2>Project 2</h2>
                <p><i>An application I created using a movie database API. You can search for movies and get info.</i></p>
                <p><a>More Details....</a></p>
            </div>
        </section>
        <?
            $this->load->view('footer');
        ?>
    </div>
</body>
</html>