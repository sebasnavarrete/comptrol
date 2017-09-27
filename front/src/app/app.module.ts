import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import {CalendarComponent} from 'ap-angular2-fullcalendar/src/calendar/calendar';

import { AppComponent } from './app.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { NavbarComponent } from './navbar/navbar.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { CalendarAppComponent } from './calendar-app/calendar-app.component';
import { DraggableDashboardComponent } from './draggable-dashboard/draggable-dashboard.component';
import { UserSettingsComponent } from './user-settings/user-settings.component';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';
import { UserSettingsGeneralComponent } from './user-settings-general/user-settings-general.component';
import { UserSettingsContactInfoComponent } from './user-settings-contact-info/user-settings-contact-info.component';
import { UserSettingsExperienceComponent } from './user-settings-experience/user-settings-experience.component';
import { UserSettingsEducationComponent } from './user-settings-education/user-settings-education.component';
import { UserSettingsOrganizationsComponent } from './user-settings-organizations/user-settings-organizations.component';
import { UserSettingsNotificationsComponent } from './user-settings-notifications/user-settings-notifications.component';
import { UserSettingsBillingComponent } from './user-settings-billing/user-settings-billing.component';
import { ProfileComponent } from './profile/profile.component';
import { CrmContactComponent } from './crm-contact/crm-contact.component';
import { CrmRolePermissionComponent } from './crm-role-permission/crm-role-permission.component';
import { PricingPlanComponent } from './pricing-plan/pricing-plan.component';
import { PricingSubscriptionComponent } from './pricing-subscription/pricing-subscription.component';
import { CrmContactsComponent } from './crm-contacts/crm-contacts.component';
import { CrmUserListComponent } from './crm-user-list/crm-user-list.component';
import { CrmUserGridComponent } from './crm-user-grid/crm-user-grid.component';
import { SharedModule } from './shared/shared.module';
import { FaqComponent } from './faq/faq.component';
import { DocumentationComponent } from './documentation/documentation.component';
import { EmailTemplatesComponent } from './email-templates/email-templates.component';
import { ProfileCustomerComponent } from './profile-customer/profile-customer.component';
import { BlankPageComponent } from './blank-page/blank-page.component';
import { ContactsComponent } from './contacts/contacts.component';
import {RestangularModule, Restangular, RestangularHttp} from 'ngx-restangular';

export function RestangularConfigFactory (RestangularProvider) {
  RestangularProvider.setBaseUrl('http://control:8888/api');
  RestangularProvider.setDefaultHeaders({'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImIxZGJhYzMwNzQ2MWI2NGEyNTk3ZDhlNTk0NWY4M2UzZWEwOGE3YWU3MjZiNzM2NDRkMDY1ODEzNmRmNWZhYjQzMjY2OWU3Y2VjNDU4ZjI4In0.eyJhdWQiOiIxIiwianRpIjoiYjFkYmFjMzA3NDYxYjY0YTI1OTdkOGU1OTQ1ZjgzZTNlYTA4YTdhZTcyNmI3MzY0NGQwNjU4MTM2ZGY1ZmFiNDMyNjY5ZTdjZWM0NThmMjgiLCJpYXQiOjE1MDY0NzU2MDksIm5iZiI6MTUwNjQ3NTYwOSwiZXhwIjoxNTM4MDExNjA5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.CLlsHb-Kpx0Gl5E9BtylJgCHJNpYgWU_OEP6dZcoDP8VuYHsK_SEr_7WV6N8co8M694ZxHDsVPDvBsizTRWi3VXZM8yh_sOwDneppFlNCWv2qUrBbuKEEjMOkFTFWf7GiqgOavYT2wQ2CocN2nMytmEC0egjHWYgRh7-EWg8_8dItMrLZCQnt32Bg2Fwbhe7I5ezrJCWh5tFCTHRZK1Opa1jTdvWvwhYrRvV04pPpnaPZhco_1OA68_KIM8XrV3IDoemwaoY5inU5sUoJCJtLnZb7K-5a_YA_bsVz1uvZVaog7wdOppIqCDoqducWvu_fWoOb_4jafUWO13UeDgsCZPj4EMW0pJ3TdSXGRc7Fd640kru2L8Vn0N9RTzwL_VVHvxRSwrT7WM4pNdE03_a0W1nB6oJGoKIQP6OWdCFLRETFmqBbZJwVeHDxran9NRPo3UFlVCY-6120MX-bkWCwjHxnxhBEMA9yqyZN6ZFBimwblbdLnoz3cSZ3BVEc6DcFkUMGaiYfLb-WGLQD0KKiA-8FsBboEuvoblBvLhGkJCgNlNncXozy0b8teXU9InIQxNkRaQreQdDbe0gCwUkp3kaKpgoxhvAP-EpBooE5Un8mJsfw2tv0XzBVF-SZATO22oweNPTczTkNovfW9eydgpq2K_enQcU745c7b9WU9M'});
}

