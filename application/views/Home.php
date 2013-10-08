<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home - ChrisNoland'sSpace</title>
    <link href="css/bootstrap.css" rel="stylesheet"></script>
</head>
<body>
    <div class="container-fluid">
        <?
            $this->load->view('header');
        ?>
        <section>
            <div id="Featured">
                <div id="flist">
                    <ul>
                        <li><h1>Eclipse</h1></li>
                        <li><p>This project was an assignment for a course over javascript at <b>Full Sail University</b>.
                        In it I had to take a pre-made store page and add it&#39s functionality, this included:
                        adding items to the cart by dragging them, being able to add to the quantity of the item,
                        deleting items one by one, and finally adding a way to clear the entire cart.
                        This was the final project in the javascript course. </p></li>
                        <li><p><a>More Projects</a></p></li>
                    </ul>
                </div>
            </div>
        </section>
        <?
            $this->load->view('footer');
        ?>
    </div>
</body>
</html>