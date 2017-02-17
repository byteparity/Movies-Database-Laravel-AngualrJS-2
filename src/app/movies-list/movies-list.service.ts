import { Injectable } from '@angular/core';
import { Http, Response, Headers } from '@angular/http';
import { Observable } from 'rxjs/Rx';
import 'rxjs/add/operator/map';
import * as globs from '../constant';

@Injectable()
export class MoviesListService {
  
  public baseUrl: string;
  constructor(private http: Http) {
      this.baseUrl = globs.api_url+'api/';
   }

  private getHeaders(){
    let headers = new Headers();
    headers.append('Accept', 'application/json');
    return headers;
  }

  getMovies(searchstr? : string){
    return this.http
      .get(this.baseUrl + 'movies?search='+searchstr, {headers: this.getHeaders()})
      .map(this.extractData).catch(this.handleError);
  }

  getMovieDataOnId(id: number){
     return this.http
      .get(this.baseUrl + 'movies/'+id, {headers: this.getHeaders()})
      .map(this.extractData).catch(this.handleError);
  }

  private extractData(res: Response) {
    return res.json().data || { };
  }

  private handleError (error: Response | any) {
    // In a real world app, we might use a remote logging infrastructure
    let errMsg: string;
    if (error instanceof Response) {
      const body = error.json() || '';
      const err = body.error || JSON.stringify(body);
      errMsg = `${error.status} - ${error.statusText || ''} ${err}`;
    } else {
      errMsg = error.message ? error.message : error.toString();
    }
    console.error(errMsg);
    return Observable.throw(errMsg);
  }

}
