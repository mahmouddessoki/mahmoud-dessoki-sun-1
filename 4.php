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
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>