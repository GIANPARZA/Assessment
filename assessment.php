<?php
include('submit_assessment.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<title>Login</title>
</head>
<style>
    .mb-3 {

    justify-content: center;
    align-items: center;
    text-align: center;
    margin-bottom: 10px;
}
.navbar {
	background-image: url('assets/header.png');
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center;
}
.bg-body {
	
	background-size:cover;
	background-repeat:no-repeat;
	background-position: center;
}
.navbar-brand {
    display: flex;
    align-items: center; 
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
	box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.25);
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

    .form-check-input:checked + .form-check-label::before {
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
</style>
<body class="bg-body">
	<nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">
		<a class="navbar-brand" hre="#">
			<img src="assets/logo_bsu.png" alt="logo" width="40" height="40" class="inline-block align-text-top me-2 ">
			<h6 class="text-sm">BATANGAS STATE UNIVERSITY -  	 	TNEU <br>MENTAL HEALTH ASSESSMENT PORTAL</h6>
		</a>
		
		</div>
	</nav>
	<div class="container2 container-lg">


        <h2>MENTAL HEALTH ASSESSMENT</h2>
        <form class="dass21form" method="POST" onsubmit="calculateAndSubmit();">
    <div class="mb-1">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="mb-1">
        <label for="sr_code" class="form-label">SR-Code</label>
        <input type="sr_code" id="sr_code" name="sr_code" class="form-control" required>
    </div>
    <div class="mb-1">
    <label for="program" class="form-label">Program</label>
    <select id="program" name="program" class="form-select" required>
        <option value="">Select Program</option>
        <option value="BSCS">Bachelor of Science in Computer Science</option>
        <option value="BSIT">Bachelor of Science in Information Technology</option>
        <option value="BSECE">Bachelor of Science in Electronics Engineering</option>
        <option value="BSME">Bachelor of Science in Mechanical Engineering</option>
        <option value="BIT">Bachelor of Industrial Technology</option>
        <option value="BSCE">Bachelor of Science in Civil Engineering</option>
        <option value="BSFE">Bachelor of Science in Food Engineering</option>
        <option value="BSICE">Bachelor of Science in Instrumentation and Control Engineering</option>
        <option value="BSPE">Bachelor of Science in Petroleum Engineering</option>
        <option value="BSME">Bachelor of Science in Mechatronics Engineering</option>
        <option value="BSSE">Bachelor of Science in Sanitary Engineering</option>
        <option value="BSCE">Bachelor of Science in Chemical Engineering</option>
        <option value="BFAD">Bachelor of Fine Arts and Design</option>
        <option value="BSID">Bachelor of Science in Interior Design</option>
        <option value="BSA">Bachelor of Science in Architecture</option>
        <option value="BFA">Bachelor of Science of Fine Arts</option>
        <!-- Add more options if needed -->
    </select>
</div>
    <div class="mb-1">
    <label for="year" class="form-label">Year</label>
    <select id="year" name="year" class="form-select" required>
        <option value="1">First Year</option>
        <option value="2">Second Year</option>
        <option value="3">Third Year</option>
        <option value="4">Fourth Year</option>
        <!-- Add more options if needed -->
    </select>
</div>
    <hr>
			<div class="mb-1 sticky-label">
                <label class="form-label2">Directions: The rating scale is as follows:<br><br>
                        0 Did not apply to me at all <br>
                        1 Applied to me to some degree, or some of the time<br>
                        2 Applied to me to a considerable degree, or a good part of time<br>
                        3 Applied to me very much, or most of the time
                </label>
			</div>
			<hr>
<script>
    var depressionInterpretation;
    var anxietyInterpretation;
    var stressInterpretation;
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
        'I felt that I had lost interest in just about everything ',
        'I felt I was not worth much as a person',
        'I felt that I was rather touchy',
        'I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion',
        'I felt scared without any good reason',
        'I felt that life was not worthwhile',
        'I found it hard to wind down',
        'I had difficulty in swallowing',
        'I could not seem to get any enjoyment out of the things I did',
        'I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat)',
        'I felt down-hearted and blue',
        'I found that I was very irritable',
        'I felt I was close to panic',
        'I found it hard to calm down after something upset me',
        'I feared that I would be "thrown" by some trivial but unfamiliar task',
        'I was unable to become enthusiastic about anything',
        'I found it difficult to tolerate interruptions to what I was doing',
        'I was in a state of nervous tension',
        'I felt I was pretty worthless',
        'I was intolerant of anything that kept me from getting on with what I was doing',
        'I felt terrified',
        'I could see nothing in the future to be hopeful about',
        'I felt that life was meaningless',
        'I found myself getting agitated',
        'I was worried about situations in which I might panic and make a fool of myself',
        'I experienced trembling (eg, in the hands)',
        'I found it difficult to work up the initiative to do things',
          
    ];

        for (var i = 0; i < questions.length; i++) {
        document.write('<div class="mb-3 hidden">');
        document.write('<label for="question' + (i + 1) + '" class="form-label mb-4">' + questions[i] + '</label>');
        document.write('<i id="question' + (i + 1) + 'Check" class="bi bi-check text-success"></i>'); 
        document.write('<br>');
        document.write('<div class="options-container mb-5"> ');


        for (var j = 0; j < 4; j++) {
            var optionValue = j;
            var optionText = optionValue;

            document.write('<div class="form-check form-check-inline">');
            document.write('<input class="form-check-input" type="radio" name="question' + (i + 1) + '" id="question' + (i + 1) + 'Option' + optionValue + '" value="' + optionValue + '">');
            document.write('<label class="form-check-label" for="question' + (i + 1) + 'Option' + optionValue + '">' + optionText + '</label>');
            document.write('</div>');
        }
        document.write('</div>');
    }
    function updateCheckmarks() {
    for (var i = 1; i <= 21; i++) {
        var inputElement = document.querySelector('input[name="question' + i + '"]:checked');
        var checkmarkIcon = document.getElementById('question' + i + 'Check');

        if (inputElement) {
            checkmarkIcon.style.display = 'inline-block'; 
        } else {
            checkmarkIcon.style.display = 'none'; 
        }
    }
}


document.querySelectorAll('.form-check-input').forEach(function (input) {
    input.addEventListener('click', updateCheckmarks);
});


    function calculateDASS21ScoresWithReferrals() {
      
        var depressionItems = [3, 5, 10, 13, 16, 17, 21, 24, 26, 31, 34, 37, 38, 42];
        var anxietyItems = [2, 4, 7, 9, 15, 19, 20, 23, 25, 28, 30, 36, 40, 41];
        var stressItems = [1, 6, 8, 11, 12, 14, 18, 22, 27, 29, 32, 33, 35, 39];

        var depressionScore = calculateScore(depressionItems);
        var anxietyScore = calculateScore(anxietyItems);
        var stressScore = calculateScore(stressItems);


         depressionInterpretation = interpretScore(depressionScore);
         anxietyInterpretation = interpretScore(anxietyScore);
         stressInterpretation = interpretScore(stressScore);

   
        var resultMessage = 'Depression: ' + depressionInterpretation +
            '\nAnxiety: ' + anxietyInterpretation +
            '\nStress: ' + stressInterpretation;

  
        var referrals = determineReferrals(depressionInterpretation, anxietyInterpretation, stressInterpretation);
        if (referrals !== '') {
            resultMessage += '\n\nReferrals:\n' + referrals;
        }

        var modalContent = '<p><strong>Depression:</strong> ' + depressionInterpretation + '</p>' +
            '<p><strong>Anxiety:</strong> ' + anxietyInterpretation + '</p>' +
            '<p><strong>Stress:</strong> ' + stressInterpretation + '</p>';

        if (referrals !== '') {
            modalContent += '<p><strong>Referrals:</strong></p>' +
                '<ul>' + referrals.split('\n').filter(Boolean).map(function (referral) {
                    return '<li>' + referral + '</li>';
                }).join('') + '</ul>';
        }

        document.getElementById('assessmentResultModalBody').innerHTML = modalContent;

     
        var modal = new bootstrap.Modal(document.getElementById('assessmentResultModal'));
        modal.show( );


        
    }

    function calculateScore(items) {
    var score = 0;
    for (var i = 0; i < items.length; i++) {
        var inputElement = document.querySelector('input[name="question' + items[i] + '"]:checked');
        if (inputElement) {
            score += parseInt(inputElement.value);
        }
    }
    return score;
}

    function interpretScore(score) {
      
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
    
    function calculateAndSubmit() {
    
     
    
    calculateDASS21ScoresWithReferrals();
    document.getElementById("depression_interpretation").value = depressionInterpretation;
    document.getElementById("anxiety_interpretation").value = anxietyInterpretation;
    document.getElementById("stress_interpretation").value = stressInterpretation;
    
    document.getElementById('result_message').value = resultMessage;
    document.querySelector('.dass21form').submit();
}




   
</script>

<button type="submit" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#assessmentResultModal" id="submitBtn" >Submit</button>


       

    </div>
    
    <div class="modal fade" id="assessmentResultModal" tabindex="-1" aria-labelledby="assessmentResultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assessmentResultModalLabel">Assessment Result</h5>
                
            </div>
            <div class="modal-body" id="assessmentResultModalBody">
                
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-target="#assessmentResultModal"  >Close</button>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="depression_interpretation" name="depression_interpretation">
<input type="hidden" id="anxiety_interpretation" name="anxiety_interpretation">
<input type="hidden" id="stress_interpretation" name="stress_interpretation">
<input type="hidden" id="result_message" name="result_message">
<input type="hidden" id="submission_date" name="date" value="<?php echo $date; ?>">

</form>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>

    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>



</body>
</html>