<div class = "bloque" style = "word-break: break-all; word-wrap: break-word;">

    <table style = "color: #FFFFFF">
        <?php
            $k = array_keys($datos_p);
            foreach($k as $key)
                if($key != 'nombre')
                    echo 
                        "<tr> <!-- $key -->
                            <td> 
                                {$datos_p[$key][0]}
                            <td>
                            
                            <td>
                                {$datos_p[$key][1]}
                            <td> 
                        </tr> <!-- end $key -->
                        <tr></tr>";
        ?>
    </table>
    
    <hr>                  
</div>

<div class = "bloque" style = "color: #FFFFFF;">
    <!--
    <h2>Profesional overview</h2>

    <p>
        <?php echo $overview ?>
    </p>
    <hr>
     -->
    <h2>Skill</h2>
    <ul>
        <?php
            foreach($Skill as $ks)
                echo 
                "<li>
                    $ks
                </li>";
        ?>
    </ul>

</div>