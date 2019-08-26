<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Post',
        'description' => 'Bài viết'
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'ID',
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'Tiêu đề bài viết',
            ],
            'description' => [
                'type' => Type::string(),
                'description' => 'Mô tả bài viết',
            ],
            'content' => [
                'type' => Type::string(),
                'description' => 'Nội dung bài viết',
            ],

        ];
    }
}
