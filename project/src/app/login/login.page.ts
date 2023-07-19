import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { UserService } from '../services/user.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage{
  showPassword: boolean = false;

  toggleShowPassword() {
    this.showPassword = !this.showPassword;
  }


  srCode: string;
  password: string;

  constructor(private userService: UserService, private router: Router) {
    this.srCode = '';
    this.password = '';
  }

  /*login() {
    // Perform login logic here, e.g., calling an authentication service
    // You can replace this code with your actual login implementation
    if (this.srCode === '20-06457' && this.password === 'gian') {this.router.navigateByUrl('/dass21-calculator');
    } else if (this.srCode === '20-09272'&& this.password === 'klaier') {this.router.navigateByUrl('/dass21-calculator');
    } else if (this.srCode === '20-09617'&& this.password === 'admin') {this.router.navigateByUrl('/dass21-calculator');
    } else if (this.srCode === '20-12345'&& this.password === 'admin') {this.router.navigateByUrl('/dass21-calculator');
    } else if (this.srCode === '20-67891'&& this.password === 'admin') {this.router.navigateByUrl('/dass21-calculator');
    } else {
      // Handle login failure, display error message, etc.
      console.log('Invalid username or password' );
    }
  }
}
/*if (this.stressScore <= 9) {this.Stress = 'Normal';
  } else if (this.stressScore <= 13) {this.Stress = 'Mild';
  } else if (this.stressScore <= 20) {this.Stress = 'Moderate';
  } else if (this.stressScore <= 27) {this.Stress = 'Severe';
  } else if (this.stressScore >= 28) {this.Stress = 'Extremely Severe';
  }  else  {

  }*/
  
  login() {
    // Check if the provided username and password are correct
    if (this.userService.authenticate(this.srCode, this.password)) {
      // Redirect to the home page or any other desired page
      this.router.navigateByUrl('/dass21-calculator');
    } else {
      console.log('Invalid username or password');
    }
  }
}


