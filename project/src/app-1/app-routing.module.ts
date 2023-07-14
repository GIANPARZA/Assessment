import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: 'login',
    loadChildren: () => import('./login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'signup',
    loadChildren: () => import('./signup/signup.module').then( m => m.SignupPageModule)
  },
  {
    path: 'assessment',
    loadChildren: () => import('./assessment/assessment.module').then( m => m.AssessmentPageModule)
  },
  {
    path: 'assessment-page',
    loadChildren: () => import('./assessment-page/assessment-page.module').then( m => m.AssessmentPagePageModule)
  },
  {
    path: 'page-one',
    loadChildren: () => import('./page-one/page-one.module').then( m => m.PageOnePageModule)
  },
  {
    path: 'page-two',
    loadChildren: () => import('./page-two/page-two.module').then( m => m.PageTwoPageModule)
  },
  {
    path: 'terms-and-condition',
    loadChildren: () => import('./terms-and-condition/terms-and-condition.module').then( m => m.TermsAndConditionPageModule)
  },
  {
    path: 'result',
    loadChildren: () => import('./result/result.module').then( m => m.ResultPageModule)
  },
  {
    path: 'page-four',
    loadChildren: () => import('./page-four/page-four.module').then( m => m.PageFourPageModule)
  },

  {
    path: 'test-two',
    loadChildren: () => import('./test-two/test-two.module').then( m => m.TestTwoPageModule)
  },
  {
    path: 'dass21-calculator',
    loadChildren: () => import('./dass21-calculator/dass21-calculator.module').then( m => m.Dass21CalculatorPageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
