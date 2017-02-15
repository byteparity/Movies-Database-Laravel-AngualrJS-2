import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { JsonpModule } from '@angular/http';
import { Ng2PaginationModule } from 'ng2-pagination';
import { GenresListRoutingModule } from './genres-list-routing.module'; 
import { GenresListComponent } from './genres-list.component';
import { GenreComponent } from './genre/genre.component';
import { GenresListService } from './genres-list.service';

@NgModule({
  imports: [
    CommonModule,
    GenresListRoutingModule,
    BrowserModule,
    JsonpModule,
    Ng2PaginationModule
  ],
  providers: [GenresListService],
  declarations: [GenresListComponent, GenreComponent]
})
export class GenresListModule { }
