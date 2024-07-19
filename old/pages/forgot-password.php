<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9 d-flex align-items-center" style="height: 100vh;">

            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                        and we'll send you a link to reset your password!</p>
                                </div>
                                <form class="user" action="./?page=forgot-password" method="post">
                                    <div class="form-group">
                                        <label for="username">Username or Email</label>
                                        <input type="email" class="form-control form-control-user" id="username" name="username" placeholder="Enter Email Address or Username">
                                    </div>
                                    <button type="submit" name="forget-password" class="btn btn-primary btn-user btn-block">
                                        Submit
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="./?page=login">Back to Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>