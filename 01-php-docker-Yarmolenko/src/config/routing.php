<?php

return [
    'routing' => [
        '/' => \Apsl\Inf03\Webdev\Pages\HomePage::class,
        '/contact' => \Apsl\Inf03\Webdev\Pages\ContactPage::class,
        // TODO: add login page and secret page
    ],
    '_404' => \Apsl\Inf03\Webdev\Pages\Error404Page::class
];
