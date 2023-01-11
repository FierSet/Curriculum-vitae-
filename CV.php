<!DOCTYPE html>
<?php
    include('datos.php');
?>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="./CSS/CV.css" />
        <link rel="stylesheet" type="text/css" href="./CSS/tabla.css" />
        <script src="https://kit.fontawesome.com/18b65a3ec1.js" crossorigin="anonymous"></script><!--icon-->
        <title>CV</title>
    </head>

    <body>
        <center>
            
           <div class = "main-box">
               
                <div class = "left-box"> <!--left-box-->
                    <center>
                        <div class = "bloque" style = "padding: 10px;">
                            <img src = "<?php echo $datos_p["nombre"][0] ?>" width = "160"> 
                        </div>
                    </center>
                    
                    <center>    
        
                        <div class = "bloque" style = "break-word; color: #FFFFFF; font-size: 130%;">
                            <h2>
                                <?php echo $datos_p["nombre"][1] ?>
                            </h2> 
                            <hr> 
                        </div>
                    </center>  
                    <?php
                        # data personal
                        include ('data_personal_izq.php');
                        #end data personal
                    ?>
                </div> <!--end left-box-->
            
                <div class = "rigth-box"> <!--rigth-box-->
                    <?php
                        # der box
                        include ('der_box.php');
                        #end der box
                    ?>
                </div> <!--end rigth-box-->
                
           </div>
           
        </center>    
    </body>

</html>