        <section>
            <form method="post" id="newproject" action="<? echo base_url(); ?>index.php/portfolio_Controller/portfolio/">
                <!---Form that allows you to add a new project--->
                <h2>Add New Project</h2>
                <h3>Project Name:</h3> <input type="text" name="pname" />
                <h3>Description:</h3> <input type="text" name="description" />
                <h3>Large image'(840x340 pixels)'</h3> <input type="text" name="limage"/>
                <h3>Small Image'(310x310 pixels)'</h3> <input type="text" name="simage" />
                <h3>Long Description:</h3> <textarea rows="5" name="ldescription"></textarea>
                <h3>Image Alt Tag</h3> <input type="text" name="imagealt" />
                <input type="submit" value="submit"/>
            </form>
            <form method="post" id="changefeatured" action="<? echo base_url(); ?>index.php/portfolio_Controller/featured/">
            <!----Form that allows you to change the featured project--->
                <h2>Change Featured Project</h2>
                <h3>Project Name:</h3> <input type="text" name="pname" />
                <h3>Description:</h3> <textarea rows="5" name="description"></textarea>
                <h3>Image Path'(ex: img/fp1.jpg - 960x450px)'</h3> <input type="text" name="fp"/>
                <input type="submit" value="submit"/>
            </form>
        </section>
