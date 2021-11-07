
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Homepage')?'active':'' }}" href="/">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'List of Civilization')?'active':'' }}" href="/listofcivilization">List of Civilization</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'List of Unique Unit')?'active':'' }}" href="/listofuniqueunit">List of Unique Units</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Custom Project')?'active':'' }}" href="/createcustomproject">Custom Project Workbench</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === 'About Author')?'active':'' }}" href="/aboutauthor">About Author</a>
        </li>
      </ul>
    </div>
  </nav>