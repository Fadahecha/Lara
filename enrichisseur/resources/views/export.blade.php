
                                                    
<div>
    <p><b>Résultat:</b></p>
    <b class="">{{ $keyword }}</b> 

    @foreach ($terms as $term )
                  
        <i class=""> {{ $term->name_terms }}</i>                                                

    @endforeach
<br><br><hr>
</div>
                                                    
<div>
    <p><b>Combinaisons:</b></p>
    <span>
        @foreach ($phrases as $phrase )
        - {{ $phrase }} <br>
        @endforeach
    </span>
</div>
                                                    