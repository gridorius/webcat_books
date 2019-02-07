<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

     <ul>
       @foreach($users as $user)
          <li>
            {{$user->name}} Книг- {{ $user->books->count() }}
            <ul>
              Книги
               @foreach($user->books as $book)
                <li>{{ $book->name }}</li>
               @endforeach
            </ul>
          </li>
       @endforeach
     </ul>

     <h2>Книги и авторы</h2>
     <ul>
        @foreach($books as $book)
         <li>{{ $book->name }} Автор - {{ $book->author->name }}</li>
        @endforeach
     </ul>
  </body>
</html>
