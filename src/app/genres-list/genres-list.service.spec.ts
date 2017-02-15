/* tslint:disable:no-unused-variable */

import { TestBed, async, inject } from '@angular/core/testing';
import { GenresListService } from './genres-list.service';

describe('GenresListService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [GenresListService]
    });
  });

  it('should ...', inject([GenresListService], (service: GenresListService) => {
    expect(service).toBeTruthy();
  }));
});
