import { Component } from '@angular/core';

@Component({
  selector: 'app-assessment',
  templateUrl: './assessment.page.html',
  styleUrls: ['./assessment.page.scss'],
})
export class AssessmentPage {
  answers = {
    question1: '',
    question2: '',
  };
  showResult = false;
  sum: number = 0;

  submitAssessment() {
    // You can perform any calculations or logic here based on the answers
    this.sum = parseInt(this.answers.question1, 10) + parseInt(this.answers.question2, 10);
    // For now, we'll just show the result card
    this.showResult = true;
  }
}