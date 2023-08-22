<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\bootstrap.min.css">
    <title>Emploi du temps</title>
  
</head>
<body class=" bg-primary-subtle">
        <div class="bg-primary col-8 offset-2 mt-5 mb-2">
       <hr>
        <div class="text-center col-6 offset-3 mt-3 mb-5">
                    <img src="\img\logo_esc.jpg" class="img-responsive w-25 h-25 d-block mx-auto rounded-circle" alt="logo">
        </div>
        
        @can('access-admin')
             <div class="text-center text-light mb-3"><h2>CREER UN EMPLOI DU TEMPS</h2></div>
             <div class="text-center col-6 offset-3 text-warning mb-3"><h3><i>Proceder à l'enregistrement des séances de cours pour les filieres</i></h3></div>
        @endcan
    @can('deny-admin')
    <div class="text-center text-primary mb-3"><h2>EMPLOI DU TEMPS</h2></div>
    @endcan

<div class="col-12 mb-2">
@can('access-admin')
    <div class="container mb-5 offset-8 ">
                <a class="btn btn-light position " href="{{ route('nivo.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>  Voir les emplois du temps</a>
            </div>
            @endcan
</div>
 
  <div class="row  mt-5 ">
  @can('access-admin')
    <div class=" col-3 mb-5 offset-2 ">
                <a class="btn btn-dark position " href="{{ route('dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
            <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
            </svg>   RETOUR</a>
            </div>
              
             
               <div class="col-4 offset-3">
                    <a href="{{route('seances.create')}}"><button type="submit" id="lien" class="btn btn-success  fw-bold fst-italic  ">AJOUTER UNE SEANCE</button></a>
                    </div>
                @endcan
                </div>
                
                <!-- <div class="container-fluid mt-2 col-10   table-responsive"> -->
               
      


   
    <!-- <div class="row  ">
                
            <div class="col-3"> 
        
         <input type="date" name="pdebut" value="pdebut" class="form-control" >
        
        </div>
        
           <div class="col-3"><input type="date" name="pfin" value="" class="form-control"></div>
            
                 <div class="col-3">  <select name="filiere" id="" class="form-control">
        <option value="1"> -filiere- </option>
                @foreach ($data as $filiere)
               
                <option value="{{   $filiere->nomfil}}">{{$filiere -> nomfil}}</option>
                @endforeach
            </select>
        </div>
          
                  
          <div class="col-2">
          <select name="semestre" id=""  class="form-control">
           <option value="1"> -semestre- </option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
                <option value="S5">S5</option>
                <option value="S6">S6</option>
                <option value="S7">S7</option>
                <option value="S8">S8</option>
           </select>
          </div>
