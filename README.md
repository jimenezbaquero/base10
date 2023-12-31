# CRM Laravel 10 Vue

Laravel, Vue and InertiaJS powered CRM. Role Management with spatie-permission. Lang translation in front with i18.

All the command list

```bash
git clone https://github.com/jimenezbaquero/base10.git
```

```bash
cd base10
```

```bash
composer install
```

```bash
npm install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

Configure your smtp. You can put MAIL_MAILER=log if you dont have

Create a database and configure your .env. For example, is database is CRM10

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=base10
DB_USERNAME=root
DB_PASSWORD=
```

```bash
php artisan migrate --seed
```

```bash
php artisan serve
```

```bash
npm run dev
```


## Tech Stack

**Client Side:** TailwindCSS, Vue

**Server Side:** Laravel

**Adapter:** Inertia

**Database:** Sqlite 3, MySql
