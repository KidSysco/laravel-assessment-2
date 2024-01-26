<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Greetings Applied Imagination!

This is a quick assessment of the Laravel Framework, to show interest, and hopefully gain an interview with your dev team!

## Code

In the `routes/api.php` file I have added some simple Get endpoints designed to return sample records from an SQLite file stored at, ` app/database/database.sqlite`.

There is one seeder `app/database/seeders/UsersTableSeeder.php` using Faker to generate several sample user accounts.

## E2E Testing

The API has been deployed to AWS using Elastic Beanstalk, so the following routes are available online, no SSL.

### Fetch all Users

http://ryan-segura-laravel-assesment.us-east-1.elasticbeanstalk.com/api/users

### Fetch single User

http://ryan-segura-laravel-assesment.us-east-1.elasticbeanstalk.com/api/users/1
