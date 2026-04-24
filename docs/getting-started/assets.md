---
title: Assets
weight: 3
---

## Compiling assets

We use [Tailwind CSS](https://tailwindcss.com/) and custom Filament themes.
If you are using Tailwind CSS v4, class scanning is configured from your CSS entry file using `@source` (instead of the old `tailwind.config.js` `content` array).

### Custom Classes

Add these source paths to your app stylesheet (for example `resources/css/app.css`):

```css
@import "tailwindcss";

@source "../../vendor/lara-zeus/activity-timeline/resources/views/**/*.blade.php";
@source "../../vendor/lara-zeus/activity-timeline/resources/views/themes/**/*.blade.php";
```

## Style customization

Similar to Filament, this plugin also includes CSS `hook` classes that enable the customization of different HTML elements through CSS.

```css
.fi-timeline-section {
    @apply bg-transparent !important;
}
```

This plugin comes with numerous CSS `hook` classes. For a straightforward approach, consider using your browser's developer tools to carefully examine the element and identify these classes.
