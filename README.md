# About
Todolist projects based on Laravel 8, sample implementation to learn **Repository pattern** using Laravel 8. 

## Video 
Here is a video version to understand the concept [Youtube](https://youtu.be/BgQx3xbuOQE)

## Repository pattern
Repositories are classes or components that encapsulate the logic required to access data sources. They centralize common data access functionality, providing better maintainability and decoupling the infrastructure or technology used to access databases from the domain model layer. [Microsoft](https://docs.microsoft.com/en-us/dotnet/architecture/microservices/microservice-ddd-cqrs-patterns/infrastructure-persistence-layer-design) 

## How to Run 
- Rename `.env.example` file to .env inside your project root and fill the database information.
- Open the console and cd your project root directory
- Run `composer install` or `php composer.phar install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders
- Run `php artisan serve`
- Access end point using postman or insomnia


## API Endpoints
| Methods        | Endpoints      | Description|
| :------------- | :---------- | :----------- |
|  `GET` | /tasks  | Get all task    |
| `POST`  | /task | Create task must given `name` & `description` to body request |
| `PUT`  | /task/{task_id}/finish | Set task as finish require `task_id` |
|  `GET` |/task/{task_id}/comments   |  Get task with comments require `task_id`   |
| `POST`  | /task/{task_id}/comment | Create comment on task require `task_id` and `name`,`description` body request  |
|  `GET` | /task/{task_id}  | Get specific task by giver `task_id`   |
| `PUT`  | /task/{task_id} | Edit task required `task_id` and `name` & `description` body request  |
