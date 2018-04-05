# WP Swift: ACF Social Media Profiles

### Settings

Go the **Social Media** page in the WordPress admin area and add social media profiles.

### Usage

Place this function where ever you want to output the icons.
```php
<?php 
if (function_exists('wp_swift_get_social_media')) {
	echo wp_swift_get_social_media();
}
```

### Sass Variables

Use the these variables to change hex colour.
```sass
$twitter: #00aced;
$facebook: #3b5998;
$linkedin: #007bb6;
$youtube: #bb0000;
$google-plus: #dd4b39;
```