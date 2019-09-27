<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Description</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Description -->
        <section class="location">
            <div class="container">
                <div class="location-content">
                    <div class="location-form">
                        <h2 class="form-title">Property Data</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="Address line 1"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Addressline1" id="Addressline1" placeholder="Address line 1"/>
                            </div>
                            <div class="form-group">
                                <label for= "Address line 2"><i class="zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Contact" id="Contact" placeholder="Address line 2"/>
                                
                            <div class="form-group">
                                <label for= "City"><i class="zmdi-account material-icons-name"></i></label>
                                <input type="text" name="City" id="City" placeholder="City"/>
                                
                            </div>
                            <div class="form-group">
                                <label for="parish"><i class="zmdi material-icons-name"></i></label>
                                <input type="text" name="parish" id="parish" placeholder="Parish"/>
                            </div>
                            
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>