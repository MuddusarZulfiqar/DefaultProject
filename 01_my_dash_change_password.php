<?php include_once "includes/header.php";?>
<div class="content-wrapper">
    <div class="pageHead">
        <div class="container">
            <h1>Change<span> Password</span></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img class="img-fluid" src="src/images/change_password_img.png" alt="change Password">
            </div>
            <div class="col-5">
                <form>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New Password"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"  placeholder="Confirm Password"/>
                    </div>
                    <div class="button-row">
                        <div class="inline-btn">
                            <button class="btn btn-secondary btn-lg">update</button>
                            <button class="btn btn-cancel btn-lg">cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
<?php include_once "includes/footer.php";?> 