
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />
    <title>Malak webshop</title>
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg px-4 sticky">
        <a class="navbar-brand" href="#"
          ><img src="img/malak 2016.png" alt="" width="100" height="100"
        /></a>
        <div class="collapse navbar-collapse" id="myNav">
          <ul class="navbar-nav mx-auto text-capitalize">
            <li class="nav-item active">
              <a class="nav-link" href="#">home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#store">store</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="contact.html">contact us</a>
            </li>
          </ul>

          <div class="nav-info-items d-none d-lg-flex">
            <div
              class="nav-info align-items-center d-flex justify-content-between mx-lg-5"
            ></div>
          </div>
        </div>

        <div class="navbar-nav text-capitalize">
          <div
            id="cart-info"
            class="nav-info align-items-center cart-info d-flex justify-content-between"
          >
            <span class="cart-info__icon mr-lg-3"
              ><i class="fas fa-shopping-cart"></i
            ></span>
            <p class="mb-0 text-capitalize">
              <span id="item-count">0 </span> items
              <span class="item-total"></span>
            </p>
          </div>
        </div>
      </nav>
      <!-- end of nav -->

      <div class="container-fluid">
        <div class="row max-height justify-content-center align-items-center">
          <div class="col-10 mx-auto banner text-center">
            <h1 class="ml13">Fashion and quality at the best price</h1>
          </div>
        </div>
      </div>
      <div id="cart" class="cart">
        <!-- cart total -->
        <div
          class="cart-total-container d-flex justify-content-around text-capitalize mt-5"
        >
          <h5><strong id="cart-total" class="font-weight-bold"></strong></h5>
        </div>
        <!-- end cart total -->
        <!-- cart buttons -->
        <div class="cart-buttons-container mt-3 d-flex justify-content-between">
          <a
            id="clear-cart"
            class="btn btn-outline-secondary btn-black text-uppercase"
            >clear cart</a
          >

          <!--end of cart buttons -->
        </div>
      </div>
      <!--end of banner  -->
    </header>
    <section class="about py-6" id="about">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto col-md-4 my-5">
            <h1 class="text-capitalize">
              about <strong class="banner-title">us</strong>
            </h1>
            <p class="my-6 text-muted w-65">
              we believe everybody should feel great to show themselves.
              Therefore, our aim is to support people in expressing their
              personality freely through fashion. Our passionate Fashion team
              empowers our customers to use fashion as expression by inspiring
              them with a diverse range of brands and styles. They are
              responsible for bringing our vision to life with focus is on the
              customer and therefore on countless different personalities, which
              are expressed through fashion with the help of ABOUT YOU. As
              online fashion platform, we follow our own path in the world of
              fashion pioneering in the field of fashion e-discovery. Do you
              want to follow it with us? Take the chance and become a part of
              our Fashion team!
            </p>
          </div>
          <div class="col-10 mx-auto col-md-6 align-self-center my-3">
            <div class="aboutus-img__container">
              <img
                src="img/High-Fashion-photography.jpg"
                class="img-fluid"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- store -->
    <section id="store" class="store py-5">
      <div class="container"></div>

      <!-- store items -->
      <div class="row" id="store-items">
        <!-- single item -->
        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="001" class="card">
            <div class="img-container">
              <img
                src="img/fleurige-Ibiza-jumpsuit-rood.jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name">flower jumpsuit</h5>
                <h5 class="store-item-value">
                  &euro;
                  <strong id="store-item-price" class="font-weight-bold"
                    >40</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="002" class="card">
            <div class="img-container">
              <img
                src="img/friends (2).jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name2">friends top</h5>
                <h5 class="store-item-value">
                  €<strong id="store-item-price2" class="font-weight-bold"
                    >15,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="003" class="card">
            <div class="img-container">
              <img src="img/h).jpg" class="card-img-top store-img" alt="" />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name3">black-smocked dres</h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price3" class="font-weight-bold"
                    >35</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="004" class="card">
            <div class="img-container">
              <img
                src="img/bags with pearls.jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name4">bag with pearls</h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price4" class="font-weight-bold"
                    >25</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="005" class="card">
            <div class="img-container">
              <img
                src="img/large earing).jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name5">purple-large earings</h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price5" class="font-weight-bold"
                    >12</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="006" class="card">
            <div class="img-container">
              <img src="img/hand.jpg" class="card-img-top store-img" alt="" />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name6">
                  Hand-shaped Earrings
                </h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price6" class="font-weight-bold"
                    >10</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="007" class="card">
            <div class="img-container">
              <img
                src="img/transparent bag.jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name7">transparent belt bag</h5>
                <h5 class="store-item-value">
                  €<strong id="store-item-price7" class="font-weight-bold"
                    >15</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="008" class="card">
            <div class="img-container">
              <img
                src="img/hairbandjpg.jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name8"></h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price8" class="font-weight-bold"
                    >5,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="009" class="card">
            <div class="img-container">
              <img
                src="img/maxi skirt.jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name9">Maxi brown skirt</h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price9" class="font-weight-bold"
                    >21,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="010" class="card">
            <div class="img-container">
              <img
                src="img/jeans jumpsuit.jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name10">jeans jump-suit</h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price10" class="font-weight-bold"
                    >36,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="011" class="card">
            <div class="img-container">
              <img
                src="img/hmgoepprod (1).jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name11">black jumpsuit</h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price11" class="font-weight-bold"
                    >20</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="012" class="card">
            <div class="img-container">
              <img
                src="img/marlien monro (2).jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name12">marlien monro top</h5>
                <h5 class="store-item-value">
                  €<strong id="store-item-price12" class="font-weight-bold"
                    >15</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="013" class="card">
            <div class="img-container">
              <img
                src="img/hoed (3).jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name13">brown straw hat</h5>
                <h5 class="store-item-value">
                  €<strong id="store-item-price13" class="font-weight-bold"
                    >9,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="014" class="card">
            <div class="img-container">
              <img
                src="img/kersoorhang.jpg"
                class="card-img-top store-img"
                alt=""
              />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name14">Cherry-shaped earrings</h5>
                <h5 class="store-item-value">
                  €<strong id="store-item-price14" class="font-weight-bold"
                    >9,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="015" class="card">
            <div class="img-container">
              <img src="img/(3).jpg" class="card-img-top store-img" alt="" />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name15">Belt with eyelets</h5>
                <h5 class="store-item-value">
                  €<strong id="store-item-price15" class="font-weight-bold"
                    >12,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-10 col-sm-6 col-lg-3 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="016" class="card">
            <div class="img-container">
              <img src="img/(4).jpg" class="card-img-top store-img" alt="" />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name16">metal Belt</h5>
                <h5 class="store-item-value">
                  €<strong id="store-item-price16" class="font-weight-bold"
                    >12,99</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-10 col-sm-6 col-lg-6 mx-auto my-3 store-item clothes"
          data-item="clothes"
        >
          <div id="017" class="card">
            <div class="img-container">
              <img src="img/jurk.jpg" class="card-img-top store-img" alt="" />
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div
                class="card-text d-flex justify-content-between text-capitalize"
              >
                <h5 id="store-item-name17">flower dress</h5>
                <h5 class="store-item-value">
                  €
                  <strong id="store-item-price17" class="font-weight-bold"
                    >50</strong
                  >
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-ride="carousel"
    >
      <h2 class="text-center font-weight-bold">New Arrival</h2>
      <ol class="carousel-indicators">
        <li
          data-target="#carouselExampleIndicators"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-60 m-md-auto"
            src="img/15965260408710f88bb156ef7e7da6dcbf90d789c6_thumbnail_405x552.webp"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/7983192093_2_1_1.webp"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/gold.jpg"
            alt="Third slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/bags.jpg"
            alt="fourth slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/12.webp"
            alt="fifth slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/bags_1.webp"
            alt="sixth slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/nasa.jpg"
            alt="Seventh slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/mickey mouse (3).jpg"
            alt="VII slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/nasa 2 (3).jpg"
            alt="9 slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-60 m-md-auto"
            src="img/nasa11 (3).jpg"
            alt="10 slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container-fluid shipping">
      <div class="row">
        <div class="col-12">
          <div col-md-9>
            <div class="row">
              <div class="col--sm-6 col-lg-3 d-flex mt-4 ml-lg-5">
                <div>
                  <i class="fas fa-shipping-fast fa-2x"></i>
                </div>
                <div class="align-items-center w-100 pl-3">
                  <h2 class="font-weight-bold mb-0">
                    Fast shipping
                  </h2>
                  <p class="woord font-weight-bold">
                    We guarantee fast processing of your package. It will be
                    sent as Bpack 24, which is delivered within 24 hours after
                    collection. If your package has been paid before noon on a
                    weekday, it will be processed and picked up that day. You
                    will normally receive it on the bus the next day. If it is
                    ordered or paid for after 12 pm, it will be collected on the
                    afternoon of the next working day and you will receive it
                    the following day. This does not apply to International
                    shipments, they can take longer. Because we have multiple
                    locations, it is possible that purchases with multiple items
                    are split across the different locations, which can cause
                    delays in shipping.
                  </p>
                </div>
              </div>
              <div class="col--sm-6 col-lg-3 d-flex mt-4 ml-lg-5">
                <div>
                  <i class="far fa-money-bill-alt fa-2x"></i>
                  <i class="fas fa-exchange-alt fa-2x"></i>
                </div>
                <div class="align-items-center w-100 pl-3">
                  <h2 class="font-weight-bold mb-0">
                    Easy return
                  </h2>
                  <p class="woord font-weight-bold">
                    If an item is not to your liking or does not fit, you can
                    return it to us and we will refund your money. In your
                    package you will find an Easy-return sticker that you can
                    use for the return shipment. The return costs are € 4.95 (€
                    6.50 for foreign shipments) and will be deducted from your
                    refund. You do not have to pay anything at the Post itself.
                  </p>
                </div>
              </div>
              <div class="col--sm-6 col-lg-3 d-flex mt-4 ml-lg-5">
                <div>
                  <i class="fas fa-gifts fa-2x"></i>
                </div>
                <div class="align-items-center w-100 pl-3">
                  <h2 class="font-weight-bold mb-0">
                    Free Shipping
                  </h2>
                  <p class="woord font-weight-bold">
                    If the purchase amount is higher than 100 €, we will bear
                    the shipping costs.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid footer">
      <div class="row">
        <div class="col-12">
          <div col-md-9>
            <div class="row">
              <div class="col-12 mr-lg-auto">
                <h1>Need Help?</h1>
              </div>
              <div class="col--sm-6 col-lg-3 d-flex mt-4 ml-lg-5">
                <div>
                  <i class="fas fa-phone-square-alt fa-2x"></i>
                </div>
                <div class="align-items-center w-100 pl-3">
                  <h2 class="font-weight-bold mb-0">
                    phone
                  </h2>
                  <p class="number">
                    0484619318 <br />mon-fri <strong>(9am-14pm)</strong>
                  </p>
                </div>
              </div>
              <div class="col--sm-6 col-lg-3 d-flex mt-4 ml-lg-5">
                <div>
                  <i class="fab fa-whatsapp fa-2x"></i>
                </div>
                <div class="align-items-center w-100 pl-3">
                  <h2 class="font-weight-bold mb-0">
                    WhatsUp
                  </h2>
                  <p class="number">
                    0484619318 <br />mon-fri <strong>(9am-18pm)</strong>
                  </p>
                </div>
              </div>
              <div class="col--sm-6 col-lg-3 d-flex mt-4 ml-lg-5">
                <div>
                  <i class="fas fa-envelope fa-2x"></i>
                </div>
                <div class="align-items-center w-100 pl-3">
                  <h2 class="font-weight-bold mb-0">
                    E-mail
                  </h2>
                  <p class="number">
                    send an email to
                    <br />
                    <a href="mailto:susan_1985_2006@yahoo.com"
                      >susan_1985_2006@yahoo</a
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 d-flex mt-4 m-lg-5">
        <a href="https://www.instagram.com/susanne.omar85/" target="_blank"
          ><i class="fab fa-instagram fa-2x"></i
        ></a>
        <p class="insta">Instagram</p>
      </div>
      <p class="copy">&copy; 2020 Design by Susanne omar</p>
    </div>
    <?php wp_footer() ?>
    <div id="confirmation" class="">
      <p>Your item has been added to the cart.</p>
    </div>

    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
   
    <script src="js/script.js"></script>
   
    <!-- end of scripts -->
  </body>
</html>
