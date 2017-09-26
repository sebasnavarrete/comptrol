import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AlertsWarningComponent } from './alerts-warning.component';

describe('AlertsWarningComponent', () => {
  let component: AlertsWarningComponent;
  let fixture: ComponentFixture<AlertsWarningComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AlertsWarningComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AlertsWarningComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
