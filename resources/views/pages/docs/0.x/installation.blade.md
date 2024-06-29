---
view: components.docs-layout
title: Installation
description: How to install the project.
---

## Requirements

To install this project, you need:

- A Laravel app with version 10 and above
- Tailwind CSS
- Alpine JS
- A cool project idea


## Installation

To set up the project:

<ul class="flex flex-col gap-5">
    <li>
        Install the package using Composer
        <x-code-block-wrapper language="bash">
            composer require yungifez/artisan-ui
        </x-code-block-wrapper>
    </li>
    <li>
        In your Tailwind configuration file, add the following preset
        <x-code-block-wrapper title="tailwind.config.js" language="js{2-4}{2-4}">
export default {
  presets: [
    require('./vendor/yungifez/artisan-ui/tailwind.config.js'),
  ]
}
        </x-code-block-wrapper>
    </li>
    <li>
    In your CSS file, import the project's CSS file
    <x-code-block-wrapper title="app.css" language="css">
        @import url(/vendor/yungifez/artisan-ui/dist/artisan.css);
    </x-code-block-wrapper>
    </li>
    <li>
    In your JS file, import the project's Javascript file
    <x-code-block-wrapper title="app.js" language="js">
        import '/vendor/yungifez/artisan-ui/dist/artisan.js'
    </x-code-block-wrapper>
    Or you could use the blade directive
    <x-code-block-wrapper title="layout.blade.php" language="js">
        @verbatim
            @artisanScripts
        @endverbatim
    </x-code-block-wrapper>
    </li>
    <li>
    Test the setup was successful
    <x-code-block-wrapper title="index.blade.php" language="blade">
        @verbatim
        <x-aui::button></x-aui::button>
        @endverbatim
    </x-code-block-wrapper>
    </li>
</ul>

