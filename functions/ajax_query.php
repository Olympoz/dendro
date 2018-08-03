<?

//ADD ACTION

add_action( 'wp_ajax_filter_actu', 'filter_actu' );
add_action( 'wp_ajax_nopriv_filter_actu', 'filter_actu' );

//LIST ACTION

function filter_actu() {

  echo "<div class='actualites_content' id='test_ajax'>";

    echo "bonjour";

  echo "</div>";

    // echo "<div class='actualites_tags'>";
    //
    //   echo "Projets";
    //
    // echo "</div>";
    //
    // echo "<div class='actualites_description'>";
    //
    //   echo "Le manoir de Fougères <br>";
    //   echo "Une demeure de Prestige";
    //
    // echo "</div>";
    //
    // echo "<div class='overlay'>";
    //
    //   echo "<div class='overlay_more'>";
    //
    //     echo "En savoir plus";
    //
    //     echo "<div class='overlay_dotted_up'></div>";
    //
    //     echo "<div class='overlay_dotted_down'></div>";
    //
    //   echo "</div>";
    //
    // echo "</div>";
    //
    // echo "<div class='overlay_brown'></div>";




};

?>
