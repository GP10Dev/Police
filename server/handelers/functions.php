<?php
    function createsdref(){
        require "setcon.php";
    
        $sql = "SELECT COUNT(*) FROM `crimecase`;";
        $recon = mysqli_query($con, $sql );
        $row = mysqli_fetch_row($recon);

        require "endcon.php";

        return "sdref-" . date('d/m/Y')."-".$row[0];
    }

    function shownewref($ref){
        $redirect_url = '/another-page.php';
        $delay = 5; // in seconds

        echo '<script>
            alert("Your case ref is "'.$ref.');
            setTimeout(function() {
                window.location = "' . $redirect_url . '";
            }, ' . $delay * 1000 . ');
        </script>';
    }
?>