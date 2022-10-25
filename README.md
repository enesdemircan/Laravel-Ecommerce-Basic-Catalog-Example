<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About Laravel Basic Ecommerce Api Service

Laravel , Docker ,Laravel Sail ,Mysql , Postman

 - php artisan sail:install
 - alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
 - ./vendor/bin/sail up -d OR sail up -d
 - sail php artisan migrate
 - sail php artisan db:seed
 - sail php artisan passport:install


# Login and Register

POST /api/register/
    -name:enes
	-email:info@enesdemircan.com
	-password:123456
	-password_confirmation:123456


POST /api/login/
- email:info@enesdemircan.com
- password:123456
- password_confirmation:123456


# Cart

GET /api/cart

POST /api/cart
- product_id
- Piece

# Products

GET  /api/products

GET   /api/products/{productid}

POST /api/products/
- name
- price
- discount_rate
- category_id

PUT /api/products/{product id}

DELETE /api/products/{productid}


# Favorites

GET /api/favorites

POST /api/favorites
- user_id
- product_id

DELETE /api/favorites/{productid}

# Categories

GET /api/categories

POST /api/categories
- name
- title
- slug
- description
- icon
- color
DELETE /api/categories/{categoryid}

# Orders

GET /api/orders

POST /api/orders // turns the cart into an order and a virtual payment is made

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
