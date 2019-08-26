<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name'          => 'User',
        'description'   => 'Thông tin thành viên',
        'model'         => \App\User::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'ID',
                // Use 'alias', if the database column is different from the type name.
                // This is supported for discrete values as well as relations.
                // - you can also use `DB::raw()` to solve more complex issues
                // - or a callback returning the value (string or `DB::raw()` result)
                // 'alias' => 'user_id',
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'Tên',
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'Email',
            ],
            // Uses the 'getIsMeAttribute' function on our custom User model
            // 'isMe' => [
            //     'type' => Type::boolean(),
            //     'description' => 'True, if the queried user is the current user',
            //     'selectable' => false, // Does not try to query this from the database
            // ]
        ];
    }

    // If you want to resolve the field yourself, you can declare a method
    // with the following format resolve[FIELD_NAME]Field()
    // protected function resolveIdField($root, $args)
    // {
    //     return $root->id;
    // }
    // protected function resolveNameField($root, $args)
    // {
    //     return strtolower($root->name);
    // }
    // protected function resolveEmailField($root, $args)
    // {
    //     return strtolower($root->email);
    // }
}
