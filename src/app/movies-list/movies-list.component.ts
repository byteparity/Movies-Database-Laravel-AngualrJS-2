import { Component, EventEmitter, Input, OnInit, Output, Pipe } from '@angular/core';
import { MoviesListService } from './movies-list.service';
import { TruncatePipe } from '../truncate.pipe';
import * as globs from '../constant';

@Component({
  selector: 'app-movie-list',
  templateUrl: './movies-list.component.html',
  providers: [MoviesListService]
})
export class MoviesListComponent implements OnInit {
  public movies: any;
  public loading: boolean = true;
  public imgUrl: string = globs.image_url;
  searchStr: string;
  constructor(private moviesListService: MoviesListService ) { }

  ngOnInit() {
    this.moviesListService.getMovies()
      .subscribe(data => {
        this.movies = data,
        this.loading = false
      });
  }

  searchMovies() {
    this.loading = true;
    this.moviesListService.getMovies(this.searchStr)
    .subscribe(data => {
      this.movies = data,
      this.loading = false
    });
  }

  goTop(){
    window.scrollTo(0,0);
  }

  /*getMovieData(id){
    this.moviesListService.getMovieDataOnId(id)
      .subscribe(movies => this.movies = movies);
  }*/
}
