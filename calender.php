<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
            $hari = date("d") ; 
            $bulan = date("m") ; 
            $tahun = date ("Y") ; 
            $jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
            echo date('F Y');
        ?>

        <table>
        <hr width="200" align = left>
        <td align = center><font color = "#FF0000">Sun</font></td> 
        <td align = center>Mon</td> 
        <td align = center>Tue</td> 
        <td align = center>Wed</td> 
        <td align = center>Thu</td> 
        <td align = center>Fri</td> 
        <td align = center>Sat</td>
        </tr>
          
        <?php
            $s = date("w",mktime(0,0,0,$bulan,1,$tahun));
            for($ds=1;$ds<=$s;$ds++){ 
                echo "<td></td>"; 
            }
         
            for($d=1;$d<=$jumlahhari;$d++){
                if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 0){ 
                    echo "<tr>" ;  
                }
            
            $warna = "#000000";
            
            if(date("l",mktime(0,0,0,$bulan,$d,$tahun)) == "Sunday"){$warna = "#FF0000";} 
            echo "<td align=center valign=middle> <span style= \"color:$warna\" >$d</span></td>";  
            if(date("w",mktime(0,0,$bulan,$d,$tahun)) == 7) { echo "</tr>"; }
        }
        echo '</tabel>' ;
        ?>   
    </body>
</html>