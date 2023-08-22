<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\bootstrap.min.css">
    <title>EMPLOI DU TEMPS</title>
</head>
<body class="bg-primary-subtle">
<div class="col-3 offset-10 mt-3">
        <a href="/" ><button class="btn btn-danger"><b>Deconnexion</b></button> </a>
</div>


<div class="text-center col-6 offset-3 mt-3 mb-1">
                    <img src="\img\logo_esc.jpg" class="img-responsive w-25 h-25 d-block mx-auto rounded-circle" alt="logo">
        </div>
        <h1 class="text-center text-primary">EMPLOI DU TEMPS DE LA SEMAINE</h1>
<div class="row ">

<div class="col-2 offset-1 mb-3"> <a class="btn btn-dark position " href="{{ route('edt.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
            <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
            </svg> RETOUR</a>
            </div>
            

            <!-- Emploi du temps -->
            
            <div class="container-fluid mt-3 col-10 table-responsive">
                  
                
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
                         
                            <tbody>
                           
                        
                            <tr>
                   
                         
                                <th class="text-center bg-warning fst-italic"><b>7h30 - 13h00</b></th>
                            
                                            <td>  @foreach($a as $a) 
                                                    @if($a->filiere == "CI")
                                                         @if ($a->hfin <= '14:00')
                                                                    
                                                        @if($a->jour == 1)
                                                                        {{$a->salle}} <br>{{$a->module}} <br>{{$a->enseignant}}
                                                        @endif 
                                                        @endif 
                                                        @endif
                                                        @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($b as $b) 
                                            @if($b->filiere == "CI")
                                            @if ($b->hfin <= '14:00')
                                                                    
                                                        @if($b->jour == 2)
                                                                        {{$b->salle}} <br>{{$b->module}} <br>{{$b->enseignant}}
                                                    @endif 
                                                 @endif
                                                 @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($c as $c) 
                                            @if($c->filiere == "CI")
                                                        @if ($c->hfin <= '14:00')
                                                                    
                                                        @if($c->jour == 3)
                                                                        {{$c->salle}} <br>{{$c->module}} <br>{{$c->enseignant}}
                                                      @endif 
                                                    @endif
                                                    @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($d as $d) 
                                            @if($d->filiere == "CI")
                                            @if ($d->hfin <= '14:00')
                                                                    
                                                        @if($d->jour == 4)
                                                                        {{$d->salle}} <br>{{$d->module}} <br>{{$d->enseignant}}
                                                        @endif 
                                                   @endif     
                                                   @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($e as $e) 
                                            @if($e->filiere == "CI")
                                            @if ($e->hfin <= '14:00')
                                                                    
                                                        @if($e->jour == 5)
                                                                        {{$e->salle}} <br>{{$e->module}} <br>{{$e->enseignant}}
                                                        @endif 
                                                        @endif
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($f as $f) 
                                            @if($f->filiere == "CI")
                                            @if ($f->hfin <= '14:00')
                                                                        
                                                            @if($f->jour == 6)
                                                                            {{$f->salle}} <br>{{$f->module}} <br>{{$f->enseignant}}
                                                        @endif
                                                        @endif
                                                        @endif
                                                    @endforeach
                                            </td> 
                                           
                            </tr>
                          
                            
                          
                            
                            <tr>
                                 <th class="text-center bg-warning  fst-italic"><b>14h00 - 18h00</b></th>
                          <td>  @foreach($g as $g) 
                          @if($g->filiere == "CI")
                                        @if ($g->hfin > '14:00' && $g->hfin <= '18:30')
                                                                            
                                                                    @if($g->jour == 1)
                                                                                    {{$g->salle}} <br>{{$g->module}} <br>{{$g->enseignant}}
                                                                    @endif 
                                                            @endif
                                                            @endif
                                                                @endforeach
                                                    </td> 
                                            
                                            <td>  @foreach($h as $h) 
                                            @if($h->filiere == "CI")
                                            @if ($h->hfin > '14:00' && $h->hfin <= '18:30')
                                                                    
                                                                    @if($h->jour == 2)
                                                                                    {{$h->salle}} <br>{{$h->module}} <br>{{$h->enseignant}}
                                                                @endif 
                                                                @endif
                                                                @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($i as $i) 
                                            @if($i->filiere == "CI")
                                            @if ($i->hfin > '14:00' && $i->hfin <= '18:30')
                                                                    
                                                                @if($i->jour == 3)
                                                                                {{$i->salle}} <br>{{$i->module}} <br>{{$i->enseignant}}
                                                            @endif 
                                                        @endif
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($j as $j) 
                                            @if($j->filiere == "CI")
                                            @if ($j->hfin > '14:00' && $j->hfin <= '18:30')
                                                                    
                                                                    @if($j->jour == 4)
                                                                                    {{$j->salle}} <br>{{$j->module}} <br>{{$j->enseignant}}
                                                                    @endif 
                                                                @endif
                                                                @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($k as $k) 
                                            @if($k->filiere == "CI")
                                            @if ($k->hfin > '14:00' && $k->hfin <= '18:30')
                                                                    
                                                                @if($k->jour == 5)
                                                                                {{$k->salle}} <br>{{$k->module}} <br>{{$k->enseignant}}
                                                                @endif 
                                                                @endif 
                                                                @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($l as $l) 
                                            @if($l->filiere == "CI")
                                            @if ($l->hfin > '14:00' && $l->hfin <= '18:30')
                                                                        
                                                                    @if($l->jour == 6)
                                                                                    {{$l->salle}} <br>{{$l->module}} <br>{{$l->enseignant}}
                                                                @endif
                                                                @endif
                                                                @endif
                                                    @endforeach
                                            </td>     
                          
                                      
                                          
                            </tr>
                           
                           
                          
                        <tr>
                  
                                <th class="text-center bg-warning  fst-italic"><b>18h30 - 21h30</b></th>
                                <td>  @foreach($m as $m) 
                                @if($m->filiere == "CI")
                                @if ($m->hfin >'19:00' )
                                                                    
                                                                @if($m->jour == 1)
                                                                                {{$m->salle}} <br>{{$m->module}} <br>{{$m->enseignant}}
                                                                @endif 
                                                      @endif
                                                      @endif
                                                @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($n as $n) 
                                            @if($n->filiere == "CI")
                                            @if ($n->hfin >'19:00' )
                                                                    @if($n->jour == 2)
                                                                                    {{$n->salle}} <br>{{$n->module}} <br>{{$n->enseignant}}
                                                                @endif 
                                                        @endif
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($o as $o) 
                                            @if($o->filiere == "CI")
                                            @if ($o->hfin >'19:00' )
                                                                    
                                                                @if($o->jour == 3)
                                                                                {{$o->salle}} <br>{{$o->module}} <br>{{$o->enseignant}}
                                                            @endif 
                                                        @endif
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($p as $p) 
                                            @if($p->filiere == "CI")
                                            @if ($p->hfin >'19:00' )
                                                                @if($p->jour == 4)
                                                                                {{$p->salle}} <br>{{$p->module}} <br>{{$p->enseignant}}
                                                                @endif 
                                                           @endif
                                                           @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($q as $q)
                                            @if($q->filiere == "CI")
                                            @if ($q->hfin >'19:00' )
                                                                    
                                                                @if($q->jour == 5)
                                                                                {{$q->salle}} <br>{{$q->module}} <br>{{$q->enseignant}}
                                                                @endif 
                                                        @endif    
                                                        @endif
                                                    @endforeach
                                            </td> 
                                            
                                            <td>  @foreach($r as $r) 
                                            @if($r->filiere == "CI")
                                                @if ($r->hfin > '19:00' )
                                                                                
                                                                        @if($r->jour == 6)
                                                                                {{$r->salle}} <br>{{$r->module}} <br>{{$r->enseignant}}
                                                                        @endif
                                                                @endif
                                                                @endif
                                                        @endforeach
                                            </td>
                              
                               
                                           
                                </tr>
                               
                    </tbody>
                           
                    
                        
            </table>
</div>
</div>
</body>
</html>