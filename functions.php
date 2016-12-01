<?php

function render_aggregate_transfers()
{
    $years = ['2016', '2015', '2014'];

    foreach ($years as $year) {
        printf('<h2>%s</h2>', $year);
        for ($i = 0; $i < 4; $i++) {
            require('includes/transfer.php');
        }
    }
}