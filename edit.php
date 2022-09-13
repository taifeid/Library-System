
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
  
<?php 
$query = 'SELECT * FROM books
              WHERE
              id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
               
                $ISBN= $row['ISBN'];
                $book_name= $row['book_name'];
                $price=$row['price'];
                $borrowing_date=$row['borrowing_date'];
                $member_name=$row['member_name'];
                $member_email=$row['member_email'];
                $Comment=$row['Comment'];
                $bookid=$row['id'];
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">
                        <div class="form-group">
                              <input class="form-control" name="id" value="<?php echo $bookid; ?>" readonly>
                            </div>  
                        <div class="form-group">
                              <input class="form-control" placeholder="ISBN" name="ISBN" value="<?php echo $ISBN; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholde="Book name" name="book_name" value="<?php echo $book_name; ?>" >
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholde="Price" name="price" value="<?php echo $price; ?>" >
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholde="Borrowing date" name="borrowing_date" value="<?php echo $borrowing_date; ?>" >
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Member name" name="member_name" value="<?php echo $member_name; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholde="Member email" name="member_email" value="<?php echo $member_email; ?>" >
                            </div>
                            <div class="form-group">
                             <label>Comment</label>
                              <textarea class="form-control" rows="3"  name="Comment" ><?php echo $Comment; ?></textarea>
                            </div> 
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


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
