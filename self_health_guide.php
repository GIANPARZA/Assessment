<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Self Health Guide</title>
    <style>
        .mb-3 {
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 10px;
        }

        .navbar {
            background-image: url('assets/header.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .bg-body {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand h6 {
            color: #ffffff;
            margin: 10px;
        }

        .transparent-container {
            background-color: transparent;
        }

        .container2 {
            background-color: white;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            min-height: 400px;
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.25);
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-label {
            flex: 1;
            font-family: 'Arial', sans-serif;
            font-size: 20px;
        }

        .form-label2 {
            flex: 1;
            font-family: 'Arial', sans-serif;
            font-size: 15px;
        }

        select.form-select {
            flex: 1;
            margin-left: 20px;
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%;
            width: 20px;
            height: 20px;
            top: 0;
        }

        .custom-radio .custom-control-label::after {
            border-radius: 50%;
            width: 10px;
            height: 10px;
            top: 5px;
            left: 5px;
        }

        .custom-radio .custom-control-label {
            padding-left: 35px;
        }

        #submitBtn {
            margin-top: 30px;
            background-color: #28a745;
            color: #fff;
            border: none;
            width: 250px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #submitBtn:hover {
            background-color: #28a745;
            transform: scale(1.1);
        }

        .options-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        .form-check-input {
            margin-left: 10px;
            margin-right: 5px;
            opacity: 0;
            position: absolute;
        }

        .form-check-label {
            margin-right: 50px;
        }

        .form-check-label::before {
            content: "";
            display: inline-block;
            width: 30px;
            height: 30px;
            margin-right: 10px;
            background-color: #ffffff;
            border: 2px solid #28a745;
            border-radius: 50%;
            text-align: center;
            line-height: 20px;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .form-check-label:hover::before {
            background-color: #28a745;
            border-color: #28a745;
            transform: scale(1.2);
            cursor: pointer;
        }

        .form-check-input:checked+.form-check-label::before {
            background-color: #28a745;
            border-color: #28a745;
            transform: scale(1.2);
            cursor: pointer;
        }

        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .form-check-input[type="radio"]:hover {
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .form-check-label {
                margin-right: 20px;
            }

            .form-check-label::before {
                width: 16px;
                height: 16px;
                margin-right: 8px;
                font-size: 12px;
                transition: background-color 0.3s ease, border-color 0.3s ease;
            }
        }

        .sticky-label {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
        }
        .card {
            width: 300px; /* Set the width of the card */
            height: 800px; /* Set the height of the card to match the width */

        }

        .card-body {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
    </style>
</head>

<body class="bg-body">
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" hre="#">
                <img src="assets/logo_bsu.png" alt="logo" width="40" height="40"
                    class="inline-block align-text-top me-2 ">
                <h6 class="text-sm">BATANGAS STATE UNIVERSITY - TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
            </a>
        </div>
    </nav>

    <div class="container2">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center align-items-center text-center p-4">
                        <p class="card-text">Meditation and Mindfulness</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center align-items-center text-center p-4">
                        <p class="card-text">Stress Management</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center align-items-center text-center p-4">
                        <p class="card-text">Self-Help Books</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center align-items-center text-center p-4">
                        <p class="card-text">Personal Development</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>