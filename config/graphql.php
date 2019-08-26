<?php

declare(strict_types=1);

return [

    'prefix' => 'graphql',
    'routes' => '{graphql_schema?}',
    'controllers' => \Rebing\GraphQL\GraphQLController::class . '@query',
    'middleware' => [],
    'route_group_attributes' => [],
    'default_schema' => 'default',
    'schemas' => [
        'default' => [
            'query' => [
                'users' => \App\GraphQL\Queries\UsersQuery::class,
                'posts' => \App\GraphQL\Queries\PostsQuery::class,
            ],
            'mutation' => [
            ],
            'middleware' => [],
            'method'     => ['get', 'post'],
        ],
    ],
    'types' => [
        'user' => \App\GraphQL\Types\UserType::class,
        'post' => \App\GraphQL\Types\PostType::class
    ],
    'lazyload_types' => false,
    'error_formatter' => ['\Rebing\GraphQL\GraphQL', 'formatError'],
    'errors_handler' => ['\Rebing\GraphQL\GraphQL', 'handleErrors'],
    'params_key'    => 'variables',
    'security' => [
        'query_max_complexity'  => null,
        'query_max_depth'       => null,
        'disable_introspection' => false,
    ],
    'pagination_type' => \Rebing\GraphQL\Support\PaginationType::class,
    'graphiql' => [
        'prefix'     => '/graphiql',
        'controller' => \Rebing\GraphQL\GraphQLController::class . '@graphiql',
        'middleware' => [],
        'view'       => 'graphql::graphiql',
        'display'    => env('ENABLE_GRAPHIQL', true),
    ],
    // 'defaultFieldResolver' => null,
    'headers' => [],
    'json_encoding_options' => 0,
];
