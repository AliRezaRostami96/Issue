@php
    $lists = array (
      0 => array (
        "PageName" => 'All Card Bases',
        "PageLink" => 'all-cards',
        "IconClasses" => 'fal fa-address-card',
      ),
      1 => array (
        "PageName" => 'Add Card Base',
        "PageLink" => 'add-card',
        "IconClasses" => 'fal fa-id-card-alt',
      ),
      2 => array (
        "PageName" => 'All Groups',
        "PageLink" => 'all-groups',
        "IconClasses" => 'fad fa-ball-pile',
      ),
      3 => array (
        "PageName" => 'Add Group',
        "PageLink" => 'add-group',
        "IconClasses" => 'fal fa-users-medical',
      ),
      4 => array (
        "PageName" => 'All Users',
        "PageLink" => 'all-users',
        "IconClasses" => 'fal fa-users',
      ),
      5 => array (
        "PageName" => 'Add User',
        "PageLink" => 'add-user',
        "IconClasses" => 'fal fa-user-plus',
      ),
      6 => array (
        "PageName" => 'Issue Cards',
        "PageLink" => 'issue-cards',
        "IconClasses" => 'fal fa-digital-tachograph',
      ),
      7 => array (
        "PageName" => 'Bulk Group',
        "PageLink" => 'bulk-group',
        "IconClasses" => 'fal fa-table',
      ),
    )
@endphp

<div class="main-menu position-fixed top-0 bottom-0 start-0 shadow text-white">
    <div class="position-relative h-100 w-100 p-2">
        <button
            class="btn-sm shadow-none position-absolute start-100 translate-middle-x text-white we-bg-primary border-0"
            onclick="menuToggle()"
        >
            <i class="fas fa-bars h5 m-0 py-1"></i>
        </button>
        <div class="text-center invisible mb-3 logo">
            <img class="px-5" width="215" height="35" src="https://issue.fajriff.com/assets/img/brand/blue.png"
                 alt="logo">
        </div>
        <ul class="list-unstyled">
            @foreach($lists as $item)
                <li class="mt-3 menu-item">
                    <a href="/{{$item['PageLink']}}"
                       class="text-decoration-none d-inline-block w-100 h-100 text-nowrap overflow-hidden {{(request()->is($item['PageLink'])) ? 'text-white' : 'text-white-50' }}">
                        <i class="{{$item['IconClasses']}} h4 m-0"></i>
                        <span
                            class="d-inline-block overflow-hidden text-start page-name ms-1">{{$item['PageName']}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
