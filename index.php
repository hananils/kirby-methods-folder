<?php

Kirby::plugin('hananils/missing-link', [
    'collectionMethods' => F::load(kirby()->root('site') . '/methods/collection.php', []),
    'fieldMethods' => F::load(kirby()->root('site') . '/methods/field.php', []),
    'fileMethods' => F::load(kirby()->root('site') . '/methods/file.php', []),
    'filesMethods' => F::load(kirby()->root('site') . '/methods/files.php', []),
    'pageMethods' => F::load(kirby()->root('site') . '/methods/page.php', []),
    'pagesMethods' => F::load(kirby()->root('site') . '/methods/pages.php', []),
    'siteMethods' => F::load(kirby()->root('site') . '/methods/site.php', []),
    'userMethods' => F::load(kirby()->root('site') . '/methods/user.php', []),
    'usersMethods' => F::load(kirby()->root('site') . '/methods/users.php', [])
]);
