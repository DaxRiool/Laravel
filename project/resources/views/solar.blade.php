<!DOCTYPE html>
<html lang>
    <head>
        
    </head>
    <body>
        
        @isset($filter)
            <p>Name: {{ $filter->name }}</p>
            <p>Age: {{ $filter->age_in_years }}</p>
            <p>Planets: {{ $filter->planets_count }}</p>
        @endisset

        @isset($systems)
            @foreach ($systems as $system)
                <p>Name: {{ $system->name }}</p>
                <p>Age: {{ $system->age_in_years }}</p>
                <p>Planets: {{ $system->planets_count }}</p>
                <p>----------------------------------------------</p>
            @endforeach
        @endisset
    </body>
</html>
