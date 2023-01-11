
<!--
<center>    

    <div class = "bloque" style = "break-word;">
        <h2>Ortega Zacarias Miguel Angel</h2> 
        <hr> 
    </div>
</center>   
-->
<div class = "bloque">
    
    <h3>Work history.</h3>
    <?php
        foreach($works as $work)
            echo 
            "<p style = 'margin:0'>
                $work
            </p>";
    ?>
    <h3>Recognition.</h3>
    <ul>
        <?php
        foreach($recognition as $reco)
            echo
            "<li>
                $reco
            </li>";
        ?>
    </ul>
    <hr>
    
    <h3>Training.</h3>
    <div class = "bloque">
    <?php
        $kch = array_keys($Training);
        foreach($kch as $k_chool)
            if($k_chool == "SCHOLL")
            {
                $scholl = array_keys($Training[$k_chool]);
                foreach($scholl as $schoolin)
                    echo 
                    "<h5 style = 'margin:0'>
                        $schoolin
                    </h5>
                    <p style = 'margin:0'>
                        &nbsp;&nbsp;&nbsp;&nbsp; {$Training[$k_chool][$schoolin]}
                    </p>";
            }
            else
            {
                foreach($Training[$k_chool] as $k_res)
                    echo
                    "<p>
                        $k_res
                    </p>";
            }
    ?>
    </div>
    <a href = "https://drive.google.com/drive/folders/1b8PHNKeIooE5gfqyCYPUHVPEHWBR2V4V?usp=sharing" style = 'color: #000000'; target="_blank">
            <h3>Certificate.</h3>
    </a> <!--icon-->
    
    <ul>
        <?php
            foreach($Certificate as $cer)
                echo
                "<li>
                    $cer
                </li>";
        ?>
    </ul>

</div>