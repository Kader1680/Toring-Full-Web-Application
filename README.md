# Toring Full Web application 

## Overview
Toring a backend CRUD (Create, Read, Update, Delete) application built using Laravel and MySQL. It provides a RESTful API to perform operations on a resource, demonstrating the use of the Laravel framework for backend development and database management.

## Features
- Register & Login Opertation and impelemnt JWT to Secure Authentication
- CRUD for adding Post Question
- Profile Page that return all question added by user
- Answer other user for any question post added 
- Add like and dislike for any post 

## Requirements
- PHP >= 8.0
- Composer
- Laravel >= 11.x
- MySQL >= 8.0

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/Kader1680/Toring-Full-Web-Application
   ```

2. Navigate to the project directory:
   ```bash
   cd Toring-Full-Web-Application
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

5. Update `.env` file with your database configuration:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=toring
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Generate the application key:
   ```bash
   php artisan key:generate
   ```

7. Run database migrations:
   ```bash
   php artisan migrate
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

## API Endpoints
### Base URL
```
http://127.0.0.1:8000/api
```

### Routes
#### Create a Resource
**POST** `/post`
- Request Body:
  ```json
  {
    "title": "Your Question",
    "body": "Resource Description"
  }
  ```

#### Read Resources
**GET** `/stories`
- Response:
  ```json
  [
    {
      "id": 1,
      "title": "stories Name",
      "description": "stories Description",
      "created_at": "2024-01-01T00:00:00.000000Z",
      "updated_at": "2024-01-01T00:00:00.000000Z"
    }
  ]
  ```

#### Update a Resource
**PUT** `/stories/{id}`
- Request Body:
  ```json
  {
    "name": "Updated Name",
    "description": "Updated Description"
  }
  ```

#### Delete a Resource
**DELETE** `/stories/{id}`
- Response: Status 204 No Content

## Project Structure
```
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── ResourceController.php
│   └── Models
│       └── Resource.php
├── database
│   └── migrations
├── routes
│   └── api.php
├── .env
├── composer.json
└── README.md
```

## Pics from Demo project running on localhost

<img src="./pics/toring (1).png" />
<img src="./pics/toring (2).png" />
<img src="./pics/toring (3).png" />
<img src="./pics/toring (4).png" />
<img src="./pics/toring (5).png" />
<img src="./pics/toring (6).png" />
<img src="./pics/toring (7).png" />
<img src="./pics/toring (8).png" />
<img src="./pics/toring (9).png" />
<img src="./pics/toring (10).png" />
 

## Contributing
Feel free to fork this repository and submit pull requests for improvements or bug fixes.

## License
This project is open-source and available under the [MIT License](LICENSE).






6^++****88^^^^