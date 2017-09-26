import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AlertsDefaultComponent } from './alerts-default.component';

describe('AlertsDefaultComponent', () => {
  let component: AlertsDefaultComponent;
  let fixture: ComponentFixture<AlertsDefaultComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AlertsDefaultComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AlertsDefaultComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
