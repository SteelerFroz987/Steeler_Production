<?php
echo'<table class="tableau-style">';
        echo'<thead  align="center">';
            echo'<tr>';
                echo'<th>';
                    echo'Name';
                echo'</th>';
                echo'<th >';
                    echo'Price';
                echo'</th>';
       
            echo'</tr>';
        echo'</thead>';

        echo'<tbody>';
        foreach($get_all_works as $value){

                echo'<tr align="center">';
                    echo'<td data-label="name">';
                        echo$value['name'];
                    echo'</td>';
                    echo'<td data-label="price">';
                        echo$value['price'];
                    echo'</td>';
                   
                    echo'<td data-label="liens">';
                        echo "<a href='" . $value['liens'] . "'>" . $value['liens'] . "</a>";
                    echo'</td>';
                echo'</tr>';
        }
        echo'</tbody>';
    echo'</table>';
?>