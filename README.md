# api-php-lib
PHP Library (BETA) to use the Trackin API. Get a quickstart to use our api with this library.

All the api request are already there, you just need to call them!

**Before anything, you need an APIClient to specify your api key and subscription id:**

```php
$apiClient = new APIClient("trackinExt-2U-DuMMy-DaAOp-keY-bSUYdvQJ-here-NGArXalaFo", 476);
```
(this is an example, not live credentials)

Once this is set up, you can make your requests.

Creating a delivery is really easy, see the `deliveryCreationExample.php` file!

The only required information is the contact you want to deliver. All the rest is optional!

*Note that this library is still in Beta and can contain some small little bugs.*

*Please contact us at dev@trackin.co if you encounter any issue*

[Trackin](http://gotrackin.com)
