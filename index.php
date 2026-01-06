<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<!-- Carousel -->
<div id="custom-carousel" class="carousel slide" data-ride="carousel">
  <!-- 🔹 Background image overlay -->
  <div class="carousel-bg"></div>

  <ol class="carousel-indicators">
    <li data-target="#custom-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#custom-carousel" data-slide-to="1"></li>
    <li data-target="#custom-carousel" data-slide-to="2"></li>
    <li data-target="#custom-carousel" data-slide-to="3"></li>
  </ol>

  <!-- 🔹 All slides go inside carousel-inner -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="carousel-item-wrapper">
        <img src="images/image1.png" alt="Bakery" class="main-carousel-img hidden-xs">
        <div class="carousel-text">
          <h2>Welcome to Maha Bakery</h2>
          <p>Enjoy our wholesome vegetarian meals, bursting with fresh vegetables, aromatic spices, and flavors that will delight your senses.</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="carousel-item-wrapper">
        <img src="images/nonvegmeals.png" alt="Nonveg Meals" class="main-carousel-img hidden-xs">
        <div class="carousel-text">
          <h2>Nonveg Meals</h2>
          <p>Savor our mouth-watering non-vegetarian meals, cooked to perfection with fresh spices and tender meat.</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="carousel-item-wrapper">
        <img src="images/sweets.png" alt="Sweets" class="main-carousel-img hidden-xs">
        <div class="carousel-text">
          <h2>Fresh Ingredients</h2>
          <p>Every sweet is crafted using only the finest ingredients, ensuring each bite is pure bliss.</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="carousel-item-wrapper">
        <img src="images/blackforestcake.png" alt="Black Forest Cake" class="main-carousel-img hidden-xs">
        <div class="carousel-text">
          <h2>Delicious Cakes</h2>
          <p>Our Cake is a masterpiece—rich, moist, and loaded with decadent chocolate and cherries.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popular Food -->
<div class="container" style="padding: 60px 20px;">
  <h1 class="text-center" style="margin-bottom: 40px; font-family: 'Poppins', sans-serif;">
    <b>Most Popular Food</b>
  </h1>
  <div class="row">

    <!-- Card 1 -->
    <div class="col-sm-3">
      <div class="food-card">
        <img src="images/sweetsandsnacks.jpg" alt="Sweets">
        <div class="food-info">
          <h4>Sweets and Snacks</h4>
          <p>(120 Reviews)</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-sm-3">
      <div class="food-card">
        <img src="images/nonvegfood.jpg" alt="Nonveg Meals">
        <div class="food-info">
          <h4>Nonveg Meals</h4>
          <p>(95 Reviews)</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-sm-3">
      <div class="food-card">
        <img src="images/vegfood.jpg" alt="Veg Meals">
        <div class="food-info">
          <h4>Veg Meals</h4>
          <p>(150 Reviews)</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-sm-3">
      <div class="food-card">
        <img src="images/cakes.jpg" alt="Cakes">
        <div class="food-info">
          <h4>Cakes</h4>
          <p>(80 Reviews)</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<div class="container-fluid" style="height: 400px;">
  <div class="row" style="height: 100%; position: relative; background: #FFF7E0; overflow: hidden;">
    <div class="col-sm-4" style="position: relative; display: flex; justify-content: flex-start; align-items: center; height: 100%; padding-left: 50px;">
      <div style="position: absolute; top: -100px; left: -50px; width: 500px; height: 500px; background: #C11A15; border-radius: 50% 50% 30% 90%; transform: rotate(-20deg); z-index: 0;"></div>
      <img src="images/tomato.png" style="position:absolute; top:20px; left:30px; width:60px; animation: float 4s infinite alternate;">
      <img src="images/leaves.png" style="position:absolute; bottom:50px; left:100px; width:40px; animation: float 3s infinite alternate;">
      <img src="images/about.png" style="width: 350px; height: 300px; object-fit: cover; position: relative; z-index: 1; margin-left:100px">
    </div>

    <div class="col-sm-8" style="background: #FFF7E0; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; height:100%; padding:40px; position: relative;">
      <h2 style="font-family: 'Poppins', sans-serif; color:#333; font-weight:700;">About
        <span style="color:#C11A15;">Us</span>
      </h2>
      <p style="font-size:16px; line-height:1.6; color:#555; margin-top:20px;">
        Maaha Bakery & Restaurants in Ariyakudi (with a branch in Kalaiyarkovil) has been serving delicious vegetarian and non-vegetarian dishes since 2003. We specialize in sweets, savouries, cakes, and bakery items, made with the finest ingredients for a pure and unique taste.
      </p>
      <p style="font-size:16px; line-height:1.6; color:#555; margin-top:10px;">
        Whether you dine in, order home delivery, or book catering, we bring taste and quality in every bite.
      </p>
      <a href="about.php" class="about-btn" style="margin-top:20px;"><span>Read More</span></a>
      <img src="images/chilli.png" style="position:absolute; top:70px; right:50px; width:50px; animation: float 5s infinite alternate-reverse;">
    </div>
  </div>
