<?php

declare(strict_types=1);

return [
    // Relation ID of the OpenstreetMap City
    'relationId' => 2805690,

    // Languages in which you want to extract Wiki informations
    'languages' => ['en', 'pl'],

    // Exclude datas from beeing extracted. Usefull to exclude streets at the edge of the city for example
    'exclude' => [
        'relation' => [],
        'way' => [
            /*
            15221322, // Half Included street
            */
        ],
    ],

    // Manualy assign gender to ways/relations (when there are no wikidata page for example)
    'gender' => [
        'relation' => [],
        'way' => [
            '63657846' => 'M', // Stanisława Dąbka - there are two of them
            '29468806' => 'M', // Roberta Kocha - unknown patron
            '23369480' => 'M', // Bohdana Zaleskiego - unknown patron, there are at least two
            '1159020446' => 'M', // Mikołaja Sieniawskiego - unknown, there are more
            '239165560' => 'M', // Stanisława Koniecpolskiego - unknown, there are more
            '239165561' => 'M', // Stanisława Żółkiewskiego - unknown, there are more
            '15276240' => 'M', // Aleksandra Ostrowskiego - unknown patron
            '17275284' => 'F', // Wandy - unknown patron
            '113983453' => 'M', // Władysława Jagiełły - not sure patron
            '16584770' => 'M', // Most Władysława Sikorskiego - unknown patron
            '188337233' => 'M', // Marcelego Bacciarellego - unknown patron
            '22661455' => 'M', // Zygmunta Sierakowskiego - unknown patron
            '27763310' => 'M', // Jana Szczyrki - unknown patron
            '24444619' => 'M', // Stefana Czarnieckiego - unknown patron
            '25522251' => 'M', // Andrzeja Struga - unknown patron
            '22635259' => 'M', // Piotra Czajkowskiego - unknown patron
            '112734355' => 'M', // Podpułkownika Stanisława Skarżyńskiego - unknown
            
            /*
            '12121212' => 'F', // Pia Mancini road
            '13131312' => 'M', // Mister nobody Street
            */
        ],
    ],

    // Array that defines what instances of Wikidata are considered "a person". (you can probably leave this as is)
    'instances' => [
        'Q5'        => true,  // human
        'Q2985549'  => true,  // mononymous person
        'Q20643955' => true,  // human biblical figure

        'Q8436'     => false, // family
        'Q101352'   => false, // family name
        'Q327245'   => false, // team
        'Q3046146'  => false, // married couple
        'Q13417114' => false, // noble family
    ],
];
