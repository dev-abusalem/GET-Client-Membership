<?php
get_header();
?>





<?php


while (have_posts()) :
    the_post();

?>

    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="_pagebody " style="padding-top:50px; padding-bottom:100px ; margin:20px 0px">

                        <h2><?php
                            the_title()
                            ?></h2>
                        <hr>

                        <?php
                        the_content()
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
endwhile;

?>


<?php
get_footer()
?>