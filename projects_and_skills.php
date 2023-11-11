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
                        <h4>PROJECTS</h4>
                    </div>

                    <div id="projects-section" class="col-12">

                        <div class="row"> 
                            <div class="col-md-12 col-lg-6">

                                <label for="inputAddress" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputlinkedin">
                            </div>
                            <div class="col-md-12 col-lg-6">

                                <label for="exampleFormControlTextarea1" class="form-label">Drescription</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"> </textarea>


                            </div>
                            <div class="border-top my-3 col-12"></div>
                        </div>   
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-info" role="button" onclick="addProjectsSection()">
                            Add Projects
                        </button>
                    </div>
                    
                    <div class="col-12">
                        <h4>Skills</h4>
                    </div>
                    <div class="col-12">
                        <select class="form-select select2" name="states[]" multiple="multiple">
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="php">PHP</option>
                            <option value="Java">Java</option>
                            <option value="Python">Python</option>
                            <option value="C">C</option>
                            <option value="C++">C++</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Bootstrap">Bootstrap</option>

                        </select>
                    </div>
                </div>
                <br><br>
                <div class="col-12 d-flex justify-content-between">
                <a href="add_education.php" class="btn btn-info" role="button">Previous</a>
                <a href="#" class="btn btn-info" role="button"> Generate / Edit</a>
                </div>
            </div>
        </div>
        <script>
            function addProjectsSection() {
                // Create a new div for the "Projects" section
                var projectsDiv = document.createElement("div");

                // Add content to the "Projects" section
                projectsDiv.innerHTML = `
                <div class="row"> 
                    <div class="col-md-12 col-lg-6">
                        <label for="inputAddress" class="form-label">Title</label>
                        <input type="text" class="form-control" id="inputlinkedin">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                    <div class="border-top my-3 col-12"></div>
                </div>
                `;

                // Append the "Projects" section to the projects-section div
                document.getElementById("projects-section").appendChild(projectsDiv);
            }
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <script src="script.js"></script>
    </section>
</body>

</html>