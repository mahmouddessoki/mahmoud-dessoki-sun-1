<?php

    $developers = [
        [
          'name' => 'ahmed hamdy',
           'job' => 'front-end',
          'experience' => 3
         ],
      
         [
             'name' => 'mohammed shaker',
             'job' => 'back-end',
             'experience' => 2
         ],
      
         [
             'name' => 'ali hasan',
             'job' => 'full-stack',
             'experience' => 4
         ],
     ];
     

?>

<html lang="en">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <!--product table problem-->
        <div class="container">
            <table style="border : 1px solid black;">
                <tbody>
                <?php for ($i = 1; $i<=12; $i++) { ?>
                    <tr>
                        <?php for ($j = 1; $j<=12; $j++) { ?>
                            <td style="border : 1px solid black;"><?= "$j * $i = " ?><?= $i*$j ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
                
                </tbody>
            </table>
        </div>
        
        <hr>

        <!--card problem-->
        <div class="container py-5">
            <div class="row">
                
                <?php for ($i=0; $i < count($developers); $i++) { ?>
                    <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$developers[$i]['name'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?=$developers[$i]['job'] ?>
                            </h6>
                            <p class="card-text">
                                <?=$developers[$i]['experience'] ?>
                                years of experience
                            </p>
                        
                        </div>
                    </div>
                    </div>
                <?php } ?>
                
                
            </div>
        </div>
        




        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>