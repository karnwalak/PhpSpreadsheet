<?php

return [
    [
        [['Hello', 'World']],
        [
            'Hello World',
            ' ',
            '',
        ],
    ],
    [
        [['Hello'], ['World']],
        [
            'Hello World',
            '',
            ' ',
        ],
    ],
    [
        [['To', 'be', 'or', 'not', 'to', 'be']],
        [
            'To be or not to be',
            ' ',
            '',
        ],
    ],
    [
        [
            ['1', '2', '3'],
            ['4', '5', '6'],
        ],
        [
            '1,2,3;4,5,6',
            ',',
            ';',
        ],
    ],
    [
        [
            ['Do', ' Or do not', ' There is no try', ' ', 'Anonymous'],
        ],
        [
            'Do. Or do not. There is no try. -Anonymous',
            ['.', '-'],
            '',
        ],
    ],
    [
        [['Do'], [' Or do not'], [' There is no try'], [' '], ['Anonymous']],
        [
            'Do. Or do not. There is no try. -Anonymous',
            '',
            ['.', '-'],
        ],
    ],
    [
        [
            ['Do', ' Or do not', ' There is no try', ' '],
            ['Anonymous'],
        ],
        [
            'Do. Or do not. There is no try. -Anonymous',
            '.',
            '-',
        ],
    ],
];
