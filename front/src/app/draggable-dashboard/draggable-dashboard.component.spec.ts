import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DraggableDashboardComponent } from './draggable-dashboard.component';

describe('DraggableDashboardComponent', () => {
  let component: DraggableDashboardComponent;
  let fixture: ComponentFixture<DraggableDashboardComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DraggableDashboardComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DraggableDashboardComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
