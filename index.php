<?php
echo '<table border=1>';
for ($i=100; $i<=500; $i +=100)
{
    echo '<tr>';

    for ($j=250; $j<=500; $j +=200 )
    {
        for ($k=300; $k<=600; $k += 100)
        {
            echo '<td style="background-color:RGB('.$i.', '.$j.', '.$k.');"> rgb('.$i.', '.$j.', '.$k.')</td>';
        }
    }

    echo '</tr>';
}
echo'</table>';
?>