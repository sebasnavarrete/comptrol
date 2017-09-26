import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AlertsDangerComponent } from './alerts-danger.component';

describe('AlertsDangerComponent', () => {
  let component: AlertsDangerComponent;
  let fixture: ComponentFixture<AlertsDangerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AlertsDangerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AlertsDangerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
