<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
                <div class="card pt-4 pb-2 login-form shadow">
                    <div v-if="$page.props.flash.success" class="d-flex justify-content-center text-center">
                        <div class="alert alert-warning alert-dismissible fade show w-75">
                            <strong>Atención!</strong> "Message_error_example"
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="title">Iniciar Sesión</h3>

                        <p>Accede a tu cuenta para empezar.</p>
                    </div>

                    <form>
                        <div class="mb-4">
                            <label class="mb-1 text-dark">Email</label>
                            <input type="email" class="form-control form-control" value="hello@example.com">
                        </div>
                        <div class="mb-4 position-relative">
                            <label class="mb-1 text-dark">Password</label>
                            <input type="text" id="dlab-password" class="form-control form-control" value="Password">
                            <span class="show-pass eye active">

                                <i class="fa fa-eye-slash"></i>
                                <i class="fa fa-eye"></i>

                            </span>
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                            <div class="mb-4">
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                    <label class="form-check-label mt-1" for="customCheckBox1">Remember my preference</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <a href="page-forgot-password.html" class="btn-link text-primary">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <h6 class="login-title"><span>Or continue with</span></h6>

                        <div class="mb-3">
                            <ul class="d-flex align-self-center justify-content-center">
                                <li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
                                <li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
                                <li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
                            </ul>
                        </div>
                        <p class="text-center">Not registered?
                            <a class="btn-link text-primary" href="#">Register</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>