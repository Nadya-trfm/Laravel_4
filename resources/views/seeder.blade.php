@foreach ($seeders as $seeder)
<div>
   {{$seeder->user_id}}
   {{$seeder->product_id}}
   {{$seeder->text}}
   {{$seeder->city}}
   {{$seeder->useful}}
</div>
@endforeach
