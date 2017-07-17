<?php
echo '<table>';
foreach ($betnow as $bn):
    echo '<tr>';
        echo '<td>'. date('d M Y, l, h:ia', strtotime($bn['date'])) .'</td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td>'. $bn['id'] .'</td>';
    echo '</tr>';
    echo '<tr>';
    $numbers = split(',', $bn['number']);
    $n = split(',', $bn['N units']);
    $s = split(',', $bn['S units']);
    $sum_n = 0;
    $sum_s = 0;
    for($i = 0; $i < count($numbers) - 1; $i++){
        echo '<tr>';
            echo '<td>'. $numbers[$i] .'</td>';
            echo '<td></td>';
            echo '<td>'. $n[$i] .'</td>';
            echo '<td>'. $s[$i] .'</td>';
            $sum_n += (int)$n[$i];
            $sum_s += (int)$s[$i];
        echo '</tr>';
    }
    echo '</tr>';
    echo '<tr>';
        echo '<td>Total</td>';
        echo '<td></td>';
        echo '<td>'. $sum_n .'</td>';
        echo '<td>'. $sum_s .'</td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td>'. ($sum_n * 1000 + $sum_s * 1000) .' ks</td>';
    echo '</tr>';
endforeach;
echo '</table>';
?>