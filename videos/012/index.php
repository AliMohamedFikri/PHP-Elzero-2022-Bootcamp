<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 12 ==========
    ========================================
    ========================================
    Video: 012 – Arrays with Complex Tests
    ========================================


    Assignment 12 
        Task:
            1.You have the following output.
            2.You need to write the content of the array and print it to display this output.

    // Example Code:
    
    Array
    (
        [FrontEnd] => Array
            (
                [0] => HTML
                [1] => CSS
                [JS] => Array
                    (
                        [Vuejs] => Array
                            (
                                [2] => v2
                                [3] => v3
                            )

                        [0] => Reactjs
                        [1] => Svelte
                    )
            )

        [BackEnd] => Array
            (
                [0] => PHP
                [1] => MySQL
                [2] => Security
            )

        [0] => Git
        [1] => Github
        [Testing] => Array
            (
                [0] => Unit Testing
                [1] => End To End
                [2] => Integration
            )
    )
*/

// Example solutions:

$array = [
    'FrontEnd' => [
        'HTML',
        'CSS',
        'JS' => [
            'Vuejs' => [
                2 => 'v2',
                3 => 'v3',
            ],
            'Reactjs',
            'Svelte',
        ]
    ],
    'BackEnd' => [
        'PHP',
        'MySQL',
        'Security',
    ],
    'Git',
    'Github',
    'Testing' => [
        'Unit Testing',
        'End To End',
        'Integration',
    ],
];

echo '<pre>';
print_r($array);
echo '</pre>';