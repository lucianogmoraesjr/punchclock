<aside class="sidebar">
  <nav class="menu mt-3">
    <ul class="nav-list">
      <li class="nav-item">
        <a href="/dashboard">
          <i class="icofont-ui-check me-2"></i>
          Registrar ponto
        </a>
      </li>
      <li class="nav-item">
        <a href="/monthly-report">
          <i class="icofont-ui-calendar me-2"></i>
          Relatório Mensal
        </a>
      </li>

      @if ($user->is_admin)
      <li class="nav-item">
        <a href="/manager-report">
          <i class="icofont-chart-histogram me-2"></i>
          Relatório Gerencial
        </a>
      </li>
      <li class="nav-item">
        <a href="/users">
          <i class="icofont-users me-2"></i>
          Usuários
        </a>
      </li>          
      @endif
    </ul>
  </nav>


  <div class="sidebar-widgets">
    <div class="sidebar-widget">
      <i class="icon icofont-hour-glass"></i>
      <div class="info">
        <span class="main" {{ $activeClock === 'workedHours' ? 'active-clock' : '' }}>
          {{ $workedInterval }}
        </span>
        <span class="label text-muted">Horas trabalhadas</span>
      </div>
    </div>
    <div class="separator"></div>
    <div class="sidebar-widget">
      <i class="icon icofont-ui-alarm text-danger"></i>
      <div class="info">
        <span class="main text-danger" {{ $activeClock === 'leaveTime' ? 'active-clock' : '' }}>
          {{ $leaveTime }}
        </span>
        <span class="label text-muted">Hora de Saída</span>
      </div>
    </div>
  </div>
</aside>
