<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Library</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <!-- Vendor CSS Files -->
   <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
 
  </head>
  <body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="<?php echo base_url(); ?>"><span>The Library</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php">About</a></li>
            <li><a class="nav-link scrollto" href="index.php">Services</a></li>
            <li><a class="nav-link scrollto " href="index.php">Portfolio</a></li>
            <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
            <li class="dropdown"><a href="#"><span>Get Involved</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
               
                    <li><a href="<?php echo base_url(); ?>donation">Proud Donor</a></li>
                    <li><a href="<?php echo base_url(); ?>request_book">Request for Books</a></li>
                    <li><a href="<?php echo base_url(); ?>volunteer">Volunteer/Intern</a></li>
                   
                
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="<?php echo base_url();?>">Back</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->
  <main id="main">
<!-- Request form section start -->
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Request book form</h3>
                      
                    
                     <form action="/code/requestAbook" method="post" class="row needs-validation" novalidate>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                           <label for="validationCustom01" class="form-label">Name</label>
                           <input type="text" class="form-control" id="validationCustom01" name="name"  required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                         </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                           <label for="validationCustom01" class="form-label">Institute Name</label>
                           <input type="text" class="form-control" id="validationCustom01"  name="institute_name" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                         </div>
                        </div>
                      </div>
      
                      <div class="row">
                       <div class="col-md-6 mb-4">
                          <div class="form-outline">
                           <label for="validationemail" class="form-label">Email</label>
                           <input type="email" class="form-control" id="validationemail"  name="email" required>
                           <div class="valid-feedback">
                            Looks good!
                           </div>
                         </div>
                        </div>
                         <div class="col-md-6 mb-4">
                          <div class="form-outline">
                           <label for="validationDefaultContact" class="form-label">Contact</label>
                           <input type="tel" class="form-control" id="validationDefaultContact" name="contact" required>
                           <div class="valid-feedback">
                             Looks good!
                          </div>
                          </div>
                        </div>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="Female" required/>
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="Male" required/>
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="gender" id="otherGender"
                            value="Other" required/>
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                      </div>

                      <div class="col-mb-4">
                        <div class="form-outline">
                         <label for="validationCustom04" class="form-label">Address</label>
                         <input type="text" class="form-control" id="validationCustom04" name="address" required>
                         <div class="invalid-feedback">
                          Please provide a valid address.
                         </div>
                       </div>
                      </div>
            
                      <div class="col-mb-4">
                        <div class="form-outline">
                         <label for="validationCustom04" class="form-label">Pincode</label>
                         <input type="text" class="form-control" id="validationCustom04" name="pincode" required>
                         <div class="invalid-feedback">
                          Please provide a valid pincode.
                         </div>
                       </div>
                      </div>

                      <div class="col-mb-4">
                        <div class="form-outline">
                         <label for="validationCustom05" class="form-label">Occupation</label>
                         <input type="text" class="form-control" id="validationCustom05"  name="occupation" required>
                         <div class="invalid-feedback">
                          Please provide a valid Occupation.
                         </div>
                       </div>
                     </div>
      
                      <div class="col-mb-4">
                          <div class="form-outline">
                           <label for="validationCustom05" class="form-label">Type Of Books</label> 
                           <input type="text" class="form-control" id="validationCustom05" name="type_of_books" required>
                           <div class="invalid-feedback">
                            Please provide a valid type.
                           </div>
                         </div>
                       </div>
      
                       <div class="col-mb-4">
                        <div class="form-outline">
                         <label for="validationCustom05" class="form-label">Total Number Of Books</label>
                         <input type="text" class="form-control" id="validationCustom05" name="total_no_of_books" required>
                         <div class="invalid-feedback">
                          Please provide a valid number.
                         </div>
                       </div>
                     </div>
      
                     <div class="col-mb-4">
                      <div class="form-outline">
                       <label for="validationCustom05" class="form-label">Purpose Of Books</label>
                       <input type="text" class="form-control" id="validationCustom05" name="purpose_of_books" required>
                       <div class="invalid-feedback">
                        Please provide a valid Purpose.
                       </div>
                     </div>
                   </div>
    

                      <div class="d-flex justify-content-end pt-3">
                        <button class="btn btn-warning" type="submit">Submit form</button>
                         <!-- <a href="<?php echo base_url().'welcome/index';?>" class="btn btn-warning" type="submit">Submit</a> -->
                       </div>
      
                     
                     </form>
      
                    </div>
 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </main><!-- End #main -->
    <script src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp" crossorigin="anonymous"></script>
     <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
    </script>  

<?php include "include/footer.php"; ?>