## Docker, Laravel, PostgreSQL, Filament

### Start app

1. Start app: `docker-compose up`
2. Run migrations: `docker-compose exec app php artisan migrate`
3. Seed default user: `docker-compose exec app php artisan db:seed`
4. Open in browser: [filament admin panel](http://localhost:8000/admin)
5. User email: `admin@gmail.com`
6. User password: `1Admin!@#'=`

### Packages

* Filament admin panel: [click here](https://filamentphp.com/)
* Laravel passport oauth2 client: [click here](https://laravel.com/docs/11.x/passport)
* Laravel l5 swagger: [click here](https://github.com/DarkaOnLine/L5-Swagger)
* Laravel pulse: [click here](https://laravel.com/docs/11.x/pulse)

### API get token

* docs: [swagger](http://localhost:8000/api/documentation#/)
* url: `http://localhost:8000/oauth/token`
* body: 
```
{
  "password": "1Admin!@#",
  "username": "admin@gmail.com",
  "remember_me": false,
  "client_id": "1",
  "grant_type": "password",
  "client_secret": "uJjon2ZfjH2OGXxPhCvwHOWQOVVSvcGqrdH8ZxuL",
  "scope": ""
}
```
