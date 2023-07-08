import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-assessment',
  templateUrl: './assessment.page.html',
  styleUrls: ['./assessment.page.scss'],
})

export class AssessmentPage {
  answers: any = {}; 

  submitForm() {
    // Do something with the selected answers
    console.log(this.answers);
    // You can perform further processing, validation, or send the data to a server
  }
}
