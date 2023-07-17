import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController } from '@ionic/angular';
import { ToastController } from '@ionic/angular';


@Component({
  selector: 'app-dass21-calculator',
  templateUrl: 'dass21-calculator.page.html',
  styleUrls: ['dass21-calculator.page.scss'],
})

export class Dass21CalculatorPage {
  showActivitiesButton = false;
  header : any = []
  setHeader(){
    for(let i = 0 ; i < this.questionTexts.length; i++){

      let new_header = {
        header: ''
      }

    new_header.header = this.questionTexts[i]
    this.header.push(new_header)
    }
  }


  userResponses: number[] = [];

  questionTexts = [
    'I found myself getting upset by quite trivial things',
    'I was aware of dryness of my mouth',
    'I was aware of dryness of my mouth',
    'I experienced breathing difficulty (eg, excessively rapid breathing breathlessness in the absence of physical exertion)',
    'I just could not seem to get going',
    'I tended to over-react to situations',
    'I had a feeling of shakiness (eg, legs going to give way)',
    'I found it difficult to relax',
    'I found myself in situations that made me so anxious I was most relieved when they ended',
    'I felt that I had nothing to look forward to',
    'I found myself getting upset rather easily',
    'I felt that I was using a lot of nervous energy',
    'I felt sad and depressed ',
    'I found myself getting impatient when I was delayed in any way (eg, elevators, traffic lights, being kept waiting)',
    'I had a feeling of faintness',
    'I felt that I had lost interest in just about everything',
    'I felt I was not worth much as a person',
    'I felt that I was rather touchy',
    'I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion',
    'I felt scared without any good reason',
    'I felt that life was not worthwhile',
    'I found it hard to wind down',
    'I had difficulty in swallowing',
    'I couldn not seem to get any enjoyment out of the things I did',
    'I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat)',
  ];

  depressionQuestions = [3, 5, 10,13,16,17,21];
  anxietyQuestions = [2, 4, 7, 9,15,19,20];
  stressQuestions = [1, 6, 8,11,12,14,18];

  showResult = false;
  depressionScore : number =0;
  anxietyScore : number =  0
  stressScore : number = 0
  Depression = ""
  Anxiety = ""
  Stress = ""
  Result = ""

