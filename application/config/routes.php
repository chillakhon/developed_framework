<?php
return [
    // MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/index' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],
    'contact' => [
        'controller' => 'main',
        'action' => 'contact',
    ],
    'post' => [
        'controller' => 'main',
        'action' => 'post',
    ],
    // AdminController
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'admin/posts/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
];