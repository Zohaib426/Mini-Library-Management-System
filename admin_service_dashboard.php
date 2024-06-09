<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <style>
         body {
   
        background-image: url('images/library.jpg');
        background-size: cover;
        background-attachment: fixed; 

    }

    .innerright,label {
        color: rgb(16, 170, 16);
        font-weight:bold;
    }

    .container,
    .row,
    .imglogo {
         margin:auto; 
       
        height: 150px;
        margin-bottom:10px;
    }

    .innerdiv {
        text-align: center;
        /* width: 500px; */
        margin: 100px;
        background-color: rgba(255, 255, 255, 0.7); 
        border-radius: 10px; /* Add border radius */
        position: relative ;
        background-attachment: fixed; 
       
    }

    input {
        margin-left:20px;
    }

    .leftinnerdiv {
        float: left;
        width: 25%;
    }

    .rightinnerdiv {
        float: right;
        width: 75%;
    }

    .innerright {
        background-color: lightgreen;
    }

    .greenbtn {
        background-color:  lightgray;
        color: black;
        width: 95%;
        height: 40px;
        margin-top: 8px;
        display: flex;
        align-items: center;
        justify-content: flex-start; /* Align content to the start (left) */
        padding-left: 10px; /* Add padding to the left to separate image from text */
    }

    .greenbtn img {
        margin-right: 10px; /* Add margin to the right of the image for spacing */
        max-width: 30px; /* Set maximum width for the image */
        max-height: 30px; /* Set maximum height for the image */
    }

    .greenbtn,
    a {
        text-decoration: none;
        color: black;
        font-size: large;
    }
    .graybtn {
        background-color:  lightgray;
        color: black;
        width: 95%;
        height: 40px;
        margin-top: 8px;
        display: block;
        align-items: center;
      
        padding-left: 10px; /* Add padding to the left to separate image from text */
    }
    .graybtn,
    a {
        text-decoration: none;
        color: black;
        font-size: large;
    }




    th {
        background-color: #16DE52;
        color: black;
    }

    td {
        background-color: #b1fec7;
        color: black;
    }

    td, a {
        color: black;
    }

    label {
        margin-left: 50px;
        padding-Top:10px;
        font-size: 18px;
        color: rgb(51, 51, 51);
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=text]:focus,
    input[type=email]:focus,
    input[type=number]:focus,
    input[type=password]:focus,
    select:focus,
    textarea:focus {
        outline: none;
    }

    input[type=text],
    input[type=email],
    input[type=number],
    input[type=password],
    select,
    textarea {
        width: 40%;
        padding: 2px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        margin-top: 2px;
        margin-bottom: 2px;
        resize: vertical;
    }

    body {
        font-family: 'Roboto';
    }

    ::placeholder {
        color: rgb(189, 184, 184);
        font-style: italic;
        font-size: 14px;
    }
    .hl {
    text-align: center;
    color: black;
    background-color: lightgray;
    font-size: 24px;
    border: 2px solid black;
    padding: 10px;
}

.book-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333; /* Dark color for title */
}

.book-info {
    display: flex;
    align-items: flex-start;
}

.book-image {
    width: 200px;
    height: auto;
    margin-right: 20px;
    margin-left: 5%; /* Adjusted left margin */
    border: 1px solid #ddd;
}

.details {
    margin: 20px 0;
}

.book-description {
    /* margin-bottom: 20px; */
   
    
}
tr {
    margin-bottom: 10px; /* Add a bottom margin to create a gap */
    border-bottom: 1px solid black; /* Added border color for rows */
}

td {
    padding: 8px;
    border-right: 1px solid black; /* Added border color for cells */
}


.custom-table {
    width: 180%; /* Adjusted width */
    border-collapse: collapse;
    margin-top: -30%; /* Adjusted margin-top */
    border: 2px solid black; /* Added border color for the table */
}

.custom-table tr {
    margin-bottom: 10px; /* Add a bottom margin to create a gap */
    border-bottom: 1px solid black; /* Added border color for rows */
}

.custom-table tr:nth-child(even) {
    background-color: lightgray; /* Alternate row background color */
}

.custom-table td {
    padding: 8px;
    border-right: 1px solid black; /* Added border color for cells */
}

.custom-table td:last-child {
    border-right: none; /* Remove right border for last column */
}

.custom-table .detail-label {
    font-weight: bold;
    text-align: left;
}

.custom-table .detail-value {
    text-align: left;
}


</style>

    <body >

    <?php
   include("data_class.php");

$msg="";

   if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

