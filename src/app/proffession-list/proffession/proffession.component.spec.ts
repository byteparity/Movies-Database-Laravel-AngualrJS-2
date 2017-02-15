/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { ProffessionComponent } from './proffession.component';

describe('ProffessionComponent', () => {
  let component: ProffessionComponent;
  let fixture: ComponentFixture<ProffessionComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProffessionComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProffessionComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
