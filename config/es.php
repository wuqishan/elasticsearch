<?php
return [
    'server' => [
        'host' => env('ELASTIC_HOST', '127.0.0.1'),
        'port' => env('ELASTIC_PORT', '9200'),
        'index' => env('ELASTIC_SEARCH_INDEX', 'tax'),
        'type' => env('ELASTIC_SEARCH_TYPE', 'documents'),
    ],
    



];