</div>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Why Choose Us Section -->
<div class="container-fluid why-choose-section">
  <img src="images/vegmeals.png" alt="Triangle Shape" class="triangle-img hidden-xs">
  <img src="images/speices.png" alt="Left Bottom Shape" class="left-bottom-img hidden-xs">

  <div class="content text-center">
    <h2>Why Choose <span style="color:#C11A15;">Us?</span></h2>
    <div class="row features">
      <div class="col-sm-4 feature-box">
        <i class="fa-solid fa-bowl-food"></i>
        <h4>Fresh Ingredients</h4>
        <p>We use only the freshest produce and quality ingredients for every dish.</p>
      </div>
      <div class="col-sm-4 feature-box">
        <i class="fa-solid fa-percent"></i>
        <h4>Best Price</h4>
        <p>Delicious meals at the most affordable prices in town.</p>
      </div>
      <div class="col-sm-4 feature-box">
        <i class="fa-solid fa-star"></i>
        <h4>Quality Taste</h4>
        <p>Experience authentic flavors prepared by expert chefs.</p>
      </div>
    </div>
  </div>
</div>
<!-- Special Dish Section (2 rows, 5 items) -->
<section class="special-dish-section">
  <h2>Our Featured Await</h2>
  <p>
    <span style="color:#C11A15;">
      <b>Explore our chef’s special selection crafted to delight your taste buds every day.</b>
    </span>
  </p>

  <div class="dish-grid">
    <div class="dish-card">
      <img src="images/dish1.jpg" alt="Dish 1">
      <div class="dish-info">
        <h4>Fresh Juice</h4>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish2.jpg" alt="Dish 2">
      <div class="dish-info">
        <h4>Veg Meals</h4>
        <div class="stars">★★★★☆</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish3.jpg" alt="Dish 3">
      <div class="dish-info">
        <h4>Tea & Coffee</h4>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/nonvegmeals.png" alt="Dish 4">
      <div class="dish-info">
        <h4>Non veg meals</h4>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish5.jpg" alt="Dish 5">
      <div class="dish-info">
        <h4>Cookies</h4>
        <div class="stars">★★★★☆</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish6.png" alt="Dish 6">
      <div class="dish-info">
        <h4>Favourites</h4>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish7.jpg" alt="Dish 7">
      <div class="dish-info">
        <h4>Cakes</h4>
        <div class="stars">★★★★☆</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish8.jpg" alt="Dish 8">
      <div class="dish-info">
        <h4>Breads</h4>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish9.jpg" alt="Dish 9">
      <div class="dish-info">
        <h4>Sweets</h4>
        <div class="stars">★★★★☆</div>
      </div>
    </div>

    <div class="dish-card">
      <img src="images/dish10.jpg" alt="Dish 10">
      <div class="dish-info">
        <h4>Ice Creams</h4>
        <div class="stars">★★★★☆</div>
      </div>
    </div>
  </div>
</section>

<!-- Menu Section -->
<div class="menu-section">
  <div class="overlay"></div>

  <div class="container" style="padding: 60px 20px;">
    <div class="menu-card">
      <h2 class="text-center" style="margin-bottom: 30px;">Our Menu</h2>

      <!-- Nav Tabs -->
      <ul class="nav nav-tabs text-center custom-tabs" role="tablist">
        <li role="presentation" class="active">
          <a href="#breakfast" aria-controls="breakfast" role="tab" data-toggle="tab">Breakfast</a>
        </li>
        <li role="presentation">
          <a href="#lunch" aria-controls="lunch" role="tab" data-toggle="tab">Lunch</a>
        </li>
        <li role="presentation">
          <a href="#dinner" aria-controls="dinner" role="tab" data-toggle="tab">Dinner</a>
        </li>
      </ul>

      <!-- Tab Panes -->
      <div class="tab-content" style="margin-top:20px;">

        <!-- Breakfast -->
        <div role="tabpanel" class="tab-pane active" id="breakfast">
          <div class="menu-list">
            <div class="menu-item"><span>Idly</span> <span>₹ 40.00</span></div>
            <div class="menu-item"><span>Chapathi</span> <span>₹ 15.00</span></div>
            <div class="menu-item"><span>Special Vadai</span> <span>₹ 10.00</span></div>
            <div class="menu-item"><span>Dosai</span> <span>₹ 20.00</span></div>
          </div>
        </div>

        <!-- Lunch -->
        <div role="tabpanel" class="tab-pane" id="lunch">
          <div class="menu-list">
            <div class="menu-item"><span>Veg Meals</span> <span>₹ 80.00</span></div>
            <div class="menu-item"><span>Nonveg Meals</span> <span>₹ 120.00</span></div>
            <div class="menu-item"><span>Salad</span> <span>₹ 50.00</span></div>
            <div class="menu-item"><span>Rice Bowl</span> <span>₹ 70.00</span></div>
          </div>
        </div>

        <!-- Dinner -->
        <div role="tabpanel" class="tab-pane" id="dinner">
          <div class="menu-list">
            <div class="menu-item"><span>Soup</span> <span>₹ 40.00</span></div>
            <div class="menu-item"><span>Grilled Chicken</span> <span>₹ 120.00</span></div>
            <div class="menu-item"><span>Pasta</span> <span>₹ 90.00</span></div>
            <div class="menu-item"><span>Dessert</span> <span>₹ 50.00</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bakery Section -->
