---
name: BasecoatUI
description: BasecoatUI instructions and reference.
applyTo: '**'
---

# Introduction

Basecoat is a set of components built with Tailwind CSS. It is designed to be used with any traditional web stack

## [Why Basecoat?](#why)

**Basecoat brings the magic of [shadcn/ui](https://ui.shadcn.com/) to any traditional web stack: no React required.**

Tailwind won. But building UIs with utility classes alone kinda sucks. Most Tailwind libraries like Flowbite, Preline, or even Tailwind UI ask you to copy walls of unreadable classes into your HTML. It works, but it's messy and hard to maintain.

shadcn/ui avoids that by wrapping everything in React components. It also gives you a killer design system, theme support, a CLI, and a growing ecosystem.

But maybe you're not using React. Maybe your app is built with plain HTML. Or Flask. Or Rails. Or Laravel. Or Django. Or whatever.

**That's where Basecoat comes in.** It gives you modern, accessible components with the simplicity of plain HTML and Tailwind. Basecoat is:

- **Lightweight**: no runtime JS, just CSS and a tiny bit of vanilla JavaScript for the more interactive components.
- **Easy to use**: add classes like `btn` or `input` and you're done.
- **Framework-agnostic**: works with any backend or frontend stack.
- **Accessible**: components follow accessibility best practices.
- **Dark mode ready**: respects your Tailwind config.
- **Extendable**: tweak styles with Tailwind or CSS variables.
- **Themable**: fully compatible with shadcn/ui themes.
- **Readable**: no class soup, just clean markup.
- **Free and open source**: MIT licensed.

## [How it works](#how-it-works)

Add a single CSS file to your Tailwind setup. Use components by dropping in simple classes like `btn`, `form`, or `card`.

Some components (like modals or dropdowns) use a tiny bit of vanilla JavaScript. You can skip it if you don't need interactivity.

There's also a CLI to help you scaffold components and get set up fast.

[Check out the installation guide](/installation) to get started.

## [How can I help?](#how-can-i-help)

Basecoat is 100% open source and free.

- [Star it on GitHub](https://github.com/hunvreus/basecoat)
- [Report bugs or request features](https://github.com/hunvreus/basecoat/issues)
- [Submit a pull request](https://github.com/hunvreus/basecoat/pulls)
- [Sponsor the project](https://github.com/sponsors/hunvreus)

#### On This Page

- [Why Basecoat?](#why)
- [How it works](#how-it-works)
- [How can I help?](#how-can-i-help)

---

# Kitchen Sink

A collection of all the components available in Basecoat.

## Accordion

[](/components/accordion)

## Is it accessible?

Yes. It adheres to the WAI-ARIA design pattern.

## Is it styled?

Yes. It comes with default styles that matches the other components' aesthetic.

## Is it animated?

Yes. It's animated by default, but you can disable it if you prefer.

## What are the key considerations when implementing a comprehensive enterprise-level authentication system?

Implementing a robust enterprise authentication system requires careful consideration of multiple factors. This includes secure password hashing and storage, multi-factor authentication (MFA) implementation, session management, OAuth2 and SSO integration, regular security audits, rate limiting to prevent brute force attacks, and maintaining detailed audit logs. Additionally, you'll need to consider scalability, performance impact, and compliance with relevant data protection regulations such as GDPR or HIPAA.

## How does modern distributed system architecture handle eventual consistency and data synchronization across multiple regions?

Modern distributed systems employ various strategies to maintain data consistency across regions. This often involves using techniques like CRDT (Conflict-Free Replicated Data Types), vector clocks, and gossip protocols. Systems might implement event sourcing patterns, utilize message queues for asynchronous updates, and employ sophisticated conflict resolution strategies. Popular solutions like Amazon's DynamoDB and Google's Spanner demonstrate different approaches to solving these challenges, balancing between consistency, availability, and partition tolerance as described in the CAP theorem.

(() => { const accordions = document.querySelectorAll('.accordion'); accordions.forEach(accordion => { accordion.addEventListener('click', (event) => { const summary = event.target.closest('summary'); if (!summary) return; const details = summary.closest('details'); if (!details) return; accordion.querySelectorAll('details').forEach(detailsEl => { if (detailsEl !== details) { detailsEl.removeAttribute('open'); } }); }); }); })();

## Alert

[](/components/alert)

## Success! Your changes have been saved

This is an alert with icon, title and description.

This is an alert with icon, description and no title.

This one has a description only. No title. No icon.

## Let's try one with icon and title.

## This is a very long alert title that demonstrates how the component handles extended text content and potentially wraps across multiple lines

This is a very long alert description that demonstrates how the component handles extended text content and potentially wraps across multiple lines

## This is an extremely long alert title that spans multiple lines to demonstrate how the component handles very lengthy headings while maintaining readability and proper text wrapping behavior

This is an equally long description that contains detailed information about the alert. It shows how the component can accommodate extensive content while preserving proper spacing, alignment, and readability across different screen sizes and viewport widths. This helps ensure the user experience remains consistent regardless of the content length.

## Something went wrong!

Your session has expired. Please log in again.

## Something went wrong!

Please verify your billing information and try again.

- Check your card details
- Ensure sufficient funds
- Verify billing address

## Plot Twist: This Alert is Actually Amber!

This one has custom colors for light and dark mode.

## Alert Dialog

[](/components/alert-dialog)

Open dialog

## Are you absolutely sure?

This action cannot be undone. This will permanently delete your account and remove your data from our servers.

Cancel Continue

## Avatar

[](/components/avatar)

![@hunvreus](https://github.com/hunvreus.png) CN ![@hunvreus](https://github.com/hunvreus.png) ![@hunvreus](https://github.com/hunvreus.png)

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

## Badge

[](/components/badge)

Primary Secondary Outline Destructive Badge Alert 8 99 20+

[Link](#) [Link](#) [Link](#) [Link](#)

## Breadcrumb

[](/components/breadcrumb)

1.  [Home](#)

2.  Documentation

    Themes

    GitHub

3.  [Components](#)

4.  Breadcrumb

## Button

[](/components/button)

Primary Outline Ghost Danger Secondary Link Send Learn more Loading

Primary Outline Ghost Danger Secondary Link Send Learn more Loading

Primary Outline Ghost Danger Secondary Link Send Learn more Loading

## Card

[](/components/card)

## Login to your account

Enter your details below to login to your account

Email

Password [Forgot your password?](#)

Login Login with Google

Don't have an account? [Sign up](#)

## Meeting Notes

Transcript from the meeting with the client.

Client requested dashboard redesign with focus on mobile responsiveness.

1.  New analytics widgets for daily/weekly metrics
2.  Simplified navigation menu
3.  Dark mode support
4.  Timeline: 6 weeks
5.  Follow-up meeting scheduled for next Tuesday

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

## Is this an image?

This is a card with an image.

![Photo by Drew Beamer](https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?w=800&dpr=2&q=80&w=1080&q=75)

1 2 350m² $135,000

Content Only

## Header Only

This is a card with a header and a description.

## Header and Content

This is a card with a header and a content.

Content only.

Footer Only

## Header + Footer

This is a card with a header and a footer.

Footer

Content

Footer

## Header + Content + Footer

This is a card with a header, content and footer.

Content

Footer

## Checkbox

[](/components/checkbox)

Accept terms and conditions

Accept terms and conditions

By clicking this checkbox, you agree to the terms and conditions.

Enable notifications

## Enable notifications

You can enable or disable notifications at any time.

## Combobox

[](/components/combobox)

Next.js

Next.js

SvelteKit

Nuxt.js

Remix

Astro

(GMT-5) New York

Americas

(GMT-5) New York

(GMT-8) Los Angeles

(GMT-6) Chicago

(GMT-5) Toronto

(GMT-8) Vancouver

(GMT-3) São Paulo

Europe

(GMT+0) London

(GMT+1) Paris

(GMT+1) Berlin

(GMT+1) Rome

(GMT+1) Madrid

(GMT+1) Amsterdam

Asia/Pacific

(GMT+9) Tokyo

(GMT+8) Shanghai

(GMT+8) Singapore

(GMT+4) Dubai

(GMT+11) Sydney

(GMT+9) Seoul

---

Create timezone

## Dialog

[](/components/dialog)

Edit Profile

## Edit profile

Make changes to your profile here. Click save when you're done.

Name

Username

Cancel Save changes

Scrollable Content

## Scrollable Content

This is a dialog with scrollable content.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Close

## Dropdown Menu

[](/components/dropdown-menu)

Open

My Account

Profile ⇧⌘P

Billing ⌘B

Settings ⌘S

Keyboard shortcuts ⌘K

---

GitHub

Support

API

---

Logout ⇧⌘P

Checkboxes

Account Options

Profile ⇧⌘P

Billing ⌘B

Settings ⌘S

---

Appearance

Status Bar ⇧⌘P

Activity Bar ⌘B

Panel ⌘S

---

Logout ⇧⌘P

(() => { const dropdownMenu = document.querySelector('#dropdown-menu-checkboxes'); const checkboxes = dropdownMenu.querySelectorAll('div\[role="menuitemcheckbox"\]'); checkboxes.forEach(checkbox => { checkbox.addEventListener('click', () => { const isChecked = checkbox.getAttribute('aria-checked') === 'true'; checkbox.setAttribute('aria-checked', !isChecked); }); }); })();

Radio Group

Panel Position

---

Status Bar ⇧⌘P

Activity Bar ⌘B

Panel ⌘S

(() => { const dropdownMenu = document.querySelector('#dropdown-menu-radio-group'); const radioButtons = dropdownMenu.querySelectorAll('div\[role="menuitemradio"\]'); radioButtons.forEach(radioButton => { radioButton.addEventListener('click', () => { radioButtons.forEach(radioButton => { radioButton.setAttribute('aria-checked', 'false'); }); radioButton.setAttribute('aria-checked', 'true'); }); }); })();

![@hunvreus](https://github.com/hunvreus.png)

hunvreus hunvreus@example.com

![@hunvreus](https://github.com/hunvreus.png)

hunvreus hunvreus@example.com

---

Upgrade to Pro

---

Account

Billing

Notifications

---

Signout

![@hunvreus](https://github.com/hunvreus.png)

![@hunvreus](https://github.com/hunvreus.png)

hunvreus hunvreus@example.com

---

Upgrade to Pro

---

Account

Billing

Notifications

---

Signout

Edit

Share

---

Delete

## Form

Username

This is your public display name.

Email m@example.com m@google.com m@support.com

You can manage email addresses in your email settings.

Bio

You can @mention other users and organizations.

Notify me about...

All new messages Direct messages and mentions Nothing

Use different settings for my mobile devices

You can manage your mobile notifications in the mobile settings page.

Sidebar

Select the items you want to display in the sidebar.

Recents Home Applications Desktop Download Documents

Date of birth

Your date of birth is used to calculate your age.

### Email Notifications

Marketing emails

Receive emails about new products, features, and more.

Marketing emails

Receive emails about new products, features, and more.

Submit

## Input

[](/components/input)

## Label

[](/components/label)

Accept terms and conditions

Username

Disabled

Message

## Pagination

[](/components/pagination)

- [Previous](#)
- [1](#)
- [2](#)
- [3](#)
- [](#)
- [Next](#)

## Popover

[](/components/popover)

Open popover

#### Dimensions

Set the dimensions for the layer.

Width

Max. width

Height

Max. height

## Radio Group

[](/components/radio-group)

Default Comfortable Compact

## Starter Plan

Perfect for small businesses getting started with our platform

## Pro Plan

Advanced features for growing businesses with higher demands

## Select

[](/components/select)

Apple Banana Blueberry Pineapple Disabled

Blueberry

Fruits

Apple

Banana

Blueberry

Grapes

Pineapple

Item 0

Item 0

Item 1

Item 2

Item 3

Item 4

Item 5

Item 6

Item 7

Item 8

Item 9

Item 10

Item 11

Item 12

Item 13

Item 14

Item 15

Item 16

Item 17

Item 18

Item 19

Item 20

Item 21

Item 22

Item 23

Item 24

Item 25

Item 26

Item 27

Item 28

Item 29

Item 30

Item 31

Item 32

Item 33

Item 34

Item 35

Item 36

Item 37

Item 38

Item 39

Item 40

Item 41

Item 42

Item 43

Item 44

Item 45

Item 46

Item 47

Item 48

Item 49

Item 50

Item 51

Item 52

Item 53

Item 54

Item 55

Item 56

Item 57

Item 58

Item 59

Item 60

Item 61

Item 62

Item 63

Item 64

Item 65

Item 66

Item 67

Item 68

Item 69

Item 70

Item 71

Item 72

Item 73

Item 74

Item 75

Item 76

Item 77

Item 78

Item 79

Item 80

Item 81

Item 82

Item 83

Item 84

Item 85

Item 86

Item 87

Item 88

Item 89

Item 90

Item 91

Item 92

Item 93

Item 94

Item 95

Item 96

Item 97

Item 98

Disabled

Disabled

Bar

Bar

Line

Pie

## Skeleton

[](/components/skeleton)

## Slider

[](/components/slider)

(() => { const sliders = document.querySelectorAll('input\[type="range"\].input'); if (!sliders) return; const updateSlider = (el) => { const min = parseFloat(el.min || 0); const max = parseFloat(el.max || 100); const value = parseFloat(el.value); const percent = (max === min) ? 0 : ((value - min) / (max - min)) \* 100; el.style.setProperty('--slider-value', \`${percent}%\`); }; sliders.forEach(slider => { updateSlider(slider); slider.addEventListener('input', (event) => updateSlider(event.target)); }); })();

## Switch

[](/components/switch)

Airplane Mode Bluetooth

## Share across devices

Focus is shared across devices, and turns off when you leave the app.

## Table

[](/components/table)

A list of your recent invoices.

Invoice

Status

Method

Amount

INV001

Paid

Credit Card

$250.00

INV002

Pending

PayPal

$150.00

INV003

Unpaid

Bank Transfer

$350.00

INV004

Paid

Paypal

$450.00

INV005

Paid

Credit Card

$550.00

INV006

Pending

Bank Transfer

$200.00

INV007

Unpaid

Credit Card

$300.00

Total

$2,500.00

## Tabs

[](/components/tabs)

Account Password

## Account

Make changes to your account here. Click save when you're done.

Name

Username

Save changes

## Password

Change your password here. After saving, you'll be logged out.

Current password

New password

Save Password

Home Settings

Home Disabled

Preview Code

## Textarea

[](/components/textarea)

Label

With label and description

Type your message and press enter to send.

Disabled

## Toast

[](/components/toast)

Success Error Info Warning

## Tooltip

[](/components/tooltip)

Top Right Bottom Left

---

# Accordion

A vertically stacked set of interactive headings that each reveal a section of content.

## There is no dedicated Accordion component in Basecoat.

Preview Code

## Is it accessible?

Yes. It adheres to the WAI-ARIA design pattern.

## Is it styled?

Yes. It comes with default styles that matches the other components' aesthetic.

## Is it animated?

Yes. It's animated by default, but you can disable it if you prefer.

(() => { const accordions = document.querySelectorAll(".accordion"); accordions.forEach((accordion) => { accordion.addEventListener("click", (event) => { const summary = event.target.closest("summary"); if (!summary) return; const details = summary.closest("details"); if (!details) return; accordion.querySelectorAll("details").forEach((detailsEl) => { if (detailsEl !== details) { detailsEl.removeAttribute("open"); } }); }); }); })();

    <section class="accordion">
      <details class="group border-b last:border-b-0">
        <summary class="w-full focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] transition-all outline-none rounded-md">
          <h2 class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-sm font-medium hover:underline">
            Is it accessible?
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180"><path d="m6 9 6 6 6-6" /></svg>
          </h2>
        </summary>
        <section class="pb-4">
          <p class="text-sm">Yes. It adheres to the WAI-ARIA design pattern.</p>
        </section>
      </details>
      <details class="group border-b last:border-b-0">
        <summary class="w-full focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] transition-all outline-none rounded-md">
          <h2 class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-sm font-medium hover:underline">
            Is it styled?
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180"><path d="m6 9 6 6 6-6" /></svg>
          </h2>
        </summary>
        <section class="pb-4">
          <p class="text-sm">Yes. It comes with default styles that matches the other components' aesthetic.</p>
        </section>
      </details>
      <details class="group border-b last:border-b-0">
        <summary class="w-full focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] transition-all outline-none rounded-md">
          <h2 class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-sm font-medium hover:underline">
            Is it animated?
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180"><path d="m6 9 6 6 6-6" /></svg>
          </h2>
        </summary>
        <section>
          <p class="text-sm whitespace-pre-wrap">Yes. It's animated by default, but you can disable it if you prefer.</p>
        </section>
      </details>
    </section>
    <script>
      (() => {
        const accordions = document.querySelectorAll(".accordion");
        accordions.forEach((accordion) => {
          accordion.addEventListener("click", (event) => {
            const summary = event.target.closest("summary");
            if (!summary) return;
            const details = summary.closest("details");
            if (!details) return;
            accordion.querySelectorAll("details").forEach((detailsEl) => {
              if (detailsEl !== details) {
                detailsEl.removeAttribute("open");
              }
            });
          });
        });
      })();
    </script>

## [Usage](#usage)

Basecoat already animates `<details>` elements by default. The example add some Tailwind CSS utility classes for style and a bit of vanilla JavaScript to handle the open/close state.

#### On This Page

- [Usage](#usage)

---

# Alert

Displays a callout for user attention.

Preview Code

## Success! Your changes have been saved

This is an alert with icon, title and description.

## This Alert has a title and an icon. No description.

This is an alert with icon, title and description.

## Unable to process your payment.

Please verify your billing information and try again.

- Check your card details
- Ensure sufficient funds
- Verify billing address

  <div class="grid w-full max-w-xl items-start gap-4">
    <div class="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="m9 12 2 2 4-4" />
      </svg>
      <h2>Success! Your changes have been saved</h2>
      <section>This is an alert with icon, title and description.</section>
    </div>
    <div class="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M18 8a2 2 0 0 0 0-4 2 2 0 0 0-4 0 2 2 0 0 0-4 0 2 2 0 0 0-4 0 2 2 0 0 0 0 4" />
        <path d="M10 22 9 8" />
        <path d="m14 22 1-14" />
        <path d="M20 8c.5 0 .9.4.8 1l-2.6 12c-.1.5-.7 1-1.2 1H7c-.6 0-1.1-.4-1.2-1L3.2 9c-.1-.6.3-1 .8-1Z" />
      </svg>
      <h2>This Alert has a title and an icon. No description.</h2>
      <section>This is an alert with icon, title and description.</section>
    </div>
    <div class="alert-destructive">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="m9 12 2 2 4-4" />
      </svg>
      <h2>Unable to process your payment.</h2>
      <section>
        <p>Please verify your billing information and try again.</p>
        <ul class="list-inside list-disc text-sm">
          <li>Check your card details</li>
          <li>Ensure sufficient funds</li>
          <li>Verify billing address</li>
        </ul>
      </section>
    </div>
  </div>

## Usage

Use the `alert` or `alert-destructive`.

    <div class="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="m9 12 2 2 4-4" />
      </svg>
      <h2>Success! Your changes have been saved</h2>
      <section>This is an alert with icon, title and description.</section>
    </div>

The component has the following HTML structure:

`<div class="alert">`

Main container. Use `alert` for default styling or `alert-destructive` for error states.

`<svg>` Optional

The icon.

`<h2>`

The title.

`<section>` Optional

The description.

## [Examples](#examples)

### [Destructive](#example-destructive)

Preview Code

## Something went wrong!

Your session has expired. Please log in again.

    <div class="alert-destructive">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><line x1="12" x2="12" y1="8" y2="12" /><line x1="12" x2="12.01" y1="16" y2="16" /></svg>
      <h2>Something went wrong!</h2>
      <section>Your session has expired. Please log in again.</section>
    </div>

### [No description](#example-no-description)

Preview Code

## This is a very long alert title that demonstrates how the component handles extended text content and potentially wraps across multiple lines

    <div class="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>
      <h2>This is a very long alert title that demonstrates how the component handles extended text content and potentially wraps across multiple lines</h2>
    </div>

### [No icon](#example-no-icon)

Preview Code

## Success! Your changes have been saved

This is an alert with icon, title and description.

    <div class="alert">
      <h2>Success! Your changes have been saved</h2>
      <section>This is an alert with icon, title and description.</section>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Destructive](#example-destructive)
  - [No description](#example-no-description)
  - [No icon](#example-no-icon)

---

# Alert Dialog

A modal dialog that interrupts the user with important content and expects a response.

Preview Code

Open alert dialog

## Are you absolutely sure?

This action cannot be undone. This will permanently delete your account and remove your data from our servers.

Cancel Continue

    <button type="button" onclick="document.getElementById('alert-dialog').showModal()" class="btn-outline">Open alert dialog</button>

    <dialog id="alert-dialog" class="dialog" aria-labelledby="alert-dialog-title" aria-describedby="alert-dialog-description">
      <div>
        <header>
          <h2 id="alert-dialog-title">Are you absolutely sure?</h2>
          <p id="alert-dialog-description">This action cannot be undone. This will permanently delete your account and remove your data from our servers.</p>
        </header>

        <footer>
          <button class="btn-outline" onclick="document.getElementById('alert-dialog').close()">Cancel</button>
          <button class="btn-primary" onclick="document.getElementById('alert-dialog').close()">Continue</button>
        </footer>
      </div>
    </dialog>

## [Usage](#usage)

### [HTML](#usage-html)

The Alert Dialog component is identical to [Dialog](/components/dialog) except for two small differences: we do not display a close button and we do not let the user close the dialog when clicking on the backdrop (no `onclick` attribute on the `<dialog>` or the `<article>` elements).

    <button type="button" onclick="document.getElementById('alert-dialog').showModal()" class="btn-outline">Open alert dialog</button>

    <dialog id="alert-dialog" class="dialog" aria-labelledby="alert-dialog-title" aria-describedby="alert-dialog-description">
      <div>
        <header>
          <h2 id="alert-dialog-title">Are you absolutely sure?</h2>
          <p id="alert-dialog-description">This action cannot be undone. This will permanently delete your account and remove your data from our servers.</p>
        </header>

        <footer>
          <button class="btn-outline" onclick="document.getElementById('alert-dialog').close()">Cancel</button>
          <button class="btn-primary" onclick="document.getElementById('alert-dialog').close()">Continue</button>
        </footer>
      </div>
    </dialog>

The component has the following HTML structure:

`<button type="button">` Optional

The trigger button to open the alert dialog (using [the native `showModal()` method](https://developer.mozilla.org/en-US/docs/Web/API/HTMLDialogElement/showModal)).

`<dialog class="dialog" id="{ DIALOG_ID }">`

Wraps the whole component and acts as the backdrop. It can also have the following attributes:

- `aria-labelledby="{ TITLE_ID }"`: linked to by the `aria-labelledby` attribute of the dialog.
- `aria-describedby="{ DESCRIPTION_ID }"`: linked to by the `aria-describedby` attribute of the `<dialog>`.

`<article>`

Wraps the content of the alert dialog.

`<header>`

Contains the header for the alert dialog:

`<h2>`

The title of the alert dialog, must have an `id` if you use the `aria-labelledby` attribute on the `<dialog>`.

`<p>` Optional

The description of the alert dialog, must have an `id` if you use the `aria-describedby` attribute on the `<dialog>`.

`<section>` Optional

For the content.

`<footer>` Optional

Usually contains actions.

### [Jinja and Nunjucks](#usage-macro)

You can use the `dialog()` Nunjucks or Jinja macro for this component. Make sure to set `close_on_overlay_click` and `close_button` to `False` (or `false` for Nunjucks).

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/dialog.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/dialog.njk)

    {% set footer %}
      <button class="btn-outline" onclick="document.getElementById('demo-alert-dialog').close()">Cancel</button>
      <button class="btn-primary" onclick="document.getElementById('demo-alert-dialog').close()">Continue</button>
    {% endset %}
    {{ dialog(
      id="demo-alert-dialog",
      title="Are you absolutely sure?",
      description="This action cannot be undone. This will permanently delete your account and remove your data from our servers.",
      trigger="Open Alert Dialog",
      trigger_attrs={"class": "btn-outline"},
      footer=footer,
      close_button=False,
      close_on_overlay_click=False
    ) }}

#### On This Page

- [Usage](#usage)
  - [HTML](#usage-html)
  - [Jinja and Nunjucks](#usage-macro)

---

# Avatar

An image element with a fallback for representing the user.

## There is no dedicated Avatar component in Basecoat.

Preview Code

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png)

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

    <div class="flex flex-row flex-wrap items-center gap-12">
      <img class="size-8 shrink-0 object-cover rounded-full" alt="@hunvreus" src="https://github.com/hunvreus.png" />
      <img class="size-8 shrink-0 object-cover rounded-lg" alt="@shadcn" src="https://github.com/shadcn.png" />
      <div class="flex -space-x-2 [&_img]:ring-background [&_img]:ring-2 [&_img]:grayscale [&_img]:size-8 [&_img]:shrink-0 [&_img]:object-cover [&_img]:rounded-full">
        <img alt="@hunvreus" src="https://github.com/hunvreus.png" />
        <img alt="@shadcn" src="https://github.com/shadcn.png" />
        <img alt="@adamwathan" src="https://github.com/adamwathan.png" />
      </div>
    </div>

## [Usage](#usage)

Avatars are just `<img>` elements styled with Tailwind utility classes.

    <img class="size-8 shrink-0 object-cover rounded-full" alt="@hunvreus" src="https://github.com/hunvreus.png" />

#### On This Page

- [Usage](#usage)

---

# Badge

Displays a badge or a component that looks like a badge.

Preview Code

Badge Secondary Destructive Outline

Verified 8 99 20+

    <div class="flex flex-col items-center gap-2">
      <div class="flex w-full flex-wrap gap-2">
        <span class="badge">Badge</span>
        <span class="badge-secondary">Secondary</span>
        <span class="badge-destructive">Destructive</span>
        <span class="badge-outline">Outline</span>
      </div>
      <div class="flex w-full flex-wrap gap-2">
        <span class="badge-secondary bg-blue-500 text-white dark:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" /><path d="m9 12 2 2 4-4" /></svg>
          Verified
        </span>
        <span class="badge rounded-full h-5 min-w-5 px-1 font-mono tabular-nums">8</span>
        <span class="badge-destructive rounded-full h-5 min-w-5 px-1 font-mono tabular-nums">99</span>
        <span class="badge-outline rounded-full h-5 min-w-5 px-1 font-mono tabular-nums">20+</span>
      </div>
    </div>

## [Usage](#usage)

Use one of the badge classes: `badge`, `badge-primary`, `badge-secondary`, `badge-destructive` or `badge-outline`.

    <div class="flex flex-col items-center gap-2">
      <div class="flex w-full flex-wrap gap-2">
        <span class="badge">Badge</span>
        <span class="badge-secondary">Secondary</span>
        <span class="badge-destructive">Destructive</span>
        <span class="badge-outline">Outline</span>
      </div>
      <div class="flex w-full flex-wrap gap-2">
        <span class="badge-secondary bg-blue-500 text-white dark:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" /><path d="m9 12 2 2 4-4" /></svg>
          Verified
        </span>
        <span class="badge rounded-full h-5 min-w-5 px-1 font-mono tabular-nums">8</span>
        <span class="badge-destructive rounded-full h-5 min-w-5 px-1 font-mono tabular-nums">99</span>
        <span class="badge-outline rounded-full h-5 min-w-5 px-1 font-mono tabular-nums">20+</span>
      </div>
    </div>

## [Examples](#examples)

### [Primary](#example-primary)

Preview Code

Primary

    <span class="badge">Primary</span>

### [Secondary](#example-secondary)

Preview Code

Secondary

    <span class="badge-secondary">Secondary</span>

### [Destructive](#example-destructive)

Preview Code

Destructive

    <span class="badge-destructive">Destructive</span>

### [Outline](#example-outline)

Preview Code

Outline

    <span class="badge-outline">Outline</span>

### [With icon](#example-with-icon)

Preview Code

With icon

    <span class="badge-destructive">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><line x1="12" x2="12" y1="8" y2="12" /><line x1="12" x2="12.01" y1="16" y2="16" /></svg>
      With icon
    </span>

### [Link](#example-link)

Preview Code

[Link](#)

    <a href="#" class="badge-outline">
      Link
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="m12 5 7 7-7 7" /></svg>
    </a>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Primary](#example-primary)
  - [Secondary](#example-secondary)
  - [Destructive](#example-destructive)
  - [Outline](#example-outline)
  - [With icon](#example-with-icon)
  - [Link](#example-link)

---

# Breadcrumb

Displays the path to the current resource using a hierarchy of links.

## There is no dedicated Breadcrumb component in Basecoat.

Preview Code

1.  [Home](#)

2.  Documentation Themes GitHub

3.  [Components](#)

4.  Breadcrumb

    <ol class="text-muted-foreground flex flex-wrap items-center gap-1.5 text-sm break-words sm:gap-2.5">
      <li class="inline-flex items-center gap-1.5">
        <a href="#" class="hover:text-foreground transition-colors">Home</a>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
      </li>
      <li class="inline-flex items-center gap-1.5">
        <div id="demo-breadcrumb-menu" class="dropdown-menu">
          <button type="button" id="demo-breadcrumb-menu-trigger" aria-haspopup="menu" aria-controls="demo-breadcrumb-menu-menu" aria-expanded="false" class="flex size-9 items-center justify-center h-4 w-4 hover:text-foreground cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="1" />
              <circle cx="19" cy="12" r="1" />
              <circle cx="5" cy="12" r="1" />
            </svg>
          </button>
          <div id="demo-breadcrumb-menu-popover" data-popover aria-hidden="true">
            <div role="menu" id="demo-breadcrumb-menu-menu" aria-labelledby="demo-breadcrumb-menu-trigger">
              <nav role="menu">
                <button type="button" role="menuitem">Documentation</button>
                <button type="button" role="menuitem">Themes</button>
                <button type="button" role="menuitem">GitHub</button>
              </nav>
            </div>
          </div>
        </div>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
      </li>
      <li class="inline-flex items-center gap-1.5">
        <a href="#" class="hover:text-foreground transition-colors">Components</a>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
      </li>
      <li class="inline-flex items-center gap-1.5">
        <span class="text-foreground font-normal">Breadcrumb</span>
      </li>
    </ol>

## [Usage](#usage)

You can style an ordered list of links combined with chevron icons as show below. The example above demonstrates a more complex use case using the [Dropdown Menu](/components/dropdown-menu) component.

    <ol class="text-muted-foreground flex flex-wrap items-center gap-1.5 text-sm break-words sm:gap-2.5">
      <li class="inline-flex items-center gap-1.5">
        <a href="#" class="hover:text-foreground transition-colors">Home</a>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5"><path d="m9 18 6-6-6-6" /></svg>
      </li>
      <li class="inline-flex items-center gap-1.5">
        <a href="#" class="hover:text-foreground transition-colors">Components</a>
      </li>
    </ol>

#### On This Page

- [Usage](#usage)

---

# Button

Displays a button or a component that looks like a button.

Preview Code

Button

    <button class="btn">Button</button>

## Usage

You can use one of the `btn` classes to style any element as a button:

- **Variants**:
  - `btn` or `btn-primary` for primary buttons,
  - `btn-secondary` for secondary buttons.
  - `btn-destructive` for destructive buttons.
  - `btn-outline` for outline buttons.
  - `btn-ghost` for ghost buttons.
  - `btn-link` for link buttons.
  - `btn-icon` for icon buttons. This can be combined with other variants, for example `btn-icon-destructive`.
- **Sizes**:
  - `btn-sm` for small buttons.
  - `btn-lg` for large buttons.
  - You can combine sizes with any variant, for example `btn-lg-destructive` or `btn-sm-icon-outline`.

  <button class="btn">Button</button>

## [Examples](#examples)

### [Primary](#example-primary)

Preview Code

Primary

    <button class="btn">Primary</button>

### [Secondary](#example-secondary)

Preview Code

Button

    <button class="btn-secondary">Button</button>

### [Destructive](#example-destructive)

Preview Code

Destructive

    <button class="btn-destructive">Destructive</button>

### [Outline](#example-outline)

Preview Code

Outline

    <button class="btn-outline">Outline</button>

### [Ghost](#example-ghost)

Preview Code

Ghost

    <button class="btn-ghost">Ghost</button>

### [Link](#example-link)

Preview Code

Link

    <button class="btn-link">Link</button>

### [Icon](#example-icon)

Preview Code

    <button class="btn-icon-outline">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg>
    </button>

### [With Icon](#example-with-icon)

Preview Code

Send email

    <button class="btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" /><path d="m21.854 2.147-10.94 10.939" /></svg>
      Send email
    </button>

### [Loading](#example-loading)

Preview Code

Loading

    <button class="btn-outline" disabled>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animate-spin"><path d="M12 2v4" /><path d="m16.2 7.8 2.9-2.9" /><path d="M18 12h4" /><path d="m16.2 16.2 2.9 2.9" /><path d="M12 18v4" /><path d="m4.9 19.1 2.9-2.9" /><path d="M2 12h4" /><path d="m4.9 4.9 2.9 2.9" /></svg>
      Loading
    </button>

### [Large](#example-large)

Preview Code

Buy

    <button class="btn-lg">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="21" r="1" /><circle cx="19" cy="21" r="1" /><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" /></svg>
      Buy
    </button>

### [Small](#example-small)

Preview Code

    <button class="btn-sm-icon-destructive">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18" /><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" /><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" /></svg>
    </button>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Primary](#example-primary)
  - [Secondary](#example-secondary)
  - [Destructive](#example-destructive)
  - [Outline](#example-outline)
  - [Ghost](#example-ghost)
  - [Link](#example-link)
  - [Icon](#example-icon)
  - [With Icon](#example-with-icon)
  - [Loading](#example-loading)
  - [Large](#example-large)
  - [Small](#example-small)

---

# Button Group

A container that groups related buttons together with consistent styling.

Preview Code

Archive Report

Snooze

Mark as Read

Archive

---

Snooze

Add to Calendar

Add to List

---

Trash

    <div class="flex w-fit items-stretch gap-2">
      <button type="button" class="btn-icon-outline" aria-label="Go Back">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m12 19-7-7 7-7" />
          <path d="M19 12H5" />
        </svg>
      </button>

      <div role="group" class="button-group">
        <button type="button" class="btn-outline">Archive</button>
        <button type="button" class="btn-outline">Report</button>
      </div>

      <div role="group" class="button-group">
        <button type="button" class="btn-outline">Snooze</button>

        <div id="dropdown-menu-557406" class="dropdown-menu">
          <button type="button" id="dropdown-menu-557406-trigger" aria-haspopup="menu" aria-controls="dropdown-menu-557406-menu" aria-expanded="false" class="btn-icon-outline">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="1" />
              <circle cx="19" cy="12" r="1" />
              <circle cx="5" cy="12" r="1" />
            </svg>
          </button>
          <div id="dropdown-menu-557406-popover" data-popover aria-hidden="true" data-align="end">
            <div role="menu" id="dropdown-menu-557406-menu" aria-labelledby="dropdown-menu-557406-trigger">
              <div role="menuitem">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h8" />
                  <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                  <path d="m16 19 2 2 4-4" />
                </svg>
                Mark as Read
              </div>
              <div role="menuitem">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect width="20" height="5" x="2" y="3" rx="1" />
                  <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8" />
                  <path d="M10 12h4" />
                </svg>
                Archive
              </div>
              <hr role="separator" />
              <div role="menuitem">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg>
                Snooze
              </div>
              <div role="menuitem">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M8 2v4" />
                  <path d="M16 2v4" />
                  <rect width="18" height="18" x="3" y="4" rx="2" />
                  <path d="M3 10h18" />
                </svg>
                Add to Calendar
              </div>
              <div role="menuitem">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M10 18h4" />
                  <path d="M11 6H3" />
                  <path d="M15 6h6" />
                  <path d="M18 9V3" />
                  <path d="M7 12h8" />
                </svg>
                Add to List
              </div>
              <hr role="separator" />
              <div role="menuitem" class="text-destructive hover:bg-destructive/10 dark:hover:bg-destructive/20 focus:bg-destructive/10 dark:focus:bg-destructive/20 focus:text-destructive [&_svg]:!text-destructive">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M3 6h18" />
                  <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                  <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                  <line x1="10" x2="10" y1="11" y2="17" />
                  <line x1="14" x2="14" y1="11" y2="17" />
                </svg>
                Trash
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

## [Usage](#usage)

Simply wrap buttons you want to group together in a `<div role="group" class="button-group">` element. You can also use the `data-orientation="vertical"` attribute to stack buttons vertically. You can also group buttons with [dropdown menus](#example-dropdown-menu) or [popovers](#example-popover) (provided the trigger is a button). Finally, you can use a [separator](#example-separator) to visually divide buttons within a group (for secondary buttons for example).

    <div role="group" class="button-group">
      <button type="button" class="btn-outline">Archive</button>
      <button type="button" class="btn-outline">Report</button>
    </div>

## [Examples](#examples)

### [Orientation](#example-orientation)

Use `data-orientation="vertical"` to stack buttons vertically.

Preview Code

    <div role="group" class="button-group" data-orientation="vertical">
      <button type="button" class="btn-icon-outline" aria-label="Zoom in">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14" />
          <path d="M12 5v14" />
        </svg>
      </button>
      <button type="button" class="btn-icon-outline" aria-label="Zoom out">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /></svg>
      </button>
    </div>

### [Size](#example-size)

Preview Code

Small Button Group

Default Button Group

Small Button Group

    <div class="flex flex-col items-start gap-8">
      <div role="group" class="button-group">
        <button type="button" class="btn-sm-outline">Small</button>
        <button type="button" class="btn-sm-outline">Button</button>
        <button type="button" class="btn-sm-outline">Group</button>
        <button type="button" class="btn-sm-icon-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14" />
            <path d="M12 5v14" />
          </svg>
        </button>
      </div>
      <div role="group" class="button-group">
        <button type="button" class="btn-outline">Default</button>
        <button type="button" class="btn-outline">Button</button>
        <button type="button" class="btn-outline">Group</button>
        <button type="button" class="btn-icon-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14" />
            <path d="M12 5v14" />
          </svg>
        </button>
      </div>
      <div role="group" class="button-group">
        <button type="button" class="btn-lg-outline">Small</button>
        <button type="button" class="btn-lg-outline">Button</button>
        <button type="button" class="btn-lg-outline">Group</button>
        <button type="button" class="btn-lg-icon-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14" />
            <path d="M12 5v14" />
          </svg>
        </button>
      </div>
    </div>

### [Nested](#example-nested)

Preview Code

1 2 3 4 5

    <div role="group" aria-label="Pagination controls" class="flex w-fit items-stretch gap-2">
      <div role="group" class="button-group">
        <button type="button" class="btn-sm-outline">1</button>
        <button type="button" class="btn-sm-outline">2</button>
        <button type="button" class="btn-sm-outline">3</button>
        <button type="button" class="btn-sm-outline">4</button>
        <button type="button" class="btn-sm-outline">5</button>
      </div>
      <div role="group" class="button-group">
        <button type="button" class="btn-sm-icon-outline" aria-label="Previous page">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6" /></svg>
        </button>
        <button type="button" class="btn-sm-icon-outline" aria-label="Next page">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg>
        </button>
      </div>
    </div>

### [Separator](#example-separator)

Use `<hr role="separator">` to visually divide buttons within a group.

Preview Code

Copy

---

Paste

    <div role="group" class="button-group">
      <button type="button" class="btn-secondary">Copy</button>
      <hr role="separator" />
      <button type="button" class="btn-secondary">Paste</button>
    </div>

### [Input](#example-input)

Preview Code

    <div class="button-group">
      <input type="text" class="input" placeholder="Search..." />
      <button type="button" class="btn-icon-outline">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8" />
          <path d="m21 21-4.3-4.3" />
        </svg>
      </button>
    </div>

### [Dropdown Menu](#example-dropdown-menu)

Preview Code

Follow

Mute Conversation

Mark as Read

Report Conversation

Block User

Share Conversation

Copy Conversation

---

Delete Conversation

    <div role="group" class="button-group">
      <button type="button" class="btn-outline">Follow</button>

      <div id="dropdown-menu-421571" class="dropdown-menu">
        <button type="button" id="dropdown-menu-421571-trigger" aria-haspopup="menu" aria-controls="dropdown-menu-421571-menu" aria-expanded="false" class="btn-icon-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
        </button>
        <div id="dropdown-menu-421571-popover" data-popover aria-hidden="true" data-align="end">
          <div role="menu" id="dropdown-menu-421571-menu" aria-labelledby="dropdown-menu-421571-trigger">
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 9a5 5 0 0 1 .95 2.293" />
                <path d="M19.364 5.636a9 9 0 0 1 1.889 9.96" />
                <path d="m2 2 20 20" />
                <path d="m7 7-.587.587A1.4 1.4 0 0 1 5.416 8H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h2.416a1.4 1.4 0 0 1 .997.413l3.383 3.384A.705.705 0 0 0 11 19.298V11" />
                <path d="M9.828 4.172A.686.686 0 0 1 11 4.657v.686" />
              </svg>
              Mute Conversation
            </div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5" /></svg>
              Mark as Read
            </div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
                <path d="M12 9v4" />
                <path d="M12 17h.01" />
              </svg>
              Report Conversation
            </div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 21a8 8 0 0 1 11.873-7" />
                <circle cx="10" cy="8" r="5" />
                <path d="m17 17 5 5" />
                <path d="m22 17-5 5" />
              </svg>
              Block User
            </div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                <polyline points="16 6 12 2 8 6" />
                <line x1="12" x2="12" y1="2" y2="15" />
              </svg>
              Share Conversation
            </div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
              </svg>
              Copy Conversation
            </div>
            <hr role="separator" />
            <div role="menuitem" class="text-destructive hover:bg-destructive/10 dark:hover:bg-destructive/20 focus:bg-destructive/10 dark:focus:bg-destructive/20 focus:text-destructive [&_svg]:!text-destructive">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 6h18" />
                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                <line x1="10" x2="10" y1="11" y2="17" />
                <line x1="14" x2="14" y1="11" y2="17" />
              </svg>
              Delete Conversation
            </div>
          </div>
        </div>
      </div>
    </div>

### [Select](#example-select)

Preview Code

$ US Dollar

$ US Dollar

€ Euro

£ British Pound

    <div class="flex w-fit items-stretch gap-2">
      <div class="button-group">
        <div id="select-758151" class="select">
          <button type="button" class="btn-outline justify-between font-normal [&amp;_[data-name]]:hidden" id="select-758151-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-758151-listbox">
            <span class="truncate"></span>

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down text-muted-foreground opacity-50 shrink-0"><path d="m6 9 6 6 6-6" /></svg>
          </button>
          <div id="select-758151-popover" data-popover aria-hidden="true">
            <div role="listbox" id="select-758151-listbox" aria-orientation="vertical" aria-labelledby="select-758151-trigger">
              <div role="option" data-value="$">
                $
                <span class="text-muted-foreground" data-name>US Dollar</span>
              </div>
              <div role="option" data-value="€">
                €
                <span class="text-muted-foreground" data-name>Euro</span>
              </div>
              <div role="option" data-value="£">
                £
                <span class="text-muted-foreground" data-name>British Pound</span>
              </div>
            </div>
          </div>
          <input type="hidden" name="select-758151-value" value="" />
        </div>

        <input type="text" class="input" placeholder="10.00" />
      </div>

      <button type="button" class="btn-icon-outline">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14" />
          <path d="m12 5 7 7-7 7" />
        </svg>
      </button>
    </div>

### [Popover](#example-popover)

Preview Code

Copilot

Agent Tasks

Start a new task with Copilot

Describe your task in natural language. Copilot will work in the background and open a pull request for your review.

    <div role="group" class="button-group">
      <button type="button" class="btn-outline">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 8V4H8" />
          <rect width="16" height="12" x="4" y="8" rx="2" />
          <path d="M2 14h2" />
          <path d="M20 14h2" />
          <path d="M15 13v2" />
          <path d="M9 13v2" />
        </svg>
        Copilot
      </button>

      <div id="popover-902212" class="popover">
        <button id="popover-902212-trigger" type="button" aria-expanded="false" aria-controls="popover-902212-popover" class="btn-icon-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
        </button>
        <div id="popover-902212-popover" data-popover aria-hidden="true" class="w-72 p-0" data-align="end">
          <header class="px-4 py-3 text-sm font-medium border-b">Agent Tasks</header>
          <section class="p-4 text-sm space-y-2">
            <textarea class="textarea w-full mb-4" placeholder="Describe your taks in natural language"></textarea>
            <p class="font-medium">Start a new task with Copilot</p>
            <p class="text-muted-foreground">Describe your task in natural language. Copilot will work in the background and open a pull request for your review.</p>
          </section>
        </div>
      </div>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Orientation](#example-orientation)
  - [Nested](#example-nested)
  - [Separator](#example-separator)
  - [Input](#example-input)
  - [Dropdown Menu](#example-dropdown-menu)
  - [Select](#example-select)
  - [Popover](#example-popover)

---

# Card

Displays a card with header, content, and footer.

Preview Code

## Login to your account

Enter your details below to login to your account

Email

Password [Forgot your password?](#)

Login Login with Google

Don't have an account? [Sign up](#)

    <div class="card w-full">
      <header>
        <h2>Login to your account</h2>
        <p>Enter your details below to login to your account</p>
      </header>
      <section>
        <form class="form grid gap-6">
          <div class="grid gap-2">
            <label for="demo-card-form-email">Email</label>
            <input type="email" id="demo-card-form-email">
          </div>
          <div class="grid gap-2">
            <div class="flex items-center gap-2">
              <label for="demo-card-form-password">Password</label>
              <a href="#" class="ml-auto inline-block text-sm underline-offset-4 hover:underline">Forgot your password?</a>
            </div>
            <input type="password" id="demo-card-form-password">
          </div>
        </form>
      </section>
      <footer class="flex flex-col items-center gap-2">
        <button type="button" class="btn w-full">Login</button>
        <button type="button" class="btn-outline w-full">Login with Google</button>
        <p class="mt-4 text-center text-sm">Don't have an account? <a href="#" class="underline-offset-4 hover:underline">Sign up</a></p>
      </footer>
    </div>

## Usage

    <div class="card">
      <header>
        <h2>Card Title</h2>
        <p>Card Description</p>
      </header>
      <section>
        <p>Card Content</p>
      </section>
      <footer>
        <p>Card Footer</p>
      </footer>
    </div>

The component has the following HTML structure:

`<div class="card">`

The card container.

`<header>`

The header of the card.

`<h2>`

The title of the card.

`<p>` Optional

The description of the card.

`<section>`

The content of the card.

`<footer>` Optional

The footer of the card.

## [Examples](#examples)

### [With content and footer](#example-with-content-and-footer)

Preview Code

## Meeting Notes

Transcript from the meeting with the client.

Client requested dashboard redesign with focus on mobile responsiveness.

1.  New analytics widgets for daily/weekly metrics
2.  Simplified navigation menu
3.  Dark mode support
4.  Timeline: 6 weeks
5.  Follow-up meeting scheduled for next Tuesday

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

    <div class="card">
      <header>
        <h2>Meeting Notes</h2>
        <p>Transcript from the meeting with the client.</p>
      </header>
      <section class="text-sm">
        <p>Client requested dashboard redesign with focus on mobile responsiveness.</p>
        <ol class="mt-4 flex list-decimal flex-col gap-2 pl-6">
          <li>New analytics widgets for daily/weekly metrics</li>
          <li>Simplified navigation menu</li>
          <li>Dark mode support</li>
          <li>Timeline: 6 weeks</li>
          <li>Follow-up meeting scheduled for next Tuesday</li>
        </ol>
      </section>
      <footer class="flex items-center">
        <div class="flex -space-x-2 [&_img]:ring-card [&_img]:ring-2 [&_img]:grayscale [&_img]:size-8 [&_img]:shrink-0 [&_img]:object-cover [&_img]:rounded-full">
          <img alt="@hunvreus" src="https://github.com/hunvreus.png">
          <img alt="@shadcn" src="https://github.com/shadcn.png">
          <img alt="@adamwathan" src="https://github.com/adamwathan.png">
        </div>
      </footer>
    </div>

### [With image](#example-with-image)

Preview Code

## Is this an image?

This is a card with an image.

![Photo by Drew Beamer](https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?w=800&dpr=2&q=80&w=1080&q=75)

1 2 350m² $135,000

    <div class="card">
      <header>
        <h2>Is this an image?</h2>
        <p>This is a card with an image.</p>
      </header>
      <section class="px-0">
        <img
          alt="Photo by Drew Beamer"
          loading="lazy"
          width="500"
          height="500"
          class="aspect-video object-cover" style="color:transparent"
          srcset="
            https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?w=800&dpr=2&q=80&w=640&q=75 1x,
            https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?w=800&dpr=2&q=80&w=1080&q=75 2x
          "
          src="https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?w=800&dpr=2&q=80&w=1080&q=75"
        />
      </section>
      <footer class="flex items-center gap-2">
        <span class="badge-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 4v16" /><path d="M2 8h18a2 2 0 0 1 2 2v10" /><path d="M2 17h20" /><path d="M6 8v9" /></svg>
          1
        </span>
        <span class="badge-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 4 8 6" /><path d="M17 19v2" /><path d="M2 12h20" /><path d="M7 19v2" /><path d="M9 5 7.621 3.621A2.121 2.121 0 0 0 4 5v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5" /></svg>
          2
        </span>
        <span class="badge-outline">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 8 6-3-6-3v10" /><path d="m8 11.99-5.5 3.14a1 1 0 0 0 0 1.74l8.5 4.86a2 2 0 0 0 2 0l8.5-4.86a1 1 0 0 0 0-1.74L16 12" /><path d="m6.49 12.85 11.02 6.3" /><path d="M17.51 12.85 6.5 19.15" /></svg>
          350m²
        </span>
        <span class="ml-auto font-medium tabular-nums">
          $135,000
        </span>
      </footer>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [With content and footer](#example-with-content-and-footer)
  - [With image](#example-with-image)

---

# Checkbox

A control that allows the user to toggle between checked and not checked.

Preview Code

Accept terms and conditions

    <label class="label gap-3">
      <input type="checkbox" class="input">
      Accept terms and conditions
    </label>

## Usage

Add the `input` class to your `<input type="radio">` elements or have a parent with the `form` class ([read more about form](/components/form)). You can also set the `aria-invalid` attribute to `true` to make the input invalid.

    <input type="checkbox" class="input">

## [Examples](#examples)

### [Disabled](#example-disabled)

Preview Code

Accept terms and conditions

    <label class="label gap-3">
      <input type="checkbox" class="input" disabled>
      Accept terms and conditions
    </label>

### [With text](#example-with-text)

Preview Code

Accept terms and conditions

By clicking this checkbox, you agree to the terms and conditions.

    <div class="flex items-start gap-3">
      <input type="checkbox" id="checkbox-with-text" class="input">
      <div class="grid gap-2">
        <label for="checkbox-with-text" class="label">Accept terms and conditions</label>
        <p class="text-muted-foreground text-sm">By clicking this checkbox, you agree to the terms and conditions.</p>
      </div>
    </div>

### [Form](#example-form)

Preview Code

Use different settings for my mobile devices

You can manage your mobile notifications in the mobile settings page.

    <form class="form flex flex-row items-start gap-3 rounded-md border p-4 shadow-xs">
      <input type="checkbox" id="checkbox-form-1">
      <div class="flex flex-col gap-1">
        <label for="checkbox-form-1" class="leading-snug">Use different settings for my mobile devices</label>
        <p class="text-muted-foreground text-sm leading-snug">You can manage your mobile notifications in the mobile settings page.</p>
      </div>
    </form>

Preview Code

Sidebar

Select the items you want to display in the sidebar.

Recents Home Applications Desktop Download Documents

    <form class="form flex flex-col gap-4">
      <header>
        <label for="demo-form-checkboxes" class="text-base leading-normal">Sidebar</label>
        <p class="text-muted-foreground text-sm">Select the items you want to display in the sidebar.</p>
      </header>
      <fieldset id="demo-form-checkboxes" class="flex flex-col gap-2">
        <label class="font-normal leading-tight">
          <input type="checkbox" name="demo-form-checkboxes" value="1" checked>
          Recents
        </label>
        <label class="font-normal leading-tight">
          <input type="checkbox" name="demo-form-checkboxes" value="2" checked>
          Home
        </label>
        <label class="font-normal leading-tight">
          <input type="checkbox" name="demo-form-checkboxes" value="3">
          Applications
        </label>
        <label class="font-normal leading-tight">
          <input type="checkbox" name="demo-form-checkboxes" value="4">
          Desktop
        </label>
        <label class="font-normal leading-tight">
          <input type="checkbox" name="demo-form-checkboxes" value="5">
          Download
        </label>
        <label class="font-normal leading-tight">
          <input type="checkbox" name="demo-form-checkboxes" value="6">
          Documents
        </label>
      </fieldset>
    </form>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Disabled](#example-disabled)
  - [With text](#example-with-text)
  - [Form](#example-form)

---

# Command

Fast, composable command menu for quick navigation and actions.

Preview Code

Suggestions

Calendar

Search Emoji

Calculator

---

Settings

Profile ⌘P

Billing ⌘B

Settings ⌘S

    <div id="demo-command-standalone" class="command rounded-lg border shadow-md" aria-label="Command menu">
      <header>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
          <circle cx="11" cy="11" r="8" />
          <path d="m21 21-4.3-4.3" />
        </svg>
        <input type="text" id="demo-command-standalone-input" placeholder="Type a command or search..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="true" aria-controls="demo-command-standalone-menu" />
      </header>
      <div role="menu" id="demo-command-standalone-menu" aria-orientation="vertical" data-empty="No results found." class="scrollbar">
        <div role="group" aria-labelledby="suggestions">
          <span role="heading" id="suggestions">Suggestions</span>
          <div role="menuitem" onclick="console.log('Open calendar')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M8 2v4" />
              <path d="M16 2v4" />
              <rect width="18" height="18" x="3" y="4" rx="2" />
              <path d="M3 10h18" />
            </svg>
            <span>Calendar</span>
          </div>
          <div role="menuitem" onclick="console.log('Search emoji')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <path d="M8 14s1.5 2 4 2 4-2 4-2" />
              <line x1="9" x2="9.01" y1="9" y2="9" />
              <line x1="15" x2="15.01" y1="9" y2="9" />
            </svg>
            <span>Search Emoji</span>
          </div>
          <div role="menuitem" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="16" height="20" x="4" y="2" rx="2" />
              <line x1="8" x2="16" y1="6" y2="6" />
              <line x1="16" x2="16" y1="14" y2="18" />
              <path d="M16 10h.01" />
              <path d="M12 10h.01" />
              <path d="M8 10h.01" />
              <path d="M12 14h.01" />
              <path d="M8 14h.01" />
              <path d="M12 18h.01" />
              <path d="M8 18h.01" />
            </svg>
            <span>Calculator</span>
          </div>
        </div>
        <hr role="separator" />
        <div role="group" aria-labelledby="settings">
          <span role="heading" id="settings">Settings</span>
          <div role="menuitem" onclick="console.log('Open profile')" data-filter="Profile">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
            <span>Profile</span>
            <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘P</kbd>
          </div>
          <div role="menuitem" onclick="console.log('Open billing')" data-filter="Billing">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="20" height="14" x="2" y="5" rx="2" />
              <line x1="2" x2="22" y1="10" y2="10" />
            </svg>
            <span>Billing</span>
            <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘B</kbd>
          </div>
          <div role="menuitem" onclick="console.log('Open settings')" data-filter="Settings">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
              <circle cx="12" cy="12" r="3" />
            </svg>
            <span>Settings</span>
            <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘S</kbd>
          </div>
        </div>
      </div>
    </div>

## [Usage](#usage)

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript files](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/command.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli) [command.js](https://github.com/hunvreus/basecoat/blob/main/src/js/command.js)

#### [Step 2: Add your command HTML](#usage-html-js-2)

You can use the command menu standalone:

    <div id="demo-command-standalone" class="command rounded-lg border shadow-md" aria-label="Command menu">
      <header>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
          <circle cx="11" cy="11" r="8" />
          <path d="m21 21-4.3-4.3" />
        </svg>
        <input type="text" id="demo-command-standalone-input" placeholder="Type a command or search..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="true" aria-controls="demo-command-standalone-menu" />
      </header>
      <div role="menu" id="demo-command-standalone-menu" aria-orientation="vertical" data-empty="No results found." class="scrollbar">
        <div role="group" aria-labelledby="suggestions">
          <span role="heading" id="suggestions">Suggestions</span>
          <div role="menuitem" onclick="console.log('Open calendar')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M8 2v4" />
              <path d="M16 2v4" />
              <rect width="18" height="18" x="3" y="4" rx="2" />
              <path d="M3 10h18" />
            </svg>
            <span>Calendar</span>
          </div>
          <div role="menuitem" onclick="console.log('Search emoji')">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <path d="M8 14s1.5 2 4 2 4-2 4-2" />
              <line x1="9" x2="9.01" y1="9" y2="9" />
              <line x1="15" x2="15.01" y1="9" y2="9" />
            </svg>
            <span>Search Emoji</span>
          </div>
          <div role="menuitem" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="16" height="20" x="4" y="2" rx="2" />
              <line x1="8" x2="16" y1="6" y2="6" />
              <line x1="16" x2="16" y1="14" y2="18" />
              <path d="M16 10h.01" />
              <path d="M12 10h.01" />
              <path d="M8 10h.01" />
              <path d="M12 14h.01" />
              <path d="M8 14h.01" />
              <path d="M12 18h.01" />
              <path d="M8 18h.01" />
            </svg>
            <span>Calculator</span>
          </div>
        </div>
        <hr role="separator" />
        <div role="group" aria-labelledby="settings">
          <span role="heading" id="settings">Settings</span>
          <div role="menuitem" onclick="console.log('Open profile')" data-filter="Profile">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
            <span>Profile</span>
            <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘P</kbd>
          </div>
          <div role="menuitem" onclick="console.log('Open billing')" data-filter="Billing">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect width="20" height="14" x="2" y="5" rx="2" />
              <line x1="2" x2="22" y1="10" y2="10" />
            </svg>
            <span>Billing</span>
            <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘B</kbd>
          </div>
          <div role="menuitem" onclick="console.log('Open settings')" data-filter="Settings">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
              <circle cx="12" cy="12" r="3" />
            </svg>
            <span>Settings</span>
            <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘S</kbd>
          </div>
        </div>
      </div>
    </div>

Wrap the command menu in a `<dialog class="command-dialog">` to display in a dialog:

    <dialog class="command-dialog" aria-label="Command menu">
      <div class="command">
        <!-- Regular command content: header, menu, etc. -->
      </div>
    </dialog>

#### [HTML structure](#usage-html-js-3)

`<dialog class="command-dialog">` Optional

For dialog variant, wraps a `<div class="command">` to display as a modal. Uses native `<dialog>` behavior and requires `aria-label` or `aria-labelledby` for accessibility.

`<div class="command">`

Wraps around the entire command component. Can be used standalone or inside a dialog.

`<header>`

Contains the search input to filter command options.

`<input type="text">`

The search input. Should have:

- `role="combobox"`: indicates the input controls a menu with filtering
- `aria-expanded="true"`: the menu is always expanded
- `aria-controls="{ MENU_ID }"`: points to the menu's id

`<div role="menu">`

The menu containing the command items. Should have `id="{ MENU_ID }"` refered to by the input's `aria-controls` attribute.

`<div role="menuitem">` or `<a role="menuitem">`

Command item that triggers an action when clicked. Use `<a>` for navigation links, or `<div>` for actions. In a command-dialog, clicking a menuitem automatically closes the dialog unless the `data-keep-command-open` attribute is present. Optional attributes:

- `href`: If present on an `<a>`, the item navigates to that URL
- `data-filter`: custom text used for filtering (if different from displayed content, e.g., `data-filter="calendar event"`)
- `data-keywords`: additional keywords for enhanced filtering (e.g., `data-keywords="calendar event date"`)
- `data-force`: forces the item to always display, regardless of filter (e.g., `data-force`)
- `aria-disabled="true"`: marks item as disabled (excluded from keyboard navigation and filtering)

`<hr role="separator">` Optional

Separator between groups/items. Hidden when filtering is active.

`<div role="group">` Optional

Group of items, can have `aria-labelledby` attribute to link to a heading.

`<span role="heading">`

Group heading, must have an `id` attribute if you use the `aria-labelledby` attribute on the group.

#### [JavaScript events](#usage-html-js-4)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on itself.

### [Jinja and Nunjucks](#usage-macro)

You can use the `command()` or `command_dialog()` Nunjucks or Jinja macros for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/command.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/command.njk)

    {% call command() %}
      <div role="menuitem">
        <svg>...</svg>
        <span>Calendar</span>
      </div>
      <div role="menuitem" data-keywords="config preferences">
        <svg>...</svg>
        <span>Settings</span>
      </div>
    {% endcall %}

You can also use the `items` parameter to pass an array of items:

    {% set icon_calendar %}{% lucide "calendar" %}{% endset %}
    {% set icon_settings %}{% lucide "settings" %}{% endset %}
    {% set items = [
      { type: "group", label: "Suggestions", items: [
        { label: "Calendar", icon: icon_calendar, keywords: "date event" },
        { label: "Search Emoji", icon: icon_settings },
        { label: "Calculator", disabled: true }
      ]},
      { type: "separator" },
      { type: "group", label: "Settings", items: [
        { label: "Profile", url: "/profile", icon: icon_settings, keywords: "user account" },
        { label: "Billing", url: "/billing", icon: icon_settings },
        { label: "Settings", url: "/settings", icon: icon_settings }
      ]}
    ] %}

    {% call command(items=items) %}{% endcall %}

## [Examples](#examples)

### [Dialog](#example-dialog)

You can use some simple JavaScript to open the command menu with a keyboard shortcut (in this case ⌘J).

Preview Code

Open command menu ⌘J

Suggestions

Calendar

Search Emoji

Calculator

---

Settings

Profile ⌘P

Billing ⌘B

Settings ⌘S

document.addEventListener("keydown", (e) => { if ((e.metaKey || e.ctrlKey) && e.key === "j") { e.preventDefault(); const dialog = document.getElementById("demo-command-dialog"); if (dialog.open) { dialog.close(); } else { dialog.showModal(); dialog.querySelector("header input")?.focus(); } } });

    <button type="button" class="btn-outline" onclick="document.getElementById('demo-command-dialog').showModal()">
      Open command menu
      <kbd class="kbd">⌘J</kbd>
    </button>

    <dialog id="demo-command-dialog" class="command-dialog" aria-label="Command menu" onclick="if (event.target === this) this.close()">
      <div class="command">
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
          </svg>
          <input type="text" id="demo-command-dialog-input" placeholder="Type a command or search..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="true" aria-controls="demo-command-dialog-menu" />
        </header>
        <div role="menu" id="demo-command-dialog-menu" aria-orientation="vertical" data-empty="No results found." class="scrollbar">
          <div role="group" aria-labelledby="cmd-suggestions">
            <span role="heading" id="cmd-suggestions">Suggestions</span>
            <div role="menuitem" onclick="console.log('Open calendar')">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 2v4" />
                <path d="M16 2v4" />
                <rect width="18" height="18" x="3" y="4" rx="2" />
                <path d="M3 10h18" />
              </svg>
              <span>Calendar</span>
            </div>
            <div role="menuitem" onclick="console.log('Search emoji')">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                <line x1="9" x2="9.01" y1="9" y2="9" />
                <line x1="15" x2="15.01" y1="9" y2="9" />
              </svg>
              <span>Search Emoji</span>
            </div>
            <div role="menuitem" aria-disabled="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="16" height="20" x="4" y="2" rx="2" />
                <line x1="8" x2="16" y1="6" y2="6" />
                <line x1="16" x2="16" y1="14" y2="18" />
                <path d="M16 10h.01" />
                <path d="M12 10h.01" />
                <path d="M8 10h.01" />
                <path d="M12 14h.01" />
                <path d="M8 14h.01" />
                <path d="M12 18h.01" />
                <path d="M8 18h.01" />
              </svg>
              <span>Calculator</span>
            </div>
          </div>
          <hr role="separator" />
          <div role="group" aria-labelledby="cmd-settings">
            <span role="heading" id="cmd-settings">Settings</span>
            <div role="menuitem" onclick="console.log('Open profile')" data-filter="Profile">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
              </svg>
              <span>Profile</span>
              <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘P</kbd>
            </div>
            <div role="menuitem" onclick="console.log('Open billing')" data-filter="Billing">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="20" height="14" x="2" y="5" rx="2" />
                <line x1="2" x2="22" y1="10" y2="10" />
              </svg>
              <span>Billing</span>
              <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘B</kbd>
            </div>
            <div role="menuitem" onclick="console.log('Open settings')" data-filter="Settings">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                <circle cx="12" cy="12" r="3" />
              </svg>
              <span>Settings</span>
              <kbd class="ml-auto text-muted-foreground bg-transparent tracking-widest">⌘S</kbd>
            </div>
          </div>
        </div>
        <button type="button" aria-label="Close dialog" onclick="this.closest('dialog').close()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
        </button>
      </div>
    </dialog>

    <script>
      document.addEventListener("keydown", (e) => {
        if ((e.metaKey || e.ctrlKey) && e.key === "j") {
          e.preventDefault();
          const dialog = document.getElementById("demo-command-dialog");
          if (dialog.open) {
            dialog.close();
          } else {
            dialog.showModal();
            dialog.querySelector("header input")?.focus();
          }
        }
      });
    </script>

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1: Include the JavaScript files](#usage-html-js-1)
    - [Step 2: Add your command HTML](#usage-html-js-2)
    - [HTML structure](#usage-html-js-3)
    - [JavaScript events](#usage-html-js-4)
  - [Jinja and Nunjucks](#usage-macro)
- [Examples](#examples)
  - [Dialog](#example-dialog)

---

# Combobox

Autocomplete input and command palette with a list of suggestions.

Preview Code

Next.js

Next.js

SvelteKit

Nuxt.js

Remix

Astro

    <div id="select-303718" class="select">
      <button type="button" class="btn-outline justify-between font-normal w-[200px]" id="select-303718-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-303718-listbox">
        <span class="truncate"></span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
          <path d="m7 15 5 5 5-5" />
          <path d="m7 9 5-5 5 5" />
        </svg>
      </button>
      <div id="select-303718-popover" data-popover aria-hidden="true">
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
          </svg>
          <input type="text" value="" placeholder="Search framework..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="false" aria-controls="select-303718-listbox" aria-labelledby="select-303718-trigger" />
        </header>

        <div role="listbox" id="select-303718-listbox" aria-orientation="vertical" aria-labelledby="select-303718-trigger" data-empty="No framework found.">
          <div role="option" data-value="Next.js">Next.js</div>

          <div role="option" data-value="SvelteKit">SvelteKit</div>

          <div role="option" data-value="Nuxt.js">Nuxt.js</div>

          <div role="option" data-value="Remix">Remix</div>

          <div role="option" data-value="Astro">Astro</div>
        </div>
      </div>
      <input type="hidden" name="select-303718-value" value="" />
    </div>

## [Usage](#usage)

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript files](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/select.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli) [select.js](https://github.com/hunvreus/basecoat/blob/main/src/js/select.js)

#### [Step 2: Add your combobox HTML](#usage-html-js-2)

Combobox uses the same markup and JavaScript as the [Select component](/components/select#usage-html-js), the only difference being the search box at the top of the listbox:

    <div id="select-303718" class="select">
      <button type="button" class="btn-outline justify-between font-normal w-[200px]" id="select-303718-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-303718-listbox">
        <span class="truncate"></span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
          <path d="m7 15 5 5 5-5" />
          <path d="m7 9 5-5 5 5" />
        </svg>
      </button>
      <div id="select-303718-popover" data-popover aria-hidden="true">
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
          </svg>
          <input type="text" value="" placeholder="Search framework..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="false" aria-controls="select-303718-listbox" aria-labelledby="select-303718-trigger" />
        </header>

        <div role="listbox" id="select-303718-listbox" aria-orientation="vertical" aria-labelledby="select-303718-trigger" data-empty="No framework found.">
          <div role="option" data-value="Next.js">Next.js</div>

          <div role="option" data-value="SvelteKit">SvelteKit</div>

          <div role="option" data-value="Nuxt.js">Nuxt.js</div>

          <div role="option" data-value="Remix">Remix</div>

          <div role="option" data-value="Astro">Astro</div>
        </div>
      </div>
      <input type="hidden" name="select-303718-value" value="" />
    </div>

#### [HTML structure](#usage-html-js-3)

`<div class="select">`

Wraps around the entire component.

`<button type="button" popovertarget="{ POPOVER_ID }">`

The trigger to open the popover, can also have the following attributes:

- `id="{BUTTON_ID}"`: linked to by the `aria-labelledby` attribute of the listbox.
- `aria-haspopup="listbox"`: indicates that the button opens a listbox.
- `aria-controls="{ LISTBOX_ID }"`: points to the listbox's id.
- `aria-expanded="false"`: tracks the popover's state.
- `aria-activedescendant="{ OPTION_ID }"`: points to the active option's id.

`<div popover class="popover" id="{ POPOVER_ID }">`

As with the [Popover](/components/popover) component, you can set up the side and alignment of the popover using the `data-side` and `data-align` attributes.

`<header>`

Contains the search input to filter the options in the listbox.

`<div role="listbox">`

The listbox containing the options. Should have the following attributes:

- `id="{ LISTBOX_ID }"`: refered to by the `aria-controls` attribute of the trigger.
- `aria-labelledby="{ BUTTON_ID }"`: linked to by the button's `id` attribute.

`<div role="option" data-value="{ VALUE }">`

Option that can be selected. Should have a unique id if you use the `aria-activedescendant` attribute on the trigger. Optional attributes:

- `data-filter`: custom text used for filtering (if different from displayed content, e.g., `data-filter="united states"`)
- `data-keywords`: additional keywords for enhanced filtering (e.g., `data-keywords="bread fruit"`)
- `data-force`: forces the option to always display, regardless of filter (e.g., `data-force`)
- `aria-disabled="true"`: marks option as disabled (excluded from selection and keyboard navigation)

`<hr role="separator">` Optional

Separator between groups/options.

`<div role="group">` Optional

Group of options, can have a `aria-labelledby` attribute to link to a heading.

`<span role="heading">`

Group heading, must have an `id` attribute if you use the `aria-labelledby` attribute on the group.

`<input type="hidden" name="{ NAME }" value="{ VALUE }">` Optional

The hidden input that holds the value of the field (if needed).

#### [JavaScript events](#usage-html-js-4)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on itself.

`basecoat:popover`

When the popover opens, the component dispatches a custom (non-bubbling) `basecoat:popover` event on `document`. Other popover components (Combobox, Dropdown Menu, Popover and Select) listen for this to close any open popovers.

`change`

When the selected value changes, the component dispatches a custom (bubbling) `change` event on itself, with the selected value in `event.detail` (e.g. `{detail: {value: "something"}}`).

#### [JavaScript methods](#usage-html-js-4)

`selectByValue`

You can call this method on the component after it is initialized to select an option by value (i.e. the option with the matching `data-value` attribute):

    <script>
      const comboboxComponent = document.querySelector("#my-combobox");
      comboboxComponent.addEventListener("basecoat:initialized", () => {
        comboboxComponent.selectByValue("apple");
      });
    </script>

### [Jinja and Nunjucks](#usage-macro)

You can use the `select()` Nunjucks or Jinja macro for this component. If you use one of the macros, make sure to set `is_combobox` to `True` (or `true` for Nunjucks).

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/select.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/select.njk)

    {% call select(
      listbox_attrs={"data-empty": "No framework found."},
      is_combobox=true
    ) %}
      <div role="option" data-value="nextjs">Next.js</div>
      <div role="option" data-value="sveltekit">SvelteKit</div>
      <div role="option" data-value="nuxtjs">Nuxt.js</div>
      <div role="option" data-value="remix">Remix</div>
      <div role="option" data-value="astro">Astro</div>
    {% endcall %}

## [Examples](#examples)

### [Scrollable](#example-scrollable)

Preview Code

(GMT-5) New York

Americas

(GMT-5) New York

(GMT-8) Los Angeles

(GMT-6) Chicago

(GMT-5) Toronto

(GMT-8) Vancouver

(GMT-3) São Paulo

Europe

(GMT+0) London

(GMT+1) Paris

(GMT+1) Berlin

(GMT+1) Rome

(GMT+1) Madrid

(GMT+1) Amsterdam

Asia/Pacific

(GMT+9) Tokyo

(GMT+8) Shanghai

(GMT+8) Singapore

(GMT+4) Dubai

(GMT+11) Sydney

(GMT+9) Seoul

---

Create timezone

    <div id="select-947209" class="select">
      <button type="button" class="btn-outline justify-between font-normal w-[200px]" id="select-947209-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-947209-listbox">
        <span class="truncate"></span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
          <path d="m7 15 5 5 5-5" />
          <path d="m7 9 5-5 5 5" />
        </svg>
      </button>
      <div id="select-947209-popover" data-popover aria-hidden="true" class="w-72">
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
          </svg>
          <input type="text" value="" placeholder="Search timezone..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="false" aria-controls="select-947209-listbox" aria-labelledby="select-947209-trigger" />
        </header>

        <div role="listbox" id="select-947209-listbox" aria-orientation="vertical" aria-labelledby="select-947209-trigger" data-empty="No timezone found.">
          <div class="max-h-64 overflow-y-auto scrollbar">
            <div role="group" aria-labelledby="demo-combobox-timezones-group-0">
              <div role="heading" id="demo-combobox-timezones-group-0">Americas</div>

              <div role="option" data-value="America/New_York">(GMT-5) New York</div>

              <div role="option" data-value="America/Los_Angeles">(GMT-8) Los Angeles</div>

              <div role="option" data-value="America/Chicago">(GMT-6) Chicago</div>

              <div role="option" data-value="America/Toronto">(GMT-5) Toronto</div>

              <div role="option" data-value="America/Vancouver">(GMT-8) Vancouver</div>

              <div role="option" data-value="America/Sao_Paulo">(GMT-3) São Paulo</div>
            </div>

            <div role="group" aria-labelledby="demo-combobox-timezones-group-1">
              <div role="heading" id="demo-combobox-timezones-group-1">Europe</div>

              <div role="option" data-value="Europe/London">(GMT+0) London</div>

              <div role="option" data-value="Europe/Paris">(GMT+1) Paris</div>

              <div role="option" data-value="Europe/Berlin">(GMT+1) Berlin</div>

              <div role="option" data-value="Europe/Rome">(GMT+1) Rome</div>

              <div role="option" data-value="Europe/Madrid">(GMT+1) Madrid</div>

              <div role="option" data-value="Europe/Amsterdam">(GMT+1) Amsterdam</div>
            </div>

            <div role="group" aria-labelledby="demo-combobox-timezones-group-2">
              <div role="heading" id="demo-combobox-timezones-group-2">Asia/Pacific</div>

              <div role="option" data-value="Asia/Tokyo">(GMT+9) Tokyo</div>

              <div role="option" data-value="Asia/Shanghai">(GMT+8) Shanghai</div>

              <div role="option" data-value="Asia/Singapore">(GMT+8) Singapore</div>

              <div role="option" data-value="Asia/Dubai">(GMT+4) Dubai</div>

              <div role="option" data-value="Australia/Sydney">(GMT+11) Sydney</div>

              <div role="option" data-value="Asia/Seoul">(GMT+9) Seoul</div>
            </div>
          </div>
          <hr role="separator" />
          <div role="option">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <path d="M8 12h8" />
              <path d="M12 8v8" />
            </svg>
            Create timezone
          </div>
        </div>
      </div>
      <input type="hidden" name="select-947209-value" value="" />
    </div>

### [Top side](#example-top)

Preview Code

Next.js

Next.js

SvelteKit

Nuxt.js

Remix

Astro

    <div id="select-724802" class="select">
      <button type="button" class="btn-outline justify-between font-normal w-[200px]" id="select-724802-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-724802-listbox">
        <span class="truncate"></span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
          <path d="m7 15 5 5 5-5" />
          <path d="m7 9 5-5 5 5" />
        </svg>
      </button>
      <div id="select-724802-popover" data-popover aria-hidden="true" data-side="top">
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
          </svg>
          <input type="text" value="" placeholder="Search framework..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="false" aria-controls="select-724802-listbox" aria-labelledby="select-724802-trigger" />
        </header>

        <div role="listbox" id="select-724802-listbox" aria-orientation="vertical" aria-labelledby="select-724802-trigger" data-empty="No framework found.">
          <div role="option" data-value="Next.js">Next.js</div>

          <div role="option" data-value="SvelteKit">SvelteKit</div>

          <div role="option" data-value="Nuxt.js">Nuxt.js</div>

          <div role="option" data-value="Remix">Remix</div>

          <div role="option" data-value="Astro">Astro</div>
        </div>
      </div>
      <input type="hidden" name="select-724802-value" value="" />
    </div>

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1: Include the JavaScript files](#usage-html-js-1)
    - [Step 2: Add your combobox HTML](#usage-html-js-2)
    - [HTML structure](#usage-html-js-3)
    - [JavaScript events](#usage-html-js-4)
    - [JavaScript methods](#usage-html-js-5)
  - [Jinja and Nunjucks](#usage-macro)
- [Examples](#examples)
  - [Scrollable](#example-scrollable)
  - [Top side](#example-top)

---

# Dialog

A window overlaid on either the primary window or another dialog window, rendering the content underneath inert.

Preview Code

Edit Profile

## Edit profile

Make changes to your profile here. Click save when you're done.

Name

Username

Cancel Save changes

    <button type="button" onclick="document.getElementById('demo-dialog-edit-profile').showModal()" class="btn-outline">Edit Profile</button>

    <dialog id="demo-dialog-edit-profile" class="dialog w-full sm:max-w-[425px] max-h-[612px]" aria-labelledby="demo-dialog-edit-profile-title" aria-describedby="demo-dialog-edit-profile-description" onclick="if (event.target === this) this.close()">
      <div>
        <header>
          <h2 id="demo-dialog-edit-profile-title">Edit profile</h2>
          <p id="demo-dialog-edit-profile-description">Make changes to your profile here. Click save when you're done.</p>
        </header>

        <section>
          <form class="form grid gap-4">
            <div class="grid gap-3">
              <label for="demo-dialog-edit-profile-name">Name</label>
              <input type="text" value="Pedro Duarte" id="demo-dialog-edit-profile-name" autofocus />
            </div>
            <div class="grid gap-3">
              <label for="demo-dialog-edit-profile-username">Username</label>
              <input type="text" value="@peduarte" id="demo-dialog-edit-profile-username" />
            </div>
          </form>
        </section>

        <footer>
          <button class="btn-outline" onclick="this.closest('dialog').close()">Cancel</button>
          <button class="btn" onclick="this.closest('dialog').close()">Save changes</button>
        </footer>

        <button type="button" aria-label="Close dialog" onclick="this.closest('dialog').close()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
        </button>
      </div>
    </dialog>

## [Usage](#usage)

### [HTML](#usage-html)

    <button type="button" onclick="document.getElementById('demo-dialog-edit-profile').showModal()" class="btn-outline">Edit Profile</button>

    <dialog id="demo-dialog-edit-profile" class="dialog w-full sm:max-w-[425px] max-h-[612px]" aria-labelledby="demo-dialog-edit-profile-title" aria-describedby="demo-dialog-edit-profile-description" onclick="if (event.target === this) this.close()">
      <div>
        <header>
          <h2 id="demo-dialog-edit-profile-title">Edit profile</h2>
          <p id="demo-dialog-edit-profile-description">Make changes to your profile here. Click save when you're done.</p>
        </header>

        <section>
          <form class="form grid gap-4">
            <div class="grid gap-3">
              <label for="demo-dialog-edit-profile-name">Name</label>
              <input type="text" value="Pedro Duarte" id="demo-dialog-edit-profile-name" autofocus />
            </div>
            <div class="grid gap-3">
              <label for="demo-dialog-edit-profile-username">Username</label>
              <input type="text" value="@peduarte" id="demo-dialog-edit-profile-username" />
            </div>
          </form>
        </section>

        <footer>
          <button class="btn-outline" onclick="this.closest('dialog').close()">Cancel</button>
          <button class="btn" onclick="this.closest('dialog').close()">Save changes</button>
        </footer>

        <button type="button" aria-label="Close dialog" onclick="this.closest('dialog').close()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
        </button>
      </div>
    </dialog>

The component has the following HTML structure:

`<button type="button">` Optional

The trigger button to open the dialog (using [the native `showModal()` method](https://developer.mozilla.org/en-US/docs/Web/API/HTMLDialogElement/showModal)).

`<dialog class="dialog" id="{ DIALOG_ID }">`

Wraps the whole component and acts as the backdrop. It can also have the following attributes:

- `aria-labelledby="{ TITLE_ID }"`: linked to by the `aria-labelledby` attribute of the `<dialog>`.
- `aria-describedby="{ DESCRIPTION_ID }"`: linked to by the `aria-describedby` attribute of the `<dialog>`.
- `onclick`: closes the dialog when the backdrop is clicked.

`<div>`

Wraps the content of the dialog.

`<header>`

Contains the header for the dialog:

`<h2>`

The title of the dialog, must have an `id` if you use the `aria-labelledby` attribute on the `<dialog>`.

`<p>` Optional

The description of the dialog, must have an `id` if you use the `aria-describedby` attribute on the `<dialog>`.

`<section>` Optional

For the content.

`<footer>` Optional

Usually contains actions.

`<button type="button" onclick="this.closest('dialog').close()">` Optional

A button to close the dialog. Alternatively, you can wrap a button in a `<form method="dialog">` element.

### [Jinja and Nunjucks](#usage-macro)

You can use the `dialog()` Nunjucks or Jinja macro for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/dialog.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/dialog.njk)

    {% set code_html %}
    {% set footer %}
      <button class="btn-outline" onclick="this.closest('dialog').close()">Cancel</button>
      <button class="btn" onclick="this.closest('dialog').close()">Save changes</button>
    {% endset %}
    {% call dialog(
      id="demo-dialog-edit-profile",
      title="Edit profile",
      description="Make changes to your profile here. Click save when you're done.",
      trigger="Edit Profile",
      trigger_attrs={"class": "btn-outline"},
      dialog_attrs={"class": "w-full sm:max-w-[425px] max-h-[612px]"},
      footer=footer
    ) %}
    <form class="form grid gap-4">
      <div class="grid gap-3">
        <label for="demo-dialog-edit-profile-name">Name</label>
        <input type="text" value="Pedro Duarte" id="demo-dialog-edit-profile-name" />
      </div>
      <div class="grid gap-3">
        <label for="demo-dialog-edit-profile-username">Username</label>
        <input type="text" value="@peduarte" id="demo-dialog-edit-profile-username" />
      </div>
    </form>
    {% endcall %}

## [Examples](#examples)

### [Scrollable content](#example-scrollable-content)

Preview Code

Scrollable Content

## Scrollable Content

This is a dialog with scrollable content.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Close

    <button type="button" onclick="document.getElementById('dialog-example').showModal()" class="btn-outline">Scrollable Content</button>

    <dialog id="dialog-example" class="dialog w-full sm:max-w-[425px] max-h-[612px]" aria-labelledby="dialog-example-title" aria-describedby="dialog-example-description" onclick="if (event.target === this) this.close()">
      <div>
        <header>
          <h2 id="dialog-example-title">Scrollable Content</h2>
          <p id="dialog-example-description">This is a dialog with scrollable content.</p>
        </header>

        <section class="overflow-y-auto scrollbar">
          <div class="space-y-4 text-sm">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </section>

        <footer>
          <button class="btn-outline" onclick="this.closest('dialog').close()">Close</button>
        </footer>

        <button type="button" aria-label="Close dialog" onclick="this.closest('dialog').close()">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
        </button>
      </div>
    </dialog>

#### On This Page

- [Usage](#usage)
  - [HTML](#usage-html)
  - [Jinja and Nunjucks](#usage-macro)
- [Examples](#examples)
  - [Scrollable content](#example-scrollable-content)

---

# Dropdown Menu

Displays a menu to the user — such as a set of actions or functions — triggered by a button.

Preview Code

Open

My Account

Profile ⇧⌘P

Billing ⌘B

Settings ⌘S

Keyboard shortcuts ⌘K

---

GitHub

Support

API

---

Logout ⇧⌘P

    <div id="demo-dropdown-menu" class="dropdown-menu">
      <button type="button" id="demo-dropdown-menu-trigger" aria-haspopup="menu" aria-controls="demo-dropdown-menu-menu" aria-expanded="false" class="btn-outline">Open</button>
      <div id="demo-dropdown-menu-popover" data-popover aria-hidden="true" class="min-w-56">
        <div role="menu" id="demo-dropdown-menu-menu" aria-labelledby="demo-dropdown-menu-trigger">
          <div role="group" aria-labelledby="account-options">
            <div role="heading" id="account-options">My Account</div>
            <div role="menuitem">
              Profile
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
            </div>
            <div role="menuitem">
              Billing
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘B</span>
            </div>
            <div role="menuitem">
              Settings
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘S</span>
            </div>
            <div role="menuitem">
              Keyboard shortcuts
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘K</span>
            </div>
          </div>
          <hr role="separator" />
          <div role="menuitem">GitHub</div>
          <div role="menuitem">Support</div>
          <div role="menuitem" aria-disabled="true">API</div>
          <hr role="separator" />
          <div role="menuitem">
            Logout
            <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
          </div>
        </div>
      </div>
    </div>

## Usage

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript files](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/dropdown-menu.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli) [dropdown-menu.js](https://github.com/hunvreus/basecoat/blob/main/src/js/dropdown-menu.js)

#### [Step 2: Add your dropdown menu HTML](#usage-html-js-2)

    <div id="demo-dropdown-menu" class="dropdown-menu">
      <button type="button" id="demo-dropdown-menu-trigger" aria-haspopup="menu" aria-controls="demo-dropdown-menu-menu" aria-expanded="false" class="btn-outline">Open</button>
      <div id="demo-dropdown-menu-popover" data-popover aria-hidden="true" class="min-w-56">
        <div role="menu" id="demo-dropdown-menu-menu" aria-labelledby="demo-dropdown-menu-trigger">
          <div role="group" aria-labelledby="account-options">
            <div role="heading" id="account-options">My Account</div>
            <div role="menuitem">
              Profile
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
            </div>
            <div role="menuitem">
              Billing
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘B</span>
            </div>
            <div role="menuitem">
              Settings
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘S</span>
            </div>
            <div role="menuitem">
              Keyboard shortcuts
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘K</span>
            </div>
          </div>
          <hr role="separator" />
          <div role="menuitem">GitHub</div>
          <div role="menuitem">Support</div>
          <div role="menuitem" aria-disabled="true">API</div>
          <hr role="separator" />
          <div role="menuitem">
            Logout
            <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
          </div>
        </div>
      </div>
    </div>

#### [HTML structure](#usage-html-js-3)

`<div class="dropdown-menu">`

Wraps around the entire component.

`<button type="button" popovertarget="{ POPOVER_ID }">`

The trigger to open the popover, can also have the following attributes:

- `id="{BUTTON_ID}"`: linked to by the `aria-labelledby` attribute of the listbox.
- `aria-haspopup="menu"`: indicates that the button opens a menu.
- `aria-controls="{ MENU_ID }"`: points to the menu's id.
- `aria-expanded="false"`: tracks the popover's state.

`<div popover class="popover" id="{ POPOVER_ID }">`

As with the [Popover](/components/popover) component, you can set up the side and alignment of the popover using the `data-side` and `data-align` attributes.

`<div role="menu">`

The menu containing the options. Should have the following attributes:

- `id="{ MENU_ID }"`: refered to by the `aria-controls` attribute of the trigger.
- `aria-labelledby="{ BUTTON_ID }"`: linked to by the button's `id` attribute.

`<button role="menuitem">`

Menu item.

`<button role="menuitemcheckbox">`

Menu item with a checkbox.

`<button role="menuitemradio">`

Menu item with a radio button.

`<hr role="separator">` Optional

Separator between groups/options.

`<div role="group">` Optional

Group of options, can have a `aria-labelledby` attribute to link to a heading.

`<span role="heading">`

Group heading, must have an `id` attribute if you use the `aria-labelledby` attribute on the group.

#### [JavaScript events](#usage-html-js-4)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on itself.

`basecoat:popover`

When the popover opens, the component dispatches a custom (non-bubbling) `basecoat:popover` event on `document`. Other popover components (Combobox, Dropdown Menu, Popover and Select) listen for this to close any open popovers.

### [Jinja and Nunjucks](#usage-macro)

You can use the `dropdown_menu()` Nunjucks or Jinja macro for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/dropdown-menu.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/dropdown-menu.njk)

    {% call dropdown_menu(
      id="dropdown-menu",
      trigger="Open",
      trigger_attrs={"class": "btn-outline"},
      popover_attrs={"class": "min-w-56"}
    ) %}
    <div role="group" aria-labelledby="account-options">
      <div role="heading" id="account-options">My Account</div>
      <div role="menuitem">
        Profile
        <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
      </div>
      <div role="menuitem">
        Billing
        <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘B</span>
      </div>
      <div role="menuitem">
        Settings
        <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘S</span>
      </div>
      <div role="menuitem">
        Keyboard shortcuts
        <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘K</span>
      </div>
    </div>
    <hr role="separator">
    <div role="menuitem">
      GitHub
    </div>
    <div role="menuitem">
      Support
    </div>
    <div role="menuitem" disabled>
      API
    </div>
    <hr role="separator">
    <div role="menuitem">
      Logout
      <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
    </div>
    {% endcall %}

## [Examples](#examples)

### [Checkboxes](#example-checkboxes)

Preview Code

Open

Account Options

Profile ⇧⌘P

Billing ⌘B

Settings ⌘S

---

Appearance

Status Bar ⇧⌘P

Activity Bar ⌘B

Panel ⌘S

---

Logout ⇧⌘P

(() => { const dropdownMenu = document.querySelector("#dropdown-menu-checkboxes"); const checkboxes = dropdownMenu.querySelectorAll('div\[role="menuitemcheckbox"\]'); checkboxes.forEach((checkbox) => { checkbox.addEventListener("click", () => { const isChecked = checkbox.getAttribute("aria-checked") === "true"; checkbox.setAttribute("aria-checked", !isChecked); }); }); })();

    <div id="dropdown-menu-checkboxes" class="dropdown-menu">
      <button type="button" id="dropdown-menu-checkboxes-trigger" aria-haspopup="menu" aria-controls="dropdown-menu-checkboxes-menu" aria-expanded="false" class="btn-outline">Open</button>
      <div id="dropdown-menu-checkboxes-popover" data-popover aria-hidden="true" class="min-w-56">
        <div role="menu" id="dropdown-menu-checkboxes-menu" aria-labelledby="dropdown-menu-checkboxes-trigger">
          <div role="group" aria-labelledby="account-options">
            <div role="heading" id="account-options">Account Options</div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
              </svg>
              Profile
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
            </div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="20" height="14" x="2" y="5" rx="2" />
                <line x1="2" x2="22" y1="10" y2="10" />
              </svg>
              Billing
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘B</span>
            </div>
            <div role="menuitem">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                <circle cx="12" cy="12" r="3" />
              </svg>
              Settings
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘S</span>
            </div>
          </div>
          <hr role="separator" />
          <div role="group" aria-labelledby="appearance-options">
            <div role="heading" id="appearance-options">Appearance</div>
            <div role="menuitemcheckbox" aria-checked="true" class="group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="invisible group-aria-checked:visible" aria-hidden="true" focusable="false"><path d="M20 6 9 17l-5-5" /></svg>
              Status Bar
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
            </div>
            <div role="menuitemcheckbox" aria-checked="false" class="group" aria-disabled="true">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="invisible group-aria-checked:visible" aria-hidden="true" focusable="false"><path d="M20 6 9 17l-5-5" /></svg>
              Activity Bar
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘B</span>
            </div>
            <div role="menuitemcheckbox" aria-checked="false" class="group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="invisible group-aria-checked:visible" aria-hidden="true" focusable="false"><path d="M20 6 9 17l-5-5" /></svg>
              Panel
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘S</span>
            </div>
          </div>
          <hr role="separator" />
          <div role="menuitem">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
              <polyline points="16 17 21 12 16 7" />
              <line x1="21" x2="9" y1="12" y2="12" />
            </svg>
            Logout
            <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
          </div>
        </div>
      </div>
    </div>

    <script>
      (() => {
        const dropdownMenu = document.querySelector("#dropdown-menu-checkboxes");
        const checkboxes = dropdownMenu.querySelectorAll('div[role="menuitemcheckbox"]');
        checkboxes.forEach((checkbox) => {
          checkbox.addEventListener("click", () => {
            const isChecked = checkbox.getAttribute("aria-checked") === "true";
            checkbox.setAttribute("aria-checked", !isChecked);
          });
        });
      })();
    </script>

### [Radio Group](#example-radio-group)

Preview Code

Open

Panel Position

---

Status Bar ⇧⌘P

Activity Bar ⌘B

Panel ⌘S

(() => { const dropdownMenu = document.querySelector("#dropdown-menu-radio-group"); const radioButtons = dropdownMenu.querySelectorAll('div\[role="menuitemradio"\]'); radioButtons.forEach((radioButton) => { radioButton.addEventListener("click", () => { radioButtons.forEach((radioButton) => { radioButton.setAttribute("aria-checked", "false"); }); radioButton.setAttribute("aria-checked", "true"); }); }); })();

    <div id="dropdown-menu-radio-group" class="dropdown-menu">
      <button type="button" id="dropdown-menu-radio-group-trigger" aria-haspopup="menu" aria-controls="dropdown-menu-radio-group-menu" aria-expanded="false" class="btn-outline">Open</button>
      <div id="dropdown-menu-radio-group-popover" data-popover aria-hidden="true" class="min-w-56">
        <div role="menu" id="dropdown-menu-radio-group-menu" aria-labelledby="dropdown-menu-radio-group-trigger">
          <div role="group" aria-labelledby="position-options">
            <span id="position-options" role="heading">Panel Position</span>
            <hr role="separator" />
            <div role="menuitemradio" aria-checked="false" class="group">
              <div class="size-4 flex items-center justify-center">
                <div class="size-2 rounded-full bg-foreground invisible group-aria-checked:visible" aria-hidden="true" , focusable="false"></div>
              </div>
              Status Bar
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⇧⌘P</span>
            </div>
            <div role="menuitemradio" aria-checked="true" class="group">
              <div class="size-4 flex items-center justify-center">
                <div class="size-2 rounded-full bg-foreground invisible group-aria-checked:visible" aria-hidden="true" , focusable="false"></div>
              </div>
              Activity Bar
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘B</span>
            </div>
            <div role="menuitemradio" aria-checked="false" class="group">
              <div class="size-4 flex items-center justify-center">
                <div class="size-2 rounded-full bg-foreground invisible group-aria-checked:visible" aria-hidden="true" , focusable="false"></div>
              </div>
              Panel
              <span class="text-muted-foreground ml-auto text-xs tracking-widest">⌘S</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      (() => {
        const dropdownMenu = document.querySelector("#dropdown-menu-radio-group");
        const radioButtons = dropdownMenu.querySelectorAll('div[role="menuitemradio"]');
        radioButtons.forEach((radioButton) => {
          radioButton.addEventListener("click", () => {
            radioButtons.forEach((radioButton) => {
              radioButton.setAttribute("aria-checked", "false");
            });
            radioButton.setAttribute("aria-checked", "true");
          });
        });
      })();
    </script>

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1: Include the JavaScript files](#usage-html-js-1)
    - [Step 2: Add your dropdown menu HTML](#usage-html-js-2)
    - [HTML structure](#usage-html-js-3)
    - [JavaScript events](#usage-html-js-4)
  - [Jinja and Nunjucks](#usage-macro)
- [Examples](#examples)
  - [Checkboxes](#example-checkboxes)
  - [Radio Group](#example-radio-group)

---

# Empty

Display empty states with icons, titles, descriptions, and actions.

## There is no dedicated Empty component in Basecoat.

Preview Code

### No Projects Yet

You haven't created any projects yet. Get started by creating your first project.

Create Project Import Project

[Learn More](#)

    <div class="flex min-w-0 flex-1 flex-col items-center justify-center gap-6 rounded-lg border-dashed p-6 text-center text-balance md:p-12 text-neutral-800 dark:text-neutral-300">
      <header class="flex max-w-sm flex-col items-center gap-2 text-center">
        <div class="mb-2 [&_svg]:pointer-events-none [&_svg]:shrink-0 bg-muted text-foreground flex size-10 shrink-0 items-center justify-center rounded-lg [&_svg:not([class*='size-'])]:size-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 10.5 8 13l2 2.5" /><path d="m14 10.5 2 2.5-2 2.5" /><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2z" /></svg>
        </div>
        <h3 class="text-lg font-medium tracking-tight">No Projects Yet</h3>
        <p class="text-muted-foreground [&>a:hover]:text-primary text-sm/relaxed [&>a]:underline [&>a]:underline-offset-4">
          You haven't created any projects yet. Get started by creating your first project.
        </p>
      </header>
      <section class="flex w-full max-w-sm min-w-0 flex-col items-center gap-4 text-sm text-balance">
        <div class="flex gap-2">
          <button class="btn">Create Project</button>
          <button class="btn-outline">Import Project</button>
        </div>
      </section>
      <a href="#" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive underline-offset-4 hover:underline h-8 rounded-md gap-1.5 px-3 has-[>svg]:px-2.5 text-muted-foreground">
        Learn More
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10" /><path d="M7 17 17 7" /></svg>
      </a>
    </div>

## [Usage](#usage)

Empty states are pure HTML composition using Tailwind utility classes. Use flex layout utilities to center content, and compose with semantic elements like `<header>`, `<h3>`, `<p>`, and `<button>`.

Browse the examples below and copy the pattern that fits your needs.

## [Examples](#examples)

### [Outline](#example-outline)

Preview Code

### Cloud Storage Empty

Upload files to your cloud storage to access them anywhere.

Upload Files

    <div class="flex min-w-0 flex-1 flex-col items-center justify-center gap-6 rounded-lg border-dashed p-6 text-center text-balance md:p-12 text-neutral-800 dark:text-neutral-300 border">
      <header class="flex max-w-sm flex-col items-center gap-3 text-center">
        <div class="mb-2 bg-muted text-foreground flex size-12 shrink-0 items-center justify-center rounded-lg [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z" /></svg>
        </div>
        <h3 class="text-lg font-semibold tracking-tight">Cloud Storage Empty</h3>
        <p class="text-muted-foreground text-sm/relaxed">
          Upload files to your cloud storage to access them anywhere.
        </p>
      </header>
      <section class="flex w-full max-w-sm min-w-0 flex-col items-center gap-3">
        <button class="btn-sm-outline">Upload Files</button>
      </section>
    </div>

### [Avatar](#example-avatar)

Preview Code

![@shadcn](https://github.com/shadcn.png)

### User Offline

This user is currently offline. You can leave a message to notify them or try again later.

Leave Message

    <div class="flex min-w-0 flex-1 flex-col items-center justify-center gap-6 rounded-lg border-dashed p-6 text-center text-balance md:p-12 text-neutral-800 dark:text-neutral-300">
      <header class="flex max-w-sm flex-col items-center gap-3 text-center">
        <div class="mb-2 flex items-center justify-center">
          <img alt="@shadcn" src="https://github.com/shadcn.png" class="grayscale size-12 shrink-0 object-cover rounded-full">
        </div>
        <h3 class="text-lg font-semibold tracking-tight">User Offline</h3>
        <p class="text-muted-foreground text-sm/relaxed">
          This user is currently offline. You can leave a message to notify them or try again later.
        </p>
      </header>
      <section class="flex w-full max-w-sm min-w-0 flex-col items-center gap-3">
        <button class="btn-sm">Leave Message</button>
      </section>
    </div>

### [Avatar Group](#example-avatar-group)

Preview Code

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

### No Team Members

Invite your team to collaborate on this project.

Invite Members

    <div class="flex min-w-0 flex-1 flex-col items-center justify-center gap-6 rounded-lg border-dashed p-6 text-center text-balance md:p-12 text-neutral-800 dark:text-neutral-300">
      <header class="flex max-w-sm flex-col items-center gap-3 text-center">
        <div class="mb-2 flex items-center justify-center">
          <div class="flex -space-x-2 [&amp;_img]:ring-background [&amp;_img]:ring-2 [&amp;_img]:grayscale [&amp;_img]:size-12 [&amp;_img]:shrink-0 [&amp;_img]:object-cover [&amp;_img]:rounded-full">
            <img alt="@hunvreus" src="https://github.com/hunvreus.png">
            <img alt="@shadcn" src="https://github.com/shadcn.png">
            <img alt="@adamwathan" src="https://github.com/adamwathan.png">
          </div>
        </div>
        <h3 class="text-lg font-semibold tracking-tight">No Team Members</h3>
        <p class="text-muted-foreground text-sm/relaxed">
          Invite your team to collaborate on this project.
        </p>
      </header>
      <section class="flex w-full max-w-sm min-w-0 flex-col items-center gap-3">
        <button class="btn-sm inline-flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="M12 5v14" /></svg>
          Invite Members
        </button>
      </section>
    </div>

### [Input Group](#example-input-group)

Preview Code

### 404 - Not Found

The page you're looking for doesn't exist. Try searching for what you need below.

/

Need help? [Contact support](#)

    <div class="flex min-w-0 flex-1 flex-col items-center justify-center gap-6 rounded-lg p-6 text-center text-balance md:p-12 text-neutral-800 dark:text-neutral-300">
      <header class="flex max-w-sm flex-col items-center gap-3 text-center">
        <h3 class="text-lg font-semibold tracking-tight">404 - Not Found</h3>
        <p class="text-muted-foreground text-sm/relaxed">
          The page you're looking for doesn't exist. Try searching for what you need below.
        </p>
      </header>
      <section class="flex w-full max-w-md min-w-0 flex-col items-center gap-3">
        <div class="relative w-3/4">
          <input type="text" class="input pl-8.5 pr-10" placeholder="Try searching for pages...">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground pointer-events-none shrink-0 size-4"><circle cx="11" cy="11" r="8" /><path d="m21 21-4.3-4.3" /></svg>
          <kbd class="kbd absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">/</kbd>
        </div>
        <p class="text-muted-foreground text-sm/relaxed [&>a]:underline [&>a]:underline-offset-4 [&>a:hover]:text-primary">
          Need help? <a href="#">Contact support</a>
        </p>
      </section>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Outline](#example-outline)
  - [Avatar](#example-avatar)
  - [Avatar Group](#example-avatar-group)
  - [Input Group](#example-input-group)

---

# Field

Combine labels, controls, and help text to compose accessible form fields.

Preview Code

Payment Method

All transactions are secure and encrypted

Name on Card

Card Number

Enter your 16-digit card number

Month MM 01 02 03 04 05 06 07 08 09 10 11 12

Year YYYY 2024 2025 2026 2027 2028 2029

CVV

---

Billing Address

The billing address associated with your payment method

Same as shipping address

Comments

Submit Cancel

    <form class="w-full max-w-md space-y-6">
      <fieldset class="fieldset">
        <legend>Payment Method</legend>
        <p>All transactions are secure and encrypted</p>

        <div role="group" class="field">
          <label for="card-name">Name on Card</label>
          <input id="card-name" type="text" placeholder="Evil Rabbit" required>
        </div>

        <div role="group" class="field">
          <label for="card-number">Card Number</label>
          <input id="card-number" type="text" placeholder="1234 5678 9012 3456" aria-describedby="card-number-desc" required>
          <p id="card-number-desc">Enter your 16-digit card number</p>
        </div>

        <div class="grid grid-cols-3 gap-4">
          <div role="group" class="field">
            <label for="exp-month">Month</label>
            <select id="exp-month" class="select w-full">
              <option value="">MM</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
          <div role="group" class="field">
            <label for="exp-year">Year</label>
            <select id="exp-year" class="select w-full">
              <option value="">YYYY</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              <option value="2029">2029</option>
            </select>
          </div>
          <div role="group" class="field">
            <label for="cvv">CVV</label>
            <input id="cvv" type="text" placeholder="123" required>
          </div>
        </div>
      </fieldset>

      <hr role="separator" class="my-6 border-border">

      <fieldset class="fieldset">
        <legend>Billing Address</legend>
        <p>The billing address associated with your payment method</p>

        <div role="group" class="field">
          <label for="same-as-shipping" class="gap-3">
            <input type="checkbox" id="same-as-shipping" checked>
            Same as shipping address
          </label>
        </div>
      </fieldset>

      <fieldset class="fieldset">
        <div role="group" class="field">
          <label for="comments">Comments</label>
          <textarea id="comments" placeholder="Add any additional comments" rows="3"></textarea>
        </div>
      </fieldset>

      <div class="flex gap-3">
        <button type="submit" class="btn">Submit</button>
        <button type="button" class="btn-outline">Cancel</button>
      </div>
    </form>

## [Usage](#usage)

Field uses semantic HTML with minimal classes. Two main patterns can be used independently or composed together:

- `<div role="group" class="field">` for individual field containers (label, input, helper text, errors)
- `<fieldset class="fieldset">` for grouping multiple related fields together

Elements inside these containers are styled automatically based on their purpose. Use `aria-describedby` to connect helper text and errors to inputs for accessibility.

**Fields** have the following HTML structure:

`<div role="group" class="field">`

Field container. Add `data-orientation="horizontal"` to align controls horizontally. For responsive layouts, use standard Tailwind responsive classes.

`<label>`

Label for the input.

`<input>`, `<select>` or `<textarea>`

Form input.

`<p>` Optional

Helper text. Use `aria-describedby` on the input to reference this element's `id`.

`<p role="alert">` Optional

Error message. Use `aria-describedby` on the input and `aria-invalid="true"` to reference this element's `id`.

`<section>` Optional

Wraps label and description when the label sits beside the input (e.g. `data-orientation="horizontal"`). Not required if you have no description.

**Fieldsets** have the following HTML structure:

`<fieldset class="fieldset">`

Container for grouping related fields.

`<legend>`

Heading for the fieldset.

`<p>` Optional

Description text. When placed directly after `<legend>`, automatically styled as muted text.

`<div role="group" class="field">` Optional

Individual field containers (see structure above). You can include multiple `.field` elements, or place form controls directly in the fieldset.

## [Examples](#examples)

### [Input](#example-input)

Preview Code

Username

Choose a unique username for your account.

Password

Must be at least 8 characters long.

    <div class="grid gap-6">
      <div role="group" class="field">
        <label for="username">Username</label>
        <input id="username" type="text" placeholder="evilrabbit" aria-describedby="username-desc">
        <p id="username-desc">Choose a unique username for your account.</p>
      </div>

      <div role="group" class="field">
        <label for="password">Password</label>
        <p id="password-desc">Must be at least 8 characters long.</p>
        <input id="password" type="password" placeholder="••••••••" aria-describedby="password-desc">
      </div>
    </div>

### [Textarea](#example-textarea)

Preview Code

Feedback

Share your thoughts about our service.

    <div role="group" class="field">
      <label for="bio">Feedback</label>
      <textarea id="bio" rows="4" placeholder="Your feedback helps us improve..." aria-describedby="bio-desc"></textarea>
      <p id="bio-desc">Share your thoughts about our service.</p>
    </div>

### [Select](#example-select)

Preview Code

Department Choose department Engineering Design Marketing Sales Customer Support Human Resources Finance Operations

Select your department or area of work.

    <div role="group" class="field">
      <label for="country">Department</label>
      <select id="country" class="select w-full" aria-describedby="country-desc">
        <option value="">Choose department</option>
        <option value="engineering">Engineering</option>
        <option value="design">Design</option>
        <option value="marketing">Marketing</option>
        <option value="sales">Sales</option>
        <option value="support">Customer Support</option>
        <option value="hr">Human Resources</option>
        <option value="finance">Finance</option>
        <option value="operations">Operations</option>
      </select>
      <p id="country-desc">Select your department or area of work.</p>
    </div>

### [Slider](#example-slider)

Preview Code

Price

Set your budget: $150

(() => { const sliders = document.querySelectorAll('input\[type="range"\]'); if (!sliders) return; const updateSlider = (el) => { const min = parseFloat(el.min || 0); const max = parseFloat(el.max || 100); const value = parseFloat(el.value); const percent = (max === min) ? 0 : ((value - min) / (max - min)) \* 100; el.style.setProperty('--slider-value', \`${percent}%\`); }; sliders.forEach(slider => { updateSlider(slider); slider.addEventListener('input', (event) => updateSlider(event.target)); }); const priceSlider = document.getElementById('price-range'); const priceValue = document.getElementById('price-range-value'); priceSlider.addEventListener('input', (event) => priceValue.innerHTML = event.target.value); })();

    <div role="group" class="field">
      <label for="price-range">Price</label>
      <p id="price-range-desc">Set your budget: $<span id="price-range-value">150</span></p>
      <input id="price-range" type="range" min="0" max="500" value="150">
    </div>
    <script>
      (() => {
        const sliders = document.querySelectorAll('input[type="range"]');
        if (!sliders) return;

        const updateSlider = (el) => {
          const min = parseFloat(el.min || 0);
          const max = parseFloat(el.max || 100);
          const value = parseFloat(el.value);
          const percent = (max === min) ? 0 : ((value - min) / (max - min)) * 100;
          el.style.setProperty('--slider-value', `${percent}%`);
        };

        sliders.forEach(slider => {
          updateSlider(slider);
          slider.addEventListener('input', (event) => updateSlider(event.target));
        });

        const priceSlider = document.getElementById('price-range');
        const priceValue = document.getElementById('price-range-value');

        priceSlider.addEventListener('input', (event) => priceValue.innerHTML = event.target.value);
      })();
    </script>

### [Fieldset](#example-fieldset)

Group related fields with `<fieldset class="fieldset">` and `<legend>`.

Preview Code

Profile

This information will be displayed on your profile

Full name

Your first and last name

Username

Username is already taken

Subscribe to the newsletter

Save changes

    <form class="w-full max-w-md">
      <fieldset class="fieldset">
        <legend>Profile</legend>
        <p>This information will be displayed on your profile</p>

        <div role="group" class="field">
          <label for="full-name">Full name</label>
          <input id="full-name" type="text" placeholder="Evil Rabbit" aria-describedby="name-desc">
          <p id="name-desc">Your first and last name</p>
        </div>

        <div role="group" class="field">
          <label for="display-name">Username</label>
          <input id="display-name" type="text" placeholder="@evilrabbit" aria-invalid="true" aria-describedby="username-error">
          <p id="username-error" role="alert">Username is already taken</p>
        </div>

        <div class="flex items-center gap-3">
          <input type="checkbox" id="newsletter">
          <label for="newsletter" class="font-normal">Subscribe to the newsletter</label>
        </div>
      </fieldset>

      <button type="submit" class="btn mt-4">Save changes</button>
    </form>

### [Checkbox](#example-checkbox)

Preview Code

Show these items on the desktop

Select the items you want to show on the desktop.

Hard disks

External disks

CDs, DVDs and iPods

Connected servers

---

Sync Desktop & Documents folders

Your Desktop & Documents folders are being synced with iCloud Drive. You can access them from other devices.

    <fieldset class="fieldset">
      <legend>Show these items on the desktop</legend>
      <p>Select the items you want to show on the desktop.</p>

      <div class="flex flex-col gap-3">
        <div class="field">
          <label class="gap-3">
            <input type="checkbox">
            Hard disks
          </label>
        </div>
        <div class="field">
          <label class="gap-3">
            <input type="checkbox">
            External disks
          </label>
        </div>
        <div class="field">
          <label class="gap-3">
            <input type="checkbox">
            CDs, DVDs and iPods
          </label>
        </div>
        <div class="field">
          <label class="gap-3">
            <input type="checkbox">
            Connected servers
          </label>
        </div>
      </div>

      <hr role="separator">

      <div class="field" data-orientation="horizontal">

          <input id="sync-desktop-documents" type="checkbox" checked class="input self-start">
          <section>
            <label for="sync-desktop-documents">Sync Desktop & Documents folders</label>
            <p>Your Desktop & Documents folders are being synced with iCloud Drive. You can access them from other devices.</p>
          </section>

      </div>
    </fieldset>

### [Radio Group](#example-radio)

Preview Code

Subscription plan

Yearly and lifetime plans offer significant savings.

Monthly ($9.99/month)

Yearly ($99.99/year)

Lifetime ($299.99)

    <fieldset class="fieldset">
      <legend>Subscription plan</legend>
      <p>Yearly and lifetime plans offer significant savings.</p>

      <div role="radiogroup" class="grid gap-3">
        <div class="field">
          <label class="gap-3">
            <input type="radio" name="subscription-plan" checked>
            Monthly ($9.99/month)
          </label>
        </div>
        <div class="field">
          <label class="gap-3">
            <input type="radio" name="subscription-plan">
            Yearly ($99.99/year)
          </label>
        </div>
        <div class="field">
          <label class="gap-3">
            <input type="radio" name="subscription-plan">
            Lifetime ($299.99)
          </label>
        </div>
      </div>
    </fieldset>

### [Switch](#example-switch)

Set `data-orientation="horizontal"` on `.field` to align labels and controls side-by-side.

Preview Code

Multi-factor authentication

Enable multi-factor authentication. If you do not have a two-factor device, you can use a one-time code sent to your email.

    <div role="group" class="field" data-orientation="horizontal">
      <section>
        <label for="multi-factor-authentication">Multi-factor authentication</label>
        <p>Enable multi-factor authentication. If you do not have a two-factor device, you can use a one-time code sent to your email.</p>
      </section>
      <input id="multi-factor-authentication" type="checkbox" role="switch">
    </div>

### [Choice Card](#example-choice-card)

Preview Code

Compute Environment

Select the compute environment for your cluster.

### Kubernetes

Run GPU workloads on a K8s configured cluster.

### Virtual Machine

Access a VM configured cluster to run GPU workloads.

    <fieldset class="fieldset">
      <legend class="text-sm">Compute Environment</legend>
      <p>Select the compute environment for your cluster.</p>

      <div role="group" class="field">
        <label class="flex gap-3 border rounded-md p-4 has-[:checked]:border-primary has-[:checked]:bg-primary/5 dark:has-[:checked]:bg-primary/10">
          <section>
            <h3>Kubernetes</h3>
            <p>Run GPU workloads on a K8s configured cluster.</p>
          </section>
          <input id="choice-card" type="radio" name="choice-card" class="self-start" checked>
        </label>
      </div>
      <div role="group" class="field">
        <label class="flex gap-3 border rounded-md p-4 has-[:checked]:border-primary has-[:checked]:bg-primary/5 dark:has-[:checked]:bg-primary/10">
          <section>
            <h3>Virtual Machine</h3>
            <p>Access a VM configured cluster to run GPU workloads.</p>
          </section>
          <input id="choice-card" type="radio" name="choice-card" class="self-start">
        </label>
      </div>
    </fieldset>

### [Responsive Layout](#example-responsive)

For responsive layouts, use standard Tailwind responsive classes directly on `.field`. This example stacks vertically on mobile and switches to horizontal at the `md` breakpoint.

Preview Code

Profile

Keep your profile details up to date.

---

Name

Provide your full name for identification.

---

Message

You can write your message here. Keep it short, preferably under 100 characters.

---

Submit Cancel

    <fieldset class="fieldset">
      <legend>Profile</legend>
      <p>Keep your profile details up to date.</p>

      <hr role="separator">

      <div class="flex flex-col gap-7">
        <div role="group" class="field flex-col md:flex-row md:items-center">
          <section class="md:flex-auto">
            <label for="profile-name">Name</label>
            <p id="profile-name-desc">Provide your full name for identification.</p>
          </section>
          <input id="profile-name" type="text" placeholder="Evil Rabbit" aria-describedby="profile-name-desc" class="md:w-auto md:min-w-80">
        </div>

        <hr role="separator">

        <div role="group" class="field flex-col md:flex-row md:items-start">
          <section class="md:flex-auto">
            <label for="profile-bio">Message</label>
            <p id="profile-bio-desc">You can write your message here. Keep it short, preferably under 100 characters.</p>
          </section>
          <textarea id="profile-bio" rows="3" placeholder="Hello, world!" aria-describedby="profile-bio-desc" class="md:w-auto md:min-w-80"></textarea>
        </div>

        <hr role="separator">

        <div role="group" class="field flex-col md:flex-row md:items-center">
          <button type="submit" class="btn md:w-auto">Submit</button>
          <button type="button" class="btn-outline md:w-auto">Cancel</button>
        </div>
      </div>
    </fieldset>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Input](#example-input)
  - [Textarea](#example-textarea)
  - [Select](#example-select)
  - [Fieldset](#example-fieldset)
  - [Checkbox](#example-checkbox)
  - [Radio Group](#example-radio)
  - [Switch](#example-switch)
  - [Responsive Layout](#example-responsive)

---

# Form

Building forms with Basecoat components.

Preview Code

Username

This is your public display name.

Email m@example.com m@google.com m@support.com

You can manage email addresses in your email settings.

Bio

You can @mention other users and organizations.

Date of birth

Your date of birth is used to calculate your age.

Notify me about...

All new messages Direct messages and mentions Nothing

### Email Notifications

Marketing emails

Receive emails about new products, features, and more.

Security emails

Receive emails about your account security.

Submit

    <form class="form grid gap-6">
      <div class="grid gap-2">
        <label for="demo-form-text">Username</label>
        <input type="text" id="demo-form-text" placeholder="hunvreus">
        <p class="text-muted-foreground text-sm">This is your public display name.</p>
      </div>

      <div class="grid gap-2">
        <label for="demo-form-select">Email</label>
        <select id="demo-form-select">
          <option value="bob@example.com">m@example.com</option>
          <option value="alice@example.com">m@google.com</option>
          <option value="john@example.com">m@support.com</option>
        </select>
        <p class="text-muted-foreground text-sm">You can manage email addresses in your email settings.</p>
      </div>

      <div class="grid gap-2">
        <label for="demo-form-textarea">Bio</label>
        <textarea id="demo-form-textarea" placeholder="I like to..." rows="3"></textarea>
        <p class="text-muted-foreground text-sm">You can @mention other users and organizations.</p>
      </div>

      <div class="grid gap-2">
        <label for="demo-form-date">Date of birth</label>
        <input type="date" id="demo-form-date">
        <p class="text-muted-foreground text-sm">Your date of birth is used to calculate your age.</p>
      </div>

      <div class="flex flex-col gap-3">
        <label for="demo-form-radio">Notify me about...</label>
        <fieldset id="demo-form-radio" class="grid gap-3">
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="1" checked>All new messages</label>
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="2">Direct messages and mentions</label>
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="3" >Nothing</label>
        </fieldset>
      </div>

      <section class="grid gap-4">
        <h3 class="text-lg font-medium">Email Notifications</h3>
        <div class="gap-2 flex flex-row items-start justify-between rounded-lg border p-4 shadow-xs">
          <div class="flex flex-col gap-0.5">
            <label for="demo-form-switch" class="leading-normal">Marketing emails</label>
            <p class="text-muted-foreground text-sm">Receive emails about new products, features, and more.</p>
          </div>
          <input type="checkbox" id="demo-form-switch" role="switch">
        </div>
        <div class="gap-2 flex flex-row items-start justify-between rounded-lg border p-4 shadow-xs">
          <div class="flex flex-col gap-0.5 opacity-60">
            <label for="demo-form-switch-disabled" class="leading-normal">Security emails</label>
            <p class="text-muted-foreground text-sm">Receive emails about your account security.</p>
          </div>
          <input type="checkbox" id="demo-form-switch-disabled" role="switch" disabled>
        </div>
      </section>

      <button type="submit" class="btn">Submit</button>
    </form>

## Usage

Adding the `form` class to the parent of any form element (`<label>`, `<input>`, `<textarea>`, `<select>`) will automatically apply the style you would get from adding `label`, `input`, `textarea`, or `select` classes. Read more about [Label](/components/label), [Input](/components/input), [Textarea](/components/textarea), and [Select](/components/select).

    <form class="form grid gap-6">
      <div class="grid gap-2">
        <label for="demo-form-text">Username</label>
        <input type="text" id="demo-form-text" placeholder="hunvreus">
        <p class="text-muted-foreground text-sm">This is your public display name.</p>
      </div>

      <div class="grid gap-2">
        <label for="demo-form-select">Email</label>
        <select id="demo-form-select">
          <option value="bob@example.com">m@example.com</option>
          <option value="alice@example.com">m@google.com</option>
          <option value="john@example.com">m@support.com</option>
        </select>
        <p class="text-muted-foreground text-sm">You can manage email addresses in your email settings.</p>
      </div>

      <div class="grid gap-2">
        <label for="demo-form-textarea">Bio</label>
        <textarea id="demo-form-textarea" placeholder="I like to..." rows="3"></textarea>
        <p class="text-muted-foreground text-sm">You can @mention other users and organizations.</p>
      </div>

      <div class="grid gap-2">
        <label for="demo-form-date">Date of birth</label>
        <input type="date" id="demo-form-date">
        <p class="text-muted-foreground text-sm">Your date of birth is used to calculate your age.</p>
      </div>

      <div class="flex flex-col gap-3">
        <label for="demo-form-radio">Notify me about...</label>
        <fieldset id="demo-form-radio" class="grid gap-3">
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="1" checked>All new messages</label>
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="2">Direct messages and mentions</label>
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="3" >Nothing</label>
        </fieldset>
      </div>

      <section class="grid gap-4">
        <h3 class="text-lg font-medium">Email Notifications</h3>
        <div class="gap-2 flex flex-row items-start justify-between rounded-lg border p-4 shadow-xs">
          <div class="flex flex-col gap-0.5">
            <label for="demo-form-switch" class="leading-normal">Marketing emails</label>
            <p class="text-muted-foreground text-sm">Receive emails about new products, features, and more.</p>
          </div>
          <input type="checkbox" id="demo-form-switch" role="switch">
        </div>
        <div class="gap-2 flex flex-row items-start justify-between rounded-lg border p-4 shadow-xs">
          <div class="flex flex-col gap-0.5 opacity-60">
            <label for="demo-form-switch-disabled" class="leading-normal">Security emails</label>
            <p class="text-muted-foreground text-sm">Receive emails about your account security.</p>
          </div>
          <input type="checkbox" id="demo-form-switch-disabled" role="switch" disabled>
        </div>
      </section>

      <button type="submit" class="btn">Submit</button>
    </form>

#### On This Page

- [Usage](#usage)

---

# Input

Displays a form input field or a component that looks like an input field.

Preview Code

    <input class="input" type="email" placeholder="Email">

## Usage

Simply add the `input` class to your `<input>` element or have a parent with the `form` class ([read more about form](/components/form)). You can also set the `aria-invalid` attribute to `true` to make the input invalid.

    <input class="input" type="email" placeholder="Email">

## [Examples](#examples)

Preview Code

    <input class="input" type="email" placeholder="Email">

### [Invalid](#example-invalid)

Preview Code

    <input class="input" type="email" placeholder="Email" aria-invalid="true">

### [Disabled](#example-disabled)

Preview Code

    <input class="input" type="email" placeholder="Email" disabled>

### [With label](#example-with-label)

Preview Code

Label

    <div class="grid gap-3">
      <label for="input-with-label" class="label">Label</label>
      <input class="input" id="input-with-label" type="email" placeholder="Email">
    </div>

### [With text](#example-with-text)

Preview Code

Label

Fill in your email address.

    <div class="grid gap-3">
      <label for="input-with-text" class="label">Label</label>
      <input class="input" id="input-with-text" type="email" placeholder="Email">
      <p class="text-muted-foreground text-sm">Fill in your email address.</p>
    </div>

### [With button](#example-with-button)

Preview Code

Submit

    <div class="flex items-center space-x-2">
      <input class="input" type="email" placeholder="Email">
      <button type="submit" class="btn">Submit</button>
    </div>

### [Form](#example-form)

Preview Code

Username

This is your public display name.

Submit

    <form class="form space-y-6 w-full">
      <div class="grid gap-3">
        <label for="input-form" class="label">Username</label>
        <input class="input" id="input-form" type="text" placeholder="hunvreus">
        <p class="text-muted-foreground text-sm">This is your public display name.</p>
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Default](#example-default)
  - [Invalid](#example-invalid)
  - [Disabled](#example-disabled)
  - [With label](#example-with-label)
  - [With text](#example-with-text)
  - [With button](#example-with-button)
  - [Form](#example-form)

---

# Input Group

Display additional information or actions to an input or textarea.

## There is no dedicated Input Group component in Basecoat.

Preview Code

12 results

https://

Auto

Auto

Agent

Manual

52% used

---

    <div class="grid gap-6">
      <div class="relative">
        <input type="text" class="input pl-9 pr-20" placeholder="Search...">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8" /><path d="m21 21-4.3-4.3" /></svg>
        </div>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground text-sm">12 results</div>
      </div>

      <div class="relative">
        <input type="text" class="input pl-15 pr-9" placeholder="example.com">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground text-sm">https://</div>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground [&>svg]:size-4" data-tooltip="This is content in a tooltip."><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 16v-4" /><path d="M12 8h.01" /></svg></div>
      </div>

      <div class="relative">
        <textarea class="textarea pr-10 min-h-27 pb-12" placeholder="Ask, Search or Chat..."></textarea>
        <footer role="group" class="absolute bottom-0 px-3 pb-3 pt-1.5 flex items-center w-full gap-2">
          <button type="button" class="btn-icon-outline rounded-full size-6 text-muted-foreground hover:text-accent-foreground">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="M12 5v14" /></svg>
          </button>



    <div
      id="demo-dropdown-menu"
      class="dropdown-menu "

    >
      <button
        type="button"
        id="demo-dropdown-menu-trigger"
        aria-haspopup="menu"
        aria-controls="demo-dropdown-menu-menu"
        aria-expanded="false"

          class="btn-sm-ghost text-muted-foreground hover:text-accent-foreground h-6 p-2"

      >
        Auto
      </button>
      <div
        id="demo-dropdown-menu-popover"
        data-popover
        aria-hidden="true"

          data-side="top"

          class="min-w-32"

      >
        <div
          role="menu"
          id="demo-dropdown-menu-menu"
          aria-labelledby="demo-dropdown-menu-trigger"

        >







            <div
              id="demo-dropdown-menu-items-1"
              role="menuitem"

            >

              Auto
            </div>







            <div
              id="demo-dropdown-menu-items-2"
              role="menuitem"

            >

              Agent
            </div>







            <div
              id="demo-dropdown-menu-items-3"
              role="menuitem"

            >

              Manual
            </div>





        </div>
      </div>
    </div>

          <div class="text-muted-foreground text-sm ml-auto">52% used</div>
          <hr class="w-0 h-4 border-r border-border shrink-0 m-0">
          <button type="button" class="btn-icon rounded-full size-6 bg-muted-foreground hover:bg-foreground" disabled>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 12 7-7 7 7" /><path d="M12 19V5" /></svg>
          </button>
        </footer>
      </div>

      <div class="relative">
        <input type="text" class="input pr-9" placeholder="@shadcn">
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none bg-primary text-primary-foreground flex size-4 items-center justify-center rounded-full [&>svg]:size-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5" /></svg></div>
      </div>
    </div>

## [Usage](#usage)

Input groups are pure HTML composition using Tailwind utility classes. There is no dedicated component: use `relative` positioning on a wrapper, add your content with `absolute` positioning, and adjust input padding to make room.

Browse the examples below and copy the pattern that fits your needs.

## [Examples](#examples)

### [Icon](#example-icon)

Preview Code

    <div class="grid gap-6">
      <div class="relative">
        <input type="text" class="input pl-9" placeholder="Search...">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8" /><path d="m21 21-4.3-4.3" /></svg>
        </div>
      </div>

      <div class="relative">
        <input type="email" class="input pl-9" placeholder="Enter your email">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2" /><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" /></svg>
        </div>
      </div>

      <div class="relative">
        <input type="text" class="input px-9" placeholder="Card number">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2" /><line x1="2" x2="22" y1="10" y2="10" /></svg>
        </div>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5" /></svg>
        </div>
      </div>

      <div class="relative">
        <input type="text" class="input pr-16" placeholder="Card number">
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4 flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" /></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 16v-4" /><path d="M12 8h.01" /></svg>
        </div>
      </div>
    </div>

### [Text](#example-text)

Preview Code

$

USD

https://

.com

@company.com

120 characters left

    <div class="grid gap-6">
      <div class="relative">
        <input type="text" class="input pl-7 pr-12" placeholder="0.00">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground text-sm">$</div>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground text-sm">USD</div>
      </div>

      <div class="relative">
        <input type="text" class="input pl-15 pr-12" placeholder="example.com">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground text-sm">https://</div>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground text-sm">.com</div>
      </div>

      <div class="relative">
        <input type="text" class="input pr-30" placeholder="Enter your username">
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground text-sm">@company.com</div>
      </div>

      <div class="relative">
        <textarea class="textarea pr-10 min-h-25 pb-12" placeholder="Enter your message"></textarea>
        <footer role="group" class="absolute bottom-0 px-3 pb-3 pt-1.5 flex items-center w-full gap-2">
          <div class="text-muted-foreground text-sm">120 characters left</div>
        </footer>
      </div>
    </div>

### [Button](#example-button)

Preview Code

### Your connection is not secure.

You should not enter any sensitive information on this site.

https://

Search

    <div class="grid gap-6">
      <div class="relative">
        <input type="text" readonly class="input pr-9" value="https://x.com/hunvreus">
        <button
          data-copied="false"
          onclick="
            this.dataset.copied = 'true';
            setTimeout(() => this.dataset.copied = 'false', 2000);
          "
          class="group absolute right-1.5 top-1/2 -translate-y-1/2 btn-icon-ghost text-muted-foreground hover:text-accent-foreground size-6"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-data-[copied=true]:hidden"><rect width="14" height="14" x="8" y="8" rx="2" ry="2" /><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" /></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden group-data-[copied=true]:block"><path d="M20 6 9 17l-5-5" /></svg>
        </button>
      </div>


      <div class="relative">
        <input type="text" class="input pl-21 pr-9 rounded-full">
        <button
          aria-pressed="false"
          onclick="this.ariaPressed = this.ariaPressed === 'true' ? 'false' : 'true'"
          class="absolute right-1.5 top-1/2 -translate-y-1/2 btn-icon-ghost text-muted-foreground hover:text-accent-foreground size-6 rounded-full aria-pressed:bg-transparent aria-pressed:hover:bg-accent dark:aria-pressed:hover:bg-accent/50 aria-pressed:text-blue-600 aria-pressed:[&>svg]:fill-blue-600"
        ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" /></svg></button>
        <div class="absolute left-1.5 top-1/2 -translate-y-1/2 flex items-center gap-1 z-10">




    <div
      id="popover-217428"
      class="popover "

    >
      <button
        id="popover-217428-trigger"
        type="button"
        aria-expanded="false"
        aria-controls="popover-217428-popover"

          class="btn-sm-icon-ghost rounded-full size-6"

      >

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 16v-4" /><path d="M12 8h.01" /></svg>

      </button>
      <div
        id="popover-217428-popover"
        data-popover
        aria-hidden="true"

          class="max-w-72"

      >

            <h3 class="font-medium mb-1">Your connection is not secure.</h3>
            <p>You should not enter any sensitive information on this site.</p>

      </div>
    </div>

          <div class="text-muted-foreground text-sm pointer-events-none">https://</div>
        </div>
      </div>

      <div class="relative">
        <input type="text" readonly class="input pr-9" placeholder="Type to search...">
        <button type="button" class="absolute right-1.5 top-1/2 -translate-y-1/2 btn-secondary h-6 p-2 rounded">Search</button>
      </div>
    </div>

### [Tooltip](#example-tooltip)

Preview Code

    <div class="grid gap-6">
      <div class="relative">
        <input type="password" class="input pr-9" placeholder="Enter password">
        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground [&>svg]:size-4" data-tooltip="Password must be at least 8 characters long."><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M12 16v-4" /><path d="M12 8h.01" /></svg></div>
      </div>

      <div class="relative">
        <input type="email" class="input pr-9" placeholder="Your email address">
        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground [&>svg]:size-4" data-tooltip="We'll use this to send your notifications."><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" /><path d="M12 17h.01" /></svg></div>
      </div>

      <div class="relative">
        <input type="email" class="input pl-9" placeholder="Your email address">
        <div class="absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground [&>svg]:size-4" data-tooltip="Click for help with API keys." data-side="left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10" /><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" /><path d="M12 17h.01" /></svg></div>
      </div>
    </div>

### [Textarea](#example-textarea)

Preview Code

script.js

Line 1, Column 1 Run

    <div class="relative">
      <textarea class="textarea pt-15 pb-17 min-h-77" placeholder="console.log('Hello, world!')."></textarea>
      <header class="absolute top-0 flex items-center w-full gap-2 p-3 border-b">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-brand-javascript size-4 text-muted-foreground"><path d="M20 4l-2 14.5l-6 2l-6 -2l-2 -14.5z"></path><path d="M7.5 8h3v8l-2 -1"></path><path d="M16.5 8h-2.5a.5 .5 0 0 0 -.5 .5v3a.5 .5 0 0 0 .5 .5h1.423a.5 .5 0 0 1 .495 .57l-.418 2.93l-2 .5"></path></svg>
        <span class="font-mono text-sm text-muted-foreground mr-auto">script.js</span>
        <button class="btn-sm-icon-ghost text-muted-foreground hover:text-accent-foreground size-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8" /><path d="M3 3v5h5" /><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16" /><path d="M16 16h5v5" /></svg>
        </button>
        <button class="btn-sm-icon-ghost text-muted-foreground hover:text-accent-foreground size-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2" /><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" /></svg>
        </button>
      </header>
      <footer class="absolute bottom-0 flex items-center w-full gap-2 p-3 border-t">
        <span class="text-sm text-muted-foreground mr-auto">Line 1, Column 1</span>
        <button type="button" class="btn-sm">
          Run
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 10 4 15 9 20" /><path d="M20 4v7a4 4 0 0 1-4 4H4" /></svg>
        </button>
      </footer>
    </div>

### [Spinner](#example-spinner)

Preview Code

Saving...

Please wait...

    <div class="grid gap-6">
      <div class="relative">
        <input type="text" class="input pr-9" placeholder="Searching..." disabled>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4 opacity-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        </div>
      </div>

      <div class="relative">
        <input type="text" class="input pl-9" placeholder="Processing..." disabled>
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4 opacity-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        </div>
      </div>

      <div class="relative">
        <input type="text" class="input pr-24" placeholder="Saving changes..." disabled>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 flex items-center gap-2 text-sm text-muted-foreground opacity-50">
          <div>Saving...</div>
          <div class="[&>svg]:size-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
          </div>
        </div>
      </div>

      <div class="relative">
        <input type="text" class="input pl-9 pr-26" placeholder="Refreshing data..." disabled>
        <div class="absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4 opacity-50">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="animate-spin"><path d="M12 2v4" /><path d="m16.2 7.8 2.9-2.9" /><path d="M18 12h4" /><path d="m16.2 16.2 2.9 2.9" /><path d="M12 18v4" /><path d="m4.9 19.1 2.9-2.9" /><path d="M2 12h4" /><path d="m4.9 4.9 2.9 2.9" /></svg>
        </div>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 flex items-center gap-2 text-sm text-muted-foreground opacity-50">
          Please wait...
        </div>
      </div>
    </div>

### [Dropdown](#example-dropdown)

Preview Code

Settings

Copy path

Open location

Search in...

Documentation

Blog Posts

Changelog

    <div class="grid gap-6">
      <div class="relative">
        <input type="text" class="input pr-9" placeholder="Enter file name">




    <div
      id="dropdown-menu-735121"
      class="dropdown-menu absolute right-1.5 top-1/2 -translate-y-1/2 z-10"



    >
      <button
        type="button"
        id="dropdown-menu-735121-trigger"
        aria-haspopup="menu"
        aria-controls="dropdown-menu-735121-menu"
        aria-expanded="false"

          class="btn-sm-icon-ghost text-muted-foreground hover:text-accent-foreground size-6"

      >

          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1" /><circle cx="19" cy="12" r="1" /><circle cx="5" cy="12" r="1" /></svg>

      </button>
      <div
        id="dropdown-menu-735121-popover"
        data-popover
        aria-hidden="true"

          data-align="end"

          class="min-w-32"

      >
        <div
          role="menu"
          id="dropdown-menu-735121-menu"
          aria-labelledby="dropdown-menu-735121-trigger"

        >







            <div
              id="dropdown-menu-735121-items-1"
              role="menuitem"

            >

              Settings
            </div>







            <div
              id="dropdown-menu-735121-items-2"
              role="menuitem"

            >

              Copy path
            </div>







            <div
              id="dropdown-menu-735121-items-3"
              role="menuitem"

            >

              Open location
            </div>





        </div>
      </div>
    </div>

      </div>

      <div class="relative">
        <input type="text" class="input pr-30" placeholder="Enter search query">




    <div
      id="dropdown-menu-511616"
      class="dropdown-menu absolute right-1.5 top-1/2 -translate-y-1/2"



    >
      <button
        type="button"
        id="dropdown-menu-511616-trigger"
        aria-haspopup="menu"
        aria-controls="dropdown-menu-511616-menu"
        aria-expanded="false"

          class="btn-sm-ghost text-muted-foreground hover:text-accent-foreground p-2 h-6"

      >

          Search in...
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3"><path d="m6 9 6 6 6-6" /></svg>

      </button>
      <div
        id="dropdown-menu-511616-popover"
        data-popover
        aria-hidden="true"

          data-align="end"

          class="min-w-32"

      >
        <div
          role="menu"
          id="dropdown-menu-511616-menu"
          aria-labelledby="dropdown-menu-511616-trigger"

        >







            <div
              id="dropdown-menu-511616-items-1"
              role="menuitem"

            >

              Documentation
            </div>







            <div
              id="dropdown-menu-511616-items-2"
              role="menuitem"

            >

              Blog Posts
            </div>







            <div
              id="dropdown-menu-511616-items-3"
              role="menuitem"

            >

              Changelog
            </div>





        </div>
      </div>
    </div>

      </div>
    </div>

### [Group](#example-group)

Preview Code

https://

.com

    <div class="flex w-fit items-stretch">
      <label for="url" class="text-sm flex items-center bg-muted border border-r-0 px-4 rounded-l-md shadow-xs">https://</label>
      <div class="relative">
        <input type="text" class="input pr-9 rounded-none">
        <div class="absolute right-3 top-1/2 -translate-y-1/2 text-muted-foreground [&>svg]:size-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 17H7A5 5 0 0 1 7 7h2" /><path d="M15 7h2a5 5 0 1 1 0 10h-2" /><line x1="8" x2="16" y1="12" y2="12" /></svg></div>
      </div>
      <div class="text-sm flex items-center bg-muted border border-l-0 px-4 rounded-r-md shadow-xs">.com</div>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Icon](#example-icon)
  - [Text](#example-text)
  - [Button](#example-button)
  - [Tooltip](#example-tooltip)
  - [Textarea](#example-textarea)
  - [Spinner](#example-spinner)
  - [Dropdown](#example-dropdown)
  - [Group](#example-group)

---

# Item

A versatile component that you can use to display any content.

## There is no dedicated Item component in Basecoat.

Preview Code

### Basic Item

A simple item with title and description.

Action

[

### Your profile has been verified.

](#)

    <div class="flex flex-col gap-6">
      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Basic Item</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">A simple item with title and description.</p>
        </div>
        <button class="btn-sm-outline">Action</button>
      </article>

      <a href="#" class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border py-3 px-4 gap-2.5">
        <div class="flex shrink-0 items-center justify-center gap-2 [&_svg]:pointer-events-none bg-transparent [&_svg]:size-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" />
            <path d="m9 12 2 2 4-4" />
          </svg>
        </div>
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Your profile has been verified.</h3>
        </div>
        <div class="flex items-center gap-2 [&_svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg>
        </div>
      </a>
    </div>

## [Usage](#usage)

Items are pure HTML composition using Tailwind utility classes. Use semantic elements like `<article>` or `<a>`, apply flex layout, and compose with standard HTML elements like `<h3>`, `<p>`, `<img>`, or `<button>`.

Browse the examples below and copy the pattern that fits your needs.

## [Examples](#examples)

### [Variants](#example-variants)

Preview Code

### Default Variant

Standard styling with subtle background and borders.

Open

### Outline Variant

Outlined style with clear borders and transparent background.

Open

### Muted Variant

Subdued appearance with muted colors for secondary content.

Open

    <div class="flex flex-col gap-6">
      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-transparent p-4 gap-4">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Default Variant</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Standard styling with subtle background and borders.</p>
        </div>
        <button class="btn-sm-outline">Open</button>
      </article>

      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Outline Variant</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Outlined style with clear borders and transparent background.</p>
        </div>
        <button class="btn-sm-outline">Open</button>
      </article>

      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-transparent bg-muted/50 p-4 gap-4">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Muted Variant</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Subdued appearance with muted colors for secondary content.</p>
        </div>
        <button class="btn-sm-outline">Open</button>
      </article>
    </div>

### [Size](#example-size)

Use different padding and gap sizes for compact or spacious layouts.

Preview Code

### Basic Item

A simple item with title and description.

Action

[

### Your profile has been verified.

](#)

    <div class="flex flex-col gap-6">
      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Basic Item</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">A simple item with title and description.</p>
        </div>
        <button class="btn-sm-outline">Action</button>
      </article>

      <a href="#" class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border py-3 px-4 gap-2.5">
        <div class="flex shrink-0 items-center justify-center gap-2 [&_svg]:pointer-events-none bg-transparent [&_svg]:size-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" /><path d="m9 12 2 2 4-4" /></svg>
        </div>
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Your profile has been verified.</h3>
        </div>
        <div class="flex items-center gap-2 [&_svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg>
        </div>
      </a>
    </div>

### [Icon](#example-icon)

Preview Code

### Security Alert

New login detected from unknown device.

Review

    <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
      <div class="flex shrink-0 items-center justify-center gap-2 self-start [&_svg]:pointer-events-none size-8 border rounded-sm bg-muted [&_svg:not([class*='size-'])]:size-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" /><path d="M12 8v4" /><path d="M12 16h.01" /></svg>
      </div>
      <div class="flex flex-1 flex-col gap-1">
        <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Security Alert</h3>
        <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">New login detected from unknown device.</p>
      </div>
      <button class="btn-sm-outline">Review</button>
    </article>

### [Avatar](#example-avatar)

Preview Code

![hunvreus](https://github.com/hunvreus.png)

### hunvreus

Last seen 5 months ago

![@hunvreus](https://github.com/hunvreus.png) ![@shadcn](https://github.com/shadcn.png) ![@adamwathan](https://github.com/adamwathan.png)

### No Team Members

Invite your team to collaborate on this project.

Invite

    <div class="flex flex-col gap-6">
      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <img src="https://github.com/hunvreus.png" alt="hunvreus" class="size-10 rounded-full object-cover">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">hunvreus</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Last seen 5 months ago</p>
        </div>
        <button class="btn-icon-outline rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="M12 5v14" /></svg>
        </button>
      </article>

      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <div class="flex -space-x-2 [&_img]:ring-background [&_img]:ring-2 [&_img]:grayscale [&_img]:size-8 [&_img]:shrink-0 [&_img]:object-cover [&_img]:rounded-full self-start">
          <img alt="@hunvreus" src="https://github.com/hunvreus.png">
          <img alt="@shadcn" src="https://github.com/shadcn.png">
          <img alt="@adamwathan" src="https://github.com/adamwathan.png">
        </div>
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">No Team Members</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Invite your team to collaborate on this project.</p>
        </div>
        <button class="btn-outline">
          Invite
        </button>
      </article>
    </div>

### [Image](#example-image)

Preview Code

[![Midnight City Lights](https://avatar.vercel.sh/example_1)

### Midnight City Lights - Electric Nights

Neon Dreams

3:45

](#)[![Midnight City Lights](https://avatar.vercel.sh/example_2)

### Coffee Shop Conversations - Urban Stories

The Morning Brew

4:05

](#)[![Midnight City Lights](https://avatar.vercel.sh/example_3)

### Digital Rain - Binary Beats

Cyber Symphony

3:30

](#)

    <div class="flex flex-col gap-6 w-full max-w-md">
      <a href="#" class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <img src="https://avatar.vercel.sh/example_1" alt="Midnight City Lights" class="grayscale size-10 rounded-sm object-cover">

        <div class="flex flex-1 flex-col gap-1">
          <h3 class="w-fit items-center gap-2 text-sm leading-snug font-medium line-clamp-1">Midnight City Lights - <span class="text-muted-foreground">Electric Nights</span></h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Neon Dreams</p>
        </div>

        <div class="flex flex-col gap-1 flex-none text-center">
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">3:45</p>
        </div>
      </a>

      <a href="#" class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <img src="https://avatar.vercel.sh/example_2" alt="Midnight City Lights" class="grayscale size-10 rounded-sm object-cover">

        <div class="flex flex-1 flex-col gap-1">
          <h3 class="w-fit items-center gap-2 text-sm leading-snug font-medium line-clamp-1">Coffee Shop Conversations - <span class="text-muted-foreground">Urban Stories</span></h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">The Morning Brew</p>
        </div>

        <div class="flex flex-col gap-1 flex-none text-center">
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">4:05</p>
        </div>
      </a>

      <a href="#" class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <img src="https://avatar.vercel.sh/example_3" alt="Midnight City Lights" class="grayscale size-10 rounded-sm object-cover">

        <div class="flex flex-1 flex-col gap-1">
          <h3 class="w-fit items-center gap-2 text-sm leading-snug font-medium line-clamp-1">Digital Rain - <span class="text-muted-foreground">Binary Beats</span></h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Cyber Symphony</p>
        </div>

        <div class="flex flex-col gap-1 flex-none text-center">
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">3:30</p>
        </div>
      </a>
    </div>

### [Group](#example-group)

Preview Code

![Ronan Berder](https://github.com/hunvreus.png)

### hunvreus

hunvreus@gmail.com

---

![shadcn](https://github.com/shadcn.png)

### shadcn

shadcn@vercel.com

---

![Adam Wathan](https://github.com/adamwathan.png)

### adamwathan

adam.wathan@gmail.com

    <div class="flex flex-col">
      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-transparent p-4 gap-4">
        <img src="https://github.com/hunvreus.png" alt="Ronan Berder" class="grayscale size-10 rounded-full object-cover">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">hunvreus</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">hunvreus@gmail.com</p>
        </div>
        <button class="btn-icon-outline rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="M12 5v14" /></svg>
        </button>
      </article>

      <hr role="separator" class="border-border">

      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-transparent p-4 gap-4">
        <img src="https://github.com/shadcn.png" alt="shadcn" class="grayscale size-10 rounded-full object-cover">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">shadcn</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">shadcn@vercel.com</p>
        </div>
        <button class="btn-icon-outline rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="M12 5v14" /></svg>
        </button>
      </article>

      <hr role="separator" class="border-border">

      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-transparent p-4 gap-4">
        <img src="https://github.com/adamwathan.png" alt="Adam Wathan" class="grayscale size-10 rounded-full object-cover">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">adamwathan</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">adam.wathan@gmail.com</p>
        </div>
        <button class="btn-icon-outline rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14" /><path d="M12 5v14" /></svg>
        </button>
      </article>
    </div>

### [Header](#example-header)

Preview Code

![v0-1.5-sm](https://avatar.vercel.sh/v0-1.5-sm)

### v0-1.5-sm

Everyday tasks and UI generation.

![v0-1.5-lg](https://avatar.vercel.sh/v0-1.5-lg)

### v0-1.5-lg

Advanced thinking or reasoning.

![v0-2.0-mini](https://avatar.vercel.sh/v0-2.0-mini)

### v0-2.0-mini

Open Source model for everyone.

    <div class="flex-col grid grid-cols-3 gap-4">
      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <img alt="v0-1.5-sm" loading="lazy" class="grayscale aspect-square w-full rounded-sm object-cover flex-basis" src="https://avatar.vercel.sh/v0-1.5-sm">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">v0-1.5-sm</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Everyday tasks and UI generation.</p>
        </div>
      </article>

      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <img alt="v0-1.5-lg" loading="lazy" class="grayscale aspect-square w-full rounded-sm object-cover flex-basis" src="https://avatar.vercel.sh/v0-1.5-lg">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">v0-1.5-lg</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Advanced thinking or reasoning.</p>
        </div>
      </article>

      <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <img alt="v0-2.0-mini" loading="lazy" class="grayscale aspect-square w-full rounded-sm object-cover flex-basis" src="https://avatar.vercel.sh/v0-2.0-mini">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">v0-2.0-mini</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Open Source model for everyone.</p>
        </div>
      </article>
    </div>

### [Link](#example-link)

Items can be rendered as links by using an `<a>` element. Hover and focus states are applied automatically.

Preview Code

[

### Visit our documentation

Learn how to get started with our components.

](#)[

### External resource

Opens in a new tab with security attributes.

](#)

    <div class="flex flex-col gap-6">
      <a href="#" class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-transparent p-4 gap-4">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Visit our documentation</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Learn how to get started with our components.</p>
        </div>
        <div class="flex items-center gap-2 [&_svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg>
        </div>
      </a>

      <a href="#" class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
        <div class="flex flex-1 flex-col gap-1">
          <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">External resource</h3>
          <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">Opens in a new tab with security attributes.</p>
        </div>
        <div class="flex items-center gap-2 [&_svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6" /><path d="M10 14 21 3" /><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" /></svg>
        </div>
      </a>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Variants](#example-variants)
  - [Size](#example-size)
  - [Icon](#example-icon)
  - [Avatar](#example-avatar)
  - [Image](#example-image)
  - [Group](#example-group)
  - [Header](#example-header)
  - [Link](#example-link)

---

# Kbd

Used to display textual user input from keyboard.

Preview Code

⌘ ⇧ ⌥ ⌃ Ctrl + B

    <div class="flex flex-col items-center gap-4">
      <span class="inline-flex items-center gap-1">
        <kbd class="kbd">⌘</kbd>
        <kbd class="kbd">⇧</kbd>
        <kbd class="kbd">⌥</kbd>
        <kbd class="kbd">⌃</kbd>
      </span>
      <span class="inline-flex items-center gap-1">
        <kbd class="kbd">Ctrl</kbd>
        <span>+</span>
        <kbd class="kbd">B</kbd>
      </span>
    </div>

## [Usage](#usage)

Use the `<kbd>` element with the `kbd` class:

    <kbd class="kbd">⌘K</kbd>

## [Examples](#examples)

### [Group](#example-group)

Preview Code

Use Ctrl + B Ctrl + K to open the command palette

    <p class="text-muted-foreground text-sm">
      Use
      <span class="inline-flex items-center gap-1">
        <kbd class="kbd">Ctrl + B</kbd>
        <kbd class="kbd">Ctrl + K</kbd>
      </span>
      to open the command palette
    </p>

### [Button](#example-button)

Preview Code

Accept ⏎ Cancel Esc

    <div class="flex flex-wrap items-center gap-x-4">
      <button class="btn-sm-outline pr-2">
        Accept
        <kbd class="kbd">⏎</kbd>
      </button>
      <button class="btn-sm-outline pr-2">
        Cancel
        <kbd class="kbd">Esc</kbd>
      </button>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Group](#example-group)
  - [Button](#example-button)

---

# Label

Renders an accessible label associated with controls.

Preview Code

Accept terms and conditions

    <label class="label gap-3">
      <input type="checkbox" class="input">
      Accept terms and conditions
    </label>

## Usage

Simply add the `label` class to your `<label>` element or have a parent with the `form` class ([read more about form](/components/form)). Labels' style may be affected by the presence of a disabled peer or child element.

    <label class="label" for="email">Your email address</label>

## [Examples](#examples)

### [Disabled](#example-disabled)

Preview Code

Email

    <div class="grid gap-3">
      <label class="label" for="email">Email</label>
      <input class="input" id="email" type="email" placeholder="Email" disabled>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Disabled](#example-disabled)

---

# Pagination

Pagination with page navigation, next and previous links.

## There is no dedicated pagination component in Basecoat.

Preview Code

- [Previous](#)
- [1](#)
- [2](#)
- [3](#)

- [Next](#)

  <nav role="navigation" aria-label="pagination" class="mx-auto flex w-full justify-center">
    <ul class="flex flex-row items-center gap-1">
      <li>
        <a href="#" class="btn-ghost"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6" /></svg> Previous</a>
      </li>
      <li>
        <a href="#" class="btn-icon-ghost">1</a>
      </li>
      <li>
        <a href="#" class="btn-icon-outline">2</a>
      </li>
      <li>
        <a href="#" class="btn-icon-ghost">3</a>
      </li>
      <li>
        <div class="size-9 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0"><circle cx="12" cy="12" r="1" /><circle cx="19" cy="12" r="1" /><circle cx="5" cy="12" r="1" /></svg></div>
      </li>
      <li>
        <a href="#" class="btn-ghost">Next <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg></a>
      </li>
    </ul>
  </nav>

## [Usage](#usage)

A pagination is fairly simple to implement with Tailwind using the Basecoat button classes:

    <nav role="navigation" aria-label="pagination" class="mx-auto flex w-full justify-center">
      <ul class="flex flex-row items-center gap-1">
        <li>
          <a href="#" class="btn-ghost"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6" /></svg> Previous</a>
        </li>
        <li>
          <a href="#" class="btn-icon-ghost">1</a>
        </li>
        <li>
          <a href="#" class="btn-icon-outline">2</a>
        </li>
        <li>
          <a href="#" class="btn-icon-ghost">3</a>
        </li>
        <li>
          <div class="size-9 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0"><circle cx="12" cy="12" r="1" /><circle cx="19" cy="12" r="1" /><circle cx="5" cy="12" r="1" /></svg></div>
        </li>
        <li>
          <a href="#" class="btn-ghost">Next <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6" /></svg></a>
        </li>
      </ul>
    </nav>

#### On This Page

- [Usage](#usage)

---

# Popover

Displays rich content in a portal, triggered by a button.

Preview Code

Open popover

#### Dimensions

Set the dimensions for the layer.

Width

Max. width

Height

Max. height

    <div id="demo-popover" class="popover">
      <button id="demo-popover-trigger" type="button" aria-expanded="false" aria-controls="demo-popover-popover" class="btn-outline">Open popover</button>
      <div id="demo-popover-popover" data-popover aria-hidden="true" class="w-80">
        <div class="grid gap-4">
          <header class="grid gap-1.5">
            <h4 class="leading-none font-medium">Dimensions</h4>
            <p class="text-muted-foreground text-sm">Set the dimensions for the layer.</p>
          </header>
          <form class="form grid gap-2">
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-width">Width</label>
              <input type="text" id="demo-popover-width" value="100%" class="col-span-2 h-8" autofocus />
            </div>
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-max-width">Max. width</label>
              <input type="text" id="demo-popover-max-width" value="300px" class="col-span-2 h-8" />
            </div>
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-height">Height</label>
              <input type="text" id="demo-popover-height" value="25px" class="col-span-2 h-8" />
            </div>
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-max-height">Max. height</label>
              <input type="text" id="demo-popover-max-height" value="none" class="col-span-2 h-8" />
            </div>
          </form>
        </div>
      </div>
    </div>

## [Usage](#usage)

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript file](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/popover.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli)

#### [Step 2: Add your popover HTML](#usage-html-js-2)

    <div id="demo-popover" class="popover">
      <button id="demo-popover-trigger" type="button" aria-expanded="false" aria-controls="demo-popover-popover" class="btn-outline">Open popover</button>
      <div id="demo-popover-popover" data-popover aria-hidden="true" class="w-80">
        <div class="grid gap-4">
          <header class="grid gap-1.5">
            <h4 class="leading-none font-medium">Dimensions</h4>
            <p class="text-muted-foreground text-sm">Set the dimensions for the layer.</p>
          </header>
          <form class="form grid gap-2">
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-width">Width</label>
              <input type="text" id="demo-popover-width" value="100%" class="col-span-2 h-8" autofocus />
            </div>
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-max-width">Max. width</label>
              <input type="text" id="demo-popover-max-width" value="300px" class="col-span-2 h-8" />
            </div>
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-height">Height</label>
              <input type="text" id="demo-popover-height" value="25px" class="col-span-2 h-8" />
            </div>
            <div class="grid grid-cols-3 items-center gap-4">
              <label for="demo-popover-max-height">Max. height</label>
              <input type="text" id="demo-popover-max-height" value="none" class="col-span-2 h-8" />
            </div>
          </form>
        </div>
      </div>
    </div>

#### [HTML structure](#usage-html-js-3)

`<button type="button" popovertarget="{ POPOVER_ID }">`

The trigger to open the popover, can also have the following attributes:

- `id="{BUTTON_ID}"`: linked to by the `aria-labelledby` attribute of the listbox.
- `aria-expanded="false"`: tracks the popover's state.
- `onclick`: a simple function to update `aria-expanded`.

`<div data-popover class="popover" id="{ POPOVER_ID }">`

You can set up the side and alignment of the popover using the `data-side` and `data-align` attributes.

#### [JavaScript events](#usage-html-js-4)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on itself.

`basecoat:popover`

When the popover opens, the component dispatches a custom (non-bubbling) `basecoat:popover` event on `document`. Other popover components (Combobox, Dropdown Menu, Popover and Select) listen for this to close any open popovers.

### [Jinja and Nunjucks](#usage-macro)

You can use the `popover()` Nunjucks or Jinja macro for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/popover.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/popover.njk)

    {% call popover(
      id="demo-popover",
      trigger="Open popover",
      trigger_attrs={"class": "btn-outline"},
      popover_attrs={"class": "w-80 p-4"}
    ) %}
      <div class="grid gap-4">
        <header class="grid gap-1.5">
          <h4 class="leading-none font-medium">Dimensions</h4>
          <p class="text-muted-foreground text-sm">Set the dimensions for the layer.</p>
        </header>
        <form class="form grid gap-2">
          <div class="grid grid-cols-3 items-center gap-4">
            <label for="demo-popover-width">Width</label>
            <input type="text" id="demo-popover-width" value="100%" class="col-span-2 h-8"/>
          </div>
          <div class="grid grid-cols-3 items-center gap-4">
            <label for="demo-popover-max-width">Max. width</label>
            <input type="text" id="demo-popover-max-width" value="300px" class="col-span-2 h-8"/>
          </div>
          <div class="grid grid-cols-3 items-center gap-4">
            <label for="demo-popover-height">Height</label>
            <input type="text" id="demo-popover-height" value="25px" class="col-span-2 h-8"/>
          </div>
          <div class="grid grid-cols-3 items-center gap-4">
            <label for="demo-popover-max-height">Max. height</label>
            <input type="text" id="demo-popover-max-height" value="none" class="col-span-2 h-8"/>
          </div>
        </form>
      </div>
    {% endcall %}

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1 (Optional): Include the JavaScript file](#usage-html-js-1)
    - [Step 2: Add your popover HTML](#usage-html-js-2)
    - [HTML structure](#usage-html-js-3)
    - [JavaScript events](#usage-html-js-4)
  - [Jinja and Nunjucks](#usage-macro)

---

# Progress

Displays an indicator showing the completion progress of a task, typically displayed as a progress bar.

## There is no dedicated Progress component in Basecoat.

Preview Code

setTimeout(() => { document.getElementById('demo-progress').style.width = '66%'; }, 500);

    <div class="bg-primary/20 relative h-2 w-full overflow-hidden rounded-full">
      <div id="demo-progress" class="bg-primary h-full w-full flex-1 transition-all" style="width: 17%"></div>
    </div>
    <script>
      setTimeout(() => {
        document.getElementById('demo-progress').style.width = '66%';
      }, 500);
    </script>

## [Usage](#usage)

Progress bars are pure HTML composition using Tailwind utility classes. Use a container div for the track and an inner div for the indicator. Set the indicator's width with inline styles or via JavaScript.

    <div class="bg-primary/20 relative h-2 w-full overflow-hidden rounded-full">
      <div class="bg-primary h-full w-full flex-1 transition-all" style="width: 66%"></div>
    </div>

#### On This Page

- [Usage](#usage)

---

# Radio Group

A set of checkable buttons—known as radio buttons—where no more than one of the buttons can be checked at a time.

Preview Code

Default Comfortable Compact

    <fieldset class="grid gap-3">
      <label class="label"><input type="radio" name="radio-group" value="default" class="input">Default</label>
      <label class="label"><input type="radio" name="radio-group" value="comfortable" class="input" checked>Comfortable</label>
      <label class="label"><input type="radio" name="radio-group" value="compact" class="input">Compact</label>
    </fieldset>

## Usage

Simply add the `input` class to your `<input type="radio">` elements or have a parent with the `form` class ([read more about form](/components/form)). You can also set the `aria-invalid` attribute to `true` to make the input invalid.

    <fieldset class="grid gap-3">
      <label class="label"><input type="radio" name="radio-group" value="default" class="input">Default</label>
      <label class="label"><input type="radio" name="radio-group" value="comfortable" class="input" checked>Comfortable</label>
      <label class="label"><input type="radio" name="radio-group" value="compact" class="input">Compact</label>
    </fieldset>

## [Examples](#examples)

### [Form](#example-form)

Preview Code

Notify me about...

All new messages Direct messages and mentions Nothing

Submit

    <form class="form space-y-6 w-full">
      <div class="flex flex-col gap-3">
        <label for="demo-form-radio">Notify me about...</label>
        <fieldset id="demo-form-radio" class="grid gap-3">
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="1">All new messages</label>
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="2">Direct messages and mentions</label>
          <label class="font-normal"><input type="radio" name="demo-form-radio" value="3" >Nothing</label>
        </fieldset>
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Form](#example-form)

---

# Select

Displays a list of options for the user to pick from—triggered by a button.

Preview Code

Apple Banana Blueberry Grapes Pineapple

    <select class="select w-[180px]">
      <optgroup label="Fruits">
        <option>Apple</option>
        <option>Banana</option>
        <option>Blueberry</option>
        <option>Grapes</option>
        <option>Pineapple</option>
      </optgroup>
    </select>

Preview Code

Apple

Fruits

Apple

Banana

Blueberry

Grapes

Pineapple

    <div id="select-257364" class="select">
      <button type="button" class="btn-outline justify-between font-normal w-[180px]" id="select-257364-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-257364-listbox">
        <span class="truncate">Apple</span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
          <path d="m7 15 5 5 5-5" />
          <path d="m7 9 5-5 5 5" />
        </svg>
      </button>
      <div id="select-257364-popover" data-popover aria-hidden="true">
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
          </svg>
          <input type="text" value="" placeholder="Search entries..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="false" aria-controls="select-257364-listbox" aria-labelledby="select-257364-trigger" />
        </header>

        <div role="listbox" id="select-257364-listbox" aria-orientation="vertical" aria-labelledby="select-257364-trigger">
          <div role="group" aria-labelledby="group-label-select-257364-items-1">
            <div role="heading" id="group-label-select-257364-items-1">Fruits</div>

            <div id="select-257364-items-1-1" role="option" data-value="apple" aria-selected="true" data-force="true">Apple</div>

            <div id="select-257364-items-1-2" role="option" data-value="banana" data-keywords="bread">Banana</div>

            <div id="select-257364-items-1-3" role="option" data-value="blueberry">Blueberry</div>

            <div id="select-257364-items-1-4" role="option" data-value="pineapple">Grapes</div>

            <div id="select-257364-items-1-5" role="option" data-value="pineapple">Pineapple</div>
          </div>
        </div>
      </div>
      <input type="hidden" name="select-257364-value" value="apple" />
    </div>

## [Usage](#usage)

### [HTML](#usage-html)

If you use a `<select>` element, just add the `select` class to it or have a parent with the `form` class ([read more about form](/components/form)).

    <select class="select w-[180px]">
      <optgroup label="Fruits">
        <option>Apple</option>
        <option>Banana</option>
        <option>Blueberry</option>
        <option>Grapes</option>
        <option>Pineapple</option>
      </optgroup>
    </select>

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript files](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/select.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli) [select.js](https://github.com/hunvreus/basecoat/blob/main/src/js/select.js)

#### [Step 2: Add your select HTML](#usage-html-js-2)

    <div id="select-257364" class="select">
      <button type="button" class="btn-outline justify-between font-normal w-[180px]" id="select-257364-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-257364-listbox">
        <span class="truncate">Apple</span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
          <path d="m7 15 5 5 5-5" />
          <path d="m7 9 5-5 5 5" />
        </svg>
      </button>
      <div id="select-257364-popover" data-popover aria-hidden="true">
        <header>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search">
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
          </svg>
          <input type="text" value="" placeholder="Search entries..." autocomplete="off" autocorrect="off" spellcheck="false" aria-autocomplete="list" role="combobox" aria-expanded="false" aria-controls="select-257364-listbox" aria-labelledby="select-257364-trigger" />
        </header>

        <div role="listbox" id="select-257364-listbox" aria-orientation="vertical" aria-labelledby="select-257364-trigger">
          <div role="group" aria-labelledby="group-label-select-257364-items-1">
            <div role="heading" id="group-label-select-257364-items-1">Fruits</div>

            <div id="select-257364-items-1-1" role="option" data-value="apple" aria-selected="true" data-force="true">Apple</div>

            <div id="select-257364-items-1-2" role="option" data-value="banana" data-keywords="bread">Banana</div>

            <div id="select-257364-items-1-3" role="option" data-value="blueberry">Blueberry</div>

            <div id="select-257364-items-1-4" role="option" data-value="pineapple">Grapes</div>

            <div id="select-257364-items-1-5" role="option" data-value="pineapple">Pineapple</div>
          </div>
        </div>
      </div>
      <input type="hidden" name="select-257364-value" value="apple" />
    </div>

#### [HTML structure](#usage-html-js-3)

`<div class="select">`

Wraps around the entire component.

`<button type="button" popovertarget="{ POPOVER_ID }">`

The trigger to open the popover, can also have the following attributes:

- `id="{BUTTON_ID}"`: linked to by the `aria-labelledby` attribute of the listbox.
- `aria-haspopup="listbox"`: indicates that the button opens a listbox.
- `aria-controls="{ LISTBOX_ID }"`: points to the listbox's id.
- `aria-expanded="false"`: tracks the popover's state.
- `aria-activedescendant="{ OPTION_ID }"`: points to the active option's id.

`<div popover class="popover" id="{ POPOVER_ID }">`

As with the [Popover](/components/popover) component, you can set up the side and alignment of the popover using the `data-side` and `data-align` attributes.

`<div role="listbox">`

The listbox containing the options. Should have the following attributes:

- `id="{ LISTBOX_ID }"`: refered to by the `aria-controls` attribute of the trigger.
- `aria-labelledby="{ BUTTON_ID }"`: linked to by the button's `id` attribute.

`<div role="option" data-value="{ VALUE }">`

Option that can be selected.Should have a unique id if you use the `aria-activedescendant` attribute on the trigger.

`<hr role="separator">` Optional

Separator between groups/options.

`<div role="group">` Optional

Group of options, can have a `aria-labelledby` attribute to link to a heading.

`<span role="heading">`

Group heading, must have an `id` attribute if you use the `aria-labelledby` attribute on the group.

`<input type="hidden" name="{ NAME }" value="{ VALUE }">` Optional

The hidden input that holds the value of the field (if needed).

#### [JavaScript events](#usage-html-js-4)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on itself.

`basecoat:popover`

When the popover opens, the component dispatches a custom (non-bubbling) `basecoat:popover` event on `document`. Other popover components (Combobox, Dropdown Menu, Popover and Select) listen for this to close any open popovers.

`change`

When the selected value changes, the component dispatches a custom (bubbling) `change` event on itself, with the selected value in `event.detail` (e.g. `{ detail: { value: "something" }}`).

#### [JavaScript methods](#usage-html-js-5)

`selectByValue`

You can call this method on the component after it is initialized to select an option by value (i.e. the option with the matching `data-value` attribute):

    <script>
      const selectComponent = document.querySelector("#my-select");
      selectComponent.addEventListener("basecoat:initialized", () => {
        selectComponent.selectByValue("apple");
      });
    </script>

### [Jinja and Nunjucks](#usage-macro)

You can use the `select()` Nunjucks or Jinja macro for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/dialog.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/dialog.njk)

    {{ select(
      items=[
        {
          type: "group",
          label: "Fruits",
          items: [
            { type: "item", value: "apple", label: "Apple" },
            { type: "item", value: "banana", label: "Banana" },
            { type: "item", value: "blueberry", label: "Blueberry" },
            { type: "item", value: "grapes", label: "Grapes" },
            { type: "item", value: "pineapple", label: "Pineapple" }
          ]
        }
      ]
    ) }}

## [Examples](#examples)

### [Scrollable](#example-scrollable)

Preview Code

Item 1

Item 0

Item 1

Item 2

Item 3

Item 4

Item 5

Item 6

Item 7

Item 8

Item 9

Item 10

Item 11

Item 12

Item 13

Item 14

Item 15

Item 16

Item 17

Item 18

Item 19

Item 20

Item 21

Item 22

Item 23

Item 24

Item 25

Item 26

Item 27

Item 28

Item 29

Item 30

Item 31

Item 32

Item 33

Item 34

Item 35

Item 36

Item 37

Item 38

Item 39

Item 40

Item 41

Item 42

Item 43

Item 44

Item 45

Item 46

Item 47

Item 48

Item 49

Item 50

Item 51

Item 52

Item 53

Item 54

Item 55

Item 56

Item 57

Item 58

Item 59

Item 60

Item 61

Item 62

Item 63

Item 64

Item 65

Item 66

Item 67

Item 68

Item 69

Item 70

Item 71

Item 72

Item 73

Item 74

Item 75

Item 76

Item 77

Item 78

Item 79

Item 80

Item 81

Item 82

Item 83

Item 84

Item 85

Item 86

Item 87

Item 88

Item 89

Item 90

Item 91

Item 92

Item 93

Item 94

Item 95

Item 96

Item 97

Item 98

    <div id="select-929480" class="select">
      <button type="button" class="btn-outline justify-between font-normal" id="select-929480-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-929480-listbox">
        <span class="truncate"></span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down text-muted-foreground opacity-50 shrink-0"><path d="m6 9 6 6 6-6" /></svg>
      </button>
      <div id="select-929480-popover" data-popover aria-hidden="true">
        <div role="listbox" id="select-929480-listbox" aria-orientation="vertical" aria-labelledby="select-929480-trigger" class="scrollbar overflow-y-auto max-h-64">
          <div role="option">Item 0</div>

          <div role="option" data-value="item-1">Item 1</div>

          <div role="option" data-value="item-2">Item 2</div>

          <div role="option" data-value="item-3">Item 3</div>

          <div role="option" data-value="item-4">Item 4</div>

          <div role="option" data-value="item-5">Item 5</div>

          <div role="option" data-value="item-6">Item 6</div>

          <div role="option" data-value="item-7">Item 7</div>

          <div role="option" data-value="item-8">Item 8</div>

          <div role="option" data-value="item-9">Item 9</div>

          <div role="option" data-value="item-10">Item 10</div>

          <div role="option" data-value="item-11">Item 11</div>

          <div role="option" data-value="item-12">Item 12</div>

          <div role="option" data-value="item-13">Item 13</div>

          <div role="option" data-value="item-14">Item 14</div>

          <div role="option" data-value="item-15">Item 15</div>

          <div role="option" data-value="item-16">Item 16</div>

          <div role="option" data-value="item-17">Item 17</div>

          <div role="option" data-value="item-18">Item 18</div>

          <div role="option" data-value="item-19">Item 19</div>

          <div role="option" data-value="item-20">Item 20</div>

          <div role="option" data-value="item-21">Item 21</div>

          <div role="option" data-value="item-22">Item 22</div>

          <div role="option" data-value="item-23">Item 23</div>

          <div role="option" data-value="item-24">Item 24</div>

          <div role="option" data-value="item-25">Item 25</div>

          <div role="option" data-value="item-26">Item 26</div>

          <div role="option" data-value="item-27">Item 27</div>

          <div role="option" data-value="item-28">Item 28</div>

          <div role="option" data-value="item-29">Item 29</div>

          <div role="option" data-value="item-30">Item 30</div>

          <div role="option" data-value="item-31">Item 31</div>

          <div role="option" data-value="item-32">Item 32</div>

          <div role="option" data-value="item-33">Item 33</div>

          <div role="option" data-value="item-34">Item 34</div>

          <div role="option" data-value="item-35">Item 35</div>

          <div role="option" data-value="item-36">Item 36</div>

          <div role="option" data-value="item-37">Item 37</div>

          <div role="option" data-value="item-38">Item 38</div>

          <div role="option" data-value="item-39">Item 39</div>

          <div role="option" data-value="item-40">Item 40</div>

          <div role="option" data-value="item-41">Item 41</div>

          <div role="option" data-value="item-42">Item 42</div>

          <div role="option" data-value="item-43">Item 43</div>

          <div role="option" data-value="item-44">Item 44</div>

          <div role="option" data-value="item-45">Item 45</div>

          <div role="option" data-value="item-46">Item 46</div>

          <div role="option" data-value="item-47">Item 47</div>

          <div role="option" data-value="item-48">Item 48</div>

          <div role="option" data-value="item-49">Item 49</div>

          <div role="option" data-value="item-50">Item 50</div>

          <div role="option" data-value="item-51">Item 51</div>

          <div role="option" data-value="item-52">Item 52</div>

          <div role="option" data-value="item-53">Item 53</div>

          <div role="option" data-value="item-54">Item 54</div>

          <div role="option" data-value="item-55">Item 55</div>

          <div role="option" data-value="item-56">Item 56</div>

          <div role="option" data-value="item-57">Item 57</div>

          <div role="option" data-value="item-58">Item 58</div>

          <div role="option" data-value="item-59">Item 59</div>

          <div role="option" data-value="item-60">Item 60</div>

          <div role="option" data-value="item-61">Item 61</div>

          <div role="option" data-value="item-62">Item 62</div>

          <div role="option" data-value="item-63">Item 63</div>

          <div role="option" data-value="item-64">Item 64</div>

          <div role="option" data-value="item-65">Item 65</div>

          <div role="option" data-value="item-66">Item 66</div>

          <div role="option" data-value="item-67">Item 67</div>

          <div role="option" data-value="item-68">Item 68</div>

          <div role="option" data-value="item-69">Item 69</div>

          <div role="option" data-value="item-70">Item 70</div>

          <div role="option" data-value="item-71">Item 71</div>

          <div role="option" data-value="item-72">Item 72</div>

          <div role="option" data-value="item-73">Item 73</div>

          <div role="option" data-value="item-74">Item 74</div>

          <div role="option" data-value="item-75">Item 75</div>

          <div role="option" data-value="item-76">Item 76</div>

          <div role="option" data-value="item-77">Item 77</div>

          <div role="option" data-value="item-78">Item 78</div>

          <div role="option" data-value="item-79">Item 79</div>

          <div role="option" data-value="item-80">Item 80</div>

          <div role="option" data-value="item-81">Item 81</div>

          <div role="option" data-value="item-82">Item 82</div>

          <div role="option" data-value="item-83">Item 83</div>

          <div role="option" data-value="item-84">Item 84</div>

          <div role="option" data-value="item-85">Item 85</div>

          <div role="option" data-value="item-86">Item 86</div>

          <div role="option" data-value="item-87">Item 87</div>

          <div role="option" data-value="item-88">Item 88</div>

          <div role="option" data-value="item-89">Item 89</div>

          <div role="option" data-value="item-90">Item 90</div>

          <div role="option" data-value="item-91">Item 91</div>

          <div role="option" data-value="item-92">Item 92</div>

          <div role="option" data-value="item-93">Item 93</div>

          <div role="option" data-value="item-94">Item 94</div>

          <div role="option" data-value="item-95">Item 95</div>

          <div role="option" data-value="item-96">Item 96</div>

          <div role="option" data-value="item-97">Item 97</div>

          <div role="option" data-value="item-98">Item 98</div>
        </div>
      </div>
      <input type="hidden" name="select-929480-value" value="" />
    </div>

### [Disabled](#example-disabled)

Preview Code

Disabled

Disabled

    <div id="select-456133" class="select">
      <button type="button" class="btn-outline justify-between font-normal" id="select-456133-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-456133-listbox" disabled="disabled">
        <span class="truncate"></span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down text-muted-foreground opacity-50 shrink-0"><path d="m6 9 6 6 6-6" /></svg>
      </button>
      <div id="select-456133-popover" data-popover aria-hidden="true">
        <div role="listbox" id="select-456133-listbox" aria-orientation="vertical" aria-labelledby="select-456133-trigger">
          <div role="option" data-value="disabled">Disabled</div>
        </div>
      </div>
      <input type="hidden" name="select-456133-value" value="" />
    </div>

### [With icon](#example-with-icon)

Preview Code

Bar

Bar

Line

Pie

    <div id="select-with-icons" class="select">
      <button type="button" class="btn-outline justify-between font-normal w-[180px]" id="select-with-icons-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-with-icons-listbox">
        <span class="truncate"></span>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down-icon lucide-chevron-down text-muted-foreground opacity-50 shrink-0"><path d="m6 9 6 6 6-6" /></svg>
      </button>
      <div id="select-with-icons-popover" data-popover aria-hidden="true">
        <div role="listbox" id="select-with-icons-listbox" aria-orientation="vertical" aria-labelledby="select-with-icons-trigger">
          <div type="button" role="option" data-value="bar">
            <span class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground">
                <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                <path d="M7 16h8" />
                <path d="M7 11h12" />
                <path d="M7 6h3" />
              </svg>
              Bar
            </span>
          </div>
          <div type="button" role="option" data-value="line">
            <span class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground">
                <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                <path d="m19 9-5 5-4-4-3 3" />
              </svg>
              Line
            </span>
          </div>
          <div type="button" role="option" data-value="pie">
            <span class="flex items-center gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground">
                <path d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z" />
                <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
              </svg>
              Pie
            </span>
          </div>
        </div>
      </div>
      <input type="hidden" name="select-with-icons-value" value="" />
    </div>

#### On This Page

- [Usage](#usage)
  - [HTML](#usage-html)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1: Include the JavaScript files](#usage-html-js-1)
    - [Step 2: Add your select HTML](#usage-html-js-2)
    - [HTML structure](#usage-html-js-3)
    - [JavaScript events](#usage-html-js-4)
    - [JavaScript methods](#usage-html-js-5)
  - [Jinja and Nunjucks](#usage-macro)
- [Examples](#examples)
  - [Scrollable](#example-scrollable)
  - [Disabled](#example-disabled)
  - [With icon](#example-with-icon)

---

# Sidebar

A composable, themeable and customizable sidebar component.

## [Usage](#usage)

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript files](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/sidebar.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli) [sidebar.js](https://github.com/hunvreus/basecoat/blob/main/src/js/sidebar.js)

#### [Step 2: Add your sidebar HTML](#usage-html-js-2)

    <aside class="sidebar" data-side="left" aria-hidden="false">
      <nav aria-label="Sidebar navigation">
        <section class="scrollbar">
          <div role="group" aria-labelledby="group-label-content-1">
            <h3 id="group-label-content-1">Getting started</h3>

            <ul>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m7 11 2-2-2-2" />
                    <path d="M11 13h4" />
                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                  </svg>
                  <span>Playground</span>
                </a>
              </li>

              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 8V4H8" />
                    <rect width="16" height="12" x="4" y="8" rx="2" />
                    <path d="M2 14h2" />
                    <path d="M20 14h2" />
                    <path d="M15 13v2" />
                    <path d="M9 13v2" />
                  </svg>
                  <span>Models</span>
                </a>
              </li>

              <li>
                <details id="submenu-content-1-3">
                  <summary aria-controls="submenu-content-1-3-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                      <circle cx="12" cy="12" r="3" />
                    </svg>
                    Settings
                  </summary>
                  <ul id="submenu-content-1-3-content">
                    <li>
                      <a href="#">
                        <span>General</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span>Team</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span>Billing</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span>Limits</span>
                      </a>
                    </li>
                  </ul>
                </details>
              </li>
            </ul>
          </div>
        </section>
      </nav>
    </aside>

    <main>
      <button type="button" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar'))">Toggle sidebar</button>
      <h1>Content</h1>
    </main>

#### [HTML structure](#usage-html-js-3)

`<aside class="sidebar" aria-hidden="false">`

Wraps around the entire component. It can have the following attributes:

- `aria-hidden="true"`: controls the default state of the sidebar (hidden or visible).
- `data-side="left"`: specifies the side of the sidebar (`left` or `right`, defaults to `left`).

`<nav>`

The navigation element that contains the sidebar's content. It can have the following attributes:

- `id="{BUTTON_ID}"`: linked to by the `aria-labelledby` attribute of the listbox.
- `aria-haspopup="menu"`: indicates that the button opens a menu.
- `aria-controls="{ MENU_ID }"`: points to the menu's id.
- `aria-expanded="false"`: tracks the popover's state.

`<header>` Optional

The header of the sidebar.

`<section>`

The main navigation list.

`<div role="group">`

Group of options, can have a `aria-labelledby` attribute to link to a heading.

`<span role="heading">`

Group heading, must have an `id` attribute if you use the `aria-labelledby` attribute on the group.

`<ul>`

List of links or buttons.

`<li>`

Individual item.

`<a>`

A link. By default, clicking on a link will close the sidebar on mobile unless the `data-keep-mobile-sidebar-open` attribute is present.

`<button>`

A button. By default, clicking on a button will close the sidebar on mobile unless the `data-keep-mobile-sidebar-open` attribute is present.

`<details>`

Collapsible section.

`<summary>`

Summary of the collapsible section.

`<ul>`

List of links or buttons.

`<footer>` Optional

The footer of the sidebar.

`<main>`

A wrapper for the content of the page.

`<button type="button" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar'))">`

A button to toggle the sidebar. If you want to use multiple sidebars you will need to add unique ids to the sidebars (i.e. `<aside class="sidebar" id="{SIDEBAR_ID}">`) and refer to them in the event `detail` (i.e. `document.dispatchEvent(new CustomEvent('basecoat:sidebar', { detail: { id: '{SIDEBAR_ID}' } }));`).

#### [JavaScript events](#usage-html-js-4)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on itself.

`basecoat:sidebar`

Sidebars listen for this event on `document` to open, close or toggle themselves. By default, the event will toggle the sidebar, but can be used to open or close if you add an `action` to the detail. Additionally, if you have multiple sidebars on the page, you can target a specific sidebar by adding its `id` to the detail:

    <!-- Toggles the sidebar -->
    <button type="button" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar'));">Toggle sidebar</button>
    <!-- Opens the `#main-navigation` sidebar -->
    <button type="button" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar', { detail: { id: 'main-navigation', action: 'open' } }));">Open sidebar</button>
    <!-- Closes the sidebar -->
    <button type="button" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar', { detail: { action: 'close' } }));">Close sidebar</button>

### [Jinja and Nunjucks](#usage-macro)

You can use the `sidebar()` Nunjucks or Jinja macro for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/sidebar.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/sidebar.njk)

    {% set menu = [
      { type: "group", label: "Getting started", items: [
        { label: "Playground", url: "#" },
        { label: "Models", url: "#" },
        { label: "Settings", type: "submenu", items: [
          { label: "General", url: "#" },
          { label: "Team", url: "#" },
          { label: "Billing", url: "#" },
          { label: "Limits", url: "#" }
        ] }
      ]}
    ] %}

    {{ sidebar(
      label="Sidebar navigation",
      menu=menu
    ) }}
    <main>
      <h1>Content</h1>
    </main>

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1: Include the JavaScript files](#usage-html-js-1)
    - [Step 2: Add your sidebar HTML](#usage-html-js-2)
    - [HTML structure](#usage-html-js-3)
    - [JavaScript events](#usage-html-js-4)
  - [Jinja and Nunjucks](#usage-macro)

---

# Skeleton

Used to show a placeholder while content is loading.

## There is no dedicated skeleton component in Basecoat.

Preview Code

    <div class="flex items-center gap-4">
      <div class="bg-accent animate-pulse size-10 shrink-0 rounded-full"></div>
      <div class="grid gap-2">
        <div class="bg-accent animate-pulse rounded-md h-4 w-[150px]"></div>
        <div class="bg-accent animate-pulse rounded-md h-4 w-[100px]"></div>
      </div>
    </div>

## [Usage](#usage)

Simply use the `animate-pulse` class to create a skeleton.

    <div class="flex items-center gap-4">
      <div class="bg-accent animate-pulse size-10 shrink-0 rounded-full"></div>
      <div class="grid gap-2">
        <div class="bg-accent animate-pulse rounded-md h-4 w-[150px]"></div>
        <div class="bg-accent animate-pulse rounded-md h-4 w-[100px]"></div>
      </div>
    </div>

## [Examples](#examples)

### [Card](#example-card)

Preview Code

    <div class="card w-full @md:w-auto @md:min-w-sm">
      <header>
        <div class="bg-accent animate-pulse rounded-md h-4 w-2/3"></div>
        <div class="bg-accent animate-pulse rounded-md h-4 w-1/2"></div>
      </header>
      <section>
        <div class="bg-accent animate-pulse rounded-md aspect-square w-full"></div>
      </section>
    </div>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Card](#example-card)

---

# Slider

An input where the user selects a value from within a given range.

Preview Code

(() => { const sliders = document.querySelectorAll('input\[type="range"\].input'); if (!sliders) return; const updateSlider = (el) => { const min = parseFloat(el.min || 0); const max = parseFloat(el.max || 100); const value = parseFloat(el.value); const percent = (max === min) ? 0 : ((value - min) / (max - min)) \* 100; el.style.setProperty('--slider-value', \`${percent}%\`); }; sliders.forEach(slider => { updateSlider(slider); slider.addEventListener('input', (event) => updateSlider(event.target)); }); })();

    <input
      type="range"
      class="input w-full"
      min="0"
      max="100"
      value="50"
    >
    <script>
      (() => {
        const sliders = document.querySelectorAll('input[type="range"].input');
        if (!sliders) return;

        const updateSlider = (el) => {
          const min = parseFloat(el.min || 0);
          const max = parseFloat(el.max || 100);
          const value = parseFloat(el.value);
          const percent = (max === min) ? 0 : ((value - min) / (max - min)) * 100;
          el.style.setProperty('--slider-value', `${percent}%`);
        };

        sliders.forEach(slider => {
          updateSlider(slider);
          slider.addEventListener('input', (event) => updateSlider(event.target));
        });
      })();
    </script>

## [Usage](#usage)

You can style an `<input type="range">` element by either adding the `input` class or having a parent with the `form` class ([read more about form](/components/form)). However, the range input also requries some Javacript code to be able to paint the left side of the slider.

    <input
      type="range"
      class="input w-full"
      min="0"
      max="100"
      value="50"
    >
    <script>
      (() => {
        const sliders = document.querySelectorAll('input[type="range"].input');
        if (!sliders) return;

        const updateSlider = (el) => {
          const min = parseFloat(el.min || 0);
          const max = parseFloat(el.max || 100);
          const value = parseFloat(el.value);
          const percent = (max === min) ? 0 : ((value - min) / (max - min)) * 100;
          el.style.setProperty('--slider-value', `${percent}%`);
        };

        sliders.forEach(slider => {
          updateSlider(slider);
          slider.addEventListener('input', (event) => updateSlider(event.target));
        });
      })();
    </script>

#### On This Page

- [Usage](#usage)

---

# Spinner

An indicator that can be used to show a loading state.

## There is no dedicated Spinner component in Basecoat.

Preview Code

### Processing payment...

$100.00

    <article class="group/item flex items-center border text-sm rounded-md transition-colors flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-transparent bg-muted/50 p-4 gap-4">
      <div class="flex shrink-0 items-center justify-center [&_svg]:pointer-events-none [&_svg]:size-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      </div>
      <div class="flex flex-1 flex-col gap-1">
        <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium line-clamp-1">Processing payment...</h3>
      </div>
      <div class="flex flex-col gap-1 flex-none text-center">
        <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">$100.00</p>
      </div>
    </article>

## [Usage](#usage)

Spinners are pure HTML using the `loader-circle` Lucide icon with the `animate-spin` Tailwind utility. Add `role="status"` and `aria-label="Loading"` for accessibility.

Browse the examples below and copy the pattern that fits your needs.

## [Examples](#examples)

### [Size](#example-size)

Use the `size-*` utility class to change the size of the spinner.

Preview Code

    <div class="flex items-center gap-6">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-3 animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-4 animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-6 animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-8 animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
    </div>

### [Color](#example-color)

Use the `text-*` utility class to change the color of the spinner.

Preview Code

    <div class="flex items-center gap-6">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-6 animate-spin text-red-500"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-6 animate-spin text-green-500"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-6 animate-spin text-blue-500"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-6 animate-spin text-yellow-500"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-6 animate-spin text-purple-500"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
    </div>

### [Button](#example-button)

Add a spinner to a button to indicate a loading state.

Preview Code

Loading... Please wait Processing

    <div class="flex flex-col items-center gap-4">
      <button class="btn-sm" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        Loading...
      </button>
      <button class="btn-sm-outline" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        Please wait
      </button>
      <button class="btn-sm-secondary" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        Processing
      </button>
    </div>

### [Badge](#example-badge)

Preview Code

Syncing Updating Processing

    <div class="flex items-center gap-4">
      <span class="badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        Syncing
      </span>
      <span class="badge-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        Updating
      </span>
      <span class="badge-outline">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        Processing
      </span>
    </div>

### [Input Group](#example-input-group)

Input groups can have spinners positioned inside them.

Preview Code

Validating...

    <div class="flex w-full max-w-md flex-col gap-4">
      <div class="relative">
        <input type="text" class="input pr-9" placeholder="Send a message..." disabled>
        <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-muted-foreground [&>svg]:size-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        </div>
      </div>

      <div class="relative">
        <textarea class="textarea pr-10 min-h-27 pb-12" placeholder="Send a message..." disabled></textarea>
        <footer role="group" class="absolute bottom-0 px-3 pb-3 pt-1.5 flex items-center w-full gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="size-4 animate-spin text-muted-foreground"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
          <span class="text-sm text-muted-foreground">Validating...</span>
          <button type="button" class="btn-sm-icon h-6 w-7.5 ml-auto rounded">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 12 7-7 7 7" /><path d="M12 19V5" /></svg>
          </button>
        </footer>
      </div>
    </div>

### [Empty](#example-empty)

Use a spinner in empty states to indicate a loading or processing state.

Preview Code

### Processing your request

Please wait while we process your request. Do not refresh the page.

Cancel

    <div class="flex min-w-0 flex-1 flex-col items-center justify-center gap-6 rounded-lg p-6 text-center text-balance md:p-12 text-neutral-800 dark:text-neutral-300">
      <header class="flex max-w-sm flex-col items-center gap-3 text-center">
        <div class="mb-2 bg-muted text-foreground flex size-10 shrink-0 items-center justify-center rounded-lg [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-6">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin size-4"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
        </div>
        <h3 class="text-lg font-semibold tracking-tight">Processing your request</h3>
        <p class="text-muted-foreground text-sm/relaxed">Please wait while we process your request. Do not refresh the page.</p>
      </header>
      <section class="flex w-full max-w-sm min-w-0 flex-col items-center gap-3">
        <button class="btn-sm-outline">Cancel</button>
      </section>
    </div>

### [Item](#example-item)

Preview Code

### Downloading...

129 MB / 1000 MB

Cancel

    <article class="group/item flex items-center border text-sm rounded-md transition-colors [a]:hover:bg-accent/50 [a]:transition-colors duration-100 flex-wrap outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] border-border p-4 gap-4">
      <div class="flex shrink-0 items-center justify-center gap-2 self-start [&_svg]:pointer-events-none size-8 border rounded-md bg-muted [&_svg:not([class*='size-'])]:size-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" role="status" aria-label="Loading" class="animate-spin size-4 text-muted-foreground"><path d="M21 12a9 9 0 1 1-6.219-8.56" /></svg>
      </div>
      <div class="flex flex-1 flex-col gap-1">
        <h3 class="flex w-fit items-center gap-2 text-sm leading-snug font-medium">Downloading...</h3>
        <p class="text-muted-foreground line-clamp-2 text-sm leading-normal font-normal text-balance [&>a:hover]:text-primary [&>a]:underline [&>a]:underline-offset-4">129 MB / 1000 MB</p>
      </div>
      <button class="btn-sm-outline self-start">Cancel</button>
      <footer class="flex basis-full items-center justify-between gap-2">
        <div class="bg-primary/20 relative h-2 w-full overflow-hidden rounded-full">
          <div id="demo-progress" class="bg-primary h-full w-full flex-1 transition-all" style="width: 13%"></div>
        </div>
      </footer>
    </article>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Size](#example-size)
  - [Color](#example-color)
  - [Button](#example-button)
  - [Badge](#example-badge)
  - [Input Group](#example-input-group)
  - [Empty](#example-empty)
  - [Item](#example-item)

---

# Switch

A control that allows the user to toggle between checked and not checked.

Preview Code

Airplane Mode

    <label class="label">
      <input type="checkbox" name="switch" role="switch" class="input">
      Airplane Mode
    </label>

## [Usage](#usage)

You can style a `<input type="checkbox">` element as a switch by adding a `role="switch"` attribute, and adding the `input` class or having a parent with the `form` class ([read more about form](/components/form)).

    <input type="checkbox" role="switch" class="input">

## [Examples](#examples)

### [Form](#example-form)

Preview Code

### Email Notifications

Marketing emails

Receive emails about new products, features, and more.

Marketing emails

Receive emails about new products, features, and more.

    <form class="form grid gap-4">
      <h3 class="text-lg font-medium">Email Notifications</h3>
      <div class="gap-2 flex flex-row items-start justify-between rounded-lg border p-4 shadow-xs">
        <div class="flex flex-col gap-0.5">
          <label for="demo-form-switch" class="leading-normal">Marketing emails</label>
          <p class="text-muted-foreground text-sm">Receive emails about new products, features, and more.</p>
        </div>
        <input type="checkbox" id="demo-form-switch" role="switch">
      </div>
      <div class="gap-2 flex flex-row items-start justify-between rounded-lg border p-4 shadow-xs">
        <div class="flex flex-col gap-0.5 opacity-60">
          <label for="demo-form-switch-disabled" class="leading-normal">Marketing emails</label>
          <p class="text-muted-foreground text-sm">Receive emails about new products, features, and more.</p>
        </div>
        <input type="checkbox" id="demo-form-switch-disabled" role="switch" disabled>
      </div>
    </form>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Form](#example-form)

---

# Table

A responsive table component.

Preview Code

A list of your recent invoices.

Invoice

Status

Method

Amount

INV001

Paid

Credit Card

$250.00

INV002

Pending

PayPal

$150.00

INV003

Unpaid

Bank Transfer

$350.00

INV004

Paid

Paypal

$450.00

INV005

Paid

Credit Card

$550.00

INV006

Pending

Bank Transfer

$200.00

INV007

Unpaid

Credit Card

$300.00

Total

$2,500.00

    <div class="overflow-x-auto">
    <table class="table">
      <caption>A list of your recent invoices.</caption>
      <thead>
        <tr>
          <th>Invoice</th>
          <th>Status</th>
          <th>Method</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="font-medium">INV001</td>
          <td>Paid</td>
          <td>Credit Card</td>
          <td class="text-right">$250.00</td>
        </tr>
        <tr>
          <td class="font-medium">INV002</td>
          <td>Pending</td>
          <td>PayPal</td>
          <td class="text-right">$150.00</td>
        </tr>
        <tr>
          <td class="font-medium">INV003</td>
          <td>Unpaid</td>
          <td>Bank Transfer</td>
          <td class="text-right">$350.00</td>
        </tr>
        <tr>
          <td class="font-medium">INV004</td>
          <td>Paid</td>
          <td>Paypal</td>
          <td class="text-right">$450.00</td>
        </tr>
        <tr>
          <td class="font-medium">INV005</td>
          <td>Paid</td>
          <td>Credit Card</td>
          <td class="text-right">$550.00</td>
        </tr>
        <tr>
          <td class="font-medium">INV006</td>
          <td>Pending</td>
          <td>Bank Transfer</td>
          <td class="text-right">$200.00</td>
        </tr>
        <tr>
          <td class="font-medium">INV007</td>
          <td>Unpaid</td>
          <td>Credit Card</td>
          <td class="text-right">$300.00</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">Total</td>
          <td class="text-right">$2,500.00</td>
        </tr>
      </tfoot>
    </table>
    </div>

## [Usage](#usage)

Simply add the `table` class to your table element.

    <table class="table">
      <!-- Content of your table -->
    </table>

#### On This Page

- [Usage](#usage)

---

# Tabs

A set of layered sections of content—known as tab panels—that are displayed one at a time.

Preview Code

Account Password

## Account

Make changes to your account here. Click save when you're done.

Name

Username

Save changes

## Password

Change your password here. After saving, you'll be logged out.

Current password

New password

Save Password

    <div class="tabs w-full" id="demo-tabs-with-panels">
      <nav role="tablist" aria-orientation="horizontal" class="w-full">
        <button type="button" role="tab" id="demo-tabs-with-panels-tab-1" aria-controls="demo-tabs-with-panels-panel-1" aria-selected="true" tabindex="0">Account</button>

        <button type="button" role="tab" id="demo-tabs-with-panels-tab-2" aria-controls="demo-tabs-with-panels-panel-2" aria-selected="false" tabindex="0">Password</button>
      </nav>

      <div role="tabpanel" id="demo-tabs-with-panels-panel-1" aria-labelledby="demo-tabs-with-panels-tab-1" tabindex="-1" aria-selected="true">
        <div class="card">
          <header>
            <h2>Account</h2>
            <p>Make changes to your account here. Click save when you're done.</p>
          </header>
          <section>
            <form class="form grid gap-6">
              <div class="grid gap-3">
                <label for="demo-tabs-account-name">Name</label>
                <input type="text" id="demo-tabs-account-name" value="Pedro Duarte" />
              </div>
              <div class="grid gap-3">
                <label for="demo-tabs-account-username">Username</label>
                <input type="text" id="demo-tabs-account-username" value="@peduarte" />
              </div>
            </form>
          </section>
          <footer>
            <button type="button" class="btn">Save changes</button>
          </footer>
        </div>
      </div>

      <div role="tabpanel" id="demo-tabs-with-panels-panel-2" aria-labelledby="demo-tabs-with-panels-tab-2" tabindex="-1" aria-selected="false" hidden>
        <div class="card">
          <header>
            <h2>Password</h2>
            <p>Change your password here. After saving, you'll be logged out.</p>
          </header>
          <section>
            <form class="form grid gap-6">
              <div class="grid gap-3">
                <label for="demo-tabs-password-current">Current password</label>
                <input type="password" id="demo-tabs-password-current" />
              </div>
              <div class="grid gap-3">
                <label for="demo-tabs-password-new">New password</label>
                <input type="password" id="demo-tabs-password-new" />
              </div>
            </form>
          </section>
          <footer>
            <button type="button" class="btn">Save Password</button>
          </footer>
        </div>
      </div>
    </div>

## [Usage](#usage)

#### [Step 1: Include the JavaScript files](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/tabs.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli) [tabs.js](https://github.com/hunvreus/basecoat/blob/main/src/js/tabs.js)

#### [Step 2: Add your select HTML](#usage-html-js-2)

    <div class="tabs w-full" id="demo-tabs-with-panels">
      <nav role="tablist" aria-orientation="horizontal" class="w-full">
        <button type="button" role="tab" id="demo-tabs-with-panels-tab-1" aria-controls="demo-tabs-with-panels-panel-1" aria-selected="true" tabindex="0">Account</button>

        <button type="button" role="tab" id="demo-tabs-with-panels-tab-2" aria-controls="demo-tabs-with-panels-panel-2" aria-selected="false" tabindex="0">Password</button>
      </nav>

      <div role="tabpanel" id="demo-tabs-with-panels-panel-1" aria-labelledby="demo-tabs-with-panels-tab-1" tabindex="-1" aria-selected="true">
        <div class="card">
          <header>
            <h2>Account</h2>
            <p>Make changes to your account here. Click save when you're done.</p>
          </header>
          <section>
            <form class="form grid gap-6">
              <div class="grid gap-3">
                <label for="demo-tabs-account-name">Name</label>
                <input type="text" id="demo-tabs-account-name" value="Pedro Duarte" />
              </div>
              <div class="grid gap-3">
                <label for="demo-tabs-account-username">Username</label>
                <input type="text" id="demo-tabs-account-username" value="@peduarte" />
              </div>
            </form>
          </section>
          <footer>
            <button type="button" class="btn">Save changes</button>
          </footer>
        </div>
      </div>

      <div role="tabpanel" id="demo-tabs-with-panels-panel-2" aria-labelledby="demo-tabs-with-panels-tab-2" tabindex="-1" aria-selected="false" hidden>
        <div class="card">
          <header>
            <h2>Password</h2>
            <p>Change your password here. After saving, you'll be logged out.</p>
          </header>
          <section>
            <form class="form grid gap-6">
              <div class="grid gap-3">
                <label for="demo-tabs-password-current">Current password</label>
                <input type="password" id="demo-tabs-password-current" />
              </div>
              <div class="grid gap-3">
                <label for="demo-tabs-password-new">New password</label>
                <input type="password" id="demo-tabs-password-new" />
              </div>
            </form>
          </section>
          <footer>
            <button type="button" class="btn">Save Password</button>
          </footer>
        </div>
      </div>
    </div>

#### [HTML structure](#usage-html-js-3)

`<div class="tabs">`

Wraps around the entire component.

`<nav role="tablist" aria-orientation="horizontal">`

The tablist containing the tab buttons

`<button role="tab" id="{ TAB_ID }" aria-controls="{ PANEL_ID }" aria-selected="false" tabindex="0">`

The tab button. When active, the `aria-selected` attribute is set to `true`. `tabindex="0"` is required for keyboard navigation.

`<div role="tabpanel" id="{ PANEL_ID }" aria-labelledby="{ TAB_ID }" tabindex="-1" aria-selected="false">`

The tab panel. When active, the `aria-selected` attribute is set to `true`.

#### [JavaScript events](#usage-html-js-4)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on itself.

### [Jinja and Nunjucks](#usage-macro)

You can use the `tabs()` Nunjucks or Jinja macro for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/tabs.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/tabs.njk)

    {% set account_panel %}
    <div class="card">
      <header>
        <h2>Account</h2>
        <p>Make changes to your account here. Click save when you're done.</p>
      </header>
      <section>
        <form class="form grid gap-6">
          <div class="grid gap-3">
            <label for="demo-tabs-account-name">Name</label>
            <input type="text" id="demo-tabs-account-name" value="Pedro Duarte" />
          </div>
          <div class="grid gap-3">
            <label for="demo-tabs-account-username">Username</label>
            <input type="text" id="demo-tabs-account-username" value="@peduarte" />
          </div>
        </form>
      </section>
      <footer>
        <button type="button" class="btn">Save changes</button>
      </footer>
    </div>
    {% endset %}

    {% set password_panel %}
    <div class="card">
      <header>
        <h2>Password</h2>
        <p>Change your password here. After saving, you'll be logged out.</p>
      </header>
      <section>
        <form class="form grid gap-6">
          <div class="grid gap-3">
            <label for="demo-tabs-password-current">Current password</label>
            <input type="password" id="demo-tabs-password-current" />
          </div>
          <div class="grid gap-3">
            <label for="demo-tabs-password-new">New password</label>
            <input type="password" id="demo-tabs-password-new"/>
          </div>
        </form>
      </section>
      <footer>
        <button type="button" class="btn">Save Password</button>
      </footer>
    </div>
    {% endset %}

    {% set tabsets_demo = [
    { tab: "Account", panel: account_panel },
    { tab: "Password", panel: password_panel }
    ] %}

    {{ tabs(
      id='demo-tabs-with-panels',
      tabsets=tabsets_demo,
      main_attrs={ "class": "w-full" },
      tablist_attrs={ "class": "w-full" }
    ) }}

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-default)
    - [Step 1: Include the JavaScript files](#usage-html-js-1)
    - [Step 2: Add your select HTML](#usage-html-js-2)
    - [HTML structure](#usage-html-js-3)
    - [JavaScript events](#usage-html-js-4)
  - [Jinja and Nunjucks](#usage-macro)

---

# Textarea

Displays a form textarea or a component that looks like a textarea.

Preview Code

    <textarea class="textarea" placeholder="Type your message here"></textarea>

## Usage

Simply add the `textarea` class to your `<textarea>` element or have a parent with the `form` class ([read more about form](/components/form)). You can also set the `aria-invalid` attribute to `true` to make the textarea invalid.

    <textarea class="textarea" placeholder="Type your message here"></textarea>

## [Examples](#examples)

Preview Code

    <textarea class="textarea" placeholder="Type your message here"></textarea>

### [Invalid](#example-invalid)

Preview Code

    <textarea class="textarea" placeholder="Type your message here" aria-invalid="true"></textarea>

### [Disabled](#example-disabled)

Preview Code

    <textarea class="textarea" placeholder="Type your message here" disabled></textarea>

### [With label](#example-with-label)

Preview Code

Label

    <div class="grid gap-3">
      <label for="textarea-with-label" class="label">Label</label>
      <textarea id="textarea-with-label" class="textarea" placeholder="Type your message here"></textarea>
    </div>

### [With text](#example-with-text)

Preview Code

Label

Type your message and press enter to send.

    <div class="grid gap-3">
      <label for="textarea-with-label" class="label">Label</label>
      <textarea id="textarea-with-label" class="textarea" placeholder="Type your message here"></textarea>
      <p class="text-muted-foreground text-sm">Type your message and press enter to send.</p>
    </div>

### [With button](#example-with-button)

Preview Code

Submit

    <div class="grid gap-3">
      <textarea id="textarea-with-label" class="textarea" placeholder="Type your message here"></textarea>
      <button type="submit" class="btn">Submit</button>
    </div>

### [Form](#example-form)

Preview Code

Bio

You can @mention other users and organizations.

Submit

    <form class="form space-y-6">
      <div class="grid gap-3">
        <label for="textarea-form" class="label">Bio</label>
        <textarea id="textarea-form" placeholder="Tell us a bit about yourself"></textarea>
        <p class="text-muted-foreground text-sm">You can @mention other users and organizations.</p>
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Default](#example-default)
  - [Invalid](#example-invalid)
  - [Disabled](#example-disabled)
  - [With label](#example-with-label)
  - [With text](#example-with-text)
  - [With button](#example-with-button)
  - [Form](#example-form)

---

# Theme Switcher

A component that allows the user to switch between light and dark mode.

## There is no dedicated theme switcher component in Basecoat.

Instead, we offer a short JavaScript `<script>` block you can insert in the `<head>` of your page.

Preview Code

    <button
      type="button"
      aria-label="Toggle dark mode"
      data-tooltip="Toggle dark mode"
      data-side="bottom"
      onclick="document.dispatchEvent(new CustomEvent('basecoat:theme'))"
      class="btn-icon-outline size-8"
    >
      <span class="hidden dark:block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4" /><path d="M12 2v2" /><path d="M12 20v2" /><path d="m4.93 4.93 1.41 1.41" /><path d="m17.66 17.66 1.41 1.41" /><path d="M2 12h2" /><path d="M20 12h2" /><path d="m6.34 17.66-1.41 1.41" /><path d="m19.07 4.93-1.41 1.41" /></svg></span>
      <span class="block dark:hidden"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" /></svg></span>
    </button>

## [Usage](#usage)

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript script](#usage-html-js-1)

Insert the following JavaScript block right at the beginning of the `<head>` your page. We do this instead of using a separate file to ensure the theme is defined before the page loads, avoiding a flash of unstyled or mist-styled content.

    <script>
      (() => {
        try {
          const stored = localStorage.getItem('themeMode');
          if (stored ? stored === 'dark'
                      : matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
          }
        } catch (_) {}

        const apply = dark => {
          document.documentElement.classList.toggle('dark', dark);
          try { localStorage.setItem('themeMode', dark ? 'dark' : 'light'); } catch (_) {}
        };

        document.addEventListener('basecoat:theme', (event) => {
          const mode = event.detail?.mode;
          apply(mode === 'dark' ? true
                : mode === 'light' ? false
                : !document.documentElement.classList.contains('dark'));
        });
      })();
    </script>

#### [Step 2: Add your switcher](#usage-html-js-2)

To change the theme, you need to dispatch a `basecoat:theme` event:

    <button
      type="button"
      aria-label="Toggle dark mode"
      data-tooltip="Toggle dark mode"
      data-side="bottom"
      onclick="document.dispatchEvent(new CustomEvent('basecoat:theme'))"
      class="btn-icon-outline size-8"
    >
      <span class="hidden dark:block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4" /><path d="M12 2v2" /><path d="M12 20v2" /><path d="m4.93 4.93 1.41 1.41" /><path d="m17.66 17.66 1.41 1.41" /><path d="M2 12h2" /><path d="M20 12h2" /><path d="m6.34 17.66-1.41 1.41" /><path d="m19.07 4.93-1.41 1.41" /></svg></span>
      <span class="block dark:hidden"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" /></svg></span>
    </button>

#### [JavaScript events](#usage-html-js-3)

`basecoat:theme`

By default, the event will toggle the theme, but you can also add a `mode` to the detail to set the theme explicitly:

    <!-- Toggles the theme -->
    <button type="button" onclick="document.dispatchEvent(new CustomEvent('basecoat:theme'));">Toggle theme</button>
    <!-- Sets the theme to dark -->
    <button type="button" onclick="document.dispatchEvent(new CustomEvent('basecoat:theme', { detail: { mode: 'dark' } }));">Set dark theme</button>

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1: Include the JavaScript script](#usage-html-js-1)
    - [Step 2: Add your switcher](#usage-html-js-2)
    - [JavaScript events](#usage-html-js-3)

---

# Toast

A succinct message that is displayed temporarily.

Preview Code

Toast from backend (with HTMX)

    <button
      class="btn-outline"
      hx-trigger="click"
      hx-get="/fragments/toast/success"
      hx-target="#toaster"
      hx-swap="beforeend"
    >
      Toast from backend (with HTMX)
    </button>

Preview Code

Toast from front-end

    <button
      class="btn-outline"
      onclick="document.dispatchEvent(new CustomEvent('basecoat:toast', {
        detail: {
          config: {
            category: 'success',
            title: 'Success',
            description: 'A success toast called from the front-end.',
            cancel: {
              label: 'Dismiss'
            }
          }
        }
      }))"
    >
      Toast from front-end
    </button>

## [Usage](#usage)

### [HTML + JavaScript](#usage-html-js)

#### [Step 1: Include the JavaScript file](#usage-html-js-1)

You can either [include the JavaScript file for all the components](/installation/#install-cdn-all), or just the one for this component by adding this to the `<head>` of your page:

    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/basecoat.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/basecoat-css@0.3.9/dist/js/toast.min.js" defer></script>

[Components with JavaScript](/installation/#install-js) [Use the CLI](/installation/#install-cli) [toast.js](https://github.com/hunvreus/basecoat/blob/main/src/js/toast.js)

#### [Step 2: Add the toaster HTML](#usage-html-js-2)

Toasts are displayed in a parent element, the "toaster". Add this to this to at the end of your `<body>`:

    <div id="toaster" class="toaster"></div>

You can set up the alignment of the toaster using the `data-align` attribute: `data-align="start"`, `data-align="center"`, or `data-align="end"` (default to `data-align="end"`).

#### [Step 3: Add your toasts](#usage-html-js-3)

If you decide to server-render your toasts, or load them using asynchronoulsy with something like HTMX, you can just add the toast's markup to the toaster:

    <div id="toaster" class="toaster">
      <div class="toast" role="status" aria-atomic="true" aria-hidden="false" data-category="success">
        <div class="toast-content">
          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" />
            <path d="m9 12 2 2 4-4" />
          </svg>

          <section>
            <h2>Success</h2>
            <p>A success toast called from the front-end.</p>
          </section>

          <footer>
            <button type="button" class="btn" data-toast-action>Dismiss</button>
          </footer>
        </div>
      </div>
    </div>

[HTML structure](#usage-html-js-5)

If you need to create a toast from the front-end, you can dispatch a custom `basecoat:toast` event as such:

    <button
      class="btn-outline"
      onclick="document.dispatchEvent(new CustomEvent('basecoat:toast', {
        detail: {
          config: {
            category: 'success',
            title: 'Success',
            description: 'A success toast called from the front-end.',
            cancel: {
              label: 'Dismiss'
            }
          }
        }
      }))">
      Toast from front-end
    </button>

[Toast config object](#usage-html-js-6)

#### [HTML structure](#usage-html-js-4)

`<div class="toast">`

Wraps around the toast component. You can add a `data-duration` attribute to set the duration of the toast in milliseconds (e.g. `data-duration="5000"` for 5 seconds). If not provided, the default duration is 3000ms (3 seconds) or 5000ms (5 seconds) for `error` toasts.

`<div class="toast-content">`

The content of the toast.

`<svg aria-hidden="true">` Optional

The toast's icon.

`<section>`

The toast's message.

`<h2>`

The toast's title.

`<p>` Optional

The toast's description.

`<footer>` Optional

The toast's buttons. When clicked, the toast will be closed (unless the button's `onclick` is set to `e.preventDefault()`).

`<button type="button" class="btn" onclick="{ ONCLICK }">` or `<a href="{ URL }" class="btn" >` Optional

The toast's action button. This can either be a link (with a `href` attribute) or a button (with an `onclick` attribute).

`<button type="button" class="btn-outline" onclick="{ ONCLICK }">` Optional

The toast's cancel button (with an optional `onclick` attribute).

#### [JavaScript events](#usage-html-js-5)

`basecoat:initialized`

Once the component is fully initialized, it dispatches a custom (non-bubbling) `basecoat:initialized` event on the `toaster` element.

`basecoat:toast`

The `toaster` listens for `basecoat:toast` events on `document` to create toasts. The event's `detail` object must contain a `config` object (see [JavaScript config object](#usage-html-js-6) below).

#### [Toast config object](#usage-html-js-6)

`duration` Optional

The duration of the toast in milliseconds. If not provided, the default duration is 3000ms (3 seconds) or 5000ms (5 seconds) for `error` toasts.

`category` Optional

Category of the toast, either `success`, `info`, `warning`, or `error`.

`title`

The title of the toast.

`description` Optional

The description of the toast.

`action` Optional

Action button.

`label` Optional

The label of the cancel button. If not provided, the default label is "Dismiss".

`onclick` Optional

The onclick of the cancel button.

`cancel` Optional

Cancel button.

`label` Optional

The label of the cancel button. If not provided, the default label is "Dismiss".

`onclick` Optional

The onclick of the cancel button.

### [Jinja and Nunjucks](#usage-macro)

You can use the `toaster()` and `toast()` Nunjucks or Jinja macros for this component.

[Use Nunjucks or Jinja macros](/installation/#install-macros) [Jinja macro](https://github.com/hunvreus/basecoat/blob/main/src/jinja/toast.html.jinja) [Nunjucks macro](https://github.com/hunvreus/basecoat/blob/main/src/nunjucks/toast.njk)

toaster() toast()

    {% from "toast.njk" import toaster %}
    {{ toaster(
      toasts=[
        {
          type: "success",
          title: "Success",
          description: "A success toast called from the front-end.",
          action: { label: "Dismiss", click: "close()" }
        },
        {
          type: "info",
          title: "Info",
          description: "An info toast called from the front-end.",
          action: { label: "Dismiss", click: "close()" }
        }
      ]
    ) }}

    {% from "toast.njk" import toast %}
    {{ toast(
      title="Event has been created",
      description="Sunday, December 03, 2023 at 9:00 AM",
      cancel={ label: "Undo" }
    ) }}

#### On This Page

- [Usage](#usage)
  - [HTML + JavaScript](#usage-html-js)
    - [Step 1: Include the JavaScript file](#usage-html-js-1)
    - [Step 2: Add the toaster HTML](#usage-html-js-2)
    - [Step 3: Add your toasts](#usage-html-js-3)
    - [HTML structure](#usage-html-js-4)
    - [JavaScript events](#usage-html-js-5)
    - [Toast config object](#usage-html-js-6)
  - [Jinja and Nunjucks](#usage-macro)

---

# Tooltip

A popup that displays information related to an element when the element receives keyboard focus or the mouse hovers over it.

Preview Code

Hover

    <button class="btn-outline" data-tooltip="Add to library">Hover</button>

## Usage

On any element, set the value of the `data-tooltip` attribute to the text you want to display in the tooltip. Additionally, you can set:

- `data-side` attribute to `top`, `bottom`, `left`, or `right` to change the side of the tooltip.
- `data-align` attribute to `start`, `center`, or `end` to change the alignment of the tooltip.

  <button class="btn-outline" data-tooltip="Tooltip text" data-side="bottom" data-align="center">Bottom left</button>

## [Examples](#examples)

### [Default](#example-default)

Preview Code

Default

    <button class="btn-outline" data-tooltip="Default tooltip">Default</button>

### [Right](#example-right)

Preview Code

Right

    <button class="btn-outline" data-tooltip="Right side tooltip" data-side="right">Right</button>

### [Bottom + Start](#example-bottom-start)

Preview Code

Bottom + Start

    <button class="btn-outline" data-tooltip="Bottom side and start aligned tooltip" data-side="bottom" data-align="start">Bottom + Start</button>

#### On This Page

- [Usage](#usage)
- [Examples](#examples)
  - [Default](#example-default)
  - [Right](#example-right)
  - [Bottom + Start](#example-bottom-start)