if($msg=="done"){
    echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
}
elseif($msg=="fail"){
    echo "<div class='alert alert-danger' role='alert'>Fail</div>";
}

    ?>



        <div class="container">
        <div class="innerdiv">
            <div class="row"><img class="imglogo" src="images/abc.png"/></div>
            <div class="leftinnerdiv">
                <!-- <Button class="greenbtn"> ADMIN</Button> -->
                <br>
                <Button class="greenbtn" onclick="openpart('addbook')" ><img class="icons" src="images/icon/book.png" width="30px" height="30px"/>  ADD BOOK</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')" > <img class="icons" src="images/icon/open-book.png" width="30px" height="30px"/> BOOK REPORT</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"><img class="icons" src="images/icon/interview.png" width="30px" height="30px"/> BOOK REQUESTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')"> <img class="icons" src="images/icon/add-user.png" width="30px" height="30px"/> ADD MEMBERS</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px"/> STUDENT REPORT</Button>
                <Button class="greenbtn"  onclick="openpart('issuebook')"> <img class="icons" src="images/icon/test.png" width="30px" height="30px"/> ISSUE BOOK</Button>
                <Button class="greenbtn" onclick="openpart('issuebookreport')"> <img class="icons" src="images/icon/checklist.png" width="30px" height="30px"/> ISSUE REPORT</Button>
                <a href="index.php"><Button class="graybtn" ><img class="icons" src="images/icon/logout.png" width="30px" height="30px"/> LOGOUT</Button></a>
            </div>

            <div class="rightinnerdiv">   
            <div id="bookrequestapprove" class="innerright portion" style="display:none">
            <!-- <Button class="greenbtn" >BOOK REQUEST APPROVE</Button> -->
            <h1 class="hl">BOOK REQUEST APPROVE</h1>


            <?php
            $u=new data();
            $u->setconnection();
            $u->requestbookdata();
            $recordset=$u->requestbookdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='
            padding: 8px;'>Person Name</th><th>person type</th><th>Book name</th><th>Days </th><th>Approve</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
              "<td>$row[1]</td>";
              "<td>$row[2]</td>";

                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[6]</td>";
                
               // $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approved BOOK</button></a></td>";
                 $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&bookname=$row[6]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Mark as Complete</button></a></td>";
                // $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="addbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
            <!-- <Button class="greenbtn" >ADD NEW BOOK</Button> -->
            <h1 class="hl">ADD NEW BOOK</h1>
            <br>
            <form action="addbookserver_page.php" method="GET" enctype="multipart/form-data" style="max-width: 600px; margin: auto; font-family: Arial, sans-serif;">
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="bookname" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Book Name:</label>
        <input type="text" id="bookname" name="bookname" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="bookdetail" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Detail:</label>
        <input type="text" id="bookdetail" name="bookdetail" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="bookaudor" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Author:</label>
        <input type="text" id="bookaudor" name="bookaudor" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="bookpub" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Publication:</label>
        <input type="text" id="bookpub" name="bookpub" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Branch:</label>
        <div style="flex: 1;">
          
            
            <input type="radio" id="bsit" name="branch" value="BSIT"/>
            <label for="bsit" style="margin-right: 15px;">BSIT</label>
          
            
            <input type="radio" id="bscs" name="branch" value="BSCS"/>
            <label for="bscs" style="margin-right: 15px;">BSCS</label>
            <br>
            
            <input type="radio" id="bsse" name="branch" value="BSSE"/>
            <label for="bsse">BSSE</label>

            <input type="radio" id="other" name="branch" value="other"/>
            <label for="other" style="margin-right: 15px;">Other</label>
        </div>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="bookprice" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Price:</label>
        <input type="number" id="bookprice" name="bookprice" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="bookquantity" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Quantity:</label>
        <input type="number" id="bookquantity" name="bookquantity" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="bookphoto" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Book Photo:</label>
        <input type="file" id="bookphoto" name="bookphoto" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="text-align: center;">
        <input type="submit" value="SUBMIT" style="padding: 10px 20px; font-size: 16px; background-color: #28a745; color: white; border: none; cursor: pointer;"/>
    </div>
</form>




            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="addperson" class="innerright portion" style="display:none">
            <!-- <Button class="greenbtn" >ADD Person</Button> -->
            <h1 class="hl">ADD MEMBERS</h1>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data" style="max-width: 400px; margin: auto; font-family: Arial, sans-serif;">
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="addname" style="width: 100px; font-weight: bold; text-align: left; margin-right: 10px;">Name:</label>
        <input type="text" id="addname" name="addname" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="addpass" style="width: 100px; font-weight: bold; text-align: left; margin-right: 10px;">Password:</label>
        <input type="password" id="addpass" name="addpass" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="addemail" style="width: 100px; font-weight: bold; text-align: left; margin-right: 10px;">Email:</label>
        <input type="email" id="addemail" name="addemail" style="flex: 1; padding: 8px;"/>
    </div>
    
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="type" style="width: 100px; font-weight: bold; text-align: left; margin-right: 10px;">Choose type:</label>
        <select id="type" name="type" style="flex: 1; padding: 8px;">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select>
    </div>
    
    <div style="text-align: center; margin-top: 15px;">
        <input type="submit" value="SUBMIT" style="padding: 10px 20px; font-size: 16px; background-color:  #28a745; color: white; border: none; cursor: pointer;"/>
    </div>
