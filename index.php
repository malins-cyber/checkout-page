<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1,
  maximum-scale=5" />

  <link rel="icon" href="./public/images/devchallenges.png" />
  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="./public/css/PoppinsRegular.css">
  <link rel="stylesheet" href="./public/fontawesome/css/all.min.css">

  <link rel="shortcut icon" type="image/x-icon" href="https://devchallenges.io/" />

  <!-- 
    <link rel="shortcut icon" type="image/x-icon" href="https://devchallenges.io/" /> -->
  <!-- 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" /> -->

  <title>Devchallenges | checkout form</title>
</head>

<body>

  <div class="container">
    <div class="header">
      <h1>Checkout</h1>
    </div>
    <div class="main-content">
      <form class="main-form">
        <div class="contact-info">
          <p class="infor">contact information</p>
          <div class="form-group">
            <label for="email" id="email-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="email-label" placeholder="Enter your email..."
              required>
            <span id="icon">
              <i class="fas fa-envelope"></i>
            </span>
          </div>

          <div class="form-group">
            <label for="phone" id="phone-label" class="label">Phone</label>
            <input type="tel" class="form-control" name="tel" id="phone-label" placeholder="Enter your phone..."
              required>
            <span id="icon">
              <i class="fas fa-phone-alt"></i>
            </span>
          </div>
        </div>

        <div class="contact-details">
          <p class="infor">shipping address</p>
          <div class="form-group">
            <label for="name" id="name-label">Full Name</label>
            <input type="name" class="form-control" name="name" id="name-label" placeholder="rodney cotton" required>
            <span id="icon">
              <i class="fas fa-user-circle"></i>
            </span>
          </div>

          <div class="form-group">
            <label for="address" id="address-label">Address</label>
            <input type="text" class="form-control" name="address" id="address-label" placeholder="your address..."
              required>
            <span id="icon">
              <i class="fas fa-home"></i>
            </span>
          </div>

          <div class="form-group">
            <label for="city" id="city-label">City</label>
            <input type="text" class="form-control" name="city" id="city-label" placeholder="your city..." required>
            <span id="icon">
              <i class="fas fa-city"></i>
            </span>
          </div>

          <!-- two inputs one div-->
          <div class="closed">
            <div class="group">
              <label for="country" id="country-label">Country</label>
              <select name="dropdown" class="control code country"  required>
                <option value="student">your country...</option>
                <datalist>
                  <option value="zambia">UK</option>
                  <option value="zambia">USA</option>
                  <option value="zambia">Germany</option>
                  <option value="zambia">Russia</option>
                  <option value="zambia">South Africa</option>
                  <option value="zambia">China</option>
                  <option value="zambia">Canada</option>
                  <option value="zambia">France</option>
                  <option value="more">more countries..</option>
                </datalist>

              </select>
              <span id="icon">
                <i class="fas fa-globe-americas"></i>
              </span>
            </div>

            <div class="group">
              <label for="postal-code" id="postal-label">Postal-Code</label>
              <input type="text" class="control code" name="postal-label" placeholder="your postal code..." required>
              <span id="icon">
                <i class="fas fa-briefcase"></i>
              </span>
            </div>
          </div>

          <div>
            <label class="checkbox-input">
              <input type="checkbox" name="prefer" value="Front-end-Projects">
              save this information for next time
              <span class="checkbox-button"></span>
            </label>
          </div>

          <div class="form-button">
            <button type="submit" id="submit-btn" class="submit-button">
              continue
            </button>
          </div>

        </div>

      </form>

      <!-- small card -->
      <div class="checkout-card">
        <div class="card-one">
          <div id="image-div">
            <img src="./public/images/photo1.png" alt="">
          </div>
          <div class="listings">
            <p class="details">vintage bagback</p>
            <p class="price">
              <span id="price">$54.99</span>
              $94.99
            </p>
            
            <div class="quantity">
              <div class="minus">
                <i class="fas fa-minus"></i>
              </div>
              <p class="number">1</p>
              <div class="plus">
                <i class="fas fa-plus"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="card-two">
          <div id="image-div">
            <img src="./public/images/photo2.png" alt="">
          </div>
          <div class="listings">
            <p class="details">levi shoes</p>
            <p class="price">
              <span id="price">$74.99</span>
              $124.99
            </p>
            <div class="quantity">

              <div class="minus">
                <i class="fas fa-minus"></i>
              </div>
              <p class="number">1</p>
              <div class="plus">
                <i class="fas fa-plus"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="check-out">
          <div class="shipping">
            <p>shipping</p>
            <p>$19</p>
          </div>
          <div class="total">
            <p>total</p>
            <p>$148.98</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>
