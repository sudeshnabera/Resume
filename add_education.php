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
                        <h4>EDUCATION</h4>
                    </div>
                    <div class="col-12">
                        <div id="educationContainer">


                            <!-- Initial education entry -->
                            <div class="education-entry row">
                                <div class="col-12">
                                    <label for="institute" class="form-label">College/Institute</label>
                                    <input type="text" class="form-control" name="institute[]">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="degree" class="form-label">Degree</label>
                                    <input type="text" class="form-control" name="degree[]">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="major" class="form-label">Major</label>
                                    <input type="text" class="form-control" name="major[]">
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <label for="gpa" class="form-label">Percentage/GPA</label>
                                    <input type="text" class="form-control" name="gpa[]">
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <label for="passingYear" class="form-label">Passing
                                        Year</label>
                                    <input type="text" class="form-control" name="passingYear[]">
                                </div>
                                <div class="border-top my-3"></div>
                            </div>

                        </div>
                        <button type="button" class="btn btn-secondary" role="button" id="addEducation" onclick="addEducationEntry()">Add
                            Education</button>

                    </div>
                </div>
                <br><br>
                <a href="add_socialmedias.php" class="btn btn-info" role="button">Previous</a>
                <a href="projects_and_skills.php" class="btn btn-info" role="button">Next</a>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

                <script src="script.js"></script>
    </section>
</body>

</html>