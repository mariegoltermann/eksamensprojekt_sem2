<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */
get_header(); ?>

<style>

#splash-section {
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .column-right {
    position: relative;
    display: grid;
    place-items: center center;
    width: 100%;
    height: 100%;
  }

  .product-container{
    position: relative;
    display: grid;
    place-items: center center;
    width: 35%;
    right: 4vw;
    top: -5%;
  }

  .product {
    position: absolute;
    aspect-ratio: 64 / 120;
    background-color: black;
    width: 100%;
    transform-origin: 40% 140%;
    background-size: cover;
    filter: brightness(0.4);
    transition: transform 0.3s cubic-bezier(0.5, 1, 0.66, 1), width 0.3s cubic-bezier(0.5, 1, 0.66, 1), filter 0.3s cubic-bezier(0.5, 1, 0.66, 1);
  }

  .vitamin-boost {
    background-image: url("https://ucarecdn.com/21559504-fb8f-4ef1-84f9-d4b00609a601/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2016.45.52.png");
  }

  .energy-boost {
    background-image: url("https://ucarecdn.com/103a14b8-1b2b-4986-97ee-d77280cf8ed2/-/format/auto/-/preview/3000x3000/-/quality/lighter/Sk%C3%A6rmbillede%202021-11-12%20kl.%2014.34.32.png");
  }

  .healthy-teeth {
    background-image: url("https://ucarecdn.com/6dfe6abf-ff50-4566-93bd-d95bacf05b3e/-/format/auto/-/preview/3000x3000/-/quality/lighter/EACE%20HEALTHY%20TEETH%20MOCKUP%20ISOLATED.jpg");
  }

  [data-index="1"] {
    z-index: 3;
    transform: rotateZ(-15deg);
    width: 105%;
    filter: brightness(1);
  }

  [data-index="2"] {
    z-index: 2;
    transform: rotateZ(5deg);
  }

  [data-index="3"] {
    z-index: 1;
    transform: rotateZ(25deg);
  }

  .fan-btn {
    position: absolute;
    padding: 16px 8px;
    border: 0;
    background-color: rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s;
    z-index: 10;
  }

  .fan-btn:hover {
    background-color: rgba(0, 0, 0, 0.3);
  }

  .previous {
    left: 12px;
  }

  .next {
    right: 12px;
  }

		#splashimage{
			width: 100%;
			height: 90vh;
			background-color: #F5F8FA;
			display:grid;
			grid-template-columns: 1fr 1fr;
			align-items: center;
		}
	#splashimage h1{
		font-size: 4rem;
	}
	.swiper {
  width: 37vh;
    height: auto;
}
	.splash_text{
		display: grid;
		height:auto;
		align-items: center;
    justify-items: center;
	}

	#sort_bar1{
		background-color:black;
		height: 400px;
		display: grid;
		align-items: center;
    justify-items: center;

	}
	#sort_bar1 h1{
		color:white;
		font-size: 5rem;
	}

	</style>


<section id="splash-section">
  <div class="column-left">
		<div class="splash_text">
  		<h1>GUM + <br>VITAMIN <br>BOOST </h1>
		</div>
	</div>
  <div class="column-right">
    <div class="product-container">
      <div data-index="1" class="product vitamin-boost"></div>
      <div data-index="2" class="product energy-boost"></div>
      <div data-index="3" class="product healthy-teeth"></div>
    </div>
    <button class="fan-btn previous">←</button>
    <button class="fan-btn next">→</button>
  </div>
</section>

<section id="sort_bar1">
	<h1>NEXT GENERATION CHEWING GUM </h1>

</section>

<script>

	/* konfigurer nedestående variabler efter behov */
	//antallet af produkter som er vist på splashbilledet
	const maxProductsIndex = 3;
	/* ^------------------------------------------^ */

	//laver en array af elementer med klassen .product
	const products = document.querySelectorAll(".product");

	//bladre frem knap
	document.querySelector(".next").addEventListener("click", () => {
		products.forEach((product) => {
			//hvis data-index værdien er lig med eller mindre end 1
			if (product.dataset.index <= 1) {
				//sæt data-index værdien til antallet af produkter
				product.dataset.index = maxProductsIndex;
			} else {
				//ellers træk 1 fra data-index værdien
				product.dataset.index--;
			}
		});
	});

	//bladre tilbage knap
	document.querySelector(".previous").addEventListener("click", () => {
		products.forEach((product) => {
			//hvis data-index værdien er lig med eller større end antallet af produkter
			if (product.dataset.index >= maxProductsIndex) {
				//sæt data-index værdien til 1
				product.dataset.index = 1;
			} else {
				//ellers læg 1 til data-index værdien
				product.dataset.index++;
			}
		});
	});

</script>

<?php get_footer(); ?>