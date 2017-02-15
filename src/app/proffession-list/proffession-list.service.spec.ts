/* tslint:disable:no-unused-variable */

import { TestBed, async, inject } from '@angular/core/testing';
import { ProffessionListService } from './proffession-list.service';

describe('ProffessionListService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [ProffessionListService]
    });
  });

  it('should ...', inject([ProffessionListService], (service: ProffessionListService) => {
    expect(service).toBeTruthy();
  }));
});
