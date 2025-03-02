---
view: components.docs-layout
title: Theming
description: Using CSS Variables for theming.
---
## How Theming works
For now, theming works only using CSS variables, as shown below
<x-code-block-wrapper language="html">
<div class="bg-background text-foreground"></div>
</x-code-block-wrapper>
---
### Convention

We use a simple `background` and `foreground` convention for colors. The `background` variable is used for the background color of the component and the `foreground` variable is used for the text color.

<x-callout>
The `background` suffix is omitted when the variable is used for the background color of the component.
</x-callout>

Given the following CSS variables:

<x-code-block-wrapper title="app.css" language="css">
--primary: 222.2 47.4% 11.2%;
--primary-foreground: 210 40% 98%;
</x-code-block-wrapper>

The `background` color of the following component will be `hsl(var(--primary))` and the `foreground` color will be `hsl(var(--primary-foreground))`.

<x-code-block-wrapper title="" language="html">
<div class="bg-primary text-primary-foreground">Hello</div>
</x-code-block-wrapper>

<x-callout>

**CSS variables must be defined without color space function**. See the [Tailwind CSS documentation](https://tailwindcss.com/docs/customizing-colors#using-css-variables) for more information.

</x-callout>

### List of variables

Here's the list of variables available for customization:

<Steps>

<x-code-block-wrapper title="Default background color of <body/>...etc" language="css">
--background: 0 0% 100%;
--foreground: 222.2 47.4% 11.2%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Muted backgrounds such as in switch" language="css">
--muted: 210 40% 96.1%;
--muted-foreground: 215.4 16.3% 46.9%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Background color for the card component" language="css">
--card: 0 0% 100%;
--card-foreground: 222.2 47.4% 11.2%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Background color for popovers such as dropdown menu and popover" language="css">
--popover: 0 0% 100%;
--popover-foreground: 222.2 47.4% 11.2%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Default border color" language="css">
--border: 214.3 31.8% 91.4%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Border color for inputs such as input, select, textarea" language="css">
--input: 214.3 31.8% 91.4%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Primary colors for button" language="css">
--primary: 222.2 47.4% 11.2%;
--primary-foreground: 210 40% 98%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Secondary colors for button" language="css">
--secondary: 210 40% 96.1%;
--secondary-foreground: 222.2 47.4% 11.2%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Used for accents such as hover effects on dropdown menu items, select item...etc" language="css">
--accent: 210 40% 96.1%;
--accent-foreground: 222.2 47.4% 11.2%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Used for destructive actions such as destructive buttons" language="css">
--destructive: 0 100% 50%;
--destructive-foreground: 210 40% 98%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Used for focus ring-3" language="css">
--ring: 215 20.2% 65.1%;
</x-code-block-wrapper>

<x-code-block-wrapper title="Border radius for card, input and buttons" language="css">
--radius: 0.5rem;
</x-code-block-wrapper>

</Steps>

### Adding new colors

To add new colors, you need to add them to your CSS file and to your `tailwind.config.js` file.

<x-code-block-wrapper title="app.css" language="css">
:root {
  --warning: 38 92% 50%;
  --warning-foreground: 48 96% 89%;
}

.dark {
  --warning: 48 96% 89%;
  --warning-foreground: 38 92% 50%;
}
</x-code-block-wrapper>
<x-code-block-wrapper title="tailwind.config.js" language="js{5-6}">
module.exports = {
  theme: {
    extend: {
      colors: {
        warning: "hsl(var(--warning))",
        "warning-foreground": "hsl(var(--warning-foreground))",
      },
    },
  },
}
</x-code-block-wrapper>


You can now use the `warning` utility class in your components.

<x-code-block-wrapper title="app.blade.php" language="tsx /bg-warning/ /text-warning-foreground/
">
<div class="bg-warning text-warning-foreground"></div>
</x-code-block-wrapper>

### Other color formats

ShadCN recommends using [HSL colors](https://www.smashingmagazine.com/2021/07/hsl-colors-css/) for theming but you can also use other color formats if you prefer.

See the [Tailwind CSS documentation](https://tailwindcss.com/docs/customizing-colors#using-css-variables) for more information on using `rgb`, `rgba` or `hsl` colors.
