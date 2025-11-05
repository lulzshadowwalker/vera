## Badge

To create a badge, just add the `.uk-badge` class to an inline element like `<a>` or `<span>` element.

```html
<span class="uk-badge"></span>
```

### Example

```html
<span class="uk-badge">1</span>
<span class="uk-badge">100</span>
```

## Style modifiers

There are several style modifiers available. Just add one of the following classes to apply a different look.

| Class                   | Description               |
| ----------------------- | ------------------------- |
| `.uk-badge-primary`     | Adds a primary style.     |
| `.uk-badge-secondary`   | Adds a secondary style.   |
| `.uk-badge-destructive` | Adds a destructive style. |

### Example

```html
<span class="uk-badge">1</span>
<span class="uk-badge uk-badge-primary">100</span>
<span class="uk-badge uk-badge-secondary">100</span>
<span class="uk-badge uk-badge-destructive">100</span>
```

---

## Breadcrumb

The Breadcrumb component consists of links, which are aligned side by side and separated by a divider. Add the `.uk-breadcrumb` class to a `<ul>` element to define the component. Use `<a>` elements as breadcrumb items within the list. An active state is automatically applied to the last `<li>` element.

To add list items without a link, use a `<span>` element instead of an `<a>`. Alternatively, disable an `<a>` element by adding the `.uk-disabled` class to the `<li>` element and remove the `href` attribute from the anchor to make it inaccessible through keyboard navigation.

```html
<ul class="uk-breadcrumb">
  <li><a href=""></a></li>
  <li><a href=""></a></li>
  <li><span></span></li>
</ul>
```

### Example

```html
<nav aria-label="Breadcrumb">
  <ul class="uk-breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Linked Category</a></li>
    <li class="uk-disabled"><a>Disabled Category</a></li>
    <li>
      <span aria-current="page">Franken UI</span>
    </li>
  </ul>
</nav>
```

## Accessibility

In order for the Breadcrumb component to adhere to the [Breadcrumb design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/breadcrumb/), set the appropriate WAI-ARIA roles, states and properties.

- Contain the breadcrumb list within a `nav` element and set the `aria-label` property to describe the type of the provided navigation.
- If the last item is the current page and a link, set the `aria-current="page"` property.

```html
<nav aria-label="Breadcrumb">
  <ul class="uk-breadcrumb">
    ...
  </ul>
</nav>
```

---

## Button

To apply this component, add the `.uk-btn` class and a modifier such as `.uk-btn-default` to an `<a>` or `<button>` element. Add the `disabled` attribute to a `<button>` element to disable the button.

```html
<a class="uk-btn uk-btn-default" href=""></a>

<button class="uk-btn uk-btn-default"></button>

<button class="uk-btn uk-btn-default" disabled></button>
```

### Example

```html
<div class="flex flex-wrap gap-2">
  <a class="uk-btn uk-btn-default" href="#">Link</a>
  <button class="uk-btn uk-btn-default">Button</button>
  <button class="uk-btn uk-btn-default" disabled>Disabled</button>
</div>
```

## Style modifiers

There are several style modifiers available. Just add one of the following classes to apply a different look.

| Class                 | Description                               |
| --------------------- | ----------------------------------------- |
| `.uk-btn-default`     | Default button style.                     |
| `.uk-btn-ghost`       | Applies a ghost style.                    |
| `.uk-btn-primary`     | Indicates the primary action.             |
| `.uk-btn-secondary`   | Indicates an important action.            |
| `.uk-btn-destructive` | Indicates a dangerous or negative action. |
| `.uk-btn-text`        | Applies an typographic style.             |
| `.uk-btn-link`        | Applies an plain link style.              |

```html
<button class="uk-btn uk-btn-primary"></button>
```

### Example

```html
<div class="flex flex-wrap items-center gap-2">
  <button class="uk-btn uk-btn-default">Default</button>
  <button class="uk-btn uk-btn-ghost">Ghost</button>
  <button class="uk-btn uk-btn-primary">Primary</button>
  <button class="uk-btn uk-btn-secondary">Secondary</button>
  <button class="uk-btn uk-btn-destructive">Destructive</button>
  <button class="uk-btn uk-btn-text">Text</button>
</div>
```

## Size modifiers

There are several size modifiers available. Just add one of the following classes to make the button smaller or larger.

| Class        | Description               |
| ------------ | ------------------------- |
| `.uk-btn-xs` | Applies extra small size. |
| `.uk-btn-sm` | Applies small size.       |
| `.uk-btn-md` | Applies medium size.      |
| `.uk-btn-lg` | Applies large size.       |

### Example

```html
<div class="flex flex-wrap gap-2">
  <button class="uk-btn uk-btn-default uk-btn-xs">xs</button>
  <button class="uk-btn uk-btn-primary uk-btn-xs">xs</button>
  <button class="uk-btn uk-btn-secondary uk-btn-xs">xs</button>
</div>

<div class="mt-4 flex flex-wrap gap-2">
  <button class="uk-btn uk-btn-default uk-btn-sm">sm</button>
  <button class="uk-btn uk-btn-primary uk-btn-sm">sm</button>
  <button class="uk-btn uk-btn-secondary uk-btn-sm">sm</button>
</div>

<div class="mt-4 flex flex-wrap gap-2">
  <button class="uk-btn uk-btn-default uk-btn-md">md</button>
  <button class="uk-btn uk-btn-primary uk-btn-md">md</button>
  <button class="uk-btn uk-btn-secondary uk-btn-md">md</button>
</div>

<div class="mt-4 flex flex-wrap gap-2">
  <button class="uk-btn uk-btn-default uk-btn-lg">lg</button>
  <button class="uk-btn uk-btn-primary uk-btn-lg">lg</button>
  <button class="uk-btn uk-btn-secondary uk-btn-lg">lg</button>
</div>
```

## Width modifiers

You can use Tailwind CSS utility classes alongside button classes and the it will follow its width.

### Example

```html
<div class="flex flex-col gap-2">
  <button class="uk-btn uk-btn-default w-40">w-40</button>
  <button class="uk-btn uk-btn-primary w-44">w-44</button>
  <button class="uk-btn uk-btn-secondary w-48">w-48</button>
  <button class="uk-btn uk-btn-ghost w-52">w-52</button>
  <button class="uk-btn uk-btn-destructive w-full">w-full</button>
</div>
```

## Icon

Use `.uk-btn-icon` class to create an icon button, which can be used for social icons or toolbars.

### Example

```html
<div class="flex gap-x-2">
  <button class="uk-btn uk-btn-default uk-btn-icon">
    <uk-icon icon="copy"></uk-icon>
  </button>
  <button class="uk-btn uk-btn-default uk-btn-icon">
    <uk-icon icon="file"></uk-icon>
  </button>
  <button class="uk-btn uk-btn-default uk-btn-icon">
    <uk-icon icon="trash"></uk-icon>
  </button>
</div>
```

## Group

To create a button group, add the `.uk-btn-group` class to a `<div>` element around the buttons. That's it! No further markup is needed.

### Example

```html
<div>
  <div class="uk-btn-group">
    <button class="uk-btn uk-btn-secondary">Button</button>
    <button class="uk-btn uk-btn-secondary">Button</button>
    <button class="uk-btn uk-btn-secondary">Button</button>
  </div>
</div>

<div class="mt-4">
  <div class="uk-btn-group">
    <button class="uk-btn uk-btn-primary">Button</button>
    <button class="uk-btn uk-btn-primary">Button</button>
    <button class="uk-btn uk-btn-primary">Button</button>
  </div>
</div>

<div class="mt-4">
  <div class="uk-btn-group">
    <button class="uk-btn uk-btn-destructive">Button</button>
    <button class="uk-btn uk-btn-destructive">Button</button>
    <button class="uk-btn uk-btn-destructive">Button</button>
  </div>
</div>
```

## Button with dropdowns

