# Kirby Methods Folder

Kirby 3 automatically registers local collections, controllers or models using folder conventions like `site/collections`, `site/controllers` or `site/models`. It does not for custom methods which have to be provided using plugins. This plugin offers the missing link and allows for providing custom methods in `site/methods`.

## Installation

### Download

Download and copy this repository to `/site/plugins/missing-link`.

### Git submodule

```
git submodule add https://github.com/hananils/kirby-missing-link.git site/plugins/missing-link
```

### Composer

```
composer require hananils/kirby-missing-link
```

## Setup

After installing this plugin, you can create custom methods in `site/methods` by creating separate files for the different method types:

```
site
└ methods
  └ collection.php
  └ field.php
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
    'my-method' => function() {
        // your method code here
    }
];

```

Please see the official docs for more information about the different method types:
<https://getkirby.com/docs/reference/plugins/extensions>

### Helpers

You can also create a `helpers.php` file inside the `methods` folder where you can put custom methods you'd like to have available universally:

```
site
 └ methods
   └ helpers.php
```

This file will automatically be included and may contain as many global helper functions as needed.

## License

MIT

## Credits

- [hana+nils · Büro für Gestaltung](https://hananils.de)
