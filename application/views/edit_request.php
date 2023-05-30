<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  

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
    <div class="navbar navbar-dark bg-dark">
         <div class="container">
            <a herf="<?php echo base_url().'admin/index';?>" class="navbar-brand">REQUEST BOOK</a>
         </div>
    </div>
    <div class="container" style="padding-top: 10px;">
             <h3>Update Request</h3>
              <hr>
              <?php //print_r($user->institute_name); die; ?>
        <div class="row">
           <form method="post" name="createUser" action="<?php echo base_url().'library/request_book/edit_request/'.$user->id ?>"> 
            <div class="mb-3">
              <label >Name</label>
              <input type="text" name="name" value="<?= $user->name ?>" class="form-control">
              <?php echo form_error('name');?>
             </div>

             <div class="mb-3">
              <label >Institute Name</label>
              <input type="text" name="institute_name" value="<?= $user->institute_name ?>" class="form-control">
              <?php echo form_error('institute_name');?>
             </div>

             <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" value="<?= $user->email?>" class="form-control">
              <?php echo form_error('email');?>
             </div>

             <div class="mb-3">
              <label>Contact</label>
              <input type="tel" name="contact" value="<?= $user->contact?>" class="form-control">
              <?php echo form_error('contact');?>
             </div>

             <div class="mb-3">
              <label>Gender</label>
              <input type="text" name="gender" value="<?= $user->gender?>" class="form-control">
              <?php echo form_error('gender');?>
             </div>

             <div class="mb-3">
              <label>Address</label>
              <input type="text" name="address" value="<?= $user->address?>" class="form-control">
              <?php echo form_error('address');?>
             </div>

             <div class="mb-3">
              <label>Pincode</label>
              <input type="text" name="pincode" value="<?= $user->pincode?>" class="form-control">
              <?php echo form_error('pincode');?>
             </div>

             <div class="mb-3">
              <label>Occupation</label>
              <input type="text" name="occupation" value="<?= $user->occupation?>" class="form-control">
              <?php echo form_error('occupation');?>
             </div>

             <div class="mb-3">
              <label>Type of books</label>
              <input type="text" name="type_of_books" value="<?= $user->type_of_books?>" class="form-control">
              <?php echo form_error('type_of_books');?>
             </div>

             <div class="mb-3">
              <label>Total books</label>
              <input type="text" name="total_no_of_books" value="<?= $user->total_no_of_books?>" class="form-control">
              <?php echo form_error('total_no_of_books');?>
             </div>

             <div class="mb-3">
              <label>Purpose of books</label>
              <input type="text" name="purpose_of_books" value="<?= $user->purpose_of_books?>" class="form-control">
              <?php echo form_error('purpose_of_books');?>
             </div>
         
             <button type="submit" class="btn btn-primary">Update</button>
              <a href="<?php echo base_url().'library/request_book/index';?>" class="btn-secondary btn">Cancel</a>
          </form>
      </div>
   </div>
                      
                   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  </body>
</html>

