<table>
  <tr>
    <td><img src="static/icon-256x256.gif" alt="Icon" width="50"></td>
    <td>
      <h1>Block Based Template Parts WordPress</h1>
      <p>Block Based Template Parts WordPress is the "name" column in the "wp_terms" table represented in the WordPress database records.</p>
    </td>
  </tr>
</table>

## Banner

![Banner Image](static/plugin_logo.png)

## Instructions

"Header and Footer", which are block-based templating starter pages:

1. **Installation:** Added appropriately in "page.php".
2. **Activation:** Use your provided license key to activate the plugin and unlock its full potential.
3. **Exploration:** Dive into the intuitive interface, explore the features, and let your creativity run wild.

### Sub-section 1


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

### Adding and using custom settings in theme.json

Let’s add a theme.json file to the WordPress theme.

To do this, switch to a code editor like Visual Code Studio and create a new file in the root of the theme folder called theme.json.

Next use the curly braces to start a new JSON object, and add the $schema and version keys, and their respective values.

```
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 2
}
```
If you refresh the page in the block editor, the first thing you’ll notice is that the editor content is slightly out of alignment.

```
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 2,   
    "settings": {
        "layout": {
            "contentSize": "650"
        }
    }
}
```
This is because the by adding a theme.json to the theme, the default theme.json that ships with WordPress is now activated. That theme.json does not configure the settings.layout.contentSize setting, so you need to create it.

### Create custom templates

To begin customizing the theme.json file, open the file in a text editor of your choice. To define a custom template, you’ll need to provide a name, title, and optionally specify the post type it applies to. Then, add the following code to the file:

```
{

“version”: 1,

“customTemplates”: [

{

“name”: “custom-template-example”,

“title”: “The Custom Template Title”,

“postTypes”: [

“page”,

“post”,

“my-cpt”

]

}

]

}
```

### Create custom template parts

By defining the area term in theme.json, you establish a clear and standardized way of utilizing template parts throughout your theme. This approach promotes reusability and simplifies the management of template parts, as any changes made to the area term in theme.json will automatically apply to all instances of that template part.

```
{

“version”: 1,

“templateParts”: [

{

“name: “my-template-part”,

“title”: “Footer”,

“area”: “footer”

}

]

}
```
