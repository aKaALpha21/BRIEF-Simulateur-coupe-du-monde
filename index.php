<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>FIFA world cup</title>
</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h5 class="number-white h4"></h5>
            <h4><a href="index.html">Home</a></h4>
            <h4><a href="food.html">Other Groupes</a></h4>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="pic/FIFAWORLDCUP.png" alt="FIFAWORLDCUP" />
        </div>
    </nav>
    <section>
        <form action="" method="GET">
            <table id="tab1" class="table table-bordered">
                <thead>
                    <tr>

                        <th class="th">Equipes</th>
                        <th class="th">Score</th>
                        <th class="th">Equipes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td><img src="pic/MAR.png" alt="MAR">Morocco</td>
                        <td>
                            <input type="number" placeholder="" name="1">
                            <input type="number" placeholder="" name="2">
                        </td>
                        <td><img src="pic/CROI.png" alt="CROI">Croatia</td>

                    </tr>
                    <tr>

                        <td><img src="pic/BLG.png" class="blg" alt="BLG">Belgium</td>
                        <td>
                            <input type="number" placeholder="" name="3">
                            <input type="number" placeholder="" name="4">
                        </td>
                        <td><img src="pic/cana.png" alt="cana">Canada</td>

                    </tr>
                    <tr>

                        <td><img src="pic/BLG.png" class="blg" alt="BLG">Belgium</td>
                        <td>
                            <input type="number" placeholder="" name="5">
                            <input type="number" placeholder="" name="6">
                        </td>
                        <td><img src="pic/MAR.png" alt="mar">Morocco</td>
                    </tr>
                    <tr>

                        <td><img src="pic/croi.png" alt="croi">Croatia</td>
                        <td>
                            <input type="number" placeholder="" name="7">
                            <input type="number" placeholder="" name="8">
                        </td>
                        <td><img src="pic/cana.png" alt="cana">Canada</td>
                    </tr>
                    <tr>

                        <td><img src="pic/croi.png" alt="croi">Croatia</td>
                        <td>
                            <input type="number" placeholder="" name="9">
                            <input type="number" placeholder="" name="10">
                        </td>
                        <td><img src="pic/BLG.png" class="blg" alt="blg">Belgium</td>
                    </tr>
                    <tr>

                        <td><img src="pic/cana.png" alt="cana">Canada</td>
                        <td>
                            <input type="number" placeholder="" name="11">
                            <input type="number" placeholder="" name="12">
                        </td>
                        <td><img src="pic/MAR.png" alt="mar">Morocco</td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" name="submit" class=" m-3 " />
        </form>
    </section>
    <section>
        <?php
    if ( isset( $_GET['submit'] ) ) {
    
    $maro = $_GET['1']; 
    $croi = $_GET['2']; 
    $belg = $_GET['3']; 
    $cana = $_GET['4']; 
    $belg2 = $_GET['5']; 
    $maro2 = $_GET['6']; 
    $croi2 = $_GET['7']; 
    $cana2  = $_GET['8']; 
    $cana3= $_GET['9']; 
    $maro3 = $_GET['10']; 
    $croi3 = $_GET['11']; 
    $belg3 = $_GET['12'];


    //counter 
    //tables
    // $arrayName = array('' => , );
    $point = array("MAROC" => 0, "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0); 
    $matches = array("MAROC" => 0, "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $gagnant = array('MAROC' => 0, 'CROATIE' => 0 , 'CANADA' => 0 , 'BELQIQUE' => 0);
    $null = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $defaite = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goalfor = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goalin = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);

    

    //add point selon counter by if
    if($maro!="" && $croi!=""){
        
        $matches["MAROC"] += 1;
        $matches["CROATIE"] += 1;
        $goalfor["MAROC"] += $maro ;
        $goalfor["CROATIE"] += $croi ;
        $goalin["MAROC"] += $croi ;
        $goalin["CROATIE"] += $maro ;

        if($maro > $croi ){
            $point["MAROC"] += 3;
            $gagnant["MAROC"] += 1;
            $defaite["CROATIE"] += 1;

        }
        elseif ($maro < $croi ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["MAROC"] += 1;

        }
        else {
            $point["MAROC"] += 1;
            $point["CROATIE"] += 1;
            $null["MAROC"] += 1;
            $null["CROATIE"] += 1;

        }
    }
    
    if($belg!="" && $cana!=""){

        $matches["CANADA"] += 1;
        $matches["BELQIQUE"] += 1;
        $goalfor["CANADA"] += $cana ;
        $goalfor["BELQIQUE"] += $belg ;
        $goalin["BELQIQUE"] += $cana ;
        $goalin["CANADA"] += $belg ;

        if($belg > $cana ){
            $point["BELQIQUE"] += 3;
            $gagnant["BELQIQUE"] += 1;
            $defaite["CANADA"] += 1;
            
        }
        elseif ($belg < $cana ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["BELQIQUE"] += 1;
        }
        else {
            $point["BELQIQUE"] += 1;
            $point["CANADA"] += 1;
            $null["BELQIQUE"] += 1;
            $null["CANADA"] += 1;
        }
    }


    if($maro2!="" && $belg2!=""){

        $matches["MAROC"] += 1;
        $matches["BELQIQUE"] += 1;
        $goalfor["MAROC"] += $maro2 ;
        $goalfor["BELQIQUE"] += $belg2 ;
        $goalin["MAROC"] += $belg2 ;
        $goalin["BELQIQUE"] += $maro2 ;


        if($maro2 > $belg2 ){
            $point["MAROC"] += 3;
            $gagnant["MAROC"] += 1;
            $defaite["BELQIQUE"] += 1;

        }
        elseif ($maro2 < $belg2 ){
            $point["BELQIQUE"] += 3;
            $gagnant["BELQIQUE"] += 1;
            $defaite["MAROC"] += 1;

        }
        else {
            $point["MAROC"] += 1;
            $point["BELQIQUE"] += 1;
            $null["MAROC"] += 1;
            $null["BELQIQUE"] += 1;

        }
    }
    
    if($croi2!="" && $cana2!=""){

        $matches["CANADA"] += 1;
        $matches["CROATIE"] += 1;
        $goalfor["CANADA"] += $cana2 ;
        $goalfor["CROATIE"] += $croi2 ;
        $goalin["CANADA"] += $croi2 ;
        $goalin["CROATIE"] += $cana2 ;

        if($croi2 > $cana2 ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["CANADA"] += 1;
        }
        elseif ($croi2 < $cana2 ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["CROATIE"] += 1;
            
        }
        else {
            $point["CROATIE"] += 1;
            $point["CANADA"] += 1;
            $null["CROATIE"] += 1;
            $null["CANADA"] += 1;
        }
    }

    if($maro3!="" && $cana3!=""){

        $matches["MAROC"] += 1;
        $matches["CANADA"] += 1;
        $goalfor["MAROC"] += $maro3 ;
        $goalfor["CANADA"] += $cana3 ;
        $goalin["MAROC"] += $cana3 ;
        $goalin["CANADA"] += $maro3 ;

        if($maro3 > $cana3 ){
            $point["MAROC"] += 3;
            $gagnant["MAROC"] += 1;
            $defaite["CANADA"] += 1;

        }
        elseif ($maro3 < $cana3 ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["MAROC"] += 1;

        }
        else {
            $point["MAROC"] += 1;
            $point["CANADA"] += 1;
            $null["MAROC"] += 1;
            $null["CANADA"] += 1;

        }
    }
    
    if($belg3!="" && $croi3!=""){

        $matches["CROATIE"] += 1;
        $matches["BELQIQUE"] += 1;
        $goalfor["CROATIE"] += $croi3 ;
        $goalfor["BELQIQUE"] += $belg3 ;
        $goalin["BELQIQUE"] += $croi3 ;
        $goalin["CROATIE"] += $belg3 ;

        if($belg3 > $croi3 ){
            $point["BELQIQUE"] += 3;
            $gagnant["BELQIQUE"] += 1;
            $defaite["CROATIE"] += 1;
        }
        elseif ($belg3 < $croi3 ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["BELQIQUE"] += 1;
        }
        else {
            $point["BELQIQUE"] += 1;
            $point["CROATIE"] += 1;
            $null["BELQIQUE"] += 1;
            $null["CROATIE"] += 1;
        }
    }

    function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? 1 : -1;
    }

    uasort($point, 'cmp');
    // print_r($point);

     // those final counter into variables
    $Mfor = $goalfor["MAROC"] ;
    $Min = $goalin["MAROC"] ;
    $CRfor = $goalfor["CROATIE"];
    $CRin = $goalin["CROATIE"];
    $CNfor = $goalfor["CANADA"];
    $CNin = $goalin["CANADA"];
    $Bfor = $goalfor["BELQIQUE"];
    $Bin = $goalin["BELQIQUE"];

    // those final counter into variables 
    $diffEQ1 = $Mfor - $Min ;
    $diffEQ2 = $CRfor - $CRin ;
    $diffEQ3 = $CNfor - $CNin ;
    $diffEQ4 = $Bfor - $Bin ;


    echo "
    <table class='tab1'>
    <tr>
    <th >Score</th>
    <th >PTS.</th>
    <th >PAR</th>
    <th >GAN</th>
    <th >EMP</th>
    <th >PER</th>
    <th >G.F</th>
    <th >G.C</th>
    <th >+/-</th>

    </tr>";

    // foreach ($variable as $key => $value) {
    //     # code...
    // }
    foreach ($point as $key => $value ) {
        echo "
        <tr>
        <td>$key</td>
        <td>". $point[$key] ."</td>
        <td>". $matches[$key] ."</td>
        <td>". $gagnant[$key] ."</td>
        <td>". $null[$key] ."</td>
        <td>". $defaite[$key] ."</td>
        <td>". $goalfor[$key] ."</td>
        <td>". $goalin[$key] ."</td>
        <td></td>
    </tr>
        ";
    }
    echo 
    "
    </table>
    " ;
}

?>

        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>