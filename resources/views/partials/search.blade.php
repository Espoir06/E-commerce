@php
    $categories=\App\models\categorie::all();
@endphp

<div class="col-md-6 col-sm-8">
    <div class="header-search-area">
        <form class="form" action="#" method="GET">
            <div class="product-cat float-left">
                <select class="custom-select" name="category">
                    <option value="all">Toutes les categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->libelle }}">{{ $category->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="product-search float-right">
                <input type="text" name="product_search" placeholder="Search Product" class="form-control">
                <button class="product-search-btn"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
</div>
