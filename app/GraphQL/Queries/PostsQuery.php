<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;


class PostsQuery extends Query
{
    protected $attributes = [
        'name' => 'posts',
        'description' => 'Danh sách bài viết',
        'model' => \App\Post::class
    ];

    public function type(): Type
    {
        return GraphQL::paginate('post');
        // return Type::listOf(Type::string());
    }

    public function args(): array
    {
        return [

        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {

        $posts = \App\Post::paginate(5, ['*'], 'page', 1);
        return $posts;
        // /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        // return [
        //     'The posts works',
        // ];
    }
}
