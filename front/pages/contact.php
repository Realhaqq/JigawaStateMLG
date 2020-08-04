<?php include 'header_about.php';?>

    <main>

        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <div class="loader-element">
        <span class="loader-animated-dot"></span>
        <img src="../assets/img/ministry.png" height="40" alt="Impact logo">
    </div>
</div>

        <!-- Hero -->
        <section class="section-header bg-primary text-white pb-9 pb-lg-13 mb-4 mb-lg-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="display-2 mb-3">Got a question?</h1>
                        <p class="lead">Your feedback is valuable to us. If you have problems with your license, want to request a feature, or report a bug, we’re more than happy to help</p>
                    </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>
        <div class="section section-lg pt-0">
            <div class="container mt-n8 mt-lg-n13 z-2">
                <div class="row justify-content-center">
                    <div class="col-12">
                       <!-- Card -->
                       <div class="card border-light shadow-soft p-2 p-md-4 p-lg-5">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="firstNameLabel">First Name <span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                                </div>
                                                <input class="form-control" id="firstNameLabel" placeholder="John" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="lastNameLabel">Last Name <span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                                </div>
                                                <input class="form-control" id="lastNameLabel" placeholder="Doe" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="EmailLabel">Email <span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                </div>
                                                <input class="form-control" id="EmailLabel" placeholder="test@email.com" type="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="phonenumberLabel">Phone Number<span class="text-danger">*</span></label>
                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></span>
                                                </div>
                                                <input class="form-control" id="phonenumberLabel" placeholder="2347037716490" type="number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="phonenumberLabel">How can we help you?<span class="text-danger">*</span></label>
                                            <textarea class="form-control" placeholder="Hi Impact, I would like to ..." id="message-2" rows="8" required></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-secondary mt-4 animate-up-2"><span class="mr-2"><i class="fas fa-paper-plane"></i></span>Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-lg pt-0 line-bottom-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 text-center px-4 mb-5 mb-lg-0">
                        <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h5 class="mb-3">Email us</h5>
                        <p>
                            Email us for general queries, including marketing and partnership opportunities.                              
                        </p>
                        <a class="font-weight-bold text-primary" href="#">info@jigawastatemlg.ng</a>
                    </div>
                    <div class="col-12 col-md-4 text-center px-4 mb-5 mb-lg-0">
                        <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <h5 class="mb-3">Call us</h5>
                        <p>
                            Call us to speak to a member of our team.We are always happy to help you.                             
                        </p>
                        <a class="font-weight-bold text-primary" href="#">+2347037716490</a>
                    </div>
                    <div class="col-12 col-md-4 text-center px-4">
                        <div class="icon icon-sm icon-shape icon-shape-primary rounded mb-4">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5 class="mb-3">Support</h5>
                        <p>
                            Technical support for each product is given directly by the creators of Themesberg.                            
                        </p>
                        <a class="btn btn-sm btn-outline-primary" href="#">
                            Support Center
                            <span class="fas fa-long-arrow-alt-right ml-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        
<?php include 'footer.php';?>
