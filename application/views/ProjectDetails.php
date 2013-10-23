        <section>
            <div id="MoreDetails">
		<!----This section uses the result of the controller/model to echo out the details for the specific project----->
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