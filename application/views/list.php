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
            <a herf="<?php echo base_url().'admin/index';?>" class="navbar-brand">DONATION</a>
         </div>
    </div>
    <div class="container" style="padding-top: 20px;">
      <div class="row">
        <div class="col-md-12">
            <?php
            $success = $this->session->userdata('success');
            if($success != ""){
                ?>
                <div class="alert alert-success"><?php echo $success;?></div>
             <?php
            }
           ?>
            <?php
            $failure = $this->session->userdata('failure');
            if($failure != ""){
                ?>
                <div class="alert alert-success"><?php echo $failure;?></div>
             <?php
            }
           ?>
        </div>
      </div>
       <div class="row">
        <div class="col-md-8">
             <div class="col-6"><h3>View Donor</h3></div>
                <div class= "row">
                  <div class="col-md-6 text-right">
                    <a href="<?php echo base_url().'library/donor_detail/create';?>" class="btn btn-primary">Create</a>
                 </div>
               </div>
            <hr>
        </div>
       </div>
        
              <div class="row">
                <div class="col-md-8">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Occupation</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>Donated Book</th>
                            <th width="60">Edit</th>
                            <th width="100">Delete</th>
                        </tr>

                        <?php if(!empty($users)) { foreach($users as $user) {?>
                            <tr>
                                <td><?php echo $user->user_id ?></td>
                                <td><?php echo $user->name ?></td>
                                <td><?php echo $user->email ?></td>
                                <td><?php echo $user->contact ?></td>
                                <td><?php echo $user->occupation ?></td>
                                <td><?php echo $user->gender ?></td>
                                <td><?php echo $user->address ?></td>
                                <td><?php echo $user->pincode ?></td>
                                <td><?php echo $user->no_of_donated_books ?></td>
                               
                                <td>
                                    <a href="<?php echo base_url().'library/donor_detail/edit/'.$user->user_id ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url().'library/donor_detail/delete/'.$user->user_id ?>" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                       
                        <?php } } else { ?>
                            <tr>
                                <td colspan="5">Records not found</td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
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

