<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./css/individual_inventory___style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--GOOGLE FONTS (MONTESERRAT)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;800;900&display=swap" rel="stylesheet">

    <title>STI College Angeles-Individual Inventory Form </title> 

</head>
<body>
    <div class="container">
        <header>Individual Inventory Form</header>

        <form action="#">
            <div class="form first">

                <div class="fields">
                    <div class="input-field">
                        <label>School Year (S.Y.)</label>
                        <input type="date"required> 
                        <!--change to year to year-->
                    </div>
                    <div class="input-field">
                        <label>Tertiary (Semester)</label>
                        <select required>
                            <option disabled selected>Select Semester</option>
                            <option>1st semester</option>
                            <option>2nd semester</option>
                            <option>Summer</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Senior High (Quarter)</label>
                        <select required>
                            <option disabled selected>Select Quarter</option>
                            <option>1st Quarter</option>
                            <option>2nd Quarter</option>
                            <option>3rd Quarter</option>
                            <option>4th Quarter</option>
                            <option>Summer</option>
                        </select>
                    </div>

                </div>


                <fieldset>
                    <legend><span class="title">Personal Details</span></legend>
                    <div class="details_personal">
                        <div class="fields">
                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter your first name" required>
                            </div>
                            
                            <div class="input-field">
                                <label>Middle Name</label>
                                <input type="text" placeholder="Enter your middle name" required>
                            </div>

                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter your last name" required>
                            </div>

                            <div class="input-field">
                                <label>Student Number</label>
                                <input type="number" placeholder="Enter your Student Number" required>
                            </div>

                            <div class="input-field">
                                <label>Year Level</label>
                                <select required>
                                    <option disabled selected>Select Year Level</option>
                                    <option>Grade 11</option>
                                    <option>Grade 12</option>
                                    <option>First Year</option>
                                    <option>Second Year</option>
                                    <option>Third Year</option>
                                    <option>Fourth Year</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Program and Section</label>
                                <input type="text" placeholder="Enter your Program and Section" required>
                            </div>

                            <div class="input-field">
                                <label>Nickname</label>
                                <input type="text" placeholder="Enter your Nickname" required>
                            </div>

                            <div class="input-field">
                                <label>Nationality</label>
                                <input type="text" placeholder="Enter your nationality" required>
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <select required>
                                    <option disabled selected>Select gender</option>
                                    <option>Male</option>
                                    <option>Female</option>

                                </select>
                            </div>

                            <div class="input-field">
                                <label>Status</label>
                                <input type="text" placeholder="Enter your status" required>
                            </div>

                            <div class="input-field">
                                <label>Religion</label>
                                <input type="text" placeholder="Enter your religion" required>
                            </div>

                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" placeholder="Enter birth date" required>
                            </div>

                        </div>
                         <div class="buttons">

                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                    </div>
                </fieldset>

            </div>
                 




            <div class="form second">
               






            </div>




                <!--
            <div class="fourth form"></div>        
                    
                    <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Grandfather</label>
                            <input type="text" placeholder="Enter grandfther name" required>
                        </div>

                        <div class="input-field">
                            <label>Spouse Name</label>
                            <input type="text" placeholder="Enter spouse name" required>
                        </div>

                        <div class="input-field">
                            <label>Father in Law</label>
                            <input type="text" placeholder="Father in law name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother in Law</label>
                            <input type="text" placeholder="Mother in law name" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>  -->


            </div>
        </form>
    </div>

    <script>
        const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");

        nextBtn.addEventListener("click", ()=> {
            allInput.forEach(input => {
                if(input.value != ""){
                    form.classList.add('secActive');
                }else{
                    form.classList.remove('secActive');
                }
            })
        })

        backBtn.addEventListener("click", () => form.classList.remove('secActive'));
    
    </script>

    
</body>
</html>