@NgModule({
  declarations: [
    AppComponent,
    CalendarComponent,
    SidebarComponent,
    NavbarComponent,
    DashboardComponent,
    CalendarAppComponent,
    DraggableDashboardComponent,
    UserSettingsComponent,
    PageNotFoundComponent,
    UserSettingsGeneralComponent,
    UserSettingsContactInfoComponent,
    UserSettingsExperienceComponent,
    UserSettingsEducationComponent,
    UserSettingsOrganizationsComponent,
    UserSettingsNotificationsComponent,
    UserSettingsBillingComponent,
    ProfileComponent,
    CrmContactComponent,
    CrmRolePermissionComponent,
    PricingPlanComponent,
    PricingSubscriptionComponent,
    CrmContactsComponent,
    CrmUserListComponent,
    CrmUserGridComponent,
    FaqComponent,
    DocumentationComponent,
    EmailTemplatesComponent,
    ProfileCustomerComponent,
    BlankPageComponent,
    ContactsComponent
  ],
  imports: [
    RestangularModule.forRoot(RestangularConfigFactory),
    BrowserModule,
    FormsModule,
    HttpModule,
    SharedModule,
    RouterModule.forRoot([
      { path: 'calendar', component: CalendarAppComponent },
      { path: 'draggable-dashboard', component: DraggableDashboardComponent },
      {
        path: 'user-settings',
        component: UserSettingsComponent,
        children: [
          { path: '', redirectTo: 'general', pathMatch: 'full' },
          { path: 'general', component: UserSettingsGeneralComponent },
          { path: 'contact-info', component: UserSettingsContactInfoComponent },
          { path: 'experience', component: UserSettingsExperienceComponent },
          { path: 'education', component: UserSettingsEducationComponent },
          { path: 'organizations', component: UserSettingsOrganizationsComponent },
          { path: 'notifications', component: UserSettingsNotificationsComponent },
          { path: 'billing', component: UserSettingsBillingComponent }
        ]
      },
      { path: 'profile', component: ProfileComponent },
      { path: 'profile-customer', component: ProfileCustomerComponent },
      { path: 'crm/contact', component: CrmContactComponent },
      { path: 'crm/contacts', component: CrmContactsComponent },
      { path: 'crm/users/list', component: CrmUserListComponent },
      { path: 'crm/users/grid', component: CrmUserGridComponent },
      { path: 'crm/roles-and-permissions', component: CrmRolePermissionComponent },
      { path: 'pricing/plans', component: PricingPlanComponent },
      { path: 'pricing/subscriptions', component: PricingSubscriptionComponent },
      { path: 'projects', loadChildren: './projects/projects.module'},
      { path: 'form', loadChildren: './form/form.module'},
      { path: 'uikit', loadChildren: './uikit/uikit.module'},
      { path: 'components', loadChildren: './components/components.module'},
      { path: 'payment', loadChildren: './payment/payment.module'},
      { path: 'email-templates', component: EmailTemplatesComponent },
      { path: 'faq', component: FaqComponent },
      { path: 'documentation', component: DocumentationComponent },
      { path: 'pages/blank', component: BlankPageComponent },
      { path: 'pages/contacts', component: ContactsComponent },
      { path: '', component: DashboardComponent, pathMatch: 'full' },
      { path: '**', component: PageNotFoundComponent }
    ], {
      useHash: false
    })
  ],
  providers: [Restangular, RestangularHttp],
  bootstrap: [AppComponent]
})
export class AppModule { }
