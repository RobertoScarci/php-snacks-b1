<?php

    $match = [
        [
            "team1" => "Virtus Bologna",
            "team2" => "Olimpia Milano",
            "score1" => 80,
            "score2" => 58
        ],
        [
            "team1" => "Fortitudo Bologna",
            "team2" => "Venezia",
            "score1" => 77,
            "score2" => 69
        ],
        [
            "team1" => "Legnano",
            "team2" => "Brindisi",
            "score1" => 67,
            "score2" => 59
        ]
    ];
?>

<div>
    <ul>
        <?php foreach($match as $match) { ?>
            <li>
                <?php
                    echo $match['team1'] . " - ";
                    echo $match['team2'] . " - ";
                    echo $match['score1'] . " - ";
                    echo $match['score2'] . " - ";
                ?>
            </li>
        <?php } ?>
    </ul>
</div>