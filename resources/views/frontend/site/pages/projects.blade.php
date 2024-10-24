@extends('frontend.layouts.master')

@section('title','Projects')

@section('style')
<style>
    .cont {
        max-width: 457px;
        margin: 2rem auto;
      }

      .product-card {
        background-color: var(--card-background);
        border-radius: 20px;
        height:440px;
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
        margin-top: 42px;

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
        background-color: #575353;
        margin: -10px;
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
    .product-card {
    position: relative;
    padding-bottom: 50px; /* Adjust this value depending on the height of the button */
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
}

.product-card__price-row {
    position: absolute;
    bottom: 5px;
    left: 0;
    right: 0;
    text-align: center;
}

.product-card__btn {
    display: inline-block;
    background-color: #575353;
    padding: 10px 15px;
    border-radius: 5px;
    color: white;
    margin-bottom: 5px; /* The 5px margin you want */
    text-decoration: none;
}

.product-card__btn:hover {
    background-color: #575353;
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
        <main class="">
            <div style="padding-top: 0" class="container margin_60_35 add_bottom_30">
                <div class="container my-5">
                    <div class="row g-4">
                      <!-- projects -->
                      @foreach ($projects as $project)
                      <div class="col-md-4">
                        <div class="cont">
                            <div class="product-card">
                                <div class="product-card__image">
                                    <img src="{{ Voyager::image($project->project_image)  }}" alt="{{ $project->getTranslatedAttribute('project_name') }}">
                                </div>
                                <div class="product-card__info">
                                    <h3 class="product-card__title">{{ $project->getTranslatedAttribute('project_name') }}</h3>
                                    <div class="product-card__price-row">
                                        <a href="{{ route('subprojects' , $project->project_slug) }}" style="text-decoration: none;color: white;" class="product-card__price product-card__btn">{{ __('site.view_all_projects') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      @endforeach
                    <!-- projects -->
                    </div>

                  <!-- start the project pagination -->
                  <div class="pagination__wrapper my-4">
                    <ul class="pagination">
                        {{ $projects->links('pagination::bootstrap-4') }}
                    </ul>
                  </div>
                  <!-- end the projects paginations -->
                </div>
            </div>
            <!-- /container -->
        </main>
		<!-- end main -->

@endsection