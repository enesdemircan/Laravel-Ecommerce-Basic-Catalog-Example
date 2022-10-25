<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Basic Ecommerce Api Service

Laravel , Docker ,Laravel Sail ,Mysql , Postman

-

 - php artisan sail:install
 - Install mysql
 - alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
 - ./vendor/bin/sail up -d OR sail up -d
 - sail php artisan migrate
 - sail php artisan db:seed
 - sail php artisan passport:install


POST /api/login/
	-email:info@enesdemircan.com
	-password:123456
	-password_confirmation:123456


CART-/

GET /api/cart

POST /api/cart
	-product_id
	-Piece

PRODUCTS-/

GET  /api/products

GET   /api/products/{product id}

POST /api/products/
	-name
	-price
	-discount_rate
	-category_id

PUT /api/products/{product id}

DELETE /api/products/{product id}


FAVORİTES-/

GET /api/favorites

POST /api/favorites
	-user_id
	-product_id

DELETE /api/favorites/{product id}

CATEGORİES-/

GET /api/categories

POST /api/categories
	-name
	-title
	-slug
	-description
	-icon
	-color
DELETE /api/categories/{category id}

ORDERS-/

GET /api/orders

POST /api/orders // turns the cart into an order and a virtual payment is made

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
