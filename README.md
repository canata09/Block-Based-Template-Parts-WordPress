<table>
  <tr>
    <td><img src="static/icon-256x256.gif" alt="Icon" width="50"></td>
    <td>
      <h1>Block Based Template Parts WordPress</h1>
      <p>Description of the product.</p>
    </td>
  </tr>
</table>

## Banner

![Banner Image](static/plugin_logo.png)

## Screenshots

![Screenshot 1](plugin_logo.png)
![Screenshot 2](plugin_logo.png)

## Overview

Write a brief overview of your product here.

## Features

- Feature 1
- Feature 2
- Feature 3
- ...

## Requirements

Definition Javascript WordPress Theme Parts is the records.

## Instructions

Provide step-by-step instructions on how to use your product. You might want to break this down into sub-sections if there are different parts to your product.

### Sub-section 1

Write a brief overview of your product here.

### Sub-section 2

Write a brief overview of your product here.

# Welcome to the Block Based Template Parts WordPress

![Plugin Logo](plugin_logo.png)

👋 Welcome to the official repository of the Block Based Template Parts WordPress! We're thrilled to introduce you to our powerful and versatile software plugin, meticulously crafted by our talented team of software engineers. Whether you're a developer, designer, or an enthusiast, this plugin aims to enhance your experience by bringing a new dimension to your workflow.

## What is the Block Based Template Parts WordPress ?

Block Based Template Parts WordPress is the "name" column in the "wp_terms" table represented in the WordPress database records.

## Getting Started

"Header and Footer", which are block-based templating starter pages:

1. **Installation:** Added appropriately in "page.php".
2. **Activation:** Use your provided license key to activate the plugin and unlock its full potential.
3. **Exploration:** Dive into the intuitive interface, explore the features, and let your creativity run wild.

## Installation

1. **Setting the Groundwork:** Simply download the plugin from the official website or install it directly from your preferred IDE's marketplace.
```
Adding theme.json
<?php
add_action( 'after_setup_theme', 'tt1_block_parts_setup' );

function tt1_block_parts_setup() {
    add_theme_support( 'block-template-parts' );
}
```
2. **Go live in theme:** Open the theme’s header.php template and find this line of code.
```
<?php block_template_part( 'header' ); ?>
```
3. **Disabling template editor:** Use your provided license key to activate the plugin and unlock its full potential.
```
remove_theme_support( 'block-templates' );
```
4. **Using with Bootstrap:** Dive into the "Hero" interface, explore the features, and let your creativity run wild.

## Documentation
https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/ <br />
https://developer.wordpress.org/themes/advanced-topics/theme-json/ <br />
For in-depth information about using the XYZ Plugin, check out our [Documentation](documentation.md) page.
```
{
    "version": 2,
    "settings": {
        "layout": {
            "contentSize": "var( --responsive--default-width )",
            "wideSize": "var( --responsive--alignwide-width )"
        },
        "spacing": {
            "blockGap": true
        }
    }
}
```