A button can be used to trigger a dropdown menu from the [Dropdown component](https://franken-ui.dev/docs/2.1/dropdown).

```html
<!-- A button toggling a dropdown -->
<button class="uk-btn uk-btn-default" type="button"></button>
<div data-uk-dropdown></div>
```

### Example

```html
<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Dropdown</button>
  <div
    class="uk-drop uk-dropdown min-w-52"
    data-uk-dropdown="animation: uk-anmt-slide-top-sm"
  >
    <ul class="uk-nav uk-dropdown-nav">
      <li class="uk-active"><a href="#">Active</a></li>
      <li><a href="#">Item</a></li>
      <li class="uk-nav-header">Header</li>
      <li><a href="#">Item</a></li>
      <li><a href="#">Item</a></li>
      <li class="uk-nav-divider"></li>
      <li><a href="#">Item</a></li>
    </ul>
  </div>
</div>
```

---

## Calendar

You can build your calendar manually using server-side rendering with the following classes, or use our web components that have been built from scratch with the `<uk-calendar>` markup.

### Manual server-side rendering

Use the following classes to create your calendar:

| Class            | Description                                                                     |
| ---------------- | ------------------------------------------------------------------------------- |
| `uk-cal`         | The calendar wrapper                                                            |
| `uk-cal-oom`     | For dates that are out-of-month                                                 |
| `uk-active`      | To show the active date                                                         |
| `uk-disabled`    | To disable a date (add `disabled` attribute to the button for full disablement) |
| `uk-cal-marked`  | To add an indicator for "marked dates" (dates with events)                      |
| `uk-cal-divider` | To add a divider between calendar weeks.                                        |

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <div class="uk-cal uk-cal-divider">
      <table>
        <thead>
          <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="uk-cal-oom">
              <button>28</button>
            </td>
            <td class="uk-cal-oom">
              <button>29</button>
            </td>
            <td class="uk-cal-oom">
              <button>30</button>
            </td>
            <td class="uk-cal-oom">
              <button>31</button>
            </td>
            <td class="uk-active">
              <button>1</button>
            </td>
            <td>
              <button>2</button>
            </td>
            <td class="uk-disabled">
              <button disabled>3</button>
            </td>
          </tr>
          <tr>
            <td>
              <button>4</button>
            </td>
            <td class="uk-cal-marked">
              <button>5</button>
            </td>
            <td>
              <button>6</button>
            </td>
            <td>
              <button>7</button>
            </td>
            <td>
              <button>8</button>
            </td>
            <td>
              <button>9</button>
            </td>
            <td>
              <button>10</button>
            </td>
          </tr>
          <tr>
            <td><button>11</button></td>
            <td><button>12</button></td>
            <td><button>13</button></td>
            <td><button>14</button></td>
            <td><button>15</button></td>
            <td><button>16</button></td>
            <td><button>17</button></td>
          </tr>
          <tr>
            <td><button>18</button></td>
            <td><button>19</button></td>
            <td><button>20</button></td>
            <td><button>21</button></td>
            <td><button>22</button></td>
            <td><button>23</button></td>
            <td><button>24</button></td>
          </tr>
          <tr>
            <td><button>25</button></td>
            <td><button>26</button></td>
            <td><button>27</button></td>
            <td><button>28</button></td>
            <td><button>29</button></td>
            <td><button>30</button></td>
            <td><button>31</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
```

### Web components

Alternatively, you can use our web components with the `<uk-calendar>` markup.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar></uk-calendar>
  </div>
</div>
```

## Setting the current day

To automatically set today's date as the active date in the calendar, use the `today` attribute. This will highlight the current day in the calendar, making it easy for users to quickly identify the current date.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar today></uk-calendar>
  </div>
</div>
```

By default, this attribute is set to `false`, meaning today's date will not be automatically highlighted.

## Enabling month and year selection

To allow month and year selection, use the `jumpable` attribute. This will enable a dropdown menu for selecting the month and a text input field for entering the year, allowing users to quickly "jump" to a specific date.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar jumpable></uk-calendar>
  </div>
</div>
```

By default, this attribute is set to `false`, meaning the calendar will not provide month and year selection options.

## Setting the starting day of the week

To customize the starting day of the week in the calendar, use the `starts-with` attribute. This allows you to specify whether the week should start on Sunday (0) or Monday (1). By default, the week starts on Sunday (0).

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar starts-with="1"></uk-calendar>
  </div>
</div>
```

## Disabling specific dates

To disable specific dates in the calendar, use the `disabled-dates` attribute. This attribute accepts a comma-separated list of dates. Please note that dates must be in the format `YYYY-MM-DD` (e.g. `2022-07-25`). Dates that do not follow this format will be ignored and a console error will be thrown. The calendar will still render, but the invalid dates will not be disabled.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar
      disabled-dates="2022-07-25,2022-08-01,2022-08-15"
      view-date="2022-07-01"
    ></uk-calendar>
  </div>
</div>
```

## Marking specific dates

To add an indicator to specific dates in the calendar, use the `marked-dates` attribute. This attribute accepts a comma-separated list of dates. Please note that dates must be in the format `YYYY-MM-DD` (e.g. `2022-07-25`). Dates that do not follow this format will be ignored and a console error will be thrown. The calendar will still render, but the invalid dates will not be marked.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar
      marked-dates="2022-07-25,2022-08-01,2022-08-15"
      view-date="2022-07-01"
    ></uk-calendar>
  </div>
</div>
```

## Setting the view date

To customize the initial view date of the calendar, use the `view-date` attribute. By default, the calendar will display the current date. To set a custom view date, provide a date in the format `YYYY-MM-DD` (e.g. `2023-06-30`). This will cause the calendar to display the specified month and year.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar view-date="2023-06-30"></uk-calendar>
  </div>
</div>
```

## Setting the minimum and maximum date

To set the minimum and maximum date that can be selected in the calendar, use the `min` and `max` attributes. These attributes accept dates in the format `YYYY-MM-DD` (e.g. `2022-07-25`).

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar
      min="2022-01-01"
      max="2022-12-31"
      view-date="2022-07-01"
    ></uk-calendar>
  </div>
</div>
```

## Setting the current value

To set the current value of the calendar, use the `value` attribute. This attribute accepts a date in the format `YYYY-MM-DD` (e.g. `2020-05-06`). Please note that this attribute takes precedence over `view-date` and `today`, so setting `value` will override any settings made with those attributes.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar value="2022-07-01"></uk-calendar>
  </div>
</div>
```

## Capturing values

There are several ways to capture values from the `<uk-calendar>` component. The simplest approach is to add a `name` attribute to the component. When you do this, a hidden input field with the specified name will be automatically generated, allowing you to easily capture the selected value on your server.

```html
<uk-calendar name="calendar"></uk-calendar>
```

This is useful when you need to include the calendar component in a form and capture the selected date as part of the form submission.

## Internationalization

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar
      i18n="weekdays: Sunnudagur, Mánadagur, Týsdagur, Mikudagur, Hósdagur, Fríggjadagur, Leygardagur; months: Januar, Februar, Mars, Apríl, Mai, Juni, Juli, August, September, Oktobur, November, Desember"
      value="2022-07-01"
      jumpable
    ></uk-calendar>
  </div>
</div>
```

## Available options

| Name       | Description                                                          |
| ---------- | -------------------------------------------------------------------- |
| `weekdays` | A comma-separated list of days of the week, starting from Sunday.    |
| `months`   | A comma-separated list of months of the year, starting from January. |

## Custom classes

To add custom classes, use the `cls-custom` attribute. This attribute accepts two formats:

- A JSON-stringified object
- A valid `key: value; foo: bar;` format

If you pass only class names, they will be applied directly to the calendar component.

### Example

```html
<div class="flex justify-center">
  <div class="uk-rounded uk-shadow border border-border p-3">
    <uk-calendar
      cls-custom="uk-cal-divider"
      disabled-dates="2022-07-25,2022-08-01,2022-08-15"
      view-date="2022-07-01"
    ></uk-calendar>
  </div>
</div>
```

## Attributes

The following attributes are available for this component:

| Name                     | Type    | Default    | Description                                                                                                   |
| ------------------------ | ------- | ---------- | ------------------------------------------------------------------------------------------------------------- |
| `force-prevent-rerender` | Boolean | false      | Forcefully prevents component rerendering.                                                                    |
| `weekday-abbr-length`    | String  | 3          | Customize the length of weekday abbreviations (e.g., Monday → Mon).                                           |
| `today`                  | Boolean | false      | Automatically sets today as the active date.                                                                  |
| `jumpable`               | Boolean | false      | Allows user to select a month and type a year for the calendar to "jump" to a specific date.                  |
| `starts-with`            | String  | 0 (Sunday) | Sets the starting day of the week. Either "0" (Sunday) or "1" (Monday).                                       |
| `disabled-dates`         | String  |            | A comma-separated list of dates to disable. Dates must be in the format YYYY-MM-DD.                           |
| `marked-dates`           | String  |            | A comma-separated list of dates to add an indicator. Dates must be in the format YYYY-MM-DD.                  |
| `view-date`              | String  |            | Sets the initial view date of the calendar. Dates must be in the format YYYY-MM-DD.                           |
| `min`                    | String  |            | Sets the minimum date that can be selected. Dates must be in the format YYYY-MM-DD.                           |
| `max`                    | String  |            | Sets the maximum date that can be selected. Dates must be in the format YYYY-MM-DD.                           |
| `value`                  | String  |            | Sets the current value of the calendar. Dates must be in the format YYYY-MM-DD.                               |
| `name`                   | String  |            | Sets the name of the hidden input field, allowing the calendar's value to be submitted with a form.           |
| `cls-custom`             | String  |            | Allows you to add custom CSS classes.                                                                         |
| `i18n`                   | String  |            | Enables internationalization. Please see [Internationalization](#internationalization) for available options. |

## Events

The Calendar component triggers the following events on elements with this component attached:

| Name                 | Description                         |
| -------------------- | ----------------------------------- |
| `uk-calendar:change` | Fired when active date has changed. |

---

## Card

The Card component consists of the card itself, the card body and an optional card title. Typically, cards are arranged in grid columns.

| Class            | Description                                                                    |
| ---------------- | ------------------------------------------------------------------------------ |
| `.uk-card`       | Add this class to a `<div>` element to define the Card component.              |
| `.uk-card-body`  | Add this class to the card to create padding between the card and its content. |
| `.uk-card-title` | Add this class to a heading to define a card title.                            |

```html
<div class="uk-card uk-card-body">
  <h3 class="uk-card-title"></h3>
</div>
```

### Example

```html
<div class="uk-card uk-card-body max-w-sm">
  <h3 class="uk-card-title">Default</h3>
  <p class="mt-4">
    Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed
    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  </p>
</div>
```

## Style modifiers

UIkit includes a number of modifiers that can be used to add a specific style to cards.

| Class                  | Description                                                                   |
| ---------------------- | ----------------------------------------------------------------------------- |
| `.uk-card-primary`     | Add this class to modify the card and emphasize it with a primary color.      |
| `.uk-card-secondary`   | Add this class to modify the card and give it a secondary background color.   |
| `.uk-card-destructive` | Add this class to modify the card and give it a destructive background color. |

```html
<div class="uk-card"></div>

<div class="uk-card uk-card-primary"></div>

<div class="uk-card uk-card-secondary"></div>

<div class="uk-card uk-card-destructive"></div>
```

### Example

```html
<div class="grid gap-4 md:grid-cols-2">
  <div>
    <div class="uk-card uk-card-body">
      <h3 class="uk-card-title">Default</h3>
      <p class="mt-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </p>
    </div>
  </div>
  <div>
    <div class="uk-card uk-card-body uk-card-primary">
      <h3 class="uk-card-title">Primary</h3>
      <p class="mt-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </p>
    </div>
  </div>
  <div>
    <div class="uk-card uk-card-body uk-card-secondary">
      <h3 class="uk-card-title">Secondary</h3>
      <p class="mt-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </p>
    </div>
  </div>
  <div>
    <div class="uk-card uk-card-body uk-card-destructive">
      <h3 class="uk-card-title">Destructive</h3>
      <p class="mt-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </p>
    </div>
  </div>
</div>
```

## Header and footer

You can also divide a card into header and footer — around the default body. Just add the `.uk-card-header` or `.uk-card-footer` class to a `<div>` element inside the card.

```html
<div class="uk-card">
  <div class="uk-card-header">
    <h3 class="uk-card-title"></h3>
  </div>
  <div class="uk-card-body"></div>
  <div class="uk-card-footer"></div>
</div>
```

### Example

```html
<div class="uk-card max-w-sm">
  <div class="uk-card-header">
    <h3 class="uk-card-title">Create project</h3>
    <p class="mt-2 text-muted-foreground">
      Deploy your new project in one-click.
    </p>
  </div>
  <div class="uk-card-body">
    <div class="">
      <label class="uk-form-label" for="name">Name</label>
      <div class="uk-form-controls mt-2">
        <input
          class="uk-input"
          id="name"
          type="text"
          aria-describedby="name-help-block"
          placeholder="Name"
        />
        <div id="name-help-block" class="uk-form-help mt-2">
          The name of your project.
        </div>
      </div>
    </div>

    <div class="mt-4">
      <label class="uk-form-label" for="framework">Framework</label>
      <div class="uk-form-controls mt-2">
        <select class="uk-select" name="framework">
          <option value="sveltekit">Sveltekit</option>
          <option value="astro" selected>Astro</option>
        </select>
      </div>
    </div>
  </div>

  <div class="uk-card-footer flex justify-between">
    <button class="uk-btn uk-btn-default">Cancel</button>
    <button class="uk-btn uk-btn-primary">Deploy</button>
  </div>
</div>
```

---

## Close

To apply this component, add the `data-uk-close` attribute to an `<a>` or `<button>` element.

```html
<button type="button" data-uk-close></button>

<a href="" data-uk-close></a>
```

### Example

```html
<button type="button" aria-label="Close" data-uk-close></button>
```

## Close in alerts

This is an example of how this component is used with an alert box from the [Alert component](https://franken-ui.dev/docs/2.1/alert).

```html
<div class="uk-alert" data-uk-alert>
  <a href class="uk-alert-close" data-uk-close></a>
</div>
```

### Example

```html
<div class="uk-alert" data-uk-alert>
  <button
    class="uk-alert-close"
    type="button"
    aria-label="Close"
    data-uk-close
  ></button>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </p>
</div>
```

## Close in drops

This is an example of how this component is used with the [Drop component](https://franken-ui.dev/docs/2.1/drop).

```html
<div data-uk-drop>
  <button class="uk-drop-close" type="button" data-uk-close></button>
</div>
```

### Example

```html
<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Click</button>
  <div data-uk-drop="mode: click">
    <div class="uk-card uk-card-body">
      <button
        class="uk-drop-close"
        type="button"
        aria-label="Close"
        data-uk-close
      ></button>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt.
      </p>
    </div>
  </div>
</div>
```

## Close in modals

This is an example of how this component is used with the [Modal component](https://franken-ui.dev/docs/2.1/modal).

```html
<div id="modal" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
  </div>
</div>
```

### Example

```html
<a class="uk-btn uk-btn-default" href="#modal" data-uk-toggle> Open modal </a>

<div class="uk-modal uk-flex-top" id="modal" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      aria-label="Close"
      data-uk-close
    ></button>
    <h2 class="uk-modal-title">Are you absolutely sure?</h2>
    <div class="my-4 text-sm text-muted-foreground">
      This action cannot be undone. This will permanently delete your account
      and remove your data from our servers.
    </div>
    <div class="flex justify-end">
      <button class="uk-modal-close uk-btn uk-btn-default mr-2" type="button">
        Cancel
      </button>
      <button class="uk-btn uk-btn-primary" type="button">Continue</button>
    </div>
  </div>
</div>
```

## Accessibility

The Close component automatically sets the appropriate WAI-ARIA roles and properties.

- The _close icon_ has the `aria-label` property, and if an `<a>` element is used, the `button` role.

### Internationalization

The Close component uses the following translation strings. Learn more about [translating components](https://franken-ui.dev/docs/2.1/accessibility).

| Key     | Default | Description             |
| ------- | ------- | ----------------------- |
| `label` | `Close` | `aria-label` attribute. |

---

## Comment

The Comment component consists of the comment itself, a comment header, including an avatar, a title and meta text, and a comment body.

| Class                | Description                                                                           |
| -------------------- | ------------------------------------------------------------------------------------- |
| `.uk-comment`        | Add this class to define the Comment component.                                       |
| `.uk-comment-body`   | Add this class to create a comment body.                                              |
| `.uk-comment-header` | Add this class to create a comment header.                                            |
| `.uk-comment-title`  | Add this class to a heading to create a comment title.                                |
| `.uk-comment-meta`   | Add this class to create meta text about your comment.                                |
| `.uk-comment-avatar` | Add this class to an `<img>` element to create an avatar for the comment author.      |

```html
<article class="uk-comment">
  <header class="uk-comment-header">
    <div class="uk-comment-avatar">
      <img src="" alt="" />
    </div>
    <div class="uk-comment-title"></div>
    <ul class="uk-comment-meta uk-subnav"></ul>
  </header>
  <div class="uk-comment-body"></div>
</article>
```

### Example

```html
<article class="uk-comment" tabindex="-1" role="comment">
  <header class="uk-comment-header">
    <div class="flex items-center">
      <div class="uk-comment-avatar mr-2">
        <img
          src="https://api.dicebear.com/9.x/lorelei/svg?seed=Tyler Johnson"
          alt=""
        />
      </div>
      <div class="flex-1">
        <div class="uk-comment-title"><a href="#">Tyler Johnson</a></div>
        <p class="uk-comment-meta"><a href="#">Just posted</a></p>
      </div>
    </div>
  </header>
  <div class="uk-comment-body">
    <p>
      I agree, this was a really insightful article. The historical context
      provided a great foundation for understanding the current challenges the
      company is facing.
    </p>
  </div>
</article>
```

## Primary modifier

To style a comment differently, for example to highlight it as the admin's comment, just add the `.uk-comment-primary` class.

```html
<article class="uk-comment uk-comment-primary">...</article>
```

### Example

```html
<article class="uk-comment uk-comment-primary" tabindex="-1" role="comment">
  <header class="uk-comment-header">
    <div class="flex items-center">
      <div class="uk-comment-avatar mr-2">
        <img
          src="https://api.dicebear.com/9.x/lorelei/svg?seed=John Doe"
          alt=""
        />
      </div>
      <div class="flex-1">
        <div class="uk-comment-title"><a href="#">John Doe</a></div>
        <p class="uk-comment-meta"><a href="#">2 hours ago</a></p>
      </div>
    </div>
  </header>
  <div class="uk-comment-body">
    <p>
      This is a great article! I really enjoyed reading about the history of the
      company and the challenges they faced. The insights provided are valuable
      for anyone interested in the industry.
    </p>
  </div>
</article>
```

## Lists

Add the `.uk-comment-list` class to a `<ul>` element to create a list of comments. You can nest any number of `<ul>` elements inside a comment list.

```html
<ul class="uk-comment-list">
  <li>
    <article class="uk-comment">...</article>
    <ul>
      <li>
        <article class="uk-comment">...</article>
      </li>
    </ul>
  </li>
</ul>
```

### Example

```html
<ul class="uk-comment-list">
  <li>
    <article class="uk-comment" tabindex="-1" role="comment">
      <header class="uk-comment-header">
        <div class="flex items-center">
          <div class="uk-comment-avatar mr-2">
            <img
              src="https://api.dicebear.com/9.x/lorelei/svg?seed=John Doe"
              alt=""
            />
          </div>
          <div class="flex-1">
            <div class="uk-comment-title"><a href="#">John Doe</a></div>
            <p class="uk-comment-meta"><a href="#">2 hours ago</a></p>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>
          This is a great article! I really enjoyed reading about the history of
          the company and the challenges they faced. The insights provided are
          valuable for anyone interested in the industry.
        </p>
      </div>
    </article>
    <ul>
      <li>
        <article class="uk-comment" tabindex="-1" role="comment">
          <header class="uk-comment-header">
            <div class="flex items-center">
              <div class="uk-comment-avatar mr-2">
                <img
                  src="https://api.dicebear.com/9.x/lorelei/svg?seed=Jane Smith"
                  alt=""
                />
              </div>
              <div class="flex-1">
                <div class="uk-comment-title"><a href="#">Jane Smith</a></div>
                <p class="uk-comment-meta"><a href="#">1 hour ago</a></p>
              </div>
            </div>
          </header>
          <div class="uk-comment-body">
            <p>
              I agree, this was a really insightful article. The historical
              context provided a great foundation for understanding the current
              challenges the company is facing.
            </p>
          </div>
        </article>
      </li>
    </ul>
  </li>
  <li>
    <article class="uk-comment" tabindex="-1" role="comment">
      <header class="uk-comment-header">
        <div class="flex items-center">
          <div class="uk-comment-avatar mr-2">
            <img
              src="https://api.dicebear.com/9.x/lorelei/svg?seed=Sarah Johnson"
              alt=""
            />
          </div>
          <div class="flex-1">
            <div class="uk-comment-title"><a href="#">Sarah Johnson</a></div>
            <p class="uk-comment-meta"><a href="#">4 days ago</a></p>
          </div>
        </div>
      </header>
      <div class="uk-comment-body">
        <p>
          I have a few thoughts on this article. While the historical context
          was interesting, I felt the analysis of the current challenges could
          have been more in-depth. It would have been helpful to see some
          concrete recommendations or solutions proposed.
        </p>
      </div>
    </article>
    <ul>
      <li>
        <article class="uk-comment" tabindex="-1" role="comment">
          <header class="uk-comment-header">
            <div class="flex items-center">
              <div class="uk-comment-avatar mr-2">
                <img
                  src="https://api.dicebear.com/9.x/lorelei/svg?seed=Alice Cooper"
                  alt=""
                />
              </div>
              <div class="flex-1">
                <div class="uk-comment-title"><a href="#">Alice Cooper</a></div>
                <p class="uk-comment-meta"><a href="#">1 hour ago</a></p>
              </div>
            </div>
          </header>
          <div class="uk-comment-body">
            <p>
              I agree, this is a really useful feature. I can see it being great
              for managing discussions on my blog.
            </p>
          </div>
        </article>
      </li>
      <li>
        <article class="uk-comment" tabindex="-1" role="comment">
          <header class="uk-comment-header">
            <div class="flex items-center">
              <div class="uk-comment-avatar mr-2">
                <img
                  src="https://api.dicebear.com/9.x/lorelei/svg?seed=Sarah Miller"
                  alt=""
                />
              </div>
              <div class="flex-1">
                <div class="uk-comment-title"><a href="#">Sarah Miller</a></div>
                <p class="uk-comment-meta"><a href="#">30 minutes ago</a></p>
              </div>
            </div>
          </header>
          <div class="uk-comment-body">
            <p>
              I'm really excited to try this out. It looks like it will make
              managing comments a breeze.
            </p>
          </div>
        </article>
      </li>
    </ul>
  </li>
</ul>
```

## Accessibility

Set the appropriate WAI-ARIA roles, states and properties to the Comment component.

- Set the `comment` role for each _comment_.

```html
<ul class="uk-comment-list">
  <li>
    <article class="uk-comment" role="comment">...</article>
    <ul>
      <li>
        <article class="uk-comment" role="comment">...</article>
      </li>
    </ul>
  </li>
</ul>
```

---

## Container

Add the `.uk-container` class to a block element to give it a max-width and wrap the main content of your website. The element will be centered and have padding on the sides, that adapts automatically for large screens.

Note: The padding of nested containers will be removed to avoid unnecessary spacing.

```html
<div class="uk-container"></div>
```

## Size modifiers

Add one of the following classes to the container to apply a different max-width.

| Class                  | Description                                                                                                    |
| ---------------------- | -------------------------------------------------------------------------------------------------------------- |
| `.uk-container-xs`     | Add this class for a xsmall container.                                                                         |
| `.uk-container-sm`     | Add this class for a small container.                                                                          |
| `.uk-container-lg`     | Add this class for a large container.                                                                          |
| `.uk-container-xl`     | Add this class for a xlarge container.                                                                         |
| `.uk-container-expand` | Add this class, if you do not want to limit the container width but still want the dynamic horizontal padding. |

```html
<div class="uk-container uk-container-xs"></div>

<div class="uk-container uk-container-sm"></div>

<div class="uk-container uk-container-lg"></div>

<div class="uk-container uk-container-xl"></div>

<div class="uk-container uk-container-expand"></div>
```

---

## Divider

You can use the `.uk-hr` class to an `<hr/>` or `<div>` element to illustrate a separation of different content parts on your pages. The Divider component allows you to add different styles to these dividers.

### Example

```html
<hr class="uk-hr" />
```

## Divider icon

Add the `.uk-divider-icon` class to a `<hr>` or `<div>` element to create a divider with some decoration, like an icon.

### Example

```html
<hr class="uk-divider-icon" />
```

## Divider small

Add the `.uk-divider-sm` class to a `<hr>` or `<div>` element to create a smaller divider.

### Example

```html
<hr class="uk-divider-sm" />
```

## Divider vertical

Add the `.uk-divider-vertical` class to a `<hr>` or `<div>` element to create a vertical divider.

### Example

```html
<hr class="uk-divider-vertical" />
```
---

## Dropdown

The Dropdown component is aim-aware. This means the dropdown stays open as long as the mouse pointer moves towards the dropdown. An additional delay ensures that the dropdown stays open even if the mouse pointer shortly moves in another direction. A dropdown closes immediately if another menu item is hovered.

A dropdown is an example of the [drop](https://franken-ui.dev/docs/2.1/drop) that provides its [own styling](https://github.com/uikit/uikit/issues/2237). Any content, like a button, can toggle a dropdown. Just add the `data-uk-dropdown` attribute to a block element following the toggle.

### Example

```html
<button class="uk-btn uk-btn-default mr-2" type="button">Hover</button>
<div class="uk-drop uk-dropdown min-w-52" data-uk-dropdown>
  <ul class="uk-nav uk-dropdown-nav">
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-nav-header">Header</li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-nav-divider"></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>

<button class="uk-btn uk-btn-default" type="button">Click</button>
<div class="uk-drop uk-dropdown min-w-52" data-uk-dropdown="mode: click">
  <ul class="uk-nav uk-dropdown-nav">
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-nav-header">Header</li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-nav-divider"></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>
```

---

## Filter

The Filter component is often used together with grid component, especially the masonry grid, but it's not bound to it. Any layout can be filtered or sorted no matter how the items are positioned. Items fade and move with smooth transitions between the different filtering and sorting states.

To apply this component, you need a container element with the `data-uk-filter="target: SELECTOR"` attribute. Inside this container create a list of filter controls as well as the layout items you want to filter. Use the `target: SELECTOR` option to select the element containing the layout items.

```html
<div data-uk-filter="target: .js-filter">
  <!-- Filter controls -->
  <ul>
    <li><a href="#"></a></li>
  </ul>

  <!-- Layout items -->
  <ul class="js-filter">
    <li></li>
  </ul>
</div>
```

Next, we need to define the metadata for each layout item, for example which category the item belongs to. Use any HTML class or attribute to do so.

To apply a filter control, add the `data-uk-filter-control` attribute. To define the metadata that should be filtered, use the `filter: SELECTOR` option. The selector can be any CSS selector like an HTML class or an attribute you define for the layout items.

```html
<div data-uk-filter="target: .js-filter">
  <ul>
    <li data-uk-filter-control="filter: .tag-blue"><a href="#"></a></li>
  </ul>

  <ul class="js-filter">
    <li class="tag-blue"></li>
  </ul>
</div>
```

If `target` is the only option in the `data-uk-filter` attribute value, you can also use `data-uk-filter="SELECTOR"`. The same applies to the filter control. If `filter` is the only option in the `data-uk-filter-control` attribute value, you can also use `data-uk-filter-control="SELECTOR"`.

```html
<div data-uk-filter=".js-filter">
  <ul>
    <li data-uk-filter-control=".tag-blue"><a href="#"></a></li>
  </ul>

  <ul class="js-filter">
    <li class="tag-blue"></li>
  </ul>
</div>
```

### Example

```html
<div data-uk-filter="target: .js-filter">
  <ul class="uk-subnav uk-subnav-primary">
    <li data-uk-filter-control=".tag-white"><a href="#">White</a></li>
    <li data-uk-filter-control=".tag-blue"><a href="#">Blue</a></li>
    <li data-uk-filter-control=".tag-black"><a href="#">Black</a></li>
  </ul>

  <ul class="js-filter mt-4 grid grid-cols-2 gap-4 text-center md:grid-cols-3">
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
  </ul>
</div>
```

The Filter component comes unstyled, which allows you to use any of the other UIkit components to create the filter controls and layout items. For example, the [Nav](https://franken-ui.dev/docs/2.1/nav), [Subnav](https://franken-ui.dev/docs/2.1/subnav) and [Tab](https://franken-ui.dev/docs/2.1/tab) components can be used to style the filter controls.

## Animations

By default, the filter uses a `slide` animation for the items between the different filtering states. To apply a different animation, just add the `animation` option to the attribute.

| Animation      | Description                                                |
| -------------- | ---------------------------------------------------------- |
| `slide`        | Fade items out and in or slide them to their new position. |
| `fade`         | Fade all items out and in.                                 |
| `delayed-fade` | Fade items slightly delayed out and in.                    |

```html
<div data-uk-filter="animation: fade">…</div>
```

### Example

```html
<div data-uk-filter="target: .js-filter; animation: fade">
  <ul class="uk-subnav uk-subnav-primary">
    <li data-uk-filter-control=".tag-white"><a href="#">White</a></li>
    <li data-uk-filter-control=".tag-blue"><a href="#">Blue</a></li>
    <li data-uk-filter-control=".tag-black"><a href="#">Black</a></li>
  </ul>

  <ul class="js-filter mt-4 grid grid-cols-2 gap-4 text-center md:grid-cols-3">
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-white">
      <div class="p-4">Item</div>
    </li>
    <li class="tag-blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li class="tag-black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
  </ul>
</div>
```

## Active state

Add the `.uk-active` class to a filter control, and the filter will be applied initially.

```html
<li class="uk-active" data-uk-filter-control="[data-color='blue']">…</li>
```

### Example

```html
<div data-uk-filter="target: .js-filter">
  <ul class="uk-subnav uk-subnav-primary">
    <li class="uk-active" data-uk-filter-control="[data-color='white']">
      <a href="#">White</a>
    </li>
    <li data-uk-filter-control="[data-color='blue']"><a href="#">Blue</a></li>
    <li data-uk-filter-control="[data-color='black']"><a href="#">Black</a></li>
  </ul>

  <ul class="js-filter mt-4 grid grid-cols-2 gap-4 text-center md:grid-cols-3">
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
  </ul>
</div>
```

## Reset filter

To reset the filter and target all items, use the `data-uk-filter-control` attribute without any specified selector.

```html
<li data-uk-filter-control>…</li>
```

### Example

```html
<div data-uk-filter="target: .js-filter">
  <ul class="uk-subnav uk-subnav-primary">
    <li class="uk-active" data-uk-filter-control><a href="#">All</a></li>
    <li data-uk-filter-control="[data-color='white']"><a href="#">White</a></li>
    <li data-uk-filter-control="[data-color='blue']"><a href="#">Blue</a></li>
    <li data-uk-filter-control="[data-color='black']"><a href="#">Black</a></li>
  </ul>

  <ul class="js-filter mt-4 grid grid-cols-2 gap-4 text-center md:grid-cols-3">
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="white">
      <div class="p-4">Item</div>
    </li>
    <li data-color="blue">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-color="black">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
  </ul>
</div>
```

## Metadata

Items can have different metadata for filtering. You just need to define the HTML classes or `data` attributes and create the corresponding CSS selectors for the filter controls. This example uses `data` attributes for the filter instead of HTML classes.

```html
<div data-uk-filter="target: .js-filter">
  <ul>
    <li data-uk-filter-control="[data-tags*='blue']"><a href="#"></a></li>
  </ul>

  <ul class="js-filter">
    <li data-tags="blue dark"></li>
  </ul>
</div>
```

### Example

```html
<div data-uk-filter="target: .js-filter">
  <ul class="uk-subnav uk-subnav-primary">
    <li data-uk-filter-control="[data-tags*='white']"><a href="#">White</a></li>
    <li data-uk-filter-control="[data-tags*='blue']"><a href="#">Blue</a></li>
    <li data-uk-filter-control="[data-tags*='black']"><a href="#">Black</a></li>
    <li data-uk-filter-control="[data-tags*='dark']">
      <a href="#">Dark Colors</a>
    </li>
  </ul>

  <ul class="js-filter mt-4 grid grid-cols-2 gap-4 text-center md:grid-cols-3">
    <li data-tags="white">
      <div class="p-4">Item</div>
    </li>
    <li data-tags="blue dark">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-tags="white">
      <div class="p-4">Item</div>
    </li>
    <li data-tags="white">
      <div class="p-4">Item</div>
    </li>
    <li data-tags="black dark">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-tags="black dark">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-tags="blue dark">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-tags="black dark">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
    <li data-tags="blue dark">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-tags="white">
      <div class="p-4">Item</div>
    </li>
    <li data-tags="blue dark">
      <div class="bg-blue-500 p-4 text-blue-50">Item</div>
    </li>
    <li data-tags="black dark">
      <div class="bg-black p-4 text-white">Item</div>
    </li>
  </ul>
</div>
```

## Multiple Filters

Define different types of metadata and add any number of controls to filter them. The filter controls are exclusive, meaning just one criterion is filtered at a time.

```html
<div data-uk-filter="target: .js-filter">
  <ul>
    <li data-uk-filter-control="[data-color='blue']"><a href="#"></a></li>
  </ul>

  <ul>
    <li data-uk-filter-control="[data-size='small']"><a href="#"></a></li>
  </ul>

  <ul class="js-filter">
    <li data-color="blue" data-size="small"></li>
  </ul>
</div>
```

### Example

```html
<div data-uk-filter="target: .js-filter">
  <div class="flex gap-x-4 divide-x divide-border">
    <div>
      <ul class="uk-subnav uk-subnav-primary" uk-margin>
        <li class="uk-active" data-uk-filter-control><a href="#">All</a></li>
      </ul>
    </div>
    <div>
      <ul class="uk-subnav uk-subnav-primary" uk-margin>
        <li data-uk-filter-control="[data-color='white']">
          <a href="#">White</a>
        </li>
        <li data-uk-filter-control="[data-color='blue']">
          <a href="#">Blue</a>
        </li>
        <li data-uk-filter-control="[data-color='black']">
          <a href="#">Black</a>
        </li>
      </ul>
    </div>
    <div>
      <ul class="uk-subnav uk-subnav-primary" uk-margin>
        <li data-uk-filter-control="[data-size='small']">
          <a href="#">Small</a>
        </li>
        <li data-uk-filter-control="[data-size='medium']">
          <a href="#">Medium</a>
        </li>
        <li data-uk-filter-control="[data-size='large']">
          <a href="#">Large</a>
        </li>
      </ul>
    </div>
  </div>

  <ul
    class="js-filter mt-4 grid grid-cols-2 text-center md:grid-cols-3"
    data-uk-grid="masonry: true"
  >
    <li class="p-4" data-color="white" data-size="large">
      <div class="h-96">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="small">
      <div class="h-60 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="white" data-size="medium">
      <div class="h-80">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="white" data-size="small">
      <div class="h-60">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="medium">
      <div class="h-80 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="small">
      <div class="h-60 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="medium">
      <div class="h-80 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="large">
      <div class="h-96 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="large">
      <div class="h-96 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="white" data-size="large">
      <div class="h-96">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="medium">
      <div class="h-80 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="small">
      <div class="h-60 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
  </ul>
</div>
```

## Groups

To filter items by multiple criteria at the same time, the filter controls need to be grouped. Just add the `group: NAME` option to the `data-uk-filter-control` attribute and define group names for the metadata.

```html
<div data-uk-filter="target: .js-filter">
  <ul>
    <li data-uk-filter-control="filter: [data-color='blue']; group: color">
      <a href="#"></a>
    </li>
    <li data-uk-filter-control="filter: [data-color='white']; group: color">
      <a href="#"></a>
    </li>
  </ul>

  <ul>
    <li data-uk-filter-control="filter: [data-size='small']; group: size">
      <a href="#"></a>
    </li>
    <li data-uk-filter-control="filter: [data-size='large']; group: size">
      <a href="#"></a>
    </li>
  </ul>

  <ul class="js-filter">
    <li data-color="blue" data-size="small"></li>
  </ul>
</div>
```

### Example

```html
<div data-uk-filter="target: .js-filter">
  <div class="flex gap-x-4 divide-x divide-border">
    <div>
      <ul class="uk-subnav uk-subnav-primary" uk-margin>
        <li class="uk-active" data-uk-filter-control><a href="#">All</a></li>
      </ul>
    </div>
    <div>
      <ul class="uk-subnav uk-subnav-primary" uk-margin>
        <li
          data-uk-filter-control="filter: [data-color='white']; group: data-color"
        >
          <a href="#">White</a>
        </li>
        <li
          data-uk-filter-control="filter: [data-color='blue']; group: data-color"
        >
          <a href="#">Blue</a>
        </li>
        <li
          data-uk-filter-control="filter: [data-color='black']; group: data-color"
        >
          <a href="#">Black</a>
        </li>
      </ul>
    </div>
    <div>
      <ul class="uk-subnav uk-subnav-primary" uk-margin>
        <li data-uk-filter-control="filter: [data-size='small']; group: size">
          <a href="#">Small</a>
        </li>
        <li data-uk-filter-control="filter: [data-size='medium']; group: size">
          <a href="#">Medium</a>
        </li>
        <li data-uk-filter-control="filter: [data-size='large']; group: size">
          <a href="#">Large</a>
        </li>
      </ul>
    </div>
  </div>

  <ul
    class="js-filter mt-4 grid grid-cols-2 text-center md:grid-cols-3"
    data-uk-grid="masonry: true"
  >
    <li class="p-4" data-color="white" data-size="large">
      <div class="h-96">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="small">
      <div class="h-60 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="white" data-size="medium">
      <div class="h-80">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="white" data-size="small">
      <div class="h-60">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="medium">
      <div class="h-80 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="small">
      <div class="h-60 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="medium">
      <div class="h-80 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="large">
      <div class="h-96 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="large">
      <div class="h-96 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="white" data-size="large">
      <div class="h-96">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="blue" data-size="medium">
      <div class="h-80 bg-blue-500 text-blue-50">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
    <li class="p-4" data-color="black" data-size="small">
      <div class="h-60 bg-black text-white">
        <div class="uk-position-center">Item</div>
      </div>
    </li>
  </ul>
</div>
```

## Sorting

To sort items alphanumerically, just add the `sort: ATTRIBUTE` option to the `data-uk-filter-control` attribute and define the metadata attribute by which the items should be sorted. By default, items are sorted in ascending order. Add the `order: desc` to sort items in descending order.

```html
<div data-uk-filter="target: .js-filter">
  <ul>
    <li data-uk-filter-control="sort: data-color"><a href="#"></a></li>
    <li data-uk-filter-control="sort: data-color; order: desc">
      <a href="#"></a>
    </li>
  </ul>

  <ul class="js-filter">
    <li data-color="blue"></li>
  </ul>
</div>
```

### Example

```html
<div data-uk-filter="target: .js-filter">
  <ul class="uk-subnav uk-subnav-primary">
    <li class="uk-active" data-uk-filter-control="sort: data-date">
      <a href="#">Asc</a>
    </li>
    <li data-uk-filter-control="sort: data-date; order: desc">
      <a href="#">Desc</a>
    </li>
  </ul>

  <ul class="js-filter mt-4 grid grid-cols-2 gap-4 text-center md:grid-cols-3">
    <li data-date="2016-06-01">
      <div class="p-4">2016-06-01</div>
    </li>
    <li data-date="2016-12-13">
      <div class="bg-blue-500 p-4 text-blue-50">2016-12-13</div>
    </li>
    <li data-date="2017-05-20">
      <div class="p-4">2017-05-20</div>
    </li>
    <li data-date="2017-09-17">
      <div class="p-4">2017-09-17</div>
    </li>
    <li data-date="2017-11-03">
      <div class="bg-black p-4 text-white">2017-11-03</div>
    </li>
    <li data-date="2017-12-25">
      <div class="bg-black p-4 text-white">2017-12-25</div>
    </li>
    <li data-date="2018-01-30">
      <div class="bg-blue-500 p-4 text-blue-50">2018-01-30</div>
    </li>
    <li data-date="2018-02-01">
      <div class="bg-black p-4 text-white">2018-02-01</div>
    </li>
    <li data-date="2018-03-11">
      <div class="bg-blue-500 p-4 text-blue-50">2018-03-11</div>
    </li>
    <li data-date="2018-06-13">
      <div class="p-4">2018-06-13</div>
    </li>
    <li data-date="2018-10-27">
      <div class="bg-blue-500 p-4 text-blue-50">2018-10-27</div>
    </li>
    <li data-date="2018-12-02">
      <div class="bg-black p-4 text-white">2018-12-02</div>
    </li>
  </ul>
</div>
```

## Masonry Grid

A filter is often applied to a [Masonry Grid](https://franken-ui.dev/docs/2.1/masonry-grid). The filter transition works perfectly with any kind of layout no matter how the items are positioned. It even works with the `parallax` option from the Masonry Grid component.

Here is a comprehensive example with a masonry grid:

### Example

```html
<div data-uk-filter="target: .js-filter">
  <div class="flex items-center justify-between">
    <div class="flex-1">
      <div class="flex gap-x-4 divide-x divide-border">
        <div>
          <ul class="uk-subnav uk-subnav-primary" uk-margin>
            <li class="uk-active" data-uk-filter-control>
              <a href="#">All</a>
            </li>
          </ul>
        </div>
        <div>
          <ul class="uk-subnav uk-subnav-primary" uk-margin>
            <li data-uk-filter-control="[data-color='white']">
              <a href="#">White</a>
            </li>
            <li data-uk-filter-control="[data-color='blue']">
              <a href="#">Blue</a>
            </li>
            <li data-uk-filter-control="[data-color='black']">
              <a href="#">Black</a>
            </li>
          </ul>
        </div>
        <div>
          <ul class="uk-subnav uk-subnav-primary" uk-margin>
            <li data-uk-filter-control="[data-size='small']">
              <a href="#">Small</a>
            </li>
            <li data-uk-filter-control="[data-size='medium']">
              <a href="#">Medium</a>
            </li>
            <li data-uk-filter-control="[data-size='large']">
              <a href="#">Large</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="flex flex-none gap-x-4">
      <span class="uk-active" data-uk-filter-control="sort: data-name">
        <a class="uk-icon-link" href="#" aria-label="Sort ascending">
          <uk-icon icon="arrow-down"></uk-icon>
        </a>
      </span>
      <span data-uk-filter-control="sort: data-name; order: desc">
        <a class="uk-icon-link" href="#" aria-label="Sort descending">
          <uk-icon icon="arrow-up"></uk-icon>
        </a>
      </span>
    </div>
  </div>

  <ul
    class="js-filter mt-4 grid grid-cols-2 text-center md:grid-cols-3"
    data-uk-grid="masonry: true"
  >
    <li class="p-4" data-name="A" data-color="white" data-size="large">
      <div class="h-96">
        <div class="uk-position-center">A</div>
      </div>
    </li>
    <li class="p-4" data-name="B" data-color="blue" data-size="small">
      <div class="h-60 bg-blue-500 text-blue-50">
        <div class="uk-position-center">B</div>
      </div>
    </li>
    <li class="p-4" data-name="C" data-color="white" data-size="medium">
      <div class="h-80">
        <div class="uk-position-center">C</div>
      </div>
    </li>
    <li class="p-4" data-name="D" data-color="white" data-size="small">
      <div class="h-60">
        <div class="uk-position-center">D</div>
      </div>
    </li>
    <li class="p-4" data-name="E" data-color="black" data-size="medium">
      <div class="h-80 bg-black text-white">
        <div class="uk-position-center">E</div>
      </div>
    </li>
    <li class="p-4" data-name="F" data-color="black" data-size="small">
      <div class="h-60 bg-black text-white">
        <div class="uk-position-center">F</div>
      </div>
    </li>
    <li class="p-4" data-name="G" data-color="blue" data-size="medium">
      <div class="h-80 bg-blue-500 text-blue-50">
        <div class="uk-position-center">G</div>
      </div>
    </li>
    <li class="p-4" data-name="H" data-color="black" data-size="large">
      <div class="h-96 bg-black text-white">
        <div class="uk-position-center">H</div>
      </div>
    </li>
    <li class="p-4" data-name="I" data-color="blue" data-size="large">
      <div class="h-96 bg-blue-500 text-blue-50">
        <div class="uk-position-center">I</div>
      </div>
    </li>
    <li class="p-4" data-name="J" data-color="white" data-size="large">
      <div class="h-96">
        <div class="uk-position-center">J</div>
      </div>
    </li>
    <li class="p-4" data-name="K" data-color="blue" data-size="medium">
      <div class="h-80 bg-blue-500 text-blue-50">
        <div class="uk-position-center">K</div>
      </div>
    </li>
    <li class="p-4" data-name="L" data-color="black" data-size="small">
      <div class="h-60 bg-black text-white">
        <div class="uk-position-center">L</div>
      </div>
    </li>
  </ul>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option      | Value           | Default | Description                                                  |
| ----------- | --------------- | ------- | ------------------------------------------------------------ |
| `target`    | String          |         | The targeted list on which to apply the filter to.           |
| `selActive` | String, Boolean | `false` | A selector for the initially active filter controls.         |
| `animation` | String, Boolean | `slide` | Animation mode (`slide`, `fade`, `delayed-fade` or `false`). |
| `duration`  | Number          | `250`   | Animation duration in milliseconds.                          |

`target` is the _Primary_ option and its key may be omitted, if it's the only option in the attribute value.

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.filter(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name           | Description                              |
| -------------- | ---------------------------------------- |
| `beforeFilter` | Fires before the filter is applied.      |
| `afterFilter`  | Fires after the filter has been applied. |

## Accessibility

The Filter component automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _filter controls_ have the `aria-selected` state.

---

## Form

Add one of the following classes to form controls inside a `<form>` element to define them.

| Class               | Description                                                                     |
| ------------------- | ------------------------------------------------------------------------------- |
| `.uk-input`         | Add this class to `<input>` elements.                                           |
| `.uk-select`        | Add this class to `<select>` elements.                                          |
| `.uk-textarea`      | Add this class to `<textarea>` elements.                                        |
| `.uk-radio`         | Add this class to `<input type="radio">` elements to create radio buttons.      |
| `.uk-checkbox`      | Add this class to `<input type="checkbox">` elements to create checkboxes.      |
| `.uk-range`         | Add this class to `<input type="range">` elements to create range forms.        |
| `.uk-toggle-switch` | Add this class to `<input type="checkbox">` elements to create toggle switches. |

```html
<form>
  <input class="uk-input" type="text" />
  <select class="uk-select">
    <option></option>
    <option></option>
  </select>
  <textarea class="uk-textarea"></textarea>
  <input class="uk-radio" type="radio" />
  <input class="uk-checkbox" type="checkbox" />
  <input class="uk-range" type="range" />
</form>
```

Add the `.uk-fieldset` class to a `<fieldset>` element and the `.uk-legend` class to a `<legend>` element to define a fieldset and a form legend.

### Example

```html
<form>
  <fieldset class="uk-fieldset space-y-4">
    <div class="">
      <input
        class="uk-input"
        type="text"
        placeholder="Input"
        aria-label="Input"
      />
    </div>

    <div class="">
      <select class="uk-select" aria-label="Select">
        <option>Option 01</option>
        <option>Option 02</option>
      </select>
    </div>

    <div class="">
      <textarea
        class="uk-textarea"
        rows="5"
        placeholder="Textarea"
        aria-label="Textarea"
      ></textarea>
    </div>

    <div class="">
      <label class="mr-2">
        <input class="uk-radio mr-1" type="radio" name="radio2" checked />
        Option 1
      </label>
      <label>
        <input class="uk-radio mr-1" type="radio" name="radio2" /> Option 2
      </label>
    </div>

    <div class="">
      <label class="mr-2">
        <input class="uk-checkbox mr-1" type="checkbox" checked /> Option 1
      </label>
      <label><input class="uk-checkbox mr-1" type="checkbox" /> Option 2</label>
    </div>

    <div class="">
      <input
        class="uk-range"
        type="range"
        value="2"
        min="0"
        max="10"
        step="0.1"
        aria-label="Range"
      />
    </div>
  </fieldset>
</form>
```

## Destructive modifier

Add the `.uk-form-destructive` class to an `<input>`, `<select>` or `<textarea>` element to notify the user that the value is not validated.

### Example

```html
<div>
  <input
    class="uk-input uk-form-destructive"
    type="text"
    placeholder="form-destructive"
    aria-label="form-destructive"
    value="form-destructive"
  />
</div>

<div class="mt-4">
  <input
    class="uk-input"
    type="text"
    placeholder="disabled"
    aria-label="disabled"
    value="disabled"
    disabled
  />
</div>
```

## Size modifiers

There are several size modifiers available. Just add one of the following classes to make the form smaller or larger.

| Class         | Description               |
| ------------- | ------------------------- |
| `.uk-form-xs` | Applies extra small size. |
| `.uk-form-sm` | Applies small size.       |
| `.uk-form-md` | Applies medium size.      |
| `.uk-form-lg` | Applies large size.       |

### Example

```html
<form>
  <div class="">
    <input
      class="uk-input uk-form-xs"
      type="text"
      placeholder="xs"
      aria-label="xs"
    />
  </div>

  <div class="mt-4">
    <input
      class="uk-input uk-form-sm"
      type="text"
      placeholder="sm"
      aria-label="sm"
    />
  </div>

  <div class="mt-4">
    <input
      class="uk-input uk-form-md"
      type="text"
      placeholder="md"
      aria-label="md"
    />
  </div>

  <div class="mt-4">
    <input
      class="uk-input uk-form-lg"
      type="text"
      placeholder="lg"
      aria-label="lg"
    />
  </div>
</form>
```

## Width modifiers

You can use Tailwind CSS utility classes alongside form classes and the it will follow its width.

### Example

```html
<div class="space-y-4">
  <div class="w-40">
    <input class="uk-input" type="text" placeholder="w-40" aria-label="w-40" />
  </div>
  <div class="w-1/2">
    <input
      class="uk-input"
      type="text"
      placeholder="w-1/2"
      aria-label="w-1/2"
    />
  </div>
  <div class="w-full">
    <input
      class="uk-input"
      type="text"
      placeholder="w-full"
      aria-label="w-full"
    />
  </div>
</div>
```

## Blank modifier

Add the `.uk-form-blank` class to minimize the styling of form controls.

### Example

```html
<form>
  <input class="uk-input uk-form-blank" type="text" placeholder="Form blank" />
</form>
```

## Layout

Define labels and controls and apply a stacked or horizontal layout to form elements. Layout modifiers can be added to any parent element like the `<fieldset>` element. This makes it possible to have different form layouts for each fieldset.

| Class                     | Description                                                     |
| ------------------------- | --------------------------------------------------------------- |
| `.uk-form-stacked`        | Add this class to display labels on top of controls.            |
| `.uk-form-horizontal`     | Add this class to display labels and controls side by side.     |
| `.uk-form-label`          | Add this class to define form labels.                           |
| `.uk-form-label-required` | Add this class to automatically add an asterisk to form labels. |
| `.uk-form-controls`       | Add this class to define form controls.                         |

```html
<form class="uk-form-stacked">
  <div>
    <label class="uk-form-label"></label>
    <div class="uk-form-controls">…</div>
  </div>
  <div>
    <div class="uk-form-label"></div>
    <div class="uk-form-controls">…</div>
  </div>
</form>
```

### Example

```html
<form class="uk-form-stacked space-y-4">
  <div class="">
    <label class="uk-form-label uk-form-label-required" for="form-stacked-text">
      Text
    </label>
    <div class="uk-form-controls">
      <input
        class="uk-input"
        id="form-stacked-text"
        type="text"
        placeholder="Some text"
      />
    </div>
  </div>

  <div class="">
    <label class="uk-form-label" for="form-stacked-select">Select</label>
    <div class="uk-form-controls">
      <select class="uk-select" id="form-stacked-select">
        <option>Option 01</option>
        <option>Option 02</option>
      </select>
    </div>
  </div>

  <div class="">
    <div class="uk-form-label">Radio</div>
    <div class="uk-form-controls">
      <label class="mr-2">
        <input class="uk-radio mr-1" type="radio" name="radio1" /> Option 01
      </label>
      <label>
        <input class="uk-radio mr-1" type="radio" name="radio1" /> Option 02
      </label>
    </div>
  </div>
</form>
```

### Horizontal form

Use the `.uk-form-controls-text` class to better align checkboxes and radio buttons when using them with text in a horizontal layout.

```html
<form class="uk-form-horizontal">
  <div>
    <label class="uk-form-label"></label>
    <div class="uk-form-controls">…</div>
  </div>
  <div>
    <div class="uk-form-label"></div>
    <div class="uk-form-controls uk-form-controls-text">…</div>
  </div>
</form>
```

### Example

```html
<form class="uk-form-horizontal space-y-4">
  <div class="">
    <label class="uk-form-label" for="form-horizontal-text">Text</label>
    <div class="uk-form-controls">
      <input
        class="uk-input"
        id="form-horizontal-text"
        type="text"
        placeholder="Some text"
      />
    </div>
  </div>

  <div class="">
    <label class="uk-form-label" for="form-horizontal-select">Select</label>
    <div class="uk-form-controls">
      <select class="uk-select" id="form-horizontal-select">
        <option>Option 01</option>
        <option>Option 02</option>
      </select>
    </div>
  </div>

  <div class="">
    <div class="uk-form-label">Radio</div>
    <div class="uk-form-controls uk-form-controls-text">
      <label class="mr-2">
        <input class="uk-radio mr-1" type="radio" name="radio1" /> Option 01
      </label>
      <label>
        <input class="uk-radio mr-1" type="radio" name="radio1" /> Option 02
      </label>
    </div>
  </div>
</form>
```

## Form and icons

You use an icon from the [Icon component](https://franken-ui.dev/docs/2.1/icon) inside a form. Add the `.uk-form-icon` class to a `<span>` element. Group it with an `<input>` element by adding the `.uk-inline` class to a container element around both. The icon has to come first in the markup. By default, the icon will be placed on the left side of the form. To change the alignment, add the `.uk-form-icon-flip` class.

```html
<div class="uk-inline">
  <span class="uk-form-icon">
    <uk-icon icon="user"></uk-icon>
  </span>
  <input class="uk-input" />
</div>
```

### Example

```html
<form class="space-y-4">
  <div class="">
    <div class="uk-inline">
      <span class="uk-form-icon">
        <uk-icon icon="user"></uk-icon>
      </span>
      <input class="uk-input" type="text" aria-label="Not clickable icon" />
    </div>
  </div>

  <div class="">
    <div class="uk-inline">
      <span class="uk-form-icon uk-form-icon-flip">
        <uk-icon icon="user"></uk-icon>
      </span>
      <input class="uk-input" type="text" aria-label="Not clickable icon" />
    </div>
  </div>
</form>
```

### Clickable icons

To enable an action, for example opening a modal to pick an image or link, use an `<a>` or `<button>` element to create the icon.

```html
<div class="uk-inline">
  <a class="uk-form-icon uk-form-icon-flip" href="">
    <uk-icon icon="user"></uk-icon>
  </a>
  <input class="uk-input" />
</div>
```

### Example

```html
<form class="space-y-4">
  <div class="">
    <div class="uk-inline">
      <a class="uk-form-icon" href="#">
        <uk-icon icon="file-pen-line"></uk-icon>
      </a>
      <input class="uk-input" type="text" aria-label="Clickable icon" />
    </div>
  </div>

  <div class="">
    <div class="uk-inline">
      <a class="uk-form-icon uk-form-icon-flip" href="#">
        <uk-icon icon="link"></uk-icon>
      </a>
      <input class="uk-input" type="text" aria-label="Clickable icon" />
    </div>
  </div>
</form>
```

## Custom controls

To replace a file input or select forms with your own HTML content, like a button or text, add the `data-uk-form-custom` attribute to a container element.

### File

Use a button or text as a file input.

```html
<div data-uk-form-custom>
  <input type="file" />
  <button type="button"></button>
</div>
```

### Example

```html
<form>
  <div class="">
    <div data-uk-form-custom>
      <input type="file" aria-label="Custom controls" />
      <button class="uk-btn uk-btn-default" type="button" tabindex="-1">
        Select
      </button>
    </div>
  </div>

  <div class="mt-4">
    <span class="uk-text-middle">Here is a text</span>
    <div data-uk-form-custom>
      <input type="file" aria-label="Custom controls" />
      <span class="uk-link">upload</span>
    </div>
  </div>

  <div class="mt-4">
    <div data-uk-form-custom="target: true">
      <input type="file" aria-label="Custom controls" />
      <input
        class="uk-input max-w-sm"
        type="text"
        placeholder="Select file"
        aria-label="Custom controls"
        disabled
      />
    </div>
    <button class="uk-btn uk-btn-default">Submit</button>
  </div>
</form>
```

Note: The hover and focus state for `uk-form-custom` are not styled by default, but you could use the adjacent sibling selector to do so.

### Select

Use a button, text or a link as a select form. Just add the `target: SELECTOR` option to the `uk-form-custom` attribute to select where the option value should be displayed. `target: true` will select the adjacent element in the markup.

```html
<div data-uk-form-custom="target: true">
  <select>
    <option></option>
    <option></option>
  </select>
  <button type="button"></button>
</div>
```

### Example

```html
<form>
  <div class="">
    <div data-uk-form-custom="target: true">
      <select aria-label="Custom controls">
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
        <option value="3">Option 03</option>
        <option value="4">Option 04</option>
      </select>
      <span></span>
    </div>
  </div>

  <div class="mt-4">
    <div data-uk-form-custom="target: > * > span:last-child">
      <select aria-label="Custom controls">
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
        <option value="3">Option 03</option>
        <option value="4">Option 04</option>
      </select>
      <span class="uk-flex-middle uk-link uk-flex">
        <span class="mr-2">
          <uk-icon icon="pencil-line"></uk-icon>
        </span>
        <span></span>
      </span>
    </div>
  </div>

  <div class="mt-4">
    <div data-uk-form-custom="target: > * > span:first-child">
      <select aria-label="Custom controls">
        <option value="">Please select...</option>
        <option value="1">Option 01</option>
        <option value="2">Option 02</option>
        <option value="3">Option 03</option>
        <option value="4">Option 04</option>
      </select>
      <button class="uk-btn uk-btn-default" type="button" tabindex="-1">
        <span></span>
        <span class="ml-2">
          <uk-icon icon="chevron-down"></uk-icon>
        </span>
      </button>
    </div>
  </div>
</form>
```

## Help block

Form text can be created using `.uk-form-help` and should be explicitly associated with the form control it relates to using the `aria-describedby` attribute. This will ensure that assistive technologies—such as screen readers—will announce this form text when the user focuses or enters the control.

### Example

```html
<div class="space-y-2">
  <label for="name" class="uk-form-label">Name</label>
  <input
    type="text"
    id="name"
    class="uk-input"
    aria-describedby="name-help-block"
    placeholder="Name"
  />
  <div class="uk-form-help" id="name-help-block">
    This is your public display name. It can be your real name or a pseudonym.
    You can only change this once every 30 days.
  </div>
</div>
```

## Toggle Switch

Use the following toggle switch component to ask for a yes or no type of input from your users without the use of JavaScript. You can also add the the `.uk-toggle-switch-destructive` modifier to apply a destructive style.

### Example

```html
<div class="flex items-center space-x-2">
  <input
    class="uk-toggle-switch uk-toggle-switch-primary"
    id="toggle-switch"
    type="checkbox"
  />
  <label class="uk-form-label" for="toggle-switch">Toggle me</label>
</div>

<div class="mt-4 flex items-center space-x-2">
  <input
    class="uk-toggle-switch uk-toggle-switch-primary"
    checked
    id="toggle-checked"
    type="checkbox"
  />
  <label class="uk-form-label" for="toggle-checked">Checked toggle</label>
</div>

<div class="mt-4 flex items-center space-x-2">
  <input
    class="uk-toggle-switch uk-toggle-switch-primary"
    disabled
    id="toggle-disabled"
    type="checkbox"
  />
  <label class="uk-form-label" for="toggle-disabled">Disabled toggle</label>
</div>

<div class="mt-4 flex items-center space-x-2">
  <input
    class="uk-toggle-switch uk-toggle-switch-primary"
    checked
    disabled
    id="toggle-disabled-checked"
    type="checkbox"
  />
  <label class="uk-form-label" for="toggle-disabled-checked"
    >Disabled checked toggle</label
  >
</div>

<div class="mt-4 flex items-center space-x-2">
  <input
    class="uk-toggle-switch uk-toggle-switch-destructive"
    checked
    id="toggle-checked"
    type="checkbox"
  />
  <label class="uk-form-label" for="toggle-checked">Destructive</label>
</div>
```

## Accessibility

Set the appropriate WAI-ARIA roles, states and properties to the Form component.

- If no `<label>` element is associated with the form control, set the `aria-label` property to the form control to describe its meaning.

```html
<input class="uk-input" type="text" aria-label="..." />
```

---

## Icon

Place scalable vector icons anywhere in your content.

Under the hood, Franken UI use Lucide, a collection of open-source icons known for their beautiful and consistent design. With built-in options for size, stroke width, and other attributes, this component simplifies the process of incorporating iconography into your web applications.

## Usage

To use the icons in your project, simply add the `<uk-icon icon="icon_name">` component with the appropriate icon name to your HTML content. For example, to display the `a-arrow-down` icon, insert `<uk-icon icon="a-arrow-down"></uk-icon>` into your markup.

NOTE: Make sure to include the icon library script. For more details see the [installation instructions](https://franken-ui.dev/docs/2.1/javascript). Once that's done, you can now use the `<uk-icon icon="icon_name"></uk-icon>` tag anywhere in your HTML.

## Preventing layout shift

When loading Web Components, there may be a brief delay before the content is fully rendered. This can result in a flash of unstyled content or unprocessed templates. To mitigate this issue, consider setting a predefined height on the parent element to prevent layout shift and ensure a smooth user experience.

```html
<div class="size-4">
  <uk-icon icon="smile"></uk-icon>
</div>
```

## Attributes

| Name           | Type   | Default | Description                                                                      |
| -------------- | ------ | ------- | -------------------------------------------------------------------------------- |
| `cls-custom`   | String |         | Allows you to add custom CSS classes, which will be attached to the `<svg>` tag. |
| `icon`         | String |         | Specifies the icon you want to display.                                          |
| `stroke-width` | String | 2       | Customizes the stroke width of the icon.                                         |
| `height`       | String | 16      | Customizes the height of the icon.                                               |
| `width`        | String | 16      | Customizes the width of the icon.                                                |
---

## Input date

The Input Date component is a web component built from scratch to allow users to easily select date and time. To get started, simply use the `<uk-input-date>` markup in your HTML code.

### Example

```html
<div class="h-10">
  <uk-input-date cls-custom="uk-input-fake"></uk-input-date>
</div>
```

## Styling

The `<uk-input-date>` component is intentionally unstyled by default, allowing you to easily customize its appearance to fit your needs.

To add custom styles, use the `cls-custom` attribute. This attribute accepts two formats:

- A JSON-stringified object
- A valid `key: value; foo: bar;` format

If you pass only class names, they will be applied directly to the button inside the component.

### Example

```html
<!-- Unstyled -->
<div class="h-10">
  <uk-input-date></uk-input-date>
</div>

<!-- Custom -->
<div class="h-10">
  <uk-input-date
    cls-custom="button: bg-lime-500 text-lime-50 w-full flex justify-between; icon: bg-orange-500 text-orange-50; dropdown: bg-purple-500 text-purple-50; calendar: bg-cyan-900 text-cyan-50; time: bg-emerald-500 text-emerald-900"
    icon="calendar"
    with-time
  >
  </uk-input-date>
</div>
```

## Capturing values

There are several ways to capture values from the `<uk-input-date>` component. The simplest approach is to add a `name` attribute to the component. When you do this, a hidden input field with the specified name will be automatically generated, allowing you to easily capture the selected value on your server.

```html
<uk-input-date name="date"></uk-input-date>
```

## Prepopulating values

To prepopulate the Input Date component with an existing value, simply pass the `value` attribute with a `YYYY-MM-DD` or `YYYY-MM-DDTHH:MM` format. To prepopulate with current date and time, just use the `today` attribute and it will automatically set the current date and time as the default value.

```html
<uk-input-date today></uk-input-date>
```

### Example

```html
<div class="h-10">
  <uk-input-date
    cls-custom="uk-input-fake"
    value="2023-06-30T20:00"
    with-time
  ></uk-input-date>
</div>

<div class="mt-4 h-10">
  <uk-input-date cls-custom="uk-input-fake" today with-time></uk-input-date>
</div>
```

## Customize display format

To customize the display format, you can use the following parsing tokens and pass them to the `display-format` attribute.

| Input |     Example      |            Description            |
| :---: | :--------------: | :-------------------------------: |
|  YY   |        01        |          Two-digit year           |
| YYYY  |       2001       |          Four-digit year          |
|   M   |       1-12       |       Month, beginning at 1       |
|  MM   |      01-12       |          Month, 2-digits          |
|  MMM  |     Jan-Dec      |    The abbreviated month name     |
| MMMM  | January-December |        The full month name        |
|  ddd  |    Mon - Sun     |   The abbreviated weekday name    |
| DDDD  | Monday - Sunday  |       The full weekday name       |
|   D   |       1-31       |           Day of month            |
|  DD   |      01-31       |      Day of month, 2-digits       |
|   H   |       0-23       |               Hours               |
|  HH   |      00-23       |          Hours, 2-digits          |
|   h   |       1-12       |       Hours, 12-hour clock        |
|  hh   |      01-12       |  Hours, 12-hour clock, 2-digits   |
|   m   |       0-59       |              Minutes              |
|  mm   |      00-59       |         Minutes, 2-digits         |
|   A   |      AM PM       | Post or ante meridiem, upper-case |
|   a   |      am pm       | Post or ante meridiem, lower-case |
|  Do   |    1st - 31st    |     Day of Month with ordinal     |

```html
<uk-input-date display-format="YYYY/MM/DD"></uk-input-date>
```

## Position

Because the `<uk-input-date>` component uses the [Drop](https://franken-ui.dev/docs/2.1/drop) component under the hood, we can leverage its positioning capabilities and position our dropdown anywhere we want. To position it, just use the `drop` attribute with your drop options.

### Example

```html
<div class="h-10">
  <uk-input-date
    cls-custom="uk-btn uk-btn-default"
    drop="mode: click; pos: right-center"
  >
  </uk-input-date>
</div>
```

## Size modifiers

There are several size modifiers available. Just add one of the following classes to the `cls-custom` attribute to make the input smaller or larger.

| Class         | Description               |
| ------------- | ------------------------- |
| `.uk-form-xs` | Applies extra small size. |
| `.uk-form-sm` | Applies small size.       |
| `.uk-form-md` | Applies medium size.      |
| `.uk-form-lg` | Applies large size.       |

### Example

```html
<div class="h-7">
  <uk-input-date cls-custom="uk-input-fake uk-form-xs"></uk-input-date>
</div>

<div class="mt-4 h-8">
  <uk-input-date cls-custom="uk-input-fake uk-form-sm"></uk-input-date>
</div>

<div class="mt-4 h-12">
  <uk-input-date cls-custom="uk-input-fake uk-form-md"></uk-input-date>
</div>

<div class="mt-4 h-14">
  <uk-input-date cls-custom="uk-input-fake uk-form-lg"></uk-input-date>
</div>
```

## Disable input

To prevent user input, add the `disabled` attribute to the `<uk-input-date>` element. This will disable the component, making it impossible for users to enter or modify its value.

### Example

```html
<div class="mt-4 h-10">
  <uk-input-date cls-custom="uk-input-fake" disabled></uk-input-date>
</div>
```

## Error state

To indicate an error state in the form, simply add the `.uk-form-destructive` class to the `cls-custom` attribute. This will apply a "destructive" state to the component, providing visual feedback to the user.

### Example

```html
<div class="space-y-2">
  <label class="uk-form-label text-destructive">Date</label>
  <div class="uk-form-controls">
    <uk-input-date
      cls-custom="uk-input-fake uk-form-destructive"
    ></uk-input-date>
  </div>
  <p class="uk-form-help text-destructive">This field is required.</p>
</div>
```

## Preventing layout shift

When loading Web Components, there may be a brief delay before the content is fully rendered. This can result in a flash of unstyled content or unprocessed templates. To mitigate this issue, consider setting a predefined height on the parent element to prevent layout shift and ensure a smooth user experience.

```html
<div class="h-10">
  <uk-input-date>...</uk-input-date>
</div>
```

## Internationalization

Because this component uses [Calendar](https://franken-ui.dev/docs/2.1/calendar#internationalization) and [Input Time](https://franken-ui.dev/docs/2.1/input-time#internationalization) under the hood, you can use and merge their `i18n` attributes. Please refer to their documentation for available options.

## Attributes

The following attributes are available for this component:

| Name                     | Type    | Default    | Description                                                                                                               |
| ------------------------ | ------- | ---------- | ------------------------------------------------------------------------------------------------------------------------- |
| `force-prevent-rerender` | Boolean | false      | Forcefully prevents component rerendering.                                                                                |
| `weekday-abbr-length`    | String  | 3          | Customize the length of weekday abbreviations (e.g., Monday → Mon).                                                       |
| `today`                  | Boolean | false      | Automatically sets today as the active date.                                                                              |
| `jumpable`               | Boolean | false      | Allows user to select a month and type a year for the calendar to "jump" to a specific date.                              |
| `starts-with`            | String  | 0 (Sunday) | Sets the starting day of the week. Either "0" (Sunday) or "1" (Monday).                                                   |
| `disabled-dates`         | String  |            | A comma-separated list of dates to disable. Dates must be in the format YYYY-MM-DD.                                       |
| `marked-dates`           | String  |            | A comma-separated list of dates to add an indicator. Dates must be in the format YYYY-MM-DD.                              |
| `view-date`              | String  |            | Sets the initial view date of the calendar. Dates must be in the format YYYY-MM-DD.                                       |
| `min`                    | String  |            | Sets the minimum date that can be selected. Date must be in the format YYYY-MM-DD.                                        |
| `max`                    | String  |            | Sets the maximum date that can be selected. Date must be in the format YYYY-MM-DD.                                        |
| `cls-custom`             | String  |            | Allows you to add custom CSS classes.                                                                                     |
| `disabled`               | Boolean | false      | Disables all input fields, making the entire component read-only.                                                         |
| `name`                   | String  |            | Defines the name of the input, allowing you to capture its value on your server.                                          |
| `value`                  | String  |            | A valid date time in `YYYY-MM-DD` or `YYYY-MM-DDTHH:MM` format that will be prepopulated in the input field.              |
| `i18n`                   | String  |            | Enables internationalization. Please see [Internationalization](#internationalization) for available options.             |
| `icon`                   | String  |            | Sets a customized icon. If no icon is passed, it will default to a calendar icon.                                         |
| `drop`                   | String  |            | Customize the dropping option for the dropdown. See [Drop](https://franken-ui.dev/docs/2.1/drop) component for more options.                    |
| `with-time`              | Boolean | false      | Allows inputting of time.                                                                                                 |
| `require-time`           | Boolean | false      | Requires time input. If user leaves it blank, it will prepopulate the current time.                                       |
| `display-format`         | String  |            | Customize the display format of the date. See [Customize display format](#customize-display-format) for available tokens. |

## Events

The Input Date component triggers the following events on elements with this component attached:

| Name                  | Description                                                                           |
| --------------------- | ------------------------------------------------------------------------------------- |
| `uk-input-date:input` | Fired after the value has changed, providing an opportunity to respond to user input. |

---

## Input pin

The Input PIN component is a web component built from scratch to allow users to input a sequence of one-character alphanumeric inputs. This is particularly useful in scenarios such as:

- Entering a verification code sent via SMS or email
- Authenticating with a two-factor authentication system
- Creating a secure password or passphrase

To get started, simply use the `<uk-input-pin>` markup in your HTML code.

### Example

```html
<uk-input-pin></uk-input-pin>
```

## Capturing values

There are several ways to capture values from the `<uk-input-pin>` component. The simplest approach is to add a `name` attribute to the component. When you do this, a hidden input field with the specified name will be automatically generated, allowing you to easily capture the selected value on your server.

```html
<uk-input-pin name="pin"></uk-input-pin>
```

## Customize length

By default, the Input PIN component is set to accept 6 characters. However, you can easily customize this by adding the `length` attribute to the `<uk-input-pin>` element. Simply specify the desired length as a numerical value, and the component will automatically adjust to accommodate the specified number of inputs.

### Example

```html
<uk-input-pin length="4"></uk-input-pin>
```

## Separated input

By default, the input fields in the Input PIN component are displayed adjacent to each other. To add visual separation between each input, simply add the `.uk-input-pin-separated` class to the `cls-custom` attribute. This will add gaps between each input, making it easier for users to distinguish between individual characters.

### Example

```html
<uk-input-pin cls-custom="uk-input-pin-separated"></uk-input-pin>
```

## Size modifiers

There are several size modifiers available. Just add one of the following classes to the `cls-custom` attribute to make the input smaller or larger.

| Class         | Description               |
| ------------- | ------------------------- |
| `.uk-form-xs` | Applies extra small size. |
| `.uk-form-sm` | Applies small size.       |
| `.uk-form-md` | Applies medium size.      |
| `.uk-form-lg` | Applies large size.       |

### Example

```html
<div class="h-7">
  <uk-input-pin cls-custom="uk-form-xs"></uk-input-pin>
</div>

<div class="mt-4 h-8">
  <uk-input-pin cls-custom="uk-form-sm"></uk-input-pin>
</div>

<div class="mt-4 h-12">
  <uk-input-pin cls-custom="uk-form-md"></uk-input-pin>
</div>

<div class="mt-4 h-14">
  <uk-input-pin cls-custom="uk-form-lg"></uk-input-pin>
</div>
```

## Disable input

To prevent user input, add the `disabled` attribute to the `<uk-input-pin>` element. This will disable all input fields, making it impossible for users to enter or modify the PIN sequence.

### Example

```html
<uk-input-pin disabled></uk-input-pin>
```

## Error state

To indicate an error state in the form, simply add the `.uk-form-destructive` class to the `cls-custom` attribute. This will apply a "destructive" state to the component, providing visual feedback to the user.

### Example

```html
<div class="space-y-2">
  <label class="uk-form-label text-destructive">PIN</label>
  <div class="uk-form-controls">
    <uk-input-pin cls-custom="uk-form-destructive"></uk-input-pin>
  </div>
  <p class="uk-form-help text-destructive">This field is required.</p>
</div>
```

## Preventing layout shift

When loading Web Components, there may be a brief delay before the content is fully rendered. This can result in a flash of unstyled content or unprocessed templates. To mitigate this issue, consider setting a predefined height on the parent element to prevent layout shift and ensure a smooth user experience.

```html
<div class="h-10">
  <uk-input-pin>...</uk-input-pin>
</div>
```

## Attributes

The following attributes are available for this component:

| Name                     | Type    | Default | Description                                                                          |
| ------------------------ | ------- | ------- | ------------------------------------------------------------------------------------ |
| `force-prevent-rerender` | Boolean | false   | Forcefully prevents component rerendering.                                           |
| `autofocus`              | Boolean | false   | Automatically focuses on the first input field when the component is rendered.       |
| `cls-custom`             | String  |         | Allows you to add custom CSS classes.                                                |
| `disabled`               | Boolean | false   | Disables all input fields, making the entire component read-only.                    |
| `length`                 | String  | 6       | Specifies the number of input fields, determining the length of the PIN sequence.    |
| `name`                   | String  |         | Defines the name of the PIN input, allowing you to capture its value on your server. |

## Events

The Input PIN component triggers the following events on elements with this component attached:

| Name                 | Description                                                                           |
| -------------------- | ------------------------------------------------------------------------------------- |
| `uk-input-pin:input` | Fired after the value has changed, providing an opportunity to respond to user input. |

---

## Input range

Input Range is a web component built from scratch to enable users to easily integrate customizable range sliders. With built-in support for keyboard navigation, ARIA attributes for accessibility, and a minimalist design.

To get started, simply use the `<uk-input-range>` markup in your HTML code.

### Example

```html
<div class="h-10">
  <uk-input-range></uk-input-range>
</div>
```

## Dual range

To enable dual range functionality (allowing you to select a range with both a minimum and maximum value), simply add the `multiple` attribute to your `<uk-input-range>` element. When this attribute is present, the component renders two knobs: one for the minimum value and one for the maximum value.

### Example

```html
<div class="h-10">
  <uk-input-range multiple></uk-input-range>
</div>
```

## Capturing values

There are several ways to capture values from the `<uk-input-range>` component. The simplest approach is to add a `name` attribute to the component. When you do this, a hidden input field with the specified name will be automatically generated, allowing you to easily capture the selected value on your server.

Note: When using the dual knob mode by including the `multiple` attribute, the component renders two hidden input fields—one for the lower value and one for the upper value. In this case, the name attribute is automatically appended with `[]` (e.g., `name="range[]"`) to indicate an array of values. This makes it straightforward to process both values on the server side.

```html
<uk-input-range name="range"></uk-input-range>
```

## Prepopulating values

Prepopulating the Input Range component is straightforward. Simply pass a value (or values) via the `value` attribute when declaring the component in your HTML. This is particularly useful when you need to display existing data that users can adjust or confirm.

Note: When using the dual knob mode, supply two values separated by a comma. The first value sets the lower bound, and the second value sets the upper bound.

### Example

```html
<div class="h-10">
  <uk-input-range value="75"></uk-input-range>
</div>

<div class="mt-4 h-10">
  <uk-input-range multiple value="20,80"></uk-input-range>
</div>
```

## Labeling

The `label` attribute allows you to display a label on each knob of the slider. This label can be used to show the current numeric value, or a custom text concatenated with the value.

### Example

```html
<div class="px-8">
  <div class="mt-10">
    <uk-input-range label></uk-input-range>
  </div>

  <div class="mt-10">
    <uk-input-range label="kg"></uk-input-range>
  </div>
</div>
```

Note: If you simply include the label attribute (or set it to true), the slider will display only the numeric value. Otherwise, label will be concatenated.

### Position

In addition to the `label`, you can control its position relative to the knob using the `label-position` attribute. This attribute accepts two values:

- `top` (default): The label appears above the knob.
- `bottom`: The label appears below the knob.

### Example

```html
<div class="px-8">
  <div class="mt-10">
    <uk-input-range label="kg"></uk-input-range>
  </div>

  <div class="mt-10">
    <uk-input-range label="kg" label-position="bottom"></uk-input-range>
  </div>
</div>
```

## Min and max

The `min` and `max` attributes define the range boundaries of the slider. They determine the lowest and highest possible values that can be selected.

### Example

```html
<div class="px-8">
  <div class="mt-10">
    <uk-input-range min="50" max="75" label></uk-input-range>
  </div>
</div>
```

## Step

The step attribute determines the interval at which the slider's value increments or decrements. This attribute mimics the behavior of the native HTML `<input type="range">`, ensuring that as you drag or use keyboard navigation, the value snaps to defined increments. For example, if the step is set to `0.5`, the slider will move in increments of `0.5` units, such as `0.0`, `0.5`, `1.0`, etc.

### Example

```html
<div class="px-8">
  <div class="mt-10">
    <uk-input-range label step="0.5"></uk-input-range>
  </div>

  <div class="mt-10">
    <uk-input-range label multiple step="0.5"></uk-input-range>
  </div>
</div>
```

## Disable input

To prevent user input, add the `disabled` attribute to the `<uk-input-range>` element. This will disable the component, making it impossible for users to enter or modify value.

### Example

```html
<div class="h-10">
  <uk-input-range disabled value="50"></uk-input-range>
</div>
```

## Attributes

The following attributes are available for this component:

| Name                     | Type            | Default | Description                                                                           |
| ------------------------ | --------------- | ------- | ------------------------------------------------------------------------------------- |
| `force-prevent-rerender` | Boolean         | false   | Forcefully prevents component rerendering.                                            |
| `name`                   | String          | `null`  | Specifies the name of the hidden input field for form submissions.                    |
| `disabled`               | Boolean         | `false` | Disables the slider, preventing user interaction.                                     |
| `multiple`               | Boolean         | `false` | Enables dual-knob mode for selecting a range of values.                               |
| `min`                    | String          | `0`     | Defines the minimum selectable value.                                                 |
| `max`                    | String          | `100`   | Defines the maximum selectable value.                                                 |
| `step`                   | String          | `1`     | Specifies the interval between selectable values.                                     |
| `label`                  | Boolean, String | `false` | Displays a value label above the knob (`true` for numbers, string for custom labels). |
| `label-position`         | String          | `top`   | Sets the position of the label relative to the knob.                                  |
| `value`                  | String          | `null`  | Defines the initial value (`"50.00"` for single, `"20.00,80.00"` for dual).           |

## Events

The Input Range component triggers the following events on elements with this component attached:

| Name                   | Description                                                                           |
| ---------------------- | ------------------------------------------------------------------------------------- |
| `uk-input-range:input` | Fired after the value has changed, providing an opportunity to respond to user input. |

---

## Input tag

The Input Tag component is a web component built from scratch to allow users to easily create and manage a list of tags or keywords, such as categorizing items, assigning labels, or filtering content. This is particularly useful in scenarios such as:

- Tagging articles or blog posts
- Organizing products or inventory by category
- Building a custom filtering system for a dataset

To get started, simply use the `<uk-input-tag>` markup in your HTML code.

Note: While this component provides features to help manage tags, such as preventing duplicates and handling input validation, it is still a frontend component and can be tampered with by users. Therefore, it is essential to sanitize and validate user input on the server-side to ensure data integrity and security.

### Example

```html
<form>
  <uk-input-tag placeholder="Add a fruit"></uk-input-tag>
</form>
```

## Capturing values

There are several ways to capture values from the `<uk-input-tag>` component. The simplest approach is to add a `name` attribute to the component. When you do this, a hidden input field with the specified name will be automatically generated, allowing you to easily capture the selected value on your server.

```html
<uk-input-tag name="tags"></uk-input-tag>
```

## Prepopulating values

To prepopulate the Input Tag component with existing values, simply pass the `value` attribute with a comma-separated list of tag values. This allows you to initialize the component with a set of default tags, making it easier for users to build upon or edit existing data.

### Example

```html
<form>
  <uk-input-tag
    placeholder="Add a fruit"
    value="Apple,Mango,Lemon"
  ></uk-input-tag>
</form>
```

## State modifiers

You can customize the appearance of individual tags by setting the `state` attribute. By default, tags will use the `uk-tag-secondary` class. However, you can choose from a range of available options to change the tag's visual state, including:

| Style         | Class used              | Description               |
| ------------- | ----------------------- | ------------------------- |
| `primary`     | `.uk-label-primary`     | Adds a primary style.     |
| `secondary`   | `.uk-label-secondary`   | Adds a secondary style.   |
| `destructive` | `.uk-label-destructive` | Adds a destructive style. |

This allows you to add visual cues to your tags, making it easier to convey different types of information or categorizations.

### Example

```html
<form>
  <div>
    <uk-input-tag
      placeholder="Add a tag"
      state="primary"
      value="Featured,Recommended,Verified"
    ></uk-input-tag>
  </div>

  <div class="mt-4">
    <uk-input-tag
      placeholder="Add a tag"
      value="Category,Topic,Tag,Label,Filter"
    ></uk-input-tag>
  </div>

  <div class="mt-4">
    <uk-input-tag
      placeholder="Add a tag"
      state="destructive"
      value="Deprecated,Error,Unsupported"
    ></uk-input-tag>
  </div>
</form>
```

## Behavior

The Input Tag component provides intuitive mouse and keyboard interactions to facilitate easy tag management.

### Mouse Behavior

- Clicking on a tag name will remove it from the list and place its value in the input field, allowing you to edit the tag.
- Clicking the close icon on a tag will remove it from the list entirely.

### Keyboard Behavior

- When the input field is empty and you press the backspace key, the last tag in the list will be removed and its value will be placed in the input field, allowing you to edit or delete it.
- Pressing Enter or comma (,) key will add input value to the list of tags.

These interactions enable a seamless and efficient tagging experience.

## Slugifying tags

By default, user-submitted tags will be added exactly as they are entered. To automatically convert tags into a slug format (e.g., converting spaces to hyphens, removing special characters, etc.), simply add the `slugify` attribute to the `<uk-input-tag>` element. This ensures that tags are formatted consistently and are more suitable for use in URLs or other technical contexts.

### Example

```html
<form>
  <uk-input-tag
    placeholder="Add a tag"
    slugify
    value="fan-fiction"
  ></uk-input-tag>
</form>
```

Under the hood, we use the popular [slugify](https://github.com/simov/slugify) package to convert user-submitted tags into a slug format. To customize the slugification process, you can pass options using the slugify-options attribute. This attribute accepts either a JSON-stringified object or a valid `key: value; foo: bar;` format.

### Available Options

The following options are available for customizing the slugify behavior:

| Option        | Description                                                                                   | Default |
| ------------- | --------------------------------------------------------------------------------------------- | ------- |
| `replacement` | The replacement string used to replace spaces and other characters                            | -       |
| `remove`      | A valid regular expression pattern to remove from the tag                                     |         |
| `lower`       | A boolean indicating whether to convert the tag to lowercase                                  | true    |
| `strict`      | A boolean indicating whether to strip special characters except for the replacement character | true    |
| `locale`      | The language code of the locale to use for slugification                                      |         |
| `trim`        | A boolean indicating whether to trim leading and trailing replacement characters              | true    |

For more information about the [slugify](https://github.com/simov/slugify) package and its options, please refer to the [official documentation](https://github.com/simov/slugify).

## Disable input

To prevent user input, add the `disabled` attribute to the `<uk-input-tag>` element. This will disable input field, prevent tags editing and removal. Making it impossible for users to enter or modify tags.

### Example

```html
<form>
  <uk-input-tag
    placeholder="Add a tag"
    slugify
    value="Verified,Exclusive"
    state="primary"
    disabled
  ></uk-input-tag>
</form>
```

## Error state

To indicate an error state in the form, simply add the `.uk-form-destructive` class to the `cls-custom` attribute. This will apply a "destructive" state to the component, providing visual feedback to the user.

### Example

```html
<form class="space-y-1.5">
  <label class="uk-form-label text-destructive">Tags</label>
  <div class="uk-form-controls">
    <uk-input-tag
      cls-custom="uk-form-destructive"
      placeholder="Add a tag"
    ></uk-input-tag>
  </div>
  <p class="uk-form-help text-destructive">This field is required.</p>
</form>
```

## Preventing layout shift

When loading Web Components, a brief delay may cause a flash of unstyled content. To mitigate this issue, consider setting a predefined height on the parent element to prevent layout shift and ensure a smooth user experience.

```html
<div class="min-h-11">
  <uk-input-tag></uk-input-tag>
</div>
```

Please note that we used `min-h-*` because component might grow in height depending on the number of tags.

## Attributes

| Name                     | Type    | Default     | Description                                                                                                                                         |
| ------------------------ | ------- | ----------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `force-prevent-rerender` | Boolean | false       | Forcefully prevents component rerendering.                                                                                                          |
| `cls-custom`             | String  |             | Allows you to add custom CSS classes.                                                                                                               |
| `disabled`               | Boolean | false       | Disables input field, making the entire component read-only.                                                                                        |
| `maxlength`              | String  | 20          | The maximum length of each tag before it can be added.                                                                                              |
| `minlength`              | String  | 1           | The minimum length of each tag before it can be added.                                                                                              |
| `name`                   | String  |             | The name of the input field, which allows you to capture the tags on your server. Note that the component will automatically append [] to the name. |
| `placeholder`            | String  |             | The placeholder text displayed in the input field.                                                                                                  |
| `slugify`                | Boolean | false       | A boolean indicating whether to slugify the input string before adding it as a tag.                                                                 |
| `slugify-options`        |         | false       | A string with `key: value` format or JSON-stringified options for customizing the slugify behavior.                                                 |
| `state`                  | String  | `secondary` | The visual state of the tags, which can be set to `primary`, `secondary`, or `destructive` to change their appearance.                              |
| `value`                  | String  |             | A comma-separated list of tags that will be prepopulated in the input field.                                                                        |

## Events

The Input Tag component triggers the following events on elements with this component attached:

| Name                 | Description                                                                           |
| -------------------- | ------------------------------------------------------------------------------------- |
| `uk-input-tag:input` | Fired after the value has changed, providing an opportunity to respond to user input. |

---

## Input time

The Input Time component is a web component built from scratch to allow users to easily select time in a 12-hour format, while outputting the selected time in a 24-hour format. To get started, simply use the `<uk-input-time>` markup in your HTML code.

### Example

```html
<div class="h-10">
  <uk-input-time></uk-input-time>
</div>
```

## Capturing values

There are several ways to capture values from the `<uk-input-time>` component. The simplest approach is to add a `name` attribute to the component. When you do this, a hidden input field with the specified name will be automatically generated, allowing you to easily capture the selected value on your server.

```html
<uk-input-time name="time"></uk-input-time>
```

## Prepopulating values

To prepopulate the Input Time component with an existing value, simply pass the `value` attribute with a 24-hour time format. To prepopulate with current time, just use the `now` attribute and it will automatically set the current time as the default value.

```html
<uk-input-time now></uk-input-time>
```

### Example

```html
<div class="h-10">
  <uk-input-time value="20:00"></uk-input-time>
</div>

<div class="mt-4 h-10">
  <uk-input-time now></uk-input-time>
</div>
```

## Size modifiers

There are several size modifiers available. Just add one of the following classes to the `cls-custom` attribute to make the input smaller or larger.

| Class         | Description               |
| ------------- | ------------------------- |
| `.uk-form-xs` | Applies extra small size. |
| `.uk-form-sm` | Applies small size.       |
| `.uk-form-md` | Applies medium size.      |
| `.uk-form-lg` | Applies large size.       |

### Example

```html
<div class="mt-4 h-7">
  <uk-input-time cls-custom="uk-form-xs"></uk-input-time>
</div>

<div class="mt-4 h-8">
  <uk-input-time cls-custom="uk-form-sm"></uk-input-time>
</div>

<div class="mt-4 h-12">
  <uk-input-time cls-custom="uk-form-md"></uk-input-time>
</div>

<div class="mt-4 h-14">
  <uk-input-time cls-custom="uk-form-lg"></uk-input-time>
</div>
```

## Disable input

To prevent user input, add the `disabled` attribute to the `<uk-input-time>` element. This will disable all input fields, making it impossible for users to enter or modify time.

### Example

```html
<div class="h-10">
  <uk-input-time disabled></uk-input-time>
</div>
```

## Error state

To indicate an error state in the form, simply add the `.uk-form-destructive` class to the `cls-custom` attribute. This will apply a "destructive" state to the component, providing visual feedback to the user.

### Example

```html
<div class="space-y-2">
  <label class="uk-form-label text-destructive">Time</label>
  <div class="uk-form-controls">
    <uk-input-time cls-custom="uk-form-destructive"></uk-input-time>
  </div>
  <p class="uk-form-help text-destructive">This field is required.</p>
</div>
```

## Preventing layout shift

When loading Web Components, there may be a brief delay before the content is fully rendered. This can result in a flash of unstyled content or unprocessed templates. To mitigate this issue, consider setting a predefined height on the parent element to prevent layout shift and ensure a smooth user experience.

```html
<div class="h-10">
  <uk-input-time>...</uk-input-time>
</div>
```

## Internationalization

### Example

```html
<div class="h-10">
  <uk-input-time value="20:00" i18n="am: FM; pm: EM"></uk-input-time>
</div>
```

## Available options

| Name | Description              |
| ---- | ------------------------ |
| `am` | Lets you customize "am". |
| `pm` | Lets you customize "pm". |

## Attributes

The following attributes are available for this component:

| Name                     | Type    | Default | Description                                                                      |
| ------------------------ | ------- | ------- | -------------------------------------------------------------------------------- |
| `force-prevent-rerender` | Boolean | false   | Forcefully prevents component rerendering.                                       |
| `autofocus`              | Boolean | false   | Automatically focuses on the first input field when the component is rendered.   |
| `cls-custom`             | String  |         | Allows you to add custom CSS classes.                                            |
| `disabled`               | Boolean | false   | Disables all input fields, making the entire component read-only.                |
| `name`                   | String  |         | Defines the name of the input, allowing you to capture its value on your server. |
| `now`                    | Boolean | false   | Automatically set the current time as the default value.                         |
| `value`                  | String  |         | A time in 24-hour format that will be prepopulated in the input field.           |

## Events

The Input Time component triggers the following events on elements with this component attached:

| Name                  | Description                                                                           |
| --------------------- | ------------------------------------------------------------------------------------- |
| `uk-input-time:input` | Fired after the value has changed, providing an opportunity to respond to user input. |

---

## Label

To create a label, just add the `.uk-label` class to a `<span>` element.

```html
<span class="uk-label"></span>
```

### Example

```html
<span class="uk-label">Default</span>
```

## Style modifiers

Add one of the following classes for additional styles.

| Class                   | Description               |
| ----------------------- | ------------------------- |
| `.uk-label-primary`     | Adds a primary style.     |
| `.uk-label-secondary`   | Adds a secondary style.   |
| `.uk-label-destructive` | Adds a destructive style. |

```html
<span class="uk-label uk-label-primary"></span>
```

### Example

```html
<span class="uk-label">Default</span>

<span class="uk-label uk-label-primary">Primary</span>

<span class="uk-label uk-label-secondary">Secondary</span>

<span class="uk-label uk-label-destructive">Destructive</span>
```

---

## Link

To apply this component, add the `.uk-link` class to an `<a>` element.

### Example

```html
<a class="uk-link" href="#">Link</a>
```

## Muted modifier

If you want the link to apply a muted style instead, just add the `.uk-link-muted` class to the anchor element. You can also add the class to a parent element, and it will be applied to all `<a>` elements inside it.

```html
<a class="uk-link-muted" href="#"></a>
```

### Example

```html
<a class="uk-link-muted" href="#">Link</a>

<p class="uk-link-muted mt-4">
  Lorem ipsum <a href="#">dolor sit</a> amet, consectetur adipiscing elit, sed
  do <a href="#">eiusmod</a> tempor incididunt ut
  <a href="#">labore et</a> dolore magna aliqua.
</p>
```

## Text modifier

To make a link appear like body text and apply a hover effect, add the `.uk-link-text` class to the anchor element. You can also add the class to a parent element, and it will be applied to all `<a>` elements inside it. This is useful for link lists in the page footer.

```html
<a class="uk-link-text" href="#"></a>
```

### Example

```html
<ul class="uk-link-text uk-list">
  <li><a href="#">Link</a></li>
  <li><a href="#">Link</a></li>
  <li><a href="#">Link</a></li>
</ul>
```

## Reset modifier

To reset a link's color, so that it inherits the color from its parent, add the `.uk-link-reset` class. There won't be any hover effect at all. This is useful for links inside heading elements. You can also add the class to a parent element, and it will be applied to all `<a>` elements inside it.

### Example

```html
<a class="uk-link-reset" href="#">Link</a>

<h3 class="uk-h3">
  <a class="uk-link-reset" href="#">Heading</a>
</h3>
```

## Toggle

To use an anchor as a parent element and apply the link style on one of its child elements, just add the `.uk-link-toggle` class to the parent element and one of the `.uk-link-*` classes to the child element. For instance, you can link the whole card and still have the hover effect on the heading.

```html
<a class="uk-link-toggle" href="#">
  <span class="uk-link-text"></span>
</a>
```

### Example

```html
<a href class="uk-card uk-card-body uk-link-toggle block max-w-sm">
  <h3 class="uk-card-title">
    <span class="uk-link-text">Heading</span>
  </h3>
  <p class="mt-4">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.
  </p>
</a>
```

---

## List

To apply this component, add the `.uk-list` class to an unordered or ordered list. The list will now display without any spacing or list-style.

```html
<ul class="uk-list">
  <li></li>
  <li></li>
  <li></li>
</ul>
```

### Example

```html
<ul class="uk-list">
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ul>
```

## Style type modifiers

Add one of the following classes to set the marker of a list item.

| Class              | Description                                      |
| ------------------ | ------------------------------------------------ |
| `.uk-list-disc`    | Use a filled circle as a marker.                 |
| `.uk-list-circle`  | Use a hollow circle as marker.                   |
| `.uk-list-square`  | Use a filled square as marker                    |
| `.uk-list-decimal` | Use decimal numbers as marker. Beginning with 1. |
| `.uk-list-hyphen`  | Use a hyphen as marker                           |

```html
<ul class="uk-list uk-list-disc">
  …
</ul>
```

### Example

```html
<div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-5">
  <div>
    <h4 class="uk-h4">Disc</h4>
    <ul class="uk-list uk-list-disc mt-4">
      <li>List item 1</li>
      <li>List item 2</li>
      <li>List item 3</li>
    </ul>
  </div>

  <div>
    <h4 class="uk-h4">Circle</h4>
    <ul class="uk-list uk-list-circle mt-4">
      <li>List item 1</li>
      <li>List item 2</li>
      <li>List item 3</li>
    </ul>
  </div>

  <div>
    <h4 class="uk-h4">Square</h4>
    <ul class="uk-list uk-list-square mt-4">
      <li>List item 1</li>
      <li>List item 2</li>
      <li>List item 3</li>
    </ul>
  </div>

  <div>
    <h4 class="uk-h4">Decimal</h4>
    <ul class="uk-list uk-list-decimal mt-4">
      <li>List item 1</li>
      <li>List item 2</li>
      <li>List item 3</li>
    </ul>
  </div>

  <div>
    <h4 class="uk-h4">Hyphen</h4>
    <ul class="uk-list uk-list-hyphen mt-4">
      <li>List item 1</li>
      <li>List item 2</li>
      <li>List item 3</li>
    </ul>
  </div>
</div>
```

## Color modifiers

Add one of the following classes to set the marker color.

| Class                | Description                                                      |
| -------------------- | ---------------------------------------------------------------- |
| `.uk-list-muted`     | Add this class to mute the marker.                               |
| `.uk-list-primary`   | Add this class to emphasize the marker with the primary color.   |
| `.uk-list-secondary` | Add this class to emphasize the marker with the secondary color. |

```html
<ul class="uk-list uk-list-disc uk-list-primary">
  …
</ul>
```

### Example

```html
<div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-5">
  <div>
    <h4 class="uk-h4">Muted</h4>
    <ul class="uk-list uk-list-disc uk-list-muted mt-4">
      <li>List item 1</li>
      <li>List item 2</li>
      <li>List item 3</li>
    </ul>
  </div>

  <div>
    <h4 class="uk-h4">Primary</h4>
    <ul class="uk-list uk-list-disc uk-list-primary mt-4">
      <li>List item 1</li>
      <li>List item 2</li>
      <li>List item 3</li>
    </ul>
  </div>
</div>
```

## Image bullet modifier

Add the `.uk-list-bullet` class to set a custom image bullet as a marker of a list item. Mind, that it can not be combined with color modifiers.

```html
<ul class="uk-list uk-list-bullet">
  …
</ul>
```

### Example

```html
<ul class="uk-list uk-list-bullet">
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ul>
```

## Divider modifier

Add the `.uk-list-divider` class to separate list items with lines.

```html
<ul class="uk-list uk-list-divider">
  …
</ul>
```

### Example

```html
<ul class="uk-list uk-list-divider">
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ul>
```

## Striped modifier

Add zebra-striping to a list using the `.uk-list-striped` class.

```html
<ul class="uk-list uk-list-striped">
  …
</ul>
```

### Example

```html
<ul class="uk-list uk-list-striped">
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ul>
```

## Accessibility

Set the appropriate WAI-ARIA roles, states and properties to the List component.

- If a `<div>` element is used, set the `list` role to the list, and the `listitem` role to the list items.

```html
<div class="uk-list" role="list">
  <div role="listitem">List item 1</div>
  <div role="listitem">List item 2</div>
  <div role="listitem">List item 3</div>
</div>
```

---

## Modal

The Modal component consists of an overlay, a dialog and an optional close button. You can use any element to toggle a modal dialog. To enable the necessary JavaScript, add the `data-uk-toggle` attribute. An `<a>` element needs to be linked to the modal's id. If you are using another element, like a button, just add the `data-uk-toggle="target: #ID"` attribute to target the id of the modal container.

Add the `data-uk-modal` attribute to a `<div>` element to create the modal container and an overlay that blanks out the page. It is important to add an `id` to indicate the element for toggling. Use the following classes to define the modal's sections.

| Class              | Description                                                                                             |
| ------------------ | ------------------------------------------------------------------------------------------------------- |
| `.uk-modal-dialog` | Add this class to a child `<div>` element to create the dialog                                          |
| `.uk-modal-body`   | Add this class to create padding between the modal and its content.                                     |
| `.uk-modal-title`  | Add this class to a heading element to create the modal title.                                          |
| `.uk-modal-close`  | Add this class to an `<a>` or `<button>` element to create a close button and enable its functionality. |

```html
<!-- This is a button toggling the modal -->
<button data-uk-toggle="target: #my-id" type="button"></button>

<!-- This is the modal -->
<div class="uk-modal" id="my-id" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <h2 class="uk-modal-title"></h2>
    <button class="uk-modal-close" type="button"></button>
  </div>
</div>
```

### Example

```html
<!-- This is a button toggling the modal -->
<button
  class="uk-btn uk-btn-default mr-2"
  type="button"
  data-uk-toggle="target: #modal-example"
>
  Open
</button>

<!-- This is an anchor toggling the modal -->
<a href="#modal-example" data-uk-toggle>Open</a>

<!-- This is the modal -->
<div id="modal-example" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <h2 class="uk-modal-title">Headline</h2>
    <p class="my-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
      est laborum.
    </p>
    <p class="uk-text-right">
      <button class="uk-modal-close uk-btn uk-btn-default mr-2" type="button">
        Cancel
      </button>
      <button class="uk-btn uk-btn-primary" type="button">Save</button>
    </p>
  </div>
</div>
```

## Close button

To create a close button, enable its functionality and add proper styling and positioning, add the `.uk-modal-close` class to an `<a>` or `<button>` element.

Add the `data-uk-close` attribute from the [Close component](https://franken-ui.dev/docs/2.1/close), to apply a close icon.

```html
<div>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
  </div>
</div>
```

### Example

```html
<!-- This is a button toggling the modal with the default close button -->
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #modal-close-default"
>
  Open
</button>

<!-- This is the modal with the default close button -->
<div id="modal-close-default" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
    <h2 class="uk-modal-title">Heading</h2>
    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
      est laborum.
    </p>
  </div>
</div>
```

## Center modal

To vertically center the modal dialog, you can use the `.uk-margin-auto-vertical` class.

```html
<div class="uk-flex-top" data-uk-modal>
  <div class="uk-modal-dialog uk-margin-auto-vertical"></div>
</div>
```

### Example

```html
<a class="uk-btn uk-btn-default" href="#modal-center" data-uk-toggle> Open </a>

<div id="modal-center" class="uk-flex-top" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
      est laborum.
    </p>
  </div>
</div>
```

Note: `.uk-flex-top` on the modal container is needed to support IE 11.

## Header and footer

To divide the modal into different content sections, use the following classes.

| Class              | Description                                                     |
| ------------------ | --------------------------------------------------------------- |
| `.uk-modal-header` | Add this class to a `<div>` element to create the modal header. |
| `.uk-modal-footer` | Add this class to a `<div>` element to create the modal footer. |

```html
<div class="uk-modal" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
    <div class="uk-modal-header">
      <h2 class="uk-modal-title"></h2>
    </div>
    <div class="uk-modal-body"></div>
    <div class="uk-modal-footer"></div>
  </div>
</div>
```

### Example

```html
<a class="uk-btn uk-btn-default" href="#modal-sections" data-uk-toggle>
  Open
</a>

<div id="modal-sections" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
    <div class="uk-modal-header">
      <h2 class="uk-modal-title">Modal Title</h2>
    </div>
    <div class="uk-modal-body">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
    <div class="uk-modal-footer uk-text-right">
      <button class="uk-modal-close uk-btn uk-btn-default mr-2" type="button">
        Cancel
      </button>
      <button class="uk-btn uk-btn-primary" type="button">Save</button>
    </div>
  </div>
</div>
```

## Container modifier

Add the `.uk-modal-container` class to expand the modal dialog to the default [Container](https://franken-ui.dev/docs/2.1/container) width.

```html
<div class="uk-modal-container" data-uk-modal>...</div>
```

### Example

```html
<a class="uk-btn uk-btn-default" href="#modal-container" data-uk-toggle>
  Open
</a>

<div id="modal-container" class="uk-modal-container" data-uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
    <h2 class="uk-modal-title">Headline</h2>
    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
      est laborum.
    </p>
  </div>
</div>
```

## Full modifier

To create a modal, that fills the entire page, add the `.uk-modal-full` class.

```html
<div class="uk-modal uk-modal-full" data-uk-modal>
  <div class="uk-modal-dialog">
    <button class="uk-modal-close" type="button" data-uk-close></button>
  </div>
</div>
```

### Example

```html
<a class="uk-btn uk-btn-default" href="#modal-full" data-uk-toggle> Open </a>

<div id="modal-full" class="uk-modal-full" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-0 top-0 p-8"
      type="button"
      data-uk-close
    ></button>
    <div class="grid md:grid-cols-2">
      <div
        class="h-screen bg-cover"
        style="background-image: url(&quot;/images/photo.jpg&quot;)"
      ></div>
      <div class="p-8">
        <h1 class="uk-h1">Headline</h1>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>
</div>
```

## Overflow

By default, the page will scroll with the modal, if its content exceeds the window height. To apply a scrollbar inside the modal, add the `data-uk-overflow-auto` attribute to the modal body.

```html
<div class="uk-modal" data-uk-modal>
  <div class="uk-modal-dialog" data-uk-overflow-auto></div>
</div>
```

### Example

```html
<a class="uk-btn uk-btn-default" href="#modal-overflow" data-uk-toggle>
  Open
</a>

<div id="modal-overflow" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <div class="uk-modal-header">
      <h2 class="uk-modal-title">Headline</h2>
    </div>

    <div class="uk-modal-body space-y-4" data-uk-overflow-auto>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>

    <div class="uk-modal-footer uk-text-right">
      <button class="uk-modal-close uk-btn uk-btn-default mr-2" type="button">
        Cancel
      </button>
      <button class="uk-btn uk-btn-primary" type="button">Save</button>
    </div>
  </div>
</div>
```

## Media

If you want to display media, you should first check, if the [Lightbox component](https://franken-ui.dev/docs/2.1/lightbox) doesn't already offer everything you need. However, you can also use the modal to have more control over the markup to wrap your media in.

Note: Use the `data-uk-video` attribute from the [Video component](https://franken-ui.dev/docs/2.1/video) to make sure videos are stopped when the modal is closed.

```html
<div class="uk-modal" data-uk-modal>
  <div class="uk-modal-dialog w-auto">
    <iframe src="" data-uk-video></iframe>
  </div>
</div>
```

### Example

```html
<div class="flex flex-wrap gap-2">
  <a class="uk-btn uk-btn-default" href="#modal-media-image" data-uk-toggle>
    Image
  </a>
  <a class="uk-btn uk-btn-default" href="#modal-media-video" data-uk-toggle>
    Video
  </a>
  <a class="uk-btn uk-btn-default" href="#modal-media-youtube" data-uk-toggle>
    YouTube
  </a>
  <a class="uk-btn uk-btn-default" href="#modal-media-vimeo" data-uk-toggle>
    Vimeo
  </a>
</div>

<div id="modal-media-image" class="uk-flex-top" data-uk-modal>
  <div class="uk-modal-dialog uk-margin-auto-vertical w-auto">
    <button
      class="uk-modal-close absolute -right-4 -top-4 text-white"
      type="button"
      data-uk-close
    ></button>
    <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
  </div>
</div>

<div id="modal-media-video" class="uk-flex-top" data-uk-modal>
  <div class="uk-modal-dialog uk-margin-auto-vertical w-auto">
    <video
      src="https://yootheme.com/site/images/media/yootheme-pro.mp4"
      width="1920"
      height="1080"
      controls
      playsinline
      data-uk-video
    ></video>
  </div>
</div>

<div id="modal-media-youtube" class="uk-flex-top" data-uk-modal>
  <div class="uk-modal-dialog uk-margin-auto-vertical w-auto">
    <iframe
      src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA"
      width="1920"
      height="1080"
      loading="lazy"
      data-uk-video
      data-uk-responsive
    ></iframe>
  </div>
</div>

<div id="modal-media-vimeo" class="uk-flex-top" data-uk-modal>
  <div class="uk-modal-dialog uk-margin-auto-vertical w-auto">
    <iframe
      src="https://player.vimeo.com/video/1084537"
      width="1280"
      height="720"
      loading="lazy"
      data-uk-video
      data-uk-responsive
    ></iframe>
  </div>
</div>
```

## Groups

You can group multiple modals by linking from one to the other and back. Use this to create multistep wizards inside your modals.

```html
<div id="modal-group-1" class="uk-modal" data-uk-modal>
  <div class="uk-modal-dialog">
    <a href="#modal-group-2" data-uk-toggle>Next</a>
  </div>
</div>

<div id="modal-group-2" data-uk-modal>
  <div class="uk-modal-dialog">
    <a href="#modal-group-1" data-uk-toggle>Previous</a>
  </div>
</div>
```

### Example

```html
<div class="flex flex-wrap gap-2">
  <a class="uk-btn uk-btn-default" href="#modal-group-1" data-uk-toggle>
    Modal 1
  </a>
  <a class="uk-btn uk-btn-default" href="#modal-group-2" data-uk-toggle>
    Modal 2
  </a>
</div>

<div id="modal-group-1" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
    <div class="uk-modal-header">
      <h2 class="uk-modal-title">Headline 1</h2>
    </div>
    <div class="uk-modal-body">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
    <div class="uk-modal-footer uk-text-right">
      <button class="uk-modal-close uk-btn uk-btn-default mr-2" type="button">
        Cancel
      </button>
      <a href="#modal-group-2" class="uk-btn uk-btn-primary" data-uk-toggle>
        Next
      </a>
    </div>
  </div>
</div>

<div id="modal-group-2" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
    <div class="uk-modal-header">
      <h2 class="uk-modal-title">Headline 2</h2>
    </div>
    <div class="uk-modal-body">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
    <div class="uk-modal-footer uk-text-right">
      <button class="uk-modal-close uk-btn uk-btn-default mr-2" type="button">
        Cancel
      </button>
      <a href="#modal-group-1" class="uk-btn uk-btn-primary" data-uk-toggle>
        Previous
      </a>
    </div>
  </div>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option      | Value   | Default           | Description                                                                                                                                          |
| ----------- | ------- | ----------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------- |
| `esc-close` | Boolean | `true`            | Close the modal when the _Esc_ key is pressed.                                                                                                       |
| `bg-close`  | Boolean | `true`            | Close the modal when the background is clicked.                                                                                                      |
| `stack`     | Boolean | `false`           | Stack modals, when more than one is open. By default, the previous modal will be hidden.                                                             |
| `container` | String  | `true`            | Define a target container via a selector to specify where the modal should be appended in the DOM. Setting it to `false` will prevent this behavior. |
| `cls-page`  | String  | `uk-modal-page`   | Class to add to `<html>` when modal is active                                                                                                        |
| `cls-panel` | String  | `uk-modal-dialog` | Class of the element to be considered the panel of the modal                                                                                         |
| `sel-close` | String  | `.uk-modal-close` | CSS selector for all elements that should trigger the closing of the modal                                                                           |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.modal(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name         | Description                                          |
| ------------ | ---------------------------------------------------- |
| `beforeshow` | Fires before an item is shown.                       |
| `show`       | Fires after an item is shown.                        |
| `shown`      | Fires after the item's show animation has completed. |
| `beforehide` | Fires before an item is hidden.                      |
| `hide`       | Fires after an item's hide animation has started.    |
| `hidden`     | Fires after an item is hidden.                       |

### Methods

The following methods are available for the component:

#### Show

```javascript
UIkit.modal(element).show();
```

Shows the Modal.

#### Hide

```javascript
UIkit.modal(element).hide();
```

Hides the Modal.

## Modal dialogs

Note: While the modal dialogs work perfectly, customizing padding requires a custom-compiled UIkit JavaScript. If you're unfamiliar with compiling your JavaScript, it's advisable to build the modal using HTML.

The component comes with a number of prepared modal dialogs that you can use for user interaction. You can call the dialog directly from JavaScript and use callback functions to process the user input.

| Code                                          | Description                                              |
| --------------------------------------------- | -------------------------------------------------------- |
| `UIkit.modal.alert('UIkit alert!')`           | Show an alert box with one button.                       |
| `UIkit.modal.confirm('UIkit confirm!')`       | Show a confirm dialog with your message and two buttons. |
| `UIkit.modal.prompt('Name:', 'Your name')`    | Show a dialog asking for a text input.                   |
| `UIkit.modal.dialog('<p>UIkit dialog!</p>');` | Show dialog with any HTML content.                       |

To process the user input, the modal uses a promise based interface which provides a `then()` function to register your callback functions. The `UIkit.modal.dialog` function however will return the modal itself.

```javascript
UIkit.modal.confirm("UIkit confirm!").then(
  function () {
    console.log("Confirmed.");
  },
  function () {
    console.log("Rejected.");
  },
);
```

The returned promise has a property `dialog`, which holds a reference to the modal itself. This lets you manipulate e.g. the markup of the modal's element.

To translate the button labels, the dialog functions accepts an optional `options` object parameter. This has a key `i18n` and two properties `ok` and `cancel`.

```javascript
const modal = UIkit.modal.confirm("UIkit confirm!", {
  i18n: { ok: "okay" },
}).dialog; // The modal component
const el = modal.$el; // The modal element
```

### Example

```html
<div class="flex flex-wrap gap-2">
  <a id="js-modal-dialog" class="uk-btn uk-btn-default" href="#">Dialog</a>

  <a id="js-modal-alert" class="uk-btn uk-btn-default" href="#">Alert</a>

  <a id="js-modal-confirm" class="uk-btn uk-btn-default" href="#">Confirm</a>

  <a id="js-modal-prompt" class="uk-btn uk-btn-default" href="#">Prompt</a>

  <script>
    document
      .getElementById("js-modal-dialog")
      ?.addEventListener("click", (e) => {
        e.preventDefault();
        e.target.blur();
        UIkit.modal.dialog('<p class="uk-modal-body">UIkit dialog!</p>');
      });

    document
      .getElementById("js-modal-alert")
      ?.addEventListener("click", (e) => {
        e.preventDefault();
        e.target.blur();
        UIkit.modal.alert("UIkit alert!").then(function () {
          console.log("Alert closed.");
        });
      });

    document
      .getElementById("js-modal-confirm")
      ?.addEventListener("click", (e) => {
        e.preventDefault();
        e.target.blur();
        UIkit.modal.confirm("UIkit confirm!").then(
          function () {
            console.log("Confirmed.");
          },
          function () {
            console.log("Rejected.");
          },
        );
      });

    document
      .getElementById("js-modal-prompt")
      ?.addEventListener("click", (e) => {
        e.preventDefault();
        e.target.blur();
        UIkit.modal.prompt("Name:", "Your name").then(function (name) {
          console.log("Prompted:", name);
        });
      });
  </script>
</div>
```

## Accessibility

The Modal component adheres to the [Dialog (Modal) WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/dialogmodal/) and automatically sets the appropriate WAI-ARIA roles and properties.

- The _modal_ has the `dialog` role and the `aria-modal` property.

The Close component automatically sets the appropriate WAI-ARIA roles and properties.

- The _close icon_ has the `aria-label` property, and if an `<a>` element is used, the `button` role.

### Keyboard interaction

The Modal component can be accessed through keyboard using the following keys.

- The <kbd>esc</kbd> key closes the modal. This behaviour is disabled if the `bg-close: false` option is set.

---

## Nav

To apply this component, use the following classes.

| Class         | Description                                                                                                      |
| ------------- | ---------------------------------------------------------------------------------------------------------------- |
| `.uk-nav`     | Add this class to a `<ul>` element to define the Nav component. Use `<a>` elements as nav items within the list. |
| `.uk-active ` | Add this class to a list item to apply an active state to a menu item.                                           |

```html
<ul class="uk-nav">
  <li class="uk-active"><a href=""></a></li>
  <li><a href=""></a></li>
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav uk-nav-default">
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>
```

Note: By default, the nav has no styling. That's why it is important to add a modifier class. In our example we are using the `.uk-nav-default` class.

## Nested navs

Add the `.uk-parent` class to an item to turn it into a parent. Add the `.uk-nav-sub` class to a `<ul>` element inside the item to create the subnav.

```html
<ul class="uk-nav">
  <li class="uk-parent">
    <a href=""></a>
    <ul class="uk-nav-sub">
      <li><a href=""></a></li>
      <li>
        <a href=""></a>
        <ul>
          ...
        </ul>
      </li>
    </ul>
  </li>
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav uk-nav-default">
    <li class="uk-active"><a href="#">Active</a></li>
    <li class="uk-parent">
      <a href="#">Parent</a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li>
          <a href="#">Sub item</a>
          <ul>
            <li><a href="#">Sub item</a></li>
            <li><a href="#">Sub item</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>
```

## Accordion

By default, child menu items are always visible. To apply an accordion effect, just add the `data-uk-nav` attribute to the main `<ul>`.

Note: The attribute automatically sets the `.uk-nav` class, so you don't have to apply it manually.

```html
<ul data-uk-nav>
  ...
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav-default" data-uk-nav>
    <li class="uk-active"><a href="#">Active</a></li>
    <li class="uk-parent">
      <a href="#">Parent</a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li>
          <a href="#">Sub item</a>
          <ul>
            <li><a href="#">Sub item</a></li>
            <li><a href="#">Sub item</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="uk-parent">
      <a href="#">Parent</a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li><a href="#">Sub item</a></li>
      </ul>
    </li>
  </ul>
</div>
```

### Parent icon

To create a parent icon, just add the `data-uk-nav-parent-icon` attribute to a `<span>` element.

```html
<ul data-uk-nav>
  <li>
    <a href="">Parent <span data-uk-nav-parent-icon></span></a>
    ...
  </li>
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav-default" data-uk-nav>
    <li class="uk-active"><a href="#">Active</a></li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li>
          <a href="#">Sub item</a>
          <ul>
            <li><a href="#">Sub item</a></li>
            <li><a href="#">Sub item</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li><a href="#">Sub item</a></li>
      </ul>
    </li>
  </ul>
</div>
```

### Multiple open subnavs

When clicking on a parent item, an open one will close, allowing only one open nested list at a time. To allow multiple open subnavs, just add the `multiple: true` option to the attribute.

```html
<ul data-uk-nav="multiple: true">
  ...
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav-default" data-uk-nav="multiple: true">
    <li class="uk-active"><a href="#">Active</a></li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li>
          <a href="#">Sub item</a>
          <ul>
            <li><a href="#">Sub item</a></li>
            <li><a href="#">Sub item</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li><a href="#">Sub item</a></li>
      </ul>
    </li>
  </ul>
</div>
```

## Header and divider

Add one of the following classes to a list item to create a header or a divider between items.

| Element           | Description                                                                  |
| ----------------- | ---------------------------------------------------------------------------- |
| `.uk-nav-header`  | Add this class to a `<li>` element to create a header.                       |
| `.uk-nav-divider` | Add this class to a `<li>` element to create a divider separating nav items. |

```html
<li class="uk-nav-header"></li>

<li class="uk-nav-divider"></li>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav uk-nav-default">
    <li class="uk-nav-header">Header</li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-nav-divider"></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>
```

## Subtitle

Add the `.uk-nav-subtitle` class to a `div` element to create an item subtitled.

```html
<ul class="uk-nav">
  <li>
    <a href="">
      <div>
        Item
        <div class="uk-nav-subtitle">
          Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
          do.
        </div>
      </div>
    </a>
  </li>
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav uk-nav-default">
    <li class="uk-active">
      <a href="#"
        ><div>
          Active
          <div class="uk-nav-subtitle">
            Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do.
          </div>
        </div></a
      >
    </li>
    <li>
      <a href="#"
        ><div>
          Item
          <div class="uk-nav-subtitle">
            Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do.
          </div>
        </div></a
      >
    </li>
    <li>
      <a href="#"
        ><div>
          Item
          <div class="uk-nav-subtitle">
            Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do.
          </div>
        </div></a
      >
    </li>
    <li>
      <a href="#"
        ><div>
          Item
          <div class="uk-nav-subtitle">
            Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do.
          </div>
        </div></a
      >
    </li>
  </ul>
</div>
```

## Default modifier

Add the `.uk-nav-default` class to give the nav its default style. You can place the nav inside cards or anywhere else in your content.

```html
<ul class="uk-nav uk-nav-default">
  ...
</ul>
```

### Example

```html
<div class="uk-card uk-card-body max-w-sm">
  <ul class="uk-nav-default" data-uk-nav>
    <li class="uk-active"><a href="#">Active</a></li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li><a href="#">Sub item</a></li>
      </ul>
    </li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li><a href="#">Sub item</a></li>
      </ul>
    </li>
    <li class="uk-nav-header">Header</li>
    <li>
      <a href="#">
        <uk-icon class="mr-2" icon="table"></uk-icon>
        Item
      </a>
    </li>
    <li>
      <a href="#">
        <uk-icon class="mr-2" icon="bell"></uk-icon>
        Item
      </a>
    </li>
    <li class="uk-nav-divider"></li>
    <li>
      <a href="#">
        <uk-icon class="mr-2" icon="trash"></uk-icon>
        Item
      </a>
    </li>
  </ul>
</div>
```

## Primary modifier

Add the `.uk-nav-primary` class to give the nav a more distinct styling, for example when placing it inside a modal.

```html
<ul class="uk-nav uk-nav-primary">
  ...
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav-primary" data-uk-nav>
    <li class="uk-active"><a href="#">Active</a></li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li><a href="#">Sub item</a></li>
      </ul>
    </li>
    <li class="uk-parent">
      <a href="#">Parent <span data-uk-nav-parent-icon></span></a>
      <ul class="uk-nav-sub">
        <li><a href="#">Sub item</a></li>
        <li><a href="#">Sub item</a></li>
      </ul>
    </li>
    <li><a href="#">Item</a></li>
  </ul>
</div>
```

## Secondary modifier

Add the `.uk-nav-secondary` class to have an extra style if the nav has subtitles.

```html
<ul class="uk-nav uk-nav-secondary">
  ...
</ul>
```

### Example

```html
<div class="max-w-sm">
  <ul class="uk-nav uk-nav-secondary">
    <li>
      <a class="">
        <div class="flex">
          <uk-icon width="20" height="20" icon="bell"></uk-icon>
          <div class="ml-2">
            <p>Everything</p>
            <p class="text-sm text-muted-foreground">
              Email digest, mentions & all activity.
            </p>
          </div>
        </div>
      </a>
    </li>
    <li class="uk-active">
      <a class="">
        <div class="flex">
          <uk-icon width="20" height="20" icon="user"></uk-icon>
          <div class="ml-2">
            <p>Available</p>
            <p class="text-sm text-muted-foreground">
              Only mentions and comments.
            </p>
          </div>
        </div>
      </a>
    </li>
    <li>
      <a class="">
        <div class="flex">
          <uk-icon width="20" height="20" icon="eye-off"></uk-icon>
          <div class="ml-2">
            <p>Ignoring</p>
            <p class="text-sm text-muted-foreground">
              Turn off all notifications.
            </p>
          </div>
        </div>
      </a>
    </li>
  </ul>
</div>
```

## Nav in Dropdown

Add the `.uk-dropdown-nav` class to place a nav inside a default dropdown from the [Dropdown component](https://franken-ui.dev/docs/2.1/dropdown).

```html
<div data-uk-dropdown>
  <ul class="uk-dropdown-nav uk-nav">
    ...
  </ul>
</div>
```

### Example

```html
<button class="uk-btn uk-btn-default" type="button">Hover</button>
<div class="uk-drop min-w-52" data-uk-dropdown>
  <ul class="uk-nav uk-dropdown-nav">
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-nav-header">Header</li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-nav-divider"></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>
```

## Nav in offcanvas

A nav can be used inside an offcanvas from the [Offcanvas component](https://franken-ui.dev/docs/2.1/offcanvas). No modifier class needs to be added.

### Example

```html
<a href="#offcanvas-slide" class="uk-btn uk-btn-default" data-uk-toggle>
  Open
</a>

<div class="uk-offcanvas" id="offcanvas-slide" data-uk-offcanvas>
  <div class="uk-offcanvas-bar">
    <ul class="uk-nav uk-nav-primary">
      <li class="uk-active"><a href="#">Active</a></li>
      <li><a href="#">Item</a></li>
      <li class="uk-nav-header">Header</li>
      <li><a href="#">Item</a></li>
      <li><a href="#">Item</a></li>
      <li class="uk-nav-divider"></li>
      <li><a href="#">Item</a></li>
    </ul>
  </div>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option        | Value           | Default        | Description                                                                                |
| ------------- | --------------- | -------------- | ------------------------------------------------------------------------------------------ |
| `targets`     | CSS selector    | `> .uk-parent` | The element(s) to toggle.                                                                  |
| `toggle `     | CSS selector    | `> a`          | The toggle element(s).                                                                     |
| `content`     | CSS selector    | `> ul`         | The content element(s).                                                                    |
| `collapsible` | Boolean         | `true`         | Allow all items to be closed.                                                              |
| `multiple`    | Boolean         | `false`        | Allow multiple open items.                                                                 |
| `transition`  | String          | `ease`         | The transition to use.                                                                     |
| `animation`   | Boolean, String | `true`         | Space-separated names of [animations](https://franken-ui.dev/docs/2.1/animation). Comma-separated for animation out. |
| `duration`    | Number          | `200`          | The animation duration in milliseconds.                                                    |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.nav(element, options);
```

### Methods

The following methods are available for the component:

#### Toggle

```javascript
UIkit.nav(element).toggle(index, animate);
```

Toggles the content pane.

| Name      | Type                 | Default | Description                                  |
| --------- | -------------------- | ------- | -------------------------------------------- |
| `index`   | String, Number, Node | 0       | Nav pane to toggle. 0 based index.           |
| `animate` | Boolean              | true    | Suppress opening animation by passing false. |

---

## Progress

To apply this component, add the `.uk-progress` class to a `<progress>` element.

```html
<progress class="uk-progress" value="" max=""></progress>
```

### Example

```html
<progress
  id="js-progressbar"
  class="uk-progress"
  value="10"
  max="100"
></progress>

<script>
  document.addEventListener("uikit:init", () => {
    var bar = document.getElementById("js-progressbar");

    var animate = setInterval(function () {
      bar.value += 10;

      if (bar.value >= bar.max) {
        clearInterval(animate);
      }
    }, 1000);
  });
</script>
```

---

## Select

The custom select component is a web component built from scratch to enhance the native `<select>` tag. To get started, simply use the `<uk-select>` markup in your HTML code with one `<select hidden></select>` tag as options reference.

### Example

```html
<div class="h-10">
  <uk-select cls-custom="button: uk-input-fake w-full; dropdown: w-full">
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>
```

## Styling

The `<uk-select>` component is intentionally unstyled by default, allowing you to easily customize its appearance to fit your needs.

To add custom styles, use the `cls-custom` attribute. This attribute accepts two formats:

- A JSON-stringified object
- A valid `key: value; foo: bar;` format

If you pass only class names, they will be applied directly to the button inside the component.

### Example

```html
<!-- Unstyled -->
<div class="h-10">
  <uk-select placeholder="Unstyled">
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>

<!-- Custom -->
<div class="h-10">
  <uk-select
    cls-custom="button: bg-lime-500 text-lime-50 w-full flex justify-between; icon: bg-orange-500 text-orange-50; dropdown: bg-purple-500 text-purple-50 w-full;"
    icon="chevron-down"
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>
```

## Capturing values

There are several ways to capture values from the `<uk-select>` component. The simplest approach is to add a `name` attribute to the component. When you do this, a hidden input field with the specified name will be automatically generated, allowing you to easily capture the selected value on your server.

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-input-fake w-full; dropdown: w-full"
    name="option"
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>
```

Note: If you don't specify a `value` attribute for an `<option>` tag, it will default to using its text content as the value instead.

## Parent icon

To add a parent icon, just add an `icon` attribute to the `<uk-select>` component. If you want to customize the icon, just pass a string name of the icon.

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-input-fake justify-between w-full; dropdown: w-full"
    icon
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>

<div class="mt-4 h-10">
  <uk-select
    cls-custom="button: uk-input-fake justify-between w-full; dropdown: w-full"
    icon="arrow-down"
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>
```

## Options icon

To add icon to options, just add `data-icon` attribute with the name of the icon to your `<option>` tags.

### Example

```html
<div class="h-10">
  <uk-select cls-custom="button: uk-input-fake w-full; dropdown: w-full">
    <select hidden>
      <option data-icon="circle" value="option1">Option 1</option>
      <option data-icon="circle" value="option2">Option 2</option>
      <option data-icon="circle" value="option3">Option 3</option>
      <option data-icon="circle" value="option4">Option 4</option>
      <option data-icon="circle" value="option5">Option 5</option>
    </select>
  </uk-select>
</div>
```

## Position

Because the `<uk-select>` component uses the [Drop](https://franken-ui.dev/docs/2.1/drop) component under the hood, we can leverage its positioning capabilities and position our dropdown anywhere we want. To position it, just use the `drop` attribute with your drop options.

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-btn uk-btn-default"
    drop="mode: click; pos: right-center"
    searchable
  >
    <select hidden>
      <option data-description="Can view and comment." value="viewer">
        Viewer
      </option>
      <option data-description="Can view, comment and edit." value="developer">
        Developer
      </option>
      <option
        data-description="Can view, comment and manage billing."
        value="billing"
      >
        Billing
      </option>
      <option data-description="Admin-level to all resources." value="owner">
        Owner
      </option>
    </select>
  </uk-select>
</div>
```

## Size modifiers

There are several size modifiers available. Just add one of the following classes to make the fake input smaller or larger.

| Class         | Description               |
| ------------- | ------------------------- |
| `.uk-form-xs` | Applies extra small size. |
| `.uk-form-sm` | Applies small size.       |
| `.uk-form-md` | Applies medium size.      |
| `.uk-form-lg` | Applies large size.       |

### Example

```html
<div class="mt-4 h-7">
  <uk-select
    cls-custom="button: uk-input-fake uk-form-xs w-full; dropdown: w-full"
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>

<div class="mt-4 h-8">
  <uk-select
    cls-custom="button: uk-input-fake uk-form-sm w-full; dropdown: w-full"
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>

<div class="mt-4 h-12">
  <uk-select
    cls-custom="button: uk-input-fake uk-form-md w-full; dropdown: w-full"
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>

<div class="mt-4 h-14">
  <uk-select
    cls-custom="button: uk-input-fake uk-form-md w-full; dropdown: w-full"
  >
    <select hidden>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>
```

## Adding header

To add a header to your custom select component, use the `<optgroup>` tag, which will be automatically converted into a dropdown header, providing a seamless developer experience.

### Example

```html
<div class="h-10">
  <uk-select cls-custom="button: uk-input-fake w-full; dropdown: w-full">
    <select hidden>
      <optgroup label="Letter A">
        <option value="apple">Apple</option>
        <option value="apricot">Apricot</option>
        <option value="avocado">Avocado</option>
        <option value="ackee">Ackee</option>
        <option value="asian_pear">Asian Pear</option>
        <option value="abiu">Abiu</option>
        <option value="ambarella">Ambarella</option>
      </optgroup>

      <optgroup label="Letter B">
        <option value="banana">Banana</option>
        <option value="blackberry">Blackberry</option>
        <option value="blueberry">Blueberry</option>
        <option value="boysenberry">Boysenberry</option>
        <option value="breadfruit">Breadfruit</option>
        <option value="bilberry">Bilberry</option>
        <option value="bael">Bael</option>
        <option value="black_sapote">Black Sapote</option>
      </optgroup>

      <optgroup label="Letter C">
        <option value="cherry">Cherry</option>
        <option value="coconut">Coconut</option>
        <option value="cranberry">Cranberry</option>
        <option value="cantaloupe">Cantaloupe</option>
        <option value="clementine">Clementine</option>
        <option value="cactus_pear">Cactus Pear</option>
        <option value="cherimoya">Cherimoya</option>
        <option value="cloudberry">Cloudberry</option>
        <option value="calamansi">Calamansi</option>
      </optgroup>

      <optgroup label="Letter D">
        <option value="date">Date</option>
        <option value="dragonfruit">Dragonfruit</option>
        <option value="durian">Durian</option>
        <option value="damson">Damson</option>
        <option value="dewberry">Dewberry</option>
        <option value="duku">Duku</option>
        <option value="dilly">Dilly</option>
      </optgroup>
    </select>
  </uk-select>
</div>
```

## Selecting multiple values

To enable the selection of multiple values, simply add the `multiple` attribute to the `<uk-select>` element. This will allow users to choose multiple options from the dropdown list.

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-input-fake w-full; dropdown: w-full"
    multiple
  >
    <select hidden>
      <option value="python">Python Programming Language</option>
      <option value="javascript">JavaScript Programming Language</option>
      <option value="html">HTML Markup Language</option>
      <option value="css">CSS Styling Language</option>
      <option value="ruby">Ruby Programming Language</option>
      <option value="java">Java Programming Language</option>
      <option value="swift">Swift Programming Language</option>
      <option value="go">Go Programming Language</option>
    </select>
  </uk-select>
</div>
```

Note: When utilizing the `multiple` attribute, note that it will automatically append `[]` to the name of your input. This is particularly useful when your server expects multiple values, even if the user selects only one option. This ensures that your server-side logic can properly handle the input, regardless of the number of values selected.

## Prepopulating values

There are two ways to prepopulate values from the `<uk-select>` component. The simplest approach is to add a `selected` attribute to one or more of your `<option>` tags.

### Example

```html
<div class="space-y-1.5">
  <label class="uk-form-label">Select your planet</label>
  <div class="uk-form-controls">
    <div class="h-10">
      <uk-select cls-custom="button: uk-input-fake w-full; dropdown: w-full">
        <select hidden>
          <option>Mars</option>
          <option>Jupiter</option>
          <option>Saturn</option>
          <option selected>Earth</option>
        </select>
      </uk-select>
    </div>
  </div>
</div>

<div class="mt-4 space-y-1.5">
  <label class="uk-form-label">Select your cars</label>
  <div class="uk-form-controls">
    <div class="h-10">
      <uk-select
        cls-custom="button: uk-input-fake w-full; dropdown: w-full"
        multiple
      >
        <select hidden>
          <option selected>Mercedes-Benz</option>
          <option selected>Bentley</option>
          <option>Audi</option>
          <option selected>Porsche</option>
          <option selected>Lamborghini</option>
          <option>Ferrari</option>
        </select>
      </uk-select>
    </div>
  </div>
</div>
```

### Manually setting value

Alternatively, if setting `selected` on individual `<option>` elements is not feasible, you can use the `value` attribute on the `<uk-select>` tag to prepopulate it with default values. This attribute accepts a comma-separated list of values, allowing you to set multiple defaults, such as `value="Mercedes-Benz,Bentley,Porsche,Lamborghini"`.

### Example

```html
<div class="space-y-1.5">
  <label class="uk-form-label">Select your planet</label>
  <div class="uk-form-controls">
    <div class="h-10">
      <uk-select
        cls-custom="button: uk-input-fake w-full; dropdown: w-full"
        value="Earth"
      >
        <select hidden>
          <option>Mars</option>
          <option>Jupiter</option>
          <option>Saturn</option>
          <option>Earth</option>
        </select>
      </uk-select>
    </div>
  </div>
</div>

<div class="mt-4 space-y-1.5">
  <label class="uk-form-label">Select your cars</label>
  <div class="uk-form-controls">
    <div class="h-10">
      <uk-select
        cls-custom="button: uk-input-fake w-full; dropdown: w-full"
        multiple
        value="Mercedes-Benz,Bentley,Porsche,Lamborghini"
      >
        <select hidden>
          <option>Mercedes-Benz</option>
          <option>Bentley</option>
          <option>Audi</option>
          <option>Porsche</option>
          <option>Lamborghini</option>
          <option>Ferrari</option>
        </select>
      </uk-select>
    </div>
  </div>
</div>
```

Note: When both `value` and `selected` are used, the `value` attribute takes precedence. Therefore, it's recommended to use one method or the other to avoid conflicts.

## Disabling options

Similar to the native `<select>` tag, you can disable specific options in the custom select component by adding the `disabled` attribute to one or more of your `<option>` or `<optgroup>` tags. This allows you to prevent users from selecting certain options.

### Example

```html
<div class="space-y-1.5">
  <label class="uk-form-label">JavaScript Framework</label>
  <div class="uk-form-controls">
    <div class="h-10">
      <uk-select cls-custom="button: uk-input-fake w-full; dropdown: w-full">
        <select hidden>
          <option disabled>React</option>
          <option>Angular</option>
          <option>Astro</option>
          <option disabled>Ember.js</option>
          <option disabled>Backbone.js</option>
          <option disabled>jQuery</option>
          <option>Vue</option>
          <option>SvelteKit</option>
        </select>
      </uk-select>
    </div>
  </div>
  <p class="uk-form-help">Disabled options are library and not a framework.</p>
</div>

<div class="mt-4">
  <label class="uk-form-label">Select fruits</label>
  <div class="h-10">
    <uk-select
      cls-custom="button: uk-input-fake w-full; dropdown: w-full"
      multiple
    >
      <select hidden>
        <optgroup label="Letter A">
          <option value="apple">Apple</option>
          <option value="apricot">Apricot</option>
          <option value="avocado">Avocado</option>
          <option value="ackee">Ackee</option>
          <option value="asian_pear">Asian Pear</option>
          <option value="abiu">Abiu</option>
          <option value="ambarella">Ambarella</option>
        </optgroup>
        <optgroup label="Letter B" disabled>
          <option value="banana">Banana</option>
          <option value="blackberry">Blackberry</option>
          <option value="blueberry">Blueberry</option>
          <option value="boysenberry">Boysenberry</option>
          <option value="breadfruit">Breadfruit</option>
          <option value="bilberry">Bilberry</option>
          <option value="bael">Bael</option>
          <option value="black_sapote">Black Sapote</option>
        </optgroup>
        <optgroup label="Letter C">
          <option value="cherry">Cherry</option>
          <option value="coconut">Coconut</option>
          <option value="cranberry">Cranberry</option>
          <option value="cantaloupe">Cantaloupe</option>
          <option value="clementine">Clementine</option>
          <option value="cactus_pear">Cactus Pear</option>
          <option value="cherimoya">Cherimoya</option>
          <option value="cloudberry">Cloudberry</option>
          <option value="calamansi">Calamansi</option>
        </optgroup>
        <optgroup label="Letter D" disabled>
          <option value="date">Date</option>
          <option value="dragonfruit">Dragonfruit</option>
          <option value="durian">Durian</option>
          <option value="damson">Damson</option>
          <option value="dewberry">Dewberry</option>
          <option value="duku">Duku</option>
          <option value="dilly">Dilly</option>
        </optgroup>
      </select>
    </uk-select>
  </div>
</div>
```

## Reactivity

<span class="uk-label uk-label-destructive">Experimental</span> By default, the `<uk-select>` component is not reactive. This is a deliberate design choice, as using [MutationObserver](https://developer.mozilla.org/en-US/docs/Web/API/MutationObserver) can be computationally expensive. As a result, changes to the referenced `<select hidden>` element will not trigger an update.

To enable reactivity, simply add the `reactive` attribute to the `<uk-select>` component. This will use [MutationObserver](https://developer.mozilla.org/en-US/docs/Web/API/MutationObserver) under the hood to monitor the `<select hidden>` element for changes.

This feature is particularly useful when using libraries like HTMX, where you may need to dynamically update the options in the `<select hidden>` element based on user interactions, such as searching for data or fetching new options from the server.

```html
<uk-select reactive>
  <!-- ... -->
</uk-select>
```

## Searchable

To add a search box, simply add the `searchable` attribute. This will add an input field within the dropdown menu, enabling users to search for specific options. This feature is particularly useful when dealing with extensive lists, such as selecting a country from a long list of options.

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-input-fake w-full; dropdown: w-full"
    placeholder="Select a country"
    searchable
  >
    <select hidden>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Åland Islands">Åland Islands</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="American Samoa">American Samoa</option>
      <option value="Andorra">Andorra</option>
      <option value="Angola">Angola</option>
      <option value="Anguilla">Anguilla</option>
      <option value="Antarctica">Antarctica</option>
      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Aruba">Aruba</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bermuda">Bermuda</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia">Bolivia</option>
      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>
      <option value="Bouvet Island">Bouvet Island</option>
      <option value="Brazil">Brazil</option>
      <option value="British Indian Ocean Territory">
        British Indian Ocean Territory
      </option>
      <option value="Brunei Darussalam">Brunei Darussalam</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Cape Verde">Cape Verde</option>
      <option value="Cayman Islands">Cayman Islands</option>
      <option value="Central African Republic">Central African Republic</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Christmas Island">Christmas Island</option>
      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Congo">Congo</option>
      <option value="Congo, The Democratic Republic of The">
        Congo, The Democratic Republic of The
      </option>
      <option value="Cook Islands">Cook Islands</option>
      <option value="Costa Rica">Costa Rica</option>
      <option value="Cote D'ivoire">Cote D'ivoire</option>
      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Dominica">Dominica</option>
      <option value="Dominican Republic">Dominican Republic</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="El Salvador">El Salvador</option>
      <option value="Equatorial Guinea">Equatorial Guinea</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Falkland Islands (Malvinas)">
        Falkland Islands (Malvinas)
      </option>
      <option value="Faroe Islands">Faroe Islands</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="French Guiana">French Guiana</option>
      <option value="French Polynesia">French Polynesia</option>
      <option value="French Southern Territories">
        French Southern Territories
      </option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Ghana">Ghana</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Grenada">Grenada</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guam">Guam</option>
      <option value="Guatemala">Guatemala</option>
      <option value="Guernsey">Guernsey</option>
      <option value="Guinea">Guinea</option>
      <option value="Guinea-bissau">Guinea-bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Heard Island and Mcdonald Islands">
        Heard Island and Mcdonald Islands
      </option>
      <option value="Holy See (Vatican City State)">
        Holy See (Vatican City State)
      </option>
      <option value="Honduras">Honduras</option>
      <option value="Hong Kong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Iran, Islamic Republic of">
        Iran, Islamic Republic of
      </option>
      <option value="Iraq">Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Isle of Man">Isle of Man</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jersey">Jersey</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>
      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="Korea, Democratic People's Republic of">
        Korea, Democratic People's Republic of
      </option>
      <option value="Korea, Republic of">Korea, Republic of</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Lao People's Democratic Republic">
        Lao People's Democratic Republic
      </option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macao">Macao</option>
      <option value="Macedonia, The Former Yugoslav Republic of">
        Macedonia, The Former Yugoslav Republic of
      </option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Marshall Islands">Marshall Islands</option>
      <option value="Martinique">Martinique</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mayotte">Mayotte</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia, Federated States of">
        Micronesia, Federated States of
      </option>
      <option value="Moldova, Republic of">Moldova, Republic of</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montenegro">Montenegro</option>
      <option value="Montserrat">Montserrat</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar">Myanmar</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>
      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="Netherlands Antilles">Netherlands Antilles</option>
      <option value="New Caledonia">New Caledonia</option>
      <option value="New Zealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Niue">Niue</option>
      <option value="Norfolk Island">Norfolk Island</option>
      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Palau">Palau</option>
      <option value="Palestinian Territory, Occupied">
        Palestinian Territory, Occupied
      </option>
      <option value="Panama">Panama</option>
      <option value="Papua New Guinea">Papua New Guinea</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Pitcairn">Pitcairn</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Puerto Rico">Puerto Rico</option>
      <option value="Qatar">Qatar</option>
      <option value="Reunion">Reunion</option>
      <option value="Romania">Romania</option>
      <option value="Russian Federation">Russian Federation</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Saint Helena">Saint Helena</option>
      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
      <option value="Saint Lucia">Saint Lucia</option>
      <option value="Saint Pierre and Miquelon">
        Saint Pierre and Miquelon
      </option>
      <option value="Saint Vincent and The Grenadines">
        Saint Vincent and The Grenadines
      </option>
      <option value="Samoa">Samoa</option>
      <option value="San Marino">San Marino</option>
      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
      <option value="Saudi Arabia">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Sierra Leone">Sierra Leone</option>
      <option value="Singapore">Singapore</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Solomon Islands">Solomon Islands</option>
      <option value="Somalia">Somalia</option>
      <option value="South Africa">South Africa</option>
      <option value="South Georgia and The South Sandwich Islands">
        South Georgia and The South Sandwich Islands
      </option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
      <option value="Taiwan">Taiwan</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania, United Republic of">
        Tanzania, United Republic of
      </option>
      <option value="Thailand">Thailand</option>
      <option value="Timor-leste">Timor-leste</option>
      <option value="Togo">Togo</option>
      <option value="Tokelau">Tokelau</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>
      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Uganda">Uganda</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="United Kingdom">United Kingdom</option>
      <option value="United States">United States</option>
      <option value="United States Minor Outlying Islands">
        United States Minor Outlying Islands
      </option>
      <option value="Uruguay">Uruguay</option>
      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Venezuela">Venezuela</option>
      <option value="Viet Nam">Viet Nam</option>
      <option value="Virgin Islands, British">Virgin Islands, British</option>
      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
      <option value="Wallis and Futuna">Wallis and Futuna</option>
      <option value="Western Sahara">Western Sahara</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
    </select>
  </uk-select>
</div>
```

## Custom keywords

Sometimes, there are items that have related keywords that may be slightly off or awkward when included as anchor tags. For these use cases, we can leverage the `data-keywords` attribute.

For example, if we have a "Form" link but also want it to appear when users search for terms like "checkbox," "input," "toggle switch," etc., we can simply add a comma-separated list of terms like this: `data-keywords="apple, mango, lemon"`.

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-input-fake w-full; dropdown: w-full"
    name="option"
    searchable
  >
    <select hidden>
      <option data-keywords="apple, mango, lemon" value="option1">
        Option 1
      </option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
      <option value="option5">Option 5</option>
    </select>
  </uk-select>
</div>
```

## Disable input

To prevent user input, add the `disabled` attribute to the `<uk-select>` element. This will disable the custom select, making it impossible for users to enter or modify its value.

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-input-fake w-full; dropdown: w-full"
    disabled
  >
    <select hidden>
      <option value="apple">Apple</option>
      <option value="apricot">Apricot</option>
      <option value="avocado" selected>Avocado</option>
      <option value="ackee">Ackee</option>
      <option value="asian_pear">Asian Pear</option>
      <option value="abiu">Abiu</option>
      <option value="ambarella">Ambarella</option>
    </select>
  </uk-select>
</div>
```

## Error state

To indicate an error state in the form, simply add the `.uk-form-destructive` class to the `cls-custom` attribute. This will apply a "destructive" state to the component, providing visual feedback to the user.

### Example

```html
<div class="space-y-1.5">
  <label class="uk-form-label text-destructive">Select an option</label>
  <div class="uk-form-controls">
    <div class="h-10">
      <uk-select
        cls-custom="button: uk-input-fake uk-form-destructive w-full; dropdown: w-full"
      >
        <select hidden>
          <option value="option1">Option 1</option>
          <option value="option2">Option 2</option>
          <option value="option3">Option 3</option>
          <option value="option4">Option 4</option>
          <option value="option5">Option 5</option>
        </select>
      </uk-select>
    </div>
  </div>
  <p class="uk-form-help text-destructive">This field is required.</p>
</div>
```

## Preventing layout shift

When loading Web Components, a brief delay may cause a flash of unstyled content. To mitigate this issue, consider setting a predefined height on the parent element to prevent layout shift and ensure a smooth user experience.

```html
<div class="h-10">
  <uk-select>
    <!-- ... -->
  </uk-select>
</div>
```

## Internationalization

### Example

```html
<div class="h-10">
  <uk-select
    cls-custom="button: uk-input-fake w-full; dropdown: w-full"
    i18n="search-placeholder: 検索; selection-count: :n: つのオプションが選択されました"
    multiple
    placeholder="オプションを選択"
    searchable
  >
    <select hidden>
      <option value="option1">オプション 1</option>
      <option value="option2">オプション 2</option>
      <option value="option3">オプション 3</option>
      <option value="option4">オプション 4</option>
      <option value="option5">オプション 5</option>
    </select>
  </uk-select>
</div>
```

## Available options

| Name                 | Description                                                                                                              |
| -------------------- | ------------------------------------------------------------------------------------------------------------------------ |
| `selection-count`    | Displays a customizable message, e.g. ":n: つのオプションが選択されました", where :n: is the number of selected options. |
| `search-placeholder` | The placeholder for the search box.                                                                                      |

## Attributes

The following attributes are available for this component:

| Name                     | Type    | Default | Description                                                                                                                                                        |
| ------------------------ | ------- | ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `insertable`             | Boolean | false   | Allows users to add new options that aren't in the original list.                                                                                                  |
| `force-prevent-rerender` | Boolean | false   | Forcefully prevents component rerendering.                                                                                                                         |
| `name`                   | String  |         | Specifies the name of the input field.                                                                                                                             |
| `multiple`               | Boolean | false   | Determines whether the component accepts multiple values or not.                                                                                                   |
| `disabled`               | Boolean | false   | Enables or disables the entire component.                                                                                                                          |
| `placeholder`            | String  |         | Sets the placeholder text for the component.                                                                                                                       |
| `searchable`             | Boolean | false   | Adds a search input field within the dropdown menu, allowing users to search for specific options.                                                                 |
| `cls-custom`             | String  |         | Allows you to add custom CSS classes.                                                                                                                              |
| `i18n`                   | String  |         | Enables internationalization. Please see [Internationalization](#internationalization) for available options.                                                      |
| `reactive`               | Boolean | false   | Enables reactivity by using `MutationObserver` to monitor the referenced `<select hidden>` element for changes, triggering updates to the `<uk-select>` component. |
| `value`                  | String  |         | A comma-separated list of values that will be prepopulated in the input field.                                                                                     |
| `icon`                   | String  |         | Sets a customized icon. If no icon is passed, it will default to a chevron down icon.                                                                              |
| `drop`                   | String  |         | Customize the dropping option for the dropdown. See [Drop](https://franken-ui.dev/docs/2.1/drop) component for more options.                                                             |

## Events

The custom select component triggers the following events on elements with this component attached:

| Name               | Description                                                                           |
| ------------------ | ------------------------------------------------------------------------------------- |
| `uk-select:input`  | Fired after the value has changed, providing an opportunity to respond to user input. |
| `uk-select:search` | Fired after the value inside search box has changed.                                  |

---

## Tab

The Tab component consists of clickable tabs, that are aligned side by side in a list. Its JavaScript functionality extends the [Switcher component](https://franken-ui.dev/docs/2.1/switcher) and is necessary to dynamically transition through different contents using the tabbed navigation.

| Class/Attribute | Description                                                                                                                                                    |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `.uk-tab`       | Add this attribute to a `<ul>` element to define the Tab component. Use `<a>` elements as tab items within the list.                                           |
| `.uk-active `   | Add this class to a list item to apply an active state.                                                                                                        |
| `.uk-disabled ` | Add this class to a list item to apply a disabled state. Also remove the `href` attribute from the anchor to make it inaccessible through keyboard navigation. |

```html
<ul data-uk-tab>
  <li class="uk-active"><a class="px-4 pb-3 pt-2" href=""></a></li>
  <li><a class="px-4 pb-3 pt-2" href=""></a></li>
  <li class="uk-disabled"><a class="px-4 pb-3 pt-2">Disabled</a></li>
</ul>
```

### Example

```html
<ul class="uk-tab" data-uk-tab>
  <li class="uk-active"><a href="#">Left</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li class="uk-disabled"><a>Disabled</a></li>
</ul>
```

## Alternative layout

Use the `.uk-tab-alt` class for the alternative layout.

### Example

```html
<ul class="uk-tab-alt">
  <li class="uk-active"><a href="#">Account</a></li>
  <li><a href="#">Password</a></li>
</ul>
```

## Bottom modifier

Add the `.uk-tab-bottom` class to flip tab items to the bottom.

```html
<ul class="uk-tab-bottom" data-uk-tab>
  ...
</ul>
```

### Example

```html
<ul class="uk-tab-bottom" data-uk-tab>
  <li class="uk-active"><a href="#">Left</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>
```

## Left/Right modifiers

Add the `.uk-tab-left` or `.uk-tab-right` class to align tabs vertically to the left or right side. To save space, the alignment automatically switches back to horizontal when the viewport width goes below 960px.

When using the vertical alignment, you will usually create a grid to apply the layout as seen in the [Switcher example](https://franken-ui.dev/docs/2.1/switcher#vertical-tabs).

```html
<ul class="uk-tab-left" data-uk-tab>
  ...
</ul>

<ul class="uk-tab-right" data-uk-tab>
  ...
</ul>
```

### Example

```html
<div class="grid grid-cols-2 gap-4">
  <div>
    <ul class="uk-tab uk-tab-left flex-col">
      <li class="uk-active"><a class="py-2" href="#">Left</a></li>
      <li><a class="py-2" href="#">Item</a></li>
      <li><a class="py-2" href="#">Item</a></li>
    </ul>
  </div>

  <div>
    <ul class="uk-tab uk-tab-right">
      <li class="uk-active"><a class="px-4 py-2" href="#">Right</a></li>
      <li><a class="px-4 py-2" href="#">Item</a></li>
      <li><a class="px-4 py-2" href="#">Item</a></li>
    </ul>
  </div>
</div>
```

### Responsive

To change the default breakpoint between the vertical and horizontal alignment, just apply the `media` option to the attribute with the appropriate viewport width. Add a number in pixel, for example `media: 640`, or a breakpoint, for example `media: @m`.

```html
<ul class="uk-tab-left" data-uk-tab="media: @s">
  ...
</ul>
```

## Alignment

You can combine tabs with the utility classes from Tailwind CSS to modify the alignment of the navigations.

```html
<ul class="justify-end" data-uk-tab>
  ...
</ul>
```

### Example

```html
<div>
  <ul class="uk-tab" data-uk-tab>
    <li class="uk-active"><a href="#">Center</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>

<div class="mt-4">
  <ul class="justify-center" data-uk-tab>
    <li class="uk-active"><a href="#">Center</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>

<div class="mt-4">
  <ul class="justify-end" data-uk-tab>
    <li class="uk-active"><a href="#">Right</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>

<div class="mt-4">
  <ul class="justify-between" data-uk-tab>
    <li class="uk-active"><a href="#">Justify</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
  </ul>
</div>
```

## Tabs and Dropdown

Tabs can be used to trigger a dropdown menu from the [Dropdown component](https://franken-ui.dev/docs/2.1/dropdown).

```html
<ul data-uk-tab>
  <li>
    <!-- This is the menu item toggling the dropdown -->
    <a class="px-4 pb-3 pt-2" href=""></a>

    <!-- This is the dropdown -->
    <div data-uk-dropdown="mode: click">
      <ul class="uk-dropdown-nav uk-nav">
        ...
      </ul>
    </div>
  </li>
</ul>
```

### Example

```html
<ul class="uk-tab" data-uk-tab>
  <li class="uk-active"><a href="#">Active</a></li>
  <li><a href="#">Item</a></li>
  <li>
    <a href>
      <span class="mr-2">More</span>
      <uk-icon icon="chevron-down"></uk-icon>
    </a>
    <div class="uk-drop min-w-52" data-uk-dropdown="mode: click">
      <ul class="uk-nav uk-dropdown-nav">
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#">Item</a></li>
      </ul>
    </div>
  </li>
</ul>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option      | Value          | Default | Description                                                                                                                                                  |
| ----------- | -------------- | ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `connect`   | CSS selector   | `false` | Related item's container. By default, this is the next element with the 'uk-switcher' class.                                                                 |
| `toggle `   | CSS selector   | `> *`   | The toggle selector, which triggers content switching on click.                                                                                              |
| `active `   | Number         | `0`     | Active index on init. Providing a negative number indicates a position starting from the end of the set.                                                     |
| `animation` | String         | `false` | Space-separated names of [animations](https://franken-ui.dev/docs/2.1/animation). Comma-separated for animation out.                                                                   |
| `duration`  | Number         | `200`   | The animation duration.                                                                                                                                      |
| `swiping`   | Boolean        | `true`  | Use swiping.                                                                                                                                                 |
| `media`     | Number, String | `960`   | When to switch to horizontal mode - a width as integer (e.g. 640) or a breakpoint (e.g. @s, @m, @l, @xl) or any valid media query (e.g. (min-width: 900px)). |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.tab(element, options);
```

### Events

The following events will be triggered on the connected items of the elements with this component attached:

| Name         | Description                                                                                    |
| ------------ | ---------------------------------------------------------------------------------------------- |
| `beforeshow` | Fires before an item is shown. Can prevent showing by calling `preventDefault()` on the event. |
| `show`       | Fires after an item is shown.                                                                  |
| `shown`      | Fires after the item's show animation has completed.                                           |
| `beforehide` | Fires before an item is hidden. Can prevent hiding by calling `preventDefault()` on the event. |
| `hide`       | Fires after an item's hide animation has started.                                              |
| `hidden`     | Fires after an item is hidden.                                                                 |

### Methods

The following methods are available for the component:

#### Show

```javascript
UIkit.tab(element).show(index);
```

Shows the Tab item with given index.

| Name    | Type                 | Default | Description                      |
| ------- | -------------------- | ------- | -------------------------------- |
| `index` | String, Number, Node | 0       | Tab item to show. 0 based index. |

## Accessibility

The Tab component adheres to the [Tab WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/tabpanel/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _tab navigation_ has the `tablist` role, and if it is a [Nav component](https://franken-ui.dev/docs/2.1/nav), the `aria-orientation` state set to `vertical`.
- The _tab navigation items_ have the `presentation` role.
- The _tab navigation links_ have an ID, the `tab` role, the `aria-selected` state and the `aria-controls` property set to the ID of the respective content item.
- The _content list_ has the `presentation` role.
- The _content list items_ have the ID, the `tabpanel` role and the `aria-labelledby` property set to the ID of the respective tab.

### Keyboard interaction

The tab navigation can be accessed through keyboard using the following keys.

- The <kbd>tab</kbd> or <kbd>shift+tab</kbd> keys place focus on the active tab in the tab navigation. If the focus already is on the active tab, the focus will move to the next element outside the tab navigation.
- The <kbd>left/right arrow</kbd> or <kbd>up/down arrow</kbd> keys, depending on the orientation, navigate through the tabs. If the focus is on the last tab, it moves to the first tab.
- The <kbd>enter</kbd> or <kbd>space</kbd> keys activate the corresponding content item of the focused tab.
- The <kbd>home</kbd> or <kbd>end</kbd> keys move the focus to the first or last tab.

By default, the Switcher component has the manual activation behavior. This means the corresponding content items will only be activated using the <kbd>enter</kbd> or <kbd>space</kbd>keys. To switch to automatic activation, set `follow-focus` to `true`. When navigating through tab items, the corresponding content item will get active automatically.

---

## Table

To apply this component, add the `.uk-table` class to a `<table>` element.

```html
<table class="uk-table">
  <caption></caption>
  <thead>
    <tr>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td></td>
    </tr>
  </tfoot>
</table>
```

### Example

```html
<table class="uk-table">
  <caption>
    Table Caption
  </caption>
  <thead>
    <tr>
      <th>Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>Table Footer</td>
      <td>Table Footer</td>
      <td>Table Footer</td>
    </tr>
  </tfoot>
</table>
```

## Divider modifier

Add the `.uk-table-divider` class to display a divider between table rows.

```html
<table class="uk-table uk-table-divider">
  <!-- ... -->
</table>
```

### Example

```html
<table class="uk-table uk-table-divider">
  <thead>
    <tr>
      <th>Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
  </tbody>
</table>
```

## Striped modifier

Add zebra-striping to a table by adding the `.uk-table-striped` class.

```html
<table class="uk-table uk-table-striped">
  <!-- ... -->
</table>
```

### Example

```html
<table class="uk-table uk-table-striped">
  <thead>
    <tr>
      <th>Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
  </tbody>
</table>
```

## Hover modifier

Add the `.uk-table-hover` class to display a hover state on table rows.

```html
<table class="uk-table uk-table-hover">
  <!-- ... -->
</table>
```

### Example

```html
<table class="uk-table uk-table-divider uk-table-hover">
  <thead>
    <tr>
      <th>Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
  </tbody>
</table>
```

## Size modifiers

Add the `.uk-table-sm` or `.uk-table-lg` class to a table to make it smaller or larger.

```html
<table class="uk-table uk-table-sm">
  <!-- ... -->
</table>
```

### Example

```html
<table class="uk-table-sm uk-table uk-table-divider">
  <thead>
    <tr>
      <th>Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
  </tbody>
</table>

<table class="uk-table-lg uk-table uk-table-divider mt-4">
  <thead>
    <tr>
      <th>Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
  </tbody>
</table>
```

## Justify modifier

To remove the outer padding of the first and last columns so that they are flush with the table, add the `.uk-table-justify` class.

```html
<table class="uk-table uk-table-justify">
  <!-- ... -->
</table>
```

### Example

```html
<table class="uk-table uk-table-divider uk-table-justify">
  <thead>
    <tr>
      <th class="w-40">Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </td>
      <td>
        <button class="uk-btn uk-btn-default" type="button">Button</button>
      </td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </td>
      <td>
        <button class="uk-btn uk-btn-default" type="button">Button</button>
      </td>
    </tr>
  </tbody>
</table>
```

## Alignment modifier

To vertically center table content, just add the `.uk-table-middle` class. You can also apply the class to `<tr>` or `<td>` elements for a more specific selection.

```html
<table class="uk-table uk-table-middle">
  <!-- ... -->
</table>
```

### Example

```html
<table class="uk-table uk-table-middle uk-table-divider">
  <thead>
    <tr>
      <th class="w-40">Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </td>
      <td>
        <button class="uk-btn uk-btn-default" type="button">Button</button>
      </td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </td>
      <td>
        <button class="uk-btn uk-btn-default" type="button">Button</button>
      </td>
    </tr>
  </tbody>
</table>
```

## Responsive table

If your table happens to be wider than its container element or would eventually get too big on a specific viewport width, just wrap it inside a `<div>` element and add the `.uk-overflow-auto` class. This creates a container that provides a horizontal scrollbar whenever the elements inside it are wider than the container itself.

```html
<div class="uk-overflow-auto">
  <table class="uk-table">
    <!-- ... -->
  </table>
</div>
```

### Example

```html
<div class="uk-overflow-auto">
  <table class="uk-table-small uk-table uk-table-divider">
    <thead>
      <tr>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
        <th>Table Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
      </tr>
      <tr>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
      </tr>
      <tr>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
        <td>Table Data</td>
      </tr>
    </tbody>
  </table>
</div>
```

### Stack on small viewports

If you want table columns to stack on small screens, add the `.uk-table-responsive` class.

```html
<table class="uk-table uk-table-responsive">
  <!-- ... -->
</table>
```

### Example

```html
<table
  class="uk-table uk-table-divider uk-table-responsive uk-table-responsive-stack"
>
  <thead>
    <tr>
      <th>Table Heading</th>
      <th>Table Heading</th>
      <th>Table Heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Product Name">Table Data</td>
      <td data-label="Product Name">Table Data</td>
      <td data-label="Product Name">Table Data</td>
    </tr>
    <tr>
      <td data-label="Product Name">Table Data</td>
      <td data-label="Product Name">Table Data</td>
      <td data-label="Product Name">Table Data</td>
    </tr>
    <tr>
      <td data-label="Product Name">Table Data</td>
      <td data-label="Product Name">Table Data</td>
      <td data-label="Product Name">Table Data</td>
    </tr>
  </tbody>
</table>
```

Note: Resize the browser window to see the columns stack. Additionally, to improve mobile readability, add `data-label="Your Label"` to table cells to show header info next to each data value. For full details, see [PR #95](https://github.com/franken-ui/ui/pull/95).


## Column width modifier

To modify the column width or content, you can use one of the following classes. You just need to add this class to one of the column cells. It's recommended on the header cell.

| Class               | Description                                                                                                                |
| ------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `.uk-table-shrink ` | Add this class to a `<th>` or `<td>` element to reduce the column width to fit its content.                                |
| `.uk-table-expand`  | Add this class to a `<th>` or `<td>` element to expand the column width to fill the remaining space and apply a min-width. |
| `.w-*`              | Add one of the width utility classes from Tailwind CSS to a `<th>` or `<td>` element to modify the column width.           |

```html
<th class="uk-table-shrink"></th>
```

### Example

```html
<table class="uk-table uk-table-divider">
  <thead>
    <tr>
      <th class="uk-table-shrink">Shrink</th>
      <th class="uk-table-expand">Expand</th>
      <th class="w-40">Width Small</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
    <tr>
      <td>Table Data</td>
      <td>Table Data</td>
      <td>Table Data</td>
    </tr>
  </tbody>
</table>
```

## Utilities

To optimize the display of table cells and their specific content, you can add one of the following classes.

| Class                 | Description                                                                                                                                                                                                                                   |
| --------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `.uk-table-link`      | To link an entire cell, add this class to a `<th>`or `<td>` element and insert an `<a>` element. Add the `.uk-link-reset`class from the [Link component](https://franken-ui.dev/docs/2.1/link) to reset the default link styling.                                   |
| `.uk-preserve-width ` | Since images are responsive by default in UIkit, using an image inside a table cell with the `.uk-table-shrink` class would reduce the image width to 0. To prevent this behavior, add the `.uk-preserve-width` class to the `<img>` element. |
| `.uk-text-truncate`   | When applying a fixed width to a table cell, you might want to add this class to the `<td>` element to truncate the text.                                                                                                                     |
| `.text-nowrap`        | Add this class from the Tailwind CSS to keep text from wrapping, for example when using the `.uk-table-shrink` class.                                                                                                                         |

```html
<!-- Table link -->
<td class="uk-table-link">
  <a class="uk-link-reset" href=""></a>
</td>

<!-- Preserve width -->
<td>
  <img class="uk-preserve-width" src="" width="" height="" alt="" />
</td>

<!-- Text truncate -->
<td class="uk-text-truncate"></td>

<!-- Text nowrap -->
<td class="uk-text-nowrap"></td>
```

### Example

```html
<div class="uk-overflow-auto">
  <table class="uk-table uk-table-middle uk-table-divider uk-table-hover">
    <thead>
      <tr>
        <th class="uk-table-shrink"></th>
        <th class="uk-table-shrink">Preserve</th>
        <th class="uk-table-expand">Expand + Link</th>
        <th class="w-40">Truncate</th>
        <th class="uk-table-shrink text-nowrap">Shrink + Nowrap</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <input class="uk-checkbox" type="checkbox" aria-label="Checkbox" />
        </td>
        <td>
          <img
            class="uk-preserve-width rounded-full"
            src="/images/avatar.jpg"
            width="40"
            height="40"
            alt=""
          />
        </td>
        <td class="uk-table-link">
          <a class="uk-link-reset" href=""
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor.</a
          >
        </td>
        <td class="uk-text-truncate">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor.
        </td>
        <td class="text-nowrap">Lorem ipsum dolor</td>
      </tr>
      <tr>
        <td>
          <input class="uk-checkbox" type="checkbox" aria-label="Checkbox" />
        </td>
        <td>
          <img
            class="uk-preserve-width rounded-full"
            src="/images/avatar.jpg"
            width="40"
            height="40"
            alt=""
          />
        </td>
        <td class="uk-table-link">
          <a class="uk-link-reset" href=""
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor.</a
          >
        </td>
        <td class="uk-text-truncate">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor.
        </td>
        <td class="text-nowrap">Lorem ipsum dolor</td>
      </tr>
      <tr>
        <td>
          <input class="uk-checkbox" type="checkbox" aria-label="Checkbox" />
        </td>
        <td>
          <img
            class="uk-preserve-width rounded-full"
            src="/images/avatar.jpg"
            width="40"
            height="40"
            alt=""
          />
        </td>
        <td class="uk-table-link">
          <a class="uk-link-reset" href=""
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor.</a
          >
        </td>
        <td class="uk-text-truncate">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor.
        </td>
        <td class="text-nowrap">Lorem ipsum dolor</td>
      </tr>
      <tr>
        <td>
          <input class="uk-checkbox" type="checkbox" aria-label="Checkbox" />
        </td>
        <td>
          <img
            class="uk-preserve-width rounded-full"
            src="/images/avatar.jpg"
            width="40"
            height="40"
            alt=""
          />
        </td>
        <td class="uk-table-link">
          <a class="uk-link-reset" href=""
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor.</a
          >
        </td>
        <td class="uk-text-truncate">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor.
        </td>
        <td class="text-nowrap">Lorem ipsum dolor</td>
      </tr>
    </tbody>
  </table>
</div>
```

---

## Tooltip

To apply this component, add the `data-uk-tooltip` attribute to an element. You also need to add the `title: TEXT` option to the attribute, whose value will represent your tooltip's text.

```html
<div data-uk-tooltip="title: Hello World"></div>
```

If `title` is the only option in the attribute value, you can also use `uk-tooltip="TEXT"`

```html
<div data-uk-tooltip="Hello World"></div>
```

### Example

```html
<button class="uk-btn uk-btn-default" data-uk-tooltip="Hello World">
  Hover
</button>
```

## Alignment

Add one of the following options to the `data-uk-tooltip` attribute to adjust the tooltip's alignment.

```html
<button data-uk-tooltip="title: Hello World; pos: top-left"></button>
```

| Attribute           | Description                             |
| ------------------- | --------------------------------------- |
| `pos: top`          | Aligns the tooltip to the top.          |
| `pos: top-left`     | Aligns the tooltip to the top left.     |
| `pos: top-right`    | Aligns the tooltip to the top right.    |
| `pos: bottom`       | Aligns the tooltip to the bottom.       |
| `pos: bottom-left`  | Aligns the tooltip to the bottom left.  |
| `pos: bottom-right` | Aligns the tooltip to the bottom right. |
| `pos: left`         | Aligns the tooltip to the left.         |
| `pos: right`        | Aligns the tooltip to the right.        |

### Example

```html
<div class="flex flex-wrap gap-2">
  <button class="uk-btn uk-btn-default" data-uk-tooltip="Hello World">
    Top
  </button>
  <button
    class="uk-btn uk-btn-default"
    data-uk-tooltip="title: Hello World; pos: top-left"
  >
    Top Left
  </button>
  <button
    class="uk-btn uk-btn-default"
    data-uk-tooltip="title: Hello World; pos: top-right"
  >
    Top Right
  </button>
  <button
    class="uk-btn uk-btn-default"
    data-uk-tooltip="title: Hello World; pos: bottom"
  >
    Bottom
  </button>
  <button
    class="uk-btn uk-btn-default"
    data-uk-tooltip="title: Hello World; pos: bottom-left"
  >
    Bottom Left
  </button>
  <button
    class="uk-btn uk-btn-default"
    data-uk-tooltip="title: Hello World; pos: bottom-right"
  >
    Bottom Right
  </button>
  <button
    class="uk-btn uk-btn-default"
    data-uk-tooltip="title: Hello World; pos: left"
  >
    Left
  </button>
  <button
    class="uk-btn uk-btn-default"
    data-uk-tooltip="title: Hello World; pos: right"
  >
    Right
  </button>
</div>
```

## Delay

If you want the tooltip to appear with a little delay, just add the `delay` option to the `data-uk-tooltip` attribute with your value in milliseconds.

```html
<div data-uk-tooltip="title: Hello World; delay: 500"></div>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  data-uk-tooltip="title: Hello World; delay: 500"
>
  Hover
</button>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option      | Value  | Default            | Description                                                                                          |
| ----------- | ------ | ------------------ | ---------------------------------------------------------------------------------------------------- |
| `title`     | String |                    | Tooltip text.                                                                                        |
| `pos`       | String | `top-center`       | Tooltip position.                                                                                    |
| `offset`    | Number | `false`            | Tooltip offset.                                                                                      |
| `animation` | String | `uk-anmt-scale-up` | Space-separated names of [animations](https://franken-ui.dev/docs/2.1/animation). Comma-separated for animation out.           |
| `duration`  | Number | `100`              | The animation duration.                                                                              |
| `delay`     | Number | `0`                | The show delay.                                                                                      |
| `cls`       | String | `uk-active`        | The active class.                                                                                    |
| `container` | String | `body`             | Define a target container via a selector to specify where the tooltip should be appended in the DOM. |

`title` is the _Primary_ option and its key may be omitted, if it's the only option in the attribute value.

```html
<span data-uk-tooltip="Hello World"></span>
```

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.tooltip(element, options);
```

### Events

The following events will be triggered on elements, which are injected by this component:

| Name         | Description                                                                                    |
| ------------ | ---------------------------------------------------------------------------------------------- |
| `beforeshow` | Fires before an item is shown. Can prevent showing by calling `preventDefault()` on the event. |
| `show`       | Fires after an item is shown.                                                                  |
| `shown`      | Fires after the item's show animation has completed.                                           |
| `beforehide` | Fires before an item is hidden. Can prevent hiding by calling `preventDefault()` on the event. |
| `hide`       | Fires after an item's hide animation has started.                                              |
| `hidden`     | Fires after an item is hidden.                                                                 |

#### Example

```javascript
UIkit.util.on(document, "show", ".uk-tooltip.uk-active", function () {
  // do something
});
```

### Methods

The following methods are available for the component:

#### Show

```javascript
UIkit.tooltip(element).show();
```

Shows the Tooltip.

#### Hide

```javascript
UIkit.tooltip(element).hide();
```

Hides the Tooltip.

## Accessibility

The Tooltip component adheres to the [Tooltip Widget WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/tooltip/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _element with the tooltip_ has an ID.
- The _tooltip_ has the `tooltip` role and the `aria-describedby` property set to the ID of the element with the tooltip.

---

## Overflow

These utilities provide different classes to modify an element's overflow behavior.

| Class                 | Description                                                                                                                                                           |
| --------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `.uk-overflow-hidden` | Add this class to clip content that exceeds the dimensions of its container.                                                                                          |
| `.uk-overflow-auto`   | Add this class to create a container that provides a horizontal or vertical scrollbar whenever the elements content it are wider or higher than the container itself. |

Note: The `.uk-overflow-auto` class is useful when having to handle tables on a responsive website, which at some point would just get too big. It also works great on `<pre>` elements.

### Overflow Auto

Add the `uk-overflow-auto` attribute to expand an element's height to make it fill the remaining height of a parent container. It provides a vertical scrollbar if its content is higher than the expanded height.

### Example

```html
<div class="h-80">
  <div class="js-wrapper space-y-4">
    <p>Some content before the overflow auto container.</p>

    <div uk-overflow-auto="selContainer: .h-80; selContent: .js-wrapper">
      <div class="grid grid-cols-2 gap-4">
        <div>
          <img src="/images/light.jpg" width="1800" height="1200" alt="" />
        </div>
        <div>
          <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
        </div>
        <div>
          <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
        </div>
        <div>
          <img src="/images/photo2.jpg" width="1800" height="1200" alt="" />
        </div>
      </div>
    </div>

    <p>Some content after the overflow auto container.</p>
  </div>
</div>
```

It's often used within the [Modal component](https://franken-ui.dev/docs/2.1/modal).

```html
<div id="my-id" uk-modal>
  <div class="uk-modal-dialog" uk-overflow-auto></div>
</div>
```

### Example

```html
<a class="uk-btn uk-btn-default" href="#modal-overflow" data-uk-toggle>
  Open
</a>

<div id="modal-overflow" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <div class="uk-modal-header">
      <h2 class="uk-modal-title">Headline</h2>
    </div>

    <div class="uk-modal-body space-y-4" data-uk-overflow-auto>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>

    <div class="uk-modal-footer uk-text-right">
      <button class="uk-modal-close uk-btn uk-btn-default mr-2" type="button">
        Cancel
      </button>
      <button class="uk-btn uk-btn-primary" type="button">Save</button>
    </div>
  </div>
</div>
```

You can change the target heights by adding the `selContainer` and `selContent` options to the attribute. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option          | Value  | Default            | Description                                                                       |
| --------------- | ------ | ------------------ | --------------------------------------------------------------------------------- |
| `sel-container` | String | `.uk-modal`        | CSS selector for the container element which provides the height.                 |
| `sel-content`   | String | `.uk-modal-dialog` | CSS selector for the element which wraps the inner content to provide its height. |

## Resize

These utilities provide different classes for resizing elements.

| Class                 | Description                                                |
| --------------------- | ---------------------------------------------------------- |
| `.uk-resize`          | Add this class to enable horizontal and vertical resizing. |
| `.uk-resize-vertical` | Add this class to enable only vertical resizing.           |

Grab and drag the bottom right corner of each box below to resize it.

### Example

```html
<div class="grid grid-cols-2 gap-4">
  <div>
    <pre
      class="uk-resize-vertical overflow-auto bg-muted font-geist-mono text-muted-foreground"
    >
            <code>
&lt;!-- Resize vertically --&gt;
&lt;div uk-grid&gt;
    &lt;div class="uk-width-1-2"&gt;…&lt;/div&gt;
    &lt;div class="uk-width-1-2"&gt;…&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-child-width-1-2" uk-grid&gt;
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;
&lt;/div&gt;
            </code>
        </pre>
  </div>
  <div>
    <pre
      class="uk-resize overflow-auto bg-muted font-geist-mono text-muted-foreground"
    >
            <code>
&lt;!-- Resize horizontally and vertically --&gt;
&lt;div uk-grid&gt;
    &lt;div class="uk-width-1-2"&gt;…&lt;/div&gt;
    &lt;div class="uk-width-1-2"&gt;…&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-child-width-1-2" uk-grid&gt;
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;
&lt;/div&gt;
            </code>
        </pre>
  </div>
</div>
```

## Inline

These classes are often used to create a position context on containers with an image as a child. The container keeps the same size as the image as well as the responsive behavior. That way content that is placed on top of the image with the [Position component](https://franken-ui.dev/docs/2.1/position) will not flow out of the image dimensions.

| Class             | Description                                                                                                            |
| ----------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `.uk-inline`      | Add this class to apply inline-block behavior to an element, add a max-width of 100% and to create a position context. |
| `.uk-inline-clip` | Same as `.uk-inline`, it but also clips overflowing child elements.                                                    |

```html
<div class="uk-inline">
  <img src="" width="" height="" alt="" />
  <div class="uk-position-cover"></div>
</div>
```

### Example

```html
<div class="uk-inline">
  <img src="/images/photo.jpg" width="300" height="200" alt="" />
  <div
    class="uk-position-cover uk-position-sm flex items-center justify-center bg-white/80"
  >
    Overlay
  </div>
</div>
```

## Responsive objects

In UIkit `<img>`, `<canvas>`, `<audio>` and `<video>` elements adapt to the width of their parent container by default. To apply responsive behavior to iframes, add the `uk-responsive` attribute . For other elements or to apply a different behavior, just add one of the following classes.

| Class                   | Description                                                                                                                                                                                                                                                                                                |
| ----------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `.uk-responsive-width`  | Add this class to apply the same responsive behavior to any other element. It adjusts the object's width according to its parent's width, keeping the original aspect ratio.                                                                                                                               |
| `.uk-responsive-height` | Add this class to adjust the object's height (instead of its width) according to its parent's height, keeping the original aspect ratio.                                                                                                                                                                   |
| `.uk-preserve-width`    | Add this class to avoid the default responsive behavior and preserve the original image dimensions. You can also add the class to a parent element and it will be applied to all relevant elements content it. If you are embedding Google Maps into your site, you may need this to fix the map's images. |

```html
<img class="uk-responsive-height" src="" width="" height="" alt="" />

<iframe src="" width="" height="" uk-responsive></iframe>
```

## Border radius

To modify the border radius of an element, like an image, add one of the following classes.

| Class            | Description                                    |
| ---------------- | ---------------------------------------------- |
| `.uk-rounded-sm` | Add this class to apply a small border radius. |
| `.uk-rounded`    | Add this class to apply a border radius.       |

### Example

```html
<div class="grid grid-cols-2 gap-4">
  <div class="uk-rounded-sm border border-border p-4">
    <p class="text-center">Small</p>
  </div>
  <div class="uk-rounded border border-border p-4">
    <p class="text-center">Medium</p>
  </div>
</div>
```

## Box shadow

You can apply different box shadows to elements. Just add one of the following classes.

| Class           | Description                                 |
| --------------- | ------------------------------------------- |
| `.uk-shadow-sm` | Add this class to apply a small box shadow. |
| `.uk-shadow`    | Add this class to apply a box shadow.       |

```html
<div class="uk-shadow-sm"></div>
```

### Example

```html
<div class="grid grid-cols-2 gap-4">
  <div class="uk-shadow-sm border border-border p-4">
    <p class="text-center">Small</p>
  </div>
  <div class="uk-shadow border border-border p-4">
    <p class="text-center">Medium</p>
  </div>
</div>
```

## Drop cap

With the `.uk-dropcap` class you can achieve a drop cap within a text by adding it directly to the `<p>` element.

### Example

```html
<p class="uk-dropcap">
  Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
  eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
  in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor
  sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
  labore et dolore magna aliqua.
</p>
```

## Transform center

To center an element to itself, add the `uk-transform-center` class. This is particularly useful for absolute positioning.

### Example

```html
<div class="uk-inline">
  <img src="/images/light.jpg" width="1800" height="1200" alt="" />
  <a
    class="uk-btn uk-btn-primary uk-btn-icon uk-position-absolute uk-transform-center"
    style="left: 50%; top: 50%"
  >
    <uk-icon icon="plus"></uk-icon>
  </a>
</div>
```

## Transform origin

To modify the origin of an animation, like scaling, add one of the `uk-transform-origin-*` classes. This can be combined with the [Animation component](https://franken-ui.dev/docs/2.1/animation).

| Class                                | Description                                      |
| ------------------------------------ | ------------------------------------------------ |
| `.uk-transform-origin-top-left`      | The transition originates from the top left.     |
| `.uk-transform-origin-top-center`    | The transition originates from the top.          |
| `.uk-transform-origin-top-right`     | The transition originates from the top right.    |
| `.uk-transform-origin-center-left`   | The transition originates from the left.         |
| `.uk-transform-origin-center-right`  | The transition originates from the right.        |
| `.uk-transform-origin-bottom-left`   | The transition originates from the bottom left.  |
| `.uk-transform-origin-bottom-center` | The transition originates from the bottom.       |
| `.uk-transform-origin-bottom-right`  | The transition originates from the bottom right. |

```html
<div class="uk-animation-scale-up uk-transform-origin-bottom-right"></div>
```

### Example

```html
<div class="grid gap-4 md:grid-cols-3">
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-scale-up uk-transform-origin-bottom-right bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Bottom Right</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-scale-up uk-transform-origin-top-center bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Top Center</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-scale-up uk-transform-origin-bottom-center bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Bottom Center</p>
    </div>
  </div>
</div>
```

## Disabled

To disable the click behavior of any element, like a `<a>`, `<button>` or `<iframe>` element, add the `.uk-disabled` class.

### Example

```html
<a class="uk-disabled uk-btn uk-btn-default" href="#">Disabled</a>
```

---

