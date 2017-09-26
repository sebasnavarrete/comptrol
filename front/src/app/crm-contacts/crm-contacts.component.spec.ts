import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CrmContactsComponent } from './crm-contacts.component';

describe('CrmContactsComponent', () => {
  let component: CrmContactsComponent;
  let fixture: ComponentFixture<CrmContactsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CrmContactsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CrmContactsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
