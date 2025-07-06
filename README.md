# Obsidian-UI

I'm developing an open-source package called [**Obsidian Dashboard**](https://github.com/emkcloud/obsidian-dashboard), built with **Laravel** and **Livewire**. The project requires a UI framework to be included by default. While I normally use **Flex UI PRO** in my personal and client projects, it unfortunately depends on a PRO license for many of the components I rely on.

Because of this licensing restriction, Flex UI PRO is not suitable for an open-source package released under the **MIT license**. As a result, I've decided to rewrite the essential components from a forked version of the project and rebuild the advanced features from scratch. This ensures the package remains fully open-source and free from any proprietary limitations. I'll only include the components that are strictly necessary for the package [**Emkcloud Obsidian Dashboard**](https://github.com/emkcloud/obsidian-dashboard) it is not intended to be a general-purpose UI kit.

## Requirements

* Laravel 12.0+
* Livewire 3.5.19+
* Tailwind CSS 4.0+

## Installation

```bash
composer require emkcloud/obsidian-ui
```

## What's included?

* [Button](docs/contents/button.md)
* [Dropdown](docs/contents/dropdown.md)
* [Icon](docs/contents/icon.md)
* [Separator](docs/contents/separator.md)
* [Tooltip](docs/contents/tooltip.md)

## Example Output

## Configuration

## Other Resources

* [Lucide: Beautiful & consistent icons](https://lucide.dev/)
* [Heroicons: Beautiful SVG icons](https://heroicons.com/)

## License

The MIT License (MIT). Please see the package [License file](LICENSE) for more information.