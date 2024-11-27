## Quick start

```bash
$ make install

# or...

$ echo "UID=$(id -u)" >> .env # Linux environment only
$ echo "GID=$(id -g)" >> .env # Linux environment only

$ docker compose build
$ docker compose up -d
$ docker compose exec app composer install
$ docker compose exec app cp .env.example .env
$ docker compose exec app php artisan key:generate
$ docker compose exec app php artisan storage:link
$ docker compose exec app chmod -R 777 storage bootstrap/cache

#seed data
$ make seed
$ make seed-logo-image

```
Test task: http://localhost 
<p align="center">
  <img alt="Companies view" src="./_readme/company-views.png">
</p>
<p align="center">
  <img alt="Jobs view" src="./_readme/job-views.png">
</p>

Admin test task: http://localhost/admin/company
<p align="center">
  <img alt="Companies admin" src="./_readme/company-admin.png">
</p>
