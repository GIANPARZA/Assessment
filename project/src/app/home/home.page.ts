import { Component } from '@angular/core';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  constructor(
    private alertCtrl:AlertController,
  ) { }

  ngOnInit() {
  }

  async Alert() {
    const alert = await this.alertCtrl.create ({
      cssClass: 'my-custom-class',
      header: 'Terms and Condition',
      message: 'Please read these Terms and Conditions ("Terms") carefully before using the Batangas State University Mental Health Assessment Application. These Terms apply to all users of the Application.',
      buttons: ['Agree']
        });
        await alert.present();
  }

}
