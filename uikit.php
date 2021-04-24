<?php include_once "includes/header.php";?>
    <div class="container">
        <div class="grid" data-item-gap="20">
            <h1>Headings</h1>

            <h1>Heading 1 24px</h1>
            <h2>Heading 2 22px</h2>
            <h3>Heading 3 20px</h3>
            <h4>Heading 4 16px</h4>
            <h4 class="section-head">
                <span class="icon" data-step="1"><img src="src/images/svg/screen-icon.svg" alt=""></span>
                <span>Heading 3 Section-Head 16px</span>
            </h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        
            <h6>Paragraph</h6>
        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati explicabo harum eligendi hic amet debitis consectetur iure. Sed dolorum, reprehenderit odit ipsa laborum culpa fugiat.</p>
        
            <h6>Buttons</h6>

            <div class="grid" grid-item-width="1/2" data-item-gap="10">
                <button class="btn btn-primary">Primary</button>
                <button class="btn btn-primary big">Primary big</button>
                <button class="btn btn-secondary">Secondary</button>
                <button class="btn btn-cancel">cancel</button>
                <!-- <button class="btn btn-primary big">Primary Big</button> -->
                <!-- <button class="btn btn-primary"><i class="fas fa-plus"></i>Primary</button>
                <button class="btn btn-primary arrow-right">Upload and Next<span></span></button> -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary">LOG IN</button>
                    <button  type="button" class="btn btn-primary">register</button>
                </div>
            </div>

            <h6>Form Controls</h6>
            <div class="grid" grid-item-width="1/2" data-item-gap="10">
                <div class="form-group">
                    <label class="control-label">Name </label>
                    <div>
                        <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Screen Size </label>
                    <div class="fields-group">
                        <input type="text" class="form-control" placeholder="Height">
                        <input type="text" class="form-control" placeholder="Width">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Minimum Duration </label>
                    <div>
                        <select class="selectpicker">
                            <option>1 Week</option>
                            <option>2 Week</option>
                            <option>3 Week</option>
                            <option>4 Week</option>
                            <option>5 Week</option>
                            <option>6 Week</option>
                            <option>7 Week</option>
                            <option>8 Week</option>
                            <option>9 Week</option>
                            <option>10 Week</option>
                            <option>1 Year</option>
                            <option>2 Year</option>
                            <option>3 Year</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <h1 class="mb-3">Radio Buttons</h1>
                    <label class="control-label">Would you like us to assist on location?</label>
                    <ul class="list-inline">
                        <li class="radio list-inline-item">
                            <label>
                                <input type="radio" name="radio" checked="">
                                <span>Yes</span>
                            </label>
                        </li>
                        <li class="radio list-inline-item">
                            <label>
                                <input type="radio" name="radio">
                                <span>No</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="form-group">
                    <h1 class="mb-3">CheckBox</h1>
                    <label class="control-label">Would you like us to assist on location?</label>
                    <ul class="list-inline">
                        <li class="checkbox list-inline-item">
                            <label>
                                <input type="checkbox" name="checkbox" checked="">
                                <span>Yes</span>
                            </label>
                        </li>
                        <li class="radio list-inline-item">
                            <label>
                                <input type="checkbox" name="checkbox">
                                <span>No</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div></div>
                <div class="form-group">
                    <div class="has-label">
                        <input type="text" class="form-control" placeholder="Enter Name">
                        <span class="info-label">KD</span>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="fields-group">
                        <textarea class="form-control" placeholder="Description (Arabic)"></textarea>
                    </div>
                </div>
                <div class="form-group type-file">
                    <div class="file-wrapper">
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="file-name">
                        <span class="file_name">Logo-my-company.pdf</span>
                        <span class="cross">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                <use xlink:href="#cross"></use>
                            </svg>
                        </span>
                    </div>
                </div>
                <div></div>
                
            </div>
            <div class="form-group uploadFile">
                    <label class="control-label">Images <span class="note">(upto 4 images)</span></label>                    
                    <div class="grid" data-item-gap="20" grid-item-width="1/4">
                        <div class="uploadFile__item">
                            <div class="uploadFile__item--file">
                                <input type="file" name="file">
                            </div>
                            
                        </div>
                    </div>
                </div>
            <h6>Property Item</h6>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="properties">
                        <div class="property__item">
                            <div class="property__item--image">
                                <img src="src/images/house.png" alt="" class="img-fluid">
                                <div class="overlay">
                                    <button class="btn btn-secondary">explore</button>
                                </div>
                                <span class="property__item--type">buy</span>
                                <span class="property__item--save"></span>
                                <span class="property__item--delete">
                                    <svg width="30px" height="30px" fill="#be1f2c" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                        <use xlink:href="#delete-icon"></use>
                                    </svg>
                                </span>
                                <span class="property__item--verified"></span>
                            </div>
                            <div class="property__info">
                                <p class="property__info--title mb-3">sui house</p>
                                <p class="property__info--location mb-3"><img class="icon" src="src/images/svg/location.svg" alt="" > Ahmed Al Jaber Street , Sahrq</p>
                                <div class="property__info--features mb-3">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <img src="src/images/svg/bed.svg" alt="">
                                            </div>
                                            <div>
                                                6
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="src/images/svg/bath.svg" alt="">
                                            </div>
                                            <div class="icons_label">
                                                3
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="src/images/svg/kitchen.svg" alt="">
                                            </div>
                                            <div>
                                                3
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property__organizor">
                                <div class="d-flex align-items-center">
                                    <div class="property__organizor--image">
                                        <img  src="src/images/card_logo.png" alt="" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="property__organizor--name">
                                        <span>BY</span>
                                        Gulf Investment Co.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <h6>
                PopUps
            </h6>
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
                        SignIn
                    </button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#forgetPassword">
                        Forget Password
                    </button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signIn">
                        SignIn
                    </button>   
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerInd">
                        Registration (Individual)
                    </button>   
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerland">
                        Registration (Landlords/Organization)
                    </button>   
                </div>
            </div>
        </div>
    </div> 
<?php include_once "includes/footer.php";?>