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
                    <div class="col-12">
                        <h4 ma>SOCIAL MEDIAS</h4>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <label for="inputAddress" class="form-label">Linkedin</label>
                        <input type="text" class="form-control" id="inputlinkedin">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <label for="inputAddress" class="form-label">Github</label>
                        <input type="text" class="form-control" id="inputgithub">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <label for="inputAddress" class="form-label">Twitter</label>
                        <input type="text" class="form-control" id="inputtwitter">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <label for="inputAddress" class="form-label">Website</label>
                        <input type="text" class="form-control" id="inputwebsite">
                    </div>
                    <br><br><br>
                    <div class="col-12">
                        <h4>LANGUAGE</h4>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <select class="form-select select2" name="states[]" multiple="multiple">
                            <option value="Bengali">Bengali</option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <a href="add_personal_info.php" class="btn btn-info" role="button">Previous</a>
        <a href="add_education.php" class="btn btn-info" role="button">Next</a>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <script src="script.js"></script>
    </section>
</body>

</html>
