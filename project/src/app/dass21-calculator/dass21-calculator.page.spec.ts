import { ComponentFixture, TestBed, async } from '@angular/core/testing';
import { Dass21CalculatorPage } from './dass21-calculator.page';

describe('Dass21CalculatorPage', () => {
  let component: Dass21CalculatorPage;
  let fixture: ComponentFixture<Dass21CalculatorPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(Dass21CalculatorPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
