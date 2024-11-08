@extends('frontend.layouts.master')

@section('title','Show Project')

@section('style')
<style>
    .cont {
        max-width: 457px;
        margin: 2rem auto;
      }

      .product-card {
        background-color: var(--card-background);
        border-radius: 20px;
        height: 457px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      }

      .product-card__image {
        height: 250px;
        overflow: hidden;
      }

      .product-card__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
      }

      .product-card:hover .product-card__image img {
        transform: scale(1.05);
      }

      .product-card__info {
        padding: 20px;
        position: absolute;
        margin-top: 68px;

      }

      .product-card__title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--text-color);
      }

      .product-card__description {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 20px;
      }

      .product-card__price-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .product-card__price {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--primary-color);
      }

      .product-card__btn {
        background-color: var(--primary-color);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .product-card__btn {
        background-color: #c71729;
      }

      @media (max-width: 480px) {
        .cont {
          max-width: 100%;
          padding: 0 20px;
        }

        .product-card__image {
          height: 200px;
        }

        .product-card__title {
          font-size: 1.3rem;
        }

        .product-card__description {
          font-size: 0.8rem;
        }

        .product-card__price {
          font-size: 1.1rem;
        }

        .product-card__btn {
          padding: 8px 16px;
          font-size: 0.8rem;
        }
      }
</style>
<style>

/******* Fonts Import Start **********/
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
/********* Fonts Face CSS End **********/

/******* Common Element CSS Start ******/
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-family: "Roboto", sans-serif;
  font-size: 16px;
}
.clear {
  clear: both;
}
img {
  max-width: 100%;
  border: 0px;
}
ul,
ol {
  list-style: none;
}
a {
  text-decoration: none;
  color: inherit;
  outline: none;
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
a:focus,
a:active,
a:visited,
a:hover {
  text-decoration: none;
  outline: none;
}
a:hover {
  color: #e73700;
}
h2 {
  margin-bottom: 48px;
  padding-bottom: 16px;
  font-size: 20px;
  line-height: 28px;
  font-weight: 700;
  position: relative;
  text-transform: capitalize;
}
h3 {
  margin: 0 0 10px;
  font-size: 28px;
  line-height: 36px;
}
button {
  outline: none !important;
}
/******* Common Element CSS End *********/

/* -------- title style ------- */
.line-title {
  position: relative;
  width: 400px;
}
.line-title::before,
.line-title::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 4px;
  border-radius: 2px;
}
.line-title::before {
  width: 100%;
  background: #f2f2f2;
}
.line-title::after {
  width: 32px;
  background: #e73700;
}

