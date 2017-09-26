import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CrmUserGridComponent } from './crm-user-grid.component';

describe('CrmUserGridComponent', () => {
  let component: CrmUserGridComponent;
  let fixture: ComponentFixture<CrmUserGridComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CrmUserGridComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CrmUserGridComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
