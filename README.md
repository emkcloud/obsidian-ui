# Obsidian-UI

I'm developing an open-source package called [**Odsidian Dashboard**](https://github.com/emkcloud/obsidian-dashboard), built with **Laravel** and **Livewire**. The project requires a UI framework to be included by default. While I normally use **Flex UI PRO** in my personal and client projects, it unfortunately depends on a PRO license for many of the components I rely on.

Because of this licensing restriction, Flex UI PRO is not suitable for an open-source package released under the **MIT license**. As a result, I've decided to rewrite the essential components from a forked version of the project and rebuild the advanced features from scratch. This ensures the package remains fully open-source and free from any proprietary limitations.

## Prerequisites

Odsidian UI requires the following:

* Laravel v12.0+
* Livewire v3.5.19+
* Tailwind CSS v4.0+

## Installation

Run the following command from your project's root directory:

```bash
composer require emkcloud/obsidian-ui
```