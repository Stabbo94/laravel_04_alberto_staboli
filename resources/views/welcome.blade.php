<x-layout>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
      </svg>
      <a class="navbar-brand fw-semibold px-2" href="#">Tutto Servizi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/welcome">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/chisiamo">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/servizi">Servizi</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid bg-dark-subtle text-light-emphasis text-center py-3">
    @if(session()->has('emailSent'))
    <div class="alert alert-success">
      {{session('emailSent')}}
    </div>
    @endif
    <h1>Benvenuti nel nostro sito!</h1>
  </div>
  
  <section>
    <div class="container my-5 bg-secondary rounded">
      <form class=" py-3 px-3 text-light" method="post" action="{{route('contactUs')}}">
        @csrf
        <div class="mb-3">
          <h3 class="text-center">Contattaci!</h3>
        </div> 
        <div class="mb-3">
          <label for="email" class="form-label">Inserire l'indirizzo email;</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="user" class="form-label">Inserire nome completo;</label>
          <input type="text" name="user" class="form-control" id="user">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Scrivere il messaggio;</label>
          <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-light">INVIA!</button>
      </form>
    </div>
  </section>
  
  
</x-layout>