<section class="bakery-section" style="background: #FFF7E0;">
  <div class="container">
    <div class="bakery-content">
      <!-- Text content -->
      <div class="text-area">
        <h2>Find The Best Sweets & Bakery Products<br>from Our Bakery</h2>
        <p>We serve unique and pure treats of the highest quality. It boasts a massive menu of sweets, savouries, chaat & bakery products.</p>
        <a href="products.php" class="buy-btn"><span>View Products</span></a>
      </div>

      <!-- Image content -->
      <div class="image-area">
        <img src="images/image11.jpg" alt="Bakery Image 1" class="img1 hidden-xs">
        <img src="images/image12.jpg" alt="Bakery Image 2" class="img2 hidden-xs">
      </div>
    </div>
  </div>
</section>

<!-- Party Hall Section -->
<div class="party-hall-section">
  <div class="hall-container">
    <div class="hall-image">
      <img src="images/partyhall.png" alt="Karikalan Kalaiarangam">
    </div>
    <div class="hall-info">
      <h2><strong>Karikalan Kalaiarangam</strong></h2>
      <p><strong>Facilities :</strong> A/c Hall, Wifi, Podium, Centre Sofa, Cushion Chairs, Separate Dining Area With Table Chairs</p>
      <p><strong>Contact :</strong> +917871992025, +918489268829</p>
      <p><strong>About :</strong> Best Party Hall in Ariyakudi. Our party hall has seating for 60 members with wifi, projector, sound system, lighting, centre sofa, cushion chairs, and a separate dining area to make your events memorable.</p>
      <div style="text-align:center; margin-top:20px;">
        <a href="contact.php" class="about-btn"><span>Contact Us</span></a>
      </div>
    </div>
  </div>

<h2 ><strong>Our Party Hall</strong></h2>
<div class="hall-images">
  <img src="images/partyhall1.png" alt="Party Hall 1" class="zoomable">
  <img src="images/partyhall2.png" alt="Party Hall 2" class="zoomable">
  <img src="images/partyhall3.png" alt="Party Hall 3" class="zoomable">
  <img src="images/partyhall4.png" alt="Party Hall 4" class="zoomable">
</div>

<div id="imagePopup" class="popup">
  <span class="close">&times;</span>
  <img id="popupImg" class="popup-content1">
</div>

</div>

<!-- Services Section -->
<div class="menu-section">
  <div class="overlay"></div>

  <div class="container" style="padding: 60px 20px;">
    <div class="menu-card text-center" style="padding: 40px; border-radius:10px; background:#FFF7E0; max-width:600px; margin:0 auto; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
      <h2 style="margin-bottom: 30px;color: #C11A15;"><strong>Our Services</strong></h2>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs justify-content-center custom-tabs" role="tablist" style="margin-bottom:20px;">
        <li role="presentation" class="active">
          <a href="#home-delivery" aria-controls="home-delivery" role="tab" data-toggle="tab">Home Delivery</a>
        </li>
        <li role="presentation">
          <a href="#catering" aria-controls="catering" role="tab" data-toggle="tab">Catering Services</a>
        </li>
        <li role="presentation">
          <a href="#zom-swiggy" aria-controls="zom-swiggy" role="tab" data-toggle="tab">Zomato & Swiggy</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home Delivery -->
        <div role="tabpanel" class="tab-pane active" id="home-delivery">
          <div class="service-item" style="padding:20px;">
            <i class="fa-solid fa-bicycle fa-2x" style="margin-bottom:10px;"></i>
            <h4>Home Delivery</h4>
            <p>Quick and safe delivery at your doorstep.</p>
          </div>
        </div>

        <!-- Catering Services -->
        <div role="tabpanel" class="tab-pane" id="catering">
          <div class="service-item" style="padding:20px;">
            <i class="fa-solid fa-utensils fa-2x" style="margin-bottom:10px;"></i>
            <h4>Catering Services</h4>
            <p>Perfect for parties, events, and celebrations.</p>
          </div>
        </div>

        <!-- Zomato & Swiggy -->
        <div role="tabpanel" class="tab-pane" id="zom-swiggy">
          <div class="service-item" style="padding:20px;">
            <i class="fa-solid fa-truck fa-2x" style="margin-bottom:10px;"></i>
            <h4>Zomato & Swiggy</h4>
            <p>Order online easily through your favorite apps.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>
