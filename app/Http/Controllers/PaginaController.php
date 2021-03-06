<?php

namespace App\Http\Controllers;


class PaginaController extends Controller
{
 
    
    public function inicio()
    {
       return view('pagina');
    }

    public function inicioreal()
    {
       return view('page');
    }

    

    //MENU DE QUIENES SOMOS
    public function bienvenida()
    {
       return view('vistas-paginaweb\quienes-somos\bienvenida');
    }

    public function filosofia()
    {
       return view('vistas-paginaweb\quienes-somos\filosofia');
    }
 

    public function propuesta()
    {
       return view('vistas-paginaweb\quienes-somos\propuesta');
    }

 

   //  SECCION COMUNIDAD

  public function eventos()
    {
       return view('vistas-paginaweb\comunidad\eventos');
    }

    public function testimonios()
    {
       return view('vistas-paginaweb\comunidad\testimonios');
    }

    public function noticias()
    {
       return view('vistas-paginaweb\comunidad\noticias');
    }


    public function blogs()
    {
       return view('vistas-paginaweb\comunidad\blogs');
    }

    // MENU ADMISION

  public function ficha()
    {
       return view('vistas-paginaweb\admision\ficha');
    }

    public function requisitos()
    {
       return view('vistas-paginaweb\admision\requisitos');
    }

    public function admision()
    {
       return view('vistas-paginaweb\admision\admision');
    }

    // MENU CONTACTANOS
    public function contactanos()
    {
       return view('vistas-paginaweb\contactanos\contactanos');
    }

    //NIVELES EDUCATIVOS

   public function inicial()
      {
         return view('vistas-paginaweb\niveles\inicial');
      }

      
   public function primaria()
   {
      return view('vistas-paginaweb\niveles\primaria');
   }


   public function secundaria()
      {
         return view('vistas-paginaweb\niveles\secundaria');
      }

}
