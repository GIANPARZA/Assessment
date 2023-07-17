import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController } from '@ionic/angular';


@Component({
  selector: 'app-dass21-calculator',
  templateUrl: 'dass21-calculator.page.html',
  styleUrls: ['dass21-calculator.page.scss'],
})


// ... rest of the code ...


export class Dass21CalculatorPage {
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
    'I could not seem to experience any positive feeling at all',
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


    // Add the remaining question texts here
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

  async calculateDASS21Result() {
    this.depressionScore = 0
    this.anxietyScore = 0
    this.stressScore = 0
    for(let i = 1; i <= this.questionTexts.length; i++){
      if(i == 3 || i == 5 || i == 10 || i == 13 || i == 16 || i == 17 || i == 21){
        this.depressionScore += Number(this.userResponses[i - 1])
      }else if(i == 2 || i == 4 || i ==7 || i == 9 || i == 15 || i == 119 || i == 20){
          this.anxietyScore += Number(this.userResponses[i - 1])
      }else if (i == 1|| i == 6 || i == 8 || i == 11 || i == 12 || i == 14 || i == 18){
          this.stressScore += Number(this.userResponses[i - 1])
      }else {

      }

    }
  

    // You can perform further calculations or interpretations based on the scores if required
    /*this.depressionPercentage = (this.depressionScore + this.depressionQuestions.length) * 100;
    this.anxietyPercentage = (this.anxietyScore + this.anxietyQuestions.length) * 100;
    this.stressPercentage = (this.stressScore + this.stressQuestions.length) * 100;*/
  
  if (this.depressionScore <= 9) {this.Depression = 'Normal';
  } else if (this.depressionScore <= 13) {this.Depression = 'Mild';
  } else if (this.depressionScore <= 20) {this.Depression = 'Moderate';
  } else if (this.depressionScore <= 27) {this.Depression = 'Severe';
  } else {this.Depression = 'Extremely Severe';
  }
  let Anxiety = '';
  if (this.anxietyScore <= 9) {this.Anxiety = 'Normal';
  } else if (this.anxietyScore <= 13) {this.Anxiety = 'Mild';
  } else if (this.anxietyScore <= 20) {this.Anxiety = 'Moderate';
  } else if (this.anxietyScore <= 27) {this.Anxiety = 'Severe';
  } else {this.Anxiety = 'Extremely Severe';
  }
  let Stress = '';
  if (this.stressScore <= 9) {this.Stress = 'Normal';
  } else if (this.stressScore <= 13) {this.Stress = 'Mild';
  } else if (this.stressScore <= 20) {this.Stress = 'Moderate';
  } else if (this.stressScore <= 27) {this.Stress = 'Severe';
  } else {this.Stress = 'Extremely Severe';
  }
    console.log('Depression Score:', this.depressionScore);
    console.log('Anxiety Score:', this.anxietyScore);
    console.log('Stress Score:', this.stressScore);
   
    
const alert = await this.alertController.create({
  header: 'Result here:',
  message: `
    Depression :       ${this.Depression},
    Anxiety :          ${this.Anxiety},
    Stress :           ${this.Stress},
  `,
  buttons: ['OK']
});

await alert.present();
  }
  constructor(private router: Router,private alertController: AlertController) {}

navigateToIndexPage() {
  this.router.navigate(['/i']); 
}

ngOnInit(){
  this.setHeader()
  console.log(this.header)
}



}