/******* Middle section CSS Start ******/
/* -------- Landing page ------- */
.game-section {
  padding: 60px 50px;
}
.game-section .owl-stage {
  margin: 15px 0;
  display: flex;
  display: -webkit-flex;
}
.game-section .item {
  margin: 0 15px 60px;
  width: 320px;
  height: 400px;
  display: flex;
  display: -webkit-flex;
  align-items: flex-end;
  -webkit-align-items: flex-end;
  background: #343434 no-repeat center center / cover;
  border-radius: 16px;
  overflow: hidden;
  position: relative;
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
  cursor: pointer;
}
.game-section .item.active {
  width: 500px;
  box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 12px 40px 40px rgba(0, 0, 0, 0.25);
}
.game-section .item:after {
  content: "";
  display: block;
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
  background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
}
.game-section .item-desc {
  padding: 0 24px 12px;
  color: #fff;
  position: relative;
  z-index: 1;
  overflow: hidden;
  transform: translateY(calc(100% - 54px));
  -webkit-transform: translateY(calc(100% - 54px));
  transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
}
.game-section .item.active .item-desc {
  transform: none;
  -webkit-transform: none;
}
.game-section .item-desc p {
  opacity: 0;
  -webkit-transform: translateY(32px);
  transform: translateY(32px);
  transition: all 0.4s ease-in-out 0.2s;
  -webkit-transition: all 0.4s ease-in-out 0.2s;
}
.game-section .item.active .item-desc p {
  opacity: 1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
.game-section .owl-theme.custom-carousel .owl-dots {
  margin-top: -20px;
  position: relative;
  z-index: 5;
}
/******** Middle section CSS End *******/

/***** responsive css Start ******/

@media (min-width: 992px) and (max-width: 1199px) {
  h2 {
    margin-bottom: 32px;
  }
  h3 {
    margin: 0 0 8px;
    font-size: 24px;
    line-height: 32px;
  }

  /* -------- Landing page ------- */
  .game-section {
    padding: 50px 30px;
  }
  .game-section .item {
    margin: 0 12px 60px;
    width: 260px;
    height: 360px;
  }
  .game-section .item.active {
    width: 400px;
  }
  .game-section .item-desc {
    transform: translateY(calc(100% - 46px));
    -webkit-transform: translateY(calc(100% - 46px));
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  h2 {
    margin-bottom: 32px;
  }
  h3 {
    margin: 0 0 8px;
    font-size: 24px;
    line-height: 32px;
  }
  .line-title {
    width: 330px;
  }

  /* -------- Landing page ------- */
  .game-section {
    padding: 50px 30px 40px;
  }
  .game-section .item {
    margin: 0 12px 60px;
    width: 240px;
    height: 330px;
  }
  .game-section .item.active {
    width: 360px;
  }
  .game-section .item-desc {
    transform: translateY(calc(100% - 42px));
    -webkit-transform: translateY(calc(100% - 42px));
  }
}

@media (max-width: 767px) {
  body {
    font-size: 14px;
  }
  h2 {
    margin-bottom: 20px;
  }
  h3 {
    margin: 0 0 8px;
    font-size: 19px;
    line-height: 24px;
  }
  .line-title {
    width: 250px;
  }

  /* -------- Landing page ------- */
  .game-section {
    padding: 30px 15px 20px;
  }
  .game-section .item {
    margin: 0 10px 40px;
    width: 200px;
    height: 280px;
  }
  .game-section .item.active {
    width: 270px;
    box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);
  }
  .game-section .item-desc {
    padding: 0 14px 5px;
    transform: translateY(calc(100% - 42px));
    -webkit-transform: translateY(calc(100% - 42px));
  }
}

</style>
@endsection


@section('content')
	<!-- start header top -->
	 @include('frontend.inc.top_header')
	<!-- end header top -->

	<!-- start first div of page -->
	<div id="page">


		<!-- start header -->
		 @include('frontend.inc.menu')
		<!-- end header -->

		<!-- start main -->
        <main class="bg_gray">
            <div style="padding-top: 0" class="container-fluid margin_60_35 add_bottom_30">

               <div class="container-fluid">


                <section class=" game-section">
                    <h2 class="line-title container">trending games</h2>
                    <div class="owl-carousel custom-carousel owl-theme">
                      <div class="item active" style="background-image: url(https://www.yudiz.com/codepen/expandable-animated-card-slider/dota-2.jpg);">
                        <div class="item-desc">
                          <h3>Dota 2</h3>
                          <p>Dota 2 is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the
                            Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
                        </div>
                      </div>
                      <div class="item" style="background-image: url(https://www.yudiz.com/codepen/expandable-animated-card-slider/winter-3.jpg);">
                        <div class="item-desc">
                          <h3>The Witcher 3</h3>
                          <p>The Witcher 3 is a multiplayer online battle arena by Valve. The game is a sequel to Defense
                            of the Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
                        </div>
                      </div>
                      <div class="item" style="background-image: url(https://www.yudiz.com/codepen/expandable-animated-card-slider/rdr-2.jpg);">
                        <div class="item-desc">
                          <h3>RDR 2</h3>
                          <p>RDR 2 is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the
                            Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
                        </div>
                      </div>
                      <div class="item" style="background-image: url(https://www.yudiz.com/codepen/expandable-animated-card-slider/pubg.jpg);">
                        <div class="item-desc">
                          <h3>PUBG Mobile</h3>
                          <p>PUBG 2 is a multiplayer online battle arena by Valve. The game is a sequel to Defense of the
                            Ancients, which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
                        </div>
                      </div>
                      <div class="item" style="background-image: url(https://www.yudiz.com/codepen/expandable-animated-card-slider/fortnite.jpg);">
                        <div class="item-desc">
                          <h3>Fortnite</h3>
                          <p>Battle royale where 100 players fight to be the last person standing. which was a community-created mod
                            for Blizzard Entertainment's Warcraft III.</p>
                        </div>
                      </div>
                      <div class="item" style="background-image: url(https://www.yudiz.com/codepen/expandable-animated-card-slider/far-cry-5.jpg);">
                        <div class="item-desc">
                          <h3>Far Cry 5</h3>
                          <p>Far Cry 5 is a 2018 first-person shooter game developed by Ubisoft.
                            which was a community-created mod for Blizzard Entertainment's Warcraft III.</p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </section>

               </div>
            </div>
            <!-- /container -->
        </main>
		<!-- end main -->

@endsection

@section('script')
    <script>
        $(".custom-carousel").owlCarousel({
            autoWidth: true,
            loop: true
            });
            $(document).ready(function () {
            $(".custom-carousel .item").click(function () {
                $(".custom-carousel .item").not($(this)).removeClass("active");
                $(this).toggleClass("active");
            });
        });

    </script>
@endsection
