

<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>CoffeKharkov</title>
  <link href="call-back-form.css" rel="stylesheet" type="text/css" />

  <!-- <link href="main.css" rel="stylesheet" type="text/css" /> -->

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>

<body>
  <div id="bg">
    <div id="outer">
      <div id="header">
        <div id="logo">
          <h1>
							<a href="#">CoffeKharkov</a>
						</h1>
        </div>
        <div id="nav">
          <ul>
            <li>
              <a  href="../index.html">Главная</a>
            </li>
            <li>
              <a href="#">О нас</a>
            </li>
            <li>
              <a href="../photo-gallery/photo-gallery.html">Фотогалерея</a>
            </li>
            <li>
              <a href="../contacts/contacts.html">Контакты</a>
            </li>
            <li>
              <a href="">Обратная связь</a>
            </li>
          </ul>
          <br class="clear" />
        </div>
      </div>
      <div id="main">

        <div id="content">
          <div id="box1"><h2>Обратная связь</h2>
            <div id="form">
            <form action="insert.php" method="post">
            <p>
                <label for="firstName">Ваше имя:</label>
                  <input type="text" name="first_name" id="firstName">
              </p>
              <p>
                <label for="lastName">Ваша фамилия:</label>
                  <input type="text" name="last_name" id="lastName">
              </p>
              <p>
                <label for="emailAddress">Email адресс:</label>
                  <input type="text" name="email" id="emailAddress">
              </p>
              <p>Сообщение</p><textarea name="message" id="msgArea" rows="6" cols="25"></textarea><br />
              <input type="submit" value="Добавить заявку">
          </form>

              </div>
          </div>
          
          <br class="clear" />
        </div>
        <br class="clear" />
      </div>
    </div>
    <div id="copyright">
      <span>Сайт выполнен студентом Анастасия Черкашина</span>
    </div>

  </div>
</body>

</html>