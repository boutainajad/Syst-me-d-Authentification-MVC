<?php

class User
{
    public function __construct(
        public ?int $id = null,
        public string $name = '',
        public string $email = '',
        public string $password = '',
        public int $role_id = 0
    ) {}
}
