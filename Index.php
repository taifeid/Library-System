<?php
       
       include('connection.php');
    
       
        ?>  

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Library System</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">



    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">CRUD project</h1>
            <h1 class="title">Library System</h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">How do you use it</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">3 step !</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3">Find your book<h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Register your information<h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">borrow it and Enjoy<h5>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
            <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
            <table class="table table-bordered table-hover table-striped">
                   <thead>
                       <tr>
                           <th>ISBN</th>
                           <th>Book Name</th>
                           <th>Price</th>
                           <th>Borrowing Date</th>
                           <th>Member Name</th>
                           <th>Member Email</th>
                           <th>Comment</th>
                       </tr>
                   </thead>
                   <tbody>
                    <?php                  
           $query = 'SELECT * FROM books';
           $result = mysqli_query($db, $query) or die (mysqli_error($db));
           while ($row = mysqli_fetch_assoc($result)) {
                                
               echo '<tr>';
               echo '<td>'. $row['ISBN'].'</td>';
               echo '<td>'. $row['book_name'].'</td>';
               echo '<td>'. $row['price'].'</td>';
               echo '<td>'. $row['borrowing_date'].'</td>';
               echo '<td>'. $row['member_name'].'</td>';
               echo '<td>'. $row['member_email'].'</td>';
               echo '<td>'. $row['Comment'].'</td>';
               echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['id'] . '" > DETAILED </a> ';
               echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['id'] . '"> EDIT </a> ';
               echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=book&delete & id=' . $row['id'] . '">DELETE </a> </td>';
               echo '</tr> ';
   }
?>              
                   </tbody>
               </table>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4">011556568</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">Al-Olaya</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">books@website.com</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form action="email.php">
                        <h4 class="mb-4">Report issue</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="Ename" placeholder="Employee name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="Mname" placeholder="Member name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Member Email">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="issue"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">For training purpose by Taif Bin Eid 💻</p>  
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
