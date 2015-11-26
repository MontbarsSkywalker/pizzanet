<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><a href="/">Pizza Net</a></li>
      @if(Auth::check())
      <li class="has-submenu">
        <a href="#">One</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
      @endif
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
      @if(Auth::check())
      <li><button type="button" class="button">Log out</button></li>
      @else
      <li><button type="button" class="button">Log in</button></li>
      @endif
    </ul>
  </div>
</div>