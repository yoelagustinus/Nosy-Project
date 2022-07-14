<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>String Count</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="">                
                    <img src="https://www.warungsatekamu.org/wp-content/uploads/2021/09/logo-Satee-02.png" alt="" width="50rem" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="count-string.php">String Count</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container" style="padding-top: 2rem;">
        <?php
            $batas_bawah = 18;
            $batas_atas = 35;

            echo "<p>
            Panjang Kata Terbaik adalah $batas_bawah - $batas_atas Kata.
            </p>";
        ?>
            
            <form action="" method="post">

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="text_input" style="height: 250px"></textarea>
                    <label for="floatingTextarea2">Input ur Text for Count..</label>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Check">
            </form>

        </div>

        <?php
            if(isset($_POST["submit"])){
                $in_string = $_POST['text_input'];
                $ex_string = explode(" ", $in_string);

                $len_string = count($ex_string);
        ?>
        <div class="container">
            <p>
                <?php

                    echo "Panjang kata = " . $len_string;

                    if($len_string>=$batas_bawah && $len_string<=$batas_atas){
                        $color="green";
                    }else{
                        $color="red";
                    }

                    if($len_string<=$batas_bawah){
                        $abs_value = abs($len_string-$batas_bawah);
                        $status="Kurang $abs_value kata";    
                    }else if($len_string>=$batas_atas){
                        $abs_value = abs($len_string-$batas_atas);
                        $status="Lebih $abs_value kata";
                    }else{
                        $status="Jumlah Kata sudah sesuai";
                    }
                    
                ?>
            </p>
            <div class="result_string" style="background-color:<?php echo $color?>; width: 50rem; padding: 0 3rem 0 3rem;">
            <?php
                echo $status;
            ?>

            </div>
        </div>
        <?php

            }
            

            
        ?>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    
</html>

<script type='text/javascript'> 
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>