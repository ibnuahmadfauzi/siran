<?php include 'assets/templates/functions.php'; ?>
<?php headerSection('assets/styles/my-style.css', 'Home'); ?>

<div class="container">
    <?php navbar('', 'quiz.php', 'classroom.php', 'course.php'); ?>

    <div class="row my-1">
        <div class="col-lg-6">
            <div class="card m-3">
                <div class="card-header bg-success text-light">
                    <h3 class="fw-bold m-0 text-center">
                        Login
                    </h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="username" class="form-control form-control-sm" placeholder="Enter your username ..." required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Enter your password ..." required>
                        </div>
                        <div class="mb-3 form-check">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                </div>
                                <div class="col-lg-6">
                                    <a href="" class="float-end text-decoration-none">Forgot Password ?</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button type="submit" class="btn btn-dark fw-bold btn-sm w-50"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-3">
                <div class="card-header bg-success text-light">
                    <h3 class="fw-bold m-0 text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full Name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter your full name ..." required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm" placeholder="Enter your email ..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Select Roles</label>
                            <select class="form-select form-select-sm" aria-label="Small select example">
                                <option value="">Select Roles</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Enter your username ..." required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-sm" placeholder="Enter your password ..." required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control form-control-sm" placeholder="Re-Enter your password ..." required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <button type="submit" class="btn btn-dark fw-bold btn-sm w-50"><i class="fas fa-user-plus"></i> Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php footerSection('assets/scripts/my-script.js'); ?>