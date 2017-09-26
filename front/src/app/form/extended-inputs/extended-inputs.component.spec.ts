import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExtendedInputsComponent } from './extended-inputs.component';

describe('ExtendedInputsComponent', () => {
  let component: ExtendedInputsComponent;
  let fixture: ComponentFixture<ExtendedInputsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExtendedInputsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExtendedInputsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
