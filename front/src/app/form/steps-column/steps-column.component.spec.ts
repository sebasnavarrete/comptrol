import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { StepsColumnComponent } from './steps-column.component';

describe('StepsColumnComponent', () => {
  let component: StepsColumnComponent;
  let fixture: ComponentFixture<StepsColumnComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ StepsColumnComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(StepsColumnComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
