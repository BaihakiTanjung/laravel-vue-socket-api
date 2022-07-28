# laravel-vue-socket-api

Project research tentang socket.io, dengan menggunakan Laravel sebagai Backend dan Vue sebagai Frontend, dan secara terpisah.

Laravel

# Server Requirement
- Redis `sudo apt install redis-server`
- Composer [here](https://getcomposer.org/download/)
- npm `sudo apt install nodejs npm`
- laravel-echo-server `npm install -g laravel-echo-server`
- turn on redis `redis-server`

# Laravel Dependencies Requirement
- predis
- laravel-echo
- socket.io-client ^2.4.0 [issue](https://github.com/laravel/echo/issues/237#issuecomment-731308117)

# Installation
- install composer `composer install`
- Specify `.env` to database
- turn on redis-server
- Start laravel-echo-server `laravel-echo-server start`
- Start Laravel queue `php artisan queue:listen redis --queue=default`
- Start Laravel app `php artisan serve`
- Open in postman, url
  1. http://localhost:8000/api/send
  and send body:
  ``
  {
    "message" : "testing"
  }
  ``
- When you hit first URL you will see `Hello!`
- DONE, have a good day!

# Vue Dependencies Requirement
- laravel-echo
- socket.io-client ^2.4.0 [issue](https://github.com/laravel/echo/issues/237#issuecomment-731308117)

# Installation
- install package `npm install`
- run project `npm run serve`


# Postman
- When you hit first URL you will see `Testing` from body postman.
![Screenshot_35](https://user-images.githubusercontent.com/58780032/138805644-98df8d6c-fc37-41c0-8766-1bf0608333be.png)
- DONE, have a good day!

# if successfully 
![alt text](https://user-images.githubusercontent.com/58780032/138805496-ed7ab51e-c29e-49cf-bdd8-a46376e3b712.png)


refrensi : https://gist.github.com/brainlagid/15666f13c5b27c4f8f5702559473c240?fbclid=IwAR2Yh_lQ_wwnGsg53G8BIOCyn0m43IxEzSHpWcLfGveJ7GY8emkehkBKM8c
