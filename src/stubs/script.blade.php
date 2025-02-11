<script>
(function () {
    let fn = () => {
        let tabs = document.querySelector('.phpdebugbar-tab');
        if (!tabs) return setTimeout(() => fn(), 100);

        let newTab = `
        <div class="phpdebugbar-dropdown m-0 p-0" style="position: relative">
            <a class="phpdebugbar-tab text-dark fw-bold" type="button" id="dropdownMenuButton1" href="#"> PHPSTORM </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="p-2 bg-light"><b>Views</b></li>
                @foreach($views as $view)
        <li><a class="dropdown-item px-3" href="{{ $view['url'] }}">{{ $view['name'] }}</a></li>
                @endforeach

        <li class="p-2 bg-light"><b>Controller</b></li>
        <li><a class="dropdown-item px-3" href="{{ $controller['url'] }}">{{ $controller['name'] }}</a></li>
            </ul>
        </div>

        <style>
        .phpdebugbar-dropdown {
            margin: 0 !important;
            padding: 0 !important;
        }

        .phpdebugbar-dropdown a.phpdebugbar-tab {
            font-weight: bold !important;
         }

        .phpdebugbar-dropdown ul {
          display: none;
         }

        .phpdebugbar-dropdown ul li {
            padding: 5px;
        }

        .phpdebugbar-dropdown:hover ul {
          position: absolute;
          bottom: 10px;
          display: block;
          background: white;
          padding: 10px;
        }
        </style>
    `;
        //add newTab after last tab
        tabs.insertAdjacentHTML('afterend', newTab);
    };

    fn();
})();
</script>
