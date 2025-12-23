@props(['active'])
<li class="nav-item">
    <a class="nav-link {{$active ? "active" : ""}}" aria-current="page" {{$attributes}}>{{$slot}}</a>
</li>