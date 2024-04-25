<?php

return [
    [
        'title' => 'Dashboard',
        'routeName' => 'admin.dashboard',
        'icon' => '<i class="ti ti-home"></i>',
        'roles' => [
            App\Enums\Admin\AdminRoles::SuperAdmin,
            App\Enums\Admin\AdminRoles::Admin
        ],
        'sub' => []
    ],
    [
        'title' => 'page',
        'routeName' => null,
        'icon' => '<i class="ti ti-notebook"></i>',
        'roles' => [],
        'sub' => [
            [
                'title' => 'add',
                'routeName' => 'admin.page.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [
                    App\Enums\Admin\AdminRoles::SuperAdmin,
                    App\Enums\Admin\AdminRoles::Admin
                ],
            ],
            [
                'title' => 'list',
                'routeName' => 'admin.page.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
            ]
        ]
    ],
    [
        'title' => 'Blog',
        'routeName' => null,
        'icon' => '<i class="ti ti-article"></i>',
        'roles' => [],
        'sub' => [
            [
                'title' => 'addPost',
                'routeName' => 'admin.blog.post.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [
                    App\Enums\Admin\AdminRoles::SuperAdmin,
                    App\Enums\Admin\AdminRoles::Admin
                ],
            ],
            [
                'title' => 'post',
                'routeName' => 'admin.blog.post.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
            ],
            [
                'title' => 'category',
                'routeName' => 'admin.blog.category.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [
                    App\Enums\Admin\AdminRoles::SuperAdmin,
                    App\Enums\Admin\AdminRoles::Admin
                ],
            ],
            [
                'title' => 'tag',
                'routeName' => 'admin.blog.tag.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [
                    App\Enums\Admin\AdminRoles::SuperAdmin,
                    App\Enums\Admin\AdminRoles::Admin
                ],
            ]
        ]
    ],
    [
        'title' => 'Baiviet',
        'routeName' => null,
        'icon' => '<i class="ti ti-article"></i>',
        'roles' => [],
        'sub' => [
            [
                'title' => 'Them Bai Viet',
                'routeName' => 'admin.Baiviet.Baidang.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [
                    App\Enums\Admin\AdminRoles::SuperAdmin,
                    App\Enums\Admin\AdminRoles::Admin
                ],
            ],
            [
                'title' => 'post',
                'routeName' => 'admin.Baiviet.Baidang.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
            ],
            [
                'title' => 'danhmuc',
                'routeName' => 'admin.Baiviet.Danhmuc.create',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [
                    App\Enums\Admin\AdminRoles::SuperAdmin,
                    App\Enums\Admin\AdminRoles::Admin
                ],
            ],
        ]
    ],
    [
        'title' => 'slider',
        'routeName' => null,
        'icon' => '<i class="ti ti-slideshow"></i>',
        'roles' => [],
        'sub' => [
            [
                'title' => 'add',
                'routeName' => 'admin.slider.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
            ],
            [
                'title' => 'list',
                'routeName' => 'admin.slider.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
            ],
        ]
    ],
    [
        'title' => 'Thanh Vien',
        'routeName' => null,
        'icon' => '<i class="ti ti-users"></i>',
        'roles' => [],
        'sub' => [
            [
                'title' => 'add',
                'routeName' => 'admin.users.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
            ],
            [
                'title' => 'list',
                'routeName' => 'admin.users.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
            ],
        ]
    ],

    //employee
[
    'title' => 'QL Nhan Vien',
    'routeName' => null,
    'icon' => '<i class="ti ti-users"></i>',
    'roles' => [],
    'sub' => [
        [
            'title' => 'Thêm Nhan Vien',
            'routeName' => 'admin.employee.create',
            'icon' => '<i class="ti ti-plus"></i>',
            'roles' => [],
        ],
        [
            'title' => 'DS Nhan Vien',
            'routeName' => 'admin.employee.index',
            'icon' => '<i class="ti ti-list"></i>',
        ],
    ]
],

    //end
    [
        'title' => 'admin',
        'routeName' => null,
        'icon' => '<i class="ti ti-user-cog"></i>',
        'roles' => [
            App\Enums\Admin\AdminRoles::SuperAdmin,
            App\Enums\Admin\AdminRoles::Admin
        ],
        'sub' => [
            [
                'title' => 'add',
                'routeName' => 'admin.admin.create',
                'icon' => '<i class="ti ti-plus"></i>',
                'roles' => [],
            ],
            [
                'title' => 'list',
                'routeName' => 'admin.admin.index',
                'icon' => '<i class="ti ti-list"></i>',
                'roles' => [],
            ],
        ]
    ],
    [
        'title' => 'setting',
        'routeName' => null,
        'icon' => '<i class="ti ti-settings"></i>',
        'roles' => [
            App\Enums\Admin\AdminRoles::SuperAdmin,
            App\Enums\Admin\AdminRoles::Admin
        ],
        'sub' => [
            [
                'title' => 'generate',
                'routeName' => 'admin.setting.general',
                'icon' => '<i class="ti ti-tool"></i>',
                'roles' => [],
            ],
        ]
    ],

];
