<?php
// connect to the database
$servername = "localhost";
$username ="root";
$password = "";
$database = "iqansoft_portal";


//create a connection 
$conn = new mysqli($servername, $username , $password , $database);

// die if connection was not successfull
if(!$conn){
    die("Sorry, we are unable to connect to the database: " . mysqli_connect_error());
}

$statusMsg = '';
    
// File upload path
$targetDir ="assets/resume/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
   
    // Get the user's input values
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $portfolio = $_POST['portfolio'];
    $salary = $_POST['salary'];
    $position = '';
    $starting = $_POST['startup'];
    $lastcompany = $_POST['lastcompany'];
     

    // Validate the user's input values
	if (empty($firstname) || empty($lastname) || empty($email)) {
		echo "Please fill out all required fields.";
		exit;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Please enter a valid email address.";
		exit;
	}
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into applications (`FirstName`, `LastName`, `Email`, `Contact`, `Portfolio`, `Salaray`, `Position`, `Starting`, `Last_Company`, `Resumee`) 
            VALUES ('".$firstname."', '".$lastname."','".$email."', '".$contact."', '".$portfolio."', '".$salary."', '".$position."', '".$starting."', '".$lastcompany."', '".$fileName."')");

// $insert = $conn->query("INSERT INTO applications (FirstName) VALUES ('".$firstname."')");

            if($insert){
                $statusMsg = 'Your application has been successfully submited.';


                ?>
                <script type="text/javascript">
                    alert("Application Submited Succesfully");
                    window.open("http://localhost/www.funavry.com/job-application-form.php?title=Graphics/Visual%20Communication%20Designer","_self")
                </script>
                <?php


            }else{
                $statusMsg = 'File upload failed, please try again.';
            } 
        }else{
            $statusMsg = 'Sorry, there was an error uploading your file.';
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

