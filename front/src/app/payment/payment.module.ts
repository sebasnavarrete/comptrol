import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { BillingComponent } from './billing/billing.component';
import { InvoicesComponent } from './invoices/invoices.component';
import { OrderComponent } from './order/order.component';
import { OrdersHistoryComponent } from './orders-history/orders-history.component';

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forChild([
      { path: 'billing', component: BillingComponent },
      { path: 'invoices', component: InvoicesComponent },
      { path: 'order', component: OrderComponent },
      { path: 'orders-history', component: OrdersHistoryComponent },
    ])
  ],
  declarations: [
    BillingComponent,
    InvoicesComponent,
    OrderComponent,
    OrdersHistoryComponent
  ]
})
export default class PaymentModule { }
