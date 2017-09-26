import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AlertsSuccessComponent } from './alerts-success.component';

describe('AlertsSuccessComponent', () => {
  let component: AlertsSuccessComponent;
  let fixture: ComponentFixture<AlertsSuccessComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AlertsSuccessComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AlertsSuccessComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
