# URL Slug Generator
![Packagist License](https://img.shields.io/packagist/l/darkotodoric/url-slug-generator)
![Packagist Version](https://img.shields.io/packagist/v/darkotodoric/url-slug-generator)

URL Slug Generator simplifies the process of creating clean and SEO-friendly URLs

## Installation

Install the latest version with:

```bash
$ composer require darkotodoric/url-slug-generator
```

## Usage

```php
<?php

require_once 'vendor/autoload.php';

$slugGenerator = new SlugGenerator();

$slug = $slugGenerator->make('Golden Globes 2024: Oppenheimer and Succession sweep up');
// golden-globes-2024-oppenheimer-and-succession-sweep-up

$slug = $slugGenerator->make('I’ve looked through LG’s new transparent OLED TV, and seen something special!');
// i-ve-looked-through-lg-s-new-transparent-oled-tv-and-seen-something-special
```

## Contributing
Contributions are welcome! Feel free to open issues or submit pull requests to improve this project.
