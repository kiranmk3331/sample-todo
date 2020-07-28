
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="{{Request::is('todos') ? 'active' : ''}} nav-link" href="/todos">Home </a>
        </li>
        <li class="nav-item">
          <a class="{{Request::is('todos/create') ? 'active' : ''}} nav-link" href="/todos/create">Create Todo</a>
        </li>
        
      </ul>
      
    </div>
  </nav>







