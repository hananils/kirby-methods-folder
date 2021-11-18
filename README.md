![Kirby Methods Folder](.github/title.png)

**Methods Folder** is a plugin for [Kirby 3](https://getkirby.com) to automatically register local methods provided in the folder `site/methods` just like Kirby accepts local collections, controllers or models without the need of writing a dedicated plugin.

## Installation

### Download

Download and copy this repository to `/site/plugins/methods-folder`.

### Git submodule

```
git submodule add https://github.com/hananils/kirby-methods-folder.git site/plugins/methods-folder
```

### Composer

```
composer require hananils/kirby-methods-folder
```

# Creating custom methods

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
    'my-method' => function () {
        // your method code here
    }
];
```

Please see the official docs for more information about the different method types: <https://getkirby.com/docs/reference/plugins/extensions>

# Creating custom helpers

You can also create a `helpers.php` file inside the `methods` folder where you can put custom methods you'd like to have available universally:

```
site
 └ methods
   └ helpers.php
```

This file will automatically be included and may contain as many global helper functions as needed.

# License

This plugin is provided freely under the [MIT license](LICENSE.md) by [hana+nils · Büro für Gestaltung](https://hananils.de).  
We create visual designs for digital and analog media.
