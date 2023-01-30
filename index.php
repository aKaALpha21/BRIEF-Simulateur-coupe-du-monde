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
            <h5 class="text-white h4"></h5>
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
    <form action="" method="POST">
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
                        <input type="text" placeholder="" name="mar">
                        <input type="text" placeholder="" name="croi">
                    </td>
                    <td><img src="pic/CROI.png" alt="CROI">Croatia</td>

                </tr>
                <tr>

                    <td><img src="pic/BLG.png" class="blg" alt="BLG">Belgium</td>
                    <td>
                        <input type="text" placeholder="" name="blg">
                        <input type="text" placeholder="" name="cana">
                    </td>
                    <td><img src="pic/cana.png" alt="cana">Canada</td>

                </tr>
                <tr>

                    <td><img src="pic/BLG.png" class="blg" alt="BLG">Belgium</td>
                    <td>
                        <input type="text" placeholder="" name="blg">
                        <input type="text" placeholder="" name="mar">
                    </td>
                    <td><img src="pic/MAR.png" alt="mar">Morocco</td>
                </tr>
                <tr>

                    <td><img src="pic/croi.png" alt="croi">Croatia</td>
                    <td>
                        <input type="text" placeholder="" name="croi">
                        <input type="text" placeholder="" name="cana">
                    </td>
                    <td><img src="pic/cana.png" alt="cana">Canada</td>
                </tr>
                <tr>

                    <td><img src="pic/croi.png" alt="croi">Croatia</td>
                    <td>
                        <input type="text" placeholder="" name="croi">
                        <input type="text" placeholder="" name="blg">
                    </td>
                    <td><img src="pic/BLG.png" class="blg" alt="blg">Belgium</td>
                </tr>
                <tr>

                    <td><img src="pic/cana.png" alt="cana">Canada</td>
                    <td>
                        <input type="text" placeholder="" name="cana">
                        <input type="text" placeholder="" name="mar">
                    </td>
                    <td><img src="pic/MAR.png" alt="mar">Morocco</td>
                </tr>
            </tbody>
        </table>
        </form>
    </section>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Score</th>
                    <th scope="col">PTS.</th>
                    <th scope="col">PAR</th>
                    <th scope="col">GAN</th>
                    <th scope="col">EMP</th>
                    <th scope="col">PER</th>
                    <th scope="col">G.F</th>
                    <th scope="col">G.C</th>
                    <th scope="col">+/-</th>
                </tr>
            </thead>
            <?php 
           
            // // /////////////affichage/////////////////////
  echo"
   <tbody name=''>
  
   <tr>
   <tr>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       </tr>
       <tr>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       </tr>
       <tr>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       </tr>
       <tr>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
       <td scope='col'></td>
       <td scope='col'>eq</td>
     </tr>
   </tbody>"
  ?>

        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>