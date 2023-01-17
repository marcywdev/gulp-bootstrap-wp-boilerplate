<?php
/**
 * The front-page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();
?>

<main class="container py-5">
    <h1>Gulp 4 Build Process with Bootstrap 5</h1>

    <section class="mt-5 p-5 shadow-lg bg-body rounded">
        <p>Example highlighting Bootstrap variable theme overrides for the colors <code>$primary</code> and <code>$secondary</code>. <br/>
            Place all theming variable overrides in <code>assets/scss/bootstrap/variable-overrides.scss</code>. <br/>
            Reference <code>bootstrap/scss/variables.scss</code> in Bootstrap source for all available theme overrides.<br/><br/>
            <a href="https://getbootstrap.com/docs/5.2/customize/sass/" target="_blank" class="d-flex align-items-center">
                Bootstrap Customization documentation (v5.2.3)
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right ms-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                </svg>
            </a>
        </p>
        <button class="btn btn-primary">Primary button</button>
        <button class="btn btn-secondary">Secondary button</button>
    </section>

    <section class="mt-5 p-5 shadow-lg bg-body rounded">
        <h2>Toasts</h2>
        <p>Example of a Bootstrap <a href="https://getbootstrap.com/docs/5.2/components/toasts/" target="_blank">Toast</a>.</p>
        <div class="toast show align-items-center text-white bg-secondary border-0" id="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body text-black">
                    Hello, world! This is a toast message.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </section>

    <section class="mt-5 p-5 shadow-lg bg-body rounded">
        <h2>Carousels</h2>
        <p>Example of including the individual CSS & JS component files needed for
            <a href="https://getbootstrap.com/docs/5.2/components/carousel/" target="_blank">Bootstrap carousels</a>. <br/>
            Refer to <code>assets/js/app.js</code> and <code>assets/scss/bootstrap/custom.scss</code>.</p>
        <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/random/900x400?landscape" class="img-fluid d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/900x400?city" class="img-fluid d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/900x400?night" class="img-fluid d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="mt-5 p-5 shadow-lg bg-body rounded">
        <h2>Dropdowns</h2>
        <p><a href="https://getbootstrap.com/docs/5.2/components/dropdowns/" target="_blank">Dropdowns</a> require the
            inclusion of the third party library Popper for positioning and viewport detection which is included for you
            in the component JS.</p>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item active" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
    </section>
</main>

<?php
get_footer();
