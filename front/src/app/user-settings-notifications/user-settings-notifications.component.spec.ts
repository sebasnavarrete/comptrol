import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserSettingsNotificationsComponent } from './user-settings-notifications.component';

describe('UserSettingsNotificationsComponent', () => {
  let component: UserSettingsNotificationsComponent;
  let fixture: ComponentFixture<UserSettingsNotificationsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserSettingsNotificationsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserSettingsNotificationsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
