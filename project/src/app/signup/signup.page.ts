import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.page.html',
  styleUrls: ['./signup.page.scss'],
})
export class SignupPage {

  name: string;
  srCode: string;
  password: string;
  confirmPassword: string;

  constructor(private router: Router) {
    this.name = ' ';
    this.srCode = '';
    this.password = '';
    this.confirmPassword = '';
  }

  register() {
    // Validate if the password and confirm password match
    if (this.password !== this.confirmPassword) {
      console.log('Passwords do not match');
      return;
    }

    // Perform registration logic here
    // Replace this code with your actual registration implementation

    // Simulating successful registration
    console.log('User registered successfully');
    this.router.navigateByUrl('/login');
  }
}