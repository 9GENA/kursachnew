@extends('layouts.appp')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/blog/img/hs.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1></h1>
                        <h1>HearthStone</h1>
                        <span class="subheading">Самая популярная игра в мире!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {!! Form::open(array('rout' => 'queries.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
            {!! Form::text('search', null,array('class'=>'form-control','placeholder'=>'Поиск карты по названию')) !!}
            {!! Form::submit('Поиск',array('class'=>'btn btn-default')) !!}
         {!! Form::close() !!}
    <!-- Main Content -->
    <div class="container">
        <div class="row">
             <h1>Список карт</h1>                
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($articles as $article)
                <div class="post-preview">
                    <a href="{!! route('blog.show', [
                       'id'   => $article->id,
                       'slug' => str_slug($article->title)
                    ]) !!}">
                        <h2 class="post-title">
                           {!! $article->title !!}
                        </h2>
                        <h3 class="post-subtitle">
                            {!! $article->text !!}
                        </h3>
                    </a>
                    <p class="post-meta">Цена(в пыли)
                        <a href="#">{{$article->price}}</a>
                        
                        </p>
                </div>
                @endforeach
                
                 {{ $articles->links() }}



                <hr>
                <!-- Pager -->
                
            </div>
        </div>
    </div>

@stop