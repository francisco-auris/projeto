<header>
    <div class="top text-secondary">
        <div class="container">
            <img src="{{ asset('img/logo.svg') }}" width="42">
            {{ strtoupper(Auth::user()->name) }}

            <div class="box-search float-right">
                
                
                <input type="text" class="input-search" placeholder="Digite para buscar">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="icon-log-out ml-3" style="transform: translateY(5px);"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
            
            
        </div>
    </div>
    <div class="main">
        <div class="container">
               
            <ul class="menu">
                <li class="on">
                    <a href="{{ route('home') }}"><i class="icon-home"></i> Inicio <div class="bar"></div></a>
                </li>
                <li>
                    <i class="icon-layout"></i> Cadastros <div class="bar"></div>
                    <ul>
                        <a href="{{ route('cadastro-cliente') }}"><li><i class="icon-arrow-right"></i> Cliente</li></a>
                        <li><i class="icon-arrow-right"></i> Equipamento</li>
                        <li><i class="icon-arrow-right"></i> Material</li>
                    </ul>
                </li>
                <li>
                    <i class="icon-archive"></i> Estoque <div class="bar"></div>
                    <ul>
                        <li><i class="icon-arrow-right"></i> Entrada de mercadoria</li>
                        <li><i class="icon-arrow-right"></i> Saida de mercadoria</li>
                    </ul>
                </li>
                <li><i class="icon-file-text"></i> N. Serviço <div class="bar"></div></li>
                <li><i class="icon-file-text"></i> O. Serviço <div class="bar"></div></li>
                <li><i class="icon-pie-chart"></i> Dashboards <div class="bar"></div></li>
                <li><i class="icon-bar-chart-2"></i> Relatorios <div class="bar"></div></li>
            </ul>

        </div>
    </div>
</header>