  async calculateDASS21Result() {
    this.depressionScore = 0
    this.anxietyScore = 0
    this.stressScore = 0
    for(let i = 1; i <= this.questionTexts.length; i++){
      if(i == 3 || i == 5 || i == 10 || i == 13 || i == 16 || i == 17 || i == 21){
        this.depressionScore += 2* Number(this.userResponses[i - 1])
      }else if(i == 2 || i == 4 || i ==7 || i == 9 || i == 15 || i == 19 || i == 20){
          this.anxietyScore +=  2*  Number(this.userResponses[i - 1])
      }else if (i == 1|| i == 6 || i == 8 || i == 11 || i == 12 || i == 14 || i == 18){
          this.stressScore += 2*  Number(this.userResponses[i - 1])
      }else {

      }

    }
  
  if (this.depressionScore <= 9) {this.Depression = 'Normal'; 
  if (this.Depression === 'Normal') {
    console.log('Go to activities');}
  } else if (this.depressionScore <= 13) {this.Depression = 'Mild';
  } else if (this.depressionScore <= 20) {this.Depression = 'Moderate';
  } else if (this.depressionScore <= 27) {this.Depression = 'Severe';
  } else if (this.depressionScore >= 28) {this.Depression = 'Extremely Severe';
  } else {
  }
  let Anxiety = '';
  if (this.anxietyScore <= 9) {this.Anxiety = 'Normal';
  } else if (this.anxietyScore <= 13) {this.Anxiety = 'Mild';
  } else if (this.anxietyScore <= 20) {this.Anxiety = 'Moderate';
  } else if (this.anxietyScore <= 27) {this.Anxiety = 'Severe';
  } else if (this.anxietyScore >= 28) {this.Anxiety = 'Extreme Severe';
  } else {
  }
  let Stress = '';
  if (this.stressScore <= 9) {this.Stress = 'Normal';
  } else if (this.stressScore <= 13) {this.Stress = 'Mild';
  } else if (this.stressScore <= 20) {this.Stress = 'Moderate';
  } else if (this.stressScore <= 27) {this.Stress = 'Severe';
  } else if (this.stressScore >= 28) {this.Stress = 'Extreme Severe';
  }  else  {

  }
  let Result = '';
  if (this.Depression === 'Normal' || this.Anxiety === 'Normal' || this.Stress === 'Normal') {this.Result = 'Congratulations! Based on your assessment results, your mental health condition is categorized as either of the two [normal/mild]. It indicates that you are in a positive state of mental well-being. However, its important to continue practicing self-care and maintaining a healthy lifestyle. If you ever need guidance or resources to enhance your overall well-being, please feel free to reach out to the Office of Guidance and Counseling (OGC). They are available to support you whenever needed. Keep up the good work!' }
  else if(this.Depression === 'Mild' || this.Anxiety === 'Mild' || this.Stress === 'Mild') {this.Result = 'Congratulations! Based on your assessment results, your mental health condition is categorized as either of the two [normal/mild]. It indicates that you are in a positive state of mental well-being. However, its important to continue practicing self-care and maintaining a healthy lifestyle. If you ever need guidance or resources to enhance your overall well-being, please feel free to reach out to the Office of Guidance and Counseling (OGC). They are available to support you whenever needed. Keep up the good work!' }
  else if(this.Depression === 'Moderate' || this.Anxiety === 'Moderate' || this.Stress === 'Moderate') {this.Result = 'Based on your assessment results, it appears that your mental health condition is categorized as either of the following [moderate/severe/extremely severe]. We highly recommend that you schedule an appointment with the Office of Guidance and Counseling (OGC) for a further discussion of your results and to access appropriate support. The OGC is here to assist you and provide the necessary resources to ensure your well-being. Please reach out to them as soon as possible. Your mental health matters, and help is available to you. Remember, you are not alone.' }
  else if(this.Depression === 'Severe' || this.Anxiety === 'Severe' || this.Stress === 'Severe') {this.Result = 'Based on your assessment results, it appears that your mental health condition is categorized as either of the following [moderate/severe/extremely severe]. We highly recommend that you schedule an appointment with the Office of Guidance and Counseling (OGC) for a further discussion of your results and to access appropriate support. The OGC is here to assist you and provide the necessary resources to ensure your well-being. Please reach out to them as soon as possible. Your mental health matters, and help is available to you. Remember, you are not alone.' }
  else if(this.Depression === 'Extreme Severe' || this.Anxiety === 'Extreme Severe' || this.Stress === 'Extreme Severe') {this.Result = 'Based on your assessment results, it appears that your mental health condition is categorized as either of the following [moderate/severe/extremely severe]. We highly recommend that you schedule an appointment with the Office of Guidance and Counseling (OGC) for a further discussion of your results and to access appropriate support. The OGC is here to assist you and provide the necessary resources to ensure your well-being. Please reach out to them as soon as possible. Your mental health matters, and help is available to you. Remember, you are not alone.' }
  else  {

} 

    
const alert = await this.alertController.create({
  header: 'Here is your Mental Health Status:',
  message:`${this.Result}`,
 /* message:`
    Depression :       ${this.Depression},\n\n\n
    Anxiety :          ${this.Anxiety},\n\n\n
    Stress :           ${this.Stress},
  `,*/
  buttons: ['DONE']
});

await alert.present();
  }
  constructor(private router: Router,private alertController: AlertController,private toastController: ToastController) {}

navigateToIndexPage() {
  this.router.navigate(['/i']); 
}

ngOnInit(){
  this.setHeader()
  console.log(this.header)
}

async showActivitiesToast() {
  const toast = await this.toastController.create({
    message: 'Go to activities',
    duration: 2000, // Adjust the duration as per your requirement
    position: 'bottom' // Adjust the position as per your requirement
  });

  toast.present();
  if (this.depressionScore <= 9) {
    this.Depression = 'Normal';
    if (this.anxietyScore <= 9) {
      this.Anxiety = 'Normal';
      if (this.stressScore <= 9) {
        this.Stress = 'Normal';
        this.showActivitiesToast();
        this.showActivitiesButton = true; // Display the toast message
        // Perform additional logic here, such as redirecting to activities page
      }
    }
  }
}


}



