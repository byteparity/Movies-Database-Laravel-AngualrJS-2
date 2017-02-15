/* tslint:disable:no-unused-variable */

import { TestBed, async, inject } from '@angular/core/testing';
import { PeopleListService } from './people-list.service';

describe('PeopleListService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [PeopleListService]
    });
  });

  it('should ...', inject([PeopleListService], (service: PeopleListService) => {
    expect(service).toBeTruthy();
  }));
});
