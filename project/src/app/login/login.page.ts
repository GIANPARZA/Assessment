import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage{

  srCode: string;
  password: string;

  constructor(private router: Router) {
    this.srCode = '';
    this.password = '';
  }

  login() {
    // Perform login logic here, e.g., calling an authentication service
    // You can replace this code with your actual login implementation
    if (this.srCode === 'admin' && this.password === '123') {
      // Redirect to the desired page upon successful login
      this.router.navigateByUrl('/dass21-calculator');
    } else {
      // Handle login failure, display error message, etc.
      console.log('Invalid username or password');
    }
  }
}


