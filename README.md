# Стек  
- docker
- php 8.2
- nginx 1.25
- postgres 16.0
- laravel 10
- node 18.17.1
- npm 9.6.7
# Развертывание  
1. Клонируем репозиторий ```git clone https://github.com/zxcslark/creditApplicationsApi.git```
2. Переходим в корневую директорию проекта
3. Собрать контейнеры ```docker compose up -d```
4. Переходим в ```/src```  
5. Установка зависимостей:
    ```yaml
    1. composer install
    2. php artisan ui bootstrap
    3. npm install
    ```
6. Копируем ```.env.example``` в ```.env```. В ```.env.example``` установлены актуальные параметры
7. Генерируем ключ приложения ```php artisan key:generate```
8. Заходим в контейнер ```docker exec -it phpfpm bash```
9. Переходим в ```/src``` и стартуем миграции ```php artisan migrate```
10. Создать юзера для админки ```php artisan db:seed --class=UserSeeder```. Создастся юзер с доступами ```admin@admin.ru password```  
11. Опцианально можно заполнить таблицы тестовыми данными ```php artisan db:seed```
12. Выходим из терминала контейнера ```exit```
13. Запускаем внутри ```/src``` команду ```npm run dev```
# Дополнительная информация  
- Документация по api сделанная при помощи ```swagger``` доступна по урлу ```/api/documentation```
- Админка находится по урлу ```/home```
- Функция регистрации выключена
