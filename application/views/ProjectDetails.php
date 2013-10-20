        <section>
            <div id="MoreDetails">
                <? foreach($result as $r){
                    echo '<h3>';
                    echo '<img src="';echo base_url();echo $r->limage;
                    echo '"/></h3><h2>';
                    echo $r->pname;
                    echo '</h2>';
                    echo '<p><em>';
                    echo $r->ldescription;
                    echo '</em></p>';
		}
                ?>
            </div>
        </section>