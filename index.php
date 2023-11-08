<!-- index.html -->
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Resume Creator</title>
        <!-- style link here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
                integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
                crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="index_style.css">
</head>

<body>
        <!-- input container starts here -->
        <section class="resume-builder">
                <div class="container bg-secondary">
                        <h1>Resume Creator</h1>
                        <div class="resume_container">
                                <div class="mb-1">
                                        <label for="formFile" class="form-label">Uplode your Image</label>
                                        <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="input-group">
                                        <span class="input-group-text">First and last name</span>
                                        <input type="text" aria-label="First name" class="form-control">
                                        <input type="text" aria-label="Last name" class="form-control">
                                </div>
                                <br>
                                <select class="form-select" aria-label="Default select example">

                                        <option value="1">Experience</option>
                                        <option value="2">Fresher</option>

                                </select>
                                <br>



                                <div class="row">
                                        <div class="col-12">
                                                <h4>Profile</h4>
                                        </div>
                                        <div class="col-md-12 col-lg-12">

                                                <!-- <label for="exampleFormControlTextarea1" class="form-label"></label> -->
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="4"> </textarea>

                                        </div>
                                        <div class="col-12">
                                                <h4> INFO</h4>
                                        </div>
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
                                        <div class="col-12">
                                                <h4> SOCIAL MEDIAS</h4>
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


                                <!-- <div class="col-12">
                                                <h4>EDUCATION</h4>
                                        </div>
                                       
                                        <div class="col-md-12 col-lg-6">

                                                <label for="inputAddress" class="form-label">Degree</label>
                                                <input type="text" class="form-control" id="inputlinkedin">
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                                <label for="inputAddress" class="form-label">Major</label>
                                                <input type="text" class="form-control" id="inputgithub">
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                                <label for="inputAddress" class="form-label">Collage/Institute</label>
                                                <input type="text" class="form-control" id="inputtwitter">
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                                <label for="inputAddress" class="form-label">Percentage/GPA</label>
                                                <input type="text" class="form-control" id="inputwebsite">
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                                <label for="inputAddress" class="form-label">Passing Year</label>
                                                <input type="text" class="form-control" id="inputwebsite">
                                        </div> -->

                                <div class="col-12">
                                        <h4>EDUCATION</h4>
                                </div>
                                <div class="col-12">
                                        <div id="educationContainer">
                                        
                                        
                                                <!-- Initial education entry -->
                                                <div class="education-entry row">
                                                        <div class="col-12">
                                                                <label for="institute"
                                                                        class="form-label">College/Institute</label>
                                                                <input type="text" class="form-control"
                                                                        name="institute[]">
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
                                                                <label for="gpa"
                                                                        class="form-label">Percentage/GPA</label>
                                                                <input type="text" class="form-control" name="gpa[]">
                                                        </div>
                                                        <div class="col-md-12 col-lg-6">
                                                                <label for="passingYear" class="form-label">Passing
                                                                        Year</label>
                                                                <input type="text" class="form-control"
                                                                        name="passingYear[]">
                                                        </div>
                                                        <div class="border-top my-3"></div>
                                                </div>
                                                
                                        </div>
                                        <button type="button" id="addEducation" onclick="addEducationEntry()">Add Education</button>

                                </div>


                               
                           
                               


                                <br><br>

                                <div class="row">
                                        <div class="col-12">
                                                <h4>PROJECTS</h4>
                                        </div>
                                        <div class="col-md-12 col-lg-6">

                                                <label for="inputAddress" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="inputlinkedin">
                                        </div>
                                        <div class="col-md-12 col-lg-6">

                                                <label for="exampleFormControlTextarea1"
                                                        class="form-label">Drescription</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="1" > </textarea>


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
                        </div>
                </div>


                <br>
                <!-- preview button -->
                <button onclick="hide()">
                        Generate / Edit
                </button>
<template id="edu-box">
        <!-- Initial education entry -->
        <div class="education-entry row">
                                                        <div class="col-12">
                                                                <label for="institute"
                                                                        class="form-label">College/Institute</label>
                                                                <input type="text" class="form-control"
                                                                        name="institute[]">
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
                                                                <label for="gpa"
                                                                        class="form-label">Percentage/GPA</label>
                                                                <input type="text" class="form-control" name="gpa[]">
                                                        </div>
                                                        <div class="col-md-12 col-lg-6">
                                                                <label for="passingYear" class="form-label">Passing
                                                                        Year</label>
                                                                <input type="text" class="form-control"
                                                                        name="passingYear[]">
                                                        </div>
                                                        <div class="border-top my-3"></div>
                                                </div>
</template>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

                <script src="script.js"></script>

</body>

</html>