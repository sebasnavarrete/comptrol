import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AlertsPrimaryComponent } from './alerts-primary.component';

describe('AlertsPrimaryComponent', () => {
  let component: AlertsPrimaryComponent;
  let fixture: ComponentFixture<AlertsPrimaryComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AlertsPrimaryComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AlertsPrimaryComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
