/* tslint:disable:no-unused-variable */

import { TestBed, async, inject } from '@angular/core/testing';
import { MoviesListService } from './movies-list.service';

describe('MoviesListService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [MoviesListService]
    });
  });

  it('should ...', inject([MoviesListService], (service: MoviesListService) => {
    expect(service).toBeTruthy();
  }));
});
