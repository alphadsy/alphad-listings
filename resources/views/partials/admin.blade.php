@auth()
    @company
        <ul class="nav flex-column mb-3">
            <li class="nav-item">
                <a href="{{route('companies.edit')}}" class="nav-link text-secondary">edit companies info<i class="fa fa-edit"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="{{route('listings.create')}}">add new listings<i class="fa fa-plus"></i></a>
            </li>
         </ul>
    @company
@endauth