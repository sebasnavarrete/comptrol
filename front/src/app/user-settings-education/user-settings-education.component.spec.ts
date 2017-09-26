import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserSettingsEducationComponent } from './user-settings-education.component';

describe('UserSettingsEducationComponent', () => {
  let component: UserSettingsEducationComponent;
  let fixture: ComponentFixture<UserSettingsEducationComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserSettingsEducationComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserSettingsEducationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
