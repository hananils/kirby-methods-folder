[![Methods Folder for Kirby CMS](header.png)](https://kirby.hananils.de/plugins/methods-folder)

Unlike collection and controllers, Kirby only allows for the creation of custom methods via plugins. Methods Folder bridges this gap by automatically registering methods located in `site/methods`. In additon to all methods types, it also provides a way to register helper functions via a dedicated file.

## Introduction

### Creating custom methods

After installing this plugin, you can create custom methods in `site/methods` by creating separate files for the different method types:

```
site
└ methods
  └ collection.php
  └ field.php
  └ block.php
  └ blocks.php
  └ layout.php
  └ layouts.php
  └ layout-column.php
  └ file.php
  └ files.php
  └ page.php
  └ pages.php
  └ site.php
  └ user.php
  └ users.php
```

Those files have to return an array:

```php
<?php

return [
    'my-method' => function () {
        // your method code here
    }
];
```

Please see the official docs for more information about the different method types: [getkirby.com/​docs/​reference/​plugins/​extensions](https://getkirby.com/docs/reference/plugins/extensions)

### Creating custom helpers

You can also create a `helpers.php` file inside the `site` folder where you can put custom methods you’d like to have available universally:

```
site
└ helpers.php
```

This file will automatically be included and may contain as many global helper functions as needed.

## Installation

By default, plugins in Kirby reside in a special folder located at `/site/plugins`. Each plugin is installed in its proprietary subfolder. This installation can be handled in four different ways: you can either install them manually or manage them using Kirby CLI, Git submodules or Composer. You can install Methods Folder either way and should choose the method suiting your project best.

Please note that all examples given here assume you are using the default plugin root. [If you changed your plugin root](https://getkirby.com/docs/reference/system/roots/plugins), e. g. with a custom folder setup, you’ll also have to adjust the paths given in this guide. For further information on how to manage plugins, please read the [official Kirby plugin introduction](https://getkirby.com/docs/guide/plugins/plugin-basics).

### Download

Download and copy this repository to `/site/plugins/methods-folder`.

### Kirby CLI

```shell
kirby plugin:install hananils/kirby-methods-folder
```

### Git submodule

```bash
git submodule add \
    https://github.com/hananils/kirby-methods-folder.git \
    site/plugins/methods-folder
```

### Composer

```shell
composer require hananils/kirby-methods-folder
```

## Documentation

[![Find all documentation at kirby.hananils.de](footer.png)](https://kirby.hananils.de/plugins/methods-folder)

Where possible, files contain inline annotations. For extended documentation, please visit our dedicated plugin site at [kirby.hananils.de/​plugins/​methods-folder](https://kirby.hananils.de/plugins/methods-folder).

### Reference

- [Site Methods](https://kirby.hananils.de/plugins/methods-folder/site-methods)
- [Pages Methods](https://kirby.hananils.de/plugins/methods-folder/pages-methods)
- [Page Methods](https://kirby.hananils.de/plugins/methods-folder/page-methods)
- [Field Methods](https://kirby.hananils.de/plugins/methods-folder/field-methods)
- [Layouts Methods](https://kirby.hananils.de/plugins/methods-folder/layouts-methods)
- [Layout Methods](https://kirby.hananils.de/plugins/methods-folder/layout-methods)
- [Layout Column Methods](https://kirby.hananils.de/plugins/methods-folder/layout-column-methods)
- [Blocks Methods](https://kirby.hananils.de/plugins/methods-folder/blocks-methods)
- [Block Methods](https://kirby.hananils.de/plugins/methods-folder/block-methods)
- [Files Methods](https://kirby.hananils.de/plugins/methods-folder/files-methods)
- [File Methods](https://kirby.hananils.de/plugins/methods-folder/file-methods)
- [Users Methods](https://kirby.hananils.de/plugins/methods-folder/users-methods)
- [User Methods](https://kirby.hananils.de/plugins/methods-folder/user-methods)
- [Collection Methods](https://kirby.hananils.de/plugins/methods-folder/collection-methods)

## License

This plugin is provided freely under the [MIT license](https://kirby.hananils.de/plugins/methods-folder/license) by [hana+nils · Büro für Gestaltung](https://kirby.hananils.de). We create visual designs for digital and analog media.