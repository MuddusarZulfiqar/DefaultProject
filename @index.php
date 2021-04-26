<?php $ishome = 1; include_once "includes/header.php";?>      
    <div class="content-wrapper">
    	<div class="searchProperty">
            <div class="semiCircle"></div> 
            <div class="bg"></div>
            <div class="container">
                <h1 class="text-center">Find Your <span>Perfect place</span></h1>
                <div class="searchProperty__input">
                    <input type="text" class="form-control" placeholder="Where do you want to search?">
                </div>
            </div>
            
        </div>
        <div class="invest">
            <div class="container">
                <h2 class="sectionTitle">How To Invest</h2>
                <div class="slick-instance" data-slick='{"slidesToShow": 4, "slidesToScroll": 1}'>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img1.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Sell a Property</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img2.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Rent a Property</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img3.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Buy a Property</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img4.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Exchange a Properties</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lifestyle">
            <div class="container">
                <h2 class="sectionTitle text-center">Find Properties based on your lifestyle</h2>
                <div class="lifestyle__content">
                    <div class="lifestyle__content--head">
                        <ul class="nav nav-tabs" id="lifestyle" role="tablist">
                            <li class="nav-item">
                                <a data-title="home" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <svg fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-title="Commerical" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <svg fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 324.49">
                                        <use xlink:href="#building"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-title="Shopping" class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <svg fill="currentColor" id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 376 352">
                                        <use xlink:href="#shop"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-title="Offices" class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <svg fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-title="Apartments" class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <svg fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a data-title="view all" href="" class="nav-link" aria-controls="contact" aria-selected="false">
                                    <svg fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>   
                    </div>
                    <div class="lifestyle__content--body">
                        <div class="container">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   	</div>
<?php include_once "includes/footer.php";?>

<style>
    
</style>