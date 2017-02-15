import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { MaterialModule } from '@angular/material';
import { Ng2PaginationModule } from 'ng2-pagination';
import './rxjs-extensions';

import { AppComponent } from './app.component';
import { AppRoutingModule, routingComponents} from './app.routing';

import { TruncatePipe } from './truncate.pipe';
import { RatingModule } from "ngx-rating";
import * as globs from './constant';


@NgModule({
  declarations: [
    AppComponent,
    routingComponents,
    TruncatePipe
  ],
  imports: [
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    HttpModule,
    MaterialModule.forRoot(),
    AppRoutingModule,
    Ng2PaginationModule,
    RatingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
