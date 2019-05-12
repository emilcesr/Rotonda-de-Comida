<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>shopping cart</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <header>
      <h1 id="title-header">Roundabout restaurant</h1>
      <nav>
        <ul>
          <li></li>
          <li> <a href="#">add direction</a> </li>
          <li> <a href="#">sign out</a> </li>
        </ul>
      </nav>
    </header>
    <div class="content-app">
      <div class="title">
        <h1 class="titulo-h1" >Shopping cart</h1>
      </div>
      <div class="menus">
        <!--Divs de menus agregados-->
      </div>

      <div class="">
        <form class="form" action="index.html" method="post">
          <div class="input-form">
            <label for="">Total</label>
            <input type="number" name="" value="0.0">
          </div>
          <div class="">
            <label for="">payment method</label> <br>
            Credit card:<input type="radio" name="credit" value="credit card">
            Money cash: <input type="radio" name="cash" value="money cash">
          </div>
          <div class="input-form">
            <label for="">direction</label>
            <input type="text" name="" value="">
          </div>
          <button class="botones" type="submit" name="button">Pedir !!</button>
        </form>

      </div>
    </div>
  </body>
</html>
