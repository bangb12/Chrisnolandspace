        <section>
                <!------Uses results from controller/model to echo out each project located in the database------>
                <?  foreach($projects as $r){
                    echo '<div class=ProjectContainer>';
                    echo '<h3>';
                    echo '<img src="';echo base_url();echo $r->simage;
                    echo '"/></h3><h2>';
                    echo $r->pname;
                    echo '</h2>';
                    echo '<p><em>';
                    echo $r->description;
                    echo '</em></p><p><a href=http://localhost:8888/Chrisnolandspace/index.php/portfolio_Controller/details/';
                    echo $r->id;
                    echo ">";
                    echo 'More Details...</a></p>';
                    echo '</div>';
                };
                ?>
        </section>
