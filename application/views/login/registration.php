<div class="fixed-background"></div>
<main>
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                <div class="card auth-card">
                    <div class="position-relative image-side ">
                        <p class=" text-white h2">MAGIC IS IN THE DETAILS</p>
                        <p class="white mb-0">
                            Please use this form to register.
                            <br>If you are a member, please
                            <a href="#" class="white">login</a>.
                        </p>
                    </div>
                    <div class="form-side">
                        <a href="Dashboard.Default.html">
                            <span class="logo-single"></span>
                        </a>
                        <h6 class="mb-4">Register</h6>
                        <form class="user" method="post" action="<?= base_url('Login'); ?>">
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" />
                                <span>Name</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" />
                                <span>E-mail</span>
                            </label>
                            <label class="form-group has-float-label mb-4">
                                <input class="form-control" type="password" placeholder="" />
                                <span>Password</span>
                            </label>
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="btn btn-primary btn-lg btn-shadow" type="submit">REGISTER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>