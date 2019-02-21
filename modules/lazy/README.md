# Lazy-load

This is a simple Drupal module to lazy-load all inline images and/or iframes
defined by content authors in entity content, usually the text-format-enabled
version of textarea fields. i.e. Node and Block body content.

The module currently depends on the [bLazy][1] image script.

There is another contributed module utilizing its namesake, [Blazy][2].
Make sure to check it out, especially if you need more advanced features and
support for many features out of the box.

This module focuses on the only area Blazy module lacks of; **inline-images**
and **inline-iframes**.

You can still use this module tandem with it, though that is not a requirement.


## Requirements

* **bLazy v1.8.2** script as a library item

## Installing Manually
- [Download bLazy][3] from https://github.com/dinbror/blazy  
- Extract the downloaded file,
- rename *blazy-master* directory to *blazy*,
- copy the folder into the `/libraries` folder: i.e.: `libraries/blazy/blazy.min.js`  


## Installing via Composer

- Run `composer require --prefer-dist composer/installers` to ensure that you have the `composer/installers` package installed. This package facilitates the installation of packages into directories other than `/vendor` (e.g. `/libraries`) using Composer.

- If your `composer.json` doesn't already have a definition for the `libraries` path, define one similar to the one below, depending on your setup:

``` json
"extra": {
    "installer-paths": {
        "web/libraries/{$name}": ["type:drupal-library"]
    }
}
```

- Add following to the "repositories" section of `composer.json`:

``` json
"repositories": [

    {
        "type": "package",
        "package": {
            "name": "dinbror/blazy",
            "version": "1.8.2",
            "type": "drupal-library",
            "extra": {
              "installer-name": "blazy"
            },
            "source": {
                "type": "git",
                "url": "https://github.com/dinbror/blazy",
                "reference": "1.8.2"
            }
        }
    },

]
```

- Install the required _Blazy_ library:
``` sh
composer require 'dinbror/blazy:1.8.2'
```

- Install this module:
``` sh
composer require 'drupal/lazy:^1.0'
```


## Usage

This modules makes a new text filter available for the text-formats: *Lazy-load*

Enable the *Lazy-load* filter for the desired text-formats. i.e. *Full HTML* or
*Filtered HTML*

Check out the configuration at `admin/config/content/lazy`.

Configure which elements should be lazy-loaded in the **global settings** area.

**Blazy configuration** options come with the Blazy defaults. Refer to [Blazy plugin documentation][5] for each setting.


## Use Case

If you have numerous images and/or iframes in your content, it could become
a challenge to update that content to make compatible for lazy-loading. In
most cases those updates needs to be handled manually, because most of the time
if not all, the body content (HTML) doesn't follow a pattern to update
them programmatically.

This is the main reason I created this module, to avoid a need for altering body
content manually while making them easy to lazy-load.

**The *Lazy-load* filter doesn't make any changes to existing content.** It only
rewrites the `<img>` and/or `<iframe>` tags in already rendered output to have
them compatible for bLazy script to lazy-load. Since the filtered output is
cached, there should not be any changes in performance.

  [1]: http://dinbror.dk/blazy/
  [2]: https://www.drupal.org/project/blazy
  [3]: https://github.com/dinbror/blazy/archive/master.zip
  [4]: https://www.drupal.org/project/libraries
  [5]: http://dinbror.dk/blog/blazy/
