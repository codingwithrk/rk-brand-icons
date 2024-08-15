<h1 align="center">RK BRAND ICONS</h1>

<p align="center">
    <a>
        <img alt="Packagist License" src="https://img.shields.io/packagist/l/codingwithrk/rk-brand-icons">
    </a>
    <a>
        <img alt="Packagist Version" src="https://img.shields.io/packagist/v/codingwithrk/rk-brand-icons">
    </a>
    <a>
        <img alt="Packagist Dependency Version" src="https://img.shields.io/packagist/dependency-v/codingwithrk/rk-brand-icons/php">
    </a>
    <a>
        <img alt="Packagist Dependency Version" src="https://img.shields.io/packagist/dependency-v/codingwithrk/rk-brand-icons/laravel%2Fframework">
    </a>
</p>

## Introduction

Hello fellow developers, using this package you can display Branded Icons.

### How to Install

```bash
composer require codingwithrk/rk-brand-icons
````

### How to use

```bladehtml
<x-rk-icons::icon name="dotenv" />
```
Add color to icon

```bladehtml
<x-rk-icons::icon name="dotenv" color="#512BD4"/>
```

Add width & height (default width & height is 32x32)

```bladehtml
<x-rk-icons::icon name="dotenv" color="#512BD4" width="40" height="40"/>
```

## License

This is open-sourced software licensed under the [MIT license](/LICENSE).