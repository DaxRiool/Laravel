<!DOCTYPE html>
<html lang>
    <head>
        
    </head>
    <body>
        
        @isset($filter)
            <p>Name:{{ $filter->name }}</p>
            <p>Description: {{ $filter->description }}</p>
            <p>Solar System:{{ $filter->solar_system->name }}</p>
        @endisset

        @isset($planets)
        @foreach ($planets as $planet)
             <p>Name: {{ $planet->name }}</p>
             <p>description: {{ $planet->description }}</p>
             <p>Solar System: {{ $planet->solar_system->name }}</p>
             <p>----------------------------------------------</p>
        @endforeach
        @endisset
    </body>
</html>
