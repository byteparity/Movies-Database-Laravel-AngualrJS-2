import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { JsonpModule } from '@angular/http';
import { Ng2PaginationModule } from 'ng2-pagination';
import { PeopleListRoutingModule } from './people-list-routing.module'; 
import { PeopleListComponent } from './people-list.component';
import { PeopleComponent } from './people/people.component';
import { PeopleListService } from './people-list.service';

@NgModule({
  imports: [
    CommonModule,
    PeopleListRoutingModule,
    BrowserModule,
    JsonpModule,
    Ng2PaginationModule
  ],
  providers: [PeopleListService],
  declarations: [PeopleListComponent, PeopleComponent]
})
export class MoviesListModule { }
