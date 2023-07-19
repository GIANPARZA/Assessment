import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { UserService } from '../services/user.service';

@Component({
  selector: 'app-signup',
  templateUrl: './signup.page.html',
  styleUrls: ['./signup.page.scss'],
})
export class SignupPage {

  showPassword: boolean = false;

  toggleShowPassword() {
    this.showPassword = !this.showPassword;
  }

  name: string;
  srCode: string;
  password: string;
  confirmPassword: string;

  constructor(private userService: UserService, private router: Router) {
    this.name = ' ';
    this.srCode = '';
    this.password = '';
    this.confirmPassword = '';
  }
  formatSrCode(srCode: string): string {
    // Format the srCode as 20-06457
    if (srCode && srCode.length === 7) {
      const year = srCode.substr(0, 2);
      const id = srCode.substr(3);
      return `${year}-${id}`;
    }
    return srCode;
  }

  register() {
    // Validate if the password and confirm password match
    
    if (this.password !== this.confirmPassword) {
      console.log('Passwords do not match');
      return;
    }
    // Check if the username already exists
    if (this.userService.isUsernameExists(this.srCode)) {
      console.log('Username already exists');
      return;
    }

    // Perform registration logic
    this.userService.createUser(this.name, this.srCode, this.password);

    // Perform registration logic here
    // Replace this code with your actual registration implementation

    // Simulating successful registration
    console.log('User registered successfully');
    this.router.navigateByUrl('/login');
  }
}