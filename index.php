<?php
$dsn = "mysql:host=sql113.infinityfree.com;dbname=if0_42064132_zaton;charset=utf8mb4";

$user = "if0_42064132";
$pass = "6NF01SwLWDH1I6";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected Successfully";
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["massage"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $msg=$_POST["massage"];
  $connection->exec("INSERT INTO `feedback` (`name`, `email`, `subject`, `massage`) VALUES ('". $name ."', '". $email ."', '". $subject ."', '". $msg ."')");

}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elemanolive</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Fontawsome -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logoe.jpg" />
    <style>
          #backet{
    width: 40px;
    height: 40px;
    position: fixed;
    left: 10px;
    top: 10px;
    z-index: 5000;
    background-color:rgb(79, 226, 79);
    cursor: pointer;
    border-radius: 10px;
    border: none;
    font-size: 20px;
    
  }
  #scrole:hover ,#backet:hover{
    box-shadow:
        inset 0 0 60px whitesmoke,
        inset 20px 0 80px #f0f,
        inset -20px 0 80px #0ff,
        inset 20px 0 300px #f0f,
        inset -20px 0 300px #0ff,
        0 0 50px #fff,
        -10px 0 80px #f0f,
        10px 0 80px #0ff;
  }

    </style>
  </head>
  <body>
  <button id="scrole"><i class="fa-solid fa-arrow-up"></i></button>

<button onclick="cartss()" id="backet">
  <i class="fa-solid fa-cart-shopping" id="cart_icon" data-quantity="0"></i>
</button>

