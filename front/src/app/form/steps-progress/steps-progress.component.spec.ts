import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { StepsProgressComponent } from './steps-progress.component';

describe('StepsProgressComponent', () => {
  let component: StepsProgressComponent;
  let fixture: ComponentFixture<StepsProgressComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ StepsProgressComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(StepsProgressComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
