import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common';
import { JsonpModule } from '@angular/http';
import { Ng2PaginationModule } from 'ng2-pagination';
import { MoviesListRoutingModule } from './movies-list-routing.module'; 
import { MoviesListComponent } from './movies-list.component';
import { MovieComponent } from './movie/movie.component';
import { MoviesListService } from './movies-list.service';

@NgModule({
  imports: [
    CommonModule,
    MoviesListRoutingModule,
    BrowserModule,
    JsonpModule,
    Ng2PaginationModule
  ],
  providers: [MoviesListService],
  declarations: [MoviesListComponent, MovieComponent]
})
export class MoviesListModule { }
