<?php

use Kirby\Cms\App as Kirby;
use Kirby\Filesystem\F;

F::loadOnce(kirby()->root('site') . '/helpers.php');

Kirby::plugin('hananils/method-folder', [
    'collectionMethods' => F::load(
        kirby()->root('site') . '/methods/collection.php',
        []
    ),
    'fieldMethods' => F::load(kirby()->root('site') . '/methods/field.php', []),
    'blockMethods' => F::load(kirby()->root('site') . '/methods/block.php', []),
    'blocksMethods' => F::load(
        kirby()->root('site') . '/methods/blocks.php',
        []
    ),
    'layoutMethods' => F::load(
        kirby()->root('site') . '/methods/layout.php',
        []
    ),
    'layoutsMethods' => F::load(
        kirby()->root('site') . '/methods/layouts.php',
        []
    ),
    'layoutColumnMethods' => F::load(
        kirby()->root('site') . '/methods/layout-column.php',
        []
    ),
    'fileMethods' => F::load(kirby()->root('site') . '/methods/file.php', []),
    'filesMethods' => F::load(kirby()->root('site') . '/methods/files.php', []),
    'pageMethods' => F::load(kirby()->root('site') . '/methods/page.php', []),
    'pagesMethods' => F::load(kirby()->root('site') . '/methods/pages.php', []),
    'siteMethods' => F::load(kirby()->root('site') . '/methods/site.php', []),
    'userMethods' => F::load(kirby()->root('site') . '/methods/user.php', []),
    'usersMethods' => F::load(kirby()->root('site') . '/methods/users.php', [])
]);
