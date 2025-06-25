<?php

use Kirby\Cms\App as Kirby;
use Kirby\Filesystem\F;

$root = kirby()->root('site');
F::loadOnce($root . '/helpers.php');

Kirby::plugin('hananils/method-folder', [
    /**
     * @ignore
     */
    'collectionMethods' => F::load($root . '/methods/collection.php', []),
    /**
     * @ignore
     */
    'fieldMethods' => F::load($root . '/methods/field.php', []),
    /**
     * @ignore
     */
    'blockMethods' => F::load($root . '/methods/block.php', []),
    /**
     * @ignore
     */
    'blocksMethods' => F::load($root . '/methods/blocks.php', []),
    /**
     * @ignore
     */
    'layoutMethods' => F::load($root . '/methods/layout.php', []),
    /**
     * @ignore
     */
    'layoutsMethods' => F::load($root . '/methods/layouts.php', []),
    /**
     * @ignore
     */
    'layoutColumnMethods' => F::load($root . '/methods/layout-column.php', []),
    /**
     * @ignore
     */
    'fileMethods' => F::load($root . '/methods/file.php', []),
    /**
     * @ignore
     */
    'filesMethods' => F::load($root . '/methods/files.php', []),
    /**
     * @ignore
     */
    'pageMethods' => F::load($root . '/methods/page.php', []),
    /**
     * @ignore
     */
    'pagesMethods' => F::load($root . '/methods/pages.php', []),
    /**
     * @ignore
     */
    'siteMethods' => F::load($root . '/methods/site.php', []),
    /**
     * @ignore
     */
    'userMethods' => F::load($root . '/methods/user.php', []),
    /**
     * @ignore
     */
    'usersMethods' => F::load($root . '/methods/users.php', [])
]);
