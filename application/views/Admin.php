<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Projects - ChrisNoland'sSpace</title>
    <link href="../../css/bootstrap.css" rel="stylesheet"></script>
</head>
<body>
    <div class="container-fluid">
        <?
            $this->load->view('header');
        ?>
        <section>
            <form method="post" id="newproject">
                <h2>Admin Controls</h2>
                <h3>Project Name:</h3> <input type="text" name="pname" />
                <h3>Description:</h3> <input type="text" name="description" />
                <h3>Large image'(840x340 pixels)'</h3> <input type="file" name="limage"/>
                <h3>Small Image'(340x310 pixels)'</h3> <input type="file" name="simage" />
                <h3>Long Description:</h3> <textarea rows="5"></textarea>
                <input type="submit" value="submit"/>
            </form>
        </section>
        <?
            $this->load->view('footer');
        ?>
    </div>
</body>
</html>