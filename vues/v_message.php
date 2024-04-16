<?php
if(isset($_GET['message'])){
    $message = $resultat = str_replace("_", " ", $_GET['message']);
    echo '<div class="d-flex justify-content-center align-items-center mt-5"><div id="alertDate" class="alert alert-warning w-50" role="alert">' . $message . '</div></div>';
}
?>