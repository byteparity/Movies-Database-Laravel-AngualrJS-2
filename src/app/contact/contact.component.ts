import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators  } from '@angular/forms';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {
  public sendmail: boolean = false;
  complexForm : FormGroup;
  constructor(fb: FormBuilder) { 
    this.complexForm = fb.group({
      // To add a validator, we must first convert the string value into an array. The first item in the array is the default value if any, then the next item in the array is the validator. Here we are adding a required validator meaning that the firstName attribute must have a value in it.
      'name' : [null, Validators.required],
      // We can use more than one validator per field. If we want to use more than one validator we have to wrap our array of validators with a Validators.compose function. Here we are using a required, minimum length and maximum length validator.
      'email': [null, Validators.required],
      'details' : [null, Validators.required]
    })
   }

   submitForm(value: any){
     this.sendmail = true;
      console.log(value);
    }

  ngOnInit() {
    
  }

}
