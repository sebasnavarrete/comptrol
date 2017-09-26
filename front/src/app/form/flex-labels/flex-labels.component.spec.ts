import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FlexLabelsComponent } from './flex-labels.component';

describe('FlexLabelsComponent', () => {
  let component: FlexLabelsComponent;
  let fixture: ComponentFixture<FlexLabelsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FlexLabelsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FlexLabelsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
