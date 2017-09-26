import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserSettingsContactInfoComponent } from './user-settings-contact-info.component';

describe('UserSettingsContactInfoComponent', () => {
  let component: UserSettingsContactInfoComponent;
  let fixture: ComponentFixture<UserSettingsContactInfoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserSettingsContactInfoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserSettingsContactInfoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
