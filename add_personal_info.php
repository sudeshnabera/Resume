<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resume Creator</title>
    <!-- Style links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="index_style.css">


</head>

<body Style=background-image:image.jpg height=100px>
    <!-- Input container starts here -->
    <section class="resume-builder">
        <div class="container">
            <h1>Resume Creator</h1>

            <div class="resume_container">
                <div class="row">
                    <div class="mb-4">
                        <label for="formFile" class="form-label">Uplode your Image</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">First and last name</span>
                        </div>
                        <input type="text" class="form-control">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <select class="form-select" aria-label="Default select example">
                    </div>
                    <option value="1">Experience</option>
                    <option value="2">Fresher</option>

                    </select>
                    <div class="col-12">
                        <h4>Profile</h4>
                    </div>
                    <div class="col-md-12 col-lg-12">

                        <!-- <label for="exampleFormControlTextarea1" class="form-label"></label> -->
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"> </textarea>

                    </div>
                    <div class="col-12">
                        <h4> INFO</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">

                            <label for="inputPhone" class="form-label">Phone</label>
                            <input type="phone" class="form-control" id="inputPhone">
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                    </div>
                </div>
                <br>

                <div class="col-12 d-flex justify-content-end">
                    <a href="add_socialmedias.php" class="btn btn-info" role="button">Next</a>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <script src="script.js"></script>
    </section>
</body>

</html>