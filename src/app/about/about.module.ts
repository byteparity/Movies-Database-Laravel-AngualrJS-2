import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { JsonpModule } from '@angular/http';
import { AboutRoutingModule } from './about-routing.module'; 
import { AboutComponent } from './about.component';


@NgModule({
  imports: [
    CommonModule,
    AboutRoutingModule,
    BrowserModule,
    JsonpModule
  ],
  providers: [],
  declarations: [AboutComponent]
})
export class AboutModule { }
