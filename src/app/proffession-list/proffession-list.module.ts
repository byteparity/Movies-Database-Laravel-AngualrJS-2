import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { JsonpModule } from '@angular/http';
import { Ng2PaginationModule } from 'ng2-pagination';
import { ProffessionListRoutingModule } from './proffession-list-routing.module'; 
import { ProffessionListComponent } from './proffession-list.component';
import { ProffessionComponent } from './proffession/proffession.component';
import { ProffessionListService } from './proffession-list.service';

@NgModule({
  imports: [
    CommonModule,
    ProffessionListRoutingModule,
    BrowserModule,
    JsonpModule,
    Ng2PaginationModule
  ],
  providers: [ProffessionListService],
  declarations: [ProffessionListComponent, ProffessionComponent]
})
export class ProffessionListModule { }
