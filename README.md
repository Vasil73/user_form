<h1 align="center">Практическая работа на обучающей платформе <a href="https://skillbox.ru/" target="_blank">Skillbox</a> 
<img src="https://github.com/blackcater/blackcater/raw/main/images/Hi.gif" height="32"/></h1>
<h2 align="center">По закреплению знаний в модуле Laravel</h2>
<h3 align="center">
Контроллеры, экшены и роутинг</h3>


<h3 align="center">Что нужно сделать</h3>

<h2>Вам предстоит установить фреймворк Laravel и создать контроллер, содержащий экшены для вывода и обработки формы.</h2>
<p> 1. Установите Laravel с помощью composer, выполнив команду composer create-project laravel/laravel <имя проекта>. В поле <имя проекта> впишите имя вашего проекта. Этому имени будет соответствовать имя папки, в которую вы поместите проект.</p>
<p> 2. Создайте контроллер для вывода формы на страницу и её обработки. В командную строку введите команду php artisan make:controller FormProcessor</p>
<p> 3. После выполнения команды убедитесь, что контроллер создан, — соответствующий файл должен появиться в папке app/Http/Controllers.</p>
<p> 4. Внутри контроллера опишите метод index: он должен выводить в браузер форму для заполнения.</p>
    <ul>
        <li>Опишите форму в виде шаблона blade. </li>
        <li>Внутри формы должны быть поля для ввода имени, фамилии и email пользователя. </li>
        <li>Форма отправляется методом POST.</li>
        <li>Параметр action пока оставьте пустым.</li>
        <li>Не забудьте про CSRF.</li>
    </ul>

<p> 5. Внутри файла /routes/web.php опишите новый роут (метод GET), который будет вызывать метод index контроллера FormProcessor по url /userform.</p>
<p>6. Запустите встроенный сервер Laravel командой php artisan serve --port=8080 и убедитесь, что форма выводится по адресу http://localhost:8080/userform.</p>
<p>7. В контроллере FormProcessor создайте метод store для обработки формы. Этот метод должен принимать поля формы и отправлять ответ в виде JSON-объекта, содержащего значения полей формы (имя, фамилия, email).</p>
<p>8. Внутри файла /routes/web.php опишите новый роут (метод POST), который будет вызывать метод store контроллера FormProcessor по url /store_form.</p>
<p>9. Отредактируйте поле action формы в шаблоне и укажите адрес /store_form.</p>
<p>10. Откройте форму в браузере по адресу http://localhost:8080/userform, заполните её и попробуйте отправить на сервер, нажав кнопку Submit. Если всё сделано правильно, вы увидите в браузере объект JSON.</p>
<p>11. Создайте новый шаблон blade для приветствия пользователя (например: «Привет, <имя>!»).</p>
<p>12.Измените метод store контроллера FormProcessor таким образом, чтобы вместо JSON он возвращал шаблон, заполненный данными пользователя.</p>

