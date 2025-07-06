# Icon

The package provides several icon sets ready to use right after installation, as well as others that can be added directly by developers. The sets available upon installation are the following:

* [Package: Common icon for loading, edit etc](https://github.com/emkcloud/obsidian-ui)
* [Lucide: Beautiful & consistent icons](https://lucide.dev/)
* [Heroicons: Beautiful hand-crafted SVG icons by Tailwind CSS](https://heroicons.com/)

To use them, simply use the Blade directive `<x-obsidian::icon>`

# Examples

Where you need to specify the set name and the icon name in the following format:

`<x-obsidian::icon.{set}.{name}>`

```php
<x-obsidian::icon.hero.check-circle /> 
<x-obsidian::icon.lucide.baggage-claim />
```
Alternative method for set name and the icon name in the following format:

* `<x-obsidian::icon set="set" name="name">`

```php
<x-obsidian::icon set="hero" name="check-circle" /> 
<x-obsidian::icon set="lucide" name="baggage-claim" />
```
