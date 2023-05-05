import { Component } from '@angular/core';

@Component({
  selector: 'app-holamundo',
  templateUrl: './holamundo.component.html',
  styleUrls: ['./holamundo.component.css']
})
export class HolamundoComponent {

  nombre : string = 'Juan';
  edad : number = 32;
  textoSaludos = '';
  personas : Array<any> = ["juan", "pedro"];
  
  constructor() {
    console.log('Creando un nuevo componente.....');
  }

  eventoClickAgregarPersona() {
    this.personas.push(this.nombre);
  }

  eventoClickSaludar() {
    console.log('Ejecutando evento click...');
    this.textoSaludos = 'Hola!!! ' + this.nombre + ' tenes ' + this.edad + ' años'; 
  }

}
