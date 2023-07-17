import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { Dass21CalculatorPageRoutingModule } from './dass21-calculator-routing.module';

import { Dass21CalculatorPage } from './dass21-calculator.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    Dass21CalculatorPageRoutingModule
  ],
  declarations: [Dass21CalculatorPage]
})
export class Dass21CalculatorPageModule {}
