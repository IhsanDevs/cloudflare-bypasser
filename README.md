<h1 align="center">Welcome to cloudflare-bypasser 👋</h1>
<p>
  <a href="https://www.npmjs.com/package/cloudflare-bypasser" target="_blank">
    <img alt="Version" src="https://img.shields.io/npm/v/cloudflare-bypasser.svg">
  </a>
  <a href="#" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-yellow.svg" />
  </a>
  <a href="https://twitter.com/IhsanDevs" target="_blank">
    <img alt="Twitter: IhsanDevs" src="https://img.shields.io/twitter/follow/IhsanDevs.svg?style=social" />
  </a>
</p>

> Bypass CLoudFlare easily. Forget Human Verification now.

## Install

```sh
composer require Ihsandevs/cloudflare-bypasser
```
## Usage
```php
<?php 
use Ihsandevs\CloudflareBypasser\Bypass;


require __DIR__ . '/vendor/autoload.php';

$bypass = new Bypass('https://ihsandevs.com');

echo $bypass->getRealContent(); // will return HTML content of the page
```
## Author

👤 **Ihsan Devs**

* Website: https://ihsandevs.com
* Twitter: [@IhsanDevs](https://twitter.com/IhsanDevs)
* Github: [@IhsanDevs](https://github.com/IhsanDevs)

## Show your support

Give a ⭐️ if this project helped you!

***
_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_