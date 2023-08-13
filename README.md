## Запуск проекта 
1) Скопируйте проект 
<pre>
    git clone https://github.com/ilyaBob/laravel-test.git
</pre>
2) В корневом каталоге введите: 
<pre>
    composer install
</pre>
3) Настройте базу данных. Переименуйте .env.example в .env
4) В файле .env найстройте подключение к базе данных
<pre>
    DB_DATABASE=таблица-базы-данных
    DB_USERNAME=логин
    DB_PASSWORD=пароль
</pre>

5) Сгенерируйте код
<pre>
   php artisan key:generate
</pre>
   
6) Установите пакеты (Предоставляются laravel)
<pre>
   npm instal
</pre>

7) Запустите VITE
<pre>
    npm run dev
</pre>

8) Запустите миграцию и фабрики
<pre>
    php artisan migrate:fresh --seed
</pre>

9) Запустите сервер
<pre>
    php artisan serve
</pre>

## Данные для входа
<p>
    Логин: admin@admin.admin
</p>
<p>
    Пароль: admin
</p>


## API
<p> <b> /api/category</b> - получить все категории</p>
<p><b>/api/category/{id}</b> получения статей по заданной категории</p>
<p><b>/api/post/{slug}</b> - получение поста по slug</p>
<p><b>/api/posts?page=4&per_page=2</b> - получени постов, page - номер страницы, per_page - количество записей на странице (Выводимый контент уменьшил, для более удобной наглядности)</p>



