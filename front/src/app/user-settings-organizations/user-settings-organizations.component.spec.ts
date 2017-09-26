import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserSettingsOrganizationsComponent } from './user-settings-organizations.component';

describe('UserSettingsOrganizationsComponent', () => {
  let component: UserSettingsOrganizationsComponent;
  let fixture: ComponentFixture<UserSettingsOrganizationsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserSettingsOrganizationsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserSettingsOrganizationsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
