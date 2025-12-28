

# File: accessibility.md
==================================================

## Accessibility

UIkit is a fully accessible front-end framework. All its interactive components are accessible out of the box. Still, the accessibility largely depends on the author's markup. In each component documentation we provide best practice examples on how to use UIkit to comply with the [WCAG 2.1](https://www.w3.org/TR/WCAG/) standards.

## Interactive components

UIkit's interactive JavaScript components, for example, slideshow, lightbox, dropdown, among others, are accessible to keyboard users. We implement the common keyboard navigation convention in which the <kbd>tab</kbd> and <kbd>shift+tab</kbd> keys move focus from one component to another while other keys like arrow keys move focus inside of components that include multiple focusable elements. Learn more about keyboard interaction in the documentation of each component.

By using relevant [WAI-ARIA](https://www.w3.org/WAI/standards-guidelines/aria/) roles, states and properties, the JavaScript components are readable and operable using assistive technologies like screen readers. They automatically set the required HTML attributes in the markup. Learn more about accessibility in the documentation of each component.

Since our JavaScript components are designed to be generic, it's not always possible to determine the precise WAI-ARIA roles and properties that need to be set by a component. Please refer to the [ARIA Authoring Practices Guide (APG)](https://www.w3.org/WAI/ARIA/apg/) for further reading.

If you find the documentation or the components lacking accessibility, please open an issue or pull request for the [documentation](https://github.com/uikit/uikit-site) or [UIkit](https://github.com/uikit/uikit) on GitHub.

## Internationalization

UIkit supports language internationalization (i18n) of its components. The default texts for the `aria-label` attributes can be translated. The translation keys for each component can be found in the corresponding documentation.

There are several ways to modify the default texts. You can pass an object to the `i18n` option of the component.

### Instance

The i18n option can be set as shown in the following examples.

As a valid JSON format:

```html
<div uk-marker='{"i18n": {"label": "Open"}}'></div>
```

As a single attribute:

```html
<div uk-marker i18n="label: Open;"></div>
```

As a single attribute prefixed with `data-`:

```html
<div uk-marker data-i18n="label: Open;"></div>
```

Or pass the i18n option to the component programmatically:

```js
UIkit.marker(".marker", {
  i18n: { label: "Open" },
});
```

### Globally

The default texts for a component can be changed globally by extending the component.

```js
UIkit.mixin(
  {
    i18n: { label: "Open" },
  },
  "marker",
);
```

### Complete Translation

Here is an example of all available component translation strings applied.

```js
const i18n = {
  close: { label: "Close" },
  totop: { label: "Back to top" },
  marker: { label: "Open" },
  navbarToggleIcon: { label: "Open menu" },
  paginationPrevious: { label: "Next page" },
  paginationNext: { label: "Previous page" },
  slider: {
    next: "Next slide",
    previous: "Previous slide",
    slideX: "Slide %s",
    slideLabel: "%s of %s",
  },
  slideshow: {
    next: "Next slide",
    previous: "Previous slide",
    slideX: "Slide %s",
    slideLabel: "%s of %s",
  },
  lightboxPanel: {
    next: "Next slide",
    previous: "Previous slide",
    slideLabel: "%s of %s",
    close: "Close",
  },
};

for (const component in i18n) {
  UIkit.mixin({ i18n: i18n[component] }, component);
}
```



# File: accordion.md
==================================================

## Accordion

The Accordion component consists of a parent container with the `data-uk-accordion` attribute, and a title and content part for each accordion item.

| Class                   | Description                                                                |
| ----------------------- | -------------------------------------------------------------------------- |
| `.uk-accordion-title`   | Defines and styles the toggle for each accordion item. Use `<a>` elements. |
| `.uk-accordion-icon`    | Defines and styles the icon part for each accordion item.                  |
| `.uk-accordion-content` | Defines the content part for each accordion item.                          |

```html
<ul data-uk-accordion>
  <li>
    <a class="uk-accordion-title" href>
      <span>Title</span>
      <span class="uk-accordion-icon size-4">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content"></div>
  </li>
</ul>
```

### Example

```html
<ul class="uk-accordion" data-uk-accordion>
  <li class="uk-open">
    <a class="uk-accordion-title" href>
      Item 1
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>
  </li>
  <li>
    <a class="uk-accordion-title" href>
      Item 2
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.
      </p>
    </div>
  </li>
  <li>
    <a class="uk-accordion-title" href>
      Item 3
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        proident.
      </p>
    </div>
  </li>
</ul>
```

## No collapsing

By default, all accordion items can be collapsed. To prevent this behavior and always maintain one open item, add the `collapsible: false` option to the attribute.

```html
<ul data-uk-accordion="collapsible: false">
  <!-- ... -->
</ul>
```

### Example

```html
<ul class="uk-accordion" data-uk-accordion="collapsible: false">
  <li>
    <a class="uk-accordion-title" href>
      Item 1
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>
  </li>
  <li>
    <a class="uk-accordion-title" href>
      Item 2
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.
      </p>
    </div>
  </li>
  <li>
    <a class="uk-accordion-title" href>
      Item 3
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        proident.
      </p>
    </div>
  </li>
</ul>
```

## Multiple open items

To display multiple content sections at the same time without one collapsing when the other one is opened, add the `multiple: true` option to the `data-uk-accordion` attribute.

```html
<ul data-uk-accordion="multiple: true">
  <!-- ... -->
</ul>
```

### Example

```html
<ul class="uk-accordion" data-uk-accordion="multiple: true">
  <li class="uk-open">
    <a class="uk-accordion-title" href>
      Item 1
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>
  </li>
  <li>
    <a class="uk-accordion-title" href>
      Item 2
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.
      </p>
    </div>
  </li>
  <li>
    <a class="uk-accordion-title" href>
      Item 3
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        proident.
      </p>
    </div>
  </li>
</ul>
```

## Set open items

To specify which items should be opened initially, add the `.uk-open` class to the item. You can also use this to open multiple items. Just make sure to add the option `multiple: true` to the `data-uk-accordion` attribute.

Note:  Alternatively, you can open a single item by adding the `active: <index>` option to the `data-uk-accordion` attribute, e.g. `active: 1` to show the second element (the index is zero-based). Note that this will overwrite the `uk-open` class.

```html
<ul data-uk-accordion>
  <li></li>
  <li class="uk-open"></li>
  <li></li>
</ul>
```

### Example

```html
<ul class="uk-accordion" data-uk-accordion>
  <li>
    <a class="uk-accordion-title" href>
      Item 1
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>
  </li>
  <li class="uk-open">
    <a class="uk-accordion-title" href>
      Item 2
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.
      </p>
    </div>
  </li>
  <li>
    <a class="uk-accordion-title" href>
      Item 3
      <span class="uk-accordion-icon">
        <uk-icon icon="chevron-down"></uk-icon>
      </span>
    </a>
    <div class="uk-accordion-content">
      <p>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
        proident.
      </p>
    </div>
  </li>
</ul>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option        | Value   | Default                   | Description                                                                                                                                                                                              |
| ------------- | ------- | ------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `active`      | Number  | `false`                   | Index of the element to open initially.                                                                                                                                                                  |
| `animation`   | Boolean | `true`                    | Reveal item directly or with a transition.                                                                                                                                                               |
| `collapsible` | Boolean | `true`                    | Allow all items to be closed.                                                                                                                                                                            |
| `content`     | String  | `> .uk-accordion-content` | The content selector, which selects the accordion content elements.                                                                                                                                      |
| `duration`    | Number  | `200`                     | Animation duration in milliseconds.                                                                                                                                                                      |
| `multiple`    | Boolean | `false`                   | Allow multiple open items.                                                                                                                                                                               |
| `targets`     | String  | `> *`                     | CSS selector of the element(s) to toggle.                                                                                                                                                                |
| `toggle`      | String  | `> .uk-accordion-title`   | The toggle selector, which toggles accordion items.                                                                                                                                                      |
| `transition`  | String  | `ease`                    | The transition to use when revealing items. Use keyword for [easing functions](https://developer.mozilla.org/en-US/docs/Web/CSS/single-transition-timing-function#Keywords_for_common_timing-functions). |
| `offset`      | Number  | `0`                       | Pixel offset added to scroll top.                                                                                                                                                                        |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.accordion(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

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

#### Toggle

```javascript
UIkit.accordion(element).toggle(index, animate);
```

Toggles the content pane.

| Name      | Type                 | Default | Description                                  |
| --------- | -------------------- | ------- | -------------------------------------------- |
| `index`   | String, Number, Node | 0       | Accordion pane to toggle. 0 based index.     |
| `animate` | Boolean              | true    | Suppress opening animation by passing false. |

## Accessibility

The Accordion component adheres to the [Accordion WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/accordion/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _titles_ have an ID, the `button` role, the `aria-expanded` state and the `aria-controls` property set to the ID of the respective content.
- The _contents_ have an ID, the `region` role and the `aria-labelledby` property set to the ID of the respective title.

### Keyboard interaction

The Accordion component can be accessed through keyboard using the following keys.

- The <kbd>tab</kbd> or <kbd>shift+tab</kbd> keys navigate through accordion titles.
- The <kbd>enter</kbd> or <kbd>space</kbd> key toggles the content of the focused title.



# File: alert.md
==================================================

## Alert

To apply this component, add the `data-uk-alert` attribute to a block element.

```html
<div class="uk-alert" data-uk-alert></div>
```

### Example

```html
<div class="uk-alert" data-uk-alert>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
  incididunt ut labore et dolore magna aliqua.
</div>
```

## Close button

To create a close button and enable its functionality, add the `.uk-alert-close` class to a `<button>` or `<a>` element inside the alert box. To apply a close icon, add the `data-uk-close` attribute from the [Close component](https://franken-ui.dev/docs/2.1/close).

```html
<div class="uk-alert" data-uk-alert>
  <a href class="uk-alert-close"></a>
</div>
```

### Example

```html
<div class="uk-alert" data-uk-alert>
  <a href class="uk-alert-close" data-uk-close></a>
  <div class="uk-alert-title">Notice</div>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.
  </p>
</div>
```

## Destructive modifier

Just add `.uk-alert-destructive` class to apply a different look.

### Example

```html
<div class="uk-alert uk-alert-destructive" data-uk-alert>
  <a href class="uk-alert-close" data-uk-close></a>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </p>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option      | Value        | Default           | Description                         |
| ----------- | ------------ | ----------------- | ----------------------------------- |
| `animation` | Boolean      | `true`            | Fade out or hide directly.          |
| `duration`  | Number       | `150`             | Animation duration in milliseconds. |
| `sel-close` | CSS selector | `.uk-alert-close` | The close trigger element.          |

`animation` is the _Primary_ option and its key may be omitted, if it's the only option in the attribute value.

```html
<span data-uk-toggle=".my-class"></span>
```

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.alert(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name         | Description                                                                                    |
| ------------ | ---------------------------------------------------------------------------------------------- |
| `beforehide` | Fires before an item is hidden. Can prevent hiding by calling `preventDefault()` on the event. |
| `hide`       | Fires after an item is hidden.                                                                 |

### Methods

The following methods are available for the component:

#### Close

```javascript
UIkit.alert(element).close();
```

Closes and removes the Alert.



# File: animation.md
==================================================

## Animation

Add one of the `.uk-anmt-*` classes to any element. The animation is shown when the class is added, so usually immediately on page load. To show the animation at another point, for example when the element enters the viewport, you would add the class using JavaScript — with the [Scrollspy component](https://franken-ui.dev/docs/2.1/scrollspy) for instance. This is what happens in many of UIkit's components that make use of animations. All animations themselves are implemented with CSS, so they do not require JavaScript to play.

| Class                                                                                                                | Description                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `.uk-anmt-fade`                                                                                                      | The element fades in.                                                                                                                  |
| `.uk-anmt-scale-up`<br/> `.uk-anmt-scale-down`                                                                       | The element fades in and scales up or down.                                                                                            |
| `.uk-anmt-slide-top`<br/> `.uk-anmt-slide-bottom`<br/> `.uk-anmt-slide-left`<br/> `.uk-anmt-slide-right`             | The element fades and slides in from the top, bottom, left or right by its own height or width.                                        |
| `.uk-anmt-slide-top-sm`<br/> `.uk-anmt-slide-bottom-sm`<br/> `.uk-anmt-slide-left-sm`<br/> `.uk-anmt-slide-right-sm` | The element fades and slides in from the top, bottom, left or right with a smaller distance which is specified by a fixed pixel value. |
| `.uk-anmt-slide-top-md`<br/> `.uk-anmt-slide-bottom-md`<br/> `.uk-anmt-slide-left-md`<br/> `.uk-anmt-slide-right-md` | The element fades and slides in from the top, bottom, left or right with a medium distance which is specified by a fixed pixel value.  |
| `.uk-anmt-kenburns`                                                                                                  | The element scales very slowly up without fading in.                                                                                   |
| `.uk-anmt-shake`                                                                                                     | The element shakes.                                                                                                                    |
| `.uk-anmt-stroke`                                                                                                    | The SVG element strokes are drawn.                                                                                                     |

To toggle an animation on hover or focus, add the `.uk-anmt-toggle` class to a parent element. Also add `tab to make the animation focusable through keyboard navigation and on touch devices.

```html
<div class="uk-anmt-toggle" tabindex="0">
  <div class="uk-anmt-fade"></div>
</div>
```

### Example

```html
<div class="grid grid-cols-2 gap-4">
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-fade bg-muted p-4 text-muted-foreground">
      <p class="text-center">Fade</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-scale-up bg-muted p-4 text-muted-foreground">
      <p class="text-center">Scale Up</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-scale-down bg-muted p-4 text-muted-foreground">
      <p class="text-center">Scale Down</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-shake bg-muted p-4 text-muted-foreground">
      <p class="text-center">Shake</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-left bg-muted p-4 text-muted-foreground">
      <p class="text-center">Left</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-top bg-muted p-4 text-muted-foreground">
      <p class="text-center">Top</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-bottom bg-muted p-4 text-muted-foreground">
      <p class="text-center">Bottom</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-right bg-muted p-4 text-muted-foreground">
      <p class="text-center">Right</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-left-sm bg-muted p-4 text-muted-foreground">
      <p class="text-center">Left Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-top-sm bg-muted p-4 text-muted-foreground">
      <p class="text-center">Top Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-bottom-sm bg-muted p-4 text-muted-foreground">
      <p class="text-center">Bottom Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-right-sm bg-muted p-4 text-muted-foreground">
      <p class="text-center">Right Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-left-md bg-muted p-4 text-muted-foreground">
      <p class="text-center">Left Medium</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-top-md bg-muted p-4 text-muted-foreground">
      <p class="text-center">Top Medium</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-bottom-md bg-muted p-4 text-muted-foreground">
      <p class="text-center">Bottom Medium</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-slide-right-md bg-muted p-4 text-muted-foreground">
      <p class="text-center">Right Medium</p>
    </div>
  </div>
</div>
```

## Reverse modifier

By default, all animations are incoming. To reverse any animation, add the `.uk-anmt-reverse` class.

```html
<div class="uk-anmt-fade uk-anmt-reverse"></div>
```

### Example

```html
<div class="grid grid-cols-2 gap-4">
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-fade uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Fade</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-scale-up uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Scale Up</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-scale-down uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Scale Down</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-shake uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Shake</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-left uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Left</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-top uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Top</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-bottom uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Bottom</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-right uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Right</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-left-sm uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Left Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-top-sm uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Top Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-bottom-sm uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Bottom Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-right-sm uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Right Small</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-left-md uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Left Medium</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-top-md uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Top Medium</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-bottom-md uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Bottom Medium</p>
    </div>
  </div>
  <div class="uk-anmt-toggle" tabindex="0">
    <div
      class="uk-anmt-slide-right-md uk-anmt-reverse bg-muted p-4 text-muted-foreground"
    >
      <p class="text-center">Right Medium</p>
    </div>
  </div>
</div>
```

## Fast modifier

To play animations at a faster speed, add the `.uk-anmt-fast` class to the element.

```html
<div class="uk-anmt-fade uk-anmt-fast"></div>
```

### Example

```html
<div class="grid grid-cols-2 gap-4">
  <div class="uk-anmt-toggle" tabindex="0">
    <div class="uk-anmt-fade uk-anmt-fast bg-muted p-4 text-muted-foreground">
      <p class="text-center">Fade</p>
    </div>
  </div>
</div>
```

## Origin modifiers

By default, scaling animations originate from the center. To modify this behavior, add one of the `.uk-transform-origin-*` classes.

```html
<div class="uk-anmt-scale-up uk-transform-origin-bottom-right"></div>
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

## Ken Burns

To add a simple Ken Burns effect, add the `.uk-anmt-kenburns` class to any image. You can also apply the `.uk-anmt-reverse` or one of the `.uk-transform-origin-*` classes to modify the effect.

```html
<img class="uk-anmt-kenburns" src="" width="" height="" alt="" />
```

By default, the animation starts on page load. In this example we used the [Scrollspy](https://franken-ui.dev/docs/2.1/scrollspy) component, to toggle the effect when the image enters the view.

### Example

```html
<div class="grid gap-4 md:grid-cols-2">
  <div>
    <div class="uk-overflow-hidden">
      <img
        src="/images/dark.jpg"
        width="1800"
        height="1200"
        alt="Example image"
        data-uk-scrollspy="cls: uk-anmt-kenburns; repeat: true"
      />
    </div>
  </div>
  <div>
    <div class="uk-overflow-hidden">
      <img
        src="/images/dark.jpg"
        width="1800"
        height="1200"
        alt="Example image"
        class="uk-anmt-reverse uk-transform-origin-top-right"
        data-uk-scrollspy="cls: uk-anmt-kenburns; repeat: true"
      />
    </div>
  </div>
</div>
```

## SVG Strokes

The Animation component can be used to animate SVG strokes. The effect looks like the SVG strokes are drawn before your eyes. The SVG image has to be injected into the markup as an inline SVG. This can be done manually or using the [SVG component](https://franken-ui.dev/docs/2.1/svg).

The following example shows how to add the inline SVG manually. Since you have to know the exact length of the stroke, UIkit requires you to set the length in the custom property `--uk-anmt-stroke`. In this example the stroke length is `46`.

```html
<svg
  class="uk-anmt-stroke"
  style="--uk-anmt-stroke: 46;"
  viewBox="0 0 20 20"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill="none" stroke="#000" stroke-width="1" d="" />
</svg>
```

A much easier way is to use the [SVG component](https://franken-ui.dev/docs/2.1/svg) by adding `uk-svg="stroke-animation: true"` to the image element. It will calculate the stroke length and add the `--uk-anmt-stroke` custom property automatically.

```html
<img src="" width="" height="" alt="" data-uk-svg="stroke-animation: true" />
```

### Example

```html
<div class="grid gap-4 md:grid-cols-2">
  <div class="uk-anmt-toggle flex justify-center" tabindex="0">
    <img
      class="uk-anmt-stroke"
      src="/images/strokes.svg"
      width="250"
      height="250"
      alt=""
      data-uk-svg="stroke-animation: true"
    />
  </div>
  <div class="uk-anmt-toggle flex justify-center" tabindex="0">
    <img
      class="uk-anmt-stroke uk-anmt-reverse"
      src="/images/strokes.svg"
      width="250"
      height="250"
      alt=""
      data-uk-svg="stroke-animation: true"
    />
  </div>
</div>
```



# File: avatar.md
==================================================

## Avatar

To get started with the Avatar component, simply wrap your image inside the `.uk-avatar` and `.uk-avatar-image` classes.

### Example

```html
<div class="flex justify-center">
  <div class="uk-avatar">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/45.jpg"
        alt=""
      />
    </div>
  </div>
</div>
```

## Rounded

To create a circular avatar, simply apply the `uk-avatar-rounded` class to the wrapper.

### Example

```html
<div class="flex justify-center gap-x-2">
  <div class="uk-avatar uk-avatar-rounded bg-secondary">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/120.jpg"
        alt="Maria"
      />
    </div>
  </div>
</div>
```

## Bordered

To add a border around your avatar, include the `uk-avatar-bordered` class along with any other modifiers you like.

### Example

```html
<div class="flex items-center justify-center gap-x-2">
  <div class="uk-avatar uk-avatar-bordered">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/67.jpg"
        alt=""
      />
    </div>
  </div>

  <div class="uk-avatar uk-avatar-rounded uk-avatar-bordered">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/18.jpg"
        alt=""
      />
    </div>
  </div>
</div>
```

## Initials

If there's no image available, display initials using the `.uk-avatar-text` element. This is useful for fallback states or text-based avatars.

### Example

```html
<div class="flex justify-center gap-x-2">
  <div class="uk-avatar text-muted-foreground bg-muted">
    <div class="uk-avatar-text">RM</div>
  </div>

  <div class="uk-avatar uk-avatar-rounded text-muted-foreground bg-muted">
    <div class="uk-avatar-text">RM</div>
  </div>

  <div class="uk-avatar uk-avatar-bordered">
    <div class="uk-avatar-text">RM</div>
  </div>
</div>
```

## Dot indicator

To indicate status or notifications, you can add a small dot using the `uk-avatar-dot` class. Or, choose one of the following classes to reposition the dot indicator:

| Class                        | Position      |
| ---------------------------- | ------------- |
| `uk-avatar-dot-top`          | Top center    |
| `uk-avatar-dot-top-left`     | Top left      |
| `uk-avatar-dot-top-right`    | Top right     |
| `uk-avatar-dot-right`        | Right center  |
| `uk-avatar-dot-bottom`       | Bottom center |
| `uk-avatar-dot-bottom-left`  | Bottom left   |
| `uk-avatar-dot-bottom-right` | Bottom right  |
| `uk-avatar-dot-left`         | Left center   |

### Example

```html
<div class="flex items-center justify-center">
  <div class="uk-avatar uk-avatar-rounded uk-avatar-dot">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/120.jpg"
        alt=""
      />
    </div>
  </div>
</div>
```

## Stacked

Stack multiple avatars together to represent a group or team. Use flex utilities and negative spacing to achieve the overlapping effect.

### Example

```html
<div class="flex items-center justify-center -space-x-4">
  <div class="uk-avatar uk-avatar-rounded uk-avatar-bordered">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/120.jpg"
        alt=""
      />
    </div>
  </div>

  <div class="uk-avatar uk-avatar-rounded uk-avatar-bordered">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/121.jpg"
        alt=""
      />
    </div>
  </div>

  <div class="uk-avatar uk-avatar-rounded uk-avatar-bordered">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/122.jpg"
        alt=""
      />
    </div>
  </div>

  <div class="uk-avatar uk-avatar-rounded uk-avatar-bordered">
    <div class="uk-avatar-image">
      <img
        src="https://mighty.tools/mockmind-api/content/human/123.jpg"
        alt=""
      />
    </div>
  </div>

  <div
    class="uk-avatar uk-avatar-rounded uk-avatar-bordered bg-primary text-primary-foreground"
  >
    <div class="uk-avatar-text">+99</div>
  </div>
</div>
```



# File: badge.md
==================================================

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



# File: breadcrumb.md
==================================================

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



# File: button.md
==================================================

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



# File: calendar.md
==================================================

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



# File: card.md
==================================================

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



# File: chart-area.md
==================================================

## Smooth

Create an area chart with gently curved lines instead of sharp angles.

### Example

```html
<div class="uk-chart-container max-w-md">
  <div class="p-4">
    <div class="uk-card-title">Area Chart - Smooth</div>
    <div class="uk-text-sm mt-2">January - June 2024</div>
  </div>

  <div class="px-4">
    <uk-chart>
      <script type="application/json">
        {
          "series": [
            {
              "name": "Desktops",
              "data": [186, 305, 237, 73, 209, 214]
            }
          ],
          "chart": {
            "type": "area",
            "zoom": {
              "enabled": false
            },
            "toolbar": {
              "show": false
            }
          },
          "dataLabels": {
            "enabled": false
          },
          "stroke": {
            "curve": "smooth",
            "width": 2
          },
          "colors": ["hsl(var(--chart-1))"],
          "grid": {
            "row": {
              "colors": []
            },
            "borderColor": "hsl(var(--border))"
          },
          "xaxis": {
            "categories": ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            "tooltip": {
              "enabled": false
            },
            "labels": {
              "style": {
                "colors": "hsl(var(--muted-foreground))"
              }
            },
            "axisBorder": {
              "show": false
            },
            "axisTicks": {
              "show": false
            }
          },
          "yaxis": {
            "labels": {
              "show": false
            }
          },
          "tooltip": {
            "title": {
              "show": false
            }
          }
        }
      </script>
    </uk-chart>
  </div>

  <div class="p-4">
    <div class="flex items-center gap-x-2 font-medium leading-none">
      Trending up by 5.2% this month
      <uk-icon icon="trending-up"></uk-icon>
    </div>
    <div class="text-muted-foreground mt-2 leading-none">
      Showing total visitors for the last 6 months
    </div>
  </div>
</div>
```

## Multiple

Displays multiple lines on the same chart to compare different data series.

### Example

```html
<div class="uk-chart-container max-w-md">
  <div class="p-4">
    <div class="uk-card-title">Area Chart - Multiple</div>
    <div class="uk-text-sm mt-2">January - June 2024</div>
  </div>

  <div class="px-4">
    <uk-chart>
      <script type="application/json">
        {
          "series": [
            {
              "name": "Desktops",
              "data": [186, 305, 237, 73, 209, 214]
            },
            {
              "name": "Mobile",
              "data": [80, 200, 120, 190, 130, 140]
            }
          ],
          "chart": {
            "type": "area",
            "zoom": {
              "enabled": false
            },
            "toolbar": {
              "show": false
            }
          },
          "dataLabels": {
            "enabled": false
          },
          "stroke": {
            "curve": "smooth",
            "width": 2
          },
          "colors": ["hsl(var(--chart-1))", "hsl(var(--chart-2))"],
          "grid": {
            "row": {
              "colors": []
            },
            "borderColor": "hsl(var(--border))"
          },
          "xaxis": {
            "categories": ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            "tooltip": {
              "enabled": false
            },
            "labels": {
              "style": {
                "colors": "hsl(var(--muted-foreground))"
              }
            },
            "axisBorder": {
              "show": false
            },
            "axisTicks": {
              "show": false
            }
          },
          "yaxis": {
            "labels": {
              "show": false
            }
          },
          "tooltip": {
            "title": {
              "show": false
            }
          },
          "legend": {
            "show": false
          }
        }
      </script>
    </uk-chart>
  </div>

  <div class="p-4">
    <div class="flex items-center gap-x-2 font-medium leading-none">
      Trending up by 5.2% this month
      <uk-icon icon="trending-up"></uk-icon>
    </div>
    <div class="text-muted-foreground mt-2 leading-none">
      Showing total visitors for the last 6 months
    </div>
  </div>
</div>
```



# File: chart-line.md
==================================================

## Smooth

Create a line chart with gently curved lines instead of sharp angles.

### Example

```html
<div class="uk-chart-container max-w-md">
  <div class="p-4">
    <div class="uk-card-title">Line Chart - Smooth</div>
    <div class="uk-text-sm mt-2">January - June 2024</div>
  </div>

  <div class="px-4">
    <uk-chart>
      <script type="application/json">
        {
          "series": [
            {
              "name": "Desktops",
              "data": [186, 305, 237, 73, 209, 214]
            }
          ],
          "chart": {
            "type": "line",
            "zoom": {
              "enabled": false
            },
            "toolbar": {
              "show": false
            }
          },
          "dataLabels": {
            "enabled": false
          },
          "stroke": {
            "curve": "smooth",
            "width": 2
          },
          "colors": ["hsl(var(--chart-1))"],
          "grid": {
            "row": {
              "colors": []
            },
            "borderColor": "hsl(var(--border))"
          },
          "xaxis": {
            "categories": ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            "tooltip": {
              "enabled": false
            },
            "labels": {
              "style": {
                "colors": "hsl(var(--muted-foreground))"
              }
            },
            "axisBorder": {
              "show": false
            },
            "axisTicks": {
              "show": false
            }
          },
          "yaxis": {
            "labels": {
              "show": false
            }
          },
          "tooltip": {
            "title": {
              "show": false
            }
          }
        }
      </script>
    </uk-chart>
  </div>

  <div class="p-4">
    <div class="flex items-center gap-x-2 font-medium leading-none">
      Trending up by 5.2% this month
      <uk-icon icon="trending-up"></uk-icon>
    </div>
    <div class="text-muted-foreground mt-2 leading-none">
      Showing total visitors for the last 6 months
    </div>
  </div>
</div>
```

## Straight

Creates a line chart with straight, angular connections between data points.

### Example

```html
<div class="uk-chart-container max-w-md">
  <div class="p-4">
    <div class="uk-card-title">Line Chart - Straight</div>
    <div class="uk-text-sm mt-2">January - June 2024</div>
  </div>

  <div class="px-4">
    <uk-chart>
      <script type="application/json">
        {
          "series": [
            {
              "name": "Desktops",
              "data": [186, 305, 237, 73, 209, 214]
            }
          ],
          "chart": {
            "type": "line",
            "zoom": {
              "enabled": false
            },
            "toolbar": {
              "show": false
            }
          },
          "dataLabels": {
            "enabled": false
          },
          "stroke": {
            "curve": "straight",
            "width": 2
          },
          "colors": ["hsl(var(--chart-1))"],
          "grid": {
            "row": {
              "colors": []
            },
            "borderColor": "hsl(var(--border))"
          },
          "xaxis": {
            "categories": ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            "tooltip": {
              "enabled": false
            },
            "labels": {
              "style": {
                "colors": "hsl(var(--muted-foreground))"
              }
            },
            "axisBorder": {
              "show": false
            },
            "axisTicks": {
              "show": false
            }
          },
          "yaxis": {
            "labels": {
              "show": false
            }
          },
          "tooltip": {
            "title": {
              "show": false
            }
          }
        }
      </script>
    </uk-chart>
  </div>

  <div class="p-4">
    <div class="flex items-center gap-x-2 font-medium leading-none">
      Trending up by 5.2% this month
      <uk-icon icon="trending-up"></uk-icon>
    </div>
    <div class="text-muted-foreground mt-2 leading-none">
      Showing total visitors for the last 6 months
    </div>
  </div>
</div>
```

## Stepline

Creates a line chart with step-like connections between points.

### Example

```html
<div class="uk-chart-container max-w-md">
  <div class="p-4">
    <div class="uk-card-title">Line Chart - Stepline</div>
    <div class="uk-text-sm mt-2">January - June 2024</div>
  </div>

  <div class="px-4">
    <uk-chart>
      <script type="application/json">
        {
          "series": [
            {
              "name": "Desktops",
              "data": [186, 305, 237, 73, 209, 214]
            }
          ],
          "chart": {
            "type": "line",
            "zoom": {
              "enabled": false
            },
            "toolbar": {
              "show": false
            }
          },
          "dataLabels": {
            "enabled": false
          },
          "stroke": {
            "curve": "stepline",
            "width": 2
          },
          "colors": ["hsl(var(--chart-1))"],
          "grid": {
            "row": {
              "colors": []
            },
            "borderColor": "hsl(var(--border))"
          },
          "xaxis": {
            "categories": ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            "tooltip": {
              "enabled": false
            },
            "labels": {
              "style": {
                "colors": "hsl(var(--muted-foreground))"
              }
            },
            "axisBorder": {
              "show": false
            },
            "axisTicks": {
              "show": false
            }
          },
          "yaxis": {
            "labels": {
              "show": false
            }
          },
          "tooltip": {
            "title": {
              "show": false
            }
          },
          "markers": {
            "hover": {
              "sizeOffset": 4
            }
          }
        }
      </script>
    </uk-chart>
  </div>

  <div class="p-4">
    <div class="flex items-center gap-x-2 font-medium leading-none">
      Trending up by 5.2% this month
      <uk-icon icon="trending-up"></uk-icon>
    </div>
    <div class="text-muted-foreground mt-2 leading-none">
      Showing total visitors for the last 6 months
    </div>
  </div>
</div>
```

## Multiple

Displays multiple lines on the same chart to compare different data series.

### Example

```html
<div class="uk-chart-container max-w-md">
  <div class="p-4">
    <div class="uk-card-title">Line Chart - Multiple</div>
    <div class="uk-text-sm mt-2">January - June 2024</div>
  </div>

  <div class="px-4">
    <uk-chart>
      <script type="application/json">
        {
          "series": [
            {
              "name": "Desktops",
              "data": [186, 305, 237, 73, 209, 214]
            },
            {
              "name": "Mobile",
              "data": [80, 200, 120, 190, 130, 140]
            }
          ],
          "chart": {
            "type": "line",
            "zoom": {
              "enabled": false
            },
            "toolbar": {
              "show": false
            }
          },
          "dataLabels": {
            "enabled": false
          },
          "stroke": {
            "curve": "smooth",
            "width": 2
          },
          "colors": ["hsl(var(--chart-1))", "hsl(var(--chart-2))"],
          "grid": {
            "row": {
              "colors": []
            },
            "borderColor": "hsl(var(--border))"
          },
          "xaxis": {
            "categories": ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
            "tooltip": {
              "enabled": false
            },
            "labels": {
              "style": {
                "colors": "hsl(var(--muted-foreground))"
              }
            },
            "axisBorder": {
              "show": false
            },
            "axisTicks": {
              "show": false
            }
          },
          "yaxis": {
            "labels": {
              "show": false
            }
          },
          "tooltip": {
            "title": {
              "show": false
            },
            "style": {
              "fontFamily": "inherit",
              "fontSize": "var(--uk-global-font-size-s)",
              "lineHeight": "var(--uk-global-line-height-s)"
            }
          },
          "legend": {
            "fontFamily": "inherit",
            "fontSize": "",
            "lineHeight": "",
            "markers": {
              "strokeWidth": 0
            }
          }
        }
      </script>
    </uk-chart>
  </div>

  <div class="p-4">
    <div class="flex items-center gap-x-2 font-medium leading-none">
      Trending up by 5.2% this month
      <uk-icon icon="trending-up"></uk-icon>
    </div>
    <div class="text-muted-foreground mt-2 leading-none">
      Showing total visitors for the last 6 months
    </div>
  </div>
</div>
```



# File: chart.md
==================================================

## Chart

Under the hood, Franken UI uses [ApexCharts](https://apexcharts.com). Franken UI provides a thin layer of compatibility and serves as a glue between ApexCharts and shadcn/ui so you don't have to configure anything by yourself.

## JavaScript

There are several ways to use Chart—whether through CDN, Tailwind CSS v3, or Vite plugin—but in most cases, it's already included in as a first-party extension, so you don't need to install anything separately. Just choose the setup that fits your project best.

### Option 1: Using CDN

To include the Chart library via CDN, add the following to your HTML `<head>`:

```html
<script
  src="https://cdn.jsdelivr.net/npm/franken-ui@latest/dist/js/chart.iife.js"
  type="module"
></script>
```

For stability in production, it's recommended that you hardcode the latest version in the CDN link.
      

This method is the quickest way to get started, especially for prototypes or demos.

### Option 2: Using NPM

If you're building a modern app with a bundler, you can import the JavaScript file from `franken-ui` into your `app.js` file.

```javascript
import "franken-ui/js/chart.iife";
```

## CSS

Starting with version `2.1`, core styling has been removed from the default build. Styling is now handled through our first-party extension. If you're using the CDN version, no additional setup is needed—styles are already bundled.

### Tailwind CSS plugin

If you are using the Tailwind CSS plugin, edit your `tailwind.config.js` file.

```js
import franken from "franken-ui/shadcn-ui/preset-quick";
import chart from "franken-ui/extensions/chart";

/** @type {import('tailwindcss').Config} */
export default {
  presets: [
    franken({
      extensions: [
        [chart, {}],
      ],
    }),
  ],
};
```

### Vite plugin

If you are using the Vite plugin, edit your `vite.config.js` file.

```js
import { defineConfig } from "vite";
import franken from "franken-ui/plugin-vite";

export default defineConfig({
  plugins: [
    franken({
      preflight: false,
      layer: true,
      layerExceptions: ["chart"],
    }),
  ],
});
```

Once everything is configured, you may now use the `<uk-chart>` markup in your HTML code with one `<script type="application/json"></script>` tag as options reference.

## Reactivity

By default, the `<uk-chart>` component is not reactive. This is a deliberate design choice, as using [MutationObserver](https://developer.mozilla.org/en-US/docs/Web/API/MutationObserver) can be computationally expensive. As a result, changes to the referenced `<script type="application/json">` tag will not trigger an update.

To enable reactivity, simply add the `reactive` attribute to the `<uk-chart>` component. This will use [MutationObserver](https://developer.mozilla.org/en-US/docs/Web/API/MutationObserver) under the hood to monitor the `<script>` tag for changes.

```html
<uk-chart reactive>
  <!-- ... -->
</uk-chart>
```

## Attributes

| Name                     | Type    | Default | Description                                                                                                                                                |
| ------------------------ | ------- | ------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `force-prevent-rerender` | Boolean | false   | Forcefully prevents component rerendering.                                                                                                                 |
| `cls-custom`             | String  |         | Allows you to add custom CSS classes, which will be attached to the `<div>` tag.                                                                           |
| `reactive`               | Boolean | false   | Enables reactivity by using `MutationObserver` to monitor the referenced `<script>` element for changes, triggering updates to the `<uk-chart>` component. |



# File: close.md
==================================================

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



# File: command.md
==================================================

## Command

The Command component is a web component built from scratch to allow developers to bind a keyboard shortcut and toggle a modal.

To get started, simply use the `<uk-command>` markup in your HTML code with one `<select hidden></select>` tag as items reference.

```html
<uk-command>
  <select hidden>
    <optgroup label="Suggestions">
      <option data-icon="calendar" value="/path/to/calendar">Calendar</option>
      <option data-icon="smile" value="/path/to/search-emoji">
        Search Emoji
      </option>
      <option data-icon="calculator" disabled value="/path/to/calculator">
        Calculator
      </option>
    </optgroup>
    <optgroup label="Settings">
      <option data-icon="user" value="/path/to/profile">Profile</option>
      <option data-icon="credit-card" value="/path/to/billing">Billing</option>
      <option data-icon="settings" value="/path/to/settings">Settings</option>
    </optgroup>
  </select>
</uk-command>
```

## Binding a keyboard shortcut

By default, no keyboard shortcuts are bound. To enable a keyboard shortcut, simply add the `key` attribute to your Command component.

### Example

```html
<div class="text-muted-foreground text-center">
  Press <kbd class="uk-kbd">⌘ J</kbd>
</div>

<uk-command key="j">
  <select hidden>
    <optgroup label="Suggestions">
      <option data-icon="calendar" value="/path/to/calendar">Calendar</option>
      <option data-icon="smile" value="/path/to/search-emoji">
        Search Emoji
      </option>
      <option data-icon="calculator" disabled value="/path/to/calculator">
        Calculator
      </option>
    </optgroup>
    <optgroup label="Settings">
      <option data-icon="user" value="/path/to/profile">Profile</option>
      <option data-icon="credit-card" value="/path/to/billing">Billing</option>
      <option data-icon="settings" value="/path/to/settings">Settings</option>
    </optgroup>
  </select>
</uk-command>
```

## Using a toggle

Since we are using the UIkit modal behind the scenes, we can use any element to toggle a Command component. To start, simply add the toggle attribute to the `<uk-command>` element. Then, you can use an `<a>` element linked to the toggle ID like this: `<a href="#TOGGLE" uk-toggle>`. If you are using another element, such as a button, just add the `uk-toggle="target: #TOGGLE"` attribute to toggle the Command component.

### Example

```html
<button
  class="uk-btn uk-btn-default mr-2"
  type="button"
  data-uk-toggle="target: #cmd2"
>
  Open
</button>

<a href="#cmd2" data-uk-toggle>Open</a>

<uk-command toggle="cmd2">
  <select hidden>
    <optgroup label="Suggestions">
      <option data-icon="calendar" value="/path/to/calendar">Calendar</option>
      <option data-icon="smile" value="/path/to/search-emoji">
        Search Emoji
      </option>
      <option data-icon="calculator" disabled value="/path/to/calculator">
        Calculator
      </option>
    </optgroup>
    <optgroup label="Settings">
      <option data-icon="user" value="/path/to/profile">Profile</option>
      <option data-icon="credit-card" value="/path/to/billing">Billing</option>
      <option data-icon="settings" value="/path/to/settings">Settings</option>
    </optgroup>
  </select>
</uk-command>
```

## Programmatic navigation

By default, the command palette component does not perform any action when an item is selected or clicked. This allows for flexibility in handling user input. To respond to user input, you need to manually attach an event listener to the component specifically to the `uk-command:select` event.

To get started, assign an ID to your command component and attach an event listener to it.

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #programmatic_navigation"
>
  Open
</button>

<uk-command id="cmd-demo" toggle="programmatic_navigation">
  <select hidden>
    <optgroup label="Suggestions">
      <option data-icon="calendar" value="/path/to/calendar">Calendar</option>
      <option data-icon="smile" value="/path/to/search-emoji">
        Search Emoji
      </option>
      <option data-icon="calculator" disabled value="/path/to/calculator">
        Calculator
      </option>
    </optgroup>
    <optgroup label="Settings">
      <option data-icon="user" value="/path/to/profile">Profile</option>
      <option data-icon="credit-card" value="/path/to/billing">Billing</option>
      <option data-icon="settings" value="/path/to/settings">Settings</option>
    </optgroup>
  </select>
</uk-command>

<script>
  const el = document.getElementById("cmd-demo");

  el?.addEventListener("uk-command:click", (e) => {
    console.log(e.detail.value.value);

    // location.href = e.detail.value.value;
  });
</script>
```

You can try out this example by checking your browser's developer console. When you select an item from the command palette, the selected value will be logged to the console. From there, you can handle the value as needed to respond to the user's input.

## Customizing searchable keywords

Sometimes, there are elements that have related keywords that may be slightly off or awkward when included as anchor tags. For these use cases, we can leverage the `data-keywords` attribute.

For example, if we have a "Form" link but also want it to appear when users search for terms like "checkbox," "input," "toggle switch," etc., we can simply add a comma-separated list of terms like this: `data-keywords="checkbox,input,radio"`

```html
<uk-command>
  <select hidden>
    <optgroup label="Components">
      <option data-keywords="checkbox,input,radio" value="/path/to/form">
        Form
      </option>
    </optgroup>
  </select>
</uk-command>
```

## Grouping related items

To group related elements, simply use the `optgroup` tag and items will be automatically sorted and grouped with headers.

```html
<uk-command>
  <select hidden>
    <optgroup label="Suggestions">
      <!-- ... -->
    </optgroup>
    <optgroup label="Settings">
      <!-- ... -->
    </optgroup>
  </select>
</uk-command>
```

## Disabling an item

Sometimes, we may want to disable items. To do this, simply use the `disabled` attribute, and the item will be automatically disabled.

```html
<uk-command>
  <select hidden>
    <optgroup label="Suggestions">
      <option data-icon="calculator" disabled value="/path/to/calculator">
        Calculator
      </option>
    </optgroup>
  </select>
</uk-command>
```

## Attributes

The following attributes are available for this component:

| Name                     | Type    | Default | Description                                                                                                                                               |
| ------------------------ | ------- | ------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `force-prevent-rerender` | Boolean | false   | Forcefully prevents component rerendering.                                                                                                                |
| `key`                    | Sring   |         | Assign a keyboard shortcut.                                                                                                                               |
| `placeholder`            | String  | Search  | The placeholder for the input.                                                                                                                            |
| `toggle`                 | String  |         | Behind the scenes, this will be used as the ID of the modal. It is useful for manually toggling the Command component using an `<a>` or a `<button>` tag. |

## Events

The Command component triggers the following events on elements with this component attached:

| Name                | Description                                                                                     |
| ------------------- | ----------------------------------------------------------------------------------------------- |
| `uk-command:select` | Fired after an item was selected or clicked, providing an opportunity to respond to user input. |



# File: comment.md
==================================================

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



# File: container.md
==================================================

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



# File: cover.md
==================================================

## Cover

To have an image cover its parent element, add the `.uk-cover-container` class to the parent and the `data-uk-cover` attribute to the image.

```html
<div class="uk-cover-container">
  <img src="" alt="" data-uk-cover />
</div>
```

Note: To position content on top of the covering element, use the [Position component](https://franken-ui.dev/docs/2.1/position).

### Example

```html
<div class="uk-cover-container h-80">
  <img src="/images/dark.jpg" alt="" data-uk-cover />
</div>
```

## Video

To create a video that covers its parent container, add the `data-uk-cover` attribute to a video. Wrap a container element around the video and add the `.uk-cover-container` class to clip the content.

The Cover component inherits all properties from the [Video component](https://franken-ui.dev/docs/2.1/video) which means videos are muted and play automatically. The video will pause whenever it's not visible and resume once it becomes visible again.

```html
<div class="uk-cover-container">
  <video data-uk-cover></video>
</div>
```

### Example

```html
<div class="uk-cover-container h-80">
  <video
    src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
    loop
    muted
    playsinline
    data-uk-cover
  ></video>
</div>
```

## Iframe

To apply the Cover component to an iframe, you need to add the `data-uk-cover` attribute to the iframe. Now add the `.uk-cover-container` class to a container element around the iframe to clip the content.

```html
<div class="uk-cover-container">
  <iframe src="" data-uk-cover></iframe>
</div>
```

### Example

```html
<div class="uk-cover-container h-80">
  <iframe
    src="https://www.youtube-nocookie.com/embed/aqz-KE-bpKQ?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent"
    width="1920"
    height="1080"
    allowfullscreen
    data-uk-cover
  ></iframe>
</div>
```

## Responsive height

To add responsive behavior to your cover image, you need to create an invisible `<canvas>` element and assign `width` and `height` values to it, according to the aspect ratio you want the covered area to have. That way it will adapt the responsive behavior of the image.

```html
<div class="uk-cover-container">
  <canvas width="" height=""></canvas>
  <img src="" alt="" data-uk-cover />
</div>
```

### Example

```html
<div class="uk-cover-container">
  <canvas width="400" height="200"></canvas>
  <img src="/images/dark.jpg" alt="" data-uk-cover />
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option     | Value   | Default | Description                           |
| ---------- | ------- | ------- | ------------------------------------- |
| `automute` | Boolean | true    | Tries to automute the iframe's video. |
| `width`    | Number  |         | The element's width.                  |
| `height`   | Number  |         | The element's height.                 |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript).

### Initialization

```javascript
UIkit.cover(element, options);
```



# File: divider.md
==================================================

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


# File: dotnav.md
==================================================

## Dotnav

To create a navigation with dots, use the following classes. This component is built with Flexbox. So to align a dotnav, you can use utility classes from Tailwind CSS.

| Class         | Description                                                                                                         |
| ------------- | ------------------------------------------------------------------------------------------------------------------- |
| `.uk-dotnav`  | Add this class to a `<ul>` element to define the Dotnav component. Use `<a>` elements as nav items within the list. |
| `.uk-active ` | Add this class to a list item to apply an active state.                                                             |

```html
<ul class="uk-dotnav">
  <li class="uk-active"><a href=""></a></li>
  <li><a href=""></a></li>
</ul>
```

### Example

```html
<ul class="uk-dotnav">
  <li class="uk-active"><a>Item 1</a></li>
  <li><a>Item 2</a></li>
  <li><a>Item 3</a></li>
  <li><a>Item 4</a></li>
  <li><a>Item 5</a></li>
</ul>
```

## Vertical alignment

The dotnav can also be displayed vertically. Just add the `.uk-dotnav-vertical` modifier.

```html
<ul class="uk-dotnav uk-dotnav-vertical">
  ...
</ul>
```

### Example

```html
<ul class="uk-dotnav uk-dotnav-vertical">
  <li class="uk-active"><a>Item 1</a></li>
  <li><a>Item 2</a></li>
  <li><a>Item 3</a></li>
  <li><a>Item 4</a></li>
  <li><a>Item 5</a></li>
</ul>
```



# File: drop.md
==================================================

## Drop

The Drop component is aim-aware. This means the drop stays open as long as the mouse pointer moves towards the drop. An additional delay ensures that the drop stays open even if the mouse pointer shortly moves in another direction. A drop closes immediately if another menu item is hovered.

Any content, like a button, can toggle the drop component. Just add the `data-uk-drop` attribute to a block element following the toggle.

```html
<button type="button"></button>
<div data-uk-drop></div>
```

To group the toggle and the dropdown, just wrap them with a container element and add the `.uk-inline` class.

```html
<div class="uk-inline">
  <button type="button"></button>
  <div data-uk-drop></div>
</div>
```

Note: The Drop component has no default styling. In this example, we've used a card from the [Card component](https://franken-ui.dev/docs/2.1/card) for visualization.

### Example

```html
<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Hover, Click</button>
  <div class="uk-card uk-card-body uk-drop" data-uk-drop>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Mode

By default, the drop is toggled on hover and on click. Set the `mode` option to change the toggle behavior.

| Mode          | Description                     |
| ------------- | ------------------------------- |
| `click,hover` | Toggle drop on click and hover. |
| `click`       | Toggle drop on click only.      |
| `hover`       | Toggle drop on hover only.      |

```html
<div data-uk-drop="mode: click"></div>
```

### Example

```html
<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Hover</button>
  <div class="uk-card uk-card-body uk-drop" data-uk-drop="mode: hover">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>

<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Click</button>
  <div class="uk-card uk-card-body uk-drop" data-uk-drop="mode: click">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Parent icon

To create a parent icon, just add the `data-uk-drop-parent-icon` attribute to a `<span>` element.

```html
<button type="button">Parent <span uk-drop-parent-icon></span></button>
<div data-uk-drop="mode: click"></div>
```

### Example

```html
<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">
    Parent <span class="ml-2" data-uk-drop-parent-icon></span>
  </button>
  <div class="uk-card uk-card-body uk-drop" data-uk-drop="mode: click">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Position

By default, the drop is positioned below the toggle. To change its position, set the `pos` option to the `data-uk-drop` attribute. The first part of the value refers to the side where the drop is positioned, while the second part defines its alignment to the toggle.

| Position        | Description                                                                |
| --------------- | -------------------------------------------------------------------------- |
| `top-left`      | Positions the drop above the toggle and aligns it to the left.             |
| `top-center`    | Positions the drop above the toggle and aligns it to the center.           |
| `top-right`     | Positions the drop above the toggle and aligns it to the right.            |
| `bottom-left`   | Positions the drop below the toggle and aligns it to the left.             |
| `bottom-center` | Positions the drop below the toggle and aligns it to the center.           |
| `bottom-right`  | Positions the drop below the toggle and aligns it to the right.            |
| `left-top`      | Positions the drop to the left of the toggle and aligns it to the top.     |
| `left-center`   | Positions the drop to the left of the toggle and aligns it to the center.  |
| `left-bottom`   | Positions the drop to the left of the toggle and aligns it to the bottom.  |
| `right-top`     | Positions the drop to the right of the toggle and aligns it to the top.    |
| `right-center`  | Positions the drop to the right of the toggle and aligns it to the center. |
| `right-bottom`  | Positions the drop to the right of the toggle and aligns it to the bottom. |

```html
<div data-uk-drop="pos: top-left"></div>
```

### Example

```html
<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Top Right</button>
  <div class="uk-card uk-card-body uk-drop" data-uk-drop="pos: top-right">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>

<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Bottom Center</button>
  <div class="uk-card uk-card-body uk-drop" data-uk-drop="pos: bottom-center">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>

<div class="uk-inline">
  <button class="uk-btn uk-btn-default" type="button">Right Top</button>
  <div class="uk-card uk-card-body uk-drop" data-uk-drop="pos: right-top">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Boundary

By default, the drop automatically changes its positions if it exceeds the viewport or any other parent scrolling ancestor. It will flip its position to the other side to prevent it from covering the toggle and shift its alignment to fit into the viewport. To set a different boundary other than the scrolling ancestor, just add the `boundary: SELECTOR` option to the `data-uk-drop` attribute using a selector for the boundary. To set a boundary on one axis only, use `boundary-x: SELECTOR` or `boundary-y: SELECTOR`.

```html
<div class="my-class">
  <button type="button"></button>
  <div data-uk-drop="boundary: !.my-class"></div>
</div>
```

### Example

```html
<div class="boundary uk-placeholder h-80">
  <button class="uk-btn uk-btn-default float-left" type="button">
    Bottom Right
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-right; boundary: !.boundary"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>

  <button class="uk-btn uk-btn-default float-right" type="button">
    Bottom Left
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-left; boundary: !.boundary"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Shift and flip

To disable automatic shifting and flipping, add the `shift: false` or `flip: false` option to the `data-uk-drop` attribute.

```html
<div data-uk-drop="shift: false; flip: false"></div>
```

### Example

```html
<div class="boundary uk-placeholder h-80">
  <button class="uk-btn uk-btn-default float-left" type="button">
    Bottom Right
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-right; boundary: !.boundary; shift: false; flip: false"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>

  <button class="uk-btn uk-btn-default float-right" type="button">
    Bottom Left
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-left; boundary: !.boundary; shift: false; flip: false"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Auto update

By default, the drop repositions on scrolling. To disable dynamic positioning, add `auto-update: false` option to the `data-uk-drop` attribute. The drop will only be positioned once when opened.

```html
<div data-uk-drop="auto-update: false"></div>
```

## Target

By default, the drop is aligned to its toggle. To position the drop to a different element, just add `target: SELECTOR` option to the `data-uk-drop` attribute. To change just the side where the drop is positioned or the alignment to another element, use `target-x: SELECTOR` or `target-y: SELECTOR`.

```html
<div class="my-class">
  <button type="button"></button>
  <div data-uk-drop="target: !.my-class"></div>
</div>
```

### Example

```html
<div class="target uk-placeholder h-80">
  <button class="uk-btn uk-btn-default float-left" type="button">
    Bottom Left
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-left; target: !.target"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>

  <button class="uk-btn uk-btn-default float-right" type="button">
    Bottom Right
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-right; target: !.target"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Inset

By default, the drop is positioned outside the toggle. To change the position to the inside, add the `inset: true` option to the `data-uk-drop` attribute. This option should only be used if the `target` option is also set so the drop doesn't cover its toggle.

```html
<div data-uk-drop="target: .my-class; inset: true"></div>
```

### Example

```html
<div class="target uk-placeholder h-80">
  <button class="uk-btn uk-btn-default float-left" type="button">
    Bottom Left
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-left; target: !.target; inset: true"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>

  <button class="uk-btn uk-btn-default float-right" type="button">
    Bottom Right
  </button>
  <div
    class="uk-card uk-card-body uk-drop"
    data-uk-drop="pos: bottom-right; target: !.target; inset: true"
  >
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt.
  </div>
</div>
```

## Stretch

To stretch the drop to fill the size of its closest scrolling ancestor, add the `stretch: true` option to the `data-uk-drop` attribute. To only stretch to one axis, use `stretch: x` or `stretch: y`. If the `boundary` option is set, the drop stretches to the defined boundary.

```html
<div data-uk-drop="stretch: true"></div>
```

## Animation

Apply one or more animations to the dropdown by adding the `animation: uk-anmt-*` option with one of the classes from the [Animation component](https://franken-ui.dev/docs/2.1/animation). You can also determine the animation's duration. Just add the `duration` option with a value in milliseconds. Set `animate-out: true` to also show an animation when closing the drop.

```html
<div data-uk-drop="animation: uk-anmt-slide-top-small; duration: 1000"></div>
```

### Example

```html
<button class="uk-btn uk-btn-default" type="button">Hover</button>
<div
  class="uk-card uk-card-body uk-drop"
  data-uk-drop="animation: uk-anmt-slide-top-sm; animate-out: true"
>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
  incididunt.
</div>
```

Alternatively, the Drop component has two additional animation types that are not covered by the Animation component. `slide-*` animations slide the drop and its content from a selected direction, while with the `reveal-*` animations, the content of the drop stays static and is revealed from a selected direction.

| Animation       | Description                       |
| --------------- | --------------------------------- |
| `slide-top`     | Slides the drop from the top.     |
| `slide-bottom`  | Slides the drop from the bottom.  |
| `slide-left`    | Slides the drop from the left.    |
| `slide-right`   | Slides the drop from the right.   |
| `reveal-top`    | Reveals the drop from the top.    |
| `reveal-bottom` | Reveals the drop from the bottom. |
| `reveal-left`   | Reveals the drop from the left.   |
| `reveal-right`  | Reveals the drop from the right.  |

```html
<div data-uk-drop="animation: slide-top; animate-out: true"></div>
```

### Example

```html
<div class="flex flex-wrap gap-2">
  <div class="uk-inline">
    <button class="uk-btn uk-btn-default" type="button">Slide Top</button>
    <div
      class="uk-card uk-card-body uk-drop"
      data-uk-drop="animation: slide-top; animate-out: true; duration: 700"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt.
    </div>
  </div>

  <div class="uk-inline">
    <button class="uk-btn uk-btn-default" type="button">Reveal Top</button>
    <div
      class="uk-card uk-card-body uk-drop"
      data-uk-drop="animation: reveal-top; animate-out: true; duration: 700"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt.
    </div>
  </div>

  <div class="uk-inline">
    <button class="uk-btn uk-btn-default" type="button">Slide Left</button>
    <div
      class="uk-card uk-card-body uk-drop"
      data-uk-drop="animation: slide-left; animate-out: true; duration: 700"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt.
    </div>
  </div>

  <div class="uk-inline">
    <button class="uk-btn uk-btn-default" type="button">Reveal Left</button>
    <div
      class="uk-card uk-card-body uk-drop"
      data-uk-drop="animation: reveal-left; animate-out: true; duration: 700"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt.
    </div>
  </div>
</div>
```

## Offset

To define a custom offset between the drop and its toggle, add the `offset` option with a value in pixels.

```html
<div data-uk-drop="offset: 80"></div>
```

### Example

```html
<button class="uk-btn uk-btn-default" type="button">Hover</button>
<div class="uk-card uk-card-body uk-drop" data-uk-drop="offset: 80">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
  incididunt.
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option            | Value                 | Default        | Description                                                                                              |
| ----------------- | --------------------- | -------------- | -------------------------------------------------------------------------------------------------------- |
| `toggle`          | CSS selector          | `- *`          | CSS selector for the element to be used as toggle. By default, the preceding element.                    |
| `pos`             | String                | `bottom-left`  | Drop position.                                                                                           |
| `stretch`         | Boolean, String       | `false`        | Stretch drop on both (true) or given axis (`x`, `y`).                                                    |
| `mode`            | String                | `click, hover` | Comma-separated list of drop trigger behavior modes (`click`, `hover`).                                  |
| `delay-show`      | Number                | `0`            | Delay time in hover mode before a drop is shown in ms.                                                   |
| `delay-hide`      | Number                | `800`          | Delay time in hover mode before a drop is hidden in ms.                                                  |
| `auto-update`     | Boolean               | `true`         | Disable dynamic positioning while scrolling by setting this option to `false`.                           |
| `boundary`        | CSS selector          | `false`        | The area the drop can't exceed causing it to flip and shift. By default, the nearest scrolling ancestor. |
| `boundary-x`      | CSS selector          | `false`        | The area on the x-axis the drop can't exceed causing it to flip and shift.                               |
| `boundary-y`      | CSS selector          | `false`        | The area on the y-axis the drop can't exceed causing it to flip and shift.                               |
| `target`          | Boolean, CSS selector | `false`        | The element the drop is positioned to (`true` for window).                                               |
| `target-x`        | Boolean, CSS selector | `false`        | The element's X axis the drop is positioned to (`true` for window).                                      |
| `target-y`        | Boolean, CSS selector | `false`        | The element's Y axis the drop is positioned to (`true` for window).                                      |
| `inset`           | Boolean               | `false`        | Position inside its target.                                                                              |
| `flip`            | Boolean               | `true`         | Flip the drop along the main axis if it overflows the boundary.                                          |
| `shift`           | Boolean               | `true`         | Shift the drop along the cross axis if it overflows the boundary.                                        |
| `offset`          | Number                | `0`            | The drop offset.                                                                                         |
| `animation`       | String                | `uk-anmt-fade` | Space-separated names of animations. Comma-separated for animation out.                                  |
| `animate-out`     | Boolean               | `false`        | Use animation when closing the drop.                                                                     |
| `bg-scroll`       | Boolean               | `true`         | Allow background scrolling while drop is opened.                                                         |
| `close-on-scroll` | Boolean               | `false`        | Close the drop on scrolling a parent scroll container.                                                   |
| `duration`        | Number                | `200`          | The animation duration.                                                                                  |
| `container`       | Boolean               | `false`        | Define a target container via a selector to specify where the drop should be appended in the DOM.        |

`pos` is the _Primary_ option, and its key may be omitted if it's the only option in the attribute value.

```html
<span data-uk-drop="top-left"></span>
```

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.drop(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name         | Description                                                                                    |
| ------------ | ---------------------------------------------------------------------------------------------- |
| `toggle`     | Fires before an item is toggled.                                                               |
| `beforeshow` | Fires before an item is shown. Can prevent showing by calling `preventDefault()` on the event. |
| `show`       | Fires after an item is shown.                                                                  |
| `shown`      | Fires after the item's show animation has completed.                                           |
| `beforehide` | Fires before an item is hidden. Can prevent hiding by calling `preventDefault()` on the event. |
| `hide`       | Fires before an item is hidden.                                                                |
| `hidden`     | Fires after an item is hidden.                                                                 |
| `stack`      | Fires when the `drop-stack`class is applied.                                                   |

### Methods

The following methods are available for the component:

#### Show

```javascript
UIkit.drop(element).show();
```

Shows the drop.

#### Hide

```javascript
UIkit.drop(element).hide(delay);
```

Hides the drop.

| Name    | Type    | Default | Description            |
| ------- | ------- | ------- | ---------------------- |
| `delay` | Boolean | true    | Delay hiding the drop. |

## Accessibility

The Drop component adheres to the [Menu Button WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/menubutton/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _toggle_ has the `button` role, the `aria-expanded` state and the `aria-haspopup` property.

### Keyboard interaction

The Drop component can be accessed through keyboard using the following keys.

- The <kbd>enter</kbd> or <kbd>space</kbd> keys open and close the drop.
- The <kbd>esc</kbd> key closes the drop even if focus has moved to another element.



# File: dropdown.md
==================================================

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



# File: filter.md
==================================================

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



# File: form.md
==================================================

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



# File: franken-ui.md
==================================================

## Overview

Franken UI is an open-source library of UI components. Under the hood, it uses UIkit 3 and extended with LitElement. The design is based on shadcn/ui.

## With Tailwind CSS v4

If you'd like to use Tailwind CSS v4 alongside Franken UI, you can manually configure your `@theme` directives like so:

```css
@import "tailwindcss";
@import "franken-ui/css/franken-ui.css";

@theme {
  --color-background: hsl(var(--background));
  --color-foreground: hsl(var(--foreground));
  --color-muted: hsl(var(--muted));
  --color-muted-foreground: hsl(var(--muted-foreground));
  --color-card: hsl(var(--card));
  --color-card-foreground: hsl(var(--card-foreground));
  --color-popover: hsl(var(--popover));
  --color-popover-foreground: hsl(var(--popover-foreground));
  --color-border: hsl(var(--border) / var(--border-alpha, 1));
  --color-input: hsl(var(--input) / var(--input-alpha, 1));
  --color-primary: hsl(var(--primary));
  --color-primary-foreground: hsl(var(--primary-foreground));
  --color-secondary: hsl(var(--secondary));
  --color-secondary-foreground: hsl(var(--secondary-foreground));
  --color-accent: hsl(var(--accent));
  --color-accent-foreground: hsl(var(--accent-foreground));
  --color-destructive: hsl(var(--destructive) / var(--destructive-alpha, 1));
  --color-destructive-foreground: hsl(var(--destructive-foreground));
  --color-ring: hsl(var(--ring));

  --font-geist-sans: Geist Sans, ui-sans-serif, system-ui, sans-serif,
    "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
  --font-geist-mono: Geist Mono, ui-monospace, SFMono-Regular, Menlo, Monaco,
    Consolas, "Liberation Mono", "Courier New", monospace;
}
```

This will allow you to use utilities like `bg-primary`, `bg-muted`, and other custom utility classes within your project. Make sure to update your `vite.config.js` as well.

```js
import franken from "franken-ui/plugin-vite";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [
    franken({
      preflight: false,
      layer: true,
      layerExceptions: ["chart"],
    }),
  ],
});
```

Note: If you choose to use Franken UI alongside Tailwind CSS v4, make sure to set `preflight` to `false` in your `vite.config.js`, as Tailwind already includes this feature. You also need to set `layer` to `true` to make the class hirarchy equal. Adding components inside `layerExceptions` will disable CSS layering for those components, placing them at the highest level of hierarchy.


# File: icon-library.md
==================================================

## Icon Library

- `{icon_name: "a-arrow-down", synonyms: [letter, font size, text, formatting, smaller], usage: "<uk-icon icon=\"a-arrow-down\"></uk-icon>" }`
- `{icon_name: "a-arrow-up", synonyms: [letter, font size, text, formatting, larger, bigger], usage: "<uk-icon icon=\"a-arrow-up\"></uk-icon>" }`
- `{icon_name: "a-large-small", synonyms: [letter, font size, text, formatting], usage: "<uk-icon icon=\"a-large-small\"></uk-icon>" }`
- `{icon_name: "accessibility", synonyms: [disability, disabled, dda, wheelchair], usage: "<uk-icon icon=\"accessibility\"></uk-icon>" }`
- `{icon_name: "activity", synonyms: [pulse, action, motion, movement, exercise, fitness, healthcare, heart rate monitor, vital signs, vitals, emergency room, er, intensive care, hospital, defibrillator, earthquake, siesmic, magnitude, richter scale, aftershock, tremor, shockwave, audio, waveform, synthesizer, synthesiser, music], usage: "<uk-icon icon=\"activity\"></uk-icon>" }`
- `{icon_name: "air-vent", synonyms: [air conditioner, ac, central air, cooling, climate-control], usage: "<uk-icon icon=\"air-vent\"></uk-icon>" }`
- `{icon_name: "airplay", synonyms: [stream, cast, mirroring, screen, monitor, macos, osx], usage: "<uk-icon icon=\"airplay\"></uk-icon>" }`
- `{icon_name: "alarm-clock-check", synonyms: [done, todo, tick, complete, task], usage: "<uk-icon icon=\"alarm-clock-check\"></uk-icon>" }`
- `{icon_name: "alarm-clock-minus", synonyms: [remove], usage: "<uk-icon icon=\"alarm-clock-minus\"></uk-icon>" }`
- `{icon_name: "alarm-clock-off", synonyms: [morning, turn-off], usage: "<uk-icon icon=\"alarm-clock-off\"></uk-icon>" }`
- `{icon_name: "alarm-clock-plus", synonyms: [add], usage: "<uk-icon icon=\"alarm-clock-plus\"></uk-icon>" }`
- `{icon_name: "alarm-clock", synonyms: [morning], usage: "<uk-icon icon=\"alarm-clock\"></uk-icon>" }`
- `{icon_name: "alarm-smoke", synonyms: [fire, alert, warning, detector, carbon monoxide, safety, equipment, amenities], usage: "<uk-icon icon=\"alarm-smoke\"></uk-icon>" }`
- `{icon_name: "album", synonyms: [photo, book], usage: "<uk-icon icon=\"album\"></uk-icon>" }`
- `{icon_name: "align-center-horizontal", synonyms: [items, flex, justify], usage: "<uk-icon icon=\"align-center-horizontal\"></uk-icon>" }`
- `{icon_name: "align-center-vertical", synonyms: [items, flex, justify], usage: "<uk-icon icon=\"align-center-vertical\"></uk-icon>" }`
- `{icon_name: "align-center", synonyms: [text, alignment, center], usage: "<uk-icon icon=\"align-center\"></uk-icon>" }`
- `{icon_name: "align-end-horizontal", synonyms: [items, bottom, flex, justify], usage: "<uk-icon icon=\"align-end-horizontal\"></uk-icon>" }`
- `{icon_name: "align-end-vertical", synonyms: [items, right, flex, justify], usage: "<uk-icon icon=\"align-end-vertical\"></uk-icon>" }`
- `{icon_name: "align-horizontal-distribute-center", synonyms: [items, flex, justify, space, evenly, around], usage: "<uk-icon icon=\"align-horizontal-distribute-center\"></uk-icon>" }`
- `{icon_name: "align-horizontal-distribute-end", synonyms: [right, items, flex, justify], usage: "<uk-icon icon=\"align-horizontal-distribute-end\"></uk-icon>" }`
- `{icon_name: "align-horizontal-distribute-start", synonyms: [left, items, flex, justify], usage: "<uk-icon icon=\"align-horizontal-distribute-start\"></uk-icon>" }`
- `{icon_name: "align-horizontal-justify-center", synonyms: [center, items, flex, justify], usage: "<uk-icon icon=\"align-horizontal-justify-center\"></uk-icon>" }`
- `{icon_name: "align-horizontal-justify-end", synonyms: [right, items, flex, justify], usage: "<uk-icon icon=\"align-horizontal-justify-end\"></uk-icon>" }`
- `{icon_name: "align-horizontal-justify-start", synonyms: [left, items, flex, justify], usage: "<uk-icon icon=\"align-horizontal-justify-start\"></uk-icon>" }`
- `{icon_name: "align-horizontal-space-around", synonyms: [center, items, flex, justify, distribute, between], usage: "<uk-icon icon=\"align-horizontal-space-around\"></uk-icon>" }`
- `{icon_name: "align-horizontal-space-between", synonyms: [around, items, bottom, flex, justify], usage: "<uk-icon icon=\"align-horizontal-space-between\"></uk-icon>" }`
- `{icon_name: "align-justify", synonyms: [text, alignment, justified, menu, list], usage: "<uk-icon icon=\"align-justify\"></uk-icon>" }`
- `{icon_name: "align-left", synonyms: [text, alignment, left, list], usage: "<uk-icon icon=\"align-left\"></uk-icon>" }`
- `{icon_name: "align-right", synonyms: [text, alignment, right], usage: "<uk-icon icon=\"align-right\"></uk-icon>" }`
- `{icon_name: "align-start-horizontal", synonyms: [top, items, flex, justify], usage: "<uk-icon icon=\"align-start-horizontal\"></uk-icon>" }`
- `{icon_name: "align-start-vertical", synonyms: [left, items, flex, justify], usage: "<uk-icon icon=\"align-start-vertical\"></uk-icon>" }`
- `{icon_name: "align-vertical-distribute-center", synonyms: [items, flex, justify, space, evenly, around], usage: "<uk-icon icon=\"align-vertical-distribute-center\"></uk-icon>" }`
- `{icon_name: "align-vertical-distribute-end", synonyms: [bottom, items, flex, justify], usage: "<uk-icon icon=\"align-vertical-distribute-end\"></uk-icon>" }`
- `{icon_name: "align-vertical-distribute-start", synonyms: [top, items, flex, justify], usage: "<uk-icon icon=\"align-vertical-distribute-start\"></uk-icon>" }`
- `{icon_name: "align-vertical-justify-center", synonyms: [center, items, flex, justify, distribute, between], usage: "<uk-icon icon=\"align-vertical-justify-center\"></uk-icon>" }`
- `{icon_name: "align-vertical-justify-end", synonyms: [bottom, items, flex, justify, distribute, between], usage: "<uk-icon icon=\"align-vertical-justify-end\"></uk-icon>" }`
- `{icon_name: "align-vertical-justify-start", synonyms: [top, items, flex, justify, distribute, between], usage: "<uk-icon icon=\"align-vertical-justify-start\"></uk-icon>" }`
- `{icon_name: "align-vertical-space-around", synonyms: [center, items, flex, justify, distribute, between], usage: "<uk-icon icon=\"align-vertical-space-around\"></uk-icon>" }`
- `{icon_name: "align-vertical-space-between", synonyms: [center, items, flex, justify, distribute, between], usage: "<uk-icon icon=\"align-vertical-space-between\"></uk-icon>" }`
- `{icon_name: "ambulance", synonyms: [ambulance, emergency, medical, vehicle, siren, healthcare, transportation, rescue, urgent, first aid], usage: "<uk-icon icon=\"ambulance\"></uk-icon>" }`
- `{icon_name: "ampersand", synonyms: [and, typography, operator, join, concatenate, code, &], usage: "<uk-icon icon=\"ampersand\"></uk-icon>" }`
- `{icon_name: "ampersands", synonyms: [and, operator, then, code, &&], usage: "<uk-icon icon=\"ampersands\"></uk-icon>" }`
- `{icon_name: "amphora", synonyms: [pottery, artifact, artefact, vase, ceramics, clay, archaeology, museum, wine, oil], usage: "<uk-icon icon=\"amphora\"></uk-icon>" }`
- `{icon_name: "anchor", synonyms: [ship], usage: "<uk-icon icon=\"anchor\"></uk-icon>" }`
- `{icon_name: "angry", synonyms: [emoji, anger, face, emotion], usage: "<uk-icon icon=\"angry\"></uk-icon>" }`
- `{icon_name: "annoyed", synonyms: [emoji, nuisance, face, emotion], usage: "<uk-icon icon=\"annoyed\"></uk-icon>" }`
- `{icon_name: "antenna", synonyms: [signal, connection, connectivity, tv, television, broadcast, live, frequency, tune, scan, channels, aerial, receiver, transmission, transducer, terrestrial, satellite, cable], usage: "<uk-icon icon=\"antenna\"></uk-icon>" }`
- `{icon_name: "anvil", synonyms: [metal, iron, alloy, materials, heavy, weight, blacksmith, forge, acme], usage: "<uk-icon icon=\"anvil\"></uk-icon>" }`
- `{icon_name: "aperture", synonyms: [camera, photo, pictures, shutter, exposure], usage: "<uk-icon icon=\"aperture\"></uk-icon>" }`
- `{icon_name: "app-window-mac", synonyms: [application, menu bar, pane, preferences, macos, osx, executable], usage: "<uk-icon icon=\"app-window-mac\"></uk-icon>" }`
- `{icon_name: "app-window", synonyms: [application, menu bar, pane, executable], usage: "<uk-icon icon=\"app-window\"></uk-icon>" }`
- `{icon_name: "apple", synonyms: [fruit, food], usage: "<uk-icon icon=\"apple\"></uk-icon>" }`
- `{icon_name: "archive-restore", synonyms: [unarchive, index, backup, box, storage, records], usage: "<uk-icon icon=\"archive-restore\"></uk-icon>" }`
- `{icon_name: "archive-x", synonyms: [index, backup, box, storage, records, junk], usage: "<uk-icon icon=\"archive-x\"></uk-icon>" }`
- `{icon_name: "archive", synonyms: [index, backup, box, storage, records], usage: "<uk-icon icon=\"archive\"></uk-icon>" }`
- `{icon_name: "armchair", synonyms: [sofa, furniture, leisure, lounge, loveseat, couch], usage: "<uk-icon icon=\"armchair\"></uk-icon>" }`
- `{icon_name: "arrow-big-down-dash", synonyms: [backwards, reverse, slow, direction, south, download], usage: "<uk-icon icon=\"arrow-big-down-dash\"></uk-icon>" }`
- `{icon_name: "arrow-big-down", synonyms: [backwards, reverse, direction, south], usage: "<uk-icon icon=\"arrow-big-down\"></uk-icon>" }`
- `{icon_name: "arrow-big-left-dash", synonyms: [previous, back, direction, west, turn, corner], usage: "<uk-icon icon=\"arrow-big-left-dash\"></uk-icon>" }`
- `{icon_name: "arrow-big-left", synonyms: [previous, back, direction, west, indicate turn], usage: "<uk-icon icon=\"arrow-big-left\"></uk-icon>" }`
- `{icon_name: "arrow-big-right-dash", synonyms: [next, forward, direction, east, turn, corner], usage: "<uk-icon icon=\"arrow-big-right-dash\"></uk-icon>" }`
- `{icon_name: "arrow-big-right", synonyms: [next, forward, direction, east, indicate turn], usage: "<uk-icon icon=\"arrow-big-right\"></uk-icon>" }`
- `{icon_name: "arrow-big-up-dash", synonyms: [caps lock, capitals, keyboard, button, mac, forward, direction, north, faster, speed, boost], usage: "<uk-icon icon=\"arrow-big-up-dash\"></uk-icon>" }`
- `{icon_name: "arrow-big-up", synonyms: [shift, keyboard, button, mac, capitalize, capitalise, forward, direction, north], usage: "<uk-icon icon=\"arrow-big-up\"></uk-icon>" }`
- `{icon_name: "arrow-down-0-1", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, numerical], usage: "<uk-icon icon=\"arrow-down-0-1\"></uk-icon>" }`
- `{icon_name: "arrow-down-1-0", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, numerical], usage: "<uk-icon icon=\"arrow-down-1-0\"></uk-icon>" }`
- `{icon_name: "arrow-down-a-z", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, alphabetical], usage: "<uk-icon icon=\"arrow-down-a-z\"></uk-icon>" }`
- `{icon_name: "arrow-down-from-line", synonyms: [backwards, reverse, direction, south, download, expand, fold, vertical], usage: "<uk-icon icon=\"arrow-down-from-line\"></uk-icon>" }`
- `{icon_name: "arrow-down-left", synonyms: [direction, south-west, diagonal], usage: "<uk-icon icon=\"arrow-down-left\"></uk-icon>" }`
- `{icon_name: "arrow-down-narrow-wide", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"arrow-down-narrow-wide\"></uk-icon>" }`
- `{icon_name: "arrow-down-right", synonyms: [direction, south-east, diagonal], usage: "<uk-icon icon=\"arrow-down-right\"></uk-icon>" }`
- `{icon_name: "arrow-down-to-dot", synonyms: [direction, south, waypoint, location, step, into], usage: "<uk-icon icon=\"arrow-down-to-dot\"></uk-icon>" }`
- `{icon_name: "arrow-down-to-line", synonyms: [behind, direction, south, download, save, git, version control, pull, collapse, fold, vertical], usage: "<uk-icon icon=\"arrow-down-to-line\"></uk-icon>" }`
- `{icon_name: "arrow-down-up", synonyms: [bidirectional, two-way, 2-way, swap, switch, network, traffic, flow, mobile data, internet, sort, reorder, move], usage: "<uk-icon icon=\"arrow-down-up\"></uk-icon>" }`
- `{icon_name: "arrow-down-wide-narrow", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"arrow-down-wide-narrow\"></uk-icon>" }`
- `{icon_name: "arrow-down-z-a", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, alphabetical, reverse], usage: "<uk-icon icon=\"arrow-down-z-a\"></uk-icon>" }`
- `{icon_name: "arrow-down", synonyms: [backwards, reverse, direction, south], usage: "<uk-icon icon=\"arrow-down\"></uk-icon>" }`
- `{icon_name: "arrow-left-from-line", synonyms: [previous, back, direction, west, expand, fold, horizontal, <-|], usage: "<uk-icon icon=\"arrow-left-from-line\"></uk-icon>" }`
- `{icon_name: "arrow-left-right", synonyms: [bidirectional, two-way, 2-way, swap, switch, transaction, reorder, move, <-, ->], usage: "<uk-icon icon=\"arrow-left-right\"></uk-icon>" }`
- `{icon_name: "arrow-left-to-line", synonyms: [previous, back, direction, west, collapse, fold, horizontal, |<-], usage: "<uk-icon icon=\"arrow-left-to-line\"></uk-icon>" }`
- `{icon_name: "arrow-left", synonyms: [previous, back, direction, west, <-], usage: "<uk-icon icon=\"arrow-left\"></uk-icon>" }`
- `{icon_name: "arrow-right-from-line", synonyms: [next, forward, direction, east, export, expand, fold, horizontal, |->], usage: "<uk-icon icon=\"arrow-right-from-line\"></uk-icon>" }`
- `{icon_name: "arrow-right-left", synonyms: [bidirectional, two-way, 2-way, swap, switch, transaction, reorder, move, <-, ->], usage: "<uk-icon icon=\"arrow-right-left\"></uk-icon>" }`
- `{icon_name: "arrow-right-to-line", synonyms: [next, forward, direction, east, tab, keyboard, mac, indent, collapse, fold, horizontal, ->|], usage: "<uk-icon icon=\"arrow-right-to-line\"></uk-icon>" }`
- `{icon_name: "arrow-right", synonyms: [forward, next, direction, east, ->], usage: "<uk-icon icon=\"arrow-right\"></uk-icon>" }`
- `{icon_name: "arrow-up-0-1", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, numerical], usage: "<uk-icon icon=\"arrow-up-0-1\"></uk-icon>" }`
- `{icon_name: "arrow-up-1-0", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, numerical], usage: "<uk-icon icon=\"arrow-up-1-0\"></uk-icon>" }`
- `{icon_name: "arrow-up-a-z", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, alphabetical], usage: "<uk-icon icon=\"arrow-up-a-z\"></uk-icon>" }`
- `{icon_name: "arrow-up-down", synonyms: [bidirectional, two-way, 2-way, swap, switch, network, mobile data, internet, sort, reorder, move], usage: "<uk-icon icon=\"arrow-up-down\"></uk-icon>" }`
- `{icon_name: "arrow-up-from-dot", synonyms: [direction, north, step, out], usage: "<uk-icon icon=\"arrow-up-from-dot\"></uk-icon>" }`
- `{icon_name: "arrow-up-from-line", synonyms: [forward, direction, north, upload, git, version control, push, expand, fold, vertical], usage: "<uk-icon icon=\"arrow-up-from-line\"></uk-icon>" }`
- `{icon_name: "arrow-up-left", synonyms: [direction, north-west, diagonal], usage: "<uk-icon icon=\"arrow-up-left\"></uk-icon>" }`
- `{icon_name: "arrow-up-narrow-wide", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"arrow-up-narrow-wide\"></uk-icon>" }`
- `{icon_name: "arrow-up-right", synonyms: [direction, north-east, diagonal], usage: "<uk-icon icon=\"arrow-up-right\"></uk-icon>" }`
- `{icon_name: "arrow-up-to-line", synonyms: [forward, direction, north, upload, collapse, fold, vertical], usage: "<uk-icon icon=\"arrow-up-to-line\"></uk-icon>" }`
- `{icon_name: "arrow-up-wide-narrow", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"arrow-up-wide-narrow\"></uk-icon>" }`
- `{icon_name: "arrow-up-z-a", synonyms: [filter, sort, ascending, descending, increasing, decreasing, rising, falling, alphabetical, reverse], usage: "<uk-icon icon=\"arrow-up-z-a\"></uk-icon>" }`
- `{icon_name: "arrow-up", synonyms: [forward, direction, north], usage: "<uk-icon icon=\"arrow-up\"></uk-icon>" }`
- `{icon_name: "arrows-up-from-line", synonyms: [direction, orientation, this way up, vertical, package, box, fragile, postage, shipping], usage: "<uk-icon icon=\"arrows-up-from-line\"></uk-icon>" }`
- `{icon_name: "asterisk", synonyms: [reference, times, multiply, multiplication, operator, code, glob pattern, wildcard, *], usage: "<uk-icon icon=\"asterisk\"></uk-icon>" }`
- `{icon_name: "at-sign", synonyms: [mention, at, email, message, @], usage: "<uk-icon icon=\"at-sign\"></uk-icon>" }`
- `{icon_name: "atom", synonyms: [atomic, nuclear, physics, particle, element, molecule, electricity, energy, chemistry], usage: "<uk-icon icon=\"atom\"></uk-icon>" }`
- `{icon_name: "audio-lines", synonyms: [graphic equaliser, sound, noise, listen, hearing, hertz, frequency, wavelength, vibrate, sine, synthesizer, synthesiser, levels, track, music, playback, radio, broadcast, airwaves, voice, vocals, singer, song], usage: "<uk-icon icon=\"audio-lines\"></uk-icon>" }`
- `{icon_name: "audio-waveform", synonyms: [sound, noise, listen, hearing, hertz, frequency, wavelength, vibrate, sine, synthesizer, synthesiser, levels, track, music, playback, radio, broadcast, airwaves, voice, vocals, singer, song], usage: "<uk-icon icon=\"audio-waveform\"></uk-icon>" }`
- `{icon_name: "award", synonyms: [achievement, badge, rosette, prize, winner], usage: "<uk-icon icon=\"award\"></uk-icon>" }`
- `{icon_name: "axe", synonyms: [hatchet, weapon, chop, sharp, equipment, fireman, firefighter, brigade, lumberjack, woodcutter, logger, forestry], usage: "<uk-icon icon=\"axe\"></uk-icon>" }`
- `{icon_name: "axis-3d", synonyms: [gizmo, coordinates], usage: "<uk-icon icon=\"axis-3d\"></uk-icon>" }`
- `{icon_name: "baby", synonyms: [child, childproof, children], usage: "<uk-icon icon=\"baby\"></uk-icon>" }`
- `{icon_name: "backpack", synonyms: [bag, hiking, travel, camping, school, childhood], usage: "<uk-icon icon=\"backpack\"></uk-icon>" }`
- `{icon_name: "badge-alert", synonyms: [check, verified, unverified, security, safety, issue], usage: "<uk-icon icon=\"badge-alert\"></uk-icon>" }`
- `{icon_name: "badge-cent", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, cents, dollar, usd, $, Â¢], usage: "<uk-icon icon=\"badge-cent\"></uk-icon>" }`
- `{icon_name: "badge-check", synonyms: [verified, check], usage: "<uk-icon icon=\"badge-check\"></uk-icon>" }`
- `{icon_name: "badge-dollar-sign", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, usd, $], usage: "<uk-icon icon=\"badge-dollar-sign\"></uk-icon>" }`
- `{icon_name: "badge-euro", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, â‚¬], usage: "<uk-icon icon=\"badge-euro\"></uk-icon>" }`
- `{icon_name: "badge-help", synonyms: [verified, unverified, help], usage: "<uk-icon icon=\"badge-help\"></uk-icon>" }`
- `{icon_name: "badge-indian-rupee", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, inr, â‚¹], usage: "<uk-icon icon=\"badge-indian-rupee\"></uk-icon>" }`
- `{icon_name: "badge-info", synonyms: [verified, unverified, help], usage: "<uk-icon icon=\"badge-info\"></uk-icon>" }`
- `{icon_name: "badge-japanese-yen", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, jpy, Â¥], usage: "<uk-icon icon=\"badge-japanese-yen\"></uk-icon>" }`
- `{icon_name: "badge-minus", synonyms: [verified, unverified, delete, remove, erase], usage: "<uk-icon icon=\"badge-minus\"></uk-icon>" }`
- `{icon_name: "badge-percent", synonyms: [verified, unverified, sale, discount, offer, marketing, sticker, price tag], usage: "<uk-icon icon=\"badge-percent\"></uk-icon>" }`
- `{icon_name: "badge-plus", synonyms: [verified, unverified, add, create, new], usage: "<uk-icon icon=\"badge-plus\"></uk-icon>" }`
- `{icon_name: "badge-pound-sterling", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, british, gbp, Â£], usage: "<uk-icon icon=\"badge-pound-sterling\"></uk-icon>" }`
- `{icon_name: "badge-russian-ruble", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, rub, â‚½], usage: "<uk-icon icon=\"badge-russian-ruble\"></uk-icon>" }`
- `{icon_name: "badge-swiss-franc", synonyms: [discount, offer, sale, voucher, tag, monetization, marketing, finance, financial, exchange, transaction, payment, chf, â‚£], usage: "<uk-icon icon=\"badge-swiss-franc\"></uk-icon>" }`
- `{icon_name: "badge-x", synonyms: [verified, unverified, lost, delete, remove], usage: "<uk-icon icon=\"badge-x\"></uk-icon>" }`
- `{icon_name: "badge", synonyms: [check, verified, unverified], usage: "<uk-icon icon=\"badge\"></uk-icon>" }`
- `{icon_name: "baggage-claim", synonyms: [baggage, luggage, travel, cart, trolley, suitcase], usage: "<uk-icon icon=\"baggage-claim\"></uk-icon>" }`
- `{icon_name: "ban", synonyms: [cancel, no, stop, forbidden, prohibited, error, incorrect, mistake, wrong, failure, circle, slash, null, void], usage: "<uk-icon icon=\"ban\"></uk-icon>" }`
- `{icon_name: "banana", synonyms: [fruit, food], usage: "<uk-icon icon=\"banana\"></uk-icon>" }`
- `{icon_name: "bandage", synonyms: [plaster, band-aid, first aid, medical, health, wound, injury, care, treatment, healing, protection, emergency, aid, safety], usage: "<uk-icon icon=\"bandage\"></uk-icon>" }`
- `{icon_name: "banknote-arrow-down", synonyms: [bill, currency, money, payment, funds, transaction, cash, finance, withdraw, expense, out, payout, refund, debit, spending, decrease], usage: "<uk-icon icon=\"banknote-arrow-down\"></uk-icon>" }`
- `{icon_name: "banknote-arrow-up", synonyms: [bill, currency, money, payment, funds, transaction, cash, finance, deposit, earnings, income, in, credit, prepaid, growth, increase], usage: "<uk-icon icon=\"banknote-arrow-up\"></uk-icon>" }`
- `{icon_name: "banknote-x", synonyms: [bill, currency, money, payment, funds, transaction, cash, finance, error, failed, rejected, canceled, declined, lost, delete, remove], usage: "<uk-icon icon=\"banknote-x\"></uk-icon>" }`
- `{icon_name: "banknote", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"banknote\"></uk-icon>" }`
- `{icon_name: "barcode", synonyms: [scan, checkout, till, cart, transaction, purchase, buy, product, packaging, retail, consumer], usage: "<uk-icon icon=\"barcode\"></uk-icon>" }`
- `{icon_name: "baseline", synonyms: [text, format, color], usage: "<uk-icon icon=\"baseline\"></uk-icon>" }`
- `{icon_name: "bath", synonyms: [amenities, services, bathroom, shower], usage: "<uk-icon icon=\"bath\"></uk-icon>" }`
- `{icon_name: "battery-charging", synonyms: [power, electricity, energy, accumulator, charge], usage: "<uk-icon icon=\"battery-charging\"></uk-icon>" }`
- `{icon_name: "battery-full", synonyms: [power, electricity, energy, accumulator, charge], usage: "<uk-icon icon=\"battery-full\"></uk-icon>" }`
- `{icon_name: "battery-low", synonyms: [power, electricity, energy, accumulator, charge], usage: "<uk-icon icon=\"battery-low\"></uk-icon>" }`
- `{icon_name: "battery-medium", synonyms: [power, electricity, energy, accumulator, charge], usage: "<uk-icon icon=\"battery-medium\"></uk-icon>" }`
- `{icon_name: "battery-plus", synonyms: [power, electricity, energy, accumulator, charge, plus, economy, health, add, new, maximum, upgrade, extra, +], usage: "<uk-icon icon=\"battery-plus\"></uk-icon>" }`
- `{icon_name: "battery-warning", synonyms: [power, electricity, energy, accumulator, charge, exclamation mark], usage: "<uk-icon icon=\"battery-warning\"></uk-icon>" }`
- `{icon_name: "battery", synonyms: [power, electricity, energy, accumulator, charge], usage: "<uk-icon icon=\"battery\"></uk-icon>" }`
- `{icon_name: "beaker", synonyms: [cup, lab, chemistry, experiment, test], usage: "<uk-icon icon=\"beaker\"></uk-icon>" }`
- `{icon_name: "bean-off", synonyms: [soy free, legume, soy, food, seed, allergy, intolerance, diet], usage: "<uk-icon icon=\"bean-off\"></uk-icon>" }`
- `{icon_name: "bean", synonyms: [legume, soy, food, seed], usage: "<uk-icon icon=\"bean\"></uk-icon>" }`
- `{icon_name: "bed-double", synonyms: [sleep, hotel, furniture], usage: "<uk-icon icon=\"bed-double\"></uk-icon>" }`
- `{icon_name: "bed-single", synonyms: [sleep, hotel, furniture], usage: "<uk-icon icon=\"bed-single\"></uk-icon>" }`
- `{icon_name: "bed", synonyms: [sleep, hotel, furniture], usage: "<uk-icon icon=\"bed\"></uk-icon>" }`
- `{icon_name: "beef", synonyms: [food, dish, restaurant, course, meal, meat, bbq, steak], usage: "<uk-icon icon=\"beef\"></uk-icon>" }`
- `{icon_name: "beer-off", synonyms: [alcohol, bar, beverage, brewery, drink], usage: "<uk-icon icon=\"beer-off\"></uk-icon>" }`
- `{icon_name: "beer", synonyms: [alcohol, bar, beverage, brewery, drink], usage: "<uk-icon icon=\"beer\"></uk-icon>" }`
- `{icon_name: "bell-dot", synonyms: [alarm, notification, sound, reminder, unread], usage: "<uk-icon icon=\"bell-dot\"></uk-icon>" }`
- `{icon_name: "bell-electric", synonyms: [fire alarm, flames, smoke, firefighter, fireman, department, brigade, station, emergency, alert, safety, school bell, period break, recess, doorbell, entrance, entry, ring, reception], usage: "<uk-icon icon=\"bell-electric\"></uk-icon>" }`
- `{icon_name: "bell-minus", synonyms: [alarm, notification, silent, reminder, delete, remove, erase], usage: "<uk-icon icon=\"bell-minus\"></uk-icon>" }`
- `{icon_name: "bell-off", synonyms: [alarm, notification, silent, reminder], usage: "<uk-icon icon=\"bell-off\"></uk-icon>" }`
- `{icon_name: "bell-plus", synonyms: [notification, silent, reminder, add, create, new], usage: "<uk-icon icon=\"bell-plus\"></uk-icon>" }`
- `{icon_name: "bell-ring", synonyms: [alarm, notification, sound, reminder], usage: "<uk-icon icon=\"bell-ring\"></uk-icon>" }`
- `{icon_name: "bell", synonyms: [alarm, notification, sound, reminder], usage: "<uk-icon icon=\"bell\"></uk-icon>" }`
- `{icon_name: "between-horizontal-end", synonyms: [insert, add, left, slot, squeeze, space, vertical, grid, table, rows, cells, excel, spreadsheet, accountancy, data, enter, entry, entries, blocks, rectangles, chevron], usage: "<uk-icon icon=\"between-horizontal-end\"></uk-icon>" }`
- `{icon_name: "between-horizontal-start", synonyms: [insert, add, right, slot, squeeze, space, vertical, grid, table, rows, cells, excel, spreadsheet, accountancy, data, enter, entry, entries, blocks, rectangles, chevron], usage: "<uk-icon icon=\"between-horizontal-start\"></uk-icon>" }`
- `{icon_name: "between-vertical-end", synonyms: [insert, add, top, slot, squeeze, space, vertical, grid, table, columns, cells, data, enter, entry, entries, blocks, rectangles, chevron], usage: "<uk-icon icon=\"between-vertical-end\"></uk-icon>" }`
- `{icon_name: "between-vertical-start", synonyms: [insert, add, bottom, slot, squeeze, space, vertical, grid, table, columns, cells, data, enter, entry, entries, blocks, rectangles, chevron], usage: "<uk-icon icon=\"between-vertical-start\"></uk-icon>" }`
- `{icon_name: "biceps-flexed", synonyms: [arm, muscle, strong, working out, athletic, toned, muscular, forelimb, curled], usage: "<uk-icon icon=\"biceps-flexed\"></uk-icon>" }`
- `{icon_name: "bike", synonyms: [bicycle, transport, trip], usage: "<uk-icon icon=\"bike\"></uk-icon>" }`
- `{icon_name: "binary", synonyms: [code, digits, computer, zero, one, boolean], usage: "<uk-icon icon=\"binary\"></uk-icon>" }`
- `{icon_name: "binoculars", synonyms: [field glasses, lorgnette, pince-nez, observation, sightseeing, nature, wildlife, birdwatching, scouting, surveillance, search, discovery, monitoring, lookout, viewpoint, travel, tourism, research], usage: "<uk-icon icon=\"binoculars\"></uk-icon>" }`
- `{icon_name: "biohazard", synonyms: [fallout, waste, biology, chemistry, chemical, element], usage: "<uk-icon icon=\"biohazard\"></uk-icon>" }`
- `{icon_name: "bird", synonyms: [peace, freedom, wing, avian, tweet], usage: "<uk-icon icon=\"bird\"></uk-icon>" }`
- `{icon_name: "bitcoin", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"bitcoin\"></uk-icon>" }`
- `{icon_name: "blend", synonyms: [mode, overlay, multiply, screen, opacity, transparency, alpha, filters, lenses, mixed, shades, tints, hues, saturation, brightness, overlap, colors, colours], usage: "<uk-icon icon=\"blend\"></uk-icon>" }`
- `{icon_name: "blinds", synonyms: [shades, screen, curtain, shutter, roller blind, window, lighting, household, home], usage: "<uk-icon icon=\"blinds\"></uk-icon>" }`
- `{icon_name: "blocks", synonyms: [addon, plugin, integration, extension, package, build, stack, toys, kids, children, learning], usage: "<uk-icon icon=\"blocks\"></uk-icon>" }`
- `{icon_name: "bluetooth-connected", synonyms: [paired], usage: "<uk-icon icon=\"bluetooth-connected\"></uk-icon>" }`
- `{icon_name: "bluetooth-off", synonyms: [lost], usage: "<uk-icon icon=\"bluetooth-off\"></uk-icon>" }`
- `{icon_name: "bluetooth-searching", synonyms: [pairing], usage: "<uk-icon icon=\"bluetooth-searching\"></uk-icon>" }`
- `{icon_name: "bluetooth", synonyms: [wireless], usage: "<uk-icon icon=\"bluetooth\"></uk-icon>" }`
- `{icon_name: "bold", synonyms: [text, strong, format], usage: "<uk-icon icon=\"bold\"></uk-icon>" }`
- `{icon_name: "bolt", synonyms: [nut, screw, settings, preferences, configuration, controls, edit, diy, fixed, build, construction, parts], usage: "<uk-icon icon=\"bolt\"></uk-icon>" }`
- `{icon_name: "bomb", synonyms: [fatal, error, crash, blockbuster, mine, explosion, explode, explosive], usage: "<uk-icon icon=\"bomb\"></uk-icon>" }`
- `{icon_name: "bone", synonyms: [health, skeleton, skull, death, pets, dog], usage: "<uk-icon icon=\"bone\"></uk-icon>" }`
- `{icon_name: "book-a", synonyms: [dictionary, define, definition, thesaurus, encyclopedia, encyclopaedia, reading, booklet, magazine, leaflet, pamphlet, tome, library, writing, written, writer, author, story, script, fiction, novel, information, knowledge, education, high school, university, college, academy, student, study, learning, homework, research, language, translate, alphabetical, a-z, ordered], usage: "<uk-icon icon=\"book-a\"></uk-icon>" }`
- `{icon_name: "book-audio", synonyms: [audiobook, reading, listening, sound, story, fiction, novel, information, knowledge, education, student, study, learning, research], usage: "<uk-icon icon=\"book-audio\"></uk-icon>" }`
- `{icon_name: "book-check", synonyms: [read, booklet, magazine, leaflet, pamphlet, library, written, authored, published, informed, knowledgeable, educated, schooled, homework, examined, tested, marked, passed, graduated, studied, learned, lesson, researched, documented, revealed, blank, plain language, true, truth, verified, corrected, task, todo, done, completed, finished, ticked], usage: "<uk-icon icon=\"book-check\"></uk-icon>" }`
- `{icon_name: "book-copy", synonyms: [code, coding, version control, git, repository, clone, fork, duplicate, multiple, books, library, copies, copied, plagiarism, plagiarised, plagiarized, reading list, information, informed, knowledge, knowledgeable, knowledgable, education, high school, university, college, academy, student, study, learning, research, smart, intelligent, intellectual], usage: "<uk-icon icon=\"book-copy\"></uk-icon>" }`
- `{icon_name: "book-dashed", synonyms: [code, coding, version control, git, repository, template, draft, script, screenplay, writing, writer, author, unwritten, unpublished, untold], usage: "<uk-icon icon=\"book-dashed\"></uk-icon>" }`
- `{icon_name: "book-down", synonyms: [code, coding, version control, git, repository, pull], usage: "<uk-icon icon=\"book-down\"></uk-icon>" }`
- `{icon_name: "book-headphones", synonyms: [audiobook, reading, listening, sound, story, fiction, novel, information, knowledge, education, student, study, learning, research], usage: "<uk-icon icon=\"book-headphones\"></uk-icon>" }`
- `{icon_name: "book-heart", synonyms: [diary, romance, novel, journal, entry, entries, personal, private, secret, crush, like, love, emotion, feminine, girls, teens, teenager, therapy, theraputic, therapist, planner, organizer, organiser, notes, notepad, stationery, sketchbook, writing, written, reading, favorite, favourite, high school], usage: "<uk-icon icon=\"book-heart\"></uk-icon>" }`
- `{icon_name: "book-image", synonyms: [images, pictures, photos, album, collection, event, magazine, catalog, catalogue, brochure, browse, gallery], usage: "<uk-icon icon=\"book-image\"></uk-icon>" }`
- `{icon_name: "book-key", synonyms: [code, coding, version control, git, repository, private, public, secret, unlocked, hidden, revealed, knowledge, learning], usage: "<uk-icon icon=\"book-key\"></uk-icon>" }`
- `{icon_name: "book-lock", synonyms: [code, coding, version control, git, repository, private, secret, hidden, knowledge], usage: "<uk-icon icon=\"book-lock\"></uk-icon>" }`
- `{icon_name: "book-marked", synonyms: [dictionary, reading, booklet, magazine, leaflet, pamphlet, tome, library, writing, written, writer, author, story, script, fiction, novel, information, knowledge, education, high school, university, college, academy, student, study, learning, homework, research, documentation, saved, later, future, reference, index, code, coding, version control, git, repository], usage: "<uk-icon icon=\"book-marked\"></uk-icon>" }`
- `{icon_name: "book-minus", synonyms: [code, coding, version control, git, repository, remove, delete, censor, cancel, forbid, prohibit, ban, uneducated, re-educate, unlearn, downgrade], usage: "<uk-icon icon=\"book-minus\"></uk-icon>" }`
- `{icon_name: "book-open-check", synonyms: [read, pages, booklet, magazine, leaflet, pamphlet, library, written, authored, published, informed, knowledgeable, educated, schooled, homework, examined, tested, marked, passed, graduated, studied, learned, lesson, researched, documented, revealed, blank, plain language, true, truth, verified, corrected, task, todo, done, completed, finished, ticked], usage: "<uk-icon icon=\"book-open-check\"></uk-icon>" }`
- `{icon_name: "book-open-text", synonyms: [reading, pages, booklet, magazine, leaflet, pamphlet, library, writing, written, writer, author, story, script, fiction, novel, information, knowledge, education, high school, university, college, academy, student, study, learning, homework, research, documentation, revealed], usage: "<uk-icon icon=\"book-open-text\"></uk-icon>" }`
- `{icon_name: "book-open", synonyms: [reading, pages, booklet, magazine, leaflet, pamphlet, library, writing, written, writer, author, story, script, screenplay, fiction, novel, information, knowledge, education, high school, university, college, academy, student, study, learning, homework, research, documentation, revealed, blank, plain], usage: "<uk-icon icon=\"book-open\"></uk-icon>" }`
- `{icon_name: "book-plus", synonyms: [code, coding, version control, git, repository, remove, delete, read, write, author, publish, inform, graduate, re-educate, study, learn, research, knowledge, improve, upgrade, level up], usage: "<uk-icon icon=\"book-plus\"></uk-icon>" }`
- `{icon_name: "book-text", synonyms: [reading, booklet, magazine, leaflet, pamphlet, tome, library, writing, written, writer, author, story, script, fiction, novel, information, knowledge, education, high school, university, college, academy, student, study, learning, homework, research, documentation], usage: "<uk-icon icon=\"book-text\"></uk-icon>" }`
- `{icon_name: "book-type", synonyms: [thesaurus, synonym, reading, booklet, magazine, leaflet, pamphlet, tome, library, writing, written, writer, author, story, script, fiction, novel, information, knowledge, education, high school, university, college, academy, student, study, learning, homework, research, language, translate, typography, fonts, collection], usage: "<uk-icon icon=\"book-type\"></uk-icon>" }`
- `{icon_name: "book-up-2", synonyms: [code, coding, version control, git, repository, push, force], usage: "<uk-icon icon=\"book-up-2\"></uk-icon>" }`
- `{icon_name: "book-up", synonyms: [code, coding, version control, git, repository, push], usage: "<uk-icon icon=\"book-up\"></uk-icon>" }`
- `{icon_name: "book-user", synonyms: [person, people, family, friends, acquaintances, contacts, details, addresses, phone numbers, directory, listing, networking], usage: "<uk-icon icon=\"book-user\"></uk-icon>" }`
- `{icon_name: "book-x", synonyms: [code, coding, version control, git, repository, remove, delete, reading, misinformation, disinformation, misinformed, charlatan, sophistry, false, lies, untruth, propaganda, censored, cancelled, forbidden, prohibited, banned, uneducated, re-education, unlearn], usage: "<uk-icon icon=\"book-x\"></uk-icon>" }`
- `{icon_name: "book", synonyms: [reading, paperback, booklet, magazine, leaflet, pamphlet, tome, library, writing, written, writer, author, story, script, fiction, novel, information, knowledge, education, high school, university, college, academy, student, study, learning, homework, research, documentation], usage: "<uk-icon icon=\"book\"></uk-icon>" }`
- `{icon_name: "bookmark-check", synonyms: [read, finished, complete, clip, marker, tag, task, todo], usage: "<uk-icon icon=\"bookmark-check\"></uk-icon>" }`
- `{icon_name: "bookmark-minus", synonyms: [delete, remove], usage: "<uk-icon icon=\"bookmark-minus\"></uk-icon>" }`
- `{icon_name: "bookmark-plus", synonyms: [add], usage: "<uk-icon icon=\"bookmark-plus\"></uk-icon>" }`
- `{icon_name: "bookmark-x", synonyms: [read, clip, marker, tag, cancel, close, delete, remove, clear], usage: "<uk-icon icon=\"bookmark-x\"></uk-icon>" }`
- `{icon_name: "bookmark", synonyms: [read, clip, marker, tag], usage: "<uk-icon icon=\"bookmark\"></uk-icon>" }`
- `{icon_name: "boom-box", synonyms: [radio, speakers, audio, music, sound, broadcast, live, frequency], usage: "<uk-icon icon=\"boom-box\"></uk-icon>" }`
- `{icon_name: "bot-message-square", synonyms: [robot, ai, chat, assistant], usage: "<uk-icon icon=\"bot-message-square\"></uk-icon>" }`
- `{icon_name: "bot-off", synonyms: [robot, ai, chat, assistant], usage: "<uk-icon icon=\"bot-off\"></uk-icon>" }`
- `{icon_name: "bot", synonyms: [robot, ai, chat, assistant], usage: "<uk-icon icon=\"bot\"></uk-icon>" }`
- `{icon_name: "bow-arrow", synonyms: [archer, archery, game, war, weapon], usage: "<uk-icon icon=\"bow-arrow\"></uk-icon>" }`
- `{icon_name: "box", synonyms: [cube, package, container, storage, geometry, 3d, isometric], usage: "<uk-icon icon=\"box\"></uk-icon>" }`
- `{icon_name: "boxes", synonyms: [cubes, packages, parts, group, units, collection, cluster, geometry], usage: "<uk-icon icon=\"boxes\"></uk-icon>" }`
- `{icon_name: "braces", synonyms: [json, code, token, curly brackets, data, {, }], usage: "<uk-icon icon=\"braces\"></uk-icon>" }`
- `{icon_name: "brackets", synonyms: [code, token, array, list, square, [, ]], usage: "<uk-icon icon=\"brackets\"></uk-icon>" }`
- `{icon_name: "brain-circuit", synonyms: [mind, intellect, artificial intelligence, ai, deep learning, machine learning, computing], usage: "<uk-icon icon=\"brain-circuit\"></uk-icon>" }`
- `{icon_name: "brain-cog", synonyms: [mind, intellect, artificial intelligence, ai, deep learning, machine learning, computing], usage: "<uk-icon icon=\"brain-cog\"></uk-icon>" }`
- `{icon_name: "brain", synonyms: [medical, mind, intellect, cerebral, consciousness, genius, artificial intelligence, ai], usage: "<uk-icon icon=\"brain\"></uk-icon>" }`
- `{icon_name: "brick-wall-fire", synonyms: [firewall, security, bricks, mortar, cement, materials, construction, builder, labourer, quantity surveyor, blocks, stone, campfire, camping, wilderness, outdoors, lit, warmth, wood, twigs, sticks], usage: "<uk-icon icon=\"brick-wall-fire\"></uk-icon>" }`
- `{icon_name: "brick-wall", synonyms: [bricks, mortar, cement, materials, construction, builder, labourer, quantity surveyor, blocks, stone], usage: "<uk-icon icon=\"brick-wall\"></uk-icon>" }`
- `{icon_name: "briefcase-business", synonyms: [work, bag, baggage, folder, portfolio], usage: "<uk-icon icon=\"briefcase-business\"></uk-icon>" }`
- `{icon_name: "briefcase-conveyor-belt", synonyms: [baggage, luggage, travel, suitcase, conveyor, carousel], usage: "<uk-icon icon=\"briefcase-conveyor-belt\"></uk-icon>" }`
- `{icon_name: "briefcase-medical", synonyms: [doctor, medicine, first aid], usage: "<uk-icon icon=\"briefcase-medical\"></uk-icon>" }`
- `{icon_name: "briefcase", synonyms: [work, bag, baggage, folder], usage: "<uk-icon icon=\"briefcase\"></uk-icon>" }`
- `{icon_name: "bring-to-front", synonyms: [bring, send, move, over, forward, front, overlap, layer, order], usage: "<uk-icon icon=\"bring-to-front\"></uk-icon>" }`
- `{icon_name: "brush", synonyms: [clean, sweep, refactor, remove, draw, paint, color, artist], usage: "<uk-icon icon=\"brush\"></uk-icon>" }`
- `{icon_name: "bubbles", synonyms: [water, cleaning, soap, bath, hygiene, freshness, wash, foam, cleanliness, shampoo, purity, splash, lightness, airy, relaxation, spa, bubbly, fluid, floating, drop], usage: "<uk-icon icon=\"bubbles\"></uk-icon>" }`
- `{icon_name: "bug-off", synonyms: [debug, code, insect, kill, exterminate, pest control], usage: "<uk-icon icon=\"bug-off\"></uk-icon>" }`
- `{icon_name: "bug-play", synonyms: [debug, code, insect], usage: "<uk-icon icon=\"bug-play\"></uk-icon>" }`
- `{icon_name: "bug", synonyms: [issue, report, debug, code, insect], usage: "<uk-icon icon=\"bug\"></uk-icon>" }`
- `{icon_name: "building-2", synonyms: [business, company, enterprise, skyscraper, organisation, organization, city], usage: "<uk-icon icon=\"building-2\"></uk-icon>" }`
- `{icon_name: "building", synonyms: [organisation, organization], usage: "<uk-icon icon=\"building\"></uk-icon>" }`
- `{icon_name: "bus-front", synonyms: [coach, vehicle, trip, road], usage: "<uk-icon icon=\"bus-front\"></uk-icon>" }`
- `{icon_name: "bus", synonyms: [bus, vehicle, transport, trip], usage: "<uk-icon icon=\"bus\"></uk-icon>" }`
- `{icon_name: "cable-car", synonyms: [ski lift, winter holiday, alpine, resort, mountains], usage: "<uk-icon icon=\"cable-car\"></uk-icon>" }`
- `{icon_name: "cable", synonyms: [cord, wire, connector, connection, link, signal, console, computer, equipment, electricity, energy, electronics, recharging, charger, power, supply, disconnected, unplugged, plugs, interface, input, output, audio video, av, rca, scart, tv, television, optical], usage: "<uk-icon icon=\"cable\"></uk-icon>" }`
- `{icon_name: "cake-slice", synonyms: [birthday, birthdate, celebration, party, surprise, gateaux, dessert, candles, wish, fondant, icing sugar, sweet, baking], usage: "<uk-icon icon=\"cake-slice\"></uk-icon>" }`
- `{icon_name: "cake", synonyms: [birthday, birthdate, celebration, party, surprise, gateaux, dessert, fondant, icing sugar, sweet, baking], usage: "<uk-icon icon=\"cake\"></uk-icon>" }`
- `{icon_name: "calculator", synonyms: [count, calculating machine], usage: "<uk-icon icon=\"calculator\"></uk-icon>" }`
- `{icon_name: "calendar-1", synonyms: [date, month, year, event, single, singular, once, 1, first], usage: "<uk-icon icon=\"calendar-1\"></uk-icon>" }`
- `{icon_name: "calendar-arrow-down", synonyms: [date, month, year, event, sort, order, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"calendar-arrow-down\"></uk-icon>" }`
- `{icon_name: "calendar-arrow-up", synonyms: [date, month, year, event, sort, order, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"calendar-arrow-up\"></uk-icon>" }`
- `{icon_name: "calendar-check-2", synonyms: [date, day, month, year, event, confirm, subscribe, schedule, done, todo, tick, complete, task], usage: "<uk-icon icon=\"calendar-check-2\"></uk-icon>" }`
- `{icon_name: "calendar-check", synonyms: [date, day, month, year, event, confirm, subscribe, schedule, done, todo, tick, complete, task], usage: "<uk-icon icon=\"calendar-check\"></uk-icon>" }`
- `{icon_name: "calendar-clock", synonyms: [date, day, month, year, event, clock, hour], usage: "<uk-icon icon=\"calendar-clock\"></uk-icon>" }`
- `{icon_name: "calendar-cog", synonyms: [date, day, month, year, events, settings, gear, cog], usage: "<uk-icon icon=\"calendar-cog\"></uk-icon>" }`
- `{icon_name: "calendar-days", synonyms: [date, month, year, event], usage: "<uk-icon icon=\"calendar-days\"></uk-icon>" }`
- `{icon_name: "calendar-fold", synonyms: [date, month, year, event, birthday, birthdate, ics], usage: "<uk-icon icon=\"calendar-fold\"></uk-icon>" }`
- `{icon_name: "calendar-heart", synonyms: [date, month, year, event, heart, favourite, subscribe, valentines day], usage: "<uk-icon icon=\"calendar-heart\"></uk-icon>" }`
- `{icon_name: "calendar-minus-2", synonyms: [date, day, month, year, event, delete, remove], usage: "<uk-icon icon=\"calendar-minus-2\"></uk-icon>" }`
- `{icon_name: "calendar-minus", synonyms: [date, day, month, year, event, delete, remove], usage: "<uk-icon icon=\"calendar-minus\"></uk-icon>" }`
- `{icon_name: "calendar-off", synonyms: [date, day, month, year, event, delete, remove], usage: "<uk-icon icon=\"calendar-off\"></uk-icon>" }`
- `{icon_name: "calendar-plus-2", synonyms: [date, day, month, year, event, add, subscribe, create, new], usage: "<uk-icon icon=\"calendar-plus-2\"></uk-icon>" }`
- `{icon_name: "calendar-plus", synonyms: [date, day, month, year, event, add, subscribe, create, new], usage: "<uk-icon icon=\"calendar-plus\"></uk-icon>" }`
- `{icon_name: "calendar-range", synonyms: [date, day, month, year, event, range, period], usage: "<uk-icon icon=\"calendar-range\"></uk-icon>" }`
- `{icon_name: "calendar-search", synonyms: [date, day, month, year, events, search], usage: "<uk-icon icon=\"calendar-search\"></uk-icon>" }`
- `{icon_name: "calendar-sync", synonyms: [repeat, refresh, reconnect, transfer, backup, date, month, year, event, subscribe, recurring, schedule, reminder, automatic, auto], usage: "<uk-icon icon=\"calendar-sync\"></uk-icon>" }`
- `{icon_name: "calendar-x-2", synonyms: [date, day, month, year, event, remove], usage: "<uk-icon icon=\"calendar-x-2\"></uk-icon>" }`
- `{icon_name: "calendar-x", synonyms: [date, day, month, year, event, remove, busy], usage: "<uk-icon icon=\"calendar-x\"></uk-icon>" }`
- `{icon_name: "calendar", synonyms: [date, month, year, event, birthday, birthdate], usage: "<uk-icon icon=\"calendar\"></uk-icon>" }`
- `{icon_name: "camera-off", synonyms: [photo, webcam, video], usage: "<uk-icon icon=\"camera-off\"></uk-icon>" }`
- `{icon_name: "camera", synonyms: [photo, webcam, video], usage: "<uk-icon icon=\"camera\"></uk-icon>" }`
- `{icon_name: "candy-cane", synonyms: [sugar, food, sweet, christmas, xmas], usage: "<uk-icon icon=\"candy-cane\"></uk-icon>" }`
- `{icon_name: "candy-off", synonyms: [sugar free, food, sweet, allergy, intolerance, diet], usage: "<uk-icon icon=\"candy-off\"></uk-icon>" }`
- `{icon_name: "candy", synonyms: [sugar, food, sweet], usage: "<uk-icon icon=\"candy\"></uk-icon>" }`
- `{icon_name: "cannabis", synonyms: [cannabis, weed, leaf], usage: "<uk-icon icon=\"cannabis\"></uk-icon>" }`
- `{icon_name: "captions-off", synonyms: [closed captions, subtitles, subhead, transcription, transcribe, dialogue, accessibility], usage: "<uk-icon icon=\"captions-off\"></uk-icon>" }`
- `{icon_name: "captions", synonyms: [closed captions, subtitles, subhead, transcription, transcribe, dialogue, accessibility], usage: "<uk-icon icon=\"captions\"></uk-icon>" }`
- `{icon_name: "car-front", synonyms: [vehicle, drive, trip, journey], usage: "<uk-icon icon=\"car-front\"></uk-icon>" }`
- `{icon_name: "car-taxi-front", synonyms: [cab, vehicle, drive, trip, journey], usage: "<uk-icon icon=\"car-taxi-front\"></uk-icon>" }`
- `{icon_name: "car", synonyms: [vehicle, drive, trip, journey], usage: "<uk-icon icon=\"car\"></uk-icon>" }`
- `{icon_name: "caravan", synonyms: [trailer, tow, camping, campsite, mobile home, holiday, nomadic, wilderness, outdoors], usage: "<uk-icon icon=\"caravan\"></uk-icon>" }`
- `{icon_name: "carrot", synonyms: [vegetable, food, eat], usage: "<uk-icon icon=\"carrot\"></uk-icon>" }`
- `{icon_name: "case-lower", synonyms: [text, letters, characters, font, typography], usage: "<uk-icon icon=\"case-lower\"></uk-icon>" }`
- `{icon_name: "case-sensitive", synonyms: [text, letters, characters, font, typography], usage: "<uk-icon icon=\"case-sensitive\"></uk-icon>" }`
- `{icon_name: "case-upper", synonyms: [text, letters, characters, font, typography], usage: "<uk-icon icon=\"case-upper\"></uk-icon>" }`
- `{icon_name: "cassette-tape", synonyms: [audio, music, recording, play], usage: "<uk-icon icon=\"cassette-tape\"></uk-icon>" }`
- `{icon_name: "cast", synonyms: [chromecast, airplay, screen], usage: "<uk-icon icon=\"cast\"></uk-icon>" }`
- `{icon_name: "castle", synonyms: [fortress, stronghold, palace, chateau, building], usage: "<uk-icon icon=\"castle\"></uk-icon>" }`
- `{icon_name: "cat", synonyms: [animal, pet, kitten, feline], usage: "<uk-icon icon=\"cat\"></uk-icon>" }`
- `{icon_name: "cctv", synonyms: [camera, surveillance, recording, film, videotape, crime, watching], usage: "<uk-icon icon=\"cctv\"></uk-icon>" }`
- `{icon_name: "chart-area", synonyms: [statistics, analytics, diagram, graph, area], usage: "<uk-icon icon=\"chart-area\"></uk-icon>" }`
- `{icon_name: "chart-bar-big", synonyms: [statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-bar-big\"></uk-icon>" }`
- `{icon_name: "chart-bar-decreasing", synonyms: [statistics, analytics, diagram, graph, trending down], usage: "<uk-icon icon=\"chart-bar-decreasing\"></uk-icon>" }`
- `{icon_name: "chart-bar-increasing", synonyms: [statistics, analytics, diagram, graph, trending up], usage: "<uk-icon icon=\"chart-bar-increasing\"></uk-icon>" }`
- `{icon_name: "chart-bar-stacked", synonyms: [statistics, analytics, diagram, graph, multivariate, categorical, comparison], usage: "<uk-icon icon=\"chart-bar-stacked\"></uk-icon>" }`
- `{icon_name: "chart-bar", synonyms: [statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-bar\"></uk-icon>" }`
- `{icon_name: "chart-candlestick", synonyms: [trading, trader, financial, markets, portfolio, assets, prices, value, valuation, commodities, currencies, currency, stocks, exchange, hedge fund, statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-candlestick\"></uk-icon>" }`
- `{icon_name: "chart-column-big", synonyms: [statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-column-big\"></uk-icon>" }`
- `{icon_name: "chart-column-decreasing", synonyms: [statistics, analytics, diagram, graph, trending down], usage: "<uk-icon icon=\"chart-column-decreasing\"></uk-icon>" }`
- `{icon_name: "chart-column-increasing", synonyms: [statistics, analytics, diagram, graph, trending up], usage: "<uk-icon icon=\"chart-column-increasing\"></uk-icon>" }`
- `{icon_name: "chart-column-stacked", synonyms: [statistics, analytics, diagram, graph, multivariate, categorical, comparison], usage: "<uk-icon icon=\"chart-column-stacked\"></uk-icon>" }`
- `{icon_name: "chart-column", synonyms: [statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-column\"></uk-icon>" }`
- `{icon_name: "chart-gantt", synonyms: [diagram, graph, timeline, planning], usage: "<uk-icon icon=\"chart-gantt\"></uk-icon>" }`
- `{icon_name: "chart-line", synonyms: [statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-line\"></uk-icon>" }`
- `{icon_name: "chart-network", synonyms: [statistics, analytics, diagram, graph, topology, cluster, web, nodes, connections, edges], usage: "<uk-icon icon=\"chart-network\"></uk-icon>" }`
- `{icon_name: "chart-no-axes-column-decreasing", synonyms: [statistics, analytics, diagram, graph, trending down], usage: "<uk-icon icon=\"chart-no-axes-column-decreasing\"></uk-icon>" }`
- `{icon_name: "chart-no-axes-column-increasing", synonyms: [statistics, analytics, diagram, graph, trending up], usage: "<uk-icon icon=\"chart-no-axes-column-increasing\"></uk-icon>" }`
- `{icon_name: "chart-no-axes-column", synonyms: [statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-no-axes-column\"></uk-icon>" }`
- `{icon_name: "chart-no-axes-combined", synonyms: [statistics, analytics, diagram, graph, trending up], usage: "<uk-icon icon=\"chart-no-axes-combined\"></uk-icon>" }`
- `{icon_name: "chart-no-axes-gantt", synonyms: [projects, manage, overview, roadmap, plan, intentions, timeline, deadline, date, event, range, period, productivity, work, agile, code, coding], usage: "<uk-icon icon=\"chart-no-axes-gantt\"></uk-icon>" }`
- `{icon_name: "chart-pie", synonyms: [statistics, analytics, diagram, presentation], usage: "<uk-icon icon=\"chart-pie\"></uk-icon>" }`
- `{icon_name: "chart-scatter", synonyms: [statistics, analytics, diagram, graph], usage: "<uk-icon icon=\"chart-scatter\"></uk-icon>" }`
- `{icon_name: "chart-spline", synonyms: [statistics, analytics, diagram, graph, curve, continuous, smooth, polynomial, quadratic, function, interpolation], usage: "<uk-icon icon=\"chart-spline\"></uk-icon>" }`
- `{icon_name: "check-check", synonyms: [done, received, double, todo, tick, complete, task], usage: "<uk-icon icon=\"check-check\"></uk-icon>" }`
- `{icon_name: "check", synonyms: [done, todo, tick, complete, task], usage: "<uk-icon icon=\"check\"></uk-icon>" }`
- `{icon_name: "chef-hat", synonyms: [cooking, food, kitchen, restaurant], usage: "<uk-icon icon=\"chef-hat\"></uk-icon>" }`
- `{icon_name: "cherry", synonyms: [fruit, food], usage: "<uk-icon icon=\"cherry\"></uk-icon>" }`
- `{icon_name: "chevron-down", synonyms: [backwards, reverse, slow, dropdown], usage: "<uk-icon icon=\"chevron-down\"></uk-icon>" }`
- `{icon_name: "chevron-first", synonyms: [previous, music], usage: "<uk-icon icon=\"chevron-first\"></uk-icon>" }`
- `{icon_name: "chevron-last", synonyms: [skip, next, music], usage: "<uk-icon icon=\"chevron-last\"></uk-icon>" }`
- `{icon_name: "chevron-left", synonyms: [back, previous, less than, fewer, menu, <], usage: "<uk-icon icon=\"chevron-left\"></uk-icon>" }`
- `{icon_name: "chevron-right", synonyms: [forward, next, more than, greater, menu, code, coding, command line, terminal, prompt, shell, >], usage: "<uk-icon icon=\"chevron-right\"></uk-icon>" }`
- `{icon_name: "chevron-up", synonyms: [caret, keyboard, mac, control, ctrl, superscript, exponential, power, ahead, fast, ^, dropdown], usage: "<uk-icon icon=\"chevron-up\"></uk-icon>" }`
- `{icon_name: "chevrons-down-up", synonyms: [collapse, fold, vertical], usage: "<uk-icon icon=\"chevrons-down-up\"></uk-icon>" }`
- `{icon_name: "chevrons-down", synonyms: [backwards, reverse, slower], usage: "<uk-icon icon=\"chevrons-down\"></uk-icon>" }`
- `{icon_name: "chevrons-left-right-ellipsis", synonyms: [internet, network, connection, cable, lan, port, router, switch, hub, modem, web, online, networking, communication, socket, plug, slot, controller, connector, interface, console, signal, data, input, output], usage: "<uk-icon icon=\"chevrons-left-right-ellipsis\"></uk-icon>" }`
- `{icon_name: "chevrons-left-right", synonyms: [expand, horizontal, unfold], usage: "<uk-icon icon=\"chevrons-left-right\"></uk-icon>" }`
- `{icon_name: "chevrons-left", synonyms: [turn, corner], usage: "<uk-icon icon=\"chevrons-left\"></uk-icon>" }`
- `{icon_name: "chevrons-right-left", synonyms: [collapse, fold, horizontal], usage: "<uk-icon icon=\"chevrons-right-left\"></uk-icon>" }`
- `{icon_name: "chevrons-right", synonyms: [turn, corner], usage: "<uk-icon icon=\"chevrons-right\"></uk-icon>" }`
- `{icon_name: "chevrons-up-down", synonyms: [expand, unfold, vertical], usage: "<uk-icon icon=\"chevrons-up-down\"></uk-icon>" }`
- `{icon_name: "chevrons-up", synonyms: [forward, ahead, faster, speed, boost], usage: "<uk-icon icon=\"chevrons-up\"></uk-icon>" }`
- `{icon_name: "chrome", synonyms: [browser, logo], usage: "<uk-icon icon=\"chrome\"></uk-icon>" }`
- `{icon_name: "church", synonyms: [temple, building], usage: "<uk-icon icon=\"church\"></uk-icon>" }`
- `{icon_name: "cigarette-off", synonyms: [smoking, no-smoking], usage: "<uk-icon icon=\"cigarette-off\"></uk-icon>" }`
- `{icon_name: "cigarette", synonyms: [smoking], usage: "<uk-icon icon=\"cigarette\"></uk-icon>" }`
- `{icon_name: "circle-alert", synonyms: [warning, alert, danger, exclamation mark], usage: "<uk-icon icon=\"circle-alert\"></uk-icon>" }`
- `{icon_name: "circle-arrow-down", synonyms: [backwards, reverse, direction, south, sign, button], usage: "<uk-icon icon=\"circle-arrow-down\"></uk-icon>" }`
- `{icon_name: "circle-arrow-left", synonyms: [previous, back, direction, west, sign, turn, button, <-], usage: "<uk-icon icon=\"circle-arrow-left\"></uk-icon>" }`
- `{icon_name: "circle-arrow-out-down-left", synonyms: [outwards, direction, south-west, diagonal], usage: "<uk-icon icon=\"circle-arrow-out-down-left\"></uk-icon>" }`
- `{icon_name: "circle-arrow-out-down-right", synonyms: [outwards, direction, south-east, diagonal], usage: "<uk-icon icon=\"circle-arrow-out-down-right\"></uk-icon>" }`
- `{icon_name: "circle-arrow-out-up-left", synonyms: [outwards, direction, north-west, diagonal, keyboard, button, escape], usage: "<uk-icon icon=\"circle-arrow-out-up-left\"></uk-icon>" }`
- `{icon_name: "circle-arrow-out-up-right", synonyms: [outwards, direction, north-east, diagonal], usage: "<uk-icon icon=\"circle-arrow-out-up-right\"></uk-icon>" }`
- `{icon_name: "circle-arrow-right", synonyms: [next, forward, direction, east, sign, turn, button, ->], usage: "<uk-icon icon=\"circle-arrow-right\"></uk-icon>" }`
- `{icon_name: "circle-arrow-up", synonyms: [forward, direction, north, sign, button], usage: "<uk-icon icon=\"circle-arrow-up\"></uk-icon>" }`
- `{icon_name: "circle-check-big", synonyms: [done, todo, tick, complete, task], usage: "<uk-icon icon=\"circle-check-big\"></uk-icon>" }`
- `{icon_name: "circle-check", synonyms: [done, todo, tick, complete, task], usage: "<uk-icon icon=\"circle-check\"></uk-icon>" }`
- `{icon_name: "circle-chevron-down", synonyms: [back, menu], usage: "<uk-icon icon=\"circle-chevron-down\"></uk-icon>" }`
- `{icon_name: "circle-chevron-left", synonyms: [back, previous, less than, fewer, menu, <], usage: "<uk-icon icon=\"circle-chevron-left\"></uk-icon>" }`
- `{icon_name: "circle-chevron-right", synonyms: [back, more than, greater, menu, >], usage: "<uk-icon icon=\"circle-chevron-right\"></uk-icon>" }`
- `{icon_name: "circle-chevron-up", synonyms: [caret, ahead, menu, ^], usage: "<uk-icon icon=\"circle-chevron-up\"></uk-icon>" }`
- `{icon_name: "circle-dashed", synonyms: [pending, dot, progress, issue, draft, code, coding, version control], usage: "<uk-icon icon=\"circle-dashed\"></uk-icon>" }`
- `{icon_name: "circle-divide", synonyms: [calculate, math, Ã·, /], usage: "<uk-icon icon=\"circle-divide\"></uk-icon>" }`
- `{icon_name: "circle-dollar-sign", synonyms: [monetization, marketing, currency, money, payment], usage: "<uk-icon icon=\"circle-dollar-sign\"></uk-icon>" }`
- `{icon_name: "circle-dot-dashed", synonyms: [pending, dot, progress, issue, draft, code, coding, version control], usage: "<uk-icon icon=\"circle-dot-dashed\"></uk-icon>" }`
- `{icon_name: "circle-dot", synonyms: [pending, dot, progress, issue, code, coding, version control, choices, multiple choice, choose], usage: "<uk-icon icon=\"circle-dot\"></uk-icon>" }`
- `{icon_name: "circle-ellipsis", synonyms: [ellipsis, et cetera, etc, loader, loading, progress, pending, throbber, menu, options, operator, code, spread, rest, more, further, extra, overflow, dots, â€¦, ...], usage: "<uk-icon icon=\"circle-ellipsis\"></uk-icon>" }`
- `{icon_name: "circle-equal", synonyms: [calculate, shape, =], usage: "<uk-icon icon=\"circle-equal\"></uk-icon>" }`
- `{icon_name: "circle-fading-arrow-up", synonyms: [north, up, upgrade, improve, circle, button], usage: "<uk-icon icon=\"circle-fading-arrow-up\"></uk-icon>" }`
- `{icon_name: "circle-fading-plus", synonyms: [stories, social media, instagram, facebook, meta, snapchat, sharing, content], usage: "<uk-icon icon=\"circle-fading-plus\"></uk-icon>" }`
- `{icon_name: "circle-gauge", synonyms: [dashboard, dial, meter, speed, pressure, measure, level], usage: "<uk-icon icon=\"circle-gauge\"></uk-icon>" }`
- `{icon_name: "circle-help", synonyms: [question mark], usage: "<uk-icon icon=\"circle-help\"></uk-icon>" }`
- `{icon_name: "circle-minus", synonyms: [subtract, remove, decrease, reduce, calculate, line, operator, code, coding, minimum, downgrade, -], usage: "<uk-icon icon=\"circle-minus\"></uk-icon>" }`
- `{icon_name: "circle-off", synonyms: [diameter, zero, Ã˜, nothing, null, void, cancel, ban, no, stop, forbidden, prohibited, error, incorrect, mistake, wrong, failure], usage: "<uk-icon icon=\"circle-off\"></uk-icon>" }`
- `{icon_name: "circle-parking-off", synonyms: [parking lot, car park, no parking], usage: "<uk-icon icon=\"circle-parking-off\"></uk-icon>" }`
- `{icon_name: "circle-parking", synonyms: [parking lot, car park], usage: "<uk-icon icon=\"circle-parking\"></uk-icon>" }`
- `{icon_name: "circle-pause", synonyms: [music, audio, stop], usage: "<uk-icon icon=\"circle-pause\"></uk-icon>" }`
- `{icon_name: "circle-percent", synonyms: [verified, unverified, sale, discount, offer, marketing, sticker, price tag], usage: "<uk-icon icon=\"circle-percent\"></uk-icon>" }`
- `{icon_name: "circle-play", synonyms: [music, start, run], usage: "<uk-icon icon=\"circle-play\"></uk-icon>" }`
- `{icon_name: "circle-plus", synonyms: [add, new, increase, increment, positive, calculate, crosshair, aim, target, scope, sight, reticule, maximum, upgrade, extra, operator, join, concatenate, code, coding, +], usage: "<uk-icon icon=\"circle-plus\"></uk-icon>" }`
- `{icon_name: "circle-power", synonyms: [on, off, device, switch, toggle, binary, boolean, reboot, restart, button, keyboard, troubleshoot], usage: "<uk-icon icon=\"circle-power\"></uk-icon>" }`
- `{icon_name: "circle-slash-2", synonyms: [diameter, zero, Ã¸, nothing, null, void, ban, math, divide, division, half, split, /, average, avg, mean, median, normal], usage: "<uk-icon icon=\"circle-slash-2\"></uk-icon>" }`
- `{icon_name: "circle-slash", synonyms: [diameter, zero, Ã˜, nothing, null, void, cancel, ban, no, stop, forbidden, prohibited, error, incorrect, mistake, wrong, failure, divide, division, or, /], usage: "<uk-icon icon=\"circle-slash\"></uk-icon>" }`
- `{icon_name: "circle-small", synonyms: [shape, bullet, gender, genderless], usage: "<uk-icon icon=\"circle-small\"></uk-icon>" }`
- `{icon_name: "circle-stop", synonyms: [media, music], usage: "<uk-icon icon=\"circle-stop\"></uk-icon>" }`
- `{icon_name: "circle-user-round", synonyms: [person, account, contact], usage: "<uk-icon icon=\"circle-user-round\"></uk-icon>" }`
- `{icon_name: "circle-user", synonyms: [person, account, contact], usage: "<uk-icon icon=\"circle-user\"></uk-icon>" }`
- `{icon_name: "circle-x", synonyms: [cancel, close, delete, remove, times, clear, error, incorrect, wrong, mistake, failure, linter, multiply, multiplication], usage: "<uk-icon icon=\"circle-x\"></uk-icon>" }`
- `{icon_name: "circle", synonyms: [off, zero, record, shape], usage: "<uk-icon icon=\"circle\"></uk-icon>" }`
- `{icon_name: "circuit-board", synonyms: [computing, electricity, electronics], usage: "<uk-icon icon=\"circuit-board\"></uk-icon>" }`
- `{icon_name: "citrus", synonyms: [lemon, orange, grapefruit, fruit], usage: "<uk-icon icon=\"citrus\"></uk-icon>" }`
- `{icon_name: "clapperboard", synonyms: [movie, film, video, camera, cinema, cut, action, television, tv, show, entertainment], usage: "<uk-icon icon=\"clapperboard\"></uk-icon>" }`
- `{icon_name: "clipboard-check", synonyms: [copied, pasted, done, todo, tick, complete, task], usage: "<uk-icon icon=\"clipboard-check\"></uk-icon>" }`
- `{icon_name: "clipboard-copy", synonyms: [copy, paste], usage: "<uk-icon icon=\"clipboard-copy\"></uk-icon>" }`
- `{icon_name: "clipboard-list", synonyms: [copy, paste, tasks], usage: "<uk-icon icon=\"clipboard-list\"></uk-icon>" }`
- `{icon_name: "clipboard-minus", synonyms: [copy, delete, remove, erase, document, medical, report, doctor], usage: "<uk-icon icon=\"clipboard-minus\"></uk-icon>" }`
- `{icon_name: "clipboard-paste", synonyms: [copy, paste], usage: "<uk-icon icon=\"clipboard-paste\"></uk-icon>" }`
- `{icon_name: "clipboard-pen-line", synonyms: [paste], usage: "<uk-icon icon=\"clipboard-pen-line\"></uk-icon>" }`
- `{icon_name: "clipboard-pen", synonyms: [paste, signature], usage: "<uk-icon icon=\"clipboard-pen\"></uk-icon>" }`
- `{icon_name: "clipboard-plus", synonyms: [copy, paste, add, create, new, document, medical, report, doctor], usage: "<uk-icon icon=\"clipboard-plus\"></uk-icon>" }`
- `{icon_name: "clipboard-type", synonyms: [paste, format, text], usage: "<uk-icon icon=\"clipboard-type\"></uk-icon>" }`
- `{icon_name: "clipboard-x", synonyms: [copy, paste, discard, remove], usage: "<uk-icon icon=\"clipboard-x\"></uk-icon>" }`
- `{icon_name: "clipboard", synonyms: [copy, paste], usage: "<uk-icon icon=\"clipboard\"></uk-icon>" }`
- `{icon_name: "clock-1", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-1\"></uk-icon>" }`
- `{icon_name: "clock-10", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-10\"></uk-icon>" }`
- `{icon_name: "clock-11", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-11\"></uk-icon>" }`
- `{icon_name: "clock-12", synonyms: [time, watch, alarm, noon, midnight], usage: "<uk-icon icon=\"clock-12\"></uk-icon>" }`
- `{icon_name: "clock-2", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-2\"></uk-icon>" }`
- `{icon_name: "clock-3", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-3\"></uk-icon>" }`
- `{icon_name: "clock-4", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-4\"></uk-icon>" }`
- `{icon_name: "clock-5", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-5\"></uk-icon>" }`
- `{icon_name: "clock-6", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-6\"></uk-icon>" }`
- `{icon_name: "clock-7", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-7\"></uk-icon>" }`
- `{icon_name: "clock-8", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-8\"></uk-icon>" }`
- `{icon_name: "clock-9", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-9\"></uk-icon>" }`
- `{icon_name: "clock-alert", synonyms: [time, watch, alarm, warning, wrong], usage: "<uk-icon icon=\"clock-alert\"></uk-icon>" }`
- `{icon_name: "clock-arrow-down", synonyms: [time, watch, alarm, sort, order, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"clock-arrow-down\"></uk-icon>" }`
- `{icon_name: "clock-arrow-up", synonyms: [time, watch, alarm, sort, order, ascending, descending, increasing, decreasing, rising, falling], usage: "<uk-icon icon=\"clock-arrow-up\"></uk-icon>" }`
- `{icon_name: "clock-fading", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock-fading\"></uk-icon>" }`
- `{icon_name: "clock", synonyms: [time, watch, alarm], usage: "<uk-icon icon=\"clock\"></uk-icon>" }`
- `{icon_name: "cloud-alert", synonyms: [weather, danger, warning, alert, error, sync, network, exclamation], usage: "<uk-icon icon=\"cloud-alert\"></uk-icon>" }`
- `{icon_name: "cloud-cog", synonyms: [computing, ai, cluster, network], usage: "<uk-icon icon=\"cloud-cog\"></uk-icon>" }`
- `{icon_name: "cloud-download", synonyms: [import], usage: "<uk-icon icon=\"cloud-download\"></uk-icon>" }`
- `{icon_name: "cloud-drizzle", synonyms: [weather, shower], usage: "<uk-icon icon=\"cloud-drizzle\"></uk-icon>" }`
- `{icon_name: "cloud-fog", synonyms: [weather, mist], usage: "<uk-icon icon=\"cloud-fog\"></uk-icon>" }`
- `{icon_name: "cloud-hail", synonyms: [weather, rainfall], usage: "<uk-icon icon=\"cloud-hail\"></uk-icon>" }`
- `{icon_name: "cloud-lightning", synonyms: [weather, bolt], usage: "<uk-icon icon=\"cloud-lightning\"></uk-icon>" }`
- `{icon_name: "cloud-moon-rain", synonyms: [weather, partly, night, rainfall], usage: "<uk-icon icon=\"cloud-moon-rain\"></uk-icon>" }`
- `{icon_name: "cloud-moon", synonyms: [weather, night], usage: "<uk-icon icon=\"cloud-moon\"></uk-icon>" }`
- `{icon_name: "cloud-off", synonyms: [disconnect], usage: "<uk-icon icon=\"cloud-off\"></uk-icon>" }`
- `{icon_name: "cloud-rain-wind", synonyms: [weather, rainfall], usage: "<uk-icon icon=\"cloud-rain-wind\"></uk-icon>" }`
- `{icon_name: "cloud-rain", synonyms: [weather, rainfall], usage: "<uk-icon icon=\"cloud-rain\"></uk-icon>" }`
- `{icon_name: "cloud-snow", synonyms: [weather, blizzard], usage: "<uk-icon icon=\"cloud-snow\"></uk-icon>" }`
- `{icon_name: "cloud-sun-rain", synonyms: [weather, partly, rainfall], usage: "<uk-icon icon=\"cloud-sun-rain\"></uk-icon>" }`
- `{icon_name: "cloud-sun", synonyms: [weather, partly], usage: "<uk-icon icon=\"cloud-sun\"></uk-icon>" }`
- `{icon_name: "cloud-upload", synonyms: [file], usage: "<uk-icon icon=\"cloud-upload\"></uk-icon>" }`
- `{icon_name: "cloud", synonyms: [weather], usage: "<uk-icon icon=\"cloud\"></uk-icon>" }`
- `{icon_name: "cloudy", synonyms: [weather, clouds], usage: "<uk-icon icon=\"cloudy\"></uk-icon>" }`
- `{icon_name: "clover", synonyms: [leaf, luck, plant], usage: "<uk-icon icon=\"clover\"></uk-icon>" }`
- `{icon_name: "club", synonyms: [shape, suit, playing, cards], usage: "<uk-icon icon=\"club\"></uk-icon>" }`
- `{icon_name: "code-xml", synonyms: [source, programming, html, xml], usage: "<uk-icon icon=\"code-xml\"></uk-icon>" }`
- `{icon_name: "code", synonyms: [source, programming, html, xml], usage: "<uk-icon icon=\"code\"></uk-icon>" }`
- `{icon_name: "codepen", synonyms: [logo], usage: "<uk-icon icon=\"codepen\"></uk-icon>" }`
- `{icon_name: "codesandbox", synonyms: [logo], usage: "<uk-icon icon=\"codesandbox\"></uk-icon>" }`
- `{icon_name: "coffee", synonyms: [drink, cup, mug, tea, cafe, hot, beverage], usage: "<uk-icon icon=\"coffee\"></uk-icon>" }`
- `{icon_name: "cog", synonyms: [computing, settings, cog, edit, gear, preferences, controls, configuration, fixed, build, construction, parts], usage: "<uk-icon icon=\"cog\"></uk-icon>" }`
- `{icon_name: "coins", synonyms: [money, cash, finance, gamble], usage: "<uk-icon icon=\"coins\"></uk-icon>" }`
- `{icon_name: "columns-2", synonyms: [lines, list, queue, preview, panel, parallel, series, split, vertical, horizontal, half, center, middle, even, sidebar, drawer, gutter, fold, reflow, typography, pagination, pages], usage: "<uk-icon icon=\"columns-2\"></uk-icon>" }`
- `{icon_name: "columns-3-cog", synonyms: [columns, settings, customize, table, grid, adjust, configuration, panel, layout], usage: "<uk-icon icon=\"columns-3-cog\"></uk-icon>" }`
- `{icon_name: "columns-3", synonyms: [lines, list, queue, preview, parallel, series, split, vertical, horizontal, thirds, triple, center, middle, alignment, even, sidebars, drawers, gutters, fold, reflow, typography, pagination, pages], usage: "<uk-icon icon=\"columns-3\"></uk-icon>" }`
- `{icon_name: "columns-4", synonyms: [lines, list, queue, preview, parallel, series, split, vertical, horizontal, thirds, triple, center, middle, alignment, even, sidebars, drawers, gutters, fold, reflow, typography, pagination, pages, prison, jail, bars, sentence, police, cops, cell, crime, criminal, justice, law, enforcement, grill], usage: "<uk-icon icon=\"columns-4\"></uk-icon>" }`
- `{icon_name: "combine", synonyms: [cubes, packages, parts, units, collection, cluster, combine, gather, merge], usage: "<uk-icon icon=\"combine\"></uk-icon>" }`
- `{icon_name: "command", synonyms: [keyboard, key, mac, cmd, button], usage: "<uk-icon icon=\"command\"></uk-icon>" }`
- `{icon_name: "compass", synonyms: [direction, north, east, south, west, safari, browser], usage: "<uk-icon icon=\"compass\"></uk-icon>" }`
- `{icon_name: "component", synonyms: [design, element, group, module, part, symbol], usage: "<uk-icon icon=\"component\"></uk-icon>" }`
- `{icon_name: "computer", synonyms: [pc, chassis, codespaces, github], usage: "<uk-icon icon=\"computer\"></uk-icon>" }`
- `{icon_name: "concierge-bell", synonyms: [reception, bell, porter], usage: "<uk-icon icon=\"concierge-bell\"></uk-icon>" }`
- `{icon_name: "cone", synonyms: [conical, triangle, triangular, geometry, filter, funnel, hopper, spotlight, searchlight], usage: "<uk-icon icon=\"cone\"></uk-icon>" }`
- `{icon_name: "construction", synonyms: [roadwork, maintenance, blockade, barricade], usage: "<uk-icon icon=\"construction\"></uk-icon>" }`
- `{icon_name: "contact-round", synonyms: [user, person, family, friend, acquaintance, listing, networking], usage: "<uk-icon icon=\"contact-round\"></uk-icon>" }`
- `{icon_name: "contact", synonyms: [user, person, family, friend, acquaintance, listing, networking], usage: "<uk-icon icon=\"contact\"></uk-icon>" }`
- `{icon_name: "container", synonyms: [storage, shipping, freight, supply chain, docker, environment, devops, code, coding], usage: "<uk-icon icon=\"container\"></uk-icon>" }`
- `{icon_name: "contrast", synonyms: [display, accessibility], usage: "<uk-icon icon=\"contrast\"></uk-icon>" }`
- `{icon_name: "cookie", synonyms: [biscuit, privacy, legal, food], usage: "<uk-icon icon=\"cookie\"></uk-icon>" }`
- `{icon_name: "cooking-pot", synonyms: [pod, cooking, recipe, food, kitchen, chef, restaurant, dinner, lunch, breakfast, meal, eat], usage: "<uk-icon icon=\"cooking-pot\"></uk-icon>" }`
- `{icon_name: "copy-check", synonyms: [clone, duplicate, done, multiple], usage: "<uk-icon icon=\"copy-check\"></uk-icon>" }`
- `{icon_name: "copy-minus", synonyms: [clone, duplicate, remove, delete, collapse, subtract, multiple, -], usage: "<uk-icon icon=\"copy-minus\"></uk-icon>" }`
- `{icon_name: "copy-plus", synonyms: [clone, duplicate, add, multiple, expand, +], usage: "<uk-icon icon=\"copy-plus\"></uk-icon>" }`
- `{icon_name: "copy-slash", synonyms: [clone, duplicate, cancel, ban, no, stop, forbidden, prohibited, error, multiple, divide, division, split, or, /], usage: "<uk-icon icon=\"copy-slash\"></uk-icon>" }`
- `{icon_name: "copy-x", synonyms: [cancel, close, delete, remove, clear, multiple, multiply, multiplication, times], usage: "<uk-icon icon=\"copy-x\"></uk-icon>" }`
- `{icon_name: "copy", synonyms: [clone, duplicate, multiple], usage: "<uk-icon icon=\"copy\"></uk-icon>" }`
- `{icon_name: "copyleft", synonyms: [licence], usage: "<uk-icon icon=\"copyleft\"></uk-icon>" }`
- `{icon_name: "copyright", synonyms: [licence, license], usage: "<uk-icon icon=\"copyright\"></uk-icon>" }`
- `{icon_name: "corner-down-left", synonyms: [arrow, return], usage: "<uk-icon icon=\"corner-down-left\"></uk-icon>" }`
- `{icon_name: "corner-down-right", synonyms: [arrow, indent, tab], usage: "<uk-icon icon=\"corner-down-right\"></uk-icon>" }`
- `{icon_name: "corner-left-down", synonyms: [arrow], usage: "<uk-icon icon=\"corner-left-down\"></uk-icon>" }`
- `{icon_name: "corner-left-up", synonyms: [arrow], usage: "<uk-icon icon=\"corner-left-up\"></uk-icon>" }`
- `{icon_name: "corner-right-down", synonyms: [arrow], usage: "<uk-icon icon=\"corner-right-down\"></uk-icon>" }`
- `{icon_name: "corner-right-up", synonyms: [arrow], usage: "<uk-icon icon=\"corner-right-up\"></uk-icon>" }`
- `{icon_name: "corner-up-left", synonyms: [arrow], usage: "<uk-icon icon=\"corner-up-left\"></uk-icon>" }`
- `{icon_name: "corner-up-right", synonyms: [arrow], usage: "<uk-icon icon=\"corner-up-right\"></uk-icon>" }`
- `{icon_name: "cpu", synonyms: [processor, cores, technology, computer, chip, circuit, memory, ram, specs, gigahertz, ghz], usage: "<uk-icon icon=\"cpu\"></uk-icon>" }`
- `{icon_name: "creative-commons", synonyms: [licence, license], usage: "<uk-icon icon=\"creative-commons\"></uk-icon>" }`
- `{icon_name: "credit-card", synonyms: [bank, purchase, payment, cc], usage: "<uk-icon icon=\"credit-card\"></uk-icon>" }`
- `{icon_name: "croissant", synonyms: [bakery, cooking, food, pastry], usage: "<uk-icon icon=\"croissant\"></uk-icon>" }`
- `{icon_name: "crop", synonyms: [photo, image], usage: "<uk-icon icon=\"crop\"></uk-icon>" }`
- `{icon_name: "cross", synonyms: [healthcare, first aid], usage: "<uk-icon icon=\"cross\"></uk-icon>" }`
- `{icon_name: "crosshair", synonyms: [aim, target], usage: "<uk-icon icon=\"crosshair\"></uk-icon>" }`
- `{icon_name: "crown", synonyms: [diadem, tiara, circlet, corona, king, ruler, winner, favourite], usage: "<uk-icon icon=\"crown\"></uk-icon>" }`
- `{icon_name: "cuboid", synonyms: [brick, block, container, storage, geometry, rectangular, hexahedron], usage: "<uk-icon icon=\"cuboid\"></uk-icon>" }`
- `{icon_name: "cup-soda", synonyms: [beverage, cup, drink, soda, straw, water], usage: "<uk-icon icon=\"cup-soda\"></uk-icon>" }`
- `{icon_name: "currency", synonyms: [finance, money], usage: "<uk-icon icon=\"currency\"></uk-icon>" }`
- `{icon_name: "cylinder", synonyms: [shape, elliptical, geometry, container, storage, tin, pot], usage: "<uk-icon icon=\"cylinder\"></uk-icon>" }`
- `{icon_name: "dam", synonyms: [electricity, energy, water], usage: "<uk-icon icon=\"dam\"></uk-icon>" }`
- `{icon_name: "database-backup", synonyms: [storage, memory, bytes, servers, backup, timemachine, rotate, arrow, left], usage: "<uk-icon icon=\"database-backup\"></uk-icon>" }`
- `{icon_name: "database-zap", synonyms: [cache busting, storage, memory, bytes, servers, power, crash], usage: "<uk-icon icon=\"database-zap\"></uk-icon>" }`
- `{icon_name: "database", synonyms: [storage, memory, container, tin, pot, bytes, servers], usage: "<uk-icon icon=\"database\"></uk-icon>" }`
- `{icon_name: "decimals-arrow-left", synonyms: [numerical, decimal, decrease, less, fewer, precision, rounding, digits, fraction, float, number], usage: "<uk-icon icon=\"decimals-arrow-left\"></uk-icon>" }`
- `{icon_name: "decimals-arrow-right", synonyms: [numerical, decimal, increase, more, precision, rounding, digits, fraction, float, number], usage: "<uk-icon icon=\"decimals-arrow-right\"></uk-icon>" }`
- `{icon_name: "delete", synonyms: [backspace, remove], usage: "<uk-icon icon=\"delete\"></uk-icon>" }`
- `{icon_name: "dessert", synonyms: [pudding, christmas, xmas, custard, iced bun, icing, fondant, cake, ice cream, gelato, sundae, scoop, dollop, sugar, food, sweet], usage: "<uk-icon icon=\"dessert\"></uk-icon>" }`
- `{icon_name: "diameter", synonyms: [shape, circle, geometry, trigonometry, width, height, size, calculate, measure], usage: "<uk-icon icon=\"diameter\"></uk-icon>" }`
- `{icon_name: "diamond-minus", synonyms: [keyframe, subtract, remove, decrease, reduce, calculator, button, keyboard, line, divider, separator, horizontal rule, hr, html, markup, markdown, ---, toolbar, operator, code, coding, minimum, downgrade], usage: "<uk-icon icon=\"diamond-minus\"></uk-icon>" }`
- `{icon_name: "diamond-percent", synonyms: [verified, unverified, sale, discount, offer, marketing, sticker, price tag], usage: "<uk-icon icon=\"diamond-percent\"></uk-icon>" }`
- `{icon_name: "diamond-plus", synonyms: [keyframe, add, new, increase, increment, positive, calculate, toolbar, crosshair, aim, target, scope, sight, reticule, maximum, upgrade, extra, +], usage: "<uk-icon icon=\"diamond-plus\"></uk-icon>" }`
- `{icon_name: "diamond", synonyms: [square, rectangle, oblique, rhombus, shape, suit, playing, cards], usage: "<uk-icon icon=\"diamond\"></uk-icon>" }`
- `{icon_name: "dice-1", synonyms: [dice, random, tabletop, 1, board, game], usage: "<uk-icon icon=\"dice-1\"></uk-icon>" }`
- `{icon_name: "dice-2", synonyms: [dice, random, tabletop, 2, board, game], usage: "<uk-icon icon=\"dice-2\"></uk-icon>" }`
- `{icon_name: "dice-3", synonyms: [dice, random, tabletop, 3, board, game], usage: "<uk-icon icon=\"dice-3\"></uk-icon>" }`
- `{icon_name: "dice-4", synonyms: [dice, random, tabletop, 4, board, game], usage: "<uk-icon icon=\"dice-4\"></uk-icon>" }`
- `{icon_name: "dice-5", synonyms: [dice, random, tabletop, 5, board, game], usage: "<uk-icon icon=\"dice-5\"></uk-icon>" }`
- `{icon_name: "dice-6", synonyms: [dice, random, tabletop, 6, board, game], usage: "<uk-icon icon=\"dice-6\"></uk-icon>" }`
- `{icon_name: "dices", synonyms: [dice, random, tabletop, board, game], usage: "<uk-icon icon=\"dices\"></uk-icon>" }`
- `{icon_name: "diff", synonyms: [patch, difference, compare, plus, minus, plus-minus, math], usage: "<uk-icon icon=\"diff\"></uk-icon>" }`
- `{icon_name: "disc-2", synonyms: [album, music, vinyl, record, cd, dvd, format, dj, spin, rotate, rpm], usage: "<uk-icon icon=\"disc-2\"></uk-icon>" }`
- `{icon_name: "disc-3", synonyms: [album, music, vinyl, record, cd, dvd, format, dj, spin, rotate, rpm], usage: "<uk-icon icon=\"disc-3\"></uk-icon>" }`
- `{icon_name: "disc-album", synonyms: [album, music, songs, format, cd, dvd, vinyl, sleeve, cover, platinum, compilation, ep, recording, playback, spin, rotate, rpm, dj], usage: "<uk-icon icon=\"disc-album\"></uk-icon>" }`
- `{icon_name: "disc", synonyms: [album, music, songs, format, cd, dvd, vinyl, sleeve, cover, platinum, compilation, ep, recording, playback, spin, rotate, rpm, dj], usage: "<uk-icon icon=\"disc\"></uk-icon>" }`
- `{icon_name: "divide", synonyms: [calculate, math, division, operator, code, Ã·, /], usage: "<uk-icon icon=\"divide\"></uk-icon>" }`
- `{icon_name: "dna-off", synonyms: [gene, gmo free, helix, heredity, chromosome, nucleic acid], usage: "<uk-icon icon=\"dna-off\"></uk-icon>" }`
- `{icon_name: "dna", synonyms: [gene, gmo, helix, heredity, chromosome, nucleic acid], usage: "<uk-icon icon=\"dna\"></uk-icon>" }`
- `{icon_name: "dock", synonyms: [desktop, applications, launch, home, menu bar, bottom, line, macos, osx], usage: "<uk-icon icon=\"dock\"></uk-icon>" }`
- `{icon_name: "dog", synonyms: [animal, pet, puppy, hound, canine], usage: "<uk-icon icon=\"dog\"></uk-icon>" }`
- `{icon_name: "dollar-sign", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"dollar-sign\"></uk-icon>" }`
- `{icon_name: "donut", synonyms: [doughnut, sprinkles, topping, fast food, junk food, snack, treat, sweet, sugar, dessert, hollow, ring], usage: "<uk-icon icon=\"donut\"></uk-icon>" }`
- `{icon_name: "door-closed-locked", synonyms: [entrance, entry, exit, ingress, egress, gate, gateway, emergency exit, lock], usage: "<uk-icon icon=\"door-closed-locked\"></uk-icon>" }`
- `{icon_name: "door-closed", synonyms: [entrance, entry, exit, ingress, egress, gate, gateway, emergency exit], usage: "<uk-icon icon=\"door-closed\"></uk-icon>" }`
- `{icon_name: "door-open", synonyms: [entrance, entry, exit, ingress, egress, gate, gateway, emergency exit], usage: "<uk-icon icon=\"door-open\"></uk-icon>" }`
- `{icon_name: "dot", synonyms: [interpunct, interpoint, middot, step, punctuation, period, full stop, end, finish, final, characters, font, typography, type, center, .], usage: "<uk-icon icon=\"dot\"></uk-icon>" }`
- `{icon_name: "download", synonyms: [import, export, save], usage: "<uk-icon icon=\"download\"></uk-icon>" }`
- `{icon_name: "drafting-compass", synonyms: [geometry, trigonometry, radius, diameter, circumference, calculate, measure, arc, curve, draw, sketch], usage: "<uk-icon icon=\"drafting-compass\"></uk-icon>" }`
- `{icon_name: "drama", synonyms: [drama, masks, theater, theatre, entertainment, show], usage: "<uk-icon icon=\"drama\"></uk-icon>" }`
- `{icon_name: "dribbble", synonyms: [design, social], usage: "<uk-icon icon=\"dribbble\"></uk-icon>" }`
- `{icon_name: "drill", synonyms: [power, bit, head, hole, diy, toolbox, build, construction], usage: "<uk-icon icon=\"drill\"></uk-icon>" }`
- `{icon_name: "droplet-off", synonyms: [water, weather, liquid, fluid, wet, moisture, damp, bead, globule], usage: "<uk-icon icon=\"droplet-off\"></uk-icon>" }`
- `{icon_name: "droplet", synonyms: [water, weather, liquid, fluid, wet, moisture, damp, bead, globule], usage: "<uk-icon icon=\"droplet\"></uk-icon>" }`
- `{icon_name: "droplets", synonyms: [water, weather, liquid, fluid, wet, moisture, damp, bead, globule], usage: "<uk-icon icon=\"droplets\"></uk-icon>" }`
- `{icon_name: "drum", synonyms: [drummer, kit, sticks, instrument, beat, bang, bass, backing track, band, play, performance, concert, march, music, audio, sound, noise, loud], usage: "<uk-icon icon=\"drum\"></uk-icon>" }`
- `{icon_name: "drumstick", synonyms: [food, chicken, meat], usage: "<uk-icon icon=\"drumstick\"></uk-icon>" }`
- `{icon_name: "dumbbell", synonyms: [barbell, weight, workout, gym], usage: "<uk-icon icon=\"dumbbell\"></uk-icon>" }`
- `{icon_name: "ear-off", synonyms: [hearing, hard of hearing, hearing loss, deafness, noise, silence, audio, accessibility], usage: "<uk-icon icon=\"ear-off\"></uk-icon>" }`
- `{icon_name: "ear", synonyms: [hearing, noise, audio, accessibility], usage: "<uk-icon icon=\"ear\"></uk-icon>" }`
- `{icon_name: "earth-lock", synonyms: [vpn, private, privacy, network, world, browser, security, encryption, protection, connection], usage: "<uk-icon icon=\"earth-lock\"></uk-icon>" }`
- `{icon_name: "earth", synonyms: [world, browser, language, translate, globe], usage: "<uk-icon icon=\"earth\"></uk-icon>" }`
- `{icon_name: "eclipse", synonyms: [lunar, solar, crescent moon, sun, earth, day, night, planet, space, mode, dark, light, toggle, switch, color, css, styles, display, accessibility, contrast, brightness, blend, shade], usage: "<uk-icon icon=\"eclipse\"></uk-icon>" }`
- `{icon_name: "egg-fried", synonyms: [food, breakfast], usage: "<uk-icon icon=\"egg-fried\"></uk-icon>" }`
- `{icon_name: "egg-off", synonyms: [egg free, vegan, hatched, bad egg], usage: "<uk-icon icon=\"egg-off\"></uk-icon>" }`
- `{icon_name: "egg", synonyms: [bird, chicken, nest, hatch, shell, incubate, soft boiled, hard, breakfast, brunch, morning, easter], usage: "<uk-icon icon=\"egg\"></uk-icon>" }`
- `{icon_name: "ellipsis-vertical", synonyms: [menu, options, spread, more, further, extra, overflow, dots, â€¦, ...], usage: "<uk-icon icon=\"ellipsis-vertical\"></uk-icon>" }`
- `{icon_name: "ellipsis", synonyms: [et cetera, etc, loader, loading, progress, pending, throbber, menu, options, operator, code, coding, spread, rest, more, further, extra, overflow, dots, â€¦, ...], usage: "<uk-icon icon=\"ellipsis\"></uk-icon>" }`
- `{icon_name: "equal-approximately", synonyms: [about, calculate, math, operater], usage: "<uk-icon icon=\"equal-approximately\"></uk-icon>" }`
- `{icon_name: "equal-not", synonyms: [calculate, off, math, operator, code, â‰ ], usage: "<uk-icon icon=\"equal-not\"></uk-icon>" }`
- `{icon_name: "equal", synonyms: [calculate, math, operator, assignment, code, =], usage: "<uk-icon icon=\"equal\"></uk-icon>" }`
- `{icon_name: "eraser", synonyms: [pencil, drawing, undo, delete, clear], usage: "<uk-icon icon=\"eraser\"></uk-icon>" }`
- `{icon_name: "ethernet-port", synonyms: [internet, network, connection, cable, lan, port, router, switch, hub, modem, web, online, networking, communication, socket, plug, slot, controller, connector, interface, console, signal, data, input, output], usage: "<uk-icon icon=\"ethernet-port\"></uk-icon>" }`
- `{icon_name: "euro", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"euro\"></uk-icon>" }`
- `{icon_name: "expand", synonyms: [scale, fullscreen, maximize, minimize, contract], usage: "<uk-icon icon=\"expand\"></uk-icon>" }`
- `{icon_name: "external-link", synonyms: [outbound, open, share], usage: "<uk-icon icon=\"external-link\"></uk-icon>" }`
- `{icon_name: "eye-closed", synonyms: [view, watch, see, hide, conceal, mask, hidden, visibility, vision], usage: "<uk-icon icon=\"eye-closed\"></uk-icon>" }`
- `{icon_name: "eye-off", synonyms: [view, watch, see, hide, conceal, mask, hidden, visibility, vision], usage: "<uk-icon icon=\"eye-off\"></uk-icon>" }`
- `{icon_name: "eye", synonyms: [view, watch, see, show, expose, reveal, display, visible, visibility, vision, preview, read], usage: "<uk-icon icon=\"eye\"></uk-icon>" }`
- `{icon_name: "facebook", synonyms: [logo, social], usage: "<uk-icon icon=\"facebook\"></uk-icon>" }`
- `{icon_name: "factory", synonyms: [building, business, energy, industry, manufacture, sector], usage: "<uk-icon icon=\"factory\"></uk-icon>" }`
- `{icon_name: "fan", synonyms: [air, cooler, ventilation, ventilator, blower], usage: "<uk-icon icon=\"fan\"></uk-icon>" }`
- `{icon_name: "fast-forward", synonyms: [music], usage: "<uk-icon icon=\"fast-forward\"></uk-icon>" }`
- `{icon_name: "feather", synonyms: [logo], usage: "<uk-icon icon=\"feather\"></uk-icon>" }`
- `{icon_name: "fence", synonyms: [picket, panels, woodwork, diy, materials, suburban, garden, property, territory], usage: "<uk-icon icon=\"fence\"></uk-icon>" }`
- `{icon_name: "ferris-wheel", synonyms: [big wheel, daisy wheel, observation, attraction, entertainment, amusement park, theme park, funfair], usage: "<uk-icon icon=\"ferris-wheel\"></uk-icon>" }`
- `{icon_name: "figma", synonyms: [logo, design, tool], usage: "<uk-icon icon=\"figma\"></uk-icon>" }`
- `{icon_name: "file-archive", synonyms: [zip, package, archive], usage: "<uk-icon icon=\"file-archive\"></uk-icon>" }`
- `{icon_name: "file-audio-2", synonyms: [music, audio, sound, headphones], usage: "<uk-icon icon=\"file-audio-2\"></uk-icon>" }`
- `{icon_name: "file-audio", synonyms: [music, audio, sound, headphones], usage: "<uk-icon icon=\"file-audio\"></uk-icon>" }`
- `{icon_name: "file-axis-3d", synonyms: [model, 3d, axis, coordinates], usage: "<uk-icon icon=\"file-axis-3d\"></uk-icon>" }`
- `{icon_name: "file-badge-2", synonyms: [award, achievement, badge, rosette, prize, winner], usage: "<uk-icon icon=\"file-badge-2\"></uk-icon>" }`
- `{icon_name: "file-badge", synonyms: [award, achievement, badge, rosette, prize, winner], usage: "<uk-icon icon=\"file-badge\"></uk-icon>" }`
- `{icon_name: "file-box", synonyms: [box, package, model], usage: "<uk-icon icon=\"file-box\"></uk-icon>" }`
- `{icon_name: "file-chart-column-increasing", synonyms: [statistics, analytics, diagram, graph, presentation, trending up], usage: "<uk-icon icon=\"file-chart-column-increasing\"></uk-icon>" }`
- `{icon_name: "file-chart-column", synonyms: [statistics, analytics, diagram, graph, presentation], usage: "<uk-icon icon=\"file-chart-column\"></uk-icon>" }`
- `{icon_name: "file-chart-line", synonyms: [statistics, analytics, diagram, graph, presentation], usage: "<uk-icon icon=\"file-chart-line\"></uk-icon>" }`
- `{icon_name: "file-chart-pie", synonyms: [statistics, analytics, diagram, graph, presentation], usage: "<uk-icon icon=\"file-chart-pie\"></uk-icon>" }`
- `{icon_name: "file-check-2", synonyms: [done, document, todo, tick, complete, task], usage: "<uk-icon icon=\"file-check-2\"></uk-icon>" }`
- `{icon_name: "file-check", synonyms: [done, document, todo, tick, complete, task], usage: "<uk-icon icon=\"file-check\"></uk-icon>" }`
- `{icon_name: "file-clock", synonyms: [history, log, clock], usage: "<uk-icon icon=\"file-clock\"></uk-icon>" }`
- `{icon_name: "file-code-2", synonyms: [script, document, html, xml, property list, plist], usage: "<uk-icon icon=\"file-code-2\"></uk-icon>" }`
- `{icon_name: "file-code", synonyms: [script, document, gist, html, xml, property list, plist], usage: "<uk-icon icon=\"file-code\"></uk-icon>" }`
- `{icon_name: "file-cog", synonyms: [executable, settings, cog, edit, gear], usage: "<uk-icon icon=\"file-cog\"></uk-icon>" }`
- `{icon_name: "file-diff", synonyms: [diff, patch], usage: "<uk-icon icon=\"file-diff\"></uk-icon>" }`
- `{icon_name: "file-digit", synonyms: [number, document], usage: "<uk-icon icon=\"file-digit\"></uk-icon>" }`
- `{icon_name: "file-down", synonyms: [download, import, export], usage: "<uk-icon icon=\"file-down\"></uk-icon>" }`
- `{icon_name: "file-heart", synonyms: [heart, favourite, bookmark, quick link], usage: "<uk-icon icon=\"file-heart\"></uk-icon>" }`
- `{icon_name: "file-image", synonyms: [image, graphics, photo, picture], usage: "<uk-icon icon=\"file-image\"></uk-icon>" }`
- `{icon_name: "file-input", synonyms: [document], usage: "<uk-icon icon=\"file-input\"></uk-icon>" }`
- `{icon_name: "file-json-2", synonyms: [code, json, curly braces, curly brackets], usage: "<uk-icon icon=\"file-json-2\"></uk-icon>" }`
- `{icon_name: "file-json", synonyms: [code, json, curly braces, curly brackets], usage: "<uk-icon icon=\"file-json\"></uk-icon>" }`
- `{icon_name: "file-key-2", synonyms: [key, private, public, security], usage: "<uk-icon icon=\"file-key-2\"></uk-icon>" }`
- `{icon_name: "file-key", synonyms: [key, private, public, security], usage: "<uk-icon icon=\"file-key\"></uk-icon>" }`
- `{icon_name: "file-lock-2", synonyms: [lock, password, security], usage: "<uk-icon icon=\"file-lock-2\"></uk-icon>" }`
- `{icon_name: "file-lock", synonyms: [lock, password, security], usage: "<uk-icon icon=\"file-lock\"></uk-icon>" }`
- `{icon_name: "file-minus-2", synonyms: [document], usage: "<uk-icon icon=\"file-minus-2\"></uk-icon>" }`
- `{icon_name: "file-minus", synonyms: [delete, remove, erase, document], usage: "<uk-icon icon=\"file-minus\"></uk-icon>" }`
- `{icon_name: "file-music", synonyms: [audio, sound, noise, track, digital, recording, playback, piano, keyboard, keys, notes, chord, midi, octave], usage: "<uk-icon icon=\"file-music\"></uk-icon>" }`
- `{icon_name: "file-output", synonyms: [document], usage: "<uk-icon icon=\"file-output\"></uk-icon>" }`
- `{icon_name: "file-pen-line", synonyms: [edit], usage: "<uk-icon icon=\"file-pen-line\"></uk-icon>" }`
- `{icon_name: "file-pen", synonyms: [signature], usage: "<uk-icon icon=\"file-pen\"></uk-icon>" }`
- `{icon_name: "file-plus-2", synonyms: [add, create, new, document], usage: "<uk-icon icon=\"file-plus-2\"></uk-icon>" }`
- `{icon_name: "file-plus", synonyms: [add, create, new, document], usage: "<uk-icon icon=\"file-plus\"></uk-icon>" }`
- `{icon_name: "file-question", synonyms: [readme, help, question], usage: "<uk-icon icon=\"file-question\"></uk-icon>" }`
- `{icon_name: "file-scan", synonyms: [scan, code, qr-code], usage: "<uk-icon icon=\"file-scan\"></uk-icon>" }`
- `{icon_name: "file-search-2", synonyms: [lost, document, find, browser], usage: "<uk-icon icon=\"file-search-2\"></uk-icon>" }`
- `{icon_name: "file-search", synonyms: [lost, document, find, browser], usage: "<uk-icon icon=\"file-search\"></uk-icon>" }`
- `{icon_name: "file-sliders", synonyms: [cogged, gear, mechanical, machinery, configuration, controls, preferences, settings, system, admin, edit, executable], usage: "<uk-icon icon=\"file-sliders\"></uk-icon>" }`
- `{icon_name: "file-spreadsheet", synonyms: [spreadsheet, sheet, table], usage: "<uk-icon icon=\"file-spreadsheet\"></uk-icon>" }`
- `{icon_name: "file-stack", synonyms: [versions, multiple, copy, documents, revisions, version control, history], usage: "<uk-icon icon=\"file-stack\"></uk-icon>" }`
- `{icon_name: "file-symlink", synonyms: [symlink, symbolic, link], usage: "<uk-icon icon=\"file-symlink\"></uk-icon>" }`
- `{icon_name: "file-terminal", synonyms: [terminal, bash, script, executable], usage: "<uk-icon icon=\"file-terminal\"></uk-icon>" }`
- `{icon_name: "file-text", synonyms: [data, txt, pdf, document], usage: "<uk-icon icon=\"file-text\"></uk-icon>" }`
- `{icon_name: "file-type-2", synonyms: [font, text, typography, type], usage: "<uk-icon icon=\"file-type-2\"></uk-icon>" }`
- `{icon_name: "file-type", synonyms: [font, text, typography, type], usage: "<uk-icon icon=\"file-type\"></uk-icon>" }`
- `{icon_name: "file-up", synonyms: [upload, import, export], usage: "<uk-icon icon=\"file-up\"></uk-icon>" }`
- `{icon_name: "file-user", synonyms: [person, personal information, people, listing, networking, document, contact, cover letter, resume, cv, curriculum vitae, application form], usage: "<uk-icon icon=\"file-user\"></uk-icon>" }`
- `{icon_name: "file-video-2", synonyms: [movie, video, film], usage: "<uk-icon icon=\"file-video-2\"></uk-icon>" }`
- `{icon_name: "file-video", synonyms: [movie, video, film], usage: "<uk-icon icon=\"file-video\"></uk-icon>" }`
- `{icon_name: "file-volume-2", synonyms: [audio, music, volume], usage: "<uk-icon icon=\"file-volume-2\"></uk-icon>" }`
- `{icon_name: "file-volume", synonyms: [audio, music, volume], usage: "<uk-icon icon=\"file-volume\"></uk-icon>" }`
- `{icon_name: "file-warning", synonyms: [hidden, warning, alert, danger, protected, exclamation mark], usage: "<uk-icon icon=\"file-warning\"></uk-icon>" }`
- `{icon_name: "file-x-2", synonyms: [lost, delete, remove, document], usage: "<uk-icon icon=\"file-x-2\"></uk-icon>" }`
- `{icon_name: "file-x", synonyms: [lost, delete, remove, document], usage: "<uk-icon icon=\"file-x\"></uk-icon>" }`
- `{icon_name: "file", synonyms: [document], usage: "<uk-icon icon=\"file\"></uk-icon>" }`
- `{icon_name: "files", synonyms: [multiple, copy, documents], usage: "<uk-icon icon=\"files\"></uk-icon>" }`
- `{icon_name: "film", synonyms: [movie, video, reel, camera, cinema, entertainment], usage: "<uk-icon icon=\"film\"></uk-icon>" }`
- `{icon_name: "fingerprint", synonyms: [2fa, authentication, biometric, identity, security], usage: "<uk-icon icon=\"fingerprint\"></uk-icon>" }`
- `{icon_name: "fire-extinguisher", synonyms: [flames, smoke, foam, water, spray, hose, firefighter, fireman, department, brigade, station, emergency, suppress, compressed, tank, cylinder, safety, equipment, amenities], usage: "<uk-icon icon=\"fire-extinguisher\"></uk-icon>" }`
- `{icon_name: "fish-off", synonyms: [food, dish, restaurant, course, meal, seafood, animal, pet, sea, marine, allergy, intolerance, diet], usage: "<uk-icon icon=\"fish-off\"></uk-icon>" }`
- `{icon_name: "fish-symbol", synonyms: [dish, restaurant, course, meal, seafood, pet, sea, marine], usage: "<uk-icon icon=\"fish-symbol\"></uk-icon>" }`
- `{icon_name: "fish", synonyms: [dish, restaurant, course, meal, seafood, pet, sea, marine], usage: "<uk-icon icon=\"fish\"></uk-icon>" }`
- `{icon_name: "flag-off", synonyms: [unflag], usage: "<uk-icon icon=\"flag-off\"></uk-icon>" }`
- `{icon_name: "flag-triangle-left", synonyms: [report, timeline], usage: "<uk-icon icon=\"flag-triangle-left\"></uk-icon>" }`
- `{icon_name: "flag-triangle-right", synonyms: [report, timeline], usage: "<uk-icon icon=\"flag-triangle-right\"></uk-icon>" }`
- `{icon_name: "flag", synonyms: [report], usage: "<uk-icon icon=\"flag\"></uk-icon>" }`
- `{icon_name: "flame-kindling", synonyms: [campfire, camping, wilderness, outdoors, lit, warmth, wood, twigs, sticks], usage: "<uk-icon icon=\"flame-kindling\"></uk-icon>" }`
- `{icon_name: "flame", synonyms: [fire, lit, burning, spark, embers, smoke, firefighter, fireman, department, brigade, station, emergency], usage: "<uk-icon icon=\"flame\"></uk-icon>" }`
- `{icon_name: "flashlight-off", synonyms: [torch], usage: "<uk-icon icon=\"flashlight-off\"></uk-icon>" }`
- `{icon_name: "flashlight", synonyms: [torch], usage: "<uk-icon icon=\"flashlight\"></uk-icon>" }`
- `{icon_name: "flask-conical-off", synonyms: [beaker, erlenmeyer, non toxic, lab, chemistry, experiment, test], usage: "<uk-icon icon=\"flask-conical-off\"></uk-icon>" }`
- `{icon_name: "flask-conical", synonyms: [beaker, erlenmeyer, lab, chemistry, experiment, test], usage: "<uk-icon icon=\"flask-conical\"></uk-icon>" }`
- `{icon_name: "flask-round", synonyms: [beaker, lab, chemistry, experiment, test], usage: "<uk-icon icon=\"flask-round\"></uk-icon>" }`
- `{icon_name: "flip-horizontal-2", synonyms: [reflect, mirror, alignment, dashed], usage: "<uk-icon icon=\"flip-horizontal-2\"></uk-icon>" }`
- `{icon_name: "flip-horizontal", synonyms: [reflect, mirror, alignment, dashed], usage: "<uk-icon icon=\"flip-horizontal\"></uk-icon>" }`
- `{icon_name: "flip-vertical-2", synonyms: [reflect, mirror, alignment, dashed], usage: "<uk-icon icon=\"flip-vertical-2\"></uk-icon>" }`
- `{icon_name: "flip-vertical", synonyms: [reflect, mirror, alignment, dashed], usage: "<uk-icon icon=\"flip-vertical\"></uk-icon>" }`
- `{icon_name: "flower-2", synonyms: [sustainability, nature, plant], usage: "<uk-icon icon=\"flower-2\"></uk-icon>" }`
- `{icon_name: "flower", synonyms: [sustainability, nature, plant, spring], usage: "<uk-icon icon=\"flower\"></uk-icon>" }`
- `{icon_name: "focus", synonyms: [camera, lens, photo, dashed], usage: "<uk-icon icon=\"focus\"></uk-icon>" }`
- `{icon_name: "fold-horizontal", synonyms: [arrow, collapse, fold, vertical, dashed], usage: "<uk-icon icon=\"fold-horizontal\"></uk-icon>" }`
- `{icon_name: "fold-vertical", synonyms: [arrow, collapse, fold, vertical, dashed], usage: "<uk-icon icon=\"fold-vertical\"></uk-icon>" }`
- `{icon_name: "folder-archive", synonyms: [archive, zip, package], usage: "<uk-icon icon=\"folder-archive\"></uk-icon>" }`
- `{icon_name: "folder-check", synonyms: [done, directory, todo, tick, complete, task], usage: "<uk-icon icon=\"folder-check\"></uk-icon>" }`
- `{icon_name: "folder-clock", synonyms: [history, directory, clock], usage: "<uk-icon icon=\"folder-clock\"></uk-icon>" }`
- `{icon_name: "folder-closed", synonyms: [directory, closed], usage: "<uk-icon icon=\"folder-closed\"></uk-icon>" }`
- `{icon_name: "folder-code", synonyms: [directory, coding, develop, software], usage: "<uk-icon icon=\"folder-code\"></uk-icon>" }`
- `{icon_name: "folder-cog", synonyms: [directory, settings, control, preferences, cog, edit, gear], usage: "<uk-icon icon=\"folder-cog\"></uk-icon>" }`
- `{icon_name: "folder-dot", synonyms: [directory, root, project, pinned, active, current, cogged, gear, mechanical, machinery, configuration, controls, preferences, settings, system, admin, edit], usage: "<uk-icon icon=\"folder-dot\"></uk-icon>" }`
- `{icon_name: "folder-down", synonyms: [directory, download, import, export], usage: "<uk-icon icon=\"folder-down\"></uk-icon>" }`
- `{icon_name: "folder-git-2", synonyms: [directory, root, project, git, repo], usage: "<uk-icon icon=\"folder-git-2\"></uk-icon>" }`
- `{icon_name: "folder-git", synonyms: [directory, root, project, git, repo], usage: "<uk-icon icon=\"folder-git\"></uk-icon>" }`
- `{icon_name: "folder-heart", synonyms: [directory, heart, favourite, bookmark, quick link], usage: "<uk-icon icon=\"folder-heart\"></uk-icon>" }`
- `{icon_name: "folder-input", synonyms: [directory, import, export], usage: "<uk-icon icon=\"folder-input\"></uk-icon>" }`
- `{icon_name: "folder-kanban", synonyms: [projects, manage, overview, board, tickets, issues, roadmap, plan, intentions, productivity, work, agile, code, coding, directory, project, root], usage: "<uk-icon icon=\"folder-kanban\"></uk-icon>" }`
- `{icon_name: "folder-key", synonyms: [directory, key, private, security, protected], usage: "<uk-icon icon=\"folder-key\"></uk-icon>" }`
- `{icon_name: "folder-lock", synonyms: [directory, lock, private, security, protected], usage: "<uk-icon icon=\"folder-lock\"></uk-icon>" }`
- `{icon_name: "folder-minus", synonyms: [directory, remove, delete], usage: "<uk-icon icon=\"folder-minus\"></uk-icon>" }`
- `{icon_name: "folder-open-dot", synonyms: [directory, root, project, active, current, pinned], usage: "<uk-icon icon=\"folder-open-dot\"></uk-icon>" }`
- `{icon_name: "folder-open", synonyms: [directory], usage: "<uk-icon icon=\"folder-open\"></uk-icon>" }`
- `{icon_name: "folder-output", synonyms: [directory, import, export], usage: "<uk-icon icon=\"folder-output\"></uk-icon>" }`
- `{icon_name: "folder-pen", synonyms: [directory, rename], usage: "<uk-icon icon=\"folder-pen\"></uk-icon>" }`
- `{icon_name: "folder-plus", synonyms: [directory, add, create, new], usage: "<uk-icon icon=\"folder-plus\"></uk-icon>" }`
- `{icon_name: "folder-root", synonyms: [directory, root, project, git, repo], usage: "<uk-icon icon=\"folder-root\"></uk-icon>" }`
- `{icon_name: "folder-search-2", synonyms: [directory, search, find, lost, browser], usage: "<uk-icon icon=\"folder-search-2\"></uk-icon>" }`
- `{icon_name: "folder-search", synonyms: [directory, search, find, lost, browser], usage: "<uk-icon icon=\"folder-search\"></uk-icon>" }`
- `{icon_name: "folder-symlink", synonyms: [directory, symlink, symbolic, link], usage: "<uk-icon icon=\"folder-symlink\"></uk-icon>" }`
- `{icon_name: "folder-sync", synonyms: [directory, synchronize, synchronise, refresh, reconnect, transfer, backup], usage: "<uk-icon icon=\"folder-sync\"></uk-icon>" }`
- `{icon_name: "folder-tree", synonyms: [directory, tree, browser], usage: "<uk-icon icon=\"folder-tree\"></uk-icon>" }`
- `{icon_name: "folder-up", synonyms: [directory, upload, import, export], usage: "<uk-icon icon=\"folder-up\"></uk-icon>" }`
- `{icon_name: "folder-x", synonyms: [directory, remove, delete], usage: "<uk-icon icon=\"folder-x\"></uk-icon>" }`
- `{icon_name: "folder", synonyms: [directory], usage: "<uk-icon icon=\"folder\"></uk-icon>" }`
- `{icon_name: "folders", synonyms: [multiple, copy, directories], usage: "<uk-icon icon=\"folders\"></uk-icon>" }`
- `{icon_name: "footprints", synonyms: [steps, walking, foot, feet, trail, shoe], usage: "<uk-icon icon=\"footprints\"></uk-icon>" }`
- `{icon_name: "forklift", synonyms: [vehicle, transport, logistics], usage: "<uk-icon icon=\"forklift\"></uk-icon>" }`
- `{icon_name: "forward", synonyms: [send, share, email], usage: "<uk-icon icon=\"forward\"></uk-icon>" }`
- `{icon_name: "frame", synonyms: [logo, design, tool], usage: "<uk-icon icon=\"frame\"></uk-icon>" }`
- `{icon_name: "framer", synonyms: [logo, design, tool], usage: "<uk-icon icon=\"framer\"></uk-icon>" }`
- `{icon_name: "frown", synonyms: [emoji, face, bad, sad, emotion], usage: "<uk-icon icon=\"frown\"></uk-icon>" }`
- `{icon_name: "fuel", synonyms: [filling-station, gas, petrol, tank], usage: "<uk-icon icon=\"fuel\"></uk-icon>" }`
- `{icon_name: "fullscreen", synonyms: [expand, zoom, preview, focus, camera, lens, image], usage: "<uk-icon icon=\"fullscreen\"></uk-icon>" }`
- `{icon_name: "funnel-plus", synonyms: [filter, hopper, add, create, new], usage: "<uk-icon icon=\"funnel-plus\"></uk-icon>" }`
- `{icon_name: "funnel-x", synonyms: [filter, hopper, remove, delete], usage: "<uk-icon icon=\"funnel-x\"></uk-icon>" }`
- `{icon_name: "funnel", synonyms: [filter, hopper], usage: "<uk-icon icon=\"funnel\"></uk-icon>" }`
- `{icon_name: "gallery-horizontal-end", synonyms: [carousel, pictures, images, scroll, swipe, album, portfolio, history, versions, backup, time machine], usage: "<uk-icon icon=\"gallery-horizontal-end\"></uk-icon>" }`
- `{icon_name: "gallery-horizontal", synonyms: [carousel, pictures, images, scroll, swipe, album, portfolio], usage: "<uk-icon icon=\"gallery-horizontal\"></uk-icon>" }`
- `{icon_name: "gallery-thumbnails", synonyms: [carousel, pictures, images, album, portfolio, preview], usage: "<uk-icon icon=\"gallery-thumbnails\"></uk-icon>" }`
- `{icon_name: "gallery-vertical-end", synonyms: [carousel, pictures, images, scroll, swipe, album, portfolio, history, versions, backup, time machine], usage: "<uk-icon icon=\"gallery-vertical-end\"></uk-icon>" }`
- `{icon_name: "gallery-vertical", synonyms: [carousel, pictures, images, scroll, swipe, album, portfolio], usage: "<uk-icon icon=\"gallery-vertical\"></uk-icon>" }`
- `{icon_name: "gamepad-2", synonyms: [console], usage: "<uk-icon icon=\"gamepad-2\"></uk-icon>" }`
- `{icon_name: "gamepad", synonyms: [console], usage: "<uk-icon icon=\"gamepad\"></uk-icon>" }`
- `{icon_name: "gauge", synonyms: [dashboard, dial, meter, speed, pressure, measure, level], usage: "<uk-icon icon=\"gauge\"></uk-icon>" }`
- `{icon_name: "gavel", synonyms: [hammer, mallet], usage: "<uk-icon icon=\"gavel\"></uk-icon>" }`
- `{icon_name: "gem", synonyms: [diamond, crystal, ruby, jewellery, price, special, present, gift, ring, wedding, proposal, marriage, rubygems], usage: "<uk-icon icon=\"gem\"></uk-icon>" }`
- `{icon_name: "ghost", synonyms: [pac-man, spooky], usage: "<uk-icon icon=\"ghost\"></uk-icon>" }`
- `{icon_name: "gift", synonyms: [present, box, birthday, party], usage: "<uk-icon icon=\"gift\"></uk-icon>" }`
- `{icon_name: "git-branch-plus", synonyms: [add, create, +], usage: "<uk-icon icon=\"git-branch-plus\"></uk-icon>" }`
- `{icon_name: "git-branch", synonyms: [code, version control], usage: "<uk-icon icon=\"git-branch\"></uk-icon>" }`
- `{icon_name: "git-commit-horizontal", synonyms: [code, version control, waypoint, stop, station], usage: "<uk-icon icon=\"git-commit-horizontal\"></uk-icon>" }`
- `{icon_name: "git-commit-vertical", synonyms: [code, version control, waypoint, stop, station], usage: "<uk-icon icon=\"git-commit-vertical\"></uk-icon>" }`
- `{icon_name: "git-compare-arrows", synonyms: [code, version control, diff], usage: "<uk-icon icon=\"git-compare-arrows\"></uk-icon>" }`
- `{icon_name: "git-compare", synonyms: [code, version control, diff], usage: "<uk-icon icon=\"git-compare\"></uk-icon>" }`
- `{icon_name: "git-fork", synonyms: [code, version control], usage: "<uk-icon icon=\"git-fork\"></uk-icon>" }`
- `{icon_name: "git-graph", synonyms: [code, version control, commit graph, commits, gitlens], usage: "<uk-icon icon=\"git-graph\"></uk-icon>" }`
- `{icon_name: "git-merge", synonyms: [code, version control], usage: "<uk-icon icon=\"git-merge\"></uk-icon>" }`
- `{icon_name: "git-pull-request-arrow", synonyms: [code, version control, open], usage: "<uk-icon icon=\"git-pull-request-arrow\"></uk-icon>" }`
- `{icon_name: "git-pull-request-closed", synonyms: [code, version control, rejected, closed, cancelled, x], usage: "<uk-icon icon=\"git-pull-request-closed\"></uk-icon>" }`
- `{icon_name: "git-pull-request-create-arrow", synonyms: [code, version control, open, plus, add, +], usage: "<uk-icon icon=\"git-pull-request-create-arrow\"></uk-icon>" }`
- `{icon_name: "git-pull-request-create", synonyms: [code, version control, open, plus, add, +], usage: "<uk-icon icon=\"git-pull-request-create\"></uk-icon>" }`
- `{icon_name: "git-pull-request-draft", synonyms: [code, version control, open, draft, dashed], usage: "<uk-icon icon=\"git-pull-request-draft\"></uk-icon>" }`
- `{icon_name: "git-pull-request", synonyms: [code, version control, open], usage: "<uk-icon icon=\"git-pull-request\"></uk-icon>" }`
- `{icon_name: "github", synonyms: [logo, version control], usage: "<uk-icon icon=\"github\"></uk-icon>" }`
- `{icon_name: "gitlab", synonyms: [logo, version control], usage: "<uk-icon icon=\"gitlab\"></uk-icon>" }`
- `{icon_name: "glass-water", synonyms: [beverage, drink, glass, water], usage: "<uk-icon icon=\"glass-water\"></uk-icon>" }`
- `{icon_name: "glasses", synonyms: [glasses, spectacles], usage: "<uk-icon icon=\"glasses\"></uk-icon>" }`
- `{icon_name: "globe-lock", synonyms: [vpn, private, privacy, network, world, browser, security, encryption, protection, connection], usage: "<uk-icon icon=\"globe-lock\"></uk-icon>" }`
- `{icon_name: "globe", synonyms: [world, browser, language, translate], usage: "<uk-icon icon=\"globe\"></uk-icon>" }`
- `{icon_name: "goal", synonyms: [flag, bullseye], usage: "<uk-icon icon=\"goal\"></uk-icon>" }`
- `{icon_name: "grab", synonyms: [hand], usage: "<uk-icon icon=\"grab\"></uk-icon>" }`
- `{icon_name: "graduation-cap", synonyms: [school, university, learn, study, mortarboard, education, ceremony, academic, hat, diploma, bachlor's, master's, doctorate], usage: "<uk-icon icon=\"graduation-cap\"></uk-icon>" }`
- `{icon_name: "grape", synonyms: [fruit, wine, food], usage: "<uk-icon icon=\"grape\"></uk-icon>" }`
- `{icon_name: "grid-2x2-check", synonyms: [table, rows, columns, blocks, plot, land, geometry, measure, data, size, width, height, distance, surface area, square meter, acre], usage: "<uk-icon icon=\"grid-2x2-check\"></uk-icon>" }`
- `{icon_name: "grid-2x2-plus", synonyms: [table, rows, columns, blocks, plot, land, geometry, measure, data, size, width, height, distance, surface area, square meter, acre], usage: "<uk-icon icon=\"grid-2x2-plus\"></uk-icon>" }`
- `{icon_name: "grid-2x2-x", synonyms: [table, rows, columns, data, blocks, plot, land, geometry, measure, size, width, height, distance, surface area, square meter, acre], usage: "<uk-icon icon=\"grid-2x2-x\"></uk-icon>" }`
- `{icon_name: "grid-2x2", synonyms: [table, rows, columns, blocks, plot, land, geometry, measure, size, width, height, distance, surface area, square meter, acre, window, skylight], usage: "<uk-icon icon=\"grid-2x2\"></uk-icon>" }`
- `{icon_name: "grid-3x3", synonyms: [table, rows, columns], usage: "<uk-icon icon=\"grid-3x3\"></uk-icon>" }`
- `{icon_name: "grip-horizontal", synonyms: [grab, dots, handle, move, drag], usage: "<uk-icon icon=\"grip-horizontal\"></uk-icon>" }`
- `{icon_name: "grip-vertical", synonyms: [grab, dots, handle, move, drag], usage: "<uk-icon icon=\"grip-vertical\"></uk-icon>" }`
- `{icon_name: "grip", synonyms: [grab, dots, handle, move, drag], usage: "<uk-icon icon=\"grip\"></uk-icon>" }`
- `{icon_name: "group", synonyms: [cubes, packages, parts, units, collection, cluster, gather, dashed], usage: "<uk-icon icon=\"group\"></uk-icon>" }`
- `{icon_name: "guitar", synonyms: [acoustic, instrument, strings, riff, rock, band, country, concert, performance, play, lead, loud, music, audio, sound, noise], usage: "<uk-icon icon=\"guitar\"></uk-icon>" }`
- `{icon_name: "ham", synonyms: [food, pork, pig, meat, bone, hock, knuckle, gammon, cured], usage: "<uk-icon icon=\"ham\"></uk-icon>" }`
- `{icon_name: "hammer", synonyms: [mallet, nails, diy, toolbox, build, construction], usage: "<uk-icon icon=\"hammer\"></uk-icon>" }`
- `{icon_name: "hand-coins", synonyms: [savings, banking, money, finance, offers, mortgage, payment, received, wage, payroll, allowance, pocket money, handout, pennies], usage: "<uk-icon icon=\"hand-coins\"></uk-icon>" }`
- `{icon_name: "hand-heart", synonyms: [love, like, emotion], usage: "<uk-icon icon=\"hand-heart\"></uk-icon>" }`
- `{icon_name: "hand-helping", synonyms: [agreement, help, proposal, charity, begging, terms], usage: "<uk-icon icon=\"hand-helping\"></uk-icon>" }`
- `{icon_name: "hand-metal", synonyms: [rock], usage: "<uk-icon icon=\"hand-metal\"></uk-icon>" }`
- `{icon_name: "hand-platter", synonyms: [waiter, waitress, restaurant, table service, served, dinner, dining, meal, course, luxury], usage: "<uk-icon icon=\"hand-platter\"></uk-icon>" }`
- `{icon_name: "hand", synonyms: [wave, move, mouse, grab], usage: "<uk-icon icon=\"hand\"></uk-icon>" }`
- `{icon_name: "handshake", synonyms: [agreement, partnership, deal, business, assistance, cooperation, friendship, union, terms], usage: "<uk-icon icon=\"handshake\"></uk-icon>" }`
- `{icon_name: "hard-drive-download", synonyms: [computer, server, memory, data, ssd, disk, hard disk, save], usage: "<uk-icon icon=\"hard-drive-download\"></uk-icon>" }`
- `{icon_name: "hard-drive-upload", synonyms: [computer, server, memory, data, ssd, disk, hard disk, save], usage: "<uk-icon icon=\"hard-drive-upload\"></uk-icon>" }`
- `{icon_name: "hard-drive", synonyms: [computer, server, memory, data, ssd, disk, hard disk], usage: "<uk-icon icon=\"hard-drive\"></uk-icon>" }`
- `{icon_name: "hard-hat", synonyms: [helmet, construction, safety, savety], usage: "<uk-icon icon=\"hard-hat\"></uk-icon>" }`
- `{icon_name: "hash", synonyms: [hashtag, number, pound], usage: "<uk-icon icon=\"hash\"></uk-icon>" }`
- `{icon_name: "haze", synonyms: [mist, fog], usage: "<uk-icon icon=\"haze\"></uk-icon>" }`
- `{icon_name: "hdmi-port", synonyms: [socket, plug, slot, controller, connector, interface, console, signal, audio, video, visual, av, data, input, output], usage: "<uk-icon icon=\"hdmi-port\"></uk-icon>" }`
- `{icon_name: "heading-1", synonyms: [h1, html, markup, markdown], usage: "<uk-icon icon=\"heading-1\"></uk-icon>" }`
- `{icon_name: "heading-2", synonyms: [h2, html, markup, markdown], usage: "<uk-icon icon=\"heading-2\"></uk-icon>" }`
- `{icon_name: "heading-3", synonyms: [h3, html, markup, markdown], usage: "<uk-icon icon=\"heading-3\"></uk-icon>" }`
- `{icon_name: "heading-4", synonyms: [h4, html, markup, markdown], usage: "<uk-icon icon=\"heading-4\"></uk-icon>" }`
- `{icon_name: "heading-5", synonyms: [h5, html, markup, markdown], usage: "<uk-icon icon=\"heading-5\"></uk-icon>" }`
- `{icon_name: "heading-6", synonyms: [h6, html, markup, markdown], usage: "<uk-icon icon=\"heading-6\"></uk-icon>" }`
- `{icon_name: "heading", synonyms: [h1, html, markup, markdown], usage: "<uk-icon icon=\"heading\"></uk-icon>" }`
- `{icon_name: "headphone-off", synonyms: [music, audio, sound, mute, off], usage: "<uk-icon icon=\"headphone-off\"></uk-icon>" }`
- `{icon_name: "headphones", synonyms: [music, audio, sound], usage: "<uk-icon icon=\"headphones\"></uk-icon>" }`
- `{icon_name: "headset", synonyms: [music, audio, sound, gaming, headphones, headset, call, center, phone, telephone, voip, video], usage: "<uk-icon icon=\"headset\"></uk-icon>" }`
- `{icon_name: "heart-crack", synonyms: [heartbreak, sadness, emotion], usage: "<uk-icon icon=\"heart-crack\"></uk-icon>" }`
- `{icon_name: "heart-handshake", synonyms: [agreement, charity, help, deal, terms, emotion, together, handshake], usage: "<uk-icon icon=\"heart-handshake\"></uk-icon>" }`
- `{icon_name: "heart-minus", synonyms: [unlike, unfavorite, remove, damage, ui & ux], usage: "<uk-icon icon=\"heart-minus\"></uk-icon>" }`
- `{icon_name: "heart-off", synonyms: [unlike, dislike, hate, emotion], usage: "<uk-icon icon=\"heart-off\"></uk-icon>" }`
- `{icon_name: "heart-plus", synonyms: [plus, like, favorite, add, health, support], usage: "<uk-icon icon=\"heart-plus\"></uk-icon>" }`
- `{icon_name: "heart-pulse", synonyms: [heartbeat, pulse, health, medical, blood pressure, cardiac, systole, diastole], usage: "<uk-icon icon=\"heart-pulse\"></uk-icon>" }`
- `{icon_name: "heart", synonyms: [like, love, emotion, suit, playing, cards], usage: "<uk-icon icon=\"heart\"></uk-icon>" }`
- `{icon_name: "heater", synonyms: [heating, warmth, comfort, fire, stove, electric, electronics, amenities], usage: "<uk-icon icon=\"heater\"></uk-icon>" }`
- `{icon_name: "hexagon", synonyms: [shape, node.js, logo], usage: "<uk-icon icon=\"hexagon\"></uk-icon>" }`
- `{icon_name: "highlighter", synonyms: [mark, text], usage: "<uk-icon icon=\"highlighter\"></uk-icon>" }`
- `{icon_name: "history", synonyms: [time, redo, undo, rewind, timeline, version, time machine, backup, rotate, ccw], usage: "<uk-icon icon=\"history\"></uk-icon>" }`
- `{icon_name: "hop-off", synonyms: [beer, brewery, drink, hop free, allergy, intolerance, diet], usage: "<uk-icon icon=\"hop-off\"></uk-icon>" }`
- `{icon_name: "hop", synonyms: [beer, brewery, drink], usage: "<uk-icon icon=\"hop\"></uk-icon>" }`
- `{icon_name: "hospital", synonyms: [infirmary, sanatorium, healthcare, doctor, hospice, clinic, emergency room, ward, building, medical, vet], usage: "<uk-icon icon=\"hospital\"></uk-icon>" }`
- `{icon_name: "hotel", synonyms: [building, hostel, motel, inn], usage: "<uk-icon icon=\"hotel\"></uk-icon>" }`
- `{icon_name: "hourglass", synonyms: [timer, time, sandglass], usage: "<uk-icon icon=\"hourglass\"></uk-icon>" }`
- `{icon_name: "house-plug", synonyms: [home, living, building, residence, architecture, autarky, energy], usage: "<uk-icon icon=\"house-plug\"></uk-icon>" }`
- `{icon_name: "house-plus", synonyms: [home, living, medical, new, addition, building, residence, architecture], usage: "<uk-icon icon=\"house-plus\"></uk-icon>" }`
- `{icon_name: "house-wifi", synonyms: [home, living, building, wifi, connectivity], usage: "<uk-icon icon=\"house-wifi\"></uk-icon>" }`
- `{icon_name: "house", synonyms: [home, living, building, residence, architecture], usage: "<uk-icon icon=\"house\"></uk-icon>" }`
- `{icon_name: "ice-cream-bowl", synonyms: [gelato, food, dessert, dish, restaurant, course, meal], usage: "<uk-icon icon=\"ice-cream-bowl\"></uk-icon>" }`
- `{icon_name: "ice-cream-cone", synonyms: [gelato, food], usage: "<uk-icon icon=\"ice-cream-cone\"></uk-icon>" }`
- `{icon_name: "id-card", synonyms: [card, badge, identity, authentication, secure], usage: "<uk-icon icon=\"id-card\"></uk-icon>" }`
- `{icon_name: "image-down", synonyms: [picture, photo, download, save, export], usage: "<uk-icon icon=\"image-down\"></uk-icon>" }`
- `{icon_name: "image-minus", synonyms: [remove, delete], usage: "<uk-icon icon=\"image-minus\"></uk-icon>" }`
- `{icon_name: "image-off", synonyms: [picture, photo], usage: "<uk-icon icon=\"image-off\"></uk-icon>" }`
- `{icon_name: "image-play", synonyms: [picture, gif, photo], usage: "<uk-icon icon=\"image-play\"></uk-icon>" }`
- `{icon_name: "image-plus", synonyms: [add, create, picture], usage: "<uk-icon icon=\"image-plus\"></uk-icon>" }`
- `{icon_name: "image-up", synonyms: [picture, photo, upload, import], usage: "<uk-icon icon=\"image-up\"></uk-icon>" }`
- `{icon_name: "image-upscale", synonyms: [resize, picture, sharpen, increase], usage: "<uk-icon icon=\"image-upscale\"></uk-icon>" }`
- `{icon_name: "image", synonyms: [picture, photo], usage: "<uk-icon icon=\"image\"></uk-icon>" }`
- `{icon_name: "images", synonyms: [picture, photo, multiple, copy, gallery, album, collection, slideshow, showcase], usage: "<uk-icon icon=\"images\"></uk-icon>" }`
- `{icon_name: "import", synonyms: [save], usage: "<uk-icon icon=\"import\"></uk-icon>" }`
- `{icon_name: "inbox", synonyms: [email], usage: "<uk-icon icon=\"inbox\"></uk-icon>" }`
- `{icon_name: "indent-decrease", synonyms: [text, tab], usage: "<uk-icon icon=\"indent-decrease\"></uk-icon>" }`
- `{icon_name: "indent-increase", synonyms: [text, tab], usage: "<uk-icon icon=\"indent-increase\"></uk-icon>" }`
- `{icon_name: "indian-rupee", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"indian-rupee\"></uk-icon>" }`
- `{icon_name: "infinity", synonyms: [unlimited, forever, loop, math], usage: "<uk-icon icon=\"infinity\"></uk-icon>" }`
- `{icon_name: "info", synonyms: [help], usage: "<uk-icon icon=\"info\"></uk-icon>" }`
- `{icon_name: "inspection-panel", synonyms: [access, cover, tile, metal, materials, screws], usage: "<uk-icon icon=\"inspection-panel\"></uk-icon>" }`
- `{icon_name: "instagram", synonyms: [logo, camera, social], usage: "<uk-icon icon=\"instagram\"></uk-icon>" }`
- `{icon_name: "italic", synonyms: [oblique, text, format], usage: "<uk-icon icon=\"italic\"></uk-icon>" }`
- `{icon_name: "iteration-ccw", synonyms: [arrow, right], usage: "<uk-icon icon=\"iteration-ccw\"></uk-icon>" }`
- `{icon_name: "iteration-cw", synonyms: [arrow, left], usage: "<uk-icon icon=\"iteration-cw\"></uk-icon>" }`
- `{icon_name: "japanese-yen", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"japanese-yen\"></uk-icon>" }`
- `{icon_name: "joystick", synonyms: [game, console, control stick], usage: "<uk-icon icon=\"joystick\"></uk-icon>" }`
- `{icon_name: "kanban", synonyms: [projects, manage, overview, board, tickets, issues, roadmap, plan, intentions, productivity, work, agile, code, coding], usage: "<uk-icon icon=\"kanban\"></uk-icon>" }`
- `{icon_name: "key-round", synonyms: [password, login, authentication, secure, unlock], usage: "<uk-icon icon=\"key-round\"></uk-icon>" }`
- `{icon_name: "key-square", synonyms: [password, login, authentication, secure, unlock, car key], usage: "<uk-icon icon=\"key-square\"></uk-icon>" }`
- `{icon_name: "key", synonyms: [password, login, authentication, secure, unlock, keychain, key ring, fob], usage: "<uk-icon icon=\"key\"></uk-icon>" }`
- `{icon_name: "keyboard-music", synonyms: [music, audio, sound, noise, notes, keys, chord, octave, midi, controller, instrument, electric, signal, digital, studio, production, producer, pianist, piano, play, performance, concert], usage: "<uk-icon icon=\"keyboard-music\"></uk-icon>" }`
- `{icon_name: "keyboard-off", synonyms: [unkeys, layout, spell, settings, mouse], usage: "<uk-icon icon=\"keyboard-off\"></uk-icon>" }`
- `{icon_name: "keyboard", synonyms: [layout, spell, settings, mouse], usage: "<uk-icon icon=\"keyboard\"></uk-icon>" }`
- `{icon_name: "lamp-ceiling", synonyms: [lighting, household, home, furniture], usage: "<uk-icon icon=\"lamp-ceiling\"></uk-icon>" }`
- `{icon_name: "lamp-desk", synonyms: [lighting, household, office, desk, home, furniture], usage: "<uk-icon icon=\"lamp-desk\"></uk-icon>" }`
- `{icon_name: "lamp-floor", synonyms: [lighting, household, floor, home, furniture], usage: "<uk-icon icon=\"lamp-floor\"></uk-icon>" }`
- `{icon_name: "lamp-wall-down", synonyms: [lighting, household, wall, home, furniture], usage: "<uk-icon icon=\"lamp-wall-down\"></uk-icon>" }`
- `{icon_name: "lamp-wall-up", synonyms: [lighting, household, wall, home, furniture], usage: "<uk-icon icon=\"lamp-wall-up\"></uk-icon>" }`
- `{icon_name: "lamp", synonyms: [lighting, household, home, furniture], usage: "<uk-icon icon=\"lamp\"></uk-icon>" }`
- `{icon_name: "land-plot", synonyms: [area, surface, square metres, allotment, parcel, property, plane, acres, measure, distance, isometric, flag, golf course, hole], usage: "<uk-icon icon=\"land-plot\"></uk-icon>" }`
- `{icon_name: "landmark", synonyms: [bank, building, capitol, finance, money, government, institution], usage: "<uk-icon icon=\"landmark\"></uk-icon>" }`
- `{icon_name: "languages", synonyms: [translate], usage: "<uk-icon icon=\"languages\"></uk-icon>" }`
- `{icon_name: "laptop-minimal-check", synonyms: [computer, screen, remote, success, done, todo, tick, complete, task], usage: "<uk-icon icon=\"laptop-minimal-check\"></uk-icon>" }`
- `{icon_name: "laptop-minimal", synonyms: [computer, screen, remote], usage: "<uk-icon icon=\"laptop-minimal\"></uk-icon>" }`
- `{icon_name: "laptop", synonyms: [computer, screen, remote], usage: "<uk-icon icon=\"laptop\"></uk-icon>" }`
- `{icon_name: "lasso-select", synonyms: [select, cursor], usage: "<uk-icon icon=\"lasso-select\"></uk-icon>" }`
- `{icon_name: "lasso", synonyms: [select, cursor], usage: "<uk-icon icon=\"lasso\"></uk-icon>" }`
- `{icon_name: "laugh", synonyms: [emoji, face, happy, good, emotion], usage: "<uk-icon icon=\"laugh\"></uk-icon>" }`
- `{icon_name: "layers-2", synonyms: [stack, pile, pages, sheets, paperwork, copies, copy, duplicate, double, shortcuts], usage: "<uk-icon icon=\"layers-2\"></uk-icon>" }`
- `{icon_name: "layers", synonyms: [stack, pile, pages, sheets, paperwork, copies, copy], usage: "<uk-icon icon=\"layers\"></uk-icon>" }`
- `{icon_name: "layout-dashboard", synonyms: [masonry, brick], usage: "<uk-icon icon=\"layout-dashboard\"></uk-icon>" }`
- `{icon_name: "layout-grid", synonyms: [app, home, start], usage: "<uk-icon icon=\"layout-grid\"></uk-icon>" }`
- `{icon_name: "layout-list", synonyms: [todo, tasks, items, pending, image, photo], usage: "<uk-icon icon=\"layout-list\"></uk-icon>" }`
- `{icon_name: "layout-panel-left", synonyms: [app, home, start, grid], usage: "<uk-icon icon=\"layout-panel-left\"></uk-icon>" }`
- `{icon_name: "layout-panel-top", synonyms: [window, webpage, block, section, grid, template, structure], usage: "<uk-icon icon=\"layout-panel-top\"></uk-icon>" }`
- `{icon_name: "layout-template", synonyms: [window, webpage, block, section], usage: "<uk-icon icon=\"layout-template\"></uk-icon>" }`
- `{icon_name: "leaf", synonyms: [sustainability, nature, energy, plant, autumn], usage: "<uk-icon icon=\"leaf\"></uk-icon>" }`
- `{icon_name: "leafy-green", synonyms: [salad, lettuce, vegetable, chard, cabbage, bok choy], usage: "<uk-icon icon=\"leafy-green\"></uk-icon>" }`
- `{icon_name: "lectern", synonyms: [pulpit, podium, stand], usage: "<uk-icon icon=\"lectern\"></uk-icon>" }`
- `{icon_name: "letter-text", synonyms: [drop cap, text, format, typography, letter, font size], usage: "<uk-icon icon=\"letter-text\"></uk-icon>" }`
- `{icon_name: "library-big", synonyms: [books, reading, written, authors, stories, fiction, novels, information, knowledge, education, high school, university, college, academy, learning, study, research, collection, vinyl, records, albums, music, package], usage: "<uk-icon icon=\"library-big\"></uk-icon>" }`
- `{icon_name: "library", synonyms: [books, reading, written, authors, stories, fiction, novels, information, knowledge, education, high school, university, college, academy, learning, study, research, collection, vinyl, records, albums, music, package], usage: "<uk-icon icon=\"library\"></uk-icon>" }`
- `{icon_name: "life-buoy", synonyms: [preserver, life belt, lifesaver, help, rescue, ship, ring, raft, inflatable, wheel, donut], usage: "<uk-icon icon=\"life-buoy\"></uk-icon>" }`
- `{icon_name: "ligature", synonyms: [text, font, typography, alternates, alternatives], usage: "<uk-icon icon=\"ligature\"></uk-icon>" }`
- `{icon_name: "lightbulb-off", synonyms: [lights], usage: "<uk-icon icon=\"lightbulb-off\"></uk-icon>" }`
- `{icon_name: "lightbulb", synonyms: [idea, bright, lights], usage: "<uk-icon icon=\"lightbulb\"></uk-icon>" }`
- `{icon_name: "link-2-off", synonyms: [unchain, chain], usage: "<uk-icon icon=\"link-2-off\"></uk-icon>" }`
- `{icon_name: "link-2", synonyms: [chain, url], usage: "<uk-icon icon=\"link-2\"></uk-icon>" }`
- `{icon_name: "link", synonyms: [chain, url], usage: "<uk-icon icon=\"link\"></uk-icon>" }`
- `{icon_name: "linkedin", synonyms: [logo, social media, social], usage: "<uk-icon icon=\"linkedin\"></uk-icon>" }`
- `{icon_name: "list-check", synonyms: [done, check, tick, complete, list, to-do, bom], usage: "<uk-icon icon=\"list-check\"></uk-icon>" }`
- `{icon_name: "list-checks", synonyms: [todo, done, check, tick, complete, tasks, items, pending], usage: "<uk-icon icon=\"list-checks\"></uk-icon>" }`
- `{icon_name: "list-collapse", synonyms: [items, collapse, expand, details, disclosure, show, hide, toggle, accordion, more, less, fold, unfold], usage: "<uk-icon icon=\"list-collapse\"></uk-icon>" }`
- `{icon_name: "list-end", synonyms: [queue, bottom, end, playlist], usage: "<uk-icon icon=\"list-end\"></uk-icon>" }`
- `{icon_name: "list-filter-plus", synonyms: [filter, plus, options, add], usage: "<uk-icon icon=\"list-filter-plus\"></uk-icon>" }`
- `{icon_name: "list-filter", synonyms: [options], usage: "<uk-icon icon=\"list-filter\"></uk-icon>" }`
- `{icon_name: "list-minus", synonyms: [playlist, remove, song, subtract, delete, unqueue], usage: "<uk-icon icon=\"list-minus\"></uk-icon>" }`
- `{icon_name: "list-music", synonyms: [playlist, queue, music, audio, playback], usage: "<uk-icon icon=\"list-music\"></uk-icon>" }`
- `{icon_name: "list-ordered", synonyms: [number, order, queue], usage: "<uk-icon icon=\"list-ordered\"></uk-icon>" }`
- `{icon_name: "list-plus", synonyms: [playlist, add, song, track, new], usage: "<uk-icon icon=\"list-plus\"></uk-icon>" }`
- `{icon_name: "list-restart", synonyms: [reset, refresh, reload, playlist, replay], usage: "<uk-icon icon=\"list-restart\"></uk-icon>" }`
- `{icon_name: "list-start", synonyms: [queue, top, start, next, playlist], usage: "<uk-icon icon=\"list-start\"></uk-icon>" }`
- `{icon_name: "list-todo", synonyms: [todo, done, check, tick, complete, tasks, items, pending], usage: "<uk-icon icon=\"list-todo\"></uk-icon>" }`
- `{icon_name: "list-tree", synonyms: [tree, browser], usage: "<uk-icon icon=\"list-tree\"></uk-icon>" }`
- `{icon_name: "list-video", synonyms: [playlist, video, playback], usage: "<uk-icon icon=\"list-video\"></uk-icon>" }`
- `{icon_name: "list-x", synonyms: [playlist, subtract, remove, delete, unqueue], usage: "<uk-icon icon=\"list-x\"></uk-icon>" }`
- `{icon_name: "list", synonyms: [options], usage: "<uk-icon icon=\"list\"></uk-icon>" }`
- `{icon_name: "loader-circle", synonyms: [loading, wait, busy, progress, spinner, spinning, throbber, circle], usage: "<uk-icon icon=\"loader-circle\"></uk-icon>" }`
- `{icon_name: "loader-pinwheel", synonyms: [loading, wait, busy, progress, throbber, spinner, spinning, beach ball, frozen, freeze], usage: "<uk-icon icon=\"loader-pinwheel\"></uk-icon>" }`
- `{icon_name: "loader", synonyms: [loading, wait, busy, progress, spinner, spinning, throbber], usage: "<uk-icon icon=\"loader\"></uk-icon>" }`
- `{icon_name: "locate-fixed", synonyms: [map, gps, location, cross], usage: "<uk-icon icon=\"locate-fixed\"></uk-icon>" }`
- `{icon_name: "locate-off", synonyms: [map, gps, location, cross], usage: "<uk-icon icon=\"locate-off\"></uk-icon>" }`
- `{icon_name: "locate", synonyms: [map, gps, location, cross], usage: "<uk-icon icon=\"locate\"></uk-icon>" }`
- `{icon_name: "location-edit", synonyms: [location, waypoint, marker, drop, edit], usage: "<uk-icon icon=\"location-edit\"></uk-icon>" }`
- `{icon_name: "lock-keyhole-open", synonyms: [security], usage: "<uk-icon icon=\"lock-keyhole-open\"></uk-icon>" }`
- `{icon_name: "lock-keyhole", synonyms: [security, password, secure, admin], usage: "<uk-icon icon=\"lock-keyhole\"></uk-icon>" }`
- `{icon_name: "lock-open", synonyms: [security], usage: "<uk-icon icon=\"lock-open\"></uk-icon>" }`
- `{icon_name: "lock", synonyms: [security, password, secure, admin], usage: "<uk-icon icon=\"lock\"></uk-icon>" }`
- `{icon_name: "log-in", synonyms: [sign in, arrow, enter, auth], usage: "<uk-icon icon=\"log-in\"></uk-icon>" }`
- `{icon_name: "log-out", synonyms: [sign out, arrow, exit, auth], usage: "<uk-icon icon=\"log-out\"></uk-icon>" }`
- `{icon_name: "logs", synonyms: [options, list, menu, order, queue, tasks, logs], usage: "<uk-icon icon=\"logs\"></uk-icon>" }`
- `{icon_name: "lollipop", synonyms: [lolly, candy, sugar, food, sweet, dessert, spiral], usage: "<uk-icon icon=\"lollipop\"></uk-icon>" }`
- `{icon_name: "luggage", synonyms: [baggage, luggage, travel, suitcase], usage: "<uk-icon icon=\"luggage\"></uk-icon>" }`
- `{icon_name: "magnet", synonyms: [horseshoe, lock, science, snap], usage: "<uk-icon icon=\"magnet\"></uk-icon>" }`
- `{icon_name: "mail-check", synonyms: [email, message, letter, subscribe, delivered, success, read, done, todo, tick, complete, task], usage: "<uk-icon icon=\"mail-check\"></uk-icon>" }`
- `{icon_name: "mail-minus", synonyms: [email, message, letter, remove, delete], usage: "<uk-icon icon=\"mail-minus\"></uk-icon>" }`
- `{icon_name: "mail-open", synonyms: [email, message, letter, read], usage: "<uk-icon icon=\"mail-open\"></uk-icon>" }`
- `{icon_name: "mail-plus", synonyms: [email, message, letter, add, create, new, compose], usage: "<uk-icon icon=\"mail-plus\"></uk-icon>" }`
- `{icon_name: "mail-question", synonyms: [email, message, letter, delivery, undelivered], usage: "<uk-icon icon=\"mail-question\"></uk-icon>" }`
- `{icon_name: "mail-search", synonyms: [email, message, letter, search], usage: "<uk-icon icon=\"mail-search\"></uk-icon>" }`
- `{icon_name: "mail-warning", synonyms: [email, message, letter, delivery error, exclamation mark], usage: "<uk-icon icon=\"mail-warning\"></uk-icon>" }`
- `{icon_name: "mail-x", synonyms: [email, message, letter, remove, delete], usage: "<uk-icon icon=\"mail-x\"></uk-icon>" }`
- `{icon_name: "mail", synonyms: [email, message, letter, unread], usage: "<uk-icon icon=\"mail\"></uk-icon>" }`
- `{icon_name: "mailbox", synonyms: [emails, messages, letters, mailing list, newsletter], usage: "<uk-icon icon=\"mailbox\"></uk-icon>" }`
- `{icon_name: "mails", synonyms: [emails, messages, letters, multiple, mailing list, newsletter, copy], usage: "<uk-icon icon=\"mails\"></uk-icon>" }`
- `{icon_name: "map-pin-check-inside", synonyms: [location, waypoint, marker, drop, done, tick, complete, task, added], usage: "<uk-icon icon=\"map-pin-check-inside\"></uk-icon>" }`
- `{icon_name: "map-pin-check", synonyms: [location, waypoint, marker, drop, done, tick, complete, task, added], usage: "<uk-icon icon=\"map-pin-check\"></uk-icon>" }`
- `{icon_name: "map-pin-house", synonyms: [location, waypoint, marker, drop, home, living, building, residence, architecture, address, poi, real estate, property, navigation, destination, geolocation, place, landmark], usage: "<uk-icon icon=\"map-pin-house\"></uk-icon>" }`
- `{icon_name: "map-pin-minus-inside", synonyms: [location, waypoint, marker, drop, delete, remove, erase], usage: "<uk-icon icon=\"map-pin-minus-inside\"></uk-icon>" }`
- `{icon_name: "map-pin-minus", synonyms: [location, waypoint, marker, drop, delete, remove, erase], usage: "<uk-icon icon=\"map-pin-minus\"></uk-icon>" }`
- `{icon_name: "map-pin-off", synonyms: [location, waypoint, marker, remove], usage: "<uk-icon icon=\"map-pin-off\"></uk-icon>" }`
- `{icon_name: "map-pin-plus-inside", synonyms: [location, waypoint, marker, drop, add, create, new], usage: "<uk-icon icon=\"map-pin-plus-inside\"></uk-icon>" }`
- `{icon_name: "map-pin-plus", synonyms: [location, waypoint, marker, drop, add, create, new], usage: "<uk-icon icon=\"map-pin-plus\"></uk-icon>" }`
- `{icon_name: "map-pin-x-inside", synonyms: [location, waypoint, marker, drop, delete, remove, erase], usage: "<uk-icon icon=\"map-pin-x-inside\"></uk-icon>" }`
- `{icon_name: "map-pin-x", synonyms: [location, waypoint, marker, drop, delete, remove, erase], usage: "<uk-icon icon=\"map-pin-x\"></uk-icon>" }`
- `{icon_name: "map-pin", synonyms: [location, waypoint, marker, drop], usage: "<uk-icon icon=\"map-pin\"></uk-icon>" }`
- `{icon_name: "map-pinned", synonyms: [location, waypoint, marker, drop], usage: "<uk-icon icon=\"map-pinned\"></uk-icon>" }`
- `{icon_name: "map-plus", synonyms: [location, navigation, travel, new, add, create], usage: "<uk-icon icon=\"map-plus\"></uk-icon>" }`
- `{icon_name: "map", synonyms: [location, navigation, travel], usage: "<uk-icon icon=\"map\"></uk-icon>" }`
- `{icon_name: "mars-stroke", synonyms: [gender, androgyne, transgender], usage: "<uk-icon icon=\"mars-stroke\"></uk-icon>" }`
- `{icon_name: "mars", synonyms: [gender, sex, male, masculine, man, boy], usage: "<uk-icon icon=\"mars\"></uk-icon>" }`
- `{icon_name: "martini", synonyms: [cocktail, alcohol, beverage, bar, drink, glass], usage: "<uk-icon icon=\"martini\"></uk-icon>" }`
- `{icon_name: "maximize-2", synonyms: [fullscreen, arrows, expand], usage: "<uk-icon icon=\"maximize-2\"></uk-icon>" }`
- `{icon_name: "maximize", synonyms: [fullscreen, expand, dashed], usage: "<uk-icon icon=\"maximize\"></uk-icon>" }`
- `{icon_name: "medal", synonyms: [prize, sports, winner, trophy, award, achievement], usage: "<uk-icon icon=\"medal\"></uk-icon>" }`
- `{icon_name: "megaphone-off", synonyms: [advertisement, attention, alert, notification, disable, silent], usage: "<uk-icon icon=\"megaphone-off\"></uk-icon>" }`
- `{icon_name: "megaphone", synonyms: [advertisement, attention, alert, notification], usage: "<uk-icon icon=\"megaphone\"></uk-icon>" }`
- `{icon_name: "meh", synonyms: [emoji, face, neutral, emotion], usage: "<uk-icon icon=\"meh\"></uk-icon>" }`
- `{icon_name: "memory-stick", synonyms: [ram, random access, technology, computer, chip, circuit, specs, capacity, gigabytes, gb], usage: "<uk-icon icon=\"memory-stick\"></uk-icon>" }`
- `{icon_name: "menu", synonyms: [bars, navigation, hamburger, options], usage: "<uk-icon icon=\"menu\"></uk-icon>" }`
- `{icon_name: "merge", synonyms: [combine, join, unite], usage: "<uk-icon icon=\"merge\"></uk-icon>" }`
- `{icon_name: "message-circle-code", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, code review, coding], usage: "<uk-icon icon=\"message-circle-code\"></uk-icon>" }`
- `{icon_name: "message-circle-dashed", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, draft], usage: "<uk-icon icon=\"message-circle-dashed\"></uk-icon>" }`
- `{icon_name: "message-circle-heart", synonyms: [comment, chat, conversation, dialog, feedback, positive, like, love, interest, valentine, dating, date, speech bubble], usage: "<uk-icon icon=\"message-circle-heart\"></uk-icon>" }`
- `{icon_name: "message-circle-more", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, typing, writing, responding, ellipsis, etc, et cetera, ..., â€¦], usage: "<uk-icon icon=\"message-circle-more\"></uk-icon>" }`
- `{icon_name: "message-circle-off", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, clear, close, delete, remove, cancel, silence, mute, moderate], usage: "<uk-icon icon=\"message-circle-off\"></uk-icon>" }`
- `{icon_name: "message-circle-plus", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, add], usage: "<uk-icon icon=\"message-circle-plus\"></uk-icon>" }`
- `{icon_name: "message-circle-question", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, help], usage: "<uk-icon icon=\"message-circle-question\"></uk-icon>" }`
- `{icon_name: "message-circle-reply", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, reply, response], usage: "<uk-icon icon=\"message-circle-reply\"></uk-icon>" }`
- `{icon_name: "message-circle-warning", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, report, abuse, offense, alert, danger, caution, protected, exclamation mark], usage: "<uk-icon icon=\"message-circle-warning\"></uk-icon>" }`
- `{icon_name: "message-circle-x", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, clear, close, delete, remove, cancel, silence, mute, moderate], usage: "<uk-icon icon=\"message-circle-x\"></uk-icon>" }`
- `{icon_name: "message-circle", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble], usage: "<uk-icon icon=\"message-circle\"></uk-icon>" }`
- `{icon_name: "message-square-code", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, code review, coding], usage: "<uk-icon icon=\"message-square-code\"></uk-icon>" }`
- `{icon_name: "message-square-dashed", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, draft], usage: "<uk-icon icon=\"message-square-dashed\"></uk-icon>" }`
- `{icon_name: "message-square-diff", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, add, patch, difference, plus, minus, plus-minus, math, code review, coding, version control, git], usage: "<uk-icon icon=\"message-square-diff\"></uk-icon>" }`
- `{icon_name: "message-square-dot", synonyms: [unread, unresolved, comment, chat, conversation, dialog, feedback, speech bubble], usage: "<uk-icon icon=\"message-square-dot\"></uk-icon>" }`
- `{icon_name: "message-square-heart", synonyms: [comment, chat, conversation, dialog, feedback, positive, like, love, interest, valentine, dating, date, speech bubble], usage: "<uk-icon icon=\"message-square-heart\"></uk-icon>" }`
- `{icon_name: "message-square-lock", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, secure, encrypted], usage: "<uk-icon icon=\"message-square-lock\"></uk-icon>" }`
- `{icon_name: "message-square-more", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, typing, writing, responding, ellipsis, etc, et cetera, ..., â€¦], usage: "<uk-icon icon=\"message-square-more\"></uk-icon>" }`
- `{icon_name: "message-square-off", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, clear, close, delete, remove, cancel, silence, mute, moderate], usage: "<uk-icon icon=\"message-square-off\"></uk-icon>" }`
- `{icon_name: "message-square-plus", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, add], usage: "<uk-icon icon=\"message-square-plus\"></uk-icon>" }`
- `{icon_name: "message-square-quote", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, blockquote, quotation, indent, reply, response], usage: "<uk-icon icon=\"message-square-quote\"></uk-icon>" }`
- `{icon_name: "message-square-reply", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, reply, response], usage: "<uk-icon icon=\"message-square-reply\"></uk-icon>" }`
- `{icon_name: "message-square-share", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, network, forward], usage: "<uk-icon icon=\"message-square-share\"></uk-icon>" }`
- `{icon_name: "message-square-text", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble], usage: "<uk-icon icon=\"message-square-text\"></uk-icon>" }`
- `{icon_name: "message-square-warning", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, report, abuse, offense, alert, danger, caution, protected, exclamation mark], usage: "<uk-icon icon=\"message-square-warning\"></uk-icon>" }`
- `{icon_name: "message-square-x", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble, clear, close, delete, remove, cancel, silence, mute, moderate], usage: "<uk-icon icon=\"message-square-x\"></uk-icon>" }`
- `{icon_name: "message-square", synonyms: [comment, chat, conversation, dialog, feedback, speech bubble], usage: "<uk-icon icon=\"message-square\"></uk-icon>" }`
- `{icon_name: "messages-square", synonyms: [comment, chat, conversation, dialog, feedback, speech bubbles, copy, multiple], usage: "<uk-icon icon=\"messages-square\"></uk-icon>" }`
- `{icon_name: "mic-off", synonyms: [record, sound, mute, microphone], usage: "<uk-icon icon=\"mic-off\"></uk-icon>" }`
- `{icon_name: "mic-vocal", synonyms: [lyrics, voice, listen, sound, music, radio, podcast, karaoke, singing, microphone], usage: "<uk-icon icon=\"mic-vocal\"></uk-icon>" }`
- `{icon_name: "mic", synonyms: [record, sound, listen, radio, podcast, microphone], usage: "<uk-icon icon=\"mic\"></uk-icon>" }`
- `{icon_name: "microchip", synonyms: [processor, cores, technology, computer, chip, integrated circuit, memory, ram, specs, gpu, gigahertz, ghz], usage: "<uk-icon icon=\"microchip\"></uk-icon>" }`
- `{icon_name: "microscope", synonyms: [medical, education, science, imaging, research], usage: "<uk-icon icon=\"microscope\"></uk-icon>" }`
- `{icon_name: "microwave", synonyms: [oven, cooker, toaster oven, bake], usage: "<uk-icon icon=\"microwave\"></uk-icon>" }`
- `{icon_name: "milestone", synonyms: [signpost, direction, right, east, forward, version control, waypoint], usage: "<uk-icon icon=\"milestone\"></uk-icon>" }`
- `{icon_name: "milk-off", synonyms: [lactose free, bottle, beverage, drink, water, allergy, intolerance, diet], usage: "<uk-icon icon=\"milk-off\"></uk-icon>" }`
- `{icon_name: "milk", synonyms: [lactose, bottle, beverage, drink, water, diet], usage: "<uk-icon icon=\"milk\"></uk-icon>" }`
- `{icon_name: "minimize-2", synonyms: [exit fullscreen, arrows, close, shrink], usage: "<uk-icon icon=\"minimize-2\"></uk-icon>" }`
- `{icon_name: "minimize", synonyms: [exit fullscreen, close, shrink], usage: "<uk-icon icon=\"minimize\"></uk-icon>" }`
- `{icon_name: "minus", synonyms: [subtract, remove, decrease, decrement, reduce, negative, calculate, line, divider, separator, horizontal rule, hr, html, markup, markdown, ---, toolbar, operator, code, coding, minimum, downgrade], usage: "<uk-icon icon=\"minus\"></uk-icon>" }`
- `{icon_name: "monitor-check", synonyms: [tv, screen, display, desktop, running, active, virtual machine, vm], usage: "<uk-icon icon=\"monitor-check\"></uk-icon>" }`
- `{icon_name: "monitor-cog", synonyms: [tv, screen, display, virtual machine, vm, executable, settings, cog, edit, gear, configuration, preferences, system, control panel, network, computing], usage: "<uk-icon icon=\"monitor-cog\"></uk-icon>" }`
- `{icon_name: "monitor-dot", synonyms: [tv, screen, display, desktop, running, active, virtual machine, vm], usage: "<uk-icon icon=\"monitor-dot\"></uk-icon>" }`
- `{icon_name: "monitor-down", synonyms: [tv, screen, display, desktop, download], usage: "<uk-icon icon=\"monitor-down\"></uk-icon>" }`
- `{icon_name: "monitor-off", synonyms: [share], usage: "<uk-icon icon=\"monitor-off\"></uk-icon>" }`
- `{icon_name: "monitor-pause", synonyms: [tv, screen, display, desktop, video, movie, film, suspend, hibernate, boot, virtual machine, vm], usage: "<uk-icon icon=\"monitor-pause\"></uk-icon>" }`
- `{icon_name: "monitor-play", synonyms: [tv, screen, display, desktop, video, movie, film, running, start, boot, virtual machine, vm], usage: "<uk-icon icon=\"monitor-play\"></uk-icon>" }`
- `{icon_name: "monitor-smartphone", synonyms: [smartphone, phone, cellphone, device, mobile, desktop, monitor, responsive, screens], usage: "<uk-icon icon=\"monitor-smartphone\"></uk-icon>" }`
- `{icon_name: "monitor-speaker", synonyms: [devices, connect, cast], usage: "<uk-icon icon=\"monitor-speaker\"></uk-icon>" }`
- `{icon_name: "monitor-stop", synonyms: [tv, screen, display, desktop, video, movie, film, stop, shutdown, virtual machine, vm], usage: "<uk-icon icon=\"monitor-stop\"></uk-icon>" }`
- `{icon_name: "monitor-up", synonyms: [tv, screen, display, upload, connect, remote, screen share], usage: "<uk-icon icon=\"monitor-up\"></uk-icon>" }`
- `{icon_name: "monitor-x", synonyms: [tv, screen, display, desktop, virtual machine, vm, close, stop, suspend, remove, delete], usage: "<uk-icon icon=\"monitor-x\"></uk-icon>" }`
- `{icon_name: "monitor", synonyms: [tv, screen, display, virtual machine, vm], usage: "<uk-icon icon=\"monitor\"></uk-icon>" }`
- `{icon_name: "moon-star", synonyms: [dark, night, star], usage: "<uk-icon icon=\"moon-star\"></uk-icon>" }`
- `{icon_name: "moon", synonyms: [dark, night], usage: "<uk-icon icon=\"moon\"></uk-icon>" }`
- `{icon_name: "mountain-snow", synonyms: [alpine, climb, snow], usage: "<uk-icon icon=\"mountain-snow\"></uk-icon>" }`
- `{icon_name: "mountain", synonyms: [climb, hike, rock], usage: "<uk-icon icon=\"mountain\"></uk-icon>" }`
- `{icon_name: "mouse-off", synonyms: [device, scroll, click, disabled], usage: "<uk-icon icon=\"mouse-off\"></uk-icon>" }`
- `{icon_name: "mouse-pointer-2", synonyms: [click, select], usage: "<uk-icon icon=\"mouse-pointer-2\"></uk-icon>" }`
- `{icon_name: "mouse-pointer-ban", synonyms: [wait, busy, loading, blocked, frozen, freeze], usage: "<uk-icon icon=\"mouse-pointer-ban\"></uk-icon>" }`
- `{icon_name: "mouse-pointer-click", synonyms: [click, select], usage: "<uk-icon icon=\"mouse-pointer-click\"></uk-icon>" }`
- `{icon_name: "mouse-pointer", synonyms: [click, select], usage: "<uk-icon icon=\"mouse-pointer\"></uk-icon>" }`
- `{icon_name: "mouse", synonyms: [device, scroll, click], usage: "<uk-icon icon=\"mouse\"></uk-icon>" }`
- `{icon_name: "move-3d", synonyms: [arrows, axis, gizmo, coordinates, transform, translate], usage: "<uk-icon icon=\"move-3d\"></uk-icon>" }`
- `{icon_name: "move-diagonal-2", synonyms: [double, arrow], usage: "<uk-icon icon=\"move-diagonal-2\"></uk-icon>" }`
- `{icon_name: "move-diagonal", synonyms: [double, arrow], usage: "<uk-icon icon=\"move-diagonal\"></uk-icon>" }`
- `{icon_name: "move-down-left", synonyms: [arrow, direction], usage: "<uk-icon icon=\"move-down-left\"></uk-icon>" }`
- `{icon_name: "move-down-right", synonyms: [arrow, direction], usage: "<uk-icon icon=\"move-down-right\"></uk-icon>" }`
- `{icon_name: "move-down", synonyms: [arrow, direction, downwards, south], usage: "<uk-icon icon=\"move-down\"></uk-icon>" }`
- `{icon_name: "move-horizontal", synonyms: [double, arrow], usage: "<uk-icon icon=\"move-horizontal\"></uk-icon>" }`
- `{icon_name: "move-left", synonyms: [arrow, direction, back, west], usage: "<uk-icon icon=\"move-left\"></uk-icon>" }`
- `{icon_name: "move-right", synonyms: [arrow, direction, trend flat, east], usage: "<uk-icon icon=\"move-right\"></uk-icon>" }`
- `{icon_name: "move-up-left", synonyms: [arrow, direction], usage: "<uk-icon icon=\"move-up-left\"></uk-icon>" }`
- `{icon_name: "move-up-right", synonyms: [arrow, direction], usage: "<uk-icon icon=\"move-up-right\"></uk-icon>" }`
- `{icon_name: "move-up", synonyms: [arrow, direction, upwards, north], usage: "<uk-icon icon=\"move-up\"></uk-icon>" }`
- `{icon_name: "move-vertical", synonyms: [double, arrow], usage: "<uk-icon icon=\"move-vertical\"></uk-icon>" }`
- `{icon_name: "move", synonyms: [arrows], usage: "<uk-icon icon=\"move\"></uk-icon>" }`
- `{icon_name: "music-2", synonyms: [quaver, eighth note, note], usage: "<uk-icon icon=\"music-2\"></uk-icon>" }`
- `{icon_name: "music-3", synonyms: [crotchet, minim, quarter note, half note, note], usage: "<uk-icon icon=\"music-3\"></uk-icon>" }`
- `{icon_name: "music-4", synonyms: [semiquaver, sixteenth note, note], usage: "<uk-icon icon=\"music-4\"></uk-icon>" }`
- `{icon_name: "music", synonyms: [note, quaver, eighth note], usage: "<uk-icon icon=\"music\"></uk-icon>" }`
- `{icon_name: "navigation-2-off", synonyms: [location, travel], usage: "<uk-icon icon=\"navigation-2-off\"></uk-icon>" }`
- `{icon_name: "navigation-2", synonyms: [location, travel], usage: "<uk-icon icon=\"navigation-2\"></uk-icon>" }`
- `{icon_name: "navigation-off", synonyms: [location, travel], usage: "<uk-icon icon=\"navigation-off\"></uk-icon>" }`
- `{icon_name: "navigation", synonyms: [location, travel], usage: "<uk-icon icon=\"navigation\"></uk-icon>" }`
- `{icon_name: "network", synonyms: [tree], usage: "<uk-icon icon=\"network\"></uk-icon>" }`
- `{icon_name: "newspaper", synonyms: [news, feed, home, magazine, article, headline], usage: "<uk-icon icon=\"newspaper\"></uk-icon>" }`
- `{icon_name: "nfc", synonyms: [contactless, payment, near-field communication], usage: "<uk-icon icon=\"nfc\"></uk-icon>" }`
- `{icon_name: "non-binary", synonyms: [gender, nonbinary, enby], usage: "<uk-icon icon=\"non-binary\"></uk-icon>" }`
- `{icon_name: "notebook-pen", synonyms: [pencil, notepad, notes, noted, stationery, sketchbook, organizer, organiser, planner, diary, journal, writing, write, written, reading, high school, university, college, academy, student, study, research, homework, eraser, rubber], usage: "<uk-icon icon=\"notebook-pen\"></uk-icon>" }`
- `{icon_name: "notebook-tabs", synonyms: [notepad, notes, people, family, friends, acquaintances, contacts, details, addresses, phone numbers, directory, listing, networking, alphabetical, a-z, organizer, organiser, planner, diary, stationery], usage: "<uk-icon icon=\"notebook-tabs\"></uk-icon>" }`
- `{icon_name: "notebook-text", synonyms: [notepad, notes, pages, paper, stationery, sketchbook, organizer, organiser, planner, diary, journal, writing, write, written, reading, high school, university, college, academy, student, study, research, homework, lines, opened], usage: "<uk-icon icon=\"notebook-text\"></uk-icon>" }`
- `{icon_name: "notebook", synonyms: [notepad, notes, stationery, sketchbook, moleskine, closure, strap, band, elastic, organizer, organiser, planner, diary, journal, writing, written, writer, reading, high school, university, college, academy, student, study, homework, research], usage: "<uk-icon icon=\"notebook\"></uk-icon>" }`
- `{icon_name: "notepad-text-dashed", synonyms: [notebook, notes, pages, paper, stationery, diary, journal, writing, write, written, draft, template, lines], usage: "<uk-icon icon=\"notepad-text-dashed\"></uk-icon>" }`
- `{icon_name: "notepad-text", synonyms: [notebook, notes, pages, paper, stationery, sketchbook, organizer, organiser, planner, diary, journal, writing, write, written, reading, high school, university, college, academy, student, study, homework, research, lines, opened], usage: "<uk-icon icon=\"notepad-text\"></uk-icon>" }`
- `{icon_name: "nut-off", synonyms: [hazelnut, acorn, food, allergy, intolerance, diet], usage: "<uk-icon icon=\"nut-off\"></uk-icon>" }`
- `{icon_name: "nut", synonyms: [hazelnut, acorn, food, diet], usage: "<uk-icon icon=\"nut\"></uk-icon>" }`
- `{icon_name: "octagon-alert", synonyms: [warning, alert, danger, exclamation mark], usage: "<uk-icon icon=\"octagon-alert\"></uk-icon>" }`
- `{icon_name: "octagon-minus", synonyms: [stop, forbidden, subtract, remove, decrease, reduce, -, traffic, halt, restricted], usage: "<uk-icon icon=\"octagon-minus\"></uk-icon>" }`
- `{icon_name: "octagon-pause", synonyms: [music, audio, stop], usage: "<uk-icon icon=\"octagon-pause\"></uk-icon>" }`
- `{icon_name: "octagon-x", synonyms: [delete, stop, alert, warning, times, clear, math], usage: "<uk-icon icon=\"octagon-x\"></uk-icon>" }`
- `{icon_name: "octagon", synonyms: [stop, shape], usage: "<uk-icon icon=\"octagon\"></uk-icon>" }`
- `{icon_name: "omega", synonyms: [greek, symbol, mathematics, education, physics, engineering, ohms, electrical resistance, angular frequency, dynamical systems, astronomy, constellations, philosophy], usage: "<uk-icon icon=\"omega\"></uk-icon>" }`
- `{icon_name: "option", synonyms: [keyboard, key, mac, alt, button], usage: "<uk-icon icon=\"option\"></uk-icon>" }`
- `{icon_name: "orbit", synonyms: [planet, space, physics, satellites, moons], usage: "<uk-icon icon=\"orbit\"></uk-icon>" }`
- `{icon_name: "origami", synonyms: [paper, bird], usage: "<uk-icon icon=\"origami\"></uk-icon>" }`
- `{icon_name: "package-2", synonyms: [box, container, storage, sealed, packed, unopened, undelivered, archive, zip], usage: "<uk-icon icon=\"package-2\"></uk-icon>" }`
- `{icon_name: "package-check", synonyms: [confirm, verified, done, todo, tick, complete, task, delivered], usage: "<uk-icon icon=\"package-check\"></uk-icon>" }`
- `{icon_name: "package-minus", synonyms: [delete, remove], usage: "<uk-icon icon=\"package-minus\"></uk-icon>" }`
- `{icon_name: "package-open", synonyms: [box, container, storage, unpack, unarchive, unzip, opened, delivered], usage: "<uk-icon icon=\"package-open\"></uk-icon>" }`
- `{icon_name: "package-plus", synonyms: [new, add, create], usage: "<uk-icon icon=\"package-plus\"></uk-icon>" }`
- `{icon_name: "package-search", synonyms: [find, product process], usage: "<uk-icon icon=\"package-search\"></uk-icon>" }`
- `{icon_name: "package-x", synonyms: [delete, remove], usage: "<uk-icon icon=\"package-x\"></uk-icon>" }`
- `{icon_name: "package", synonyms: [box, container, storage, sealed, delivery, undelivered, unopened, packed, archive, zip, module], usage: "<uk-icon icon=\"package\"></uk-icon>" }`
- `{icon_name: "paint-bucket", synonyms: [fill, paint, bucket, color, colour], usage: "<uk-icon icon=\"paint-bucket\"></uk-icon>" }`
- `{icon_name: "paint-roller", synonyms: [brush, color, colour, decoration, diy], usage: "<uk-icon icon=\"paint-roller\"></uk-icon>" }`
- `{icon_name: "paintbrush-vertical", synonyms: [brush, paintbrush, design, color, colour, decoration, diy], usage: "<uk-icon icon=\"paintbrush-vertical\"></uk-icon>" }`
- `{icon_name: "paintbrush", synonyms: [brush, paintbrush, design, color, colour, decoration, diy], usage: "<uk-icon icon=\"paintbrush\"></uk-icon>" }`
- `{icon_name: "palette", synonyms: [colors, colours, theme, scheme, paint, watercolor, watercolour, artist], usage: "<uk-icon icon=\"palette\"></uk-icon>" }`
- `{icon_name: "panel-bottom-close", synonyms: [drawer, dock, hide, chevron, down], usage: "<uk-icon icon=\"panel-bottom-close\"></uk-icon>" }`
- `{icon_name: "panel-bottom-dashed", synonyms: [drawer, dock, show, reveal], usage: "<uk-icon icon=\"panel-bottom-dashed\"></uk-icon>" }`
- `{icon_name: "panel-bottom-open", synonyms: [drawer, dock, show, reveal, chevron, up], usage: "<uk-icon icon=\"panel-bottom-open\"></uk-icon>" }`
- `{icon_name: "panel-bottom", synonyms: [drawer, dock], usage: "<uk-icon icon=\"panel-bottom\"></uk-icon>" }`
- `{icon_name: "panel-left-close", synonyms: [primary, drawer, hide, chevron, <], usage: "<uk-icon icon=\"panel-left-close\"></uk-icon>" }`
- `{icon_name: "panel-left-dashed", synonyms: [sidebar, primary, drawer, show, reveal], usage: "<uk-icon icon=\"panel-left-dashed\"></uk-icon>" }`
- `{icon_name: "panel-left-open", synonyms: [primary, drawer, show, reveal, chevron, right, >], usage: "<uk-icon icon=\"panel-left-open\"></uk-icon>" }`
- `{icon_name: "panel-left", synonyms: [primary, drawer], usage: "<uk-icon icon=\"panel-left\"></uk-icon>" }`
- `{icon_name: "panel-right-close", synonyms: [sidebar, secondary, drawer, hide, chevron, >], usage: "<uk-icon icon=\"panel-right-close\"></uk-icon>" }`
- `{icon_name: "panel-right-dashed", synonyms: [sidebar, secondary, drawer, show, reveal], usage: "<uk-icon icon=\"panel-right-dashed\"></uk-icon>" }`
- `{icon_name: "panel-right-open", synonyms: [sidebar, secondary, drawer, show, reveal, chevron, left, <], usage: "<uk-icon icon=\"panel-right-open\"></uk-icon>" }`
- `{icon_name: "panel-right", synonyms: [sidebar, secondary, drawer], usage: "<uk-icon icon=\"panel-right\"></uk-icon>" }`
- `{icon_name: "panel-top-close", synonyms: [menu bar, drawer, hide, chevron, up], usage: "<uk-icon icon=\"panel-top-close\"></uk-icon>" }`
- `{icon_name: "panel-top-dashed", synonyms: [menu bar, drawer, show, reveal], usage: "<uk-icon icon=\"panel-top-dashed\"></uk-icon>" }`
- `{icon_name: "panel-top-open", synonyms: [menu bar, drawer, show, reveal, chevron, down], usage: "<uk-icon icon=\"panel-top-open\"></uk-icon>" }`
- `{icon_name: "panel-top", synonyms: [drawer, browser, webpage], usage: "<uk-icon icon=\"panel-top\"></uk-icon>" }`
- `{icon_name: "panels-left-bottom", synonyms: [drawers, sidebar, primary], usage: "<uk-icon icon=\"panels-left-bottom\"></uk-icon>" }`
- `{icon_name: "panels-right-bottom", synonyms: [drawers, sidebar, secondary], usage: "<uk-icon icon=\"panels-right-bottom\"></uk-icon>" }`
- `{icon_name: "panels-top-left", synonyms: [menu bar, sidebar, primary, drawers, window, webpage, projects, overview], usage: "<uk-icon icon=\"panels-top-left\"></uk-icon>" }`
- `{icon_name: "paperclip", synonyms: [attachment, file], usage: "<uk-icon icon=\"paperclip\"></uk-icon>" }`
- `{icon_name: "parentheses", synonyms: [code, token, parenthesis, parens, brackets, parameters, arguments, args, input, call, math, formula, function, (, )], usage: "<uk-icon icon=\"parentheses\"></uk-icon>" }`
- `{icon_name: "parking-meter", synonyms: [driving, car park, pay, sidewalk, pavement], usage: "<uk-icon icon=\"parking-meter\"></uk-icon>" }`
- `{icon_name: "party-popper", synonyms: [emoji, congratulations, celebration, party, tada, ðŸŽ‰, ðŸŽŠ, excitement, exciting, excites, confetti], usage: "<uk-icon icon=\"party-popper\"></uk-icon>" }`
- `{icon_name: "pause", synonyms: [music, stop], usage: "<uk-icon icon=\"pause\"></uk-icon>" }`
- `{icon_name: "paw-print", synonyms: [pets, vets, veterinarian, domesticated, cat, dog, bear], usage: "<uk-icon icon=\"paw-print\"></uk-icon>" }`
- `{icon_name: "pc-case", synonyms: [computer, chassis], usage: "<uk-icon icon=\"pc-case\"></uk-icon>" }`
- `{icon_name: "pen-line", synonyms: [pencil, change, create, draw, writer, writing, biro, ink, marker, felt tip, stationery, artist], usage: "<uk-icon icon=\"pen-line\"></uk-icon>" }`
- `{icon_name: "pen-off", synonyms: [disabled, inactive, non-editable, locked, read-only, unmodifiable, frozen, restricted, pencil, change, create, draw, writer, writing, biro, ink, marker, felt tip, stationery, artist], usage: "<uk-icon icon=\"pen-off\"></uk-icon>" }`
- `{icon_name: "pen-tool", synonyms: [vector, drawing, path], usage: "<uk-icon icon=\"pen-tool\"></uk-icon>" }`
- `{icon_name: "pen", synonyms: [pencil, change, create, draw, writer, writing, biro, ink, marker, felt tip, stationery, artist], usage: "<uk-icon icon=\"pen\"></uk-icon>" }`
- `{icon_name: "pencil-line", synonyms: [pencil, change, create, draw, sketch, draft, writer, writing, biro, ink, marker, felt tip, stationery, artist], usage: "<uk-icon icon=\"pencil-line\"></uk-icon>" }`
- `{icon_name: "pencil-off", synonyms: [disabled, inactive, non-editable, locked, read-only, unmodifiable, frozen, restricted, rubber, edit, create, draw, sketch, draft, writer, writing, stationery, artist], usage: "<uk-icon icon=\"pencil-off\"></uk-icon>" }`
- `{icon_name: "pencil-ruler", synonyms: [edit, create, draw, sketch, draft, writer, writing, stationery, artist, measurements, centimeters, cm, millimeters, mm, metre, foot, feet, inches, units, size, length, width, height, dimensions, depth, breadth, extent], usage: "<uk-icon icon=\"pencil-ruler\"></uk-icon>" }`
- `{icon_name: "pencil", synonyms: [rubber, edit, create, draw, sketch, draft, writer, writing, stationery, artist], usage: "<uk-icon icon=\"pencil\"></uk-icon>" }`
- `{icon_name: "pentagon", synonyms: [shape], usage: "<uk-icon icon=\"pentagon\"></uk-icon>" }`
- `{icon_name: "percent", synonyms: [percentage, modulo, modulus, remainder, %, sale, discount, offer, marketing], usage: "<uk-icon icon=\"percent\"></uk-icon>" }`
- `{icon_name: "person-standing", synonyms: [people, human, accessibility, stick figure], usage: "<uk-icon icon=\"person-standing\"></uk-icon>" }`
- `{icon_name: "philippine-peso", synonyms: [currency, peso, money, php], usage: "<uk-icon icon=\"philippine-peso\"></uk-icon>" }`
- `{icon_name: "phone-call", synonyms: [ring], usage: "<uk-icon icon=\"phone-call\"></uk-icon>" }`
- `{icon_name: "phone-forwarded", synonyms: [call], usage: "<uk-icon icon=\"phone-forwarded\"></uk-icon>" }`
- `{icon_name: "phone-incoming", synonyms: [call], usage: "<uk-icon icon=\"phone-incoming\"></uk-icon>" }`
- `{icon_name: "phone-missed", synonyms: [call], usage: "<uk-icon icon=\"phone-missed\"></uk-icon>" }`
- `{icon_name: "phone-off", synonyms: [call, mute], usage: "<uk-icon icon=\"phone-off\"></uk-icon>" }`
- `{icon_name: "phone-outgoing", synonyms: [call], usage: "<uk-icon icon=\"phone-outgoing\"></uk-icon>" }`
- `{icon_name: "phone", synonyms: [call], usage: "<uk-icon icon=\"phone\"></uk-icon>" }`
- `{icon_name: "pi", synonyms: [constant, code, coding, programming, symbol, trigonometry, geometry, formula], usage: "<uk-icon icon=\"pi\"></uk-icon>" }`
- `{icon_name: "piano", synonyms: [music, audio, sound, noise, notes, chord, keys, octave, acoustic, instrument, play, pianist, performance, concert], usage: "<uk-icon icon=\"piano\"></uk-icon>" }`
- `{icon_name: "pickaxe", synonyms: [mining, mine, land worker, extraction, labor, construction, progress, advancement, crafting, building, creation], usage: "<uk-icon icon=\"pickaxe\"></uk-icon>" }`
- `{icon_name: "picture-in-picture-2", synonyms: [display, play, video, pop out, always on top, window, inset, multitask], usage: "<uk-icon icon=\"picture-in-picture-2\"></uk-icon>" }`
- `{icon_name: "picture-in-picture", synonyms: [display, play, video, pop out, always on top, window, inset, multitask], usage: "<uk-icon icon=\"picture-in-picture\"></uk-icon>" }`
- `{icon_name: "piggy-bank", synonyms: [money, savings], usage: "<uk-icon icon=\"piggy-bank\"></uk-icon>" }`
- `{icon_name: "pilcrow-left", synonyms: [direction, paragraph, mark, paraph, blind, typography, type, text, prose, symbol], usage: "<uk-icon icon=\"pilcrow-left\"></uk-icon>" }`
- `{icon_name: "pilcrow-right", synonyms: [direction, paragraph, mark, paraph, blind, typography, type, text, prose, symbol], usage: "<uk-icon icon=\"pilcrow-right\"></uk-icon>" }`
- `{icon_name: "pilcrow", synonyms: [paragraph, mark, paraph, blind, typography, type, text, prose, symbol], usage: "<uk-icon icon=\"pilcrow\"></uk-icon>" }`
- `{icon_name: "pill-bottle", synonyms: [medicine, medication, prescription, drug, supplement, vitamin, capsule, jar, container, healthcare, pharmaceutical, tablet], usage: "<uk-icon icon=\"pill-bottle\"></uk-icon>" }`
- `{icon_name: "pill", synonyms: [medicine, medication, drug, prescription, tablet, pharmacy], usage: "<uk-icon icon=\"pill\"></uk-icon>" }`
- `{icon_name: "pin-off", synonyms: [unpin, map, unlock, unfix, unsave, remove], usage: "<uk-icon icon=\"pin-off\"></uk-icon>" }`
- `{icon_name: "pin", synonyms: [save, map, lock, fix], usage: "<uk-icon icon=\"pin\"></uk-icon>" }`
- `{icon_name: "pipette", synonyms: [eye dropper, color picker, lab, chemistry], usage: "<uk-icon icon=\"pipette\"></uk-icon>" }`
- `{icon_name: "pizza", synonyms: [pie, quiche, food], usage: "<uk-icon icon=\"pizza\"></uk-icon>" }`
- `{icon_name: "plane-landing", synonyms: [arrival, plane, trip, airplane, landing], usage: "<uk-icon icon=\"plane-landing\"></uk-icon>" }`
- `{icon_name: "plane-takeoff", synonyms: [departure, plane, trip, airplane, takeoff], usage: "<uk-icon icon=\"plane-takeoff\"></uk-icon>" }`
- `{icon_name: "plane", synonyms: [plane, trip, airplane], usage: "<uk-icon icon=\"plane\"></uk-icon>" }`
- `{icon_name: "play", synonyms: [music, audio, video, start, run], usage: "<uk-icon icon=\"play\"></uk-icon>" }`
- `{icon_name: "plug-2", synonyms: [electricity, energy, socket, outlet], usage: "<uk-icon icon=\"plug-2\"></uk-icon>" }`
- `{icon_name: "plug-zap", synonyms: [electricity, energy, electronics, charge, charging, battery, connect], usage: "<uk-icon icon=\"plug-zap\"></uk-icon>" }`
- `{icon_name: "plug", synonyms: [electricity, energy, electronics, socket, outlet], usage: "<uk-icon icon=\"plug\"></uk-icon>" }`
- `{icon_name: "plus", synonyms: [add, new, increase, increment, positive, calculate, toolbar, crosshair, aim, target, scope, sight, reticule, maximum, upgrade, extra, +], usage: "<uk-icon icon=\"plus\"></uk-icon>" }`
- `{icon_name: "pocket-knife", synonyms: [swiss army knife, penknife, multi-tool, multitask, blade, cutter, gadget, corkscrew], usage: "<uk-icon icon=\"pocket-knife\"></uk-icon>" }`
- `{icon_name: "pocket", synonyms: [logo, save], usage: "<uk-icon icon=\"pocket\"></uk-icon>" }`
- `{icon_name: "podcast", synonyms: [audio, music, mic, talk, voice, subscribe, subscription, stream], usage: "<uk-icon icon=\"podcast\"></uk-icon>" }`
- `{icon_name: "pointer-off", synonyms: [mouse], usage: "<uk-icon icon=\"pointer-off\"></uk-icon>" }`
- `{icon_name: "pointer", synonyms: [mouse], usage: "<uk-icon icon=\"pointer\"></uk-icon>" }`
- `{icon_name: "popcorn", synonyms: [cinema, movies, films, salted, sweet, sugar, candy, snack], usage: "<uk-icon icon=\"popcorn\"></uk-icon>" }`
- `{icon_name: "popsicle", synonyms: [ice lolly, ice cream, sweet, food], usage: "<uk-icon icon=\"popsicle\"></uk-icon>" }`
- `{icon_name: "pound-sterling", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"pound-sterling\"></uk-icon>" }`
- `{icon_name: "power-off", synonyms: [on, off, device, switch], usage: "<uk-icon icon=\"power-off\"></uk-icon>" }`
- `{icon_name: "power", synonyms: [on, off, device, switch, toggle, binary, boolean, reboot, restart, button, keyboard, troubleshoot], usage: "<uk-icon icon=\"power\"></uk-icon>" }`
- `{icon_name: "presentation", synonyms: [screen, whiteboard, marker pens, markers, blackboard, chalk, easel, school, learning, lesson, office, meeting, project, planning], usage: "<uk-icon icon=\"presentation\"></uk-icon>" }`
- `{icon_name: "printer-check", synonyms: [fax, office, device, success, printed], usage: "<uk-icon icon=\"printer-check\"></uk-icon>" }`
- `{icon_name: "printer", synonyms: [fax, office, device], usage: "<uk-icon icon=\"printer\"></uk-icon>" }`
- `{icon_name: "projector", synonyms: [cinema, film, movie, home video, presentation, slideshow, office, meeting, project, planning], usage: "<uk-icon icon=\"projector\"></uk-icon>" }`
- `{icon_name: "proportions", synonyms: [screens, sizes, rotate, rotation, adjust, aspect ratio, 16:9, widescreen, 4:3, resolution, responsive, mobile, desktop, dimensions, monitor, orientation, portrait, landscape], usage: "<uk-icon icon=\"proportions\"></uk-icon>" }`
- `{icon_name: "puzzle", synonyms: [component, module, part, piece], usage: "<uk-icon icon=\"puzzle\"></uk-icon>" }`
- `{icon_name: "pyramid", synonyms: [prism, triangle, triangular, hierarchy, structure, geometry, ancient, egyptian, landmark, tourism], usage: "<uk-icon icon=\"pyramid\"></uk-icon>" }`
- `{icon_name: "qr-code", synonyms: [barcode, scan, link, url, information, digital], usage: "<uk-icon icon=\"qr-code\"></uk-icon>" }`
- `{icon_name: "quote", synonyms: [quotation], usage: "<uk-icon icon=\"quote\"></uk-icon>" }`
- `{icon_name: "rabbit", synonyms: [animal, rodent, pet, pest, bunny, hare, fast, speed, hop], usage: "<uk-icon icon=\"rabbit\"></uk-icon>" }`
- `{icon_name: "radar", synonyms: [scan, sonar, detect, find, locate], usage: "<uk-icon icon=\"radar\"></uk-icon>" }`
- `{icon_name: "radiation", synonyms: [radioactive, nuclear, fallout, waste, atomic, physics, particle, element, molecule], usage: "<uk-icon icon=\"radiation\"></uk-icon>" }`
- `{icon_name: "radical", synonyms: [calculate, formula, math, operator, root, square, symbol], usage: "<uk-icon icon=\"radical\"></uk-icon>" }`
- `{icon_name: "radio-receiver", synonyms: [device, music, connect], usage: "<uk-icon icon=\"radio-receiver\"></uk-icon>" }`
- `{icon_name: "radio-tower", synonyms: [signal, broadcast, connectivity, live, frequency], usage: "<uk-icon icon=\"radio-tower\"></uk-icon>" }`
- `{icon_name: "radio", synonyms: [signal, broadcast, connectivity, live, frequency], usage: "<uk-icon icon=\"radio\"></uk-icon>" }`
- `{icon_name: "radius", synonyms: [shape, circle, geometry, trigonometry, radii, calculate, measure, size], usage: "<uk-icon icon=\"radius\"></uk-icon>" }`
- `{icon_name: "rail-symbol", synonyms: [railway, train, track, line], usage: "<uk-icon icon=\"rail-symbol\"></uk-icon>" }`
- `{icon_name: "rainbow", synonyms: [colors, colours, spectrum, light, prism, arc, clear, sunshine], usage: "<uk-icon icon=\"rainbow\"></uk-icon>" }`
- `{icon_name: "rat", synonyms: [mouse, mice, gerbil, rodent, pet, pest, plague, disease], usage: "<uk-icon icon=\"rat\"></uk-icon>" }`
- `{icon_name: "ratio", synonyms: [screens, sizes, rotate, rotation, adjust, aspect ratio, proportions, 16:9, widescreen, 4:3, resolution, responsive, mobile, desktop, dimensions, monitor, orientation, portrait, landscape], usage: "<uk-icon icon=\"ratio\"></uk-icon>" }`
- `{icon_name: "receipt-cent", synonyms: [bill, voucher, slip, check, counterfoil, currency, cents, dollar, usd, $, Â¢], usage: "<uk-icon icon=\"receipt-cent\"></uk-icon>" }`
- `{icon_name: "receipt-euro", synonyms: [bill, voucher, slip, check, counterfoil, currency, â‚¬], usage: "<uk-icon icon=\"receipt-euro\"></uk-icon>" }`
- `{icon_name: "receipt-indian-rupee", synonyms: [bill, voucher, slip, check, counterfoil, currency, inr, â‚¹], usage: "<uk-icon icon=\"receipt-indian-rupee\"></uk-icon>" }`
- `{icon_name: "receipt-japanese-yen", synonyms: [bill, voucher, slip, check, counterfoil, currency, jpy, Â¥], usage: "<uk-icon icon=\"receipt-japanese-yen\"></uk-icon>" }`
- `{icon_name: "receipt-pound-sterling", synonyms: [bill, voucher, slip, check, counterfoil, british, currency, gbp, Â£], usage: "<uk-icon icon=\"receipt-pound-sterling\"></uk-icon>" }`
- `{icon_name: "receipt-russian-ruble", synonyms: [bill, voucher, slip, check, counterfoil, currency, rub, â‚½], usage: "<uk-icon icon=\"receipt-russian-ruble\"></uk-icon>" }`
- `{icon_name: "receipt-swiss-franc", synonyms: [bill, voucher, slip, check, counterfoil, currency, chf, â‚£], usage: "<uk-icon icon=\"receipt-swiss-franc\"></uk-icon>" }`
- `{icon_name: "receipt-text", synonyms: [bill, voucher, slip, check, counterfoil, details, small print, terms, conditions, contract], usage: "<uk-icon icon=\"receipt-text\"></uk-icon>" }`
- `{icon_name: "receipt", synonyms: [bill, voucher, slip, check, counterfoil, currency, dollar, usd, $], usage: "<uk-icon icon=\"receipt\"></uk-icon>" }`
- `{icon_name: "rectangle-ellipsis", synonyms: [login, password, authenticate, 2fa, field, fill, ellipsis, et cetera, etc, loader, loading, progress, pending, throbber, menu, options, operator, code, spread, rest, more, further, extra, overflow, dots, â€¦, ...], usage: "<uk-icon icon=\"rectangle-ellipsis\"></uk-icon>" }`
- `{icon_name: "rectangle-goggles", synonyms: [vr, virtual, augmented, reality, headset, goggles], usage: "<uk-icon icon=\"rectangle-goggles\"></uk-icon>" }`
- `{icon_name: "rectangle-horizontal", synonyms: [rectangle, aspect ratio, 16:9, horizontal, shape], usage: "<uk-icon icon=\"rectangle-horizontal\"></uk-icon>" }`
- `{icon_name: "rectangle-vertical", synonyms: [rectangle, aspect ratio, 9:16, vertical, shape], usage: "<uk-icon icon=\"rectangle-vertical\"></uk-icon>" }`
- `{icon_name: "recycle", synonyms: [sustainability, salvage, arrows], usage: "<uk-icon icon=\"recycle\"></uk-icon>" }`
- `{icon_name: "redo-2", synonyms: [undo, rerun, history], usage: "<uk-icon icon=\"redo-2\"></uk-icon>" }`
- `{icon_name: "redo-dot", synonyms: [redo, history, step, over, forward], usage: "<uk-icon icon=\"redo-dot\"></uk-icon>" }`
- `{icon_name: "redo", synonyms: [undo, rerun, history], usage: "<uk-icon icon=\"redo\"></uk-icon>" }`
- `{icon_name: "refresh-ccw-dot", synonyms: [arrows, rotate, reload, synchronise, synchronize, circular, cycle, issue, code, coding, version control], usage: "<uk-icon icon=\"refresh-ccw-dot\"></uk-icon>" }`
- `{icon_name: "refresh-ccw", synonyms: [arrows, rotate, reload, rerun, synchronise, synchronize, circular, cycle], usage: "<uk-icon icon=\"refresh-ccw\"></uk-icon>" }`
- `{icon_name: "refresh-cw-off", synonyms: [rotate, reload, rerun, synchronise, synchronize, arrows, circular, cycle, cancel, no, stop, error, disconnect, ignore], usage: "<uk-icon icon=\"refresh-cw-off\"></uk-icon>" }`
- `{icon_name: "refresh-cw", synonyms: [rotate, reload, rerun, synchronise, synchronize, arrows, circular, cycle], usage: "<uk-icon icon=\"refresh-cw\"></uk-icon>" }`
- `{icon_name: "refrigerator", synonyms: [frigerator, fridge, freezer, cooler, icebox, chiller, cold storage], usage: "<uk-icon icon=\"refrigerator\"></uk-icon>" }`
- `{icon_name: "regex", synonyms: [search, text, code], usage: "<uk-icon icon=\"regex\"></uk-icon>" }`
- `{icon_name: "remove-formatting", synonyms: [text, font, typography, format, x, remove, delete, times, clear], usage: "<uk-icon icon=\"remove-formatting\"></uk-icon>" }`
- `{icon_name: "repeat-1", synonyms: [replay], usage: "<uk-icon icon=\"repeat-1\"></uk-icon>" }`
- `{icon_name: "repeat-2", synonyms: [arrows, retweet, repost, share, repeat, loop], usage: "<uk-icon icon=\"repeat-2\"></uk-icon>" }`
- `{icon_name: "repeat", synonyms: [loop, arrows], usage: "<uk-icon icon=\"repeat\"></uk-icon>" }`
- `{icon_name: "replace-all", synonyms: [search, substitute, swap, change], usage: "<uk-icon icon=\"replace-all\"></uk-icon>" }`
- `{icon_name: "replace", synonyms: [search, substitute, swap, change], usage: "<uk-icon icon=\"replace\"></uk-icon>" }`
- `{icon_name: "reply-all", synonyms: [email], usage: "<uk-icon icon=\"reply-all\"></uk-icon>" }`
- `{icon_name: "reply", synonyms: [email], usage: "<uk-icon icon=\"reply\"></uk-icon>" }`
- `{icon_name: "rewind", synonyms: [music], usage: "<uk-icon icon=\"rewind\"></uk-icon>" }`
- `{icon_name: "ribbon", synonyms: [awareness, strip, band, tape, strap, cordon], usage: "<uk-icon icon=\"ribbon\"></uk-icon>" }`
- `{icon_name: "rocket", synonyms: [release, boost, launch, space, version], usage: "<uk-icon icon=\"rocket\"></uk-icon>" }`
- `{icon_name: "rocking-chair", synonyms: [chair, furniture, seat], usage: "<uk-icon icon=\"rocking-chair\"></uk-icon>" }`
- `{icon_name: "roller-coaster", synonyms: [attraction, entertainment, amusement park, theme park, funfair], usage: "<uk-icon icon=\"roller-coaster\"></uk-icon>" }`
- `{icon_name: "rotate-3d", synonyms: [gizmo, transform, orientation, orbit, axis], usage: "<uk-icon icon=\"rotate-3d\"></uk-icon>" }`
- `{icon_name: "rotate-ccw-key", synonyms: [password, key, refresh, change], usage: "<uk-icon icon=\"rotate-ccw-key\"></uk-icon>" }`
- `{icon_name: "rotate-ccw-square", synonyms: [left, counter-clockwise, rotate, image, 90, 45, degrees, Â°], usage: "<uk-icon icon=\"rotate-ccw-square\"></uk-icon>" }`
- `{icon_name: "rotate-ccw", synonyms: [arrow, left, counter-clockwise, restart, reload, rerun, refresh, backup, undo, replay, redo, retry, rewind, reverse], usage: "<uk-icon icon=\"rotate-ccw\"></uk-icon>" }`
- `{icon_name: "rotate-cw-square", synonyms: [right, clockwise, rotate, image, 90, 45, degrees, Â°], usage: "<uk-icon icon=\"rotate-cw-square\"></uk-icon>" }`
- `{icon_name: "rotate-cw", synonyms: [arrow, right, clockwise, refresh, reload, rerun, redo], usage: "<uk-icon icon=\"rotate-cw\"></uk-icon>" }`
- `{icon_name: "route-off", synonyms: [path, journey, planner, points, stops, stations, reset, clear, cancelled, closed, blocked], usage: "<uk-icon icon=\"route-off\"></uk-icon>" }`
- `{icon_name: "route", synonyms: [path, journey, planner, points, stops, stations], usage: "<uk-icon icon=\"route\"></uk-icon>" }`
- `{icon_name: "router", synonyms: [computer, server, cloud], usage: "<uk-icon icon=\"router\"></uk-icon>" }`
- `{icon_name: "rows-2", synonyms: [lines, list, queue, preview, panel, paragraphs, parallel, series, split, vertical, horizontal, half, center, middle, even, drawer], usage: "<uk-icon icon=\"rows-2\"></uk-icon>" }`
- `{icon_name: "rows-3", synonyms: [lines, list, queue, preview, paragraphs, parallel, series, split, vertical, horizontal, half, center, middle, even, drawers], usage: "<uk-icon icon=\"rows-3\"></uk-icon>" }`
- `{icon_name: "rows-4", synonyms: [lines, list, queue, preview, paragraphs, parallel, series, split, vertical, horizontal, half, center, middle, even, drawers, grill], usage: "<uk-icon icon=\"rows-4\"></uk-icon>" }`
- `{icon_name: "rss", synonyms: [feed, subscribe, news, updates, notifications, content, blog, articles, broadcast, syndication, reader, channels, posts, publishing, digest, alert, following, inbox, newsletter, weblog, podcast], usage: "<uk-icon icon=\"rss\"></uk-icon>" }`
- `{icon_name: "ruler-dimension-line", synonyms: [measurements, centimeters, cm, millimeters, mm, metre, foot, feet, inches, units, size, length, width, height, dimensions, depth, breadth, extent, stationery], usage: "<uk-icon icon=\"ruler-dimension-line\"></uk-icon>" }`
- `{icon_name: "ruler", synonyms: [measurements, centimeters, cm, millimeters, mm, metre, foot, feet, inches, units, size, length, width, height, dimensions, depth, breadth, extent, stationery], usage: "<uk-icon icon=\"ruler\"></uk-icon>" }`
- `{icon_name: "russian-ruble", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"russian-ruble\"></uk-icon>" }`
- `{icon_name: "sailboat", synonyms: [ship, boat, harbor, harbour, dock], usage: "<uk-icon icon=\"sailboat\"></uk-icon>" }`
- `{icon_name: "salad", synonyms: [food, vegetarian, dish, restaurant, course, meal, side, vegetables, health], usage: "<uk-icon icon=\"salad\"></uk-icon>" }`
- `{icon_name: "sandwich", synonyms: [food, snack, dish, restaurant, lunch, meal], usage: "<uk-icon icon=\"sandwich\"></uk-icon>" }`
- `{icon_name: "satellite-dish", synonyms: [antenna, receiver, dish aerial, saucer], usage: "<uk-icon icon=\"satellite-dish\"></uk-icon>" }`
- `{icon_name: "satellite", synonyms: [space station, orbit, transmitter], usage: "<uk-icon icon=\"satellite\"></uk-icon>" }`
- `{icon_name: "saudi-riyal", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"saudi-riyal\"></uk-icon>" }`
- `{icon_name: "save-all", synonyms: [floppy disks, copy], usage: "<uk-icon icon=\"save-all\"></uk-icon>" }`
- `{icon_name: "save-off", synonyms: [floppy disk, unsalvageable], usage: "<uk-icon icon=\"save-off\"></uk-icon>" }`
- `{icon_name: "save", synonyms: [floppy disk], usage: "<uk-icon icon=\"save\"></uk-icon>" }`
- `{icon_name: "scale-3d", synonyms: [gizmo, transform, size, axis], usage: "<uk-icon icon=\"scale-3d\"></uk-icon>" }`
- `{icon_name: "scale", synonyms: [balance, legal, license, right, rule, law], usage: "<uk-icon icon=\"scale\"></uk-icon>" }`
- `{icon_name: "scaling", synonyms: [scale, resize, design], usage: "<uk-icon icon=\"scaling\"></uk-icon>" }`
- `{icon_name: "scan-barcode", synonyms: [checkout, till, cart, transaction, purchase, buy, product, packaging, retail, consumer], usage: "<uk-icon icon=\"scan-barcode\"></uk-icon>" }`
- `{icon_name: "scan-eye", synonyms: [preview, zoom, expand, fullscreen, gallery, image, camera, watch, surveillance, retina, focus, lens, biometric, identification, authentication, access, login], usage: "<uk-icon icon=\"scan-eye\"></uk-icon>" }`
- `{icon_name: "scan-face", synonyms: [face, biometric, identification, authentication, 2fa, access, login, dashed], usage: "<uk-icon icon=\"scan-face\"></uk-icon>" }`
- `{icon_name: "scan-heart", synonyms: [health, heart rate, pulse, monitoring, healthiness, screening, dashed], usage: "<uk-icon icon=\"scan-heart\"></uk-icon>" }`
- `{icon_name: "scan-line", synonyms: [checkout, till, cart, transaction, purchase, buy, product, packaging, retail, consumer, qr-code, dashed], usage: "<uk-icon icon=\"scan-line\"></uk-icon>" }`
- `{icon_name: "scan-qr-code", synonyms: [barcode, scan, qrcode, url, information, digital, scanner], usage: "<uk-icon icon=\"scan-qr-code\"></uk-icon>" }`
- `{icon_name: "scan-search", synonyms: [preview, zoom, expand, fullscreen, gallery, image, focus, lens], usage: "<uk-icon icon=\"scan-search\"></uk-icon>" }`
- `{icon_name: "scan-text", synonyms: [recognition, read, translate, copy, lines], usage: "<uk-icon icon=\"scan-text\"></uk-icon>" }`
- `{icon_name: "scan", synonyms: [qr-code, barcode, checkout, augmented reality, ar, target, surveillance, camera, lens, focus, frame, select, box, boundary, bounds, area, square, dashed], usage: "<uk-icon icon=\"scan\"></uk-icon>" }`
- `{icon_name: "school", synonyms: [building, education, childhood, university, learning, campus, scholar, student, lecture, degree, course, academia, study, knowledge, classroom, research, diploma, graduation, professor, tutorial, homework, assignment, exam], usage: "<uk-icon icon=\"school\"></uk-icon>" }`
- `{icon_name: "scissors-line-dashed", synonyms: [cut here, along, snip, chop, stationery, crafts, instructions, diagram], usage: "<uk-icon icon=\"scissors-line-dashed\"></uk-icon>" }`
- `{icon_name: "scissors", synonyms: [cut, snip, chop, stationery, crafts], usage: "<uk-icon icon=\"scissors\"></uk-icon>" }`
- `{icon_name: "screen-share-off", synonyms: [desktop, disconnect, monitor], usage: "<uk-icon icon=\"screen-share-off\"></uk-icon>" }`
- `{icon_name: "screen-share", synonyms: [host, desktop, monitor], usage: "<uk-icon icon=\"screen-share\"></uk-icon>" }`
- `{icon_name: "scroll-text", synonyms: [paper, log, scripture, document, notes, parchment, list, long, script, story, code, coding], usage: "<uk-icon icon=\"scroll-text\"></uk-icon>" }`
- `{icon_name: "scroll", synonyms: [paper, log, scripture, document, notes, parchment, list, long, script, story, code, coding], usage: "<uk-icon icon=\"scroll\"></uk-icon>" }`
- `{icon_name: "search-check", synonyms: [find, scan, magnifier, magnifying glass, found, correct, complete, tick], usage: "<uk-icon icon=\"search-check\"></uk-icon>" }`
- `{icon_name: "search-code", synonyms: [find, scan, magnifier, magnifying glass, grep, chevrons, <>], usage: "<uk-icon icon=\"search-code\"></uk-icon>" }`
- `{icon_name: "search-slash", synonyms: [find, scan, magnifier, magnifying glass, stop, clear, cancel, abort, /], usage: "<uk-icon icon=\"search-slash\"></uk-icon>" }`
- `{icon_name: "search-x", synonyms: [find, scan, magnifier, magnifying glass, stop, clear, cancel, abort], usage: "<uk-icon icon=\"search-x\"></uk-icon>" }`
- `{icon_name: "search", synonyms: [find, scan, magnifier, magnifying glass], usage: "<uk-icon icon=\"search\"></uk-icon>" }`
- `{icon_name: "section", synonyms: [mark, typography, punctuation, legal, type, text, prose, symbol], usage: "<uk-icon icon=\"section\"></uk-icon>" }`
- `{icon_name: "send-horizontal", synonyms: [email, message, mail, paper airplane, paper aeroplane, submit], usage: "<uk-icon icon=\"send-horizontal\"></uk-icon>" }`
- `{icon_name: "send-to-back", synonyms: [bring, send, move, under, back, backwards, overlap, layer, order], usage: "<uk-icon icon=\"send-to-back\"></uk-icon>" }`
- `{icon_name: "send", synonyms: [email, message, mail, paper airplane, paper aeroplane, submit], usage: "<uk-icon icon=\"send\"></uk-icon>" }`
- `{icon_name: "separator-horizontal", synonyms: [move, split], usage: "<uk-icon icon=\"separator-horizontal\"></uk-icon>" }`
- `{icon_name: "separator-vertical", synonyms: [move, split], usage: "<uk-icon icon=\"separator-vertical\"></uk-icon>" }`
- `{icon_name: "server-cog", synonyms: [cloud, storage, computing, cog, gear], usage: "<uk-icon icon=\"server-cog\"></uk-icon>" }`
- `{icon_name: "server-crash", synonyms: [cloud, storage, problem, error], usage: "<uk-icon icon=\"server-crash\"></uk-icon>" }`
- `{icon_name: "server-off", synonyms: [cloud, storage], usage: "<uk-icon icon=\"server-off\"></uk-icon>" }`
- `{icon_name: "server", synonyms: [cloud, storage], usage: "<uk-icon icon=\"server\"></uk-icon>" }`
- `{icon_name: "settings-2", synonyms: [cog, edit, gear, preferences], usage: "<uk-icon icon=\"settings-2\"></uk-icon>" }`
- `{icon_name: "settings", synonyms: [cog, edit, gear, preferences], usage: "<uk-icon icon=\"settings\"></uk-icon>" }`
- `{icon_name: "shapes", synonyms: [triangle, equilateral, square, circle, classification, different, collection, toy, blocks, learning], usage: "<uk-icon icon=\"shapes\"></uk-icon>" }`
- `{icon_name: "share-2", synonyms: [network, connections], usage: "<uk-icon icon=\"share-2\"></uk-icon>" }`
- `{icon_name: "share", synonyms: [network, connections], usage: "<uk-icon icon=\"share\"></uk-icon>" }`
- `{icon_name: "sheet", synonyms: [spreadsheets, table, excel], usage: "<uk-icon icon=\"sheet\"></uk-icon>" }`
- `{icon_name: "shell", synonyms: [beach, sand, holiday, sealife, fossil, ammonite, biology, ocean, terminal, command line, session, bash, zsh, roll, wrap, chewing gum, bubble gum, sweet, sugar, hosepipe, carpet, string, spiral, spinner, hypnotise, hypnosis], usage: "<uk-icon icon=\"shell\"></uk-icon>" }`
- `{icon_name: "shield-alert", synonyms: [unshielded, cybersecurity, insecure, unsecured, safety, unsafe, protection, unprotected, guardian, unguarded, unarmored, unarmoured, defenseless, defenceless, undefended, defender, blocked, stopped, intercepted, interception, saved, thwarted, threat, prevention, unprevented, antivirus, vigilance, vigilant, detection, detected, scanned, found, exploit, vulnerability, vulnerable, weakness, infection, infected, comprimised, data leak, audited, admin, verification, unverified, uncertified, warning, emergency, attention, urgent, alarm, crest, bravery, strength, tough, attacked, damaged, injured, hit, expired, disabled, inactive, error, exclamation mark, !], usage: "<uk-icon icon=\"shield-alert\"></uk-icon>" }`
- `{icon_name: "shield-ban", synonyms: [unshielded, cybersecurity, insecure, unsecured, safety, unsafe, protection, unprotected, guardian, unguarded, unarmored, unarmoured, defenseless, defenceless, undefended, defender, blocked, stopped, intercepted, interception, saved, thwarted, threat, prevention, unprevented, antivirus, vigilance, vigilant, detection, detected, scanned, found, exploit, vulnerability, vulnerable, weakness, infection, infected, comprimised, data leak, audited, admin, verification, unverified, uncertified, cancel, error, crest, bravery, attacked, damaged, injured, hit, expired, eliminated, disabled, inactive, /], usage: "<uk-icon icon=\"shield-ban\"></uk-icon>" }`
- `{icon_name: "shield-check", synonyms: [cybersecurity, secured, safety, protection, protected, guardian, guarded, armored, armoured, defense, defence, defended, blocked, threat, prevention, prevented, antivirus, vigilance, vigilant, active, activated, enabled, detection, scanned, found, strength, strong, tough, invincible, invincibility, invulnerable, undamaged, audited, admin, verification, verified, certification, certified, tested, passed, qualified, cleared, cleaned, disinfected, uninfected, task, completed, todo, done, ticked, checked, crest, bravery], usage: "<uk-icon icon=\"shield-check\"></uk-icon>" }`
- `{icon_name: "shield-ellipsis", synonyms: [cybersecurity, securing, protecting, guarding, armoring, armouring, defending, blocking, preventing, antivirus, detecting, scanning, finding, auditing, admin, verifying, crest, upgrading, loader, loading, throbber, progress, dots, more, etc, ..., â€¦], usage: "<uk-icon icon=\"shield-ellipsis\"></uk-icon>" }`
- `{icon_name: "shield-half", synonyms: [cybersecurity, secure, safety, protection, guardian, armored, armoured, defense, defence, defender, block, threat, prevention, antivirus, vigilance, vigilant, detection, scan, strength, strong, tough, invincible, invincibility, invulnerable, undamaged, audit, admin, verification, crest, logo, sigil, flag, team, faction, fraternity, university, college, academy, school, education, uniform, bravery, knight, foot soldier, infantry, trooper, pawn, battle, war, military, ranking, army, cadet, scout], usage: "<uk-icon icon=\"shield-half\"></uk-icon>" }`
- `{icon_name: "shield-minus", synonyms: [unshield, cybersecurity, unsecure, unguard, unblock, antivirus, clean, clear, disinfect, patch, fix, stop, cancel, remove, relax, admin, crest, bravery, weakened, damaged, hit, unarm, disable, deactivate, decommission, downgraded, minimum, -], usage: "<uk-icon icon=\"shield-minus\"></uk-icon>" }`
- `{icon_name: "shield-off", synonyms: [unshielded, cybersecurity, insecure, unsecured, safety, unsafe, protection, unprotected, guardian, unguarded, unarmored, unarmoured, defenseless, defenceless, undefended, defender, interception, threat, prevention, unprevented, antivirus, detection, undetected, exploit, vulnerability, vulnerable, weakness, infected, infection, comprimised, data leak, unaudited, admin, verification, unverified, inactive, cancelled, error, crest, bravery, damaged, injured, hit, expired, eliminated], usage: "<uk-icon icon=\"shield-off\"></uk-icon>" }`
- `{icon_name: "shield-plus", synonyms: [cybersecurity, secure, safety, protection, guardian, armored, armoured, defense, defence, defender, block, threat, prevention, antivirus, vigilance, vigilant, detection, scan, strength, strong, tough, invincible, invincibility, invulnerable, undamaged, extra, added, professional, enterprise, full, maximum, upgraded, ultra, activate, enable, audit, admin, verification, crest, medic, +], usage: "<uk-icon icon=\"shield-plus\"></uk-icon>" }`
- `{icon_name: "shield-question", synonyms: [unshielded, cybersecurity, insecure, unsecured, safety, unsafe, protection, unprotected, guardian, unguarded, unarmored, unarmoured, defenseless, defenceless, undefended, defender, threat, prevention, unprevented, antivirus, vigilance, vigilant, detection, undetected, scan, find, exploit, vulnerability, vulnerable, weakness, infection, comprimised, data leak, audit, admin, verification, unverified, uncertified, uncertain, unknown, inactive, crest, question mark, ?], usage: "<uk-icon icon=\"shield-question\"></uk-icon>" }`
- `{icon_name: "shield-user", synonyms: [shield, user, admin, protection, protected, safety, guard], usage: "<uk-icon icon=\"shield-user\"></uk-icon>" }`
- `{icon_name: "shield-x", synonyms: [unshielded, cybersecurity, insecure, unsecured, safety, unsafe, protection, unprotected, guardian, unguarded, unarmored, unarmoured, defenseless, defenceless, undefended, defender, blocked, stopped, intercepted, interception, saved, thwarted, threat, prevention, prevented, antivirus, vigilance, vigilant, detection, detected, scanned, found, exploit, vulnerability, vulnerable, weakness, infection, infected, comprimised, data leak, audited, admin, verification, unverified, inactive, cancel, error, wrong, false, crest, bravery, attacked, damaged, injured, hit, dead, deceased, expired, eliminated, exterminated], usage: "<uk-icon icon=\"shield-x\"></uk-icon>" }`
- `{icon_name: "shield", synonyms: [cybersecurity, secure, safety, protection, guardian, armored, armoured, defense, defence, defender, block, threat, prevention, antivirus, vigilance, vigilant, detection, scan, find, strength, strong, tough, invincible, invincibility, invulnerable, undamaged, audit, admin, verification, crest, bravery, knight, foot soldier, infantry, trooper, pawn, battle, war, military, army, cadet, scout], usage: "<uk-icon icon=\"shield\"></uk-icon>" }`
- `{icon_name: "ship-wheel", synonyms: [steering, rudder, boat, knots, nautical mile, maritime, sailing, yacht, cruise, ocean liner, tanker, vessel, navy, trip], usage: "<uk-icon icon=\"ship-wheel\"></uk-icon>" }`
- `{icon_name: "ship", synonyms: [boat, knots, nautical mile, maritime, sailing, yacht, cruise, ocean liner, tanker, vessel, navy, trip], usage: "<uk-icon icon=\"ship\"></uk-icon>" }`
- `{icon_name: "shirt", synonyms: [t-shirt, shopping, store, clothing, clothes], usage: "<uk-icon icon=\"shirt\"></uk-icon>" }`
- `{icon_name: "shopping-bag", synonyms: [ecommerce, cart, purchase, store], usage: "<uk-icon icon=\"shopping-bag\"></uk-icon>" }`
- `{icon_name: "shopping-basket", synonyms: [cart, e-commerce, store, purchase, products, items, ingredients], usage: "<uk-icon icon=\"shopping-basket\"></uk-icon>" }`
- `{icon_name: "shopping-cart", synonyms: [trolley, cart, basket, e-commerce, store, purchase, products, items, ingredients], usage: "<uk-icon icon=\"shopping-cart\"></uk-icon>" }`
- `{icon_name: "shovel", synonyms: [dig, spade, treasure], usage: "<uk-icon icon=\"shovel\"></uk-icon>" }`
- `{icon_name: "shower-head", synonyms: [shower, bath, bathroom, amenities, services], usage: "<uk-icon icon=\"shower-head\"></uk-icon>" }`
- `{icon_name: "shredder", synonyms: [file, paper, tear, cut, delete, destroy, remove, erase, document,, destruction, secure , security, confidential, data, trash, dispose, disposal, information, waste, permanent], usage: "<uk-icon icon=\"shredder\"></uk-icon>" }`
- `{icon_name: "shrimp", synonyms: [seafood, shellfish, crustacean, prawn, scallop, whelk, arthropod, littleneck, quahog, cherrystone], usage: "<uk-icon icon=\"shrimp\"></uk-icon>" }`
- `{icon_name: "shrink", synonyms: [scale, fullscreen], usage: "<uk-icon icon=\"shrink\"></uk-icon>" }`
- `{icon_name: "shrub", synonyms: [forest, undergrowth, park, nature], usage: "<uk-icon icon=\"shrub\"></uk-icon>" }`
- `{icon_name: "shuffle", synonyms: [music, random, reorder], usage: "<uk-icon icon=\"shuffle\"></uk-icon>" }`
- `{icon_name: "sigma", synonyms: [sum, calculate, formula, math, enumeration, enumerate], usage: "<uk-icon icon=\"sigma\"></uk-icon>" }`
- `{icon_name: "signal-high", synonyms: [connection, wireless, gsm, phone, 2g, 3g, 4g, 5g], usage: "<uk-icon icon=\"signal-high\"></uk-icon>" }`
- `{icon_name: "signal-low", synonyms: [connection, wireless, gsm, phone, 2g, 3g, 4g, 5g], usage: "<uk-icon icon=\"signal-low\"></uk-icon>" }`
- `{icon_name: "signal-medium", synonyms: [connection, wireless, gsm, phone, 2g, 3g, 4g, 5g], usage: "<uk-icon icon=\"signal-medium\"></uk-icon>" }`
- `{icon_name: "signal-zero", synonyms: [connection, wireless, gsm, phone, 2g, 3g, 4g, 5g, lost], usage: "<uk-icon icon=\"signal-zero\"></uk-icon>" }`
- `{icon_name: "signal", synonyms: [connection, wireless, gsm, phone, 2g, 3g, 4g, 5g], usage: "<uk-icon icon=\"signal\"></uk-icon>" }`
- `{icon_name: "signature", synonyms: [text, format, input, contract, autograph, handwriting, sign, cursive, ink, scribble, authorize, personal, agreement, legal, document, identity, authentic, approval, verification, unique], usage: "<uk-icon icon=\"signature\"></uk-icon>" }`
- `{icon_name: "signpost-big", synonyms: [bidirectional, left, right, east, west], usage: "<uk-icon icon=\"signpost-big\"></uk-icon>" }`
- `{icon_name: "signpost", synonyms: [bidirectional, left, right, east, west], usage: "<uk-icon icon=\"signpost\"></uk-icon>" }`
- `{icon_name: "siren", synonyms: [police, ambulance, emergency, security, alert, alarm, light], usage: "<uk-icon icon=\"siren\"></uk-icon>" }`
- `{icon_name: "skip-back", synonyms: [arrow, previous, music], usage: "<uk-icon icon=\"skip-back\"></uk-icon>" }`
- `{icon_name: "skip-forward", synonyms: [arrow, skip, next, music], usage: "<uk-icon icon=\"skip-forward\"></uk-icon>" }`
- `{icon_name: "skull", synonyms: [death, danger, bone], usage: "<uk-icon icon=\"skull\"></uk-icon>" }`
- `{icon_name: "slack", synonyms: [logo], usage: "<uk-icon icon=\"slack\"></uk-icon>" }`
- `{icon_name: "slash", synonyms: [divide, division, or, /], usage: "<uk-icon icon=\"slash\"></uk-icon>" }`
- `{icon_name: "slice", synonyms: [cutter, scalpel, knife], usage: "<uk-icon icon=\"slice\"></uk-icon>" }`
- `{icon_name: "sliders-horizontal", synonyms: [settings, filters, controls], usage: "<uk-icon icon=\"sliders-horizontal\"></uk-icon>" }`
- `{icon_name: "sliders-vertical", synonyms: [settings, controls], usage: "<uk-icon icon=\"sliders-vertical\"></uk-icon>" }`
- `{icon_name: "smartphone-charging", synonyms: [phone, cellphone, device, power, screen], usage: "<uk-icon icon=\"smartphone-charging\"></uk-icon>" }`
- `{icon_name: "smartphone-nfc", synonyms: [contactless, payment, near-field communication, screen], usage: "<uk-icon icon=\"smartphone-nfc\"></uk-icon>" }`
- `{icon_name: "smartphone", synonyms: [phone, cellphone, device, screen], usage: "<uk-icon icon=\"smartphone\"></uk-icon>" }`
- `{icon_name: "smile-plus", synonyms: [emoji, face, happy, good, emotion, react, reaction, add], usage: "<uk-icon icon=\"smile-plus\"></uk-icon>" }`
- `{icon_name: "smile", synonyms: [emoji, face, happy, good, emotion], usage: "<uk-icon icon=\"smile\"></uk-icon>" }`
- `{icon_name: "snail", synonyms: [animal, insect, slow, speed, delicacy, spiral], usage: "<uk-icon icon=\"snail\"></uk-icon>" }`
- `{icon_name: "snowflake", synonyms: [cold, weather, freeze, snow, winter], usage: "<uk-icon icon=\"snowflake\"></uk-icon>" }`
- `{icon_name: "sofa", synonyms: [armchair, furniture, leisure, lounge, loveseat, couch], usage: "<uk-icon icon=\"sofa\"></uk-icon>" }`
- `{icon_name: "soup", synonyms: [food, dish, restaurant, course, meal, bowl, starter], usage: "<uk-icon icon=\"soup\"></uk-icon>" }`
- `{icon_name: "space", synonyms: [text, selection, letters, characters, font, typography], usage: "<uk-icon icon=\"space\"></uk-icon>" }`
- `{icon_name: "spade", synonyms: [shape, suit, playing, cards], usage: "<uk-icon icon=\"spade\"></uk-icon>" }`
- `{icon_name: "sparkle", synonyms: [star, effect, filter, night, magic, shiny, glitter, twinkle, celebration], usage: "<uk-icon icon=\"sparkle\"></uk-icon>" }`
- `{icon_name: "sparkles", synonyms: [stars, effect, filter, night, magic], usage: "<uk-icon icon=\"sparkles\"></uk-icon>" }`
- `{icon_name: "speaker", synonyms: [sound, audio, music, tweeter, subwoofer, bass, production, producer, dj], usage: "<uk-icon icon=\"speaker\"></uk-icon>" }`
- `{icon_name: "speech", synonyms: [disability, disabled, dda, human, accessibility, people, sound], usage: "<uk-icon icon=\"speech\"></uk-icon>" }`
- `{icon_name: "spell-check-2", synonyms: [spelling, error, mistake, oversight, typo, correction, code, linter, a], usage: "<uk-icon icon=\"spell-check-2\"></uk-icon>" }`
- `{icon_name: "spell-check", synonyms: [spelling, error, mistake, oversight, typo, correction, code, linter, a], usage: "<uk-icon icon=\"spell-check\"></uk-icon>" }`
- `{icon_name: "spline-pointer", synonyms: [path, tool, curve, node, click, pointer, target, vector], usage: "<uk-icon icon=\"spline-pointer\"></uk-icon>" }`
- `{icon_name: "spline", synonyms: [path, pen, tool, shape, curve, draw], usage: "<uk-icon icon=\"spline\"></uk-icon>" }`
- `{icon_name: "split", synonyms: [break, disband, divide, separate, branch, disunite], usage: "<uk-icon icon=\"split\"></uk-icon>" }`
- `{icon_name: "spray-can", synonyms: [paint, color, graffiti, decoration, aerosol, deodorant, shaving foam, air freshener], usage: "<uk-icon icon=\"spray-can\"></uk-icon>" }`
- `{icon_name: "sprout", synonyms: [leaf, nature, plant], usage: "<uk-icon icon=\"sprout\"></uk-icon>" }`
- `{icon_name: "square-activity", synonyms: [pulse, action, motion, movement, exercise, fitness, healthcare, heart rate monitor, vital signs, vitals, emergency room, er, intensive care, hospital, defibrillator, earthquake, siesmic, magnitude, richter scale, aftershock, tremor, shockwave, audio, waveform, synthesizer, synthesiser, music], usage: "<uk-icon icon=\"square-activity\"></uk-icon>" }`
- `{icon_name: "square-arrow-down-left", synonyms: [direction, south-west, diagonal, sign, turn, keyboard, button], usage: "<uk-icon icon=\"square-arrow-down-left\"></uk-icon>" }`
- `{icon_name: "square-arrow-down-right", synonyms: [direction, south-east, diagonal, sign, turn, keyboard, button], usage: "<uk-icon icon=\"square-arrow-down-right\"></uk-icon>" }`
- `{icon_name: "square-arrow-down", synonyms: [backwards, reverse, direction, south, sign, keyboard, button], usage: "<uk-icon icon=\"square-arrow-down\"></uk-icon>" }`
- `{icon_name: "square-arrow-left", synonyms: [previous, back, direction, west, sign, keyboard, button, <-], usage: "<uk-icon icon=\"square-arrow-left\"></uk-icon>" }`
- `{icon_name: "square-arrow-out-down-left", synonyms: [outwards, direction, south-west, diagonal], usage: "<uk-icon icon=\"square-arrow-out-down-left\"></uk-icon>" }`
- `{icon_name: "square-arrow-out-down-right", synonyms: [outwards, direction, south-east, diagonal], usage: "<uk-icon icon=\"square-arrow-out-down-right\"></uk-icon>" }`
- `{icon_name: "square-arrow-out-up-left", synonyms: [outwards, direction, north-west, diagonal], usage: "<uk-icon icon=\"square-arrow-out-up-left\"></uk-icon>" }`
- `{icon_name: "square-arrow-out-up-right", synonyms: [outwards, direction, north-east, diagonal, share, open, external, link], usage: "<uk-icon icon=\"square-arrow-out-up-right\"></uk-icon>" }`
- `{icon_name: "square-arrow-right", synonyms: [next, forward, direction, west, sign, keyboard, button, ->], usage: "<uk-icon icon=\"square-arrow-right\"></uk-icon>" }`
- `{icon_name: "square-arrow-up-left", synonyms: [direction, north-west, diagonal, sign, keyboard, button], usage: "<uk-icon icon=\"square-arrow-up-left\"></uk-icon>" }`
- `{icon_name: "square-arrow-up-right", synonyms: [direction, north-east, diagonal, sign, keyboard, button, share], usage: "<uk-icon icon=\"square-arrow-up-right\"></uk-icon>" }`
- `{icon_name: "square-arrow-up", synonyms: [forward, direction, north, sign, keyboard, button], usage: "<uk-icon icon=\"square-arrow-up\"></uk-icon>" }`
- `{icon_name: "square-asterisk", synonyms: [password, secret, access, key, multiply, multiplication, glob pattern, wildcard, *], usage: "<uk-icon icon=\"square-asterisk\"></uk-icon>" }`
- `{icon_name: "square-bottom-dashed-scissors", synonyms: [cut, snippet, chop, stationery, crafts], usage: "<uk-icon icon=\"square-bottom-dashed-scissors\"></uk-icon>" }`
- `{icon_name: "square-chart-gantt", synonyms: [projects, manage, overview, roadmap, plan, intentions, timeline, deadline, date, event, range, period, productivity, work, agile, code, coding, toolbar, button], usage: "<uk-icon icon=\"square-chart-gantt\"></uk-icon>" }`
- `{icon_name: "square-check-big", synonyms: [done, todo, tick, complete, task], usage: "<uk-icon icon=\"square-check-big\"></uk-icon>" }`
- `{icon_name: "square-check", synonyms: [done, todo, tick, complete, task], usage: "<uk-icon icon=\"square-check\"></uk-icon>" }`
- `{icon_name: "square-chevron-down", synonyms: [back, menu, panel], usage: "<uk-icon icon=\"square-chevron-down\"></uk-icon>" }`
- `{icon_name: "square-chevron-left", synonyms: [back, previous, less than, fewer, menu, panel, button, keyboard, <], usage: "<uk-icon icon=\"square-chevron-left\"></uk-icon>" }`
- `{icon_name: "square-chevron-right", synonyms: [forward, next, more than, greater, menu, panel, code, coding, command line, terminal, prompt, shell, console, >], usage: "<uk-icon icon=\"square-chevron-right\"></uk-icon>" }`
- `{icon_name: "square-chevron-up", synonyms: [caret, keyboard, button, mac, control, ctrl, superscript, exponential, power, ahead, menu, panel, ^], usage: "<uk-icon icon=\"square-chevron-up\"></uk-icon>" }`
- `{icon_name: "square-code", synonyms: [gist, source, programming, html, xml, coding], usage: "<uk-icon icon=\"square-code\"></uk-icon>" }`
- `{icon_name: "square-dashed-bottom-code", synonyms: [rectangle, aspect ratio, 1:1, shape, snippet, code, coding], usage: "<uk-icon icon=\"square-dashed-bottom-code\"></uk-icon>" }`
- `{icon_name: "square-dashed-bottom", synonyms: [rectangle, aspect ratio, 1:1, shape, snippet, code, coding], usage: "<uk-icon icon=\"square-dashed-bottom\"></uk-icon>" }`
- `{icon_name: "square-dashed-kanban", synonyms: [projects, manage, overview, board, tickets, issues, roadmap, plan, intentions, productivity, work, agile, draft, template, boilerplate, code, coding], usage: "<uk-icon icon=\"square-dashed-kanban\"></uk-icon>" }`
- `{icon_name: "square-dashed-mouse-pointer", synonyms: [inspector, element, mouse, click, pointer, box, browser, selector, target, dom, node], usage: "<uk-icon icon=\"square-dashed-mouse-pointer\"></uk-icon>" }`
- `{icon_name: "square-dashed", synonyms: [selection, square, rectangular, marquee, tool, dashed, box], usage: "<uk-icon icon=\"square-dashed\"></uk-icon>" }`
- `{icon_name: "square-divide", synonyms: [calculate, math, Ã·, /], usage: "<uk-icon icon=\"square-divide\"></uk-icon>" }`
- `{icon_name: "square-dot", synonyms: [git, diff, modified, .], usage: "<uk-icon icon=\"square-dot\"></uk-icon>" }`
- `{icon_name: "square-equal", synonyms: [calculate, =], usage: "<uk-icon icon=\"square-equal\"></uk-icon>" }`
- `{icon_name: "square-function", synonyms: [programming, code, automation, math], usage: "<uk-icon icon=\"square-function\"></uk-icon>" }`
- `{icon_name: "square-kanban", synonyms: [projects, manage, overview, board, tickets, issues, roadmap, plan, intentions, productivity, work, agile, code, coding, toolbar, button], usage: "<uk-icon icon=\"square-kanban\"></uk-icon>" }`
- `{icon_name: "square-library", synonyms: [books, reading, written, authors, stories, fiction, novels, information, knowledge, education, high school, university, college, academy, learning, study, research, collection, vinyl, records, albums, music, package], usage: "<uk-icon icon=\"square-library\"></uk-icon>" }`
- `{icon_name: "square-m", synonyms: [metro, subway, underground, track, line], usage: "<uk-icon icon=\"square-m\"></uk-icon>" }`
- `{icon_name: "square-menu", synonyms: [bars, navigation, hamburger, options, menu bar, panel], usage: "<uk-icon icon=\"square-menu\"></uk-icon>" }`
- `{icon_name: "square-minus", synonyms: [subtract, remove, decrease, reduce, calculator, button, keyboard, line, divider, separator, horizontal rule, hr, html, markup, markdown, ---, toolbar, operator, code, coding, minimum, downgrade], usage: "<uk-icon icon=\"square-minus\"></uk-icon>" }`
- `{icon_name: "square-mouse-pointer", synonyms: [inspector, element, mouse, click, pointer, box, browser, selector, target, dom, node], usage: "<uk-icon icon=\"square-mouse-pointer\"></uk-icon>" }`
- `{icon_name: "square-parking-off", synonyms: [parking lot, car park, no parking], usage: "<uk-icon icon=\"square-parking-off\"></uk-icon>" }`
- `{icon_name: "square-parking", synonyms: [parking lot, car park], usage: "<uk-icon icon=\"square-parking\"></uk-icon>" }`
- `{icon_name: "square-pen", synonyms: [pencil, change, create, draw, sketch, draft, writer, writing, biro, ink, marker, felt tip, stationery, artist], usage: "<uk-icon icon=\"square-pen\"></uk-icon>" }`
- `{icon_name: "square-percent", synonyms: [verified, unverified, sale, discount, offer, marketing, sticker, price tag], usage: "<uk-icon icon=\"square-percent\"></uk-icon>" }`
- `{icon_name: "square-pi", synonyms: [constant, code, coding, programming, symbol, trigonometry, geometry, formula], usage: "<uk-icon icon=\"square-pi\"></uk-icon>" }`
- `{icon_name: "square-pilcrow", synonyms: [paragraph, mark, paraph, blind, typography, type, text, prose, symbol], usage: "<uk-icon icon=\"square-pilcrow\"></uk-icon>" }`
- `{icon_name: "square-play", synonyms: [music, audio, video, start, run], usage: "<uk-icon icon=\"square-play\"></uk-icon>" }`
- `{icon_name: "square-plus", synonyms: [add, new, increase, increment, positive, calculate, calculator, button, keyboard, toolbar, maximum, upgrade, extra, operator, join, concatenate, code, coding, +], usage: "<uk-icon icon=\"square-plus\"></uk-icon>" }`
- `{icon_name: "square-power", synonyms: [on, off, device, switch, toggle, binary, boolean, reboot, restart, button, keyboard, troubleshoot], usage: "<uk-icon icon=\"square-power\"></uk-icon>" }`
- `{icon_name: "square-radical", synonyms: [calculate, formula, math, operator, root, square, symbol], usage: "<uk-icon icon=\"square-radical\"></uk-icon>" }`
- `{icon_name: "square-round-corner", synonyms: [border, radius, style, design, corner, layout, round, rounded], usage: "<uk-icon icon=\"square-round-corner\"></uk-icon>" }`
- `{icon_name: "square-scissors", synonyms: [cut, snippet, chop, stationery, crafts, toolbar, button], usage: "<uk-icon icon=\"square-scissors\"></uk-icon>" }`
- `{icon_name: "square-sigma", synonyms: [sum, calculate, formula, math, enumeration, enumerate], usage: "<uk-icon icon=\"square-sigma\"></uk-icon>" }`
- `{icon_name: "square-slash", synonyms: [git, diff, ignored, divide, division, shortcut, or, /], usage: "<uk-icon icon=\"square-slash\"></uk-icon>" }`
- `{icon_name: "square-split-horizontal", synonyms: [split, divide], usage: "<uk-icon icon=\"square-split-horizontal\"></uk-icon>" }`
- `{icon_name: "square-split-vertical", synonyms: [split, divide], usage: "<uk-icon icon=\"square-split-vertical\"></uk-icon>" }`
- `{icon_name: "square-square", synonyms: [float, center, rectangle], usage: "<uk-icon icon=\"square-square\"></uk-icon>" }`
- `{icon_name: "square-stack", synonyms: [versions, clone, copy, duplicate, multiple, revisions, version control, backup, history], usage: "<uk-icon icon=\"square-stack\"></uk-icon>" }`
- `{icon_name: "square-terminal", synonyms: [code, command line, prompt, shell], usage: "<uk-icon icon=\"square-terminal\"></uk-icon>" }`
- `{icon_name: "square-user-round", synonyms: [person, account, contact], usage: "<uk-icon icon=\"square-user-round\"></uk-icon>" }`
- `{icon_name: "square-user", synonyms: [person, account, contact], usage: "<uk-icon icon=\"square-user\"></uk-icon>" }`
- `{icon_name: "square-x", synonyms: [cancel, close, delete, remove, times, clear, math, multiply, multiplication], usage: "<uk-icon icon=\"square-x\"></uk-icon>" }`
- `{icon_name: "square", synonyms: [rectangle, aspect ratio, 1:1, shape], usage: "<uk-icon icon=\"square\"></uk-icon>" }`
- `{icon_name: "squares-exclude", synonyms: [sqaure, pathfinder, path, exclude, invert, xor, shape, vector], usage: "<uk-icon icon=\"squares-exclude\"></uk-icon>" }`
- `{icon_name: "squares-intersect", synonyms: [sqaure, pathfinder, path, intersect, shape, include, vector], usage: "<uk-icon icon=\"squares-intersect\"></uk-icon>" }`
- `{icon_name: "squares-subtract", synonyms: [sqaure, pathfinder, path, minus, subtract, subtraction, shape, front, vector], usage: "<uk-icon icon=\"squares-subtract\"></uk-icon>" }`
- `{icon_name: "squares-unite", synonyms: [sqaure, pathfinder, path, unite, union, shape, merge, vector], usage: "<uk-icon icon=\"squares-unite\"></uk-icon>" }`
- `{icon_name: "squircle", synonyms: [shape], usage: "<uk-icon icon=\"squircle\"></uk-icon>" }`
- `{icon_name: "squirrel", synonyms: [animal, rodent, pet, pest, nuts, retrieve, updates, storage, stash], usage: "<uk-icon icon=\"squirrel\"></uk-icon>" }`
- `{icon_name: "stamp", synonyms: [mark, print, clone, loyalty, library], usage: "<uk-icon icon=\"stamp\"></uk-icon>" }`
- `{icon_name: "star-half", synonyms: [bookmark, favorite, like, review, rating], usage: "<uk-icon icon=\"star-half\"></uk-icon>" }`
- `{icon_name: "star-off", synonyms: [dislike, unlike, remove, unrate], usage: "<uk-icon icon=\"star-off\"></uk-icon>" }`
- `{icon_name: "star", synonyms: [bookmark, favorite, like, review, rating], usage: "<uk-icon icon=\"star\"></uk-icon>" }`
- `{icon_name: "step-back", synonyms: [arrow, previous, music, left, reverse], usage: "<uk-icon icon=\"step-back\"></uk-icon>" }`
- `{icon_name: "step-forward", synonyms: [arrow, next, music, right, continue], usage: "<uk-icon icon=\"step-forward\"></uk-icon>" }`
- `{icon_name: "stethoscope", synonyms: [phonendoscope, medical, heart, lungs, sound], usage: "<uk-icon icon=\"stethoscope\"></uk-icon>" }`
- `{icon_name: "sticker", synonyms: [reaction, emotion, smile, happy, feedback], usage: "<uk-icon icon=\"sticker\"></uk-icon>" }`
- `{icon_name: "sticky-note", synonyms: [post-it, comment, annotation, reaction, memo, reminder, todo, task, idea, brainstorm, document, page, paper, sheet, stationary, office], usage: "<uk-icon icon=\"sticky-note\"></uk-icon>" }`
- `{icon_name: "store", synonyms: [shop, supermarket, stand, boutique, building], usage: "<uk-icon icon=\"store\"></uk-icon>" }`
- `{icon_name: "stretch-horizontal", synonyms: [items, flex, justify, distribute], usage: "<uk-icon icon=\"stretch-horizontal\"></uk-icon>" }`
- `{icon_name: "stretch-vertical", synonyms: [items, flex, justify, distribute], usage: "<uk-icon icon=\"stretch-vertical\"></uk-icon>" }`
- `{icon_name: "strikethrough", synonyms: [cross out, delete, remove, format], usage: "<uk-icon icon=\"strikethrough\"></uk-icon>" }`
- `{icon_name: "subscript", synonyms: [text], usage: "<uk-icon icon=\"subscript\"></uk-icon>" }`
- `{icon_name: "sun-dim", synonyms: [brightness, dim, low, brightness low], usage: "<uk-icon icon=\"sun-dim\"></uk-icon>" }`
- `{icon_name: "sun-medium", synonyms: [brightness, medium], usage: "<uk-icon icon=\"sun-medium\"></uk-icon>" }`
- `{icon_name: "sun-moon", synonyms: [night, dark, light, moon, sun, brightness, theme, auto theme, system theme, appearance], usage: "<uk-icon icon=\"sun-moon\"></uk-icon>" }`
- `{icon_name: "sun-snow", synonyms: [weather, air conditioning, temperature, hot, cold, seasons], usage: "<uk-icon icon=\"sun-snow\"></uk-icon>" }`
- `{icon_name: "sun", synonyms: [brightness, weather, light, summer], usage: "<uk-icon icon=\"sun\"></uk-icon>" }`
- `{icon_name: "sunrise", synonyms: [weather, time, morning, day], usage: "<uk-icon icon=\"sunrise\"></uk-icon>" }`
- `{icon_name: "sunset", synonyms: [weather, time, evening, night], usage: "<uk-icon icon=\"sunset\"></uk-icon>" }`
- `{icon_name: "superscript", synonyms: [text, exponent], usage: "<uk-icon icon=\"superscript\"></uk-icon>" }`
- `{icon_name: "swatch-book", synonyms: [colors, colours, swatches, pantone, shades, tint, hue, saturation, brightness, theme, scheme, palette, samples, textile, carpet], usage: "<uk-icon icon=\"swatch-book\"></uk-icon>" }`
- `{icon_name: "swiss-franc", synonyms: [currency, money, payment], usage: "<uk-icon icon=\"swiss-franc\"></uk-icon>" }`
- `{icon_name: "switch-camera", synonyms: [photo, selfie, front, back], usage: "<uk-icon icon=\"switch-camera\"></uk-icon>" }`
- `{icon_name: "sword", synonyms: [battle, challenge, game, war, weapon], usage: "<uk-icon icon=\"sword\"></uk-icon>" }`
- `{icon_name: "swords", synonyms: [battle, challenge, game, war, weapon], usage: "<uk-icon icon=\"swords\"></uk-icon>" }`
- `{icon_name: "syringe", synonyms: [medicine, medical, needle, pump, plunger, nozzle, blood], usage: "<uk-icon icon=\"syringe\"></uk-icon>" }`
- `{icon_name: "table-2", synonyms: [spreadsheet, grid], usage: "<uk-icon icon=\"table-2\"></uk-icon>" }`
- `{icon_name: "table-cells-merge", synonyms: [spreadsheet, grid, row], usage: "<uk-icon icon=\"table-cells-merge\"></uk-icon>" }`
- `{icon_name: "table-cells-split", synonyms: [spreadsheet, grid, row], usage: "<uk-icon icon=\"table-cells-split\"></uk-icon>" }`
- `{icon_name: "table-columns-split", synonyms: [spreadsheet, grid, cut, break, divide, separate, segment], usage: "<uk-icon icon=\"table-columns-split\"></uk-icon>" }`
- `{icon_name: "table-of-contents", synonyms: [toc, outline, navigation, document structure, index, overview, sections, chapters, content, documentation, manual, knowledge base, faq], usage: "<uk-icon icon=\"table-of-contents\"></uk-icon>" }`
- `{icon_name: "table-properties", synonyms: [property list, plist, spreadsheet, grid, dictionary, object, hash], usage: "<uk-icon icon=\"table-properties\"></uk-icon>" }`
- `{icon_name: "table-rows-split", synonyms: [spreadsheet, grid, cut, break, divide, separate, segment], usage: "<uk-icon icon=\"table-rows-split\"></uk-icon>" }`
- `{icon_name: "table", synonyms: [spreadsheet, grid], usage: "<uk-icon icon=\"table\"></uk-icon>" }`
- `{icon_name: "tablet-smartphone", synonyms: [responsive, screens, browser, testing, mobile], usage: "<uk-icon icon=\"tablet-smartphone\"></uk-icon>" }`
- `{icon_name: "tablet", synonyms: [device], usage: "<uk-icon icon=\"tablet\"></uk-icon>" }`
- `{icon_name: "tablets", synonyms: [medicine, medication, drug, prescription, pills, pharmacy], usage: "<uk-icon icon=\"tablets\"></uk-icon>" }`
- `{icon_name: "tag", synonyms: [label, badge, ticket, mark], usage: "<uk-icon icon=\"tag\"></uk-icon>" }`
- `{icon_name: "tags", synonyms: [labels, badges, tickets, marks, copy, multiple], usage: "<uk-icon icon=\"tags\"></uk-icon>" }`
- `{icon_name: "tally-1", synonyms: [count, score, enumerate, days, one, 1, first, bar, prison, cell, sentence], usage: "<uk-icon icon=\"tally-1\"></uk-icon>" }`
- `{icon_name: "tally-2", synonyms: [count, score, enumerate, days, two, 2, second, double, bars, prison, cell, sentence], usage: "<uk-icon icon=\"tally-2\"></uk-icon>" }`
- `{icon_name: "tally-3", synonyms: [count, score, enumerate, days, three, 3, third, triple, bars, prison, cell, sentence], usage: "<uk-icon icon=\"tally-3\"></uk-icon>" }`
- `{icon_name: "tally-4", synonyms: [count, score, enumerate, days, 4, fourth, quadruple, bars, prison, cell, sentence], usage: "<uk-icon icon=\"tally-4\"></uk-icon>" }`
- `{icon_name: "tally-5", synonyms: [count, score, enumerate, days, five, 5, fifth, bars, prison, cell, sentence, slash, /], usage: "<uk-icon icon=\"tally-5\"></uk-icon>" }`
- `{icon_name: "tangent", synonyms: [tangential, shape, circle, geometry, trigonometry, bezier curve], usage: "<uk-icon icon=\"tangent\"></uk-icon>" }`
- `{icon_name: "target", synonyms: [logo, bullseye, deadline, projects, overview, work, productivity], usage: "<uk-icon icon=\"target\"></uk-icon>" }`
- `{icon_name: "telescope", synonyms: [astronomy, space, discovery, exploration, explore, vision, perspective, focus, stargazing, observe, view], usage: "<uk-icon icon=\"telescope\"></uk-icon>" }`
- `{icon_name: "tent-tree", synonyms: [camping, campsite, holiday, retreat, nomadic, wilderness, outdoors], usage: "<uk-icon icon=\"tent-tree\"></uk-icon>" }`
- `{icon_name: "tent", synonyms: [tipi, teepee, wigwam, lodge, camping, campsite, holiday, retreat, nomadic, native american, indian, wilderness, outdoors], usage: "<uk-icon icon=\"tent\"></uk-icon>" }`
- `{icon_name: "terminal", synonyms: [code, command line, prompt, shell], usage: "<uk-icon icon=\"terminal\"></uk-icon>" }`
- `{icon_name: "test-tube-diagonal", synonyms: [tube, vial, phial, flask, ampoule, ampule, lab, chemistry, experiment, test], usage: "<uk-icon icon=\"test-tube-diagonal\"></uk-icon>" }`
- `{icon_name: "test-tube", synonyms: [tube, vial, phial, flask, ampoule, ampule, lab, chemistry, experiment, test], usage: "<uk-icon icon=\"test-tube\"></uk-icon>" }`
- `{icon_name: "test-tubes", synonyms: [tubes, vials, phials, flasks, ampoules, ampules, lab, chemistry, experiment, test], usage: "<uk-icon icon=\"test-tubes\"></uk-icon>" }`
- `{icon_name: "text-cursor-input", synonyms: [select], usage: "<uk-icon icon=\"text-cursor-input\"></uk-icon>" }`
- `{icon_name: "text-cursor", synonyms: [select], usage: "<uk-icon icon=\"text-cursor\"></uk-icon>" }`
- `{icon_name: "text-quote", synonyms: [blockquote, quotation, indent, reply, response], usage: "<uk-icon icon=\"text-quote\"></uk-icon>" }`
- `{icon_name: "text-search", synonyms: [find, data, copy, txt, pdf, document, scan, magnifier, magnifying glass], usage: "<uk-icon icon=\"text-search\"></uk-icon>" }`
- `{icon_name: "text-select", synonyms: [find, search, selection, dashed], usage: "<uk-icon icon=\"text-select\"></uk-icon>" }`
- `{icon_name: "text", synonyms: [find, search, data, txt, pdf, document], usage: "<uk-icon icon=\"text\"></uk-icon>" }`
- `{icon_name: "theater", synonyms: [theater, theatre, entertainment, podium, stage, musical], usage: "<uk-icon icon=\"theater\"></uk-icon>" }`
- `{icon_name: "thermometer-snowflake", synonyms: [temperature, celsius, fahrenheit, weather, cold, freeze, freezing], usage: "<uk-icon icon=\"thermometer-snowflake\"></uk-icon>" }`
- `{icon_name: "thermometer-sun", synonyms: [temperature, celsius, fahrenheit, weather, warm, hot], usage: "<uk-icon icon=\"thermometer-sun\"></uk-icon>" }`
- `{icon_name: "thermometer", synonyms: [temperature, celsius, fahrenheit, weather], usage: "<uk-icon icon=\"thermometer\"></uk-icon>" }`
- `{icon_name: "thumbs-down", synonyms: [dislike, bad, emotion], usage: "<uk-icon icon=\"thumbs-down\"></uk-icon>" }`
- `{icon_name: "thumbs-up", synonyms: [like, good, emotion], usage: "<uk-icon icon=\"thumbs-up\"></uk-icon>" }`
- `{icon_name: "ticket-check", synonyms: [entry, pass, voucher, event, concert, show, booked, purchased, receipt, redeemed, validated, verified, certified, checked, used], usage: "<uk-icon icon=\"ticket-check\"></uk-icon>" }`
- `{icon_name: "ticket-minus", synonyms: [entry, pass, voucher, event, concert, show, remove, cancel, unbook, subtract, decrease, -], usage: "<uk-icon icon=\"ticket-minus\"></uk-icon>" }`
- `{icon_name: "ticket-percent", synonyms: [discount, reduced, offer, voucher, entry, pass, event, concert, show, book, purchase, %], usage: "<uk-icon icon=\"ticket-percent\"></uk-icon>" }`
- `{icon_name: "ticket-plus", synonyms: [entry, pass, voucher, event, concert, show, book, purchase, add, +], usage: "<uk-icon icon=\"ticket-plus\"></uk-icon>" }`
- `{icon_name: "ticket-slash", synonyms: [entry, pass, voucher, event, concert, show, redeemed, used, marked, checked, verified, spoiled, invalidated, void, denied, refused, banned, barred, forbidden, prohibited, cancelled, cancellation, refunded, delete, remove, clear, error], usage: "<uk-icon icon=\"ticket-slash\"></uk-icon>" }`
- `{icon_name: "ticket-x", synonyms: [entry, pass, voucher, event, concert, show, cancelled, cancellation, refunded, used, void, invalidated, spoiled, denied, refused, banned, barred, forbidden, prohibited, delete, remove, clear, error, x], usage: "<uk-icon icon=\"ticket-x\"></uk-icon>" }`
- `{icon_name: "ticket", synonyms: [entry, pass, voucher, event, concert, show, perforated, dashed], usage: "<uk-icon icon=\"ticket\"></uk-icon>" }`
- `{icon_name: "tickets-plane", synonyms: [plane, trip, airplane, flight, travel, fly, takeoff, vacation, passenger, pass, check-in, airport], usage: "<uk-icon icon=\"tickets-plane\"></uk-icon>" }`
- `{icon_name: "tickets", synonyms: [trip, travel, pass, entry, voucher, event, concert, show, perforated, dashed], usage: "<uk-icon icon=\"tickets\"></uk-icon>" }`
- `{icon_name: "timer-off", synonyms: [time, timer, stopwatch], usage: "<uk-icon icon=\"timer-off\"></uk-icon>" }`
- `{icon_name: "timer-reset", synonyms: [time, timer, stopwatch], usage: "<uk-icon icon=\"timer-reset\"></uk-icon>" }`
- `{icon_name: "timer", synonyms: [time, timer, stopwatch], usage: "<uk-icon icon=\"timer\"></uk-icon>" }`
- `{icon_name: "toggle-left", synonyms: [on, off, switch, boolean], usage: "<uk-icon icon=\"toggle-left\"></uk-icon>" }`
- `{icon_name: "toggle-right", synonyms: [on, off, switch, boolean], usage: "<uk-icon icon=\"toggle-right\"></uk-icon>" }`
- `{icon_name: "toilet", synonyms: [toilet, potty, bathroom, washroom], usage: "<uk-icon icon=\"toilet\"></uk-icon>" }`
- `{icon_name: "tornado", synonyms: [weather, wind, storm, hurricane], usage: "<uk-icon icon=\"tornado\"></uk-icon>" }`
- `{icon_name: "torus", synonyms: [donut, doughnut, ring, hollow, 3d, fast food, junk food, snack, treat, sweet, sugar, dessert], usage: "<uk-icon icon=\"torus\"></uk-icon>" }`
- `{icon_name: "touchpad-off", synonyms: [trackpad, cursor], usage: "<uk-icon icon=\"touchpad-off\"></uk-icon>" }`
- `{icon_name: "touchpad", synonyms: [trackpad, cursor], usage: "<uk-icon icon=\"touchpad\"></uk-icon>" }`
- `{icon_name: "tower-control", synonyms: [airport, travel, tower, transportation, lighthouse], usage: "<uk-icon icon=\"tower-control\"></uk-icon>" }`
- `{icon_name: "toy-brick", synonyms: [lego, block, addon, plugin, integration], usage: "<uk-icon icon=\"toy-brick\"></uk-icon>" }`
- `{icon_name: "tractor", synonyms: [farming, farmer, ranch, harvest, equipment, vehicle], usage: "<uk-icon icon=\"tractor\"></uk-icon>" }`
- `{icon_name: "traffic-cone", synonyms: [roadworks, tarmac, safety, block], usage: "<uk-icon icon=\"traffic-cone\"></uk-icon>" }`
- `{icon_name: "train-front-tunnel", synonyms: [railway, metro, subway, underground, speed, bullet, fast, track, line], usage: "<uk-icon icon=\"train-front-tunnel\"></uk-icon>" }`
- `{icon_name: "train-front", synonyms: [railway, metro, subway, underground, high-speed, bullet, fast, track, line], usage: "<uk-icon icon=\"train-front\"></uk-icon>" }`
- `{icon_name: "train-track", synonyms: [railway, line], usage: "<uk-icon icon=\"train-track\"></uk-icon>" }`
- `{icon_name: "tram-front", synonyms: [railway, metro, subway, underground, track, line, tourism], usage: "<uk-icon icon=\"tram-front\"></uk-icon>" }`
- `{icon_name: "transgender", synonyms: [gender, inclusive], usage: "<uk-icon icon=\"transgender\"></uk-icon>" }`
- `{icon_name: "trash-2", synonyms: [garbage, delete, remove, bin], usage: "<uk-icon icon=\"trash-2\"></uk-icon>" }`
- `{icon_name: "trash", synonyms: [garbage, delete, remove, bin], usage: "<uk-icon icon=\"trash\"></uk-icon>" }`
- `{icon_name: "tree-deciduous", synonyms: [tree, forest, park, nature], usage: "<uk-icon icon=\"tree-deciduous\"></uk-icon>" }`
- `{icon_name: "tree-palm", synonyms: [vacation, leisure, island], usage: "<uk-icon icon=\"tree-palm\"></uk-icon>" }`
- `{icon_name: "tree-pine", synonyms: [tree, pine, forest, park, nature], usage: "<uk-icon icon=\"tree-pine\"></uk-icon>" }`
- `{icon_name: "trees", synonyms: [tree, forest, park, nature], usage: "<uk-icon icon=\"trees\"></uk-icon>" }`
- `{icon_name: "trello", synonyms: [logo, brand], usage: "<uk-icon icon=\"trello\"></uk-icon>" }`
- `{icon_name: "trending-down", synonyms: [statistics], usage: "<uk-icon icon=\"trending-down\"></uk-icon>" }`
- `{icon_name: "trending-up-down", synonyms: [arrows, estimated, indeterminate, data fluctuation, uncertain, forecast, variable, prediction, dynamic, volatile], usage: "<uk-icon icon=\"trending-up-down\"></uk-icon>" }`
- `{icon_name: "trending-up", synonyms: [statistics], usage: "<uk-icon icon=\"trending-up\"></uk-icon>" }`
- `{icon_name: "triangle-alert", synonyms: [warning, alert, danger, exclamation mark, linter], usage: "<uk-icon icon=\"triangle-alert\"></uk-icon>" }`
- `{icon_name: "triangle-dashed", synonyms: [equilateral, delta, shape, pyramid, hierarchy, dashed], usage: "<uk-icon icon=\"triangle-dashed\"></uk-icon>" }`
- `{icon_name: "triangle-right", synonyms: [volume, controls, controller, tv remote, geometry, delta, ramp, slope, incline, increase], usage: "<uk-icon icon=\"triangle-right\"></uk-icon>" }`
- `{icon_name: "triangle", synonyms: [equilateral, delta, shape, pyramid, hierarchy], usage: "<uk-icon icon=\"triangle\"></uk-icon>" }`
- `{icon_name: "trophy", synonyms: [prize, sports, winner, achievement, award, champion, celebration, victory], usage: "<uk-icon icon=\"trophy\"></uk-icon>" }`
- `{icon_name: "truck-electric", synonyms: [delivery, van, shipping, haulage, lorry, electric], usage: "<uk-icon icon=\"truck-electric\"></uk-icon>" }`
- `{icon_name: "truck", synonyms: [delivery, van, shipping, haulage, lorry], usage: "<uk-icon icon=\"truck\"></uk-icon>" }`
- `{icon_name: "turtle", synonyms: [animal, pet, tortoise, slow, speed], usage: "<uk-icon icon=\"turtle\"></uk-icon>" }`
- `{icon_name: "tv-minimal-play", synonyms: [flatscreen, television, stream, display, widescreen, high-definition, hd, 1080p, 4k, 8k, smart, digital, video, movie, live, ott, running, start, film, home cinema, entertainment, showtime, channels, catchup], usage: "<uk-icon icon=\"tv-minimal-play\"></uk-icon>" }`
- `{icon_name: "tv-minimal", synonyms: [flatscreen, television, stream, display, widescreen, high-definition, hd, 1080p, 4k, 8k, smart, digital, video, home cinema, entertainment, showtime, channels, catchup], usage: "<uk-icon icon=\"tv-minimal\"></uk-icon>" }`
- `{icon_name: "tv", synonyms: [television, stream, display, widescreen, high-definition, hd, 1080p, 4k, 8k, smart, digital, video, entertainment, showtime, channels, terrestrial, satellite, cable, broadcast, live, frequency, tune, scan, aerial, receiver, transmission, signal, connection, connectivity], usage: "<uk-icon icon=\"tv\"></uk-icon>" }`
- `{icon_name: "twitch", synonyms: [logo, social], usage: "<uk-icon icon=\"twitch\"></uk-icon>" }`
- `{icon_name: "twitter", synonyms: [logo, social], usage: "<uk-icon icon=\"twitter\"></uk-icon>" }`
- `{icon_name: "type-outline", synonyms: [text, font, typography, silhouette, profile, contour, stroke, line], usage: "<uk-icon icon=\"type-outline\"></uk-icon>" }`
- `{icon_name: "type", synonyms: [text, font, typography], usage: "<uk-icon icon=\"type\"></uk-icon>" }`
- `{icon_name: "umbrella-off", synonyms: [rain, weather, uncovered, uninsured, antivirus, unprotected, risky], usage: "<uk-icon icon=\"umbrella-off\"></uk-icon>" }`
- `{icon_name: "umbrella", synonyms: [rain, weather], usage: "<uk-icon icon=\"umbrella\"></uk-icon>" }`
- `{icon_name: "underline", synonyms: [text, format], usage: "<uk-icon icon=\"underline\"></uk-icon>" }`
- `{icon_name: "undo-2", synonyms: [redo, rerun, history, back, return, reverse, revert, direction, u-turn], usage: "<uk-icon icon=\"undo-2\"></uk-icon>" }`
- `{icon_name: "undo-dot", synonyms: [redo, history, step, back], usage: "<uk-icon icon=\"undo-dot\"></uk-icon>" }`
- `{icon_name: "undo", synonyms: [redo, rerun, history], usage: "<uk-icon icon=\"undo\"></uk-icon>" }`
- `{icon_name: "unfold-horizontal", synonyms: [arrow, collapse, fold, vertical, dashed], usage: "<uk-icon icon=\"unfold-horizontal\"></uk-icon>" }`
- `{icon_name: "unfold-vertical", synonyms: [arrow, expand, vertical, dashed], usage: "<uk-icon icon=\"unfold-vertical\"></uk-icon>" }`
- `{icon_name: "ungroup", synonyms: [cubes, packages, parts, units, collection, cluster, separate], usage: "<uk-icon icon=\"ungroup\"></uk-icon>" }`
- `{icon_name: "university", synonyms: [building, education, childhood, school], usage: "<uk-icon icon=\"university\"></uk-icon>" }`
- `{icon_name: "unlink-2", synonyms: [url, unchain], usage: "<uk-icon icon=\"unlink-2\"></uk-icon>" }`
- `{icon_name: "unlink", synonyms: [url, unchain], usage: "<uk-icon icon=\"unlink\"></uk-icon>" }`
- `{icon_name: "unplug", synonyms: [electricity, energy, electronics, socket, outlet, disconnect], usage: "<uk-icon icon=\"unplug\"></uk-icon>" }`
- `{icon_name: "upload", synonyms: [file], usage: "<uk-icon icon=\"upload\"></uk-icon>" }`
- `{icon_name: "usb", synonyms: [universal, serial, bus, controller, connector, interface], usage: "<uk-icon icon=\"usb\"></uk-icon>" }`
- `{icon_name: "user-check", synonyms: [followed, subscribed, done, todo, tick, complete, task], usage: "<uk-icon icon=\"user-check\"></uk-icon>" }`
- `{icon_name: "user-cog", synonyms: [settings, edit, cog, gear], usage: "<uk-icon icon=\"user-cog\"></uk-icon>" }`
- `{icon_name: "user-lock", synonyms: [person, lock, locked, account, secure], usage: "<uk-icon icon=\"user-lock\"></uk-icon>" }`
- `{icon_name: "user-minus", synonyms: [delete, remove, unfollow, unsubscribe], usage: "<uk-icon icon=\"user-minus\"></uk-icon>" }`
- `{icon_name: "user-pen", synonyms: [person, account, contact, profile, edit, change], usage: "<uk-icon icon=\"user-pen\"></uk-icon>" }`
- `{icon_name: "user-plus", synonyms: [new, add, create, follow, subscribe], usage: "<uk-icon icon=\"user-plus\"></uk-icon>" }`
- `{icon_name: "user-round-check", synonyms: [followed, subscribed, done, todo, tick, complete, task], usage: "<uk-icon icon=\"user-round-check\"></uk-icon>" }`
- `{icon_name: "user-round-cog", synonyms: [settings, edit, cog, gear], usage: "<uk-icon icon=\"user-round-cog\"></uk-icon>" }`
- `{icon_name: "user-round-minus", synonyms: [delete, remove, unfollow, unsubscribe], usage: "<uk-icon icon=\"user-round-minus\"></uk-icon>" }`
- `{icon_name: "user-round-pen", synonyms: [person, account, contact, profile, edit, change], usage: "<uk-icon icon=\"user-round-pen\"></uk-icon>" }`
- `{icon_name: "user-round-plus", synonyms: [new, add, create, follow, subscribe], usage: "<uk-icon icon=\"user-round-plus\"></uk-icon>" }`
- `{icon_name: "user-round-search", synonyms: [person, account, contact, find, scan, magnifier, magnifying glass], usage: "<uk-icon icon=\"user-round-search\"></uk-icon>" }`
- `{icon_name: "user-round-x", synonyms: [delete, remove, unfollow, unsubscribe, unavailable], usage: "<uk-icon icon=\"user-round-x\"></uk-icon>" }`
- `{icon_name: "user-round", synonyms: [person, account, contact], usage: "<uk-icon icon=\"user-round\"></uk-icon>" }`
- `{icon_name: "user-search", synonyms: [person, account, contact, find, scan, magnifier, magnifying glass], usage: "<uk-icon icon=\"user-search\"></uk-icon>" }`
- `{icon_name: "user-x", synonyms: [delete, remove, unfollow, unsubscribe, unavailable], usage: "<uk-icon icon=\"user-x\"></uk-icon>" }`
- `{icon_name: "user", synonyms: [person, account, contact], usage: "<uk-icon icon=\"user\"></uk-icon>" }`
- `{icon_name: "users-round", synonyms: [group, people], usage: "<uk-icon icon=\"users-round\"></uk-icon>" }`
- `{icon_name: "users", synonyms: [group, people], usage: "<uk-icon icon=\"users\"></uk-icon>" }`
- `{icon_name: "utensils-crossed", synonyms: [fork, knife, cutlery, flatware, tableware, silverware, food, restaurant, meal, breakfast, dinner, supper], usage: "<uk-icon icon=\"utensils-crossed\"></uk-icon>" }`
- `{icon_name: "utensils", synonyms: [fork, knife, cutlery, flatware, tableware, silverware, food, restaurant, meal, breakfast, dinner, supper], usage: "<uk-icon icon=\"utensils\"></uk-icon>" }`
- `{icon_name: "utility-pole", synonyms: [electricity, energy, transmission line, telegraph pole, power lines, phone], usage: "<uk-icon icon=\"utility-pole\"></uk-icon>" }`
- `{icon_name: "variable", synonyms: [code, coding, programming, symbol, calculate, algebra, x, parentheses, parenthesis, brackets, parameter, (, )], usage: "<uk-icon icon=\"variable\"></uk-icon>" }`
- `{icon_name: "vault", synonyms: [safe, lockbox, deposit, locker, coffer, strongbox, safety, secure, storage, valuables, bank], usage: "<uk-icon icon=\"vault\"></uk-icon>" }`
- `{icon_name: "vegan", synonyms: [vegetarian, fruitarian, herbivorous, animal rights, diet], usage: "<uk-icon icon=\"vegan\"></uk-icon>" }`
- `{icon_name: "venetian-mask", synonyms: [mask, masquerade, impersonate, secret, incognito], usage: "<uk-icon icon=\"venetian-mask\"></uk-icon>" }`
- `{icon_name: "venus-and-mars", synonyms: [gender, sex, intersex, androgynous, hermaphrodite], usage: "<uk-icon icon=\"venus-and-mars\"></uk-icon>" }`
- `{icon_name: "venus", synonyms: [gender, sex, female, feminine, woman, girl], usage: "<uk-icon icon=\"venus\"></uk-icon>" }`
- `{icon_name: "vibrate-off", synonyms: [smartphone, notification, rumble, haptic feedback, notifications, screen], usage: "<uk-icon icon=\"vibrate-off\"></uk-icon>" }`
- `{icon_name: "vibrate", synonyms: [smartphone, notification, rumble, haptic feedback, screen], usage: "<uk-icon icon=\"vibrate\"></uk-icon>" }`
- `{icon_name: "video-off", synonyms: [camera, movie, film], usage: "<uk-icon icon=\"video-off\"></uk-icon>" }`
- `{icon_name: "video", synonyms: [camera, movie, film, recording, motion picture, camcorder, reel], usage: "<uk-icon icon=\"video\"></uk-icon>" }`
- `{icon_name: "videotape", synonyms: [vhs, movie, film, recording, motion picture, showreel, cassette], usage: "<uk-icon icon=\"videotape\"></uk-icon>" }`
- `{icon_name: "view", synonyms: [eye, look], usage: "<uk-icon icon=\"view\"></uk-icon>" }`
- `{icon_name: "voicemail", synonyms: [phone, cassette, tape, reel, recording, audio], usage: "<uk-icon icon=\"voicemail\"></uk-icon>" }`
- `{icon_name: "volleyball", synonyms: [beach, sand, net, holiday, vacation, summer, soccer, football, futbol, kick, pitch, goal, score, bounce, leather, wool, yarn, knitting, sewing, thread, embroidery, textile], usage: "<uk-icon icon=\"volleyball\"></uk-icon>" }`
- `{icon_name: "volume-1", synonyms: [music, sound, speaker], usage: "<uk-icon icon=\"volume-1\"></uk-icon>" }`
- `{icon_name: "volume-2", synonyms: [music, sound, speaker], usage: "<uk-icon icon=\"volume-2\"></uk-icon>" }`
- `{icon_name: "volume-off", synonyms: [music, sound, mute, speaker], usage: "<uk-icon icon=\"volume-off\"></uk-icon>" }`
- `{icon_name: "volume-x", synonyms: [music, sound, mute, speaker], usage: "<uk-icon icon=\"volume-x\"></uk-icon>" }`
- `{icon_name: "volume", synonyms: [music, sound, mute, speaker], usage: "<uk-icon icon=\"volume\"></uk-icon>" }`
- `{icon_name: "vote", synonyms: [vote, poll, ballot, political, social, check, tick], usage: "<uk-icon icon=\"vote\"></uk-icon>" }`
- `{icon_name: "wallet-cards", synonyms: [money, finance, pocket, credit, purchase, payment, shopping, retail, consumer, cc], usage: "<uk-icon icon=\"wallet-cards\"></uk-icon>" }`
- `{icon_name: "wallet-minimal", synonyms: [finance, pocket], usage: "<uk-icon icon=\"wallet-minimal\"></uk-icon>" }`
- `{icon_name: "wallet", synonyms: [money, finance, pocket], usage: "<uk-icon icon=\"wallet\"></uk-icon>" }`
- `{icon_name: "wallpaper", synonyms: [cover, lock screen], usage: "<uk-icon icon=\"wallpaper\"></uk-icon>" }`
- `{icon_name: "wand-sparkles", synonyms: [magic, wizard, magician], usage: "<uk-icon icon=\"wand-sparkles\"></uk-icon>" }`
- `{icon_name: "wand", synonyms: [magic, selection], usage: "<uk-icon icon=\"wand\"></uk-icon>" }`
- `{icon_name: "warehouse", synonyms: [storage, logistics, building], usage: "<uk-icon icon=\"warehouse\"></uk-icon>" }`
- `{icon_name: "washing-machine", synonyms: [tumble dryer, amenities, electronics, cycle, clothes, rinse, spin, drum], usage: "<uk-icon icon=\"washing-machine\"></uk-icon>" }`
- `{icon_name: "watch", synonyms: [clock, time], usage: "<uk-icon icon=\"watch\"></uk-icon>" }`
- `{icon_name: "waves-ladder", synonyms: [swimming, water, pool, lifeguard, ocean, ðŸŒŠ, ðŸŠâ€â™‚ï¸, ðŸŠâ€â™€ï¸, ðŸŠ, ðŸ¥½], usage: "<uk-icon icon=\"waves-ladder\"></uk-icon>" }`
- `{icon_name: "waves", synonyms: [water, sea, sound, hertz, wavelength, vibrate], usage: "<uk-icon icon=\"waves\"></uk-icon>" }`
- `{icon_name: "waypoints", synonyms: [indirection, vpn, virtual private network, proxy, connections, bounce, reroute, path, journey, planner, stops, stations, shared, spread, viral], usage: "<uk-icon icon=\"waypoints\"></uk-icon>" }`
- `{icon_name: "webcam", synonyms: [camera, security], usage: "<uk-icon icon=\"webcam\"></uk-icon>" }`
- `{icon_name: "webhook-off", synonyms: [push api, interface, callback], usage: "<uk-icon icon=\"webhook-off\"></uk-icon>" }`
- `{icon_name: "webhook", synonyms: [push api, interface, callback], usage: "<uk-icon icon=\"webhook\"></uk-icon>" }`
- `{icon_name: "weight", synonyms: [mass, heavy, lead, metal, measure, geometry, scales, balance], usage: "<uk-icon icon=\"weight\"></uk-icon>" }`
- `{icon_name: "wheat-off", synonyms: [corn, cereal, grain, gluten free, allergy, intolerance, diet], usage: "<uk-icon icon=\"wheat-off\"></uk-icon>" }`
- `{icon_name: "wheat", synonyms: [corn, cereal, grain, gluten], usage: "<uk-icon icon=\"wheat\"></uk-icon>" }`
- `{icon_name: "whole-word", synonyms: [text, selection, letters, characters, font, typography], usage: "<uk-icon icon=\"whole-word\"></uk-icon>" }`
- `{icon_name: "wifi-high", synonyms: [connection, signal, wireless], usage: "<uk-icon icon=\"wifi-high\"></uk-icon>" }`
- `{icon_name: "wifi-low", synonyms: [connection, signal, wireless], usage: "<uk-icon icon=\"wifi-low\"></uk-icon>" }`
- `{icon_name: "wifi-off", synonyms: [disabled], usage: "<uk-icon icon=\"wifi-off\"></uk-icon>" }`
- `{icon_name: "wifi-pen", synonyms: [edit, wifi, pen, change, network], usage: "<uk-icon icon=\"wifi-pen\"></uk-icon>" }`
- `{icon_name: "wifi-zero", synonyms: [connection, signal, wireless], usage: "<uk-icon icon=\"wifi-zero\"></uk-icon>" }`
- `{icon_name: "wifi", synonyms: [connection, signal, wireless], usage: "<uk-icon icon=\"wifi\"></uk-icon>" }`
- `{icon_name: "wind-arrow-down", synonyms: [weather, air, pressure, blow], usage: "<uk-icon icon=\"wind-arrow-down\"></uk-icon>" }`
- `{icon_name: "wind", synonyms: [weather, air, blow], usage: "<uk-icon icon=\"wind\"></uk-icon>" }`
- `{icon_name: "wine-off", synonyms: [alcohol, beverage, drink, glass, alcohol free, abstinence, abstaining, teetotalism, allergy, intolerance], usage: "<uk-icon icon=\"wine-off\"></uk-icon>" }`
- `{icon_name: "wine", synonyms: [alcohol, beverage, bar, drink, glass, sommelier, vineyard, winery], usage: "<uk-icon icon=\"wine\"></uk-icon>" }`
- `{icon_name: "workflow", synonyms: [action, continuous integration, ci, automation, devops, network, node, connection], usage: "<uk-icon icon=\"workflow\"></uk-icon>" }`
- `{icon_name: "worm", synonyms: [invertebrate, grub, larva, snake, crawl, wiggle, slither, pest control, computer virus, malware], usage: "<uk-icon icon=\"worm\"></uk-icon>" }`
- `{icon_name: "wrap-text", synonyms: [words, lines, break, paragraph], usage: "<uk-icon icon=\"wrap-text\"></uk-icon>" }`
- `{icon_name: "wrench", synonyms: [account, settings, spanner, diy, toolbox, build, construction], usage: "<uk-icon icon=\"wrench\"></uk-icon>" }`
- `{icon_name: "x", synonyms: [cancel, close, delete, remove, times, clear, math, multiply, multiplication], usage: "<uk-icon icon=\"x\"></uk-icon>" }`
- `{icon_name: "youtube", synonyms: [logo, social, video, play], usage: "<uk-icon icon=\"youtube\"></uk-icon>" }`
- `{icon_name: "zap-off", synonyms: [flash, camera, lightning, electricity, energy], usage: "<uk-icon icon=\"zap-off\"></uk-icon>" }`
- `{icon_name: "zap", synonyms: [flash, camera, lightning, electricity, energy], usage: "<uk-icon icon=\"zap\"></uk-icon>" }`
- `{icon_name: "zoom-in", synonyms: [magnifying glass, plus], usage: "<uk-icon icon=\"zoom-in\"></uk-icon>" }`
- `{icon_name: "zoom-out", synonyms: [magnifying glass, plus], usage: "<uk-icon icon=\"zoom-out\"></uk-icon>" }`



# File: icon.md
==================================================

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


# File: image.md
==================================================

## Image

The Image component emulates browser features of the `<img>` element, but for background images. This includes `loading="lazy"`, `srcset` and `sizes` attributes as well as the `<source>` element from the `<picture>` element. This speeds up page loading times and decreases traffic by only loading background images as they enter the viewport. Optimized background images are served for different device widths and high-resolution (retina) displays.

To apply this component, add the `data-uk-img` and the `data-src` attribute containing the image path for the background image to a `div` or any other element. By default, the background image will be lazy-loaded as it enters the viewport when scrolling.

```html
<div data-src="" data-uk-img>…</div>
```

### Example

```html
<div
  class="flex h-80 items-center justify-center bg-cover"
  data-src="https://images.unsplash.com/photo-1490822180406-880c226c150b?fit=crop&w=650&h=433&q=80"
  data-uk-img
>
  <h1 class="uk-h1 text-white">Background Image</h1>
</div>
```

## Eager loading

To avoid lazy loading background images for the first visible viewport but still use other features of this component, add the `loading="eager"` parameter to the `data-uk-img` attribute.

```html
<div data-src="" data-uk-img="loading: eager">…</div>
```

### Example

```html
<div
  class="flex h-80 items-center justify-center bg-cover"
  data-src="https://images.unsplash.com/photo-1495321308589-43affb814eee?fit=crop&w=650&h=433&q=80"
  data-uk-img="loading: eager"
>
  <h1 class="uk-h1">Background Image</h1>
</div>
```

## Srcset

To use the `srcset` feature for background images, just add the `data-srcset` attribute. Optionally, add the `sizes` attribute but without a prefix.

```html
<div data-src="" data-srcset="" sizes="" data-uk-img>…</div>
```

### Example

```html
<div
  class="flex h-80 items-center justify-center bg-cover"
  data-src="https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?fit=crop&w=650&h=433&q=80"
  data-srcset="https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?fit=crop&w=650&h=433&q=80 650w,
                  https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?fit=crop&w=1300&h=866&q=80 1300w"
  sizes="(min-width: 650px) 650px, 100vw"
  uk-img
>
  <h1 class="uk-h1">Background Image</h1>
</div>
```

## Picture sources

To use different image sources just like the `<picture>` element that contains `<source>` elements does, add the `source` attribute with `srcset`, `media` and `type` parameters.

```html
<div sources="srcset: ____; media: ____" data-src="" data-uk-img>…</div>

<div sources="srcset: ____; type: ____" data-src="" data-uk-img>…</div>
```

### Example

```html
<div
  class="flex h-80 items-center justify-center bg-cover"
  data-src="https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?fit=crop&w=650&h=433&q=80"
  data-srcset="https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?fit=crop&w=650&h=433&q=80 650w,
                  https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?fit=crop&w=1300&h=866&q=80 1300w"
  sizes="(min-width: 650px) 650px, 100vw"
  uk-img
>
  <h1 class="uk-h1">Background Image</h1>
</div>
```

It's possible to offer multiple image sources and also multiple resolutions for each source using `srcset`.

```html
<div
  sources="srcset: ____; media: ____"
  data-src=""
  data-srcset=""
  sizes=""
  data-uk-img
>
  …
</div>
```

### Example

```html
<div
  class="flex h-80 items-center justify-center bg-cover"
  sources="srcset: https://images.unsplash.com/photo-1464621922360-27f3bf0eca75?fit=crop&w=650&h=433&q=80 650w,
                      https://images.unsplash.com/photo-1464621922360-27f3bf0eca75?fit=crop&w=1300&h=866&q=80 1300w;
              media: (min-width: 1200px)"
  data-src="https://images.unsplash.com/photo-1472803828399-39d4ac53c6e5?fit=crop&w=650&h=433&q=80"
  data-srcset="https://images.unsplash.com/photo-1472803828399-39d4ac53c6e5?fit=crop&w=650&h=433&q=80 650w,
                  https://images.unsplash.com/photo-1472803828399-39d4ac53c6e5?fit=crop&w=1300&h=866&q=80 1300w"
  sizes="(min-width: 650px) 650px, 100vw"
  data-uk-img
>
  <h1 class="uk-h1 text-white">Background Image</h1>
</div>
```

Multiple sources can be defined using JSON syntax.

```json
[
  {
    "srcset": "____",
    "media": "____"
  },
  {
    "srcset": "____",
    "type": "____"
  }
]
```

The JSON needs to be HTML encoded.

```html
<div
  sources='[{"type": "____",
                "srcset": "____"
               },
               {"type": "____",
                "srcset": "____"
               }]'
  data-src=""
  data-uk-img
>
  …
</div>
```

This example offers alternative image formats like _WebP_ and _AVIF_.

### Example

```html
<div
  class="flex h-80 items-center justify-center bg-cover"
  sources='[{"srcset": "/images/image-type.avif",
                "type": "image\/avif"
                },
                {"srcset": "/images/image-type.webp",
                "type": "image\/webp"
                }]'
  data-src="/images/image-type.jpg"
  data-uk-img
>
  <h1 class="uk-h1">Background Image</h1>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option    | Value  | Default | Description                                                                                                                                                                             |
| --------- | ------ | ------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `dataSrc` | String |         | The image's `src` attribute.                                                                                                                                                            |
| `sources` | String |         | The image's sources. This option is used for background images only. The source attributes are passed in `key: value;` format for a single source. For multiple sources in JSON format. |
| `loading` | String | `lazy`  | Enable lazy/eager loading. Set to `eager` for images within the first visible viewport.                                                                                                 |
| `margin`  | String | `50%`   | The margin is added to the viewport's bounding box, before computing an intersection with the image. The value must be in px or % units.                                                |
| `target`  | String | `false` | A list of targets whose bounding boxes will be used to compute an intersection with the image. Defaults to the image itself.                                                            |

`dataSrc` is the _Primary_ option, and its key may be omitted if it's the only option in the attribute value.

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.img(element, options);
```

Note: The Image component keeps records of already loaded images in the Session Storage. That's how it tries to determine if an image is already cached. A cached image is loaded immediately, without the lazy loading mechanism to prevent any rendering flashes. Prior to testing the Image component, make sure to clear these records from your browser's Session Storage.



# File: input-date.md
==================================================

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



# File: input-pin.md
==================================================

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



# File: input-range.md
==================================================

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



# File: input-tag.md
==================================================

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



# File: input-time.md
==================================================

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



# File: installation.md
==================================================

## Installation

There are two ways to get started with Franken UI:

1. **CDN Installation** - Perfect for beginners and quick prototyping.
2. **NPM Installation** - Recommended for Tailwind CSS or Vite-based setups, there are two ways to install via NPM: as a Tailwind CSS plugin or as a Vite plugin.

## Via CDN

Perfect for beginners, the simplest installation can be done using CDN:

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/franken-ui@latest/dist/css/core.min.css"
/>
```

For stability in production, it's recommended that you hardcode the latest version in the CDN link. Once you're done, you may now proceed adding [JavaScript](https://franken-ui.dev/docs/2.1/javascript).

## Quickstart template

Use this quickstart template to get started with your project immediately.

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Franken UI</title>
    <link rel="preconnect" href="https://rsms.me/" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    <style>
      :root {
        font-family: Inter, sans-serif;
        font-feature-settings: "liga" 1, "calt" 1;
      }
      @supports (font-variation-settings: normal) {
        :root {
          font-family: InterVariable, sans-serif;
        }
      }
    </style>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/franken-ui@next/dist/css/core.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/franken-ui@next/dist/css/utilities.min.css"
    />

    <script>
      const htmlElement = document.documentElement;

      const __FRANKEN__ = JSON.parse(
        localStorage.getItem("__FRANKEN__") || "{}"
      );

      if (
        __FRANKEN__.mode === "dark" ||
        (!__FRANKEN__.mode &&
          window.matchMedia("(prefers-color-scheme: dark)").matches)
      ) {
        htmlElement.classList.add("dark");
      } else {
        htmlElement.classList.remove("dark");
      }

      htmlElement.classList.add(__FRANKEN__.theme || "uk-theme-zinc");
      htmlElement.classList.add(__FRANKEN__.radii || "uk-radii-md");
      htmlElement.classList.add(__FRANKEN__.shadows || "uk-shadows-sm");
      htmlElement.classList.add(__FRANKEN__.font || "uk-font-sm");
      htmlElement.classList.add(__FRANKEN__.chart || "uk-chart-default");
    </script>

    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/franken-ui@next/dist/js/core.iife.js"
    ></script>
  </head>
  <body class="bg-background text-foreground">
    <!-- START CODING HERE -->

    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/franken-ui@next/dist/js/icon.iife.js"
    ></script>

    <!-- <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/franken-ui@next/dist/js/chart.iife.js"
    ></script> -->
  </body>
</html>
```

## Via NPM (Tailwind CSS v3 Plugin)

Franken UI was initially designed as a Tailwind CSS plugin, which means it can be seamlessly integrated into any existing Tailwind CSS project. To get started, you first need to make sure that you have a [working Tailwind CSS project](https://v3.tailwindcss.com/docs/installation) installed and that you also have Node and NPM installed on your machine.

Start by installing PostCSS and the latest version of Franken UI using NPM:

```sh
npm install postcss franken-ui
```

Next, run the `npx franken-ui init -p` command.

```sh
npx franken-ui init -p
```

This command will automatically generate and configure both `tailwindcss.config.js` and `postcss.config.cjs` for you. If you already have a Tailwind CSS or PostCSS configuration in place, the command will refuse to create a new one. This ensures that your existing configuration isn't accidentally overwritten.

If you have trouble running the command, you can always refer to the [source code](https://github.com/franken-ui/ui/tree/master/src/lib/cli/init/stubs) and grab the right configuration you need.

Once you're done, you may now proceed adding [JavaScript](https://franken-ui.dev/docs/2.1/javascript).

## Via NPM (Vite Plugin)

First, install the latest version of Franken UI using NPM:

```sh
npm install franken-ui
```

Next, configure your `vite.config.js` file to use the Franken UI plugin.

```js
import franken from "franken-ui/plugin-vite";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [
    franken({
      preflight: true,
    }),
  ],
});
```

Once the plugin is configured, import the `franken-ui.css` file into your main CSS file:

```css
@import "franken-ui/css/franken-ui.css";
```

Alternatively, you can pull Franken UI CSS directly from the `node_modules` directory.

```html
<link rel="stylesheet" href="node_modules/franken-ui/dist/css/franken-ui.css" />
```

Note: Franken UI compiles CSS behind the scenes, so make sure to import the Vite plugin at the top of your vite.config.js file or second, right before any other CSS plugins, to avoid issues when importing it into your CSS file.

Once you're done, you may now proceed adding [JavaScript](https://franken-ui.dev/docs/2.1/javascript).



# File: javascript.md
==================================================

## JavaScript

Once you have installed Franken UI, we can now include the JavaScript to control the behavior of our components.

## Installation via CDN

You can include the JavaScript files on your page by adding them to the `<head>` section.

```html
<script
  src="https://cdn.jsdelivr.net/npm/franken-ui@latest/dist/js/core.iife.js"
  type="module"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/franken-ui@latest/dist/js/icon.iife.js"
  type="module"
></script>
```

For stability in production, it's recommended that you hardcode the latest version in the CDN link.
      

## Installation via NPM

You can import the JavaScript from `franken-ui`, which you installed earlier, into your `app.js` file.

```javascript
import "franken-ui/js/core.iife";
import "franken-ui/js/icon.iife";
```

## UIkit and reactive JavaScript frameworks

UIkit is listening for DOM manipulations and will automatically initialize, connect and disconnect components as they are inserted or removed from the DOM. That way it can easily be used with JavaScript frameworks like [Vue.js](http://vuejs.org/) and React.

## Component usage

You can use UIkit components by adding `uk-*` or `data-uk-*` attributes to your HTML elements without writing a single line of JavaScript. This is UIkit's best practice of using its components and should always be considered first.

```html
<div uk-sticky="offset: 50;"></div>

<div data-uk-sticky="offset: 50;"></div>
```

Note: [React](https://facebook.github.io/react/) will work with `data-uk-*` prefixes only.

You can also initialize components via JavaScript and apply them to elements in your document.

```js
var sticky = UIkit.sticky("#sticky", {
  offset: 50,
});
```

You can retrieve an already initialized component by passing a selector or an element as a first Argument to the component function.

```js
var sticky = UIkit.sticky("#sticky");
```

Omitting the second parameter will not re-initialize the component but serve as a getter function.

## Component configuration

Each component comes with a set of configuration options that let you customize their behavior. You can set the options on a per-instance level or globally.

### Instance

Options can be set as shown in the following examples.

With the `key: value;` format:

```html
<div uk-sticky="start: 100; offset: 50;"></div>
```

In valid JSON format:

```html
<div uk-sticky='{"start": 100, "offset": 50}'></div>
```

As single attributes:

```html
<div uk-sticky start="100" offset="50"></div>
```

Or as single attributes prefixed with `data-`:

```html
<div uk-sticky data-start="100" data-offset="50"></div>
```

You can also pass options to the component constructor programmatically.

```js
// Passing an options object.
UIkit.sticky(".sticky", {
  offset: 50,
  top: 100,
});

// If the component supports Primary options.
UIkit.drop("#drop", "top-left");
```

### Precedence

Options passed via the component attribute will have the highest precedence, followed by single attributes and then JavaScript.

```html
<div uk-sticky="offset: 50;" offset="100"></div>

<!-- The offset will be 50 -->
```

### Globally

Component options can be changed globally by extending a component. It will affect newly created instances only.

```js
UIkit.mixin(
  {
    data: {
      offset: 50,
      top: 100,
    },
  },
  "sticky",
);
```

Omitting the second parameter, will apply the custom behavior to every UIkit instance created afterwards.

## Programmatic use

Programmatically, components may be initialized with the `element, options` arguments format in JavaScript. The `element` argument may be any `Node`, `selector` or `jQuery object`. You'll receive the initialized component as a return value. `Functional Components` (e.g. `Notification`) should omit the `element` parameter.

```js
// Passing a selector and an options object.
var sticky = UIkit.sticky(".sticky", {
  offset: 50,
  top: 100,
});

// Functional components should omit the 'element' argument.
var notifications = UIkit.notification("MyMessage", "destructive");
```

Note: The options names must be in their camel-cased representation, e.g. `show-on-up` becomes `showOnUp`.

After initialization, you can get your component by calling the same initialization function, omitting the `options` parameter.

```javascript
// Sticky is now the prior initialised components
var sticky = UIkit.sticky(".sticky");
```

Note: Using `UIkit[componentName](selector)` with CSS selectors will always return the first occurrence only! If you need to access all instances do [query](https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll) the elements first. Then apply the getter to each element separately - `UIkit[componentName](element)`. Initializing your components programmatically gives you the possibility to invoke their functions directly.

```js
UIkit.offcanvas("#offcanvas").toggle();
```

Any component functions and variables prefixed with an underscore are considered as part of the internal API, which may change at any given time.

Each component triggers DOM events that you can react to. For example when a Modal is shown or a Scrollspy element becomes visible.

```js
UIkit.util.on("#offcanvas", "show", function () {
  // do something
});
```

The component's documentation page lists its events.

Note: Components often trigger events with the same name (e.g. 'show'). Usually events [bubble through the DOM](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Building_blocks/Events#Event_bubbling_and_capture). Check the event target, to ensure the event was triggered by the desired component.

Sometimes, components like Grid or Tab are hidden in the markup. This may happen when used in combination with the Switcher, Modal or Dropdown. Once they become visible, they need to adjust or fix their height and other dimensions.

UIkit offers several ways of updating a component. Omitting the `type` parameter will trigger an `update` event.

```js
// Calls the update hook on components registered on the element itself, its parents and children.
UIkit.update((element = document.body), (type = "update"));

// Updates the component itself.
component.$emit((type = "update"));
```

If you need to make sure a component is properly destroyed, for example upon removal from the DOM, you can call its `$destroy` function.

```js
// Destroys the component. For example unbind its event listeners.
component.$destroy();

// Also destroys the component, but also removes the element from the DOM.
component.$destroy(true);
```

## UIkit initialization

You might need to execute code after UIkit is loaded, but before it initializes its components on the page.

This hook allows you to register custom components or component mixins.

You can hook into this step in the lifecycle by listening for the `uikit:init` event UIkit triggers on the document.

```js
document.addEventListener("uikit:init", () => {
  // do something
});
```



# File: label.md
==================================================

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



# File: leader.md
==================================================

## Leader

A leader, also known as a dot leader or a tab leader, is a repeating pattern used to visually connect content across horizontal spaces. It is most commonly used for restaurant menus, between the meals and prices, and for tables of contents, between titles and page numbers.

To apply this component, add the `data-uk-leader` attribute to the element on the left. A line of characters, by default dots, will then fill the remaining space between the item and its adjacent element.

```html
<div data-uk-leader></div>
```

### Example

```html
<div class="flex gap-x-2">
  <div class="flex-1" data-uk-leader>Lorem ipsum dolor sit amet</div>
  <div>$20.90</div>
</div>
```

## Fill character

To change the dot to any custom character, just add the `fill: STRING` option to the attribute.

```html
<div data-uk-leader="fill: -"></div>
```

### Example

```html
<div class="flex gap-x-2">
  <div class="flex-1" data-uk-leader="fill: -">Lorem ipsum dolor sit amet</div>
  <div>$20.90</div>
</div>
```

Note: The default fill character can be set through CSS variable.

```css
.uk-leader-fill-content::before {
  content: ".";
}

:root {
  --uk-leader-fill-content: ".";
}
```

## Responsive

It's possible to disable the leader for different device widths by applying the `media` option to the attribute and adding the appropriate viewport width. Add a number in pixels, for example `media: 640`, or a breakpoint, for example `media: @m`. The leader will be shown from the specified viewport width and upwards, but not below.

```html
<div data-uk-leader="media: @m"></div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option  | Value                   | Default | Description                                                                                                                                                |
| ------- | ----------------------- | ------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `fill`  | String                  |         | Optional fill character.                                                                                                                                   |
| `media` | Boolean, Number, String | `false` | Condition for the space filling - a width as integer (e.g. 640) or a breakpoint (e.g. @s, @m, @l, @xl) or any valid media query (e.g. (min-width: 900px)). |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.leader(element, options);
```



# File: lightbox.md
==================================================

## Lightbox

The Lightbox component is fully responsive and supports touch and swipe navigation, as well as mouse drag for desktops. When swiping between slides the animation literally sticks at your fingertip or mouse cursor. Clicking fast on the previous and next navigation, will make animations even accelerate to keep up with your pace. All animations are hardware accelerated for a smoother performance.

To apply this component, add the `data-uk-lightbox` attribute to a container to turn all anchors inside that container into lightbox links.

```html
<div data-uk-lightbox>
  <a href="image.jpg"></a>
</div>
```

### Example

```html
<div data-uk-lightbox>
  <a class="uk-btn uk-btn-default" href="/images/photo.jpg"> Open Lightbox </a>
</div>
```

## Alt Attribute

To add an `alt` attribute to the image in the lightbox, set the `data-alt` attribute on an anchor.

```html
<div data-uk-lightbox>
  <a href="image.jpg" data-alt="Image"></a>
</div>
```

### Example

```html
<div data-uk-lightbox>
  <a class="uk-btn uk-btn-default" href="/images/photo.jpg" data-alt="Image">
    Open Lightbox
  </a>
</div>
```

## Caption

To display a caption at the bottom of the lightbox, set the `data-caption` attribute on an anchor.

```html
<div data-uk-lightbox>
  <a href="image.jpg" data-caption="Caption"></a>
</div>
```

### Example

```html
<div data-uk-lightbox>
  <a
    class="uk-btn uk-btn-default"
    href="/images/photo.jpg"
    data-caption="Caption"
  >
    Open Lightbox
  </a>
</div>
```

## Animations

By default, the Lightbox gallery uses a slide animation. You can set the `animation` option to use a different one. Possible values are `slide`, `fade` and `scale`.

```html
<div data-uk-lightbox="animation: fade">
  <a href="image.jpg"></a>
</div>
```

### Example

```html
<div class="uk-h3">Slide</div>
<div class="mt-4 grid grid-cols-3 gap-4" data-uk-lightbox="animation: slide">
  <div>
    <a class="uk-inline" href="/images/photo.jpg" data-caption="Caption 1">
      <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/dark.jpg" data-caption="Caption 2">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/light.jpg" data-caption="Caption 3">
      <img src="/images/light.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
</div>

<div class="uk-h3 mt-4">Fade</div>
<div class="mt-4 grid grid-cols-3 gap-4" data-uk-lightbox="animation: fade">
  <div>
    <a class="uk-inline" href="/images/photo.jpg" data-caption="Caption 1">
      <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/dark.jpg" data-caption="Caption 2">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/light.jpg" data-caption="Caption 3">
      <img src="/images/light.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
</div>

<div class="uk-h3 mt-4">Scale</div>
<div class="mt-4 grid grid-cols-3 gap-4" data-uk-lightbox="animation: scale">
  <div>
    <a class="uk-inline" href="/images/photo.jpg" data-caption="Caption 1">
      <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/dark.jpg" data-caption="Caption 2">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/light.jpg" data-caption="Caption 3">
      <img src="/images/light.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
</div>
```

## Navigations

By default, the lightbox shows a slidenav from the [Slidenav component](https://franken-ui.dev/docs/2.1/slidenav). To hide the slidenav, set the `slidenav: false` option. To show an item-based navigation, for example, from the [Thumbnav component](https://franken-ui.dev/docs/2.1/thumbnav) or [Dotnav component](https://franken-ui.dev/docs/2.1/dotnav), set the `nav` option to `thumbnav` or `dotnav`.

```html
<div data-uk-lightbox="slidenav: false; nav: thumbnav">
  <a href="image.jpg"></a>
</div>
```

### Example

```html
<div class="uk-h3">Thumbnav</div>
<div
  class="mt-4 grid grid-cols-3 gap-4"
  data-uk-lightbox="slidenav: false; nav: thumbnav"
>
  <div>
    <a class="uk-inline" href="/images/photo.jpg" data-caption="Caption 1">
      <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/dark.jpg" data-caption="Caption 2">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/light.jpg" data-caption="Caption 3">
      <img src="/images/light.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
</div>

<div class="uk-h3 mt-4">Dotnav</div>
<div
  class="mt-4 grid grid-cols-3 gap-4"
  data-uk-lightbox="slidenav: false; nav: dotnav"
>
  <div>
    <a class="uk-inline" href="/images/photo.jpg" data-caption="Caption 1">
      <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/dark.jpg" data-caption="Caption 2">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/light.jpg" data-caption="Caption 3">
      <img src="/images/light.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
</div>
```

## Counter

To show a counter with the current item number and the total number of items, add the `counter: true` option.

### Example

```html
<div class="mt-4 grid grid-cols-3 gap-4" data-uk-lightbox="counter: true">
  <div>
    <a class="uk-inline" href="/images/photo.jpg" data-caption="Caption 1">
      <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/dark.jpg" data-caption="Caption 2">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
  <div>
    <a class="uk-inline" href="/images/light.jpg" data-caption="Caption 3">
      <img src="/images/light.jpg" width="1800" height="1200" alt="" />
    </a>
  </div>
</div>
```

## Content sources

A lightbox is not restricted to images. Other media, like videos, can be displayed as well. The video will pause whenever it's not visible and resume once it becomes visible again. To display a poster image for a video, set the `data-poster` attribute.

```html
<div data-uk-lightbox>
  <a
    class="uk-btn"
    href="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
    data-poster="image.jpg"
  ></a>
  <a class="uk-btn" href="https://www.youtube.com/watch?v=aqz-KE-bpKQ"></a>
  <a class="uk-btn" href="https://vimeo.com/1084537"></a>
  <a class="uk-btn" href="https://www.google.com/maps"></a>
</div>
```

### Example

```html
<div class="flex flex-wrap gap-2" data-uk-lightbox>
  <a
    class="uk-btn uk-btn-default"
    href="/images/photo.jpg"
    data-caption="Image"
  >
    Image
  </a>
  <a
    class="uk-btn uk-btn-default"
    href="https://yootheme.com/site/images/media/yootheme-pro.mp4"
    data-caption="Video"
  >
    Video
  </a>
  <a
    class="uk-btn uk-btn-default"
    href="https://www.youtube.com/watch?v=c2pz2mlSfXA"
    data-caption="YouTube"
  >
    YouTube
  </a>
  <a
    class="uk-btn uk-btn-default"
    href="https://vimeo.com/1084537"
    data-caption="Vimeo"
  >
    Vimeo
  </a>
  <a
    class="uk-btn uk-btn-default"
    href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4740.819266853735!2d9.99008871708242!3d53.550454675412404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f9d24afe84a0263!2sRathaus!5e0!3m2!1sde!2sde!4v1499675200938"
    data-caption="Google Maps"
    data-type="iframe"
  >
    Google Maps
  </a>
</div>
```

Note: Use `youtube-nocookie.com` within the YouTube link and the lightbox will use the domain to embed the YouTube video.

### Manual content type

The Lightbox uses the `href` attribute to figure out the type of the linked content. If no filename extension is defined in the path, just add the `data-type` attribute to the `<a>` tag.

**Hint** YouTube and Vimeo Urls will be handled automatically.

| Option               | Description                            |
| -------------------- | -------------------------------------- |
| `data-type="image"`  | The content type is an image.          |
| `data-type="video"`  | The content type is a video.           |
| `data-type="iframe"` | The content type is a regular website. |

## Delay controls

By default, the controls are hidden after a short time if the mouse doesn't move. Set the `delay-controls: 0` option to always show the controls.

```html
<div uk-lightbox="delay-controls: 0">
  <a href="image.jpg"></a>
</div>
```

### Example

```html
<div data-uk-lightbox="delay-controls: 0">
  <a class="uk-btn uk-btn-default" href="/images/photo.jpg"> Open Lightbox </a>
</div>
```

## BG close

By default, the lightbox closes if the background is clicked. To prevent this behavior, set the `bg-close: false` option.

```html
<div uk-lightbox="bg-close: false">
  <a href="image.jpg"></a>
</div>
```

### Example

```html
<div data-uk-lightbox="bg-close: false">
  <a class="uk-btn uk-btn-default" href="/images/photo.jpg"> Open Lightbox </a>
</div>
```

## Custom Attributes

You can add custom attributes to lightbox content items by using the `data-attrs` attribute. The attributes are passed like the usual component options, e.g. `data-attrs="width: 1280; height: 720;"`

```html
<div data-uk-lightbox>
  <a
    class="uk-btn"
    href="https://www.youtube.com/watch?v=aqz-KE-bpKQ"
    data-attrs="width: 1280; height: 720;"
  ></a>
</div>
```

### Example

```html
<div uk-lightbox>
  <a
    class="uk-btn uk-btn-default"
    href="https://www.youtube.com/watch?v=c2pz2mlSfXA"
    data-caption="YouTube"
    data-attrs="width: 1280; height: 720;"
  >
    YouTube
  </a>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option              | Value           | Default | Description                                                                                                |
| ------------------- | --------------- | ------- | ---------------------------------------------------------------------------------------------------------- |
| `animation`         | String          | `slide` | Lightbox animation mode (`slide`, `fade` or `scale`).                                                      |
| `autoplay`          | Boolean         | `false` | Lightbox autoplays.                                                                                        |
| `autoplay-interval` | Number          | `7000`  | The delay between switching slides in autoplay mode.                                                       |
| `pause-on-hover`    | Boolean         | `false` | Pause autoplay mode on hover.                                                                              |
| `video-autoplay`    | Boolean, String | `false` | Lightbox videos autoplay. A value of `inline` will autoplay the video, make it muted and without controls. |
| `counter`           | Boolean         | `false` | Lightbox shows counter.                                                                                    |
| `nav`               | Boolean, String | `false` | Lightbox navigation (`dotnav`, `thumbnav`).                                                                |
| `slidenav`          | Boolean         | `true`  | Lightbox shows slidenav controls.                                                                          |
| `index`             | String, Number  | `0`     | Lightbox item to show. 0 based index.                                                                      |
| `delay-controls`    | Number          | `3000`  | Delay time before controls fade out in ms. Setting `0` will prevent hiding controls.                       |
| `toggle`            | CSS selector    | `a`     | Toggle selector - opens the Lightbox Panel upon click.                                                     |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
// To apply lightbox to a group of links
UIkit.lightbox(element, options);

// To dynamically initialize the lightbox panel
UIkit.lightboxPanel(panelOptions);
```

### Methods

The following methods are available for the component:

#### Show

```javascript
UIkit.lightbox(element).show(index);
```

Shows the Lightbox's Panel and item.

#### Hide

```javascript
UIkit.lightbox(element).hide();
```

Hides the Lightbox's Panel.

### Lightbox Panel Options

If you only want to use the lightbox panel directly through the JS API, you can set the following options.

| Option              | Value           | Default        | Description                                                                                                |
| ------------------- | --------------- | -------------- | ---------------------------------------------------------------------------------------------------------- |
| `animation`         | String          | `slide`        | Lightbox animation mode (`slide`, `fade` or `scale`).                                                      |
| `autoplay`          | Boolean         | `false`        | Lightbox autoplays.                                                                                        |
| `autoplay-interval` | Number          | `7000`         | The delay between switching slides in autoplay mode.                                                       |
| `pause-on-hover`    | Boolean         | `false`        | Pause autoplay mode on hover.                                                                              |
| `video-autoplay`    | Boolean, String | `false`        | Lightbox videos autoplay. A value of `inline` will autoplay the video, make it muted and without controls. |
| `counter`           | Boolean         | `false`        | Lightbox shows counter.                                                                                    |
| `nav`               | Boolean, String | `false`        | Lightbox navigation (`dotnav`, `thumbnav`).                                                                |
| `slidenav`          | Boolean         | `true`         | Lightbox shows slidenav controls.                                                                          |
| `index`             | Number          | `0`            | The initial item to show. (zero-based)                                                                     |
| `velocity`          | Number          | `2`            | The animation velocity (pixel/ms).                                                                         |
| `preload`           | Number          | `1`            | The number of items to preload. (left and right of the currently active item)                              |
| `items`             | Array           | `[]`           | An array of items to display, e.g. `[{source: 'images/size1.jpg', caption: '900x600'}]`                    |
| `template`          | String          | Default markup | The template string.                                                                                       |
| `delay-controls`    | Number          | `3000`         | Delay time before controls fade out in ms. Setting `0` will prevent hiding controls.                       |
| `container`         | String          | `body`         | Define a target container via a selector to specify where the Lightbox should be appended in the DOM.      |

### Events

The following events will be triggered on elements with this component attached:

| Name             | Description                                              |
| ---------------- | -------------------------------------------------------- |
| `beforeshow`     | Fires before the Lightbox is shown.                      |
| `beforehide`     | Fires before the Lightbox is hidden.                     |
| `show`           | Fires after the Lightbox is shown.                       |
| `shown`          | Fires after the Lightbox's show animation has completed. |
| `hide`           | Fires after the Lightbox's hide animation has started.   |
| `hidden`         | Fires after the Lightbox is hidden.                      |
| `itemload`       | Fires when an item loads.                                |
| `beforeitemshow` | Fires before an item is shown.                           |
| `itemshow`       | Fires after an item is shown.                            |
| `itemshown`      | Fires after an item's show animation has completed.      |
| `beforeitemhide` | Fires before an item is hidden.                          |
| `itemhide`       | Fires after an item's hide animation has started.        |
| `itemhidden`     | Fires after an item's hide animation has completed.      |

### Methods

The following methods are available for the component:

#### Show

```javascript
UIkit.lightboxPanel(element).show(index);
```

Shows the Lightbox Panel and item.

| Name    | Type           | Default | Description                           |
| ------- | -------------- | ------- | ------------------------------------- |
| `index` | String, Number | 0       | Lightbox item to show. 0 based index. |

#### Hide

```javascript
UIkit.lightboxPanel(element).hide();
```

Hides the Lightbox Panel.

#### startAutoplay

```javascript
UIkit.lightboxPanel(element).startAutoplay();
```

Starts the Lightbox's autoplay.

#### stopAutoplay

```javascript
UIkit.lightboxPanel(element).stopAutoplay();
```

Stops the Lightbox's autoplay.

## Accessibility

The Lightbox component adheres to the [Dialog (Modal) WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/dialogmodal/) and the [Carousel WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/carousel/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _lightbox_ has the `dialog` role, the `aria-modal` property and the `aria-roledescription` property set to `carousel`.
- The _slide list_ has an ID, the `presentation` role and the `aria-live` property.
- The _slides_ have an ID, the `group` role, the `aria-roledescription` property set to `slide` and an `aria-label` property.

The previous/next navigation adheres to the [button pattern](https://www.w3.org/WAI/ARIA/apg/patterns/button/).

- The _prev/next navigation items_ have the `button` role, the `aria-controls` property set to the ID of the slide list, and an `aria-label` property.

The Close component automatically sets the appropriate WAI-ARIA roles and properties.

- The _close icon_ has the `aria-label` property, and if an `<a>` element is used, the `button` role.

### Keyboard interaction

The lightbox gallery can be accessed through the keyboard using the following keys.

- The <kbd>left/right arrow</kbd> keys navigate through the slides. If the focus is on the last slide, it moves to the first slide.
- The <kbd>home</kbd> or <kbd>end</kbd> keys move the focus to the first or last slide.
- The <kbd>esc</kbd> key closes the lightbox.

### Internationalization

The Lightbox component uses the following translation strings. Learn more about [translating components](https://franken-ui.dev/docs/2.1/accessibility#internationalization).

| Key          | Default          | Description                             |
| ------------ | ---------------- | --------------------------------------- |
| `next`       | `Next Slide`     | `aria-label` for next slide button.     |
| `previous`   | `Previous Slide` | `aria-label` for previous slide button. |
| `slideLabel` | `%s of %s`       | `aria-label` for slide.                 |
| `close`      | `Close`          | `aria-label` for close button.          |



# File: link.md
==================================================

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



# File: list.md
==================================================

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



# File: masonry-grid.md
==================================================

## Masonry grid

To create the masonry grid, add the `uk-grid="masonry: true"` attribute to a `<div>` element with either `.flex` and `.flex-wrap` or with `.grid` class to create a layout free of gaps.

### Example

```html
<div class="grid sm:grid-cols-2 md:grid-cols-3" data-uk-grid="masonry: true">
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 100px">
      Item 1
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 150px">
      Item 2
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 300px">
      Item 3
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 120px">
      Item 4
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 180px">
      Item 5
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 250px">
      Item 6
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 140px">
      Item 7
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 210px">
      Item 8
    </div>
  </div>
  <div class="p-4">
    <div class="uk-card flex items-center justify-center" style="height: 200px">
      Item 9
    </div>
  </div>
</div>
```

## Masonry pack

To sort items into columns with the most room to make column heights as equal as possible, you can use the `uk-grid="masonry: pack"` attribute.

### Example

```html
<div class="grid sm:grid-cols-2 md:grid-cols-3" data-uk-grid="masonry: pack">
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #f7fee7; color: #3f6212; height: 140px"
    >
      Item 1
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #ecfccb; color: #3f6212; height: 180px"
    >
      Item 2
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #d9f99d; color: #3f6212; height: 220px"
    >
      Item 3
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #bef264; color: #3f6212; height: 280px"
    >
      Item 4
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #a3e635; color: #3f6212; height: 140px"
    >
      Item 5
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #84cc16; color: #f7fee7; height: 200px"
    >
      Item 6
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #65a30d; color: #f7fee7; height: 250px"
    >
      Item 7
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #4d7c0f; color: #f7fee7; height: 320px"
    >
      Item 8
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #3f6212; color: #f7fee7; height: 160px"
    >
      Item 9
    </div>
  </div>
</div>
```

## Masonry next

To sort items with their natural order, simply use the `uk-grid="masonry: next"` attribute.

### Example

```html
<div class="grid sm:grid-cols-2 md:grid-cols-3" data-uk-grid="masonry: next">
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #f0f9ff; color: #082f49; height: 140px"
    >
      Item 1
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #e0f2fe; color: #082f49; height: 180px"
    >
      Item 2
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #bae6fd; color: #082f49; height: 220px"
    >
      Item 3
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #7dd3fc; color: #082f49; height: 280px"
    >
      Item 4
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #38bdf8; color: #082f49; height: 140px"
    >
      Item 5
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #0ea5e9; color: #f0f9ff; height: 200px"
    >
      Item 6
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #0284c7; color: #f0f9ff; height: 250px"
    >
      Item 7
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #0369a1; color: #f0f9ff; height: 320px"
    >
      Item 8
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #075985; color: #f0f9ff; height: 160px"
    >
      Item 9
    </div>
  </div>
</div>
```

## With parallax

To move single columns of a grid at different speeds while scrolling, just add `parallax: NUMBER` to the `uk-grid` attribute. The number sets the parallax translation in pixels.

### Example

```html
<div
  class="grid sm:grid-cols-2 md:grid-cols-3"
  data-uk-grid="masonry: pack; parallax: 150"
>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #fdf4ff; color: #4a044e; height: 140px"
    >
      Item 1
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #fae8ff; color: #4a044e; height: 180px"
    >
      Item 2
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #f5d0fe; color: #4a044e; height: 220px"
    >
      Item 3
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #f0abfc; color: #4a044e; height: 280px"
    >
      Item 4
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #e879f9; color: #4a044e; height: 140px"
    >
      Item 5
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #d946ef; color: #fdf4ff; height: 200px"
    >
      Item 6
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #c026d3; color: #fdf4ff; height: 250px"
    >
      Item 7
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #a21caf; color: #fdf4ff; height: 320px"
    >
      Item 8
    </div>
  </div>
  <div class="p-4">
    <div
      class="flex items-center justify-center"
      style="background: #4a044e; color: #fdf4ff; height: 160px"
    >
      Item 9
    </div>
  </div>
</div>
```

To adjust the grid parallax duration, set the `parallax-start` and `parallax-end` options. The `parallax-start` option defines when the animation starts. The default value of `0` means that the grid's top border and the viewport's bottom border intersect. The `end` option defines when the animation ends. The default value of `0` means that the grid's bottom border and the viewport's top border intersect. Values can be set in any dimension units, namely `vh`, `%` and `px`. The `%` unit relates to the grid's height. Both options allow basic mathematics operands, `+` and `-`.

```html
<div data-uk-grid="parallax: 150; parallax-start: 100%; parallax-end: 100%;">
  <!-- ... -->
</div>
```

To justify the grid parallax if columns have different heights, for example in masonry grids, set the `parallax-justify: true` option so all grid columns reach the bottom at the same time. Set `parallax: 0` to only move the columns by their height until they justify. But of course an additional parallax translation value can be set as well.

```html
<div data-uk-grid="parallax: 0; parallax-justify: true; masonry: pack">
  <!-- ... -->
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option             | Value           | Default                 | Description                                                                                                                                                                                         |
| ------------------ | --------------- | ----------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `margin `          | String          | `uk-grid-margin`        | This class is added to items that break into the next row, typically to create margin to the previous row.                                                                                          |
| `first-column`     | String          | `uk-first-column`       | This class is added to the first element in each row.                                                                                                                                               |
| `masonry`          | String, Boolean | `false`, `pack`, `next` | Enables masonry layout for this grid.                                                                                                                                                               |
| `parallax`         | Number          | `0`                     | Parallax translation value. The value can be in vh, % and px. Falsy disables the parallax effect (default).                                                                                         |
| `parallax-start`   | Length          | `0`                     | Start offset. The value can be in vh, % and px. It supports basic mathematics operands + and -. The default value of `0` means that the grid's top border and viewport's bottom border intersect.   |
| `parallax-end`     | Length          | `0`                     | End offset. The value can be in vh, % and px. It supports basic mathematics operands + and -. The default value of `0` means that the grid's bottom border and the viewport's top border intersect. |
| `parallax-justify` | Boolean         | `false`                 | With parallax enabled, all columns will reach the bottom at the same time.                                                                                                                          |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.grid(element, options);
```



# File: modal.md
==================================================

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



# File: nav.md
==================================================

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



# File: notification.md
==================================================

## Notification

The notification will not fade out but remain visible when you hover the message until you stop hovering. You can also close the notification by clicking it. To show notifications, the component provides a simple JavaScript API. The following code snippet gets you started.

### JavaScript

```javascript
UIkit.notification({
  message: "my-message!",
  status: "primary",
  pos: "top-right",
  timeout: 5000,
});

// Shortcuts
UIkit.notification("My message");
UIkit.notification("My message", status);
UIkit.notification("My message", {
  /* options */
});
```

### Example

```html
<button
  class="demo uk-btn uk-btn-default"
  type="button"
  onclick="UIkit.notification({message: 'Notification message'})"
>
  Click me
</button>
```

## HTML message

You can use HTML inside your notification message, like an icon from the Icon component.

```javascript
UIkit.notification("<uk-icon icon='rocket'></uk-icon> Message");
```

### Example

```html
<button
  class="demo uk-btn uk-btn-default"
  type="button"
  onclick="UIkit.notification({
      message: `<div class='flex items-center'><span class='flex-none mr-2'><uk-icon icon='rocket'></uk-icon></span> Message with an icon</div>`
  })"
>
  With icon
</button>
```

## Position

Add one of the following parameters to adjust the notification's position to different corners.

```javascript
UIkit.notification("...", { pos: "top-right" });
```

| Position        | Code                                                |
| --------------- | --------------------------------------------------- |
| `top-left`      | `UIkit.notification("...", {pos: 'top-left'})`      |
| `top-center`    | `UIkit.notification("...", {pos: 'top-center'})`    |
| `top-right`     | `UIkit.notification("...", {pos: 'top-right'})`     |
| `bottom-left`   | `UIkit.notification("...", {pos: 'bottom-left'})`   |
| `bottom-center` | `UIkit.notification("...", {pos: 'bottom-center'})` |
| `bottom-right`  | `UIkit.notification("...", {pos: 'bottom-right'})`  |

### Example

```html
<div class="flex flex-wrap gap-2">
  <button
    class="uk-btn uk-btn-default"
    type="button"
    onclick="UIkit.notification({message: 'Top Left', pos: 'top-left'})"
  >
    Top Left
  </button>
  <button
    class="uk-btn uk-btn-default"
    type="button"
    onclick="UIkit.notification({message: 'Top Center', pos: 'top-center'})"
  >
    Top Center
  </button>
  <button
    class="uk-btn uk-btn-default"
    type="button"
    onclick="UIkit.notification({message: 'Top Right', pos: 'top-right'})"
  >
    Top Right
  </button>
  <button
    class="uk-btn uk-btn-default"
    type="button"
    onclick="UIkit.notification({message: 'Bottom Left', pos: 'bottom-left'})"
  >
    Bottom Left
  </button>
  <button
    class="uk-btn uk-btn-default"
    type="button"
    onclick="UIkit.notification({message: 'Bottom Center', pos: 'bottom-center'})"
  >
    Bottom Center
  </button>
  <button
    class="uk-btn uk-btn-default"
    type="button"
    onclick="UIkit.notification({message: 'Bottom Right', pos: 'bottom-right'})"
  >
    Bottom Right
  </button>
</div>
```

## Destructive modifier

```javascript
UIkit.notification("...", { status: "destructive" });
```

### Example

```html
<button
  class="demo uk-btn uk-btn-default"
  type="button"
  onclick="UIkit.notification({message: 'Destructive message', status: 'destructive'})"
>
  Destructive
</button>
```

## Close all

You can close all open notifications by calling `UIkit.notification.closeAll()`.

### Example

```html
<button
  class="close uk-btn uk-btn-default"
  onclick="UIkit.notification.closeAll()"
>
  Close All
</button>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option     | Value  | Default      | Description                                                                                                   |
| ---------- | ------ | ------------ | ------------------------------------------------------------------------------------------------------------- |
| `message ` | String | `false`      | Notification message to show.                                                                                 |
| `status`   | String | `null`       | Notification status color.                                                                                    |
| `timeout`  | Number | `5000`       | Visibility duration until a notification disappears. If set to `0`, notification will not hide automatically. |
| `group`    | String |              | Useful, if you want to close all notifications in a specific group.                                           |
| `pos`      | String | `top-center` | Display corner.                                                                                               |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

This is a `Functional Component` and may omit the element argument.

```javascript
UIkit.notification(options);
UIkit.notification(message, status);
```

### Events

The following events will be triggered on elements with this component attached:

| Name    | Description                                   |
| ------- | --------------------------------------------- |
| `close` | Fires after the notification has been closed. |

### Methods

The following methods are available for the component:

#### Close

```javascript
UIkit.notification(element).close(immediate);
```

Closes the notification.

| Name        | Type    | Default | Description                      |
| ----------- | ------- | ------- | -------------------------------- |
| `immediate` | Boolean | true    | Transition the notification out. |

## Accessibility

The Notification component automatically sets the appropriate WAI-ARIA role, states and properties.

- The _notification_ has the `alert` role.



# File: offcanvas.md
==================================================

## Offcanvas

To apply this component, add the `data-uk-offcanvas` attribute to a parent `<div>` element and use the following classes.

| Class                 | Description                                                                                                                               |
| --------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `.uk-offcanvas-bar`   | Add this class to a child `<div>` element.                                                                                                |
| `.uk-offcanvas-close` | Add this class and the `data-uk-close` attribute to an `<a>` or `<button>` element to create a close button and enable its functionality. |

You can use any element to toggle an offcanvas sidebar. To enable the necessary JavaScript, add the `data-uk-toggle` attribute. An `<a>` element needs to be linked to the id of the offcanvas container. If you are using another element, like a button, just add the `data-uk-toggle="target: #ID"` attribute to target the id of the offcanvas container.

```html
<body>
  <!-- This is a button toggling the offcanvas -->
  <button data-uk-toggle="target: #my-id" type="button"></button>

  <!-- This is an anchor toggling the offcanvas -->
  <a href="#my-id" data-uk-toggle></a>

  <!-- This is the offcanvas -->
  <div id="my-id" data-uk-offcanvas>
    <div class="uk-offcanvas-bar">
      <button class="uk-offcanvas-close absolute top-4 right-4" type="button" data-uk-close></button>
    </div>
  </div>
</body>
```

### Example

```html
<button
  class="uk-btn uk-btn-default mr-2"
  type="button"
  data-uk-toggle="target: #offcanvas-usage"
>
  Open
</button>

<a href="#offcanvas-usage" data-uk-toggle>Open</a>

<div class="uk-offcanvas" id="offcanvas-usage" data-uk-offcanvas>
  <div class="uk-offcanvas-bar p-4">
    <button
      class="uk-offcanvas-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <h3 class="uk-h3">Title</h3>

    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.
    </p>
  </div>
</div>
```

### Overlay

To add an overlay, blanking out the page, add the `overlay: true` parameter to the `data-uk-offcanvas` attribute.

```html
<div id="my-id" data-uk-offcanvas="overlay: true">...</div>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #offcanvas-overlay"
>
  Open
</button>

<div id="offcanvas-overlay" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <button
      class="uk-offcanvas-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <h3 class="uk-h3">Title</h3>

    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.
    </p>
  </div>
</div>
```

## Flip modifier

Add the `flip: true` parameter to the `data-uk-offcanvas` attribute to adjust its alignment, so that it slides in from the right.

```html
<div id="my-id" data-uk-offcanvas="flip: true">...</div>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #offcanvas-flip"
>
  Open
</button>

<div id="offcanvas-flip" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <button
      class="uk-offcanvas-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <h3 class="uk-h3">Title</h3>

    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.
    </p>
  </div>
</div>
```

## Animation modes

By default, the offcanvas slides in. But you can actually choose between different animation modes for the offcanvas's entrance. Just add one of the following attributes.

| Parameter      | Description                                                                  |
| -------------- | ---------------------------------------------------------------------------- |
| `mode: slide`  | The offcanvas slides out and overlays the content. This is the default mode. |
| `mode: push`   | The offcanvas slides out and pushes the site.                                |
| `mode: reveal` | The offcanvas slides out and reveals its content while pushing the site.     |
| `mode: none`   | The offcanvas appears and overlays the content without an animation.         |

```html
<div id="my-id" data-uk-offcanvas="mode: push">...</div>
```

### Example

```html
<div class="flex flex-wrap gap-2">
  <button
    class="uk-btn uk-btn-default"
    type="button"
    data-uk-toggle="target: #offcanvas-slide"
  >
    Slide
  </button>

  <button
    class="uk-btn uk-btn-default"
    type="button"
    data-uk-toggle="target: #offcanvas-push"
  >
    Push
  </button>

  <button
    class="uk-btn uk-btn-default"
    type="button"
    data-uk-toggle="target: #offcanvas-reveal"
  >
    Reveal
  </button>

  <button
    class="uk-btn uk-btn-default"
    type="button"
    data-uk-toggle="target: #offcanvas-none"
  >
    None
  </button>
</div>

<div id="offcanvas-slide" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <button
      class="uk-offcanvas-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <h3 class="uk-h3">Title</h3>

    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.
    </p>
  </div>
</div>

<div id="offcanvas-push" data-uk-offcanvas="mode: push; overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <button
      class="uk-offcanvas-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <h3 class="uk-h3">Title</h3>

    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.
    </p>
  </div>
</div>

<div id="offcanvas-reveal" data-uk-offcanvas="mode: reveal; overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <button
      class="uk-offcanvas-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <h3 class="uk-h3">Title</h3>

    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.
    </p>
  </div>
</div>

<div id="offcanvas-none" data-uk-offcanvas="mode: none; overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <button
      class="uk-offcanvas-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>

    <h3 class="uk-h3">Title</h3>

    <p class="mt-4">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.
    </p>
  </div>
</div>
```

## Nav in Offcanvas

You can use the [Nav component](https://franken-ui.dev/docs/2.1/nav) inside an offcanvas to create a mobile navigation.

```html
<div id="my-id" data-uk-offcanvas>
  <div class="uk-offcanvas-bar">
    <ul class="uk-nav uk-nav-default">
      ...
    </ul>
  </div>
</div>
```

### Example

```html
<button
  class="uk-btn uk-btn-default mr-2"
  type="button"
  data-uk-toggle="target: #offcanvas-nav-primary"
>
  Primary Nav
</button>

<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #offcanvas-nav"
>
  Default Nav
</button>

<div id="offcanvas-nav-primary" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <ul class="uk-nav-center uk-nav uk-nav-primary">
      <li class="uk-active"><a href="#">Active</a></li>
      <li class="uk-parent">
        <a href="#">Parent</a>
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
</div>

<div id="offcanvas-nav" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar p-4">
    <ul class="uk-nav uk-nav-default">
      <li class="uk-active"><a href="#">Active</a></li>
      <li class="uk-parent">
        <a href="#">Parent</a>
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
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option      | Value   | Default | Description                                                                                                                                              |
| ----------- | ------- | ------- | -------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `mode`      | String  | `slide` | Offcanvas animation mode (`slide`, `reveal`, `push` or `none`).                                                                                          |
| `flip`      | Boolean | `false` | Flip offcanvas to the right side.                                                                                                                        |
| `overlay`   | Boolean | `false` | Display the offcanvas together with an overlay.                                                                                                          |
| `esc-close` | Boolean | `true`  | Close the offcanvas when the _Esc_ key is pressed.                                                                                                       |
| `bg-close`  | Boolean | `true`  | Close the offcanvas when the background is clicked.                                                                                                      |
| `container` | String  | `false` | Define a target container via a selector to specify where the offcanvas should be appended in the DOM. Setting it to `false` will prevent this behavior. |

`mode` is the _Primary_ option and its key may be omitted, if it's the only option in the attribute value.

```html
<span uk-offcanvas="push"></span>
```

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.offcanvas(element, options);
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
UIkit.offcanvas(element).show();
```

Shows the Offcanvas.

#### Hide

```javascript
UIkit.offcanvas(element).hide();
```

Hides the Offcanvas.

## Accessibility

The Offcanvas component adheres to the [Dialog (Modal) WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/dialogmodal/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _offcanvas bar_ has the `dialog` role, and if the offcanvas has an overlay, the `aria-modal` property.

The Close component automatically sets the appropriate WAI-ARIA roles and properties.

- The _close icon_ has the `aria-label` property, and if an `<a>` element is used, the `button` role.

### Keyboard interaction

The Offcanvas component can be accessed through keyboard using the following keys.

- The <kbd>esc</kbd> key closes the offcanvas. This behaviour is disabled if the `bg-close: false` option is set.



# File: pagination.md
==================================================

## Pagination

The Pagination component consists of button-like styled links, that are aligned side by side in a horizontal list.

| Class          | Description                                                                                                                    |
| -------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| `.uk-pgn`      | Add this class to a `<ul>` element to define the Pagination component. Use `<a>` elements as pagination items within the list. |
| `.uk-active`   | Add this class to a list item to apply an active state and use a `<span>` instead of an `<a>` element.                         |
| `.uk-disabled` | Add this class to a list item to apply a disabled state and use a `<span>` instead of an `<a>` element.                        |

To add an icon, just add the `data-uk-pgn-previous` or `data-uk-pgn-next` attribute to a `<span>` element inside a pagination item.

### Example

```html
<nav>
  <ul class="uk-pgn uk-pgn-default">
    <li>
      <a href="#">
        <span class="mr-2" data-uk-pgn-previous></span>
        Previous
      </a>
    </li>
    <li>
      <a href="#">Next <span class="ml-2" data-uk-pgn-next></span></a>
    </li>
  </ul>
</nav>

<nav class="mt-4" aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-default">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>
```

## Style modifiers

There are several style modifiers available. Just add one of the following classes to apply a different look.

| Class                 | Description               |
| --------------------- | ------------------------- |
| `.uk-pgn-default`     | Adds the default style.   |
| `.uk-pgn-primary`     | Adds a primary style.     |
| `.uk-pgn-secondary`   | Adds a secondary style.   |
| `.uk-pgn-destructive` | Adds a destructive style. |
| `.uk-pgn-ghost`       | Adds a ghost style.       |

### Example

```html
<nav aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-default">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav class="mt-4" aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-primary">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav class="mt-4" aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-secondary">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav class="mt-4" aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-destructive">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav class="mt-4" aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-ghost">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>
```

## Size modifiers

There are several size modifiers available. Just add one of the following classes to make the pagination smaller or larger.

| Class        | Description               |
| ------------ | ------------------------- |
| `.uk-pgn-xs` | Applies extra small size. |
| `.uk-pgn-sm` | Applies small size.       |
| `.uk-pgn-md` | Applies medium size.      |
| `.uk-pgn-lg` | Applies large size.       |

### Example

```html
<nav aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-xs uk-pgn-default">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-sm uk-pgn-default mt-4">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-md uk-pgn-default mt-4">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-lg uk-pgn-default mt-4">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>
```

## Alignment

The Pagination component utilizes flexbox, so navigations can easily be aligned with Flex utility classes from Tailwind CSS.

```html
<ul class="uk-pgn justify-center">
  ...
</ul>
```

### Example

```html
<nav aria-label="Pagination">
  <ul class="uk-pgn uk-pgn-default justify-center">
    <li>
      <a href="#">
        <span data-uk-pgn-previous></span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span aria-current="page">7</span></li>
    <li><a href="#">8</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li>
      <a href="#">
        <span data-uk-pgn-next></span>
      </a>
    </li>
  </ul>
</nav>

<nav>
  <ul class="uk-pgn uk-pgn-default mt-4 justify-around">
    <li>
      <a href="#">
        <span class="mr-2" data-uk-pgn-previous></span>
        Previous
      </a>
    </li>
    <li>
      <a href="#">Next <span class="ml-2" data-uk-pgn-next></span></a>
    </li>
  </ul>
</nav>
```

## Accessibility

The previous/next pagination adheres to the [button pattern](https://www.w3.org/WAI/ARIA/apg/patterns/button/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _prev/next pagination items_ have the `button` role and the `aria-label` property.

### Internationalization

The Pagination component uses the following translation strings. Learn more about [translating components](https://franken-ui.dev/docs/2.1/accessibility#internationalization).

| Key     | Default              | Description             |
| ------- | -------------------- | ----------------------- |
| `label` | `Next/Previous page` | `aria-label` attribute. |



# File: parallax.md
==================================================

## Parallax

To apply this component, add the `data-uk-parallax` attribute to any element. Use one of the following options to animate the corresponding CSS property.

| Option             | Description                        | Values         | Start Value |
| ------------------ | ---------------------------------- | -------------- | ----------- |
| `x`                | Animate translateX.                | Length         | `0`         |
| `y`                | Animate translateY.                | Length         | `0`         |
| `bgy`              | Animate background Y position.     | Length         | *Initial*   |
| `bgx`              | Animate background X position.     | Length         | *Initial*   |
| `rotate`           | Animate rotation clockwise.        | `deg`          | `0`         |
| `scale`            | Animate scaling.                   | Number, Length | `1`         |
| `color`            | Animate color                      | Color          | *Initial*   |
| `background-color` | Animate background-color           | Color          | *Initial*   |
| `border-color`     | Animate border color               | Color          | *Initial*   |
| `opacity`          | Animate the opacity.               | Number         | *Initial*   |
| `blur`             | Animate the blur filter.           | `px`           | `0`         |
| `hue`              | Animate the hue rotation filter.   | `deg`          | `0`         |
| `grayscale`        | Animate the grayscale filter.      | `%`            | `0`         |
| `invert`           | Animate the invert filter.         | `%`            | `0`         |
| `saturate`         | Animate the saturated filter.      | `%`            | `0`         |
| `sepia`            | Animate the sepia filter.          | `%`            | `0`         |
| `stroke`           | Animate strokes within SVG images. |                | `0`         |

You can use `px`, `%`, `vw` and `vh` units for the length values. The pixel unit can be left out. For example, `x: 200` is the same as `x: 200px`. Basic mathematics operands `+` and `-` are also supported.

Set one of the options to create an animation stop. The property is animated from its start value to the defined stop value.

```html
<div data-uk-parallax="bgy: -200">…</div>
```

### Example

```html
<div
  class="flex h-80 bg-cover"
  data-uk-parallax="bgy: -200"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <h1 class="uk-h1 uk-margin-auto-vertical m-auto w-1/2 text-center text-white">
    Headline
  </h1>
</div>
```

## Start stop

To set a custom start value, create another animation stop by using two values separated by a comma.

```html
<div data-uk-parallax="opacity: 0,1">…</div>
```

### Example

```html
<div
  class="uk-overflow-hidden flex h-80 bg-cover"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <div class="uk-margin-auto-vertical m-auto w-1/2 text-center text-white">
    <h1
      class="uk-h1"
      data-uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; end: 50vh + 50%;"
    >
      Headline
    </h1>
    <p
      class="mt-4"
      data-uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; end: 50vh + 50%;"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
</div>
```

## Multiple stops

To better control the property animation, you can set intermediate stops along the animation sequence. Just use a comma-separated list of values. The animation will be equally distributed between the stops.

```html
<div data-uk-parallax="x: 0,50,150">…</div>
```

### Example

```html
<div
  class="uk-overflow-hidden flex h-80 bg-cover"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <div class="uk-margin-auto-vertical m-auto w-1/2 text-center text-white">
    <h1
      class="uk-h1"
      data-uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 2,1,1; end: 50vh + 50%;"
    >
      Headline
    </h1>
    <p
      class="mt-4"
      data-uk-parallax="opacity: 0,1,1; y: 100,0,0; x: -100,-100,0; scale: 0.5,1,1; end: 50vh + 50%;"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
</div>
```

## Stop positions

Set an optional stop position to specify the percentage along the animation sequence when the stop occurs.

```html
<div data-uk-parallax="x: 0,50 10%,150 50%">…</div>
```

### Example

```html
<div
  class="uk-overflow-hidden flex h-80 bg-cover"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <div class="uk-margin-auto-vertical m-auto w-1/2 text-center text-white">
    <h1
      class="uk-h1"
      data-uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 2,1,1; end: 50vh + 50%;"
    >
      Headline
    </h1>
    <p
      class="mt-4"
      data-uk-parallax="opacity: 0,1,1; y: 100,0,0; x: -100,-100,0; scale: 0.5,1,1; end: 50vh + 50%;"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
</div>
```

## Nesting

Different parallax animations can easily be nested.

```html
<div data-uk-parallax="bgx: -50">
    <div data-uk-parallax="x: -100, 100">…</div>
</div>
```

### Example

```html
<div
  class="uk-overflow-hidden flex h-80 bg-cover"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <div class="uk-margin-auto-vertical m-auto w-1/2 text-center text-white">
    <h1
      class="uk-h1"
      data-uk-parallax="opacity: 0,1,1; y: -100,0,0; x: 100,100,0; scale: 2,1,1; end: 50vh + 50%;"
    >
      Headline
    </h1>
    <p
      class="mt-4"
      data-uk-parallax="opacity: 0,1,1; y: 100,0,0; x: -100,-100,0; scale: 0.5,1,1; end: 50vh + 50%;"
    >
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
</div>
```

## Target

The animation starts and stops depending on the element position in the viewport. To start and stop the animation based on the viewport visibility of another element, use the `target` option. This can be helpful when using nested animations.

```html
<div id="target">
    <div data-uk-parallax="target: #target">…</div>
</div>
```

### Example

```html
<div
  id="test-target"
  class="flex h-80 bg-cover"
  data-uk-parallax="bgy: -200"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <h1
    class="uk-h1 uk-margin-auto-vertical m-auto w-1/2 text-center text-white"
    data-uk-parallax="target: #test-target; y: 100,0"
  >
    Headline
  </h1>
</div>
```

## Start and end

To adjust the animation duration, set the `start` and `end` options. The `start` option defines when the animation starts. The default value of `0` means that the target's top border and viewport's bottom border intersect. The `end` option defines when the animation ends. The default value of `0` means that the target's bottom border and the viewport's top border intersect. Values can be set in any dimension unit, namely `vh`, `%` and `px`. The `%` unit relates to the target's height. Both options allow basic mathematics operands, `+` and `-`.

```html
<div data-uk-parallax="start: 100%; end: 100%;">…</div>
<div data-uk-parallax="start: 30vh; end: 30vh;">…</div>
<div data-uk-parallax="start: 100% + 100; end: 100% + 100;">…</div>
```

### Example

```html
<div
  id="test-start-end"
  class="uk-overflow-hidden flex h-80 bg-cover"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <div class="mx-auto inline-flex gap-4">
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-start-end; y: 398; easing: 0;"
      >
        0 / 0
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-start-end; start: 100%; end: 100%; y: 398; easing: 0;"
      >
        100% / 100%
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-start-end; start: 30vh; end: 30vh; y: 398; easing: 0;"
      >
        30vh / 30vh
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-start-end; start: 100% + 100; end: 100% + 100; y: 398; easing: 0;"
      >
        100% + 100 / 100% + 100
      </div>
    </div>
  </div>
</div>
```

## Easing

To adjust the easing of the animation, add the `easing` option. `0` transitions at an even speed. A negative value starts off quickly slowing down until complete while a positive value starts off slowly increasing the speed until complete.

### Example

```html
<div
  id="test-easing"
  class="uk-overflow-hidden flex h-80 bg-cover"
  style="background-image: url(&quot;/images/dark.jpg&quot;)"
>
  <div class="m-auto inline-flex gap-4">
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-easing; start: 100%; end: 100%; y: 200; easing: -2"
      >
        -2
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-easing; start: 100%; end: 100%; y: 200; easing: -1"
      >
        -1
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-easing; start: 100%; end: 100%; y: 200; easing: -0.5"
      >
        -0.5
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-easing; start: 100%; end: 100%; y: 200; easing: 0"
      >
        0
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-easing; start: 100%; end: 100%; y: 200; easing: 0.5"
      >
        0.5
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-easing; start: 100%; end: 100%; y: 200; easing: 1"
      >
        1
      </div>
    </div>
    <div>
      <div
        class="bg-muted p-4 text-muted-foreground"
        data-uk-parallax="target: #test-easing; start: 100%; end: 100%; y: 200; easing: 2"
      >
        2
      </div>
    </div>
  </div>
</div>
```

## Colors

The transition from one color to another, for example for borders, backgrounds or text colors. Define colors using `rgb()` definitions, color keywords or hex values.

```html
<div data-uk-parallax="border-color: #00f,#f00">…</div>
```

### Example

```html
<div
  id="test-color"
  class="test-color uk-overflow-hidden flex h-80"
  data-uk-parallax="start: 100%; end: 100%; background-color: yellow,white; border-color: #00f,#f00;"
  style="border: 10px solid #000"
>
  <h1
    class="uk-h1 m-auto w-1/2 text-center text-white"
    data-uk-parallax="target: #test-target; start: 100%; end: 100%; color: #0f0;"
  >
    Headline
  </h1>
</div>
```

## Filters

CSS filters are an easy way to add graphical effects to any element on your page. While they are still an experimental feature for [some browsers](https://caniuse.com/filter), you can safely use them as long as your usability does not suffer. Using the Parallax component, you can dynamically change the amount of a filter on your element.

```html
<div data-uk-parallax="blur: 10; sepia: 100;">…</div>
```

### Example

```html
<div
  id="test-filter"
  class="uk-overflow-hidden flex h-80 bg-cover"
  data-uk-parallax="start: 100%; end: 100%; sepia: 100;"
  style="background-image: url(&quot;/images/light.jpg&quot;)"
>
  <h1
    class="uk-h1 m-auto w-1/2 text-center"
    data-uk-parallax="target: #test-filter; start: 100%; end: 100%; blur: 0,10;"
  >
    Headline
  </h1>
</div>
```

## SVG Strokes

The Parallax component can be used to animate SVG strokes. The effect looks like the SVG strokes are drawn before your eyes. The SVG image has to be injected into the markup as an inline SVG. This can be done manually or by using the [SVG component](https://franken-ui.dev/docs/2.1/svg). Since the SVG component injects the SVG after the image element, the `data-uk-parallax` attribute has to be added to a parent element.

```html
<div data-uk-parallax="stroke: 45">
    <img src="" width="" height="" alt="" uk-svg>
</div>
```

### Example

```html
<div
  class="flex justify-center"
  data-uk-parallax="start: 100%; end: 100%; stroke: 100%;"
>
  <img src="/images/strokes.svg" width="250" height="250" alt="" data-uk-svg />
</div>
```

**Note** It's recommended to use percent unit `%`, so you don't have to know the exact length of the strokes.

## SVG Images

The Parallax component can be applied to the elements of inline SVG images, like `rect`, `circle` and `path`.

```html
<svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
    <rect x="0" y="0" width="10" height="10" data-uk-parallax="rotate: 360"/>
</svg>
```

## Responsive

It's recommended to use `vw` or `vh` as length units instead of pixels. The parallax will adapt depending on the viewport.

The parallax can also be applied to certain viewports only. Add the `media` option with one of the possible values. For example, add a number in pixel, e.g. `640`, or a breakpoint, e.g. `@s`, `@m`, `@l` or `@xl`. The parallax will be shown for the specified viewport width and larger.

```html
<div data-uk-parallax="media: @m"></div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option   | Value                   | Default | Description                                                                                                                                                                                           |
| -------- | ----------------------- | ------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `easing` | Number                  | `1`     | Animation easing during scrolling                                                                                                                                                                     |
| `target` | CSS Selector            | `false` | Element dimension reference for animation duration.                                                                                                                                                   |
| `start`  | Length                  | `0`     | Start offset. The value can be in vh, % and px. It supports basic mathematics operands + and -. The default value of `0` means that the target's top border and viewport's bottom border intersect.   |
| `end`    | Length                  | `0`     | End offset. The value can be in vh, % and px. It supports basic mathematics operands + and -. The default value of `0` means that the target's bottom border and the viewport's top border intersect. |
| `media`  | Boolean, Number, String | `false` | Condition for the active status - a width as integer (e.g. 640) or a breakpoint (e.g. @s, @m, @l, @xl) or any valid media query (e.g. (min-width: 900px)).                                            |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.parallax(element, options);
```



# File: placeholder.md
==================================================

## Placeholder

This component applies a specially styled area to create a placeholder space. Just add the `.uk-placeholder` class to a `<div>` element.

```html
<div class="uk-placeholder"></div>
```

### Example

```html
<div class="uk-placeholder text-center">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</div>
```



# File: position.md
==================================================

## Position

To apply this component, add one of the `.uk-position-*` classes to a block element. When using this component to place content on top of an image, add the `.uk-inline` class to a container element around the image and the element to create a position context.

| Class                 | Description                          |
| --------------------- | ------------------------------------ |
| `.uk-position-top`    | Positions the element at the top.    |
| `.uk-position-left`   | Positions the element at the left.   |
| `.uk-position-right`  | Positions the element at the right.  |
| `.uk-position-bottom` | Positions the element at the bottom. |

```html
<div class="uk-inline">
  <!-- Place any content, like an image, here -->

  <div class="uk-position-center"></div>
</div>
```

### Example

```html
<div class="uk-margin uk-inline">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-top bg-white/80 p-4 text-center">Top</div>
  <div class="uk-position-bottom bg-white/80 p-4 text-center">Bottom</div>
  <div class="uk-position-left flex items-center bg-white/80 p-4">Left</div>
  <div class="uk-position-right flex items-center bg-white/80 p-4">Right</div>
</div>
```

### X and Y directions

You can also apply more specific positions that won't spread over one side of the parent container by adding one of the following classes.

| Class                        | Description                                              |
| ---------------------------- | -------------------------------------------------------- |
| `.uk-position-top-left`      | Positions the element at the top left.                   |
| `.uk-position-top-center`    | Positions the element at the top center.                 |
| `.uk-position-top-right`     | Positions the element at the top right.                  |
| `.uk-position-center`        | Positions the element vertically centered in the middle. |
| `.uk-position-center-left`   | Positions the element vertically centered on the left.   |
| `.uk-position-center-right`  | Positions the element vertically centered on the right.  |
| `.uk-position-bottom-left`   | Positions the element at the bottom left.                |
| `.uk-position-bottom-center` | Positions the element at the bottom center.              |
| `.uk-position-bottom-right`  | Positions the element at the bottom right.               |

```html
<div class="uk-position-top-right"></div>
```

### Example

```html
<div class="uk-inline">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-top-left bg-white/80 p-4">Top Left</div>
  <div class="uk-position-top-center bg-white/80 p-4">Top Center</div>
  <div class="uk-position-top-right bg-white/80 p-4">Top Right</div>
  <div class="uk-position-center-left bg-white/80 p-4">Center Left</div>
  <div class="uk-position-center bg-white/80 p-4">Center</div>
  <div class="uk-position-center-right bg-white/80 p-4">Center Right</div>
  <div class="uk-position-bottom-left bg-white/80 p-4">Bottom Left</div>
  <div class="uk-position-bottom-center bg-white/80 p-4">Bottom Center</div>
  <div class="uk-position-bottom-right bg-white/80 p-4">Bottom Right</div>
</div>
```

### Center

You can also apply more specific positions that won't spread over one side of the parent container by adding one of the following classes.

| Class                            | Description                                             |
| -------------------------------- | ------------------------------------------------------- |
| `.uk-position-center-horizontal` | Positions the element at the center from top to bottom. |
| `.uk-position-center-vertical`   | Positions the element at the center from left to right. |

```html
<div class="uk-position-center-horizontal"></div>
```

### Example

```html
<div class="uk-inline">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-center-horizontal bg-white/80 p-4">Horizontal</div>
  <div class="uk-position-center-vertical bg-white/80 p-4">Vertical</div>
</div>
```

### Cover

If you want a position element to cover its container, just add the `.uk-position-cover` class.

```html
<div class="uk-position-cover"></div>
```

### Example

```html
<div class="uk-inline">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div
    class="uk-position-cover flex items-center justify-center bg-white/80 p-4"
  >
    Cover
  </div>
</div>
```

### Outside

There are two classes to center elements outside on the left and right of the parent container. This is useful to position the [Slidenav component](https://franken-ui.dev/docs/2.1/slidenav) outside of a [Slideshow](https://franken-ui.dev/docs/2.1/slideshow) or [Slider](https://franken-ui.dev/docs/2.1/slider) component.

| Class                           | Description                                                     |
| ------------------------------- | --------------------------------------------------------------- |
| `.uk-position-center-left-out`  | Positions the element vertically centered outside on the left.  |
| `.uk-position-center-right-out` | Positions the element vertically centered outside on the right. |

Note: Once the outside positioned element sticks out of the viewport to the right, it will cause a horizontal scrollbar. You can use the visibility utility classes to hide the outside positioned element on a smaller viewports and show an inside positioned element instead.

```html
<div class="uk-position-center-left-out"></div>
```

### Example

```html
<div class="mx-auto w-3/4">
  <div class="uk-inline">
    <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

    <div class="uk-position-center-left-out bg-black/80 p-4 text-white">
      Out
    </div>
    <div class="uk-position-center-right-out bg-black/80 p-4 text-white">
      Out
    </div>
  </div>
</div>
```

## Small modifier

To apply a small margin to positioned elements, add the `.uk-position-sm` class.

```html
<div class="uk-position-center uk-position-sm"></div>
```

### Example

```html
<div class="uk-inline">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-top-left uk-position-sm bg-white/80 p-4">
    Top Left
  </div>
  <div class="uk-position-top-center uk-position-sm bg-white/80 p-4">
    Top Center
  </div>
  <div class="uk-position-top-right uk-position-sm bg-white/80 p-4">
    Top Right
  </div>
  <div class="uk-position-center-left uk-position-sm bg-white/80 p-4">
    Center Left
  </div>
  <div class="uk-position-center uk-position-sm bg-white/80 p-4">Center</div>
  <div class="uk-position-center-right uk-position-sm bg-white/80 p-4">
    Center Right
  </div>
  <div class="uk-position-bottom-left uk-position-sm bg-white/80 p-4">
    Bottom Left
  </div>
  <div class="uk-position-bottom-center uk-position-sm bg-white/80 p-4">
    Bottom Center
  </div>
  <div class="uk-position-bottom-right uk-position-sm bg-white/80 p-4">
    Bottom Right
  </div>
</div>

<div class="uk-inline mt-4">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-toptext-center uk-position-sm bg-white/80 p-4">
    Top
  </div>
  <div class="uk-position-bottomtext-center uk-position-sm bg-white/80 p-4">
    Bottom
  </div>
  <div
    class="uk-position-left uk-position-sm flex items-center bg-white/80 p-4"
  >
    Left
  </div>
  <div
    class="uk-position-right uk-position-sm flex items-center bg-white/80 p-4"
  >
    Right
  </div>
</div>

<div class="uk-inline mt-4">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div
    class="uk-position-cover uk-position-sm flex items-center justify-center bg-white/80 p-4"
  >
    Cover
  </div>
</div>

<div class="mx-auto mt-4 w-3/4">
  <div class="uk-inline">
    <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

    <div
      class="uk-position-center-left-out uk-position-sm bg-black/80 p-4 text-white"
    >
      Out
    </div>
    <div
      class="uk-position-center-right-out uk-position-sm bg-black/80 p-4 text-white"
    >
      Out
    </div>
  </div>
</div>
```

## Medium modifier

To apply a medium margin to positioned elements, add the `.uk-position-md` class.

```html
<div class="uk-position-center uk-position-md"></div>
```

### Example

```html
<div class="uk-inline">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-top-left uk-position-md bg-white/80 p-4">
    Top Left
  </div>
  <div class="uk-position-top-center uk-position-md bg-white/80 p-4">
    Top Center
  </div>
  <div class="uk-position-top-right uk-position-md bg-white/80 p-4">
    Top Right
  </div>
  <div class="uk-position-center-left uk-position-md bg-white/80 p-4">
    Center Left
  </div>
  <div class="uk-position-center uk-position-md bg-white/80 p-4">Center</div>
  <div class="uk-position-center-right uk-position-md bg-white/80 p-4">
    Center Right
  </div>
  <div class="uk-position-bottom-left uk-position-md bg-white/80 p-4">
    Bottom Left
  </div>
  <div class="uk-position-bottom-center uk-position-md bg-white/80 p-4">
    Bottom Center
  </div>
  <div class="uk-position-bottom-right uk-position-md bg-white/80 p-4">
    Bottom Right
  </div>
</div>

<div class="uk-inline mt-4">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-toptext-center uk-position-md bg-white/80 p-4">
    Top
  </div>
  <div class="uk-position-bottomtext-center uk-position-md bg-white/80 p-4">
    Bottom
  </div>
  <div
    class="uk-position-left uk-position-md flex items-center bg-white/80 p-4"
  >
    Left
  </div>
  <div
    class="uk-position-right uk-position-md flex items-center bg-white/80 p-4"
  >
    Right
  </div>
</div>

<div class="uk-inline mt-4">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div
    class="uk-position-cover uk-position-md flex items-center justify-center bg-white/80 p-4"
  >
    Cover
  </div>
</div>

<div class="mx-auto mt-4 w-3/4">
  <div class="uk-inline">
    <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

    <div
      class="uk-position-center-left-out uk-position-md bg-black/80 p-4 text-white"
    >
      Out
    </div>
    <div
      class="uk-position-center-right-out uk-position-md bg-black/80 p-4 text-white"
    >
      Out
    </div>
  </div>
</div>
```

## Large modifier

To apply a large margin to positioned elements, add the `.uk-position-lg` class.

```html
<div class="uk-position-lg uk-position-center"></div>
```

### Example

```html
<div class="uk-inline">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-top-left uk-position-lg bg-white/80 p-4">
    Top Left
  </div>
  <div class="uk-position-top-center uk-position-lg bg-white/80 p-4">
    Top Center
  </div>
  <div class="uk-position-top-right uk-position-lg bg-white/80 p-4">
    Top Right
  </div>
  <div class="uk-position-center-left uk-position-lg bg-white/80 p-4">
    Center Left
  </div>
  <div class="uk-position-center uk-position-lg bg-white/80 p-4">Center</div>
  <div class="uk-position-center-right uk-position-lg bg-white/80 p-4">
    Center Right
  </div>
  <div class="uk-position-bottom-left uk-position-lg bg-white/80 p-4">
    Bottom Left
  </div>
  <div class="uk-position-bottom-center uk-position-lg bg-white/80 p-4">
    Bottom Center
  </div>
  <div class="uk-position-bottom-right uk-position-lg bg-white/80 p-4">
    Bottom Right
  </div>
</div>

<div class="uk-inline mt-4">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div class="uk-position-toptext-center uk-position-lg bg-white/80 p-4">
    Top
  </div>
  <div class="uk-position-bottomtext-center uk-position-lg bg-white/80 p-4">
    Bottom
  </div>
  <div
    class="uk-position-left uk-position-lg flex items-center bg-white/80 p-4"
  >
    Left
  </div>
  <div
    class="uk-position-right uk-position-lg flex items-center bg-white/80 p-4"
  >
    Right
  </div>
</div>

<div class="uk-inline mt-4">
  <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

  <div
    class="uk-position-cover uk-position-lg flex items-center justify-center bg-white/80 p-4"
  >
    Cover
  </div>
</div>

<div class="mx-auto mt-4 w-1/2">
  <div class="uk-inline">
    <img src="/images/photo.jpg" width="1800" height="1200" alt="" />

    <div
      class="uk-position-center-left-out uk-position-lg bg-black/80 p-4 text-white"
    >
      Out
    </div>
    <div
      class="uk-position-center-right-out uk-position-lg bg-black/80 p-4 text-white"
    >
      Out
    </div>
  </div>
</div>
```

## Utility classes

This component features a number of general position utility classes:

| Class                   | Description                                   |
| ----------------------- | --------------------------------------------- |
| `.uk-position-relative` | Add this class to apply relative positioning. |
| `.uk-position-absolute` | Add this class to apply absolute positioning. |
| `.uk-position-fixed`    | Add this class to apply fixed positioning.    |
| `.uk-position-z-index`  | Add this class to apply a z-index of 1.       |



# File: progress.md
==================================================

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



# File: scroll.md
==================================================

## Scroll

Simply add the `data-uk-scroll` attribute to any page-internal link that contains a URL fragment to add the smooth scrolling behavior.

```html
<a href="#my-id" data-uk-scroll></a>
```

### Example

```html
<a class="uk-btn uk-btn-primary" href="#target" uk-scroll>Scroll down</a>
```

The height of a sticky element, for example the sticky navbar, is automatically added as offset to the scroll target so it is not covered by the sticky element.

## Offset

To define a general offset when linking directly to a specific section on a page, add the `offset` option.

```html
<a href="#my-id" data-uk-scroll="offset: 100"></a>
```

If there is already an offset for a sticky element, the `offset` option is added up.

## Callback after scroll

To receive a callback when scrolling has completed, you can listen to the `scrolled` event on the link element that triggered the scrolling.

```html
<a id="js-scroll-trigger" href="#my-id" data-uk-scroll></a>
```

```js
UIkit.util.on("#js-scroll-trigger", "scrolled", function () {
  alert("Done.");
});
```

### Example

```html
<a
  id="js-scroll-trigger"
  class="uk-btn uk-btn-primary"
  href="#target"
  data-uk-scroll
  >Down with callback</a
>

<script>
  document.addEventListener("uikit:init", () => {
    UIkit.util.on("#js-scroll-trigger", "scrolled", function () {
      UIkit.modal.dialog('<p class="uk-modal-body">Done</p>');
    });
  });
</script>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option   | Value  | Default | Description                 |
| -------- | ------ | ------- | --------------------------- |
| `offset` | Number | `0`     | Offset added to scroll top. |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.scroll(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name           | Description                                                                                   |
| -------------- | --------------------------------------------------------------------------------------------- |
| `beforescroll` | Fires before scroll begins. Can prevent scrolling by calling `preventDefault()` on the event. |
| `scrolled`     | Fires after scrolling is finished.                                                            |

### Methods

The following methods are available for the component:

#### ScrollTo

```js
UIkit.scroll(element).scrollTo(el);
```

Scroll to the given element.

| Name | Type           | Default   | Description               |
| ---- | -------------- | --------- | ------------------------- |
| `el` | Node, Selector | undefined | The element to scroll to. |

<div style="height: 2000px;"></div>

<a id="target" class="uk-btn uk-btn-primary" href="#" data-uk-scroll>
  Scroll up
</a>



# File: scrollspy.md
==================================================

## Scrollspy

The Scrollspy component listens to page scrolling and triggers events based on the scroll position. For example, if you scroll down a page, and an element appears in the viewport for the first time, you can trigger a smooth animation to fade in the element. Just add the `data-uk-scrollspy` attribute which takes the following options.

Typically, classes from the [Animation component](https://franken-ui.dev/docs/2.1/animation) are used together with the Scrollspy component.

```html
<div data-uk-scrollspy="cls:uk-anmt-fade"></div>
```

### Example

```html
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
  <div>
    <div
      class="uk-card uk-card-body"
      data-uk-scrollspy="cls: uk-anmt-slide-left; repeat: true"
    >
      <h3 class="uk-card-title">Left</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div
      class="uk-card uk-card-body"
      data-uk-scrollspy="cls: uk-anmt-slide-right; repeat: true"
    >
      <h3 class="uk-card-title">Right</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
</div>
```

This example uses the `repeat: true` option. Scroll up and down to see the triggered animations. The layout is made with the [Card component](https://franken-ui.dev/docs/2.1/card).

## Groups

You can also group scrollspy elements, so you won't have to apply the attribute to each of them. Just add the `data-uk-scrollspy="target: SELECTOR"` attribute to a container element, targeting the selector of the items you want to animate inside the container. When using a delay, it will be applied cumulatively to the items that scroll into view.

```html
<div data-uk-scrollspy="target: > div; cls: uk-anmt-fade; delay: 500">
  <div></div>
  <div></div>
</div>
```

### Example

```html
<div
  class="grid grid-cols-1 gap-4 sm:grid-cols-2"
  data-uk-scrollspy="cls: uk-anmt-fade; target: .uk-card; delay: 500; repeat: true"
>
  <div>
    <div class="uk-card-default uk-card uk-card-body">
      <h3 class="uk-card-title">Fade</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div class="uk-card-default uk-card uk-card-body">
      <h3 class="uk-card-title">Fade</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div class="uk-card-default uk-card uk-card-body">
      <h3 class="uk-card-title">Fade</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div class="uk-card-default uk-card uk-card-body">
      <h3 class="uk-card-title">Fade</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div class="uk-card-default uk-card uk-card-body">
      <h3 class="uk-card-title">Fade</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div class="uk-card-default uk-card uk-card-body">
      <h3 class="uk-card-title">Fade</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
</div>
```

## Set `cls` option per target

You can also give each target a separate `cls` option. Just add the `data-uk-scrollspy-class="CLASS"` attribute to a target element. It will override the `cls` option set on the component.

```html
<div data-uk-scrollspy="target: > div; cls: uk-anmt-fade; delay: 500">
  <div data-uk-scrollspy-class="uk-anmt-slide-top"></div>
  <div data-uk-scrollspy-class="uk-anmt-slide-bottom"></div>
</div>
```

### Example

```html
<div
  class="grid grid-cols-1 gap-4 sm:grid-cols-2"
  data-uk-scrollspy="cls: uk-anmt-slide-bottom; target: .uk-card; delay: 300; repeat: true"
>
  <div>
    <div class="uk-card uk-card-body">
      <h3 class="uk-card-title">Bottom</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div
      class="uk-card uk-card-body"
      data-uk-scrollspy-class="uk-anmt-slide-top"
    >
      <h3 class="uk-card-title">Top</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  <div>
    <div class="uk-card uk-card-body">
      <h3 class="uk-card-title">Bottom</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option   | Value                 | Default | Description                                                                                                                                |
| -------- | --------------------- | ------- | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `cls`    | String                |         | Class to toggle when the element enters/leaves viewport.                                                                                   |
| `target` | Boolean, CSS selector | `false` | Target to apply the scrollspy to. Defaults to the element itself.                                                                          |
| `hidden` | Boolean               | `true`  | Hides the element while out of view.                                                                                                       |
| `margin` | String                | `-1px`  | The margin is added to the viewport's bounding box, before computing an intersection with the element. The value must be in px or % units. |
| `repeat` | Boolean               | `false` | Applies the `cls` class every time the element is in view.                                                                                 |
| `delay`  | Number                | `0`     | Delay time in ms.                                                                                                                          |

`cls` is the _Primary_ option and its key may be omitted, if it's the only option in the attribute value.

```html
<span data-uk-scrollspy="my-class"></span>
```

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.scrollspy(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name      | Description                                     |
| --------- | ----------------------------------------------- |
| `inview`  | Fires after an item moves into the viewport.    |
| `outview` | Fires after an item moves into out of viewport. |

## Scrollspy nav

To automatically update the active menu item depending on the scroll position of your site, add the `data-uk-scrollspy-nav` attribute to any navigation. Each menu item must link to the ID of its corresponding part of the site.

```html
<ul
  class="uk-nav uk-nav-default"
  data-uk-scrollspy-nav="closest: li; scroll: true"
>
  <li><a href=""></a></li>
  <li><a href=""></a></li>
</ul>
```

For an example of the scrollspy nav, just check out the fixed nav on the right side of this page or take a look at the test. Any of the following options can be applied to the `data-uk-scrollspy-nav` attribute. Separate multiple options with a semicolon.

### Scrollspy nav options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option    | Value                 | Default     | Description                                                   |
| --------- | --------------------- | ----------- | ------------------------------------------------------------- |
| `cls`     | String                | `uk-active` | Class to add to the active links.                             |
| `closest` | Boolean, CSS selector | `false`     | Target to apply the class to. Defaults to the element itself. |
| `scroll`  | Boolean               | `false`     | Adds the [Scroll component](https://franken-ui.dev/docs/2.1/scroll) to its links.       |
| `target`  | CSS selector          | `a[href]`   | Targets the anchor elements that should be used.              |
| `offset`  | Number                | `0`         | Offset added to scroll top.                                   |

### Scrollspy nav JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Scrollspy nav initialization

```js
UIkit.scrollspyNav(element, options);
```

### Scrollspy nav events

The following events will be triggered on elements with this component attached:

| Name     | Description                         |
| -------- | ----------------------------------- |
| `active` | Fires after an item becomes active. |



# File: select.md
==================================================

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



# File: slidenav.md
==================================================

## Slidenav

To create a navigation with previous and next buttons, just add the `data-uk-slidenav` attribute to `<a>` elements. Add the `previous` or `next` parameter to the attribute to style the nav items as previous or next buttons.

```html
<a href="" data-uk-slidenav-previous></a>
<a href="" data-uk-slidenav-next></a>
```

### Example

```html
<a href="#" data-uk-slidenav-previous></a>
<a href="#" data-uk-slidenav-next></a>
```

## Slidenav container

To display a conjoint slidenav, wrap the slidenav items inside a `<div>` element and add the `.uk-slidenav-container` class, as well as one of the `.uk-position-*` classes.

```html
<div class="uk-slidenav-container">
  <a href="" data-uk-slidenav-previous></a>
  <a href="" data-uk-slidenav-next></a>
</div>
```

### Example

```html
<div class="uk-slidenav-container">
  <a href="" data-uk-slidenav-previous></a>
  <a href="" data-uk-slidenav-next></a>
</div>
```

## Position as overlay

To position the slidenav on top of an element or the [Slideshow component](https://franken-ui.dev/docs/2.1/slideshow) for example, just add one of the `.uk-position-*` classes from the [Position component](https://franken-ui.dev/docs/2.1/position). To create a position context on the container, add the `.uk-position-relative` class.

```html
<div class="uk-position-relative">
  <!-- The element which is wrapped goes here -->

  <a class="uk-position-center-left" href="" data-uk-slidenav-previous></a>
  <a class="uk-position-center-right" href="" data-uk-slidenav-next></a>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow
>
  <ul class="uk-slideshow-items">
    <li>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </li>
    <li>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
    </li>
    <li>
      <img src="/images/light.jpg" alt="" data-uk-cover />
    </li>
  </ul>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href="#"
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href="#"
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```



# File: slider.md
==================================================

## Slider

The Slider component is fully responsive and supports touch and swipe navigation as well as mouse drag for desktops. It even accelerates to keep up with your pace when you click through the `previous and next navigation. All animations are hardware accelerated for a smoother performance.

To apply this component, add the `data-uk-slider` attribute to a container element and create a list of slides with the `.uk-slider-items` class. Add an image or any other content to each item.

To define the widths of the slider items, you can use the width utility classes from Tailwind CSS. If no specific width is set, each item's width depends on the dimensions of the content itself.

```html
<div data-uk-slider>
  <div class="uk-slider-items">
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slider
>
  <div class="uk-slider-items">
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">2</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">3</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">4</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">5</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">6</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">7</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">8</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">9</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">10</span>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slider-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slider-item="next"
  ></a>
</div>
```

Note: To lazy load images in the slides, use the `loading="lazy"` attribute. The Slider will automatically remove the attribute from images in adjacent slides.

## Container

The `.uk-slider-container` class is responsible for the clipping of the slider items. By default, the `data-uk-slider` attribute applies this class to the same element. Alternatively, you can add this class manually to any element within the slider. That way, you can control which container clips the slider items.

```html
<div data-uk-slider>
  <div class="uk-slider-container">
    <div class="uk-slider-items">
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider1.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">1</span>
        </div>
      </div>
    </div>
  </div>
</div>
```

Since the slider effect needs a clipping container, box shadows of content items are also clipped. To widen the container to prevent box-shadows from clipping, add the `.uk-slider-container-offset` class.

## Gap

To apply a gap to the slider items, add left padding to each item, then add an equally negative margin on the parent element.

```html
<div data-uk-slider>
  <div class="uk-slider-items -ml-4">
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slider
>
  <div class="uk-slider-items -ml-4">
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">2</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">3</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">4</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">5</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">6</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">7</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">8</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">9</span>
      </div>
    </div>
    <div class="w-1/2 pl-4 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">10</span>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slider-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slider-item="next"
  ></a>
</div>
```

## Center

By default, items of the slider always are aligned to the left. To center the list items, just add `center: true` to the attribute.

```html
<div data-uk-slider="center: true">
  <!-- ... -->
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slider="center: true"
>
  <div class="uk-slider-items -ml-4">
    <div class="w-1/3 pl-4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">2</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">3</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">4</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">5</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">6</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">7</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">8</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">9</span>
      </div>
    </div>
    <div class="w-1/3 pl-4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">10</span>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slider-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slider-item="next"
  ></a>
</div>
```

## Autoplay

To activate autoplay, just add the `autoplay: true` option to the attribute. You can also set the interval in milliseconds between switching slides using `autoplay-interval: 6000`. To pause autoplay when hovering the slider, use `pause-on-hover: true`.

```html
<div data-uk-slider="autoplay: true">
  <!-- ... -->
</div>
```

## Infinite Scrolling

By default, infinite scrolling is enabled. To disable this behavior, just add the `finite: true` option to the attribute.

```html
<div data-uk-slider="finite: true">
  <!-- ... -->
</div>
```

## Slide Sets

To loop through a set of slides instead of single items, just add `sets: true` to the attribute.

```html
<div data-uk-slider="sets: true">
  <!-- ... -->
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slider="sets: true"
>
  <div class="uk-slider-items">
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">2</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">3</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">4</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">5</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">6</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">7</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">8</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">9</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">10</span>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slider-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slider-item="next"
  ></a>
</div>
```

## Navigation

To navigate through your slides, just use the `data-uk-slider-item` attribute. To target the slides, set the attribute of every nav item to the index number of the respective slider item. The elements with the `data-uk-slider-item` attribute need to be inside the `uk-slider` container. Setting the attribute to `next` and `previous` will switch to the adjacent slides.

```html
<div data-uk-slider>
  <div class="uk-slider-items">
    <!-- ... -->
  </div>

  <a href uk-slider-item="previous">
    <!-- ... -->
  </a>
  <a href uk-slider-item="next">
    <!-- ... -->
  </a>

  <ul>
    <li uk-slider-item="0">
      <a href>
        <!-- ... -->
      </a>
    </li>
    <li uk-slider-item="1">
      <a href>
        <!-- ... -->
      </a>
    </li>
    <li uk-slider-item="2">
      <a href>
        <!-- ... -->
      </a>
    </li>
  </ul>
</div>
```

The flexibility of the Slideshow component allows you to use any of the other UIkit components to navigate through items. For example the [Slidenav](https://franken-ui.dev/docs/2.1/slidenav), [Dotnav](https://franken-ui.dev/docs/2.1/dotnav) and [Thumbnav](https://franken-ui.dev/docs/2.1/thumbnav) components can be used to style the slideshow navigations.

If there is no item specific content in the navigation items, you can also add the `.uk-slider-nav` class instead of adding navigation items manually. It will generate its items automatically using `<li><a href></a></li>` as markup. This is a useful shortcut when using the [Dotnav](https://franken-ui.dev/docs/2.1/dotnav).

```html
<div data-uk-slider>
  <div class="uk-slider-items">
    <!-- ... -->
  </div>

  <ul class="uk-slider-nav uk-dotnav"></ul>
</div>
```

### Example

```html
<div uk-slider>
  <div class="uk-visible-toggle uk-position-relative" tabindex="-1">
    <div class="uk-slider-items">
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider1.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">1</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider2.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">2</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider3.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">3</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider4.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">4</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider5.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">5</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider1.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">6</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider2.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">7</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider3.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">8</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider4.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">9</span>
        </div>
      </div>
      <div class="w-1/2 sm:w-1/3 md:w-1/4">
        <img src="/images/slider5.jpg" width="400" height="600" alt="" />
        <div class="uk-position-center">
          <span class="uk-h1 text-white">10</span>
        </div>
      </div>
    </div>

    <a
      class="uk-hidden-hover uk-position-center-left uk-position-sm"
      href
      data-uk-slidenav-previous
      data-uk-slider-item="previous"
    ></a>
    <a
      class="uk-hidden-hover uk-position-center-right uk-position-sm"
      href
      data-uk-slidenav-next
      data-uk-slider-item="next"
    ></a>
  </div>

  <ul class="uk-slider-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

## Navigation outside

To place a navigation outside of a slider, add the `.uk-position-center-left-out` and the `.uk-position-center-right-out` class from the [Position component](https://franken-ui.dev/docs/2.1/position) to the `previous` and `next` navigation. Make sure the `.uk-slider-container` class, which is responsible for the clipping of the slider items, doesn't clip the navigation, too.

```html
<div data-uk-slider>
  <div class="uk-position-relative">
    <div class="uk-slider-container">
      <div class="uk-slider-items">
        <!-- ... -->
      </div>
    </div>

    <a class="uk-position-center-left-out" href uk-slider-item="previous">
      <!-- ... -->
    </a>
    <a class="uk-position-center-right-out" href uk-slider-item="next">
      <!-- ... -->
    </a>
  </div>

  <ul class="uk-slider-nav uk-dotnav"></ul>
</div>
```

### Example

```html
<div id="uk-slider-navigation-outside" data-uk-slider>
  <div class="uk-position-relative">
    <div class="uk-slider-container">
      <div class="uk-slider-items">
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider1.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">1</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider2.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">2</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider3.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">3</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider4.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">4</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider5.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">5</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider1.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">6</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider2.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">7</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider3.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">8</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider4.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">9</span>
          </div>
        </div>
        <div class="w-1/2 sm:w-1/3 md:w-1/4">
          <img src="/images/slider5.jpg" width="400" height="600" alt="" />
          <div class="uk-position-center">
            <span class="uk-h1 text-white">10</span>
          </div>
        </div>
      </div>
    </div>

    <a
      class="uk-position-center-left-out uk-position-sm"
      href
      data-uk-slidenav-previous
      data-uk-slider-item="previous"
    ></a>
    <a
      class="uk-position-center-right-out uk-position-sm"
      href
      data-uk-slidenav-next
      data-uk-slider-item="next"
    ></a>
  </div>

  <ul class="uk-slider-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

## Parallax animation

Instead of a step-by-step animation using navigation controls, the slider can use a stepless parallax animation based on its scroll position in the viewport. Just add `parallax: true` to the attribute. If a navigation is set in the markup it won't be clickable but it will get the active state of the current slide.

```html
<div data-uk-slider="parallax: true">
  <!-- ... -->
</div>
```

### Example

```html
<div uk-slider="parallax: true;">
  <div class="uk-slider-items">
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">2</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">3</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">4</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">5</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">6</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">7</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">8</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">9</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">10</span>
      </div>
    </div>
  </div>

  <ul class="uk-slider-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

To adjust the parallax duration, set the `parallax-start` and `parallax-end` options. The `parallax-start` option defines when the animation starts. The default value of `0` means that the slider's top border and viewport's bottom border intersect. The `end` option defines when the animation ends. The default value of `0` means that the slider's bottom border and the viewport's top border intersect. Values can be set in any dimension units, namely `vh`, `%` and `px`. The `%` unit relates to the slider's height. Both options allow basic mathematics operands, `+` and `-`.

```html
<div data-uk-slider="parallax: true; parallax-start: 100%; parallax-end: 100%;">
  <!-- ... -->
</div>
```

### Example

```html
<div uk-slider="parallax: true; parallax-start: 100%; parallax-end: 100%;">
  <div class="uk-slider-items">
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">1</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">2</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">3</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">4</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">5</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">6</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">7</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">8</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">9</span>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <span class="uk-h1 text-white">10</span>
      </div>
    </div>
  </div>

  <ul class="uk-slider-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

## Card

The slider is not restricted to images. Any content can be used like text, videos, images with text overlays or ken burns effect. Here is an example using the [Card component](https://franken-ui.dev/docs/2.1/card).

### Example

```html
<div data-uk-slider>
  <div class="uk-visible-toggle uk-position-relative" tabindex="-1">
    <div class="uk-slider-items -ml-4">
      <div class="w-1/2 pl-4">
        <div class="uk-card">
          <div class="uk-card-media-top">
            <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title">Headline</h3>
            <p class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt.
            </p>
          </div>
        </div>
      </div>
      <div class="w-1/2 pl-4">
        <div class="uk-card">
          <div class="uk-card-media-top">
            <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title">Headline</h3>
            <p class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt.
            </p>
          </div>
        </div>
      </div>
      <div class="w-1/2 pl-4">
        <div class="uk-card">
          <div class="uk-card-media-top">
            <img src="/images/light.jpg" width="1800" height="1200" alt="" />
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title">Headline</h3>
            <p class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt.
            </p>
          </div>
        </div>
      </div>
      <div class="w-1/2 pl-4">
        <div class="uk-card">
          <div class="uk-card-media-top">
            <img src="/images/photo2.jpg" width="1800" height="1200" alt="" />
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title">Headline</h3>
            <p class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt.
            </p>
          </div>
        </div>
      </div>
      <div class="w-1/2 pl-4">
        <div class="uk-card">
          <div class="uk-card-media-top">
            <img src="/images/photo3.jpg" width="1800" height="1200" alt="" />
          </div>
          <div class="uk-card-body">
            <h3 class="uk-card-title">Headline</h3>
            <p class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt.
            </p>
          </div>
        </div>
      </div>
    </div>

    <a
      class="uk-hidden-hover uk-position-center-left uk-position-sm"
      href
      data-uk-slidenav-previous
      data-uk-slider-item="previous"
    ></a>
    <a
      class="uk-hidden-hover uk-position-center-right uk-position-sm"
      href
      data-uk-slidenav-next
      data-uk-slider-item="next"
    ></a>
  </div>

  <ul class="uk-slider-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

Note: Since the slider effect needs a clipping container, box shadows of content items are also clipped. To widen the container to prevent box-shadows from clipping, add the `.uk-slider-container-offset` class. Alternatively, use the `uk-slider="center: true"` mode if your content items have a box shadow.

## Content overlays

Add content overlays using the [Position component](https://franken-ui.dev/docs/2.1/position). It allows you to place the content anywhere inside the slide.

```html
<div data-uk-slider>
  <div class="uk-slider-items">
    <div>
      <img src="" width="" height="" alt="" />
      <div class="uk-position-center">
        <!-- The content goes here -->
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slider
>
  <div class="uk-slider-items">
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">1</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">2</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">3</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">4</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">5</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">6</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">7</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">8</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">9</h1>
      </div>
    </div>
    <div class="w-1/2 sm:w-1/3 md:w-1/4">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-position-center">
        <h1 class="uk-h1 text-white">10</h1>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slider-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slider-item="next"
  ></a>
</div>
```

## Content parallax

Add the `data-uk-slider-parallax` attribute to any element inside the slides to animate it together with the slider animation. Add an option with the desired animation values for each CSS property you want to animate. Define at least one start and end value. It can be done by passing two values separated by a comma.

This functionality is inherited from the [Parallax component](https://franken-ui.dev/docs/2.1/parallax), and it allows animating CSS properties depending on the scroll position of the slider animation. Take a look at the [possible properties](https://franken-ui.dev/docs/2.1/parallax#usage) that can be animated.

```html
<div data-uk-slider>
  <div class="uk-slider-items">
    <div>
      <img src="" width="" height="" alt="" />
      <div class="uk-position-center">
        <div data-uk-slider-parallax="x: 100,-100">
          <!-- The content goes here -->
        </div>
      </div>
    </div>
  </div>
</div>
```

In the example above, the content will start at `100` and animate halfway to `0` while the slide moves in. When the slide starts again to move out, the content will continue to animate to `-100`. This works because the start and end values have the same distance. For different distances, three values are needed: _Start_ (Slide animates in), _Middle_ (Slide is centered), _End_ (Slide animates out).

```html
<div data-uk-slider-parallax="x: 300,0,-100">
  <!-- ... -->
</div>
```

The next example defines different in and out animations. The content slides in by moving from `100` to `0` and fades out from `1` to `0`.

```html
<div data-uk-slider-parallax="x: 100,0,0; opacity: 1,1,0">
  <!-- ... -->
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slider
>
  <div class="uk-slider-items -ml-4">
    <div class="w-4/5 pl-4">
      <div class="">
        <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
        <div class="uk-position-center text-center text-white">
          <h3 class="uk-h3" data-uk-slider-parallax="x: 100,-100">Heading</h3>
          <p class="mt-4" data-uk-slider-parallax="x: 200,-200">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
    <div class="w-4/5 pl-4">
      <div class="">
        <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
        <div class="uk-position-center text-center text-white">
          <h3 class="uk-h3" data-uk-slider-parallax="x: 100,-100">Heading</h3>
          <p class="mt-4" data-uk-slider-parallax="x: 200,-200">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
    <div class="w-4/5 pl-4">
      <div class="">
        <img src="/images/light.jpg" width="1800" height="1200" alt="" />
        <div class="uk-position-center text-center text-white">
          <h3 class="uk-h3" data-uk-slider-parallax="x: 100,-100">Heading</h3>
          <p class="mt-4" data-uk-slider-parallax="x: 200,-200">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
    <div class="w-4/5 pl-4">
      <div class="">
        <img src="/images/photo2.jpg" width="1800" height="1200" alt="" />
        <div class="uk-position-center text-center text-white">
          <h3 class="uk-h3" data-uk-slider-parallax="x: 100,-100">Heading</h3>
          <p class="mt-4" data-uk-slider-parallax="x: 200,-200">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
    <div class="w-4/5 pl-4">
      <div class="">
        <img src="/images/photo3.jpg" width="1800" height="1200" alt="" />
        <div class="uk-position-center text-center text-white">
          <h3 class="uk-h3" data-uk-slider-parallax="x: 100,-100">Heading</h3>
          <p class="mt-4" data-uk-slider-parallax="x: 200,-200">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slider-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slider-item="next"
  ></a>
</div>
```

## Content transitions

Add `clsActivated: uk-transition-active` to the attribute to trigger transition classes from the [Transition component](https://franken-ui.dev/docs/2.1/transition) automatically inside slides. Contrary to the parallax effect, transitions are not attached to the slider animation and start playing independently after the slider animation.

```html
<div data-uk-slider="clsActivated: uk-transition-active">
  <div class="uk-slider-items">
    <div>
      <img src="" width="" height="" alt="" />
      <div class="uk-position-bottom">
        <div class="uk-transition-slide-bottom">
          <!-- The content goes here -->
        </div>
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slider="clsActivated: uk-transition-active; center: true"
>
  <div class="uk-slider-items -ml-4">
    <div class="w-3/4 pl-4">
      <div class="relative">
        <img src="/images/photo.jpg" width="1800" height="1200" alt="" />
        <div
          class="uk-position-bottom uk-transition-slide-bottom bg-black/80 p-4 text-center text-white"
        >
          <h3 class="uk-h3">Bottom</h3>
          <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="w-3/4 pl-4">
      <div class="relative">
        <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
        <div
          class="uk-position-bottom uk-transition-slide-bottom bg-black/80 p-4 text-center text-white"
        >
          <h3 class="uk-h3">Bottom</h3>
          <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="w-3/4 pl-4">
      <div class="relative">
        <img src="/images/light.jpg" width="1800" height="1200" alt="" />
        <div
          class="uk-position-bottom uk-transition-slide-bottom bg-black/80 p-4 text-center text-white"
        >
          <h3 class="uk-h3">Bottom</h3>
          <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="w-3/4 pl-4">
      <div class="relative">
        <img src="/images/photo2.jpg" width="1800" height="1200" alt="" />
        <div
          class="uk-position-bottom uk-transition-slide-bottom bg-black/80 p-4 text-center text-white"
        >
          <h3 class="uk-h3">Bottom</h3>
          <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="w-3/4 pl-4">
      <div class="relative">
        <img src="/images/photo3.jpg" width="1800" height="1200" alt="" />
        <div
          class="uk-position-bottom uk-transition-slide-bottom bg-black/80 p-4 text-center text-white"
        >
          <h3 class="uk-h3">Bottom</h3>
          <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slider-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slider-item="next"
  ></a>
</div>
```

### Toggle on hover

To toggle transitions on hover, use the `.uk-transition-toggle` class from the [Transition component](https://franken-ui.dev/docs/2.1/transition) and `tabindex="0"`. This will trigger the transition when the element is hovered or focused.

```html
<div data-uk-slider>
  <div class="uk-slider-items">
    <div class="uk-transition-toggle" tabindex="0">
      <img src="" width="" height="" alt="" />
      <div class="uk-position-bottom">
        <div class="uk-transition-slide-bottom">
          <!-- The content goes here -->
        </div>
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div uk-slider>
  <div class="uk-slider-items">
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">1</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">2</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">3</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">4</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">5</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider1.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">6</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider2.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">7</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider3.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">8</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider4.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">9</h1>
      </div>
    </div>
    <div class="uk-transition-toggle w-1/2 sm:w-1/3 md:w-1/4" tabindex="0">
      <img src="/images/slider5.jpg" width="400" height="600" alt="" />
      <div class="uk-panel uk-position-center">
        <h1 class="uk-transition-slide-bottom-small uk-h1 text-white">10</h1>
      </div>
    </div>
  </div>

  <ul class="uk-slider-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option              | Value   | Default | Description                                                             |
| ------------------- | ------- | ------- | ----------------------------------------------------------------------- |
| `autoplay`          | Boolean | `false` | Slider autoplays.                                                       |
| `autoplay-interval` | Number  | `7000`  | The delay between switching slides in autoplay mode.                    |
| `center`            | Boolean | `false` | Center the active slide.                                                |
| `draggable`         | Boolean | `true ` | Enable pointer dragging.                                                |
| `easing`            | String  | `ease`  | The animation easing (CSS timing functions or cubic-bezier).            |
| `finite`            | Boolean | `false` | Disable infinite sliding.                                               |
| `index`             | Number  | `0`     | Slider item to show. 0 based index.                                     |
| `active`            | String  | `all`   | Slider item/items to apply the transition active class to (all, first). |
| `pause-on-hover`    | Boolean | `true`  | Pause autoplay mode on hover.                                           |
| `sets`              | Boolean | `false` | Slide in sets.                                                          |
| `velocity`          | Number  | `1`     | The animation velocity (pixel/ms).                                      |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.slider(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name             | Description                                              |
| ---------------- | -------------------------------------------------------- |
| `beforeitemshow` | Fires before an item is shown.                           |
| `itemshow`       | Fires after an item is shown.                            |
| `itemshown`      | Fires after an item's show animation has been completed. |
| `beforeitemhide` | Fires before an item is hidden.                          |
| `itemhide`       | Fires after an item's hide animation has started.        |
| `itemhidden`     | Fires after an item's hide animation has been completed. |

### Methods

The following methods are available for the component:

#### Show

```js
UIkit.slider(element).show(index);
```

Shows the slider item.

#### StartAutoplay

```js
UIkit.slider(element).startAutoplay();
```

Starts the slider autoplay.

#### StopAutoplay

```js
UIkit.slider(element).stopAutoplay();
```

Stops the slider autoplay.

## Accessibility

The Slider component adheres to the [Carousel WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/carousel/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _slider_ has the `aria-roledescription` property set to `carousel`.
- The _slide list_ has an ID and the `aria-live` property.
- The _slides_ have an ID, the `group` role if the slider has only a previous/next navigation or the `tabpanel` role if it has a tab navigation, the `aria-roledescription` property set to `slide` and an `aria-label` property.

The tab navigation adheres to the [tab pattern](https://www.w3.org/WAI/ARIA/apg/patterns/tabpanel/).

- The _tab navigation_ has the `tablist` role.
- The _tab navigation items_ have the `presentation` role.
- The _tab navigation links_ have the `tab` role, the `aria-selected` state, the `aria-controls` property set to the ID of the respective slide, and an `aria-label` property.

The previous/next navigation adheres to the [button pattern](https://www.w3.org/WAI/ARIA/apg/patterns/button/).

- The _prev/next navigation items_ have an `aria-label` property, the `aria-controls` property set to the ID of the slide list, and if an `<a>` element is used, the `button` role.

### Keyboard interaction

Autoplay stops when any element in the Slider component receives focus. The tab navigation can be accessed through the keyboard using the following keys.

- The <kbd>tab</kbd> or <kbd>shift+tab</kbd> keys place focus on the active tab in the tab navigation. If the focus already is on the active tab, the focus will move to the next element outside the tab navigation.
- The <kbd>left/right arrow</kbd> or <kbd>right/down arrow</kbd> keys, depending on the orientation, navigate through the tabs. The corresponding slide will get active automatically. If the focus is on the last tab, it moves to the first tab.
- The <kbd>home</kbd> or <kbd>end</kbd> keys move the focus to the first or last tab.

### Internationalization

The Slider component uses the following translation strings. Learn more about [translating components](https://franken-ui.dev/docs/2.1/accessibility#internationalization).

| Key          | Default          | Description                               |
| ------------ | ---------------- | ----------------------------------------- |
| `next`       | `Next Slide`     | `aria-label` for next slide button.       |
| `previous`   | `Previous Slide` | `aria-label` for previous slide button.   |
| `slideX`     | `Slide %s`       | `aria-label` for pagination slide button. |
| `slideLabel` | `%s of %s`       | `aria-label` for slide.                   |



# File: slideshow.md
==================================================

## Slideshow

The Slideshow component is fully responsive and supports touch and swipe navigation as well as mouse drag for desktops. When swiping between slides, the animation literally sticks at your fingertips or mouse cursor. It accelerates to keep up with your pace when you click through the previous and next navigation. All animations are hardware accelerated for a smoother performance.

To apply this component, add the `data-uk-slideshow` attribute to a container element and create a list of slides with the `.uk-slideshow-items` class.

Add an image in the background of each slide using the `data-uk-cover` attribute from the [Cover component](https://franken-ui.dev/docs/2.1/cover).

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <div>
      <img src="" alt="" data-uk-cover />
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

Note: To lazy load images in the slides, use the `loading="lazy"` attribute. The Slideshow will automatically remove the attribute from images in adjacent slides.

## Animations

By default, the slideshow uses a `slide` animation. You can set the `animation` option to use a different animation. Possible values are as follows:

| Animation | Description                        |
| --------- | ---------------------------------- |
| `slide`   | Slides slide in side by side.      |
| `fade`    | Slides fade in.                    |
| `scale`   | Slides are scaled up and fade out. |
| `pull`    | Slides are pulled from the deck.   |
| `push`    | Slides are pushed to the deck.     |

```html
<div data-uk-slideshow="animation: fade">
  <!-- ... -->
</div>
```

### Example

```html
<div class="grid grid-cols-1 gap-4 md:grid-cols-2">
  <div>
    <div class="uk-h3 mb-4">Slide</div>

    <div
      class="uk-visible-toggle uk-position-relative"
      tabindex="-1"
      data-uk-slideshow
    >
      <div class="uk-slideshow-items">
        <div>
          <img src="/images/photo.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/dark.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/light.jpg" alt="" data-uk-cover />
        </div>
      </div>

      <a
        class="uk-hidden-hover uk-position-center-left uk-position-sm"
        href
        data-uk-slidenav-previous
        data-uk-slideshow-item="previous"
      ></a>
      <a
        class="uk-hidden-hover uk-position-center-right uk-position-sm"
        href
        data-uk-slidenav-next
        data-uk-slideshow-item="next"
      ></a>
    </div>
  </div>
  <div>
    <div class="uk-h3 mb-4">Fade</div>

    <div
      class="uk-visible-toggle uk-position-relative"
      tabindex="-1"
      data-uk-slideshow="animation: fade"
    >
      <div class="uk-slideshow-items">
        <div>
          <img src="/images/photo.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/dark.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/light.jpg" alt="" data-uk-cover />
        </div>
      </div>

      <a
        class="uk-hidden-hover uk-position-center-left uk-position-sm"
        href
        data-uk-slidenav-previous
        data-uk-slideshow-item="previous"
      ></a>
      <a
        class="uk-hidden-hover uk-position-center-right uk-position-sm"
        href
        data-uk-slidenav-next
        data-uk-slideshow-item="next"
      ></a>
    </div>
  </div>
  <div>
    <div class="uk-h3 my-4">Scale</div>

    <div
      class="uk-visible-toggle uk-position-relative"
      tabindex="-1"
      data-uk-slideshow="animation: scale"
    >
      <div class="uk-slideshow-items">
        <div>
          <img src="/images/photo.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/dark.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/light.jpg" alt="" data-uk-cover />
        </div>
      </div>

      <a
        class="uk-hidden-hover uk-position-center-left uk-position-sm"
        href
        data-uk-slidenav-previous
        data-uk-slideshow-item="previous"
      ></a>
      <a
        class="uk-hidden-hover uk-position-center-right uk-position-sm"
        href
        data-uk-slidenav-next
        data-uk-slideshow-item="next"
      ></a>
    </div>
  </div>
  <div>
    <div class="uk-h3 my-4">Pull</div>

    <div
      class="uk-visible-toggle uk-position-relative"
      tabindex="-1"
      data-uk-slideshow="animation: pull"
    >
      <div class="uk-slideshow-items">
        <div>
          <img src="/images/photo.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/dark.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/light.jpg" alt="" data-uk-cover />
        </div>
      </div>

      <a
        class="uk-hidden-hover uk-position-center-left uk-position-sm"
        href
        data-uk-slidenav-previous
        data-uk-slideshow-item="previous"
      ></a>
      <a
        class="uk-hidden-hover uk-position-center-right uk-position-sm"
        href
        data-uk-slidenav-next
        data-uk-slideshow-item="next"
      ></a>
    </div>
  </div>
  <div>
    <div class="uk-h3 my-4">Push</div>

    <div
      class="uk-visible-toggle uk-position-relative"
      tabindex="-1"
      data-uk-slideshow="animation: push"
    >
      <div class="uk-slideshow-items">
        <div>
          <img src="/images/photo.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/dark.jpg" alt="" data-uk-cover />
        </div>
        <div>
          <img src="/images/light.jpg" alt="" data-uk-cover />
        </div>
      </div>

      <a
        class="uk-hidden-hover uk-position-center-left uk-position-sm"
        href
        data-uk-slidenav-previous
        uk-slideshow-item="previous"
      ></a>
      <a
        class="uk-hidden-hover uk-position-center-right uk-position-sm"
        href
        data-uk-slidenav-next
        data-uk-slideshow-item="next"
      ></a>
    </div>
  </div>
</div>
```

## Autoplay

To activate autoplay, just add the `autoplay: true` option to the attribute. You can also set the interval in milliseconds between switching slides using `autoplay-interval: 6000`. To pause autoplay when hovering the slideshow, use `pause-on-hover: true`.

```html
<div data-uk-slideshow="autoplay: true">
  <!-- ... -->
</div>
```

## Infinite Scrolling

By default, infinite scrolling is enabled. To disable this behavior, just add the `finite: true` option to the attribute.

```html
<div data-uk-slideshow="finite: true">
  <!-- ... -->
</div>
```

## Ratio

The slideshow always takes up the full width of its parent container. The height adapts according to the defined ratio. To change the default ratio of 16:9, just add the `ratio` option to the attribute. It's recommended to use the same ratio as the background images. For example, just use their width and height, like `1600:1200`.

```html
<div data-uk-slideshow="ratio: 7:3">
  <!-- ... -->
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="ratio: 7:3; animation: push"
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

## Min/Max height

By default, the slideshow height adopts the defined ratio. A minimum or maximum height can be set using the `min-height` and `max-height` options.

```html
<div data-uk-slideshow="min-height: 300; max-height: 600">
  <!-- ... -->
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="min-height: 300; max-height: 600; animation: push"
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

## Navigation

To navigate through your slides, just use the `data-uk-slideshow-item` attribute. To target the slides, set the attribute of every nav item to the index number of the respective slideshow item. The elements with the `data-uk-slideshow-item` attribute need to be inside the `data-uk-slideshow` container. Setting the attribute to `next` and `previous` will switch to the adjacent slides.

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <!-- ... -->
  </div>

  <a href data-uk-slideshow-item="previous">
    <!-- ... -->
  </a>
  <a href data-uk-slideshow-item="next">
    <!-- ... -->
  </a>

  <ul>
    <li data-uk-slideshow-item="0">
      <a href>
        <!-- ... -->
      </a>
    </li>
    <li data-uk-slideshow-item="1">
      <a href>
        <!-- ... -->
      </a>
    </li>
    <li data-uk-slideshow-item="2">
      <a href>
        <!-- ... -->
      </a>
    </li>
  </ul>
</div>
```

The flexibility of the Slideshow component allows you to use any of the other UIkit components to navigate through items. For example the [Slidenav](https://franken-ui.dev/docs/2.1/slidenav), [Dotnav](https://franken-ui.dev/docs/2.1/dotnav) and [Thumbnav](https://franken-ui.dev/docs/2.1/thumbnav) components can be used to style the slideshow navigations.

If there is no item specific content in the navigation items, you can also add the `.uk-slideshow-nav` class instead of adding navigation items manually. It will generate its items automatically using `<li><a href></a></li>` as markup. This is a useful shortcut when using the [Dotnav](https://franken-ui.dev/docs/2.1/dotnav).

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <!-- ... -->
  </div>

  <ul class="uk-slideshow-nav uk-dotnav"></ul>
</div>
```

### Example

```html
<div data-uk-slideshow="animation: push">
  <div class="uk-visible-toggle uk-position-relative" tabindex="-1">
    <div class="uk-slideshow-items">
      <div>
        <img src="/images/photo.jpg" alt="" data-uk-cover />
      </div>
      <div>
        <img src="/images/dark.jpg" alt="" data-uk-cover />
      </div>
      <div>
        <img src="/images/light.jpg" alt="" data-uk-cover />
      </div>
    </div>

    <a
      class="uk-hidden-hover uk-position-center-left uk-position-sm"
      href
      data-uk-slidenav-previous
      data-uk-slideshow-item="previous"
    ></a>
    <a
      class="uk-hidden-hover uk-position-center-right uk-position-sm"
      href
      data-uk-slidenav-next
      data-uk-slideshow-item="next"
    ></a>
  </div>

  <ul class="uk-slideshow-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

## Parallax animation

Instead of a step-by-step animation using navigation controls, the slideshow can use a stepless parallax animation based on its scroll position in the viewport. Just add `parallax: true` to the attribute. If a navigation is set in the markup it won't be clickable but it will get the active state of the current slide.

```html
<div data-uk-slideshow="parallax: true">
  <!-- ... -->
</div>
```

### Example

```html
<div uk-slideshow="animation: push; parallax: true;">
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
    </div>
  </div>

  <ul class="uk-slideshow-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

To adjust the parallax duration, set the `parallax-start` and `parallax-end` options. The `parallax-start` option defines when the animation starts. The default value of `0` means that the slideshow's top border and viewport's bottom border intersect. The `end` option defines when the animation ends. The default value of `0` means that the slideshow's bottom border and the viewport's top border intersect. Values can be set in any dimension units, namely `vh`, `%` and `px`. The `%` unit relates to the slideshow's height. Both options allow basic mathematics operands, `+` and `-`.

```html
<div
  data-uk-slideshow="parallax: true; parallax-start: 100%; parallax-end: 100%;"
>
  <!-- ... -->
</div>
```

### Example

```html
<div
  data-uk-slideshow="animation: push; parallax: true; parallax-start: 100%; parallax-end: 100%;"
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
    </div>
  </div>

  <ul class="uk-slideshow-nav uk-dotnav mt-4 justify-center"></ul>
</div>
```

## Videos

The slideshow is not restricted to images. Other media, like videos, can be positioned in the background of each slide using the `data-uk-cover` attribute from the [Cover component](https://franken-ui.dev/docs/2.1/cover). Videos are muted, and play automatically. The video will pause whenever it's not visible, and resume once it becomes visible again.

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <div>
      <video src="" autoplay loop muted playsinline uk-cover></video>
    </div>
    <div>
      <iframe src="" data-uk-cover></iframe>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="animation: push"
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </div>
    <div>
      <video
        src="https://yootheme.com/site/images/media/yootheme-pro.mp4"
        loop
        muted
        playsinline
        data-uk-cover
      ></video>
    </div>
    <div>
      <iframe
        src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent&amp;playsinline=1"
        width="1920"
        height="1080"
        allowfullscreen
        data-uk-cover
      ></iframe>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

## Ken Burns effect

To add a simple Ken Burns effect, wrap the image with a `div` and add the `.uk-position-cover` and `.uk-anmt-kenburns` classes. You can also apply the `.uk-anmt-reverse` or one of the `.uk-transform-origin-*` classes to modify the effect.

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <div>
      <div
        class="uk-anmt-kenburns uk-anmt-reverse uk-position-cover uk-transform-origin-center-left"
      >
        <img src="" alt="" data-uk-cover />
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="animation: push"
>
  <div class="uk-slideshow-items">
    <div>
      <div
        class="uk-anmt-kenburns uk-anmt-reverse uk-position-cover uk-transform-origin-center-left"
      >
        <img src="/images/photo.jpg" alt="" data-uk-cover />
      </div>
    </div>
    <div>
      <div
        class="uk-anmt-kenburns uk-anmt-reverse uk-position-cover uk-transform-origin-top-right"
      >
        <img src="/images/dark.jpg" alt="" data-uk-cover />
      </div>
    </div>
    <div>
      <div
        class="uk-anmt-kenburns uk-anmt-reverse uk-position-cover uk-transform-origin-bottom-left"
      >
        <img src="/images/light.jpg" alt="" data-uk-cover />
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

## Content overlays

Add content overlays using the [Position component](https://franken-ui.dev/docs/2.1/position). It allows you to place the content anywhere inside the slide.

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <div>
      <img src="" alt="" data-uk-cover />
      <div class="uk-position-center uk-position-sm">
        <!-- The content goes here -->
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="animation: push"
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
      <div class="uk-position-center uk-position-sm text-center text-white">
        <h3 class="uk-h3">Center</h3>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
      <div
        class="uk-position-bottom uk-position-md py-4 text-center text-white"
      >
        <h3 class="uk-h3">Bottom</h3>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
      <div class="uk-position-bottom bg-black/80 py-4 text-center text-white">
        <h3 class="uk-h3">Overlay Bottom</h3>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
      <div class="uk-position-bottom-right uk-position-sm bg-white/80 p-4">
        <h3 class="uk-h3">Overlay Bottom Right</h3>
        <p class="mt-4">Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
  </div>

  <div class="uk-light">
    <a
      class="uk-hidden-hover uk-position-center-left uk-position-sm"
      href
      data-uk-slidenav-previous
      data-uk-slideshow-item="previous"
    ></a>
    <a
      class="uk-hidden-hover uk-position-center-right uk-position-sm"
      href
      data-uk-slidenav-next
      data-uk-slideshow-item="next"
    ></a>
  </div>
</div>
```

## Content parallax

Add the `data-uk-slideshow-parallax` attribute to any element inside the slides to animate it together with the slideshow animation. Add an option with the desired animation values for each CSS property you want to animate. Define at least one start and end value. It can be done by passing two values separated by a comma.

This functionality is inherited from the [Parallax component](https://franken-ui.dev/docs/2.1/parallax), and it allows animating CSS properties depending on the scroll position of the slideshow animation. Take a look at the [possible properties](https://franken-ui.dev/docs/2.1/parallax#usage) that can be animated.

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <div>
      <img src="" alt="" data-uk-cover />
      <div class="uk-position-center uk-position-sm">
        <div data-uk-slideshow-parallax="x: 100,-100">
          <!-- The content goes here -->
        </div>
      </div>
    </div>
  </div>
</div>
```

In the example above, the content will start at `100` and animate halfway to `0` while the slide moves in. When the slide starts again to move out, the content will continue to animate to `-100`. This works because the start and end values have the same distance. For different distances, three values are needed: _Start_ (Slide animates in), _Middle_ (Slide is centered), _End_ (Slide animates out).

```html
<div data-uk-slideshow-parallax="x: 300,0,-100">
  <!-- ... -->
</div>
```

The next example defines different in and out animations. The content slides in by moving from `100` to `0` and fades out from `1` to `0`.

```html
<div data-uk-slideshow-parallax="x: 100,0,0; opacity: 1,1,0">
  <!-- ... -->
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="animation: push"
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
      <div class="uk-position-center uk-position-sm text-center text-white">
        <h3 class="uk-h3" data-uk-slideshow-parallax="x: 100,-100">Heading</h3>
        <p class="mt-4" data-uk-slideshow-parallax="x: 200,-200">
          Lorem ipsum dolor sit amet.
        </p>
      </div>
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
      <div class="uk-position-center uk-position-sm text-center text-white">
        <h3 class="uk-h3" data-uk-slideshow-parallax="x: 100,-100">Heading</h3>
        <p class="mt-4" data-uk-slideshow-parallax="x: 200,-200">
          Lorem ipsum dolor sit amet.
        </p>
      </div>
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
      <div class="uk-position-center uk-position-sm text-center text-white">
        <h3
          class="uk-h3"
          data-uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0"
        >
          Heading
        </h3>
        <p class="mt-4" data-uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">
          Lorem ipsum dolor sit amet.
        </p>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

### Advanced effects

The parallax attribute can be used to add additional effects to the slideshow animations. In the following example the `push` animation is extended by dimming out and scaling down the image when it's sliding out.

```html
<div data-uk-slideshow="animation: push">
  <div class="uk-slideshow-items">
    <div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="scale: 1.2,1.2,1"
      >
        <img src="" alt="" data-uk-cover />
      </div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"
      ></div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="animation: push"
>
  <div class="uk-slideshow-items">
    <div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="scale: 1.2,1.2,1"
      >
        <img src="/images/photo.jpg" alt="" data-uk-cover />
      </div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"
      ></div>
      <div class="uk-position-center uk-position-md text-center text-white">
        <div uk-slideshow-parallax="scale: 1,1,0.8">
          <h3 class="uk-h3" data-uk-slideshow-parallax="x: 200,0,0">Heading</h3>
          <p class="mt-4" data-uk-slideshow-parallax="x: 400,0,0;">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
    <div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="scale: 1.2,1.2,1"
      >
        <img src="/images/dark.jpg" alt="" data-uk-cover />
      </div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"
      ></div>
      <div class="uk-position-center uk-position-md text-center text-white">
        <div uk-slideshow-parallax="scale: 1,1,0.8">
          <h3 class="uk-h3" data-uk-slideshow-parallax="x: 200,0,0">Heading</h3>
          <p class="mt-4" data-uk-slideshow-parallax="x: 400,0,0;">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
    <div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="scale: 1.2,1.2,1"
      >
        <img src="/images/light.jpg" alt="" data-uk-cover />
      </div>
      <div
        class="uk-position-cover"
        data-uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"
      ></div>
      <div class="uk-position-center uk-position-md text-center text-white">
        <div uk-slideshow-parallax="scale: 1,1,0.8">
          <h3 class="uk-h3" data-uk-slideshow-parallax="x: 200,0,0">Heading</h3>
          <p class="mt-4" data-uk-slideshow-parallax="x: 400,0,0;">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

## Content transitions

Transition classes from the [Transition component](https://franken-ui.dev/docs/2.1/transition) are triggered automatically inside slides. Contrary to the parallax effect, transitions are not attached to the slideshow animation and start playing independently after the slideshow animation.

```html
<div data-uk-slideshow>
  <div class="uk-slideshow-items">
    <div>
      <img src="" alt="" data-uk-cover />
      <div class="uk-position-bottom uk-position-sm">
        <div class="uk-transition-slide-bottom">
          <!-- The content goes here -->
        </div>
      </div>
    </div>
  </div>
</div>
```

### Example

```html
<div
  class="uk-visible-toggle uk-position-relative"
  tabindex="-1"
  data-uk-slideshow="animation: fade"
>
  <div class="uk-slideshow-items">
    <div>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
      <div
        class="uk-position-bottom uk-transition-slide-bottom bg-black/80 py-4 text-center text-white"
      >
        <h3 class="uk-h3">Bottom</h3>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
    <div>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
      <div
        class="uk-position-bottom uk-transition-slide-bottom bg-black/80 py-4 text-center text-white"
      >
        <h3 class="uk-h3">Bottom</h3>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
    <div>
      <img src="/images/light.jpg" alt="" data-uk-cover />
      <div
        class="uk-position-right uk-transition-slide-right w-80 bg-black/80 p-4 text-center text-white"
      >
        <h3 class="uk-h3">Left</h3>
        <p class="mt-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
  </div>

  <a
    class="uk-hidden-hover uk-position-center-left uk-position-sm"
    href
    data-uk-slidenav-previous
    data-uk-slideshow-item="previous"
  ></a>
  <a
    class="uk-hidden-hover uk-position-center-right uk-position-sm"
    href
    data-uk-slidenav-next
    data-uk-slideshow-item="next"
  ></a>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

### Slideshow

| Option              | Value           | Default | Description                                                            |
| ------------------- | --------------- | ------- | ---------------------------------------------------------------------- |
| `animation`         | String          | `slide` | Slideshow animation mode (`slide`, `fade`, `scale`, `pull` or `push`). |
| `autoplay`          | Boolean         | `false` | Slideshow autoplays.                                                   |
| `autoplay-interval` | Number          | `7000`  | The delay between switching slides in autoplay mode.                   |
| `draggable`         | Boolean         | `true ` | Enable pointer dragging.                                               |
| `easing`            | String          | `ease`  | The animation easing (CSS timing functions or cubic-bezier).           |
| `finite`            | Boolean         | `false` | Disable infinite sliding.                                              |
| `pause-on-hover`    | Boolean         | `true`  | Pause autoplay mode on hover.                                          |
| `index`             | Number          | `0`     | Slideshow item to show. 0 based index.                                 |
| `velocity`          | Number          | `1`     | The animation velocity (pixel/ms).                                     |
| `ratio`             | Boolean, String | `16:9`  | The ratio. (`false` prevents height adjustment)                        |
| `min-height`        | Boolean, Number | `false` | The minimum height.                                                    |
| `max-height`        | Boolean, Number | `false` | The maximum height.                                                    |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.slideshow(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name             | Description                                              |
| ---------------- | -------------------------------------------------------- |
| `beforeitemshow` | Fires before an item is shown.                           |
| `itemshow`       | Fires after an item is shown.                            |
| `itemshown`      | Fires after an item's show animation has been completed. |
| `beforeitemhide` | Fires before an item is hidden.                          |
| `itemhide`       | Fires after an item's hide animation has started.        |
| `itemhidden`     | Fires after an item's hide animation has been completed. |

### Methods

The following methods are available for the component:

#### Show

```js
UIkit.slideshow(element).show(index);
```

Shows the slideshow item.

#### startAutoplay

```js
UIkit.slideshow(element).startAutoplay();
```

Starts the slideshow autoplay.

#### stopAutoplay

```js
UIkit.slideshow(element).stopAutoplay();
```

Stops the slideshow autoplay.

## Accessibility

The Slideshow component adheres to the [Carousel WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/carousel/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _slideshow_ has the `aria-roledescription` property set to `carousel`.
- The _slide list_ has an ID and the `aria-live` property.
- The _slides_ have an ID, the `group` role if the slideshow has only a previous/next navigation or the `tabpanel` role if it has a tab navigation, the `aria-roledescription` property set to `slide` and an `aria-label` property.

The tab navigation adheres to the [tab pattern](https://www.w3.org/WAI/ARIA/apg/patterns/tabpanel/).

- The _tab navigation_ has the `tablist` role.
- The _tab navigation items_ have the `presentation` role.
- The _tab navigation links_ have the `tab` role, the `aria-selected` state, the `aria-controls` property set to the ID of the respective slide, and an `aria-label` property.

The previous/next navigation adheres to the [button pattern](https://www.w3.org/WAI/ARIA/apg/patterns/button/).

- The _prev/next navigation items_ have an `aria-label` property, the `aria-controls` property set to the ID of the slide list, and if an `<a>` element is used, the `button` role.

### Keyboard interaction

Autoplay stops when any element in the Slideshow component receives focus. The tab navigation can be accessed through the keyboard using the following keys.

- The <kbd>tab</kbd> or <kbd>shift+tab</kbd> keys place focus on the active tab in the tab navigation. If the focus already is on the active tab, the focus will move to the next element outside the tab navigation.
- The <kbd>left/right arrow</kbd> or <kbd>up/down arrow</kbd> keys, depending on the orientation, navigate through the tabs. The corresponding slide will get active automatically. If the focus is on the last tab, it moves to the first tab.
- The <kbd>home</kbd> or <kbd>end</kbd> keys move the focus to the first or last tab.

### Internationalization

The Slideshow component uses the following translation strings. Learn more about [translating components](https://franken-ui.dev/docs/2.1/accessibility#internationalization).

| Key          | Default          | Description                               |
| ------------ | ---------------- | ----------------------------------------- |
| `next`       | `Next Slide`     | `aria-label` for next slide button.       |
| `previous`   | `Previous Slide` | `aria-label` for previous slide button.   |
| `slideX`     | `Slide %s`       | `aria-label` for pagination slide button. |
| `slideLabel` | `%s of %s`       | `aria-label` for slide.                   |



# File: sortable.md
==================================================

## Sortable

Drag and drop an element to a new location within the sortable grid, while the other items adjust to fit. This is great, if you want to sort items like gallery or menu items, for example.

To apply this component, add the `data-uk-sortable` attribute to a container and create child elements.

```html
<div data-uk-sortable>
  <div></div>
  <div></div>
</div>
```

### Example

```html
<ul
  class="grid grid-cols-2 gap-4 md:grid-cols-4"
  data-uk-sortable="handle: .handle"
>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 1
    </div>
  </li>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 2
    </div>
  </li>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 3
    </div>
  </li>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 4
    </div>
  </li>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 5
    </div>
  </li>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 6
    </div>
  </li>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 7
    </div>
  </li>
  <li>
    <div class="handle bg-muted p-4 text-center text-muted-foreground">
      Item 8
    </div>
  </li>
</ul>
```

## Handle

By default, the entire sortable element can be used for drag and drop sorting. To create a handle which will be used instead, just add the `handle: SELECTOR` option to the attribute and add the handle class to the element that you want to use as a handle.

```html
<ul data-uk-sortable="handle: .uk-sortable-handle">
  <li>
    <div class="uk-sortable-handle"></div>
    ...
  </li>
</ul>
```

### Example

```html
<ul
  class="grid grid-cols-2 gap-4 md:grid-cols-4"
  data-uk-sortable="handle: .uk-sortable-handle"
>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 1
    </div>
  </li>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 2
    </div>
  </li>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 3
    </div>
  </li>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 4
    </div>
  </li>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 5
    </div>
  </li>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 6
    </div>
  </li>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 7
    </div>
  </li>
  <li>
    <div
      class="flex items-center justify-center bg-muted p-4 text-muted-foreground"
    >
      <span class="uk-sortable-handle mr-2">
        <uk-icon icon="move"></uk-icon>
      </span>
      Item 8
    </div>
  </li>
</ul>
```

## Group

To be able to sort items from one list to another, you can group them by adding the `group: GROUP-NAME` option to the `data-uk-sortable` attribute on each list.

```html
<div data-uk-sortable="group: my-group">
  <div></div>
</div>

<div data-uk-sortable="group: my-group">
  <div></div>
</div>
```

### Example

```html
<div class="grid grid-cols-1 gap-4 md:grid-cols-3">
  <div class="uk-placeholder">
    <h4 class="uk-h4 mb-4">Group 1</h4>
    <div class="space-y-4" data-uk-sortable="group: sortable-group">
      <div class="bg-muted p-4 text-muted-foreground">Item 1</div>
      <div class="bg-muted p-4 text-muted-foreground">Item 2</div>
      <div class="bg-muted p-4 text-muted-foreground">Item 3</div>
      <div class="bg-muted p-4 text-muted-foreground">Item 4</div>
    </div>
  </div>
  <div class="uk-placeholder">
    <h4 class="uk-h4 mb-4">Group 2</h4>
    <div class="space-y-4" data-uk-sortable="group: sortable-group">
      <div class="bg-muted p-4 text-muted-foreground">Item 1</div>
      <div class="bg-muted p-4 text-muted-foreground">Item 2</div>
      <div class="bg-muted p-4 text-muted-foreground">Item 3</div>
      <div class="bg-muted p-4 text-muted-foreground">Item 4</div>
    </div>
  </div>
  <div class="uk-placeholder">
    <h4 class="uk-h4 mb-4">Empty Group</h4>
    <div class="space-y-4" data-uk-sortable="group: sortable-group"></div>
  </div>
</div>
```

## Custom class

You can also apply one or more custom classes to items when they are being dragged. To do so, add the `cls-custom: MY-CLASS` option to the attribute.

```html
<ul data-uk-sortable="cls-custom: my-class">
  ...
</ul>
```

### Example

```html
<ul class="max-w-sm space-y-4" data-uk-sortable="cls-custom: uk-placeholder">
  <li class="bg-muted p-4 text-muted-foreground">
    <a href="#">Item 1</a>
  </li>
  <li class="bg-muted p-4 text-muted-foreground">
    <a href="#">Item 2</a>
  </li>
  <li class="bg-muted p-4 text-muted-foreground">
    <a href="#">Item 3</a>
  </li>
  <li class="bg-muted p-4 text-muted-foreground">
    <a href="#">Item 4</a>
  </li>
</ul>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option            | Value           | Default                   | Description                                   |
| ----------------- | --------------- | ------------------------- | --------------------------------------------- |
| `group`           | String          |                           | The group                                     |
| `animation`       | String, Boolean | `slide`                   | Animation mode (`slide`, `false`).            |
| `duration`        | Number          | `250`                     | Animation duration in milliseconds.           |
| `threshold`       | Number          | `5`                       | Mouse move threshold before dragging starts.  |
| `cls-item`        | String          | `uk-sortable-item`        | The item class.                               |
| `cls-placeholder` | String          | `uk-sortable-placeholder` | The placeholder class.                        |
| `cls-drag`        | String          | `uk-sortable-drag`        | The ghost class.                              |
| `cls-drag-state`  | String          | `uk-drag`                 | The body's dragging class.                    |
| `cls-base`        | String          | `uk-sortable`             | The list's class.                             |
| `cls-no-drag`     | String          | `uk-sortable-nodrag`      | Disable dragging on elements with this class. |
| `cls-empty`       | String          | `uk-sortable-empty`       | The empty list class.                         |
| `cls-custom`      | String          |                           | The ghost's custom class.                     |
| `handle`          | String          | `false`                   | The handle selector.                          |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.sortable(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name      | Description                              |
| --------- | ---------------------------------------- |
| `start`   | Fires after dragging starts.             |
| `stop`    | Fires after dragging stops.              |
| `moved`   | Fires after an element has been moved.   |
| `added`   | Fires after an element has been added.   |
| `removed` | Fires after an element has been removed. |



# File: spinner.md
==================================================

## Spinner

To create a spinner, add the `data-uk-spinner` attribute to a block element.

```html
<div data-uk-spinner></div>
```

### Example

```html
<div data-uk-spinner></div>
```

## Ratio

Add the `ratio: 3` parameter to the `data-uk-spinner` attribute to triple its size – or any other number, depending on how big you want the spinner to be.

```html
<div data-uk-spinner="ratio: 3"></div>
```

### Example

```html
<span class="mr-2" data-uk-spinner="ratio: 3"></span>
<span data-uk-spinner="ratio: 4.5"></span>
```

## Accessibility

The Spinner component automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _spinner_ has the `status` role.



# File: stepper.md
==================================================

## Stepper

To create a stepper, just add the `.uk-stepper` class to a `<ul>` tag.

```html
<ul class="uk-stepper uk-stepper-default">
  <li>
    <a href="#">Personal Info</a>
  </li>
  <li>
    <a href="#">Account Info</a>
  </li>
  <li>
    <a href="#">Confirmation</a>
  </li>
</ul>
```

### Example

```html
<ul class="uk-stepper uk-stepper-default">
  <li>
    <a href="#">Personal Info</a>
  </li>
  <li>
    <a href="#">Account Info</a>
  </li>
  <li>
    <a href="#">Confirmation</a>
  </li>
</ul>
```

## Active modifier

This example can be used to highlight the current step in the stepper, indicating which step is actively being worked on.

Note: When you add the `.uk-active` class to one of your `li` tags, the previous `li` tags will automatically change colors.

### Example

```html
<ul class="uk-stepper uk-stepper-default">
  <li>
    <a href="#">Personal Info</a>
  </li>
  <li class="uk-active">
    <a href="#">Account Info</a>
  </li>
  <li>
    <a href="#">Confirmation</a>
  </li>
</ul>
```

## Checked modifier

To show a checkmark when the step has been finished, add the `.uk-stepper-checked` to one of your `li` tag.

### Example

```html
<ul class="uk-stepper uk-stepper-default">
  <li class="uk-stepper-checked">
    <a href="#">Personal Info</a>
  </li>
  <li class="uk-active">
    <a href="#">Account Info</a>
  </li>
  <li>
    <a href="#">Confirmation</a>
  </li>
</ul>
```

## Counter modifier

This example can be used to display step numbers within the stepper, helping to indicate the sequence of steps. Each li tag will be numbered to show its position in the progression.

### Example

```html
<ul class="uk-stepper uk-stepper-default uk-stepper-counter">
  <li class="uk-stepper-checked">
    <a href="#">Personal Info</a>
  </li>
  <li class="uk-active">
    <a href="#">Account Info</a>
  </li>
  <li>
    <a href="#">Confirmation</a>
  </li>
</ul>
```



# File: sticky.md
==================================================

## Sticky

To create an element that remains at the top of the viewport when scrolling down the site, add the `data-uk-sticky` attribute to that element.

```html
<div data-uk-sticky></div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div
    class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
    data-uk-sticky="end: !.h-80; offset: 80"
  >
    Stick to the top
  </div>
</div>
```

Note: Example elements on this page are only sticky until you scroll down to the next heading and disappear afterwards. This was done so as not to clutter your screen with all variations of sticky containers.

## Position

By default, the element sticks to the top of the viewport. You can set the `position: bottom` option to stick it to the bottom of the viewport.

```html
<div data-uk-sticky="position: bottom"></div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div
    class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
    data-uk-sticky="position: bottom; end: !.h-80"
  >
    Stick to the bottom
  </div>
</div>
```

## Start

To apply an offset to when the element should start being sticky, add the `start` option. The value can be in vh, % and px. It supports basic mathematics operands + and -. The default value of `0` means that the element's top border and viewport's top border intersect. A CSS Selector will set start to the selected element's bottom border and the element's top border.

```html
<!-- Sticks after 200px scrolling -->
<div data-uk-sticky="start: 200"></div>

<!-- Sticks after scrolling the elements height -->
<div data-uk-sticky="start: 100%"></div>

<!-- Sticks after 20vh scrolling -->
<div data-uk-sticky="start: 20vh"></div>

<!-- Sticks after the top of the selected element -->
<div id="my-id">
  <div data-uk-sticky="start: #my-id"></div>
</div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="start: 200; end: !.h-80; offset: 80"
      >
        200px
      </div>
    </div>
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="start: 100%; end: !.h-80; offset: 80"
      >
        100%
      </div>
    </div>
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="start: 20vh; end: !.h-80; offset: 80"
      >
        20vh
      </div>
    </div>
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="start: !.h-80; end: !.h-80 + div; offset: 80"
      >
        Selector
      </div>
    </div>
  </div>
</div>
<div style="height: 200px"></div>
```

## End

To apply an offset to when the element should stop being sticky, add the `stop` option. The value can be in vh, % and px. It supports basic mathematics operands + and -. A value of `0` means that the element's top border and viewport's top border intersect, which would cause the element not to be sticky at all if start is also set to `0`. A CSS Selector will set the end to the selected element's bottom border and the element's bottom border. `false` will make the element stick until the end of the page. `true` selects the parent element.

```html
<!-- Sticks until 200px scrolling -->
<div data-uk-sticky="end: 200"></div>

<!-- Sticks until scrolling the elements height -->
<div data-uk-sticky="end: 100%"></div>

<!-- Sticks until 20vh scrolling -->
<div data-uk-sticky="end: 20vh"></div>

<!-- Sticks until the bottom of the selected element -->
<div data-uk-sticky="end: #my-id"></div>
<div id="my-id"></div>

<!-- Sticks until the bottom of its parent container -->
<div>
  <div data-uk-sticky="end: true"></div>
</div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="end: 200; offset: 80"
      >
        200px
      </div>
    </div>
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="end: 100%; offset: 80"
      >
        100%
      </div>
    </div>
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="end: 20vh; offset: 80"
      >
        20vh
      </div>
    </div>
    <div>
      <div
        class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
        data-uk-sticky="end: !.h-80; offset: 80"
      >
        Selector
      </div>
    </div>
  </div>
</div>
```

## Offset

To set an offset to the viewport's edge when the element is sticky, add the `offset` option. The value can be in vh, % and px. It supports basic mathematics operands + and -.

```html
<div data-uk-sticky="offset: 200"></div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div
    class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
    data-uk-sticky="end: !.h-80; offset: 200"
  >
    Stick 200px below the top
  </div>
</div>
```

## Animation

Add an animation from the [Animation component](https://franken-ui.dev/docs/2.1/animation) in order to have the sticky element reappear smoothly if a start offset is set.

```html
<div data-uk-sticky="start: 200; animation: uk-anmt-slide-top"></div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div
    class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
    data-uk-sticky="start: 200; end: !.h-80; offset: 80; animation: uk-anmt-slide-top"
  >
    Animation Slide Top
  </div>
</div>
```

## Show On Up

You can make the sticky element show only when scrolling up to save space. Together with an animation, this makes for a very smooth experience.

```html
<div data-uk-sticky="show-on-up: true"></div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div
    class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
    data-uk-sticky="end: !.h-80; offset: 80; show-on-up: true; animation: uk-anmt-slide-top"
  >
    Slide in on scroll up
  </div>
</div>
```

## Responsive

It's possible to disable the sticky behavior for different device widths by applying the `media` option to the attribute and adding the appropriate viewport width. Add a number in pixel, for example `media: 640`, or a breakpoint, for example `media: @m`. The element will be sticky from the specified viewport width and upwards, but not below.

```html
<div data-uk-sticky="media: 640"></div>
```

### Example

```html
<div class="uk-placeholder h-80">
  <div
    class="uk-position-z-index bg-muted p-4 text-center text-muted-foreground"
    data-uk-sticky="end: !.h-80; offset: 80; media: 640"
  >
    Only be sticky on viewports larger than 640px.
  </div>
</div>
```

## Oversized Content

Sticky content that is larger than the viewport will scroll down and stick to the bottom of the viewport. Changing the scroll direction will immediately scroll the sticky content up and change the sticky behavior to stick to the top of the viewport. Scrolling down will change the behavior again.

### Example

```html
<div id="js-oversized" class="grid grid-cols-2 gap-4">
  <div>
    <div
      class="uk-position-z-index"
      data-uk-sticky="end: #js-oversized; offset: 80"
    >
      <h3 class="uk-h3">Sticky 1</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Sticky 2</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Sticky 3</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Sticky 4</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Sticky 5</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
  </div>
  <div>
    <div class="uk-background-muted">
      <h3 class="uk-h3">Headline 1</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Headline 2</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Headline 3</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Headline 4</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Headline 5</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Headline 6</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Headline 7</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>

      <h3 class="uk-h3 mt-4">Headline 8</h3>

      <p class="uk-paragraph">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </p>
    </div>
  </div>
</div>
```

## Overflow Flip

The `overflow-flip` option disables the sticky behavior for oversized content. Instead, it only flips the sticky position if the element is larger than the viewport. Changing the scroll direction will not affect the sticky position. Together with the `start` and `end` options, two nice sticky effects can be achieved. Cover an element by following content or reveal it by previous content.

```html
<!-- Section will be covered by the next section -->
<div data-uk-sticky="overflow-flip: true; end: 100%"></div>

<div>Some section.</div>

<!-- Section will be revealed by the previous section -->
<div
  data-uk-sticky="position: bottom; overflow-flip: true; start: -100%; end: 0"
></div>
```

### Example

```html
<div class="uk-position-relative uk-position-z-index-zero">
  <div
    class="uk-position-z-index-negative flex h-80 items-center justify-center bg-primary text-center text-primary-foreground"
    data-uk-sticky="overflow-flip: true; end: 100%; offset: 80"
  >
    overflow-flip: true<br />
    end: 100%
  </div>
  <div
    class="uk-position-z-index-negative flex h-80 items-center justify-center bg-muted text-center text-muted-foreground"
  >
    Cover previous section.<br />Reveal next section.
  </div>
  <div
    class="uk-position-z-index-negative flex h-80 items-center justify-center bg-primary text-center text-primary-foreground"
    data-uk-sticky="position: bottom; overflow-flip: true; start: -100%; end: 0"
  >
    position: bottom<br />
    overflow-flip: true<br />
    start: -100%<br />
    end: 0
  </div>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option           | Value                         | Default     | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| ---------------- | ----------------------------- | ----------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `position`       | `top`, `bottom`               | `top`       | The position the element should be stuck to.                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| `start`          | Length, CSS Selector          | `0`         | Start offset. The value can be in vh, % and px. It supports basic mathematics operands + and -. The default value of `0` means that the element's top border and viewport's top border intersect. A CSS Selector will set start to the selected element's bottom border and the element's top border.                                                                                                                                                                        |
| `end `           | Length, CSS Selector, Boolean | `false`     | End offset. The value can be in vh, % and px. It supports basic mathematics operands + and -. A value of `0` means that the element's top border and viewport's top border intersect, which would cause the element not to be sticky at all if start is also set to `0`. A CSS Selector will set the end to the selected element's bottom and the element's bottom border. `false` will make the element stick until the end of the page. `true` selects the parent element. |
| `offset `        | Length                        | `0`         | The offset the Sticky should be fixed to. The value can be in vh, % and px. It supports basic mathematics operands + and -.                                                                                                                                                                                                                                                                                                                                                  |
| `overflow-flip ` | Boolean                       | `false`     | Flip the Sticky's position option if the element overflows the viewport and disable overflow scrolling.                                                                                                                                                                                                                                                                                                                                                                      |
| `animation `     | String                        | `false`     | The animation to use when the element becomes sticky.                                                                                                                                                                                                                                                                                                                                                                                                                        |
| `cls-active`     | String                        | `uk-active` | The active class.                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| `cls-inactive`   | String                        |             | The inactive class.                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| `show-on-up`     | Boolean                       | `false`     | Only show sticky element when scrolling up.                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| `media `         | Number, String                | `false`     | Condition for the active status - a width as integer (e.g. 640) or a breakpoint (e.g. @s, @m, @l, @xl) or any valid media query (e.g. (min-width: 900px)).                                                                                                                                                                                                                                                                                                                   |
| `target-offset ` | `false`, Length               | `false`     | Initially make sure that the Sticky element is not over a referenced element via the page's location hash. The offset defines by how far the element will be above the referenced element. `false` will disable this behavior.                                                                                                                                                                                                                                               |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.sticky(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

| Name       | Description                                  |
| ---------- | -------------------------------------------- |
| `active`   | Fires after the element becomes sticky.      |
| `inactive` | Fires after the element is no longer sticky. |



# File: subnav.md
==================================================

## Subnav

To apply this component, use the following classes. To align a subnav, for example to horizontally center it, you can use utility classes from Tailwind CSS.

| Class         | Description                                                                                                         |
| ------------- | ------------------------------------------------------------------------------------------------------------------- |
| `.uk-subnav`  | Add this class to a `<ul>` element to define the Subnav component. Use `<a>` elements as nav items within the list. |
| `.uk-active ` | Add this class to a list item to apply an active state.                                                             |

To add list items without a link, use a `<span>` element instead of an `<a>`. Alternatively, disable an `<a>` element by adding the `.uk-disabled` class to the `<li>` element and remove the `href` attribute from the anchor to make it inaccessible through keyboard navigation.

```html
<ul class="uk-subnav">
  <li class="uk-active"><a href=""></a></li>
  <li><a href=""></a></li>
  <li><span></span></li>
</ul>
```

### Example

```html
<ul class="uk-subnav">
  <li><a href="#">Active</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>
```

## Style modifiers

Add one of the following classes for additional styles.

| Class                    | Description               |
| ------------------------ | ------------------------- |
| `.uk-subnav-primary`     | Adds a primary style.     |
| `.uk-subnav-secondary`   | Adds a secondary style.   |
| `.uk-subnav-destructive` | Adds a destructive style. |

### Example

```html
<ul class="uk-subnav uk-subnav-primary">
  <li class="uk-active"><a href="#">Active</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><span class="opacity-50">Disabled</span></li>
</ul>

<ul class="uk-subnav uk-subnav-secondary mt-4">
  <li class="uk-active"><a href="#">Active</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><span class="opacity-50">Disabled</span></li>
</ul>

<ul class="uk-subnav uk-subnav-destructive mt-4">
  <li class="uk-active"><a href="#">Active</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><span class="opacity-50">Disabled</span></li>
</ul>
```

## Subnav and Dropdown

You can also use a dropdown from the [Dropdown component](https://franken-ui.dev/docs/2.1/dropdown) with a subnav.

```html
<ul class="uk-subnav">
  <li>
    <!-- This is the menu item toggling the dropdown -->
    <a href=""></a>

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
<ul class="uk-subnav uk-subnav-primary">
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



# File: svg.md
==================================================

## SVG

SVGs or Scalable Vector Graphics are really handy, for example to display a logo that remains crisp when scaling or that is animated. The SVG component provides more control to style and animate the image and its vector parts. It injects the image into the markup as an inline SVG including all attributes, like IDs, classes, width and height, so that they can easily be targeted using CSS.

To apply this component, add the `data-uk-svg` attribute to an `<img>` element.

```html
<img src="" width="" height="" data-uk-svg />
```

Using the `data-uk-svg` attribute also allows you to inject a symbol from the SVG file. Just append the symbol's ID to the image path as you would in any fragmented URL.

### Example

```html
<!-- Targets the SVG image -->
<img src="/images/cloud-download.svg" width="40" height="40" data-uk-svg />

<!-- Targets a symbol inside the SVG image -->
<img src="/images/icons.svg#cloud-upload" width="40" height="40" data-uk-svg />
```

Note: SVGs will adapt the current color for their stroke and fill color. To prevent this behavior, add the `.uk-preserve` class to the SVG itself or the elements inside the SVG. 
Note: The `loading="lazy"` attribute for `<img>` elements is taken into account, and SVG images will be injected as inline SVG as they enter the viewport.

## Stroke Animation

There are two ways to animate SVG strokes. First by using the [Animation component](https://franken-ui.dev/docs/2.1/animation#svg-strokes) and `data-uk-svg="stroke-animation: true"`, and second by using the [Parallax component](https://franken-ui.dev/docs/2.1/parallax#svg-strokes).

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option             | Value   | Default | Description                                                                                                   |
| ------------------ | ------- | ------- | ------------------------------------------------------------------------------------------------------------- |
| `src`              | String  |         | The SVG source URL. If a location hash is present, only the `<symbol>` of the SVG with the given ID is shown. |
| `stroke-animation` | Boolean | `false` | Animate all elements with the `stroke` attribute in the SVG.                                                  |

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.svg(element, options);
```

### Properties

#### svg

A JavaScript Promise that will resolve with the added SVG Node.

```javascript
UIkit.svg(element).svg.then(function (svg) {
  svg.querySelector("path").style.stroke = "red";
});
```



# File: switcher.md
==================================================

## Switcher

The Switcher component consists of a number of toggles and their related content items. Add the `data-uk-switcher` attribute to a list element which contains the toggles. Add the `.uk-switcher` class to the element containing the content items.

By default, the element with the `.uk-switcher` class has to succeed the toggle directly in order for the switcher to function. If you need it to be nested in another element, for example when using a grid, add the `connect: SELECTOR` option to the `data-uk-switcher` attribute and select the element containing the items for switching.

Typically, the switcher toggles are styled through other components, some of which will be shown here.

```html
<!-- This is the nav containing the toggling elements -->
<ul data-uk-switcher>
  <li><a href="#"></a></li>
</ul>

<!-- This is the container of the content items -->
<ul class="uk-switcher">
  <li></li>
</ul>
```

In this example we are using the [Subnav component](https://franken-ui.dev/docs/2.1/subnav).

### Example

```html
<ul class="uk-subnav uk-subnav-primary" uk-switcher>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher mt-4">
  <li>Hello!</li>
  <li>Hello again!</li>
  <li>Bazinga!</li>
</ul>
```

## Navigation controls

In some cases you want to switch to another content section from within the active content. This is possible using the `data-uk-switcher-item` attribute. To target the items, you need to set the attribute to the number of the respective content item.

Setting the attribute to `next` and `previous` will switch to the adjacent items.

```html
<ul class="uk-switcher mt-4">
  <li><a href="#" data-uk-switcher-item="0"></a></li>
  <li><a href="#" data-uk-switcher-item="1"></a></li>
  <li><a href="#" data-uk-switcher-item="next"></a></li>
  <li><a href="#" data-uk-switcher-item="previous"></a></li>
</ul>
```

### Example

```html
<ul class="uk-subnav uk-subnav-primary" uk-switcher>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>
<ul class="uk-switcher mt-4">
  <li>
    Hello! <a class="uk-link" href="#" uk-switcher-item="2">Switch to item 3</a>
  </li>
  <li>
    Hello again!
    <a class="uk-link" href="#" uk-switcher-item="next">Next item</a>
  </li>
  <li>
    Bazinga!
    <a class="uk-link" href="#" uk-switcher-item="previous">Previous item</a>
  </li>
</ul>
```

## Connect multiple containers

It is also possible to connect multiple content containers. Just add the `connect` parameter to the `data-uk-switcher` attribute and use a selector that applies to all items.

```html
<!-- This is the nav containing the toggling elements -->
<ul data-uk-switcher="connect: .my-class">
  ...
</ul>

<!-- These are the containers of the content items -->
<ul class="my-class uk-switcher">
  ...
</ul>

<ul class="my-class uk-switcher">
  ...
</ul>
```

### Example

```html
<ul
  class="uk-subnav uk-subnav-primary"
  data-uk-switcher="connect: .switcher-container"
>
  <li><a href="#">Active</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>

<h4 class="mt-4">Container 1</h4>

<ul class="switcher-container uk-switcher mt-4">
  <li>Hello!</li>
  <li>Hello again!</li>
  <li>Bazinga!</li>
</ul>

<h4 class="mt-4">Container 2</h4>

<ul class="switcher-container uk-switcher mt-4">
  <li>Hello! The first item.</li>
  <li>Hello again! The second item.</li>
  <li>Bazinga! The third item.</li>
</ul>
```

## Animations

You can apply all animations from the [Animation component](https://franken-ui.dev/docs/2.1/animation) to switcher items. To do so, add the `animation` parameter with the relevant class to the `data-uk-switcher` attribute.

```html
<ul data-uk-switcher="animation: uk-anmt-fade">
  ...
</ul>
```

### Example

```html
<ul
  class="uk-subnav uk-subnav-primary"
  data-uk-switcher="animation: uk-anmt-fade"
>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher mt-4">
  <li>Hello!</li>
  <li>Hello again!</li>
  <li>Bazinga!</li>
</ul>
```

### Multiple animations

You can also apply multiple animations from the [Animation component](https://franken-ui.dev/docs/2.1/animation). That way you can add different in and out animations.

```html
<ul data-uk-switcher="animation: uk-anmt-slide-left-md, uk-anmt-slide-right-md">
  ...
</ul>
```

### Example

```html
<ul
  class="uk-subnav uk-subnav-primary"
  data-uk-switcher="animation: uk-anmt-slide-left-md, uk-anmt-slide-right-md"
>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher mt-4">
  <li>Hello!</li>
  <li>Hello again!</li>
  <li>Bazinga!</li>
</ul>
```

## Switcher and subnav

The switcher is easily applied to the [Subnav component](https://franken-ui.dev/docs/2.1/subnav).

```html
<!-- This is the subnav containing the toggling elements -->
<ul class="uk-subnav uk-subnav-primary" uk-switcher>
  ...
</ul>

<!-- This is the container of the content items -->
<ul class="uk-switcher"></ul>
```

### Example

```html
<ul class="uk-subnav uk-subnav-primary" uk-switcher>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
  <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher mt-4">
  <li>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.
  </li>
  <li>
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
    aliquip ex ea commodo consequat.
  </li>
  <li>
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
    eu fugiat nulla pariatur, sed do eiusmod.
  </li>
</ul>
```

## Switcher and tab

As an exception to the rule, add the `data-uk-tab` attribute instead of `data-uk-switcher` to the tabbed navigation to combine the switcher with the [Tab component](https://franken-ui.dev/docs/2.1/tab).

```html
<!-- This is the subnav containing the toggling elements -->
<ul data-uk-tab>
  ...
</ul>

<!-- This is the container of the content items -->
<ul class="uk-switcher">
  ...
</ul>
```

### Example

```html
<ul data-uk-tab>
  <li><a class="px-4 pb-3 pt-2" href="#">Item</a></li>
  <li><a class="px-4 pb-3 pt-2" href="#">Item</a></li>
  <li><a class="px-4 pb-3 pt-2" href="#">Item</a></li>
</ul>

<ul class="uk-switcher mt-4">
  <li>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.
  </li>
  <li>
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
    aliquip ex ea commodo consequat.
  </li>
  <li>
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
    eu fugiat nulla pariatur, sed do eiusmod.
  </li>
</ul>
```

### Vertical tabs

You can use the width and grid utility classes from Tailwind CSS to display content correctly with a vertical tabbed navigation.

```html
<div uk-grid>
  <div class="uk-width-auto">
    <ul class="uk-tab-left" data-uk-tab="connect: #my-id">
      ...
    </ul>
  </div>
  <div class="uk-width-expand">
    <ul id="my-id" class="uk-switcher">
      ...
    </ul>
  </div>
</div>
```

### Example

```html
<div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
  <div>
    <div class="flex flex-col gap-4 lg:flex-row">
      <div class="flex-none">
        <ul
          class="uk-tab-left"
          data-uk-tab="connect: #component-tab-left; animation: uk-anmt-fade"
        >
          <li><a href="#">Active</a></li>
          <li><a href="#">Item</a></li>
          <li><a href="#">Item</a></li>
        </ul>
      </div>
      <div class="flex-1">
        <ul id="component-tab-left" class="uk-switcher">
          <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </li>
          <li>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat.
          </li>
          <li>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur, sed do eiusmod.
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div>
    <div class="flex flex-col gap-4 lg:flex-row">
      <div class="flex-none lg:order-last">
        <ul
          class="uk-tab-right"
          data-uk-tab="connect: #component-tab-right; animation: uk-anmt-fade"
        >
          <li><a href="#">Active</a></li>
          <li><a href="#">Item</a></li>
          <li><a href="#">Item</a></li>
        </ul>
      </div>
      <div class="flex-1">
        <ul id="component-tab-right" class="uk-switcher">
          <li>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </li>
          <li>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat.
          </li>
          <li>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur, sed do eiusmod.
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
```

## Switcher and button

The switcher can also be applied to buttons or button groups from the [Button component](https://franken-ui.dev/docs/2.1/button). Just add the switcher attribute to a block around a group of buttons or to the element with the `.uk-btn-group` class.

```html
<!-- This is a switcher using a number of buttons -->
<div data-uk-switcher="toggle: > *">
  <button class="uk-btn uk-btn-default" type="button"></button>
  <button class="uk-btn uk-btn-default" type="button"></button>
</div>

<ul class="uk-switcher">
  ...
</ul>
```

### Example

```html
<div
  class="flex flex-wrap gap-2"
  data-uk-switcher="animation: uk-anmt-fade; toggle: > *"
>
  <button class="uk-btn uk-btn-primary" type="button">Item</button>
  <button class="uk-btn uk-btn-primary" type="button">Item</button>
  <button class="uk-btn uk-btn-primary" type="button">Item</button>
</div>

<ul class="uk-switcher mt-4">
  <li>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.
  </li>
  <li>
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
    aliquip ex ea commodo consequat.
  </li>
  <li>
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
    eu fugiat nulla pariatur, sed do eiusmod.
  </li>
</ul>
```

Note:  Since this example does not wrap the buttons into list items the clickable elements which trigger the content switching has to be changed by using the `toggle` option.

## Switcher and nav

To apply the switcher to the [Nav component](https://franken-ui.dev/docs/2.1/nav), add the `data-uk-switcher` attribute to the nav `<ul>` element.

```html
<div class="flex">
  <div class="w-1/4">
    <ul class="uk-nav uk-nav-default" data-uk-switcher="connect: #my-id">
      ...
    </ul>
  </div>
  <div class="flex-1">
    <ul id="my-id" class="uk-switcher">
      ...
    </ul>
  </div>
</div>
```

### Example

```html
<div class="flex">
  <div class="w-40">
    <ul
      class="uk-nav uk-nav-default"
      data-uk-switcher="connect: #component-nav; animation: uk-anmt-fade"
    >
      <li><a href="#">Active</a></li>
      <li><a href="#">Item</a></li>
      <li><a href="#">Item</a></li>
    </ul>
  </div>
  <div class="flex-1">
    <ul id="component-nav" class="uk-switcher">
      <li>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
      </li>
      <li>
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat.
      </li>
      <li>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
        dolore eu fugiat nulla pariatur, sed do eiusmod.
      </li>
    </ul>
  </div>
</div>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option        | Value        | Default              | Description                                                                                              |
| ------------- | ------------ | -------------------- | -------------------------------------------------------------------------------------------------------- |
| `connect`     | CSS selector | `~.uk-switcher`      | Related items container. By default succeeding elements with class 'uk-switcher'.                        |
| `toggle `     | CSS selector | `> * > :first-child` | Select the clickable elements which trigger content switching.                                           |
| `itemNav `    | CSS selector | `false`              | Related nav container. By default, nav items are found in related items container only.                  |
| `active `     | Number       | `0`                  | Active index on init. Providing a negative number indicates a position starting from the end of the set. |
| `animation`   | String       | `false`              | Space-separated names of [animations](https://franken-ui.dev/docs/2.1/animation). Comma-separated for animation out.               |
| `duration`    | Number       | `200`                | The animation duration.                                                                                  |
| `swiping`     | Boolean      | `true`               | Use swiping.                                                                                             |
| `followFocus` | Boolean      | `false`              | Selection follows focus automatically.                                                                   |

`connect` is the _Primary_ option and its key may be omitted, if it's the only option in the attribute value.

```html
<span data-uk-switcher=".switcher-container"></span>
```

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```javascript
UIkit.switcher(element, options);
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
UIkit.switcher(element).show(index);
```

Shows the Switcher item with given index.

| Name    | Type                 | Default | Description                           |
| ------- | -------------------- | ------- | ------------------------------------- |
| `index` | String, Number, Node | 0       | Switcher item to show. 0 based index. |

## Accessibility

The Switcher component adheres to the [Tab WAI-ARIA design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/tabpanel/) and automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _toggle navigation_ has the `tablist` role, and if it is a [Nav component](https://franken-ui.dev/docs/2.1/nav), the `aria-orientation` state set to `vertical`.
- The _toggle navigation items_ have the `presentation` role.
- The _toggle navigation links_ have an ID, the `tab` role, the `aria-selected` state and the `aria-controls` property set to the ID of the respective content item.
- The _content list_ has the `presentation` role.
- The _content list items_ have the ID, the `tabpanel` role and the `aria-labelledby` property set to the ID of the respective toggle item.

### Keyboard interaction

The toggle navigation can be accessed through keyboard using the following keys.

- The <kbd>tab</kbd> or <kbd>shift+tab</kbd> keys place focus on the active toggle in the toggle navigation. If the focus already is on the active toggle, the focus will move to the next element outside the toggle navigation.
- The <kbd>left/right arrow</kbd> or <kbd>up/down arrow</kbd> keys, depending on the orientation, navigate through the toggles. If the focus is on the last toggle, it moves to the first toggle.
- The <kbd>enter</kbd> or <kbd>space</kbd> keys activate the corresponding content item of the focused toggle.
- The <kbd>home</kbd> or <kbd>end</kbd> keys move the focus to the first or last toggle.

By default, the Switcher component has the manual activation behavior. This means the corresponding content items will only be activated using the <kbd>enter</kbd> or <kbd>space</kbd>keys. To switch to automatic activation, set `follow-focus` to `true`. When navigating through toggle items, the corresponding content item will get active automatically.



# File: tab.md
==================================================

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



# File: table.md
==================================================

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



# File: theme-switcher.md
==================================================

## Theme switcher

To implement the Theme Switcher, you'll need to make some modifications to your HTML code to allow users to change their preferences.

**1.** Start by setting a default theme and mode in the `<head>` tag of your HTML by checking the user's preference:

```html
<script>
  const htmlElement = document.documentElement;

  const __FRANKEN__ = JSON.parse(localStorage.getItem("__FRANKEN__") || "{}");

  if (
    __FRANKEN__.mode === "dark" ||
    (!__FRANKEN__.mode &&
      window.matchMedia("(prefers-color-scheme: dark)").matches)
  ) {
    htmlElement.classList.add("dark");
  } else {
    htmlElement.classList.remove("dark");
  }

  htmlElement.classList.add(__FRANKEN__.theme || "uk-theme-neutral");
  htmlElement.classList.add(__FRANKEN__.radii || "uk-radii-md");
  htmlElement.classList.add(__FRANKEN__.shadows || "uk-shadows-sm");
  htmlElement.classList.add(__FRANKEN__.font || "uk-font-sm");
  htmlElement.classList.add(__FRANKEN__.chart || "uk-chart-default");
</script>
```

This will first check if a user previously set the theme color preference manually using local storage, and as a fallback, it will either set dark or light mode based on the browser's color scheme preference.

Note: You can replace `uk-theme-neutral` with any of the 15 available themes you want as the default.

**2\.** Ensure that your `<body>` tag includes the classes `bg-background` and `text-foreground` to apply the proper background and text colors that automatically adapt to the currently set theme.

```html
<!doctype html>
<html lang="en">
  <head>
    <!-- ... -->
  </head>
  <body class="bg-background text-foreground">
    <!-- ... -->
  </body>
</html>
```

**3\.** You can now use the `<uk-theme-switcher>` markup in your HTML code with one `<select hidden></select>` tag as items reference and place it however you like.

### Example

```html
<uk-theme-switcher>
  <select hidden>
    <optgroup data-key="theme" label="Theme">
      <option data-hex="#52525b" value="uk-theme-zinc">Zinc</option>
      <option data-hex="#64748b" value="uk-theme-slate">Slate</option>
      <option data-hex="#78716c" value="uk-theme-stone">Stone</option>
      <option data-hex="#6b7280" value="uk-theme-gray">Gray</option>
      <option data-hex="#737373" value="uk-theme-neutral" selected>
        Neutral
      </option>
      <option data-hex="#dc2626" value="uk-theme-red">Red</option>
      <option data-hex="#e11d48" value="uk-theme-rose">Rose</option>
      <option data-hex="#f97316" value="uk-theme-orange">Orange</option>
      <option data-hex="#65a30d" value="uk-theme-green">Green</option>
      <option data-hex="#2563eb" value="uk-theme-blue">Blue</option>
      <option data-hex="#facc15" value="uk-theme-yellow">Yellow</option>
      <option data-hex="#7c3aed" value="uk-theme-violet">Violet</option>
      <option data-hex="#d97706" value="uk-theme-amber">Amber</option>
      <option data-hex="#9333ea" value="uk-theme-purple">Purple</option>
      <option data-hex="#0d9488" value="uk-theme-teal">Teal</option>
    </optgroup>
  </select>
</uk-theme-switcher>
```

## Custom palette

First, ensure that your `vite.config.js` file is configured to include your custom palette. For more information on how to do this, please refer to the [documentation](https://franken-ui.dev/docs/2.1/theming#custom-palette).

## Adding or removing themes

To add or remove theme options, simply add or remove `<option>` tags within the `<optgroup data-key="theme" label="Theme">` group. Each theme option should follow the format:

```html
<option data-hex="#dc2626" value="uk-theme-red">Red</option>
```

Where:

- The `data-hex` specifies the hex code for the theme preview.
- The `value` specifies the class name for the theme.
- The option text specifies the label for the theme.

## Radii

To allow users to customize radii, add an `<optgroup data-key="radii" label="Radii">` group within the `<select hidden>` tag. This group should contain `<option>` tags for each radii option, such as:

```html
<uk-theme-switcher>
  <select hidden>
    <optgroup data-key="theme" label="Theme">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="radii" label="Radii">
      <option value="uk-radii-none">None</option>
      <option value="uk-radii-sm">Small</option>
      <option value="uk-radii-md">Medium</option>
      <option value="uk-radii-lg">Large</option>
    </optgroup>
  </select>
</uk-theme-switcher>
```

## Shadows

Similarly, to allow users to customize shadows, add an `<optgroup data-key="shadows" label="Shadows">` group within the `<select hidden>` tag. This group should contain `<option>` tags for each shadow option, such as:

```html
<uk-theme-switcher>
  <select hidden>
    <optgroup data-key="theme" label="Theme">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="radii" label="Radii">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="shadows" label="Shadows">
      <option value="uk-shadows-none">None</option>
      <option value="uk-shadows-sm">Small</option>
      <option value="uk-shadows-md">Medium</option>
      <option value="uk-shadows-lg">Large</option>
    </optgroup>
  </select>
</uk-theme-switcher>
```

## Font

You can also allow users to customize font size, just add an `<optgroup data-key="font" label="Font">` group within the `<select hidden>` tag. This group should contain `<option>` tags for each font option, such as:

```html
<uk-theme-switcher>
  <select hidden>
    <optgroup data-key="theme" label="Theme">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="radii" label="Radii">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="shadows" label="Shadows">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="font" label="Font">
      <option value="uk-font-sm">Small</option>
      <option value="uk-font-base">Default</option>
    </optgroup>
  </select>
</uk-theme-switcher>
```

## Modes

To allow users to switch between light and dark modes, add an `<optgroup data-key="mode" label="Mode">` group within the `<select hidden>` tag. This group should contain `<option>` tags for each mode option, such as:

```html
<uk-theme-switcher>
  <select hidden>
    <optgroup data-key="theme" label="Theme">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="radii" label="Radii">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="shadows" label="Shadows">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="mode" label="Mode">
      <option data-icon="sun" value="light">Light</option>
      <option data-icon="moon" value="dark">Dark</option>
    </optgroup>
  </select>
</uk-theme-switcher>
```

## Charts

To allow users to switch between chart themes, add an `<optgroup data-key="chart" label="Chart">` group within the `<select hidden>` tag. This group should contain `<option>` tags for each chart theme option, such as:

```html
<uk-theme-switcher>
  <select hidden>
    <optgroup data-key="theme" label="Theme">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="radii" label="Radii">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="shadows" label="Shadows">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="mode" label="Mode">
      <!-- ... -->
    </optgroup>
    <optgroup data-key="chart" label="Chart">
      <option value="uk-chart-default" selected>
        Default
      </option>
      <option data-hex="#e76e50" value="uk-chart-palette">
        Palette
      </option>
      <option data-hex="#2563eb" value="uk-chart-sapphire">Sapphire</option>
      <option data-hex="#e21d48" value="uk-chart-ruby">Ruby</option>
      <option data-hex="#1dc355" value="uk-chart-emerald">Emerald</option>
      <option data-hex="#ad7c48" value="uk-chart-daylight">Daylight</option>
      <option data-hex="#959593" value="uk-chart-midnight">Midnight</option>
    </optgroup>
  </select>
</uk-theme-switcher>
```

Note: The values inside the `<option>` tags will be attached to the `<head>` tag, allowing for customization. However, the dark and light classes are exceptions and will be handled differently.

## Dropdown

You can use the [Drop](https://franken-ui.dev/docs/2.1/drop) component to display the Theme Switcher, providing a compact and convenient way to access theme options.

### Example

```html
<div class="uk-inline">
  <button class="uk-btn uk-btn-default">Open</button>
  <div
    class="uk-card uk-card-body uk-drop w-96"
    data-uk-drop="mode: click; offset: 8"
  >
    <uk-theme-switcher id="theme-switcher">
      <select hidden>
        <optgroup data-key="theme" label="Theme">
          <option data-hex="#d97706" value="uk-theme-amber">Amber</option>
          <option data-hex="#9333ea" value="uk-theme-purple">Purple</option>
          <option data-hex="#0d9488" value="uk-theme-teal">Teal</option>
        </optgroup>
      </select>
    </uk-theme-switcher>
  </div>
</div>
```

## Modal

Alternatively, you can also display the Theme Switcher inside a [Modal](https://franken-ui.dev/docs/2.1/modal) component.

### Example

```html
<a class="uk-btn uk-btn-default" href="#theme-switcher-modal" data-uk-toggle>
  Open
</a>

<div class="uk-modal" id="theme-switcher-modal" data-uk-modal>
  <div class="uk-modal-dialog">
    <button
      class="uk-modal-close absolute right-4 top-4"
      type="button"
      data-uk-close
    ></button>
    <div class="uk-modal-header">
      <div class="uk-modal-title">Customize</div>
    </div>
    <div class="uk-modal-body">
      <uk-theme-switcher id="theme-switcher">
        <select hidden>
          <optgroup data-key="theme" label="Theme">
            <option data-hex="#52525b" value="uk-theme-zinc">Zinc</option>

            <option data-hex="#64748b" value="uk-theme-slate">Slate</option>
            <option data-hex="#78716c" value="uk-theme-stone">Stone</option>
            <option data-hex="#6b7280" value="uk-theme-gray">Gray</option>
            <option data-hex="#737373" value="uk-theme-neutral" selected>
              Neutral
            </option>
            <option data-hex="#dc2626" value="uk-theme-red">Red</option>
            <option data-hex="#e11d48" value="uk-theme-rose">Rose</option>
            <option data-hex="#f97316" value="uk-theme-orange">Orange</option>
            <option data-hex="#65a30d" value="uk-theme-green">Green</option>
            <option data-hex="#2563eb" value="uk-theme-blue">Blue</option>
            <option data-hex="#facc15" value="uk-theme-yellow">Yellow</option>
            <option data-hex="#7c3aed" value="uk-theme-violet">Violet</option>
            <option data-hex="#d97706" value="uk-theme-amber">Amber</option>
            <option data-hex="#9333ea" value="uk-theme-purple">Purple</option>
            <option data-hex="#0d9488" value="uk-theme-teal">Teal</option>
          </optgroup>
          <optgroup data-key="radii" label="Radii">
            <option value="uk-radii-none">None</option>
            <option value="uk-radii-sm">Small</option>
            <option value="uk-radii-md" selected>Medium</option>
            <option value="uk-radii-lg">Large</option>
          </optgroup>
          <optgroup data-key="shadows" label="Shadows">
            <option value="uk-shadows-none">None</option>
            <option value="uk-shadows-sm" selected>Small</option>
            <option value="uk-shadows-md">Medium</option>
            <option value="uk-shadows-lg">Large</option>
          </optgroup>
          <optgroup data-key="font" label="Font">
            <option value="uk-font-sm" selected>Small</option>
            <option value="uk-font-base">Default</option>
          </optgroup>
          <optgroup data-key="mode" label="Mode">
            <option data-icon="sun" value="light">Light</option>
            <option data-icon="moon" value="dark">Dark</option>
          </optgroup>
        </select>
      </uk-theme-switcher>
    </div>
  </div>
</div>
```

## Internationalization

To customize language, you can now directly do it inside your markup. This allows for more flexibility and control over the text displayed to your users.

### Example

```html
<uk-theme-switcher>
  <select hidden>
    <optgroup data-key="theme" label="テーマ">
      <option data-hex="#52525b" value="uk-theme-zinc" selected>亜鉛</option>
      <option data-hex="#64748b" value="uk-theme-slate">スレート</option>
      <option data-hex="#78716c" value="uk-theme-stone">石</option>
      <option data-hex="#6b7280" value="uk-theme-gray">グレー</option>
      <option data-hex="#737373" value="uk-theme-neutral">中性</option>
      <option data-hex="#dc2626" value="uk-theme-red">赤</option>
      <option data-hex="#e11d48" value="uk-theme-rose">薔薇</option>
      <option data-hex="#f97316" value="uk-theme-orange">オレンジ</option>
      <option data-hex="#16a34a" value="uk-theme-green">緑</option>
      <option data-hex="#2563eb" value="uk-theme-blue">青</option>
      <option data-hex="#facc15" value="uk-theme-yellow">黄色</option>
      <option data-hex="#7c3aed" value="uk-theme-violet">バイオレット</option>
      <option data-hex="#d97706" value="uk-theme-amber">アンバー</option>
      <option data-hex="#9333ea" value="uk-theme-purple">パープル</option>
      <option data-hex="#0d9488" value="uk-theme-teal">ティール</option>
    </optgroup>
    <optgroup data-key="radii" label="半径">
      <option value="uk-radii-none">なし</option>
      <option value="uk-radii-sm">小さい</option>
      <option value="uk-radii-md" selected>中くらい</option>
      <option value="uk-radii-lg">大きい</option>
    </optgroup>
    <optgroup data-key="shadows" label="影">
      <option value="uk-shadows-none">なし</option>
      <option value="uk-shadows-sm" selected>小さい</option>
      <option value="uk-shadows-md">中くらい</option>
      <option value="uk-shadows-lg">大きい</option>
    </optgroup>
    <optgroup data-key="font" label="フォント">
      <option value="uk-font-sm" selected>小さい</option>
      <option value="uk-font-base">デフォルト</option>
    </optgroup>
    <optgroup data-key="mode" label="モード">
      <option data-icon="sun" value="light">ライト</option>
      <option data-icon="moon" value="dark">暗い</option>
    </optgroup>
  </select>
</uk-theme-switcher>
```

## Attributes

The following attributes are available for this component:

| Name                     | Type    | Default | Description                                |
| ------------------------ | ------- | ------- | ------------------------------------------ |
| `force-prevent-rerender` | Boolean | false   | Forcefully prevents component rerendering. |

## Events

The Theme Switcher component triggers the following events on elements with this component attached:

| Name                       | Description                       |
| -------------------------- | --------------------------------- |
| `uk-theme-switcher:change` | Fired when something has changed. |



# File: theming.md
==================================================

## Theming

Franken UI, just like shadcn/ui use a simple `background` and `foreground` convention for colors. The `background` variable is used for the background color of the component and the `foreground` variable is used for the text color.

The `background` suffix is omitted when the variable is used for the background color of the component.

Given the following CSS variables:

```css
--primary: 0 0% 9%;
--primary-foreground: 0 0% 98%;
```

The `background` color of the following component will be `hsl(var(--primary))` and the `foreground` color will be `hsl(var(--primary-foreground))`.

```html
<div class="bg-primary text-primary-foreground">Hello</div>
```

**CSS variables must be defined without color space function**. See the [Tailwind CSS documentation](https://v3.tailwindcss.com/docs/customizing-colors#using-css-variables) for more information.

## List of variables

Here's the list of variables available for customization:

**1\.** For default backgrounds

```css
--background: 0 0% 100%;
--foreground: 0 0% 4%;
```

**2\.** For muted backgrounds

```css
--muted: 0 0% 96%;
--muted-foreground: 0 0% 45%;
```

**3\.** Background color for cards

```css
--card: 0 0% 100%;
--card-foreground: 0 0% 4%;
```

**4\.** Background color for popovers

```css
--popover: 0 0% 100%;
--popover-foreground: 0 0% 4%;
```

**5\.** For border color

```css
--border: 0 0% 90%;
```

**6\.** Border color for inputs

```css
--input: 0 0% 90%;
```

**7\.** For primary colors

```css
--primary: 0 0% 9%;
--primary-foreground: 0 0% 98%;
```

**8\.** For secondary colors

```css
--secondary: 0 0% 96%;
--secondary-foreground: 0 0% 9%;
```

**9\.** For accents such as hover effects

```css
--accent: 0 0% 96%;
--accent-foreground: 0 0% 9%;
```

**10\.** For destructive actions

```css
--destructive: 357 100% 45%;
--destructive-foreground: 0 0% 100%;
```

**11\.** For focus ring

```css
--ring: 0 0% 63%;
```

## Adding new colors

To add new colors, simply add them to your main CSS file.

```css
:root {
  --warning: 38 92% 50%;
  --warning-foreground: 48 96% 89%;
}
 
.dark {
  --warning: 48 96% 89%;
  --warning-foreground: 38 92% 50%;
}
 
@theme {
  --color-warning: hsl(var(--warning));
  --color-warning-foreground: hsl(var(--warning-foreground));
}
```

You can now use the `warning` utility class in your components.

```html
<div class="bg-warning text-warning-foreground"></div>
```

## Custom palette

### Via CDN

**1.** Start by going to [https://ui.shadcn.com/colors](https://ui.shadcn.com/colors). Set the output format to **HSL** and pick your desired color. Use that color to assign values to the `--primary`, `--primary-foreground`, and `--ring` tokens. These tokens represent your main theme color, its contrasting foreground color, and the ring color for focus states.

**2.** Use the CSS snippet below as your starting point and replace the `*` with your theme name (e.g. `indigo`, `cyan`, `fuchsia`, etc.). You only need to update the values for `--primary`, `--primary-foreground`, and `--ring` for both light and dark modes, but you're free to customize everything else if needed.

```css
.uk-theme-emerald {
  --primary: 161.4 93.5% 30.4%;
  --primary-foreground: 151.8 81% 95.9%;
  --ring: 158.1 64.4% 51.6%;
}

.dark.uk-theme-emerald {
  --primary: 160.1 84.1% 39.4%;
  --primary-foreground: 151.8 81% 95.9%;
  --ring: 143.8 61.2% 20.2%;
}
```

Note: CDN theming only provides basic theming and won't customize checkboxes, radio buttons, or any other SVG-based background images, as colors need to be converted and injected (i.e., compiled). For advanced customization, please use the Vite plugin.

### Via NPM

**1.** Start by going to [https://ui.shadcn.com/colors](https://ui.shadcn.com/colors). Set the output format to **HSL** and pick your desired color. Use that color to assign values to the `--primary`, `--primary-foreground`, and `--ring` tokens. These tokens represent your main theme color, its contrasting foreground color, and the ring color for focus states.

**2.** Use the snippet below as your starting point and replace the `*` with your theme name (e.g. `indigo`, `cyan`, `fuchsia`, etc.). You only need to update the values for `--primary`, `--primary-foreground`, and `--ring` for both light and dark modes, but you're free to customize everything else if needed.

```javascript
'.uk-theme-*': {
  '--background': '0 0% 100%',
  '--foreground': '0 0% 4%',
  '--card': '0 0% 100%',
  '--card-foreground': '0 0% 4%',
  '--popover': '0 0% 100%',
  '--popover-foreground': '0 0% 4%',
  '--primary': '0 0% 9%',
  '--primary-foreground': '0 0% 98%',
  '--secondary': '0 0% 96%',
  '--secondary-foreground': '0 0% 9%',
  '--muted': '0 0% 96%',
  '--muted-foreground': '0 0% 45%',
  '--accent': '0 0% 96%',
  '--accent-foreground': '0 0% 9%',
  '--destructive': '357 100% 45%',
  '--destructive-foreground': '0 0% 100%',
  '--border': '0 0% 90%',
  '--input': '0 0% 90%',
  '--ring': '0 0% 63%'
},
'.dark.uk-theme-*': {
  '--background': '0 0% 4%',
  '--foreground': '0 0% 98%',
  '--card': '0 0% 9%',
  '--card-foreground': '0 0% 98%',
  '--popover': '0 0% 15%',
  '--popover-foreground': '0 0% 98%',
  '--primary': '0 0% 90%',
  '--primary-foreground': '0 0% 9%',
  '--secondary': '0 0% 15%',
  '--secondary-foreground': '0 0% 98%',
  '--muted': '0 0% 15%',
  '--muted-foreground': '0 0% 63%',
  '--accent': '0 0% 25%',
  '--accent-foreground': '0 0% 98%',
  '--destructive': '357 100% 45%',
  '--destructive-foreground': '0 0% 100%',
  '--border': '0 0% 100%',
  '--input': '0 0% 100%',
  '--ring': '0 0% 45%'
},
```

Note: If you're using the legacy color generators from version 2.0, make sure to include the following additional keys in **dark mode** for compatibility:

```js
.dark.uk-theme-* {
  '--destructive-alpha': '1',
  '--border-alpha': '1',
  '--input-alpha': '1'
}
```

**3.** Finally, configure your `vite.config.js` to add the custom palette. You will do this inside the `customPalette` option.

```js
import franken from "franken-ui/plugin-vite";
import tailwindcss from "@tailwindcss/vite";
import { defineConfig } from "vite";

export default defineConfig({
  plugins: [
    franken({
      customPalette: {
        ".uk-theme-emerald": {
          "--background": "0 0% 100%",
          "--foreground": "0 0% 4%",
          "--card": "0 0% 100%",
          "--card-foreground": "0 0% 4%",
          "--popover": "0 0% 100%",
          "--popover-foreground": "0 0% 4%",
          "--primary": "161.4 93.5% 30.4%",
          "--primary-foreground": "151.8 81% 95.9%",
          "--secondary": "0 0% 96%",
          "--secondary-foreground": "0 0% 9%",
          "--muted": "0 0% 96%",
          "--muted-foreground": "0 0% 45%",
          "--accent": "0 0% 96%",
          "--accent-foreground": "0 0% 9%",
          "--destructive": "357 100% 45%",
          "--destructive-foreground": "0 0% 100%",
          "--border": "0 0% 90%",
          "--input": "0 0% 90%",
          "--ring": "158.1 64.4% 51.6%",
        },
        ".dark.uk-theme-emerald": {
          "--background": "0 0% 4%",
          "--foreground": "0 0% 98%",
          "--card": "0 0% 9%",
          "--card-foreground": "0 0% 98%",
          "--popover": "0 0% 15%",
          "--popover-foreground": "0 0% 98%",
          "--primary": "160.1 84.1% 39.4%",
          "--primary-foreground": "151.8 81% 95.9%",
          "--secondary": "0 0% 15%",
          "--secondary-foreground": "0 0% 98%",
          "--muted": "0 0% 15%",
          "--muted-foreground": "0 0% 63%",
          "--accent": "0 0% 25%",
          "--accent-foreground": "0 0% 98%",
          "--destructive": "357 100% 45%",
          "--destructive-foreground": "0 0% 100%",
          "--border": "0 0% 100%",
          "--input": "0 0% 100%",
          "--ring": "143.8 61.2% 20.2%",
        },
      },
    }),
    tailwindcss(),
  ],
});
```

## Setting the default palette

To set your newly added palette as the default, simply update the script in your `<head>` tag to reference the new theme name, like so:

```html
<script>
  const htmlElement = document.documentElement;

  const __FRANKEN__ = JSON.parse(
    localStorage.getItem("__FRANKEN__") || "{}",
  );

  if (
    __FRANKEN__.mode === "dark" ||
    (!__FRANKEN__.mode &&
      window.matchMedia("(prefers-color-scheme: dark)").matches)
  ) {
    htmlElement.classList.add("dark");
  } else {
    htmlElement.classList.remove("dark");
  }

  htmlElement.classList.add(__FRANKEN__.theme || "uk-theme-emerald");
  htmlElement.classList.add(__FRANKEN__.radii || "uk-radii-md");
  htmlElement.classList.add(__FRANKEN__.shadows || "uk-shadows-sm");
  htmlElement.classList.add(__FRANKEN__.font || "uk-font-sm");
  htmlElement.classList.add(__FRANKEN__.chart || "uk-chart-default");
</script>
```

## Adding to theme switcher

To register your newly added palette with the [Theme Switcher](https://franken-ui.dev/docs/2.1/theme-switcher#custom-palette), please refer to the corresponding documentation or guide for step-by-step instructions on how to integrate it.



# File: thumbnav.md
==================================================

## Thumbnav

To create a navigation with thumbnails, use the following classes. This component is built with Flexbox. So to align a thumbnav, you can use utility classes from Tailwind CSS.

| Class          | Description                                                                                                                            |
| -------------- | -------------------------------------------------------------------------------------------------------------------------------------- |
| `.uk-thumbnav` | Add this class to a `<ul>` element to define the Thumbnav component. Nest your thumbnail images inside `<a>` elements within the list. |
| `.uk-active `  | Add this class to a list item to apply an active state.                                                                                |

```html
<ul class="uk-thumbnav">
  <li class="uk-active">
    <a href=""><img src="" width="" height="" alt="" /></a>
  </li>
  <li>
    <a href=""><img src="" alt="" /></a>
  </li>
</ul>
```

### Example

```html
<ul class="uk-thumbnav">
  <li class="uk-active">
    <a href="#">
      <img src="/images/photo.jpg" width="100" height="67" alt="" />
    </a>
  </li>
  <li>
    <a href="#">
      <img src="/images/dark.jpg" width="100" height="67" alt="" />
    </a>
  </li>
  <li>
    <a href="#">
      <img src="/images/light.jpg" width="100" height="67" alt="" />
    </a>
  </li>
</ul>
```

## Vertical alignment

The thumbnav can also be displayed vertically. Just add the `.uk-thumbnav-vertical` modifier.

```html
<ul class="uk-thumbnav uk-thumbnav-vertical">
  ...
</ul>
```

### Example

```html
<ul class="uk-thumbnav uk-thumbnav-vertical">
  <li class="uk-active">
    <a href="#">
      <img src="/images/photo.jpg" width="100" height="67" alt="" />
    </a>
  </li>
  <li>
    <a href="#">
      <img src="/images/dark.jpg" width="100" height="67" alt="" />
    </a>
  </li>
  <li>
    <a href="#">
      <img src="/images/light.jpg" width="100" height="67" alt="" />
    </a>
  </li>
</ul>
```

## Position as overlay

To position the thumbnav on top of an element or the [Slideshow component](https://franken-ui.dev/docs/2.1/slideshow) for example, add one of the `.uk-position-*` classes from the [Position component](https://franken-ui.dev/docs/2.1/position) to a `div` element wrapping the thumbnav. To create a position context on the container, add the `.uk-position-relative` class.

```html
<div class="uk-position-relative">
  <!-- The element which is wrapped goes here -->

  <div class="uk-position-bottom-center uk-position-small">
    <ul class="uk-thumbnav">
      ...
    </ul>
  </div>
</div>
```

### Example

```html
<div class="uk-position-relative" data-uk-slideshow="animation: fade">
  <ul class="uk-slideshow-items">
    <li>
      <img src="/images/photo.jpg" alt="" data-uk-cover />
    </li>
    <li>
      <img src="/images/dark.jpg" alt="" data-uk-cover />
    </li>
    <li>
      <img src="/images/light.jpg" alt="" data-uk-cover />
    </li>
  </ul>

  <div class="uk-position-small uk-position-bottom-center">
    <ul class="uk-thumbnav">
      <li data-uk-slideshow-item="0">
        <a href="#">
          <img src="/images/photo.jpg" width="100" height="67" alt="" />
        </a>
      </li>
      <li data-uk-slideshow-item="1">
        <a href="#">
          <img src="/images/dark.jpg" width="100" height="67" alt="" />
        </a>
      </li>
      <li data-uk-slideshow-item="2">
        <a href="#">
          <img src="/images/light.jpg" width="100" height="67" alt="" />
        </a>
      </li>
    </ul>
  </div>
</div>
```



# File: toggle.md
==================================================

## Toggle

To apply this component, just add the `data-uk-toggle="target: #ID"` attribute to a `<button>` or `<a>` element. You can use any selector with the toggle attribute.

The toggle can be used to add or remove a class or attribute from the item. By default, it adds the `hidden` attribute to hide the element.

```html
<button data-uk-toggle="target: #my-id" type="button"></button>
<p id="my-id"></p>
```

### Example

```html
<div>
  <button
    class="uk-btn uk-btn-default"
    type="button"
    data-uk-toggle="target: #toggle-usage"
  >
    Toggle
  </button>
  <div class="uk-card uk-card-body mt-2" id="toggle-usage">What's up?</div>
</div>
```

## Multiple items

You can also toggle multiple items at the same time. Just add the `target: SELECTOR` option to the `data-uk-toggle` attribute and use a selector that applies to all items.

```html
<button type="button" data-uk-toggle="target: .my-class"></button>
<p class="my-class"></p>
<p class="my-class"></p>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: .toggle"
>
  Toggle
</button>
<div class="toggle uk-card uk-card-body mt-2">Hello!</div>
<div class="toggle uk-card uk-card-body mt-2" hidden>Bazinga!</div>
```

Note: In this example we added the `hidden` attribute to one of the items, so that only the other item will be shown. The toggle will switch visible states between both elements.

## Custom class

If you don't want to toggle the `hidden` attribute, you can also toggle a custom class. Just add the `cls: CLASS` option to the `data-uk-toggle` attribute. In this example we used the `.uk-card-primary` class to switch between different card styles.

```html
<button
  type="button"
  data-uk-toggle="target: #my-id; cls: uk-card-primary"
></button>
<p id="my-id" class="uk-card"></p>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #toggle-custom; cls: uk-card-primary"
>
  Toggle
</button>
<div id="toggle-custom" class="uk-card uk-card-body mt-2">Custom class</div>
```

## Animations

The Toggle component allows you to add animations to items when toggling between them. Just add one of the `.uk-anmt-*` classes from the [Animation component](https://franken-ui.dev/docs/2.1/animation) to the animation parameter. The class will be applied to the in as well as the out animation. If you prefer a different animation, just add another class.

```html
<button
  type="button"
  data-uk-toggle="target: #my-id; animation: uk-anmt-fade"
></button>
<p id="my-id"></p>
```

### Example

```html
<button
  href="#toggle-animation"
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #toggle-animation; animation: uk-anmt-fade"
>
  Toggle
</button>
<div id="toggle-animation" class="uk-card uk-card-body mt-2">Animation</div>
```

### Multiple animations

You can also apply multiple animations from the [Animation component](https://franken-ui.dev/docs/2.1/animation). That way you can add different in and out animations.

```html
<button
  type="button"
  data-uk-toggle="target: #my-id; animation: uk-anmt-slide-left, uk-anmt-slide-bottom"
></button>
<p id="my-id"></p>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #toggle-animation-multiple; animation:  uk-anmt-slide-left, uk-anmt-slide-bottom"
>
  Toggle
</button>
<div id="toggle-animation-multiple" class="uk-card uk-card-body mt-2">
  Animation
</div>
```

### Queued animations

When toggling multiple items with an animation, you might want to wait until the first animation has run through before animating the second item. To do so, just add the `queued: true` option to the `data-uk-toggle` attribute.

```html
<button
  type="button"
  data-uk-toggle="target: .my-class; animation: uk-anmt-fade; queued: true"
></button>
<p class="my-class"></p>
<p class="my-class"></p>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: .toggle-animation-queued; animation: uk-anmt-fade; queued: true; duration: 300"
>
  Toggle
</button>
<p class="toggle-animation-queued uk-card uk-card-body mt-2">Animation</p>
<p
  class="toggle-animation-queued uk-card uk-card-body uk-card-primary mt-2"
  hidden
>
  Animation
</p>
```

## Modes

A toggle can be triggered in different ways. Just add the `mode` option to the `data-uk-toggle` attribute and apply one of these values.

| Value          | Description                                                                      |
| -------------- | -------------------------------------------------------------------------------- |
| `hover`        | The toggle will be triggered on hover.                                           |
| `click `       | The toggle will be triggered on click. This is the default value.                |
| `click, hover` | The toggle will be triggered on click and hover.                                 |
| `media`        | The toggling behavior depends on the viewport width. [More information](#media). |

```html
<button type="button" data-uk-toggle="target: #my-id; mode: hover"></button>
<p id="my-id"></p>
```

### Example

```html
<button
  class="uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: #toggle-hover; mode: hover"
>
  Hover
</button>
<div class="uk-card uk-card-body mt-2" id="toggle-hover">What's up?</div>
```

### Media

When using the `media` mode, the `media` option with one of possible values has to be added as well. For example, add a number in pixels, e.g. `640`, or a breakpoint, e.g. `@s`, `@m`, `@l` or `@xl`. Without the `target` option, the toggle applies the toggled state to itself. This means it will switch between the different states that are defined in the `cls` option depending on the viewport width that it is displayed on.

```html
<!-- The primary modifier will only be applied on large screens -->

<div
  class="uk-card"
  data-uk-toggle="cls: uk-card-primary; mode: media; media: @l"
></div>
```

### Example

```html
<div
  class="uk-card uk-card-body max-w-sm"
  data-uk-toggle="cls: uk-card-primary; mode: media; media: @l"
>
  Primary on large screens
</div>
```

Note: The initial toggle state depends on the `cls` option. It is either the first given class in the space separated list or if set to `false`, the `hidden` attribute. If more than one class is given, the other classes are simply being toggled on state change.

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option      | Value          | Default | Description                                                                                                                                                                       |
| ----------- | -------------- | ------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `target`    | String         | `false` | CSS selector of the element(s) to toggle.                                                                                                                                         |
| `mode`      | String         | `click` | Comma-separated list of trigger behaviour modes. (`hover`, `click`, `media`)                                                                                                      |
| `cls`       | String         | `false` | The class that is being toggled. Defaults to the `hidden` attribute.                                                                                                              |
| `media`     | Number, String | `false` | In media mode, the breakpoint that triggers the toggle - a width as integer (e.g. 640) or a breakpoint (e.g. @s, @m, @l, @xl) or any valid media query (e.g. (min-width: 900px)). |
| `animation` | String         | `false` | Space-separated names of [animations](https://franken-ui.dev/docs/2.1/animation). Comma-separated for animation out.                                                                                        |
| `duration`  | Number         | `200`   | Animation duration in milliseconds.                                                                                                                                               |
| `queued`    | Boolean        | `true`  | Toggle the targets successively.                                                                                                                                                  |

`target` is the _Primary_ option and its key may be omitted, if it's the only option in the attribute value.

```html
<span data-uk-toggle=".my-class"></span>
```

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.toggle(element, options);
```

### Events

The following events will be triggered on elements with this component attached:

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

#### Toggle

```js
UIkit.toggle(element).toggle();
```

Toggles the Toggle's target.

## Accessibility

The Toggle component automatically sets the appropriate WAI-ARIA roles, states and properties.

- The _toggle_ element has the `button` role if an `<a>` element is used.
- To implement the [Disclosure (Show/Hide) design pattern](https://www.w3.org/WAI/ARIA/apg/patterns/disclosure/), manually set an `aria-expanded` attribute. It will automatically update when toggling.



# File: tooltip.md
==================================================

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



# File: transition.md
==================================================

## Transition

To toggle a transition on hover or focus, add the `.uk-transition-toggle` class to a parent element. Also add `tabindex="0"` to make the animation focusable through keyboard navigation and on touch devices. Add one of the `.uk-transition-*` classes to any child element to apply the actual effect.

| Class                                                                                                                                           | Description                                                                        |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `.uk-transition-fade`                                                                                                                           | Lets the element fade in                                                           |
| `.uk-transition-scale-up`<br /> `.uk-transition-scale-down`                                                                                     | The element scales up or down.                                                     |
| `.uk-transition-slide-top`<br /> `.uk-transition-slide-bottom`<br /> `.uk-transition-slide-left`<br /> `.uk-transition-slide-right`             | Lets the element slide in from the top                                             |
| `.uk-transition-slide-top-sm`<br /> `.uk-transition-slide-bottom-sm`<br /> `.uk-transition-slide-left-sm`<br /> `.uk-transition-slide-right-sm` | The element slides in from the top, bottom, left or right with a smaller distance. |
| `.uk-transition-slide-top-md`<br /> `.uk-transition-slide-bottom-md`<br /> `.uk-transition-slide-left-md`<br /> `.uk-transition-slide-right-md` | The element slides in from the top, bottom, left or right with a medium distance.  |

```html
<div class="uk-transition-toggle" tabindex="0">
  <div class="uk-transition-fade"></div>
</div>
```

### Example

```html
<div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
  <div class="text-center">
    <div class="uk-transition-toggle uk-inline-clip" tabindex="0">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
      <div
        class="uk-position-cover uk-position-sm uk-transition-fade bg-white/80 p-4"
      >
        <p class="uk-h4">Fade</p>
      </div>
    </div>
    <p class="uk-h3 mt-4">Fade</p>
  </div>
  <div class="text-center">
    <div class="uk-transition-toggle uk-inline-clip" tabindex="0">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
      <div
        class="uk-position-bottom uk-transition-slide-bottom bg-white/80 p-4"
      >
        <p class="uk-h4">Bottom</p>
      </div>
    </div>
    <p class="uk-h3 mt-4">Bottom</p>
  </div>
  <div class="text-center">
    <div class="uk-transition-toggle uk-inline-clip" tabindex="0">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
      <div class="uk-position-center">
        <span class="uk-transition-fade text-white">
          <uk-icon icon="plus"></uk-icon>
        </span>
      </div>
    </div>
    <p class="uk-h3 mt-4">Icon</p>
  </div>
  <div class="text-center">
    <div class="uk-transition-toggle uk-inline-clip" tabindex="0">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
      <img
        class="uk-position-cover uk-transition-scale-up"
        src="/images/light.jpg"
        alt=""
      />
    </div>
    <p class="uk-h3 mt-4">2 Images</p>
  </div>
  <div class="text-center">
    <div class="uk-transition-toggle uk-inline-clip" tabindex="0">
      <img
        class="uk-transition-scale-up uk-transition-opaque"
        src="/images/dark.jpg"
        width="1800"
        height="1200"
        alt=""
      />
    </div>
    <p class="uk-h3 mt-4">Scale Up Image</p>
  </div>
  <div class="text-center">
    <div class="uk-transition-toggle uk-inline-clip" tabindex="0">
      <img src="/images/dark.jpg" width="1800" height="1200" alt="" />
      <div class="uk-position-center">
        <div class="uk-transition-slide-top-sm">
          <h4 class="text-white">Headline</h4>
        </div>
        <div class="uk-transition-slide-bottom-sm">
          <h4 class="text-white">Subheadline</h4>
        </div>
      </div>
    </div>
    <p class="uk-h3 mt-4">Small Top + Bottom</p>
  </div>
</div>
```



# File: typography.md
==================================================

## Headings

Add one of the following classes to modify the size and style of headings. Usually, these classes would be used on heading elements, but they work also with any other element like a `div` element.

| Class    | Description                            |
| -------- | -------------------------------------- |
| `.uk-h1` | Add this class to apply an h1 heading. |
| `.uk-h2` | Add this class to apply an h2 heading. |
| `.uk-h3` | Add this class to apply an h3 heading. |
| `.uk-h4` | Add this class to apply an h4 heading. |

### Example

```html
<h1 class="uk-h1 mt-4">h1</h1>
<h1 class="uk-h2 mt-4">h2</h1>
<h1 class="uk-h3 mt-4">h3</h1>
<h1 class="uk-h4 mt-4">h4</h1>
```

## Hero

Add one of the following classes to apply hero headings. These classes are typically used to add a prominent message with a very large font size.

| Class          | Description                                      |
| -------------- | ------------------------------------------------ |
| `.uk-hero-sm`  | Add this class to apply a small-sized heading.   |
| `.uk-hero-md`  | Add this class to apply a medium-sized heading.  |
| `.uk-hero-lg`  | Add this class to apply a large-sized heading.   |
| `.uk-hero-xl`  | Add this class to apply a xlarge-sized heading.  |
| `.uk-hero-2xl` | Add this class to apply a 2xlarge-sized heading. |
| `.uk-hero-3xl` | Add this class to apply a 3xlarge-sized heading. |

### Example

```html
<h1 class="uk-hero-sm mt-4">Small</h1>
<h1 class="uk-hero-md mt-4">Medium</h1>
<h1 class="uk-hero-lg mt-4">Large</h1>
<h1 class="uk-hero-xl mt-4">XL</h1>
<h1 class="uk-hero-2xl mt-4">2XL</h1>
<h1 class="uk-hero-3xl mt-4">3XL</h1>
```

## Heading Styles

Add one of the following classes to modify the size and style of headings.

| Class                 | Description                                                      |
| --------------------- | ---------------------------------------------------------------- |
| `.uk-heading-divider` | Add this class to apply a divider to a heading.                  |
| `.uk-heading-line`    | Add this class to apply a vertically centered line to a heading. |
| `.uk-heading-bullet`  | Add this class to apply a bullet to a heading.                   |

### Example

```html
<h1 class="uk-hero-sm uk-heading-divider">Divider</h1>
<h1 class="uk-hero-sm uk-heading-line mt-4">
  <span>Line</span>
</h1>
<h1 class="uk-hero-sm uk-heading-line uk-text-right mt-4">
  <span>Line</span>
</h1>
<h1 class="uk-hero-sm uk-heading-line mt-4 text-center">
  <span>Line</span>
</h1>
<h1 class="uk-hero-sm uk-heading-bullet mt-4">Bullet</h1>
```

## Paragraph

### Example

```html
<p class="uk-paragraph">
  The king, seeing how much happier his subjects were, realized the error of his
  ways and repealed the joke tax.
</p>
```

## Blockquote

### Example

```html
<blockquote class="uk-blockquote">
  "After all," he said, "everyone enjoys a good joke, so it's only fair that
  they should pay for the privilege."
</blockquote>
```

## Inline code

### Example

```html
<code class="uk-codespan">franken-ui</code>
```

## Text

Franken UI offers various text utilities to style your text.

| Class               | Description                                                                                                          |
| ------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `.uk-text-lead`     | <span class="uk-text-lead">Add this class to highlight text, for example in article subtitles.</span>                |
| `.uk-text-meta`     | <span class="uk-text-meta">Add this class to a paragraph that contains meta text about an article or similar.</span> |
| `.uk-text-sm`       | <span class="uk-text-sm">Add this class to apply a small font size.</span>                                           |
| `.uk-text-base`     | <span class="uk-text-base">Add this class to apply the default the font size.</span>                                 |
| `.uk-text-truncate` | Prevents text from wrapping into multiple lines, truncating it and displaying an ellipsis instead.                   |
| `.uk-text-break`    | Breaks strings, if their length exceeds the width of their container.                                                |

### Text background

To apply a gradient or background image to text, add the `.uk-text-background` class to a `<span>` element inside the text element. Styles that don't define a `background-image`, will apply the primary color.

```html
<h1><span class="uk-text-background"></span></h1>
```

### Example

```html
<h1 class="uk-hero-lg">
  <span
    class="uk-text-background"
    style="background-image: linear-gradient(90deg, #e4e405 0%, #f01ebb 100%)"
    >Franken UI</span
  >
</h1>
```



# File: utility.md
==================================================

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



# File: video.md
==================================================

## Video

The Video component offers two advanced functions for videos. First, it allows you to pause a video whenever it's hidden with CSS and resume playing once it becomes visible again. In addition, the video can pause when it's outside the viewport and start playing when entering it.

Secondly, it allows you to mute YouTube and Vimeo videos, which is often needed if they are used as the background of a section.

For example, the [Slideshow](https://franken-ui.dev/docs/2.1/slideshow#videos), [Lightbox](https://franken-ui.dev/docs/2.1/lightbox#content-sources) and [Cover](https://franken-ui.dev/docs/2.1/cover#video) components inherit and make use of both functions.

To apply this component, add the `data-uk-video` attribute to a `<video>` element. The video will be paused whenever it's hidden with CSS and resume once it becomes visible again.

```html
<video src="" width="" height="" data-uk-video></video>
```

### Example

```html
<button
  class="uk-margin uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: +"
>
  Toggle HTML5 Video
</button>

<video
  class="mt-4"
  src="https://yootheme.com/site/images/media/yootheme-pro.mp4"
  width="1920"
  height="1080"
  controls
  playsinline
  hidden
  data-uk-video
></video>
```

## Autoplay

There are two autoplay options to play the video. Just add the `autoplay` option to the `data-uk-video` attribute and apply one of these values.

| Values   | Description                                                                                    |
| -------- | ---------------------------------------------------------------------------------------------- |
| `inview` | Play video when it enters the viewport and pause it again when it leaves the viewport.         |
| `hover`  | Play video when the mouse hovers the video and pause it again when the mouse leaves the hover. |

```html
<video src="" width="" height="" data-uk-video="autoplay: inview"></video>
<video src="" width="" height="" data-uk-video="autoplay: hover"></video>
```

### Example

```html
<div class="grid grid-cols-1 gap-4 md:grid-cols-2">
  <div>
    <video
      src="https://yootheme.com/site/images/media/yootheme-pro.mp4"
      width="1800"
      height="1200"
      loop
      muted
      playsinline
      data-uk-video="autoplay: inview"
    ></video>
  </div>
  <div>
    <video
      src="https://yootheme.com/site/images/media/yootheme-pro.mp4"
      width="1800"
      height="1200"
      loop
      muted
      playsinline
      data-uk-video="autoplay: hover"
    ></video>
  </div>
</div>
```

## Automute YouTube or Vimeo

To mute YouTube or Vimeo videos by default, add the `data-uk-video="automute: true"` attribute to the `<iframe>` element.

```html
<iframe src="" width="" height="" data-uk-video="automute: true"></iframe>
```

### Example

```html
<button
  class="uk-margin-bottom uk-btn uk-btn-default"
  type="button"
  data-uk-toggle="target: +"
>
  Toggle YouTube Video
</button>

<iframe
  class="mt-4"
  src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1"
  width="1920"
  height="1080"
  allowfullscreen
  data-uk-responsive
  data-uk-video="automute: true"
></iframe>
```

## Component options

Any of these options can be applied to the component attribute. Separate multiple options with a semicolon. [Learn more](https://franken-ui.dev/docs/2.1/javascript#component-configuration)

| Option     | Value           | Default | Description                                                                                                                                                                       |
| ---------- | --------------- | ------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `autoplay` | Boolean, String | `true`  | The video automatically plays/pauses as it's visible/hidden on the page. Additionally, the video can play when its in the viewport or hovered with the mouse (`inview`, `hover`). |
| `automute` | Boolean         | `false` | Automatically mute YouTube or Vimeo videos.                                                                                                                                       |

`autoplay` is the _Primary_ option, and its key may be omitted if it's the only option in the attribute value.

## JavaScript

Learn more about [JavaScript components](https://franken-ui.dev/docs/2.1/javascript#programmatic-use).

### Initialization

```js
UIkit.video(element, options);
```

