<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Indika Motors POS</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="container">

    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-12 col-sm-10 col-md-6 col-lg-4">

            <div class="card shadow border-0">

                <div class="card-body p-4">

                    <!-- Logo / Title -->
                    <div class="text-center mb-4">

                        <h2 class="fw-bold">
                            Indika Motors
                        </h2>

                        <p class="text-muted mb-0">
                            Spare Parts POS
                        </p>

                    </div>


                    <!-- Login Form -->
                    <form>

                        <!-- Username -->
                        <div class="mb-3">

                            <label class="form-label">
                                Username
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter username"
                            >

                        </div>


                        <!-- Password -->
                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                class="form-control"
                                placeholder="Enter password"
                            >

                        </div>


                        <!-- Remember Me -->
                        <div class="form-check mb-3">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="remember"
                            >

                            <label
                                class="form-check-label"
                                for="remember"
                            >
                                Remember me
                            </label>

                        </div>


                        <!-- Login Button -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100"
                        >
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>