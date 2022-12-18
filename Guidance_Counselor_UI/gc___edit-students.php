<?php
    include('includes/gc___header.php');
    include('includes/gc___left-menu-area.php');
    include('includes/gc___top-menu-area.php');
    include('includes/gc___mobile_menu.php');
?>

 <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Student</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Basic Information</a></li>
                                <li><a href="#reviews"> Edit Account Information</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="#" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="number" type="text" class="form-control" placeholder="Fly Zend" value="Fly Zend">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="E104, catn-2, UK." value="E104, catn-2, UK.">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="12/10/1993" value="12/10/1993">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" placeholder="1213" value="1213">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="number" class="form-control" placeholder="01962067309" value="01962067309">
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="department" type="text" class="form-control" placeholder="Department">
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="description" placeholder="Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="gender" class="form-control">
                                                                        <option value="none" selected="" disabled="">Select Gender</option>
                                                                        <option value="0">Male</option>
                                                                        <option value="1">Female</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select id="country" class="form-control" onchange="disabledstate">
                                                                            <option value="none" selected="" disabled="">Select city</option>
                                                                            <option value="0">San Fernando</option>
                                                                            <option value="1">Mabalacat</option>
                                                                            <option value="2">Angeles</option>
                                                                        </select>
                                                                        <div id="0" class="group">
                                                                            <div class="form-group">
                                                                                <select name="state" class="form-control">
                                                                                    <option value="none" selected="" disabled="">Select state</option>
                                                                                    <option value="0">San Luis</option>
                                                                                    <option value="1">San Simon</option>
                                                                                    <option value="2">Santa Ana</option>
                                                                                    <option value="3">Santa Rita</option>
                                                                                    <option value="4">Santo tomas</option>
                                                                                    <option value="5">Sasmuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div id="1" class="group">
                                                                            <div class="form-group">
                                                                                <select name="state" class="form-control">
                                                                                    <option value="none" selected="" disabled="true">Select state</option>
                                                                                    <option value="0">Macabebe</option>
                                                                                    <option value="1">Magalang</option>
                                                                                    <option value="2">Masantol</option>
                                                                                    <option value="3">Mexico</option>
                                                                                    <option value="4">Minalin</option>
                                                                                    <option value="5">Porac</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div id="2" class="group">
                                                                            <div class="form-group">
                                                                                <select name="state" class="form-control">
                                                                                    <option value="none" selected="" disabled="true">Select state</option>
                                                                                    <option value="0">Apalit</option>
                                                                                    <option value="1">Arayat</option>
                                                                                    <option value="2">Bacolor</option>
                                                                                    <option value="3">Candaba</option>
                                                                                    <option value="4">Floridablanca</option>
                                                                                    <option value="5">Guagua</option>
                                                                                    <option value="6">Lubao</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                
                                                               
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Email" value="Admin@gmail.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Phone" value="01962067309">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password" value="#123#123">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Confirm Password" value="#123#123">
                                                            </div>
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="devit-card-custom">
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Facebook URL" value="http://www.facebook.com">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Twitter URL" value="http://www.twitter.com">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Google Plus" value="http://www.google-plus.com">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Linkedin URL" value="http://www.Linkedin.com">
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php 
    include('includes/gc___scripts.php');
?>