import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CrmRolePermissionComponent } from './crm-role-permission.component';

describe('CrmRolePermissionComponent', () => {
  let component: CrmRolePermissionComponent;
  let fixture: ComponentFixture<CrmRolePermissionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CrmRolePermissionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CrmRolePermissionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
