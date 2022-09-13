
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

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
            <h2>Add new book</h2>
                      <form role="form" method="post" action="transac.php?action=add">
                        <div class="form-group">
                              <input class="form-control" placeholder="ISBN" name="ISBN">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Book name" name="book_name">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Price" name="price">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Borrowing date" name="borrowing_date">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Member name" name="member_name" >
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Member email" name="member_email">
                            </div>
                            <div class="form-group">
                             <label>Comment</label>
                              <textarea class="form-control" rows="3"  name="Comment" ></textarea>
                            </div> 
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>           
                   </tbody>
               </table>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->
	
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
