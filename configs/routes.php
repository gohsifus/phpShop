<?php

return array(

    'registration' => 'user/registration',

    'authorization' => 'user/authorize',

    'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',

    'news' => 'news/index',

    'goods/([a-z]+)/([0-9]+)' => 'goods/view/$1/$2',

    'cabinet' => 'cabinet/index',

    'logout' => 'user/logout',

    '' => 'goods/index',

);
