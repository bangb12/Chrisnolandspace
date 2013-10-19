        <section>
                <!------  This will be created through php coding once the admin panel is implemented   ----->
                <?  foreach($projects as $r){
                    echo '<div class=ProjectContainer>';
                    echo '<h3>';
                    echo '<img src="';echo base_url();echo $r->simage;
                    echo '"/></h3><h2>';
                    echo $r->pname;
                    echo '</h2>';
                    echo '<p><em>';
                    echo $r->description;
                    echo '</em></p><p><a href="?action=details">';
                    echo 'More Details...</a></p>';
                    echo '</div>';
                };
                ?>
        </section>
