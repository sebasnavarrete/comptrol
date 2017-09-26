import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PricingSubscriptionComponent } from './pricing-subscription.component';

describe('PricingSubscriptionComponent', () => {
  let component: PricingSubscriptionComponent;
  let fixture: ComponentFixture<PricingSubscriptionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PricingSubscriptionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PricingSubscriptionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
