---
view: components.docs-layout
title: Calendar
description: A date field component that allows users to enter and edit date.
---

<x-component-preview component="previews.calendar-demo"></x-component-preview>

<x-callout>
    This calendar was inspired by the **[React DayPicker](https://react-day-picker.js.org/)**
</x-callout>

The calendar supports multiple modes, it also allows disabling certain dates

| Prop        | Type                                      | Description                               |
|-------------|-------------------------------------------|-------------------------------------------|
|  `mode`     |  `"single"` \| `"multiple"` \| `"range"`  |  Set a selection mode, defaults to single |
| `Disabled`  | `array` <br> More info below              |  Disabled days that cannot be selected.   |

The calendar supports 3 modes
- Single mode
- Multiple mode
- Range mode

## Single mode

When in single mode ie when `mode="single"`, only 1 day can be selected at a time. You can listen for the select event using alpine. The event object contains a details.value containing a JavaScript date object of the selected day

<x-component-preview component="previews.calendar-single-demo"></x-component-preview>

| Prop        | Type                      | Description                                 |
|-------------|---------------------------|---------------------------------------------|
| `selected`  |  `"string"` \| `"Date"`   |  The date to be selected initially.         |
| `@select`   | `Alpine event listener`   |  Event Listener for when a date is selected |


## Multiple mode


When in multiple mode ie when `mode="multiple"`, only 1 day can be selected at a time. You can listen for the select event using alpine. The event object contains a details.value containing an array of JavaScript date object of selected days.

<x-component-preview component="previews.calendar-multiple-demo"></x-component-preview>