</div> -->
          
          
         
                <!-- </div> -->
                <!-- </div> -->
                <!-- <div class=" text-center"><h3 >EMPLOI DU TEMPS DE : @foreach($fil as $fil) {{$fil->filiere}} @endforeach </h3><br>
                <span><b>Semaine du </b><input type="date" class=""> <b>au</b> <input type="date"></span>
                <span> <b>Semestre :</b> <select name="semestre" id=""  class="">
           <option value=""> -semestre- </option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
                <option value="S5">S5</option>
                <option value="S6">S6</option>
                <option value="S7">S7</option>
                <option value="S8">S8</option>
           </select></span>
           </div> -->
                <!-- <div class="container-fluid mt-2 col-10   table-responsive">
                  
                
                        <table class="table table-bordered border-primary table-light ">
                            
                                <thead class="table">
                         
                              <th class="text-center bg-warning text-dark">HEURES / JOURS</th>
                            <th class="text-center bg-dark text-light" name="lundi">LUNDI</th>
                            <th class="text-center bg-dark text-light" name="mardi">MARDI</th>
                            <th class="text-center bg-dark text-light" name="mercredi">MERCREDI</th>
                            <th class="text-center  bg-dark text-light" name="jeudi">JEUDI </th>
                            <th class="text-center bg-dark text-light" name="vendredi">VENDREDI </th>
                            <th class="text-center bg-dark text-light" name="samedi">SAMEDI </th>

                            </thead>
                           
                            <!-- les elements du tableaux -->
                         
                            <!-- <tbody>
                           
                        
                            <tr>
                   
                         
                                <th class="text-center bg-warning fst-italic"><b>7h30 - 13h00</b></th>
                            
                                            <td>  @foreach($a as $a) 
                                         
                                                         @if ($a->hfin <= '14:00')
                                                                    
                                                        @if($a->jour == 1)
                                                                        {{$a->salle}} <br>{{$a->module}} <br>{{$a->enseignant}}
                                                        @endif 
                                                        @endif 
                                                        @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($b as $b) 
                                            @if ($b->hfin <= '14:00')
                                                                    
                                                        @if($b->jour == 2)
                                                                        {{$b->salle}} <br>{{$b->module}} <br>{{$b->enseignant}}
                                                    @endif 
                                                 @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($c as $c) 
                                                        @if ($c->hfin <= '14:00')
                                                                    
                                                        @if($c->jour == 3)
                                                                        {{$c->salle}} <br>{{$c->module}} <br>{{$c->enseignant}}
                                                      @endif 
                                                    @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($d as $d) 
                                            @if ($d->hfin <= '14:00')
                                                                    
                                                        @if($d->jour == 4)
                                                                        {{$d->salle}} <br>{{$d->module}} <br>{{$d->enseignant}}
                                                        @endif 
                                                   @endif     
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($e as $e) 
                                            @if ($e->hfin <= '14:00')
                                                                    
                                                        @if($e->jour == 5)
                                                                        {{$e->salle}} <br>{{$e->module}} <br>{{$e->enseignant}}
                                                        @endif 
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($f as $f) 
                                            @if ($f->hfin <= '14:00')
                                                                        
                                                            @if($f->jour == 6)
                                                                            {{$f->salle}} <br>{{$f->module}} <br>{{$f->enseignant}}
                                                        @endif
                                                        @endif
                                                    @endforeach
                                            </td> 
                                           
                            </tr>
                          
                            
                          
                            
                            <tr>
                                 <th class="text-center bg-warning  fst-italic"><b>14h00 - 18h00</b></th>
                          <td>  @foreach($g as $g) 
                                        @if ($g->hfin > '14:00' && $g->hfin <= '18:30')
                                                                            
                                                                    @if($g->jour == 1)
                                                                                    {{$g->salle}} <br>{{$g->module}} <br>{{$g->enseignant}}
                                                                    @endif 
                                                            @endif
                                                                @endforeach
                                                    </td> 
                                            
                                            <td>  @foreach($h as $h) 
                                            @if ($h->hfin > '14:00' && $h->hfin <= '18:30')
                                                                    
                                                                    @if($h->jour == 2)
                                                                                    {{$h->salle}} <br>{{$h->module}} <br>{{$h->enseignant}}
                                                                @endif 
                                                                @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($i as $i) 
                                            @if ($i->hfin > '14:00' && $i->hfin <= '18:30')
                                                                    
                                                                @if($i->jour == 3)
                                                                                {{$i->salle}} <br>{{$i->module}} <br>{{$i->enseignant}}
                                                            @endif 
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($j as $j) 
                                            @if ($j->hfin > '14:00' && $j->hfin <= '18:30')
                                                                    
                                                                    @if($j->jour == 4)
                                                                                    {{$j->salle}} <br>{{$j->module}} <br>{{$j->enseignant}}
                                                                    @endif 
                                                                @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($k as $k) 
                                            @if ($k->hfin > '14:00' && $k->hfin <= '18:30')
                                                                    
                                                                @if($k->jour == 5)
                                                                                {{$k->salle}} <br>{{$k->module}} <br>{{$k->enseignant}}
                                                                @endif 
                                                                @endif 
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($l as $l) 
                                            @if ($l->hfin > '14:00' && $l->hfin <= '18:30')
                                                                        
                                                                    @if($l->jour == 6)
                                                                                    {{$l->salle}} <br>{{$l->module}} <br>{{$l->enseignant}}
                                                                @endif
                                                                @endif
                                                    @endforeach
                                            </td>     
                          
                                      
                                          
                            </tr>
                           
                           
                          
                        <tr>
                  
                                <th class="text-center bg-warning  fst-italic"><b>18h30 - 21h30</b></th>
                                <td>  @foreach($m as $m) 
                                @if ($m->hfin >'19:00' )
                                                                    
                                                                @if($m->jour == 1)
                                                                                {{$m->salle}} <br>{{$m->module}} <br>{{$m->enseignant}}
                                                                @endif 
                                                      @endif
                                                @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($n as $n) 
                                                        
                                            @if ($n->hfin >'19:00' )
                                                                    @if($n->jour == 2)
                                                                                    {{$n->salle}} <br>{{$n->module}} <br>{{$n->enseignant}}
                                                                @endif 
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($o as $o) 
                                            @if ($o->hfin >'19:00' )
                                                                    
                                                                @if($o->jour == 3)
                                                                                {{$o->salle}} <br>{{$o->module}} <br>{{$o->enseignant}}
                                                            @endif 
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($p as $p) 
                                                        
                                            @if ($p->hfin >'19:00' )
                                                                @if($p->jour == 4)
                                                                                {{$p->salle}} <br>{{$p->module}} <br>{{$p->enseignant}}
                                                                @endif 
                                                           @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($q as $q) 
                                            @if ($q->hfin >'19:00' )
                                                                    
                                                                @if($q->jour == 5)
                                                                                {{$q->salle}} <br>{{$q->module}} <br>{{$q->enseignant}}
                                                                @endif 
                                                        @endif    
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($r as $r) 
                                                @if ($r->hfin > '19:00' )
                                                                                
                                                                        @if($r->jour == 6)
                                                                                {{$r->salle}} <br>{{$r->module}} <br>{{$r->enseignant}}
                                                                        @endif
                                                                @endif
                                                        @endforeach
                                            </td>
                              
                               
                                           
                                </tr>
                               
                    </tbody>
                           
                    
                        
            </table> -->
<!-- </div>  -->

<!-- <div class="offset-5">
@can('access-admin')
<form action="{{ route('seances.destroy', $a) }}" method="Post">
      
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg> <b>Retablir l'emploi du temps</b></button>


      </form>

      @endcan
     
      </div> -->
    
    <!-- </div> -->
   


    </div>
        <script src="\js\jquery.min.js"></script>
        <script src="\js\bootstrap.min.js"></script>
        
</body>
</html>