</form>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="studentrecord" class="innerright portion" style="display:none">
            <!-- <Button class="greenbtn" >Student RECORD</Button> -->
            <h1 class="hl">Student RECORD</h1>

            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'> Name</th><th>Email</th><th>Type</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                // $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="issuebookreport" class="innerright portion" style="display:none">
            <!-- <Button class="greenbtn" >Issue Book Record</Button> -->
            <h1 class="hl">Issue Book Record</h1>

            <?php
            $u=new data;
            $u->setconnection();
            $u->issuereport();
            $recordset=$u->issuereport();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>Issue Name</th><th>Book Name</th><th>Issue Date</th><th>Return Date</th><th>Fine</th></th><th>Issue Type</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[4]</td>";
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

<!--             

issue book -->
            <div class="rightinnerdiv">   
            <div id="issuebook" class="innerright portion" style="display:none">
            <!-- <Button class="greenbtn" >ISSUE BOOK</Button> -->
            <h1 class="hl">ISSUE BOOK</h1>
            <form action="issuebook_server.php" method="post" enctype="multipart/form-data" style="max-width: 400px; margin: auto; font-family: Arial, sans-serif;">
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="book" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Choose Book:</label>
        <select name="book" style="flex: 1; padding: 8px;">
            <?php
            $u = new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset = $u->getbookissue();
            foreach ($recordset as $row) {
                echo "<option value='". $row[2] ."'>" .$row[2] ."</option>";
            }            
            ?>
        </select>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="userselect" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Select Student:</label>
        <select name="userselect" style="flex: 1; padding: 8px;">
            <?php
            $u = new data;
            $u->setconnection();
            $u->userdata();
            $recordset = $u->userdata();
            foreach ($recordset as $row) {
                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
            }            
            ?>
        </select>
    </div>

    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <label for="days" style="width: 150px; font-weight: bold; text-align: left; margin-right: 10px;">Days:</label>
        <input type="number" name="days" style="flex: 1; padding: 8px;"/>
    </div>

    <div style="text-align: center; margin-top: 15px;">
    <input type="submit" value="SUBMIT" style="padding: 10px 20px; font-size: 16px; background-color: #28a745; color: white; border: none; cursor: pointer;"/>
    </div>
</form>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="bookdetail" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ $viewid=$_REQUEST['viewid'];} else {echo "display:none"; }?>">
            
            <!-- <Button class="greenbtn" >BOOK DETAIL</Button> -->
            <h1 class="hl">BOOK DETAIL</h1>
</br>
<?php
            $u=new data;
            $u->setconnection();
            $u->getbookdetail($viewid);
            $recordset=$u->getbookdetail($viewid);
            foreach($recordset as $row){

                $bookid= $row[0];
               $bookimg= $row[1];
               $bookname= $row[2];
               $bookdetail= $row[3];
               $bookauthour= $row[4];
               $bookpub= $row[5];
               $branch= $row[6];
               $bookprice= $row[7];
               $bookquantity= $row[8];
               $bookava= $row[9];
               $bookrent= $row[10];

            }            
?>

<div class="book-info">

            <img class="book-image" src="uploads/<?php echo $bookimg?>" alt="Book Image"/>
            <div class="details">
    <!-- <p class="book-description"></p> -->
    <table class="custom-table">
    <tr>
        <td colspan="2"><?php echo $bookdetail ?></td>
    </tr>
    <tr>
        <td class="detail-label">Book Name:</td>
        <td class="detail-value"><?php echo $bookname ?></td>
    </tr>
    <tr>
        <td class="detail-label">Author:</td>
        <td class="detail-value"><?php echo $bookauthour ?></td>
    </tr>
    <tr>
        <td class="detail-label">Publisher:</td>
        <td class="detail-value"><?php echo $bookpub ?></td>
    </tr>
    <tr>
        <td class="detail-label">Genre:</td>
        <td class="detail-value"><?php echo $branch ?></td>
    </tr>
    <tr>
        <td class="detail-label">Price:</td>
        <td class="detail-value"><?php echo $bookprice ?></td>
    </tr>
    <tr>
        <td class="detail-label">Availability:</td>
        <td class="detail-value"><?php echo $bookava ?></td>
    </tr>
    <tr>
        <td class="detail-label">Rent:</td>
        <td class="detail-value"><?php echo $bookrent ?></td>
    </tr>
</table>
</div>

        </div>


            </div>
            </div>



            <div class="rightinnerdiv">   
            <div id="bookreport" class="innerright portion" style="display:none">
            <!-- <Button class="greenbtn" >BOOK RECORD</Button> -->
            <h1 class="hl">BOOK RECORD</h1>
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbook();
            $recordset=$u->getbook();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'>Book Name</th><th>Price</th><th>Qnt</th><th>Available</th><th>Rent</th></th><th>View</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[9]</td>";
                $table.="<td>$row[10]</td>";
                $table.="<td><a href='admin_service_dashboard.php?viewid=$row[0]'><button type='button' class='btn btn-primary'>View BOOK</button></a></td>";
                // $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>



        </div>
        </div>
        

     
        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
        </script>
    </body>
</html>