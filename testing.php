<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        .navbar {
	background-image: url('assets/header.png');
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center;
}
.bg-body {
	background-image: url('assets/home.png');
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center;
}
.navbar-brand {
    display: flex;
    align-items: center; /* Align items vertically */
}
.navbar-brand h6 {
	color:#ffffff;
    margin:10px; 
}
.transparent-container {
	background-color: transparent;
}
.container2{
    background-color: white;
    padding: 20px;
	max-width: 800px; 
    margin: 0 auto; 
	border: 1px solid #ccc;
    border-radius: 5px;
	min-height: 400px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

        .form-label {
            flex: 1;
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
            padding-left: 35px; /* Add spacing between radio button and label */
        }

        /* Style submit button */
        #submitBtn {
            margin-top: 30px;
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        #submitBtn:hover {
            background-color: #0056b3;
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
			opacity: 0; /* Make radio buttons invisible */
        	 position: absolute;
    }
	.form-check-label::before {
        content: "";
        display: inline-block;
        width: 20px;
        height: 20px;
        margin-right: 10px;
        background-color: #007bff; /* Default background color */
        border: 2px solid #007bff;
        border-radius: 50%;
        text-align: center;
        line-height: 20px;
        color: #fff; /* Text color for selected radio options */
        font-weight: bold;
        font-size: 14px;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .form-check-label:hover::before {
        background-color: #0056b3; /* Background color on hover */
        border-color: #0056b3; /* Border color on hover */
    }

    .form-check-input:checked + .form-check-label::before {
        background-color: #28a745; /* Background color for selected option */
        border-color: #28a745; /* Border color for selected option */
    }
    </style>
</head>
<body class="bg-body">
    <nav class="navbar navbar-collapse-lg navbar-dark">
        <div class="container">
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6>BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_mind.png" alt="logo" width="50" height="50" class="inline-block align-text-top me-2 ">
		</a>
		</div>
	</nav>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container2">
        <h2>Assessment Form</h2>
        <form id="dass21Form">
            <div class="mb-1">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" readonly>
            </div>
            <div class="mb-1">
                <label for="email" class="form-label">G-suite:</label>
                <input type="email" id="email" name="email" class="form-control" readonly>
            </div>
            <hr>
            <div class="mb-1">
                <label for="directions" class="form-label">Directions: The rating scale is as follows:</label>
                <br>
                <span>0 Did not apply to me at all</span><br>
                <span>1 Applied to me to some degree, or some of the time</span><br>
                <span>2 Applied to me to a considerable degree, or a good part of time</span><br>
                <span>3 Applied to me very much, or most of the time</span><br>
            </div>
            <hr>

            <script>
                // Array of question labels
                var questions = [
    'I found myself getting upset by quite trivial things.',
    'I was aware of dryness of my mouth.',
    'I could not seem to experience any positive feeling at all.',
    'I experienced breathing difficulty (eg, excessively rapid breathing breathlessness in the absence of physical exertion).',
    'I just could not seem to get going.',
    'I tended to over-react to situations.',
    'I had a feeling of shakiness (eg, legs going to give way).',
    'I found it difficult to relax.',
    'I found myself in situations that made me so anxious I was most relieved when they ended.',
    'I felt that I had nothing to look forward to.',
    'I found myself getting upset rather easily.',
    'I felt that I was using a lot of nervous energy.',
    'I felt sad and depressed.',
    'I found myself getting impatient when I was delayed in any way (eg, elevators, traffic lights, being kept waiting).',
    'I had a feeling of faintness.',
    'I felt that I had lost interest in just about everything.',
    'I felt I was not worth much as a person.',
    'I felt that I was rather touchy.',
    'I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion.',
    'I felt scared without any good reason.',
    'I felt that life was not worthwhile.',
    'I found it hard to wind down.',
    'I had difficulty in swallowing.',
    'I couldn not seem to get any enjoyment out of the things I did.',
    'I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat).',

	
                    // Add more questions here as needed
                ];

                // Loop to generate question sections
                for (var i = 0; i < questions.length; i++) {
                    var questionNumber = i + 1;
                    document.write('<div class="mb-3">');
                    document.write('<label for="question' + questionNumber + '" class="form-label">Question ' + questionNumber + ': ' + questions[i] + '</label>');

					document.write('<br>');

       				 document.write('<div class="options-container">');
                    
                    for (var j = 0; j < 4; j++) {
                        var optionValue = j;
                        var optionText = optionValue;

                        document.write('<div class="form-check form-check-inline">');
                        document.write('<input class="form-check-input" type="radio" name="question' + questionNumber + '" id="question' + questionNumber + 'Option' + optionValue + '" value="' + optionValue + '">');
                        document.write('<label class="form-check-label" for="question' + questionNumber + 'Option' + optionValue + '">' + optionText + '</label>');
                        document.write('</div>');
                    }

                    document.write('</div>');
			

                }
            </script>

            <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
        </form>
    </div>
    <button id="scrollButton" class="btn btn-primary" style="display: none;">Scroll to Top</button>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script>

function calculateDASS21ScoresWithReferrals() {
    
    var depressionScore = 0;
    var anxietyScore = 0;
    var stressScore = 0;

   
    
    /*    var values = [
    // Depression subscale
    [0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3],

    // Anxiety subscale
    [0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3],

    // Stress subscale
    [0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3, 0, 1, 2, 3]
];*/	
     
    

   
   /* for (var i = 0; i < values.length; i++) {
        var questionValues = values[i];
        var responseValue = parseInt(document.querySelector('input[name="question' + (i + 1) + '"]:checked').value);
        
       
        if (i >= 0 && i <= 6) {
            depressionScore += questionValues[responseValue];
        } else if (i >= 7 && i <= 13) {
            anxietyScore += questionValues[responseValue];
        } else if (i >= 14 && i <= 20) {
            stressScore += questionValues[responseValue];
        }
    }*/

	for (var i = 1; i <= 21; i++) {
        var responseValue = parseInt(document.querySelector('input[name="question' + i + '"]:checked').value);

        if (i >= 1 && i <= 7) {
            depressionScore += responseValue;
        } else if (i >= 8 && i <= 14) {
            anxietyScore += responseValue;
        } else if (i >= 15 && i <= 21) {
            stressScore += responseValue;
        }
    }
	/*if (i >= 0 && i <= 6) {
            depressionScore += responseValue;
        } else if (i >= 7 && i <= 13) {
            anxietyScore += responseValue;
        } else if (i >= 14 && i <= 20) {
            stressScore += responseValue;
        }
    }*/

   
    var depressionInterpretation = interpretScore(depressionScore);
    var anxietyInterpretation = interpretScore(anxietyScore);
    var stressInterpretation = interpretScore(stressScore);

   
    var resultMessage = 'Depression: ' + depressionInterpretation +
          '\nAnxiety: ' + anxietyInterpretation +
          '\nStress: ' + stressInterpretation;

  
    var referrals = determineReferrals(depressionInterpretation, anxietyInterpretation, stressInterpretation);
    if (referrals !== '') {
        resultMessage += '\n\nReferrals:\n' + referrals;
    }

 
    alert(resultMessage);
}


function interpretScore(score) {
    /*if (score >= 0 && score <= 9) {
        return 'Normal';
    } else if (score >= 10 && score <= 13) {
        return 'Mild';
    } else if (score >= 14 && score <= 20) {
        return 'Moderate';
    } else if (score >= 21 && score <= 27) {
        return 'Severe';
    } else {
        return 'Extremely severe';
    }*/

    if (score <= 9) {
        return 'Normal';
    } else if (score <= 13) {
        return 'Mild';
    } else if (score <= 20) {
        return 'Moderate';
    } else if (score <= 27) {
        return 'Severe';
    } else {
        return 'Extremely severe';
    }

	/*if (score <= 9) {
        return 'Normal';
    } else if (score <= 18) {
        return 'Mild';
    } else if (score <= 27) {
        return 'Moderate';
    } else {
        return 'Severe';
    }*/
}


function determineReferrals(depressionInterpretation, anxietyInterpretation, stressInterpretation) {
   
    var referrals = '';

    if (depressionInterpretation === 'Severe') {
        referrals += '- Refer to a mental health professional for depression treatment\n';
    }

    if (anxietyInterpretation === 'Severe') {
        referrals += '- Refer to a mental health professional for anxiety treatment\n';
    }

    if (stressInterpretation === 'Severe') {
        referrals += '- Recommend stress management techniques and consider referral if symptoms persist\n';
    }

    return referrals;
}


document.getElementById('submitBtn').addEventListener('click', calculateDASS21ScoresWithReferrals);

    </script>
</body>
</html>
