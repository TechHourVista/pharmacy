# ABOUT : 
    Welcome to the Pharmacy Management System! This project aims to provide a comprehensive solution for managing various aspects of a pharmacy, streamlining day-to-day operations, and ensuring efficient inventory and prescription management.

## Getting Started

Follow these instructions to get a copy of your project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP >= 8.0
- Composer installed ([Get Composer](https://getcomposer.org/))
- MySQL or any other database of your choice


### Installing

##### Clone the repository:
    ```
        git clone https://github.com/TechHourVista/pharmacy.git
    ```
##### cd to pharmacy folder : 
    ```
    cd pharmacy
    composer require
    ```
##### make .env config file : 
    ```
    cp .env.example .env
    ```
##### generate a key for your app : 
    ```
    php artisan key:generate
    ```
##### migrate : 
    ```
    php artisan migrate
    ```
##### serve the app : 
    1-localhost : ```php artisan serve```
    2-networkhost: ```php artisan serve --host=(Ip adress of your machine) --port=8000```