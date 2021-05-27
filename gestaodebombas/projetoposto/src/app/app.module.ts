import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ProdutosModule } from './produtos/produtos.module';
import { XyzComponent } from './xyz/xyz.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { ListaprodutosComponent } from './listaprodutos/listaprodutos.component';

@NgModule({
  declarations: [
    AppComponent,
    XyzComponent,
    ListaprodutosComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ProdutosModule,
    NgbModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