<!-- Header Start -->
<header>
  <p id="nnnn" class="hideee">0</p>
  <div id="navbar">
    <nav>
      <a href="#"><img src="./img/logoe.jpg" alt="Food Lover Logo" /></a>

      <!-- cart by meeeee -->
      <div class="hidennn" id="cart">
        <h2 class="cart_title">Your Cart</h2>

        <div class="cart_content"></div>
        <!-- total -->
        <div class="total">
          <div class="total_title">Total</div>
          <div class="total_price">$0</div>
        </div>
        <button type="button" class="btn_buy By">By Now</button>
        <i class="fa-solid fa-x" id="close_cart"></i>
      </div>
      <!-- end -->
      <ul>
        <li><a class="btn1" href="#about">About</a></li>
        <li><a class="btn1" href="#menu">Menu</a></li>
        <li><a class="btn1" href="#gallery">Gallery</a></li>
        <li><a class="btn1" href="#contact">Contact</a></li>
            <?php
            if (isset($_COOKIE["id"])){
                echo "<li><a class='btn1' href='log_out.php'>log out</a></li>";
            }else{
                echo "<li><a class='btn1' href='login.php'>login</a></li>";
            }
            ?>
          </ul>
        </nav>
      </div>
      <div class="content">
        <h1>
          Welcome To <span class="primary-text"> Elemanolive </span>Company
        </h1>
        <p>Here you can find Most delicacies food in the world</p>
        <a
          href="https://forms.gle/5hpf2Vf9HEQnQDYbA"
          target="_blank"
          class="btn btn-primary"
          >Book a Request</a
        >
      </div>
    </header>
    <!-- <video autoplay muted loop id="bg-video">
        <source src="video/production_id_4109924 (1080p).mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video> -->
    <!-- Header End -->
    <main>
      <!-- About Start -->
      <section id="about">
        <div id="container">
          <div class="title">
            <h2>The Company history</h2>
            <p>More than 25+ years of experiance</p>
          </div>
          <div class="about-content">
            <div>
              <p>
                Olive pickling companies with over 25 years of experience
                typically excel in continuity and expertise in the pickled
                product industry. These companies may include elements such
                as:1. Product Quality2. Wide Range of Products3. Compliance with
                Health Standards4. Advanced Technology5. Good Reputation6.
                Business Expansion
              </p>
              <a href="inde.html" target="_blank" class="btn btn-secondry"
                >LEARN MORE</a
              >
            </div>
            <img class="about_img1" src="./img/about_img.jpg" alt="Pizza" />
          </div>
        </div>
      </section>
      <!-- About End -->
      <!-- Offers Start -->
      <section id="offers">
        <div class="container">
          <div class="title">
            <h2>Our Special Offers</h2>
            <p>More than 25+ years of experiance</p>
          </div>
          <div class="offers-items">
            <!-- ///////////////////////////// -->
            <div>
              <div>
                <img
                  class="offer1 product_img"
                  src="./img/offer1.jpg"
                  alt="Quattro Pasta"
                />
                <h3 class="product_title">The green olive</h3>
                <p>
                  The green olive is a type of olive characterized by its green
                  color before full ripening.
                </p>
                <p>
                  <del>$25.00</del><span class="primary-text price">$20</span>
                </p>

                <button class="btn_buy add-cart">Add to cart</button>
              </div>
            </div>

            <div>
              <img
                class="offer2 product_img"
                src="./img/offer2.jpg"
                alt="vegertarian Pasta"
              />
              <h3 class="product_title">Kalamata olives</h3>
              <p>
                Kalamata olives are a type of olive with origins in Greece. They
                are characterized by their dark purple to black color
              </p>
              <p>
                <del>$23.00</del><span class="primary-text price">$17</span>
              </p>
              <button class="btn_buy add-cart">Add to cart</button>
            </div>

            <div>
              <img
                class="offer3 product_img"
                src="./img/offer3.jpg"
                alt="Gluten-Free Pasta"
              />
              <h3 class="product_title">The regular pickled</h3>
              <p>
                The regular pickled hot sauce is made from processed hot peppers
                stored in vinegar and salt.
              </p>
              <p><del>$30</del><span class="primary-text price">$28</span></p>
              <button class="btn_buy add-cart">Add to cart</button>
            </div>
          </div>
        </div>
      </section>
      <!-- Offers End -->
      <!-- Menu Start -->
      <section id="menu">
        <div id="container">
          <div class="title">
            <h2>Our Special Menu</h2>
            <p>Order two and get third for free</p>
          </div>
          <div>
            <div class="menu-items">
              <div class="menu-items-left">
                <div class="menu-item boder">
                  <img
                    src="./img/food1.jpg"
                    alt="LASAL Cheese"
                    class="product_img"
                  />
                  <div>
                    <img
                      src="./img/food1.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>
                      The green olive<span class="primary-text">$30</span>
                    </h3>
                    <h3 class="product_title hidennn" hidennn>
                      The green olive
                    </h3>
                    <span class="primary-text price hidennn">$30</span>
                    <p>
                      The green olive is a type of olive characterized by its
                      green color before full ripening.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>

                <div class="menu-item boder">
                  <img src="./img/food2.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food2.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>
                      Pickled green olives<span class="primary-text">$50</span>
                    </h3>
                    <h3 class="product_title hidennn">Pickled green olives</h3>
                    <span class="primary-text price hidennn">$50</span>

                    <p>
                      "Pickled green olives are a type of olive treated with a
                      salty and acidic brine
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food3.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food3.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>Kalamata<span class="primary-text">$12</span></h3>
                    <h3 class="product_title hidennn">Kalamata</h3>
                    <span class="primary-text price hidennn">$12</span>
                    <p>
                      Kalamata olives are a type of olive with origins in
                      Greece. They are characterized by their dark purple to
                      black color
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food4.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food4.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>Pickled onions<span class="primary-text">$15</span></h3>
                    <h3 class="product_title hidennn">Pickled onions</h3>
                    <span class="primary-text price hidennn">$15</span>
                    <p>
                      Pickled onions are a type of vegetable processed in a
                      brine solution with salt and acidity
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food5.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food5.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>
                      The regular pickled<span class="primary-text">$16</span>
                    </h3>
                    <h3 class="product_title hidennn">The regular pickled</h3>
                    <span class="primary-text price hidennn">$16</span>
                    <p>
                      The regular pickled hot sauce is made from processed hot
                      peppers stored in vinegar and salt.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food6.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food6.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>
                      regular pickled<span class="primary-text">$22</span>
                    </h3>
                    <h3 class="product_title hidennn">regular pickled</h3>
                    <span class="primary-text price hidennn">$22</span>
                    <p>
                      The regular pickled hot sauce is made from processed hot
                      peppers stored in vinegar and salt.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="menu-items-right">
                <div class="menu-item boder">
                  <img src="./img/food7.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food7.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>
                      Pickled Habanero<span class="primary-text">$8</span>
                    </h3>
                    <h3 class="product_title hidennn">Pickled Habanero</h3>
                    <span class="primary-text price hidennn">$8</span>
                    <p>
                      Habanero pepper is a type of hot pepper used in the
                      preparation of hot sauces.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food8.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food8.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>Pickle mix<span class="primary-text">$24</span></h3>
                    <h3 class="product_title hidennn">Pickle mix</h3>
                    <span class="primary-text price hidennn">$24</span>
                    <p>
                      Pickle mix is a combination of various vegetables
                      processed in a brine solution with salt and acidity.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food9.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food9.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>Pickled lemon<span class="primary-text">$21</span></h3>
                    <h3 class="product_title hidennn">Pickled lemon</h3>
                    <span class="primary-text price hidennn">$21</span>
                    <p>
                      "Pickled onions are a type of vegetable processed in a
                      brine solution with salt and acidity,
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food10.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food10.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>Pickle mix<span class="primary-text">$14</span></h3>
                    <h3 class="product_title hidennn">Pickle mix</h3>
                    <span class="primary-text price hidennn">$14</span>
                    <p>
                      Pickle mix is a combination of various vegetables
                      processed in a brine solution with salt and acidity.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food11.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food11.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>Pickle mix<span class="primary-text">$32</span></h3>
                    <h3 class="product_title hidennn">Pickle mix</h3>
                    <span class="primary-text price hidennn">$32</span>
                    <p>
                      Pickle mix is a combination of various vegetables
                      processed in a brine solution with salt and acidity.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
                <div class="menu-item boder">
                  <img src="./img/food12.jpg" alt="LASAL Cheese" />
                  <div>
                    <img
                      src="./img/food12.jpg"
                      alt="LASAL Cheese"
                      class="product_img hidennn"
                    />
                    <h3>Pickle mix<span class="primary-text">$21</span></h3>
                    <h3 class="product_title hidennn">Pickle mix</h3>
                    <span class="primary-text price hidennn">$21</span>
                    <p>
                      Pickle mix is a combination of various vegetables
                      processed in a brine solution with salt and acidity.
                    </p>
                    <button class="btn_buy add-cart">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="btn">
            <a href="indx.html" target="_blank" class="men"
              >EXPLORE FULL MENU</a
            >
          </button>
        </div>
      </section>
      <section id="gallery">
        <div class="container">
          <h2>Our Foods Gallery</h2>
          <div class="img-gallery">
            <img src="./img/gallery1.jpg" alt="Gallery1" />
            <img src="./img/gallery2.jpg" alt="Gallery2" />
            <img src="./img/gallery3.jpg" alt="Gallery3" />
            <img src="./img/gallery4.jpg" alt="Gallery4" />
            <img src="./img/gallery5.jpg" alt="Gallery5" />
            <img src="./img/gallery6.jpg" alt="Gallery6" />
          </div>
        </div>
      </section>
      <!-- Gallery End -->
      <!-- Contact Start -->
      <section id="contact">
        <div class="container">
          <div class="contact-content">
            <div class="contact-info">
              <div>
                <h3>ADDRES</h3>
                <p class="loc">
                  <i class="fa-solid fa-location-dot"></i>Zagazig,Sharkia,Egypt
                </p>
                <p>
                  <i class="fa-solid fa-phone"></i
                  ><a
                    class="wa"
                    href="https://api.whatsapp.com/send/?phone=%2B201141572180&text&type=phone_number&app_absent=0"
                    target="_blank"
                    >Phone:01141572180</a
                  >
                </p>
                <p>
                  <i class="fa-regular fa-envelope"></i
                  ><a
                    class="em"
                    href="mailto:srorr8872@gmail.com"
                    target="_blank"
                    >Support@gmail.com</a
                  >
                </p>
              </div>
              <div>
                <h3>WORKING HOURS</h3>
                <p>8:00 am to 11:00 pm on Weekdays</p>
                <p>11:00 am to 1:00 am on Weekends</p>
              </div>
              <div class="link">
                <h3>FOLLOW US</h3>
                <div class="popo">
                  <a
                    href="https://www.facebook.com/mohamed.elsaied.10690203/"
                    target="_blank"
                    ><i class="fa-brands fa-facebook-f"></i
                  ></a>
                  <a href="https://twitter.com/MMohamed89260" target="_blank"
                    ><i class="fa-brands fa-twitter"></i
                  ></a>
                  <a
                    href="https://www.instagram.com/mohamed_elsaied_ahmed/?hl=ar"
                    target="_blank"
                    ><i class="fa-brands fa-instagram"></i
                  ></a>
                  <a
                    href="https://api.whatsapp.com/send/?phone=%2B201141572180&text&type=phone_number&app_absent=0"
                    target="_blank"
                    ><i class="fa-brands fa-whatsapp"></i
                  ></a>
                </div>
              </div>
            </div>
            <form method="post">
              <input
                type="text"
                name="name"
                id="name"
                placeholder="full Name"
                required
              />
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Email Address"
                required
              />
              <input
                type="text"
                name="subject"
                id="Subject"
                placeholder="Subject"
                required
              />
              <textarea
                name="massage"
                id="Massage"
                cols="30"
                rows="5"
                placeholder="Massage"
              ></textarea>
              <button type="submit" class="btn">Send</button>
            </form>
            <div></div>
          </div>
        </div>
      </section>
      <!-- Contact End -->
      </main>
    <footer id="footer">
      <p>
        Copyright &copy; 2024 All rights reserved | Made by <br />
        <b
          ><a
            href="https://api.whatsapp.com/send/?phone=%2B201141572180&text&type=phone_number&app_absent=0"
            target="_blank"
            ><span class="spa"
              >Mohamed Elsaied <br />
              mohamed lotfy <br />Ahmed sadek</span
            ></a
          ></b
        >
      </p>
    </footer>
    <script src="java.js"></script>
  </body>
</html>

