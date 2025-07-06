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

There are several predefined standard sizes that can be specified using the `size` property.

```php
<x-obsidian::icon.lucide.airplay/>                 <!-- 24 px -->
<x-obsidian::icon.lucide.airplay size="large"/>    <!-- 32 px -->
<x-obsidian::icon.lucide.airplay size="standard"/> <!-- 24 px -->
<x-obsidian::icon.lucide.airplay size="small"/>    <!-- 20 px -->
<x-obsidian::icon.lucide.airplay size="micro"/>    <!-- 16 px -->
```

If you need a custom size, use the [size utility classes](https://tailwindcss.com/docs/width) from Tailwind CSS.

```php
<x-obsidian::icon.lucide.audio-waveform class="size-10"/>
<x-obsidian::icon.lucide.audio-waveform class="size-12"/>
<x-obsidian::icon.lucide.audio-waveform class="size-14"/>
```

## Color

You can customize the color of an icon using Tailwind's [text color utilities](https://tailwindcss.com/docs/color)

```php
<x-obsidian::icon.hero.beaker class="text-black dark:text-white"/>
<x-obsidian::icon.hero.bug-ant class="text-amber-500 dark:text-amber-300"/>
<x-obsidian::icon.hero.circle-stack class="text-teal-500 dark:text-transparent"/>
```

## Naming

## Custom icons

For add new icons, you can create the Blade files in the `resources/views/obsidian/icon` directory.

