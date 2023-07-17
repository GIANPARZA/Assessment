import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class UserService {
  private users: { username: string; srCode: string; password: string }[] = [];

  authenticate(srCode: string, password: string): boolean {
    const user = this.users.find((u) => u.srCode === srCode && u.password === password);
    return !!user; // Return true if user exists, false otherwise
  }

  isUsernameExists(username: string): boolean {
    const user = this.users.find((u) => u.username === username);
    return !!user; // Return true if user exists, false otherwise
  }

  isEmailExists(srCode: string): boolean {
    const user = this.users.find((u) => u.srCode === srCode);
    return !!user; // Return true if user exists, false otherwise
  }

  createUser(username: string, srCode: string, password: string) {
    this.users.push({ username, srCode, password });
    // Save the user data to storage (e.g., local storage or API call)
  }
}
