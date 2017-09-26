import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserSettingsExperienceComponent } from './user-settings-experience.component';

describe('UserSettingsExperienceComponent', () => {
  let component: UserSettingsExperienceComponent;
  let fixture: ComponentFixture<UserSettingsExperienceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserSettingsExperienceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserSettingsExperienceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
