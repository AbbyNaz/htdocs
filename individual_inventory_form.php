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
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <br>
        <header>Individual Inventory Form</header>

        <br>

        <form action="addregister.php" method="POST">
            <div class="form first">

                <div class="fields">
                    <div class="input-field">
                        <label>School Year (S.Y.)</label>
                        <!-- <input type="date" name="sy" required> -->
                        <select id="date-dropdown" name="sy" required></select>
                    </div>
                    <div class="input-field">
                        <label>Tertiary (Semester)</label>
                        <select name="sem" required>
                            <option disabled selected>Select Semester</option>
                            <option>1st semester</option>
                            <option>2nd semester</option>
                            <option>Summer</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Senior High (Quarter)</label>
                        <select name="quarter" required>
                            <option disabled selected>Select Quarter</option>
                            <option>1st Quarter</option>
                            <option>2nd Quarter</option>
                            <option>3rd Quarter</option>
                            <option>4th Quarter</option>
                            <option>Summer</option>
                        </select>
                    </div>

                </div>

                <br>

                <fieldset>
                    <legend><span class="title">Personal Details</span></legend>
                    <div class="details_personal">
                        <div class="fields">
                            <div class="input-field">
                                <label>First Name</label>
                                <input type="text" name="fname" placeholder="Enter your first name" required>
                            </div>
                            
                            <div class="input-field">
                                <label>Middle Name</label>
                                <input type="text" name="mname" placeholder="Enter your middle name" required>
                            </div>

                            <div class="input-field">
                                <label>Last Name</label>
                                <input type="text" name="lname" placeholder="Enter your last name" required>
                            </div>

                            <div class="input-field">
                                <label>Student Number</label>
                                <input type="number" name="studnumber" placeholder="Enter your Student Number" required>
                            </div>

                            <div class="input-field">
                                <label>Year Level</label>
                                <select name="yearlevel" required>
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
                                <input type="text" name="programsection" placeholder="Enter your Program and Section" required>
                            </div>

                            <div class="input-field">
                                <label>Nickname</label>
                                <input type="text" name="nickname" placeholder="Enter your Nickname" required>
                            </div>

                            <div class="input-field">
                                <label>Nationality</label>
                                <input type="text" name="nationality" placeholder="Enter your nationality" required>
                            </div>

                            <div class="input-field">
                                <label>Gender</label>
                                <select name="gender" required>
                                    <option disabled selected>Select gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Civil Status</label>
                                <input type="text" name="status" placeholder="Enter civil status" required>
                            </div>

                            <div class="input-field">
                                <label>Religion</label>
                                <input type="text" name="religion" placeholder="Enter your religion" required>
                            </div>

                            <div class="input-field">
                                <label>Date of Birth</label>
                                <input type="date" name="dob" placeholder="Enter birth date" required>
                            </div>

                        </div>

                        <span class="title">User Account</span>
                        <div class="fields">
                    
                            <div class="input-field">
                                <label>Username / Email Address</label>
                                <input type="text" name="username" placeholder="Enter Username">
                            </div>
                    
                            <div class="input-field">
                                <label>Create Password</label>
                                <input type="text" name="create" placeholder="Enter Create Password">
                            </div>
                    
                            <div class="input-field">
                                <label>Retype Password</label>
                                <input type="text" name="retype" placeholder="Enter Retype Password">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <br><br>

                <fieldset>
                    <legend><span class="title">Contact Information</span></legend>
                    <div class="details_address">
                        <div class="fields">
                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number" name="mobile" placeholder="Enter mobile number">
                            </div>
                    
                            <div class="input-field">
                                <label>Email Address 1</label>
                                <input type="text" name="email1" placeholder="Enter your email">
                            </div>
                    
                            <div class="input-field">
                                <label>Email Address 2</label>
                                <input type="text" name="email2" placeholder="Enter your email">
                            </div>
                    
                            <div class="input-field">
                                <label>Home Number</label>
                                <input type="number" name="homenumber" placeholder="Enter mobile number">
                            </div>
                    
                            <div class="input-field">
                                <label>Present Address</label>
                                <input type="text" name="present" placeholder="Enter Present Address">
                            </div>
                            <div class="input-field">
                                <label>Permanent Address</label>
                                <input type="text" name="permanent" placeholder="Enter Permanent Address">
                            </div>
                            <div class="input-field">
                                <label>Provincial Address</label>
                                <input type="text" name="provincial" placeholder="Enter Present Address">
                            </div>
                        </div>
                    </div>


                    <div class="details_married">
                          
                        <span class="title">For married students only</span>
                        <div class="fields">
                    
                            <div class="input-field">
                                <label>First name</label>
                                <input type="text" name="married_first" placeholder="Enter first name of spouse">
                            </div>
                    
                            <div class="input-field">
                                <label>Last name</label>
                                <input type="text" name="married_last" placeholder="Enter last name of spouse">
                            </div>
                    
                            <div class="input-field">
                                <label>Age</label>
                                <input type="number" name="married_age" placeholder="Enter age of spouse">
                            </div>
                    
                            <div class="input-field">
                                <label>Working: </label>
                                <select name="work_status">
                                    <option disabled>Select if spouse is working</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                    
                            <div class="input-field">
                                <label>Occupation</label>
                                <input type="text" name="occupation" placeholder="Enter occupation of spouse">
                            </div>
                    
                            <div class="input-field">
                                <label>Contact Number</label>
                                <input type="number" name="married_contact" placeholder="Enter contact number">
                            </div>
                        </div>
                    </div>
                </fieldset>
               
                <br><br>

                <!----------------------------Family Background---------------------------->
                <fieldset>
                    <legend><span class="title">Family Background</span></legend>
                    <div class="details_familybackground">
                        <div class="fields">
                            
                            <div class="input-field">
                                <label>Status of Parent/s</label>
                                <select name="guardian_status">
                                    <option disabled>Select Status of Parent/s</option>
                                    <option>Married</option>
                                    <option>Living Together</option>
                                    <option>Single Parent</option>
                                    <option>Separated</option>
                                    <option>Divorced/Annulled</option>
                                    <option>Widowed/Widower</option>
                                    <option>Remarried</option>
                                </select>
                            </div>

                            <div class="input-field">
                                <label>Name of Guardian/s</label>
                                <input type="text" name="guardian_name" placeholder="Enter name of Guardian/s">
                            </div>

                            <div class="input-field">
                                <label>Address of Parent/s or Guardian/s</label>
                                <input type="text" name="guardian_address" placeholder="Enter Address of Guardian/s">
                            </div>

                            <div class="input-field">
                                <label>Contact Number of Guardian/s</label>
                                <input type="number" name="guardian_contact" placeholder="Enter contact number of Guardian/s">
                            </div>

                            <div class="input-field">
                                <label>In case of emergency, please name:</label>
                                <input type="text" name="guardian_emergency" placeholder="Enter Full Name">
                            </div>

                            <div class="input-field">
                                <label>In case of emergency, please contact:</label>
                                <input type="number" name="guardian_emergencyothercontact" placeholder="Enter contact number">
                            </div>
                            
                            
                            <table style="width: 100%">
                                <tr>
                                    <th class="table_Contents" style="border: none;" ></th>
                                    <th class="table_Header">Father</th>
                                    <th class="table_Header">Mother</th>
                                </tr>
                                <tr>
                                    <td class="table_Contents">Name</td>
                                    <td class="table_Contents">
                                        <input type="text" name="father_fullname" placeholder="Enter Father Name" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class="table_Contents">
                                        <input type="text" name="mother_fullname" placeholder="Enter Mother Name" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_Contents" style="width: 200px">Age</td>
                                    <td class="table_Contents">
                                        <input type="text" name="father_age" placeholder="Enter Father Age" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class="table_Contents">
                                        <input type="text" name="mother_age" placeholder="Enter Mother Age" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_Contents" style="width: 200px">Birthday</td>
                                    <td class="table_Contents">
                                        <input type="text" name="father_birthday" placeholder="Enter Father Birthday" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class="table_Contents">
                                        <input type="text" name="mother_birthday" placeholder="Enter Mother Birthday" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table_Contents" style="width: 200px">Nationality</td>
                                    <td class=" table_Contents">
                                        <input type="text" name="father_nationality" placeholder="Enter Father Nationality" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="mother_nationality" placeholder="Enter Mother Nationality" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents" style="width: 200px">Religion</td>
                                    <td class=" table_Contents">
                                        <input type="text" name="father_religion" placeholder="Enter Father Religion" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="mother_religion" placeholder="Enter Mother Religion" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents" style="width: 200px">Educational Attainment</td>
                                    <td class=" table_Contents">
                                        <input type="text" name="father_educational" placeholder="Enter Father Educational" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="mother_educational" placeholder="Enter Mother Educational" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents" style="width: 200px">Occupation</td>
                                    <td class=" table_Contents">
                                        <input type="text" name="father_occupation" placeholder="Enter Father Occupation" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="mother_occupation" placeholder="Enter Mother Occupation" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents" style="width: 200px">Contact Number</td>
                                    <td class=" table_Contents">
                                        <input type="text" name="father_contact" placeholder="Enter Father Contact" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="mother_contact" placeholder="Enter Mother Contact" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents" style="width: 200px">Company</td>
                                    <td class=" table_Contents">
                                        <input type="text" name="father_company" placeholder="Enter Company Name" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="mother_company" placeholder="Enter Company Name" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents" style="width: 200px">Monthly Income</td>
                                    <td class=" table_Contents">
                                        <input type="text" name="father_income" placeholder="Enter Father Income" style="width: 100%; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="mother_income" placeholder="Enter Mother Income" style="width: 100%; padding: 5px;">
                                    </td>
                                </tr>
                            </table>
                            

                            <span class="title">Sibling Order:</span>
                            <table class="tbl-style" style="width: 100%">
                                <tr>
                                    <th class="table_Header">Name</th>
                                    <th class="table_Header">Age</th>
                                    <th class="table_Header">Gender</th>
                                    <th class="table_Header">Program/Occupation</th>
                                    <th class="table_Header">School/Company</th>      
                                </tr>
                                <tr>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_name_one" placeholder="" style="width: 150px; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_age_one" placeholder="" style="width: 40px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_gender_one" placeholder="" style="width: 70px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_occupation_one" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_company_one" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_name_two" placeholder="" style="width: 150px; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_age_two" placeholder="" style="width: 40px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_gender_two" placeholder="" style="width: 70px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_occupation_two" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_company_two" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_name_three" placeholder="" style="width: 150px; padding: 5px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_age_three" placeholder="" style="width: 40px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_gender_three" placeholder="" style="width: 70px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_occupation_three" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                    </td>
                                    <td class=" table_Contents">
                                        <input type="text" name="sibling_company_three" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </fieldset>

                <br><br>
                
                <fieldset>
                    <legend><span class="title">Interests and Recreational Activities</span></legend>
                    <div>
                        <div class="fields">
                    
                            <div class="input-field">
                                <label>Sports</label>
                                <input type="text" name="sports" placeholder="Enter sports">
                            </div>
                    
                            <div class="input-field">
                                <label>Hobbies</label>
                                <input type="text" name="hobbies" placeholder="Enter hobbies">
                            </div>
                    
                            <div class="input-field">
                                <label>Talents</label>
                                <input type="text" name="talents" placeholder="Enter talents">
                            </div>
                    
                            <div class="input-field">
                                <label>Socio-civic</label>
                                <input type="text" name="socio" placeholder="Enter Socio-civic">
                            </div>
                    
                            <div class="input-field">
                                <label>School Organizations</label>
                                <input type="text" name="school_organization" placeholder="Enter School Organizations">
                            </div>
            
                        </div>
                    </div>
                </fieldset>

                <br><br>

                
                <fieldset>
                    <legend><span class="title">Work Experience</span></legend>
                    <div class="details_workexperience">

                        <table class="tbl-style" style="width: 100%">
                            <tr>
                                <th class="table_Header">Company</th>
                                <th class="table_Header">Position</th>
                                <th class="table_Header">Duration</th>
                                <th class="table_Header">Job Description</th>
                            </tr>
                            <tr>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_name_one" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_position_one" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_duration_one" placeholder="" style="width: 100px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_job_one" placeholder="" style="width: 200px; text-align: center; padding: 3px;">
                                </td>
                            </tr>
                            <tr>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_name_two" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_position_two" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_duration_two" placeholder="" style="width: 100px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_job_two" placeholder="" style="width: 200px; text-align: center; padding: 3px;">
                                </td>
                            </tr>
                            <tr>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_name_three" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_position_three" placeholder="" style="width: 180px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_duration_three" placeholder="" style="width: 100px; text-align: center; padding: 3px;">
                                </td>
                                <td class=" table_Contents">
                                    <input type="text" name="workexperience_job_three" placeholder="" style="width: 200px; text-align: center; padding: 3px;">
                                </td>
                            </tr>
                        </table>

                    </div>
                </fieldset>

                <div class="buttons">
                    <button type="submit" name="addregister" class="btn btn-primary btn-md"><span class="btnText">Save</span>
                        <i class="uil uil-navigator"></i></button>

                    <a href="homepage___index.php" class="btn btn-primary btn-md" style="background-color: #f44336; color: white; padding: 13px 25px; border-radius: 5px; text-align: center; text-decoration: none; display: inline-block;">Cancel</a>
                </div>

            </div>
        </form>
    </div>
</body>
</html>


<script>
    let dateDropdown = document.getElementById('date-dropdown');

    let currentYear = new Date().getFullYear();
    let earliestYear = 2010;

    while (currentYear >= earliestYear) {
      let dateOption = document.createElement('option');
      dateOption.text = currentYear;
      dateOption.value = currentYear;
      dateDropdown.add(dateOption);
      currentYear -= 1;
    }
</script>