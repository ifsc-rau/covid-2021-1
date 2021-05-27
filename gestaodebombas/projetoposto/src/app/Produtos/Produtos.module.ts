import { NgModule, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ProdutosComponent } from './Produtos.component';




@NgModule({
  declarations: [
    ProdutosComponent
  ],
  imports: [
    CommonModule
  ],
  exports: [
    ProdutosComponent
   
  ]

})
export class ProdutosModule { }
