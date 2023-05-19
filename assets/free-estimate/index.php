<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"content="Just fill in your project requirements in the form below and our Team will get back to you as quickly as possible!">  
    <meta name="keywords" content="Access Management/certification, Compliance reporting and logging, Workflow Automation Management, Entitlement Management, Data Governance, Cloud security, System Integration across organization, Scalable software design and development, Cloud services integration, Micro services architecture, Cloud infrastructure management, Cloud infrastructure security, Monitoring and logging, Performance optimization, CI/CD pipeline">     <!-- Page Title -->  
    <title>PHP Based Email Form With File Attachment - reusable form</title>
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Plugin Css -->
    <link rel="stylesheet" href="../css/cubeportfolio.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/line-awesome.min.css">
    <!-- Style Sheet -->

    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/main.css">

    <script src="form.js"></script>
</head>

<body>
    <div class="form-container">

        <div class="form-content">
            <form method="post" id="reused_form" enctype=&quot;multipart/form-data&quot;> <h2>Start a Project</h2>
                <p>Just fill in your project requirements in the form below and our Team will get back to you as quickly
                    as possible!</p>
                <div class="form-group">
                    <label for="name">Your Name <sup>*</sup></label>
                    <input id="name" type="text" name="Name" class="form-control" required maxlength="50">
                </div>
                <div class="form-group">
                    <label for="email">Email Address <sup>*</sup></label>
                    <input id="email" type="email" name="Email" class="form-control" required maxlength="50">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" type="text" name="Phone" class="form-control" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="message">Message <sup>*</sup></label>
                    <textarea id="message" name="Message" rows="5" maxlength="6000" class="form-control"
                        required></textarea>
                </div>
                <div class="form-group">
                    <label for="name"> Attachment</label>
                    <input type="file" class="form-control p-2" id="image" name="image">

                </div>





                <button class="btn btn-primary btn-block btn-submit" type="submit">Send</button>
            </form>
            <div id="success_message" style="display:none">
                <h2 class="mb-3">Free estimation form is submitted successfully!</h2>
                <p> We will get back to you soon. </p>
                <a href="index.html" rel="noopener noreferrer">back to free estimate again</a>
            </div>
            <div id="error_message" style="width:100%; height:100%; display:none; ">
                <h3>Error</h3> Sorry there was an error sending your free estimate.
            </div>
        </div>
    </div>
</body>
</html>