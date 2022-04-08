<?php
// PRIMO SNACK
$totalMatchs = [
    [
        'home' => [
            'team' => 'Miami Heat',
            'score' => '75'
        ],
        'guest' => [
            'team' => 'Los Angeles Lakers',
            'score' => '110'

        ]
    ],
    [
        'home' => [
            'team' => 'Boston Celtics',
            'score' => '80'
        ],
        'guest' => [
            'team' => 'San Antonio Spurs',
            'score' => '55'

        ]
    ],
    [
        'home' => [
            'team' => 'Golden State Warriors',
            'score' => '71'
        ],
        'guest' => [
            'team' => 'Denver Nuggets',
            'score' => '90'

        ]
    ],
    [
        'home' => [
            'team' => 'New York Kniks',
            'score' => '30'
        ],
        'guest' => [
            'team' => 'Oklaoma City Thunder',
            'score' => '100'

        ]
    ]
];

$match = [];

for ($_i = 0; $_i < count($totalMatchs); $_i++) {
    $homeTeam = $totalMatchs[$_i]['home']['team'];
    $guestTeam = $totalMatchs[$_i]['guest']['team'];
    $homeScore = $totalMatchs[$_i]['home']['score'];
    $guestScore = $totalMatchs[$_i]['guest']['score'];

    $match .= "<li>$homeTeam - $guestTeam : $homeScore-$guestScore</li>";
}
