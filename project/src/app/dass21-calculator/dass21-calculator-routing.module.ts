import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { Dass21CalculatorPage } from './dass21-calculator.page';

const routes: Routes = [
  {
    path: '',
    component: Dass21CalculatorPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class Dass21CalculatorPageRoutingModule {}
