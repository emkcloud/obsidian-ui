# Icon

The package provides several icon sets ready to use right after installation, as well as others that can be added directly by developers. The sets available upon installation are the following:

* [Package: Common icon for loading, edit etc](https://github.com/emkcloud/obsidian-ui)
* [Lucide: Beautiful & consistent icons](https://lucide.dev/)
* [Heroicons: Beautiful hand-crafted SVG icons by Tailwind CSS](https://heroicons.com/)

To use them, simply use the Blade directive `<x-obsidian::icon>`

# Usage

Where you need to specify the set name and the icon name in the following format:

```php
<x-obsidian::icon.set.name>
```

```php
<x-obsidian::icon.base.loading /> 
<x-obsidian::icon.hero.check-circle /> 
<x-obsidian::icon.lucide.baggage-claim />
```

Alternative method for set name and the icon name in the following format:

```php
<x-obsidian::icon set="set" name="name">
```

```php
<x-obsidian::icon set="base" name="loading" /> 
<x-obsidian::icon set="hero" name="check-circle" /> 
<x-obsidian::icon set="lucide" name="baggage-claim" />
```

## Sizes

```php
<x-obsidian::icon.lucide.baggage-claim/>                 <!-- 24 px -->
<x-obsidian::icon.lucide.baggage-claim size="large"/>    <!-- 32 px -->
<x-obsidian::icon.lucide.baggage-claim size="standard"/> <!-- 24 px -->
<x-obsidian::icon.lucide.baggage-claim size="small"/>    <!-- 20 px -->
<x-obsidian::icon.lucide.baggage-claim size="micro"/>    <!-- 16 px -->
```

## Custom Sizes

```php
<x-obsidian::icon.lucide.baggage-claim class="size-10"/>
<x-obsidian::icon.lucide.baggage-claim class="size-12"/>
<x-obsidian::icon.lucide.baggage-claim class="size-14"/>
```