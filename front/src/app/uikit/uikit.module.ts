import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { SharedModule } from "../shared/shared.module";
import { BootstrapUiComponent } from './bootstrap-ui/bootstrap-ui.component';
import { ColorsComponent } from './colors/colors.component';
import { TypographyComponent } from './typography/typography.component';
import { CardsComponent } from './cards/cards.component';
import { PanelsComponent } from './panels/panels.component';
import { TablesComponent } from './tables/tables.component';
import { TabsComponent } from './tabs/tabs.component';
import { AlertsComponent } from './alerts/alerts.component';
import { AlertsDefaultComponent } from './alerts-default/alerts-default.component';
import { AlertsPrimaryComponent } from './alerts-primary/alerts-primary.component';
import { AlertsInfoComponent } from './alerts-info/alerts-info.component';
import { AlertsSuccessComponent } from './alerts-success/alerts-success.component';
import { AlertsWarningComponent } from './alerts-warning/alerts-warning.component';
import { AlertsDangerComponent } from './alerts-danger/alerts-danger.component';
import { PaginationComponent } from './pagination/pagination.component';
import { ModalComponent } from './modal/modal.component';

@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    RouterModule.forChild([
      { path: 'bootstrap-ui', component: BootstrapUiComponent },
      { path: 'colors', component: ColorsComponent },
      { path: 'typography', component: TypographyComponent },
      { path: 'cards', component: CardsComponent },
      { path: 'panels', component: PanelsComponent },
      { path: 'tables', component: TablesComponent },
      { path: 'tabs', component: TabsComponent },
      {
        path: 'alerts',
        component: AlertsComponent,
        children: [
          { path: '', redirectTo: 'default', pathMatch: 'full' },
          { path: 'default', component: AlertsDefaultComponent },
          { path: 'primary', component: AlertsPrimaryComponent },
          { path: 'info', component: AlertsInfoComponent },
          { path: 'success', component: AlertsSuccessComponent },
          { path: 'warning', component: AlertsWarningComponent },
          { path: 'danger', component: AlertsDangerComponent }
        ]
      },
      { path: 'pagination', component: PaginationComponent },
      { path: 'modal', component: ModalComponent }
    ])
  ],
  declarations: [
    BootstrapUiComponent,
    ColorsComponent,
    TypographyComponent,
    CardsComponent,
    PanelsComponent,
    TablesComponent,
    TabsComponent,
    AlertsComponent,
    AlertsDefaultComponent,
    AlertsPrimaryComponent,
    AlertsInfoComponent,
    AlertsSuccessComponent,
    AlertsWarningComponent,
    AlertsDangerComponent,
    PaginationComponent,
    ModalComponent
  ]
})
export default class UikitModule { }
